-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2020 at 06:33 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `birzelis2121`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `text`) VALUES
(9, 'Ačiū, kad pasisavinote mūsų pinigus.'),
(10, 'Nelaimėjau jokio ipone. '),
(11, 'Po pasidalinimo bankine informacija su jumis, netekau savo fondo sūnui patekusiam į avariją. Sūnaus neturiu'),
(12, 'Informacija katik suvedzeuw. lawkju ipone');

-- --------------------------------------------------------

--
-- Table structure for table `scamers`
--

CREATE TABLE `scamers` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `email` text NOT NULL,
  `bankid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `scamers`
--

INSERT INTO `scamers` (`id`, `name`, `email`, `bankid`) VALUES
(138, 'Dalina Piniginskiene', 'arabemyrat@gmail.com', 'LT1516483188846'),
(139, 'Piniguotas Katinas', 'pinigukalnas@yahoo.com', 'GB154779978135'),
(140, 'Robinas Hudas', 'visiemIrDaug@one.lt', 'LT146846483158'),
(141, 'Mociute', 'reketininkuFondas@gmail.com', 'LT16546816153 PIN:123'),
(142, 'Virgelis', 'noriuIpone@gmail.com', 'LT1155464846648643');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `scamers`
--
ALTER TABLE `scamers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `scamers`
--
ALTER TABLE `scamers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
