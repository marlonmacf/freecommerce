<?php

namespace FreeCommerce;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = 'tags';

    protected $fillable = [
        'nome'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public function Servicos_has_Tags()
    {
        return $this->hasMany('FreeCommerce\Servico_has_Tag');
    }
}
