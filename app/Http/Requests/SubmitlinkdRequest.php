<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubmitlinkdRequest extends FormRequest
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
            "correoUsuario"=>"required|email|exists:usuario,correoUsuario",
        ];
    }

    public function messages()
    {
        return [
                'required' => 'Campo obligatorio',
                'email' => 'Debe ser un correo',
                'exists' => 'Email no se encuentra reregistrado',

        ];
    }
}
