<?php

$numero = $_POST['val'];

if ($numero > 0){
	echo 'Valor positivo : ' . $numero;
}
if ($numero < 0){
	echo 'Valor negativo : ' . $numero;
}
if ($numero == 0) {
	echo 'Igual a zero : ' . $numero;
}

?>