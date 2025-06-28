<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class APBD extends Model
{
    protected $table = 'a_p_b_d_s';

    protected $fillable = [
        'tahun',
        'pendapatan',
        'belanja',
    ];
}
