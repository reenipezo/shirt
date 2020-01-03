CREATE DATABASE DB_SONY1;
USE DB_SONY1;

CREATE TABLE Categoria
(
	id_categoria         INT PRIMARY KEY AUTO_INCREMENT,
	nom_categoria        VARCHAR(40) NOT NULL,
	estado               bit NOT NULL
);
CREATE TABLE Distrito
(
	id_distrito          INT PRIMARY KEY AUTO_INCREMENT,
	nom_distrito         VARCHAR(35) NOT NULL,
	estado               bit NOT NULL
);

CREATE TABLE Cliente
(
	id_cliente           INT PRIMARY KEY AUTO_INCREMENT,
	nom_cliente          VARCHAR(30) NOT NULL,
	ape_cliente          VARCHAR(70) NOT NULL,
	numDoc_cliente       VARCHAR(8) NOT NULL  unique,
	email_cliente        VARCHAR(100) not NULL unique,
  	clave				 varchar(20) not null,
	telf_cliente         CHAR(9) NULL,
	id_distrito          INTEGER NULL

);


CREATE TABLE DetallePedido
(
  id_detallepedido     int auto_increment primary key,
	id_pedido            INT not null ,
	id_producto          INT NOT NULL,
	cantidad             INTEGER NULL
);

CREATE TABLE Comprobante
(
	id_comprobante       INT PRIMARY KEY AUTO_INCREMENT,
	estado               BIT NOT NULL,
	id_pedido            INTEGER NULL,
	fechahora          	datetime
);


CREATE TABLE Pedido
(
	id_pedido            INT PRIMARY KEY AUTO_INCREMENT,
	email_cliente        varchar(100) NOT NULL,
	fechaHora_venta      DATETIME NOT NULL,
	estado               BIT default true
);

CREATE TABLE Producto
(
	id_producto          INT PRIMARY KEY AUTO_INCREMENT,
	nom_producto         VARCHAR(80) NOT NULL,
	mod_producto         VARCHAR(45) NOT NULL,
	precio_producto      DECIMAL(10,2) NULL,
	detalle_producto     VARCHAR(300) NULL,
	id_categoria         INTEGER NULL,
	stock_producto       INTEGER NOT NULL,
	img_producto1         varchar(100) NULL,
  	img_producto2        varchar(100) NULL,
  	img_producto3         varchar(100) NULL,
	estado               BIT NOT NULL,
	año_producto         DATE NULL
);




ALTER TABLE Cliente
ADD FOREIGN KEY R_13 (id_distrito) REFERENCES Distrito (id_distrito);

ALTER TABLE Comprobante
ADD FOREIGN KEY R_21 (id_pedido) REFERENCES Pedido (id_pedido);

ALTER TABLE DetallePedido
ADD FOREIGN KEY R_17 (id_pedido) REFERENCES Pedido (id_pedido);

ALTER TABLE DetallePedido
ADD FOREIGN KEY R_18 (id_producto) REFERENCES Producto (id_producto);

ALTER TABLE Producto
ADD FOREIGN KEY R_3 (id_categoria) REFERENCES Categoria (id_categoria);


-- Insertar en Categoria
Insert into Categoria Values (null,'Televisores',1);
Insert into Categoria Values (null,'Teatro en Casa',1);
Insert into Categoria Values (null,'Reproductores Blu-ray Disc y DVD',1);
Insert into Categoria Values (null,'Proyectores',1);
Insert into Categoria Values (null,'Camaras con Lentes Intercambiables',1);
Insert into Categoria Values (null,'Cyber-Shot',1);
Insert into Categoria Values (null,'Lentes',1);
Insert into Categoria Values (null,'Accesorios de Camaras',1);
Insert into Categoria Values (null,'Action Cam',1);
Insert into Categoria Values (null,'Handy Cam',1);
Insert into Categoria Values (null,'Accesorios de Video Camaras',1);
Insert into Categoria Values (null,'Equipos de Sonido',1);
Insert into Categoria Values (null,'Parlantes Inalambricos',1);
Insert into Categoria Values (null,'Audifonos',1);
Insert into Categoria Values (null,'Reproductores de Musica Digital Walkman',1);
Insert into Categoria Values (null,'Radios Portatiles',1);
Insert into Categoria Values (null,'Grabadoras de Voz Digital',1);
Insert into Categoria Values (null,'Consolas',1);
Insert into Categoria Values (null,'Juegos',1);
Insert into Categoria Values (null,'Accesorios para PlayStation',1);
Insert into Categoria Values (null,'Reproductores para Automovil',1);
Insert into Categoria Values (null,'Parlantes y Amplificadores',1);
Insert into Categoria Values (null,'Cargadores Portatiles',1);
Insert into Categoria Values (null,'Tarjetas SD, Unidades Flash y HDD',1);
Select * from categoria;
-- Insertar Tipo de Documento


