<?php

namespace App\Models;


use App\Models\Workshop;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    /**
     * Get the workshops for the event.
     */
    public function workshops()
    {
        return $this->hasMany(Workshop::class);
    }
}
