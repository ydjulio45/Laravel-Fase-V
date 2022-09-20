create database amigoleal;
use amigoleal;

-- -----------------------------------------------------
-- Table `tipoDocumentos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tipoDocumentos` (
  `idDoc` INT NOT NULL auto_increment,
  `tipoDoc` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idDoc`));
  
  insert into tipodocumentos (
idDoc, tipoDoc) values
(1, 'cedula de ciudadania'),
(2, 'tarjeta de identidad'),
(3, 'tarjeta extranjera');


-- -----------------------------------------------------
-- Table `roles`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `roles` (
  `idRol` INT NOT NULL auto_increment,
  `tipoRol` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idRol`));

INSERT INTO roles (
idRol, tipoRol) values
(1, "Administrador"),
(2, "Usuario");

-- -----------------------------------------------------
-- Table `usuarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `usuarios` (
  `idUsuario` INT NOT NULL auto_increment,
  `idDoc` INT NULL,
  `idRol` INT NULL,
  `pNombre` VARCHAR(45) NOT NULL,
  `sNombre` VARCHAR(35) NULL DEFAULT NULL,
  `pApellido` VARCHAR(35) NOT NULL,
  `sApellido` VARCHAR(35) NULL DEFAULT NULL,
  `correo` VARCHAR(50) NOT NULL,
  `contraseña` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idUsuario`),
  INDEX `fk_usuario_tidoc_idx` (`idDoc` ASC) ,
  INDEX `fk_usuario_rol1_idx` (`idRol` ASC) ,
  CONSTRAINT `fk_usuario_tidoc1`
    FOREIGN KEY (`idDoc`)
    REFERENCES `tipoDocumentos` (`idDoc`)  ON DELETE CASCADE,
  CONSTRAINT `fk_usuario_rol1`
    FOREIGN KEY (`idRol`)
    REFERENCES `roles` (`idRol`) ON DELETE CASCADE);

insert into usuarios (
idUsuario, idDoc, idRol, pNombre, sNombre, pApellido, sApellido, correo, contraseña) values
(11205007, 1, 1, 'Bari', 'Ronni', 'Gherarducci', 'Hubbucks', 'rhubbucks4@example.com', 'pABfjDiB'),
(11952311, 1, 2,'Spike', 'Murdock', 'Breinl', 'Giovannetti', 'mgiovannetti8@wunderground.com', 'Male,SbjP20Jj'),
(14205390, 1,  2, 'Roldan', 'Alric', 'Waplinton', 'Offin', 'aoffin9@salon.com', 'serZB1KWC'),
(16025070, 2,  1,'Danna', 'Nikhole', 'escobar', 'Garcia', 'noigwe@sena.com', 'KSjhiHJA8zU6'),
(17025070, 2,  1,'Luz', 'Adriana', 'Garcia', 'lopez', 'latrixilopez@dell.com', 'kjaiHJA8zU6'),
(22585865, 2,  1,'Leanor', 'Sylvia', 'de Clercq', 'Mineghelli', 'smineghellip@businesswire.com', 'fgUPFeX'),
(27653932, 2,  1,'Gianina', 'Nerty', 'McGuff', 'Iannitti', 'niannitti9@youtube.com', '3bKWKq'),
(30429600, 1,  2,'Brandais', 'Alex', 'Whall', 'Cromblehome', 'acromblehomeg@guardian.co.uk', 'irXu42m6yFf'),
(30702368, 1,  1,'Renard', 'Nolly', 'Frackiewicz', 'Whitworth', 'nwhitworth8@myspace.com', 'Nb2tzM'),
(31082538, 1,  1,'Huntington', 'Gibbie', 'Raison', 'Basketfield', 'gbasketfield4@surveymonkey.com', 'CQYbwngPK'),
(31439048, 3,  2,'Waldo', 'Kennett', 'Thurske', 'Fowells', 'kfowellsa@joomla.org', 'WBVY5laoOj5'),
(32697302, 1,  1,'Netty', 'Rosalinde', 'Bagwell', 'Southon', 'rsouthons@sun.com', '9DKh7K0MYf'),
(34092551, 2,  2,'Archy', 'Hadleigh', 'Minnock', 'Powter', 'hpowteri@ft.com', 'QFXcIV'),
(35286294, 1,  2,'Marcella', 'Reggie', 'Rogier', 'Mateuszczyk', 'rmateuszczykr@fda.gov', '83WWY1YjGN'),
(38740390, 3,  2,'Elsa', 'Tomi', 'Sugar', 'Key', 'tkeyf@vistaprint.com', 'fOk7AbtXl'),
(42881945, 1,  1,'Ricki', 'Silvio', 'Bennion', 'Mulvey', 'smulveyq@plala.or.jp', 'KIil8rh'),
(66208525, 1,  2,'Bennett', 'Manfred', 'Kurton', 'Dibble', 'mdibble0@reference.com', 'tszdyQnJBm'),
(88973676, 2,  2,'Kristien', 'Korry', 'Wilmore', 'Lanfear', 'klanfear2@digg.com', 'LsSNbWiHf2h'),
(98025070, 3,  2,'Juan', 'Carlos', 'Montero', 'Elmes', 'iodwagyudwamesd@dell.com', 'jnMr7A8zU6'),
(98025074, 3,  2,'Bernie', 'Margarette', 'Iredale', 'Elmes', 'melmesd@dell.com', 'jnMr7NyA8zU6');

