@extends('layout')
@section('cabecalho')
   Adicionar Produtos
@endsection

@section('conteudo')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST">
    @csrf
    <div class="row" style="margin-left:10%">
        <div class="col-md-6">
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" name="nome" id="nome">
            <label for="descricao">Descrição:</label>
            <input type="text" class="form-control" name="descricao" id="descricao">
        </div>
        <div class="col-md-2">
            <label for="preco">Preço:</label>
            <input type="number" class="form-control" name="preco" id="preco">
            <label for="quantidade">Quantidade:</label>
            <input type="number" class="form-control" name="quantidade" id="quantidade">
        </div>
        <div class="col-md-2">
        </div>
    </div>
    <button class="btn btn-primary mt-5" for="nome" style="margin-left:63%">Salvar</button>
</form>
@endsection
      