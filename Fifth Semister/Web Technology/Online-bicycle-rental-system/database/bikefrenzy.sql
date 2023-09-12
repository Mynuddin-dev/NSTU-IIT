-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2020 at 05:00 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bikefrenzy`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', '111111');

-- --------------------------------------------------------

--
-- Table structure for table `bicycle_for_rent`
--

CREATE TABLE `bicycle_for_rent` (
  `id` int(11) NOT NULL,
  `name` varchar(1500) NOT NULL,
  `model` varchar(1500) NOT NULL,
  `image` varchar(1500) NOT NULL,
  `price` varchar(1500) NOT NULL,
  `mobile` varchar(1500) NOT NULL,
  `description` varchar(1500) NOT NULL,
  `map_link` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `bicycle_for_rent`
--

INSERT INTO `bicycle_for_rent` (`id`, `name`, `model`, `image`, `price`, `mobile`, `description`, `map_link`) VALUES
(7, 'testing', '08839832193', 'shopping.png', '15', '08839832193', 'test', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29326.330159050216!2d77.43463077661104!3d23.250681481526588!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x397c426e78ba1c63%3A0x4437b0a76afb7bc5!2sBHEL%20Ground!5e0!3m2!1sen!2sin!4v1599023817768!5m2!1sen!2sin'),
(9, 'testing', '32001', 'shopping.png', '20', '+918839832193', 'testing testing', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29326.330159050216!2d77.43463077661104!3d23.250681481526588!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x397c426e78ba1c63%3A0x4437b0a76afb7bc5!2sBHEL%20Ground!5e0!3m2!1sen!2sin!4v1599023817768!5m2!1sen!2sin');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `name` varchar(1500) NOT NULL,
  `mobile` varchar(1500) NOT NULL,
  `email` varchar(1500) NOT NULL,
  `date` varchar(1500) NOT NULL,
  `hour` varchar(1500) NOT NULL,
  `price` varchar(1500) NOT NULL,
  `rider` varchar(1500) NOT NULL,
  `total_price` varchar(1500) NOT NULL,
  `bicycleid` int(11) NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `name`, `mobile`, `email`, `date`, `hour`, `price`, `rider`, `total_price`, `bicycleid`, `userid`) VALUES
(6, 'Harsh Pawar', '8602345531', 'hpawar59@gmail.com', '1998-03-30', '7', '150', '1', '1550', 2, 7),
(7, 'hp', '123456465', 'new@gmail.com', '2000-12-12', '7', '150', '1', '1550', 3, 7),
(8, 'anshu', '08839832193', 'anshubaghel13jun97@gmail.com', '2020-09-03', '3', '20', '0', '135', 8, 8),
(9, 'anshu', '08839832193', 'anshubaghel13jun97@gmail.com', '2020-09-18', '3', '25', '0', '135', 9, 8);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `booking_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `booking_id`, `amount`) VALUES
(4, 5, 1550),
(5, 6, 1550),
(6, 7, 1550),
(7, 8, 135),
(8, 9, 135),
(9, 9, 135),
(10, 10, 135);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `mobile` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `email`, `mobile`, `password`) VALUES
(7, 'Harsh Pawar', 'hpawar59@gmail.com', '8602345531', '123456'),
(8, 'anshu', 'anshubaghel13jun97@gmail.com', '08839832193', '111111'),
(9, 'anshu', 'anshu@gmail.com', '08839832193', '111111');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bicycle_for_rent`
--
ALTER TABLE `bicycle_for_rent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `bicycle_for_rent`
--
ALTER TABLE `bicycle_for_rent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
