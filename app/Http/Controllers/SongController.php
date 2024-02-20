<?php

namespace App\Http\Controllers;

use App\Models\Song;
use Illuminate\Http\Request;

class SongController extends Controller
{
    public function index()
    {
        $songs = Song::all();
        return view('songs.index', compact('songs'));
    }

    public function store(Request $request)
    {
        Song::create($request->all());
        return redirect()->route('songs.index')
        ->with('success', 'Song created successfully.');
    }

    public function show($id)
    {
        $song = Song::find($id);
        return view('songs.show', compact('song'));
    }

    public function update(Request $request, $id)
    {
        $song = Song::find($id);
        $song->update($request->all());
        return redirect()->route('songs.index')
        ->with('success', 'Song updated successfully.');
    }

    public function create()
    {
         return view('songs.create');
    }
    public function edit($id)
    {
        $song = Song::find($id);
         return view('songs.edit', compact('song'));
    }
    public function destroy($id)
    {
        $song = Song::find($id);
        $song->delete();
         return redirect()->route('songs.index')
        ->with('success', 'Song deleted successfully.');
    }
}
