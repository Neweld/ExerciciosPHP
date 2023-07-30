<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        $num10 = isset ($_GET["num10"]) ? $_GET["num10"]: 0;
        $num11 = isset ($_GET["num11"]) ? $_GET["num11"]: 0;
        ?>
    <title>Exercicio PHP 14</title>
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
    $td = $num10 + $num11; 
    $tt = $td * $num10;
    echo "Resultado do calculo: $tt";
    ?>
    </div>
</body>
</html>