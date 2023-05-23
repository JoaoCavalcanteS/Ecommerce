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
    @if(Auth::check($usuarios))
        <h2>USUARIOS - seja bem vindo {{$usuario->nome}}</h2>
    @else
    <h2>USUARIOS - seja bem vindo</h2>
    @endif
        <div class="tabela-ty">

        <table class="table">

        <thead class="table-secondary">
            <tr>
                <th scope="col">nome</th>
                <th scope="col">email</th>
                <th scope="col">senha</th>
                <th scope="col">flAdmin</th>
                <th scope="col">ATUALIZAR</th>
                <th scope="col">DELETAR</th>
            </tr>
        </thead>
        @foreach ($usuarios as $usuario)
            <tr>
                <td>{{$usuario->nome}}</td>
                <td>{{$usuario->email}}</td>
                <td>{{$usuario->senha}}</td>
                <td>{{$usuario->flAdmin}}</td>

                <td><button class="btn btn-success btn-lg mb-4 p-2 fs-6" type="button" onclick="atualizarUsuario({{$usuario->usuarioId}})">Atualizar</button></td>

                <td><button class="btn btn-danger btn-lg mb-4 p-2 fs-6" type="button" onclick="excluirUsuario({{$usuario->usuarioId}})">Excluir</button></td>
            </tr>
            @endforeach
        </table>

        <div class="w-100">
        <button class="d-flex justify-content-end btn btn-primary btn-lg ms-auto mb-2 p-2 fs-6" type="button" onclick="criarUsuario()">Criar novo</button>
        </div>
        </div>
</body>

@endsection
