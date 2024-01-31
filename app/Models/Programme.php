<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programme extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'subheading',
        'age',
        'req_skill',
        'description',
        'other_info',
        'images_id'
    ];

    public function image()
    {
        return $this->belongsTo(Images::class, 'images_id');
    }
}

