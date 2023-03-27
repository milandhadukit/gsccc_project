<?php

namespace App\Http\Controllers\V1\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TeamAboutGsccc;
use Illuminate\Support\Str;
use Exception;

class TeamAboutGscccController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function listTeam()
    {
        $data=TeamAboutGsccc::paginate(5);
        return view('Admin.AboutGsccc.Team.list_team',compact('data'));
    }

    public function addTeam()
    {
        
        return view('Admin.AboutGsccc.Team.addTeam');
    }
    public function storeTeam(Request $request)
    {
        $request->validate([


            'title_en' => 'required|min:3|unique:team_about_gscccs',
            'title_hi' => 'required|min:3|unique:team_about_gscccs',
            'title_gu' => 'required|min:3|unique:team_about_gscccs',
            'image' => 'required|mimes:png,jpg,jpeg||max:2048',
            'name_en' => 'required|min:3',
            'name_hi' => 'required|min:3',
            'name_gu' => 'required|min:3',
            'role_en' => 'required|min:3',
            'role_hi' => 'required|min:3',
            'role_gu' => 'required|min:3',
            'address_en' => 'required|min:3',
            'address_hi' => 'required|min:3',
            'address_gu' => 'required|min:3',
            'email'=>'required|unique:team_about_gscccs',
            'mobile_number'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',

        ]);
        try {

            $data = new TeamAboutGsccc();

            if ($request->hasFile('image')) {
                $imageName = time() . '.' . $request->image->extension();
                $request->image->move(public_path('AboutGsccc'), $imageName);
                $data->image = $imageName;
            }
            $data->title_en = $request->title_en;
            $data->title_hi = $request->title_hi;
            $data->title_gu = $request->title_gu;
            $data->name_en = $request->name_en;
            $data->name_hi = $request->name_hi;
            $data->name_gu = $request->name_gu;
            $data->email = $request->email;
            $data->mobile_number = $request->mobile_number;
            $data->address_en = $request->address_en;
            $data->address_hi = $request->address_hi;
            $data->address_gu = $request->address_gu;
            $data->role_en = $request->role_en;
            $data->role_hi = $request->role_hi;
            $data->role_gu = $request->role_gu;
            $data->page=$request->page;
            $data->type=$request->type;
            // dd($data);
          
            $data->save();

            return redirect()->route('about.list.team')->with('message', 'Add Successfully..');
        } catch (Exception $e) {
            return $e->getMessage();
        }
        
    }
}
