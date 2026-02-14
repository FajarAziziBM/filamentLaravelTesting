<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class J0b extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'wage',
        'start_date',
        'end_date',
        'status',
        'created_by',
    ];

    protected $casts = [
        'wage' => 'decimal:2',
        'start_date' => 'date',
        'end_date' => 'date',
    ];

    /**
     * Relasi ke User (pembuat pekerjaan)
     */
    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}
