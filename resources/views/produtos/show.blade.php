@extends('layout')

@section('cabecalho')
    Produto
@endsection

@section('conteudo')

    <table class="table">
        <thead class ="thead-dark">
        <tr>
            <th scope="col">Nome</th>
            <th scope="col">Quantidade</th>
            <th scope="col">Categoria</th>
            <th scope="col">Descrição</th>
            <th scope="col">Preço</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td> {{$produto->nome}} </td>
            <td> {{$produto->quantidade}} </td>
            <td> {{$produto->categoria}} </td>
            <td> {{$produto->descricao}} </td>
            <td> {{'R$ ' . $produto->preco}} </td>
        </tr>
        </tbody>
    </table>

    <span class="d-flex justify-content-between">
        <a href="/produtos/" class="btn btn-info btn-sm ml-1">
            <i class="fas fa-arrow-left"></i>
        </a>

    <a href="/produtos/{{$produto->id}}/update" class ="btn btn-info btn-sm ml-1">
        <i class="fas fa-edit"></i>
    </a>
@endsection