-- -----------------------------------------------------
-- Table `carrocompras`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `carrocompras` (
  `idCarro` INT NOT NULL auto_increment,
  `idUsuario` INT NULL,
  `precio` DOUBLE NOT NULL,
  `cantidad` INT NOT NULL,
  `cantidadPagar` DOUBLE NOT NULL,
  `estado` VARCHAR(25) NOT NULL,
  PRIMARY KEY (`idCarro`),
  INDEX `fk_carrocompra_usuario1_idx` (`idUsuario` ASC) ,
  CONSTRAINT `fk_carrocompra_usuario1`
    FOREIGN KEY (`idUsuario`)
    REFERENCES `usuarios` (`idUsuario`) ON DELETE CASCADE);
    
insert into carrocompras (
idCarro, idUsuario, precio, cantidad, estado, cantidadpagar) values
(001019, 11205007, 30000, 2, "activo", 60000),
(001029, 11952311, 10000, 3, "activo", 30000),
(001039, 14205390, 5000, 5 , "inactivo", 25000),
(001049, 16025070, 75000, 1 , "activo", 75000),
(001059, 17025070, 6000, 2,"activo", 12000),
(001069, 22585865, 10000, 2 , "activo", 20000),
(001079, 27653932, 20000, 5 , "inactivo", 100000),
(001089, 30429600, 2000, 4 , "activo", 8000),
(001099, 30702368, 5000, 2 , "inactivo", 10000),
(01109, 31082538, 75000, 2 , "inactivo", 150000),
(01119, 31439048, 2000, 2, "activo", 400),
(01129, 32697302, 10000, 2, "activo", 20000),
(01139, 34092551, 20000, 1 , "activo", 20000),
(01149, 35286294, 5000, 4, "activo", 20000),
(01159, 38740390, 6000, 3, "activo", 18000),
(01169, 42881945, 3000, 2, "activo", 6000),
(01179, 66208525, 10000, 5, "activo", 50000),
(01189, 88973676, 3000, 4, "inactivo", 12000),
(01199, 98025070, 3000, 3, "activo", 9000),
(01209, 98025074, 20000, 2, "inactivo", 40000);

