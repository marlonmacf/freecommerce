@extends('app.app')

@section('content')

    @include('app.controle.partials.menuCotrole')

    <div class="container">
        <h1>Vendas</h1><br/><br/>

        <ul class="nav nav-tabs">
            <li class="active">
                <a href="#">TODAS</a>
            </li>
            <li><a href="#">TODAS</a></li>
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
                <th>Acoes</th>
            </tr>

            <tr>
                <td>Nome do Comprador</td>
                <td>Titulo do Servico</td>
                <td>30/10/2015</td>
                <td>R$ 30,00</td>
                <td>ATIVO</td>
                <td width="300">
                    <a href="#" class="btn btn-default btn-sm"><i class="glyphicon glyphicon-eye-open"></i> Detalhes
                    </a>
                </td>
            </tr>

            <tr>
                <td>Nome do Comprador2</td>
                <td>Titulo do Servico</td>
                <td>15/10/2015</td>
                <td>R$ 23,00</td>
                <td>ENTREGUE</td>
                <td width="300">
                    <a href="#" class="btn btn-default btn-sm"><i class="glyphicon glyphicon-eye-open"></i> Detalhes
                    </a>
                </td>
            </tr>

            <tr>
                <td>Nome do Comprador3</td>
                <td>Titulo do Servico</td>
                <td>13/10/2015</td>
                <td>R$ 12,00</td>
                <td>ENTREGUE</td>
                <td width="300">
                    <a href="#" class="btn btn-default btn-sm"><i class="glyphicon glyphicon-eye-open"></i> Detalhes
                    </a>
                </td>
            </tr>
        </table>
    </div>

@endsection