-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2016 at 02:24 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tellmeyours`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_combination`
--

CREATE TABLE IF NOT EXISTS `tb_combination` (
  `combination_code` varchar(3) NOT NULL,
  `combination_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_combination`
--

INSERT INTO `tb_combination` (`combination_code`, `combination_name`) VALUES
('a', 'Noodles'),
('b', 'Rice'),
('c', 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `tb_cook`
--

CREATE TABLE IF NOT EXISTS `tb_cook` (
  `cook_code` varchar(3) NOT NULL,
  `cook_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_cook`
--

INSERT INTO `tb_cook` (`cook_code`, `cook_name`) VALUES
('a', 'Fried'),
('b', 'Boiled'),
('c', 'Stirred');

-- --------------------------------------------------------

--
-- Table structure for table `tb_meat`
--

CREATE TABLE IF NOT EXISTS `tb_meat` (
  `meat_code` varchar(3) NOT NULL,
  `meat_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_meat`
--

INSERT INTO `tb_meat` (`meat_code`, `meat_name`) VALUES
('a', 'Seafood'),
('b', 'Beef'),
('c', 'Pork_Chicken'),
('d', 'None');

-- --------------------------------------------------------

--
-- Table structure for table `tb_result`
--

CREATE TABLE IF NOT EXISTS `tb_result` (
  `res_id` int(5) NOT NULL,
  `menu` text NOT NULL,
  `cooking` text NOT NULL,
  `meat` text NOT NULL,
  `spicy` text NOT NULL,
  `combination` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=73 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_result`
--

INSERT INTO `tb_result` (`res_id`, `menu`, `cooking`, `meat`, `spicy`, `combination`) VALUES
(1, 'Seafood Khao soi ', 'a', 'a', 'a', 'a'),
(2, 'Basil Fried Rice with Seafood', 'a', 'a', 'a', 'b'),
(3, 'Spicy fried shrimp', 'a', 'a', 'a', 'c'),
(4, 'Tom yum seafood with noodles', 'b', 'a', 'a', 'a'),
(5, 'Kaengsom kung porridge', 'b', 'a', 'a', 'b'),
(6, 'Tomsap seafood soup', 'b', 'a', 'a', 'c'),
(7, 'spicy noodles stired with seafood', 'c', 'a', 'a', 'a'),
(8, 'Tom yum seafood fried rice', 'c', 'a', 'a', 'b'),
(9, 'Chili stired with seafood', 'c', 'a', 'a', 'c'),
(10, 'Beef Khao soi ', 'a', 'b', 'a', 'a'),
(11, 'Basil Fried Rice with Beef', 'a', 'b', 'a', 'b'),
(12, 'Beef fried with garlic', 'a', 'b', 'a', 'c'),
(13, 'Tom yum beef with noodles', 'b', 'b', 'a', 'a'),
(14, 'Keang som beef with rice', 'b', 'b', 'a', 'b'),
(15, 'Tom yum beef soup', 'b', 'b', 'a', 'c'),
(16, 'Beef drunken noodles', 'c', 'b', 'a', 'a'),
(17, 'Beef drunken with rice', 'c', 'b', 'a', 'b'),
(18, 'Beef salad', 'c', 'b', 'a', 'c'),
(19, 'Spaghetti with batter-fried chicken', 'a', 'c', 'a', 'a'),
(20, 'Batter-fried chicken with spicy sauce   ', 'a', 'c', 'a', 'b'),
(21, 'Barbecue pork chop steak', 'a', 'c', 'a', 'c'),
(22, 'Spicy TOM YAM pork noodle soup', 'b', 'c', 'a', 'a'),
(23, 'TOM YAM chicken porridge', 'b', 'c', 'a', 'b'),
(24, 'TOM YAM chicken', 'b', 'c', 'a', 'c'),
(25, 'Spaghetti pork hot basil ', 'c', 'c', 'a', 'a'),
(26, 'Fried rice pork hot basil', 'c', 'c', 'a', 'b'),
(27, 'Pork hot basil', 'c', 'c', 'a', 'c'),
(28, 'Cellophane noodle spicy salad with omelet', 'a', 'd', 'a', 'a'),
(29, 'Omelet on rice with chilli sauce', 'a', 'd', 'a', 'b'),
(30, 'Spicy salad with fried eggs', 'a', 'd', 'a', 'c'),
(31, 'TOM YUM mushroom noodle soup', 'b', 'd', 'a', 'a'),
(32, 'TOM YUM mushroom porridge', 'b', 'd', 'a', 'b'),
(33, 'Spicy soup vegetable', 'b', 'd', 'a', 'c'),
(34, 'Spaghetti mushroom spicy sauce', 'c', 'd', 'a', 'a'),
(35, 'Fried rice with chilli', 'c', 'd', 'a', 'b'),
(36, 'Stir Fried Swamp Cabbage', 'c', 'd', 'a', 'c'),
(37, 'Fired shrimp with noodles', 'a', 'a', 'b', 'a'),
(38, 'Fish fried with garlic and steamed rice', 'a', 'a', 'b', 'b'),
(39, 'Seafood fried', 'a', 'a', 'b', 'c'),
(40, 'Kuy teav with shrimp dumplings', 'b', 'a', 'b', 'a'),
(41, 'shrimp porridge', 'b', 'a', 'b', 'b'),
(42, ' Seafood soup', 'b', 'a', 'b', 'c'),
(43, 'shrimp stired fried with noodles', 'c', 'a', 'b', 'a'),
(44, 'Fried rice with shrimp', 'c', 'a', 'b', 'b'),
(45, 'fired vegetable with shrimp', 'c', 'a', 'b', 'c'),
(46, 'Spagetti with fried beef', 'a', 'b', 'b', 'a'),
(47, 'Rice with fried beef', 'a', 'b', 'b', 'b'),
(48, 'fried beef', 'a', 'b', 'b', 'c'),
(49, 'instance noodles with beef', 'b', 'b', 'b', 'a'),
(50, 'porridge with beef', 'b', 'b', 'b', 'b'),
(51, 'beef soup', 'b', 'b', 'b', 'c'),
(52, 'fried noodles with beef', 'c', 'b', 'b', 'a'),
(53, 'fried rice beef', 'c', 'b', 'b', 'b'),
(54, 'beef in oyster sauce', 'c', 'b', 'b', 'c'),
(55, 'Spaghetti with batter-fried chicken ', 'a', 'c', 'b', 'a'),
(56, 'Fried rice with fried chicken', 'a', 'c', 'b', 'b'),
(57, 'Pork chop steak ', 'a', 'c', 'b', 'c'),
(58, 'Noodle pork soup ', 'b', 'c', 'b', 'a'),
(59, 'Minced pork porridge', 'b', 'c', 'b', 'b'),
(60, 'Minced pork soup', 'b', 'c', 'b', 'c'),
(61, 'Spaghetti with pork basil', 'c', 'c', 'b', 'a'),
(62, 'Rice topped with stir-fried pork and basil', 'c', 'c', 'b', 'b'),
(63, 'Chicken with bean sprouts', 'c', 'c', 'b', 'c'),
(64, 'Spaghetti mushroom batter-fried sauce ', 'a', 'd', 'b', 'a'),
(65, 'Rice with omelet', 'a', 'd', 'b', 'b'),
(66, 'Stuffed omelet', 'a', 'd', 'b', 'c'),
(67, 'Chinese cabbage noodle soup ', 'b', 'd', 'b', 'a'),
(68, 'Carrot soup porridge', 'b', 'd', 'b', 'b'),
(69, 'Corn soup', 'b', 'd', 'b', 'c'),
(70, 'Yakisoba', 'c', 'd', 'b', 'a'),
(71, 'Fried rice scrambled egg', 'c', 'd', 'b', 'b'),
(72, 'Sauted mixed vegetables in oyster sauce', 'c', 'd', 'b', 'c');

-- --------------------------------------------------------

--
-- Table structure for table `tb_spicy`
--

CREATE TABLE IF NOT EXISTS `tb_spicy` (
  `spicy_code` varchar(3) NOT NULL,
  `spicy_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_spicy`
--

INSERT INTO `tb_spicy` (`spicy_code`, `spicy_name`) VALUES
('a', 'Spicy'),
('b', 'Not Spicy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_combination`
--
ALTER TABLE `tb_combination`
  ADD PRIMARY KEY (`combination_code`);

--
-- Indexes for table `tb_cook`
--
ALTER TABLE `tb_cook`
  ADD PRIMARY KEY (`cook_code`);

--
-- Indexes for table `tb_meat`
--
ALTER TABLE `tb_meat`
  ADD PRIMARY KEY (`meat_code`);

--
-- Indexes for table `tb_result`
--
ALTER TABLE `tb_result`
  ADD PRIMARY KEY (`res_id`);

--
-- Indexes for table `tb_spicy`
--
ALTER TABLE `tb_spicy`
  ADD PRIMARY KEY (`spicy_code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_result`
--
ALTER TABLE `tb_result`
  MODIFY `res_id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=73;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
