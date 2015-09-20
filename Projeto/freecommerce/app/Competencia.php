<?php

namespace FreeCommerce;

use Illuminate\Database\Eloquent\Model;

class Competencia extends Model
{
    protected $table = 'competencias';

    protected $fillable = [
        'idCategoria',
        'nome'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public function Categoria()
    {
        return $this->belongsTo('FreeCommerce\Categoria');
    }

    public function Servicos()
    {
        return $this->hasMany('FreeCommerce\Servico');
    }
}
