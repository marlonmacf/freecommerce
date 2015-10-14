@extends('app.app')

@section('content')

    @include('app.controle.partials.menuCotrole')

    <div class="container">
        <h1>Vendas</h1><br/><br/>

        <ul class="nav nav-tabs">
            <li class="active">
                <a href="#">TODAS</a>
            </li>
            <li><a href="#">ATIVAS</a></li>
            <li><a href="#">ENTREGUES</a></li>
            <li><a href="#">COMPLETADAS</a></li>
            <li><a href="#">CANCELADAS</a></li>
        </ul>
        <br/>
        <table class="table">
            <tr>
                <th>Comprador</th>
                <th>Servico</th>
                <th>Vencimento</th>
                <th>Total</th>
                <th>Status</th>
            </tr>

            @if(isset($instances['vendas']))
                @foreach($instances['vendas'] as $venda)
                    <tr>
                        <td>{{ $venda['comprador'] }}</td>
                        <td>{{ $venda['titulo'] }}</td>
                        <td>{{ $venda['vencimento'] }}</td>
                        <td>{{ $venda['total'] }}</td>
                        <td>{{ $venda['status'] }}</td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="5" class="text-center">Nenhuma Venda realizada</td>
                </tr>
            @endif

        </table>
    </div>

@endsection