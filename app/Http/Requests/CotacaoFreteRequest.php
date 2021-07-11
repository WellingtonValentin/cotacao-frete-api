<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CotacaoFreteRequest extends FormRequest
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
            'uf' => 'required',
            'transportadora_id' => 'required',
            'percentual_cotacao' => 'required',
            'valor_extra' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'uf.required' => 'UF é obrigatória.',
            'percentual_cotacao.required' => 'Percentual de Cotacao é obrigatória.',
            'valor_extra.required' => 'Valor Extra é obrigatório.',
            'transportadora_id.required' => 'Transportadora é obrigatória.',
            'uf.unique' => 'Não pode haver duas cotações para a mesma Transportadora no mesmo UF.',
        ];
    }
}
