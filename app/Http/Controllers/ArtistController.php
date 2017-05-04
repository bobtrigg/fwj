<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artist;

class ArtistController extends Controller
{
    public function __construct() {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index() {
        $artists = Artist::all();
    	return view('artists.index', compact('artists'));
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
