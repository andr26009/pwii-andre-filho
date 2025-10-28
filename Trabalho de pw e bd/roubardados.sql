create database roubardados;
use roubardados;

create table dadosroubados(
	idRoubado int not null auto_increment primary key,
    nome varchar(100) not null,
    idade int not null,
    cpf varchar(14) not null,
    TelefoneFixo varchar(15) not null,
    telefoneCelular varchar(15) not null,
    endereco varchar(100) not null,
    Email varchar(50) not null
);

select * from dadosroubados;