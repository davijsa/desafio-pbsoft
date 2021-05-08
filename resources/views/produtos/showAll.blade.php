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
            <th scope="col">Editar</th>
        </tr>
        </thead>
        <tbody>
        <tr class = "justify-content-between">

            @foreach($produtos as $produto)
            <td> {{$produto->nome}} </td>
            <td> {{$produto->quantidade}} </td>
            <td> {{$produto->categoria}} </td>
            <td> {{$produto->descricao}} </td>
            <td> {{'R$ ' . $produto->preco}} </td>

             <td> <span class="d-flex">
        <a href="/produtos/{{$produto->id}}/update" class ="btn btn-info btn-sm ml-1">
            <i class="fas fa-edit"></i></a> </span></td>
        </tr>
            @endforeach
        </tbody>
    </table>

    <span class="d-flex justify-content-between">
        <a href="/produtos/" class="btn btn-info btn-sm ml-1">
            <i class="fas fa-arrow-left"></i>
        </a>
    </span>
    </a>
@endsection