-- Insertar Distrito

Insert into Distrito values(null,'Cercado de Lima',1);
Insert into Distrito values(null,'Ancón',1);
Insert into Distrito values(null,'Ate',1);
Insert into Distrito values(null,'Barranco',1);
Insert into Distrito values(null,'Breña',1);
Insert into Distrito values(null,'Carabayllo',1);
Insert into Distrito values(null,'Chaclacayo',1);
Insert into Distrito values(null,'Chorrillos',1);
Insert into Distrito values(null,'Cieneguilla',1);
Insert into Distrito values(null,'Comas',1);
Insert into Distrito values(null,'El Agustino',1);
Insert into Distrito values(null,'Independencia',1);
Insert into Distrito values(null,'Jesús María',1);
Insert into Distrito values(null,'La Molina',1);
Insert into Distrito values(null,'La Victoria',1);
Insert into Distrito values(null,'Lince',1);
Insert into Distrito values(null,'Los Olivos',1);
Insert into Distrito values(null,'Lurigancho',1);
Insert into Distrito values(null,'Lurin',1);
Insert into Distrito values(null,'Magdalena del Mar',1);
Insert into Distrito values(null,'Pueblo Libre',1);
Insert into Distrito values(null,'Miraflores',1);
Insert into Distrito values(null,'Pachacamac',1);
Insert into Distrito values(null,'Pucusana',1);
Insert into Distrito values(null,'Puente Piedra',1);
Insert into Distrito values(null,'Punta Hermosa',1);
Insert into Distrito values(null,'Punta Negra',1);
Insert into Distrito values(null,'Rímac',1);
Insert into Distrito values(null,'San Bartolo',1);
Insert into Distrito values(null,'San Borja',1);
Insert into Distrito values(null,'San Isidro',1);
Insert into Distrito values(null,'San Juan de Lurigancho',1);
Insert into Distrito values(null,'San Juan de Miraflores',1);
Insert into Distrito values(null,'San Luis',1);
Insert into Distrito values(null,'San Martín de Porres',1);
Insert into Distrito values(null,'San Miguel',1);
Insert into Distrito values(null,'Santa Anita',1);
Insert into Distrito values(null,'Santa María del Mar',1);
Insert into Distrito values(null,'Santa Rosa',1);
Insert into Distrito values(null,'Santiago de Surco',1);
Insert into Distrito values(null,'Surquillo',1);
Insert into Distrito values(null,'Villa El Salvador',1);
Insert into Distrito values(null,'Villa María del Triunfo',1);				
select * from distrito;

-- Insertar Productos

Insert Into Producto values(null,'OLED 4K UHD 55P','XBR-55A8G',6499.00,'Alto rango dinámico (HDR) | Smart TV (Android TV) | Pantalla de 55P | 5 HDMI | 3 USB',1,100,'Images/Televisores/XBR-55A8G.webp','Images/Televisores/XBR-55A8G-2.webp','Images/Televisores/XBR-55A8G-2.webp',1,'2019-01-01');
Insert Into Producto values(null,'Full LED 4K UHD 55P','XBR-55X955G',3799.00,'Alto rango dinámico (HDR) | Android TV™ | Pantalla de 55P | 3 HDMI | 2 USB | Resolución 3840x2160',1,100,'Images/Televisores/XBR-55X955G.webp','Images/Televisores/XBR-55X955G-2.webp','Images/Televisores/XBR-55X955G-3.webp',1,'2019-01-01');
Insert Into Producto values(null,'LED 4K Ultra HD 65P','XBR-65X855G',4999.00,'Alto rango dinámico (HDR) | Android TV™ | Pantalla de 65P | 3 HDMI | 2 USB | CHROMECAST Incorporado',1,100,'Images/Televisores/XBR-65X855G.webp','Images/Televisores/XBR-65X855G-2.webp','Images/Televisores/XBR-65X855G-3.webp',1,'2019-01-01');

