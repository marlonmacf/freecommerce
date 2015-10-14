<?php

namespace FreeCommerce\Http\Controllers\Controle;

use Illuminate\Http\Request;
use FreeCommerce\Http\Requests;
use FreeCommerce\Http\Controllers\Controller;
use DB;
use Illuminate\Support\Facades\Auth;

class VendaController extends Controller
{
    public function index()
    {
        $servicos = DB::table('servicos')->where('idUser', Auth::user()->id)->get();

        foreach ($servicos as $i => $servico) {
            $solicitacoes = DB::table('solicitacoes')->where('idServico', $servico->id)->get();
            if ($solicitacoes) {
                $vendas[] = $solicitacoes;
            }
        }

        if (isset($vendas)) {
            foreach ($vendas as $i => $vendasServico) {
                foreach ($vendasServico as $j => $venda) {
                    $data['vendas'][$venda->id]['id'] = $venda->id;
                    $user = DB::table('users')->where('id', $venda->idUser)->first();
                    $data['vendas'][$venda->id]['comprador'] = $user->nome;
                    $servico = DB::table('servicos')->where('id', $venda->idServico)->first();
                    $data['vendas'][$venda->id]['titulo'] = $servico->titulo;
                    $data['vendas'][$venda->id]['vencimento'] = date('d/m/Y', strtotime("+$servico->duracao days"));
                    $data['vendas'][$venda->id]['total'] = 5;//$data['vendas'][$venda->id]['total'] = $venda->total;
                    /*$status = "ATIVA";
                    if ($venda->status == 1) {
                        $status = "ENTREGUE";
                    } else {
                        if ($venda->status == 2) {
                            $status = "COMPLETADA";
                        } else {
                            if ($venda->status == 3) {
                                $status = "CANCELADA";
                            }
                        }
                    }
                    $data['vendas'][$venda->id]['status'] = $status;*/
                    $data['vendas'][$venda->id]['status'] = "ATIVA";

                }
            }
        }

        if (isset($data)) {
            return view('app.controle.vendas.index.index')->with('instances', $data);
        } else {
            return view('app.controle.vendas.index.index');
        }
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
