<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    $fhr = isset ($_GET["fhr"]) ? $_GET["fhr"]: 0;
    ?>
    <title>Exercicio PHP 8</title>
    <style>
        body
        {
        background-color: rgb(221, 107, 221);
        }
        div
        {
        border-radius: 15px;
        text-indent: 30px;
        text-align: center;
        width: 900px;
        font-size: 25px;
        color: white;
        margin-left: 25%;
        margin-top: 25%;
        background-color: rgb(84, 84, 202);
        }
        </style>
</head>
<body>
    <div>
    <?php
    $celsius = (5 * ($fhr-32) / 9);
    echo"A temperatura $fhr F° é em Graus Celsius $celsius C°";
    ?>
    </div>
</body>
</html>