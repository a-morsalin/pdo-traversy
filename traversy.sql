-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2017 at 04:28 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `traversy`
--

-- --------------------------------------------------------

--
-- Table structure for table `pdo_main`
--

CREATE TABLE `pdo_main` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `author` varchar(255) NOT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pdo_main`
--

INSERT INTO `pdo_main` (`id`, `title`, `body`, `author`, `is_published`, `created_at`) VALUES
(1, 'Post One', 'This is post one', 'Zimran', 1, '2017-09-26 18:57:28'),
(2, 'Post Two', 'This is post two', 'Abrar', 1, '2017-09-26 18:57:28'),
(3, 'Post Three', 'This is post three', 'Zimran', 1, '2017-09-26 19:45:05'),
(4, 'Post Four', 'This is post four', 'Zimran', 0, '2017-09-26 19:45:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pdo_main`
--
ALTER TABLE `pdo_main`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pdo_main`
--
ALTER TABLE `pdo_main`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
