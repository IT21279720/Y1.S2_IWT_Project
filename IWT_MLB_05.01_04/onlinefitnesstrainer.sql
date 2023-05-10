-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2022 at 07:51 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlinefitnesstrainer`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `payment_details`
--

CREATE TABLE `payment_details` (
  `Card_Holder` varchar(50) NOT NULL,
  `Card_Number` varchar(20) NOT NULL,
  `Country` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `City` varchar(50) NOT NULL,
  `Zip_Code` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment_details`
--

INSERT INTO `payment_details` (`Card_Holder`, `Card_Number`, `Country`, `Address`, `City`, `Zip_Code`) VALUES
('fsadsadas', '132134124123131', 'Australia', 'asdasdasdas', 'asdasdasdasda', '132131');

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

CREATE TABLE `shop` (
  `id` int(11) NOT NULL,
  `item_name` varchar(30) NOT NULL,
  `item_price` double(10,2) NOT NULL,
  `category` char(10) NOT NULL,
  `image_dir` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shop`
--

INSERT INTO `shop` (`id`, `item_name`, `item_price`, `category`, `image_dir`) VALUES
(1, 'Threadmill', 350.00, 'equipment', '../images/threadmill.png'),
(2, 'WHEY Supplement', 100.00, 'supplement', '../images/whey.png'),
(3, 'Dumbbell', 49.99, 'equipment', '../images/dumbbell.png'),
(4, 'Sneaker Shoe (Green)', 25.00, 'wearable', '../images/sneakersgreen.png'),
(5, 'Sneaker Shoe (Red)', 19.99, 'wearable', '../images/sneakersred.png'),
(6, 'Nike GYM Short', 17.50, 'wearable', '../images/short.png'),
(7, 'Creatine Supplement', 150.00, 'supplement', '../images/greensup.png'),
(8, 'Sport Bra (Black)', 20.00, 'wearable', '../images/bra.png'),
(9, 'Addidas Sport Jean', 24.50, 'wearable', '../images/longjean.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `fullName` varchar(20) NOT NULL,
  `mobile` char(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `fullName`, `mobile`, `email`, `dob`) VALUES
(1, 'Janiya', '12345', 'Janith Takshila', '0714621314', 'ama@gmail.com', '2000-05-26'),
(3, 'Krish', '12345', 'Krishna Wanusha', '0767672862', 'it21277436@my.sliit.lk', '2000-05-07'),
(13, 'udara', 'abcd', 'Udara', '0941412312', 'udara@gmail.com', '2022-05-09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `payment_details`
--
ALTER TABLE `payment_details`
  ADD PRIMARY KEY (`Card_Number`);

--
-- Indexes for table `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `shop`
--
ALTER TABLE `shop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
