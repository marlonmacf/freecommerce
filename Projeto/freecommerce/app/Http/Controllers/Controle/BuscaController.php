<?php

namespace FreeCommerce\Http\Controllers\Controle;

use Illuminate\Http\Request;
use FreeCommerce\Http\Requests;
use FreeCommerce\Http\Controllers\Controller;
use DB;

class BuscaController extends Controller
{
    public function buscaServico($id)
    {
        //MENU CATEGORIAS
        $categorias = DB::table('categorias')->get();
        $data['categorias'] = $categorias;
        foreach ($categorias as $i => $categoria) {
            $data['competencias'][$categoria->id] = DB::table('competencias')->where('idCategoria', $categoria->id)->get();;
        }

        $servico = DB::table('servicos')->where('id', $id)->get();

        $data['titulo'] = $servico[0]->titulo;
        $data['duracao'] = $servico[0]->duracao;
        $data['descricao'] = $servico[0]->descricao;
        $data['avaliacao'] = $servico[0]->avaliacao;

        $imagens = DB::table('imagens')->where('idServico', $servico[0]->id)->get();
        foreach ($imagens as $imagem) {
            $data['imagens'][] = $imagem->nome;
        }

        $user = DB::table('users')->where('id', $servico[0]->idUser)->get();
        //$data['user']['foto'] = $user[0]->foto;
        $data['user']['nome'] = $user[0]->nome;
        $data['user']['descricao'] = $user[0]->descricao;

        $comentarios = DB::table('comentarios')->where('idServico', $servico[0]->id)->get();
        foreach ($comentarios as $i => $comentario) {
            $data['comentarios'][$i]['idUser'] = $comentario->idUser;
            $userComentario = DB::table('users')->where('id', $comentario->idUser)->get();
            //$data['comentarios'][$i]['fotoUser'] = $userComentario->foto;
            $data['comentarios'][$i]['nomeUser'] = $userComentario[0]->nome;
            $data['comentarios'][$i]['avaliacao'] = $comentario->avaliacao;
            $data['comentarios'][$i]['descricao'] = $comentario->descricao;
            $data['comentarios'][$i]['data'] = $comentario->created_at;
        }

        $extras = DB::table('extras')->where('idServico', $servico[0]->id)->get();
        foreach ($extras as $i => $extra) {
            $data['extras'][$i]['id'] = $extra->id;
            $data['extras'][$i]['descricao'] = $extra->descricao;
        }

        $servicos_has_tags = DB::table('servicos_has_tags')->where('idServico', $servico[0]->id)->get();
        foreach ($servicos_has_tags as $i => $servico_has_tag) {
            $tag = DB::table('tags')->where('id', $servico_has_tag->idTag)->get();
            $data['tags'][$i] = $tag[0]->nome;
        }

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
