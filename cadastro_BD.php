<?php

$nome=$_POST['nome'];
$cpf=$_POST['cpf'];
$email=$_POST['email'];
$fone=$_POST['fone'];

mysql_connect('localhost','root','');
mysql_select_db('restaurante');

$insere = "insert into cliente (nome, cpf, email, fone) values ('$nome','$cpf', '$email','$fone');";
$sql = mysql_query($insere);

if ($sql){
echo "<p align=center>Dados enviados com sucesso!</p>";
}

/*CREATE TABLE cliente (nome VARCHAR(255), cpf VARCHAR(255), email VARCHAR(255), fone VARCHAR(255));*/

?>