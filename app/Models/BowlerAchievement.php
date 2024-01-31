<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BowlerAchievement extends Model
{
    use HasFactory;

    protected $fillable = [
        'tournament_name',
        'tournament_category',
        'runner_ups',
        'description',
        'images_id'
    ];

    protected $casts = [
        'runner_ups' => 'array'
    ];
}
