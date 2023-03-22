<?php

namespace App\Http\Controllers\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAdminMenu;
use App\Http\Requests\StoreUserRequest;
use App\Models\Menus;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class MenusController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function List()
    {
        // $menu = Menus::get();
        $data = DB::table('menuses')->get()->toArray();

        return view('pages.menus');
    }
    public function AddMenus(Request $request)
    {
        return view('Admin.add_menu');
    }

    public function storeMenus(StoreAdminMenu $request)
    {   
        
      

        try {
            $menus = new Menus();
            $slugEn = $menus->slug_en = $request->title_en;
            $slugHi= $menus->slug_hi = $request->title_hi;
            $slugGu = $menus->slug_gu = $request->title_gu;
            $num = Str::random(1);
            $uniqueSlugEn = Menus::where('title_en', $slugEn)->count();


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


                return [$countData['0']->titleEnglish,$countData['0']->titleGujrati,$countData['0']->titleHindi];
              

            if ($uniqueSlugEn > 0) {
                $slugEn = Str::slug($slugEn . '-' . $num);
            }

                $menus->user_id = auth()->user()->id;
                $menus->title_hi = $request->title_hi;
                $menus->title_en = $request->title_en;
                $menus->title_gu = $request->title_gu;
                $menus->description_hi = $request->description_hi;
                $menus->description_en = $request->description_en;
                $menus->description_gu = $request->description_gu;
                $menus->slug_en=str::slug($slugEn);
                $menus->slug_hi=str::slug($slugHi);
                $menus->slug_gu=str::slug($slugGu);
                dd($menus);
                $menus->save();

                return redirect()->route('menus.add')->with('message', 'Menu Add Successfully');
            
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}
