<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CopiaRequest extends FormRequest
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
            'descricao'=> 'required',
            'dtaSolicitacao'=> 'required',
            'quantidade'=> 'required'
        ];
    }

    public function messages(): array
    {
        return[
            'descricao.required' => 'campo de preenchimento obrigatorio',
            'dtaSolicitacao.required' => 'campo de preenchimento obrigatorio',
            'quantidade.required' => 'campo de preenchimento obrigatorio'
        ];
    }
}
