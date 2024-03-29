<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/reset.css" rel="stylesheet">
    <link href="css/button.css" rel="stylesheet">
    <link href="css/input.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200&family=Odibee+Sans&display=swap" rel="stylesheet">
    <link href="css/font.css" rel="stylesheet">
    <link href="css/footer.css" rel="stylesheet">
    <link rel="shortcut icon" href="https://swapi.dev/static/favicon.ico">
    <title>Swapi</title>
</head>
<body>
    <center>
        <img src="img/logo.png" width="300px"/><br>
        <button class="botao" id="especies"><a href="especies">Ver todas as espécies</a></button>
        <button class="botao" id="filmes"><a href="filmes">Ver todos os filmes</a></button>
        <button class="botao" id="naves"><a href="naves">Ver todas as naves</a></button>
        <button class="botao" id="personagens"><a href="personagens">Ver todos os personagens</a></button>
        <button class="botao" id="planetas"><a href="planetas">Ver todos os planetas</a></button>
        <button class="botao" id="veiculos"><a href="veiculos">Ver todos os veículos</a></button>
    
    <br>
    
    <form action="especie/index.php" method="GET">
        <input type="text" name="search" class="form__input" placeholder="Pesquisar por espécie" autocomplete="off"/>
        <button class="pesquisar">
            <i class="fa fa-search"></i>
        </button>
    </form>

    <form action="filme/index.php" method="GET">
        <input type="text" name="search" placeholder="Pesquisar por filme" autocomplete="off"/>
            <button class="pesquisar">
                <i class="fa fa-search"></i>
            </button>
        </button>
    </form>

    <form action="nave/index.php" method="GET">
        <input type="text" name="search" placeholder="Pesquisar por nave" autocomplete="off"/>
        <button class="pesquisar">
            <i class="fa fa-search"></i>
        </button>
    </form>

    <form action="personagem/index.php" method="GET">
        <input type="text" name="search" placeholder="Pesquisar por personagem" autocomplete="off"/>
        <button class="pesquisar">
            <i class="fa fa-search"></i>
        </button>
    </form>

    <form action="planeta/index.php" method="GET">
        <input type="text" name="search" placeholder="Pesquisar por planeta" autocomplete="off"/>
        <button class="pesquisar">
            <i class="fa fa-search"></i>
        </button>
    </form>

    <form action="veiculo/index.php" method="GET">
        <input type="text" name="search" placeholder="Pesquisar por veículo" autocomplete="off"/>
        <button class="pesquisar">
            <i class="fa fa-search"></i>
        </button>
    </form>
    </center>

    <div class="footer-basic" style="margin-top: 32px">
        <footer>
            <div class="social">
                <a href="https://github.com/leovasc5/"><i class="icon ion-social-github"></i></a>
                <a href="https://www.linkedin.com/in/leonardo-vasconcelos-paulino-7a0b41200/"><i class="icon ion-social-linkedin"></i></a>
                <a href="https://www.twitter.com/leovasc5/"><i class="icon ion-social-twitter"></i></a>
                <a href="https://www.instagram.com/leovasc5/"><i class="icon ion-social-instagram"></i></a>
            </div>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="mailto: leovasc5@hotmail.com">E-mail</a></li>
            </ul>
            <p class="copyright">Leonardo Vasconcelos Paulino - 2021</p>
        </footer>
    </div>
</body>
</html>