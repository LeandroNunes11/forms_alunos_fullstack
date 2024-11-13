# forms_alunos_fullstack

cd\

cd xampp

mysql -u root -p

create database meu_banco;

use meu_banco;

create table alunos(
     id INT AUTO_INCREMENT PRIMARY KEY,
     nome VARCHAR(100),
     email VARCHAR(100),
     telefone VARCHAR(100),
     idade INT );

create table cursos(
     id INT AUTO_INCREMENT PRIMARY KEY,
     curso VARCHAR(100),
     periodo INT,
     cordenador VARCHAR(100),
     polo VARCHAR(100) );