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
        'category_id',
        'name',
        'description',
        'location',
        'price',
        'rating',
        'TotalReviews',
    ];

    public function owner(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // public function category(): BelongsTo
    // {
    //     return $this->belongsTo(Category::class, 'category_id');
    // }

    // public function reviews(): HasMany
    // {
    //     return $this->hasMany(Review::class, 'studio_id');
    // }

    // public function features(): HasMany
    // {
    //     return $this->hasMany(StudioFeatures::class, 'studio_id');
    // }

    // public function bookings(): HasMany
    // {
    //     return $this->hasMany(Booking::class, 'studio_id');
    // }

    // public function statistics()
    // {
    //     return $this->hasMany(StudioStatistics::class);
    // }

    public function images(): HasMany
    {
        return $this->hasMany(StudioImages::class, 'studio_id');
    }

    public function availabilities(): HasMany
    {
        return $this->hasMany(Availability::class, 'studio_id');
    }

    public function updateRating()
    {
        $this->note_moyenne = $this->reviews()->avg('note') ?? 0;
        $this->nombre_avis = $this->reviews()->count();
        $this->save();
    }
}
