<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Studios extends Model
{
    /** @use HasFactory<\Database\Factories\StudiosFactory> */
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'description',
        'address',
        'location',
        'price',
        'availability',
        'start_date',
        'end_date',
    ];
    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
        'availability' => 'boolean',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function equipements(): HasMany
    {
        return $this->hasMany(Equipement::class);
    }
}
