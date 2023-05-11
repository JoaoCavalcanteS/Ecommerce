@extends('layout.app')
    @section('main')
    <script>
        function criarProduto() {
            window.location = `/produto/create`;
        }
        function atualizarProduto(idProduto) {
            window.location = `/produto/${idProduto}/edit`;
        }
        function excluirProduto(idProduto) {
            if (!confirm("Você tem certeza")) return;
            const form = document.getElementById("deletar");
            form.setAttribute("action", `/produto/${idProduto}/destroy`);
            form.submit();
            //window.location = `/produto/${idProduto}/destroy`;
        }
    </script>
    <form action="" method="POST" id="deletar">
        @csrf
    </form>
<main>
    <h2>PRODUTOS</h2>

    <div class="tabela-ty">
        <table class="table">
            <thead class="table-secondary">
                <tr>

                    <th scope="col">Nome</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Tamanho</th>
                    <th scope="col">Cor</th>
                    <th scope="col">qtdEstoque</th>
                    <th scope="col">Valor</th>
                    <th scope="col">Marca</th>
                    <th scope="col">ATUALIZAR</th>
                    <th scope="col">DELETAR</th>

                </tr>
            </thead>
                @foreach ($produtos as $produto)
                <tr>
                    <td>{{$produto->nome}}</td>
                    <td>{{$produto->descricao}}</td>
                    <td>{{$produto->tamanho}}</td>
                    <td>{{$produto->cor}}</td>
                    <td>{{$produto->qtdEstoque}}</td>
                    <td>{{$produto->valor}}</td>
                    <td>{{$produto->marca}}</td>

                    <td>
                        <button class="btn btn-success btn-lg mb-4 p-2 fs-6" type="button" onclick="atualizarProduto({{$produto->produtoId}})">Atualizar</button>
                    </td>

                    <td>
                        <button class="btn btn-danger btn-lg mb-4 p-2 fs-6" type="button" onclick="excluirProduto({{$produto->produtoId}})">Excluir</button>
                    </td>

                </tr>
                @endforeach
            </table>

        <div class="w-100">
        <button class="d-flex justify-content-end btn btn-primary btn-lg ms-auto mb-4 p-2 fs-6" type="button" onclick="criarProduto()">Criar novo</button>
    </div>
    </div>

</body>

@endsection
