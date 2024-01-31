<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'use_for',
        'link'
    ];

    public function programmes()
    {
        return $this->hasMany(Programme::class, 'images_id');
    }

    public function events()
    {
        return $this->hasMany(Event::class, 'images_id');
    }
}
