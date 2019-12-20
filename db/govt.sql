-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2019 at 01:36 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `govt`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_employee`
--

CREATE TABLE `add_employee` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `phone_no` text NOT NULL,
  `designation` text NOT NULL,
  `salary` float NOT NULL,
  `description` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_employee`
--

INSERT INTO `add_employee` (`id`, `name`, `phone_no`, `designation`, `salary`, `description`) VALUES
(11, 'Imrul', '01912345343', 'swe', 100, 'student');

-- --------------------------------------------------------

--
-- Table structure for table `add_employee_bill`
--

CREATE TABLE `add_employee_bill` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `designation` text NOT NULL,
  `amount` text NOT NULL,
  `payment` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_employee_bill`
--

INSERT INTO `add_employee_bill` (`id`, `name`, `designation`, `amount`, `payment`) VALUES
(23, '11', 'swe', '100', '20');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `user_password` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_id`, `user_name`, `user_password`) VALUES
(1, 'Admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `user_password` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`user_id`, `user_name`, `user_password`) VALUES
(1, 'employee', 'fa5473530e4d1a5a1e1eb53d2fedb10c');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `username`, `email`, `password`) VALUES
(1, ' a', 'razu@gmail.com', '202cb962ac59075b964b07152d234b70'),
(2, ' a', 'a@gmail.com', '202cb962ac59075b964b07152d234b70'),
(3, ' as', 'as@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b'),
(4, ' a', 'a@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b'),
(5, ' a', 'a@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b'),
(6, ' a', 'a@gmail.com', '0cc175b9c0f1b6a831c399e269772661'),
(7, ' imrul', 'imrul@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(8, 'b', 'b@gmail.com', '96e79218965eb72c92a549dd5a330112'),
(9, ' imrul', 'imrul@gmail.com', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `govt_circular`
--

CREATE TABLE `govt_circular` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `govt_circular`
--

INSERT INTO `govt_circular` (`id`, `title`, `description`) VALUES
(11, 'sasasasas', '<p><a href=\"https://www.jobs77.com/job/Neurologist_Physician_Job_job_in_Washington_WA_neurology_neurologist_iamaneurologist_aanam-134870729.html\">https://www.jobs77.com/job/Neurologist_Physician_Job_job_in_Washington_WA_neurology_neurologist_iamaneurologist_aanam-134870729.html</a></p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `letter_box`
--

CREATE TABLE `letter_box` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `letter_box`
--

INSERT INTO `letter_box` (`id`, `title`, `description`) VALUES
(13, 'sssss', '<p>ssss</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `title`, `description`) VALUES
(9, 'Magic Village Trademark Collection by Wyndham', '<p>Magic Village Yards Orlando Near Disney is situated in Orlando, Florida, 4 km from Disney&#39;s Hollywood Studios. The resort has an outdoor heated pool and guests can enjoy lunch and dinner at the restaurant.</p>\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_employee`
--
ALTER TABLE `add_employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_employee_bill`
--
ALTER TABLE `add_employee_bill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `govt_circular`
--
ALTER TABLE `govt_circular`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `letter_box`
--
ALTER TABLE `letter_box`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_employee`
--
ALTER TABLE `add_employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `add_employee_bill`
--
ALTER TABLE `add_employee_bill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `govt_circular`
--
ALTER TABLE `govt_circular`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `letter_box`
--
ALTER TABLE `letter_box`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
