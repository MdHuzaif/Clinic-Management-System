-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2019 at 08:14 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hmsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctoradd`
--

CREATE TABLE `doctoradd` (
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctoradd`
--

INSERT INTO `doctoradd` (`name`) VALUES
('abdullah');

-- --------------------------------------------------------

--
-- Table structure for table `doctorapp`
--

CREATE TABLE `doctorapp` (
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `email` varchar(500) NOT NULL,
  `contact` varchar(500) NOT NULL,
  `docapp` text NOT NULL,
  `appdate` date NOT NULL,
  `payment` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctorapp`
--

INSERT INTO `doctorapp` (`fname`, `lname`, `email`, `contact`, `docapp`, `appdate`, `payment`) VALUES
('ssf', 'dcd', 'sfs@gmail.com', '43456', 'abdullah', '2019-06-18', 'paid'),
('sifat', 'ahmed', 'sfs@gmail.com', '1234', 'abdullah', '2019-06-18', 'paid');

-- --------------------------------------------------------

--
-- Table structure for table `logintb`
--

CREATE TABLE `logintb` (
  `username` text NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logintb`
--

INSERT INTO `logintb` (`username`, `password`) VALUES
('enan', '170241');

-- --------------------------------------------------------

--
-- Table structure for table `medicines`
--

CREATE TABLE `medicines` (
  `dname` text NOT NULL,
  `dcontact` varchar(500) NOT NULL,
  `cash` varchar(500) NOT NULL,
  `dealerdue` varchar(500) NOT NULL,
  `dpdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicines`
--

INSERT INTO `medicines` (`dname`, `dcontact`, `cash`, `dealerdue`, `dpdate`) VALUES
('efee', '1234', '5000', '4000', '2019-06-07');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
