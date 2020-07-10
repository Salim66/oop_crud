-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2020 at 02:26 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oop_crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `staffs`
--

CREATE TABLE `staffs` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `cell` varchar(15) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'active',
  `created_at` int(11) NOT NULL DEFAULT current_timestamp(),
  `updated_at` int(11) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staffs`
--

INSERT INTO `staffs` (`id`, `name`, `email`, `cell`, `photo`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Kajol Das', 'kajol@gmial.com', '01254896325', '222d258471d74af8089dac0535195c19.jpg', 'active', 2147483647, 2147483647),
(4, 'Mithiun Khan', 'mith@gmail.com', '01896575452', 'e6ce2f73e78e23a179dd3614ab19d5a0.jpg', 'active', 2147483647, 2147483647),
(6, 'Khokon Khan', 'khokon@gmail.com', '01566666666', 'fd14e56cd32d63c5596d7de1ad9e7a1e.jpg', 'active', 2147483647, 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `cell` varchar(15) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'active',
  `created_at` int(11) NOT NULL DEFAULT current_timestamp(),
  `updated_at` int(11) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `email`, `cell`, `photo`, `status`, `created_at`, `updated_at`) VALUES
(11, 'MD SALIM HASAN RIAD', 'salimhasanriad@gmail.com', '01740445607', '47179b5f2dbf36a4664549a149854f58.jpg', 'active', 2147483647, 2147483647),
(12, 'Shamshul Islam Arfin', 'arfin@gmail.com', '01740445607', '942f0532b2cc32fad1c9fed874141c0f.jpg', 'active', 2147483647, 2147483647),
(13, 'Salman Hasan Mokki', 'mokki@gmail.com', '01569875453', '0aaae2c28d67be9e1dab1f0d2c85cdf4.jpg', 'active', 2147483647, 2147483647),
(14, 'Shuvo', 'shuvo@gmail.com', '01698745698', 'a1d3a9d719a64f6420b808fdf46e1e2b.jpg', 'active', 2147483647, 2147483647),
(15, 'Porithos Mohonto', 'porithos@gmail.com', '01254896325', '0333b966c9bf2de95c14ec90dcea4590.jpg', 'active', 2147483647, 2147483647),
(16, 'Deloyar Hosan', 'del@gmail.com', '01254896325', '4e3928b0bebe2e4ff0488521f0ad502e.jpg', 'active', 2147483647, 2147483647),
(17, 'Mohin Ali ', 'mohin@gmail.com', '01475896452', '2fecee17fa6dfe02819e1e1bd5223ba9.jpg', 'active', 2147483647, 2147483647),
(18, 'Jibon Sorkar', 'sorkar@gmail.com', '017854698546', '2b19189a8a5fe6c6944acfb7f44f888a.jpg', 'active', 2147483647, 2147483647),
(19, 'Moshaddek Hossain', 'hossain@gmail.com', '01785496354', '103a54202a15279b854734e77fa36932.jpg', 'active', 2147483647, 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `cell` varchar(15) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'active',
  `created_at` int(11) NOT NULL DEFAULT current_timestamp(),
  `updated_at` int(11) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `email`, `cell`, `photo`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Mominur Rahman', 'mominurrahman@gmail.com', '01777985468', '9f8e6f0e30e7a49231b9364a0d59c90d.jpg', 'active', 2147483647, 2147483647),
(2, 'Malek Khan', 'malek@gmail.com', '01254876932', 'd10d053d1e2041cd1a2f05c239a62a07.jpg', 'active', 2147483647, 2147483647),
(4, 'Ajiju Islam', 'ajijul@gmail.com', '01785496354', 'dd440d50d727e34f9e4829b8e47f4df7.jpg', 'active', 2147483647, 2147483647),
(5, 'Symita Day', 'symita@gmail.com', '01985478546', '9627226325905742226ca64231375926.jpg', 'active', 2147483647, 2147483647),
(6, 'Muskan', 'muskan@gmail.com', '01458796545', '4d4f38ee284fe0646f2d1f3c91724615.jpg', 'active', 2147483647, 2147483647);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `staffs`
--
ALTER TABLE `staffs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `staffs`
--
ALTER TABLE `staffs`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
