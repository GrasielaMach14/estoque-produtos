@extends('layout')
@section('cabecalho')
    Produtos
@endsection

@section('conteudo')
<table class="table table-striped table-hover">
    <thead class="thead-dark">
        <tr>
            <th scope="col" class="coluna">Nome do produto</th>
            <th scope="col" class="coluna">Descrição</th>
            <th scope="col" class="coluna">Preço</th>
            <th scope="col" class="coluna">Quantidade</th>
        </tr>
    </thead>
    @foreach($produtos as $produto)
    <tr>
        <td class="coluna">{{ $produto->nome }}</td>
        <td class="coluna">{{ $produto->descricao }}</td>
        <td class="coluna">{{ $produto->preco }}</td>
        <td class="coluna">{{ $produto->quantidade }}</td>
    </tr>
    @endforeach
</table>
    <a href="/produtos/adicionar" class="btn btn-dark mt-5 btAdd">Adicionar</a>
@endsection