<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdutosFormRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nome' => 'required|min:3',
            'categoria' => 'required|min:3',
            'preco' => 'required',
            'quantidade' =>'required',
            'descricao' => 'required|min:3',
        ];
    }

    public function messages()
    {
        return [
            'required' => 'O campo :attribute é obrigário.',
            'min' => 'O campo :attribute precisa ter pelo menos 3 caracteres.',
        ];
    }
}
