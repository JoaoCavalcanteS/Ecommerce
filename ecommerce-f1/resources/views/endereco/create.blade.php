<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>E-F1</title>
</head>
<Style>

body{
    font-family: Arial, Helvetica, sans-serif;
    background-image: linear-gradient(45deg,cyan, rgb(51, 92, 224));
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
}

button:hover{
    background-color: deepskyblue;
    cursor: pointer;
}

/* .tc-yy{
    width: 25%;
    padding: 2%;
    float: left;
    margin: 2%;
} */

.logo-yyt-log{
    width: 10%;
}

</Style>
<body>

    <div class="login">
        <div class="tc-yy">

    <form action="/endereco/create" method="post">

        @csrf
        <label for="">Usuário:</label>
        <input class="inputLogin" type="text" name="usuarioId">
        <p></p>
        <label for="">Endereço</label>
        <input class="inputLogin" type="text" name="endereco">
        <label for="">CEP</label>
        <input class="inputLogin" type="text" name="cep">
        <label for="">N° Residência</label>
        <input class="inputLogin" type="number" name="numResidencia">
        <label for="">Complemento</label>
        <input class="inputLogin" type="text" name="complemento">

        <button class="buttonLogin" type="submit">Salvar</button>

    </form>

    </div>

</body>
</html>
