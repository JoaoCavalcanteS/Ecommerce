@extends('layout.app')
    @section('main')
    <script>
        function criarProduto() {
            window.location = `/endereco/create`;
        }
        function atualizarProduto(idProduto) {
            window.location = `/endereco/${idProduto}/edit`;
        }
        function excluirProduto(idProduto) {
            if (!confirm("Você tem certeza")) return;
            const form = document.getElementById("deletar");
            form.setAttribute("action", `/endereco/${idProduto}/destroy`);
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
            @foreach ($endereco as $endereco)
            <tr>
                    <td>{{$endereco->usuarioId}}</td>
                    <td>{{$endereco->endereco}}</td>
                    <td>{{$endereco->cep}}</td>
                    <td>{{$endereco->numResidencia}}</td>
                    <td>{{$endereco->complemento}}</td>
                    <td><button type="button" onclick="atualizarProduto({{$endereco->usuarioId}})">Atualizar</button></td>
                    <td><button type="button" onclick="excluirProduto({{$endereco->usuarioId}})">Excluir</button></td>
            </tr>
            @endforeach
        </table>
        <button type="button" onclick="criarProduto()">Criar novo</button>

</body>

@endsection
