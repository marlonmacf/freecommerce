<?php

namespace FreeCommerce\Http\Requests\Admin;

use FreeCommerce\Http\Requests\Request;

class CategoriaRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $result = $this->route()->getParameter('admin/categorias');
        $rules['nome'] = 'required | unique:sqlsrv.vlib.Autor,nomeAutor,' .$result;
        return $rules;
    }

    public function attributes()
    {
        $attributes['nomeAutor'] = 'Nome';
        return $attributes;
    }
}
