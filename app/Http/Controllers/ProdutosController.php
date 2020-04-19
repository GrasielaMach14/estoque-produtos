<?php

namespace App\Http\Controllers;

use App\Produto;
use App\Http\Requests\ProdutosFormRequest;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index(Request $request)
    {
        $produtos = Produto::query()
                    ->orderBy('nome')
                    ->get();
        
        $mensagem = $request->session()->get('mensagem');

        return view('produtos.index', compact('produtos', 'mensagem'));
    }

    public function create()
    {
        return view('produtos.create');
    }

    public function store(ProdutosFormRequest $request)
    {
        $nome = $request->nome;
        $descricao = $request->descricao;
        $preco = $request->preco;
        $quantidade = $request->quantidade;
        $produto = Produto::create($request->all());
        $request->session()
                ->flash(
                    'mensagem', 
                    "Produto id({$produto->id}) - {$produto->nome} criado com sucesso."
                );
        
        return redirect()->route('listar_produtos');        
    }

    public function destroy(Request $request)
    {
        Produto::destroy($request->id);
        $request->session()
                ->flash(
                    'mensagem', 
                    "Produto removido com sucesso."
                );
        
            return redirect()->route('listar_produtos');
    }
}