-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2023 at 05:11 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bioskop`
--

-- --------------------------------------------------------

--
-- Table structure for table `list`
--

CREATE TABLE `list` (
  `no` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `durasi` time NOT NULL,
  `price` int(11) NOT NULL,
  `age_rate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `list`
--

INSERT INTO `list` (`no`, `judul`, `durasi`, `price`, `age_rate`) VALUES
(1, 'LA LA LAND', '02:08:00', 70000, '18A'),
(2, 'FINDING NEMO', '01:40:00', 70000, 'G'),
(3, 'FROZEN 2', '01:43:00', 70000, 'PG13'),
(4, 'SEPASANG ONIGIRI', '01:20:00', 55000, 'R'),
(5, 'SEKANTUNG PUKIS', '02:12:00', 60000, 'R'),
(6, 'SEKOTAK MEMORI', '00:00:00', 0, 'COMING SOON'),
(7, 'HUJAN DAN MAGUWOHARJO', '00:00:00', 0, 'COMING SOON');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
