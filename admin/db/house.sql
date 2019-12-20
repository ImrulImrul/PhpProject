-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 14, 2019 at 03:40 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `house`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_employee`
--

DROP TABLE IF EXISTS `add_employee`;
CREATE TABLE IF NOT EXISTS `add_employee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `phone_no` text NOT NULL,
  `designation` text NOT NULL,
  `salary` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_employee`
--

INSERT INTO `add_employee` (`id`, `name`, `phone_no`, `designation`, `salary`) VALUES
(1, 'sojoy', '1238873', 'hestkjsdfjakd', '100000000');

-- --------------------------------------------------------

--
-- Table structure for table `add_employee_bill`
--

DROP TABLE IF EXISTS `add_employee_bill`;
CREATE TABLE IF NOT EXISTS `add_employee_bill` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `designation` text NOT NULL,
  `amount` text NOT NULL,
  `payment` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_employee_bill`
--

INSERT INTO `add_employee_bill` (`id`, `name`, `designation`, `amount`, `payment`) VALUES
(1, 'mou', 'tetettete', '1222', '222'),
(2, 'mou', 'hestkjsdfjakd', '100', '44'),
(3, 'mou', 'hestkjsdfjakd', '100', '44'),
(8, 'razu', 'hestkjsdfjakd', '2', '222'),
(9, 'razu', 'hestkjsdfjakd', '2', '222');

-- --------------------------------------------------------

--
-- Table structure for table `add_flat`
--

DROP TABLE IF EXISTS `add_flat`;
CREATE TABLE IF NOT EXISTS `add_flat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `floor_no` text NOT NULL,
  `flat_no` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_flat`
--

INSERT INTO `add_flat` (`id`, `floor_no`, `flat_no`) VALUES
(1, '1', '2');

-- --------------------------------------------------------

--
-- Table structure for table `add_resident`
--

DROP TABLE IF EXISTS `add_resident`;
CREATE TABLE IF NOT EXISTS `add_resident` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `phone_no` text NOT NULL,
  `flat_no` text NOT NULL,
  `floor` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_resident`
--

INSERT INTO `add_resident` (`id`, `name`, `phone_no`, `flat_no`, `floor`) VALUES
(1, 'razu', '13123123', '1', '1'),
(2, 'Cocmic', '1234567890', '3', '2');

-- --------------------------------------------------------

--
-- Table structure for table `add_room`
--

DROP TABLE IF EXISTS `add_room`;
CREATE TABLE IF NOT EXISTS `add_room` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `room_title` text NOT NULL,
  `amount` text NOT NULL,
  `size` text NOT NULL,
  `bed` text NOT NULL,
  `capacity` text NOT NULL,
  `services` text NOT NULL,
  `image` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_room`
--

INSERT INTO `add_room` (`id`, `room_title`, `amount`, `size`, `bed`, `capacity`, `services`, `image`) VALUES
(2, 'Royal Room', '100', '30', 'King Beds', 'Max 5 person', 'Wifi, television ...', '47.jpg'),
(5, 'Active Family Gates House', '300', '33', 'Special', 'Max 6 Person', 'ac television ,wifi', '47.jpg'),
(4, 'Bangle room', '500', '32', 'dhaka,kingdom', 'max 10 person', 'Wifi, television ,ac', 'download.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `add_user`
--

DROP TABLE IF EXISTS `add_user`;
CREATE TABLE IF NOT EXISTS `add_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` text NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_user`
--

INSERT INTO `add_user` (`id`, `user_name`, `password`) VALUES
(7, 'Ashik', '1234567'),
(6, 'Aronno Razu', '12345678'),
(8, 'Cosmic ', '123456ytdsa');

-- --------------------------------------------------------

--
-- Table structure for table `add_utilites`
--

DROP TABLE IF EXISTS `add_utilites`;
CREATE TABLE IF NOT EXISTS `add_utilites` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `service_name` text NOT NULL,
  `amount` text NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_utilites`
--

INSERT INTO `add_utilites` (`id`, `service_name`, `amount`, `description`) VALUES
(1, 'Ac/Room', '3000', 'fresh room ......');

-- --------------------------------------------------------

--
-- Table structure for table `add_visitor`
--

DROP TABLE IF EXISTS `add_visitor`;
CREATE TABLE IF NOT EXISTS `add_visitor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `phone_no` text NOT NULL,
  `flat_no` text NOT NULL,
  `floor` text NOT NULL,
  `enter_time` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_visitor`
--

INSERT INTO `add_visitor` (`id`, `name`, `phone_no`, `flat_no`, `floor`, `enter_time`) VALUES
(1, 'ashik', '13123123', '3', '1', '12:00');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `message`) VALUES
(6, 'Aronno Razu', 'rjrazu100@gmail.com', 'I am The Best'),
(5, 'sojoy', 'rjrazu100@gmail.com', 'ssssssssssssss');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

DROP TABLE IF EXISTS `notice`;
CREATE TABLE IF NOT EXISTS `notice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `image` text NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `title`, `image`, `description`) VALUES
(7, 'amar shonar bangla', 'menktc_217078-bb-500x500.jpg', '<p>aaaaaaaa</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE IF NOT EXISTS `payment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `flat_no` text NOT NULL,
  `month` text NOT NULL,
  `date` text NOT NULL,
  `amount` text NOT NULL,
  `due` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `flat_no`, `month`, `date`, `amount`, `due`) VALUES
(2, '', 'jan', '2019-07-02', '100', '4'),
(3, '', 'jan', '2019-07-02', '2', '1');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
