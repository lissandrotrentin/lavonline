<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddressRequest extends FormRequest
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
            'rua' => ['required'],
            'bairro' => ['required'],
            'complemento' => ['required'],
            'numero' => ['required'],
            'cidade' => ['required'],
            'cep' => ['required'],
            'telefone' => ['required'],
            'cpf' => ['required']
        ];

        return $rules;

    }
}
