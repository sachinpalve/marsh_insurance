-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2022 at 03:19 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `marsh`
--

-- --------------------------------------------------------

--
-- Table structure for table `policy_info`
--

CREATE TABLE `policy_info` (
  `id` int(11) NOT NULL,
  `first_name` varchar(64) NOT NULL,
  `last_name` varchar(64) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `policy_number` varchar(20) NOT NULL,
  `premium` decimal(9,0) NOT NULL,
  `status` varchar(20) NOT NULL,
  `created_date` date NOT NULL,
  `updated_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


--
-- Indexes for table `policy_info`
--
ALTER TABLE `policy_info`
  ADD PRIMARY KEY (`id`);


--
-- AUTO_INCREMENT for table `policy_info`
--
ALTER TABLE `policy_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;



--
-- Dumping data for table `policy_info`
--

INSERT INTO `policy_info` (`id`, `first_name`, `last_name`, `start_date`, `end_date`, `policy_number`, `premium`, `status`, `created_date`, `updated_date`) VALUES
(1, 'Sachin', 'Palve', '2022-09-01', '2022-08-30', '202209010001', '999', '', '2022-09-08', '2022-09-08'),
(2, 'Ramesh', 'Singh', '2022-09-01', '2022-08-30', '202209010002', '5999', '', '2022-09-08', '2022-09-08'),
(3, 'Vijay', 'P', '2022-09-01', '2022-08-30', '202209010003', '5999', '', '2022-09-08', '2022-09-08'),
(4, 'Sanjay', 'Gandhi', '2022-09-08', '2022-09-07', '202209010004', '5999', '', '2022-09-08', '2022-09-08'),
(5, 'Rakesh', 'Gandhi', '2022-09-09', '2022-09-08', '202209010005', '5999', '', '2022-09-08', '2022-09-08');

-- --------------------------------------------------------


