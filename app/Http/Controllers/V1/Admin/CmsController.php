<?php

namespace App\Http\Controllers\V1\Admin;

use App\Http\Controllers\Controller;
use App\Models\Translation;
use Exception;
use Illuminate\Http\Request;

class CmsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function List()
    {
        return view('pages.cms');
    }
}
