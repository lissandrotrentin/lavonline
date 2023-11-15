<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WashingOwnerStoreRequest extends FormRequest
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
        $rules = [
            'cnpj' => ['required'],                              
            'nome_fantasia' => ['required'],
            'razao_social' => ['required'],
            'contato' => ['required'],
            'cpf_responsavel' => ['required'],
            'nome_responsavel' => ['required'],
            'rua' => ['required'],
            'cep' => ['required'],
            'bairro' => ['required'],
            'numero' => ['required'],
            'cidade' => ['required'],
            'data_nasc' => ['required']
        ];

        return $rules;

    }
}
