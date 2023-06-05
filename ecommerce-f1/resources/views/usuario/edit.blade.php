<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-F1</title>
</head>
<Style>

    body{
        font-family: Arial, Helvetica, sans-serif;
        background-image: linear-gradient(45deg, cyan, rgb(51, 92, 224));
    }

    .login{
        background-color: rgba(0,0,0,0.8);
        position: absolute;
        top:50%;
        left:50%;
        transform: translate(-50%,-50%);
        padding: 80px;
        border-radius: 30px;
        color:white;
    }

    .inputLogin{
        padding: 10px;
        border:none;
        outline: none;
        font-size: 15px;
        color: black;
    }

    .buttonLogin{
        background-color: aqua;
        border: none;
        padding: 15px;
        width: 100%;
        border-radius: 10px;
        color:white;
        font-size: 15px;
        margin-top:5%;
    }

    button:hover{
        background-color: deepskyblue;
        cursor: pointer;
    }

    .tc-yy{
        width: 25%;
        padding: 2%;
        float: left;
        margin: 2%;
    }

    .logo-yyt-log{
        width: 10%;
    }

    div > label {
        display: block;
        margin-top:8%;
    }

</Style>
<body>

    <div class="login">

    <form action="/usuario/{{$usuario->usuarioId}}/edit" method="post">
        @csrf

        <div>
            <label for="">Nome</label>
            <input class="inputLogin" type="text" name="nome" value="{{$usuario->nome}}">
        </div>

        <div>
            <label for="">Email</label>
            <input class="inputLogin" type="text" name="email" value="{{$usuario->email}}">
        </div>

        <div>
            <label for="">Senha</label>
            <input class="inputLogin" type="number" name="senha" value="{{$usuario->senha}}">
        </div>

        <div>
            <label for="">flAdmin</label>
            <input class="inputLogin" type="number" name="flAdmin" min=0 max=1 value="{{$usuario->flAdmin}}" >
        </div>

        <button class="buttonLogin" type="submit">Atualizar</button>
    </form>
    </div>
</body>
</html>
