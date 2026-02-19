<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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

    protected $dates = [
        'withdrawal_date',
    ];

    // User yang melakukan withdrawal
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Admin / creator
    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}
