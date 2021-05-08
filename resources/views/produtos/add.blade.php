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

<form method="post">
    @csrf
    <div class="row">
        <div class="col col-4">
            <label for="nome">Nome</label>
                <input type="text" class="form-control" name="nome" id ="nome">
        </div>

        <div class="col col-8">
            <label for="categoria">Categoria</label>
            <input type="text" class="form-control" name="categoria" id="categoria">
        </div>
    </div>

    <div class="row">
        <div class="col col-8">
            <label for="descricao">Descrição</label>
                <input type="text" class="form-control" name="descricao" id="descricao">
        </div>

        <div class="col col-2">
            <label for="quantidade">Quantidade</label>
                <input type="number" class="form-control" name="quantidade" id ="quantidade">
        </div>

        <div class="col col-2">
            <label for="preco">Preço</label>
                <input type="number" class="form-control" name="preco" id ="preco">
        </div>

    </div>
    <button class="btn btn-primary mt-2">Adicionar</button>
</form
@endsection

