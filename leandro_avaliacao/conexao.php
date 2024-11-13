<?php
$host = "localhost";
$usuario = "root";
$password = "";
$dbName = "meu_banco";

try {
$conn = new PDO("mysql:host=$host;dbname=$dbName", $usuario, $password);

$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erro na minha conexão: " .$e->getMessage();
}
?>