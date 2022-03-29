<?php 
$numero  = $_POST['val'];

if ($numero % 10 == 0  && $numero % 5 == 0 && $numero % 2 == 0){
	echo $numero . ' : ' . 'E divisivel por 2, 5, 10';
} else {
	echo $numero . ' : ' . 'Não é divisivel por 2, 5, 10';
}
?>