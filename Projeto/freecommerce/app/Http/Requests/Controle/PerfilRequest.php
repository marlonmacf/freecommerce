<?php

namespace FreeCommerce\Http\Requests\Controle;

use FreeCommerce\Http\Requests\Request;

class PerfilRequest extends Request
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
        $rules['nome'] = 'required';
        $rules['email'] = 'required | email | unique:mysql.Perfil,email';
        $rules['senha'] = 'required | min:8';
        //$rules['descricao'] = 'required | min:8';
        return $rules;
    }

    public function attributes()
    {
        $attributes['nome'] = 'Nome';
        $attributes['email'] = 'E-mail';
        $attributes['descricao'] = 'Descricao';
        return $attributes;
    }
}
