-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2024 at 09:57 AM
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
-- Database: `coffee`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `password`) VALUES
('morneeraj06@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(6) NOT NULL,
  `name` varchar(255) NOT NULL,
  `cost` int(6) NOT NULL,
  `quantity` int(6) NOT NULL,
  `subtotal` int(6) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `name`, `cost`, `quantity`, `subtotal`, `photo`, `email`) VALUES
(9, 'chocolate coffee', 1000, 3, 3000, 'coffee7.webp', ''),
(14, 'Hazelnut', 15000, 1, 15000, 'coffee7.webp', '1'),
(13, 'Vanilla', 1200, 2, 2400, 'coffee8.webp', 'neerajmor8684@gmail.com'),
(12, 'Chocolate', 1000, 1, 1000, 'coffee9.webp', 'neerajmor8684@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `item_list`
--

CREATE TABLE `item_list` (
  `id` int(6) NOT NULL,
  `name` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `detail` varchar(255) NOT NULL,
  `cost` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `item_list`
--

INSERT INTO `item_list` (`id`, `name`, `photo`, `detail`, `cost`) VALUES
(12, 'Chocolate', 'coffee9.webp', 'Get 50% off', '1000'),
(13, 'Vanilla', 'coffee8.webp', 'Get 50% off', '1200'),
(14, 'Hazelnut', 'coffee7.webp', 'Get 50% off', '15000'),
(15, 'Coconut', 'coffee6.webp', 'Get 50% off', '2000');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`email`, `password`) VALUES
('neerajmor8684@gmail.com', '12345'),
('neerajmor8684@gmail.com', '12345'),
('neerajmor8684@gmail.com', '12345'),
('neerajmor8684@gmail.com', '12345'),
('neerajmor8684@gmail.com', '12345'),
('neerajmor8684@gmail.com', '12345'),
('neerajmor8684@gmail.com', '12345'),
('neerajmor8684@gmail.com', '12345'),
('neerajmor8684@gmail.com', '12345'),
('neerajmor8684@gmail.com', '12345'),
('morneeraj06@gmail.com', '12345'),
('neerajmor8684@gmail.com', '12345'),
('neerajmor8684@gmail.com', '0000'),
('neerajmor8684@gmail.com', '0000'),
('morneeraj06@gmail.com', '123'),
('neerajmor8684@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `password1` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`email`, `password`, `password1`) VALUES
('neerajmor8684@gmail.com', '12345', '12345'),
('morneeraj06@gmail.com', '12345', '12345'),
('neerajmor8684@gmail.com', '0000', '0000'),
('morneeraj06@gmail.com', '123', '123'),
('neerajmor8684@gmail.com', '1234', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `item_list`
--
ALTER TABLE `item_list`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `item_list`
--
ALTER TABLE `item_list`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
