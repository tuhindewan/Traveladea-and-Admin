-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2018 at 10:29 AM
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
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `con_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `con_password`) VALUES
(20, 'saiduzzaman tuhin', 'tuhinsshadow@gmail.com', 'cc469f85a9e0e6a89173d56550314ba3', 'cc469f85a9e0e6a89173d56550314ba3'),
(21, 'admin', 'admin@techadea.com', 'cc469f85a9e0e6a89173d56550314ba3', 'cc469f85a9e0e6a89173d56550314ba3'),
(22, '', '', 'd41d8cd98f00b204e9800998ecf8427e', 'd41d8cd98f00b204e9800998ecf8427e');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `blog_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`blog_id`, `title`, `description`, `image`, `cat_id`, `created_at`) VALUES
(39, 'this is my first blog', 'this is my first blog description. this is my first blog description. this is my first blog description. this is my first blog description. this is my first blog description. this is my first blog description. this is my first blog description. this is my first blog description. this is my first blog description. this is my first blog description. this is my first blog description.this is my first blog description. this is my first blog description. this is my first blog description.', 'BlogImageFolder/770x370.jpg', 1, '2018-07-18 11:00:31'),
(40, 'this is my second blog', 'this is my second blog. this is my second blog. this is my second blog. this is my second blog. this is my second blog. this is my second blog. this is my second blog. this is my second blog. this is my second blog. this is my second blog. this is my second blog. this is my second blog. this is my second blog. this is my second blog. this is my second blog.', 'BlogImageFolder/8.jpg', 4, '2018-07-18 11:02:28'),
(41, 'this is my third blog', 'this is my third blog description. this is my third blog descriptionthis is my third blog descriptionthis is my third blog descriptionthis is my third blog descriptionthis is my third blog descriptionthis is my third blog descriptionthis is my third blog descriptionthis is my third blog descriptionthis is my third blog descriptionthis is my third blog descriptionthis is my third blog descriptionthis is my third blog descriptionthis is my third blog descriptionthis is my third blog descriptionthis is my third blog descriptionthis is my third blog descriptionthis is my third blog descriptionthis is my third blog description', 'BlogImageFolder/7.jpg', 2, '2018-07-18 11:03:11'),
(42, 'this is my fourth blog', 'this is my fourth blog description. this is my fourth blog description. this is my fourth blog description. this is my fourth blog description. this is my fourth blog description.this is my fourth blog description. this is my fourth blog description. this is my fourth blog description. this is my fourth blog description.', 'BlogImageFolder/2.jpg', 3, '2018-07-18 11:15:12'),
(43, 'this is my fourth blog', 'this is my fourth blog description. this is my fourth blog description. this is my fourth blog description. this is my fourth blog description. this is my fourth blog description.this is my fourth blog description. this is my fourth blog description. this is my fourth blog description. this is my fourth blog description.', 'BlogImageFolder/2.jpg', 3, '2018-07-18 11:17:16');

-- --------------------------------------------------------

--
-- Table structure for table `blog_category`
--

CREATE TABLE `blog_category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_category`
--

INSERT INTO `blog_category` (`cat_id`, `cat_name`) VALUES
(1, 'Adventure'),
(2, 'Honeymoon'),
(3, 'Island'),
(4, 'Beach');

-- --------------------------------------------------------

--
-- Table structure for table `flight_custom_tour`
--

