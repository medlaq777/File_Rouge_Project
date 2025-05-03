<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log; // Import Log facade

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'studio_id',
        'user_id',
        'rating',
        'comment',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function artist()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function studio()
    {
        return $this->belongsTo(Studios::class, 'studio_id');
    }

    protected static function booted()
    {
    static::saved(function ($review) {
        $review->studio->updateRating();
    });

    static::deleted(function ($review) {
        $review->studio->updateRating();
    });

    static::updated(function ($review) {
        $review->studio->updateRating();
    });
    }
}
