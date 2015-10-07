<?php

namespace FreeCommerce\Http\Controllers\Controle;

use Illuminate\Http\Request;
use FreeCommerce\Http\Requests;
use FreeCommerce\Http\Controllers\Controller;

class ServicoController extends Controller
{
    public function index()
    {
        return view('app.controle.servicos.index.index');
    }

    public function create()
    {
        return view('app.controle.servicos.create.index');
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

    public function busca()//$id
    {
        return view('app.busca.index.index');
    }

    public function buscaServico($id)
    {
        return view('app.busca.servico.index.index');
    }
}
