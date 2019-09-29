-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 29-09-2019 a las 19:17:37
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `nombre`, `descripcion`, `id_Usuario`) VALUES
(1, 'a', 'bh', 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dislike`
--

DROP TABLE IF EXISTS `dislike`;
CREATE TABLE IF NOT EXISTS `dislike` (
  `id_Usuario` int(255) NOT NULL,
  `id_Pregunta` int(255) DEFAULT NULL,
  `id_respuesta` int(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `follower`
--

DROP TABLE IF EXISTS `follower`;
CREATE TABLE IF NOT EXISTS `follower` (
  `id_usuario_Seguido` int(255) NOT NULL,
  `id_usuario_Seguidor` int(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `likee`
--

DROP TABLE IF EXISTS `likee`;
CREATE TABLE IF NOT EXISTS `likee` (
  `id_Usuario` int(255) NOT NULL,
  `id_Pregunta` int(255) DEFAULT NULL,
  `id_respuesta` int(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `publicacion`
--

INSERT INTO `publicacion` (`id_publicacion`, `cant_like`, `cant_dislike`, `texto`, `id_usuario_FK`, `id_categoria_FK`, `descripcion`, `fecha_Hora`) VALUES
(1, NULL, NULL, 'kiiu', 8, 1, 'fddf', '2019-09-29 16:14:03');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuesta`
--

DROP TABLE IF EXISTS `respuesta`;
CREATE TABLE IF NOT EXISTS `respuesta` (
  `id_respuesta` int(10) NOT NULL AUTO_INCREMENT,
  `texto` varchar(500) NOT NULL,
  `id_pregunta_FK` int(10) NOT NULL,
  `id_usuario_FK` int(10) NOT NULL,
  `cant_like` int(10) DEFAULT NULL,
  `cant_dislike` int(10) DEFAULT NULL,
  `fechaHora` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_respuesta`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `alias`, `nombre`, `email`, `password`, `nivel`, `Fecha_registro`) VALUES
(1, 'chiqui', 'chiquito', 'chiquito@gmail.com', '', 31, NULL),
(2, 'moishe', 'ariel', 'arielgaletti@hotmail.com', '', 1, NULL),
(7, 'r', 'r', 'r', 'r', 1, '2019-09-22 21:34:51'),
(8, 'a', 'a', 'a', 'a', 1, '2019-09-29 07:50:07');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
