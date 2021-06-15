-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 15, 2021 at 02:56 AM
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
-- Database: `domaci_31`
--

-- --------------------------------------------------------

--
-- Table structure for table `djaci`
--

CREATE TABLE `djaci` (
  `broj_knjizice` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ime` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prezime` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `razred` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `odeljenje` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `djaci`
--

INSERT INTO `djaci` (`broj_knjizice`, `ime`, `prezime`, `razred`, `odeljenje`) VALUES
('13-2020', 'Ranko', 'Stojic', 'III', 5),
('14-2020', 'Janko', 'Veselinovic', 'II', 4);

-- --------------------------------------------------------

--
-- Table structure for table `ocene`
--

CREATE TABLE `ocene` (
  `id` int(11) NOT NULL,
  `broj_knjizice` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_predmet` int(20) NOT NULL,
  `ocena` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ocene`
--

INSERT INTO `ocene` (`id`, `broj_knjizice`, `id_predmet`, `ocena`) VALUES
(1, '14-2020', 1, 5),
(2, '14-2020', 2, 4),
(3, '13-2020', 1, 2),
(4, '13-2020', 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `predmeti`
--

CREATE TABLE `predmeti` (
  `id` int(20) NOT NULL,
  `naziv` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profesor` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `predmeti`
--

INSERT INTO `predmeti` (`id`, `naziv`, `profesor`) VALUES
(1, 'matematika', 'MT'),
(2, 'srpski', 'FF');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `djaci`
--
ALTER TABLE `djaci`
  ADD PRIMARY KEY (`broj_knjizice`);

--
-- Indexes for table `ocene`
--
ALTER TABLE `ocene`
  ADD PRIMARY KEY (`id`),
  ADD KEY `broj_knjizice` (`broj_knjizice`),
  ADD KEY `id_predmet` (`id_predmet`);

--
-- Indexes for table `predmeti`
--
ALTER TABLE `predmeti`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ocene`
--
ALTER TABLE `ocene`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ocene`
--
ALTER TABLE `ocene`
  ADD CONSTRAINT `ocene_ibfk_1` FOREIGN KEY (`broj_knjizice`) REFERENCES `djaci` (`broj_knjizice`),
  ADD CONSTRAINT `ocene_ibfk_2` FOREIGN KEY (`id_predmet`) REFERENCES `predmeti` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
