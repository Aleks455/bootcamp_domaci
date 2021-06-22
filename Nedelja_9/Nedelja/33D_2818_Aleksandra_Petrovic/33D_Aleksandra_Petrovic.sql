-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 22, 2021 at 08:05 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `domaci_33`
--
CREATE DATABASE IF NOT EXISTS `33D_2818_Aleksandra_Petrovic` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `3D_2818_Aleksandra_Petrovic`;

-- --------------------------------------------------------

--
-- Table structure for table `prodaja`
--

CREATE TABLE `prodaja` (
  `id` int(11) NOT NULL,
  `barkod` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kolicina` int(11) NOT NULL,
  `cena` decimal(7,2) NOT NULL,
  `datum` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prodaja`
--

INSERT INTO `prodaja` (`id`, `barkod`, `kolicina`, `cena`, `datum`) VALUES
(1, '173', 4, '385.00', '2021-06-17'),
(2, '173', 2, '150.00', '2021-05-01'),
(3, '173', 1, '100.00', '2021-06-16'),
(4, '321', 4, '385.00', '2021-06-17'),
(5, '321', 2, '250.00', '2021-05-01'),
(6, '321', 1, '120.00', '2021-06-16'),
(7, '454', 5, '682.00', '2021-06-17'),
(8, '454', 3, '420.00', '2021-05-01'),
(9, '454', 6, '520.00', '2021-06-16'),
(10, '727', 3, '320.00', '2021-06-16'),
(12, '789', 20, '220.00', '2021-06-17'),
(13, '789', 40, '275.00', '2021-06-17'),
(14, '789', 10, '242.00', '2021-06-17'),
(15, '776', 30, '50.00', '2021-05-01'),
(16, '776', 20, '55.00', '2021-05-01'),
(17, '776', 10, '60.00', '2021-06-16'),
(18, '776', 40, '71.50', '2021-06-17');

-- --------------------------------------------------------

--
-- Table structure for table `proizvodi`
--

CREATE TABLE `proizvodi` (
  `barkod` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `naziv` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cena` decimal(7,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `proizvodi`
--

INSERT INTO `proizvodi` (`barkod`, `naziv`, `cena`) VALUES
('173', 'jogurt', '120.00'),
('321', 'hleb', '50.00'),
('454', 'puter', '120.00'),
('727', 'jabuke', '150.00'),
('761', 'beli luk', '80.00'),
('776', 'crni luk', '50.00'),
('789', 'paradajz', '200.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `prodaja`
--
ALTER TABLE `prodaja`
  ADD PRIMARY KEY (`id`),
  ADD KEY `barkod` (`barkod`);

--
-- Indexes for table `proizvodi`
--
ALTER TABLE `proizvodi`
  ADD PRIMARY KEY (`barkod`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `prodaja`
--
ALTER TABLE `prodaja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `prodaja`
--
ALTER TABLE `prodaja`
  ADD CONSTRAINT `prodaja_ibfk_1` FOREIGN KEY (`barkod`) REFERENCES `proizvodi` (`barkod`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
