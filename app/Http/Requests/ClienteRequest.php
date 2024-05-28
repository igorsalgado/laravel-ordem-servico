<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteRequest extends FormRequest
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
        return [

            'nome_cliente' => ['required', 'string'],
            'email_cliente' => ['required', 'email'],
            'telefone_cliente' => ['required', 'string'],
            'logradouro_cliente' => ['required', 'string'],
            'numero_endereco_cliente' => ['required', 'string'],
            'bairro_cliente' => ['required', 'string'],
            'cidade_cliente' => ['required', 'string'],
            'estado_cliente' => ['required', 'string'],
            'cep_cliente' => ['required', 'string'],

        ];
    }
}
