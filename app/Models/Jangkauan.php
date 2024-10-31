<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jangkauan extends Model
{
    use HasFactory;

    protected $fillable = [
        'tgl_jangkauan',
        'jakpus',
        'jakbar',
        'jaktim',
        'jaksel',
        'jakut',
        'kepser'
    ];
}
