<?php

namespace FreeCommerce;

use Illuminate\Database\Eloquent\Model;

class Imagem extends Model
{
    protected $table = 'imagens';

    protected $fillable = [
        'idServico',
        'nome',
        'extensao'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public function Servico()
    {
        return $this->belongsTo('FreeCommerce\Servico');
    }
}
