<?php

namespace App;

class Format extends Model
{
    public function albums() {
    	return $this->hasMany(Album::class);
    }
}