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
        'deskripsi',
        'gambar',
        'kontak'
    ];

    protected static function booted()
    {
        static::creating(function ($umkm) {
            $umkm->slug = Str::slug($umkm->nama);
        });

        static::deleting(function ($umkm) {
            Storage::disk('public')->delete($umkm['gambar']);
        });

        static::updating(function ($umkm) {
            // Only if the gambar is changing
            if ($umkm->isDirty('gambar')) {
                $oldImage = $umkm->getOriginal('gambar');
                if ($oldImage) {
                    $i = 0;
                    foreach ($oldImage as $image) {
                        Storage::disk('public')->delete($image[$i]);
                        $i += 1;
                    }
                }
            }
        });
    }

    protected $casts = [
        'gambar' => 'array',
    ];
}
