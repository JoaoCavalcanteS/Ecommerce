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
    <table border='1'>
        <thead>
            <tr>
                <th>nome</th>
                <th>descrição</th>
                <th>tamanho</th>
                <th>cor</th>
                <th>qtdEstoque</th>
                <th>valor</th>
                <th>marca</th>
                <th>ATUALIZAR</th>
                <th>DELETAR</th>


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
                    <td><button type="button" onclick="atualizarProduto({{$produto->produtoId}})">Atualizar</button></td>
                    <td><button type="button" onclick="excluirProduto({{$produto->produtoId}})">Excluir</button></td>
            </tr>
            @endforeach
        </table>
        <button type="button" onclick="criarProduto()">Criar novo</button>
</body>

@endsection