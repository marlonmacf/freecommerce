<?php

namespace FreeCommerce;

use Illuminate\Database\Eloquent\Model;

class Solicitacao extends Model
{
    protected $table = 'solicitacoes';

    protected $fillable = [
        'idUser',
        'idServico'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public function Perfil()
    {
        return $this->belongsTo('FreeCommerce\Perfil');
    }

    public function Servico()
    {
        return $this->belongsTo('FreeCommerce\Servico');
    }

    public function Solicitacoes_has_Extras()
    {
        return $this->hasMany('FreeCommerce\Solicitacao_has_Extra');
    }
}
