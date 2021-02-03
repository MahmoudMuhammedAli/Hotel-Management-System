-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2020 at 01:59 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotelsys`
--

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `room` int(100) NOT NULL,
  `adult` int(100) NOT NULL,
  `date` date NOT NULL,
  `checked` tinyint(1) NOT NULL,
  `id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`name`, `email`, `phone`, `room`, `adult`, `date`, `checked`, `id`) VALUES
('mahmoud', 'mahmoud@gmail.com', '01142855662', 1, 3, '2020-12-21', 1, 1),
('mma', 'mma@gmAIL.COM', '01234567812', 2, 2, '2020-12-18', 1, 2),
('Abdallah', 'bedo17h@gmail.com', '01122774190', 1, 1, '2020-12-30', 1, 3),
('mashhor', 'mashhhhh@gmail.com', '0124775474764764', 5, 4, '2020-11-30', 1, 4),
('abdelrahman', 'abdelrahmanbebo082@gmail.com', '01065613666', 2, 3, '2020-12-30', 1, 5),
('', '', '', 0, 0, '0000-00-00', 1, 6),
('', '', '', 0, 0, '0000-00-00', 1, 7),
('', '', '', 0, 0, '0000-00-00', 1, 8);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `name` varchar(100) NOT NULL,
  `id` int(100) NOT NULL,
  `salary` int(100) NOT NULL,
  `age` int(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `bounes` int(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`name`, `id`, `salary`, `age`, `email`, `bounes`, `password`) VALUES
('Omar Mohamed', 115, 3500, 25, 'OmarMohamed@yahoo.com', 200, 'O2M3A2R'),
('Abdelaziz Mohamed', 135, 1500, 22, 'Abdel3azizMohamed@hotmail.com', 0, '3aziz'),
('Hady Ali', 164, 2500, 25, 'Hady@yahoo.com', 0, '13H45'),
('Mostafa Hazem', 200, 3000, 21, 'MostafaHAzem@gmail.com', 0, 'HaZeM'),
('Seif Heshmat', 217, 4500, 20, 'Tison@yahoo.com', 0, 'TISON21_7DWE'),
('Anas Khaled', 223, 1200, 19, 'AnasKhaled@gmail.com', 0, 'pOyKa'),
('Ziad Reda', 352, 400, 17, 'ZiadelGen@gmail.com', 100, 'elGEN Wa7d');

-- --------------------------------------------------------

--
-- Table structure for table `manger`
--

CREATE TABLE `manger` (
  `name` varchar(100) NOT NULL,
  `id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manger`
--

INSERT INTO `manger` (`name`, `id`) VALUES
('Abdelrahman Mohamed', 27),
('Yoseif Alaa', 127),
('Amr Wageh', 133),
('Mahmoud Ali', 239);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manger`
--
ALTER TABLE `manger`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
