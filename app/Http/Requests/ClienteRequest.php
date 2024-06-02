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

            'nome_cliente' => 'required|string|max:255',
            'email_cliente' => 'required|email|max:255',
            'telefone_cliente' => 'required|string|max:11',
            'cep_cliente' => 'required|string|max:8',
            'logradouro_cliente' => 'required|string|max:255',
            'numero_endereco_cliente' => 'required|string|max:10',
            'bairro_cliente' => 'required|string|max:255',
            'cidade_cliente' => 'required|string|max:255',
            'estado_cliente' => 'required|string|max:2',

        ];
    }
}
