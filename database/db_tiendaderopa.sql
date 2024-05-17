-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-05-2024 a las 00:19:19
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_tiendaderopa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ropa`
--

CREATE TABLE `ropa` (
  `id_ropa` int(11) NOT NULL,
  `tipo` varchar(250) NOT NULL,
  `descripcion` varchar(250) NOT NULL,
  `precio` double(10,2) NOT NULL,
  `talle` int(11) NOT NULL,
  `id_tienda` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tienda`
--

CREATE TABLE `tienda` (
  `id_tienda` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `telefono` int(11) NOT NULL,
  `email` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ropa`
--
ALTER TABLE `ropa`
  ADD PRIMARY KEY (`id_ropa`),
  ADD KEY `FK_ROPA_TIENDA` (`id_tienda`);

--
-- Indices de la tabla `tienda`
--
ALTER TABLE `tienda`
  ADD PRIMARY KEY (`id_tienda`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ropa`
--
ALTER TABLE `ropa`
  MODIFY `id_ropa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tienda`
--
ALTER TABLE `tienda`
  MODIFY `id_tienda` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ropa`
--
ALTER TABLE `ropa`
  ADD CONSTRAINT `FK_ROPA_TIENDA` FOREIGN KEY (`id_tienda`) REFERENCES `tienda` (`id_tienda`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;