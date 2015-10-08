<?php

namespace FreeCommerce\Http\Controllers\Controle;

use Illuminate\Http\Request;
use FreeCommerce\Http\Requests;
use FreeCommerce\Http\Controllers\Controller;
use DB;

class HomeController extends Controller
{
    public function index()
    {
        $servicos = DB::table('servicos')->orderBy('avaliacao', 'desc')->paginate(6);
        $data['servicos'] = $servicos;

        //MENU CATEGORIAS
        $categorias = DB::table('categorias')->get();
        $data['categorias'] = $categorias;
        foreach($categorias as $i => $categoria){
            $data['competencias'][$categoria->id] = DB::table('competencias')->where('idCategoria', $categoria->id)->get();;
        }

        //dd($data);

        return view('app.home.index.index')->with('instances', $data);
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
