-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2024 at 01:12 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arsha`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `post` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `post`) VALUES
(34, 'web design', 0);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` int(11) NOT NULL,
  `title` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `description` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `category` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `post_date` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `author` int(11) NOT NULL,
  `post_img` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `username`, `email`, `password`) VALUES
(1, '', '', ''),
(5, 'anuj_jangra', 'jangraanuj5902@gmail.com', 'ANUanu123@'),
(6, '', '', ''),
(7, '', '', ''),
(8, '', '', ''),
(9, '', '', ''),
(10, '', '', ''),
(11, '', '', ''),
(12, '', '', ''),
(13, '', '', ''),
(14, '', '', ''),
(15, '', '', ''),
(16, '', '', ''),
(17, '', '', ''),
(18, 'anuj_jangra', '', ''),
(19, 'anuj_jangra', 'jangraanuj5902@gmail.com', ''),
(20, 'anuj_jangra', 'jangraanuj5902@gmail.com', 'ANUanu123@'),
(21, 'anuj_jangra', 'jangraanuj5902@gmail.com', 'ANUanu123@'),
(22, 'anuj_jangra', 'jangraanuj5902@gmail.com', 'ANUanu123@'),
(23, 'anuj_jangra', 'jangraanuj5902@gmail.com', 'ANUanu123@'),
(24, 'anuj_jangra', 'jangraanuj5902@gmail.com', 'ANUanu123@'),
(25, 'anuj_jangra', 'jangraanuj5902@gmail.com', 'ANUanu123@'),
(26, 'anuj_jangra', 'jangraanuj5902@gmail.com', 'ANUanu123@'),
(27, 'anuj_jangra', 'jangraanuj5902@gmail.com', 'ANUanu123@'),
(28, 'anuj_jangra', 'jangraanuj5902@gmail.com', 'ANUanu123@'),
(29, 'anuj_jangra', 'jangraanuj5902@gmail.com', 'ANUanu123@'),
(30, 'anuj_jangra', 'jangraanuj5902@gmail.com', 'ANUanu123@'),
(31, 'anuj_jangra', 'jangraanuj5902@gmail.com', 'ANUanu123@'),
(32, 'anuj_jangra', 'jangraanuj5902@gmail.com', 'ANUanu123@'),
(33, 'anuj_jangra', 'jangraanuj5902@gmail.com', 'ANUanu123@'),
(34, 'anuj_jangra', 'jangraanuj5902@gmail.com', 'ANUanu123@'),
(35, 'anuj_jangra', 'jangraanuj5902@gmail.com', 'ANUanu123@'),
(36, 'anuj_jangra', 'jangraanuj5902@gmail.com', 'ANUanu123@'),
(37, 'anuj_jangra', 'jangraanuj5902@gmail.com', 'ANUanu123@'),
(38, 'anuj_jangra', 'jangraanuj5902@gmail.com', 'ANUanu123@'),
(39, 'anuj_jangra', 'jangraanuj5902@gmail.com', 'ANUanu123@'),
(40, 'anuj_jangra', 'jangraanuj5902@gmail.com', 'ANUanu123@'),
(41, 'anuj_jangra', 'jangraanuj5902@gmail.com', 'ANUanu123@'),
(42, 'anuj_jangra', 'jangraanuj5902@gmail.com', 'ANUanu123@'),
(43, 'anuj_jangra', 'jangraanuj5902@gmail.com', 'ANUanu123@'),
(44, 'anuj_jangra', 'jangraanuj5902@gmail.com', 'ANUanu123@'),
(45, 'anuj_jangra', 'jangraanuj5902@gmail.com', 'ANUanu123@'),
(46, 'anuj_jangra', 'jangraanuj5902@gmail.com', 'ANUanu123@'),
(47, 'anuj_jangra', 'jangraanuj5902@gmail.com', 'ANUanu123@'),
(48, 'anuj_jangra', 'jangraanuj5902@gmail.com', 'ANUanu123@'),
(49, 'anuj_jangra', 'jangraanuj5902@gmail.com', 'ANUanu123@'),
(50, 'anuj_jangra', 'jangraanuj5902@gmail.com', 'ANUanu123@'),
(51, 'anuj_jangra', 'jangraanuj5902@gmail.com', 'ANUanu123@'),
(52, 'anuj_jangra', 'jangraanuj5902@gmail.com', 'ANUanu123@'),
(53, 'anuj_jangra', 'jangraanuj5902@gmail.com', 'ANUanu123@'),
(54, '', '', ''),
(55, 'anuj_jangra', '', ''),
(56, 'anuj_jangra', '', ''),
(57, 'anuj_jangra', 'jangraanuj5902@gmail.com', ''),
(58, 'anuj_jangra', 'jangraanuj5902@gmail.com', 'ANUanu123@'),
(59, 'anuj_jangra', 'jangraanuj5902@gmail.com', 'ANUanu123@'),
(60, 'anuj_jangra', 'jangraanuj5902@gmail.com', 'ANUanu123@'),
(61, '', '', ''),
(62, 'mirdulchawla', '', ''),
(63, 'mirdulchawla', 'mirdulchawla123@gmail.com', ''),
(64, 'mirdulchawla', 'mirdulchawla123@gmail.com', 'ANUanu1232'),
(65, 'mirdulchawla', 'mirdulchawla123@gmail.com', 'ANUanu1232'),
(66, 'mirdulchawla', 'mirdulchawla123@gmail.com', 'ANUanu1232'),
(67, 'mirdulchawla', 'mirdulchawla123@gmail.com', 'ANUanu1232'),
(68, 'mirdulchawla', 'mirdulchawla123@gmail.com', 'ANUanu1232'),
(69, 'mirdulchawla', 'mirdulchawla123@gmail.com', 'ANUanu1232'),
(70, 'mirdulchawla', 'mirdulchawla123@gmail.com', 'ANUanu1232'),
(71, 'mirdulchawla', 'mirdulchawla123@gmail.com', 'ANUanu1232'),
(72, 'mirdulchawla', 'mirdulchawla123@gmail.com', 'ANUanu1232'),
(73, 'mirdulchawla', 'mirdulchawla123@gmail.com', 'ANUanu1232'),
(74, 'mirdulchawla', 'mirdulchawla123@gmail.com', 'ANUanu1232'),
(75, 'mirdulchawla', 'mirdulchawla123@gmail.com', 'ANUanu1232');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `fname` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `email` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `username` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `password` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `role` int(11) NOT NULL,
  `country` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `fname`, `email`, `username`, `password`, `role`, `country`, `state`, `city`) VALUES
