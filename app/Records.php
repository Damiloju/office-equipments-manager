<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

// Records Table Model
class Records extends Model
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function office()
    {

    	return $this->belongsTo(Office::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function equipments()
    {

    	return $this->belongsTo(Equipments::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
