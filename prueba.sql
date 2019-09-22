-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 18-09-2019 a las 17:40:53
-- Versión del servidor: 5.7.26
-- Versión de PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `prueba`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usuario` int(10) NOT NULL AUTO_INCREMENT,
  `alias` varchar(30) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(30) NOT NULL,
  `nivel` int(10) NOT NULL,
  `Fecha_registro` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `alias`, `nombre`, `email`, `nivel`, `Fecha_registro`) VALUES
(1, 'chiqui', 'chiquito', 'chiquito@gmail.com', 31, NULL),
(2, 'moishe', 'ariel', 'arielgaletti@hotmail.com', 1, NULL);
COMMIT;

--
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria temario`
--

DROP TABLE IF EXISTS `categoria`;
CREATE TABLE IF NOT EXISTS `categoria` (
  `id_categoria` int(10) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `id_usuario_FK` int(10) NOT NULL,
  PRIMARY KEY (`id_categoria`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

ALTER TABLE `categoria` ADD CONSTRAINT `FK_categoria_usuario` 
FOREIGN KEY (`id_usuario_FK`) REFERENCES `usuario`(`id_usuario`) 
ON DELETE CASCADE ON UPDATE CASCADE;

--
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicacion`
--

DROP TABLE IF EXISTS `publicacion`;
CREATE TABLE IF NOT EXISTS `publicacion` (
  `id_publicacion` int(10) NOT NULL AUTO_INCREMENT,
  `cant_like` int(10) NOT NULL,
  `cant_dislike` int(10) NOT NULL,
  `texto` varchar(500) DEFAULT NULL,
  `id_usuario_FK` int(10) NOT NULL,
  `id_categoria_FK` int(10) NOT NULL,
  PRIMARY KEY (`id_publicacion`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

ALTER TABLE `publicacion` ADD CONSTRAINT `FK_puclicaciones_categoria` 
FOREIGN KEY (`id_categoria_FK`) REFERENCES `categoria`(`id_categoria`) 
ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `publicacion` ADD CONSTRAINT `FK:publicacion_usuario` 
FOREIGN KEY (`id_usuario_FK`) REFERENCES `usuario`(`id_usuario`) 
ON DELETE CASCADE ON UPDATE CASCADE;


--
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pregunta`
--

DROP TABLE IF EXISTS `pregunta`;
CREATE TABLE IF NOT EXISTS `pregunta` (
  `id_pregunta` int(10) NOT NULL AUTO_INCREMENT,
  `texto` varchar(500) DEFAULT NULL,
  `id_usuario_FK` int(10) NOT NULL,
  `id_categoria_FK` int(10) NOT NULL,
  `id_publicacion_FK` int(10) not null,
  PRIMARY KEY (`id_pregunta`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

 
ALTER TABLE `pregunta` ADD CONSTRAINT `FK_pregunga_categoria` 
FOREIGN KEY (`id_categoria_FK`) REFERENCES `categoria`(`id_categoria`) 
ON DELETE CASCADE ON UPDATE CASCADE; 

ALTER TABLE `pregunta` ADD CONSTRAINT `FK_pregunta_publicacion` 
FOREIGN KEY (`id_publicacion_FK`) REFERENCES `publicacion`(`id_publicacion`) 
ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `pregunta` ADD CONSTRAINT `FK_pregunta_usuario` 
FOREIGN KEY (`id_usuario_FK`) REFERENCES `usuario`(`id_usuario`) 
ON DELETE CASCADE ON UPDATE CASCADE;

--
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuesta`
--

DROP TABLE IF EXISTS `respuesta`;
CREATE TABLE IF NOT EXISTS `respuesta` (
  `id_respuesta` int(10) NOT NULL AUTO_INCREMENT,
  `texto` varchar(500) DEFAULT NULL,
  `id_pregunta_FK` int(10) NOT NULL,
  `id_usuario_FK` int(10) NOT NULL,
  `id_categoria_FK` int(10) NOT NULL,
  `id_publicacion_FK` int(10) not null,
  PRIMARY KEY (`id_respuesta`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

ALTER TABLE `respuesta` ADD CONSTRAINT `FK_respuesta_categoria` 
FOREIGN KEY (`id_categoria_FK`) REFERENCES `categoria`(`id_categoria`) 
ON DELETE CASCADE ON UPDATE CASCADE; 

ALTER TABLE `respuesta` ADD CONSTRAINT `FK_respuesta_publicacion` 
FOREIGN KEY (`id_publicacion_FK`) REFERENCES `publicacion`(`id_publicacion`) 
ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `respuesta` ADD CONSTRAINT `FK_respuesta_usuario` 
FOREIGN KEY (`id_usuario_FK`) REFERENCES `usuario`(`id_usuario`) 
ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `respuesta` ADD CONSTRAINT `FK_respuesta_pregunta` 
FOREIGN KEY (`id_pregunta_FK`) REFERENCES `pregunta`(`id_pregunta`) 
ON DELETE CASCADE ON UPDATE CASCADE;


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
