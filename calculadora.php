<?php
	$opmat1 = $_GET['opmat1'];
	$opmat2 = $_GET['opmat2'];
	$operador = $_GET['operadormat'];
	
	if($operador == "+"){
		$resultado = $opmat1 + $opmat2;
	}else if($operador == "-"){
		$resultado = $opmat1 - $opmat2;
	}else if($operador == "*"){
		$resultado = $opmat1 * $opmat2;
	}else if($resultado == "/"){
		$resultado = $opmat1 / $opmat2;
	}
	echo "El resultado es: ".$resultado;
?>