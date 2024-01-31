<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    use HasFactory;

    protected $fillable = [
        'heading',
        'subheading',
        'bowler_num',
        'bowler_desc',
        'accuracy_num',
        'accuracy_desc',
        'champions_num',
        'champions_desc',
        'images_id'
    ];
}
