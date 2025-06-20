<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

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
            $news->slug = Str::slug($news->judul . '-' . Str::random(6));
            $news->tanggal = now();
        });

        static::deleting(function ($news) {
            Storage::disk('public')->delete($news['gambar']);
        });

        static::updating(function ($news) {
            // Only if the gambar is changing
            if ($news->isDirty('gambar')) {
                $oldImage = $news->getOriginal('gambar');
                if ($oldImage) {
                    Storage::disk('public')->delete($oldImage);
                }
            }
        });
    }

        protected $casts = [
        'tanggal' => 'date', // this makes tanggal a Carbon instance
    ];
}