-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Sep 26, 2024 at 01:01 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `traveliq`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookingtable`
--

CREATE TABLE `bookingtable` (
  `controlNo` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `travelType` varchar(255) DEFAULT NULL,
  `vehicleType` varchar(255) DEFAULT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `middleinitial` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `suffix` varchar(255) DEFAULT NULL,
  `Destination` varchar(255) DEFAULT NULL,
  `deptDate` varchar(255) DEFAULT NULL,
  `returnTrip` varchar(255) DEFAULT NULL,
  `returnDate` varchar(255) DEFAULT NULL,
  `class` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookingtable`
--

INSERT INTO `bookingtable` (`controlNo`, `username`, `travelType`, `vehicleType`, `firstname`, `middleinitial`, `lastname`, `suffix`, `Destination`, `deptDate`, `returnTrip`, `returnDate`, `class`) VALUES
(1, 'Mikaaa', 'Solo', 'Air', 'Mika Aurelie', NULL, NULL, 'None', 'Palawan', '2024-05-05', 'No', 'Invalid', 'Economy'),
(10, 'Mikadea', NULL, '', 'Mika Aurelie', 'Tana', 'Dea', 'None', 'Palawan', '2024-05-28', 'No', 'Invalid', 'Economy'),
(11, 'Mikadea', NULL, '', 'Mika Aurelie', 'Tana', 'Dea', 'None', 'Palawan', '2024-05-28', 'No', 'Invalid', 'Economy'),
(12, 'Mikadea', NULL, '', 'Mika Aurelie', 'Tana', 'Dea', 'None', 'Palawan', '2024-05-28', 'No', 'Invalid', 'Economy'),
(13, 'Mikadea', 'Solo', '', 'Mika Aurelie', 'Tana', 'Dea', 'None', 'Palawan', '2024-05-28', 'No', 'Invalid', 'Economy'),
(14, 'Mikadea', 'Solo', 'Air', 'Mika Aurelie', 'Tana', 'De Asis', 'None', 'Palawan', '2024-05-29', 'No', 'Invalid', 'Economy'),
(15, NULL, 'Solo', '', 'test', 'testingers', 'testing', 'None', '', '2024-07-05', 'No', 'Invalid', 'Business'),
(16, NULL, 'Solo', '', 'test', 'testingers', 'testing', 'None', '', '2024-07-05', 'No', 'Invalid', 'Business');

-- --------------------------------------------------------

--
-- Table structure for table `demogtable`
--

