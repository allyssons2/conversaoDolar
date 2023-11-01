<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
</head>
<body>

<header>
    <h1>Conversor de dolares</h1>

<form action="">
<label>Inserir o valor em dólar que vai ser convertido: </label> 


<input type="text" name="Dolar" placeholder="Valor em dólar">
<input type="submit" value="Converter">
</div>

</form>

<?php
if (isset($_GET["Dolar"]))
{
$dolar = $_GET["Dolar"];
$real  = 5.2;
echo $dolar * $real;
}
?>



</body>
</html>


 

<header>
    <h1>Calcular peso e altura</h1>

<form action="">
<label>Calcular peso: </label> 
<input type="text" name="peso" placeholder="peso em kg">
<input type="submit" value="Calcular">
<label>Calcular altura: </label> 
<input type="text" name="altura" placeholder="calcular altura">
<input type="submit" value="Calcular">
</form>

<?php
if (isset($_GET["peso"]) && isset($_GET["altura"]))

$peso = $_GET["peso"];
$altura  = $_GET["altura"];

$IMC = $peso / ($altura * $altura);
echo $IMC;

?>



</body>
</html>