<?php

namespace App\Http\Controllers\V1\Admin;

use App\Http\Controllers\Controller;
use App\Models\HomeAbout;
use App\Models\Slider;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;

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

        if (File::exists($path)) {
            unlink($path);
        }
        $slider->delete();
        return redirect()->route('home.list')->with('message', 'Delete Successfully..');
    }

    public function homeAboutPage()
    {
        $data = HomeAbout::all();
        return view('Admin.Home.homeAbout', compact('data'));
    }


    public function homeAbout(Request $request)
    {
        $request->validate([

            'content_en' => 'required|min:3',
            'content_hi' => 'required|min:3',
            'content_gu' => 'required|min:3',
            'image' => 'required|mimes:png,jpg,jpeg||max:2048',
            'title_en' => 'required|min:3',
            'title_hi' => 'required|min:3',
            'title_gu' => 'required|min:3',
            'introduction_en' => 'required|min:3',
            'introduction_hi' => 'required|min:3',
            'introduction_gu' => 'required|min:3',
            'objective_en' => 'required|min:3',
            'objective_hi' => 'required|min:3',
            'objective_gu' => 'required|min:3',


        ]);
        try {

            
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('home_about'), $imageName);

            $homeAbout = HomeAbout::updateOrCreate(

                ['status'   => '1'],
                [
                    'content_en' => $request->content_en,
                    'content_hi' => $request->content_hi,
                    'content_gu' => $request->content_gu,
                    'image' => $imageName,
                    'title_en' => $request->title_en,
                    'title_hi' => $request->title_hi,
                    'title_gu' => $request->title_gu,
                    'introduction_en' => $request->introduction_en,
                    'introduction_hi' => $request->introduction_hi,
                    'introduction_gu' => $request->introduction_gu,
                    'objective_en' => $request->objective_en,
                    'objective_hi' => $request->objective_hi,
                    'objective_gu' => $request->objective_gu,

                ]
            );
        
            return redirect()->route('homeabout.page')->with('message', ' Successfully..');

        } catch (Exception $e) {
            return $e->getMessage();
        }

    }














   
}
