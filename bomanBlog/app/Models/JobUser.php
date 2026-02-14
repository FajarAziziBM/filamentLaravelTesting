<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class JobUser extends Pivot
{
    protected $table = 'job_user';

    protected $fillable = [
        'job_id',
        'user_id',
        'assigned_at',
    ];

    protected $casts = [
        'assigned_at' => 'datetime',
    ];
}
