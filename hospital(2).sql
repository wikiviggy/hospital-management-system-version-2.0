-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 09, 2018 at 07:16 AM
-- Server version: 5.5.57-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `contact_id` int(3) NOT NULL DEFAULT '0',
  `contact_name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `contact_name`) VALUES
(1, 'https://www.facebook.com/TheApolloHospitals/'),
(2, 'https://twitter.com/HospitalsApollo'),
(3, 'https://github.com/wikiviggy'),
(4, 'https://www.linkedin.com/company/15053/');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE IF NOT EXISTS `doctor` (
  `name` varchar(20) NOT NULL DEFAULT '',
  `spc` varchar(20) DEFAULT NULL,
  `time` varchar(20) DEFAULT NULL,
  `days` varchar(30) DEFAULT NULL,
  `doc_id` int(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`doc_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`name`, `spc`, `time`, `days`, `doc_id`) VALUES
('David solanki', 'radiologist', '8.00 AM to 9.00 PM', 'Thursday only', 1),
('Hemanth karkare', 'Diabetologist', '9.00 AM to 8.00 PM', 'Tuesday and Friday', 2),
('John D souza', 'cardiologist', '8.00 AM to 9.00 PM', 'All days except sunday', 3),
('Malini devendra', 'physiotherapist', '9.00 AM to 8.00 PM', 'Monday-Friday', 4),
('Naresh shekar', 'psychiatrist', '8.00 AM to 8.00 PM', 'Tuesday-Thursday', 5),
('rajan nair', 'paediatrician', '7.00 AM to 8.00 PM', 'Monday-Friday', 6),
('Sajid agarwal', 'chief doctor', '8.00 AM to 9.00 PM', 'Monday-Saturday', 7),
('Sheela manoj', 'Gyaenacologist', '9.00 AM to 8.00 PM', 'Tuesday-Saturday', 8),
('Suresh babu', 'gastroentrologist', '8.00 AM to 9.00 PM', 'Mon,Wed,Fri', 9);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `patient_id` int(3) NOT NULL DEFAULT '0',
  `feedback` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`patient_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`patient_id`, `feedback`) VALUES
(1, 'A great experience with an enhanced emergency ambulance availability. Really impressed with apollo'),
(2, 'The services were decent');

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE IF NOT EXISTS `marks` (
  `username` varchar(100) NOT NULL DEFAULT '',
  `password` varchar(100) DEFAULT NULL,
  `subject_A` int(3) DEFAULT NULL,
  `subject_B` int(3) DEFAULT NULL,
  `subject_c` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`username`, `password`, `subject_A`, `subject_B`, `subject_c`) VALUES
('ashirbad sahu', 'bhau123', 56, 67, 78),
('karan samani', 'kirru', 77, 88, 99),
('vignesh', 'balor123', 66, 77, 88);

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE IF NOT EXISTS `patient` (
  `name` varchar(20) DEFAULT NULL,
  `age` int(3) DEFAULT NULL,
  `contact` varchar(20) DEFAULT NULL,
  `problem` varchar(100) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `patient_id` int(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`patient_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`name`, `age`, `contact`, `problem`, `email`, `patient_id`) VALUES
('abc', 12, '9835359839', 'stomach ache', 'abc@gmail.com', 1),
('xyz', 15, '9781345246', 'common cold', 'xyz@gmail.com', 2),
('lmn', 22, '9176091724', 'back ache', 'some@some.com', 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(0, 'ashirbad sahu', 'ashirbadsahu3@gmail.com', '8c9139ae34197355d066ee9d5d34e365'),
(0, 'faculty', 'abc@gmail.com', 'b077fc4f752957c1966bc48d3ef9ad8a'),
(0, 'karan samani', 'karan@xyz.com', 'caef64febd1a16bfe724fb6a9e61d4d0'),
(0, 'vignesh', 'xyz@gmail.com', '05ed604ed92b3c93192bb31444f5fdd4');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
