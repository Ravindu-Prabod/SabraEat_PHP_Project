<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'location',
        'outlet',
        'role',
        'password',
    ];

    public function orders(): HasMany
    {
        return $this->hasMany(order::class);
    }

    public function isCustomer(): bool
    {
        return $this->role === 'customer';
    }

    public function isOutletAdmin(): bool
    {
        return $this->role === 'outlet_admin';
    }

    public function isAdmin(): bool
    {
        return $this->role === 'admin';
    }

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
