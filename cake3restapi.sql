-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2018 at 05:33 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cake3restapi`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `firstname` varchar(150) NOT NULL,
  `lastname` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `role` varchar(10) NOT NULL DEFAULT 'user',
  `api_key` varchar(32) NOT NULL,
  `digest_pass` text NOT NULL,
  `ipaddress` varchar(45) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `firstname`, `lastname`, `email`, `role`, `api_key`, `digest_pass`, `ipaddress`, `created`, `modified`) VALUES
(50, 'gerry', '$2y$10$lxRdsDi4cD8u2sqy.jkKLurUeSXmnEbpX1KkuRuA4fDhzH0t4Fkva', '', '', '', 'admin', '', '', '', '2016-06-15 22:59:54', '2016-06-15 22:59:54');

-- --------------------------------------------------------

--
-- Table structure for table `words`
--

CREATE TABLE `words` (
  `id` int(11) NOT NULL,
  `word` varchar(40) NOT NULL,
  `word_syllables` varchar(150) NOT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `picture_dir` varchar(255) NOT NULL,
  `soundfile` varchar(255) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `words`
--

INSERT INTO `words` (`id`, `word`, `word_syllables`, `picture`, `picture_dir`, `soundfile`, `user_id`, `created`, `modified`) VALUES
(2, 'computerfghhgfhfghfghf', '', 'computer.jpg', '2', '', 0, '2015-04-08 16:32:07', '2015-05-01 22:05:15'),
(5, 'elephant', 'elephant', 'elephant.jpg', '5', '', 0, '2015-04-08 16:32:07', '2015-05-09 14:59:49'),
(43, 'Baby', '', '81.jpg', '43', '100grand.mp3', 50, '2015-04-20 18:23:35', '2015-04-20 19:37:37'),
(46, 'space', '', '5540-observation-deck-wallpaper.jpg', '46', NULL, 50, '2015-04-20 19:19:53', '2015-05-14 22:29:56'),
(49, 'submarine2', '', 'yellow-submarine-icon.png', '49', NULL, 50, '2015-04-20 20:14:21', '2015-04-20 20:14:21'),
(56, 'oscar', '', 'Picture 0006.jpg', '56', NULL, 50, '2015-05-18 20:37:41', '2015-05-18 22:09:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `words`
--
ALTER TABLE `words`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `words`
--
ALTER TABLE `words`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
