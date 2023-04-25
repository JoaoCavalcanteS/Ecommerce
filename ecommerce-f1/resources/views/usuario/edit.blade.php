<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/usuario/{{$usuario->usuarioId}}/edit" method="post">
        @csrf
        <label for="">nome</label>
        <input type="text" name="nome" value="{{$usuario->nome}}">
        <label for="">email</label>
        <input type="text" name="email" value="{{$usuario->email}}">
        <label for="">senha</label>
        <input type="number" name="senha" value="{{$usuario->senha}}">
        <label for="">flAdmin</label>
        <input type="number" name="flAdmin" value="{{$usuario->flAdmin}}">
        <button type="submit">Atualizar</button>
    </form>
</body>
</html>
