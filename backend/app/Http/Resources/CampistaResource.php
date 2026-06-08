<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CampistaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray($request): array
    {
        return [
    
            'id' => $this->id,
    
            'folio' => $this->folio,
    
            'nombre' => $this->nombre,
    
            'apellido_paterno' => $this->apellido_paterno,
    
            'apellido_materno' => $this->apellido_materno,
    
            'fecha_nacimiento' => $this->fecha_nacimiento,
    
            'sexo' => $this->sexo,
    
            'telefono' => $this->telefono,
    
            'contacto_emergencia' => $this->contacto_emergencia,
    
            'telefono_emergencia' => $this->telefono_emergencia,
    
            'qr_uuid' => $this->qr_uuid,
    
            'activo' => $this->activo,
    
            'casa' => [
                'id' => $this->casa?->id,
                'nombre' => $this->casa?->nombre,
            ]
        ];
    }
}
