<?php

namespace FreeCommerce;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categorias';

    protected $fillable = [
        'nome'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public function Competecias()
    {
        return $this->hasMany('FreeCommerce\Competencia');
    }
}
