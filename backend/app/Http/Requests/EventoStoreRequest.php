<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class EventoStoreRequest extends FormRequest
{
    public function rules(): array
    {
        return [
    
            'nombre' => [
                'required',
                'string',
                'max:255'
            ],
    
            'tipo' => [
                'required',
                'in:asistencia,comida,actividad,puntaje'
            ],
    
            'fecha_inicio' => [
                'required',
                'date'
            ],
    
            'fecha_fin' => [
                'required',
                'date',
                'after:fecha_inicio'
            ],
    
            'puntos_default' => [
                'nullable',
                'integer',
                'min:0'
            ]
        ];
    }
    
    public function authorize(): bool
    {
        return true;
    }
}
