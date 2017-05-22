<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Season;
use App\Repositories\Seasons;


class SeasonController extends Controller
{
    public function __construct() {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index(Seasons $seasonRepo) {
        $seasons = Season::all();
    	return view('seasons.index', compact('seasons', 'seasonRepo'));
    }

    public function show(Season $season, Seasons $seasons) {
        $priceTotal = $seasons->getPriceTotal($season, Seasons::ALL);
        $outstandingPriceTotal = $seasons->getPriceTotal($season, Seasons::NEED);
        return view('seasons.show', compact('season', 'priceTotal', 'outstandingPriceTotal'));
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

    public function edit(Season $season, Seasons $seasons) {
        $priceTotal = $seasons->getPriceTotal($season, Seasons::ALL);
        $outstandingPriceTotal = $seasons->getPriceTotal($season, Seasons::NEED);
        return view('seasons.show', compact('season', 'priceTotal', 'outstandingPriceTotal'));
    }

    public function update(Season $season) {

        $this->validate(request(), [
            'year' => 'required|min:4|max:4',
            'seq_no' => 'max:50',
            'name' => 'required|max:25',
        ]);

    	$season->update(request(['year', 'seq_no', 'name']));
    	
    	return redirect()->route('seasons');

    }

    /**
     * Delete the specified season.
     *
     * @param  Request  $request
     * @param  string  $seasonId
     * @return Response
     */
    public function delete(Request $request, $seasonId) {
        Season::destroy($seasonId);
        return back();
    }

}
