<?php

namespace App;

class Track extends Model
{
    public function album() {
    	return $this->belongsTo(Album::class);
    }

    public function season() {
    	return $this->belongsTo(Season::class);
    }
}
