<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

// Equipments Table Model
class Equipments extends Model
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function records()
    {
    	return $this->hasMany(Records::class);
    }
}
