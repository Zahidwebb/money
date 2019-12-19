-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2019 at 12:44 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exchange`
--
CREATE DATABASE IF NOT EXISTS `exchange` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `exchange`;

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `comid` int(100) NOT NULL,
  `comment` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `comname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comid`, `comment`, `status`, `comname`) VALUES
(28, 'This is my first time money transactio in this website , but i found it very nice and softy ', 'valid', 'Zahid50'),
(29, 'This is my first time money transactio in this website , but i found it very nice and softy ', 'valid', 'Zahid79'),
(33, 'This is a very nice website. I can esily get my exchange within 5 min', 'valid', 'aman97'),
(34, 'dhfhssjsjf', 'valid', 'Zahid56');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contactid` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `massage` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contactid`, `name`, `email`, `subject`, `massage`) VALUES
(25, 'sdfsf', 'sff@dgdg', 'addad', 'sfsfsf');

-- --------------------------------------------------------

--
-- Table structure for table `exchant_total`
--

CREATE TABLE `exchant_total` (
  `ttlid` int(100) NOT NULL,
  `sendicon` varchar(100) NOT NULL,
  `send` varchar(100) NOT NULL,
  `sendamount` int(100) NOT NULL,
  `receiveicon` varchar(100) NOT NULL,
  `receive` varchar(100) NOT NULL,
  `receiveamount` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `fee` varchar(100) NOT NULL,
  `total` varchar(100) NOT NULL,
  `payorder` varchar(100) NOT NULL,
  `txid` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `pageid` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exchant_total`
--

INSERT INTO `exchant_total` (`ttlid`, `sendicon`, `send`, `sendamount`, `receiveicon`, `receive`, `receiveamount`, `name`, `fee`, `total`, `payorder`, `txid`, `status`, `pageid`, `date`) VALUES
(11, 'web.png', 'web', 11, 'dbbl.png', 'dbbl', 935, 'zahid', '0.88%', '11&nbsp;USD', '263A6407D', '121212122', 'Pending', '927', ''),
(12, 'dbbl.png', 'dbbl', 121, 'skrill.png', 'skrill', 1, 'zahid', '1.6%', '123 BDT', '659A3228D', '1212', 'Pending', '402', ''),
(13, 'web.png', 'web', 12, 'bik.png', 'bik', 1068, 'zahid', '0.88%', '12 USD', '670A7525D', '8899', 'latest', '987', ''),
(14, 'dbbl.png', 'dbbl', 1212, 'skrill.png', 'skrill', 14, 'zahid', '1.6%', '1231 BDT', '216A6363D', '1212', 'Success', '637', ''),
(15, 'net.png', 'net', 12, 'nog.png', 'nog', 960, 'zahid', '0.88%', '12 USD', '838A9809D', '112121212', 'Pending....', '597', ''),
(16, 'roc.png', 'roc', 1212, 'pay.png', 'pay', 14, 'zahid', '1.6%', '1231 BDT', '479A5128D', '76767', 'ok', '651', ''),
(17, 'skrill.png', 'skrill', 12121, 'bik.png', 'bik', 1078769, 'zahid', '0.88%', '12228 USD', '701A8033D', '8989', 'Pending', '39', ''),
(18, 'net.png', 'net', 1, 'bik.png', 'bik', 89, 'Habib', '0.88%', '1 USD', '872A7811D', '8787878', 'ok', '861', ''),
(19, 'skrill.png', 'skrill', 3434, 'bik.png', 'bik', 305626, 'Habib', '0.88%', '3464 USD', '777A3396D', '7676767', 'Pending', '497', ''),
(20, 'dbbl.png', 'dbbl', 2323, 'skrill.png', 'skrill', 27, 'zahid', '1.6%', '2360 BDT', '708A7959D', '55656', 'Pending', '831', ''),
(21, 'skrill.png', 'skrill', 100, 'dbbl.png', 'dbbl', 8500, 'zahid', '0.88%', '101 USD', '149A7415D', '121313131', 'ok', '557', ''),
(22, 'web.png', 'web', 12, 'bik.png', 'bik', 1068, 'zahid', '0.88%', '12 USD', '993A8065D', '12121212', 'Pending', '168', ''),
(23, 'skrill.png', 'skrill', 343, 'bik.png', 'bik', 30527, 'zahid', '0.88%', '346 USD', '189A9841D', '124565', 'ok', '44', '06/12/2019'),
(24, 'dbbl.png', 'dbbl', 1256, 'pay.png', 'pay', 14, 'aman', '1.6%', '1276 BDT', '173A6784D', '57657657656576', 'ok', '386', '11/12/2019'),
(25, 'dbbl.png', 'dbbl', 1222, 'skrill.png', 'skrill', 14, 'aman', '1.6%', '1242 BDT', '669A7288D', '5656575', 'Pending', '334', '11/12/2019'),
(26, 'roc.png', 'roc', 100, 'skrill.png', 'skrill', 1, 'Zahid', '1.6%', '102 BDT', '948A8108D', 'hjskhsdfh', 'done', '80', '11/12/2019'),
(27, 'skrill.png', 'skrill', 100, 'bik.png', 'bik', 8900, 'saiful', '0.88%', '101 USD', '439A8291D', 'ghuihyug', 'done', '9', '11/12/2019'),
(28, 'net.png', 'net', 12123, 'bik.png', 'bik', 1054701, 'Zahid', '0.88%', '12230 USD', '373A5346D', 'sdwdw', 'Pending', '68', '19/12/2019');

