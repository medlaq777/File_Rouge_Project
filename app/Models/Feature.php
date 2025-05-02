<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Feature extends Model
{
    use HasFactory;

    protected $fillable = [
        'studio_id',
        'name',
        'description',
    ];

    public function studios(): BelongsTo
    {
        return $this->BelongsTo(Studios::class, 'studio_id');
    }
}
