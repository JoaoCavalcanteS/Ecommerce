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
        <!-- muda pra id do endereço -->
        <form action="/endereco/{{$enderecos->usuarioId}}/edit" method="post">
            @csrf
            <label for="">Usuario:</label>
            <input type="text" name="usuarioId" disabled='true' value="{{$enderecos->usuarioId}}" >
            <label for="">Endereço</label>
            <input type="text" name="endereco" value="{{$enderecos->endereco}}">
            <label for="">CEP</label>
            <input type="text" name="cep" value="{{$enderecos->cep}}">
            <label for="">N° Residência</label>
            <input type="number" name="numResidencia" value="{{$enderecos->numResidencia}}">
            <label for="">Complemento</label>
            <input type="text" name="complemento" value="{{$enderecos->complemento}}">
            <button type="submit">Atualizar</button>
        </form>
    </div>
</body>
</html>
