-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2020 at 11:08 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testvkreate`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `email` varchar(50) NOT NULL,
  `Plant_ID` int(5) NOT NULL,
  `Qty` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `factory`
--

CREATE TABLE `factory` (
  `Company_name` varchar(50) NOT NULL,
  `Contact_no` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `factory`
--

INSERT INTO `factory` (`Company_name`, `Contact_no`) VALUES
('wonder cement', 1234123456),
('Classmate', 1029384756),
('natraj', 1928374655);

-- --------------------------------------------------------

--
-- Table structure for table `newpickup`
--

CREATE TABLE `newpickup` (
  `Name` varchar(30) NOT NULL,
  `Mobile_No` varchar(10) NOT NULL,
  `HNo` varchar(5) NOT NULL,
  `Street` varchar(15) NOT NULL,
  `Locality` varchar(20) NOT NULL,
  `Exchange` varchar(10) NOT NULL,
  `Date` date NOT NULL,
  `Slot` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `plant`
--

CREATE TABLE `plant` (
  `Plant_ID` int(5) NOT NULL,
  `Name` varchar(35) NOT NULL,
  `Location` varchar(15) NOT NULL,
  `Purchase_Price` int(5) NOT NULL,
  `Sell_Price` int(5) NOT NULL,
  `image` varchar(200) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `plant`
--

INSERT INTO `plant` (`Plant_ID`, `Name`, `Location`, `Purchase_Price`, `Sell_Price`, `image`, `status`) VALUES
(8, 'Snake Plant', 'indoor', 200, 250, 'nurserylive-sansevieria-trifasciata-snake-plant-var-laurentii-plant.jpg', 1),
(9, 'Peace Lily', 'indoor', 85, 135, 'nurserylive-peace-lily-spathiphyllum-small4.jpg', 1),
(10, 'Aloe Vera', 'indoor', 75, 125, 'Alovera plant.jpg', 1),
(11, 'Lucky bamboo', 'indoor', 142, 192, 'Lucky bamboo.jpg', 1),
(12, 'Ferns(Pteridophytes)', 'indoor', 85, 135, 'Ferns.jpg', 1),
(13, 'Chinese Evergreen', 'indoor', 90, 140, 'Chinese Evergreen.jpg', 1),
(14, 'Grape Ivy', 'indoor', 100, 150, 'Grape Ivy.jpg', 1),
(15, 'Flamingo Flower', 'indoor', 100, 150, 'Flamingo Flower.jpg', 1),
(16, 'Areca Palm', 'indoor', 150, 200, 'areca plam.jpg', 1),
(17, 'Money Plant', 'indoor', 100, 150, 'Money Plant.jpg', 1),
(18, 'Warneck Dracaena', 'indoor', 180, 230, 'Warneck  Dracaena.jpg', 1),
(19, 'Heart leaf philodendron', 'indoor', 150, 200, 'Heart leaf.jpg', 1),
(20, 'Green Spider Plant', 'indoor', 100, 150, 'Green Spider.jpg', 1),
(21, 'Croton', 'indoor', 100, 150, 'croton-petra.jpg', 0),
(22, 'Bamboo Plant ', 'outdoor', 120, 170, 'Bamboo Plant.jpg', 1),
(23, 'Neem Tree', 'outdoor', 50, 100, 'neem-plant.jpg', 1),
(24, 'Sheesham Plant', 'outdoor', 120, 170, 'Sheesham Plant.jpeg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `plant_order`
--

CREATE TABLE `plant_order` (
  `Order_ID` int(5) NOT NULL,
  `email` varchar(50) NOT NULL,
  `Total` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `plant_order`
--

INSERT INTO `plant_order` (`Order_ID`, `email`, `Total`) VALUES
(2, 'rahulbro@yopmail.com', 89),
(3, 'rahulbro@yopmail.com', 246);

-- --------------------------------------------------------

--
-- Table structure for table `scrap`
--

CREATE TABLE `scrap` (
  `Scrap_ID` int(5) NOT NULL,
  `Name` varchar(32) NOT NULL,
  `PR_GOOD` float NOT NULL,
  `PR_MED` float NOT NULL,
  `PR_BAD` float NOT NULL,
  `Purchase_rate` float NOT NULL,
  `Sell_rate` float NOT NULL,
  `Unit` varchar(15) NOT NULL,
  `image` varchar(200) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `scrap`
--

INSERT INTO `scrap` (`Scrap_ID`, `Name`, `PR_GOOD`, `PR_MED`, `PR_BAD`, `Purchase_rate`, `Sell_rate`, `Unit`, `image`, `status`) VALUES
(8, 'Die Steel Scrap', 1, 0.8, 0.5, 22, 30, 'per kg', 'Die Steel Scrap.jpg', 1),
(9, 'Alloy Steel Scrap ', 1, 0.8, 0.5, 190, 198, 'per kg', 'alloy-steel-scrap-500x500.jpg', 1),
(10, 'Bronze Scrap ', 1, 0.8, 0.5, 440, 448, 'per kg', 'Bronze.jpg', 1),
(11, 'Books ', 1, 0.8, 0.5, 10, 18, 'per kg', 'books.jpeg', 1),
(12, 'Cartoon Box ', 1, 0.8, 0.5, 6, 14, 'per kg', 'Cartoon Box.jpg', 1),
(13, 'Iron cans', 1, 0.8, 0.5, 22, 30, 'per kg', 'Cans Iron.jpg', 1),
(14, 'Plastic ', 1, 0.8, 0.5, 7, 15, 'per kg', 'Plastic.jpg', 1),
(15, 'Newspaper ', 1, 0.8, 0.5, 8, 16, 'per kg', 'newspaper.jpg', 1),
(16, 'Oil box iron', 1, 0.8, 0.5, 15, 23, 'per piece', 'oil tin.jpg', 1),
(17, 'copper', 1, 0.8, 0.5, 330, 338, 'per kg', 'copper.jpg', 1),
(18, 'E-Waste', 1, 0.8, 0.5, 40, 48, 'per kg', 'E-Waste.jpg', 1),
(19, 'Steel', 1, 0.8, 0.5, 33, 41, 'per kg', 'steel.jpg', 1),
(20, 'Tin', 1, 0.8, 0.5, 10, 18, 'per kg', 'Tin.jpg', 0),
(21, 'Inverter Battery', 1, 0.8, 0.5, 85, 93, 'per kg', 'Inverter Battery.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `scrap_pick`
--

CREATE TABLE `scrap_pick` (
  `Name` varchar(25) NOT NULL,
  `Mobile_No` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sell_plant`
