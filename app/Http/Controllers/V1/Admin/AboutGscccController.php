<?php

namespace App\Http\Controllers\V1\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutGsccc;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class AboutGscccController extends Controller
{
    public function listPages()
    {
        $data = AboutGsccc::paginate(3);
        return view('Admin.AboutGsccc.listPages_index', compact('data'));
    }

    public function addPages()
    {
       
        return view('Admin.AboutGsccc.addPages');
    }

    public function storePages(Request $request)
    {
        $request->validate([


            'title_en' => 'required|min:3|unique:about_gscccs',
            'title_hi' => 'required|min:3|unique:about_gscccs',
            'title_gu' => 'required|min:3|unique:about_gscccs',
            'image' => 'required|mimes:png,jpg,jpeg||max:2048',
            'content_en' => 'required|min:3',
            'content_hi' => 'required|min:3',
            'content_gu' => 'required|min:3',
           

        ]);
        try {

            $data = new AboutGsccc();

            if ($request->hasFile('image')) {
                $imageName = time() . '.' . $request->image->extension();
                $request->image->move(public_path('AboutGsccc'), $imageName);
                $data->image = $imageName;
            }
            $data->title_en = $request->title_en;
            $data->title_hi = $request->title_hi;
            $data->title_gu = $request->title_gu;
            $data->content_en = $request->content_en;
            $data->content_hi = $request->content_hi;
            $data->content_gu = $request->content_gu;
            $data->slug_en = str::slug($request->title_en);
            $data->slug_hi = str::slug($request->title_hi);
            $data->slug_gu = str::slug($request->title_gu);
            // dd($data);
            $data->save();

            return redirect()->route('about-list')->with('message', 'Add Successfully..');
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function editPages($id )
    {
        $data = AboutGsccc::find($id);
        return view('Admin.AboutGsccc.editPages', compact('data'));

    }
    public function updatePages($id,Request $request)
    {
       
        
        $request->validate([

            'title_en' => 'required|min:3|unique:about_gscccs,title_en,'.$id.',id',
            'title_hi' => 'required|min:3|unique:about_gscccs,title_en,'.$id.',id',
            'title_gu' => 'required|min:3|unique:about_gscccs,title_en,'.$id.',id',
            'image' => 'nullable|mimes:png,jpg,jpeg||max:2048',
            'content_en' => 'required|min:3',
            'content_hi' => 'required|min:3',
            'content_gu' => 'required|min:3',
           
           

        ]);
        try {

            $data = AboutGsccc::find($id);

            if ($request->hasFile('image')) {
                $path = public_path('AboutGsccc/' . $data->image);

                if (File::exists($path)) {
                    unlink($path);
                }
                $imageName = time() . '.' . $request->image->extension();
                $request->image->move(public_path('AboutGsccc'), $imageName);
                $data->image = $imageName;
            }


            $data->title_en = $request->title_en;
            $data->title_hi = $request->title_hi;
            $data->title_gu = $request->title_gu;
            $data->content_en = $request->content_en;
            $data->content_hi = $request->content_hi;
            $data->content_gu = $request->content_gu;
            $data->slug_en = str::slug($request->title_en);
            $data->slug_hi = str::slug($request->title_hi);
            $data->slug_gu = str::slug($request->title_gu);
            $data->save();

            return redirect()->route('about-list')->with('message', ' Successfully..');
        } catch (Exception $e) {
            return $e->getMessage();
        }
       

    }
    public function deletePage($id)
    {
        $data = AboutGsccc::find($id);

        $path = public_path('AboutGsccc/' . $data->image);

        if (File::exists($path)) {
            unlink($path);
        }
        $data->delete();
        return redirect()->route('about-list')->with('message', 'Delete Successfully..');
    }
}
