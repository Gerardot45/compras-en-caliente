DROP DATABASE IF EXISTS compras_en_caliente;
CREATE DATABASE compras_en_caliente;
CREATE TABLE usuarios_registrados(
    email_usuario INT(20) NOT NULL,
    nombre_usuario VARCHAR(50) NOT NULL,
    primer_apellido_usuario VARCHAR(50) NOT NULL,
    segundo_apellido_usuario VARCHAR(50),
    password VARCHAR(50) NOT NULL,
    direccion TEXT NOT NULL,
    PRIMARY KEY (email_usuario)
);
CREATE TABLE productos(
    id_producto INT(20) NOT NULL AUTO_INCREMENT,
    nombre_producto VARCHAR(50) NOT NULL,
    descripcion_producto TEXT,
    imagen_producto VARCHAR(50) NOT NULL,
    PRIMARY KEY(id_producto)
);
CREATE TABLE compras_hechas(
  id_compra_hecha INT(20)  NOT NULL AUTO_INCREMENT,
  fk_email_usuario INT(20) NOT NULL,
  fk_producto INT(20) NOT NULL,
  fecha_del_pedido VARCHAR(50) NOT NULL,
  fecha_de_entrega VARCHAR(50) NOT NULL,
  PRIMARY KEY (id_compra_hecha),
  foreign key (fk_email_usuario) REFERENCES usuarios_registrados(email_usuario),
  foreign key (fk_producto) REFERENCES productos(id_producto)
);