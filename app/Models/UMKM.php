<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class UMKM extends Model
{
    protected $fillable = [
        'nama',
        'owner',
        'deskripsi'
    ];

    protected static function booted()
    {
        static::creating(function ($umkm) {
            $umkm->slug = Str::slug($umkm->nama . '-' . Str::random(6));
        });

        static::deleting(function ($umkm) {
            Storage::disk('public')->delete($umkm['gambar']);
        });

        static::updating(function ($umkm) {
            // Only if the gambar is changing
            if ($umkm->isDirty('gambar')) {
                $oldImage = $umkm->getOriginal('gambar');
                if ($oldImage) {
                    Storage::disk('public')->delete($oldImage);
                }
            }
        });
    }
}
