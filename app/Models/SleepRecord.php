<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SleepRecord extends Model
{
    protected $fillable = [
        'user_id',
        'sleep_date',
        'bedtime',
        'wake_time',
        'notes',
    ];

    protected function casts(): array
    {
        return [
            'sleep_date' => 'date',
        ];
    }
}
