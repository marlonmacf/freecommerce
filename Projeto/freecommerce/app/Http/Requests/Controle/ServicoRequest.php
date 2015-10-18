<?php

namespace FreeCommerce\Http\Requests\Controle;

use FreeCommerce\Http\Requests\Request;

class ServicoRequest extends Request
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
        $rules['titulo'] = 'required';
        $rules['descricao'] = 'required';
        $rules['competencia'] = 'required';
        $rules['chaves'] = 'required';
        $rules['valor'] = 'required | numeric';
        $rules['duracao'] = 'required | numeric';
        //$rules['imagensServico'] = 'mimes:jpeg,jpg,jpeg,png';

        return $rules;
    }

    public function attributes()
    {
        $attributes['titulo'] = 'Titulo';
        $attributes['descricao'] = 'Descricao';
        $attributes['competencia'] = 'Competencia';
        $attributes['chaves'] = 'Palavras chaves';
        $attributes['valor'] = 'Valor';
        $attributes['duracao'] = 'Duracao';
        $attributes['imagensServico'] = 'Imagens';

        return $attributes;
    }
}