(261, 'mohit ', 'mishra', 'mishra_mohit', '03bb2d44124925e041e6a88fd01d083b', 0, '105', '13', 'Imphal East'),
(263, 'anuj jangra', 'jangraanuj5902@gmail,com', '_anujjangra_', '03bb2d44124925e041e6a88fd01d083b', 1, '105', '5', 'Navsari'),
(269, 'nitesh', 'niteshkumar5502@gmail.com', 'kuimar_nitesh', 'd29eed9611f3b68607057cb05b07e3db', 1, '105', '12', 'Jalna'),
(270, 'nitin_shah', 'nitinshah9902@gmail.com', 'nitin_shah', '03bb2d44124925e041e6a88fd01d083b', 1, '105', '14', 'Ri-Bhoi'),
(274, 'vishnau parkash', 'vishnauparkash@123.gmail.com', '_vishnau_', '03bb2d44124925e041e6a88fd01d083b', 1, '105', '6', 'Sonepat'),
(275, 'kunal', 'abcd123@gmail.com', 'kunal_malik', '29a2344d3050c542729c0aa0b4e6ded5', 1, '105', '6', 'Sonepat'),
(276, 'anuj jnagra', 'jangraanuj5902@gmail.com', 'anujjnagra', '03bb2d44124925e041e6a88fd01d083b', 1, '105', '14', 'West Khasi Hills'),
(277, 'anuj jnagra', 'jangraanuj5902@gmail.com', 'anujjnagra', '03bb2d44124925e041e6a88fd01d083b', 1, '105', '14', 'West Khasi Hills'),
(278, 'manish kumar', 'kumarmanish123@gmail.com', 'manishkumar', '9b2a27720fe9eaf589419ff0a962c1e7', 1, '105', '15', 'Lawngtlai'),
(279, 'meena', 'hbdchv123@gmail.com', 'meena', 'ad61552a1176bdf9bbbbb492c2b73e54', 0, '105', '9', 'Kolar'),
(280, 'anuj', 'jangraanuj5902@gmail.comanu', 'anujjnagra', '03bb2d44124925e041e6a88fd01d083b', 0, '105', '14', 'West Garo Hills'),
(281, 'anuj', 'jangraanuj5902@gmail.com', 'hbwev', '2f200b3753290e4b7d08980c656e4ed2', 0, '105', '9', 'Hassan'),
(282, 'anuj', 'rihgeoiur12@gmail.com', 'ANU', '03bb2d44124925e041e6a88fd01d083b', 0, '105', '16', 'Mon'),
(283, 'raman', 'abcd1223@gmail.com', 'DSK_NVJ', '03bb2d44124925e041e6a88fd01d083b', 1, '105', '16', 'Mokokchung'),
(284, 'raman', 'cdjnvf123@gmail.com', 'DSK_NVJ', '9b2a27720fe9eaf589419ff0a962c1e7', 0, '105', '16', 'Phek'),
(285, 'YSASIU', 'DAIBKA!232@gmail.com', 'dsbjn', 'e3a85567901fe38c999e5fcc9ac074c3', 1, '105', '14', 'Jaintia Hills'),
(286, 'anuj', 'neshatyagi123@gmail.com', 'amdhbc', '03bb2d44124925e041e6a88fd01d083b', 0, '105', '12', 'Jalna'),
(287, 'anuj jangra', 'jangraanuj59042@gmail.com', 'ehdbnhefd', 'b652edc33c505afc82fd884705437e66', 1, '105', '10', 'Kannur'),
(288, 'anuj jangra', 'jangraanuj592@gmail.com', 'ehdbnhefd', 'b652edc33c505afc82fd884705437e66', 1, '105', '10', 'Kannur'),
(289, 'ashish', 'ashishkumar123@gmail.com', 'ashiah_kumar', '03bb2d44124925e041e6a88fd01d083b', 1, '105', '12', 'Solapur'),
(290, 'mirdul chawla', 'mirdulchawla123@gmail.com', 'mirdulchawla', '03bb2d44124925e041e6a88fd01d083b', 1, '105', '13', 'Chandel'),
(291, 'mirdul chawla', 'mirdulchawla12@gmail.com', 'mirdulchawla', '03bb2d44124925e041e6a88fd01d083b', 1, '105', '13', 'Chandel'),
(292, 'mirdul chawla', 'mirdulchawla1@gmail.com', 'mirdulchawla', '03bb2d44124925e041e6a88fd01d083b', 0, '105', '1', 'Bishnupur'),
(293, 'mirdul chawla', 'mirdulchawla456@gmail.com', 'mirdulchawla', '03bb2d44124925e041e6a88fd01d083b', 0, '105', '1', 'Bishnupur'),
(294, 'mirdul chawla', 'mirdulchawla457@gmail.com', 'mirdulchawla', '03bb2d44124925e041e6a88fd01d083b', 0, '105', '1', 'Adilabad'),
(295, 'mirdul chawla', 'mirdulchawla7@gmail.com', 'mirdulchawla', '03bb2d44124925e041e6a88fd01d083b', 0, '105', '1', 'Nizamabad'),
(296, 'mirdul chawla', 'mirdulchawla77@gmail.com', 'mirdulchawla', '03bb2d44124925e041e6a88fd01d083b', 0, '105', '1', 'Adilabad'),
(297, 'mirdul chawla', 'mirdulchawla57@gmail.com', 'mirdulchawla', '6a6f535659a1dd5b76e7e4483e496606', 0, '105', '1', 'Adilabad'),
(298, 'rina', 'rina123@gmail.com', 'rina_rina', '03bb2d44124925e041e6a88fd01d083b', 1, '105', '15', 'Mamit'),
(299, 'anunj', 'anujjangra112233@gmail.com', 'anuj._jangra', '0ea7f255f0867a981e021a2a45eaad12', 1, '105', '18', 'Jalandhar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=300;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
