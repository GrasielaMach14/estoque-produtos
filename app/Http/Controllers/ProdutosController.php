<?php

namespace App\Http\Controllers;

use App\Produto;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index()
    {
        $produtos = Produto::all();
        
        return view('produtos.index', compact('produtos'));
    }

    public function create()
    {
        return view('produtos.create');
    }

    public function store(Request $request)
    {
        $nome = $request->nome;
        $descricao = $request->descricao;
        $preco = $request->preco;
        $quantidade = $request->quantidade;
        $produto = Produto::create($request->all());
        
        echo "Produto com id {{ $produto->id }} criado: {{ $produto->nome }}";
        
    }
}