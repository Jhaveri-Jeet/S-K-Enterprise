-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2023 at 06:36 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skenterprisedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminrequirements`
--

CREATE TABLE `adminrequirements` (
  `Id` int(11) NOT NULL,
  `BuyerRequirementId` int(11) DEFAULT NULL,
  `BuyerId` int(11) DEFAULT NULL,
  `Pieces` int(11) DEFAULT NULL,
  `TargetPrice` int(11) DEFAULT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Description` text DEFAULT NULL,
  `LeadTime` date DEFAULT NULL,
  `TodaysDate` date DEFAULT NULL,
  `CountDown` int(11) DEFAULT NULL,
  `CategoryId` int(11) DEFAULT NULL,
  `Status` varchar(20) DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminrequirements`
--

INSERT INTO `adminrequirements` (`Id`, `BuyerRequirementId`, `BuyerId`, `Pieces`, `TargetPrice`, `Name`, `Description`, `LeadTime`, `TodaysDate`, `CountDown`, `CategoryId`, `Status`) VALUES
(1, 1, 3, 200, 10000, 'Testing Product 1', 'This is the description of testing product 1', '2023-12-01', '2023-11-29', 20, 1, 'Pending'),
(2, 3, 4, 30, 30000, 'Testing Product 3', 'this is the description of testing product 3', '2023-11-29', '2023-11-29', 3003, 1, 'Pending'),
(3, 2, 3, 300, 30000, 'Testing Product 3', 'This is the description of testing product 2', '2023-12-01', '2023-11-29', 0, 1, 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `bidding`
--

CREATE TABLE `bidding` (
  `Id` int(11) NOT NULL,
  `SupplierId` int(11) DEFAULT NULL,
  `AdminRequirementId` int(11) DEFAULT NULL,
  `BuyerRequirementId` int(11) NOT NULL,
  `Pieces` int(11) DEFAULT NULL,
  `TargetPrice` decimal(10,2) DEFAULT NULL,
  `LeadTime` date DEFAULT NULL,
  `Status` varchar(50) DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bidding`
--

