<?php

namespace FreeCommerce\Http\Controllers\Controle;

use FreeCommerce\Extra;
use FreeCommerce\Http\Requests\Controle\ServicoRequest;
use FreeCommerce\Servico;
use FreeCommerce\Tag;
use Illuminate\Http\Request;
use FreeCommerce\Http\Requests;
use FreeCommerce\Http\Controllers\Controller;
use DB;
use Illuminate\Support\Facades\Auth;

class ServicoController extends Controller
{
    private $servicoModel;
    private $tagModel;

    public function __construct(Servico $servicoModel, Tag $tagModel)
    {
        $this->servicoModel = $servicoModel;
        $this->tagModel = $tagModel;
    }

    public function index()
    {
        $servicos = DB::table('servicos')->where('idUser', Auth::user()->id)->paginate(4);

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

    public function store(ServicoRequest $request)
    {
        try {
            DB::beginTransaction();

            $request['idUser'] = Auth::user()->id;
            $request['idCompetencia'] = DB::table('competencias')->where('nome', $request->competencia)->first()->id;
            $input = $request->all();
            $servico = $this->servicoModel->fill($input);

            $servico->save();

            if (isset($request['chaves'])) {
                $chaves = str_replace([' ', '-', '(', ')', ',', ';', ':', '|', '!', '"', '#', '$', '%', '&', '/', '=', '?', '~', '^', '>', '<', 'ª', 'º'], ",", $request['chaves']);
                $chaves = explode(',', $chaves);

                foreach ($chaves as $i => $chave) {
                    $tag = new Tag();
                    if (($chave != "") && (!DB::table('tags')->where('nome', $chave)->first())) {
                        $tag = $tag->fill(['nome' => $chave]);
                        $tag->save();
                        $tags[] = DB::table('tags')->where('nome', $chave)->first()->id;
                    }
                }
                $servico->Tags()->withTimestamps()->sync($tags);
            }

            if (isset($request['extras'])) {
                foreach ($request['extras'] as $i => $extra) {
                    $extra['idServico'] = $servico->id;
                    $extraModel = new Extra();
                    $extraModel = $extraModel->fill($extra);
                    $extraModel->save();
                }
            }

            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            throw $e;
        }

        return redirect()->route('busca.servico', $servico->id);
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
