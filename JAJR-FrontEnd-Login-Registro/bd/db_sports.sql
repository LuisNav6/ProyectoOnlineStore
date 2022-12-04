-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-11-2022 a las 05:13:14
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
-- Base de datos: `db_sports`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inicio_sesion`
--

CREATE TABLE `inicio_sesion` (
  `id` varchar(6) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `cuenta` varchar(50) NOT NULL,
  `password` varchar(120) NOT NULL,
  `bloqueado` tinyint(1) NOT NULL,
  `Telefono` varchar(14) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `inicio_sesion`
--

INSERT INTO `inicio_sesion` (`id`, `nombre`, `correo`, `cuenta`, `password`, `bloqueado`, `Telefono`) VALUES
('8o6wyv', 'Lalo Perez', 'lalo@gmail.com', 'Lalo12', 'U0JkYUxCeGYxaVpud2JkMHc3cVJjZz09OjoYZCg6W6oEzWpc07K+Qet+', 0, '4425232'),
('b2zid5', 'Salazar Sanchez', 'sala@gmail.com', 'Salazar25', 'ZHdoUnBYR25TU2YyNjJab1FDdXY5Zz09Ojq6C87h06Xr3gntGcJ6ZqxH', 0, '3325123'),
('gq1j4y', 'Juan Martinez', 'juan@gmail.com', 'Juan88', 'YWFjYUNQWmtOMngwVFA3STRSZEExUT09OjrcDMTBk0u7JgBNWEM5XOdd', 0, '7484782'),
('i4yrw1', 'Angelica Romo', 'angie@gmail.com', 'Angie55', 'NXVaeW42UEVlbW8zc1hyZzRNYzJRUT09OjoiXwvAiYrns1VezWRiLYAb', 0, '7732924'),
('pukhry', 'Hernan Cortez', 'juan@gmail.com', 'Nanito23', 'OTVIeTVtMTVONmdZdGlza3BUYnNxZz09OjoCNirtWwzRJ0ri1nNExtk5', 0, '9427492'),
('slzcnw', 'Tony', 'tony2002@gmail.com', 'TonyRomo', 'Q3ZNQ002aTlFVWxLak53cWVRYUxsUT09Ojp877m3BxP95RqAT8RVSvgd', 0, '4423522'),
('tsiwve', 'Marcos Juarez', 'marcos@gmail.com', 'Marcos23', 'aWppL3dlWUE4OVlUdUg5UFgxWm1KZz09OjqYlj7ydfLZCOZBpuennY1J', 0, '3312342'),
('zrwm8a', 'Lupita Sanchez', 'lupita44@gmail.com', 'Lupita23', 'VWNhYkd1TlFNOVFXcnlaWlNhREFWZz09Ojpxv0CDshorOes3kYm7Q0d+', 0, '3312342');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ip_details`
--

CREATE TABLE `ip_details` (
  `id` int(11) NOT NULL,
  `ip` varchar(50) NOT NULL,
  `login_time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `inicio_sesion`
--
ALTER TABLE `inicio_sesion`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
