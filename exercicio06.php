<?php 
$funcionarios = array(
array("nome" => "Alex", "idade" => 21, "salario" => '1285.27', "ativo" => true),
array("nome" => "Emerson", "idade" => 35, "salario" => '3885.27', "ativo" => false)
);

foreach ($funcionarios as $funcionario) {

echo "Nome: " . $funcionario['nome'] . "</br>" . " Idade: " .  $funcionario['idade'] . "</br> " . " Salário: " . $funcionario['salario'] . "</br></br>";  


}

?>

