<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class News extends Model
{
    protected $fillable = [
        'judul',
        'body',
        'tanggal',
        'gambar',
        'slug',
    ];

    protected static function booted()
    {
        static::creating(function ($news) {
            $news->slug = Str::slug($news->judul);
            $news->tanggal = now();
        });
    }

        protected $casts = [
        'tanggal' => 'date', // this makes tanggal a Carbon instance
    ];
}
