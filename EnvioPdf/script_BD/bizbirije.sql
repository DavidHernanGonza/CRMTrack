-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-08-2022 a las 23:52:21
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
-- Base de datos: `bizbirije`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `correos_informacion`
--

CREATE TABLE `correos_informacion` (
  `id` int(4) NOT NULL,
  `correo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `correos_informacion`
--

INSERT INTO `correos_informacion` (`id`, `correo`) VALUES
(2, 'paez35711@gmail.com'),
(3, 'abelblack15@gmail.com'),
(4, 'david.hernandezgow@gmail.com'),
(5, 'keniaposadamarquez@gmail.com'),
(6, 'Abel_perez18@hotmail.com'),
(7, 'abarrientos@udevit.com.mx'),
(8, 'rosalopez@udevit.com.mx'),
(9, 'djabelblack15@gmail.com'),
(10, 'spotifychamacas@gmail.com'),
(11, 'expendiolomabonita@gmail.com'),
(12, 'posgradoloma@gmail.com'),
(19, 'coronamarius1@gmail.com'),
(20, 'bizbirije.20@gmail.com'),
(30, 'cgarciawebhost@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `correos_informacion`
--
ALTER TABLE `correos_informacion`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `correos_informacion`
--
ALTER TABLE `correos_informacion`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
