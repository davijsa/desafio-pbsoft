@extends('layout')

@section('cabecalho')
    Atualizar Produto
@endsection

@section('conteudo')

    <ul class="list-group">

        <li class="list-group-item d-flex justify-content-between align-items-center">

            <span id="nome-produto-">{{'Nome: ' . $produto->nome }}</span>

            <div class="input-group w-50" hidden id="input-nome-produto-">
                <input type="text" class="form-control" value="{{$produto->nome}}">
                <div class="input-group-append">
                    <button class="btn btn-primary" onclick="updateNome({{$produto->id}})">
                        <i class="fas fa-check"></i>
                    </button>
                    @csrf
                </div>
            </div>

                <span class="d-flex">
            <button class="btn btn-info btn-sm mr-1" onclick="toggleInputNome()">
                <i class="fas fa-edit"></i>
            </button>
                </span>
        </li>

        <li class="list-group-item d-flex justify-content-between align-items-center">

            <span id="categoria-produto-">{{'Categoria: ' . $produto->categoria }}</span>

            <div class="input-group w-50" hidden id="input-categoria-produto-">
                <input type="text" class="form-control" value="{{$produto->categoria}}">
                <div class="input-group-append">
                    <button class="btn btn-primary" onclick="updateCategoria({{$produto->id}})">
                        <i class="fas fa-check"></i>
                    </button>
                    @csrf
                </div>
            </div>

            <span class="d-flex">
            <button class="btn btn-info btn-sm mr-1" onclick="toggleInputCategoria()">
                <i class="fas fa-edit"></i>
            </button>
                </span>

        </li>

        <li class="list-group-item d-flex justify-content-between align-items-center">

            <span id="quantidade-produto-">{{'Quantidade: ' . $produto->quantidade }}</span>

            <div class="input-group w-50" hidden id="input-quantidade-produto-">
                <input type="number" class="form-control" value="{{$produto->quantidade}}">
                <div class="input-group-append">
                    <button class="btn btn-primary" onclick="updateQuantidade({{$produto->id}})">
                        <i class="fas fa-check"></i>
                    </button>
                    @csrf
                </div>
            </div>

            <span class="d-flex">
            <button class="btn btn-info btn-sm mr-1" onclick="toggleInputQuantidade()">
                <i class="fas fa-edit"></i>
            </button>
                </span>

        </li>

        <li class="list-group-item d-flex justify-content-between align-items-center">
            <span id="descricao-produto-">{{'Descrição: ' . $produto->descricao }}</span>

            <div class="input-group w-50" hidden id="input-descricao-produto-">
                <input type="text" class="form-control" value="{{$produto->descricao}}">
                <div class="input-group-append">
                    <button class="btn btn-primary" onclick="updateDescricao({{$produto->id}})">
                        <i class="fas fa-check"></i>
                    </button>
                    @csrf
                </div>
            </div>

            <span class="d-flex">
            <button class="btn btn-info btn-sm mr-1" onclick="toggleInputDescricao()">
                <i class="fas fa-edit"></i>
            </button>
                </span>
        </li>

        <li class="list-group-item d-flex justify-content-between align-items-center">
            <span id="preco-produto-">{{'Preço: R$ ' . $produto->preco }}</span>

            <div class="input-group w-50" hidden id="input-preco-produto-">
                <input type="number" class="form-control" value="{{$produto->preco}}">
                <div class="input-group-append">
                    <button class="btn btn-primary" onclick="updatePreco({{$produto->id}})">
                        <i class="fas fa-check"></i>
                    </button>
                    @csrf
                </div>
            </div>

            <span class="d-flex">
            <button class="btn btn-info btn-sm mr-1" onclick="toggleInputPreco()">
                <i class="fas fa-edit"></i>
            </button>
                </span>
        </li>

        <span class="d-flex justify-content-between mt-2">
        <a href="/produtos/{{$produto->id}}/info" class="btn btn-info btn-sm ml-1">
            <i class="fas fa-arrow-left"></i>
        </a>
    </ul>

<script>
    function toggleInputNome() {
        if (document.getElementById(`nome-produto-`).hasAttribute('hidden')){
            document.getElementById(`nome-produto-`).removeAttribute('hidden');
            document.getElementById(`input-nome-produto-`).hidden = true;
        } else {
            document.getElementById(`input-nome-produto-`).removeAttribute('hidden');
            document.getElementById(`nome-produto-`).hidden = true;
        }
    }

    function updateNome() {
        let formData = new FormData();
        const nome = document
            .querySelector(`#input-nome-produto- > input`)
            .value;
        const token = document
            .querySelector(`input[name="_token"]`)
            .value;
        formData.append('nome', nome);
        formData.append('_token', token);
        const url = `/produtos/{{$produto->id}}/updateNome`;
        fetch(url, {
            method: 'POST',
            body: formData
        }).then(() => {
            toggleInputNome();
            document.getElementById(`nome-produto-`).textContent = nome;
        });
    }
