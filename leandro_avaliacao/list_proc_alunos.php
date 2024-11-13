<?php

include('conexao.php');

try{
    $sql = "SELECT * FROM alunos";

    $lista = $conn->prepare($sql);

    $lista->execute();

    $alunos = $lista->fetchAll(PDO::FETCH_ASSOC);

} catch(PDOException $e){
    echo"Erro na minha conexão". $e->getMessage();
}