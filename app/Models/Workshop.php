<?php


namespace App\Models;


use App\Models\Workshop;
use Illuminate\Support\Facades\Date;
use Illuminate\Database\Eloquent\Model;

class Workshop extends Model
{
    /**
     * Get the event for the worksho[].
     */
    public function event()
    {
        return $this->belongsTo(Workshop::class);
    }
}
