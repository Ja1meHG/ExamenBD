DROP DATABASE IF EXISTS tienda;
CREATE DATABASE tienda CHARACTER SET utf8mb4;
USE tienda;
CREATE TABLE fabricante (
 codigo INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 nombre VARCHAR(100) NOT NULL
);
CREATE TABLE producto (
 codigo INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 nombre VARCHAR(100) NOT NULL,
 precio DOUBLE NOT NULL,
 codigo_fabricante INT UNSIGNED NOT NULL,
 FOREIGN KEY (codigo_fabricante) REFERENCES fabricante(codigo)
);
CREATE TABLE form(
usuario VARCHAR (100) PRIMARY KEY,
nombre VARCHAR(100) NOT NULL,
apellidoPaterno VARCHAR(100) NOT NULL,
apellidoMaterno VARCHAR(100) NOT NULL,
telefono DOUBLE NOT NULL,
correo VARCHAR(100) NOT NULL,
pass VARCHAR(100) NOT NULL
);

INSERT INTO fabricante VALUES(1, 'Asus');
INSERT INTO fabricante VALUES(2, 'Lenovo');
INSERT INTO fabricante VALUES(3, 'Hewlett-Packard');
INSERT INTO fabricante VALUES(4, 'Samsung');
INSERT INTO fabricante VALUES(5, 'Seagate');
INSERT INTO fabricante VALUES(6, 'Crucial');
INSERT INTO fabricante VALUES(7, 'Gigabyte');
INSERT INTO fabricante VALUES(8, 'Huawei');
INSERT INTO fabricante VALUES(9, 'Xiaomi');
INSERT INTO producto VALUES(1, 'Disco duro SATA3 1TB', 86.99, 5);
INSERT INTO producto VALUES(2, 'Memoria RAM DDR4 8GB', 120, 6);
INSERT INTO producto VALUES(3, 'Disco SSD 1 TB', 150.99, 4);
INSERT INTO producto VALUES(4, 'GeForce GTX 1050Ti', 185, 7);
INSERT INTO producto VALUES(5, 'GeForce GTX 1080 Xtreme', 755, 6);
INSERT INTO producto VALUES(6, 'Monitor 24 LED Full HD', 202, 1);
INSERT INTO producto VALUES(7, 'Monitor 27 LED Full HD', 245.99, 1);
INSERT INTO producto VALUES(8, 'Portátil Yoga 520', 559, 2);
SELECT nombre FROM producto;
SELECT nombre,precio FROM producto;
SELECT*FROM fabricante;
SELECT nombre,precio,precio*1.06 FROM producto;

SELECT upper(nombre),precio FROM producto;
SELECT lower(nombre),precio FROM producto;
SELECT nombre ,upper(left(nombre,2)) FROM fabricante;

select codigo, nombre.fabricante, precio from producto
inner join producto on producto.codigo_fabricante=fabricante.codigo_fabricante
inner join fabricante on fabricante.codigo_fabricante=producto.codigo_fabricante;

select producto.codigo,producto.nombre,producto.precio as Dolares,producto.precio*1.06 as Euros, fabricante.nombre AS Fabricante
from producto inner join fabricante on producto.codigo_fabricante=fabricante.codigo
where producto.precio > 185 order by precio ASC; 
SELECT * FROM fabricante;

select * from form;