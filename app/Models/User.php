<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasOne;
use App\Enums\RoleEnum;
use Illuminate\Database\Eloquent\Relations\HasOneOrMany;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'email',
        'password',
        'provider',
        'provider_id',
        'role',
    ];
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */

    protected $casts = [
        'email_verified_at' => 'datetime',
        'role' => RoleEnum::class,
    ];

    public function profile(): HasOne
    {
        return $this->hasOne(ProfileUser::class);
    }

    public function studios(): HasOneOrMany
    {
        return $this->hasMany(Studios::class, 'user_id');
    }

    public function bookings(): HasOneOrMany
    {
        return $this->hasMany(Booking::class, 'user_id');
    }

    public function reviews(): HasOneOrMany
    {
        return $this->hasMany(Review::class, 'user_id');
    }
    public function payments()
    {
        return $this->hasMany(Payment::class, 'user_id');
    }

    public function isArtist(): bool
    {
        return $this->role === RoleEnum::artist;
    }
    public function isOwner(): bool
    {
        return $this->role === RoleEnum::owner;
    }
    public function isAdmin(): bool
    {
        return $this->role === RoleEnum::admin;
    }
}
