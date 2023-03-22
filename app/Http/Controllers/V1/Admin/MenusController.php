<?php

namespace App\Http\Controllers\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAdminMenu;
use App\Models\Menus;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class MenusController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    function list() {
        // $menu = Menus::get();
        $data = DB::table('menuses')->get()->toArray();

        return view('pages.menus');
    }
    public function AddMenus(Request $request)
    {
        return view('Admin.add_main_menu');
    }

    public function addSubMenu()
    {
        return view('Admin.add_sub_menu');
    }


    public function storeMainMenus(Request $request)
    {
    $request->validate([
        'title_en'=>'required|unique:menuses',
        'title_hi'=>'required|unique:menuses',
        'title_gu'=>'required|unique:menuses',
                
    ],
    [
            'title_hi.required' => trans('menus.title'),
            'description_hi.required' => trans('menus.description'),
            'title_en.required' => trans('menus.title'),
            'description_en.required' => trans('menus.description'),
            'title_gu.required' => trans('menus.title'),
            'description_gu.required' => trans('menus.description'),
    ]);



   
    try {
        $menus = new Menus();
        $slugEn = $menus->slug_en = $request->title_en;
        $slugHi = $menus->slug_hi = $request->title_hi;
        $slugGu = $menus->slug_gu = $request->title_gu;
    
        $menus->user_id = auth()->user()->id;
        $menus->title_hi = $request->title_hi;
        $menus->title_en = $request->title_en;
        $menus->title_gu = $request->title_gu;
    
        $menus->slug_en = str::slug($slugEn);
        $menus->slug_hi = str::slug($slugHi);
        $menus->slug_gu = str::slug($slugGu);
      
        $menus->save();

        return redirect()->back()->with('message', ' Menu Add Successfully');

    } catch (Exception $e) {
        return $e->getMessage();
    }
}


    public function storeSubMenus(StoreAdminMenu $request)
    {
        $request->validate([
            'title_en'=>'required|unique:menuses',
            'title_hi'=>'required|unique:menuses',
            'title_gu'=>'required|unique:menuses',
            'description_en'=>'required',
            'description_hi'=>'required',
            'description_gu'=>'required',

                    
        ],
        [
                'title_hi.required' => trans('menus.title'),
                'description_hi.required' => trans('menus.description'),
                'title_en.required' => trans('menus.title'),
                'description_en.required' => trans('menus.description'),
                'title_gu.required' => trans('menus.title'),
                'description_gu.required' => trans('menus.description'),
        ]);

        try {
            $menus = new Menus();
            $slugEn = $menus->slug_en = $request->title_en;
            $slugHi = $menus->slug_hi = $request->title_hi;
            $slugGu = $menus->slug_gu = $request->title_gu;
            $num = Str::random(1);
            // $uniqueSlugEn = Menus::where('title_en', $slugEn)->count();

            $countData = DB::table('menuses')
                ->where('title_en', $slugEn)
                ->orWhere('title_gu', $slugGu)
                ->orWhere('title_hi', $slugHi)
                ->select(
                    DB::raw('count(title_en) as titleEnglish'),
                    DB::raw('count(title_gu) as titleGujrati'),
                    DB::raw('count(title_hi) as titleHindi'),
                )
                ->get()
                ->toArray();
            // return $countData;
            // return [$countData['0']->titleEnglish,$countData['0']->titleGujrati,$countData['0']->titleHindi];

            if ($countData['0']->titleEnglish > 0) {
                $slugEn = Str::slug($slugEn . '-' . $num);
            }

            if ($countData['0']->titleGujrati > 0) {
                $slugGu = Str::slug($slugGu . '-' . $num);
            }

            if ($countData['0']->titleHindi > 0) {
                $slugHi = Str::slug($slugHi . '-' . $num);
            }

            $menus->user_id = auth()->user()->id;
            $menus->title_hi = $request->title_hi;
            $menus->title_en = $request->title_en;
            $menus->title_gu = $request->title_gu;
            $menus->description_hi = $request->description_hi;
            $menus->description_en = $request->description_en;
            $menus->description_gu = $request->description_gu;
            $menus->slug_en = str::slug($slugEn);
            $menus->slug_hi = str::slug($slugHi);
            $menus->slug_gu = str::slug($slugGu);
            // dd($menus);
            $menus->save();

            return redirect()->route('menus.add')->with('message', ' SubMenu Add Successfully');

        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

}
