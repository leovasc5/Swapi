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
    <title>SWAPI - Personagens</title>
</head>
<body>
<table id='customers'>
<?php
    $search = $_GET['search'];
    $array_name = [];
    $array_height = [];
    $array_mass = [];
    $array_birth_year= [];
    $array_gender = [];

    $url = "https://swapi.dev/api/people/";
    $resultado = json_decode(file_get_contents($url));

    foreach($resultado->results as $personagem){
        array_push($array_name, $personagem->name);
        array_push($array_height, $personagem->height);
        array_push($array_mass, $personagem->mass);
        array_push($array_birth_year, $personagem->birth_year);
        array_push($array_gender, $personagem->gender);
    }

    $url = "https://swapi.dev/api/people/?page=2";
    $resultado = json_decode(file_get_contents($url));

    foreach($resultado->results as $personagem){
        array_push($array_name, $personagem->name);
        array_push($array_height, $personagem->height);
        array_push($array_mass, $personagem->mass);
        array_push($array_birth_year, $personagem->birth_year);
        array_push($array_gender, $personagem->gender);
    }

    $url = "https://swapi.dev/api/people/?page=3";
    $resultado = json_decode(file_get_contents($url));

    foreach($resultado->results as $personagem){
        array_push($array_name, $personagem->name);
        array_push($array_height, $personagem->height);
        array_push($array_mass, $personagem->mass);
        array_push($array_birth_year, $personagem->birth_year);
        array_push($array_gender, $personagem->gender);
    }

    $url = "https://swapi.dev/api/people/?page=4";
    $resultado = json_decode(file_get_contents($url));

    foreach($resultado->results as $personagem){
        array_push($array_name, $personagem->name);
        array_push($array_height, $personagem->height);
        array_push($array_mass, $personagem->mass);
        array_push($array_birth_year, $personagem->birth_year);
        array_push($array_gender, $personagem->gender);
    }

    $url = "https://swapi.dev/api/people/?page=5";
    $resultado = json_decode(file_get_contents($url));

    foreach($resultado->results as $personagem){
        array_push($array_name, $personagem->name);
        array_push($array_height, $personagem->height);
        array_push($array_mass, $personagem->mass);
        array_push($array_birth_year, $personagem->birth_year);
        array_push($array_gender, $personagem->gender);
    }

    $url = "https://swapi.dev/api/people/?page=6";
    $resultado = json_decode(file_get_contents($url));

    foreach($resultado->results as $personagem){
        array_push($array_name, $personagem->name);
        array_push($array_height, $personagem->height);
        array_push($array_mass, $personagem->mass);
        array_push($array_birth_year, $personagem->birth_year);
        array_push($array_gender, $personagem->gender);
    }

    $url = "https://swapi.dev/api/people/?page=7";
    $resultado = json_decode(file_get_contents($url));

    foreach($resultado->results as $personagem){
        array_push($array_name, $personagem->name);
        array_push($array_height, $personagem->height);
        array_push($array_mass, $personagem->mass);
        array_push($array_birth_year, $personagem->birth_year);
        array_push($array_gender, $personagem->gender);
    }

    $url = "https://swapi.dev/api/people/?page=8";
    $resultado = json_decode(file_get_contents($url));

    foreach($resultado->results as $personagem){
        array_push($array_name, $personagem->name);
        array_push($array_height, $personagem->height);
        array_push($array_mass, $personagem->mass);
        array_push($array_birth_year, $personagem->birth_year);
        array_push($array_gender, $personagem->gender);
    }

    $url = "https://swapi.dev/api/people/?page=9";
    $resultado = json_decode(file_get_contents($url));

    foreach($resultado->results as $personagem){
        array_push($array_name, $personagem->name);
        array_push($array_height, $personagem->height);
        array_push($array_mass, $personagem->mass);
        array_push($array_birth_year, $personagem->birth_year);
        array_push($array_gender, $personagem->gender);
    }


    for($a = 0; $a != sizeof($array_name); $a++){
        if($search == $array_name[$a]){
            echo "
            
                <tr>
                    <th>Nome</th>
                    <td>$array_name[$a]</td>
                </tr>

                <tr>
                    <th>Altura</th>
                    <td>$array_height[$a]cm</td>
                </tr>
                
                <tr>
                    <th>Peso</th>
                    <td>$array_mass[$a]kg</td>
                </tr>

                <tr>
                    <th>Ano do nascimento</th>
                    <td>$array_birth_year[$a]</td>
                </tr>

                <tr>
                    <th>Gênero</th>
                    <td>$array_gender[$a]m</td>
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

<div class="footer-basic" style="margin-top: 255px">
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