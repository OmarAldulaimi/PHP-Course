-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Värd: localhost
-- Tid vid skapande: 30 sep 2017 kl 10:59
-- Serverversion: 10.1.26-MariaDB
-- PHP-version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databas: `hej`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `table_product2`
--

CREATE TABLE `table_product2` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` blob NOT NULL,
  `price` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumpning av Data i tabell `table_product2`
--

INSERT INTO `table_product2` (`id`, `name`, `image`, `price`) VALUES
(8, 'Samsung S4', 0x72737a5f73616d73756e6773342e6a7067, 2000),
(15, 'Samsung S7', 0x72737a5f73616d73756e6773372e6a7067, 5000);

-- --------------------------------------------------------

--
-- Tabellstruktur `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(200) NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumpning av Data i tabell `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `name`, `image`, `price`) VALUES
(31, 'IPHONE X', 'rsz_i.jpg', 8000.00),
(27, 'IPHONE 5', 'rsz_iphone5.jpg', 4500.00),
(28, 'IPHONE 7', 'rsz_iphone7.jpg', 6000.00);

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `table_product2`
--
ALTER TABLE `table_product2`
  ADD PRIMARY KEY (`id`);

--
-- Index för tabell `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT för dumpade tabeller
--

--
-- AUTO_INCREMENT för tabell `table_product2`
--
ALTER TABLE `table_product2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT för tabell `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
