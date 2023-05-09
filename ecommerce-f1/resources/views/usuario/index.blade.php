@extends('layout.app')
    @section('main')
    <script>
        function criarUsuario() {
            window.location = `/usuario/create`;
        }
        function atualizarUsuario(usuarioId) {
            window.location = `/usuario/${usuarioId}/edit`;
        }
        function excluirUsuario(usuarioId) {
            if (!confirm("Você tem certeza")) return;
            const form = document.getElementById("deletar");
            form.setAttribute("action", `/usuario/${usuarioId}/destroy`);
            form.submit();
            //window.location = `/produto/${idProduto}/destroy`;
        }
    </script>
    <form action="" method="POST" id="deletar">
        @csrf
    </form>
<main>
        <h2>USUARIOS</h2>
        <table class="tabelaIndex">
        <thead>
            <tr>
                <th>nome</th>
                <th>email</th>
                <th>senha</th>
                <th>flAdmin</th>
                <th>ATUALIZAR</th>
                <th>DELETAR</th>
            </tr>
        </thead>
        @foreach ($usuarios as $usuario)
            <tr>
                <td>{{$usuario->nome}}</td>
                <td>{{$usuario->email}}</td>
                <td>{{$usuario->senha}}</td>
                <td>{{$usuario->flAdmin}}</td>
                <td><button type="button" onclick="atualizarUsuario({{$usuario->usuarioId}})">Atualizar</button></td>
                <td><button type="button" onclick="excluirUsuario({{$usuario->usuarioId}})">Excluir</button></td>
            </tr>
            @endforeach
        </table>
        <button type="button" onclick="criarUsuario()">Criar novo</button>
</body>

@endsection
