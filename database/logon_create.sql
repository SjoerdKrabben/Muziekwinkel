drop database if exists logon;

create database logon;

use logon;

create table users (
	username varchar(16) not null, 
	password varchar(32) not null,
	primary key (username)
);


