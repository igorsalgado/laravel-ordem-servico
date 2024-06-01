<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrdemServicoRequest extends FormRequest
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
            'cliente_id' => 'required|exists:clientes,id',
            'veiculo_id' => 'required|exists:veiculos,id',
            'data_criacao' => 'required|date',
            'valor_total' => 'required|numeric|min:0',
            'servicos' => 'array',
            'servicos.*' => 'exists:servicos,id',
        ];
    }
}
