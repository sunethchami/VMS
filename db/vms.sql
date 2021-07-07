-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 07, 2021 at 08:52 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vms`
--

-- --------------------------------------------------------

--
-- Table structure for table `additional_fuel_tb`
--

DROP TABLE IF EXISTS `additional_fuel_tb`;
CREATE TABLE IF NOT EXISTS `additional_fuel_tb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `index_no` int(11) NOT NULL,
  `vehicle_number` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `month` int(11) NOT NULL,
  `value` decimal(10,2) NOT NULL,
  `application_received_date` date NOT NULL,
  `shortcomings` varchar(225) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `revised_application_resend_date` date NOT NULL,
  `date_application_send_approval` date NOT NULL,
  `date_receiving_approval` date NOT NULL,
  `date_sending_approval` date NOT NULL,
  `other_details` varchar(225) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `model_list_tb`
--

DROP TABLE IF EXISTS `model_list_tb`;
CREATE TABLE IF NOT EXISTS `model_list_tb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `usage_list_tb`
--

DROP TABLE IF EXISTS `usage_list_tb`;
CREATE TABLE IF NOT EXISTS `usage_list_tb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_details_tb`
--

DROP TABLE IF EXISTS `vehicle_details_tb`;
CREATE TABLE IF NOT EXISTS `vehicle_details_tb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `owner` varchar(225) DEFAULT NULL,
  `vehicle_number` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `model` int(11) DEFAULT NULL,
  `use_status` int(11) DEFAULT NULL,
  `expense` decimal(10,2) DEFAULT NULL,
  `location` varchar(225) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `running_status` int(11) DEFAULT NULL,
  `other_details` varchar(225) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `officer_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `designation` varchar(225) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `workplace` varchar(225) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `grade` int(11) DEFAULT NULL,
  `status_designation` int(11) DEFAULT NULL,
  `monthly_fuel_allowance` int(11) DEFAULT NULL,
  `monthly_fuel_intake` int(11) DEFAULT NULL,
  `other_note` varchar(225) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `file_number` varchar(225) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `file_no_book_no` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `brand` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `director_division` varchar(225) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `sub_division` varchar(225) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
