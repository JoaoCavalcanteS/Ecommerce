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
        <table width="60%" border='1'>
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
        @foreach ($usuario as $usuarios)
            <tr>
                <td>{{$usuarios->nome}}</td>
                <td>{{$usuarios->email}}</td>
                <td>{{$usuarios->senha}}</td>
                <td>{{$usuarios->flAdmin}}</td>
                <td><button type="button" onclick="atualizarUsuario({{$usuarios->usuarioId}})">Atualizar</button></td>
                <td><button type="button" onclick="excluirUsuario({{$usuarios->usuarioId}})">Excluir</button></td>
            </tr>
            @endforeach
        </table>
        <button type="button" onclick="criarUsuario()">Criar novo</button>
</body>

@endsection
