<?php

namespace App\Http\Controllers\V1\Admin;

use App\Http\Controllers\Controller;
use App\Models\Translation;
use Exception;
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
    public function storeTranslate(Request $request)
    {
        $request->validate([
            'group' => 'required',
            'key' => 'required|unique:translation',
            'text_en' => 'required',
            'text_gu' => 'required',
            'text_hi' => 'required',
            
        ]);
        try {
            $translate = new Translation();
            $translate->group = $request->group;
            $translate->key = $request->key;
            $message = ["en" => $request->text_en, "hi" => $request->text_hi, "gu" => $request->text_gu];
            $translate->text = $message;
            $translate->save();
            return redirect()->route('translate.add')->with('message', 'Translate Add Successfully');
        } catch (Exception $e) {
            return $e->getMessage();
        }

    }

    public function listData()
    {
        $data = Translation::latest()->paginate(10);
        // foreach($data as $k ){

        //     $val = $k['text']['en'];
        //     $val = $k['text']['gu'];
        //     $val = $k['text']['hi'];

        //     // echo $val;
        //     // echo "<br>";
        //     dd($val);
        //     // dd($k['text'][0]);
        // }
        // dd($data);
        return view('Admin.List_translatedata',compact('data'));
    }

    public function editTranslate($id)
    {
        $trans=Translation::find($id);
        return view('Admin.edit_translate',compact('trans'));
    }



    public function updateTranslate(Request $request)
    {
        $request->validate([
            'group' => 'required',
            'key' => 'required|unique:translation',
            'text_en' => 'required',
            'text_gu' => 'required',
            'text_hi' => 'required',
            
        ]);
        try {
            $translate = new Translation();
            $translate->group = $request->group;
            $translate->key = $request->key;
            $message = ["en" => $request->text_en, "hi" => $request->text_hi, "gu" => $request->text_gu];
            $translate->text = $message;
            $translate->save();
            return redirect()->route('translate.add')->with('message', 'Translate Update Successfully');
        } catch (Exception $e) {
            return $e->getMessage();
        }

    }
}
