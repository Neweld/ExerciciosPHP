<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
$num_a = isset ($_GET["num_a"]) ? $_GET["num_a"]: 0; 
$num_b = isset ($_GET["num_b"]) ? $_GET["num_b"]: 0; 
?>
    <title> Exercicio PHP 2 </title>
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
<h2> A ordem crescente dos numeros é: </h2> 
<?php
if
($num_a < $num_b)
{
    echo "<h2> $num_a e $num_b </h2>";
}
else
{
    echo "<h2> $num_b e $num_a </h2>";
}
?>
</div>
</body>
</html>