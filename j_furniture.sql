-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2019 at 08:14 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `j_furniture`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins_table`
--

CREATE TABLE `admins_table` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `privilege` varchar(255) NOT NULL DEFAULT 'regular'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins_table`
--

INSERT INTO `admins_table` (`id`, `username`, `password`, `privilege`) VALUES
(1, 'admin', '$2y$10$uW0OCOAnD6CUUUAK1H5gr.LT84sJfDhEUDs76O5JDzgFeL..Ur0iu', 'super'),
(2, 'admin1', '$2y$10$XEAtotdf7st3dDhvtPr3geop9lENzucVTnSGSa0nrzSN1pLvphXUW', 'regular');

-- --------------------------------------------------------

--
-- Table structure for table `category_table`
--

CREATE TABLE `category_table` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_table`
--

INSERT INTO `category_table` (`id`, `name`) VALUES
(4, ' Sofas'),
(5, 'Wardrobes'),
(29, 'Beds'),
(32, ' Table');

-- --------------------------------------------------------

--
-- Table structure for table `enquiries_table`
--

CREATE TABLE `enquiries_table` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `enquiry` text NOT NULL,
  `reviewed_by` varchar(255) DEFAULT NULL,
  `checked` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `furniture_table`
--

CREATE TABLE `furniture_table` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `visible` tinyint(1) NOT NULL DEFAULT '1',
  `furniture_condition` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'first hand'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `furniture_table`
--

INSERT INTO `furniture_table` (`id`, `name`, `description`, `price`, `category_id`, `visible`, `furniture_condition`) VALUES
(11, ' Corner Sofa', ' A modern styled corner sofa', 699, 4, 1, 'second hand'),
(16, ' Oak Wardrobe', ' Wardrobe to store all your clothes.', 500, 5, 1, 'second hand'),
(18, 'King Size Bed', ' Good bed for good people', 700, 29, 1, 'first hand'),
(23, ' Multipurpose Table', ' just table', 400, 32, 0, 'second hand');

-- --------------------------------------------------------

--
-- Table structure for table `special_table`
--

CREATE TABLE `special_table` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `post_date` date NOT NULL,
  `end_date` date NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `special_table`
--

INSERT INTO `special_table` (`id`, `name`, `post_date`, `end_date`, `description`) VALUES
(4, 'SUMMER SALE!!!!!!', '2019-05-09', '2019-05-24', '5% DISCOUNT ON ALL THE FURNITURES');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins_table`
--
ALTER TABLE `admins_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_table`
--
ALTER TABLE `category_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiries_table`
--
ALTER TABLE `enquiries_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `furniture_table`
--
ALTER TABLE `furniture_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `special_table`
--
ALTER TABLE `special_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins_table`
--
ALTER TABLE `admins_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category_table`
--
ALTER TABLE `category_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `enquiries_table`
--
ALTER TABLE `enquiries_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `furniture_table`
--
ALTER TABLE `furniture_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `special_table`
--
ALTER TABLE `special_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
