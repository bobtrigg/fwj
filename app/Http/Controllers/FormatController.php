<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Format;

class FormatController extends Controller
{
    public function __construct() {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index() {
        $formats = Format::all();
    	return view('formats.index', compact('formats'));
    }

    public function show(Format $format) {
        return view('formats.show', compact('format'));
    }

   public function create() {
    	return view('formats.create');
    }

    public function store() {

        $this->validate(request(), [
            'format' => 'required|min:5|max:20'
        ]);

        Format::create(request(['format']));
        
        return redirect()->route('formats');
    }
    public function update(Format $format) {

        $this->validate(request(), [
            'format' => 'required|min:5|max:20'
        ]);

    	$format->update(request(['format']));
    	
    	return redirect()->route('formats');
    }
    
    /**
     * Delete the specified format.
     *
     * @param  Request  $request
     * @param  string  $formatId
     * @return Response
     */
    public function delete(Request $request, $formatId) {
        Format::destroy($formatId);
        return back();
    }
}
