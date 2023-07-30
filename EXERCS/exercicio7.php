<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    $hr = isset ($_GET["hr"]) ? $_GET["hr"]: 0;
    $hr_mes = isset ($_GET["hr_mes"]) ? $_GET["hr_mes"]: 0;
    ?>
    <title>Exercicio PHP 7</title>
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
    $slr = $hr_mes * $hr; 
    echo "Seu salario no mês é de: R$ $slr. <br> Horas trabalhadas: $hr_mes Hrs <br> Seu salário por hora: R$ $hr";
    ?>
    </div>
</body>
</html>