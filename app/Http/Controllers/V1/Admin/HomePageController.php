<?php

namespace App\Http\Controllers\V1\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class HomePageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function sliderIndex()
    {
        $sliderData = Slider::all();
        return view('Admin.Home.slider_index', compact('sliderData'));

    }
    public function sliderAdd()
    {

        return view('Admin.Home.add_slider');

    }

    public function sliderStore(Request $request)
    {
        $request->validate([

            'content_en' => 'nullable|min:3',
            'content_hi' => 'nullable|min:3',
            'content_gu' => 'nullable|min:3',
            'image' => 'required|mimes:png,jpg,jpeg||max:2048',

        ]);
        try {
            $slider = new Slider();
            $slider->content_en = $request->content_en;
            $slider->content_hi = $request->content_hi;
            $slider->content_gu = $request->content_gu;
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('slider'), $imageName);
            $slider->image = $imageName;
            $slider->save();
            return redirect()->route('home.list')->with('message', 'Add Successfully..');
        } catch (Exception $e) {
            return $e->getMessage();
        }

    }
    public function editSlider($id, Request $request)
    {

        $slider = Slider::find($id);
        return view('Admin.Home.edit_slider', compact('slider'));

    }
    public function updateSlider(Request $request, $id)
    {

        $request->validate([

            'content_en' => 'nullable|min:3',
            'content_hi' => 'nullable|min:3',
            'content_gu' => 'nullable|min:3',
            'image' => 'required|mimes:png,jpg,jpeg||max:2048',

        ]);
        try {
            $slider = Slider::find($id);
            $path = public_path('slider/' . $slider->image);

            if (File::exists($path)) {
                unlink($path);
            }

            $slider->content_en = $request->content_en;
            $slider->content_hi = $request->content_hi;
            $slider->content_gu = $request->content_gu;
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('slider'), $imageName);
            $slider->image = $imageName;
            $slider->save();
            return redirect()->route('home.list')->with('message', 'Update Successfully..');
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
    public function deleteSlider($id)
    {
        $slider = Slider::find($id);
        $path = public_path('slider/' . $slider->image);
        dd($path);
        if (File::exists($path)) {
            unlink($path);
        }
        $slider->delete();
        return redirect()->route('home.list')->with('message', 'Delete Successfully..');
    }
}
