create database blogPost;
use blogpost;

CREATE TABLE usuario(
    id int primary key auto_increment,
    username varchar(50) unique,
    complete_name varchar(50),
    password varchar(255)
);

CREATE TABLE publicaciones (
	id int primary key auto_increment,
	autor VARCHAR(40),
    cuerpo VARCHAR(255),
	fechaYHora DATETIME,
    foreign key (autor) references usuario(username)
);

