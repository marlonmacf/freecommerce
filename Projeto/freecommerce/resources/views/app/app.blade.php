<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>

    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">

    <!-- Fonts -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<nav class="navbar navbar">

    <div class="container">

        <div class="navbar-header">
            <a class="navbar-brand" href="{{ url('/') }}"><strong> FreeCommerce </strong></a>
            <ul class="nav navbar-form pull-left">
                <li><input type="text" class="form-control" placeholder="Encontre Servicos">
                    <button type="submit" class="btn-link"><i class="glyphicon glyphicon-search"></i></button>
                </li>
            </ul>
        </div>

        <ul class="nav navbar-nav pull-right">
            @if (Auth::guest())
                <li><a href="{{ url('/auth/login') }}"> Acesar sua conta </a></li>
                <li><a href="{{ url('/auth/register') }}"> Criar uma conta </a></li>
            @else
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                       aria-expanded="false"><i class="glyphicon glyphicon-user"></i> {{ Auth::user()->nome }} <span
                                class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#"> Minhas Vendas </a></li>
                        <li><a href="#"> Minhas Solicitacoes </a></li>
                        <li><a href="#"> Meu Perfil </a></li>
                        <div class="nav-divider"></div>
                        <li><a href="#"> Cofiguracoes </a></li>
                        <div class="nav-divider"></div>
                        <li><a href="#"> Ajuda </a></li>
                        <div class="nav-divider"></div>
                        <li><a href="{{ url('/auth/logout') }}"> Sair </a></li>
                    </ul>
                </li>
            @endif
        </ul>

    </div>

    <div class="row">
        <nav class="navbar navbar-default">
            <div class="container-fluid  col-md-12 col-md-offset-1">
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="{{ route('busca.servicos') }}">Design Grafico</a></li>
                        <li><a href="{{ url('/') }}">Marketing Digital</a></li>
                        <li><a href="{{ url('/') }}">Escrita e Traducao</a></li>
                        <li><a href="{{ url('/') }}">Video e Animacao</a></li>
                        <li><a href="{{ url('/') }}">Musica e Audio</a></li>
                        <li><a href="{{ url('/') }}">Programacao e Tecnologia</a></li>
                        <li><a href="{{ url('/') }}">Publicidade</a></li>
                        <li><a href="{{ url('/') }}">Mais</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

</nav>

@yield('content')

<br/>
<br/>
<br/>

<!-- Scripts -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>
