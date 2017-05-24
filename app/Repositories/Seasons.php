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

    public function getAlbumsAndTracks(Season $season) {
        
        $albumsAndTracks = [];
        $tracks = $season->tracks;

        foreach ($tracks as $track) {

            $album = $track->album;

            if ( ! array_key_exists($album->title, $albumsAndTracks)) {
                $albumsAndTracks[$album->title] = [];
                $albumsAndTracks[$album->title]['price'] = $album->price;
                $albumsAndTracks[$album->title]['have'] = $album->have ? true : false;
            }
                
            $albumsAndTracks[$album->title]['tracks'][] = $track->title;
        }

        return $albumsAndTracks;

    }

}