<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FreeCommerce</title>

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

    <br />

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

@yield('content')

<br/>
<br/>
<br/>

<!-- Scripts -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>
