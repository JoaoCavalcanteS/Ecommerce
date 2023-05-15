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

.tc-yy{
    width: 25%;
    padding: 2%;
    float: left;
    margin: 2%;
}

.logo-yyt-log{
    width: 10%;
}

</Style>

<body>

    <div class="login">
    <form action="/produto/create" method="post">
        @csrf
        <label for="">Nome</label>
        <input  class="inputLogin" type="text" name="nome">
        <p></p>
        <label for="">Descrição</label>
        <input class="inputLogin" type="text" name="descricao">
        <p></p>
        <label for="">Tamanho</label>
        <input class="inputLogin" type="text" name="tamanho">
        </div>

        <div class="tc-yy">
        <label for="">Cor</label>
        <input class="inputLogin" type="text" name="cor">
        <p></p>
        <label for="">Quantida no Estoque</label>
        <input class="inputLogin" type="number" name="qtdEstoque">
        <p></p>
        <label for="">Valor</label>
        <input class="inputLogin" type="text" name="valor">
        </div>

        <div class="tc-yy">
        <label for="">Marca</label>
        <input class="inputLogin" type="text" name="marca">
        <p></p>
        <label for="">Imagem</label>
        <input class="inputLogin" type="text" name="produtoImagem">
        <p></p>
        </div>

        <button class="buttonLogin" type="submit">Salvar</button>
    </form>
    </div>

</body>
</html>
