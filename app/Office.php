<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

// Office Table Model
class Office extends Model
{
    /**
     * @return string
     */
    public function path ()
    {
    	return '/office/'.$this->id;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function records ()
    {
    	return $this->hasMany(Records::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function equipments()
    {
    	return $this->hasMany(Equipments::class);
    }
}
