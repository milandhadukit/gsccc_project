<?php

namespace App\Http\Controllers\V1\Admin;

use App\Http\Controllers\Controller;
use App\Models\HomeAbout;
use App\Models\ImageVideo;
use App\Models\LatestPodcast;
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

            'content_en' => 'required|min:3',
            'content_hi' => 'required|min:3',
            'content_gu' => 'required|min:3',
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

            'content_en' => 'required|min:3',
            'content_hi' => 'required|min:3',
            'content_gu' => 'required|min:3',
            'image' => 'nullable|mimes:png,jpg,jpeg||max:2048',

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

                ['status' => '1'],
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
    public function indexImageVideo()
    {
        $data = ImageVideo::all();
        return view('Admin.Home.ImageVideo_index', compact('data'));
    }

    public function addImageVideo()
    {
        return view('Admin.Home.addImageVideo');
    }

    public function storeImageVideo(Request $request)
    {
        $request->validate([

            "video_link" => "required|url",
            'image' => 'required|mimes:png,jpg,jpeg||max:2048',

        ]);
        try {

            $media = new ImageVideo();
            if ($request->hasFile('image')) {
                $imageName = time() . '.' . $request->image->extension();
                $request->image->move(public_path('Home_Images'), $imageName);
                $media->image = $imageName;
            }
            $media->video_link = $request->video_link;
            $media->save();

            return redirect()->route('filmvideo.index')->with('message', 'Add Successfully..');
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function editImageVideo($id)
    {
        $data = ImageVideo::find($id);
        return view('Admin.Home.edit_imagevideo', compact('data'));

    }
    public function updateImageVideo(Request $request, $id)
    {
        $request->validate([

            "video_link" => "required|url",
            'image' => 'nullable|mimes:png,jpg,jpeg||max:2048',

        ]);
        try {

            $data = ImageVideo::find($id);
            if ($request->hasFile('image')) {
                $path = public_path('Home_Images/' . $data->image);

                if (File::exists($path)) {
                    unlink($path);
                }

                $imageName = time() . '.' . $request->image->extension();
                $request->image->move(public_path('Home_Images'), $imageName);
                $data->image = $imageName;
            }
            $data->video_link = $request->video_link;
            $data->save();

            return redirect()->route('filmvideo.index')->with('message', 'update Successfully..');
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
    public function deleteImageVideo($id)
    {
        $data = ImageVideo::find($id);
        $path = public_path('Home_Images/' . $data->image);

        if (File::exists($path)) {
            unlink($path);
        }
        $data->delete();
        return redirect()->route('filmvideo.index')->with('message', 'Delete Successfully..');
    }

    public function indexProdcast()
    {
        $data = LatestPodcast::whereNot('id', [1])->get();
        return view('Admin.Home.index_prodcast', compact('data'));
    }
    public function addProdcast()
    {

        return view('Admin.Home.add_prodcast');
    }
    public function storeProdcast(Request $request)
    {
        $request->validate([

            "music" => "required|mimes:mp3",
            'image' => 'required|mimes:png,jpg,jpeg||max:2048',
            'content_en' => 'required|min:3',
            'content_hi' => 'required|min:3',
            'content_gu' => 'required|min:3',
            'date' => 'required',

        ]);
        try {

            $data = new LatestPodcast();

            if ($request->hasFile('image')) {
                $imageName = time() . '.' . $request->image->extension();
                $request->image->move(public_path('prodcast_image'), $imageName);
                $data->image = $imageName;
            }

            if ($request->hasFile('music')) {
                $music = time() . '.' . $request->music->extension();
                $request->music->move(public_path('latestProdcast_Audio'), $music);
                $data->music = $request->music;
            }
            $data->content_en = $request->content_en;
            $data->content_hi = $request->content_hi;
            $data->content_gu = $request->content_gu;
            $data->date = $request->date;
            $data->save();

            return redirect()->route('prodcast.index')->with('message', 'Add Successfully..');
        } catch (Exception $e) {
            return $e->getMessage();
        }

    }

    public function prodcastImage()
    {

        return view('Admin.Home.prodcast_image');
    }
    public function prodcastImageManage(Request $request)
    {
        $request->validate([

            'image' => 'required|mimes:png,jpg,jpeg||max:2048',

        ]);
        try {
            $imageGet = LatestPodcast::find(1);

            if ($request->hasFile('image')) {
                $path = public_path('prodcast_image/' . $imageGet->image);
                if (File::exists($path)) {
                    unlink($path);
                }
            }

            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('prodcast_image'), $imageName);

            $data = LatestPodcast::updateOrCreate(

                ['id' => '1'],
                [

                    'image' => $imageName,

                ]
            );

            return redirect()->route('prodcast.index')->with('message', ' Successfully..');

        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function editLatestProdcast($id)
    {
        $data = LatestPodcast::find($id);
        return view('Admin.Home.edit_latestprodcast', compact('data'));
    }
    public function updateLatestProdcast(Request $request, $id)
    {

        $request->validate([

            "music" => "nullable|mimes:mp3",
            'image' => 'nullable|mimes:png,jpg,jpeg||max:2048',
            'content_en' => 'required|min:3',
            'content_hi' => 'required|min:3',
            'content_gu' => 'required|min:3',
            'date' => 'required',

        ]);
        try {

            $data = LatestPodcast::find($id);

            if ($request->hasFile('image')) {

                $path = public_path('prodcast_image/' . $data->image);
                if (File::exists($path)) {
                    unlink($path);
                }
                $imageName = time() . '.' . $request->image->extension();
                $request->image->move(public_path('prodcast_image'), $imageName);
                $data->image = $imageName;
            }

            if ($request->hasFile('music')) {
                $path = public_path('latestProdcast_Audio/' . $data->music);
                if (File::exists($path)) {
                    unlink($path);
                }
                $music = time() . '.' . $request->music->extension();
                $request->music->move(public_path('latestProdcast_Audio'), $music);
                $data->music = $request->music;
            }
            $data->content_en = $request->content_en;
            $data->content_hi = $request->content_hi;
            $data->content_gu = $request->content_gu;
            $data->date = $request->date;
            $data->save();

            return redirect()->route('prodcast.index')->with('message', 'Update Successfully..');
        } catch (Exception $e) {
            return $e->getMessage();
        }

    }

    public function deleteLatestProdcast($id)
    {   
        
        $data = LatestPodcast::find($id);
        $data->delete();
        return redirect()->route('prodcast.index')->with('message', ' Successfully Delete..');


    }
}
