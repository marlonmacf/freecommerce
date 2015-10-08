@extends('app.app')

@section('content')

    @include('app.partials.menuCategorias')

    {{-- Menu --}}
    <div class="container-fluid span9 text-center col-md-8 col-md-offset-2">
        <ul class="nav navbar-nav">
            <li><a href="#galeria">Visao Geral</a></li>
            <li><a href="#descricao">Descricao</a></li>
            <li><a href="#extras">Servicos Extras</a></li>
            <li><a href="#comentarios">Comentarios</a></li>
        </ul>
    </div>

    {{-- Direita --}}
    <div class="container span6 col-md-5 col-md-offset-2">

        {{-- Galeria --}}
        <div class="row" id="galeria">
            <div class="panel panel-default">

                {{-- Titulo --}}
                <div class="panel-heading">
                    @if(isset($instances['titulo']))
                        <h4>Eu vou {{ $instances['titulo'] }} por $5</h4>
                    @else
                        <h4>Eu vou fazer alguma coisa por $5</h4>
                    @endif
                </div>

                {{-- Galeria --}}
                <div class="panel-body">

                    {{-- Nome da Imagem --}}
                    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 text-left">
                        <small>em Galeria de imagens</small>
                    </div>

                    {{-- Duracao --}}
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 text-right">
                        <small>
                            <i class="glyphicon glyphicon-time"></i>
                            @if(isset($instances['duracao']))
                                {{ $instances['duracao']  }} Dias em media
                            @else
                                0 Dias em media
                            @endif
                        </small>
                    </div>
                    <br/><br/>

                    {{-- Galeria --}}
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                            <li data-target="#myCarousel" data-slide-to="3"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img src="http://lorempixel.com/640/480/?1" alt="Chania">
                            </div>

                            <div class="item">
                                <img src="http://lorempixel.com/640/480/?2" alt="Chania">
                            </div>

                            <div class="item">
                                <img src="http://lorempixel.com/640/480/?3" alt="Chania">
                            </div>

                            <div class="item">
                                <img src="http://lorempixel.com/640/480/?4" alt="Chania">
                            </div>
                        </div>

                        <br/>
                        <br/>
                        <br/>

                        <!-- Left and right controls -->
                        <a class="left carousel-inner" href="#myCarousel" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-inner" href="#myCarousel" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        {{-- Descricao --}}
        <div class="row" id="descricao">
            <div class="panel panel-default">

                {{-- Titulo Descricao --}}
                <div class="panel-heading">
                    <h4>Sobre esse Servico</h4>
                </div>

                {{-- Texto Descricao --}}
                <div class="panel-body text-justify">
                    <p>
                        @if(isset($instances['descricao']))
                            {{ $instances['descricao'] }}
                        @else
                            Nenhuma descricao encontrada
                        @endif
                    </p>
                </div>

            </div>
        </div>

        {{-- Extras --}}
        <div class="row" id="extras">
            <div class="panel panel-default">

                {{-- Titulo Extras --}}
                <div class="panel-heading">
                    <h4>Confira os Extras do meu Servico</h4>
                </div>

                {{-- Servico Basico --}}
                <div class="panel-body">
                    <div class="row">
                        <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 text-left">
                            <p>Quantidade do servico basico</p>
                        </div>
                        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 text-right">
                            {!! Form::select("extra", ["1($5)","2($10)","3($15)","4($20)","5($25)","6($30)","7($35)","8($40)","9($45)","10($50)","11($55)","12($60)","13($65)","14($70)","15($75)"]) !!}
                        </div>
                    </div>
                </div>

                {{-- Servico Extra --}}
                @if(isset($instances['extras']))
                    @foreach($instances['extras'] as $extra)
                        <div class="panel-footer">
                            <div class="row">
                                <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 text-left">
                                    <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
                                        {!! Form::checkbox("extra" . $extra['id'], null) !!}
                                    </div>
                                    <div class="col-xs-11 col-sm-11 col-md-11 col-lg-11">
                                        {!! Form::label('extra' . $extra['id'],  $extra['descricao']) !!}
                                    </div>
                                </div>
                                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 text-right">
                                    {!! Form::select("extra", ["1($5)","2($10)","3($15)","4($20)","5($25)","6($30)","7($35)","8($40)","9($45)","10($50)","11($55)","12($60)","13($65)","14($70)","15($75)"]) !!}
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif

                {{-- Compre Agora --}}
                <div class="panel-body">
                    <div class="row">
                        <div class="form-group">
                            <div class="col-sm-12 col-xs-12 col-md-12 col-lg-12 text-right">
                                {!! Form::button('Comprar Agora',['class' => 'btn btn-success']) !!}
                                {!! Form::button('<i class="glyphicon glyphicon-shopping-cart"></i>',['class' => 'btn btn-success']) !!}
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        {{-- Comentarios --}}
        @if(isset($instances['comentarios']))
            <div class="row" id="comentarios">
                <div class="panel panel-default">

                    {{-- Titulo Comentarios --}}
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7 text-left">
                                <p>
                                    <strong>
                                        {{ count($instances['comentarios']) }} Comentarios
                                        <i class="glyphicon glyphicon-star"></i>
                                        <i class="glyphicon glyphicon-star"></i>
                                        <i class="glyphicon glyphicon-star"></i>
                                        <i class="glyphicon glyphicon-star-empty"></i>
                                        <i class="glyphicon glyphicon-star-empty"></i>
                                    </strong>
                                </p>
                            </div>
                            <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 text-right">
                                {!! Form::select("comentarios", ["Mais recentes", "Comentarios Positivos", "Comentarios Negativos"]) !!}
                            </div>
                        </div>
                    </div>

                    {{-- Comentarios --}}
                    @foreach($instances['comentarios'] as $i => $comentario)
                        <div class="panel-body">
                            <div class="form-group" id="{{ $comentario['idUser'] }}">

                                {{-- Foto --}}
                                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 text-left">
                                    <a href=""><img src="http://lorempixel.com/100/100/?{{$i}}"
                                                    class="img-responsive img-circle"></a>
                                </div>

                                {{-- Descricao --}}
                                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 text-left">
                                    <small>
                                        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 text-left">
                                            <p>
                                                @for($cont = 0; $cont <= $comentario['avaliacao']; $cont++ )
                                                    <i class="glyphicon glyphicon-star"></i>
                                                @endfor
                                                @for($cont = $cont; $cont <= 5; $cont++)
                                                    <i class="glyphicon glyphicon-star-empty"></i>
                                                @endfor
                                                {{ $comentario['nomeUser'] }}
                                                <small>{{ $comentario['data'] }}</small>
                                            </p>
                                        </div>
                                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 text-right">
                                            <div class="row text-right">
                                                {!! Form::button('<i class="glyphicon glyphicon-thumbs-up"></i>',['class' => 'btn btn-success btn-xs']) !!}
                                                {!! Form::button('<i class="glyphicon glyphicon-thumbs-down"></i>',['class' => 'btn btn-danger btn-xs']) !!}
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-justify">
                                            <p> {{ $comentario['descricao'] }} </p>
                                        </div>
                                    </small>
                                </div>
                            </div>
                        </div>

                        <hr class="featurette-divider">
                    @endforeach

                </div>
            </div>
        @endif

    </div>

    {{-- Esquerda --}}
    <div class="container span3 col-md-3">

        {{-- Comprar Agora --}}
        <div class="panel panel-default">

            {{-- Botoes --}}
            <div class="panel-body">
                <div class="row">
                    <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                        {!! Form::button('Comprar Agora',['class' => 'btn btn-success btn-lg btn-block']) !!}
                    </div>
                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                        {!! Form::button('<i class="glyphicon glyphicon-shopping-cart"></i>',['class' => 'btn btn-success btn-lg']) !!}
                    </div>
                </div>
            </div>

            {{-- Servico Basico --}}
            <div class="panel-footer">
                <div class="row">
                    <div class="col-xs-8 col-sm-8 ol-md-8 col-lg-8 text-left">
                        <p>Quantidade do servico basico</p>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 text-right">
                        {!! Form::select("extra", ["1($5)","2($10)","3($15)","4($20)","5($25)","6($30)","7($35)","8($40)","9($45)","10($50)","11($55)","12($60)","13($65)","14($70)","15($75)"]) !!}
                    </div>
                </div>
            </div>

        </div>

        {{-- Avaliacoes --}}
        <div class="panel panel-default">
            <div class="panel panel-body">

                {{-- Avaliacao dos Clientes --}}
                <div class="row">
                    <div class="col-xs-7 col-sm-7 ol-md-7 col-lg-7 text-left">
                        <p>Avaliacao dos clientes</p>
                    </div>
                    <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 text-right">
                        <p>
                            <i class="glyphicon glyphicon-star"></i>
                            <i class="glyphicon glyphicon-star"></i>
                            <i class="glyphicon glyphicon-star"></i>
                            <i class="glyphicon glyphicon-star-empty"></i>
                            <i class="glyphicon glyphicon-star-empty"></i>
                            <strong>
                                @if(isset($instances['avaliacao']))
                                    {{ $instances['avaliacao'] }}
                                @else
                                    0
                                @endif
                            </strong>
                        </p>
                    </div>
                </div>

                <hr class="featurette-divider">

                {{-- Pedidos na Fila --}}
                <div class="row">

                    <div class="col-xs-7 col-sm-7 ol-md-7 col-lg-7 text-left">
                        <p>Pedidos na fila</p>
                    </div>

                    <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 text-right">
                        <p></td><strong> 0 </strong></p>
                    </div>

                </div>

            </div>
        </div>

        {{-- Proprietarios --}}
        <div class="panel panel-default">

            <div class="panel-body text-justify">

                <div class="text-center col-md-12 col-md-offset-0">
                    <a href=""><img src="http://lorempixel.com/400/400/?" class="img-responsive img-thumbnail"></a>
                </div>
            </div>

            <div class="panel-body text-justify">
                <small>
                    @if(isset($instances['user']))
                        <strong><p> {{ $instances['user']['nome'] }} </p></strong>
                        <p> {{ $instances['user']['descricao'] }} </p>
                    @else
                        <strong><p> Proprietario </p></strong>
                        <p> Sem nenhuma descricao. </p>
                    @endif
                    <hr class="featurette-divider">
                    <div class="text-right">
                        {!! Form::button('<i class="glyphicon glyphicon-comment"></i> Contate-me',['class' => 'btn btn-default']) !!}
                    </div>
                </small>
            </div>

        </div>

        @if(isset($instances['tags']))
            <div class="container-fluid">
                @foreach($instances['tags'] as $tag)
                    <span class="label label-default">{{ $tag }}</span>
                @endforeach
            </div>
        @endif

    </div>

@endsection