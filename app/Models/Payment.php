<?php

namespace App\Models;

use App\Enums\RoleEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'booking_id',
        'studio_id',
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

    public function artist()
    {
        return $this->belongsTo(User::class, 'user_id')->where(RoleEnum::artist);
    }

    public function booking()
    {
        return $this->belongsTo(Booking::class, 'booking_id');
    }


    public function markAsSuccessful()
    {
        $this->status = 'Success';
        $this->save();
    }

    public function markAsFailed()
    {
        $this->status = 'Failure';
        $this->save();
    }

    public function refund()
    {
        $this->status = 'refund';
        $this->save();
    }
}
