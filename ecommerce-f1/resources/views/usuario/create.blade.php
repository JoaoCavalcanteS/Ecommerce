<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/usuario/create" method="post">
        @csrf
        <label for="">nome</label>
        <input type="text" name="nome">
        <label for="">email</label>
        <input type="text" name="email">
        <label for="">senha</label>
        <input type="number" name="senha">
        <label for="">flAdmin</label>
        <input type="number" name="flAdmin">
        <button type="submit">Salvar</button>
    </form>
</body>
</html>
