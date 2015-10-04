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
        <br />
        <table class="table">
            <tr>
                <th>Servico</th>
                <th>Vencimento</th>
                <th>Total</th>
                <th>Status</th>
                <th>Acoes</th>
            </tr>

            <tr>
                <td>Titulo do Servico</td>
                <td>30/10/2015</td>
                <td>15,00</td>
                <td>ATIVA</td>
                <td width="300">
                    <a href="#" class="btn btn-default btn-sm"><i class="glyphicon glyphicon-edit"></i> Editar </a>
                    <a href="#" class="btn btn-default btn-sm"><i class="glyphicon glyphicon-eye-open"></i> Visializar </a>
                    <a href="#" class="btn btn-default btn-sm"><i class="glyphicon glyphicon-trash"></i> Cancelar </a>
                </td>
            </tr>

            <tr>
                <td>Titulo do Servico2</td>
                <td>14/10/2015</td>
                <td>37,00</td>
                <td>ENTREGUE</td>
                <td width="300">
                    <a href="#" class="btn btn-default btn-sm" disabled><i class="glyphicon glyphicon-edit"></i> Editar </a>
                    <a href="#" class="btn btn-default btn-sm"><i class="glyphicon glyphicon-eye-open"></i> Visializar </a>
                    <a href="#" class="btn btn-default btn-sm" disabled><i class="glyphicon glyphicon-trash"></i> Cancelar </a>
                </td>
            </tr>

            <tr>
                <td>Titulo do Servico3</td>
                <td>30/10/2015</td>
                <td>15,00</td>
                <td>INATIVA</td>
                <td width="300">
                    <a href="#" class="btn btn-default btn-sm"><i class="glyphicon glyphicon-edit"></i> Editar </a>
                    <a href="#" class="btn btn-default btn-sm"><i class="glyphicon glyphicon-eye-open"></i> Visializar </a>
                    <a href="#" class="btn btn-default btn-sm"><i class="glyphicon glyphicon-trash"></i> &nbsp;&nbsp;&nbsp;Ativar&nbsp;&nbsp; </a>
                </td>
            </tr>
            {{--
            @foreach($categorias as $categoria)
                <tr>
                    <td>{{ $categoria->id }}</td>
                    <td>{{ $categoria->name }}</td>
                    <td>
                        <a href="{{ route('categories.edit', ['id'=>$categoria->id]) }}">Editar</a> |
                        <a href="{{ route('categories.destroy', ['id'=>$categoria->id]) }}">Deletar</a>
                    </td>

                    <td width="300">
                        <a href="#" class="btn btn-white btn-sm"><i class="fa fa-pencil"></i>Editar</a>
                        <a href="#" class="btn btn-white btn-sm"><i class="fa fa-eye"></i>Visializar</a>
                        <a href="#" class="btn btn-white btn-sm"><i class="fa fa-trash-o"></i>Excluir</a>
                    </td>
                </tr>
            @endforeach
            --}}
        </table>
        {{--}{!! $categories->render() !!}--}}
    </div>

@endsection