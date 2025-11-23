<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubjectSession extends Model
{
    protected $fillable = [
        'subject_id',
        'user_id',
        'duration',
        'started_at',
        'finished_at',
        'cancelled_at',
    ];

    protected $casts = [
        'duration' => 'integer',
        'started_at' => 'datetime',
        'finished_at' => 'datetime',
        'cancelled_at' => 'datetime',
    ];
}
