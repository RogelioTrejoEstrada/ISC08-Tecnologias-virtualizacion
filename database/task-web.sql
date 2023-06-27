-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 20-08-2020 a las 23:44:44
-- Versión del servidor: 8.0.21-0ubuntu0.20.04.4
-- Versión de PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `task-web`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `task`
--

CREATE TABLE `task` (
  `Id` int NOT NULL,
  `task` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `delivery_Date` date NOT NULL,
  `done` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `task`
--

INSERT INTO `task` (`Id`, `task`, `description`, `delivery_Date`, `done`) VALUES
(123, 'Electricidad y Magnetismo', 'Proin eget tortor risus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Donec sollicitudin molestie malesuada. Nulla quis lorem ut libero malesuada feugiat. Cras ultricies ligula sed magna dictum porta. Curabitur aliquet quam id dui posuere blandit. Curabitur aliquet quam id dui posuere blandit. Sed porttitor lectus nibh. Curabitur aliquet quam id dui posuere blandit. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.', '2020-08-30', 0),
(124, 'Electricidad y Magnetismo', 'Proin eget tortor risus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Donec sollicitudin molestie malesuada. Nulla quis lorem ut libero malesuada feugiat. Cras ultricies ligula sed magna dictum porta. Curabitur aliquet quam id dui posuere blandit. Curabitur aliquet quam id dui posuere blandit. Sed porttitor lectus nibh. Curabitur aliquet quam id dui posuere blandit. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.', '2020-08-23', 0),
(125, 'Arquitectura de Computadoras', 'Proin eget tortor risus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Donec sollicitudin molestie malesuada. Nulla quis lorem ut libero malesuada feugiat. Cras ultricies ligula sed magna dictum porta. Curabitur aliquet quam id dui posuere blandit. Curabitur aliquet quam id dui posuere blandit. Sed porttitor lectus nibh. Curabitur aliquet quam id dui posuere blandit. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.', '2020-09-30', 0),
(126, 'Ingles', 'Proin eget tortor risus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Donec sollicitudin molestie malesuada. Nulla quis lorem ut libero malesuada feugiat. Cras ultricies ligula sed magna dictum porta. Curabitur aliquet quam id dui posuere blandit. Curabitur aliquet quam id dui posuere blandit. Sed porttitor lectus nibh. Curabitur aliquet quam id dui posuere blandit. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.', '2020-08-30', 0),
(127, 'Estática y Dinámica', 'Proin eget tortor risus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Donec sollicitudin molestie malesuada. Nulla quis lorem ut libero malesuada feugiat. Cras ultricies ligula sed magna dictum porta. Curabitur aliquet quam id dui posuere blandit. Curabitur aliquet quam id dui posuere blandit. Sed porttitor lectus nibh. Curabitur aliquet quam id dui posuere blandit. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.', '2020-08-16', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `task`
--
ALTER TABLE `task`
  MODIFY `Id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
