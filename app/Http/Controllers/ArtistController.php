<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use Illuminate\Http\Request;

class ArtistController extends Controller
{
    public function index()
    {
        $artists = Artist::all();
        return view('artists.index', compact('artists'));
    }

    public function store(Request $request)
    {
        Artist::create($request->all());
        return redirect()->route('artists.index')
        ->with('success', 'Artist created successfully.');
    }

    public function show($id)
    {
        $artist = Artist::find($id);
        return view('artists.show', compact('artist'));
    }

    public function update(Request $request, $id)
    {
        $artist = Artist::find($id);
        $artist->update($request->all());
        return redirect()->route('artists.index')
        ->with('success', 'Artist updated successfully.');
    }

    public function create()
    {
         return view('artists.create');
    }
    public function edit($id)
    {
        $artist = Artist::find($id);
         return view('artists.edit', compact('artist'));
    }
    public function destroy($id)
    {
        $artist = Artist::find($id);
        $artist->delete();
         return redirect()->route('artists.index')
        ->with('success', 'Artist deleted successfully.');
    }
}
