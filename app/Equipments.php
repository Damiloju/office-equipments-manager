<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

// Equipments Table Model
class Equipments extends Model
{
    protected $fillable = ['name','other_name','price'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function records()
    {
    	return $this->hasMany(Records::class);
    }
}
