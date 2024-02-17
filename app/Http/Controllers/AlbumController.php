<?php
namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    public function index()
    {
        $albums = Album::latest()->where('user_id', auth()->id())->paginate(1000000000000000);

        return view('auth.album.index', compact('albums'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('auth.album.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_album' => 'required',
            'deskripsi' => 'required',
            'tanggal_dibuat' => 'required|date',
            // Add other validation rules for the fields in your Album model
        ]);

        // Create a new instance of Album model and assign values from the request
        $album = new Album();
        $album->nama_album = $request->nama_album;
        $album->deskripsi = $request->deskripsi;
        $album->tanggal_dibuat = $request->tanggal_dibuat;
        // Assign user_id from the currently authenticated user, assuming you have authentication set up
        $album->user_id = auth()->user()->id;
        $album->save();

        return redirect()->route('album.index')
            ->with('success', 'Album Berhasil Ditambahkan.');
    }

    public function show($id)
{
    $album = Album::findOrFail($id);
    return view('auth.album.show', compact('album'));
}


    public function edit(Album $album)
    {
        return view('auth.album.edit', compact('album'));
    }

    public function update(Request $request, Album $album)
    {
        $request->validate([
            'nama_album' => 'required',
            'deskripsi' => 'required',
            'tanggal_dibuat' => 'required',
            // Add other validation rules for the fields in your Album model
        ]);

        $input = $request->all();

        // Handle image upload if needed

        $album->update($input);

        return redirect()->route('album.index')
            ->with('success', 'Album Berhasil DiUpdate');
    }

    public function destroy(Album $album)
    {
        $album->delete();

        return redirect()->route('album.index')
            ->with('success', 'Album Berhasil DiDelete`');
    }
}