-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2022 at 12:39 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `usersdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`) VALUES
(39, 'Shimul Mallick', '18372121', 'shimulallick7211@gmail.com'),
(40, 'aaaaaa', 'aaaaaa', 'shimulallick7211@gmail.com'),
(41, 'asasas', 'asasas', 'shimusdddfdsflallick7211@gmail.com'),
(42, 'Shimul Mallick', '18372121', 'shimulallick7211@gmail.com'),
(44, 'ughgjyhgjyhgigi', '1111111', 'shimulallick7211@gmail.com'),
(45, 'asdasd', '111111', 'shimulmallick721721@gmail.com'),
(46, 'cvcvcv', '123123', 'shimulallick7211@gmail.com'),
(47, 'sssddd', '123123', 'shimulallick7211@gmail.com'),
(48, 'Shimul Mallick', '111111', 'shimulallick7211@gmail.com'),
(49, 'ssssss', '111111', 'shimulallick7211@gmail.com'),
(51, 'aaa', 'aaa', 'aaaaaa@gmail.com'),
(52, 'aaaaaaa', 'qqqqqq', 'aa@gmail.com'),
(53, 'papay mallick', 'shimul', 'papay.mallick7554@gmail.com'),
(54, 'Shimul Mallick', '111111', 'shimulallick7211@gmail.com'),
(56, 'weddingermaire', 'cccccc', 'weddingermairechudi@gmail.com'),
(57, 'dfgdfg', '111111', 'admin@gmail.com'),
(58, 'jjjjjj', '123123', 'jjjjjj@gmail.com'),
(59, 'mmmmnnnnnb', '123456', 'mmmmmm@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
