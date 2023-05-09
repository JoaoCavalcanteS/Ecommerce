<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Document</title>
</head>
<Style>
   .container {
        width: 900px;
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

    /* th{
        border: 1px solid;
        list-style-position: inside;
        padding: 0;
        border: 1px solid blue;
    } */
</Style>
<body>
    <div class="container">
    <form action="/endereco/create" method="post">
        @csrf
        <label for="">Usuário:</label>
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
