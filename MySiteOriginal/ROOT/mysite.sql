-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 21, 2026 at 08:33 AM
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
-- Database: `mysite`
--

-- --------------------------------------------------------

--
-- Table structure for table `dfd`
--

DROP TABLE IF EXISTS `dfd`;
CREATE TABLE IF NOT EXISTS `dfd` (
  `id` int NOT NULL AUTO_INCREMENT,
  `admin` tinyint(1) NOT NULL,
  `name` varchar(50) COLLATE utf8mb3_persian_ci NOT NULL,
  `username` varchar(50) COLLATE utf8mb3_persian_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb3_persian_ci NOT NULL,
  `try password` varchar(50) COLLATE utf8mb3_persian_ci NOT NULL,
  `city` varchar(50) COLLATE utf8mb3_persian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_persian_ci;

--
-- Dumping data for table `dfd`
--

INSERT INTO `dfd` (`id`, `admin`, `name`, `username`, `password`, `try password`, `city`) VALUES
(10, 1, 'ayns', '123', '123', 'najaf abad', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
