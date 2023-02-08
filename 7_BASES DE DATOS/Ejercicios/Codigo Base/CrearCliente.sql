create database test
go

use test
go

create table cliente (
    dni varchar(20) primary key,
    nombre varchar(20) )

insert into cliente values ('111','jaime')
insert into cliente values ('2222','luis')
insert into cliente values ('9','Curro')
insert into cliente values ('A0','MAª Luisa')
