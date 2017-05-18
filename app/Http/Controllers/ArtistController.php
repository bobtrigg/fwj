<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artist;
use App\Album;

class ArtistController extends Controller
{
    public function __construct() {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index() {
        $artists = Artist::all();
    	return view('artists.index', compact('artists'));
    }

    public function show(Artist $artist) {
        $albums = Album::where('artist_id', $artist->id)->get();
        return view('artists.show', compact('artist', 'albums'));
    }

    public function create() {
    	return view('artists.create');
    }

    public function store() {

        $this->validate(request(), [
            'name' => 'required|min:2|max:30'
        ]);

        Artist::create(request(['name']));
        
        return back();

    }
    
    public function edit(Artist $artist) {
        return view('artists.edit', compact('artist'));
    }

    public function update(Artist $artist) {
        
        $this->validate(request(), [
            'name' => 'required|min:2|max:30'
        ]);

    	$artist->update(request(['name']));
    	
    	return redirect()->route('artists');

    }
    
    /**
     * Delete the specified artist.
     *
     * @param  Request  $request
     * @param  string  $artistId
     * @return Response
     */
    public function delete(Request $request, $artistId) {
        Artist::destroy($artistId);
        return back();
    }
}
