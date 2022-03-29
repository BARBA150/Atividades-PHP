<?php
$nome = $_POST['nome']; 
$endereco = $_POST['endereco']; 
$email = $_POST['email']; 
$telefone = $_POST['telefone'];
$sexo = $_POST['sexo']; 
echo "Nome: " . $nome ."<br/>" . "Endereço: " . $endereco . "<br/>" . "E-mail: ". $email . "<br/>" . "Telefone: " . $telefone . "<br/>" . "Sexo: " . $sexo;
?>