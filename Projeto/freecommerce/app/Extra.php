<?php

namespace FreeCommerce;

use Illuminate\Database\Eloquent\Model;

class Extra extends Model
{
    protected $table = 'extras';

    protected $fillable = [
        'idServico',
        'descricao',
        'valor'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public function Servico()
    {
        return $this->belongsTo('FreeCommerce\Servico');
    }

    public function Solicitacoes_has_Extras()
    {
        return $this->hasMany('FreeCommerce\Solicitacao_has_Extra');
    }
}
