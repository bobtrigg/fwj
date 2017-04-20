<?php

namespace App;

class Artist extends Model
{
    public function albums() {
    	return $this->hasMany(Album::class);
    }
}
