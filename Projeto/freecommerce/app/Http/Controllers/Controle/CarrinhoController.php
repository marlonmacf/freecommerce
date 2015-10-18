<?php

namespace FreeCommerce\Http\Controllers\Controle;

use FreeCommerce\Servico;
use FreeCommerce\Solicitacao;
use Illuminate\Http\Request;
use FreeCommerce\Http\Requests;
use FreeCommerce\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CarrinhoController extends Controller
{
    private $solicitacao;

    /**
     * @param Cart $cart
     */
    public function __construct(Solicitacao $solicitacao)
    {
        $this->solicitacao = $solicitacao;
    }

    public function index()
    {
        if (!Session::has('solicitacao')) {
            Session::set('solicitacao', $this->solicitacao);
        }

        return view('app.controle.carrinho.index.index', ['instances' => Session::get('solicitacao')]);
    }

    public function add($id)
    {
        $solicitacao = $this->getCart();
        $servico = DB::table('servicos')->where('id', $id)->first();

        $solicitacao['idUser'] = Auth::user()->id;
        $solicitacao['idServico'] = $servico->id;
        $solicitacao['valor'] = $servico->valor;
        $solicitacao['descricao'] = "Adicionado ao carrinho";
        $solicitacao['Servico'] = DB::table('servicos')->where('id', $servico->id)->first();

        Session::set('solicitacao', $solicitacao);

        //dd(Session::get('solicitacao'));

        return view('app.controle.carrinho.index.index', ['instances' => Session::get('solicitacao')]);
    }

    public function destroy()
    {
        Session::forget('solicitacao');

        return view('app.controle.carrinho.index.index', ['instances' => Session::get('solicitacao')]);
    }

    public function getCart()
    {
        if (Session::has('solicitacao')) {
            $solicitacao = Session::get('solicitacao');
        } else {
            $solicitacao = $this->solicitacao;
        }
        return $solicitacao;
    }

    public function finalizar()
    {
        try {
            DB::beginTransaction();

            Session::get('solicitacao');

            $solicitacao = new Solicitacao();

            $solicitacao = $solicitacao->fill([
                'idUser' => Session::get('solicitacao')->idUser,
                'idServico' => Session::get('solicitacao')->idServico,
                'valor' => Session::get('solicitacao')->valor,
                'descricao' => Session::get('solicitacao')->descricao
            ]);

            $solicitacao->save();

            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            throw $e;
        }

        return redirect()->route('controle.solicitacao.index');
    }
}
