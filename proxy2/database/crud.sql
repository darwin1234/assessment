-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2019 at 02:54 PM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `ID` int(25) NOT NULL,
  `userID` int(25) NOT NULL,
  `productID` int(11) NOT NULL,
  `action` varchar(255) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`ID`, `userID`, `productID`, `action`, `time`) VALUES
(51, 80, 0, 'deleted a product', '2018-10-23 10:26:12'),
(52, 1, 0, 'deleted a product', '2018-10-23 11:29:56'),
(53, 1, 0, 'updated a product', '2018-10-23 11:30:03'),
(54, 1, 0, 'added a product', '2018-10-23 11:30:13'),
(55, 1, 0, 'added a product', '2018-10-23 09:17:55'),
(56, 1, 0, 'updated a product', '2018-10-23 09:18:39'),
(57, 1, 0, 'deleted a product', '2018-10-23 09:18:46'),
(58, 1, 0, 'updated a product', '2018-10-24 07:51:34'),
(59, 1, 0, 'updated a product', '2018-10-24 07:52:46'),
(60, 1, 0, 'updated a product', '2018-10-24 07:54:03'),
(61, 80, 0, 'added a product', '2018-10-24 11:04:21'),
(62, 80, 0, 'updated a product', '2018-10-24 11:04:32'),
(63, 80, 0, 'deleted a product', '2018-10-24 11:04:38');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `productname` varchar(255) NOT NULL,
  `productCat` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `productprice` int(255) NOT NULL,
  `CompanyName` varchar(255) NOT NULL,
  `ProductImage` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ID`, `userID`, `productname`, `productCat`, `Description`, `productprice`, `CompanyName`, `ProductImage`) VALUES
(23, 80, 'test one', '1', 'asdsadsadsdsds', 324343, 'asd', ''),
(25, 1, 'asdasdasdasdasd', 'Motherboard', 'asdasdasd', 34343, '', 'asdasd'),
(30, 1, 'new', 'Motherboard', 'asdasdasddsds', 234232, '', 'asdasd');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `usertype` int(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contactno` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `CompanyName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `username`, `password`, `usertype`, `firstname`, `lastname`, `address`, `contactno`, `email`, `CompanyName`) VALUES
(1, 'Admin', '21232f297a57a5a743894a0e4a801fc3', 1, 'El John', 'Rimando', 'naguilian', 32322230, 'darwinsese@gmail.com', ''),
(80, 'idol', '416c15561452672c813fa844504d7ae6', 2, 'Idol', 'idol', 'adasd', 43343434, 'idol@asdas.com', 'samsung');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `ID` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
