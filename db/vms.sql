-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 20, 2021 at 10:47 PM
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
-- Table structure for table `vehicle_details_tb`
--

DROP TABLE IF EXISTS `vehicle_details_tb`;
CREATE TABLE IF NOT EXISTS `vehicle_details_tb` (
  `owner` varchar(225) DEFAULT NULL,
  `vehicle_number` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `model` int(11) DEFAULT NULL,
  `use_status` int(11) DEFAULT NULL,
  `expense` decimal(10,0) DEFAULT NULL,
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
  `file_no_book_no` varchar(100) DEFAULT NULL,
  `brand` varchar(100) DEFAULT NULL,
  `director_division` varchar(225) DEFAULT NULL,
  `sub_division` varchar(225) DEFAULT NULL,
  PRIMARY KEY (`vehicle_number`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle_details_tb`
--

INSERT INTO `vehicle_details_tb` (`owner`, `vehicle_number`, `model`, `use_status`, `expense`, `location`, `type`, `running_status`, `other_details`, `officer_name`, `designation`, `workplace`, `grade`, `status_designation`, `monthly_fuel_allowance`, `monthly_fuel_intake`, `other_note`, `file_number`, `file_no_book_no`, `brand`, `director_division`, `sub_division`) VALUES
('Aliquid officia quis', '100', 2, 0, '0', 'Accusamus porro et a', 3, 2, 'Ut magni recusandae', 'Marah Mccullough', 'Irure assumenda ipsu', 'Labore nihil sit ut', 0, 4, 0, 7, 'Voluptas nihil non s', '962', '0', 'Sint in dolor non au', 'Pariatur Sunt elit', 'Nemo temporibus aut'),
('In molestiae soluta', '630', 17, 6, '1231212', 'Quo eveniet asperna', 7, 1, 'Non asperiores ut qu', 'Maggy Browning', 'Consequatur Eaque s', 'Non laborum Pariatu', 1, 2, 1, 7, 'Quia alias nisi temp', '625', 'Et voluptatem Sed l', 'Quidem harum nulla v', 'Sit voluptatum itaqu', 'Id aute aliquam beat'),
('Ea eum voluptate aut', '107', 9, 6, '0', 'Dolor voluptatum sit', 5, 3, 'Aut aliquam aute ali', 'සුනෙත්', 'Dolor ex sint delect', 'Laborum ut unde et s', 0, 1, 1, 10, 'Voluptatem Suscipit', '34', 'Aperiam ad hic quibu', 'Officia ut consectet', 'Ea hic duis sit cum', 'Sint ratione eaque m');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