Insert Into Producto values(null,'Home Teather Blu-ray','BDV-E2100',799.00,'Potencia 1000 W | Audio 5.1 | Smart TV | Conectividad: Radio FM/BT/NFC/Wifi/Ethernet',2,100,'Images/Teatro en Casa/BDV-E2100.webp','Images/Teatro en Casa/BDV-E2100-2.webp','Images/Teatro en Casa/BDV-E2100-3.webp',1,'2017-01-01');
Insert Into Producto values(null,'Teatro en casa Blu-ray & BT','BDV-E4100',1399.00,'Potencia 1000 W | Audio 5.1 | Smart TV | Conectividad: Radio FM/BT/NFC/Wifi/Ethernet/Bluetooth',2,100,'Images/Teatro en Casa/BDV-E4100-1.webp','Images/Teatro en Casa/BDV-E4100-2.webp','Images/Teatro en Casa/BDV-E4100-3.webp',1,'2017-01-01');
Insert Into Producto values(null,'Parlante posterior inalámbrico','SA-Z9R',499.00,'Potencia 50 W/50 W | Audio 5.1 | Smart TV | Conectividad: Inalambrico/Bluetooth',2,100,'Images/Teatro en Casa/SA-Z9R-1.webp','Images/Teatro en Casa/SA-Z9R-2.webp','Images/Teatro en Casa/SA-Z9R-3.webp',1,'2017-01-01');

Insert Into Producto values(null,'Reproductor de DVD con conectividad USB','DVP-SR370',129.00,'Potencia 110-240 V | Reanudación multidisco | Reproductor Multimedia | Conectividad: USB',3,100,'Images/Reproductores Blu-ray Disc y DVD/DVP-SR370-1.webp','Images/Teatro en Casa/DVP-SR370-2.webp','Images/Teatro en Casa/DVP-SR370-3.webp',1,'2017-01-01');
Insert Into Producto values(null,'Reproductor de Blu-ray™ 4K Ultra HD','UBP-X700',99.00,'Potencia 15 W  | High-Resolution Audio | Reproductor Multimedia | Conectividad: USB',3,100,'Images/Reproductores Blu-ray Disc y DVD/UBP-X700-1.webp','Images/Teatro en Casa/UBP-X700-2.webp','Images/Teatro en Casa/UBP-X700-3.webp',1,'2017-01-01');

Insert Into Producto values(null,'Cámara APS-C a6600 con montura E de alta calidad','ILCE-6600',4999.00,'Lentes con montura E de Sony  | Aprox. 24,2 megapíxeles | Sensor Exmor® CMOS tipo APS-C (23,5 x 15,6 mm) | Visor electrónico (color) de 1,0 cm (tipo 0,39) ',4,100,
							'Images/Camaras con Lentes Intercambiables/ILCE-6600-1.webp','Images/Camaras con Lentes Intercambiables/ILCE-6600-2.webp','Images/Camaras con Lentes Intercambiables/ILCE-6600-3.webp',1,'2017-01-01');
Insert Into Producto values(null,'Cámara APS-C a6100 con enfoque automático rápido','ILCE-6100Y',3699.00,'Lentes con montura E de Sony  | Aprox. 25,0 megapíxeles | Sensor Exmor® CMOS tipo APS-C (23,5 x 15,6 mm) | Visor electrónico (color) de 1,0 cm (tipo 0,39) ',4,100,
							'Images/Camaras con Lentes Intercambiables/ILCE-6100Y-1.webp','Images/Camaras con Lentes Intercambiables/ILCE-6100Y-2.webp','Images/Camaras con Lentes Intercambiables/ILCE-6100Y-3.webp',1,'2017-01-01');
Insert Into Producto values(null,'A7 III con sensor de imagen full-frame de 35 mm','ILCE-7M3K',8099.00,'Cuerpo + lente de zoom de 28-70 mm  | Aprox. 25,3 megapíxeles | Sensor full-frame CMOS Exmor R de 35 mm (35,6×23,8 mm) | Revestimiento de protección de carga en el filtro óptico y mecanismo de cambio de sensor de imagen ',4,100,
							'Images/Camaras con Lentes Intercambiables/ILCE-7M3K-1.webp','Images/Camaras con Lentes Intercambiables/ILCE-7M3K-2.webp','Images/Camaras con Lentes Intercambiables/ILCE-7M3K-3.webp',1,'2018-01-01');

Insert Into Producto values(null,'Cámara compacta WX800 con zoom de largo alcance','DSC-WX800',8099.00,' Grabación 4K  | Sensor CMOS Exmor R® tipo 1/2,3 (7,82 mm) | Lente ZEISS Vario-Sonnar® T*, 11 elementos en 10 grupos (5 elementos asféricos) | Aprox. 18,2 megapíxeles ',5,100,
							'Images/Cyber-Shot/DSC-WX800-1.webp','Images/Cyber-Shot/DSC-WX800-2.webp','Images/Cyber-Shot/DSC-WX800-3.webp',1,'2018-01-01');
