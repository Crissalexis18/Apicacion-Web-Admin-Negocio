-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-06-2020 a las 21:59:35
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Estructura de tabla para la tabla `ordenes`
--

CREATE TABLE `ordenes` (
  `ID_PRO` varchar(100) NOT NULL,
  `NOMBRE_PRO` text NOT NULL,
  `CANTIDAD_PRO` int(100) NOT NULL,
  `PRECIO_PRO_UNI` int(100) NOT NULL,
  `PRECIO_PRO_TOTAL` int(100) NOT NULL,
  `FECHA` text NOT NULL DEFAULT '26/06/2020'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ordenes`
--

INSERT INTO `ordenes` (`ID_PRO`, `NOMBRE_PRO`, `CANTIDAD_PRO`, `PRECIO_PRO_UNI`, `PRECIO_PRO_TOTAL`, `FECHA`) VALUES
('', '', 0, 0, 0, 'hoy'),
('', '', 0, 0, 0, 'hoy'),
('', '', 0, 0, 0, 'hoy'),
('', '', 0, 0, 0, 'hoy'),
('', '', 0, 0, 0, 'hoy'),
('', '', 0, 0, 0, 'hoy');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `ID_PRO_TOTAL` varchar(1000) NOT NULL,
  `ID_PRO` varchar(100) NOT NULL,
  `PRECIO_TOTAL` int(100) NOT NULL,
  `FECHA` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
