<?php

$numero = $_POST['val'];


if ($numero == 1){
	echo 'Janeiro';
}
if ($numero == 2){
	echo 'Fevereiro';
}
if ($numero == 3){
	echo 'Março';
}
if ($numero == 4){
	echo 'Abril';
}
if ($numero == 5){
	echo 'Maio';
}
if ($numero == 6){
	echo 'Junho';
}
if ($numero == 7){
	echo 'Julho';
}
if ($numero == 8){
	echo 'Agosto';
}
if ($numero == 9){
	echo 'Setembro';
}
if ($numero == 10){
	echo 'Outubro';
}
if ($numero == 11){
	echo 'Novembro';
}
if ($numero == 12){
	echo 'Dezembro';
}
else if ($numero == 0) {
	echo 'Não existe mês com este número';
}
else if ($numero >= 13) {
	echo 'Não existe mês com este número';
}

?>