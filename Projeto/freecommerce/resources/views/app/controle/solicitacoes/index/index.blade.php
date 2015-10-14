@extends('app.app')

@section('content')

    @include('app.controle.partials.menuCotrole')

    <div class="container">
        <h1>Solicitacoes</h1>

        <br><br>

        <ul class="nav nav-tabs">
            <li class="active">
                <a href="#">TODAS</a>
            </li>
            <li><a href="#">ATIVAS</a></li>
            <li><a href="#">RECEBIDAS</a></li>
            <li><a href="#">COMPLETADAS</a></li>
            <li><a href="#">CANCELADAS</a></li>
        </ul>
        <br/>
        <table class="table">
            <tr>
                <th>Servico</th>
                <th>Vencimento</th>
                <th>Total</th>
                <th>Status</th>
            </tr>

            @if(isset($instances['solicitacoes']))
                @foreach($instances['solicitacoes'] as $solicitacao)
                    <tr>
                        <td>{{ $solicitacao['titulo'] }}</td>
                        <td>{{ $solicitacao['vencimento'] }}</td>
                        <td>{{ $solicitacao['total'] }}</td>
                        <td>{{ $solicitacao['status'] }}</td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="5" class="text-center">Nenhuma Solicitacao</td>
                </tr>
            @endif

        </table>
    </div>

@endsection