@extends('layout')

@section('cabecalho')
    Produtos
@endsection

@section('conteudo')

    @if(!empty($message))
        <div class="alert alert-success">
            {{$message}}
        </div>
    @endif

    <a href="/produtos/add" class="btn btn-dark mb-2">Adicionar</a>
    <a href="/produtos/showAll" class="btn btn-dark mb-2">Mostrar tudo</a>

    <ul class="list-group">
        @foreach($produtos as $produto)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <span id="nome-produto-{{$produto->id}}">{{$produto->nome}}</span>

                    <span class="d-flex">
                        <a href="/produtos/{{$produto->id}}/info" class="btn btn-info btn-sm mr-1">
                            <i class="fas fa-external-link-alt"></i>
                        </a>
                    <form method="post" action="/produtos/remover/{{ $produto->id }}"
                          onsubmit="return confirm('Tem certeza que deseja remover {{ addslashes($produto->nome) }}?')">
                        @csrf
                        <button class="btn btn-danger btn-sm">
                            <i class="far fa-trash-alt"></i>
                        </button>
                    </form>

                        <a href="/produtos/{{$produto->id}}/update" class ="btn btn-info btn-sm ml-1">
        <i class="fas fa-edit"></i>
                         </a>
                    </span>
                </li>
        @endforeach
    </ul>
@endsection
