<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- Link CSS -->
    <link rel="stylesheet" type="text/css" href="./css/style.css" media="screen"/>
    <link rel="stylesheet" type="text/css" href="/css/index.css" media="screen"/>


    <!-- Link Favicon -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <!--Link das Imagens.css-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <!--Google-Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:wght@300&family=Poppins:wght@600&family=Space+Mono&display=swap" rel="stylesheet">

    <!-- Link do favcon -->
    <link rel="shortcut icon" href="./LOGO/logo-favicon.png" type="image/x-icon">
    <title>E-F1</title>
</head>
    <body>

        <!-- Barra de navegação -->
        <header>
            <!-- Possibilidade de colocar um favcon aqui -->
            <img class="logo-yt" src="/img/logoef2.png">
                <!-- Favcon -->
                <!-- <i class="ri-home-heart-fill"></i> -->
                <!-- Tex0to -->

            </a>

            <!--Lista para classificar itens contidos dentro do menu-->
            <!--Pode ser editavel-->
            <ul class="navbar">
                <li><a href="/" class="active">Home</a></li>
                <li><a href="#">Mais vendidos</a></li>
                <li><a href="usuario">Usuarios</a></li>
                <li><a href="produto">Produtos</a></li>
                <li><a href="endereco">Endereços</a></li>

            </ul>
            @if(!Auth::check())
            <div class="main">

                <!-- Arrumar botão transparente de pesquisa -->
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search"  aria-label="Search">
                    <button class="btn btn-outline-success" type="submit"><i class="ri-search-line"></i></button>
                  </form>

                <a href="/login" class="user"><i class="ri-user-fill"></i>Login</a>

                <a href="/register" class="user"><i class="ri-trophy-line"></i>Cadastro</a>
                <div class="bx bx-menu" id="menu-icon"></div>
            </div>
            @else
            <div class="main">

                <!-- Arrumar botão transparente de pesquisa -->
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search"  aria-label="Search">
                    <button class="btn btn-outline-success" type="submit"><i class="ri-search-line"></i></button>
                  </form>

                <span class="user"><i class="ri-user-fill"></i>Olá, {{Auth::user()->USUARIO_NOME}}</span>

                <div class="bx bx-menu" id="menu-icon"></div>
            </div>
            @endif
        </header>
        <!-- FIM NAVBAR -->
        <main>@yield('main')</main>

          <!--Floater-->
                <footer>
                    <div class="wrapper">
                        <div class="footer-box">
                            <div class="company-footer">
                                <img class="logo-yt" src="/img/logoef2.png">
                                <h3>E-F1</h3>
                                <p>A loja de esportes preferida dos corredores de Formula 1</p>
                            </div>
                        </div>
                        <div class="footer-box">
                            <div class="articles-footer">
                                <h3>Artigos</h3>
                                <ul class="footer-list footer-article-list">
                                    <li>
                                        <a href="#">Parcerias</a>
                                        <span class="article-date">05 de Maio de 2023</span>
                                    </li>
                                    <li>
                                        <a href="#">Parcerias</a>
                                        <span class="article-date">05 de Maio de 2023</span>
                                    </li>
                                    <li>
                                        <a href="#">Parcerias</a>
                                        <span class="article-date">05 de Maio de 2023</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="footer-box">
                                <h3>Nossas Redes</h3>
                                <ul class="footer-list">
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-facebook-square"></i>
                                            <span>Facebook</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-instagram"></i>
                                            <span>Instagram</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-youtube"></i>
                                            <span>Youtube</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="footer-bottom">
                        <div class="wrapper">
                            <p>Delta - 2023</p>
                        </div>
                    </div>
                </footer>

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
</html>
