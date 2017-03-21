-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2017 at 02:24 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rajasthan-hackathon`
--

-- --------------------------------------------------------

--
-- Table structure for table `atbm`
--

CREATE TABLE `atbm` (
  `Bhamashah ID` varchar(7) NOT NULL,
  `HOF Name` varchar(100) NOT NULL,
  `Aadhar ID` varchar(50) NOT NULL,
  `State` text NOT NULL,
  `Bank Account Number` int(50) NOT NULL,
  `IFSC code` int(50) NOT NULL,
  `Property ID` varchar(50) NOT NULL,
  `Property Address` varchar(100) NOT NULL,
  `Prop Category` varchar(2) NOT NULL,
  `Property Tax Amount` int(10) NOT NULL,
  `Due Date for PT` date NOT NULL,
  `Income/ann` int(10) NOT NULL,
  `Due Date for IT` date NOT NULL,
  `Water units` int(10) NOT NULL,
  `Due Date for WT` date NOT NULL,
  `Electric Units` int(10) NOT NULL,
  `Due Date for ET` date NOT NULL,
  `Gas Units` int(10) NOT NULL,
  `Due Date for GT` date NOT NULL,
  `Authorisation Response` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `atbm`
--

INSERT INTO `atbm` (`Bhamashah ID`, `HOF Name`, `Aadhar ID`, `State`, `Bank Account Number`, `IFSC code`, `Property ID`, `Property Address`, `Prop Category`, `Property Tax Amount`, `Due Date for PT`, `Income/ann`, `Due Date for IT`, `Water units`, `Due Date for WT`, `Electric Units`, `Due Date for ET`, `Gas Units`, `Due Date for GT`, `Authorisation Response`) VALUES
('WDYYYGG', 'Humari', '88545554', 'Rajasthan', 554822415, 771452847, 'B146', 'Sarojini-nagar', 'A', 1500, '2017-05-02', 600000, '2017-08-03', 40, '2017-06-01', 500, '2017-09-02', 100, '2017-06-01', 'yes');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
