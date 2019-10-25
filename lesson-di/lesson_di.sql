-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 25, 2019 at 12:55 PM
-- Server version: 5.7.27-0ubuntu0.16.04.1
-- PHP Version: 7.2.23-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lesson_di`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `description`) VALUES
(1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ac faucibus tortor. Nam finibus aliquam convallis. Nunc auctor dapibus arcu commodo dictum. Morbi maximus ac lectus id pharetra. Maecenas neque turpis, dignissim non diam et, viverra vehicula nisi. Ut pretium, elit quis interdum laoreet, neque diam elementum libero, sit amet dapibus dolor ex at lacus. Nunc mollis lacus quam, mattis ornare tellus gravida in. Sed nec orci neque.'),
(2, 'Donec tincidunt, nunc quis imperdiet vulputate, massa dolor bibendum nunc, in ornare nisi sem non odio.', 'Donec tincidunt, nunc quis imperdiet vulputate, massa dolor bibendum nunc, in ornare nisi sem non odio. In faucibus semper elementum. Nunc elementum ante magna, quis rhoncus turpis iaculis vitae. Cras lobortis, ligula sit amet tempor dictum, metus nibh finibus felis, et porttitor tellus nisi quis lorem. Aliquam pellentesque sed est a elementum. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque eros mi, ultrices a diam et, tristique lobortis quam. Morbi rutrum pellentesque tincidunt. Nulla facilisi. Morbi commodo gravida sollicitudin. Etiam sollicitudin tincidunt mollis.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`) VALUES
(1, 'Smit', 'smit@example.com'),
(2, 'Jonsson', 'jonsson@examlpe.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
