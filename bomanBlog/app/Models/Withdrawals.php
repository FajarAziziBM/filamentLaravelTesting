<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Withdrawal extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'amount',
        'withdrawal_date',
        'notes',
        'created_by',
    ];

    protected $casts = [
        'amount' => 'decimal:2',
        'withdrawal_date' => 'date',
    ];

    // Relasi ke User penerima gaji
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Relasi ke User pembuat (admin)
    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}
