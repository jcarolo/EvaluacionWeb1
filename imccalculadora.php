<?php 
if ($_GET['submit']) 
{ 
$peso = $_GET['peso'];
$altura = $_GET['altura'];
function imc($peso,$altura) 
{
 $imc = $peso/($altura*$altura);
return $imc;
} 

$imc = imc($peso,$altura);
if ($imc <= 18.5) {
$echo = "Peso insuficiente";
} else if ($imc > 18.5 AND $imc<=24.9 ) {
$echo = "Peso Normal";
} else if ($imc > 25 AND $imc<=26.9) {
$echo = "Sobre pesogrado 1";
} else if ($imc > 27 AND $imc<=29.9) {
    $echo = "Sobre pesogrado II";
} else if ($imc > 30 AND $imc<=34.9) {
    $echo = "Obesidad tipo I";
} else if ($imc > 35 AND $imc<=39.9) {
    $echo = "Obesidad tipo II";
} else if ($imc > 40 AND $imc<=49.9) {
    $echo = "Obesidad tipo III";          

} else if ($imc > 50.0) {
$echo = "Obesidad tipo 4";
}
echo " Tu indice de masa corporal es " . $imc . " y eres : "; 
echo "$echo";
}
?>
