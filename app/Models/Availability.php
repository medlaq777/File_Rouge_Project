<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Studios;

class Availability extends Model
{
    /** @use HasFactory<\Database\Factories\AvailabilityFactory> */
    use HasFactory;
    protected $fillable = [
        'user_id',
        'studio_id',
        'date',
        'start_time',
        'end_time',
        'status',
    ];
    protected $casts = [
        'start_time' => 'datetime',
        'end_time' => 'datetime',
    ];
    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function studio() : BelongsTo
    {
        return $this->belongsTo(Studios::class);
    }

}
