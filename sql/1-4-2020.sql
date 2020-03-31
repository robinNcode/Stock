-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2020 at 12:17 AM
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
(20, 'Sationary'),
(21, 'Phone'),
(22, 'Soap'),
(23, 'PVC');

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
(27, 'LUX', 'FARJANA', '01739299741'),
(28, 'WhiteTone', 'Safowan', '0192292834');

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
(15, 'Television', 'SamSung', 'Electronics', 11),
(16, 'Pencil HB-2', 'RFL', 'Sationary', 12);

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
(8, '2020-04-01', 'SamSung', '15', '11', '', ''),
(9, '2020-03-31', 'RFL', '16', '44', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `stockout`
--

CREATE TABLE `stockout` (
  `id` int(11) NOT NULL,
  `date` int(10) NOT NULL,
  `s_company` int(11) NOT NULL,
  `s_item` int(11) NOT NULL,
  `sell_quantity` int(11) NOT NULL,
  `available_quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stockout`
--

INSERT INTO `stockout` (`id`, `date`, `s_company`, `s_item`, `sell_quantity`, `available_quantity`) VALUES
(6, 2020, 0, 16, 5, 0);

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
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `stockin`
--
ALTER TABLE `stockin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `stockout`
--
ALTER TABLE `stockout`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
