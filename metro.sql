-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2021 at 03:23 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `metro`
--

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `token` varchar(64) NOT NULL,
  `bio` text DEFAULT NULL,
  `dob` varchar(10) DEFAULT NULL,
  `fb` text DEFAULT NULL,
  `ln` text DEFAULT NULL,
  `wa` text DEFAULT NULL,
  `pimg` text DEFAULT '../pictures/index.png',
  `hone` text DEFAULT NULL,
  `htwo` text DEFAULT NULL,
  `hthree` text DEFAULT NULL,
  `job` text DEFAULT NULL,
  `org` text DEFAULT NULL,
  `location` text DEFAULT NULL,
  `position` text DEFAULT NULL,
  `Gender` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`token`, `bio`, `dob`, `fb`, `ln`, `wa`, `pimg`, `hone`, `htwo`, `hthree`, `job`, `org`, `location`, `position`, `Gender`) VALUES
('5YEFbrCYaGXgIUhymBCnJlFETsckPRVXkMIVGLSSgPsBh8SkkVZvAIFl4efMpYlm', 'Friends is an American television sitcom, created by David Crane and Marta Kauffman, which aired on NBC from September 22, 1994, to May 6, 2004, lasting ten seasons.[1] With an ensemble cast starring Jennifer Aniston, Courteney Cox, Lisa Kudrow, Matt LeBlanc, Matthew Perry and David Schwimmer, the show revolves around six friends in their 20s and 30s who live in Manhattan, New York City. The series was produced by Bright/Kauffman/Crane Productions, in association with Warner Bros. Television. The original executive producers were Kevin S. Bright, Kauffman, and Crane.', '2000-10-09', 'https://www.facebook.com/jagatjung.lakandribk/', 'https://www.facebook.com/jagatjung.lakandribk/', 'https://www.facebook.com/jagatjung.lakandribk/', 'jagat.jpg', 'football', 'crickeet', 'gaming', 'Coder', 'HSM', 'Hetauda', 'marreid', 'male'),
('MqElZ81r4OMvSqrAufwVawkA6mwl9P0kLZHteHpn3r5Uhzuhsh3OhdXr2LxCxKSX', 'Kauffman and Crane began developing Friends under the title Insomnia Cafe between November and December 1993. They presented the idea to Bright, and together they pitched a seven-page treatment of the show to NBC. After several script rewrites and changes, including title changes to Six of One[2] and Friends Like Us, the series was finally named Friends.[3]', '2020-10-26', 'https://www.facebook.com/jagatjung.lakandribk/', 'https://www.facebook.com/jagatjung.lakandribk/', 'https://www.facebook.com/jagatjung.lakandribk/', 'jagat.jpg', 'Hiking', 'Sports', 'swimming', 'Accountant', 'Hetauda School of Management', 'Hetauda', 'single', 'female');

-- --------------------------------------------------------

--
-- Table structure for table `reg_table`
--

CREATE TABLE `reg_table` (
  `token` varchar(64) NOT NULL,
  `rname` varchar(30) DEFAULT NULL,
  `password` varchar(10) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `pnum` varchar(10) DEFAULT NULL,
  `dateOfReg` date DEFAULT current_timestamp(),
  `report` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reg_table`
--

INSERT INTO `reg_table` (`token`, `rname`, `password`, `email`, `pnum`, `dateOfReg`, `report`, `status`) VALUES
('', 'adi', 'mylife', 'mylife@gmail.com', 'admin', '2021-04-08', 1, 1),
('1UOllLlakoewfIOwegSZGa1RwEUTFJc8M1dcK9rzctxRkXCMbRTEf4FeeCBDcaTe', 'Ratna Prasad Neupane', 'ratna123', 'neupaneratna2@gmail.com', '9845459180', '2021-04-04', 3, 1),
('5YEFbrCYaGXgIUhymBCnJlFETsckPRVXkMIVGLSSgPsBh8SkkVZvAIFl4efMpYlm', 'animhes', '2323', 'shree@gmail.com', '98654242', '2021-03-28', 5, 1),
('boPBsNvughflOO9sUjwgONeSkPrV2ScCacDdOBhLA6SO0DpJfjB0aP6u9Eftkdtr', 'Jagat', '2323', 'malik@gmail.com', '98654242', '2021-03-28', 4, 1),
('FGw0ZKc2NcpjnuhSiLyyyIfHG3OENp1SMTDZInlbCjZ5SIDBI16G4hhPS3PxXryp', 'Jagat', '2323', 'rvd@gmail.com', '98654242', '2021-03-28', 6, 1),
('MqElZ81r4OMvSqrAufwVawkA6mwl9P0kLZHteHpn3r5Uhzuhsh3OhdXr2LxCxKSX', 'shree', 'LAKANDRI53', 'star5lakandri@gmail.com', '+977986240', '2021-04-08', 15, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD UNIQUE KEY `token` (`token`);

--
-- Indexes for table `reg_table`
--
ALTER TABLE `reg_table`
  ADD PRIMARY KEY (`token`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `profile`
--
ALTER TABLE `profile`
  ADD CONSTRAINT `profile_ibfk_1` FOREIGN KEY (`token`) REFERENCES `reg_table` (`token`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
