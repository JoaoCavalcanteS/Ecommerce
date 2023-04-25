<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<Style>
    .container {
        width: 400px;
        margin: 0 auto;
        border: 1px solid black;
        padding: 20px;
        text-align: center;
        background-color: aqua;
    }

    form {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    label, input, textarea {
        margin-bottom: 10px;
    }

    input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        border: none;
        padding: 10px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }

</Style>
<body>
    <div class="container">
    <form action="/produto/{{$produto->produtoId}}/edit" method="post">
        @csrf
        <label for="">nome</label>
        <input type="text" name="nome" value="{{$produto->nome}}">
        <label for="">descrição</label>
        <input type="text" name="descricao" value="{{$produto->descricao}}">
        <label for="">tamanho</label>
        <input type="text" name="tamanho" value="{{$produto->tamanho}}">
        <label for="">cor</label>
        <input type="text" name="cor" value="{{$produto->cor}}">
        <label for="">Qt. Estoque</label>
        <input type="number" name="qtdEstoque" value="{{$produto->qtdEstoque}}">
        <label for="">valor</label>
        <input type="text" name="valor" value="{{$produto->valor}}">
        <label for="">marca</label>
        <input type="text" name="marca" value="{{$produto->marca}}">
        <label for="">imagem</label>
        <input type="text" name="produtoImagem" value="{{$produto->produtoImagem}}">
        <button type="submit">Atualizar</button>
    </form>
    </div>
</body>
</html>
