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
    <title>SWAPI - Filmes</title>
</head>
<body>
<table id='customers'>
<?php
    $search = $_GET['search'];
    $array_title = [];
    $array_episode_id = [];
    $array_opening_crawl = [];
    $array_director = [];
    $array_producer = [];
    $array_release_date = [];

    $url = "https://swapi.dev/api/films/";
    $resultado = json_decode(file_get_contents($url));

    foreach($resultado->results as $filme){
        array_push($array_title, $filme->title);
        array_push($array_episode_id, $filme->episode_id );
        array_push($array_opening_crawl, $filme->opening_crawl );
        array_push($array_director, $filme->director);
        array_push($array_producer, $filme->producer);
        array_push($array_release_date, $filme->release_date);
    }

    for($a = 0; $a != sizeof($array_title); $a++){
        if($search == $array_title[$a]){
            $temp_var = $array_release_date[$a];
            $array_time = explode('-',$temp_var);
                    $data = $array_time[2].' de ';
                    if($array_time[1] == '01'){
                        $data = $array_time[2].' de '.'Janeiro';
                    }
                    if($array_time[1] == '02'){
                        $data = $array_time[2].' de '.'Fevereiro';
                    }
                    if($array_time[1] == '03'){
                        $data = $array_time[2].' de '.'Março';
                    }
                    if($array_time[1] == '04'){
                        $data = $array_time[2].' de '.'Abril';
                    }
                    if($array_time[1] == '05'){
                        $data = $array_time[2].' de '.'Maio';
                    }
                    if($array_time[1] == '06'){
                        $data = $array_time[2].' de '.'Junho';
                    }
                    if($array_time[1] == '07'){
                        $data = $array_time[2].' de '.'Julho';
                    }
                    if($array_time[1] == '08'){
                        $data = $array_time[2].' de '.'Agosto';
                    }
                    if($array_time[1] == '09'){
                        $data = $array_time[2].' de '.'Setembro';
                    }
                    if($array_time[1] == '10'){
                        $data = $array_time[2].' de '.'Outubro';
                    }
                    if($array_time[1] == '11'){
                        $data = $array_time[2].' de '.'Novembro';
                    }if($array_time[1] == '12'){
                        $data = $array_time[2].' de '.'Dezembro';
                    }
                    $data = $data." de $array_time[0]";
            echo "
            
                <tr>
                    <th>Título</th>
                    <td>$array_title[$a]</td>
                </tr>

                <tr>
                    <th>Número do Filme</th>
                    <td>$array_episode_id[$a]</td>
                </tr>
                
                <tr>
                    <th>Tela de abertura</th>
                    <td>$array_opening_crawl[$a]</td>
                </tr>

                <tr>
                    <th>Diretor</th>
                    <td>$array_director[$a]</td>
                </tr>

                <tr>
                    <th>Produtor</th>
                    <td>$array_producer[$a]</td>
                </tr>

                <tr>
                    <th>Data</th>
                    <td>$data</td>
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