<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'name_khmer',
        'description',
        'google_map_link',
        'icon',
        'distance_from_homestay',
        'is_pinned',
        'order'
    ];

    protected $casts = [
        'is_pinned' => 'boolean',
        'distance_from_homestay' => 'decimal:2'
    ];

    public function schedules()
    {
        return $this->hasMany(Schedule::class);
    }
}
