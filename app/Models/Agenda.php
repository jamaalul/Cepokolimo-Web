<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Agenda extends Model
{
    protected $fillable = [
        'judul',
        'deskripsi',
        'waktu',
        'slug',
    ];

    protected static function booted()
    {
        static::creating(function ($agenda) {
            $agenda->slug = Str::slug($agenda->judul);
        });
    }

    protected $casts = [
        'waktu' => 'datetime', // this makes tanggal a Carbon instance
    ];
}
