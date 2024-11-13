<?php
include 'conexao.php';
$curso = $_POST['curso'];
$periodo = $_POST['periodo'];
$cordenador = $_POST['cordenador'];
$polo = $_POST['polo'];

$sql = "INSERT INTO cursos (curso, periodo, cordenador, polo) values ('$curso', '$periodo', '$cordenador', '$polo')";

if ($conn->exec($sql)) {
    header("Location: form_curso.php");
} else {
    echo "Erro: O formulário não foi enviado";
}
