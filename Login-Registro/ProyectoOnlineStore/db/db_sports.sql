-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2022 at 03:29 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sports`
--

-- --------------------------------------------------------

--
-- Table structure for table `attempt_count`
--

CREATE TABLE `attempt_count` (
  `id` int(11) NOT NULL,
  `ip_address` varchar(30) NOT NULL,
  `time_count` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `inicio_sesion`
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
-- Dumping data for table `inicio_sesion`
--

INSERT INTO `inicio_sesion` (`id`, `nombre`, `correo`, `cuenta`, `password`, `bloqueado`, `Telefono`) VALUES
('b2zid5', 'Salazar Sanchez', 'sala@gmail.com', 'Salazar25', 'RlVNclFlTVo3RVdCZ09DV2d0a0FWQT09Ojrk2RuMGy5rQBwHRpeisA1J', 0, '3325123'),
('slzcnw', 'Tony', 'tony2002@gmail.com', 'TonyRomo', 'VlRQK3grOEY1ZFlVWjdIQTkxZ2RVZz09OjqDwYvF6dscnpqfqtqzV/nZ', 0, '4423522'),
('tsiwve', 'Marcos Juarez', 'marcos@gmail.com', 'Marcos23', 'aWppL3dlWUE4OVlUdUg5UFgxWm1KZz09OjqYlj7ydfLZCOZBpuennY1J', 0, '3312342'),
('uw4zyw', 'Pedro Lozano', 'pedro@gmail.com', 'Pedrito55', 'WXVpbmUyQXJ2K3lTdS9hK2dUQVhwUT09OjrXdonyxkPlqQt+mZry6BSn', 0, '5242242'),
('z64ncf', 'Mauricio Hernandez', 'mauricio@gmail.com', 'Mauricio23', 'WlFDT2orV3VmTWkrWDlWR0cweWNydz09OjpoZVwSc4b0gwcrzxiN2Fty', 0, '3355242'),
('zrwm8a', 'Lupita Sanchez', 'lupita44@gmail.com', 'Lupita23', 'VWNhYkd1TlFNOVFXcnlaWlNhREFWZz09Ojpxv0CDshorOes3kYm7Q0d+', 0, '3312342');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attempt_count`
--
ALTER TABLE `attempt_count`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inicio_sesion`
--
ALTER TABLE `inicio_sesion`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attempt_count`
--
ALTER TABLE `attempt_count`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