Insert Into Producto values(null,'Cámara compacta Zoom 5x','DSC-W800',349.00,' Sensor Super HAD CCD de 20,1 MP, Zoom óptico 5x  | ÁNGULO DE VISIÓN (EQUIVALENTE EN FORMATO DE 35 MM) | Número de píxeles (efectivos)20,1 MP | Tipo de lenteLente Sony ',5,100,
							'Images/Cyber-Shot/DSC-WX800-1.webp','Images/Cyber-Shot/DSC-WX800-2.webp','Images/CCyber-Shot/DSC-WX800-3.webp',1,'2018-01-01');
                            
Insert Into Producto values(null,'FE 400 mm F2.8 GM OSS','SEL400F28GM',44299.00,' Montura tipo E con formato Full Frame  | Lentes superteleobjetivo G Master de gran apertura | Velocidad extraordinaria, resolución G Master excelente y bokeh | Optical SteadyShotCompatibilidad ',6,100,
							'Images/Lentes/SEL400F28GM-1.webp','Images/Lentes/SEL400F28GM-2.webp','Images/Lentes/SEL400F28GM-3.webp',1,'2018-01-01');
Insert Into Producto values(null,'FE 100mm F2.8 STF GM OSS','SEL100F28GM',4319.00,' Montura tipo E con formato Full Frame  | Montura E de Sony | Láminas de apertura 11 | Dimensiones (An. x Al. x Pr.)85,2 x 118,1 mm (3-3/8 x 4-3/4 pulg.) ',6,100,
							'Images/Lentes/SEL400F28GM-1.webp','Images/Lentes/SEL400F28GM-2.webp','Images/Lentes/SEL400F28GM-3.webp',1,'2018-01-01');						
                            
Insert Into Producto values(null,'Kit adaptador y micrófono','XLR- K2M',1759.00,'Mejora la grabación de sonido con el liviano kit adaptador y micrófono XLR-K2M. El kit adaptador permite una respuesta de frecuencia direccional perfecta y es ideal para bodas, entrevistas e incluso la observación de aves. ',7,100,
							'Images/Accesorios para Camara/XLR-1.webp','Images/Accesorios para Camara/XLR-2.webp','Images/Accesorios para Camara/XLR-3.webp',1,'2018-01-01');
Insert Into Producto values(null,'Empuñadura de grabación','SGR1',259.00,' Consigue imágenes fantásticas vayas donde vayas con esta empuñadura de grabación compacta y ligera para cámaras Cyber-shot ',7,100,
							'Images/Accesorios para Camara/SGR1-1.webp','Images/Accesorios para Camara/SGR1-2.webp','Images/Accesorios para Camara/SGR1-3.webp',1,'2018-01-01');
                            
Insert Into Producto values(null,'Action Cam con Wi-Fi','HDR-AS300',1699.00,' Tipo de lente ZEISS® Tessar  | Sensor CMOS "Exmor R®" retroiluminado de tipo 1/2,5 (7,20 mm) | 8,57 megapíxeles aprox. | Con carcasa submarina incluida (MPK-UWH1) ',8,100,
							'Images/Action Cam/HDRAS300R-1.webp','Images/Action Cam/HDRAS300R-2.webp','Images/Action Cam/HDRAS300R-3.webp',1,'2018-01-01');	
Insert Into Producto values(null,'Action Cam HDR-AS50','AS50',399.00,' Tipo de lente ZEISS® Tessar  | Sensor "Exmor R" CMOS retroiluminado de tipo 1/2,3 (7,77 mm) | Aprox. 11,1 megapíxeles | Cuerpo + estuche resistente al agua ',8,100,
							'Images/Action Cam/AS50-1.webp','Images/Action Cam/AS50-2.webp','Images/Action Cam/AS50-3.webp',1,'2018-01-01');  

Insert Into Producto values(null,'Videocámara 4K HDR','FDR-AX700',6990.00,' Zeiss® Vario-Sonnar® T*  | Sensor CMOS Exmor RS® tipo 1,0 apilado (13,2 x 8,8 mm) | Pantalla LCD Xtra Fine (1.555.000 puntos) panorámica (16:9) de 8,8 cm (tipo 3,5) | Aprox. 14,2 megapíxeles (16:9)/Aprox.12,0 megapíxeles (3:2) ',9,100,
							'Images/Handy Cam/AX700-1.webp','Images/Handy Cam/AX700-2.webp','Images/Handy Cam/AX700-3.webp',1,'2018-01-01');
