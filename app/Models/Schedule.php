<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'day',
        'day_title',
        'location_id',
        'time',
        'notes',
        'order'
    ];

    public function location()
    {
        return $this->belongsTo(Location::class);
    }
}
