<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Loan extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'amount',
        'loan_date',
        'status',
        'notes',
    ];

    protected $casts = [
        'amount' => 'decimal:2',
        'loan_date' => 'date',
    ];

    // Relasi ke user peminjam
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
