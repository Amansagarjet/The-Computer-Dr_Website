-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2020 at 01:43 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thecomputersdr`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contact` bigint(10) DEFAULT NULL,
  `city` varchar(255) NOT NULL,
  `service` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `name`, `email`, `contact`, `city`, `service`, `message`) VALUES
(17118003, 'Aman sagar', 'Amansagarjet@mail.com', 7037323632, '', '', ''),
(17118004, 'Ram Singh', 'Ram@gmail.com', 7037323632, '', '', ''),
(17118005, 'Ram Singh', 'Ram@gmail.com', 7037323632, '', '', ''),
(17118006, 'Aman sagar', 'Aman@gmail.com', 7037323632, 'Thakurdwara', 'Virus Problem', 'HEY!');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Contact` bigint(10) NOT NULL,
  `City` varchar(255) NOT NULL,
  `Service` varchar(255) NOT NULL,
  `Message` text NOT NULL,
  `Status` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `Name`, `Email`, `Contact`, `City`, `Service`, `Message`, `Status`) VALUES
(1, 'Aman sagar', 'Amansagarjet@gmail.com', 7037323632, 'Thakurdwara', 'Laptop', 'Plzz Come Soon', 'y'),
(2, 'Kapil', 'Kapilsagarjet@gmail.com', 9012267671, 'Chandausi', 'Printer', 'Plz Solve This', ''),
(3, 'Aman sagar', 'Aman@gmail.com', 7037323632, 'Thakurdwara', 'Virus Problem', 'HEY!', ''),
(4, 'Happy sagar', 'Happyvines@gmail.com', 7037323632, 'Ratupura', 'Web designing & Development', 'Solve This Fast!', ''),
(5, 'Gajendrda singh', 'Gajendra@gmail.com', 9568654516, 'Chandausi', 'Annual Maintenance', 'Come Fast!', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17118007;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
