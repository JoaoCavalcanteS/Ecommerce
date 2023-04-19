<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/produto/create" method="post">
        @csrf
        <label for="">nome</label>
        <input type="text" name="nome">
        <label for="">descrição</label>
        <input type="text" name="descricao">
        <label for="">tamanho</label>
        <input type="text" name="tamanho">
        <label for="">cor</label>
        <input type="text" name="cor">
        <label for="">Qt. Estoque</label>
        <input type="number" name="qtdEstoque">
        <label for="">valor</label>
        <input type="text" name="valor">
        <label for="">marca</label>
        <input type="text" name="marca">
        <label for="">imagem</label>
        <input type="text" name="produtoImagem">
        <button type="submit">Salvar</button>
    </form>
</body>
</html>