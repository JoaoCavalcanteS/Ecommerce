<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
</body>
</html>