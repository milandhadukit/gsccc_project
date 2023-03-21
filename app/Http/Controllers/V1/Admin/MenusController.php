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
            $slug = $menus->slug = $request->title_hi;
            $num = Str::random(1);
            $uniqueSlugHi = Menus::where('title_hi', $slug)->count();
            if ($uniqueSlugHi > 0) {
                $slug = Str::slug($slug . '-' . $num);

                $menus->user_id = auth()->user()->id;
                $menus->title_hi = $request->title_hi;
                $menus->description_hi = $request->description_hi;
                $menus->save();

                return redirect()->route('menus.add')->with('message', 'Menu Add Successfully');
            }
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}
