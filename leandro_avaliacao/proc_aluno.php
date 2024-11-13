<?php
include 'conexao.php';
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$idade = $_POST['idade'];

$sql = "INSERT INTO alunos (nome, email, telefone, idade) values ('$nome', '$email', '$telefone', '$idade')";

if($conn -> exec($sql)){
    header("Location: form_aluno.php");
}else{
    echo "Erro: O formulário não foi enviado";
}
?>