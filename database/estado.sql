-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-09-2022 a las 18:41:33
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `paymed`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `idestado` int(11) NOT NULL,
  `idpais` int(11) NOT NULL,
  `estado` varchar(110) NOT NULL,
  `idestatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`idestado`, `idpais`, `estado`, `idestatus`) VALUES
(1, 232, 'Amazonas', 1),
(2, 232, 'Anzoátegui', 1),
(3, 232, 'Apure', 1),
(4, 232, 'Aragua', 1),
(5, 232, 'Barinas', 1),
(6, 232, 'Bolívar', 1),
(7, 232, 'Carabobo', 1),
(8, 232, 'Cojedes', 1),
(9, 232, 'Delta Amacuro', 1),
(10, 232, 'Falcón', 1),
(11, 232, 'Guárico', 1),
(12, 232, 'Lara', 1),
(13, 232, 'Mérida', 1),
(14, 232, 'Miranda', 1),
(15, 232, 'Monagas', 1),
(16, 232, 'Nueva Esparta', 1),
(17, 232, 'Portuguesa', 1),
(18, 232, 'Sucre', 1),
(19, 232, 'Táchira', 1),
(20, 232, 'Trujillo', 1),
(21, 232, 'Vargas', 1),
(22, 232, 'Yaracuy', 1),
(23, 232, 'Zulia', 1),
(24, 232, 'Distrito Capital', 1),
(25, 232, 'Dependencias Federales', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`idestado`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
