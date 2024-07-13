<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        // dd($this->all());
        return [
            "name"                => "required",
            "email"                => "required|email|confirmed|unique:users,email",
            "password"            => "required|confirmed"
        ];
    }


    public function attributes(): array
    {
        return [
            'name'                => 'nombre',
            'email'                => 'correo',
            'password'            => 'contraseña',
        ];
    }

    public function messages(): array
    {
        return [
        'name.required'               => 'El :attribute es requerido',
        'email.required'               => 'El :attribute es requerido',
        'email.email'                  => 'Ingrese un formato de :attribute válido',
        'password.required'           => 'La :attribute es requerido',
        ];
    }

}
