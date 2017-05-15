<?php

namespace App\Repositories;
use App\Season;

class Seasons 
{
	const ALL = 1;
	const NEED = 2;

    public function getPriceTotal(Season $season, $mode = self::ALL) {
        $albums = [];
        $priceTotal = 0;

        foreach ($season->tracks as $track) {
            $albums[] = $track->album->id;
        }

        $albums = array_unique($albums);

        foreach($albums as $albumId) {

            $priceTotal += ($mode == self::ALL) ? \App\Album::find($albumId)['price'] : \App\Album::where('have', false)->find($albumId)['price'];
        }

        return sprintf('%.2f', $priceTotal);
    }

}