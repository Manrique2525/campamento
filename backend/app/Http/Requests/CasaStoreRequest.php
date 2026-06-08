<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class CasaStoreRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'nombre' => ['required','string','max:100'],
            'color' => ['required','string','max:50']
        ];
    }
    
    public function authorize(): bool
    {
        return true;
    }

     
}
