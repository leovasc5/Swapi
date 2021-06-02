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
    <title>SWAPI - Personagens</title>
</head>
<body>
    <table id="customers">
        <tr>
            <th>Nome</th>
            <th>Ano</th>
            <th>Cor do Olho</th>
            <th>Gênero</th>
            <th>Cor do Cabelo</th>
            <th>Altura</th>
            <th>Cor</th>
            <th>Peso</th>
        </tr>
<?php
    $url = "https://swapi.dev/api/people/";
    $resultado = json_decode(file_get_contents($url));

    foreach($resultado->results as $personagem){
        echo "
        <tr>
            <td>
                $personagem->name
            </td>

            <td>
                $personagem->birth_year
            </td>

            <td>
                $personagem->eye_color
            </td>
        
            <td>
                $personagem->gender 
            </td>

            <td>
                $personagem->hair_color 
            </td>

            <td>
                $personagem->height cm
            </td> 

            <td>
                $personagem->skin_color 
            </td>

            <td>
                $personagem->mass kg 
            </td>
        ";
    }

    $url = "https://swapi.dev/api/people/?page=2";
    $resultado = json_decode(file_get_contents($url));

    foreach($resultado->results as $personagem){
        echo "
        <tr>
            <td>
                $personagem->name
            </td>

            <td>
                $personagem->birth_year
            </td>

            <td>
                $personagem->eye_color
            </td>
        
            <td>
                $personagem->gender 
            </td>

            <td>
                $personagem->hair_color 
            </td>

            <td>
                $personagem->height cm
            </td> 

            <td>
                $personagem->skin_color 
            </td>

            <td>
                $personagem->mass kg 
            </td>
        ";
    }

    $url = "https://swapi.dev/api/people/?page=3";
    $resultado = json_decode(file_get_contents($url));

    foreach($resultado->results as $personagem){
        echo "
        <tr>
            <td>
                $personagem->name
            </td>

            <td>
                $personagem->birth_year
            </td>

            <td>
                $personagem->eye_color
            </td>
        
            <td>
                $personagem->gender 
            </td>

            <td>
                $personagem->hair_color 
            </td>

            <td>
                $personagem->height cm
            </td> 

            <td>
                $personagem->skin_color 
            </td>

            <td>
                $personagem->mass kg 
            </td>
        ";
    }

    $url = "https://swapi.dev/api/people/?page=4";
    $resultado = json_decode(file_get_contents($url));

    foreach($resultado->results as $personagem){
        echo "
        <tr>
            <td>
                $personagem->name
            </td>

            <td>
                $personagem->birth_year
            </td>

            <td>
                $personagem->eye_color
            </td>
        
            <td>
                $personagem->gender 
            </td>

            <td>
                $personagem->hair_color 
            </td>

            <td>
                $personagem->height cm
            </td> 

            <td>
                $personagem->skin_color 
            </td>

            <td>
                $personagem->mass kg 
            </td>
        ";
    }

    $url = "https://swapi.dev/api/people/?page=5";
    $resultado = json_decode(file_get_contents($url));

    foreach($resultado->results as $personagem){
        echo "
        <tr>
            <td>
                $personagem->name
            </td>

            <td>
                $personagem->birth_year
            </td>

            <td>
                $personagem->eye_color
            </td>
        
            <td>
                $personagem->gender 
            </td>

            <td>
                $personagem->hair_color 
            </td>

            <td>
                $personagem->height cm
            </td> 

            <td>
                $personagem->skin_color 
            </td>

            <td>
                $personagem->mass kg 
            </td>
        ";
    }

    $url = "https://swapi.dev/api/people/?page=6";
    $resultado = json_decode(file_get_contents($url));

    foreach($resultado->results as $personagem){
        echo "
        <tr>
            <td>
                $personagem->name
            </td>

            <td>
                $personagem->birth_year
            </td>

            <td>
                $personagem->eye_color
            </td>
        
            <td>
                $personagem->gender 
            </td>

            <td>
                $personagem->hair_color 
            </td>

            <td>
                $personagem->height cm
            </td> 

            <td>
                $personagem->skin_color 
            </td>

            <td>
                $personagem->mass kg 
            </td>
        ";
    }

    $url = "https://swapi.dev/api/people/?page=7";
    $resultado = json_decode(file_get_contents($url));

    foreach($resultado->results as $personagem){
        echo "
        <tr>
            <td>
                $personagem->name
            </td>

            <td>
                $personagem->birth_year
            </td>

            <td>
                $personagem->eye_color
            </td>
        
            <td>
                $personagem->gender 
            </td>

            <td>
                $personagem->hair_color 
            </td>

            <td>
                $personagem->height cm
            </td> 

            <td>
                $personagem->skin_color 
            </td>

            <td>
                $personagem->mass kg 
            </td>
        ";
    }

    $url = "https://swapi.dev/api/people/?page=8";
    $resultado = json_decode(file_get_contents($url));

    foreach($resultado->results as $personagem){
        echo "
        <tr>
            <td>
                $personagem->name
            </td>

            <td>
                $personagem->birth_year
            </td>

            <td>
                $personagem->eye_color
            </td>
        
            <td>
                $personagem->gender 
            </td>

            <td>
                $personagem->hair_color 
            </td>

            <td>
                $personagem->height cm
            </td> 

            <td>
                $personagem->skin_color 
            </td>

            <td>
                $personagem->mass kg 
            </td>
        ";
    }

    $url = "https://swapi.dev/api/people/?page=9";
    $resultado = json_decode(file_get_contents($url));

    foreach($resultado->results as $personagem){
        echo "
        <tr>
            <td>
                $personagem->name
            </td>

            <td>
                $personagem->birth_year
            </td>

            <td>
                $personagem->eye_color
            </td>
        
            <td>
                $personagem->gender 
            </td>

            <td>
                $personagem->hair_color 
            </td>

            <td>
                $personagem->height cm
            </td> 

            <td>
                $personagem->skin_color 
            </td>

            <td>
                $personagem->mass kg 
            </td>
        ";
    }
?>
</table>
<br>
<a href="../index.php">Voltar à página inicial</a>

<div class="footer-basic" style="margin-top: 24px">
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