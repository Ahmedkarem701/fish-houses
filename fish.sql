-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 19, 2022 at 11:04 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fish`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `c_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `c_name`) VALUES
(1, 'category 1'),
(2, 'category 2');

-- --------------------------------------------------------

--
-- Table structure for table `cooking`
--

CREATE TABLE `cooking` (
  `co_id` int(11) NOT NULL,
  `co_name` varchar(100) NOT NULL,
  `co_p_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cooking`
--

INSERT INTO `cooking` (`co_id`, `co_name`, `co_p_id`) VALUES
(1, 'cooking 1 edit', 1),
(4, 'cooking 2', 2);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `p_name` varchar(100) DEFAULT NULL,
  `p_cat` int(11) NOT NULL,
  `p_price` varchar(20) DEFAULT NULL,
  `p_desc` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `p_name`, `p_cat`, `p_price`, `p_desc`) VALUES
(2, 'test product 2 edit 2', 2, '100', 'test description'),
(3, 'Test Product 3', 1, '400', 'test description product 3 of fish wibstie');

-- --------------------------------------------------------

--
-- Table structure for table `p_photo`
--

CREATE TABLE `p_photo` (
  `ph_id` int(11) NOT NULL,
  `photo` text DEFAULT NULL,
  `p_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `p_photo`
--

INSERT INTO `p_photo` (`ph_id`, `photo`, `p_id`) VALUES
(1, 'uploads/3470605856.png', 1),
(2, 'uploads/5886285166.png', 1),
(3, 'uploads/1442115824.png', 1),
(4, 'uploads/3947765718.png', 1),
(5, 'uploads/1861136552.png', 2),
(6, 'uploads/7761925395.png', 2),
(7, 'uploads/7647324478.png', 2),
(8, 'uploads/342222348.png', 2),
(9, 'uploads/3096446520.jpg', 3),
(10, 'uploads/3341479364.jpg', 3),
(11, 'uploads/4212715838.jpg', 3);

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `r_id` int(11) NOT NULL,
  `u_id` varchar(100) DEFAULT NULL,
  `status` tinyint(1) DEFAULT 0 COMMENT '0 => in progress, 1 => done',
  `r_order` varchar(50) NOT NULL,
  `co_id` int(11) DEFAULT NULL,
  `r_p_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`r_id`, `u_id`, `status`, `r_order`, `co_id`, `r_p_name`) VALUES
(2, 'mohamed', 1, 'cooking', 1, ''),
(3, 'mohamed elmohands', 1, 'fishing', 4, ''),
(4, 'tarek', 1, 'fishing', 1, ''),
(5, 'test worker 5', 0, 'on', 4, ''),
(6, 'test worker 5', 0, 'on', 4, ''),
(7, 'test worker 5', 0, 'Restaurant', 4, '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `photo` text DEFAULT NULL,
  `jop` varchar(100) DEFAULT NULL,
  `dept` varchar(100) DEFAULT NULL,
  `user_type` tinyint(1) DEFAULT 0 COMMENT '0 => user, 1 => worker, 2 => admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `photo`, `jop`, `dept`, `user_type`) VALUES
(7, '', '', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 'uploads/2702683998.png', 'Delivery', 'Delivery', 1),
(8, '', '', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 'uploads/4626329981.png', 'Delivery', 'Delivery', 1),
(9, 'test worker 5', 'worker5@site.com', 'b2664d4b4f2ac5ef1627e668db91ca24db90df8b', 'uploads/5141706835.png', 'Cooking', 'Cooking', 1),
(10, 'test worker 6', 'worker6@site.com', 'a74c8f6c3dcc83119d6580fe1d01b50771136c5e', 'uploads/9036404339.png', 'Cooking', 'Cooking', 1),
(11, 'mohamed', 'elmohands@site.com', '1bd0913283f4bcb405f7c4b3f89b047acf3b170e', NULL, NULL, NULL, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cooking`
--
ALTER TABLE `cooking`
  ADD PRIMARY KEY (`co_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `p_photo`
--
ALTER TABLE `p_photo`
  ADD PRIMARY KEY (`ph_id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cooking`
--
ALTER TABLE `cooking`
  MODIFY `co_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `p_photo`
--
ALTER TABLE `p_photo`
  MODIFY `ph_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
