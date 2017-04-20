<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Season;

class SeasonController extends Controller
{
    public function index() {
        $seasons = Season::all();
    	return view('seasons.index', compact('seasons'));
    }

    public function create() {
    	return view('seasons.create');
    }

    public function store() {

        $this->validate(request(), [
            'year' => 'required|min:4|max:4',
            'seq_no' => 'max:50',
            'name' => 'required|max:25',
        ]);

    	Season::create(request(['year', 'seq_no', 'name']));
    	
    	return back();

    }
}
