<?php

namespace FreeCommerce;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    protected $table = 'comentarios';

    protected $fillable = [
        'idServico',
        'idComentario',
        'descricao',
        'avaliacao'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public function Comentario()
    {
        return $this->belongsTo('FreeCommerce\Comentario');
    }

    public function Comentarios()
    {
        return $this->hasMany('FreeCommerce\Comentario');
    }

    public function Servico()
    {
        return $this->belongsTo('FreeCommerce\Servico');
    }
}
