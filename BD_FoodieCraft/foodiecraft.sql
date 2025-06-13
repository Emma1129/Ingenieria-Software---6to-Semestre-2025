-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-06-2025 a las 05:02:22
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `foodiecraft`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `likes`
--

CREATE TABLE `likes` (
  `like_id` int(11) NOT NULL,
  `recipe_id` int(11) NOT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `likes`
--

INSERT INTO `likes` (`like_id`, `recipe_id`, `ip_address`, `fecha`) VALUES
(46, 2, '::1', '2025-06-12 22:25:37'),
(47, 1, '::1', '2025-06-12 22:25:39'),
(48, 16, '::1', '2025-06-12 22:30:02'),
(49, 12, '::1', '2025-06-12 22:31:45'),
(50, 12, '::1', '2025-06-12 22:31:45'),
(51, 12, '::1', '2025-06-12 22:31:46'),
(52, 1, '::1', '2025-06-12 22:31:56'),
(53, 1, '::1', '2025-06-12 22:31:58'),
(54, 2, '::1', '2025-06-12 22:32:23'),
(55, 2, '::1', '2025-06-12 22:32:29'),
(56, 1, '::1', '2025-06-12 22:34:08'),
(57, 7, '::1', '2025-06-12 22:48:35'),
(58, 1, '::1', '2025-06-12 22:48:46'),
(59, 6, '::1', '2025-06-12 22:51:36'),
(60, 5, '::1', '2025-06-12 22:51:38'),
(61, 2, '::1', '2025-06-12 22:51:40'),
(62, 10, '::1', '2025-06-12 22:53:06'),
(63, 11, '::1', '2025-06-12 22:53:08'),
(64, 1, '::1', '2025-06-12 23:00:03'),
(65, 4, '::1', '2025-06-12 23:00:04'),
(66, 5, '::1', '2025-06-12 23:00:07'),
(67, 1, '::1', '2025-06-12 23:01:07'),
(68, 8, '::1', '2025-06-12 23:02:08'),
(69, 8, '::1', '2025-06-12 23:02:11'),
(70, 7, '::1', '2025-06-12 23:02:13'),
(71, 4, '::1', '2025-06-12 23:02:15'),
(72, 2, '::1', '2025-06-12 23:02:16'),
(73, 2, '::1', '2025-06-12 23:02:21'),
(74, 1, '::1', '2025-06-12 23:02:23'),
(75, 12, '::1', '2025-06-12 23:04:08'),
(76, 14, '::1', '2025-06-12 23:04:15'),
(77, 14, '::1', '2025-06-12 23:04:15'),
(78, 14, '::1', '2025-06-12 23:04:16'),
(79, 15, '::1', '2025-06-12 23:04:17'),
(80, 15, '::1', '2025-06-12 23:04:17'),
(81, 13, '::1', '2025-06-12 23:04:18'),
(82, 13, '::1', '2025-06-12 23:04:19'),
(83, 9, '::1', '2025-06-12 23:24:24'),
(84, 9, '::1', '2025-06-12 23:24:25'),
(85, 10, '::1', '2025-06-12 23:24:26'),
(86, 11, '::1', '2025-06-12 23:24:27'),
(87, 16, '::1', '2025-06-12 23:24:28'),
(88, 15, '::1', '2025-06-12 23:24:30'),
(89, 14, '::1', '2025-06-12 23:24:31'),
(90, 13, '::1', '2025-06-12 23:24:32'),
(91, 10, '::1', '2025-06-12 23:24:50'),
(92, 9, '::1', '2025-06-12 23:29:06'),
(93, 9, '::1', '2025-06-12 23:29:06'),
(94, 9, '::1', '2025-06-12 23:31:44'),
(95, 10, '::1', '2025-06-12 23:31:46'),
(96, 5, '::1', '2025-06-13 00:09:10'),
(97, 16, '::1', '2025-06-13 00:09:12'),
(98, 3, '::1', '2025-06-13 00:09:18'),
(99, 3, '::1', '2025-06-13 00:09:19'),
(100, 16, '::1', '2025-06-13 00:10:46'),
(101, 16, '::1', '2025-06-13 00:14:37'),
(102, 6, '::1', '2025-06-13 00:28:43'),
(103, 16, '::1', '2025-06-13 00:29:01'),
(104, 2, '::1', '2025-06-13 00:31:58'),
(105, 12, '::1', '2025-06-13 00:32:30'),
(106, 16, '::1', '2025-06-13 01:19:18'),
(107, 16, '::1', '2025-06-13 01:19:22'),
(108, 1, '::1', '2025-06-13 01:36:37');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensajes`
--

CREATE TABLE `mensajes` (
  `mensaje_id` int(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `contenido` text NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `mensajes`
--

INSERT INTO `mensajes` (`mensaje_id`, `nombre`, `contenido`, `fecha`) VALUES
(1, 'Juan', '¡Esta es la mejor página del mundo!', '2025-06-12 04:29:22'),
(2, 'Tlacuache', '¡Estoy totalmente de acuerdo contigo! ¡Saludos!', '2025-06-13 00:31:14'),
(3, 'Snow', 'Yo no estoy de acuerdo, es un asco de página.', '2025-06-13 00:52:12'),
(4, 'Salomon', '¡A mí me gustan las recetas de carne!', '2025-06-13 01:20:19'),
(5, 'Hela', '¡Adoro la comida vegana!', '2025-06-13 01:39:23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `user_id` int(100) NOT NULL,
  `email` varchar(250) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `fecha_registro` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`user_id`, `email`, `nombre`, `fecha_registro`) VALUES
(1, 'juan@foodiecraft.com', 'Juan', '2025-06-12'),
(2, 'Salomon@foodieCraft.com', 'Salomon', '2025-06-12'),
(3, 'tyrion@foodiecraft.com', 'Tyrion', '2025-06-12'),
(4, 'snow@foodiecraft.com', 'Snow', '2025-06-12'),
(5, 'tlacuache@foodiecraft.com', 'Tlacuache', '2025-06-12'),
(6, 'hela@foodiecraft.com', 'Hela', '2025-06-12'),
(7, 'eduardo@foodiecraft.com', 'Eduardo', '2025-06-13'),
(8, 'selena@foodiecraft.com', 'Selena', '2025-06-13'),
(9, 'miguel@foodiecraft.com', 'Miguel', '2025-06-13');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`like_id`);

--
-- Indices de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  ADD PRIMARY KEY (`mensaje_id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `likes`
--
ALTER TABLE `likes`
  MODIFY `like_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  MODIFY `mensaje_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
