<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Feature extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
    ];

    public function studios(): hasMany
    {
        return $this->hasMany(Studios::class, 'feature_id');
    }
}
