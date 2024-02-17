<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Foto;
use Illuminate\Http\Request;

class FotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fotos = Foto::latest()->where('user_id', auth()->id())->paginate(1000000000000000);
        return view('auth.foto.index', compact('fotos'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    $fotos = Album::all();
    return view('auth.foto.create', compact('fotos'));
    }

    public function show($id)
{
    $foto = Foto::findOrFail($id);
    return view('auth.foto.show', compact('foto'));
}

    public function edit(Foto $foto)
    {
        $albums = Album::all(); // Ambil semua album
        return view('auth.foto.edit', ['foto' => $foto, 'albums' => $albums]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   public function store(Request $request)
{
    $request->validate([
        'judul_foto' => 'required',
        'album_id' => 'required|exists:albums,id',
        'user_id' => 'required|exists:users,id',
        'deskripsi_foto' => 'required',
        'tgl_unggah' => 'required',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    $input = $request->all();

    // Retrieve the selected album
    $album = Album::findOrFail($request->album_id);

    // Use album name as the category
    $input['category'] = $album->nama_album;

    if ($image = $request->file('image')) {
        $destinationPath = 'image/';
        $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
        $image->move($destinationPath, $profileImage);
        $input['image'] = $profileImage;
    }

    Foto::create($input);

    return redirect()->route('foto.index')
        ->with('success', 'Foto Berhasil diCreate.');
}

public function update(Request $request, $id)
{
    $request->validate([
        'judul_foto' => 'required',
        'album_id' => 'required|exists:albums,id',
        'user_id' => 'required|exists:users,id',
        'deskripsi_foto' => 'required',
        'tgl_unggah' => 'required',
        'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    // Retrieve the selected album
    $album = Album::findOrFail($request->album_id);

    // Use album name as the category
    $category = $album->nama_album;

    $foto = Foto::findOrFail($id);
    $foto->judul_foto = $request->judul_foto;
    $foto->album_id = $request->album_id;
    $foto->user_id = $request->user_id;
    $foto->deskripsi_foto = $request->deskripsi_foto;
    $foto->tgl_unggah = $request->tgl_unggah;
    $foto->category = $category;

    // Update image if new image is provided
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $destinationPath = 'image/';
        $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
        $image->move($destinationPath, $profileImage);
        $foto->image = $profileImage;
    }

    $foto->save();

    return redirect()->route('foto.index')
        ->with('success', 'Foto Berhasil DiUpdate.');
}





    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Foto  $foto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Foto $foto)
    {
        $foto->delete();

        return redirect()->route('foto.index')
            ->with('success', 'Foto Berhasil Didelete.');
    }
};