<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/reset.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link href="../css/footer.css" rel="stylesheet">
    <link href="../css/table.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200&family=Odibee+Sans&display=swap" rel="stylesheet">
    <link href="../css/font.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="https://swapi.dev/static/favicon.ico">
    <title>SWAPI - Espécies</title>
</head>
<body>
    <table id="customers">
        <tr>
            <th>Espécies</th>
            <th>Classificação</th>
            <th>Tempo de vida</th>
            <th>Idioma</th>
        </tr>
<?php
    $url = "https://swapi.dev/api/species/";
    $resultado = json_decode(file_get_contents($url));

    foreach($resultado->results as $especie){
        echo "
        <tr>
            <td>
                $especie->name
            </td>

            <td>
                $especie->classification
            </td>

            <td>
                $especie->average_lifespan
            </td>

            <td>
                $especie->language
            </td>
        </tr>
        ";
    }

    $url = "https://swapi.dev/api/species/?page=2";
    $resultado = json_decode(file_get_contents($url));

    foreach($resultado->results as $especie){
        echo "
        <tr>
            <td>
                $especie->name
            </td>

            <td>
                $especie->classification
            </td>

            <td>
                $especie->average_lifespan
            </td>

            <td>
                $especie->language
            </td>
        </tr>
        ";
    }

    $url = "https://swapi.dev/api/species/?page=3";
    $resultado = json_decode(file_get_contents($url));

    foreach($resultado->results as $especie){
        echo "
        <tr>
            <td>
                $especie->name
            </td>

            <td>
                $especie->classification
            </td>

            <td>
                $especie->average_lifespan
            </td>

            <td>
                $especie->language
            </td>
        </tr>
        ";
    }

    $url = "https://swapi.dev/api/species/?page=4";
    $resultado = json_decode(file_get_contents($url));

    foreach($resultado->results as $especie){
        echo "
        <tr>
            <td>
                $especie->name
            </td>

            <td>
                $especie->classification
            </td>

            <td>
                $especie->average_lifespan
            </td>

            <td>
                $especie->language
            </td>
        </tr>
        ";
    }
?>
</table>
<br>
<center>
    <a href="../index.php" class="link">
        <i class="fa fa-arrow-left"></i>
        <br><br>Voltar à página inicial!
    </a>
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