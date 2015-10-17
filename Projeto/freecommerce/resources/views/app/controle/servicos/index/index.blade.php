@extends('app.app')

@section('content')

    @include('app.controle.partials.menuCotrole')

    <div class="container">
        <h1>Servicos</h1>

        <a href="{{ route('controle.servico.create') }}" class="btn btn-default">Novo Servico</a>
        <br><br>

        <table class="table">
            <tr>
                <th>Servico</th>
                <th>Status</th>
                <th>Pedidos</th>
                <th>Avaliacao</th>
                <th>Acoes</th>
            </tr>

            @if(isset($instances))
                @foreach($instances as $servico)
                    <tr>
                        @if(isset($servico->titulo))
                            <td>{{ $servico->titulo }}</td>
                        @else
                            <td></td>
                        @endif
                        <td>ATIVO</td>
                        <td> 0</td>
                        <td>
                            @for($cont = 0; $cont < ($servico->avaliacao/20); $cont++)
                                <i class="glyphicon glyphicon-star"></i>
                            @endfor
                            @for($cont; $cont < 5; $cont++)
                                <i class="glyphicon glyphicon-star-empty"></i>
                            @endfor
                        </td>
                        <td width="300">
                            <a href="#" class="btn btn-default btn-sm"><i class="glyphicon glyphicon-edit"></i> Editar
                            </a>
                            <a href="{{ route('busca.servico', $servico->id) }}" class="btn btn-default btn-sm"><i
                                        class="glyphicon glyphicon-eye-open"></i>
                                Visializar
                            </a>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="5">Nenhum Servico encontrado</td>
                </tr>
            @endif
        </table>
        @if(isset($instances))
            {!! $instances->render() !!}
        @endif
    </div>

@endsection