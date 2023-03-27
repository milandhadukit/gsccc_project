<?php

namespace App\Http\Controllers\V1\Admin;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function indexDeshboard()
    {
        return view('Admin.Deshboard');
    }
}
