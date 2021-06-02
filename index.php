<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/reset.css" rel="stylesheet">
    <link href="css/button.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link href="css/footer.css" rel="stylesheet">
    <title>Swapi</title>
</head>
<body>

    <!-- <?php
        $url = "https://swapi.dev/api/people/?page=9";
        $resultado = json_decode(file_get_contents($url));

        foreach($resultado->results as $ator){
            echo "Personagem: ".$ator->name;
            echo "<br>";
        }
    ?> -->

    <center>
        <button class="botao" id="especies"><a href="/especies">Ver todos espécies</a></button>
        <button class="botao" id="filmes"><a href="/filmes">Ver todos filmes</a></button>
        <button class="botao" id="naves"><a href="/naves">Ver todas naves</a></button>
        <button class="botao" id="personagens"><a href="/personagens">Ver todos personagens</a></button>
        <button class="botao" id="planetas"><a href="/planetas">Ver todos planetas</a></button>
        <button class="botao" id="veiculos"><a href="/veiculos">Ver todos veiculos</a></button>
    </center>

    <form action="/especie/index.php" method="GET">
        <input type="text" placeholder="Pesquisar espécie"/><button class="pesquisar">Procurar</button>
    </form>

    <form action="/filme/index.php" method="GET">
        <input type="text" placeholder="Pesquisar filme"/><button class="pesquisar">Procurar</button>
    </form>

    <form action="/nave/index.php" method="GET">
        <input type="text" placeholder="Pesquisar nave"/><button class="pesquisar">Procurar</button>
    </form>

    <form action="/personagem/index.php" method="GET">
        <input type="text" placeholder="Pesquisar personagem"/><button class="pesquisar">Procurar</button>
    </form>

    <form action="/planeta/index.php" method="GET">
        <input type="text" placeholder="Pesquisar planeta"/><button class="pesquisar">Procurar</button>
    </form>

    <form action="/veiculo/index.php" method="GET">
        <input type="text" placeholder="Pesquisar veículo"/><button class="pesquisar">Procurar</button>
    </form>

    <div class="footer-basic">
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