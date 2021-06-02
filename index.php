<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Swapi</title>
</head>
<body>
    <?php
        $url = "https://swapi.dev/api/people/";
        $resultado = json_decode(file_get_contents($url));


        var_dump($resultado);
    ?>
</body>
</html>