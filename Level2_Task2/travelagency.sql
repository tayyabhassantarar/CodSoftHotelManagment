-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2023 at 08:05 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travelagency`
--

-- --------------------------------------------------------

--
-- Table structure for table `car_hire`
--

CREATE TABLE `car_hire` (
  `id` int(11) NOT NULL,
  `car_model` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `pick_up_date` date NOT NULL,
  `drop_off_date` date NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `available_cars` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `car_hire`
--

INSERT INTO `car_hire` (`id`, `car_model`, `city`, `pick_up_date`, `drop_off_date`, `price`, `available_cars`) VALUES
(1, '2012', 'lahore', '2023-08-06', '2023-08-14', '356.00', 4);

-- --------------------------------------------------------

--
-- Table structure for table `flights`
--

CREATE TABLE `flights` (
  `id` int(11) NOT NULL,
  `airline` varchar(100) NOT NULL,
  `departure_city` varchar(100) NOT NULL,
  `arrival_city` varchar(100) NOT NULL,
  `departure_date` date NOT NULL,
  `arrival_date` date NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `available_seats` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `flights`
--

INSERT INTO `flights` (`id`, `airline`, `departure_city`, `arrival_city`, `departure_date`, `arrival_date`, `price`, `available_seats`) VALUES
(1, 'Airblue', 'lahore', 'karachi', '2023-08-08', '2023-08-08', '4500.00', 2),
(2, 'Airblue', 'Lahore', 'Karachi', '2023-08-18', '2023-08-24', '2340.00', 5);

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE `hotels` (
  `id` int(11) NOT NULL,
  `hotel_name` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `check_in_date` date NOT NULL,
  `check_out_date` date NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `available_rooms` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`id`, `hotel_name`, `city`, `check_in_date`, `check_out_date`, `price`, `available_rooms`) VALUES
(1, 'sdfa', 'lahore', '2023-08-22', '2023-08-23', '32.00', 23),
(2, 'hadf', 'lahore', '2023-08-24', '2023-08-10', '234.00', 5),
(3, 'hadf', 'lahore', '2023-08-24', '2023-08-10', '234.00', 5),
(4, 'hadf', 'lahore', '2023-08-24', '2023-08-10', '234.00', 5),
(5, 'hadf', 'lahore', '2023-08-24', '2023-08-10', '234.00', 5),
(6, 'hadf', 'lahore', '2023-08-24', '2023-08-10', '234.00', 5),
(7, 'hadf', 'lahore', '2023-08-24', '2023-08-10', '234.00', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `car_hire`
--
ALTER TABLE `car_hire`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flights`
--
ALTER TABLE `flights`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `car_hire`
--
ALTER TABLE `car_hire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `flights`
--
ALTER TABLE `flights`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
