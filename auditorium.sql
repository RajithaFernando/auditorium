-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 02, 2019 at 03:25 PM
-- Server version: 5.7.24-0ubuntu0.18.04.1
-- PHP Version: 7.2.10-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `auditorium`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `RefNo` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `manager_id` int(10) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `web_url` text NOT NULL,
  `fb_url` text NOT NULL,
  `twitter_url` text NOT NULL,
  `google_url` text NOT NULL,
  `description` text NOT NULL,
  `image` varchar(191) NOT NULL,
  `ticket1` int(10) NOT NULL,
  `ticket2` int(10) NOT NULL,
  `ticket3` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `RefNo`, `name`, `manager_id`, `date`, `time`, `web_url`, `fb_url`, `twitter_url`, `google_url`, `description`, `image`, `ticket1`, `ticket2`, `ticket3`) VALUES
(1, 0, 'Ninnada', 1, '2018-09-20', '08:00:00', 'https://www.facebook.com/ninnada.ucsc/', '', '', '', 'Ninnada 2018 Organized by the students union of University of Colombo School of Computing in aim of aiding rural schools of Sri lanka', '', 100, 1500, 2000),
(3, 0, 'dddd', 7, '2011-11-16', '17:45:00', '', '', '', '', 'ihuh', 'saas', 11, 22, 29),
(4, 0, 'A', 2, '2018-11-22', '23:45:00', 'https://codingwithsara.com/a-calendar-with-php-mysql/', 'https://codingwithsara.com/a-calendar-with-php-mysql/', 'https://codingwithsara.com/a-calendar-with-php-mysql/', 'https://codingwithsara.com/a-calendar-with-php-mysql/', 'https://codingwithsara.com/a-calendar-with-php-mysql/https://codingwithsara.com/a-calendar-with-php-mysql/', 'saas', 100, 200, 296),
(5, 0, 'Chrsdi', 11, '2018-11-28', '01:45:00', 'https://www.tutorialspoint.com/php/php_file_uploading.htm', 'https://www.tutorialspoint.com/php/php_file_uploading.htm', 'https://www.tutorialspoint.com/php/php_file_uploading.htm', 'https://www.tutorialspoint.com/php/php_file_uploading.htm', 'sadsda', 'sss', 1111, 111, 123),
(6, 0, 'CCCC', 11, '2018-11-29', '13:45:00', 'https://www.tutorialspoint.com/php/php_file_uploading.htm', 'https://www.tutorialspoint.com/php/php_file_uploading.htm', 'https://www.tutorialspoint.com/php/php_file_uploading.htm', 'https://www.tutorialspoint.com/php/php_file_uploading.htm', 'asldasld', 'sss', 111, 212, 211),
(7, 0, 'aaaa', 12, '2016-08-19', '16:45:00', 'https://www.w3schools.com/php/php_file_upload.asp', 'https://www.w3schools.com/php/php_file_upload.asp', 'https://www.w3schools.com/php/php_file_upload.asp', 'https://www.w3schools.com/php/php_file_upload.asp', 'asdasd', 'saas', 111, 111, 1111);

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` int(11) NOT NULL,
  `title` varchar(225) NOT NULL,
  `dayStart` int(11) NOT NULL,
  `eventday` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `title`, `dayStart`, `eventday`) VALUES
(1, 'asdasd', 11, '2018-11-30'),
(1, 'asdasd', 11, '2018-11-30');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `userID` int(10) NOT NULL,
  `eventRef` text NOT NULL,
  `seatID` int(10) NOT NULL,
  `ticketValue` int(10) NOT NULL,
  `Catagory` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`userID`, `eventRef`, `seatID`, `ticketValue`, `Catagory`) VALUES
(1, '181231134745', 1, 1000, 0),
(1, '181231134745', 2, 3000, 1),
(2, '181231134745', 5, 2000, 2),
(6, '181231134745', 9, 1000, 3),
(8, '181231134745', 21, 3000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tempEvents`
--

