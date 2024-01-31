<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'location',
        'date',
        'body',
        'featured',
        'images_id'
    ];

    public function image()
    {
        return $this->belongsTo(Images::class, 'images_id');
    }
}
