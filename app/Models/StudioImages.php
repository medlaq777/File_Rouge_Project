<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudioImages extends Model
{
    /** @use HasFactory<\Database\Factories\StudioImagesFactory> */
    use HasFactory;

    protected $fillable = [
        'studio_id',
        'image_path',
        'image_name',
        'image_type',
        'image_size',
    ];
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
    public function studio()
    {
        return $this->belongsTo(Studios::class, 'studio_id');
    }

}
