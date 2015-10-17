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

    {{-- Esquerda --}}
    <div class="container span6 col-md-5 col-md-offset-2">

        {{-- Galeria --}}
        <div class="row" id="galeria">
            <div class="panel panel-default">

                {{-- Titulo --}}
                <div class="panel-heading">
                    @if(isset($instances['servico']['titulo']) && isset( $instances['servico']['valor']))
                        <h4>Eu vou {{ $instances['servico']['titulo'] }} por ${{ $instances['servico']['valor'] }}</h4>
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
                            @if(isset($instances['servico']['duracao']))
                                {{ $instances['servico']['duracao'] }} Dias em media
                            @else
                                0 Dias em media
                            @endif
                        </small>
                    </div>
                    <br/><br/>

                    {{-- Galeria --}}
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            @if(count($instances['servico']->Imagens)>0)
                                @foreach($instances['servico']->Imagens as $i => $imagem)
                                    @if($i == 0)
                                        <div class="item active">
                                            <img src="{{ $imagem['nome'] }}" alt="Chania" width="640" height="480">
                                        </div>
                                    @else
                                        <div class="item">
                                            <img src="{{ $imagem['nome'] }}" alt="Chania" width="640" height="480">
                                        </div>
                                    @endif
                                @endforeach
                            @else
                                <div class="item active">
                                    <img src="http://lorempixel.com/640/480/?1" alt="Chania">
                                </div>
                                <div class="item">
                                    <img src="http://lorempixel.com/640/480/?1" alt="Chania">
                                </div>
                                <div class="item">
                                    <img src="http://lorempixel.com/640/480/?1" alt="Chania">
                                </div>
                            @endif
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
                        @if(isset($instances['servico']['descricao']))
                            {{ $instances['servico']['descricao'] }}
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
                            {!! Form::select("extra", ["1($".($instances['servico']['valor']*1).")","2($".($instances['servico']['valor']*2).")","3($".($instances['servico']['valor']*3).")","4($".($instances['servico']['valor']*4).")","5($".($instances['servico']['valor']*5).")","6($".($instances['servico']['valor']*6).")","7($".($instances['servico']['valor']*7).")","8($".($instances['servico']['valor']*8).")","9($".($instances['servico']['valor']*9).")","10($".($instances['servico']['valor']*10).")","11($".($instances['servico']['valor']*11).")","12($".($instances['servico']['valor']*12).")","13($".($instances['servico']['valor']*13).")","14($".($instances['servico']['valor']*14).")","15($".($instances['servico']['valor']*15).")"]) !!}
                        </div>
                    </div>
                </div>

                {{-- Servico Extra --}}
                @if(isset($instances['servico']->Extras))
                    @foreach($instances['servico']->Extras as $extra)
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
                                    {!! Form::select("extra", ["1($".($extra['valor']*1).")","2($".($extra['valor']*2).")","3($".($extra['valor']*3).")","4($".($extra['valor']*4).")","5($".($extra['valor']*5).")","6($".($extra['valor']*6).")","7($".($extra['valor']*7).")","8($".($extra['valor']*8).")","9($".($extra['valor']*9).")","10($".($extra['valor']*10).")","11($".($extra['valor']*11).")","12($".($extra['valor']*12).")","13($".($extra['valor']*13).")","14($".($extra['valor']*14).")","15($".($extra['valor']*15).")"]) !!}
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
        @if(isset($instances['servico']->Comentarios))
            <div class="row" id="comentarios">
                <div class="panel panel-default">

                    {{-- Titulo Comentarios --}}
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7 text-left">
                                <p>
                                    <strong>
                                        {{ count($instances['servico']->Comentarios) }} Comentarios
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
                    @foreach($instances['servico']->Comentarios as $i => $comentario)
                        <div class="panel-body">
                            <div class="form-group" id="{{ $comentario['idUser'] }}">

                                {{-- Foto --}}
                                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 text-left">
                                    <a href=""><img src="{{ $comentario['User']->foto }}"
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
                                                {{ $comentario['User']->nome }}
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

    {{-- Direita --}}
    <div class="container span3 col-md-3">

        {{-- Comprar Agora --}}
        <div class="panel panel-default">

            {{-- Botoes --}}
            <div class="panel-body">
                <div class="row">
                    <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                        {!! Form::button('Comprar Agora',['class' => 'btn btn-success btn-lg btn-block']) !!}
                    </div>
                    <div class="row col-xs-3 col-sm-3 col-md-3 col-lg-3">
                        {!! Form::button('<i class="glyphicon glyphicon-shopping-cart"></i>',['class' => 'btn btn-success btn-lg']) !!}
                    </div>
                </div>
            </div>

            {{-- Servico Basico --}}
            <div class="panel-footer">
                <div class="row">
                    <div class="col-xs-6 col-sm-6 ol-md-6 col-lg-6 text-left">
                        <p><small>Quantidade do servico basico</small></p>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
                        {!! Form::select("extra", ["1($".($instances['servico']['valor']*1).")","2($".($instances['servico']['valor']*2).")","3($".($instances['servico']['valor']*3).")","4($".($instances['servico']['valor']*4).")","5($".($instances['servico']['valor']*5).")","6($".($instances['servico']['valor']*6).")","7($".($instances['servico']['valor']*7).")","8($".($instances['servico']['valor']*8).")","9($".($instances['servico']['valor']*9).")","10($".($instances['servico']['valor']*10).")","11($".($instances['servico']['valor']*11).")","12($".($instances['servico']['valor']*12).")","13($".($instances['servico']['valor']*13).")","14($".($instances['servico']['valor']*14).")","15($".($instances['servico']['valor']*15).")"]) !!}
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
                        <p>
                            <small>Avaliacao dos clientes</small>
                        </p>
                    </div>
                    <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 text-right">
                        <p>
                            <small>
                                <i class="glyphicon glyphicon-star"></i>
                                <i class="glyphicon glyphicon-star"></i>
                                <i class="glyphicon glyphicon-star"></i>
                                <i class="glyphicon glyphicon-star-empty"></i>
                                <i class="glyphicon glyphicon-star-empty"></i>
                            </small>
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
                        <p><small>Pedidos na fila</small></p>
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

                @if(isset($instances['servico']->User))
                    <div class="text-center col-md-12 col-md-offset-0">
                        <a href=""><img src="{{ $instances['servico']->User['foto'] }}"
                                        class="img-responsive img-thumbnail"></a>
                    </div>
                @else
                    <div class="text-center col-md-12 col-md-offset-0">
                        <a href=""><img src="http://lorempixel.com/400/400/?" class="img-responsive img-thumbnail"></a>
                    </div>
                @endif
            </div>

            <div class="panel-body text-justify">
                <small>
                    @if(isset($instances['servico']->User))
                        <strong><p> {{ $instances['servico']->User['nome'] }} </p></strong>
                        <p> {{ $instances['servico']->User['descricao'] }} </p>
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

        @if(isset($instances['servico']->Tags))
            <div class="container-fluid">
                @foreach($instances['servico']->Tags as $tag)
                    <span class="label label-default">{{ $tag['nome'] }}</span>
                @endforeach
            </div>
        @endif

    </div>

@endsection