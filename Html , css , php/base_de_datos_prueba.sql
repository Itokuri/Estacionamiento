-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2022 at 07:03 PM
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
-- Database: `estacionamiento`
--
DROP DATABASE IF EXISTS `estacionamiento`;
CREATE DATABASE IF NOT EXISTS `estacionamiento` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `estacionamiento`;

-- --------------------------------------------------------

--
-- Table structure for table `propietario`
--

DROP TABLE IF EXISTS `propietario`;
CREATE TABLE `propietario` (
  `nombre` varchar(50) DEFAULT NULL,
  `apellido` varchar(50) DEFAULT NULL,
  `dni` int(11) NOT NULL,
  `edad` int(11) DEFAULT NULL,
  `matricula` varchar(50) DEFAULT NULL,
  `telefono` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `propietario`
--

INSERT INTO `propietario` (`nombre`, `apellido`, `dni`, `edad`, `matricula`, `telefono`) VALUES
('Carlos', 'Anashi', 45879612, 20, 'VMZKL9', '91163748591'),
('Julieta', 'Echevarría', 46879215, 21, 'JS29FO', '91183952681'),
('Thiago', 'Arroyo', 418238123, 17, 'WTRFK1', '91123753149');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `propietario`
--
ALTER TABLE `propietario`
  ADD PRIMARY KEY (`dni`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
