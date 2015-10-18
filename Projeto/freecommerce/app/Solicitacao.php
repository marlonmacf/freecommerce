<?php

namespace FreeCommerce;

use Illuminate\Database\Eloquent\Model;

class Solicitacao extends Model
{
    protected $table = 'solicitacoes';

    protected $fillable = [
        'idUser',
        'idServico',
        'valor',
        'descricao'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public function User()
    {
        return $this->belongsTo('FreeCommerce\User', 'idUser');
    }

    public function Servico()
    {
        return $this->belongsTo('FreeCommerce\Servico', 'idServico');
    }

    public function Extras()
    {
        return $this->belongsToMany('FreeCommerce\Extra', 'solicitacoes_has_tags', 'idSolicitacao', 'idExtra');
    }
}
