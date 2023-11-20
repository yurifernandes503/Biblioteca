<?php
$host = "seu_host";
$usuario = "seu_usuario";
$senha = "sua_senha";
$banco = "biblioteca";

$conn = new mysqli($host, $usuario, $senha, $banco);

if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}
?>
