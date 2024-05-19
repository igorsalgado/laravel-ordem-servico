<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VeiculoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'cliente_id' => 'required',
            'modelo_veiculo' => ['required', 'string'],
            'placa_veiculo' => ['required', 'string'],
            'ano_veiculo' => ['required', 'string'],
            'cor_veiculo' => ['required', 'string'],
        ];
    }
}