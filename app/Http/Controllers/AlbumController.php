<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;
use App\Artist;
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
}
