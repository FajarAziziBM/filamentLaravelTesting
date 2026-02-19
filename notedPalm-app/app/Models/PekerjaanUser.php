<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class PekerjaanUser extends Model
{
    use HasFactory;

    protected $table = 'pekerjaan_user';

    protected $fillable = [
        'pekerjaan_id',
        'user_id',
        'assigned_at',
    ];

    protected $dates = [
        'assigned_at',
    ];

    // Relasi ke pekerjaan
    public function pekerjaan()
    {
        return $this->belongsTo(Pekerjaan::class, 'pekerjaan_id');
    }

    // Relasi ke user
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    //Cegah Duplicate Assignment
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $exists = self::where('job_id', $model->job_id)
                ->where('user_id', $model->user_id)
                ->exists();

            if ($exists) {
                throw new \Exception('User sudah di-assign ke pekerjaan ini.');
            }
        });
    }
}
