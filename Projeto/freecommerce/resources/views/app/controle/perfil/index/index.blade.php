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
                    <h1>Configuracoes do Perfil Publico</h1>
                </div>
            </div>
        </div>

    </div>

@endsection