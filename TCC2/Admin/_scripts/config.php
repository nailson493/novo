<?php
$servidor = 'localhost:3307';
$usuario = 'root';
$senha = '';
$banco = 'beardhub';
// Conecta-se ao banco de dados MySQL
$mysqli = new mysqli($servidor, $usuario, $senha, $banco);
// Caso algo tenha dado errado, exibe uma mensagem de erro
if (mysqli_connect_errno()) trigger_error(mysqli_connect_error());
?>