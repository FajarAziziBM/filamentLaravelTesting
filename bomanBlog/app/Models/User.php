<?php

namespace App\Models;

use Filament\Models\Contracts\FilamentUser;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Filament\Panel;

class User extends Authenticatable implements FilamentUser
{
    use HasFactory, Notifiable;

    /**
     * Mass assignable attributes
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
    ];

    /**
     * Hidden attributes
     */
    protected $hidden = [
        'password',
    ];

    /**
     * Attribute casting
     */
    protected function casts(): array
    {
        return [
            'password' => 'hashed',
        ];
    }

    /**
     * Akses ke Filament Panel
     * Hanya admin yang bisa masuk
     */
    public function canAccessPanel(Panel $panel): bool
    {
        return $this->role === 'admin';
    }

    public function jobs()
    {
        return $this->belongsToMany(J0b::class, 'job_user', 'user_id', 'job_id')
            ->withPivot('assigned_at')
            ->withTimestamps();
    }
}