CREATE TABLE `flight_custom_tour` (
  `id` int(11) NOT NULL,
  `adults` int(11) DEFAULT NULL,
  `childs` int(11) DEFAULT NULL,
  `infants` int(11) DEFAULT NULL,
  `flight_type` varchar(255) NOT NULL,
  `travel_date` varchar(255) NOT NULL,
  `return_date` varchar(255) NOT NULL,
  `fly_from` varchar(255) NOT NULL,
  `fly_to` varchar(255) NOT NULL,
  `transit_type` varchar(255) NOT NULL,
  `info` text NOT NULL,
  `traveller_name` text NOT NULL,
  `dob` text NOT NULL,
  `passport_no` text NOT NULL,
  `pass_expire` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flight_custom_tour`
--

INSERT INTO `flight_custom_tour` (`id`, `adults`, `childs`, `infants`, `flight_type`, `travel_date`, `return_date`, `fly_from`, `fly_to`, `transit_type`, `info`, `traveller_name`, `dob`, `passport_no`, `pass_expire`, `email`, `phone`) VALUES
(1, 2, 1, 1, 'multiple', '07/12/2018', '07/27/2018', 'dhaka', 'sydney', 'from airport to hotel', 'dsfdsf sd', 'sdsdsd', '01-01-1990', 'dsdsd', 'sdsdsdsd', 'tuhinsshadow@gmail.com', '01672781223'),
(2, 0, 0, 0, 'multiple', '07/12/2018', '07/27/2018', 'dhaka', 'sydney', 'from airport to hotel', 'dsf', 'sdsdsd', '01-01-1990', 'dsdsd', 'sdsdsdsd', 'tuhinsshadow@gmail.com', '01672781223'),
(3, 2, 0, 0, 'multiple', '07/12/2018', '07/27/2018', 'dhaka', 'sydney', 'from airport to hotel', 'dsfdsf sd', 'sdsdsd', '01-01-1990', 'dsdsd', 'sdsdsdsd', 'tuhinsshadow@gmail.com', '01672781223');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `image_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `image`, `image_title`) VALUES
(81, 'UploadFolder/20180517_1437.jpg', 'first image'),
(82, 'UploadFolder/IMG-20180318-WA0000.jpg', 'second image'),
(83, 'UploadFolder/IMG-20180318-WA0001.jpg', 'second image'),
(84, 'UploadFolder/IMG-20180318-WA0002.jpg', 'second image'),
(85, 'UploadFolder/images.jpg', 'Welcome to traveladea'),
(86, 'UploadFolder/images.jpg', 'Welcome to traveladea'),
(87, 'UploadFolder/images.jpg', 'Welcome to traveladea');

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
(54, 1, 'fourth titile', 'fourth titile fourth titile fourth titile fourth titile fourth titile fourth titile fourth titile fourth titile fourth titile fourth titile fourth titile fourth titile fourth titile fourth titile fourth titile fourth titile fourth titile fourth titile fourth titile fourth titile fourth titile fourth titile fourth titile fourth titile fourth titile fourth titile fourth titile fourth titile fourth titile fourth titile fourth titile fourth titile fourth titile fourth titile fourth titile fourth titile', '20000', 'Angola');

-- --------------------------------------------------------

--
-- Table structure for table `package_custom_tour`
--

