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
    <title>SWAPI - Naves</title>
</head>
<body>
<table id='customers'>
<?php
    $search = $_GET['search'];
    $array_name = [];
    $array_model = [];
    $array_starship_class = [];
    $array_manufacturer = [];
    $array_length = [];
    $array_passengers = [];
    $array_max_atmosphering_speed = [];

    $url = "https://swapi.dev/api/starships/";
    $resultado = json_decode(file_get_contents($url));

    foreach($resultado->results as $nave){
        array_push($array_name, $nave->name);
        array_push($array_model, $nave->model);
        array_push($array_starship_class, $nave->starship_class);
        array_push($array_manufacturer, $nave->manufacturer);
        array_push($array_length, $nave->length);
        array_push($array_passengers, $nave->passengers);
        array_push($array_max_atmosphering_speed, $nave->max_atmosphering_speed);
    }

    $url = "https://swapi.dev/api/starships/?page=2";
    $resultado = json_decode(file_get_contents($url));

    foreach($resultado->results as $nave){
        array_push($array_name, $nave->name);
        array_push($array_model, $nave->model);
        array_push($array_starship_class, $nave->starship_class);
        array_push($array_manufacturer, $nave->manufacturer);
        array_push($array_length, $nave->length);
        array_push($array_passengers, $nave->passengers);
        array_push($array_max_atmosphering_speed, $nave->max_atmosphering_speed);
    }

    $url = "https://swapi.dev/api/starships/?page=3";
    $resultado = json_decode(file_get_contents($url));

    foreach($resultado->results as $nave){
        array_push($array_name, $nave->name);
        array_push($array_model, $nave->model);
        array_push($array_starship_class, $nave->starship_class);
        array_push($array_manufacturer, $nave->manufacturer);
        array_push($array_length, $nave->length);
        array_push($array_passengers, $nave->passengers);
        array_push($array_max_atmosphering_speed, $nave->max_atmosphering_speed);
    }

    $url = "https://swapi.dev/api/starships/?page=4";
    $resultado = json_decode(file_get_contents($url));

    foreach($resultado->results as $nave){
        array_push($array_name, $nave->name);
        array_push($array_model, $nave->model);
        array_push($array_starship_class, $nave->starship_class);
        array_push($array_manufacturer, $nave->manufacturer);
        array_push($array_length, $nave->length);
        array_push($array_passengers, $nave->passengers);
        array_push($array_max_atmosphering_speed, $nave->max_atmosphering_speed);
    }


    for($a = 0; $a != sizeof($array_name); $a++){
        if($search == $array_name[$a]){
            echo "
            
                <tr>
                    <th>Nome</th>
                    <td>$array_name[$a]</td>
                </tr>

                <tr>
                    <th>Modelo</th>
                    <td>$array_model[$a]</td>
                </tr>
                
                <tr>
                    <th>Classe</th>
                    <td>$array_starship_class[$a]</td>
                </tr>

                <tr>
                    <th>Marca</th>
                    <td>$array_manufacturer[$a]</td>
                </tr>

                <tr>
                    <th>Tamanho</th>
                    <td>$array_length[$a]m</td>
                </tr>

                <tr>
                    <th>Passageiros</th>
                    <td>$array_passengers[$a]</td>
                </tr>

                <tr>
                    <th>Velocidade Máxima</th>
                    <td>$array_max_atmosphering_speed[$a]km/h</td>
                </tr>
            ";
        }
    }
?>
</table>
<a href="../index.php">Voltar à página inicial</a>

<div class="footer-basic" style="margin-top: 200px">
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