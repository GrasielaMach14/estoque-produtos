@extends('layout')
@section('cabecalho')
    Produtos
@endsection

@section('conteudo')

@if(!empty($mensagem))
<div class="alert alert-sucess">
    {{ $mensagem }}
</div>
@endif

<table class="table table-striped table-hover" style="margin-left:4%">
    <thead class="thead-dark">
        <tr>
            <th scope="col" class="coluna">#</th>
            <th scope="col" class="coluna">Nome do produto</th>
            <th scope="col" class="coluna">Descrição</th>
            <th scope="col" class="coluna">Preço</th>
            <th scope="col" class="coluna">Quantidade</th>
            <th scope="col" class="coluna">Ação</th>
        </tr>
    </thead>
    @foreach($produtos as $produto)
    <tr>    
        <td class="coluna">{{ $produto->id }}</td>
        <td class="coluna">{{ $produto->nome }}</td>
        <td class="coluna">{{ $produto->descricao }}</td>
        <td class="coluna">{{ $produto->preco }}</td>
        <td class="coluna">{{ $produto->quantidade }}</td>
        <td>            
            <form method="post" action="/produtos/deletar/{{ $produto->id}}" onsubmit="return confirm('Tem certeza que deseja remover {{ addslashes( $produto->nome )}}?')">
                        @csrf
                <button class="btn btn-danger btn-sm">
                    <i class="far fa-trash-alt"></i>
                </button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
    <a href="{{route('criar_produto')}}" class="btn btn-dark mt-5 btAdd">Adicionar</a>
@endsection