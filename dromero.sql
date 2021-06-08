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
(1, 0, 'Prueba', 'Esto es una prueba', '', 'plan', 'low', '2021-05-12 12:05:39', '0000-00-00 00:00:00'),
(10, 10, '', '', '', 'wait', '', '2021-05-12 12:35:38', '0000-00-00 00:00:00'),
(12, 1, 'Titulo 1', 'Desc David 1', 'daily', 'closed', 'low', '2021-05-12 12:37:29', '0000-00-00 00:00:00'),
(13, 10, 'pruebalista', 'aaaaaalista', 'daily', 'done', 'low', '2021-05-12 13:28:16', '0000-00-00 00:00:00'),
(15, 10, 'Quifi', 'Ejercicios', 'Trabajo', 'En curso', 'high', '2021-05-18 12:02:44', '0000-00-00 00:00:00'),
(18, 8, 'Prueba título', 'Esto es una prueba editada', 'Diaria', 'En espera', 'Media', '2021-05-20 23:32:31', '0000-00-00 00:00:00'),
(21, 8, 'NT', 'Nueva tarea añadida, versión final', 'Social', 'En curso', 'Media', '2021-06-05 21:10:01', '0000-00-00 00:00:00'),
(23, 13, 'Zebra', 'La zebra es un caballotigre', 'Social', 'En curso', 'Baja', '2021-06-08 20:28:47', '0000-00-00 00:00:00');

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
  `password` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id_usr`, `name`, `surname`, `email`, `username`, `password`, `date`) VALUES
(1, 'David', 'Romero Alonso', 'dra3david@gmail.com', 'david3', '1234', '0000-00-00 00:00:00'),
(8, 'Álvaro', 'Domínguez Silva', 'alvaro@gmail.com', 'alvaro', 'blazer', '0000-00-00 00:00:00'),
(10, 'Victoria', 'García Lucio', 'vitogs99@gmail.com', 'Vitogs', 'amborguesa', '0000-00-00 00:00:00'),
(12, 'Aitor', 'Profe profe', 'aitor@gmail.com', 'aitor', 'qazaq', '2021-05-21 02:08:24'),
(13, 'judi', 'andres', 'judi@gmail.com', 'judi', 'judini', '2021-06-08 20:28:10');

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
