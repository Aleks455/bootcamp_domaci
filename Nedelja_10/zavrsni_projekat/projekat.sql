-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 01, 2021 at 08:36 PM
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
-- Database: `projekat`
--

-- --------------------------------------------------------

--
-- Table structure for table `korpa`
--

CREATE TABLE `korpa` (
  `id_k` int(11) NOT NULL,
  `id_kupca` int(11) NOT NULL,
  `ukupna_cena` decimal(7,2) NOT NULL,
  `vreme` timestamp NOT NULL DEFAULT current_timestamp(),
  `adresa_isporuke` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kupac`
--

CREATE TABLE `kupac` (
  `id_kupca` int(5) NOT NULL,
  `ime` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prezime` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresa` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kupac`
--

INSERT INTO `kupac` (`id_kupca`, `ime`, `prezime`, `email`, `pass`, `adresa`) VALUES
(1, 'Ivan', 'Perisic', 'ivan.perisic@gmail.com', 'shifra1', 'Svetozara Markovica 5, Beograd'),
(2, 'Marko', 'Stanisic', 'marko.stanisic@gmail.com', 'shifra2', 'Lomina 8, Beograd'),
(3, 'Tijana', 'Markovic', 'tijana.markovic@gmail.com', 'shifra3', 'Omladinskih brigada 19/2, Beograd'),
(9, 'Marko', 'Markovic', 'marko.markovic@gmail.com', 'Shifra5', 'Vrtlarska 4, Beograd');

-- --------------------------------------------------------

--
-- Table structure for table `proizvodi`
--

CREATE TABLE `proizvodi` (
  `id_proizvoda` int(11) NOT NULL,
  `ime` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `naslov` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cena` decimal(7,2) NOT NULL,
  `slika` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grupa` enum('women','men') COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategorija` enum('w_shirts','jeans','dresses','m_shirts','trousers','shorts') COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `proizvodi`
--

INSERT INTO `proizvodi` (`id_proizvoda`, `ime`, `naslov`, `cena`, `slika`, `grupa`, `kategorija`) VALUES
(124, 'Oriental shirt', 'csdcsd ', '23532.00', '../images/products/women/w_shirts/shirt2.jpeg ', 'women', 'w_shirts'),
(999, 'MSHgs', 'MSHlfa', '5244.00', '../images/products/man/shorts/m_shorts2.jpeg', 'men', 'shorts'),
(2342, 'ffdsfa', 'sfsdf ', '25235.00', '../images/products/women/w_shirts/shirt1.jpeg ', 'women', 'w_shirts'),
(3124, 'MT', 'MT', '3452.00', '../images/products/man/trousers/m_trousers1.jpeg', 'men', 'trousers'),
(3452, 'WD', 'WD', '34532.00', '../images/products/women/dresses/dress1.jpeg', 'women', 'dresses'),
(4563, 'WJsa', 'WJscs', '2425.00', '../images/products/women/w_jeans/jeans5.jpeg', 'women', 'jeans'),
(5345, 'WJ', 'WJ', '4532.00', '../images/products/women/w_jeans/jeans1.jpeg', 'women', 'jeans'),
(5555, 'MTsfjh', 'MTdajsh', '23252.00', '../images/products/man/trousers/m_trousers2.jpeg', 'men', 'trousers'),
(34523, 'WD', 'WD', '5234.00', '../images/products/women/dresses/dress2.jpeg', 'women', 'dresses'),
(34534, 'sdfsdfs\'asdf', 'fsdfs\'sdf', '345.00', '../images/products/women/w_shirts/shirt3.jpeg', 'women', 'jeans');

-- --------------------------------------------------------

--
-- Table structure for table `stavke_korpe`
--

CREATE TABLE `stavke_korpe` (
  `id` int(11) NOT NULL,
  `id_korpe` int(11) NOT NULL,
  `id_proizvoda` int(11) NOT NULL,
  `cena` decimal(7,2) NOT NULL,
  `kolicina` int(11) DEFAULT 1,
  `popust` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `korpa`
--
ALTER TABLE `korpa`
  ADD PRIMARY KEY (`id_k`),
  ADD KEY `id_kupca` (`id_kupca`);

--
-- Indexes for table `kupac`
--
ALTER TABLE `kupac`
  ADD PRIMARY KEY (`id_kupca`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `proizvodi`
--
ALTER TABLE `proizvodi`
  ADD PRIMARY KEY (`id_proizvoda`);

--
-- Indexes for table `stavke_korpe`
--
ALTER TABLE `stavke_korpe`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_proizvoda` (`id_proizvoda`),
  ADD KEY `id_korpe` (`id_korpe`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `korpa`
--
ALTER TABLE `korpa`
  MODIFY `id_k` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kupac`
--
ALTER TABLE `kupac`
  MODIFY `id_kupca` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `stavke_korpe`
--
ALTER TABLE `stavke_korpe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `korpa`
--
ALTER TABLE `korpa`
  ADD CONSTRAINT `korpa_ibfk_1` FOREIGN KEY (`id_kupca`) REFERENCES `kupac` (`id_kupca`);

--
-- Constraints for table `stavke_korpe`
--
ALTER TABLE `stavke_korpe`
  ADD CONSTRAINT `stavke_korpe_ibfk_2` FOREIGN KEY (`id_proizvoda`) REFERENCES `proizvodi` (`id_proizvoda`),
  ADD CONSTRAINT `stavke_korpe_ibfk_3` FOREIGN KEY (`id_korpe`) REFERENCES `korpa` (`id_k`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
