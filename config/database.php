<?php
/* CONFIGURAÇÕES PARA LOCALHOST */
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "sistema_usuarios";



$conexao = new mysqli($host, $user, $pass, $dbname);

if ($conexao->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conexao->connect_error);
}

$conexao->set_charset("utf8mb4");
?>
