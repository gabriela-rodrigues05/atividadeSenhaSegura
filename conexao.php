<?php
$hostname = "sql100.infinityfree.com";
$usuario = "if0_39533697";
$senha = "dz5BSKCKIvXhIUy";
$bancodedados = "banco_php";

$mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);

if ($mysqli->connect_errno) {
    echo "Falha ao conectar: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    exit();
}
?>
