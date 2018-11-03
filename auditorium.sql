-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 03, 2018 at 12:52 PM
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

INSERT INTO `events` (`id`, `name`, `manager_id`, `date`, `time`, `web_url`, `fb_url`, `twitter_url`, `google_url`, `description`, `image`, `ticket1`, `ticket2`, `ticket3`) VALUES
(1, 'Ninnada', 1, '2018-09-20', '08:00:00', 'https://www.facebook.com/ninnada.ucsc/', '', '', '', 'Ninnada 2018 Organized by the students union of University of Colombo School of Computing in aim of aiding rural schools of Sri lanka', '', 100, 1500, 2000),
(2, 'New Event', 7, '2011-08-15', '01:45:00', '', '', 'https://twitter.com', 'https://googleplus.com', '', 'saas', 1000, 111, 2222),
(3, 'dddd', 7, '2011-11-16', '17:45:00', '', '', '', '', 'ihuh', 'saas', 11, 22, 29);

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` int(11) NOT NULL,
  `title` varchar(225) NOT NULL,
  `dayStart` int(11) NOT NULL,
  `dayEnd` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(16, 'Gatta', 'Chanuka', 'e', 'dinith@gmail.com', '111', 1111);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
