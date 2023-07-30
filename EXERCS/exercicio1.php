<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
<?php
$nota1 = isset ($_GET["num"]) ? $_GET["num"]: 0;
?>
    <title>Exercicio PHP 1
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
<h2> O seu numero é:</h2>
<?php
if ($nota1 % 2 == 0)
{
 echo "<h2> par </h2>";
}

 else {
 echo "<h2> impar </h2>";
} 
?>
</div>
</body>
</html>