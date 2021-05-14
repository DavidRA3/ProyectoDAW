-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-05-2021 a las 08:16:54
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 7.3.27

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
(22, 8, 'Comprar billete', 'Vuelta a Segovia el viernes tarde.', 'Social', 'Planificada', 'Media', '2021-05-13 10:28:47', '0000-00-00 00:00:00'),
(23, 10, 'Gimnasio', 'Ir al gimnasio esta tarde con Héctor.', 'Diaria', 'En espera', 'Baja', '2021-05-13 10:46:24', '0000-00-00 00:00:00'),
(31, 10, 'Estudiar', 'Examen PHP en Junio', 'work', 'ongoing', 'high', '2021-05-13 13:27:51', '0000-00-00 00:00:00'),
(32, 10, 'Comprar', 'Comprar Nike Blazer Amarillas', 'social', 'wait', 'low', '2021-05-13 14:11:35', '0000-00-00 00:00:00'),
(33, 10, 'Comprar billete', 'Billete AVE Madrid el jueves', 'Compras', 'Planificada', 'mid', '2021-05-13 14:18:05', '0000-00-00 00:00:00');

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
  `date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id_usr`, `name`, `surname`, `email`, `username`, `password`, `date`) VALUES
(1, 'David', 'Romero Alonso', 'dra3david@gmail.com', 'david', '123abc', NULL),
(8, 'Victoria', 'García Lucio', 'vicky@gmail.com', 'vitogs', 'qazaq', NULL),
(10, 'Álvaro', 'Dominguez Silva', 'alvaro@gmail.com', 'alvaro', 'blazer', NULL),
(21, 'Judith', 'Andrés', 'judi@gmail.com', 'judi', 'hood', '2021-05-13 13:00:27');

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
  MODIFY `id_task` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id_usr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
