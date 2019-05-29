USE `logeo`;

-- Volcando estructura para tabla login.cliente
CREATE TABLE IF NOT EXISTS `cliente` (
  `cedula` varchar(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `apellido` varchar(50) DEFAULT NULL,
  `telefono` varchar(10) DEFAULT NULL,
  `direccion` varchar(250) DEFAULT NULL,
  `departamento` varchar(50) DEFAULT NULL,
  `ciudad` varchar(50) DEFAULT NULL,
  `prestamo` int(11) DEFAULT NULL,
  `observacion` varchar(250) DEFAULT NULL,
  `tipo` char(1) DEFAULT NULL,
  PRIMARY KEY (`cedula`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla login.cliente: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
INSERT INTO `cliente` (`cedula`, `nombre`, `apellido`, `telefono`, `direccion`, `departamento`, `ciudad`, `prestamo`, `observacion`, `tipo`) VALUES
	('2311232', 'clienteMoroso', 'clienteMoroso', '123123', 'clienteMoroso', 'clienteMoroso', 'test', 777, 'clienteMoroso', 'M'),
	('28948777', 'Sofia', 'Ballesteros', '3125587788', 'ninguna', 'antioquia', 'medellin', 700000, 'Ninguna', 'N'),
	('337771', 'michael', 'garcia', '233123', 'mi direccip', 'tolima', 'ibague', 50000, 'ninguna', 'N'),
	('777555', 'arnoldo', 'perz', '33123', 'arnoldo', 'tolima', 'lerida', 5000, 'ninguna', 'M'),
	('852588', 'Hernan', 'perez', '7777', 'no tiene', 'tolima', 'ibague', 600000, 'ninguna', 'M');
