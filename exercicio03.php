<?php



$ope = $_POST['ope'];
$valor1 = $_POST['val'];
$valor2 = $_POST['val2'];

switch ($ope){
case 1:
$somaGeral = $valor1 + $valor2;
echo $valor1 . ' + ' . $valor2 . ' = ' . $somaGeral;
break; 

case 2:
$somaGeral = $valor1 - $valor2;
echo $valor1 . ' - ' . $valor2 . ' = ' . $somaGeral;
return;
break;

case 3:
$somaGeral = $valor1 * $valor2;
echo $valor1 . ' X ' . $valor2 . ' = ' . $somaGeral;
return;
break;

case 4:
$somaGeral = $valor1 / $valor2;
echo $valor1 . ' / ' . $valor2 . ' = ' . $somaGeral;
return;
break;

default: echo 'Opção inválida';
break;

}

?>