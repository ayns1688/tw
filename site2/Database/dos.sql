-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 26, 2026 at 05:57 PM
-- Server version: 9.1.0
-- PHP Version: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `site`
--

-- --------------------------------------------------------

--
-- Table structure for table `dos`
--

DROP TABLE IF EXISTS `dos`;
CREATE TABLE IF NOT EXISTS `dos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `admin` tinyint(1) NOT NULL,
  `name` varchar(50) COLLATE utf8mb3_persian_ci NOT NULL,
  `username` varchar(50) COLLATE utf8mb3_persian_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb3_persian_ci NOT NULL,
  `city` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_persian_ci;

--
-- Dumping data for table `dos`
--

INSERT INTO `dos` (`id`, `admin`, `name`, `username`, `password`, `city`) VALUES
(1, 1, 'mostafa', 'ayns', '1688', 'najaf abad'),
(6, 0, 'mehdi', 'rezvan', '1234', 'rezvan city'),
(8, 0, 'mohammad', 'mmad', '8861', 'najaf abad');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
