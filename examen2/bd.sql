--Entrar a mysql
--show database
--usar los multiplos de 8 por lo bites
create database bienesRaices3;
drop database bienesRaices3;
use bienesRaices3

create table sele (
    id int PRIMARY KEY AUTO_INCREMENT,
    name varchar(32) not null,
    email varchar(32) not null,
    phone varchar(10)
);


CREATE TABLE Propietys (
    id INT PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(64) NOT NULL,
    price FLOAT NOT NULL,
    img VARCHAR(128),
    description VARCHAR(256),
    room INT,
    wc INT,
    garage INT,
    time DATE,
    id_sale INT NOT NULL,
    FOREIGN KEY (id_sale) REFERENCES sele(id)
);

INSERT INTO Propietys(title,price,img,descriptio,room,wc,garage,time,id_sale) VALUES();
select * from sele

CREATE TABLE `vendedores` (
  id int(11) NOT NULL,
  nombre varchar(45),
  apellido varchar(45),
  telefono varchar(10),
  PRIMARY KEY (id)
)



select * from Propietys