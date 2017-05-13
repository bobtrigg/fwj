<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Track;
use App\Season;
use App\Album;

class TrackController extends Controller
{
    public function __construct() {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index() {
        $tracks = Track::all();
    	return view('tracks.index', compact('tracks'));
    }

    public function create() {
        $albums = Album::all();
        $seasons = Season::all();
        return view('tracks.create', compact('albums', 'seasons'));
    }

    public function show(Track $track) {
    	$albums = Album::all();
    	$seasons = Season::all();
    	return view('tracks.show', compact('track', 'albums', 'seasons'));
    }

    public function store() {

        $this->validate(request(), [
            'album_id' => 'required',
            'season_id' => 'required',
            'title' => 'required',
        ]);

        Track::create(request(['album_id','season_id','title']));
        
        return back();

    }

    public function update(Track $track) {

        $this->validate(request(), [
            'album_id' => 'required',
            'season_id' => 'required',
            'title' => 'required',
        ]);

    	$track->update(request(['album_id','season_id','title']));
    	
    	return redirect()->route('tracks');

    }

    /**
     * Delete the specified track.
     *
     * @param  Request  $request
     * @param  string  $trackId
     * @return Response
     */
    public function delete(Request $request, $trackId) {
        Track::destroy($trackId);
        return back();
    }
}
