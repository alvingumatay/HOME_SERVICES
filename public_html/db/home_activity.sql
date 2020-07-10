-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2020 at 08:57 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `home_activity`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`) VALUES
(1, 'admin', 'admin@admins.com', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `deleteduser`
--

CREATE TABLE `deleteduser` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `deltime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deleteduser`
--

INSERT INTO `deleteduser` (`id`, `email`, `deltime`) VALUES
(0, 'alvingumatay1@gmail.com', '2020-04-27 11:34:57');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `sender` varchar(50) NOT NULL,
  `reciver` varchar(50) NOT NULL,
  `title` varchar(100) NOT NULL,
  `feedbackdata` varchar(500) NOT NULL,
  `attachment` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `sender`, `reciver`, `title`, `feedbackdata`, `attachment`) VALUES
(0, 'malampaya@gmail.com', 'Admin', 'sasing', 'pakidagdagan ng selection sa gagawin', ' '),
(0, 'admin', 'Admin', 'suggest', 'pakidagdag', ' '),
(0, 'alvingumatay1@gmail.com', 'Admin', 'wbo', 'hey', ' '),
(0, 'Admin', 'alvingumatay1@gmail.com', '', 'hey', ''),
(0, 'Admin', 'alvingumatay1@gmail.com', '', 'hetro', ''),
(0, 'Admin', 'alvingumatay1@gmail.com', '', 'hetro', ''),
(0, 'Admin', 'alvingumatay1@gmail.com', '', 'ge', ''),
(0, 'Admin', 'alvingumatay1@gmail.com', '', 'hello po', ''),
(0, 'Admin', 'alvingumatay1@gmail.com', '', 'hay naku', ''),
(0, 'alvingumatay1@gmail.com', 'Admin', 'j', 'aku', ' '),
(0, 'alvingumatay1@gmail.com', 'Admin', '0', 'po', ' '),
(0, 'Admin', 'alvingumatay1@gmail.com', '', 'ok po', ''),
(0, 'Admin', 'alvingumatay1@gmail.com', '', 'siyapae', ''),
(0, 'Admin', 'alvingumatay1@gmail.com', '', 'siya nga', ''),
(0, 'Admin', 'alvingumatay1@gmail.com', '', 'gerere', ''),
(0, 'Admin', 'alvingumatay1@gmail.com', '', 'ops', ''),
(0, 'Admin', 'alvingumatay1@gmail.com', '', 'juice', ''),
(0, 'alvingumatay1@gmail.com', 'Admin', 'hellosayo', 'magandang gabi', ' '),
(0, 'Admin', 'alvingumatay1@gmail.com', '', 'anu po yun', '');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(11) NOT NULL,
  `notiuser` varchar(50) NOT NULL,
  `notireciver` varchar(50) NOT NULL,
  `notitype` varchar(50) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `notiuser`, `notireciver`, `notitype`, `time`) VALUES
(0, 'Admin', '', 'Send Message', '2020-04-25 13:37:59'),
(0, 'Admin', '', 'Send Message', '2020-04-25 13:40:50'),
(0, 'malampaya@gmail.com', 'Admin', 'Send Feedback', '2020-04-25 14:24:59'),
(0, 'admin', 'Admin', 'Send Feedback', '2020-04-25 14:30:56'),
(0, 'alvingumatay1@gmail.com', 'Admin', 'Send Feedback', '2020-04-25 14:58:47'),
(0, 'Admin', 'alvingumatay1@gmail.com', 'Send Message', '2020-04-25 14:59:03'),
(0, 'Admin', 'alvingumatay1@gmail.com', 'Send Message', '2020-04-25 15:10:29'),
(0, 'Admin', 'alvingumatay1@gmail.com', 'Send Message', '2020-04-25 15:10:39'),
(0, 'Admin', 'alvingumatay1@gmail.com', 'Send Message', '2020-04-25 15:11:39'),
(0, 'Admin', 'alvingumatay1@gmail.com', 'Send Message', '2020-04-25 15:17:33'),
(0, 'Admin', 'alvingumatay1@gmail.com', 'Send Message', '2020-04-25 15:18:08'),
(0, 'alvingumatay1@gmail.com', 'Admin', 'Send Feedback', '2020-04-25 15:21:10'),
(0, 'alvingumatay1@gmail.com', 'Admin', 'Send Feedback', '2020-04-25 15:21:25'),
(0, 'Admin', 'alvingumatay1@gmail.com', 'Send Message', '2020-04-25 15:23:22'),
(0, 'Admin', 'alvingumatay1@gmail.com', 'Send Message', '2020-04-25 15:24:08'),
(0, 'Admin', 'alvingumatay1@gmail.com', 'Send Message', '2020-04-25 15:26:56'),
(0, 'Admin', 'alvingumatay1@gmail.com', 'Send Message', '2020-04-25 15:27:20'),
(0, 'Admin', 'alvingumatay1@gmail.com', 'Send Message', '2020-04-25 15:27:39'),
(0, 'Admin', 'alvingumatay1@gmail.com', 'Send Message', '2020-04-25 15:28:30'),
(0, 'alvingumatay1@gmail.com', 'Admin', 'Send Feedback', '2020-04-26 13:25:46'),
(0, 'Admin', 'alvingumatay1@gmail.com', 'Send Message', '2020-04-26 13:30:37'),
(0, 'alvingumatay1@gmail.com', 'Admin', 'Send Feedback', '2020-04-27 10:48:19'),
(0, 'alvingumatay1@gmail.com', 'Admin', 'Send Feedback', '2020-04-27 10:48:30'),
(0, 'malampaya@gmail.com', 'Admin', 'Send Feedback', '2020-04-27 10:57:16'),
(0, 'malampaya@gmail.com', 'Admin', 'Send Feedback', '2020-04-27 10:57:38'),
(0, 'malampaya@gmail.com', 'Admin', 'Send Feedback', '2020-04-27 10:57:43'),
(0, 'alvingumatay1@gmail.com', 'Admin', 'Send Feedback', '2020-04-27 10:58:43'),
(0, 'Admin', 'admin@admin.com', 'Send Message', '2020-04-27 11:13:26'),
(0, 'Admin', 'admin@admin.com', 'Send Message', '2020-04-27 11:13:35'),
(0, 'Admin', 'admin@admin.com', 'Send Message', '2020-04-27 11:16:05'),
(0, 'Admin', 'admin@admin.com', 'Send Message', '2020-04-27 11:16:45'),
(0, 'Admin', 'admin@admin.com', 'Send Message', '2020-04-27 11:17:03'),
(0, 'Admin', 'admin@admin.com', 'Send Message', '2020-04-27 11:18:08'),
(0, 'Admin', 'admin@admin.com', 'Send Message', '2020-04-27 11:18:51'),
(0, 'Admin', 'admin@admins.com', 'Send Message', '2020-04-27 11:19:09'),
(0, 'alvingumatay13@gmail.com', 'Admin', 'Create Account', '2020-04-27 11:36:09'),
(0, 'alvingumatay13@gmail.com', 'Admin', 'Send Feedback', '2020-04-28 10:23:02'),
(0, 'alvingumatay13@gmail.com', 'Admin', 'Send Feedback', '2020-05-07 10:29:32'),
(0, 'alvingumatay13@gmail.com', 'Admin', 'Send Feedback', '2020-05-07 10:29:37');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `activities` varchar(255) NOT NULL,
  `post` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `activities`, `post`) VALUES
(1, 'mga hugasan', 'konti'),
(2, 'maglinis ng bahay', 'marumi'),
(3, 'maglinis ng elektrikfan', '3 piraso'),
(4, 'magrestore ng kulay ng bahay', 'depends'),
(5, 'maglaba ng mga damit', 'marami'),
(6, 'magwalis ng sahig at sa labas', 'kusa '),
(7, 'magkumpuni ng sirang gamit', 'depende sa dami ng luma'),
(9, 'magcomputer or magdrawing', 'depende'),
(10, 'magdeli sber ng tubig sa galon', '2 piraso'),
(11, 'manood ng tv', 'depende'),
(12, 'magaral ng magcodes base sa gusto', 'ok'),
(13, 'magayus ng kabinet', 'depende'),
(14, 'mag hakot at mag ayus ng gamit', 'ok');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `email`, `address`, `image`, `mobile`, `status`) VALUES
(2, 'ALvin Gumatay', '81dc9bdb52d04dc20036dbd8313ed055', 'alvingumatay1@gmail.com', '7 orovista village, concepcion uno, marikina city', 'black.jpg', '09462886584', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
