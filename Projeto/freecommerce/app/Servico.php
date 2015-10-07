<?php

namespace FreeCommerce;

use Illuminate\Database\Eloquent\Model;

class Servico extends Model
{
    protected $table = 'servicos';

    protected $fillable = [
        'idUser',
        'idCompetencia',
        'titulo',
        'descricao',
        'duracao',
        'avaliacao'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public function Comentarios()
    {
        return $this->hasMany('FreeCommerce\Comentario');
    }

    public function Servicos_has_Tags()
    {
        return $this->hasMany('FreeCommerce\Servico_has_Tag');
    }

    public function Imagens()
    {
        return $this->hasMany('FreeCommerce\Imagem');
    }

    public function Competencia()
    {
        return $this->belongsTo('FreeCommerce\Competencia');
    }

    public function Extras()
    {
        return $this->hasMany('FreeCommerce\Extra');
    }

    public function Solicitacoes()
    {
        return $this->hasMany('FreeCommerce\Solicitacao');
    }

    public function Perfil()
    {
        return $this->belongsTo('FreeCommerce\Perfil');
    }
}
