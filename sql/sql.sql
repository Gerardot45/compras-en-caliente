DROP DATABASE IF EXISTS compras_en_caliente;
CREATE DATABASE compras_en_caliente;
ALTER DATABASE compras_en_caliente CHARACTER SET utf8 COLLATE utf8_general_ci;
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
,'El iPhone 11 tiene una pantalla LCD de 6.1 pulgadas, la misma del XR, y ofrece una resistencia al agua IP68, lo cual quiere decir que lo puedes sumergir en hasta dos metros de agua por 30 minutos, una mejora frente a su antecesor, que soportaba solo una profundidad de 1.5 metros.',
'iphone11.jpg',25999,10);
INSERT INTO productos (nombre_producto,descripcion_producto,imagen_producto,precio,cantidad_productos) VALUES ('Samsumg Galaxy A50'
, 'Pantalla: 6.4 pulgadas (Super AMOLED)
Resolución: 2,340x1,080 pixeles.
Procesador: Exynos 9610.
RAM: 4GB, 6GB.
Almacenamiento: 64GB, 128GB.
Ranura microSD: sí
Batería: 4,000mAh.
Lector de huellas: Sí, en pantalla.',
'samsung_A50.jpg',7999,14);
INSERT INTO productos (nombre_producto,descripcion_producto,imagen_producto,precio,cantidad_productos) VALUES ('Pc Gamer Xtreme Amd Ryzen 5'
, 'El procesador RYZEN 5 3400G te brinda 4 núcleos con 3.7 Ghz de velocidad base y 4.2 Ghz en Turbo con 4MB en cache, convirtiendo tu PC en una máquina para derrotar a tus oponentes.
EQUÍPATE PARA LA BATALLA CON LOS GRÁFICOS VEGA Los potentes gráficos Radeon Vega proporcionan un rendimiento rápido, sin interrupciones y fluido en los juegos que te apasionan
TARJETA MADRE Integramos la compatibilidad perfecta para todos tus Gadgets y accesorios Gamers con una placa madre CHIPSET A320 .
MEMORIA RAM El procesador junto con la memoria RAM 8GB DDR4 a una frecuencia de 3200MHz se encargaran de darle a tu equipo la potencia y la fuerza que necesitas para correr tus programas y juegos favoritos
Velocidad sin limites, la unidad de estado sólido 240gb mejora dramáticamente la capacidad de respuesta de su sistema existente con velocidades increíbles de inicio',
'pc_gamer.jpg',28999,1);
INSERT INTO productos (nombre_producto,descripcion_producto,imagen_producto,precio,cantidad_productos) VALUES ('Impresora Ecotank'
, 'La multifuncional EcoTank® L380 revoluciona la economía y productividad en los hogares activos y pequeñas empresas. Con el Sistema Original de Tanque de Tinta, con altísimo rendimiento y fácil de rellenar, podrás imprimir sin el estress de cambiar cartuchos. Imprime hasta 7500 páginas a color1 o 4500 páginas en negro1 con calidad professional y alta velocidad2. Imprime cientos de proyectos escolares, documentos, fotos, y todo lo que quieras, con calidad y rapidez, sin preocuparte por quedarte sin tinta cuando más la necesitas. Con garantía extendida de 2 años3, apoyada con la amplia red de servicio y soporte técnico de Epson.
EcoTank: Economía y tranquilidad
Imprime lo que quieras
Digitaliza con calidad',
'impresora.jpg',25999,20);

INSERT INTO productos (nombre_producto,descripcion_producto,imagen_producto,precio,cantidad_productos) VALUES ('Xbox One'
, 'Disfruta de más de 1300 juegos fantásticos: desde los superéxitos y las sagas más populares hasta tres generaciones de títulos favoritos a los que puedes volver a jugar o que puedes experimentar por primera vez.',
'xbox1.jpg',7999,0);

INSERT INTO productos (nombre_producto,descripcion_producto,imagen_producto,precio,cantidad_productos) VALUES ('PlayStation 4'
, 'Presentamos la consola PlayStation 4.
Ahora con un diseño más liviano y más delgado que nunca
Disco duro de 1 TB
Todos los mejores juegos, programas de televisión, música y mucho más.',
'play4.jpg',25999,5);
INSERT INTO productos (nombre_producto,descripcion_producto,imagen_producto,precio,cantidad_productos) VALUES ('
MacBook Air Apple Intel Core i5'
, 'Agrega a tu carrito esta MacBook Air de Apple

Cuenta con un elegante diseño.

Pantalla de 13 pulgadas.

Delgada y muy ligera para llevarla fácilmente.

Memoria RAM de 8 GB.

Procesador Intel Core i5 de quinta generación.

Capacidad de almacenaje de 128 GB.

Tarjeta de gráficos IntelHD Graphics 6000.',
'mcair.jpg',16999,3);
INSERT INTO productos (nombre_producto,descripcion_producto,imagen_producto,precio,cantidad_productos) VALUES ('Apple – Audífonos alámbricos EarPods'
, 'Los audífonos alámbricos de Apple con entrada de 3.5mm están diseñados a partir de la anatomía del oído, lo que los hace bastante cómodos para usar por varias horas durante el día. Tiene altavoces integrados, lo que se traduce en una perdida mínima del sonido y aumentan la potencia acústica. Además, su manejo es intuitivo al tener integrado en el cable botones para ajustar el volumen, responder llamadas o seleccionar tu música favorita.',
'airpods.jpg',899,20);
INSERT INTO productos (nombre_producto,descripcion_producto,imagen_producto,precio,cantidad_productos) VALUES ('Pantalla LG HD 32 pulgadas'
, 'La pantalla LG HD 32 pulgadas 32lm630bpub potencializará tu experiencia de entretenimiento a cada momento, ya que reúne una selección de características que te permitirán disfrutar de inteligencia artificial en tu TV, con imágenes de extraordinaria calidad, vibrantes tonalidades, contrastes y brillo, envolvente sonido así como poderosa conectividad que te permitirá disfrutar de tu contenido favorito',
'smarttv.jpg',899,2);