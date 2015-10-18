@extends('app.app')

@section('content')

    @include('app.controle.partials.menuCotrole')

    <div class="container">
        <h1>Carrinho</h1>

        <br><br>

        <table class="table">
            <tr>
                <th>Servico</th>
                <th>Preco</th>
                <th>Descricao</th>
                <th>Acoes</th>
            </tr>

            @if(isset($instances->valor))
                <tr>
                    @if(isset($instances->Servico->titulo))
                        <td>{{ $instances->Servico->titulo }}</td>
                    @else
                        <td></td>
                    @endif
                    @if(isset($instances->valor))
                        <td>{{ $instances->valor }}</td>
                    @else
                        <td></td>
                    @endif
                    @if(isset($instances->descricao))
                        <td>{{ $instances->descricao }}</td>
                    @else
                        <td></td>
                    @endif
                    <td width="300">
                        <a href="{{ route('controle.carrinho.destroy') }}" class="btn btn-default btn-sm"><i
                                    class="glyphicon glyphicon-trash"></i>
                            Remover </a>
                        <a href="{{ route('controle.carrinho.finalizar') }}" class="btn btn-default btn-sm"><i
                                    class="glyphicon glyphicon-check"></i>
                            Finalizar Compra </a>
                    </td>
                </tr>
            @else
                <tr>
                    <td colspan="4">Nenhum Servico encontrado</td>
                </tr>
            @endif
        </table>
    </div>

@endsection