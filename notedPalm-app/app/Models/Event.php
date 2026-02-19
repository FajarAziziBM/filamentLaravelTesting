<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'type',
        'start_date',
        'end_date',
        'description',
    ];

    protected $dates = [
        'start_date',
        'end_date',
    ];
}
