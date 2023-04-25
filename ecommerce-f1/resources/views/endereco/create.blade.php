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
    <form action="/endereco/create" method="post">
        @csrf
        <label for="">Usuario:</label>
        <input type="text" name="usuarioId">
        <label for="">Endereço</label>
        <input type="text" name="endereco">
        <label for="">CEP</label>
        <input type="text" name="cep">
        <label for="">N° Residência</label>
        <input type="number" name="numResidencia">
        <label for="">Complemento</label>
        <input type="text" name="complemento">
        <button type="submit">Salvar</button>
    </form>
    </div>
</body>
</html>
