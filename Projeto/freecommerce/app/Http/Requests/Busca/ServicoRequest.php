<?php

namespace FreeCommerce\Http\Requests\Busca;

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
        $rules['idCompetencia'] = 'required';
        $rules['titulo'] = 'required';
        $rules['descricao'] = 'required';
        return $rules;
    }

    public function attributes()
    {
        $attributes['idCompetencia'] = 'Competencia';
        $attributes['titulo'] = 'Titulo';
        $attributes['descricao'] = 'Descricao';
        return $attributes;
    }
}