-- --------------------------------------------------------

--
-- Table structure for table `exch_info`
--

CREATE TABLE `exch_info` (
  `exchid` int(100) NOT NULL,
  `send` varchar(100) NOT NULL,
  `receive` varchar(100) NOT NULL,
  `samount` double NOT NULL,
  `ramount` double NOT NULL,
  `txid` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exch_info`
--

INSERT INTO `exch_info` (`exchid`, `send`, `receive`, `samount`, `ramount`, `txid`) VALUES
(19, 'net', 'bik', 12, 1068, 287),
(20, 'skrill', 'bik', 11, 979, 570),
(21, 'net', 'bik', 12, 1068, 18),
(22, 'skrill', 'bik', 34, 3026, 61),
(23, 'net', 'bik', 1221, 108669, 209),
(24, 'bik', 'skrill', 1234, 14.18, 306),
(25, 'roc', 'skrill', 1212, 13.93, 332),
(26, 'web', 'bik', 2323, 206747, 559),
(27, '1', '1', 1, 1, 279),
(28, '1', '1', 1, 1, 100),
(29, '1', '1', 1, 1, 911),
(30, '1', '1', 1, 1, 855),
(31, '1', '1', 1, 1, 879),
(32, '1', '1', 1, 1, 986),
(33, '1', '1', 1, 1, 778),
(34, '1', '1', 1, 1, 487),
(35, '1', '1', 1, 1, 575),
(36, '1', '1', 1, 1, 873),
(37, '1', '1', 1, 1, 855),
(38, '1', '1', 1, 1, 84),
(39, 'net', 'bik', 100, 8900, 141),
(40, 'skrill', 'bik', 66, 5874, 262),
(41, 'pay', 'bik', 1, 89, 615),
(42, 'pay', 'roc', 12, 1056, 543),
(43, 'skrill', 'bik', 11, 979, 312),
(44, 'skrill', 'bik', 1, 89, 322),
(45, 'skrill', 'bik', 7, 623, 604),
(46, 'skrill', 'bik', 787, 70043, 7),
(47, 'net', 'bik', 65, 5785, 992),
(48, 'pay', 'bik', 12, 1068, 753),
(49, 'dbbl', 'skrill', 2, 0.02, 600),
(50, 'net', 'bik', 12, 1068, 834),
(51, 'skrill', 'bik', 12121, 1078769, 654),
(52, 'dbbl', 'skrill', 121, 1.39, 301),
(53, 'skrill', 'bik', 6, 534, 843),
(54, 'net', 'bik', 767, 68263, 681),
(55, 'pay', 'roc', 1, 88, 592),
(56, 'pay', 'dbbl', 1, 85, 761),
(57, 'skrill', 'nog', 1, 80, 837),
(58, 'nog', 'skrill', 1, 0.01, 341),
(59, 'bik', 'skrill', 1, 0.01, 283),
(60, 'nog', 'skrill', 1, 0.01, 74),
(61, 'net', 'roc', 1, 88, 715),
(62, 'skrill', 'nog', 1, 80, 335),
(63, 'web', 'dbbl', 11, 935, 927),
(64, 'dbbl', 'skrill', 121, 1.39, 402),
(65, 'web', 'bik', 12, 1068, 987),
(66, 'dbbl', 'skrill', 1212, 13.93, 637),
(67, 'net', 'nog', 12, 960, 597),
(68, 'roc', 'pay', 1212, 13.62, 651),
(69, 'dbbl', 'skrill', 12121, 139.32, 380),
(70, 'dbbl', 'skrill', 1212, 13.93, 716),
(71, 'bik', 'skrill', 121, 1.39, 902),
(72, 'roc', 'skrill', 89, 1.02, 300),
(73, 'skrill', 'bik', 12121, 1078769, 39),
(74, 'net', 'bik', 1, 89, 861),
(75, 'skrill', 'bik', 0, 0, 988),
(76, 'dbbl', 'skrill', 0, 0, 150),
(77, 'web', 'bik', 0, 0, 34),
(78, 'skrill', 'bik', 3434, 305626, 497),
(79, 'dbbl', 'skrill', 2323, 26.7, 831),
(80, 'skrill', 'dbbl', 100, 8500, 557),
(81, 'web', 'bik', 12, 1068, 168),
(82, 'skrill', 'bik', 343, 30527, 44),
(83, 'dbbl', 'pay', 1256, 14.11, 386),
(84, 'skrill', 'bik', 12, 1068, 678),
(85, 'dbbl', 'skrill', 1222, 14.05, 334),
(86, 'roc', 'skrill', 100, 1.15, 80),
(87, 'net', 'bik', 111, 9879, 320),
(88, 'skrill', 'bik', 100, 8900, 9),
(89, 'net', 'bik', 12123, 1054701, 68);

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE `reg` (
  `userid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` int(100) NOT NULL,
  `passward` varchar(100) NOT NULL,
  `repassward` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`userid`, `name`, `email`, `phone`, `passward`, `repassward`) VALUES
(30, 'Zahid', 'zahid@gmail.com', 1920964998, 'zahid', 'zahid'),
(31, 'aman', 'zaman@gmail.com', 393948398, 'amana', 'amana'),
(32, 'saiful', 'saiful.abir89@gmail.com', 1722565750, '468898', '468898');

-- --------------------------------------------------------

--
-- Table structure for table `transacct`
--

CREATE TABLE `transacct` (
  `transacctid` int(111) NOT NULL,
  `email` varchar(111) NOT NULL,
  `account` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `txid` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transacct`
--

INSERT INTO `transacct` (`transacctid`, `email`, `account`, `name`, `phone`, `txid`) VALUES
(12, 'zahid@gmail.com', 'bikash@gmail.com', 'Zahid', '1212', 287),
(13, 'rahim@gmail.com', '10382948', 'Rahim', '-90440', 570),
(14, 'mofiz@gmail.com', '10382948', 'Zahid', '02480248', 18),
(15, 'zahid@gmail.com', 'bikash@gmail.com', 'Mofiz', '02480248', 209),
(16, 'zaman@gmail.com', 'bikash@gmail.com', 'Mofiz', '02480248', 306),
(17, 'Zahid@gmail.com', 'nogod@gmail.com', 'Zahid', '01234567', 855),
(18, 'saiful.abir898@gmail.com', '10382948', 'Zahid', '02480248', 84),
(19, 'zahid@gmail.com', 'bikash@gmail.com', 'Mofiz', '01234567', 141),
(20, 'saiful.abir898@gmail.com', '10382948', 'Mofiz', '01234567', 615),
(21, 'Zahid@gmail.com', 'bikash@gmail.com', 'Zahid', '02480248', 543),
(22, 'zahid@gmail.com', '10382948', 'Zahid', '02480248', 312),
(23, 'saiful.abir898@gmail.com', '10382948', 'Zahid', '02480248', 322),
(24, 'saiful.abir898@gmail.com', 'bikash@gmail.com', 'Zahid', '02480248', 604),
(25, 'saiful.abir898@gmail.com', 'bikash@gmail.com', 'Mofiz', '02480248', 7),
(26, 'zahid@gmail.com', 'bikash@gmail.com', 'Zahid', '01234567', 992),
(27, 'Zahid@gmail.com', 'bikash@gmail.com', 'Mofiz', '02480248', 753),
(28, 'saiful.abir898@gmail.com', 'bikash@gmail.com', 'Zahid', '02480248', 600),
(29, 'zahid@gmail.com', 'bikash@gmail.com', 'Zahid', '02480248', 834),
(30, 'saiful.abir898@gmail.com', 'bikash@gmail.com', 'Zahid', '02480248', 301),
(31, 'saiful.abir898@gmail.com', '10382948', 'Mofiz', '02480248', 843),
(32, 'zahid@gmail.com', 'bikash@gmail.com', 'Mofiz', '02480248', 681),
(33, 'zahid@gmail.com', 'bikash@gmail.com', 'Zahid', '02480248', 592),
(34, 'zahid@gmail.com', '10382948', 'Mofiz', '01234567', 761),
(35, 'zahid@gmail.com', '10382948', 'Mofiz', '02480248', 837),
(36, 'zahid@gmail.com', '10382948', 'Mofiz', '02480248', 341),
(37, 'zahid@gmail.com', '10382948', 'Mofiz', '01234567', 283),
(38, 'zahid@gmail.com', 'bikash@gmail.com', 'Zahid', '01234567', 74),
(39, 'borkot@gmail.com', 'rocket@gmail.com', 'borkot', '00340403', 715),
(40, 'rohmotullah@gamail.com', 'nogod@gmail.com', 'Rahmotullah', '04830403', 335),
(41, 'saiful.abir898@gmail.com', '10382948', 'Mofiz', '02480248', 927),
(42, 'zahid@gmail.com', 'bikash@gmail.com', '12121', '11212', 402),
(43, 'saiful.abir898@gmail.com', 'bikash@gmail.com', 'Mofiz', '02480248', 987),
(44, 'zahid@gmail.com', 'nogod@gmail.com', 'Zahid', '02480248', 637),
(45, 'zahid@gmail.com', '10382948', 'Zahid', '00340403', 597),
(46, 'zahid@gmail.com', 'nogod@gmail.com', 'borkot', '01234567', 651),
(47, 'bup.zaman@gmail.com', 'skrill@gamil.com', 'zahid', '989380', 39),
(48, 'kabu@gmil.com', '67867676', 'saiful islam', '878787', 861),
(49, 'kabu@gmil.com', 'skrill@gamil.com', 'saiful islam', '040490490349', 497),
(50, 'zahid@gmail.com', 'nogod@gmail.com', 'zahid', '01303192803', 831),
(51, 'zahid@gmail.com', '12121212121212', 'zasrt', '121324535', 557),
(52, 'zahid@gmail.com', '12121212121212', 'zasrt', '121324535', 168),
(53, 'zahid@gmail.com', '12121212121212', 'zasrt', '121324535', 44),
(54, 'aman@gmail.com', 'aman@gmail.com', 'Aman', '39483483', 386),
(55, 'zaman@gmail.com', '12121212121212', 'aman', '03843048', 678),
(56, 'zahid@gmail.com', 'aman@gmail.com', 'aman', '03843048', 334),
(57, 'zahid@gmail.com', 'aman@gmail.com', 'md zahid', '01920964998', 80),
(58, 'zaman@gmail.com', '12121212121212', 'zasrt', '121324535', 320),
(59, 'saiful.abir898@gmail.com', '02722565750', 'aman', '01722565750', 9),
(60, 'zahid@gmail.com', '02722565750', 'aman', '03843048', 68);

-- --------------------------------------------------------

--
-- Table structure for table `trans_info`
--

CREATE TABLE `trans_info` (
  `tid` int(100) NOT NULL,
  `mobileid` varchar(100) NOT NULL,
  `payorder` varchar(100) NOT NULL,
  `fee` double NOT NULL,
  `total` int(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `txid` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trans_info`
--

INSERT INTO `trans_info` (`tid`, `mobileid`, `payorder`, `fee`, `total`, `status`, `txid`) VALUES
(14, '12', '178A5978D', 0.88, 12, 'Pending', 287),
(15, '121', '882A2187D', 0.88, 11, 'Pending', 570),
(16, '456464', '727A9202D', 0.88, 12, 'Pending', 18),
(17, '6767676', '973A8193D', 0.88, 1232, 'Pending', 209),
(18, '1313', '423A3524D', 1.6, 1254, 'Pending', 306),
(19, '767676', '689A2965D', 1.6, 1, 'Pending', 855),
(20, '1212', '924A5804D', 0.88, 101, 'Pending', 141),
(21, '1111111', '689A4369D', 0.88, 12, 'Pending', 543),
(22, '666', '181A3396D', 0.88, 11, 'Pending', 312),
(23, '555555', '355A8578D', 0.88, 1, 'Pending', 322),
(24, '676767', '101A4290D', 0.88, 66, 'Pending', 992),
(25, '767676', '101A4290D', 0.88, 66, 'Pending', 992),
(26, '12345', '980A5465D', 0.88, 12, 'Pending', 753),
(27, '8787', '229A2647D', 0.88, 12, 'Pending', 834),
(28, '11212', '401A2943D', 1.6, 123, 'Pending', 301),
(29, '878787', '636A6701D', 0.88, 6, 'Pending', 843),
(30, '1212', '306A1523D', 0.88, 1, 'Pending', 837),
(31, '121234', '985A1809D', 0.88, 1, 'Pending', 715),
(32, '121212122', '539A2348D', 0.88, 1, 'Pending', 335),
(33, '121212122', '263A6407D', 0.88, 11, 'Pending', 927),
(34, '1212', '659A3228D', 1.6, 123, 'Pending', 402),
(35, '8899', '670A7525D', 0.88, 12, 'Pending', 987),
(36, '1212', '216A6363D', 1.6, 1231, 'Pending....', 637),
(37, '112121212', '838A9809D', 0.88, 12, 'Pending....', 597),
(38, '76767', '479A5128D', 1.6, 1231, 'Pending', 651),
(39, '8989', '701A8033D', 0.88, 12228, 'Pending', 39),
(40, '8787878', '872A7811D', 0.88, 1, 'Pending', 861),
(41, '7676767', '777A3396D', 0.88, 3464, 'Pending', 497),
(42, '55656', '708A7959D', 1.6, 2360, 'Pending', 831),
(43, '121313131', '149A7415D', 0.88, 101, 'Pending', 557),
(44, '12121212', '993A8065D', 0.88, 12, 'Pending', 168),
(45, '124565', '189A9841D', 0.88, 346, 'Pending', 44),
(46, '57657657656576', '173A6784D', 1.6, 1276, 'Pending', 386),
(47, '5656575', '669A7288D', 1.6, 1242, 'Pending', 334),
(48, 'hjskhsdfh', '948A8108D', 1.6, 102, 'Pending', 80),
(49, 'ghuihyug', '439A8291D', 0.88, 101, 'Pending', 9),
(50, 'sdwdw', '373A5346D', 0.88, 12230, 'Pending', 68);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comid`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contactid`);

--
-- Indexes for table `exchant_total`
--
ALTER TABLE `exchant_total`
  ADD PRIMARY KEY (`ttlid`);

--
-- Indexes for table `exch_info`
--
ALTER TABLE `exch_info`
  ADD PRIMARY KEY (`exchid`);

--
-- Indexes for table `reg`
--
ALTER TABLE `reg`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `transacct`
--
ALTER TABLE `transacct`
  ADD PRIMARY KEY (`transacctid`);

--
-- Indexes for table `trans_info`
--
ALTER TABLE `trans_info`
  ADD PRIMARY KEY (`tid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `comid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contactid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `exchant_total`
--
ALTER TABLE `exchant_total`
  MODIFY `ttlid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `exch_info`
--
ALTER TABLE `exch_info`
  MODIFY `exchid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `reg`
--
ALTER TABLE `reg`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `transacct`
--
ALTER TABLE `transacct`
  MODIFY `transacctid` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `trans_info`
--
ALTER TABLE `trans_info`
  MODIFY `tid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
