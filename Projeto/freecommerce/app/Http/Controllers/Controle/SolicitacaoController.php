<?php

namespace FreeCommerce\Http\Controllers\Controle;

use Illuminate\Http\Request;
use FreeCommerce\Http\Requests;
use FreeCommerce\Http\Controllers\Controller;
use DB;
use Illuminate\Support\Facades\Auth;

class SolicitacaoController extends Controller
{
    public function index()
    {
        $solicitacoes = DB::table('solicitacoes')->where('idUser', Auth::user()->id)->get();

        if (isset($solicitacoes)) {
            foreach ($solicitacoes as $i => $solicitacao) {
                $data['solicitacoes'][$i]['id'] = $solicitacao->id;
                $servico = DB::table('servicos')->where('id', $solicitacao->idServico)->first();
                $data['solicitacoes'][$i]['titulo'] = $servico->titulo;
                $data['solicitacoes'][$i]['vencimento'] = date('d/m/Y', strtotime("+$servico->duracao days"));
                $data['solicitacoes'][$i]['total'] = 5;//$data['solicitacoes'][$i]['total'] = $venda->total;
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
                        $data['solicitacoes'][$i]['status'] = $status;*/
                $data['solicitacoes'][$i]['status'] = "ATIVA";
            }
        }

        if (isset($data)) {
            return view('app.controle.solicitacoes.index.index')->with('instances', $data);
        } else {
            return view('app.controle.solicitacoes.index.index');
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