--

CREATE TABLE `sell_plant` (
  `Order_ID` int(5) NOT NULL,
  `email` varchar(50) NOT NULL,
  `Plant_ID` int(5) NOT NULL,
  `Qty` int(3) NOT NULL,
  `Amount` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `id` int(11) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `verifyemail` varchar(50) DEFAULT NULL,
  `remember_tocken` varchar(100) DEFAULT NULL,
  `password` int(30) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`id`, `first_name`, `last_name`, `email`, `verifyemail`, `remember_tocken`, `password`, `status`) VALUES
(1, 'rahul', 'ahuja', 'ramram@yopmail.com', NULL, NULL, 11111111, 1),
(2, 'singh', 'sabh', 'singhsabh1@yopmail.com', NULL, NULL, 11111111, 1),
(3, 'Rounak', 'Sarda', 'ramram11@yopmail.com', NULL, NULL, 11111111, 1),
(4, 'rahul', 'singh', 'hellorah@yopmail.com', NULL, '62615226374cea32133f1531743e2088', 12341234, 2),
(5, 'sudarshan', 'chod', 'sudu@yopmail.com', NULL, NULL, 12341234, 1),
(6, 'rahul ', 'ahuja ', 'rahulbro@yopmail.com', NULL, NULL, 12341234, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

CREATE TABLE `user_type` (
  `id` int(11) NOT NULL,
  `type` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_type`
--

INSERT INTO `user_type` (`id`, `type`) VALUES
(1, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD KEY `plantid` (`Plant_ID`);

--
-- Indexes for table `plant`
--
ALTER TABLE `plant`
  ADD PRIMARY KEY (`Plant_ID`);

--
-- Indexes for table `plant_order`
--
ALTER TABLE `plant_order`
  ADD PRIMARY KEY (`Order_ID`);

--
-- Indexes for table `scrap`
--
ALTER TABLE `scrap`
  ADD PRIMARY KEY (`Scrap_ID`);

--
-- Indexes for table `sell_plant`
--
ALTER TABLE `sell_plant`
  ADD KEY `relorder` (`Order_ID`),
  ADD KEY `relplant` (`Plant_ID`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `plant`
--
ALTER TABLE `plant`
  MODIFY `Plant_ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `plant_order`
--
ALTER TABLE `plant_order`
  MODIFY `Order_ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `scrap`
--
ALTER TABLE `scrap`
  MODIFY `Scrap_ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `plantid` FOREIGN KEY (`Plant_ID`) REFERENCES `plant` (`Plant_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sell_plant`
--
ALTER TABLE `sell_plant`
  ADD CONSTRAINT `relorder` FOREIGN KEY (`Order_ID`) REFERENCES `plant_order` (`Order_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `relplant` FOREIGN KEY (`Plant_ID`) REFERENCES `plant` (`Plant_ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
