<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/reset.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="../css/table.css">
    <link rel="shortcut icon" href="https://swapi.dev/static/favicon.ico">
    <link href="../css/footer.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200&family=Odibee+Sans&display=swap" rel="stylesheet">
    <link href="../css/font.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="https://swapi.dev/static/favicon.ico">
    <title>SWAPI - Filme</title>
</head>
<body>
<table id='customers'>
<?php
    $search = $_GET['search'];
    $array_name = [];
    $array_classification = [];
    $array_average_lifespan = [];
    $array_language = [];

    $url = "https://swapi.dev/api/species/";
    $resultado = json_decode(file_get_contents($url));

    foreach($resultado->results as $especie){
        array_push($array_name, $especie->name);
        array_push($array_classification, $especie->classification);
        array_push($array_average_lifespan, $especie->average_lifespan);
        array_push($array_language, $especie->language);
    }

    for($a = 0; $a != sizeof($array_name); $a++){
        if($search == $array_name[$a]){
            echo "
                <tr>
                    <th>Nome</th>
                    <td>$array_name[$a]</td>
                </tr>

                <tr>
                    <th>Classificação</th>
                    <td>$array_classification[$a]</td>
                </tr>
                
                <tr>
                    <th>Tempo de vida médio</th>
                    <td>$array_average_lifespan[$a]</td>
                </tr>

                <tr>
                    <th>Idioma</th>
                    <td>$array_language[$a]</td>
                </tr>
            ";
            
        }
       
    }
?>
</table>
<center>
    <a href="../index.php" class="link">
        <i class="fa fa-arrow-left"></i>
        <br><br>Voltar à página inicial!
    </a>
</center>

<div class="footer-basic" style="margin-top: 295px">
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