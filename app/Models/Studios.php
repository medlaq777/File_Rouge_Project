<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
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

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function features(): BelongsToMany
    {
        return $this->belongsToMany(Feature::class, 'feature_studio', 'studio_id', 'feature_id');
    }


    public function reviews(): HasMany
    {
        return $this->hasMany(Review::class, 'studio_id');
    }

    public function bookings(): HasMany
    {
        return $this->hasMany(Booking::class, 'studio_id');
    }

    public function Photos(): HasMany
    {
        return $this->hasMany(Photos::class, 'studio_id');
    }

    public function availabilities(): HasMany
    {
        return $this->hasMany(Availability::class, 'studio_id');
    }

    public function updateRating()
{
    $this->rating = $this->reviews()->where('studio_id', $this->id)->avg('rating') ?? 0;
    $this->TotalReviews = $this->reviews()->count();


    $this->save();
}
}
