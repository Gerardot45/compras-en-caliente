DROP DATABASE IF EXISTS compras_en_caliente;
CREATE DATABASE compras_en_caliente;
CREATE TABLE usuarios_registrados(
    email_usuario VARCHAR(50) NOT NULL,
    nombre_usuario VARCHAR(50) NOT NULL,
    primer_apellido_usuario VARCHAR(50) NOT NULL,
    segundo_apellido_usuario VARCHAR(50),
    password VARCHAR(150) NOT NULL,
    direccion TEXT NOT NULL,
    fecha_captura DATE NOT NULL,
    PRIMARY KEY (email_usuario)
);
CREATE TABLE productos(
    id_producto INT(20) NOT NULL AUTO_INCREMENT,
    nombre_producto VARCHAR(50) NOT NULL,
    descripcion_producto TEXT,
    imagen_producto VARCHAR(50) NOT NULL,
    precio REAL NOT NULL,
    cantidad_productos INT(50),
    PRIMARY KEY(id_producto)
);
CREATE TABLE compras_hechas(
  id_compra_hecha INT(20)  NOT NULL AUTO_INCREMENT,
  fk_email_usuario VARCHAR(50) NOT NULL,
  fk_producto INT(20) NOT NULL,
  nombre_producto VARCHAR(50) NOT NULL,
  descripcion_producto VARCHAR(50) NOT NULL,
  precio REAL NOT NULL,
  fecha_del_pedido DATE NOT NULL,
  fecha_de_entrega DATE NOT NULL,
  PRIMARY KEY (id_compra_hecha),
  foreign key (fk_email_usuario) REFERENCES usuarios_registrados(email_usuario) ON DELETE CASCADE,
  foreign key (fk_producto) REFERENCES productos(id_producto) ON DELETE CASCADE
);
INSERT INTO usuarios_registrados VALUES ('kalicech@gmail.com','Gerardo','Rivera','Ramírez','40bd001563085fc35165329ea1ff5c5ecbdbbeef','Calle 1','2020-07-02');
INSERT INTO productos (nombre_producto,descripcion_producto,imagen_producto,precio,cantidad_productos) VALUES ('I phone XI'
,'Esto es un Iphone XI con ciertas caracteríasticas',
'iphone11.jpg',25999,10);
INSERT INTO productos (nombre_producto,descripcion_producto,imagen_producto,precio,cantidad_productos) VALUES ('Samsumg Galaxy A50'
, 'Caracteríasticas del samsumg Galaxy A50',
'samsung_A50.jpg',7999,14);
INSERT INTO productos (nombre_producto,descripcion_producto,imagen_producto,precio,cantidad_productos) VALUES ('Pc Gamer Xtreme Amd Ryzen 5'
, 'Características de la PC gamer',
'pc_gamer.jpg',28999,1);
INSERT INTO productos (nombre_producto,descripcion_producto,imagen_producto,precio,cantidad_productos) VALUES ('Impresora Ecotank'
, 'Caracteríasticas de la impresora',
'impresora.jpg',25999,20);
