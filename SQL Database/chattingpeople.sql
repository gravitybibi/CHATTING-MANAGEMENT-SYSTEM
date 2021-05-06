-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2017 at 04:02 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `chattingpeople`
--

-- --------------------------------------------------------

--
-- Table structure for table `historychat`
--

CREATE TABLE IF NOT EXISTS `historychat` (
  `user_name` text NOT NULL,
  `textsend` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `historychat`
--

INSERT INTO `historychat` (`user_name`, `textsend`) VALUES
('penny', 'yup the system works with all function'),
('maria', 'yes finally its done'),
('steven', 'yeah, now everyone can chat with this system'),
('maria', 'yeah, no problem'),
('maria', 'the system works 100%'),
('steven', 'i know, you can add more php code for interesting function'),
('penny', 'it is open chatting for everyone'),
('tony', 'hey, i am new here'),
('angela', 'hye, where are you from?'),
('tony', 'how about you?');

-- --------------------------------------------------------

--
-- Table structure for table `management`
--

CREATE TABLE IF NOT EXISTS `management` (
  `admin_user` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `management`
--

INSERT INTO `management` (`admin_user`) VALUES
('admin');

-- --------------------------------------------------------

--
-- Table structure for table `registeruser`
--

CREATE TABLE IF NOT EXISTS `registeruser` (
`peopleid` int(200) NOT NULL,
  `user_name` text NOT NULL,
  `user_email` varchar(30) NOT NULL,
  `user_password` varchar(30) NOT NULL,
  `user_gender` text NOT NULL,
  `user_age` int(90) NOT NULL,
  `user_occupation` text NOT NULL,
  `user_status` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registeruser`
--

INSERT INTO `registeruser` (`peopleid`, `user_name`, `user_email`, `user_password`, `user_gender`, `user_age`, `user_occupation`, `user_status`) VALUES
(1, 'penny', 'penny@gmail.com', '1234', 'Male', 22, 'programmer', 'single'),
(2, 'maria', 'maria@gmail.com', '5678', 'Female', 25, 'Database Designer', 'married'),
(3, 'steven', 'steven@gmail.com', '0987', 'Male', 26, 'Developer', 'Complicated'),
(4, 'tony', 'tony@gmail.com', '7654', 'Male', 29, 'Engineer', 'single'),
(5, 'angela', 'angela@gmail.com', '3434', 'Female', 25, 'dancer', 'single');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `management`
--
ALTER TABLE `management`
 ADD PRIMARY KEY (`admin_user`(100));

--
-- Indexes for table `registeruser`
--
ALTER TABLE `registeruser`
 ADD PRIMARY KEY (`peopleid`), ADD UNIQUE KEY `peopleid` (`peopleid`), ADD KEY `peopleid_2` (`peopleid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registeruser`
--
ALTER TABLE `registeruser`
MODIFY `peopleid` int(200) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
