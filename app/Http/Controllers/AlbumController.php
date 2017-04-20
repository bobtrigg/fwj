<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;

class AlbumController extends Controller
{
    public function index() {
        $albums = Album::all();
    	return view('albums.index', compact('albums'));
    }

    public function create() {
    	return view('albums.create');
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
