-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2023 at 08:09 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mariurda_registro`
--

-- --------------------------------------------------------

--
-- Table structure for table `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(13) NOT NULL,
  `cedulaC` varchar(20) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `telefono` varchar(13) NOT NULL,
  `ubicacion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `cedulaC`, `nombre`, `telefono`, `ubicacion`) VALUES
(15, '30419313', 'nany', '04246753242', 'aaaaaaaaa'),
(16, '30419313', 'nany', '04246753242', 'santafe'),
(17, '30419313', 'nany', '04246753242', 'santa fe'),
(18, '30419313', 'nany', '1111111111', 'aaaaaaaaa'),
(19, '30419313', 'nany', '1111111111', 'aaaaaaaaa'),
(20, '30419313', 'nany', '1111111111', 'aaaaaaaaa'),
(21, '30419313', 'nany', '1111111111', 'aaaaaaaaa'),
(22, '30419313', 'nany', '1111111111', 'aaaaaaaaa'),
(23, '30419313', 'nany', '1111111111', 'aaaaaaaaa'),
(24, '30419313', 'nany', '1111111111', 'aaaaaaaaa'),
(25, '30419313', 'nany', '1111111111', 'aaaaaaaaa'),
(26, '30419313', 'nany', '1111111111', 'aaaaaaaaa'),
(27, '30419313', 'nany', '1111111111', 'aaaaaaaaa'),
(28, '30419313', 'nany', '1111111111', 'aaaaaaaaa'),
(29, '30419313', 'nany', '1111111111', 'aaaaaaaaa'),
(30, '30419313', 'nany', '1111111111', 'aaaaaaaaa'),
(31, '30419313', 'nany', '1111111111', 'santa fe'),
(32, '30419313', 'nany', '1111111111', 'santa fe'),
(33, '30419313', 'nany', '1111111111', 'santa fe'),
(34, '30419313', 'nany', '1111111111', 'aaaaaaaaa'),
(35, '30419313', 'nany', '1111111111', 'aaaaaaaaa'),
(36, '30419313', 'nany', '1111111111', 'aaaaaaaaa'),
(37, '30419313', 'nany', '1111111111', 'aaaaaaaaa'),
(38, '30419313', 'nany', '1111111111', 'aaaaaaaaa'),
(39, '30419313', 'nany', '1111111111', 'aaaaaaaaa'),
(40, '2222222222', 'aaaaaa', '04246753242', 'santa fe');

-- --------------------------------------------------------

--
-- Table structure for table `llenados`
--

CREATE TABLE `llenados` (
  `id` int(13) NOT NULL,
  `cedulaC` varchar(20) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `cantidad` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(13) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `contrasena` varchar(20) NOT NULL,
  `nombre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `contrasena`, `nombre`) VALUES
(5, 'admin', 'admin', 'nany');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indexes for table `llenados`
--
ALTER TABLE `llenados`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `llenados`
--
ALTER TABLE `llenados`
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
