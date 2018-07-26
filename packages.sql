-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2018 at 01:11 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `traveladea`
--

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `package_id` int(11) NOT NULL,
  `status` tinyint(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`package_id`, `status`, `title`, `description`, `price`, `country`) VALUES
(51, 0, 'first package title edited', 'first package description. first package description. first package description. first package description. first package description. first package description. first package description. first package description. first package description.first package description.first package description', '111', 'Afghanistan'),
(52, 0, 'Second package titile', 'Second package description. Second package description. Second package description. Second package description. Second package description. Second package description. Second package description. Second package description. Second package description. Second package description. Second package description. Second package description.Second package description. Second package description. Second package description.', '55', 'Albania'),
(53, 1, 'third package title', 'third package description. third package description. third package description. third package description. third package description. third package description. third package description. third package description. third package description. third package description. third package description. third package description.', '77', 'American Samoa'),
(54, 1, 'fourth titile', 'fourth titile fourth titile fourth titile fourth titile fourth titile fourth titile fourth titile fourth titile fourth titile fourth titile fourth titile fourth titile fourth titile fourth titile fourth titile fourth titile fourth titile fourth titile fourth titile fourth titile fourth titile fourth titile fourth titile fourth titile fourth titile fourth titile fourth titile fourth titile fourth titile fourth titile fourth titile fourth titile fourth titile fourth titile fourth titile fourth titile', '20000', 'Angola'),
(55, 1, 'this is my fifth package', 'this is my fifth packagethis is my fifth packagethis is my fifth packagethis is my fifth packagethis is my fifth packagethis is my fifth packagethis is my fifth packagethis is my fifth packagethis is my fifth packagethis is my fifth package', '100', 'Anguilla'),
(56, 1, 'this is my sixth package', 'this is my sixth packagethis is my sixth packagethis is my sixth packagethis is my sixth packagethis is my sixth packagethis is my sixth packagethis is my sixth packagethis is my sixth packagethis is my sixth packagethis is my sixth packagethis is my sixth packagethis is my sixth package', '300', 'American Samoa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`package_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `package_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
