-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-09-2017 a las 11:20:26
-- Versión del servidor: 5.7.14
-- Versión de PHP: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `eys`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eys`
--

CREATE TABLE `eys` (
  `id` int(11) NOT NULL,
  `detalle` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `eos` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `valor` int(11) NOT NULL,
  `ot` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `eys`
--

INSERT INTO `eys` (`id`, `detalle`, `eos`, `valor`, `ot`, `fecha`) VALUES
(1, 'Obra civil Registraduría Piedepato', 'sal', 750000, '4452', '2017-07-23 00:00:00'),
(2, 'Transporte Lanchas Puerto Meluk - Piedepato -Puerto Meluk', 'sal', 140000, '4452', '2017-07-24 00:00:00'),
(3, 'prueba de nuevo gasto 10', 'sal', 35910, 'OT-3456', '2017-07-23 00:00:00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `eys`
--
ALTER TABLE `eys`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `eys`
--
ALTER TABLE `eys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
