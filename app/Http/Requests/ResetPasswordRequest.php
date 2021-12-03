<?php

namespace App\Http\Requests;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;
use Illuminate\Foundation\Http\FormRequest;

class ResetPasswordRequest extends FormRequest
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
            "password"=>"required|confirmed|string|regex:/^(?=.*[a-z])(?=.*[A-Z]).{8,}$/",
            "password_confirmation"=>"required"
        ];
    }

    public function messages()
    {
        return [
                'required' => 'Campo obligatorio',
                'email' => 'Debe ser un correo',
                'exists' => 'Email no se encuentra reregistrado',
                'regex'=>'Debe tener una mayuscula, minuscula, numero',
                'min' => 'minimo 8 caracteres',
                'confirmed' => 'las contraseñas no coinciden',
        ];
    }
}
