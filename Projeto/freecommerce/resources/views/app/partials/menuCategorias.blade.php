@if(isset($instances['categorias']) && isset($instances['competencias']))

    <div class="navbar-fixed-top">
        <br/><br/><br/>

        <div class="row">
            <nav class="navbar navbar-inverse">
                <div class="container span9 text-center col-md-11 col-md-offset-1">
                    <ul class="nav navbar-nav">
                        @foreach($instances['categorias'] as $categoria)
                            @if($categoria->id < 9)
                                <li class="dropdown">
                                    <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                       aria-expanded="false"> {{ $categoria->nome }} <span class="caret"></span></a>
                                    <ul class="dropdown-menu" role="menu">
                                        @foreach($instances['competencias'][$categoria->id] as $competencia)
                                            <li>
                                                <a href="{{ route('busca.servicos.competencias', $competencia->id) }}"> {{ $competencia->nome }} </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                            @endif
                        @endforeach
                        <li class="dropdown">
                            <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-expanded="false"> Mais <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                @foreach($instances['categorias'] as $categoria)
                                    @if($categoria->id >= 9)
                                        <li><a href="#"> {{ $categoria->nome }} </a></li>
                                    @endif
                                @endforeach
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>

@endif

<nav class="navbar navbar-default navbar-fixed-top navbar-shrink">
    <div class="container">

        <div class="navbar-header page-scroll">

            <a class="navbar-brand" href="{{ url('/') }}"><strong> FreeCommerce </strong></a>

            <ul class="nav navbar-form pull-left">
                {!! Form::open(array('route' => 'busca.servicos.tags', 'method' =>'get' ,'class' => 'form-horizontal ajax', 'id' => 'busca')) !!}
                <div class="input-group">
                    <li>
                        {!! Form::input('text', "tag", null, ['class' => 'form-control', 'id' => 'tag', 'placeholder' => "Encontre Servicos"]) !!}
                        <button type="submit" class="btn-link text-center" id="btnBuscar">
                            <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </li>
                </div>
                {!! Form::close() !!}
            </ul>

        </div>

        <ul class="nav navbar-nav pull-right">
            @if (Auth::guest())
                <li><a href="{{ url('/auth/login') }}"> Acesar sua conta </a></li>
                <li><a href="{{ url('/auth/register') }}"> Criar uma conta </a></li>
            @else
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                       aria-expanded="false"><i class="glyphicon glyphicon-user"></i> {{ Auth::user()->nome }}
                        <span
                                class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="{{ route('controle.servico.index') }}"> Meus Servicos </a></li>
                        <li><a href="{{ route('controle.venda.index') }}"> Minhas Vendas </a></li>
                        <li><a href="{{ route('controle.solicitacao.index') }}"> Minhas Solicitacoes </a></li>
                        <li><a href="{{ route('controle.perfil.index') }}"> Meu Perfil </a></li>
                        <div class="nav-divider"></div>
                        <li><a href="#"> Ajuda </a></li>
                        <div class="nav-divider"></div>
                        <li><a href="{{ url('/auth/logout') }}"> Sair </a></li>
                    </ul>
                </li>
            @endif
        </ul>

    </div>
</nav>