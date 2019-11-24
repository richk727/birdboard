<?php

namespace App;

use App\User;
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

    /**
     * The user assigned to the activity
     * 
     * @return Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the users name
     * 
     * @return string
     */
    public function userName()
    {
        return $this->user->id === auth()->id() ? "You" : $this->user->name;
    }
}
