<?php

namespace App\Services;

use App\Produto;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Integer;

class CreateProduto
{
    public function createProduto(string $nome, string $categoria, string $descricao, string $quantidade, string $preco): Produto
    {
        $produto = Produto::create([
            'nome' => $nome,
            'categoria' => $categoria,
            'descricao' => $descricao,
            'quantidade' => $quantidade,
            'preco' => $preco
        ]);
        return $produto;
    }
}
