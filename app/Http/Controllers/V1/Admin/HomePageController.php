<?php

namespace App\Http\Controllers\V1\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use Illuminate\Mail\Mailables\Content;

class HomePageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function sliderIndex()
    {
        $sliderData=Slider::all();
        return view('Admin.Home.slider_index',compact('sliderData'));

    }
    public function sliderAdd()
    {
       
        return view('Admin.Home.add_slider');

    }

    public function sliderStore(Request $request)
    {
        $request->validate([

            'content_en'=>'nullable|min:3',
            'content_hi'=>'nullable|min:3',
            'content_gu'=>'nullable|min:3',
            'image'=>'required|mimes:png,jpg','jpeg',


        ]);

        $slider= new Slider();
        $slider->content_en=$request->content_en;
        $slider->content_hi=$request->content_hi;
        $slider->content_gu=$request->content_gu;
        $slider->save();
        return redirect()->route('home.list')->with('message','Add Successfully..');

    }
}
