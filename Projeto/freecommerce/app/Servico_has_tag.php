<?php

namespace FreeCommerce;

use Illuminate\Database\Eloquent\Model;

class Servico_has_tag extends Model
{
    protected $table = 'servicos_has_tags';

    protected $fillable = [
        'idServico',
        'idTag'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public function Servico()
    {
        return $this->belongsTo('FreeCommerce\Servicoi');
    }

    public function Tag()
    {
        return $this->belongsTo('FreeCommerce\Tag');
    }
}
