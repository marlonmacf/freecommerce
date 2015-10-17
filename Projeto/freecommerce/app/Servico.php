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
        'valor',
        'duracao',
        'avaliacao',
        'status'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public function Comentarios()
    {
        return $this->hasMany('FreeCommerce\Comentario', 'idServico');
    }

    public function Servicos_has_Tags()
    {
        return $this->hasMany('FreeCommerce\Servico_has_Tag', 'idServico');
    }

    public function Tags()
    {
        return $this->belongsToMany('FreeCommerce\Tag', 'servicos_has_tags', 'idServico', 'idTag');
    }

    public function Imagens()
    {
        return $this->hasMany('FreeCommerce\Imagem', 'idServico');
    }

    public function Competencia()
    {
        return $this->belongsTo('FreeCommerce\Competencia', 'idCompetencia');
    }

    public function Extras()
    {
        return $this->hasMany('FreeCommerce\Extra', 'idServico');
    }

    public function Solicitacoes()
    {
        return $this->hasMany('FreeCommerce\Solicitacao', 'idServico');
    }

    public function User()
    {
        return $this->belongsTo('FreeCommerce\User', 'idUser');
    }
}
