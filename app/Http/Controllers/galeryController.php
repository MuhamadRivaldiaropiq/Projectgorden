<?php

namespace App\Http\Controllers;

use App\Models\galery;
use App\Models\gorden;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class galeryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = galery::all();
        return view('galery.tampil', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = gorden::all();
        return view('galery.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg',
            'pilih_judul' => 'required'
        ]);

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('storage/images'), $imageName);

        $galery = new galery;
        $galery->datagorden_id = $request->pilih_judul;
        $galery->image = $imageName;
        $galery->save();
        return redirect('galery');
    }

    /**
     * Display the specified resource.
     */
    public function show(galery $galery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = galery::find($id);
        $dati = gorden::all();
        return view('galery.edit', compact('data', 'dati'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg',
            'pilih_judul' => 'required'
            
        ]);

        $data = galery::find($id);
         // gambar
    if ($request->hasFile('image')) {

        //upload new image
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('storage/images'), $imageName);

        
        //delete old image
        $path = public_path('storage/images/' . $data->image);
        if(file_exists($path)) {
            unlink($path);
        }
        // Storage::('public/images/' . $data->image);

        //update product with new image
        $data->update([
            'image'         => $imageName,
            'datagorden_id'   => $request->pilih_judul
        ]);

    } else {

        //update product without image
        $data->update([
            'datagorden_id'   => $request->pilih_judul
        ]);
    }
        return redirect()->route('galery.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(galery $galery)
    {
        $path = public_path('storage/images/' . $galery->image);
        if(file_exists($path)) {
            unlink($path);
        }
        $galery->delete();
        return redirect()->route('galery.index');
    }
}
