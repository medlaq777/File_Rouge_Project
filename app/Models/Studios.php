<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Enums\RoleEnum;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
class Studios extends Model
{
    /** @use HasFactory<\Database\Factories\StudiosFactory> */
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'description',
        'location',
        'price',
        'rating',
        'total_reviews',
        'category_id',
        'feature_id',
    ];

    public function owner(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id')->where('role', RoleEnum::owner);
    }

    public function artist(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id')->where('role', RoleEnum::artist);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function features(): BelongsTo
    {
        return $this->belongsTo(Feature::class, 'feature_id');
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

    public function reviews(): HasMany
    {
        return $this->hasMany(Review::class, 'studio_id');
    }

    public function updateRating()
    {
        $this->rating = $this->reviews()->where('studio_id', $this->id)->avg('rating') ?? 0;
        $this->total_reviews = $this->reviews()->count();
        $this->save();
    }
}
