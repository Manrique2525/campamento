<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class CampistaStoreRequest extends FormRequest
{
    public function rules(): array
    {
        return [
    
            'nombre' => [
                'required',
                'string',
                'max:100'
            ],
    
            'apellido_paterno' => [
                'required',
                'string',
                'max:100'
            ],
    
            'apellido_materno' => [
                'nullable',
                'string',
                'max:100'
            ],
    
            'fecha_nacimiento' => [
                'nullable',
                'date'
            ],
    
            'sexo' => [
                'required',
                'in:M,F'
            ],
    
            'telefono' => [
                'nullable'
            ],
    
            'contacto_emergencia' => [
                'nullable'
            ],
    
            'telefono_emergencia' => [
                'nullable'
            ],
    
            'casa_id' => [
                'required',
                'exists:casas,id'
            ]
        ];
    }
    
    public function authorize(): bool
    {
        return true;
    }
}
