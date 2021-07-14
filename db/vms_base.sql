-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 14, 2021 at 09:39 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
  `create_by` int(11) DEFAULT NULL,
  `update_by` int(11) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `model_list_tb`
--

DROP TABLE IF EXISTS `model_list_tb`;
CREATE TABLE IF NOT EXISTS `model_list_tb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `permission_group_tb`
--

DROP TABLE IF EXISTS `permission_group_tb`;
CREATE TABLE IF NOT EXISTS `permission_group_tb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group_name` varchar(10) NOT NULL,
  `user_type` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `permission_group_tb`
--

INSERT INTO `permission_group_tb` (`id`, `group_name`, `user_type`) VALUES
(1, 'superadmin', 1),
(2, 'admin', 2),
(3, 'user', 3);

-- --------------------------------------------------------

--
-- Table structure for table `permission_tb`
--

DROP TABLE IF EXISTS `permission_tb`;
CREATE TABLE IF NOT EXISTS `permission_tb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group_id` int(11) NOT NULL,
  `permission` varchar(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `permission_tb`
--

INSERT INTO `permission_tb` (`id`, `group_id`, `permission`) VALUES
(1, 1, 'vehicle-details-add-show'),
(2, 1, 'vehicle-details-add'),
(3, 1, 'vehicle-details-edit'),
(4, 1, 'vehicle-details-delete'),
(5, 2, 'vehicle-details-add-show'),
(6, 2, 'vehicle-details-add'),
(7, 2, 'vehicle-details-edit'),
(8, 2, 'vehicle-details-delete'),
(9, 1, 'fuel-add-show'),
(10, 1, 'fuel-add'),
(11, 1, 'fuel-edit'),
(12, 1, 'fuel-delete'),
(13, 2, 'fuel-add-show'),
(14, 2, 'fuel-add'),
(15, 2, 'fuel-edit'),
(16, 2, 'fuel-delete'),
(17, 1, 'import-show'),
(18, 1, 'import-vd'),
(19, 1, 'import-rov'),
(20, 1, 'import-cr'),
(21, 1, 'user-add-show'),
(22, 1, 'user-add'),
(23, 1, 'user-edit'),
(24, 1, 'user-delete'),
(25, 1, 'vehicle-details-delete-all'),
(26, 1, 'user-show-all'),
(27, 1, 'user-show-details');

-- --------------------------------------------------------

--
-- Table structure for table `usage_list_tb`
--

DROP TABLE IF EXISTS `usage_list_tb`;
CREATE TABLE IF NOT EXISTS `usage_list_tb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users_tb`
--

DROP TABLE IF EXISTS `users_tb`;
CREATE TABLE IF NOT EXISTS `users_tb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(15) DEFAULT NULL,
  `last_name` varchar(15) DEFAULT NULL,
  `id_no` varchar(12) NOT NULL,
  `phone_no` varchar(12) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_tb`
--

INSERT INTO `users_tb` (`id`, `first_name`, `last_name`, `id_no`, `phone_no`, `email`, `password`) VALUES
(1, 'Suneth', 'Senanayake', '900020031V', '0711041717', 'suneth.ucsc@gmail.com', '$2a$08$Ftye58Q9ZGnvqm1VaoXGLumCuEkVJQzy3OdgqmmtMqvOs0DCHU0.6'),
(3, 'Tom', 'Cruise', '920020031V', '0711041713', 'tom@gmail.com', '$2a$08$Ftye58Q9ZGnvqm1VaoXGLumCuEkVJQzy3OdgqmmtMqvOs0DCHU0.6'),
(2, 'Deepika', 'Dissanayake', '910020031V', '0711041718', 'deepika@gmail.com', '$2a$08$Ftye58Q9ZGnvqm1VaoXGLumCuEkVJQzy3OdgqmmtMqvOs0DCHU0.6'),
(4, 'Bathiyax', 'Bandarax', '19900020003x', '07193672x', 'bathiya@sexymail.comx', '$2a$08$pNtAl1iuj2Im7CPGicaeS.xAgpiXmENKs1bCVhWvYMh4Niy/PR8La');

-- --------------------------------------------------------

--
-- Table structure for table `user_permission_tb`
--

DROP TABLE IF EXISTS `user_permission_tb`;
CREATE TABLE IF NOT EXISTS `user_permission_tb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_permission_tb`
--

INSERT INTO `user_permission_tb` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 3, 3),
(4, 4, 1),
(5, 5, 3),
(6, 6, 2),
(7, 7, 2);

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
  `create_by` int(11) DEFAULT NULL,
  `update_by` int(11) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9998 DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
