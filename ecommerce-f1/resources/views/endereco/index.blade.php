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
    <h2>ENDEREÇOS</h2>

    <div class="tabela-ty">
    <table class="table">
        <thead class="table-secondary">
            <tr>    

                <th scope="col">Nome</th>
                <th scope="col">Usuario</th>
                <th scope="col">Endereço</th>
                <th scope="col">CEP</th>
                <th scope="col">N° Residência</th>
                <th scope="col">Complemento</th>
                <th scope="col">ATUALIZAR</th>
                <th scope="col">DELETAR</th>

            </tr>
        </thead>
            @foreach ($endereco as $enderecos)
            <tr>
                <td>{{$enderecos->enderecoId}}</td>
                <td>{{$enderecos->usuarioId}}</td>
                <td>{{$enderecos->endereco}}</td>
                <td>{{$enderecos->cep}}</td>
                <td>{{$enderecos->numResidencia}}</td>
                <td>{{$enderecos->complemento}}</td>

                <td>
                    <button class="btn btn-success btn-lg mb-4 p-2 fs-6" type="button" onclick="atualizarProduto({{$enderecos->enderecoId}})">Atualizar</button>
                </td>

                <td>
                    <button class="btn btn-danger btn-lg mb-4 p-2 fs-6" type="button" onclick="excluirProduto({{$enderecos->enderecoId}})">Excluir</button>
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
