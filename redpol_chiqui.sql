-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 25-09-2019 a las 10:56:26
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
-- Base de datos: `redpol_chiqui`
--
CREATE DATABASE IF NOT EXISTS `redpol_chiqui` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `redpol_chiqui`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

DROP TABLE IF EXISTS `categoria`;
CREATE TABLE IF NOT EXISTS `categoria` (
  `id_categoria` int(10) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `id_Usuario` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_categoria`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `nombre`, `descripcion`, `id_Usuario`) VALUES
(6, 'e', 'ee', NULL),
(7, 'q', 'qq', 1),
(8, 'q', 'qq', 1),
(9, 'u', 'uu', 1),
(10, 'p', 'pp', 1),
(11, 'u', 'pp', 0);

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
  `id_publicacion_FK` int(10) NOT NULL,
  PRIMARY KEY (`id_pregunta`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicacion`
--

DROP TABLE IF EXISTS `publicacion`;
CREATE TABLE IF NOT EXISTS `publicacion` (
  `id_publicacion` int(10) NOT NULL AUTO_INCREMENT,
  `cant_like` int(10) DEFAULT NULL,
  `cant_dislike` int(10) DEFAULT NULL,
  `texto` varchar(500) NOT NULL,
  `id_usuario_FK` int(10) NOT NULL,
  `id_categoria_FK` int(10) NOT NULL,
  `descripcion` text,
  `fecha_Hora` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_publicacion`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `publicacion`
--

INSERT INTO `publicacion` (`id_publicacion`, `cant_like`, `cant_dislike`, `texto`, `id_usuario_FK`, `id_categoria_FK`, `descripcion`, `fecha_Hora`) VALUES
(6, NULL, NULL, 'nu', 1, 6, NULL, '2019-09-22 20:21:42'),
(7, NULL, NULL, 'nue', 1, 6, NULL, '2019-09-22 20:21:42'),
(8, NULL, NULL, 'como es', 1, 6, NULL, '2019-09-22 20:21:42'),
(9, NULL, NULL, 'lal', 1, 6, 'poooo', '2019-09-22 20:21:42'),
(10, NULL, NULL, 's', 0, 6, 's', '2019-09-22 21:39:53'),
(11, NULL, NULL, '', 0, 10, '', '2019-09-22 21:40:07');

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
  `id_publicacion_FK` int(10) NOT NULL,
  PRIMARY KEY (`id_respuesta`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `alias`, `nombre`, `email`, `password`, `nivel`, `Fecha_registro`) VALUES
(1, 'chiqui', 'chiquito', 'chiquito@gmail.com', '', 31, NULL),
(2, 'moishe', 'ariel', 'arielgaletti@hotmail.com', '', 1, NULL),
(7, 'r', 'r', 'r', 'r', 1, '2019-09-22 21:34:51');
COMMIT;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `folowers`
--

DROP TABLE IF EXISTS `falowers`;
CREATE TABLE IF NOT EXISTS `falowers` (
  `id_folowers` int(10) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(10) NOT NULL,
  `id_usuario_folowers` int(10) NOT NULL,
  PRIMARY KEY (`id_folowers`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
