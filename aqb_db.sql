-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2018 at 05:55 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aqb_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_t`
--

CREATE TABLE `admin_t` (
  `id` int(11) NOT NULL,
  `username` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_t`
--

INSERT INTO `admin_t` (`id`, `username`, `email`, `name`, `password`) VALUES
(1, 'admin', 'var@rocketmale', 'SirBossMan', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `customer_t`
--

CREATE TABLE `customer_t` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `address` longtext,
  `contact` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_t`
--

INSERT INTO `customer_t` (`id`, `name`, `address`, `contact`) VALUES
(1, 'John Doe', 'nowhere', '667');

-- --------------------------------------------------------

--
-- Table structure for table `customer_transaction_t`
--

CREATE TABLE `customer_transaction_t` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `transaction_id` int(11) NOT NULL,
  `inventory_id` int(11) NOT NULL,
  `assed_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `inventory_t`
--

CREATE TABLE `inventory_t` (
  `id` int(11) NOT NULL,
  `stock` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaction_t`
--

CREATE TABLE `transaction_t` (
  `id` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `in_progress` tinyint(4) DEFAULT '1',
  `gallon_used` int(11) DEFAULT NULL,
  `remit` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_t`
--
ALTER TABLE `admin_t`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_t`
--
ALTER TABLE `customer_t`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_transaction_t`
--
ALTER TABLE `customer_transaction_t`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `transaction_id` (`transaction_id`),
  ADD KEY `inventory_id` (`inventory_id`),
  ADD KEY `customer_transaction_t_ibfk_4` (`assed_by`);

--
-- Indexes for table `inventory_t`
--
ALTER TABLE `inventory_t`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction_t`
--
ALTER TABLE `transaction_t`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_t`
--
ALTER TABLE `admin_t`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer_t`
--
ALTER TABLE `customer_t`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer_transaction_t`
--
ALTER TABLE `customer_transaction_t`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inventory_t`
--
ALTER TABLE `inventory_t`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaction_t`
--
ALTER TABLE `transaction_t`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer_transaction_t`
--
ALTER TABLE `customer_transaction_t`
  ADD CONSTRAINT `customer_transaction_t_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer_t` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `customer_transaction_t_ibfk_2` FOREIGN KEY (`transaction_id`) REFERENCES `transaction_t` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `customer_transaction_t_ibfk_3` FOREIGN KEY (`inventory_id`) REFERENCES `inventory_t` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `customer_transaction_t_ibfk_4` FOREIGN KEY (`assed_by`) REFERENCES `admin_t` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
