<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coach extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'position',
        'type',
        'description',
        'images_id'
    ];

    protected $casts = [
        'achievement' => 'array'
    ];
}
