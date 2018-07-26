-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2018 at 01:15 PM
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
-- Table structure for table `package_image`
--

CREATE TABLE `package_image` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `package_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package_image`
--

INSERT INTO `package_image` (`id`, `image`, `package_id`) VALUES
(2, 'PackageImage/IMG-20180318-WA0001.jpg', 51),
(3, 'PackageImage/IMG-20180318-WA0002.jpg', 51),
(4, 'PackageImage/passport.jpg1.jpg', 51),
(5, 'PackageImage/6c.jpg', 52),
(6, 'PackageImage/7bbc2cded4cfe7a5aea42746a6aef09a.jpg', 52),
(7, 'PackageImage/200802250019560.jpg', 52),
(8, 'PackageImage/1.jpg', 53),
(9, 'PackageImage/2.png', 53),
(10, 'PackageImage/3.jpg', 53),
(11, 'PackageImage/Nuclear-power-plant.jpg', 53),
(12, 'PackageImage/Screenshot (1).png', 54),
(13, 'PackageImage/Screenshot (2).png', 54),
(14, 'PackageImage/Screenshot (1).png', 55),
(15, 'PackageImage/Screenshot (2).png', 55),
(16, 'PackageImage/370x620-1.jpg', 55),
(17, 'PackageImage/370x620-2.jpg', 55),
(18, 'PackageImage/370x620-3.jpg', 55),
(19, 'PackageImage/3@2x.jpg', 56),
(20, 'PackageImage/6@2x.jpg', 56);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `package_image`
--
ALTER TABLE `package_image`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `package_image`
--
ALTER TABLE `package_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
