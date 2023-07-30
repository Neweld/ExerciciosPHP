<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    $idd13 = isset ($_GET["idd13"]) ? $_GET["idd13"]: 0;
    $text = isset ($_GET["text"]) ? $_GET["text"]: 0;
    ?>
    <title>Exercicio PHP 13</title>
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
    if ($idd13 > 18)
    echo "$text é maior de 18 e tem $idd13 anos";
    else 
    echo "$text não é maior de 18 e tem $idd13 anos";
    ?>
    </div>
</body>
</html>