<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        $num12 = isset ($_GET["num12"]) ? $_GET["num12"]: 0;
        ?>
    <title> Exercicio PHP 15 </title>
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
    $produto = ($num12 * 0.16) + $num12;
    $parcela = $produto / 10;
    echo "O valor da parcela é de: R$ $parcela <br> O valor total da compra é R$ $produto"
    ?>
    </div>
</body>
</html>