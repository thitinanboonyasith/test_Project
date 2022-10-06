-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2022 at 09:19 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moivevidio`
--

-- --------------------------------------------------------

--
-- Table structure for table `actor`
--

CREATE TABLE `actor` (
  `AID` int(13) NOT NULL,
  `AName` varchar(30) NOT NULL,
  `ALastname` varchar(30) NOT NULL,
  `Gender` varchar(30) NOT NULL,
  `ATel` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `actor`
--

INSERT INTO `actor` (`AID`, `AName`, `ALastname`, `Gender`, `ATel`) VALUES
(101, 'JohnWick', 'Chapter1', 'Male', '0211111111'),
(102, 'JohnWick', 'Chapter2', 'Male', '0222222222'),
(103, 'JohnWick', 'Chapter3', 'Male', '0233333333'),
(104, 'JohnWick', 'Chapter4', 'Male', '0244444444'),
(105, 'JohnWick', 'Chapter5', 'Female', '0255555555');

-- --------------------------------------------------------

--
-- Table structure for table `actorrecord`
--

CREATE TABLE `actorrecord` (
  `Amount` int(13) NOT NULL,
  `ActorsID` int(13) NOT NULL,
  `MovieID` int(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `dvdmovie`
--

CREATE TABLE `dvdmovie` (
  `DID` int(13) NOT NULL,
  `DName` varchar(30) NOT NULL,
  `Genre` varchar(70) NOT NULL,
  `Time` varchar(30) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dvdmovie`
--

INSERT INTO `dvdmovie` (`DID`, `DName`, `Genre`, `Time`, `Date`) VALUES
(0, '', '', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `MID` int(13) NOT NULL,
  `MName` varchar(30) NOT NULL,
  `MLastname` varchar(30) NOT NULL,
  `MEmail` varchar(30) NOT NULL,
  `MTel` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`MID`, `MName`, `MLastname`, `MEmail`, `MTel`) VALUES
(6001, 'สมปอง', 'ผิดตรงไหน', 'Sompong@gmail.com', '0812345678');

-- --------------------------------------------------------

--
-- Table structure for table `sale`
--

CREATE TABLE `sale` (
  `MemberID` int(13) NOT NULL,
  `MoviesID` int(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actor`
--
ALTER TABLE `actor`
  ADD PRIMARY KEY (`AID`);

--
-- Indexes for table `actorrecord`
--
ALTER TABLE `actorrecord`
  ADD KEY `ActorsID` (`ActorsID`),
  ADD KEY `MovieID` (`MovieID`);

--
-- Indexes for table `dvdmovie`
--
ALTER TABLE `dvdmovie`
  ADD PRIMARY KEY (`DID`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`MID`);

--
-- Indexes for table `sale`
--
ALTER TABLE `sale`
  ADD KEY `MemberID` (`MemberID`),
  ADD KEY `MoviesID` (`MoviesID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
