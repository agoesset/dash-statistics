<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jangkauan extends Model
{
    use HasFactory;

    protected $fillable = [
        'hari',
        'jakpus',
        'jakbar',
        'jaktim',
        'jaksel',
        'jakut',
        'kepser'
    ];
}
