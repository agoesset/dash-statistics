<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;

    protected $fillable = [
        'hari',
        'like_male',
        'like_female',
        'like_gen_alpha',
        'like_gen_z',
        'like_gen_millenial',
        'like_baby_boomer'
    ];
}
