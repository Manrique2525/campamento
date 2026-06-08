<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Campista extends Model
{
    protected $fillable = [
        'folio',
        'nombre',
        'apellido_paterno',
        'apellido_materno',
        'fecha_nacimiento',
        'sexo',
        'telefono',
        'contacto_emergencia',
        'telefono_emergencia',
        'casa_id',
        'qr_uuid',
        'activo'
    ];

    protected static function booted()
    {
        static::creating(function ($campista) {

            if (!$campista->qr_uuid) {
                $campista->qr_uuid = Str::uuid();
            }

            if (!$campista->folio) {

                $ultimo = self::max('id') + 1;

                $campista->folio = str_pad(
                    $ultimo,
                    5,
                    '0',
                    STR_PAD_LEFT
                );
            }
        });
    }

    public function casa()
    {
        return $this->belongsTo(
            Casa::class
        );
    }
}