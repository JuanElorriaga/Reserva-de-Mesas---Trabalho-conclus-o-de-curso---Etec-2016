<?php

$mesa=$_GET['mesa'];
$cpf=$_POST['cpf'];
$horario=$_POST['horario'];
$data=$_POST['data'];

mysql_connect('localhost','root','');
mysql_select_db('restaurante');

$select = "select * from cliente where cpf = '$cpf'";
$sql = mysql_query($select);
$fetch = mysql_fetch_row($sql);

$select2 = "select * from reserva where mesa = '$mesa'";
$sql2 = mysql_query($select2);
$fetch2 = mysql_fetch_row($sql2);

if($fetch2){
	echo "Mesa reservada, tente outra!";
}else{

if($fetch){

$insere = "insert into reserva (mesa, cpf, horario, data) values ('$mesa','$cpf', '$horario', '$data');";
$sql = mysql_query($insere);

if ($sql){
echo "<p align=center>Dados enviados com sucesso!</p>";
}
}else{
	echo "CPF invalido, tente novamente!";
}
}

/*CREATE TABLE reserva (mesa VARCHAR (255), cpf VARCHAR(255), horario VARCHAR(255), data VARCHAR (255));*/
