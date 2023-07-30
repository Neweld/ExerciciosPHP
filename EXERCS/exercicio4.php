<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    $num1 = isset ($_GET["num1"]) ? $_GET["num1"]: 0;
    $num2 = isset ($_GET["num2"]) ? $_GET["num2"]: 0;
    $num3 = isset ($_GET["num3"]) ? $_GET["num3"]: 0;
    ?>
    <title>Exercicio PHP 4</title>
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
    if ($num1 > $num2 && $num1 > $num3)
    {
        echo "$num1 é o maior numero <br> 
        seus numeros são: $num1, $num2 e $num3";
    } 
    else if ($num2 > $num3 && $num2 > $num1)
    {
        echo"$num2 é o maior numero <br> 
        seus numeros são: $num1, $num2 e $num3";
    }
    else 
    {
        echo "$num3 é o maior numero <br> 
        seus numeros são: $num1, $num2 e $num3";
    }
    ?>
    <div>
</body>
</html>