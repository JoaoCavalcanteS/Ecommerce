@extends('layout.app')
    @section('main')
    <script>
        function criarProduto() {
            window.location = `/endereco/create`;
        }
        function atualizarProduto(usuarioId) {
            window.location = `/endereco/${usuarioId}/edit`;
        }
        function excluirProduto(usuarioId) {
            if (!confirm("Você tem certeza")) return;
            const form = document.getElementById("deletar");
            form.setAttribute("action", `/endereco/${usuarioId}/destroy`);
            form.submit();
            //window.location = `/produto/${idProduto}/destroy`;
        }
    </script>
    <form action="" method="POST" id="deletar">
        @csrf
    </form>
<main>
    <h2>Endereços</h2>
    <table width="60%" border='1' >
        <thead>
            <tr>
                <th>UsuarioId</th>
                <th>Endereço</th>
                <th>CEP</th>
                <th>N° Residência</th>
                <th>Complemento</th>
                <th>ATUALIZAR</th>
                <th>DELETAR</th>


            </tr>
        </thead>
            @foreach ($endereco as $enderecos)
            <tr>
                <td>{{$enderecos->usuarioId}}</td>
                <td>{{$enderecos->endereco}}</td>
                <td>{{$enderecos->cep}}</td>
                <td>{{$enderecos->numResidencia}}</td>
                <td>{{$enderecos->complemento}}</td>
                <td><button type="button" onclick="atualizarProduto({{$enderecos->usuarioId}})">Atualizar</button></td>
                <td><button type="button" onclick="excluirProduto({{$enderecos->usuarioId}})">Excluir</button></td>
            </tr>
            @endforeach
        </table>
        <button type="button" onclick="criarProduto()">Criar novo</button>

</body>

@endsection
