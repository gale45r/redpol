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
-- Estructura de tabla para la tabla `producto`
--

DROP TABLE IF EXISTS `producto`;
CREATE TABLE IF NOT EXISTS `producto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(15) NOT NULL,
  `descripcion` varchar(30) DEFAULT NULL,
  `precio` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `nombre`, `descripcion`, `precio`) VALUES
(1, 'Cafetera', 'Cafetera Nespre', 25000),
(2, 'planchita', 'Planchita De Pelo Atma Pl8860n', 1500),
(3, 'Cafetera', 'Cafetera Nespresso Lattissima ', 25000),
(4, 'plancha', 'Plancha Vapor Rociador 1200 Wa', 899),
(5, 'sillon', 'Sillon 3 cuerpos de jackard', 11650),
(6, 'mesa', 'Mesa Redonda Martin & Martin B', 4200),
(7, 'silla', 'Silla Eames Blanca Dsw - Desil', 1650),
(8, 'mesa', 'Mesa Plegable Catering Camping', 3500);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `nivel` int(10) NOT NULL,
  `Fecha_Hora` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `email`, `nivel`, `Fecha_Hora`) VALUES
(1, 'Nadia', 'nadia@caeep.com', 31, NULL),
(2, 'a', 'arielgaletti@hotmail.com', 1, NULL),
(3, 'b', 'b@b.b', 2, NULL),
(4, 'q', 'q', 1, '2019-09-18 09:57:25'),
(5, 'u', 'u', 2, '2019-09-18 14:39:11');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
