<?php

namespace App\Http\Controllers;


use App\Http\Requests\ProdutosFormRequest;
use App\Produto;
use App\Services\CreateProduto;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index(Request $request) {
        $produtos = Produto::query()->orderBy('nome')->get();
        $message = $request->session()->get('added_produto');
        $request->session()->remove('added_produto');

        return view ('produtos.index', compact ('produtos', 'message'));
    }

    public function add()
    {
        return view('produtos.add');
    }

    public function store(ProdutosFormRequest $request, CreateProduto $createProduto)
    {
        $produto = $createProduto->createProduto(
            $request->nome,
            $request->categoria,
            $request->descricao,
            $request->quantidade,
            $request->preco
        );
        $request->session()->flash('added_produto', "Produto adicionado com sucesso {$produto->nome}");

        return redirect()->route('produtos.index');
    }

    public function destroy(Request $request)
    {
        Produto::destroy($request->id);
        $request->session()->flash('added_produto', "Produto removido com sucesso");
        return redirect()->route('produtos.index');
    }

    public function show(int $produtoId)
    {
       $produto = Produto::find($produtoId);
       return view('produtos.show', compact('produto'));
    }

    public function update(int $produtoId)
    {
        $produto= Produto::find($produtoId);
        return view('produtos.update', compact('produto'));
    }

    public function updateNome(int $id, Request $request)
    {
        $produto = Produto::find($id);
        $novoNome = $request->nome;
        $produto->nome = $novoNome;
        $produto->save();
    }

    public function updateCategoria(int $id, Request $request)
    {
        $produto = Produto::find($id);
        $novaCategoria = $request->categoria;
        $produto->categoria = $novaCategoria;
        $produto->save();
    }

    public function updateQuantidade(int $id, Request $request)
    {
        $produto = Produto::find($id);
        $novaQuantidade = $request->quantidade;
        $produto->quantidade = $novaQuantidade;
        $produto->save();
    }

    public function updateDescricao(int $id, Request $request)
    {
        $produto = Produto::find($id);
        $novaDescricao = $request->descricao;
        $produto->descricao = $novaDescricao;
        $produto->save();
    }

    public function updatePreco(int $id, Request $request)
    {
        $produto = Produto::find($id);
        $novoPreco = $request->preco;
        $produto->preco = $novoPreco;
        $produto->save();
    }

}