CREATE TABLE `tempEvents` (
  `refNo` text NOT NULL,
  `name` varchar(191) NOT NULL,
  `manager_id` int(10) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `web_url` text NOT NULL,
  `fb_url` text NOT NULL,
  `twitter_url` text NOT NULL,
  `google_url` text NOT NULL,
  `description` text NOT NULL,
  `image` varchar(191) NOT NULL,
  `ticket1` int(10) NOT NULL,
  `ticket2` int(10) NOT NULL,
  `ticket3` int(10) NOT NULL,
  `status` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tempEvents`
--

INSERT INTO `tempEvents` (`refNo`, `name`, `manager_id`, `date`, `time`, `web_url`, `fb_url`, `twitter_url`, `google_url`, `description`, `image`, `ticket1`, `ticket2`, `ticket3`, `status`) VALUES
('0', 'Ninnada', 1, '2018-09-20', '08:00:00', 'https://www.facebook.com/ninnada.ucsc/', '', '', '', 'Ninnada 2018 Organized by the students union of University of Colombo School of Computing in aim of aiding rural schools of Sri lanka', '', 100, 1500, 2000, ''),
('0', 'Image2', 2, '2018-12-30', '13:45:00', 'https://www.youtube.com/watch?v=tbNlMtqrYS0', 'https://www.youtube.com/watch?v=tbNlMtqrYS0', '', 'https://www.youtube.com/watch?v=tbNlMtqrYS0', 'SOME DISCRIPTION', 'SSSS', 1000, 1000, 1000, ''),
('0', 'NECTXAA', 2, '2013-08-19', '13:45:00', 'https://www.youtube.com/watch?v=6Ejga4kJUts', 'https://www.youtube.com/watch?v=6Ejga4kJUts', 'https://www.youtube.com/watch?v=6Ejga4kJUts', 'https://www.youtube.com/watch?v=6Ejga4kJUts', 'SSs', 'hadi3.jpg', 2132, 121, 21312, ''),
('0', 'A', 2, '2018-11-22', '23:45:00', 'https://codingwithsara.com/a-calendar-with-php-mysql/', 'https://codingwithsara.com/a-calendar-with-php-mysql/', 'https://codingwithsara.com/a-calendar-with-php-mysql/', 'https://codingwithsara.com/a-calendar-with-php-mysql/', 'https://codingwithsara.com/a-calendar-with-php-mysql/https://codingwithsara.com/a-calendar-with-php-mysql/', 'saas', 100, 200, 296, ''),
('0', 'Chrsdi', 11, '2018-11-28', '01:45:00', 'https://www.tutorialspoint.com/php/php_file_uploading.htm', 'https://www.tutorialspoint.com/php/php_file_uploading.htm', 'https://www.tutorialspoint.com/php/php_file_uploading.htm', 'https://www.tutorialspoint.com/php/php_file_uploading.htm', 'sadsda', 'sss', 1111, 111, 123, ''),
('0', 'CCCC', 11, '2018-11-29', '13:45:00', 'https://www.tutorialspoint.com/php/php_file_uploading.htm', 'https://www.tutorialspoint.com/php/php_file_uploading.htm', 'https://www.tutorialspoint.com/php/php_file_uploading.htm', 'https://www.tutorialspoint.com/php/php_file_uploading.htm', 'asldasld', 'sss', 111, 212, 211, ''),
('0', 'Imagesdas', 2, '2011-10-19', '13:45:00', 'https://www.youtube.com/watch?v=1w7OgIMMRc4', 'https://www.youtube.com/watch?v=1w7OgIMMRc4', 'https://www.youtube.com/watch?v=1w7OgIMMRc4', 'https://www.youtube.com/watch?v=1w7OgIMMRc4', 'ald;asl', 'brainandheart.jpg', 11211, 121, 1231, ''),
('0', 'Netx', 2, '2013-10-21', '15:45:00', 'https://www.youtube.com/watch?v=1w7OgIMMRc4', 'https://www.youtube.com/watch?v=1w7OgIMMRc4', 'https://www.youtube.com/watch?v=1w7OgIMMRc4', 'https://www.youtube.com/watch?v=1w7OgIMMRc4', 'salmlsdm', 'cantthinkofanew1.png', 12212, 12212, 1212, ''),
('0', 'Netx', 2, '2013-10-21', '15:45:00', 'https://www.youtube.com/watch?v=1w7OgIMMRc4', 'https://www.youtube.com/watch?v=1w7OgIMMRc4', 'https://www.youtube.com/watch?v=1w7OgIMMRc4', 'https://www.youtube.com/watch?v=1w7OgIMMRc4', 'salmlsdm', 'hasi.jpg', 12212, 12212, 123123, ''),
('123', 'asad', 1, '2018-11-15', '07:19:00', 'adcdc', 'sdf', 'sd', 'ds', 'wdsfsdf', 'sdac', 23, 123, 123, ''),
('123', 'asad', 1, '2018-11-15', '07:19:00', 'adcdc', 'sdf', 'sd', 'ds', 'wdsfsdf', 'sdac', 23, 123, 123, ''),
('111111', 'TESTING!@#', 2, '2016-11-19', '13:45:00', 'https://www.youtube.com/watch?v=DdMcAUlxh1M', 'https://www.youtube.com/watch?v=DdMcAUlxh1M', 'https://www.youtube.com/watch?v=DdMcAUlxh1M', 'https://www.youtube.com/watch?v=DdMcAUlxh1M', 'asdasd', 'UCSC-5-1.jpg', 1221, 1212, 121, ''),
('1111', 'asddsa', 2, '2011-08-19', '13:45:00', 'https://www.youtube.com/watch?v=nfWlot6h_JM', 'https://www.youtube.com/watch?v=nfWlot6h_JM', 'https://www.youtube.com/watch?v=nfWlot6h_JM', 'https://www.youtube.com/watch?v=nfWlot6h_JM', 'sdfas', 'bed.jpg', 1, 2, 0, ''),
('1111', 'asddsa', 2, '2011-08-19', '13:45:00', '', 'https://www.youtube.com/watch?v=nfWlot6h_JM', 'https://www.youtube.com/watch?v=nfWlot6h_JM', 'https://www.youtube.com/watch?v=nfWlot6h_JM', 'sdfas', 'gapa.jpg', 1, 2, 0, ''),
('181130093912', 'ABC', 2, '2011-08-19', '13:45:00', 'https://www.youtube.com/watch?v=nfWlot6h_JM', 'https://www.youtube.com/watch?v=nfWlot6h_JM', 'https://www.youtube.com/watch?v=nfWlot6h_JM', 'https://www.youtube.com/watch?v=nfWlot6h_JM', 'wsadawd', 'hasi.jpg', 7, 8, 5, ''),
('181130094208', 'final', 2, '2011-08-19', '13:45:00', 'https://www.youtube.com/watch?v=nfWlot6h_JM', 'https://www.youtube.com/watch?v=nfWlot6h_JM', 'https://www.youtube.com/watch?v=nfWlot6h_JM', 'https://www.youtube.com/watch?v=nfWlot6h_JM', 'wsadawd', 'sarama.jpg', 7, 8, 9, ''),
('181130101013', 'STATUS', 2, '2016-08-19', '13:45:00', 'https://www.youtube.com/watch?v=TcJ-wNmazHQ', 'https://www.youtube.com/watch?v=TcJ-wNmazHQ', 'https://www.youtube.com/watch?v=TcJ-wNmazHQ', 'https://www.youtube.com/watch?v=TcJ-wNmazHQ', 'sadasd', 'students-walking_2638975b.jpg', 111, 2131, 123123, 'confirmed'),
('181130101057', 'Status', 2, '2013-09-19', '15:45:00', 'https://www.youtube.com/watch?v=TcJ-wNmazHQ', 'https://www.youtube.com/watch?v=TcJ-wNmazHQ', 'https://www.youtube.com/watch?v=TcJ-wNmazHQ', 'https://www.youtube.com/watch?v=TcJ-wNmazHQ', 'asdasda', 'srilanka_8.jpg', 10, 5, 5, 'not confirmed'),
('181231134745', 'ABC', 2, '2019-01-01', '13:46:00', 'http://localhost/auditorium/adminfunctions/admin.php', 'http://localhost/auditorium/adminfunctions/admin.php', 'http://localhost/auditorium/adminfunctions/admin.php', 'http://localhost/auditorium/adminfunctions/admin.php', 'aaadasda', 'PEO-hear_no_evil_monkey.svg_-1030x1030.png', 1000, 122, 212, 'confirmed'),
('181231163048', 'TEst 3', 2, '2019-01-22', '15:45:00', 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.facebook.com/', 'ADASLAKSLKAKLSMA', 'Rajeeva-Bandaranaike.jpg', 1000, 1111, 2132, 'confirmed'),
('190101100922', 'AAA', 2, '2019-01-02', '13:45:00', 'http://localhost/auditorium/Admin/lite/create_event.php', 'http://localhost/auditorium/Admin/lite/create_event.php', 'http://localhost/auditorium/Admin/lite/create_event.php', 'http://localhost/auditorium/Admin/lite/create_event.php', 'AAAAAA', 'brainandheart.jpg', 1111, 1111, 1111, 'confirmed');

-- --------------------------------------------------------

--
-- Table structure for table `ticket_count`
--

CREATE TABLE `ticket_count` (
  `event_id` int(11) NOT NULL,
  `ticket1` int(11) NOT NULL,
  `ticket2` int(11) NOT NULL,
  `ticket3` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ticket_count`
--

INSERT INTO `ticket_count` (`event_id`, `ticket1`, `ticket2`, `ticket3`) VALUES
(1, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `f_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usertype` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `f_name`, `l_name`, `usertype`, `email`, `password`, `mobile`) VALUES
(1, 'Rajitha', 'Fernando', 'm', 'rajithaf@gmail.com', 'Raji@123', 111),
(2, 'Event', 'Manager', 'e', 'em@em.com', 'Raji@123', 123456789),
(3, 'r', 'a', 'c', 'a@a.com', '1', 1),
(7, 'event', 'manager_2', 'e', 'event@manager.com', 'event', 123),
(8, 'Himath', 'Harshajith', 'e', 'himath@gmail.com', 'himath', 111),
(9, 'sathira', 'Ranaweera', 'e', 'sathira@gmail.com', '111', 111),
(10, 'Nawoda', 'Lakshani', 'e', 'navoda@gmail.com', 'navoda', 12345),
(12, 'Vimal', 'Kamal', 'e', 'nimal@gmail.com', '111', 111),
(13, 'nimal Nimal', 'kamal', 'e', 'kamal@gmail.com', '111', 111),
(14, 'Himansaaaa', 'samarakoon', 'e', 'himansa@gmail.com', '111', 111),
(15, 'Nimal 2', 'Fernando', 'e', 'fernando@gmail.com', '111', 111),
(16, 'Gatta', 'Chanuka', 'e', 'dinith@gmail.com', '111', 1111),
(17, 'assad', 'asdasdas', 'e', 'A@asdas.ca', '111', 111);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
