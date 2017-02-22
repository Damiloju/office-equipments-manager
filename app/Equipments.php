<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipments extends Model
{
    public function records() {
    	return $this->hasMany(Records::class);
    }
}
