<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        $num6 = isset ($_GET["num6"]) ? $_GET["num6"]: 0;
    ?>
    <title>Exercicio PHP 11</title>
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
    $i = 1; 
    $res = $num6;
    while ($i < $num6 )
    {
        $res = $res * $i; 
        $i++;
    }
    echo "O calculo fatorial de $num6 é <br> <hr> $num6 ! $res </hr> <br> <hr> O fatorial de $num6 é igual a $res </hr> ";
    ?>
    </div>
</body>
</html>