-- -----------------------------------------------------
-- Table `facturas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `facturas` (
  `idFactura` INT NOT NULL auto_increment,
  `idUsuario` INT NULL,
  `nombre` VARCHAR(45) NOT NULL,
  `fecha` DATE NOT NULL,
  `preciofact` INT NOT NULL,
  PRIMARY KEY (`idFactura`),
  INDEX `fk_factura_usuario1_idx` (`idUsuario` ASC) ,
  CONSTRAINT `fk_factura_usuario1`
    FOREIGN KEY (`idUsuario`)
    REFERENCES `usuarios` (`idUsuario`) ON DELETE CASCADE);


insert into facturas (
idFactura, idUsuario, nombre, fecha, preciofact) values
(001, 11205007,"Bari Gherarducci", "2008-04-15", 20000),
(002, 11952311,"Spike Breinl", "2008-04-20", 150000),
(003, 14205390, "Roldan Waplinton", "2008-04-27", 45000),
(004, 16025070,"Danna escobar", "2008-07-05", 120000),
(005, 17025070,"Luz Garcia", "2008-09-12", 35000),
(006, 22585865,"Leanor de Clercq", "2012-03-20", 200000),
(007, 27653932, "Gianina McGuff","2012-03-24", 15000),
(008, 30429600, "Brandais Whall","2021-02-13", 250000),
(009, 30702368, "Renard Frackiewicz","2021-04-15", 400000),
(010, 31082538, "Huntington Raison","2021-04-26", 24000),
(011, 31439048, "Waldo Thurske","2021-08-14", 245000),
(012, 32697302, "Netty Bagwell","2015-06-19", 128000),
(013, 34092551, "Archy Minnock","2014-02-04", 24000),
(014, 35286294, "Marcella Rogier","2022-03-12", 75000),
(015, 38740390, "Elsa Sugar","2017-10-12", 42000),
(016, 42881945, "Ricki Bennion","2022-12-07", 28000),
(017, 66208525, "Bennett Kurton","2010-01-10", 108000),
(018, 88973676, "Kristien Wilmore","2019-02-02", 33000),
(019, 98025070, "Juan Montero","2013-08-12", 85000),
(020, 98025074, "Bernie Margarette","2021-05-16", 120000),
(21, 11205007, 'Bari Gherarducci', '2021-06-12', 70000),
(22, 11205007, 'Bari Gherarducci', '2021-07-24', 150000),
(23, 14205390, 'Roldan Waplinton', '2022-08-15', 40000),
(24, 11205007, 'Bari Gherarducci', '2022-07-19', 100000),
(25, 11952311, 'Spike Breinl', '2022-08-12', 250000),
(26, 11952311, 'Spike Breinl', '2022-10-12', 20000),
(27, 16025070,"Danna escobar", "2008-02-15", 50000);

-- -----------------------------------------------------
-- Table `categorias`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `categorias` (
  `idCategoria` INT NOT NULL auto_increment,
  `nombreCategoria` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idCategoria`));


INSERT INTO categorias(
idCategoria, NombreCategoria) values
(10, "camas para animales"),
(20, "casas para animales"),
(30, "juguetes para animales"),
(40, "remedios para animales"),
(50, "adornos para animales");

