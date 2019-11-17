<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    /**
     * Attributes guarded against mass assignment 
     * 
     * @var array
     */
    protected $guarded = [];

    /**
     * The attributes that should be cast into native type
     * 
     * @var array
     */
    protected $casts = ['changes' => 'array'];

    /**
     * The model type and id
     * 
     * @return Illuminate\Database\Eloquent\Relations\MorphTo
     */
    public function subject()
    {
        return $this->morphTo();
    }
}
