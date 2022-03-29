<?php

$soma = $_POST['val'];
$soma2 = $_POST['val2'];
$somaGeral = $soma + $soma2;

echo 'O resultado de : ' . $soma . ' + ' . $soma2 . ' = ' . $somaGeral;

if ($somaGeral > 20){
	echo ' o resultado agora é : ' . $somaGeral + 8;
}
else if ($somaGeral < 20){
	echo ' o resultado agora é : ' . $somaGeral - 5;
}

?>