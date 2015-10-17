<?php

namespace FreeCommerce;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements
    AuthenticatableContract,
    AuthorizableContract,
    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    protected $table = 'users';

    protected $fillable = [
        'nome',
        'email',
        'password',
        'remember_token',
        'descricao',
        'foto'
    ];

    protected $hidden = [
        'password',
        'remember_token',
        'created_at',
        'updated_at'
    ];

    public function Servicos()
    {
        return $this->hasMany('FreeCommerce\Servico');
    }

    public function Solicitacoes()
    {
        return $this->hasMany('FreeCommerce\Solicitacao');
    }

    public function Comentarios()
    {
        return $this->hasMany('FreeCommerce\Cometario');
    }
}
