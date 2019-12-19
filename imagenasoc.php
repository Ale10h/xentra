CREATE TABLE `imagen_asociado` (
  `imagenasoc_id` int(11) NOT NULL AUTO_INCREMENT,
  `asociado_id` int(11) DEFAULT NULL,
  `imagenasoc_titulo` varchar(120) DEFAULT NULL,
  `imagenasoc_archivo` varchar(70) DEFAULT NULL,
  `imagenasoc_descripcion` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`imagenasoc_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;