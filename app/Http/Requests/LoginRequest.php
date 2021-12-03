<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "correoUsuario"=>"required|email:rfc,dns|exists:usuario,correoUsuario",
            "password"=>"required",
            "terminos"=>"accepted"
        ];
    }

    public function messages()
    {
        return [
                'required' => 'Campo obligatorio',
                'email' => 'Debe ser un correo',
                'exists' => 'Email no se encuentra registrado',
                'accepted'=>'Debe aceptar los terminos y condiciones',
                'max'=>'maximo 10 caracteres'


        ];
    }
}
