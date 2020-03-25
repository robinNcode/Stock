-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2020 at 05:17 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sms`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(100) NOT NULL,
  `Category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `Category`) VALUES
(3, 'Electronics'),
(6, 'Plastic & PVC'),
(7, 'Plastic'),
(8, 'Fridge'),
(10, 'Cosmatics'),
(11, 'Food'),
(12, 'Phone'),
(14, 'Fast Food'),
(15, 'Drinks & Braverages'),
(16, 'Vegetables'),
(20, 'Sationary'),
(21, 'Phone'),
(22, 'Soap');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(100) NOT NULL,
  `company` varchar(100) NOT NULL,
  `representative` varchar(100) NOT NULL,
  `conum` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `company`, `representative`, `conum`) VALUES
(15, 'RFL', 'Sajib', '1287383112'),
(16, 'Uniliver', 'Rupa', '1902320303'),
(17, 'Walton', 'Hafiz', '01789097402'),
(19, 'Pran', 'Ayan', '01676763432'),
(20, 'Lava', 'Robin', '01318515718'),
(21, 'SamSung', 'Taki Kawser', '01978645624'),
(22, 'HTC', 'Ayan Mulla', '01676763432'),
(23, 'Nongar', 'Bishawjit', '01687287212'),
(24, 'LakeME', 'Riyana Chawdhuri', '01578778887'),
(25, 'Emami', 'Hafijul Islam', '01863376845'),
(26, 'Symphony', 'Shafiqul Islam', '01963225220'),
(27, 'LUX', 'FARJANA', '01739299741');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `id` int(100) NOT NULL,
  `item` varchar(100) NOT NULL,
  `company` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `level` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`id`, `item`, `company`, `category`, `level`) VALUES
(7, 'Make Up Box', 'Uniliver', 'Cosmatics', 22),
(8, 'Primo H11', 'Walton', '', 25),
(9, 'iris 860', 'Lava', '', 33),
(10, 'galaxy j7', 'SamSung', 'Phone', 34),
(11, 'Soap', 'LUX', 'Soap', 33);

-- --------------------------------------------------------

--
-- Table structure for table `stockin`
--

CREATE TABLE `stockin` (
  `id` int(100) NOT NULL,
  `p_date` varchar(100) NOT NULL,
  `p_company` varchar(100) NOT NULL,
  `p_item` varchar(100) NOT NULL,
  `purchase_quantity` varchar(100) NOT NULL,
  `reorder_level` varchar(100) NOT NULL,
  `available_quantity` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stockin`
--

INSERT INTO `stockin` (`id`, `p_date`, `p_company`, `p_item`, `purchase_quantity`, `reorder_level`, `available_quantity`) VALUES
(1, '2020-03-25', 'Lava', 'iris 860', '29', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `stockout`
--

CREATE TABLE `stockout` (
  `id` int(11) NOT NULL,
  `s_date` int(11) NOT NULL,
  `s_company` int(11) NOT NULL,
  `s_item` int(11) NOT NULL,
  `sell_quantity` int(11) NOT NULL,
  `available_quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stockout`
--

INSERT INTO `stockout` (`id`, `s_date`, `s_company`, `s_item`, `sell_quantity`, `available_quantity`) VALUES
(1, 0, 0, 0, 21, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stockin`
--
ALTER TABLE `stockin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stockout`
--
ALTER TABLE `stockout`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `stockin`
--
ALTER TABLE `stockin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `stockout`
--
ALTER TABLE `stockout`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