CREATE TABLE `demogtable` (
  `userID` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `region` varchar(255) DEFAULT NULL,
  `province` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `demogtable`
--

INSERT INTO `demogtable` (`userID`, `username`, `gender`, `region`, `province`, `city`) VALUES
(1, 'Mika', 'Other', 'NCR', 'Metro Manila', 'Calamba'),
(2, 'Mikadea01', 'Transgender', 'Region-IV-A', 'Laguna', 'Calamba'),
(3, 'Mikadea_01', 'Transgender', 'Region-IV-A', 'Laguna', 'Calamba'),
(4, 'Mikadea', 'Transgender', 'Region-IV-A', 'Laguna', 'Calamba'),
(5, NULL, 'Non-Binary', 'Region-IV-A', 'Cavite', 'Imus'),
(6, NULL, 'Male', 'Region-IV-A', 'Cavite', 'Bacoor'),
(7, NULL, 'Male', 'Region-IV-A', 'Batangas', 'Balayan'),
(18, 'Mika', 'Other', 'NCR', 'Metro Manila', 'Calamba'),
(19, 'Mikadea01', 'Transgender', 'Region-IV-A', 'Laguna', 'Calamba'),
(20, NULL, 'Non-Binary', 'Region-IV-A', 'Cavite', 'Imus');

-- --------------------------------------------------------

--
-- Table structure for table `messagetable`
--

CREATE TABLE `messagetable` (
  `messageID` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `datesent` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posttable`
--

CREATE TABLE `posttable` (
  `controlNo` int(11) NOT NULL,
  `is_promo` tinyint(1) DEFAULT NULL,
  `vehicleType` varchar(255) DEFAULT NULL,
  `destination` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `class` varchar(255) DEFAULT NULL,
  `traveltime` varchar(255) DEFAULT NULL,
  `startDate` varchar(255) DEFAULT NULL,
  `endDate` varchar(255) DEFAULT NULL,
  `deptDetails` varchar(255) DEFAULT NULL,
  `arrivalDetails` varchar(255) DEFAULT NULL,
  `flightNo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posttable`
--

INSERT INTO `posttable` (`controlNo`, `is_promo`, `vehicleType`, `destination`, `price`, `class`, `traveltime`, `startDate`, `endDate`, `deptDetails`, `arrivalDetails`, `flightNo`) VALUES
(3, NULL, NULL, 'Palawan', 'a:2:{i:0;s:4:5000\";i:1;s:5:\" 2000\";}\"', 'a:3:{i:0;s:7:Economy\";i:1;s:8:\"Business\";i:2;s:5:\"First\";}\"', 'a:3:{i:0;s:4:7:00\";i:1;s:5:\" 8:00\";i:2;s:5:\" 9:00\";}\"', '2024-05-07', '2024-05-31', 'NAIA Terminal 1', 'NAIA Terminal 2', 'a:3:{i:0;s:9:Flight #2\";i:1;s:10:\" Flight #1\";i:2;s:10:\" Flight #3\";}\"'),
(4, 0, NULL, 'Palawan', 'a:3:{i:0;s:4:1000\";i:1;s:5:\" 2000\";i:2;s:5:\" 3000\";}\"', 'a:3:{i:0;s:7:Economy\";i:1;s:8:\"Business\";i:2;s:5:\"First\";}\"', 'a:3:{i:0;s:4:7:00\";i:1;s:5:\" 8:00\";i:2;s:5:\" 9:00\";}\"', '2024-05-27', '2024-05-27', 'test', 'test', 'a:3:{i:0;s:9:Flight #2\";i:1;s:10:\" Flight #1\";i:2;s:10:\" Flight #3\";}\"'),
(5, 0, NULL, 'Palawan', 'a:3:{i:0;s:4:1000\";i:1;s:5:\" 2000\";i:2;s:5:\" 3000\";}\"', 'a:3:{i:0;s:7:Economy\";i:1;s:8:\"Business\";i:2;s:5:\"First\";}\"', 'a:3:{i:0;s:4:7:00\";i:1;s:5:\" 8:00\";i:2;s:5:\" 9:00\";}\"', '2024-05-27', '2024-05-27', 'test', 'test', 'a:3:{i:0;s:9:Flight #2\";i:1;s:10:\" Flight #1\";i:2;s:10:\" Flight #3\";}\"'),
(6, 0, 'Air', 'Palawan', 'a:3:{i:0;s:4:1000\";i:1;s:5:\" 2000\";i:2;s:5:\" 3000\";}\"', 'a:3:{i:0;s:7:Economy\";i:1;s:8:\"Business\";i:2;s:5:\"First\";}\"', 'a:3:{i:0;s:4:7:00\";i:1;s:5:\" 8:00\";i:2;s:5:\" 9:00\";}\"', '2024-05-27', '2024-05-27', 'test', 'test', 'a:3:{i:0;s:9:Flight #2\";i:1;s:10:\" Flight #1\";i:2;s:10:\" Flight #3\";}\"'),
(7, 1, NULL, 'Palawan', 'a:3:{i:0;s:4:1000\";i:1;s:5:\" 2000\";i:2;s:5:\" 3000\";}\"', 'a:3:{i:0;s:7:Economy\";i:1;s:8:\"Business\";i:2;s:5:\"First\";}\"', 'a:3:{i:0;s:4:7:00\";i:1;s:5:\" 8:00\";i:2;s:5:\" 9:00\";}\"', '2024-05-27', '2024-05-27', 'test', 'test', 'a:3:{i:0;s:9:Flight #2\";i:1;s:10:\" Flight #1\";i:2;s:10:\" Flight #3\";}\"'),
(8, 1, 'Land', 'Palawan', 'a:3:{i:0;s:4:1000\";i:1;s:5:\" 2000\";i:2;s:5:\" 3000\";}\"', 'a:3:{i:0;s:7:Economy\";i:1;s:8:\"Business\";i:2;s:5:\"First\";}\"', 'a:3:{i:0;s:4:7:00\";i:1;s:5:\" 8:00\";i:2;s:5:\" 9:00\";}\"', '2024-05-27', '2024-05-27', 'test', 'test', 'a:3:{i:0;s:9:Flight #2\";i:1;s:10:\" Flight #1\";i:2;s:10:\" Flight #3\";}\"'),
(9, 1, 'Air', 'Palawan', 'a:3:{i:0;s:4:1000\";i:1;s:5:\" 2000\";i:2;s:5:\" 5000\";}\"', 'a:3:{i:0;s:7:Economy\";i:1;s:8:\"Business\";i:2;s:5:\"First\";}\"', 'a:3:{i:0;s:4:7:00\";i:1;s:5:\" 8:00\";i:2;s:5:\" 9:00\";}\"', '2024-05-27', '2024-05-31', 'test', 'test', 'a:3:{i:0;s:9:Flight #2\";i:1;s:10:\" Flight #1\";i:2;s:10:\" Flight #3\";}\"'),
(10, 1, NULL, 'Palawan', '5000', 'a:1:{i:0;s:7:Economy\";}\"', 'a:3:{i:0;s:4:7:00\";i:1;s:5:\" 8:00\";i:2;s:5:\" 9:00\";}\"', '2024-05-27', '2024-05-31', 'Test', 'Test', 'a:3:{i:0;s:9:Flight #2\";i:1;s:10:\" Flight #1\";i:2;s:10:\" Flight #3\";}\"'),
(11, 1, NULL, 'Palawan', '5000', 'a:1:{i:0;s:7:Economy\";}\"', 'a:3:{i:0;s:4:7:00\";i:1;s:5:\" 8:00\";i:2;s:5:\" 9:00\";}\"', '2024-05-27', '2024-05-31', 'Test', 'Test', 'a:3:{i:0;s:9:Flight #2\";i:1;s:10:\" Flight #1\";i:2;s:10:\" Flight #3\";}\"'),
(15, 1, 'Air', 'Palawan', '5000', 'a:3:{i:0;s:7:Economy\";i:1;s:8:\"Business\";i:2;s:5:\"First\";}\"', 'a:3:{i:0;s:4:7:00\";i:1;s:5:\" 8:00\";i:2;s:5:\" 9:00\";}\"', '2024-05-28', '2024-05-31', 'test', 'test', 'a:3:{i:0;s:9:Flight #2\";i:1;s:10:\" Flight #1\";i:2;s:10:\" Flight #3\";}\"'),
(16, 1, 'Air', 'Palawan', '5000', 'a:3:{i:0;s:7:Economy\";i:1;s:8:\"Business\";i:2;s:5:\"First\";}\"', 'a:3:{i:0;s:4:7:00\";i:1;s:5:\" 8:00\";i:2;s:5:\" 9:00\";}\"', '2024-05-28', '2024-05-31', 'test', 'test', 'a:3:{i:0;s:9:Flight #2\";i:1;s:10:\" Flight #1\";i:2;s:10:\" Flight #3\";}\"'),
(17, 0, 'Air', 'Palawan', '21000', 'a:1:{i:0;s:8:\"Business\";}', '7:00', '2024-05-29', '2024-05-30', 'dawdaw7tgd', 'dwbnadyo', '123');

-- --------------------------------------------------------

--
-- Table structure for table `profittable`
--

CREATE TABLE `profittable` (
  `controlNo` int(11) NOT NULL,
  `transactiondate` varchar(255) DEFAULT NULL,
  `amount` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `profittable`
--

INSERT INTO `profittable` (`controlNo`, `transactiondate`, `amount`) VALUES
(1, '2024-01-01', '25000'),
(2, '2024-01-02', '5000'),
(3, '2024-01-03', '25000'),
(4, '2024-01-04', '10000'),
(5, '2024-01-05', '250000'),
(6, '2024-02-01', '25000'),
(7, '2024-02-02', '25000'),
(8, '2024-02-03', '30000'),
(9, '2024-05-28', '10000'),
(10, '2024-05-28', '10000'),
(11, '2024-05-29', '21321321');

-- --------------------------------------------------------

--
-- Table structure for table `transactiontable`
--

CREATE TABLE `transactiontable` (
  `controlNo` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `mop` varchar(255) DEFAULT NULL,
  `amount` varchar(255) DEFAULT NULL,
  `transactionID` varchar(255) DEFAULT NULL,
  `approval` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transactiontable`
--

INSERT INTO `transactiontable` (`controlNo`, `username`, `mop`, `amount`, `transactionID`, `approval`) VALUES
(1, 'miung', 'Credit Card', '42', 'fawdfaw', NULL),
(2, 'adawdaw', 'Debit Card', '21321321', 'dada', 1);

-- --------------------------------------------------------

--
-- Table structure for table `userrole`
--

CREATE TABLE `userrole` (
  `roleID` int(11) NOT NULL,
  `userName` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userrole`
--

INSERT INTO `userrole` (`roleID`, `userName`) VALUES
(1, 'Administrator'),
(2, 'Customer');

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE `usertable` (
  `userID` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `userpass` varchar(255) DEFAULT NULL,
  `userrole` int(11) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `birthday` varchar(255) DEFAULT NULL,
  `is_new` tinyint(1) DEFAULT NULL,
  `referralcode` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`userID`, `username`, `userpass`, `userrole`, `email`, `birthday`, `is_new`, `referralcode`) VALUES
(1, 'Mika', 'Password', 2, 'tripleavalon@gmail.com', '2024-05-28', 1, NULL),
(2, 'Mikadea01', 'Password', 2, NULL, '2002-04-10', 1, NULL),
(3, 'Mikadea_01', 'Password', 2, NULL, '2002-04-10', 1, NULL),
(4, 'Mikadea', 'Password', 2, 'mikadea01@gmail.com', '2002-04-10', 1, NULL),
(5, 'Admin Mika', 'Password', 1, 'lastf7475@gmail.com', NULL, NULL, 417),
(6, 'miung', '1234', NULL, 'wes@gmail.com', '2024-05-28', 1, NULL),
(7, 'miung', '1234', 1, 'wes@gmail.com', '2024-05-28', 1, NULL),
(8, 'miung', '1234', 2, 'wes@gmail.com', '2024-05-28', 1, NULL),
(9, 'Wesley', '1234', NULL, 'wesley@gmail.com', 'November 28, 2001', NULL, NULL),
(10, 'Wesley', '1234', 1, 'wesley@gmail.com', 'November 28, 2001', NULL, NULL),
(11, '123dawd', '12321', 2, 'adaw@g.com', '2024-05-14', 1, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookingtable`
--
ALTER TABLE `bookingtable`
  ADD PRIMARY KEY (`controlNo`);

--
-- Indexes for table `demogtable`
--
ALTER TABLE `demogtable`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `messagetable`
--
ALTER TABLE `messagetable`
  ADD PRIMARY KEY (`messageID`);

--
-- Indexes for table `posttable`
--
ALTER TABLE `posttable`
  ADD PRIMARY KEY (`controlNo`);

--
-- Indexes for table `profittable`
--
ALTER TABLE `profittable`
  ADD PRIMARY KEY (`controlNo`);

--
-- Indexes for table `transactiontable`
--
ALTER TABLE `transactiontable`
  ADD PRIMARY KEY (`controlNo`);

--
-- Indexes for table `userrole`
--
ALTER TABLE `userrole`
  ADD PRIMARY KEY (`roleID`);

--
-- Indexes for table `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`userID`),
  ADD KEY `userrole` (`userrole`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookingtable`
--
ALTER TABLE `bookingtable`
  MODIFY `controlNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `demogtable`
--
ALTER TABLE `demogtable`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `messagetable`
--
ALTER TABLE `messagetable`
  MODIFY `messageID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posttable`
--
ALTER TABLE `posttable`
  MODIFY `controlNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `profittable`
--
ALTER TABLE `profittable`
  MODIFY `controlNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `transactiontable`
--
ALTER TABLE `transactiontable`
  MODIFY `controlNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `userrole`
--
ALTER TABLE `userrole`
  MODIFY `roleID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `usertable`
--
ALTER TABLE `usertable`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `usertable`
--
ALTER TABLE `usertable`
  ADD CONSTRAINT `usertable_ibfk_1` FOREIGN KEY (`userrole`) REFERENCES `userrole` (`roleID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
