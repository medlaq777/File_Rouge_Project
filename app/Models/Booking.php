<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'studio_id',
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
        return $this->belongsTo(User::class, 'artiste_id');
    }

    public function studio()
    {
        return $this->belongsTo(Studios::class);
    }

    public function availability()
    {
        return $this->belongsTo(Availability::class);
    }

    // public function payment()
    // {
    //     return $this->hasOne(Payment::class, 'reservation_id');
    // }

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
