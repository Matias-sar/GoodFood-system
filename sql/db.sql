CREATE DATABASE GoodFood;

USE GoodFood;

CREATE TABLE usuario_sistema(
    id_usuario INT(5) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nivel INT(25) NOT NULL,
    nombre_usuario VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL
);

 usuario_sistema;

CREATE TABLE productos(
    id_producto INT(5) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nombre VARCHAR(50) NOT NULL,
    proveedor VARCHAR(50) NOT NULL,
    tipo VARCHAR(50) NOT NULL,
    precio FLOAT NOT NULL,
    fecha_entrada TIMESTAMP NOT NULL,
    fecha_expiracion VARCHAR(50) NOT NULL
);


CREATE TABLE productos_estante(
    id_estante INT(5) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nombre_estante VARCHAR(50) NOT NULL
);

CREATE TABLE productos_estante_producto(
    id_conexion INT(5) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    id_estante INT(5) NOT NULL,
    id_producto INT(5) NOT NULL,
    FOREIGN KEY (id_producto) REFERENCES productos(id_producto),
    FOREIGN KEY (id_estante)  REFERENCES productos_estante(id_estante)
);

CREATE TABLE cliente(
    id_cliente INT(5) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nombre VARCHAR(50) NOT NULL,
    apellido VARCHAR(50) NOT NULL,
    informacion_contacto VARCHAR(50)
);

CREATE TABLE pedidos (
    id_pedido INT(5) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nombre_producto VARCHAR(50) NOT NULL,
    cantidad INT NOT NULL,
    precio FLOAT NOT NULL,
    total FLOAT NOT NULL,
    fecha_pedido TIMESTAMP NOT NULL,
    fecha_entrega VARCHAR(50) NOT NULL,
    metodo_pago VARCHAR(50) NOT NULL,
    direction_entrega VARCHAR(50) NOT NULL
);

CREATE TABLE cliente_pedido (
    id_conexion INT(5) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    id_cliente INT(5) NOT NULL,
    id_pedido INT(5) NOT NULL,
    FOREIGN KEY (id_cliente) REFERENCES cliente(id_cliente),
    FOREIGN KEY (id_pedido) REFERENCES pedidos(id_pedido)
);

/*========================================================================================*/
/*

Tabla usuario_sistema
Consultas para el ingreso de datos con contraseñas encriptadas
*/
INSERT INTO usuario_sistema VALUES(23451,'1','Matias.admin','Zupsero/150');
INSERT INTO usuario_sistema VALUES(44219,'1','Nicole.admin',md5('12345'));
INSERT INTO usuario_sistema VALUES(52274,'2','Julio.Hernadez',md5('123456'));
INSERT INTO usuario_sistema VALUES(77434,'3','Julia.Lars',md5('1234567'));
SELECT id_usuario, nivel, nombre_usuario,CAST (aes_encrypt(password,'AES')AS CHAR(50)) FROM usuario_sistema;
SELECT * FROM usuario_sistema;

/*
Tabla productos
Consultas para el ingreso de datos 
*/

INSERT INTO productos(nombre, proveedor, tipo, precio, fecha_entrada, fecha_expiracion)
VALUES('Pollo', 'Pollo indio', 'Muslo de pollo', '8.9',CURRENT_TIMESTAMP, '2022-09-12');
SELECT * FROM productos;

/*
Tabla productos_estante
Consultas para mostrar los datos de la tabla productos_estante
*/
SELECT id_conexion, productos_estante_producto.id_estante, nombre_estante, tipo 
FROM productos_estante_producto, productos_estante, productos 
WHERE productos_estante_producto.id_estante = productos_estante.id_estante 
AND productos_estante_producto.id_producto = productos.id_producto;


/*
Tabla cliente_pedido
Consulta para ingresar pedidos a la base de datos y para asociar los pedidos a los clientes
*/
INSERT INTO pedidos (nombre_producto, cantidad, precio, total, fecha_pedido, fecha_entrega, metodo_pago, direction_entrega)
VALUES ('Especies', 1, 9.8, 9.8, CURRENT_TIMESTAMP, '2020-05-12', 'Efectivo', 'Calle falsa 123');

SELECT pedidos.id_pedido, cliente.nombre, cliente.apellido, pedidos.nombre_producto, pedidos.cantidad, pedidos.precio, pedidos.total, pedidos.fecha_pedido, pedidos.fecha_entrega, pedidos.metodo_pago, pedidos.direction_entrega
FROM pedidos
INNER JOIN cliente_pedido ON pedidos.id_pedido = cliente_pedido.id_pedido
INNER JOIN cliente ON cliente_pedido.id_cliente = cliente.id_cliente;

SELECT * FROM pedidos;
