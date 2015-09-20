<?php

namespace FreeCommerce;

use Illuminate\Database\Eloquent\Model;

class Solicitacao_has_Extra extends Model
{
    protected $table = 'solicitacoes_has_extras';

    protected $fillable = [
        'idSolicitacao',
        'idExtra'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public function Solicitacao()
    {
        return $this->belongsTo('FreeCommerce\Solicitacao');
    }

    public function Extra()
    {
        return $this->belongsTo('FreeCommerce\Extra');
    }
}
