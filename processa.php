<?php
require('conexao.php');

$nome = filter_input(INPUT_POST, 'nome');
$idade = filter_input(INPUT_POST, 'idade');
$senha = filter_input(INPUT_POST, 'senha');
$username = filter_input(INPUT_POST, 'usuario');
$sexo = filter_input(INPUT_POST, 'sexo');

$conn->query("INSERT INTO usuarios(username, senha, nome, idade, sexo) VALUES('$username', '$senha', '$nome', '$idade', '$sexo')");

?>
