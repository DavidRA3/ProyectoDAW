-- phpMyAdmin SQL Dump
-- version OVH
-- https://www.phpmyadmin.net/
--
-- Servidor: sqlprive-gg114090-001.privatesql
-- Tiempo de generación: 20-05-2021 a las 21:30:37
-- Versión del servidor: 5.6.51-log
-- Versión de PHP: 7.0.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dromero`
--

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
(11, 8, 'Prueba título', 'Descripción de prueba', 'family', 'done', 'high', '2021-05-12 12:36:26', '0000-00-00 00:00:00'),
(12, 1, 'Titulo 1', 'Desc David 1', 'daily', 'closed', 'low', '2021-05-12 12:37:29', '0000-00-00 00:00:00'),
(13, 10, 'pruebalista', 'aaaaaalista', 'daily', 'done', 'low', '2021-05-12 13:28:16', '0000-00-00 00:00:00'),
(14, 8, 'Pruebamovil', 'Probando', 'daily', 'plan', 'mid', '2021-05-12 13:33:51', '0000-00-00 00:00:00'),
(15, 10, 'Quifi', 'Ejercicios', 'Trabajo', 'En curso', 'high', '2021-05-18 12:02:44', '0000-00-00 00:00:00');

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
(6, 'Judith', 'Andrés', 'judi@gmail.com', 'judi', 'qwerty', '0000-00-00 00:00:00'),
(8, 'Álvaro', 'Domínguez Silva', 'alvaro@gmail.com', 'alvaro', 'blazer', '0000-00-00 00:00:00'),
(10, 'Victoria', 'García Lucio', 'vitogs99@gmail.com', 'Vitogs', 'amborguesa', '0000-00-00 00:00:00'),
(11, 'Prueba', 'Movil', 'A@gmail.com', 'Isidro', 'qazaq', '2021-05-12 13:35:39');

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
  MODIFY `id_task` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id_usr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
