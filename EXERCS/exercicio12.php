<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        $num8 = isset ($_GET["num8"]) ? $_GET["num8"]: 0;
        $num9 = isset ($_GET["num9"]) ? $_GET["num9"]: 0;
        $opc = isset ($_GET["num7"]) ? $_GET["num7"]: 0;;
        $som = $num8 + $num9;
        $sub = $num8 - $num9;
        $div = $num8 / $num9; 
        $mlt = $num8 * $num9; 
    ?>
    <title>Exercicio PHP 12</title>
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
    switch ($opc)
    {
            case 1:
            echo "O resultado da soma entre $num8 e $num9 é igual a $som";
            break;
           case 2: 
            echo "O resultado da subtração entre os numeros $num8 e $num9 é igual a $sub";
            break;
           case 3:
            echo "O resultado da divisão entre os numeros $num8 e $num9 é igual a $div";
            break;
           case 4:
            echo "O resultado da multiplicação entre os numeros $num8 e $num9 é igual a $mlt";
            break;
    }

    ?>
    </div>
</body>
</html>