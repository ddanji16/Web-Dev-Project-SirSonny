-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2025 at 10:29 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `catbadb`
--

-- --------------------------------------------------------

--
-- Table structure for table `catba`
--

CREATE TABLE `catba` (
  `id` int(11) NOT NULL,
  `names` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `createpassword` varchar(50) NOT NULL,
  `confirmpassword` varchar(50) NOT NULL,
  `usertype` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `catba`
--

INSERT INTO `catba` (`id`, `names`, `email`, `createpassword`, `confirmpassword`, `usertype`) VALUES
(2, 'ahisdjaslkdjas', 'anthonydelac1602@gmail.com', '123', '123', '0'),
(3, 'AHAHHHAHAHAHAHHHHH', 'anthonydel602@gmail.com', '1', '1', '1'),
(4, 'mark', 'anthonydelac1602@gmail.com', '123', '123', '1'),
(5, 'awww', 'anthonydelac1602@gmail.com', '123', '123', '1'),
(6, 'dan', 'anthonydelac1602@gmail.com', '123', '123', '0'),
(7, 'a', 'anthonydelac1602@gmail.com', '123', '123', '1'),
(8, 'jade', 'jade@gmail.com', '11', '11', '1'),
(9, 'joshua', 'anthonydelac1602@gmail.com', '123', '123', '1'),
(10, 'basker', 'basker@gmail.com', '321', '321', '0'),
(12, 'bea', 'bea@gmail.com', '30', '30', '1'),
(13, 'sam', 'sam@gmail.com', '0101', '0101', '1'),
(14, 'daniel anthony dela cruz', 'dan@gmail.com', '123', '123', '0'),
(15, 'daniel anthony dela cruz', 'anthonydelac1602@gmail.com', '123', '123', '1'),
(16, 'ayeassha', 'sireeanya26@gmail.com', '321', '321', '1'),
(17, 'gusion', 'slow@gmail.com', 'haha123', 'haha123', '1'),
(18, 'james', 'james@gamail.com', 'chatgpt', 'chatgpt', '1'),
(19, 'cassanndra', 'cassandra@gmail.com', '30', '30', '1'),
(20, 'dan', 'anthonydelac1602@gmail.com', '123', '123', '0'),
(21, 'dam', 'anthonydelac1602@gmail.com', '123', '123', '1'),
(22, 'dan', 'anthonydelac1602@gmail.com', '123', '123', '0'),
(23, 'alucard', 'alu@gmail.com', '123', '123', '1'),
(24, 'dan', 'anthonydelac1602@gmail.com', '123', '123', '0'),
(25, 'sun', 'sun@yahoo.com', '123', '123', '1'),
(26, 'del', 'anthonydelac1602@gmail.com', '123', '123', '0'),
(27, 'yanie', 'yanie@cute.com', '123', '123', '1'),
(28, 'daniel anthony dela cruz', 'anthonydelac1602@gmail.com', '123', '123', '1'),
(29, 'dan', 'anthonydelac1602@gmail.com', '123', '123', '1'),
(30, 'dan', 'anthonydelac1602@gmail.com', '123', '123', '1'),
(31, 'luffy', 'luffy@fb.com', '123', '123', '1'),
(32, 'win', 'win@gmail.com', '123', '123', '1'),
(33, 'daniel anthony dela cruz', 'anthonydelac1602@gmail.com', '123', '123', '1'),
(34, 'daniel anthony dela cruz', 'anthonydelac1602@gmail.com', '123', '123', '0'),
(35, 'daniel anthony dela cruz', 'anthonydelac1602@gmail.com', '123', '123', '1'),
(36, 'france', 'france@cute.com', '123', '123', '1'),
(37, 'danski', 'dan@gmail.com', '123', '123', '1'),
(38, 'daniel anthony dela cruz', 'anthonydelac1602@gmail.com', '123', '123', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catba`
--
ALTER TABLE `catba`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `catba`
--
ALTER TABLE `catba`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
