<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $string = "Curso PHP";
        $array = array("PHP", "HTML");
        date_default_timezone_set('America/Sao_Paulo');
        $data = date("d/m/Y H:i:s");
    ?>

    <h4>Essa é uma variável do tipo string : 
        <?php
            echo $string; 
        ?>
    </h4>
    <h4>Esse é um array: 
        <?php
            print_r($array);
        ?>
    </h4>
    <h4>Essa é uma data/hora: 
        <?php 
            echo $data;
        ?>
    </h4>
</body>
</html>