<?php

$numeroA = $_POST['val'];
$numeroB = $_POST['val2'];


if ($numeroA < $numeroB){
	echo 'Ordem crescente : ' . $numeroA  . ' , ' . $numeroB;
}
if ($numeroA > $numeroB){
	echo 'Ordem crescente : ' . $numeroB . ' , ' . $numeroA;
}

?>