<?php

namespace FreeCommerce\Http\Controllers\Controle;

use FreeCommerce\Servico;
use Illuminate\Http\Request;
use FreeCommerce\Http\Requests;
use FreeCommerce\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BuscaController extends Controller
{
    private $servicoModel;

    public function __construct(Servico $servicoModel)
    {
        $this->servicoModel = $servicoModel;
    }

    public function buscaServico($id)
    {
        //MENU CATEGORIAS
        $categorias = DB::table('categorias')->get();
        $data['categorias'] = $categorias;
        foreach ($categorias as $i => $categoria) {
            $data['competencias'][$categoria->id] = DB::table('competencias')->where('idCategoria', $categoria->id)->get();;
        }

        $data['servico'] = $this->servicoModel->with('Imagens')->with('User')->with('Comentarios')->with('Extras')->with('Tags')->where('id', $id)->first();

        foreach ($data['servico']->Comentarios as $i => $comentario) {
            $comentario->User = DB::table('users')->where('id', $comentario->idUser)->first();
        }

        if(isset(Auth::user()->id) && $data['servico']->User['id'] != Auth::user()->id){
            $data['servico']->compravel = true;
        } else {
            $data['servico']->compravel = false;
        }

        //dd($data);

        return view('app.busca.servico.index.index')->with('instances', $data);
    }

    public function buscaServicosCompetencia($id)
    {
        //MENU CATEGORIAS
        $categorias = DB::table('categorias')->get();
        $data['categorias'] = $categorias;
        foreach ($categorias as $i => $categoria) {
            $data['competencias'][$categoria->id] = DB::table('competencias')->where('idCategoria', $categoria->id)->get();;
        }

        $competencia = DB::table('competencias')->where('id', $id)->first();

        $data['tag'] = "";
        $data['competencia'] = $competencia->nome;
        $data['servicos'] = DB::table('servicos')->where('idCompetencia', $id)->get();

        //dd($data);

        return view('app.busca.index.index')->with('instances', $data);
    }

    public function buscaServicosTag(Request $request)
    {
        //MENU CATEGORIAS
        $categorias = DB::table('categorias')->get();
        $data['categorias'] = $categorias;
        foreach ($categorias as $i => $categoria) {
            $data['competencias'][$categoria->id] = DB::table('competencias')->where('idCategoria', $categoria->id)->get();;
        }

        $data['tag'] = $request['tag'];
        $data['competencia'] = $request['tag'];

        if ($request['tag']) {
            $tags = DB::table('tags')->where('nome', 'like', '%' . $request['tag'] . '%')->get();

            foreach ($tags as $tag) {
                $servicos_has_tags = DB::table('servicos_has_tags')->where('idTag', $tag->id)->get();
            }

            if (isset($servicos_has_tags)) {
                foreach ($servicos_has_tags as $servico_has_tag) {
                    $data['servicos'][] = DB::table('servicos')->where('id', $servico_has_tag->idServico)->first();
                }
            }
        }

        return view('app.busca.index.index')->with('instances', $data);
    }

    public function buscaServicosCompetenciaTag($competenciaTag)
    {
        //MENU CATEGORIAS
        $categorias = DB::table('categorias')->get();
        $data['categorias'] = $categorias;
        foreach ($categorias as $i => $categoria) {
            $data['competencias'][$categoria->id] = DB::table('competencias')->where('idCategoria', $categoria->id)->get();;
        }

        $competenciaTag = explode('&', $competenciaTag);
        $competencia = $competenciaTag[0];
        $data['tag'] = $competenciaTag[1];

        if ($data['tag'] != "") {
            $tags = DB::table('tags')->where('nome', 'like', '%' . $data['tag'] . '%')->get();

            foreach ($tags as $tag) {
                $servicos_has_tags = DB::table('servicos_has_tags')->where('idTag', $tag->id)->get();
            }

            if (isset($servicos_has_tags)) {
                foreach ($servicos_has_tags as $servico_has_tag) {
                    if ($competencia != "") {
                        $servico = DB::table('servicos')->where('id', $servico_has_tag->idServico)->where('idCompetencia', $competencia)->first();
                    } else {
                        $servico = DB::table('servicos')->where('id', $servico_has_tag->idServico)->first();
                    }

                    if ($servico) {
                        $data['servicos'][] = $servico;
                    }
                }
            }

            if ($competencia != "") {
                $competencia = DB::table('competencias')->where('id', $competencia)->first();
                $data['competencia'] = $competencia->nome . ' :: ' . $data['tag'];
            } else {
                $data['competencia'] = $data['tag'];
            }
        } else {
            $competencia = DB::table('competencias')->where('id', $competencia)->first();
            if ($competencia) {
                $data['competencia'] = $competencia->nome;
                $data['servicos'] = DB::table('servicos')->where('idCompetencia', $competencia->id)->get();
            } else {
                $data['competencia'] = "Todas as Competencias";
                $data['servicos'] = DB::table('servicos')->paginate(6);
                $data{'paginate'} = true;
            }
        }

        return view('app.busca.index.index')->with('instances', $data);
    }
}
