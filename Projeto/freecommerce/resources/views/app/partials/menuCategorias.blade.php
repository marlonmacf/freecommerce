@if(isset($instances['categorias']) && isset($instances['competencias']))

    <nav class="navbar navbar-default">
        <div class="col-sm-offset-0 col-xs-offset-0 col-md-offset-1 col-lg-offset-1">
            <ul class="nav navbar-nav">

                @foreach($instances['categorias'] as $categoria)
                    @if($categoria->id < 8)
                        <li class="dropdown">
                            <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-expanded="false"> {{ $categoria->nome }} <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                @foreach($instances['competencias'][$categoria->id] as $competencia)
                                    <li><a href="{{ route('busca.servicos.competencias', $competencia->id) }}"> {{ $competencia->nome }} </a></li>
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
                            @if($categoria->id >= 8)
                                <li><a href="#"> {{ $categoria->nome }} </a></li>
                            @endif
                        @endforeach
                    </ul>
                </li>

            </ul>
        </div>
    </nav>

@endif