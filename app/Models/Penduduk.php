<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penduduk extends Model
{
    protected $table = 'penduduks';

    protected $fillable = [
        'total_penduduk',
        'laki_laki',
        'perempuan',
        'produktif',
    ];

    public $timestamps = true;

    // You can add any additional methods or relationships here if needed
}
