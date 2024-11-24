<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\gorden;

class templateController extends Controller
{
    public function index() {
        $data = gorden::first();
        return view('pilihtemplate', compact('data'));
    }
    public function pilih() {
        $data = gorden::first();
        dd($data);
        if($data->template = 'template1') {
            return view('landingpage', compact('data'));
        } elseif ($data->template = 'template2'){
            return view('template2', compact('data'));
        }
    }
    public function changeTemplate(Request $request)
    {
        $data = gorden::first();
        $data->template = $request->template;
        $data->save();
        return redirect()->back();
    }
    public function changetheme(Request $request)
    {
        $data = gorden::first();
        $data->theme = $request->theme;
        $data->save();
        return redirect()->back();
    }
}
