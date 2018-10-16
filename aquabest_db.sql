-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2018 at 11:28 AM
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
-- Database: `aquabest_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_t`
--

CREATE TABLE `admin_t` (
  `id` int(11) NOT NULL,
  `user` varchar(32) DEFAULT NULL,
  `pass` varchar(32) DEFAULT NULL,
  `lname` varchar(32) DEFAULT NULL,
  `fname` varchar(32) DEFAULT NULL,
  `mname` varchar(32) DEFAULT NULL,
  `phone_num` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer_t`
--

CREATE TABLE `customer_t` (
  `id` int(11) NOT NULL,
  `lname` varchar(32) DEFAULT NULL,
  `fname` varchar(32) DEFAULT NULL,
  `mname` varchar(32) DEFAULT NULL,
  `phone_num` varchar(32) DEFAULT NULL,
  `address` varchar(32) DEFAULT NULL,
  `no_purchase` int(11) DEFAULT NULL,
  `pen_return` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gallon_t`
--

CREATE TABLE `gallon_t` (
  `id` int(11) NOT NULL,
  `gallonhand` int(11) DEFAULT NULL,
  `purchase_id` int(11) DEFAULT NULL,
  `return_id` int(11) DEFAULT NULL,
  `no_sold` int(11) DEFAULT NULL,
  `no_ret` int(11) DEFAULT NULL,
  `product_price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `purchase_t`
--

CREATE TABLE `purchase_t` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `gallon_id` int(11) DEFAULT NULL,
  `DOP` timestamp NULL DEFAULT NULL,
  `no_sold` int(11) DEFAULT NULL,
  `lname` varchar(32) DEFAULT NULL,
  `fname` varchar(32) DEFAULT NULL,
  `mname` varchar(32) DEFAULT NULL,
  `phone_num` varchar(11) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `gallon_price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `return_t`
--

CREATE TABLE `return_t` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `gallon_id` int(11) DEFAULT NULL,
  `DOR` timestamp NULL DEFAULT NULL,
  `no_return` int(11) DEFAULT NULL,
  `lname` varchar(32) DEFAULT NULL,
  `fname` varchar(32) DEFAULT NULL,
  `mname` varchar(32) DEFAULT NULL,
  `phone_num` varchar(11) NOT NULL,
  `address` varchar(100) DEFAULT NULL
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
  ADD PRIMARY KEY (`id`),
  ADD KEY `lname` (`lname`,`fname`,`mname`,`phone_num`,`address`),
  ADD KEY `lname_2` (`lname`,`fname`,`mname`,`phone_num`,`address`,`no_purchase`),
  ADD KEY `lname_3` (`lname`),
  ADD KEY `lname_4` (`lname`,`fname`,`mname`,`phone_num`,`address`,`no_purchase`),
  ADD KEY `lname_5` (`lname`,`fname`,`mname`,`phone_num`,`address`,`no_purchase`),
  ADD KEY `lname_6` (`lname`),
  ADD KEY `fname` (`fname`,`mname`,`phone_num`,`address`),
  ADD KEY `mname` (`mname`),
  ADD KEY `phone_num` (`phone_num`,`address`),
  ADD KEY `phone_num_2` (`phone_num`),
  ADD KEY `address` (`address`),
  ADD KEY `no_purchase` (`no_purchase`);

--
-- Indexes for table `gallon_t`
--
ALTER TABLE `gallon_t`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_price` (`product_price`);

--
-- Indexes for table `purchase_t`
--
ALTER TABLE `purchase_t`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `purchase_t_ibfk_2` (`lname`),
  ADD KEY `purchase_t_ibfk_3` (`fname`),
  ADD KEY `purchase_t_ibfk_4` (`gallon_id`),
  ADD KEY `purchase_t_ibfk_5` (`mname`),
  ADD KEY `phone_num` (`phone_num`),
  ADD KEY `address` (`address`),
  ADD KEY `gallon_price` (`gallon_price`);

--
-- Indexes for table `return_t`
--
ALTER TABLE `return_t`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lname` (`lname`),
  ADD KEY `fname` (`fname`),
  ADD KEY `mname` (`mname`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `gallon_id` (`gallon_id`),
  ADD KEY `phone_num` (`phone_num`),
  ADD KEY `address` (`address`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_t`
--
ALTER TABLE `admin_t`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer_t`
--
ALTER TABLE `customer_t`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gallon_t`
--
ALTER TABLE `gallon_t`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `purchase_t`
--
ALTER TABLE `purchase_t`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `return_t`
--
ALTER TABLE `return_t`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer_t`
--
ALTER TABLE `customer_t`
  ADD CONSTRAINT `customer_t_ibfk_1` FOREIGN KEY (`no_purchase`) REFERENCES `purchase_t` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `purchase_t`
--
ALTER TABLE `purchase_t`
  ADD CONSTRAINT `purchase_t_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer_t` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `purchase_t_ibfk_2` FOREIGN KEY (`lname`) REFERENCES `customer_t` (`lname`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `purchase_t_ibfk_3` FOREIGN KEY (`fname`) REFERENCES `customer_t` (`fname`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `purchase_t_ibfk_4` FOREIGN KEY (`gallon_id`) REFERENCES `gallon_t` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `purchase_t_ibfk_5` FOREIGN KEY (`mname`) REFERENCES `customer_t` (`mname`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `purchase_t_ibfk_6` FOREIGN KEY (`phone_num`) REFERENCES `customer_t` (`phone_num`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `purchase_t_ibfk_7` FOREIGN KEY (`address`) REFERENCES `customer_t` (`address`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `purchase_t_ibfk_8` FOREIGN KEY (`gallon_price`) REFERENCES `gallon_t` (`product_price`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `return_t`
--
ALTER TABLE `return_t`
  ADD CONSTRAINT `return_t_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer_t` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `return_t_ibfk_2` FOREIGN KEY (`lname`) REFERENCES `customer_t` (`lname`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `return_t_ibfk_3` FOREIGN KEY (`fname`) REFERENCES `customer_t` (`fname`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `return_t_ibfk_4` FOREIGN KEY (`mname`) REFERENCES `customer_t` (`mname`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `return_t_ibfk_5` FOREIGN KEY (`customer_id`) REFERENCES `customer_t` (`id`),
  ADD CONSTRAINT `return_t_ibfk_6` FOREIGN KEY (`gallon_id`) REFERENCES `gallon_t` (`id`),
  ADD CONSTRAINT `return_t_ibfk_7` FOREIGN KEY (`phone_num`) REFERENCES `customer_t` (`phone_num`),
  ADD CONSTRAINT `return_t_ibfk_8` FOREIGN KEY (`address`) REFERENCES `customer_t` (`address`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
