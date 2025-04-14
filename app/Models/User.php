<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasOne;
use App\Enums\RoleEnum;
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

    public function isArtist(): bool
    {
        return $this->role === RoleEnum::Artist;
    }

    public function isOwner(): bool
    {
        return $this->role === RoleEnum::Owner;
    }
    public function isAdmin(): bool
    {
        return $this->role === RoleEnum::Admin;
    }

    // protected static function booted()
    // {
    //     static::created(function (User $user) {
    //         $user->profile()->create([
    //             'full_name' => request('full_name'),
    //             'username' => request('username'),
    //         ]);
    //     });
    // }
}
