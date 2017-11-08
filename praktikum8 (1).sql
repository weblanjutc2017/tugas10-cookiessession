-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2017 at 04:12 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `praktikum8`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(3) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`) VALUES
(1, 'JOTAS', 'PASS', 'user'),
(2, 'JOTAS', 'WEW', 'admin'),
(3, 'JOTAS', 'PASS', 'user'),
(4, 'JOTAS', 'WEW', 'user'),
(7, 'JOTAS', 'sdada', 'user'),
(8, 'JOTAS', 'PASS', 'user'),
(9, 'JOTAS', 'aasas', 'user'),
(10, 'JOTAS', 'qdqd', 'admin'),
(11, 'JOTAS', 'wdwd', 'user'),
(12, 'JOTAS', 'asaAS', 'user'),
(13, '', '', ''),
(14, 'JOTAS', 'sdsd', 'user'),
(15, 'JOTAS', 'aqsqasaqs', 'user'),
(16, 'JOTAS', 'aqsqasaqs', 'user'),
(17, 'JOTAS', 'SASAS', 'user'),
(18, 'JOTAS', 'SASAS', 'user'),
(19, 'JOTAS', 'NNNN', 'user'),
(20, 'JOTAS', 'aasa', 'user'),
(21, 'JOTAS', 'xssdd', 'user'),
(22, 'JOTAS', 'dsdsdsd', 'user'),
(23, 'JOTAS', 'jz', 'user'),
(24, 'JOTAS', 'jsdsdsd', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
