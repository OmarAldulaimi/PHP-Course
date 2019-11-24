-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Värd: localhost
-- Tid vid skapande: 28 sep 2017 kl 18:34
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
-- Databas: `testdb`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `url` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumpning av Data i tabell `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `url`, `date`, `message`) VALUES
(1, 'John', 'Doe', 'john@example.com', '0000-00-00 00:00:00', 'GGG'),
(2, 'd', 'd', 'dd', '0000-00-00 00:00:00', 'd'),
(3, 'r', 'r', 'r', '0000-00-00 00:00:00', 'rr'),
(4, 'r', 'f', 'g', '0000-00-00 00:00:00', 'gg'),
(5, 'r', 'f', 'g', '0000-00-00 00:00:00', 'gg'),
(6, 'r', 'f', 'g', '0000-00-00 00:00:00', 'gg'),
(7, 'r', 'f', 'g', '0000-00-00 00:00:00', 'gg'),
(8, 'r', 'f', 'g', '0000-00-00 00:00:00', 'gg'),
(9, 'n', '', '', '0000-00-00 00:00:00', ''),
(10, 's', 's', 's', '0000-00-00 00:00:00', 's'),
(11, '', '', '', '0000-00-00 00:00:00', ''),
(12, '', '', '', '0000-00-00 00:00:00', ''),
(13, 'e', 'r', 'r', '0000-00-00 00:00:00', 'rr'),
(14, 'omar', 'aldulaimi', 'ww.hej.com', '0000-00-00 00:00:00', 'hejhej'),
(15, 'omar', 'sss@hotmail.com', 'a', '0000-00-00 00:00:00', 'hej pÃ¥ dig'),
(16, 'e', 'r', 'r', '0000-00-00 00:00:00', 'rrr'),
(17, 'etime', 'time', 'time', '2017-28-09 14:16:12', 'tttt'),
(18, '', '', '', '2017-28-09 14:18:29', ''),
(19, '', '', '', '2017-28-09 14:19:01', ''),
(20, '', '', '', '2017-28-09 14:24:01', ''),
(21, '', '', '', '2017-28-09 14:24:35', ''),
(22, '', '', '', '2017-28-09 14:27:17', ''),
(23, '', '', '', '2017-28-09 14:28:20', ''),
(24, '', '', '', '2017-28-09 14:32:11', ''),
(25, '', '', '', '2017-28-09 14:53:24', ''),
(26, '', '', '', '2017-28-09 14:54:11', ''),
(27, '', '', '', '2017-28-09 14:59:27', ''),
(28, '', 'hehejeh@hotmail', '', '2017-28-09 14:59:51', ''),
(29, '', 'hehejeh@hotmail', '', '2017-28-09 15:00:51', ''),
(30, '', 'hehejeh@hotmail', '', '2017-28-09 15:02:14', ''),
(31, '', 'hehejeh@hotmail', '', '2017-28-09 15:04:11', ''),
(32, '', 'hehejeh@hotmail', '', '2017-28-09 15:05:44', ''),
(33, '', 'hehejeh@hotmail', '', '2017-28-09 15:06:48', ''),
(34, 'Aldulaimi', 'sss@hotmail.com', 'www.google.com', '2017-28-09 15:07:16', 'hejhejtest');

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`) USING BTREE;

--
-- AUTO_INCREMENT för dumpade tabeller
--

--
-- AUTO_INCREMENT för tabell `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
