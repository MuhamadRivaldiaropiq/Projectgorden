<?php

namespace App\Http\Controllers;

use App\Models\card;
use App\Models\galery;
use App\Models\gorden;
use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    public function index()
    {
        $data = gorden::first();
        $date = card::all();
        $dato = galery::all();
        if($data->template == 'template 1'){
            return view('landingpage', compact('data', 'date', 'dato'));
        }else if($data->template == 'template 2'){
            return view('template2', compact('data', 'date', 'dato'));
        }
    }
    public function gordenById(string $id)
    {
        $data = gorden::all();
        $date = card::all();
        return view('landingpage', compact('data', 'date'));
    }

}