CREATE TABLE `package_custom_tour` (
  `id` int(11) NOT NULL,
  `will_visit` varchar(255) NOT NULL,
  `adults` int(255) NOT NULL,
  `childs` int(255) DEFAULT NULL,
  `travel_date` varchar(255) NOT NULL,
  `fly_from` varchar(255) NOT NULL,
  `budget` varchar(255) NOT NULL,
  `transit_type` varchar(255) NOT NULL,
  `contact_type` varchar(255) NOT NULL,
  `hotel_type` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `info` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package_custom_tour`
--

INSERT INTO `package_custom_tour` (`id`, `will_visit`, `adults`, `childs`, `travel_date`, `fly_from`, `budget`, `transit_type`, `contact_type`, `hotel_type`, `email`, `phone`, `info`) VALUES
(1, 'dsfds', 2, 0, '07/12/2018', 'dhaka', 'dsds', 'sdsd', 'sdsd', 'sdsd', 'tuhinsshadow@gmail.com', '01672781223', 'sdsd'),
(2, 'ds fdsf ds fd', 2, 0, '07/12/2018', 'dhaka', 'dsds', 'from airport to hotel', 'sdsd', 'sdsd', 'tuhinsshadow@gmail.com', '01672781223', 'dsfdsf sd'),
(3, 'ds fdsf ds fd', 2, 1, '07/12/2018', 'dhaka', 'dsds', 'from airport to hotel', 'sdsd', 'sdsd', 'tuhinsshadow@gmail.com', '01672781223', 'dsfdsf sd');

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
(15, 'PackageImage/Screenshot (2).png', 55);

-- --------------------------------------------------------

--
-- Table structure for table `post_comments`
--

CREATE TABLE `post_comments` (
  `c_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `blog_id` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post_comments`
--

INSERT INTO `post_comments` (`c_id`, `name`, `email`, `comment`, `blog_id`, `time`) VALUES
(42, 'saiduzzaman tuhin', 'tuhinsshadow@gmail.com', '1', 5, '2018-07-14 06:17:12');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `service_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `position` int(11) NOT NULL,
  `type_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`service_id`, `status`, `title`, `description`, `position`, `type_name`) VALUES
(1, 1, 'service title  very first', 'service description  very first service description  very first service description  very first', 1, 'type 1'),
(9, 1, 'service title 4', 'service title 4 description service title 4 description service title 4 description service title 4 description', 0, ''),
(10, 1, 'service title 5', 'service title 5 service title 5 service title 5 service title 5 service title 5 service title 5', 0, ''),
(11, 1, 'service title 5', 'service title 5 service title 5 service title 5 service title 5 service title 5 service title 5', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `service_count`
--

CREATE TABLE `service_count` (
  `id` int(11) NOT NULL,
  `tours` bigint(20) NOT NULL,
  `holiday` bigint(20) NOT NULL,
  `hotel` bigint(20) NOT NULL,
  `cruise` bigint(20) NOT NULL,
  `flight` bigint(20) NOT NULL,
  `car` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service_count`
--

INSERT INTO `service_count` (`id`, `tours`, `holiday`, `hotel`, `cruise`, `flight`, `car`) VALUES
(3, 20, 18, 22, 26, 27, 31);

-- --------------------------------------------------------

--
-- Table structure for table `service_type`
--

CREATE TABLE `service_type` (
  `type_id` int(11) NOT NULL,
  `type_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service_type`
--

INSERT INTO `service_type` (`type_id`, `type_name`) VALUES
(6, 'type 1'),
(7, 'type 2'),
(8, 'type 3'),
(9, 'type 4');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `slider_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `headline_one` varchar(255) NOT NULL,
  `headline_two` varchar(255) NOT NULL,
  `headline_three` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slider_id`, `image`, `headline_one`, `headline_two`, `headline_three`) VALUES
(4, 'SliderFolder/slide-3.jpg', 'Welcome to', 'Dhaka', 'City of Rickshaw'),
(5, 'SliderFolder/slide-2.jpg', 'Welcome to', 'Khulna', 'City of Noobs');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `tag_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `blog_id` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`tag_id`, `name`, `blog_id`) VALUES
(14, 'first', '39'),
(15, 'adventure', '39'),
(16, 'description', '39'),
(17, 'second', '40'),
(18, 'beach', '40'),
(19, 'no', '40'),
(20, 'third', '41'),
(21, 'first', '41'),
(22, 'honemoon', '41'),
(23, 'yes', '41'),
(24, 'island', '42'),
(25, 'fourth', '42'),
(26, 'time', '43');

-- --------------------------------------------------------

--
-- Table structure for table `user_messages`
--

CREATE TABLE `user_messages` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_messages`
--

INSERT INTO `user_messages` (`id`, `name`, `email`, `comment`) VALUES
(4, 'saiduzzaman tuhin', 'tuhinsshadow@gmail.com', '&lt;?php require_once \'helpers/errors.php\'; ?&gt;&lt;?php require_once \'helpers/errors.php\'; ?&gt;&lt;?php require_once \'helpers/errors.php\'; ?&gt;&lt;?php require_once \'helpers/errors.php\'; ?&gt;&lt;?php require_once \'helpers/errors.php\'; ?&gt;&lt;?php require_once \'helpers/errors.php\'; ?&gt;&lt;?php require_once \'helpers/errors.php\'; ?&gt;&lt;?php require_once \'helpers/errors.php\'; ?&gt;&lt;?php require_once \'helpers/errors.php\'; ?&gt;'),
(5, 'saiduzzaman tuhin', 'tuhinsshadow@gmail.com', 'dsdsdsds'),
(6, 'saiduzzaman tuhin', 'tuhinsshadow@gmail.com', 'sdsdsd'),
(7, 'saiduzzaman tuhin', 'tuhinsshadow@gmail.com', 'sdsdsd'),
(8, 'saiduzzaman tuhin', 'tuhinsshadow@gmail.com', 'sdsdsd'),
(9, 'saiduzzaman tuhin', 'tuhinsshadow@gmail.com', 'fdsdfsfdf'),
(10, 'saiduzzaman tuhin', 'tuhinsshadow@gmail.com', 'fdsdfsfdf'),
(11, 'saiduzzaman tuhin', 'tuhinsshadow@gmail.com', 'fdsdfsfdf'),
(12, 'saiduzzaman tuhin', 'tuhinsshadow@gmail.com', 'fdsdfsfdf'),
(13, 'saiduzzaman tuhin', 'tuhinsshadow@gmail.com', 'fdsdfsfdf'),
(14, 'saiduzzaman tuhin', 'tuhinsshadow@gmail.com', '1'),
(15, 'saiduzzaman tuhin', 'tuhinsshadow@gmail.com', '2'),
(16, 'saiduzzaman tuhin', 'tuhinsshadow@gmail.com', '2'),
(17, 'saiduzzaman tuhin', 'tuhinsshadow@gmail.com', '2'),
(18, 'saiduzzaman tuhin', 'tuhinsshadow@gmail.com', '2'),
(19, 'malay', 'admin@techadea.com', 'd'),
(20, 'malay', 'admin@techadea.com', 'd'),
(21, 'malay', 'admin@techadea.com', 'dsdsd'),
(22, 'malay', 'admin@techadea.com', 'dsdsd'),
(23, 'saiduzzaman tuhin', 'tuhinsshadow@gmail.com', '5'),
(24, 'saiduzzaman tuhin', 'tuhinsshadow@gmail.com', '5'),
(25, 'saiduzzaman tuhin', 'tuhinsshadow@gmail.com', 'sdsdsdsdsds'),
(26, 'malay', 'admin@techadea.com', 'jkkj'),
(27, 'saiduzzaman tuhin', 'tuhinsshadow@gmail.com', 'dasds');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
  `video` varchar(255) NOT NULL,
  `video_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `video`, `video_title`) VALUES
(1, 'VideoUploadFolder/363952049.mp4', 'first video'),
(2, 'VideoUploadFolder/Traveladea admin.MP4', 'second video');

-- --------------------------------------------------------

--
-- Table structure for table `visa_custom_tour`
--

CREATE TABLE `visa_custom_tour` (
  `id` int(11) NOT NULL,
  `passport_name` varchar(255) NOT NULL,
  `travel_date` varchar(255) NOT NULL,
  `profession` varchar(255) NOT NULL,
  `education` varchar(255) NOT NULL,
  `will_visit` varchar(255) NOT NULL,
  `pre_visit` varchar(255) NOT NULL,
  `info` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `blog_category`
--
ALTER TABLE `blog_category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `flight_custom_tour`
--
ALTER TABLE `flight_custom_tour`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`package_id`);

--
-- Indexes for table `package_custom_tour`
--
ALTER TABLE `package_custom_tour`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package_image`
--
ALTER TABLE `package_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_comments`
--
ALTER TABLE `post_comments`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `service_count`
--
ALTER TABLE `service_count`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_type`
--
ALTER TABLE `service_type`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`tag_id`);

--
-- Indexes for table `user_messages`
--
ALTER TABLE `user_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visa_custom_tour`
--
ALTER TABLE `visa_custom_tour`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `blog_category`
--
ALTER TABLE `blog_category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `flight_custom_tour`
--
ALTER TABLE `flight_custom_tour`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;
--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `package_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT for table `package_custom_tour`
--
ALTER TABLE `package_custom_tour`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `package_image`
--
ALTER TABLE `package_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `post_comments`
--
ALTER TABLE `post_comments`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `service_count`
--
ALTER TABLE `service_count`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `service_type`
--
ALTER TABLE `service_type`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `tag_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `user_messages`
--
ALTER TABLE `user_messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `visa_custom_tour`
--
ALTER TABLE `visa_custom_tour`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
