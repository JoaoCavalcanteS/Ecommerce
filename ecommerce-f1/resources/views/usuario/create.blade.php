<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-F1</title>
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
    </div>
</body>
</html>
