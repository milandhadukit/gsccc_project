<?php

namespace App\Http\Controllers\V1\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menus;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class MenusController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function AddMenus(Request $request)
    {
        return view('Admin.add_menu');
    }
}