INSERT INTO `bidding` (`Id`, `SupplierId`, `AdminRequirementId`, `BuyerRequirementId`, `Pieces`, `TargetPrice`, `LeadTime`, `Status`) VALUES
(1, 1, 1, 1, 200, 10000.00, '2023-12-01', 'Completed'),
(2, 1, 2, 3, 30, 25000.00, '2023-11-29', 'Rejected'),
(3, 2, 2, 3, 30, 20000.00, '2023-11-29', 'Completed'),
(4, 1, 1, 1, 200, 10000.00, '2023-12-01', 'Completed'),
(5, 1, 1, 1, 200, 10000.00, '2023-12-01', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `buyerrequirement`
--

CREATE TABLE `buyerrequirement` (
  `Id` int(11) NOT NULL,
  `BuyerId` int(11) DEFAULT NULL,
  `Pieces` int(11) DEFAULT NULL,
  `TargetPrice` decimal(10,2) DEFAULT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Description` text DEFAULT NULL,
  `LeadTime` date DEFAULT NULL,
  `TodaysDate` date DEFAULT NULL,
  `Status` varchar(20) DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `buyerrequirement`
--

INSERT INTO `buyerrequirement` (`Id`, `BuyerId`, `Pieces`, `TargetPrice`, `Name`, `Description`, `LeadTime`, `TodaysDate`, `Status`) VALUES
(1, 3, 200, 20000.00, 'Testing Product 1', 'This is the description of testing product 1', '2023-12-01', '2023-11-29', 'Pending'),
(2, 3, 300, 30000.00, 'Testing Product 2', 'This is the description of testing product 2', '2023-12-01', '2023-11-29', 'Pending'),
(3, 4, 30, 30000.00, 'Testing Product 3', 'this is the description of testing product 3', '2023-11-29', '2023-11-29', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `Id` int(11) NOT NULL,
  `Name` varchar(250) NOT NULL,
  `Description` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`Id`, `Name`, `Description`) VALUES
(1, 'Nal', 'This is the nal');

-- --------------------------------------------------------

--
-- Table structure for table `requirementimages`
--

CREATE TABLE `requirementimages` (
  `Id` int(11) NOT NULL,
  `BuyerRequirementId` int(11) DEFAULT NULL,
  `ImageName` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `requirementimages`
--

INSERT INTO `requirementimages` (`Id`, `BuyerRequirementId`, `ImageName`) VALUES
(1, 1, '1701204069-Brass-Components.jpg'),
(2, 2, '1701204130-images.jpeg'),
(3, 3, '1701206102-brass-comp.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `Id` int(11) NOT NULL,
  `Name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`Id`, `Name`) VALUES
(1, 'Admin'),
(2, 'Supplier'),
(3, 'Buyer');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Id` int(11) NOT NULL,
  `RoleId` int(11) NOT NULL,
  `Name` varchar(250) NOT NULL,
  `Password` varchar(250) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `MobileNumber` varchar(250) NOT NULL,
  `Business` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `RoleId`, `Name`, `Password`, `Email`, `MobileNumber`, `Business`) VALUES
(1, 2, 'Testing Supplier 1', 'admin', 'testing@gmail.com', '9712791515', 'Brass Part'),
(2, 2, 'Testing Supplier 2', 'admin', 'testing@gmail.com', '9712791515', 'Brass Part'),
(3, 3, 'Testing Buyer 1', 'admin', 'testing@gmail.com', '9712791515', 'Brass Part'),
(4, 3, 'Testing Buyer 2', 'admin', 'testing@gmail.com', '9712791515', 'Brass Part'),
(5, 2, 'Testing Supplier 3', 'admin', 'testing@gmail.com', '9712791515', 'Brass Part'),
(6, 3, 'Testing Buyer 3', 'admin', 'testing@gmail.com', '9499815372', 'Brass Part'),
(7, 1, 'S K Enterprise', 'admin', 'testing@gmail.com', '9712791515', 'Brass Part'),
(8, 3, 'Testing Buyer 4', 'admin', 'This is my full address', '9712791515', 'Brass Part');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminrequirements`
--
ALTER TABLE `adminrequirements`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `BuyerRequirementId` (`BuyerRequirementId`),
  ADD KEY `BuyerId` (`BuyerId`),
  ADD KEY `CategoryId` (`CategoryId`);

--
-- Indexes for table `bidding`
--
ALTER TABLE `bidding`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `SupplierId` (`SupplierId`),
  ADD KEY `AdminRequirementId` (`AdminRequirementId`),
  ADD KEY `BuyerRequirementId` (`BuyerRequirementId`);

--
-- Indexes for table `buyerrequirement`
--
ALTER TABLE `buyerrequirement`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `BuyerId` (`BuyerId`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `requirementimages`
--
ALTER TABLE `requirementimages`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `BuyerRequirementId` (`BuyerRequirementId`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `RoleId` (`RoleId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminrequirements`
--
ALTER TABLE `adminrequirements`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bidding`
--
ALTER TABLE `bidding`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `buyerrequirement`
--
ALTER TABLE `buyerrequirement`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `requirementimages`
--
ALTER TABLE `requirementimages`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `adminrequirements`
--
ALTER TABLE `adminrequirements`
  ADD CONSTRAINT `adminrequirements_ibfk_1` FOREIGN KEY (`BuyerRequirementId`) REFERENCES `buyerrequirement` (`Id`),
  ADD CONSTRAINT `adminrequirements_ibfk_2` FOREIGN KEY (`BuyerId`) REFERENCES `users` (`Id`),
  ADD CONSTRAINT `adminrequirements_ibfk_3` FOREIGN KEY (`CategoryId`) REFERENCES `category` (`Id`);

--
-- Constraints for table `bidding`
--
ALTER TABLE `bidding`
  ADD CONSTRAINT `bidding_ibfk_1` FOREIGN KEY (`SupplierId`) REFERENCES `users` (`Id`),
  ADD CONSTRAINT `bidding_ibfk_2` FOREIGN KEY (`AdminRequirementId`) REFERENCES `adminrequirements` (`Id`),
  ADD CONSTRAINT `bidding_ibfk_3` FOREIGN KEY (`BuyerRequirementId`) REFERENCES `buyerrequirement` (`Id`);

--
-- Constraints for table `buyerrequirement`
--
ALTER TABLE `buyerrequirement`
  ADD CONSTRAINT `buyerrequirement_ibfk_1` FOREIGN KEY (`BuyerId`) REFERENCES `users` (`Id`);

--
-- Constraints for table `requirementimages`
--
ALTER TABLE `requirementimages`
  ADD CONSTRAINT `requirementimages_ibfk_1` FOREIGN KEY (`BuyerRequirementId`) REFERENCES `buyerrequirement` (`Id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`RoleId`) REFERENCES `roles` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
