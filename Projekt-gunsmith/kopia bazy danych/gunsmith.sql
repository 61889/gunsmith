-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2022 at 04:19 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gunsmith`
--

-- --------------------------------------------------------

--
-- Table structure for table `bronie`
--

CREATE TABLE `bronie` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(50) NOT NULL,
  `rpm` int(11) NOT NULL,
  `speed` int(11) NOT NULL,
  `time` float NOT NULL,
  `recoil` float NOT NULL,
  `recoil_2` float NOT NULL,
  `recoil_3` float NOT NULL,
  `m_1` float NOT NULL,
  `m_2` float NOT NULL,
  `m_3` float NOT NULL,
  `s_1` float NOT NULL,
  `s_2` float NOT NULL,
  `s_3` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bronie`
--

INSERT INTO `bronie` (`id`, `nazwa`, `rpm`, `speed`, `time`, `recoil`, `recoil_2`, `recoil_3`, `m_1`, `m_2`, `m_3`, `s_1`, `s_2`, `s_3`) VALUES
(1, 'PP-29', 649, 520, 1.96, 0.42, 0.2, 0.2, 0.12, 0.1, 0.9, 0.12, 0.1, 0.9),
(2, 'PBX-45', 799, 400, 3.1, 0.32, 0.2, 0.2, 0.28, 0.26, 0.25, 0.13, 0.11, 0.1),
(3, 'MP9', 899, 340, 2.23, 0.36, 0.05, 0.15, 0.29, 0.27, 0.26, 0.14, 0.12, 0.11),
(4, 'K30', 1099, 420, 2, 0.34, -0.2, 0.2, 0.3, 0.28, 0.26, 0.15, 0.13, 0.11);

-- --------------------------------------------------------

--
-- Table structure for table `uzytkownicy`
--

CREATE TABLE `uzytkownicy` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uzytkownicy`
--

INSERT INTO `uzytkownicy` (`id`, `user`, `pass`) VALUES
(1, 'Andrzej', 'zaq12wsx'),
(2, 'Fjuczer', 'zaq12wsx'),
(3, 'maksiu', 'zaq12wsx'),
(4, 'maksiu25', 'zaq12wsx'),
(5, 'ferdek', 'zaq12wsx'),
(6, 'waldus', 'zaq12wsx'),
(7, 'olimpik', 'zaq12wsx'),
(8, 'michal', 'zaq12wsx'),
(9, 'Dziewio', 'zaq12wsx'),
(10, 'Zygmunt', 'zaq12wsx'),
(11, 'Alfred', 'zaq12wsx'),
(12, 'Patryk', 'zaq12wsx');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bronie`
--
ALTER TABLE `bronie`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bronie`
--
ALTER TABLE `bronie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
