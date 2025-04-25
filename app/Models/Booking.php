<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Enums\RoleEnum;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'studio_id',
        'user_id',
        'date_debut',
        'date_fin',
        'prix_total',
        'statut',
    ];

    protected $casts = [
        'date_debut' => 'datetime',
        'date_fin' => 'datetime',
    ];

    public function artist()
{
    return $this->belongsTo(User::class, 'user_id')->where('role', RoleEnum::artist);
}

    public function studio()
    {
        return $this->belongsTo(Studios::class);
    }

    public function availability()
    {
        return $this->belongsTo(Availability::class);
    }

    public function payment()
    {
        return $this->hasOne(Payment::class, 'reservation_id');
    }

    public function confirm()
    {
        $this->statut = 'confirmée';
        $this->save();
    }

    public function cancel()
    {
        $this->statut = 'annulée';
        $this->save();
    }
}
