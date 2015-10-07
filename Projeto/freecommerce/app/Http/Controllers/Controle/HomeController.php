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

        //dd($servicos);

        return view('app.home.index.index')->with('servicos', $servicos);
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
