<?php

namespace App\Http\Controllers;

use App\Models\galery;
use App\Models\gorden;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class gordenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = gorden::first();
        return view('edit', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = gorden::first();
        return view('create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|min:3',
            'paragraf' => 'required|min:3',
            'image' => 'image|mimes:jpg,png,jpeg',
            'judul_footer' => 'required|min:3',
            'paragraf2' => 'required|min:3',
            'button_tel' => 'required|min:3',
            'button_wa' => 'required|min:3',
            'theme' => 'required|min:3',
            'template' => 'required|min:3'
        ]);
        // gambar
        $filename = time() . '.' . $request->image->extension();
        $request->image->move(public_path('storage/images'), $filename);
        
        $gorden = new gorden;
        $gorden->judul = $request->nama;
        $gorden->paragraf = $request->paragraf;
        $gorden->image = $filename;
        $gorden->judul_footer = $request->judul_footer;
        $gorden->paragraf_footer = $request->paragraf2;
        $gorden->button_tel = $request->button_tel;
        $gorden->button_wa = $request->button_wa;
        $gorden->theme = $request->theme;
        $gorden->template = $request->template;
        $gorden->save();
        return redirect()->route('datagorden.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = gorden::find($id);
        return view('detail', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = gorden::find($id);
        return view('edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'judul' => 'required|min:3', 
            'paragraf' => 'required|min:3',
            'image' => 'image|mimes:jpg,png,jpeg',
            'judul_footer' => 'required|min:3',
            'paragraf2' => 'required|min:3',
            'button_tel' => 'required|min:3',
            'button_wa' => 'required|min:3',
            'theme' => 'required|min:3',
            'template' => 'required|min:3',
        ]);
        $data = gorden::find($id);

        // gambar
    if ($request->hasFile('image')) {

        //upload new image
        $filename = time() . '.' . $request->image->extension();
        $request->image->move(public_path('storage/images'), $filename);
        // $imageName = $request->file('image');
        // $imageName->storeAs('public/images', $imageName->hashName());
        //delete old image
        // Storage::delete('public/images/' . $data->image);

        $path = public_path('storage/images/' . $data->image);
        if(file_exists($path)) {
            unlink($path);
        }
        //update product with new image
        $data->update([
            'image'         => $filename,
            'judul'         => $request->judul,
            'paragraf'      => $request->paragraf,
            'judul_footer'  => $request->judul_footer ,
            'paragraf_footer'  => $request->paragraf2,
            'button_tel'    => $request->button_tel,
            'button_wa'     => $request->button_wa,
            'theme'         => $request->theme,
            'template'      => $request->template
        ]);

    } else {

        //update product without image
        $data->update([
            'judul'         => $request->judul,
            'paragraf'       => $request->paragraf,
            'judul_footer'  => $request->judul_footer ,
            'paragraf_footer'  => $request->paragraf2,
            'button_tel'    => $request->button_tel,
            'button_wa'     => $request->button_wa,
            'theme'         => $request->theme,
            'template'      => $request->template
        ]);
    }
    
        // $data->judul = $request->input('nama');
        // $data->paragraf_1 = $request->input('paragraf1');
        // $data->paragraf_2 = $request->input('paragraf2');
        // $data->save();
        return redirect()->route('datagorden.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(gorden $gorden)
    {
        $path = public_path('storage/images/' . $gorden->image);
        if(file_exists($path)) {
            unlink($path);
        }
        $gorden->delete();
        return redirect()->route('galery.index');
    }
}
