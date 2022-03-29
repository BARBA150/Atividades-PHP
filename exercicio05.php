<?php 

$numero = $_POST['val'];
$cont = 0;

do{
	$cont++;
 echo $cont;
} while($cont < $numero);
?>

<?php 

$numero = $_POST['val'];

for ($i = 1;$i <= $numero; $i++) {
    echo $i . " = " . $numero . "</br>" ;
}
?>


