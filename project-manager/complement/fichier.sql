create database metis;

show databases;

use metis;

create table member (
    -> id int auto_increment primary key,
    -> name varchar(50) not null,
    -> email varchar(100) unique not null
    -> );


