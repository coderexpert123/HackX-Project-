-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2020 at 12:15 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codwar`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(23) NOT NULL,
  `c_desc` varchar(234) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`c_id`, `c_name`, `c_desc`, `created`) VALUES
(1, 'Django', 'Graete Framework of Pyton', '2020-07-22 09:27:10'),
(2, 'Ruby and Rails', 'Graete languages', '2020-07-22 09:27:51'),
(3, 'React js', 'React is awesome ufor UI making ', '2020-07-22 16:17:30'),
(4, 'Node js', 'Node is awesome ufor Js Framework making ', '2020-07-22 16:18:29'),
(5, 'CSS', 'Its is used For Styling UI', '2020-07-22 16:19:15'),
(6, 'Mongo Db', 'Its is used DB in JS', '2020-07-22 16:19:55'),
(7, 'PIP Installation', 'Its is used for PIP', '2020-07-22 16:21:10'),
(8, 'Pygame', 'Its is used for Gaming devlopmemt', '2020-07-22 16:21:34'),
(9, 'TKINTER', 'Its is Used in GUI ', '2020-07-22 16:22:00');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `cooment_id` int(11) NOT NULL,
  `comment_content` varchar(456) NOT NULL,
  `t_id` int(11) NOT NULL,
  `comment_by` int(11) NOT NULL,
  `comment_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`cooment_id`, `comment_content`, `t_id`, `comment_by`, `comment_time`) VALUES
(11, 'Rest APi Problem are commning toug request', 1, 0, '2020-07-23 09:28:56'),
(12, ',;l;l', 1, 0, '2020-07-23 09:29:39');

-- --------------------------------------------------------

--
-- Table structure for table `treads`
--

CREATE TABLE `treads` (
  `t_id` int(7) NOT NULL,
  `t_title` varchar(25) NOT NULL,
  `t_desc` varchar(256) NOT NULL,
  `t_c_id` int(7) NOT NULL,
  `t_user_id` int(7) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `treads`
--

INSERT INTO `treads` (`t_id`, `t_title`, `t_desc`, `t_c_id`, `t_user_id`, `timestamp`) VALUES
(1, 'Django', 'Unable to add database', 1, 0, '2020-07-22 21:29:37'),
(2, 'React Js', 'Problem in Redux', 1, 0, '2020-07-22 21:53:16'),
(6, 'man@gmail.com', 'fine', 1, 0, '2020-07-23 08:23:06'),
(7, 'Blog@gmail.com', 'nics', 1, 0, '2020-07-23 08:29:16'),
(9, 'Educatiion@gmail.com', 'Starting tuorials', 2, 0, '2020-07-23 08:32:22'),
(10, 'Blog@gmail.com', 'jk', 7, 0, '2020-07-23 11:02:43');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `sno` int(11) NOT NULL,
  `u_email` varchar(30) NOT NULL,
  `u_pass` varchar(255) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`sno`, `u_email`, `u_pass`, `timestamp`) VALUES
(1, 'abc@gmail.com', '112', '2020-07-23 11:54:51'),
(8, 'nj@gmail.com', '56', '2020-07-23 13:18:16'),
(9, 'nj@gmail.com', '56', '2020-07-23 13:20:17'),
(10, 'nj@gmail.com', '56', '2020-07-23 13:21:27'),
(11, 'j@gmail.com', '67', '2020-07-23 13:21:50'),
(12, 'moan@gmail.com', '78', '2020-07-23 13:23:45'),
(13, 'an@gmail.com', '12', '2020-07-23 13:28:21'),
(14, 'ma@gmail.com', '12', '2020-07-23 13:30:51'),
(15, 'na@gmail.com', '12', '2020-07-23 14:41:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`cooment_id`);

--
-- Indexes for table `treads`
--
ALTER TABLE `treads`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `cooment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `treads`
--
ALTER TABLE `treads`
  MODIFY `t_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
