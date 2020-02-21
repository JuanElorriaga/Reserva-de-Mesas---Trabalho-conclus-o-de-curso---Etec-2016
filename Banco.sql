
create database restaurante;
use  restaurante;

Create Table cliente (
id		Int Primary Key Auto_Increment,
nome 	VARCHAR(50) 	not null,
cpf		VARCHAR(14)		not	null UNIQUE,
senha	VARCHAR(10)		not	null,
email	VARCHAR(50)		not	null UNIQUE,
fone	VARCHAR(14)		not	null
) Engine=InnoDB Default CharSet=Latin1;


Create Table reserva (
id			Int Primary Key Auto_Increment,
mesa 		int(2) 			not 	null,
horario		varchar(5) 		not  	null,
data		varchar(10)		not 	null,
id_cliente  int
) Engine=InnoDB Default CharSet=Latin1;

ALTER TABLE reserva ADD FOREIGN KEY (id_cliente) REFERENCES cliente(Id);


Create Table adm (
id			Int Primary Key Auto_Increment,
email 		email	VARCHAR(50) not null,
senha	VARCHAR(10)		not	null,
) Engine=InnoDB Default CharSet=Latin1;



update adm set email='adm1@adm1', senha='adm1';



