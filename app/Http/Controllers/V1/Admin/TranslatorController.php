<?php

namespace App\Http\Controllers\V1\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TranslatorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function addTranslate()
    {
        return view('Admin.add_translate');
    }
}
