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

            $content = $news->body ?? null;
            if ($content) {
                preg_match_all('/src="[^"]*\/storage\/([^"]+)"/', $content, $matches);

                if (isset($matches[1])) {
                    foreach ($matches[1] as $relativePath) {
                        Storage::disk('public')->delete($relativePath);
                    }
                }
            }
        });

        static::updating(function ($news) {
            // Only if the gambar is changing
            if ($news->isDirty('gambar')) {
                $oldImage = $news->getOriginal('gambar');
                if ($oldImage) {
                    Storage::disk('public')->delete($oldImage);
                }
            }

            $content = $news->body ?? null;
            if ($content) {
                preg_match_all('/src="[^"]*\/storage\/([^"]+)"/', $content, $matches);

                if (isset($matches[1])) {
                    foreach ($matches[1] as $relativePath) {
                        Storage::disk('public')->delete($relativePath);
                    }
                }
            }
        });
    }

        protected $casts = [
        'tanggal' => 'date', // this makes tanggal a Carbon instance
    ];
}