-- -----------------------------------------------------
-- Table `descuentos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `descuentos` (
  `idDescuento` INT NOT NULL auto_increment,
  `valorDescuento` VARCHAR(45) NOT NULL,
  `fechaDescuento` DATE NOT NULL,
  PRIMARY KEY (`idDescuento`));


insert into descuentos(
idDescuento, valorDescuento, fechaDescuento)values
(100, 20000, "2018-07-12"),
(200, 50000, "2019-05-10");

-- -----------------------------------------------------
-- Table `productos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `productos` (
  `idProducto` INT NOT NULL auto_increment,
  `idCategoria` INT NULL,
  `idDescuento` INT NULL,
  `nombreProducto` VARCHAR(45) NOT NULL,
  `precioproducto` VARCHAR(45) NOT NULL,
  `descripcion` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idProducto`),
  INDEX `fk_productos_categoria1_idx` (`idCategoria` ASC) ,
  INDEX `fk_productos_descuentos1_idx` (`idDescuento` ASC) ,
  CONSTRAINT `fk_productos_categoria1`
    FOREIGN KEY (`idCategoria`)
    REFERENCES `categorias` (`idCategoria`) ON DELETE CASCADE,
  CONSTRAINT `fk_productos_descuentos1`
    FOREIGN KEY (`idDescuento`)
    REFERENCES `descuentos` (`idDescuento`) ON DELETE CASCADE);

insert into productos (
idProducto, nombreProducto, precioProducto, descripcion, idCategoria, idDescuento) values
(10231, "cama perro",  30.000, "cama comoda para su perro", 10, 100),
(10241, "cama gato",  20.000,"cama comoda para su gato", 10, 100),
(10251, "juguete gato",  6.000, "juguete de raton para su gato", 30, 100),
(10261, "juguete perro",  10.000, "juguete masticable en forma de hueso", 30, 200),
(10271, "cofre para pez",  3.000, "cofre decorativo de pecera", 50, 100),
(10281, "remedio perro",  5.000, "remedio para su perro", 40,100 ),
(10291, "casa grande perro",  75.000, "una casa muy amplia para su perro", 20, 200),
(10301, "Hueso para perro",  2.000, "un hueso para su perro", 30, 100);


-- -----------------------------------------------------
-- Table `permisos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `permisos` (
  `idPermiso` INT NOT NULL auto_increment,
  `descripcion` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idPermiso`));

insert into permisos(
idPermiso, descripcion) values
(11, "gestionar usuarios"),
(12, "ver usuarios"),
(13, "entrar al sistema");


-- -----------------------------------------------------
-- Table `inventarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `inventarios` (
  `idInventario` INT NOT NULL auto_increment,
  `idProducto` INT NULL,
  `Producto` VARCHAR(45) NOT NULL,
  `cantidad` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idInventario`),
  INDEX `fk_inventario_productos1_idx` (`idProducto` ASC) ,
  CONSTRAINT `fk_inventario_productos1`
    FOREIGN KEY (`idProducto`)
    REFERENCES `productos` (`idProducto`) ON DELETE CASCADE);


insert into inventarios(
idInventario, idProducto, producto, cantidad)values
(50, 10231, "cama perro", 100 ),
(51, 10241, "cama gato", 30),
(52, 10251, "juguete gato", 60),
(53, 10291, "casa grande perro", 20);

-- -----------------------------------------------------
-- Table `domicilios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `domicilios` (
  `idDomicilio` INT NOT NULL auto_increment,
  `idCarro` INT NULL,
  `descripcion` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idDomicilio`),
  INDEX `fk_Domicilios_carrocompra1_idx` (`idCarro` ASC) ,
  CONSTRAINT `fk_Domicilios_carrocompra1`
    FOREIGN KEY (`idCarro`)
    REFERENCES `carrocompras` (`idCarro`)on delete cascade);


insert into domicilios(
idDomicilio, idCarro, Descripcion)values
(500, 1019, "llevar a carrera 80"),
(501, 1029, "llevar a carrera 10"),
(502, 1039, "llevar a carrera 70"),
(503, 1049, "llevar a carrera 10");


-- -----------------------------------------------------
-- Table `proveedores`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `proveedores` (
  `idProveedor` INT NOT NULL auto_increment,
  `nombre` VARCHAR(45) NOT NULL,
  `telefono` INT NOT NULL,
  `correo` VARCHAR(50) NOT NULL,
  `direccion` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idProveedor`));


insert into proveedores(
idProveedor, nombre, telefono, correo, direccion) values
(123, "juan Garcia", 3009876678,"juanGa@gmail.com","calle 100"),
(132, "Maria Ramos", 3220988789,"MariRaMos201@gmail.com","calle20"),
(133, "jhon Riaño", 300193874,"jhonRia111@gmail.com","calle 20"),
(139, "ana torres", 3125477166,"antorres432@gmail.com","calle 40");



-- -----------------------------------------------------
-- Table `detallesDomicilio`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `detallesDomicilio` (
  `id` INT NOT NULL auto_increment,
  `idDomicilio` INT NULL,
  `estado` VARCHAR(45) NOT NULL,
  `direccion` VARCHAR(45) NOT NULL,
  `telefono` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_DetallesDomicilio_Domicilios1_idx` (`idDomicilio` ASC) ,
  CONSTRAINT `fk_DetallesDomicilio_Domicilios1`
    FOREIGN KEY (`idDomicilio`)
    REFERENCES `domicilios` (`idDomicilio`)ON DELETE CASCADE);
    
    
    insert into detallesdomicilio(
id, idDomicilio, Estado, Direccion, Telefono) values
(1, 500, "activo", "calle 10", 3119889645),
(2, 501, "activo", "calle 80", 3098889645),
(3, 502, "suspendido", "calle 10", 3000543255);


-- -----------------------------------------------------
-- Table `carroPro`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `carroPro` (
  `idCarro` INT NOT NULL,
  `idProducto` INT NOT NULL,
  PRIMARY KEY (`idCarro`, `idProducto`),
  INDEX `fk_carrocompras_has_productos_productos1_idx` (`idProducto` ASC) ,
  INDEX `fk_carrocompras_has_productos_carrocompras1_idx` (`idCarro` ASC) ,
  CONSTRAINT `fk_carrocompras_has_productos_carrocompras1`
    FOREIGN KEY (`idCarro`)
    REFERENCES `carrocompras` (`idCarro`) ON DELETE CASCADE,
  CONSTRAINT `fk_carrocompras_has_productos_productos1`
    FOREIGN KEY (`idProducto`)
    REFERENCES `productos` (`idProducto`) ON DELETE CASCADE);



insert into carropro (
idCarro, idProducto) values
(1019,  10231),
(1029,  10261),
(1039,  10281),
(1049,  10291),
(1059,  10251),
(1069,  10261),
(1079,  10241),
(1089,  10301),
(1099,  10261),
(1109,  10291),
(1119,  10301),
(1129,  10261),
(1139,  10241),
(1149,  10281),
(1159,  10251),
(1169,  10271),
(1179,  10261),
(1189,  10271),
(1199,  10271),
(1209,  10241);

-- -----------------------------------------------------
-- Table `rolPermiso`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `rolPermiso` (
  `idRol` INT NOT NULL,
  `idPermiso` INT NOT NULL,
  PRIMARY KEY (`idRol`, `idPermiso`),
  INDEX `fk_Roles_has_permisos_permisos1_idx` (`idPermiso` ASC) ,
  INDEX `fk_Roles_has_permisos_Roles1_idx` (`idRol` ASC) ,
  CONSTRAINT `fk_Roles_has_permisos_Roles1`
    FOREIGN KEY (`idRol`)
    REFERENCES `roles` (`idRol`) ON DELETE CASCADE,
  CONSTRAINT `fk_Roles_has_permisos_permisos1`
    FOREIGN KEY (`idPermiso`)
    REFERENCES `permisos` (`idPermiso`) ON DELETE CASCADE);


-- -----------------------------------------------------
-- Table `productosProv`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `productosProv` (
  `idProducto` INT NOT NULL,
  `idProveedor` INT NOT NULL,
  PRIMARY KEY (`idProducto`, `idProveedor`),
  INDEX `fk_productos_has_proveedores_proveedores1_idx` (`idProveedor` ASC) ,
  INDEX `fk_productos_has_proveedores_productos1_idx` (`idProducto` ASC) ,
  CONSTRAINT `fk_productos_has_proveedores_productos1`
    FOREIGN KEY (`idProducto`)
    REFERENCES `productos` (`idProducto`) ON DELETE CASCADE,
  CONSTRAINT `fk_productos_has_proveedores_proveedores1`
    FOREIGN KEY (`idProveedor`)
    REFERENCES `proveedores` (`idProveedor`) ON DELETE CASCADE);



