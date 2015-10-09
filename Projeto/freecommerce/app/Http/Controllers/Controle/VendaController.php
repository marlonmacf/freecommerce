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
        $servicos = DB::table('servicos')->where('idUser', 74)->get();

        $vendas = null;
        foreach ($servicos as $servico) {
            $solicitacoes = DB::table('solicitacoes')->where('idServico', $servico->id)->get();
            if ($solicitacoes) {
                $vendas[] = $solicitacoes;
            }
        }

        //dd($vendas);

        return view('app.controle.vendas.index.index');
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
