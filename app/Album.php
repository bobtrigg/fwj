<?php

namespace App;

class Album extends Model
{
    public function artist() {
    	return $this->belongsTo(Artist::class);
    }

    public function format() {
    	return $this->belongsTo(Format::class);
    }

}
