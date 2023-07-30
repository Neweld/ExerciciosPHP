<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    $idd = isset ($_GET["idd"]) ? $_GET["idd"]: 0;
    $cat = 'Sua categoria:';  
    $ifa = 'INFANTIL A - 5 a 7 anos';
    $ifb = 'INFANTIL B - 8 a 10 anos';
    $juv = 'JUVENIL A - 11 a 13 anos'; 
    $juva = 'JUVENIL B - 14 a 17 anos';
    $adulto = 'ADULTO - 18 anos ou mais'
    ?>
    
    <title>Exercicio PHP 3
    </title>
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
    if ($idd >= 5 && $idd <=7) 
    {
        echo "$cat INFANTIL A";
    }
    else if ($idd >= 8 && $idd <=10) 
    {
        echo "$cat INFANTIL B";
    }
    else if ($idd >=11 && $idd <= 13)
    {
        echo "$cat JUVENIL A"; 
    }
    else if ($idd >=14 && $idd <=17)
    {
        echo "$cat JUVENIL B"; 
    }
    else if ($idd >= 18)
    {
        echo "$cat ADULTO";
    }
    else
    {
        echo "Você tem $idd anos e não pode fazer parte de nenhuma categoria <br> 
        Para pertencer a uma categoria você deve completar 5 anos, as categorias são: <br> 
        $ifa <br> $ifb <br> $juv <br> $juva <br> $adulto";
    } 
    ?>
    <div>
</body>
</html>