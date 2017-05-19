<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;
use App\Artist;
use App\Track;
use App\Format;

class AlbumController extends Controller
{
    public function __construct() {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index() {
        $albums = Album::all();
    	return view('albums.index', compact('albums'));
    }

    public function show(Album $album) {
        $tracks = Track::where('album_id', $album->id)->get();
        return view('albums.show', compact('album', 'tracks'));
    }

    public function create() {
        $artists = Artist::all();
        $formats = Format::all();
        return view('albums.create', compact('artists', 'formats'));
    }

    public function store() {

        $this->validate(request(), [
            'title' => 'required|min:2|max:30',
            'artist_id' => 'required',
            'format_id' => 'required',
            'price' => 'required',
        ]);

        Album::create(request(['title','artist_id','format_id','price','have']));
        
        return back();

    }

    public function edit(Album $album) {
        $artists = Artist::all();
        $formats = Format::all();
        return view('albums.edit', compact('album', 'artists', 'formats'));
    }

    public function update(Album $album) {

        $this->validate(request(), [
            'title' => 'required|min:2|max:30',
            'artist_id' => 'required',
            'format_id' => 'required',
            'price' => 'required',
        ]);

    	$album->update(request(['title','artist_id','format_id','price','have']));
    	
    	return redirect()->route('albums');

    }

    /**
     * Delete the specified album.
     *
     * @param  Request  $request
     * @param  string  $albumId
     * @return Response
     */
    public function delete(Request $request, $albumId) {
        Album::destroy($albumId);
        return back();
    }
}
