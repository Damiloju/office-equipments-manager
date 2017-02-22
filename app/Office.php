<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    public function path () {
    	return '/office/'.$this->id;
    }

    public function records (){

    	return $this->hasMany(Records::class);
    }

    public function equipments(){

    	return $this->hasMany(Equipments::class);
    }
}
