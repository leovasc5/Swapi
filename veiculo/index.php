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
    <title>SWAPI - Veículo</title>
</head>
<body>
<table id='customers'>
<?php
    $search = $_GET['search'];
    $array_name = [];
    $array_model = [];
    $array_vehicle_class  = [];
    $array_length  = [];
    $array_passengers  = [];
    $array_cargo_capacity = [];

    $url = "https://swapi.dev/api/vehicles/";
    $resultado = json_decode(file_get_contents($url));

    foreach($resultado->results as $veiculo){
        array_push($array_name, $veiculo->name);
        array_push($array_model, $veiculo->model);
        array_push($array_vehicle_class, $veiculo->vehicle_class);
        array_push($array_length, $veiculo->length);
        array_push($array_passengers, $veiculo->passengers);
        array_push($array_cargo_capacity, $veiculo->cargo_capacity);
    }

    $url = "https://swapi.dev/api/vehicles/?page=2";
    $resultado = json_decode(file_get_contents($url));

    foreach($resultado->results as $veiculo){
        array_push($array_name, $veiculo->name);
        array_push($array_model, $veiculo->model);
        array_push($array_vehicle_class, $veiculo->vehicle_class);
        array_push($array_length, $veiculo->length);
        array_push($array_passengers, $veiculo->passengers);
        array_push($array_cargo_capacity, $veiculo->cargo_capacity);
    }

    $url = "https://swapi.dev/api/vehicles/?page=3";
    $resultado = json_decode(file_get_contents($url));

    foreach($resultado->results as $veiculo){
        array_push($array_name, $veiculo->name);
        array_push($array_model, $veiculo->model);
        array_push($array_vehicle_class, $veiculo->vehicle_class);
        array_push($array_length, $veiculo->length);
        array_push($array_passengers, $veiculo->passengers);
        array_push($array_cargo_capacity, $veiculo->cargo_capacity);
    }

    $url = "https://swapi.dev/api/vehicles/?page=4";
    $resultado = json_decode(file_get_contents($url));

    foreach($resultado->results as $veiculo){
        array_push($array_name, $veiculo->name);
        array_push($array_model, $veiculo->model);
        array_push($array_vehicle_class, $veiculo->vehicle_class);
        array_push($array_length, $veiculo->length);
        array_push($array_passengers, $veiculo->passengers);
        array_push($array_cargo_capacity, $veiculo->cargo_capacity);
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
                    <td>$array_vehicle_class[$a]</td>
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
                    <th>Carga Máx.</th>
                    <td>$array_cargo_capacity[$a]</td>
                </tr>
            ";
        }
    }
?>
</table>
<a href="../index.php">Voltar à página inicial</a>

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