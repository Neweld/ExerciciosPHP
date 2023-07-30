<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    $num5 = isset ($_GET["num5"]) ? $_GET["num5"]: 0;
    $aaa = $num5 * 0;
    $bbb = $num5 * 1;
    $ccc = $num5 * 2;
    $ddd = $num5 * 3;
    $eee = $num5 * 4;
    $fff = $num5 * 5;
    $ggg = $num5 * 6;
    $hhh = $num5 * 7;
    $iii = $num5 * 8;
    $jjj = $num5 * 9;
    $kkk = $num5 * 10;
    ?>
    <title>Exercicio PHP 10</title>
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
<div>
<body>
    <?php
    echo "
    $num5 x 0 = $aaa <br>
    $num5 x 1 = $bbb <br>
    $num5 x 2 = $ccc <br>
    $num5 x 3 = $ddd <br>
    $num5 x 4 = $eee <br>
    $num5 x 5 = $fff <br>
    $num5 x 6 = $ggg <br>
    $num5 x 7 = $hhh <br>
    $num5 x 8 = $iii <br>
    $num5 x 9 = $jjj <br>
    $num5 x 10 = $kkk <br>
    ";
    ?>
    </div>
</body>
</html>