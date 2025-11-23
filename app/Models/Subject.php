<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = [
        'name',
        'description',
        'color',
        'started_at',
        'finished_at',
        'cancelled_at',
    ];

    protected $casts = [
        'started_at' => 'date',
        'finished_at' => 'date',
        'cancelled_at' => 'date',
    ];
}
