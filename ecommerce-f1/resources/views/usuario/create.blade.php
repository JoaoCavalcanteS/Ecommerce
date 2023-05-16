<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="/img/logogef1.png"/>
    <title>E-F1</title>
</head>
<script>
function criarUsuario() {
            alert('Usuario Cadastrado com sucesso');

            //window.location = `/produto/${idProduto}/destroy`;
        }
        </script>
<Style>
    .container {
        width: 500px;
        margin: 0 auto;
        border: 4px solid black;
        padding: 50px;
        text-align: center;
        background-color: #6A57B7;
        font-family:arial;
        margin-top:10%;
        font-size:1em;
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
        background-color: green;
    }
</Style>
<body>
    <div class="container">
    <form action="/usuario/create" method="post">
        @csrf
        <label for="">nome</label>
        <input type="text" name="nome" require>
        <label for="">email</label>
        <input type="text" name="email" require>
        <label for="">senha</label>
        <input type="number" name="senha" require>
        <label for="">flAdmin</label>
        <input type="number" name="flAdmin" min="0" max="1" require>
        <button type="submit" onclick="criarUsuario()" >Salvar</button>
    </form>
    </div>
</body>
</html>
