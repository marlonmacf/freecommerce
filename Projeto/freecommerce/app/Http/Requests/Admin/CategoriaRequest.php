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
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $result = $this->route()->getParameter('admin/categorias');
        $rules['nome'] = 'required | unique:mysql.Categorias,nome,' . $result;
        return $rules;
    }

    public function attributes()
    {
        $attributes['nome'] = 'Nome';
        return $attributes;
    }
}
