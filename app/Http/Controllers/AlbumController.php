<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Artist;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    public function index($artist_id)
    {
        if($artist_id){
            $artist = Artist::with('albums.songs')->find($artist_id);
            return view('albums.index', compact('artist'));
        }
        else{
            $artists = Artist::with('albums.songs')->get();
            return view('albums.index', compact('artists'));
        }
    }

    public function show($id)
    {
        $album = Album::find($id);
        return view('albums.show', compact('album'));
    }


    public function destroy($id)
    {
        $album = Album::find($id);
        $album->delete();
        return redirect()->route('albums.index')
            ->with('success', 'Album deleted successfully.');
    }
}
