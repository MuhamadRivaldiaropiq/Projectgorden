<?php

namespace App\Http\Controllers;

use App\Models\card;
use App\Models\gorden;
use Illuminate\Http\Request;

class cardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = card::all();
        // dd($data);
        return view('card.tampil', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = gorden::all();
        return view('card.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul_card' => 'required|min:3',
            'isi_card' => 'required|min:3',
            'pilih_judul' => 'required',
            'image' => 'image|mimes:jpg,png,jpeg'
        ]);
        // gambar
        $filename = time() . '.' . $request->image->extension();
        $request->image->move(public_path('storage/images'), $filename);

        $card = new card;
        $card->judul_card = $request->judul_card;
        $card->isi_card = $request->isi_card;
        $card->datagorden_id = $request->pilih_judul;
        $card->image = $filename;
        $card->save();
        return redirect('card');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = card::find($id);
        $date = gorden::all();
        return view('card.detail', compact('data', 'date'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $date = gorden::all();
        $data = card::find($id);
        return view('card.edit', compact('data', 'date'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'judul_card' => 'required|min:3',
            'isi_card' => 'required|min:3',
            'pilih_judul' => 'required',
            'image' => 'image|mimes:jpg,png,jpeg'
        ]);
        $data = card::find($id);
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
            'datagorden_id'   => $request->pilih_judul,
            'judul_card' => $request->judul_card,
            'isi_card' => $request->isi_card,
            'pilih_judul' => $request->pilih_judul
        ]);

    } else {

        //update product without image
        $data->update([
           'datagorden_id'   => $request->pilih_judul,
            'judul_card' => $request->judul_card,
            'isi_card' => $request->isi_card,
            'pilih_judul' => $request->pilih_judul
        ]);
    }
        return redirect()->route('card.index');
    }

        // $card = card::find($id);
        // $card->judul_card = $request->input('judul_card');
        // $card->isi_card = $request->input('isi_card');
        // $card->save();
        // return redirect('card');
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(card $card)
    {
        $path = public_path('storage/images/' . $card->image);
        if(file_exists($path)){
            unlink($path);
        }
        $card->delete();
        return redirect()->route('card.index');
    }
}

