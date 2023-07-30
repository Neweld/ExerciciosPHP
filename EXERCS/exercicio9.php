<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    $num4 = isset ($_GET["num4"]) ? $_GET["num4"]: 0;
    ?>
    <title>Exercicio PHP 9</title>
</head>
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
<body>
    <div>
<?php
if ($num4 > 0)
{
    echo "Valor Positivo, $num4";
}
else if ($num4 < 0)
{
    echo "Valor Negativo, $num4";
}
else 
{
    echo"Igual a Zero, $num4";
}
?>
</div>
</body>
</html>