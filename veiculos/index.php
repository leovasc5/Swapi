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
    <link rel="shortcut icon" href="https://swapi.dev/static/favicon.ico">
    <title>SWAPI - Veículos</title>
</head>
<body>
    <table id="customers">
        <tr>
            <th>Nome</th>
            <th>Modelo</th>
            <th>Classe</th>
            <th>Marca</th>
            <th>Máx. Velocidade</th>
            <th>Tamanho</th>
            <th>Passageiros</th>
            <th>Máx. Peso</th>
        </tr>
<?php
    $url = "https://swapi.dev/api/vehicles/";
    $resultado = json_decode(file_get_contents($url));

    foreach($resultado->results as $veiculo){
        echo "
        <tr>
            <td>
                $veiculo->name
            </td>

            <td>
                $veiculo->model
            </td>

            <td>
                $veiculo->vehicle_class
            </td>
        
            <td>
                $veiculo->manufacturer 
            </td>

            <td>
                $veiculo->max_atmosphering_speed km/h
            </td>

            <td>
                $veiculo->length m
            </td>
            
            <td>
                $veiculo->passengers
            </td> 

            <td>
                $veiculo->cargo_capacity kg
            </td> 
        ";
    }

    $url = "https://swapi.dev/api/vehicles/?page=2";
    $resultado = json_decode(file_get_contents($url));

    foreach($resultado->results as $veiculo){
        echo "
        <tr>
            <td>
                $veiculo->name
            </td>

            <td>
                $veiculo->model
            </td>

            <td>
                $veiculo->vehicle_class
            </td>
        
            <td>
                $veiculo->manufacturer 
            </td>

            <td>
                $veiculo->max_atmosphering_speed km/h
            </td>

            <td>
                $veiculo->length m
            </td>
            
            <td>
                $veiculo->passengers
            </td> 

            <td>
                $veiculo->cargo_capacity kg
            </td> 
        ";
    }

    $url = "https://swapi.dev/api/vehicles/?page=3";
    $resultado = json_decode(file_get_contents($url));

    foreach($resultado->results as $veiculo){
        echo "
        <tr>
            <td>
                $veiculo->name
            </td>

            <td>
                $veiculo->model
            </td>

            <td>
                $veiculo->vehicle_class
            </td>
        
            <td>
                $veiculo->manufacturer 
            </td>

            <td>
                $veiculo->max_atmosphering_speed km/h
            </td>

            <td>
                $veiculo->length m
            </td>
            
            <td>
                $veiculo->passengers
            </td> 

            <td>
                $veiculo->cargo_capacity kg
            </td> 
        ";
    }

    $url = "https://swapi.dev/api/vehicles/?page=4";
    $resultado = json_decode(file_get_contents($url));

    foreach($resultado->results as $veiculo){
        echo "
        <tr>
            <td>
                $veiculo->name
            </td>

            <td>
                $veiculo->model
            </td>

            <td>
                $veiculo->vehicle_class
            </td>
        
            <td>
                $veiculo->manufacturer 
            </td>

            <td>
                $veiculo->max_atmosphering_speed km/h
            </td>

            <td>
                $veiculo->length m
            </td>
            
            <td>
                $veiculo->passengers
            </td> 

            <td>
                $veiculo->cargo_capacity kg
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