-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2022 at 08:19 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trainer`
--

-- --------------------------------------------------------

--
-- Table structure for table `trainer_details`
--

CREATE TABLE `trainer_details` (
  `id` int(11) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `day` varchar(255) NOT NULL,
  `MobileNumber` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trainer_details`
--

INSERT INTO `trainer_details` (`id`, `FirstName`, `LastName`, `day`, `MobileNumber`, `email`, `Address`) VALUES
(5, 'Shashini', 'Perera', '2022-05-18', '0788787765', 'it21279720@my.sliit.lk', 'Panadura, Sri Lanka.'),
(6, 'Shashini', 'Perera', '2022-05-18', '0788787765', 'it21279720@my.sliit.lk', 'Panadura, Sri Lanka.'),
(7, 'Shashini', 'Perera', '', '0788787765', 'sashini@gmail.com', 'Panadura, Sri Lanka.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `trainer_details`
--
ALTER TABLE `trainer_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `trainer_details`
--
ALTER TABLE `trainer_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