</script>

<script>
    function toggleInputCategoria() {
        if (document.getElementById(`categoria-produto-`).hasAttribute('hidden')){
            document.getElementById(`categoria-produto-`).removeAttribute('hidden');
            document.getElementById(`input-categoria-produto-`).hidden = true;
        } else {
            document.getElementById(`input-categoria-produto-`).removeAttribute('hidden');
            document.getElementById(`categoria-produto-`).hidden = true;
        }
    }

    function updateCategoria() {
        let formData = new FormData();
        const categoria = document
            .querySelector(`#input-categoria-produto- > input`)
            .value;
        const token = document
            .querySelector(`input[name="_token"]`)
            .value;
        formData.append('categoria', categoria);
        formData.append('_token', token);
        const url = `/produtos/{{$produto->id}}/updateCategoria`;
        fetch(url, {
            method: 'POST',
            body: formData
        }).then(() => {
            toggleInputCategoria();
            document.getElementById(`categoria-produto-`).textContent = categoria;
        });
    }
</script>

<script>

    function toggleInputQuantidade() {
            if (document.getElementById(`quantidade-produto-`).hasAttribute('hidden')) {
                document.getElementById(`quantidade-produto-`).removeAttribute('hidden');
                document.getElementById(`input-quantidade-produto-`).hidden = true;
            } else {
                document.getElementById(`input-quantidade-produto-`).removeAttribute('hidden');
                document.getElementById(`quantidade-produto-`).hidden = true;
            }
        }

        function updateQuantidade() {
            let formData = new FormData();
            const quantidade = document
                .querySelector(`#input-quantidade-produto- > input`)
                .value;
            const token = document
                .querySelector(`input[name="_token"]`)
                .value;
            formData.append('quantidade', quantidade);
            formData.append('_token', token);
            const url = `/produtos/{{$produto->id}}/updateQuantidade`;
            fetch(url, {
                method: 'POST',
                body: formData
            }).then(() => {
                toggleInputQuantidade();
                document.getElementById(`quantidade-produto-`).textContent = quantidade;
            });
    }
</script>

<script>

        function toggleInputDescricao() {
            if (document.getElementById(`descricao-produto-`).hasAttribute('hidden')) {
                document.getElementById(`descricao-produto-`).removeAttribute('hidden');
                document.getElementById(`input-descricao-produto-`).hidden = true;
            } else {
                document.getElementById(`input-descricao-produto-`).removeAttribute('hidden');
                document.getElementById(`descricao-produto-`).hidden = true;
            }
        }

        function updateDescricao() {
            let formData = new FormData();
            const descricao = document
                .querySelector(`#input-descricao-produto- > input`)
                .value;
            const token = document
                .querySelector(`input[name="_token"]`)
                .value;
            formData.append('descricao', descricao);
            formData.append('_token', token);
            const url = `/produtos/{{$produto->id}}/updateDescricao`;
            fetch(url, {
                method: 'POST',
                body: formData
            }).then(() => {
                toggleInputDescricao();
                document.getElementById(`descricao-produto-`).textContent = descricao;
            });
        }
</script>

<script>

    function toggleInputPreco() {
        if (document.getElementById(`preco-produto-`).hasAttribute('hidden')) {
            document.getElementById(`preco-produto-`).removeAttribute('hidden');
            document.getElementById(`input-preco-produto-`).hidden = true;
        } else {
            document.getElementById(`input-preco-produto-`).removeAttribute('hidden');
            document.getElementById(`preco-produto-`).hidden = true;
        }
    }

    function updatePreco() {
        let formData = new FormData();
        const preco = document
            .querySelector(`#input-preco-produto- > input`)
            .value;
        const token = document
            .querySelector(`input[name="_token"]`)
            .value;
        formData.append('preco', preco);
        formData.append('_token', token);
        const url = `/produtos/{{$produto->id}}/updatePreco`;
        fetch(url, {
            method: 'POST',
            body: formData
        }).then(() => {
            toggleInputPreco();
            document.getElementById(`preco-produto-`).textContent = preco;
        });
    }
</script>
@endsection

