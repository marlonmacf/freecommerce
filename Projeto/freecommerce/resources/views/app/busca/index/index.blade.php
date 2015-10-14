@extends('app.app')

@section('content')

    @include('app.partials.menuCategorias')

    <div class="container span9 col-md-11 col-md-offset-1">

        {{-- Titulo --}}
        @if(isset($instances['competencia']))
            <h1><strong>Resultados de pesquisa para {{ $instances['competencia'] }}</strong></h1>
        @else
            <h1><strong>Competencia nao encontrada</strong></h1>
        @endif

        @if(isset($instances['servicos']))
            <p><strong>{{ count($instances['servicos']) }} resultados</strong></p><br/><br/><br/>
        @else
            <p><strong>0 resultados</strong></p><br/><br/><br/>
        @endif

        {{-- Filtros --}}
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title"> Categorias </h4>
                </div>
                <ul class="nav nav">
                    <li class="active">
                        <a href="{{ route('busca.servicos.competencias.tags', "&".$instances['tag']) }}"><strong>Todas
                                as Categorias</strong></a>
                    </li>
                </ul>

                @if(isset($instances['categorias']))
                    @foreach($instances['categorias'] as $i => $categoria)
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" href="#{{ $categoria->id }}">{{ $categoria->nome }}</a>
                            </h4>
                        </div>
                        <div id="{{ $categoria->id }}" class="panel-collapse collapse">
                            <ul class="nav nav">
                                @foreach($instances['competencias'][$i+1] as $competencia)
                                    <li class="active">
                                        <a href="{{ route('busca.servicos.competencias.tags', $competencia->id."&".$instances['tag']) }}"><strong>{{ $competencia->nome }}</strong></a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>

        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
            <div class="panel panel-default">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="#">Todos</a>
                    </li>
                    <li><a href="#">Recomendado</a></li>
                    <li><a href="#">Novo</a></li>
                </ul>
                <div class="panel-body">
                    <br/>
                    @if(isset($instances['servicos']) && !empty($instances['servicos']))
                        <div class="row">
                            @foreach($instances['servicos'] as $i => $servico)
                                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 text-left">

                                    <div class="container-fluid">
                                        <div class="panel panel-default">

                                            <a href="{{ route('busca.servico', $servico->id) }}"><img
                                                        src="{{"http://lorempixel.com/640/480/?" . $i }}"
                                                        class="img-responsive"></a>
                                            {{--<img src="{{ url('no-img.jpg') }}" alt="300" width="200" />--}}

                                            <div class="panel-body">
                                                @if(!empty($servico->descricao))
                                                    <p>
                                                        <small>
                                                            {{substr($servico->descricao, 0, 60) . "..."}}
                                                        </small>
                                                    </p>
                                                @else
                                                    <p>
                                                        <small>Descricao</small>
                                                    </p>
                                                @endif
                                            </div>

                                            <div class="panel-footer">
                                                <div class="row">
                                                    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                                        @if(!empty($servico->titulo))
                                                            <p><strong>{{$servico->titulo}}</strong></p>
                                                        @else
                                                            <p><strong>Servico</strong></p>
                                                        @endif
                                                    </div>
                                                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                                        @if(!empty($servico->duracao))
                                                            <p class="pull-right"><i
                                                                        class="glyphicon glyphicon-usd">{{$servico->duracao}}</i>
                                                            </p>
                                                        @else
                                                            <p class="pull-right"><i
                                                                        class="glyphicon glyphicon-usd">0</i>
                                                            </p>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <br/><br/>

                                </div>
                            @endforeach
                        </div>
                    @else
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                            <div class="container-fluid">
                                <br/><br/>

                                <p>Nenhum servico encontrado...</p>
                                <br/><br/><br/><br/><br/><br/><br/><br/><br/>
                                <br/><br/><br/><br/><br/><br/><br/><br/><br/>
                            </div>
                        </div>
                        <br/><br/>
                    @endif
                    @if(isset($instances['paginate']))
                        {!! $instances['servicos']->render() !!}
                    @endif
                </div>
            </div>
        </div>

    </div>

@endsection