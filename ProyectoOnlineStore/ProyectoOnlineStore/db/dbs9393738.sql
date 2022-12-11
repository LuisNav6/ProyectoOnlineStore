-- phpMyAdmin SQL Dump
-- version 4.9.10
-- https://www.phpmyadmin.net/
--
-- Servidor: db5011119284.hosting-data.io
-- Tiempo de generación: 11-12-2022 a las 04:22:59
-- Versión del servidor: 8.0.26
-- Versión de PHP: 7.0.33-0+deb9u12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dbs9393738`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `attempt_count`
--

CREATE TABLE `attempt_count` (
  `id` int NOT NULL,
  `ip_address` varchar(30) NOT NULL,
  `time_count` bigint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cupones`
--

CREATE TABLE `cupones` (
  `id_cupon` varchar(6) NOT NULL,
  `descuento` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `cupones`
--

INSERT INTO `cupones` (`id_cupon`, `descuento`) VALUES
('nfwi58', 47);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `inicio_sesion`
--

INSERT INTO `inicio_sesion` (`id`, `nombre`, `correo`, `cuenta`, `password`, `bloqueado`, `Telefono`) VALUES
('820ur3', 'Luis Navarrete', 'luishnb4@gmail.com', 'Luis123', 'dWtJbU5lN3R3ZUxaS0NoVGptUTYzZz09Ojrn/VGYAWYDuP0Gw/oK4Wsr', 0, '1244566702'),
('b2zid5', 'Salazar Sanchez', 'sala@gmail.com', 'Salazar25', 'RlVNclFlTVo3RVdCZ09DV2d0a0FWQT09Ojrk2RuMGy5rQBwHRpeisA1J', 0, '3325123'),
('s6sztj', 'Rashied Perez', 'ra@gmail.com', 'Rachot55', 'cGRLNjRsY1hISUttQXpnL2QrUVVsUT09Ojrgw1VwPPju+BVvOqEPCg87', 0, '3355232'),
('slzcnw', 'Tony', 'tony2002@gmail.com', 'TonyRomo', 'ck54TTVJNFVtdWlpd3M4SnpWREdHZz09Ojp7yCZ+o9Ks0MqK5xZpEL7z', 0, '4423522'),
('tsiwve', 'Marcos Juarez', 'marcos@gmail.com', 'Marcos23', 'aWppL3dlWUE4OVlUdUg5UFgxWm1KZz09OjqYlj7ydfLZCOZBpuennY1J', 0, '3312342'),
('ugjn6h', 'Armando', 'armandoep168@gmail.com', 'Armandito123', 'YS9YemVkbWh5dU9mWDlzYngvcjBRdz09Ojo6I16+Ds5tsUJms3iFmieR', 0, '4491571866'),
('uw4zyw', 'Pedro Lozano', 'pedro@gmail.com', 'Pedrito55', 'WXVpbmUyQXJ2K3lTdS9hK2dUQVhwUT09OjrXdonyxkPlqQt+mZry6BSn', 0, '5242242'),
('y7wh8k', 'admin', 'admin@gmail.com', 'admin', 'RDZ6SXB2Y1g2VGdSZmhRUWhNb0gzUT09Ojrok4EiwI7SLudH9dQAm2bD', 0, '5423423'),
('z64ncf', 'Mauricio Hernandez', 'mauricio@gmail.com', 'Mauricio23', 'WlFDT2orV3VmTWkrWDlWR0cweWNydz09OjpoZVwSc4b0gwcrzxiN2Fty', 0, '3355242'),
('zrwm8a', 'Lupita Sanchez', 'lupita44@gmail.com', 'Lupita23', 'VWNhYkd1TlFNOVFXcnlaWlNhREFWZz09Ojpxv0CDshorOes3kYm7Q0d+', 0, '3312342');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `categoria` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `existencia` int NOT NULL,
  `precio` float(10,2) NOT NULL,
  `descripcion` varchar(300) COLLATE utf8mb4_general_ci NOT NULL,
  `imagen` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `categoria`, `existencia`, `precio`, `descripcion`, `imagen`) VALUES
(1, 'Blusa negra', 'Dama', 10, 600.00, 'blusa negra gimnasio', 'blusaDama.jpeg'),
(2, 'Blusa deportiva', 'Niña', 10, 1500.00, 'blusa de niña color negro', 'blusa_nin╠âa.png'),
(3, 'Bandas de colores', 'Dama', 10, 600.00, 'bandas deportivas diferentes colores', 'bandasDama.png'),
(4, 'Tenis marca', 'Niño', 10, 1230.00, 'Tenis ultra confort de niño', 'tenisNIn╠âo.png'),
(5, 'Short negro', 'Niño', 10, 600.00, 'short ultra confort de niño', 'shortNin╠âo.png'),
(6, 'Calcetas Nike', 'Dama', 10, 550.00, 'Calcetas de dama ultra confort', 'calcetasDama.png'),
(7, 'Calcetas Puma', 'Caballero', 10, 550.00, 'Calcetas de hombre ultra confort', 'calcetasHombre.png'),
(8, 'Tenis de futbol', 'Dama', 10, 1230.00, 'tenis de futbol de dama ultra agarre', 'futbolDama.png'),
(9, 'Tenis de futbol', 'Caballero', 10, 1230.00, 'tenis de futbol de hombre', 'futbolHombre.png'),
(10, 'Pants adidas', 'Caballero', 10, 1200.00, 'Pants ultra confort de hombre', 'pantsHombre.png'),
(11, 'Playera gym', 'Caballero', 10, 550.00, 'playera sin mangas color azul', 'playeraHombre.png'),
(12, 'Playera deportiva', 'Niño', 10, 750.00, 'playera gris under armour', 'playeraNin╠âo.png'),
(13, 'Short adidas', 'Dama', 10, 650.00, 'short negro adidas rayas blancas', 'shortDama.png'),
(14, 'Short nike', 'Caballero', 10, 750.00, 'short negro paloma reflectiva', 'shortHombre.png'),
(15, 'Short niña', 'Niña', 10, 500.00, 'short morado de niña', 'shortNin╠âa.png'),
(16, 'Tenis puma', 'Dama', 10, 2500.00, 'tenis de base negro dama puma', 'tenisCorrerDama.png'),
(17, 'Tenis Pirma', 'Caballero', 10, 800.00, 'tenis Pirma negros ultra soporte', 'TenisHombre.png'),
(18, 'Tenis nike', 'Niña', 10, 1500.00, 'tenis rosa niña ultra confort', 'tenisNin╠âa.png');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `attempt_count`
--
ALTER TABLE `attempt_count`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cupones`
--
ALTER TABLE `cupones`
  ADD PRIMARY KEY (`id_cupon`);

--
-- Indices de la tabla `inicio_sesion`
--
ALTER TABLE `inicio_sesion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `attempt_count`
--
ALTER TABLE `attempt_count`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
