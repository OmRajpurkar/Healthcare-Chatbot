-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 07, 2019 at 07:12 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `HealthcareChatbot`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `full_name` varchar(20) NOT NULL,
  `email_id` varchar(35) NOT NULL,
  `mobile_no` bigint(10) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`full_name`, `email_id`, `mobile_no`, `password`) VALUES
('abcd', 'abcd@spit.ac.in', 7738916989, 'b0a02ae67cedbaddfc5a2fab3'),
('Madhusudan Rajpurkar', 'iesmadusudan@gmail.com', 9819303066, '9819303066'),
('Jayram Nandagiri', 'jayram.nandagiri@spit.ac.in', 7738916989, 'a727c9c5672b92b90552ea769'),
('Om Rajpurkar', 'om.sam1999@gmail.com', 9619695656, 'a727c9c5672b92b90552ea769'),
('Om Rajpurkar', 'om.sam@gmail.com', 9819303066, 'Gta19@99');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
