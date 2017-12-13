-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-06-2016 a las 12:54:42
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `tesicom`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE IF NOT EXISTS `productos` (
  `id` varchar(75) CHARACTER SET utf8 NOT NULL,
  `tipo` varchar(75) NOT NULL,
  `marca` varchar(75) NOT NULL,
  `modelo` varchar(75) NOT NULL,
  `caracteristicas` varchar(250) NOT NULL,
  `precio` varchar(50) NOT NULL,
  `pventa` varchar(50) NOT NULL,
  `existencia` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `tipo`, `marca`, `modelo`, `caracteristicas`, `precio`, `pventa`, `existencia`) VALUES
('0212', '4all', 'Dell', 'Inspiron 312', 'Procesador Intel pentium, Windows 10, Memoria de 8 Gb, Disco duro de 1 TB.\r\n', '12,000', '15,999', 5);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
