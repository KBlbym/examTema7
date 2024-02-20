<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    public function index()
    {
        $albums = Album::all();
        return view('albums.index', compact('albums'));
    }

    public function store(Request $request)
    {
        Album::create($request->all());
        return redirect()->route('albums.index')
        ->with('success', 'Album created successfully.');
    }

    public function show($id)
    {
        $album = Album::find($id);
        return view('albums.show', compact('album'));
    }

    public function update(Request $request, $id)
    {
        $album = Album::find($id);
        $album->update($request->all());
        return redirect()->route('albums.index')
        ->with('success', 'Album updated successfully.');
    }

    public function create()
    {
         return view('albums.create');
    }
    public function edit($id)
    {
        $album = Album::find($id);
         return view('albums.edit', compact('album'));
    }
    public function destroy($id)
    {
        $album = Album::find($id);
        $album->delete();
         return redirect()->route('albums.index')
        ->with('success', 'Album deleted successfully.');
    }
}
