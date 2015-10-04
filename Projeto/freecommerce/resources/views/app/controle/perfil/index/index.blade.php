@extends('app.app')

@section('content')

    @include('app.controle.partials.menuCotrole')

    <div class="container">

        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Configuracoes
                </div>
                <div class="panel-body">
                    <ul class="nav nav">
                        <li><a href="#">Configuracoes do Perfil Publico</a></li>
                        <li><a href="#">Configuracoes de Conta</a></li>
                        <li><a href="#">Configuracoes de Seguranca</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configuracoes de Conta</h1><br /><br />

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/register') }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group">
                            <label class="col-md-4 control-label">Nome</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="nome" value="Marlon Andrel">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Descricao</label>

                            <div class="col-md-6">
                                    <textarea class="form-control" rows="5" name="descricao"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">E-Mail</label>

                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" value="marlonmacf@gmail.com">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Nova Senha</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Confirmar Senha</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password_confirmation">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Alterar registros
                                </button>
                            </div>
                        </div>
                    </form>
            </div>
        </div>

    </div>

@endsection