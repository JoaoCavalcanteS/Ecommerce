<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
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

        <form method="POST" action="login">

            @csrf

            <div>
                <label for="">Email</label>
                <input class="inputLogin" type="email" name="email">
            </div>

            <div>
                <label for="">Senha</label>
                <input class="inputLogin" type="password" name="senha">
            </div>

            <button class="buttonLogin" type="submit">Logar</button>

        </form>
        </div>

        @if (isset($falha))
            <div>{{ $falha }}</div>
        @endif

    </body>
</html>
