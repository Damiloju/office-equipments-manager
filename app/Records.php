<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

// Records Table Model
class Records extends Model
{
    public function office(){

    	return $this->belongsTo(Office::class);
    }

    public function equipments(){

    	return $this->belongsTo(Equipments::class);
    }
}
