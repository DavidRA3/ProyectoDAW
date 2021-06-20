-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-06-2021 a las 20:46:00
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dromero`
--

CREATE DATABASE dromero;
USE dromero;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tasks`
--

CREATE TABLE `tasks` (
  `id_task` int(11) NOT NULL,
  `id_usr` int(11) NOT NULL,
  `title` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `descr` varchar(300) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `cat` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `status` varchar(20) COLLATE utf32_spanish2_ci NOT NULL,
  `urg` varchar(20) COLLATE utf32_spanish2_ci DEFAULT NULL,
  `date` datetime NOT NULL,
  `update_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish2_ci;

--
-- Volcado de datos para la tabla `tasks`
--

INSERT INTO `tasks` (`id_task`, `id_usr`, `title`, `descr`, `cat`, `status`, `urg`, `date`, `update_date`) VALUES
(24, 15, 'Memoria', 'Realizar memoria proyecto', 'Trabajo', 'Terminada', 'Alta', '2021-06-20 19:35:21', '0000-00-00 00:00:00'),
(25, 15, 'Proyecto', 'Realización del proyecto de DAW', 'Trabajo', 'En curso', 'Media', '2021-06-20 19:39:09', '0000-00-00 00:00:00'),
(26, 16, 'Recoger gafas de sol', 'Ir a la óptica antes de que cierren', 'Compras', 'Planificada', 'Media', '2021-06-20 19:42:12', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id_usr` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `surname` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `email` varchar(40) COLLATE utf8_spanish2_ci NOT NULL,
  `username` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `password` varchar(32) COLLATE utf8_spanish2_ci NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id_usr`, `name`, `surname`, `email`, `username`, `password`, `date`) VALUES
(15, 'David', 'Romero', 'darom@gmail.com', 'david3', '3d517d7999a1cd342bb053619caac1aa', '2021-06-20 19:34:36'),
(16, 'Jose', 'Pamplinas', 'josepan@gimeil.com', 'josu', '407a6922c7096b48120ba73a2cb852f8', '2021-06-20 19:39:55');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id_task`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_usr`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id_task` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id_usr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
