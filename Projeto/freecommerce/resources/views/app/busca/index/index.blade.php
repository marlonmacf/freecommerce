@extends('app.app')

@section('content')

    <div class="col-md-offset-1">
        <h1><strong>Resultados de pesquisa para 'teste'</strong></h1>
        <p><strong>0 resultados</strong><br /><br /><br />

        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Categorias
                </div>
                <div class="panel-body">
                    <ul class="nav nav">
                        <li class="active">
                            <a href="#"><strong>Todas as Categorias</strong></a>
                        </li>
                        <li><a href="#">Categoria</a></li>
                        <li><a href="#">Categoria</a></li>
                        <li><a href="#">Categoria</a></li>
                        <li><a href="#">Categoria</a></li>
                        <li><a href="#">Categoria</a></li>
                        <li><a href="#">Categoria</a></li>
                    </ul>
                </div>
                <div class="panel-body">
                    <ul class="nav nav">
                        <li class="active">
                            <a href="#"><strong>Tempo de Entrega</strong></a>
                        </li>
                        <div class="radio">
                            <label>
                                <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                                Ate 24 horas
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                                Ate 3 dias
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
                                Ate 7 dias
                            </label>
                        </div>
                        <div class="radio disabled">
                            <label>
                                <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3" disabled>
                                Qualquer
                            </label>
                        </div>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
            <div class="panel panel-default">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="#">Mais Populares</a>
                    </li>
                    <li><a href="#">Recomendado</a></li>
                    <li><a href="#">Novo</a></li>
                </ul>
                <div class="panel-body">

                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">

                        <div class="container-fluid">
                            <div class="row">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a href="#" class="thumbnail inner-border">
                                            <span></span>
                                            <img src="http://placehold.it/300x200" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    Descricao do Servico
                                </div>
                                <div class="panel-footer">
                                    Proprietario
                                    <p class="pull-right"><i class="glyphicon glyphicon-usd">5</i></p>
                                </div>
                            </div>
                        </div>
                        <br/><br/>

                        <div class="container-fluid">
                            <div class="row">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a href="#" class="thumbnail inner-border">
                                            <span></span>
                                            <img src="http://placehold.it/300x200" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    Descricao do Servico
                                </div>
                                <div class="panel-footer">
                                    Proprietario
                                    <p class="pull-right"><i class="glyphicon glyphicon-usd">5</i></p>
                                </div>
                            </div>
                        </div>
                        <br/><br/>

                        <div class="container-fluid">
                            <div class="row">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a href="#" class="thumbnail inner-border">
                                            <span></span>
                                            <img src="http://placehold.it/300x200" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    Descricao do Servico
                                </div>
                                <div class="panel-footer">
                                    Proprietario
                                    <p class="pull-right"><i class="glyphicon glyphicon-usd">5</i></p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">

                        <div class="container-fluid">
                            <div class="row">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a href="#" class="thumbnail inner-border">
                                            <span></span>
                                            <img src="http://placehold.it/300x200" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    Descricao do Servico
                                </div>
                                <div class="panel-footer">
                                    Proprietario
                                    <p class="pull-right"><i class="glyphicon glyphicon-usd">5</i></p>
                                </div>
                            </div>
                        </div>
                        <br/><br/>

                        <div class="container-fluid">
                            <div class="row">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a href="#" class="thumbnail inner-border">
                                            <span></span>
                                            <img src="http://placehold.it/300x200" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    Descricao do Servico
                                </div>
                                <div class="panel-footer">
                                    Proprietario
                                    <p class="pull-right"><i class="glyphicon glyphicon-usd">5</i></p>
                                </div>
                            </div>
                        </div>
                        <br/><br/>

                        <div class="container-fluid">
                            <div class="row">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a href="#" class="thumbnail inner-border">
                                            <span></span>
                                            <img src="http://placehold.it/300x200" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    Descricao do Servico
                                </div>
                                <div class="panel-footer">
                                    Proprietario
                                    <p class="pull-right"><i class="glyphicon glyphicon-usd">5</i></p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">

                        <div class="container-fluid">
                            <div class="row">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a href="#" class="thumbnail inner-border">
                                            <span></span>
                                            <img src="http://placehold.it/300x200" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    Descricao do Servico
                                </div>
                                <div class="panel-footer">
                                    Proprietario
                                    <p class="pull-right"><i class="glyphicon glyphicon-usd">5</i></p>
                                </div>
                            </div>
                        </div>
                        <br/><br/>

                        <div class="container-fluid">
                            <div class="row">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a href="#" class="thumbnail inner-border">
                                            <span></span>
                                            <img src="http://placehold.it/300x200" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    Descricao do Servico
                                </div>
                                <div class="panel-footer">
                                    Proprietario
                                    <p class="pull-right"><i class="glyphicon glyphicon-usd">5</i></p>
                                </div>
                            </div>
                        </div>
                        <br/><br/>

                        <div class="container-fluid">
                            <div class="row">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a href="#" class="thumbnail inner-border">
                                            <span></span>
                                            <img src="http://placehold.it/300x200" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    Descricao do Servico
                                </div>
                                <div class="panel-footer">
                                    Proprietario
                                    <p class="pull-right"><i class="glyphicon glyphicon-usd">5</i></p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection