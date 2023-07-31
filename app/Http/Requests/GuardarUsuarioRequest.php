<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GuardarUsuarioRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'nombre' => 'required',
            'correo' => 'required|unique:usuarios,correo', // usuarios,correo = Esto asegurará que el campo de correo electrónico sea único 
            'fecha_nacimiento' => 'required',
            'genero' =>'required',
            'contraseña'=> 'required|min:8'
        ];
    }
}
