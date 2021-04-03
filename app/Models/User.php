<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Str;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable;

    protected $guard = 'user';

    protected $fillable = ['name', 'username', 'email', 'password'];

    protected $hidden = ['password', 'remember_token'];

    protected $casts = ['email_verified_at' => 'datetime'];

    public function getRouteKeyName(): string
    {
        return 'username';
    }

    public function carts(): HasMany
    {
        return $this->hasMany(Cart::class);
    }

    public function getFirstNameAttribute(): string
    {
        return current(explode(' ', $this->attributes['name']));
    }

    public function getLastNameAttribute(): string
    {
        return last(explode(' ', $this->attributes['name']));
    }

    public function getAvatarAttribute(): string
    {
        return 'https://avatar.tobi.sh/'.md5($this->email).'.svg?text='.Str::substr($this->first_name, 0, 1).Str::substr($this->last_name, 0, 1);
    }
}
