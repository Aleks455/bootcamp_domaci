-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 16, 2021 at 01:47 AM
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
-- Database: `cas_32_baza_2`
--
CREATE DATABASE IF NOT EXISTS `2818_32D_Aleksandra_Petrovic` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `2818_32D_Aleksandra_Petrovic`;

-- --------------------------------------------------------

--
-- Table structure for table `destinacije`
--

CREATE TABLE `destinacije` (
  `id_destinacije` int(11) NOT NULL,
  `drzava` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grad` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `viza` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `korpa_putovanja_po_osobi`
--

CREATE TABLE `korpa_putovanja_po_osobi` (
  `id` int(11) NOT NULL,
  `id_putovanje` int(11) NOT NULL,
  `popust` int(11) NOT NULL,
  `osoba_pasos` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `putnici`
--

CREATE TABLE `putnici` (
  `br_pasosa` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ime` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prezime` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `putovanja`
--

CREATE TABLE `putovanja` (
  `id_putovanja` int(11) NOT NULL,
  `datum_polaska` date NOT NULL,
  `datum_povratka` date NOT NULL,
  `destinacija_id` int(11) NOT NULL,
  `cena` decimal(9,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `destinacije`
--
ALTER TABLE `destinacije`
  ADD PRIMARY KEY (`id_destinacije`);

--
-- Indexes for table `korpa_putovanja_po_osobi`
--
ALTER TABLE `korpa_putovanja_po_osobi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `osoba_pasos` (`osoba_pasos`),
  ADD KEY `id_putovanje` (`id_putovanje`);

--
-- Indexes for table `putnici`
--
ALTER TABLE `putnici`
  ADD PRIMARY KEY (`br_pasosa`);

--
-- Indexes for table `putovanja`
--
ALTER TABLE `putovanja`
  ADD PRIMARY KEY (`id_putovanja`),
  ADD KEY `destinacija_id` (`destinacija_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `destinacije`
--
ALTER TABLE `destinacije`
  MODIFY `id_destinacije` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `korpa_putovanja_po_osobi`
--
ALTER TABLE `korpa_putovanja_po_osobi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `putovanja`
--
ALTER TABLE `putovanja`
  MODIFY `id_putovanja` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `korpa_putovanja_po_osobi`
--
ALTER TABLE `korpa_putovanja_po_osobi`
  ADD CONSTRAINT `korpa_putovanja_po_osobi_ibfk_1` FOREIGN KEY (`osoba_pasos`) REFERENCES `putnici` (`br_pasosa`),
  ADD CONSTRAINT `korpa_putovanja_po_osobi_ibfk_2` FOREIGN KEY (`id_putovanje`) REFERENCES `putovanja` (`id_putovanja`);

--
-- Constraints for table `putovanja`
--
ALTER TABLE `putovanja`
  ADD CONSTRAINT `putovanja_ibfk_1` FOREIGN KEY (`destinacija_id`) REFERENCES `destinacije` (`id_destinacije`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
