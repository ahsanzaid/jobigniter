-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2018 at 09:05 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `job`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `cid` int(11) NOT NULL,
  `cname` varchar(45) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `location` varchar(45) NOT NULL,
  `city` varchar(20) NOT NULL,
  `img` text NOT NULL,
  `provience` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`cid`, `cname`, `email`, `password`, `location`, `city`, `img`, `provience`, `country`) VALUES
(19, 'GibraltarSoft', 'hr@gibraltarsoft.com', '202cb962ac59075b964b07152d234b70', 'mc-1232 shah faisal colony', 'karachi', 'public\\assets\\img\\jobs\\5b5a0eb6a1240.png', 'sindh', 'Pakistan'),
(20, 'Google', 'hr@google.com', '202cb962ac59075b964b07152d234b70', 'Silicon Valley', 'San Francisco', 'public\\assets\\img\\jobs\\5b5ac453ede00.png', 'California', 'America'),
(26, 'Logitex', 'hr@logitex.com', 'e10adc3949ba59abbe56e057f20f883e', 'Main Shara e faisal Lal Koti', 'Karachi', 'public\\assets\\img\\jobs\\5b5e1ab3eaf75.png', 'Sindh', 'Pakistan'),
(27, 'llllllllll', 'k', 'bbb8aae57c104cda40c93843ad5e6db8', 'k', 'k', 'public\\assets\\img\\jobs\\5b5e695b13343.jpeg', 'k', 'k');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `message`) VALUES
(1, '', '', ''),
(2, 'ahsanzaid', 'ahsankhalid1995@outlook.com', '.Hello Friends Chai Pee Loo.');

-- --------------------------------------------------------

--
-- Table structure for table `jobposted`
--

CREATE TABLE `jobposted` (
  `jid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `jname` varchar(45) NOT NULL,
  `jdescrp` varchar(500) NOT NULL,
  `type` varchar(10) NOT NULL,
  `skill` varchar(20) NOT NULL,
  `keywords` varchar(200) DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `zipcode` int(11) NOT NULL,
  `wishlist` int(11) DEFAULT NULL,
  `indus` varchar(50) NOT NULL,
  `totpos` int(11) NOT NULL,
  `appdate` date NOT NULL,
  `gender` varchar(6) NOT NULL,
  `edu` varchar(50) NOT NULL,
  `degtit` varchar(50) NOT NULL,
  `carrier` varchar(50) NOT NULL,
  `sal` varchar(20) NOT NULL,
  `exper` varchar(50) NOT NULL,
  `jcity` varchar(50) NOT NULL,
  `jcountry` varchar(50) NOT NULL,
  `jlocation` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobposted`
--

INSERT INTO `jobposted` (`jid`, `cid`, `jname`, `jdescrp`, `type`, `skill`, `keywords`, `time`, `zipcode`, `wishlist`, `indus`, `totpos`, `appdate`, `gender`, `edu`, `degtit`, `carrier`, `sal`, `exper`, `jcity`, `jcountry`, `jlocation`) VALUES
(1, 19, 'operating system developer', 'we need a fast coder of linux developer .Need an experience of atleast 3 years in shell scripting and c++.', 'parttime', 'Operating Systems', 'os it intel america system hardware software IT InformationTeachnology', '2018-07-26 18:21:53', 12345, 3, 'Hardware-Software', 10, '2018-08-15', 'MALE', 'BSCS', 'Bachlors', 'lntermediate', '50000', '10 Years', 'Karachi', 'Pakistan', 'MC 1232 Green Town Shah Faisal Colony'),
(2, 20, 'Data Scientist', 'We need a data scientist  In our AI Tensor Flow Python Library for upgrading it and mainting its source code and upgrading it on daily basics', 'fulltime', 'Data science', 'data analyst ai google software datascience machine learning', '2018-07-27 07:06:29', 2345, 6, '', 0, '0000-00-00', '', '0', '0', '0', '0', '', '', '', ''),
(10, 26, '.Net Developer', 'We Need .Net Developer having 4 years of experience with asp.net and mssql as backend and also have enough knowledge of front end', 'Full Time', 'Back End Web Develop', '.net mssql webdeveloper web development', '2018-07-30 01:02:17', 92, NULL, 'Web Developer', 10, '0000-00-00', 'BS(CS)', 'Bachlors', 'Expert', '50000-100000', '5 years', '17/30/2018', 'Pakistan', 'Karachi', 'main shah faisal lal koti');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `city` varchar(45) NOT NULL,
  `password` varchar(100) NOT NULL,
  `cv` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `fname`, `lname`, `email`, `phone`, `city`, `password`, `cv`) VALUES
(1, 'AHSAN', 'ZAID', 'ahsanzaid1995@gmail.com', '03062966753', 'KARACHI', 'f53a92a884b12195c086be256f189bc6', 'ff'),
(2, 'ahsan', 'zaid', 'ahsanzaid1995@gmail.com', '03062966753', 'karachi', 'e10adc3949ba59abbe56e057f20f883e', 'public/CV/5b5eaef2c17bc.pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobposted`
--
ALTER TABLE `jobposted`
  ADD PRIMARY KEY (`jid`),
  ADD KEY `cid` (`cid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jobposted`
--
ALTER TABLE `jobposted`
  MODIFY `jid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jobposted`
--
ALTER TABLE `jobposted`
  ADD CONSTRAINT `jobposted_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `company` (`cid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
