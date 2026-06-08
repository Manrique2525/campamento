<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EventoResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
    
            'id' => $this->id,
    
            'nombre' => $this->nombre,
    
            'tipo' => $this->tipo,
    
            'fecha_inicio' => $this->fecha_inicio,
    
            'fecha_fin' => $this->fecha_fin,
    
            'puntos_default' => $this->puntos_default,
    
            'activo' => $this->activo,
        ];
    }
}
