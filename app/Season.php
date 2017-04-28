<?php

namespace App;

class Season extends Model
{
    public function tracks() {
    	return $this->hasMany(Track::class);
    }
}