Insert Into Producto values(null,'Handycam','CX405',899.00,' ZEISS® Vario-Tessar®  | SSensor CMOS Exmor R™ retroiluminado de tipo 1/5,8 (3,1 mm) | Salida de video compuesta, Terminal HDMI® | Pantalla Clear Photo LCD (460.000 puntos) gran angular (16:9) de 6,7 cm (tipo 2,7) ',9,100,
							'Images/Handy Cam/CX405-1.webp','Images/Handy Cam/CX405-2.webp','Images/Handy Cam/CX405-3.webp',1,'2018-01-01');


select * from producto;


-- Insertar Clientes
select * from cliente;

Insert into Cliente Values(null,'Yena','Ramos Perez','87877777','Yena@gmail.com','123456','321654849',1);
Insert into Cliente Values(null,'Bella','Ramirez Aguilar','12384658','Bella@gmail.com','123456','321518441',3);
Insert into Cliente Values(null,'Enedina','Malpartida Malpartida','46221521','Enedina@gmail.com','123456','977399417',4);
Insert into Cliente Values(null,'Henry','Isaac Condeozo','88652210','Isaac@gmail.com','123456','154875125',1);

select * from cliente;

-- Insertar Pedido
Insert Into Pedido values(null,'Yena@gmail.com',CURDATE(),1);
Insert Into Pedido values(null,'Yena@gmail.com',CURDATE(),1);
Insert Into Pedido values(null,'Yena@gmail.com',CURDATE(),1);
select * from pedido;

-- Insertar DetallePedido

Insert Into DetallePedido values(null,1,1,2);
Insert Into DetallePedido values(null,2,4,1);
Insert Into DetallePedido values(null,3,1,1);
select * from Detallepedido;

-- Insertar Comprobante
Insert Into comprobante values(null,1,1,'2019-05-05 20:21:23');
Insert Into comprobante values(null,1,2,'2019-05-05 20:21:23');
select * from comprobante;


drop procedure if exists sp_login;
DELIMITER $$
create PROCEDURE SP_Login(
in_email varchar(60),
in_clave varchar(32)
)
BEGIN
	DECLARE res INT;
    select count(*) into res from cliente where email_cliente = in_email;
	IF res = 0 THEN
		select -1;
	ELSE
		select count(*) into res from cliente where clave = in_clave;
		IF res = 0 THEN
			select -2;
		ELSE
			select * from cliente 
			where email_cliente = in_email and clave = in_clave;
		END IF;
	END IF;
End$$
DELIMITER ;




-- PROCEDURES ARREGLADO
DROP PROCEDURE IF EXISTS sp_MostrarCliente;
DELIMITER $$
CREATE PROCEDURE sp_MostrarCliente()
BEGIN 
Select c.id_cliente,c.nom_cliente,
c.ape_cliente,c.numDoc_cliente,
c.email_cliente,c.clave ,c.telf_cliente
,d.id_distrito,d.nom_distrito 
from cliente c 
INNER JOIN distrito d on c.id_distrito = d.id_distrito; end
$$ DELIMITER ;

Drop Procedure if Exists sp_AgregarCliente;
DELIMITER $$
Create Procedure sp_AgregarCliente
 ( in _nom_cliente varchar(30),
  in _ape_cliente varchar(70), 
  in _numDoc_cliente varchar(8),
   in _email_cliente varchar(100),
    in _clave varchar(20), 
	in _telf_cliente char(9) ) 
BEGIN 
Insert into Cliente(nom_cliente,ape_cliente,numdoc_cliente,email_cliente,clave,telf_cliente) 
Values(_nom_cliente,_ape_cliente,_numDoc_cliente,_email_cliente,_clave,_telf_cliente); 
END $$
DELIMITER ;

DROP PROCEDURE IF EXISTS sp_ActualizarCliente;
DELIMITER $$
CREATE PROCEDURE sp_ActualizarCliente 
( in _id_cliente int, 
in _nom_cliente varchar(30),
 in _ape_cliente varchar(70), 
 in _numDoc_cliente varchar(12),
  in _email_cliente varchar(60), 
  in _clave varchar(20), 
  in _telf_cliente char(9) )
   BEGIN 
   UPDATE cliente 
   SET nom_cliente = _nom_cliente,
    ape_cliente = _ape_cliente, 
	numDoc_cliente = _numDoc_cliente, 
	email_cliente = _email_cliente,
	 clave = _clave,
	  telf_cliente = _telf_cliente 
	  wHERE id_cliente = _id_cliente; 
      END $$
      DELIMITER ;

DROP PROCEDURE IF EXISTS sp_EliminarCliente;
DELIMITER $$
CREATE PROCEDURE sp_EliminarCliente 
( in _id_cliente int ) 
BEGIN 
DELETE from cliente 
WHERE id_cliente=_id_cliente; 
END $$
DELIMITER ;