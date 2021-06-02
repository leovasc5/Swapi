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
    <title>SWAPI - Espécies</title>
</head>
<body>
    <table id="customers">
        <tr>
            <th>Nome</th>
            <th>Modelo</th>
            <th>Classe</th>
            <th>Máx. Velocidade</th>
            <th>Máx. Peso</th>
            <th>Passageiros</th>
        </tr>
<?php
    $url = "https://swapi.dev/api/starships/";
    $resultado = json_decode(file_get_contents($url));

    foreach($resultado->results as $nave){
        echo "
        <tr>
            <td>
                $nave->name
            </td>

            <td>
                $nave->model
            </td>

            <td>
                $nave->starship_class
            </td>
        
            <td>
                $nave->max_atmosphering_speed 
            </td>

            <td>
                $nave->cargo_capacity 
            </td>

            <td>
                $nave->passengers 
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