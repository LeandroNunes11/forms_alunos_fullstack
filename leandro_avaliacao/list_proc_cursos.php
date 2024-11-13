<?php

include('conexao.php');

try {
    $sql = "SELECT * FROM cursos";

    $lista = $conn->prepare($sql);

    $lista->execute();

    $cursos = $lista->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Erro na minha conexão" . $e->getMessage();
}
