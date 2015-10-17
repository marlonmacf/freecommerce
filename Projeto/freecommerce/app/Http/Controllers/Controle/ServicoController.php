<?php

namespace FreeCommerce\Http\Controllers\Controle;

use Illuminate\Http\Request;
use FreeCommerce\Http\Requests;
use FreeCommerce\Http\Controllers\Controller;
use DB;
use Illuminate\Support\Facades\Auth;

class ServicoController extends Controller
{
    public function index()
    {
        $servicos = DB::table('servicos')->where('idUser', Auth::user()->id)->paginate(10);

        return view('app.controle.servicos.index.index')->with('instances', $servicos);
    }

    public function create()
    {
        //MENU CATEGORIAS
        $categorias = DB::table('categorias')->get();
        foreach ($categorias as $i => $categoria) {
            $data['categorias'][$i] = $categoria->nome;
            $competencias = DB::table('competencias')->where('idCategoria', $categoria->id)->get();;
            foreach ($competencias as $competencia) {
                $data['competencias'][$i][] = $competencia->nome;
            }
        }

        return view('app.controle.servicos.create.index')->with('instances', $data);
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
