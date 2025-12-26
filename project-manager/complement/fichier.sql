create database metis;

show databases;

use metis;

create table member (
    -> id int auto_increment primary key,
    -> name varchar(50) not null,
    -> email varchar(100) unique not null
    -> );

create table project (
    -> id int auto_increment primary key,
    -> title varchar(100) not null,
    -> description text,
    -> debutdate datetime,
    -> idmember int not null,
    -> foreign key (idmember) references member(id) on delete cascade
    -> );

create table activity (
    -> id int auto_increment primary key,
    -> description text,
    -> activitydate datetime,
    -> idproject int not null,
    -> foreign key (idproject) references project(id) on delete cascade
    -> );

show tables;
