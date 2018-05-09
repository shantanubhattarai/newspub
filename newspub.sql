-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2018 at 08:21 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newspub`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_number`
--

CREATE TABLE `contact_number` (
  `staff_id` int(11) DEFAULT NULL,
  `contact_number` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staff_category`
--

CREATE TABLE `staff_category` (
  `id` int(11) NOT NULL,
  `category` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff_category`
--

INSERT INTO `staff_category` (`id`, `category`) VALUES
(1, 'Executive Officer'),
(2, 'Editor'),
(3, 'Journalist'),
(4, 'Agent'),
(5, 'Finance'),
(6, 'Others');

-- --------------------------------------------------------

--
-- Table structure for table `staff_list`
--

CREATE TABLE `staff_list` (
  `id` int(11) NOT NULL,
  `first_name` text NOT NULL,
  `middle_name` text,
  `last_name` text NOT NULL,
  `dob` date NOT NULL,
  `citizenship_no` text NOT NULL,
  `photo` text,
  `category` int(11) NOT NULL,
  `date_enrolled` date DEFAULT NULL,
  `father_name` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff_list`
--

INSERT INTO `staff_list` (`id`, `first_name`, `middle_name`, `last_name`, `dob`, `citizenship_no`, `photo`, `category`, `date_enrolled`, `father_name`) VALUES
(1, 'RAM', 'BAHADUR', 'THAPA', '2000-12-10', '30-71-020654', NULL, 2, '2010-01-01', 'Hari Bahadur'),
(2, 'SHYAM', NULL, 'KAYASTHA', '1990-10-30', '30-52-5568', NULL, 3, '2014-02-15', 'Madan Kayastha');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_number`
--
ALTER TABLE `contact_number`
  ADD KEY `staff_id` (`staff_id`);

--
-- Indexes for table `staff_category`
--
ALTER TABLE `staff_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff_list`
--
ALTER TABLE `staff_list`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category` (`category`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `staff_category`
--
ALTER TABLE `staff_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `staff_list`
--
ALTER TABLE `staff_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `contact_number`
--
ALTER TABLE `contact_number`
  ADD CONSTRAINT `contact_number_ibfk_1` FOREIGN KEY (`staff_id`) REFERENCES `staff_list` (`id`);

--
-- Constraints for table `staff_list`
--
ALTER TABLE `staff_list`
  ADD CONSTRAINT `staff_list_ibfk_1` FOREIGN KEY (`category`) REFERENCES `staff_category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
