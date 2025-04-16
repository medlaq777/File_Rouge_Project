<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Studios extends Model
{
    /** @use HasFactory<\Database\Factories\StudiosFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'address',
        'location',
        'price',
        'availability',
        'equipment',
        'start_date',
        'end_date',
    ];
    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
        'availability' => 'boolean',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
