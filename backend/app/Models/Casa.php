<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Casa extends Model
{
    protected $fillable = [
        'nombre',
        'color',
        'qr_uuid',
        'puntos_actuales',
        'activo'
    ];

    protected static function booted()
    {
        static::creating(function ($casa) {

            if (!$casa->qr_uuid) {
                $casa->qr_uuid = Str::uuid();
            }

        });
    }
}