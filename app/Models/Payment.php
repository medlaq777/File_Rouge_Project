<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'booking_id',
        'user_id',
        'total_price',
        'payment_date',
        'transaction_id',
        'method',
        'status',
    ];

    protected $casts = [
        'payment_date' => 'datetime',
    ];

    public function booking()
    {
        return $this->belongsTo(Booking::class, 'booking_id');
    }

    public function artist()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function markAsSuccessful()
    {
        $this->statut = 'Success';
        $this->save();
    }

    public function markAsFailed()
    {
        $this->statut = 'Failure';
        $this->save();
    }

    public function refund()
    {
        $this->statut = 'refund';
        $this->save();
    }
}
