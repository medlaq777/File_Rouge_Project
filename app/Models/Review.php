<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function artist()
    {
        return $this->belongsTo(User::class, 'artist_id');
    }

    public function studio()
    {
        return $this->belongsTo(Studios::class, 'studio_id');
    }
}
