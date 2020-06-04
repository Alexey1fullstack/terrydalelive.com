-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 26, 2020 at 09:57 AM
-- Server version: 5.6.47-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `caard_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `assettype`
--

CREATE TABLE `assettype` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `icon_name` varchar(20) NOT NULL,
  `icon_sort` int(11) NOT NULL,
  `name_key` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assettype`
--

INSERT INTO `assettype` (`id`, `name`, `icon_name`, `icon_sort`, `name_key`) VALUES
(1, 'condo', 'Multi-Family', 6, 1),
(2, 'factory', 'Industrial', 5, 2),
(3, 'garage', 'Garage', 7, 3),
(4, 'hotel', 'Hotel', 4, 4),
(5, 'new building', 'Other', 8, 5),
(6, 'office', 'Office', 3, 6),
(7, 'shop', 'Strip Center', 2, 7),
(15, 'warehouse', 'Self-Storage', 1, 8);

-- --------------------------------------------------------

--
-- Table structure for table `card`
--

CREATE TABLE `card` (
  `id` int(11) NOT NULL,
  `type` varchar(50) DEFAULT NULL,
  `value1` varchar(50) DEFAULT NULL,
  `value2` varchar(50) DEFAULT NULL,
  `value3` varchar(50) DEFAULT NULL,
  `value4` varchar(50) DEFAULT NULL,
  `value5` varchar(50) DEFAULT NULL,
  `value6` varchar(50) DEFAULT NULL,
  `value7` varchar(50) DEFAULT NULL,
  `value8` varchar(50) DEFAULT NULL,
  `value9` varchar(50) DEFAULT NULL,
  `card_img` varchar(30) DEFAULT NULL,
  `status` int(11) DEFAULT '0',
  `category` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `card`
--

INSERT INTO `card` (`id`, `type`, `value1`, `value2`, `value3`, `value4`, `value5`, `value6`, `value7`, `value8`, `value9`, `card_img`, `status`, `category`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '1', 'Dallas, Tx', '123', '21', '213', '123', NULL, NULL, NULL, NULL, NULL, 1, 1, '2020-04-19 07:33:55', '2020-05-15 03:43:42', '2020-05-15 03:43:42'),
(2, '4', 'Dallas, Tx', '123', '123', '23', '23', NULL, NULL, NULL, NULL, NULL, 1, 1, '2020-04-19 04:47:01', '2020-05-15 03:45:19', '2020-05-15 03:45:19'),
(3, '3', 'New York', '123', '32', '232', '32', NULL, NULL, NULL, NULL, NULL, 1, 1, '2020-04-19 04:47:14', '2020-05-15 03:45:09', '2020-05-15 03:45:09'),
(4, '2', 'Senttle', '231', '232', '23', '32', NULL, NULL, NULL, NULL, NULL, 0, 1, '2020-04-19 04:47:36', '2020-05-15 03:45:22', '2020-05-15 03:45:22'),
(5, '4', 'New', '33', '434', '343', '34', NULL, NULL, NULL, NULL, NULL, 0, 1, '2020-04-19 04:48:16', '2020-05-15 03:45:16', '2020-05-15 03:45:16'),
(6, '2', 'Denver', '234', '23', '432', '4', NULL, NULL, NULL, NULL, NULL, 0, 1, '2020-04-19 04:50:54', '2020-05-15 03:44:26', '2020-05-15 03:44:26'),
(7, '3', 'eee', '123', '123', '213', '23', NULL, NULL, NULL, NULL, NULL, 0, 1, '2020-04-19 04:56:20', '2020-05-15 03:45:12', '2020-05-15 03:45:12'),
(8, '7', 'Houston 3', '123', '21', '321', '32', NULL, NULL, NULL, NULL, NULL, 0, 1, '2020-04-19 04:57:46', '2020-05-15 03:44:53', '2020-05-15 03:44:53'),
(9, '15', 'New York', '234', '43', '34', '23', NULL, NULL, NULL, NULL, NULL, 1, 1, '2020-04-21 03:38:33', '2020-05-15 03:45:00', '2020-05-15 03:45:00'),
(10, '6', 'Houston', '23', '32', '32', '32', NULL, NULL, NULL, NULL, NULL, 0, 1, '2020-04-21 03:38:51', '2020-05-15 03:44:38', '2020-05-15 03:44:38'),
(12, '6', 'Settle', '1239', '439', '342', '432', NULL, NULL, NULL, NULL, NULL, 1, 1, '2020-04-24 07:32:29', '2020-05-15 03:44:49', '2020-05-15 03:44:49'),
(13, '4', 'Seattle', '123', '32', '32', '432', NULL, NULL, NULL, NULL, NULL, 0, 1, '2020-04-24 07:33:30', '2020-05-15 03:44:29', '2020-05-15 03:44:29'),
(14, '1', 'New York 2', '122', '321', '123', '123', NULL, NULL, NULL, NULL, NULL, 0, 2, '2020-04-24 07:37:11', '2020-05-15 03:44:05', '2020-05-15 03:44:05'),
(16, '15', 'tester', '23123', '123', '213', '123', NULL, NULL, NULL, NULL, NULL, 0, 1, '2020-04-24 08:00:42', '2020-05-15 03:44:56', '2020-05-15 03:44:56'),
(17, '4', 'tester', '312', '23', '23', '23', NULL, NULL, NULL, NULL, NULL, 0, 1, '2020-04-24 08:04:02', '2020-05-15 03:44:42', '2020-05-15 03:44:42'),
(18, '6', 'tester3', '32', '23', '23', '232', NULL, NULL, NULL, NULL, NULL, 1, 1, '2020-04-24 08:04:32', '2020-05-15 03:44:20', '2020-05-15 03:44:20'),
(19, '7', 'tester5', '231', '123', '123', '213', NULL, NULL, NULL, NULL, NULL, 0, 1, '2020-04-24 08:05:06', '2020-05-15 03:44:34', '2020-05-15 03:44:34'),
(20, '4', 'New York 5', '120', '230', '232', '412', NULL, NULL, NULL, NULL, NULL, 0, 1, '2020-04-24 08:14:25', '2020-05-15 03:43:51', '2020-05-15 03:43:51'),
(52, '1', 'Weatherford, Texas', '900,000', '75', '5.07', '6.10', NULL, NULL, NULL, NULL, '1', 0, 3, '2020-05-19 01:24:53', '2020-05-19 01:24:53', NULL),
(22, '3', '123', '123', '123', '123', '123', NULL, NULL, NULL, NULL, '1', 0, 2, '2020-05-05 01:05:08', '2020-05-15 03:43:54', '2020-05-15 03:43:54'),
(32, '2', 'NewYork', '111', '111', '111', '111', NULL, NULL, NULL, NULL, '1', 0, 2, '2020-05-15 00:20:16', '2020-05-15 03:43:36', '2020-05-15 03:43:36'),
(53, '1', 'Dallas, Texas', '1,475,000', '75', '5.07', '6.27', NULL, NULL, NULL, NULL, '1', 0, 3, '2020-05-19 02:25:40', '2020-05-19 02:25:40', NULL),
(24, '7', 'NewYork La', '12', '12', '12', '12', NULL, NULL, NULL, NULL, NULL, 0, 1, '2020-05-10 10:27:15', '2020-05-15 03:44:17', '2020-05-15 03:44:17'),
(25, '15', 'la', '12', '123', '232', '34', NULL, NULL, NULL, NULL, NULL, 0, 1, '2020-05-10 10:28:47', '2020-05-15 03:44:14', '2020-05-15 03:44:14'),
(26, '3', 'qq', '12', '12', '12', '12', NULL, NULL, NULL, NULL, NULL, 0, 3, '2020-05-10 10:30:10', '2020-05-10 10:39:05', '2020-05-10 10:39:05'),
(27, '1', 'qq', '12', '232', '3213', '3', NULL, NULL, NULL, NULL, NULL, 0, 3, '2020-05-10 10:30:23', '2020-05-15 03:44:09', '2020-05-15 03:44:09'),
(28, '15', 'qq', '111', '111', '111', '111', NULL, NULL, NULL, NULL, NULL, 0, 1, '2020-05-10 10:33:10', '2020-05-10 10:39:10', '2020-05-10 10:39:10'),
(29, '4', 'qq', '12', '12', '12', '12', NULL, NULL, NULL, NULL, NULL, 0, 1, '2020-05-10 10:35:23', '2020-05-10 10:39:00', '2020-05-10 10:39:00'),
(31, '2', 'Ra', '12', '12', '12', '12', NULL, NULL, NULL, NULL, NULL, 1, 2, '2020-05-10 10:40:38', '2020-05-15 03:43:47', '2020-05-15 03:43:47'),
(33, '3', 'NewYork-2', '222', '222', '222', '222', NULL, NULL, NULL, NULL, NULL, 0, 2, '2020-05-15 00:20:48', '2020-05-15 03:43:32', '2020-05-15 03:43:32'),
(34, '15', 'NewYork', '123', '123', '123', '123', NULL, NULL, NULL, NULL, NULL, 0, 3, '2020-05-15 00:38:15', '2020-05-15 03:43:28', '2020-05-15 03:43:28'),
(35, '1', 'Garland, Texas', '4,000,000', '75', '2.80', '5.13', NULL, NULL, NULL, NULL, NULL, 0, 3, '2020-05-15 03:46:07', '2020-05-15 03:46:07', NULL),
(36, '1', 'Killeen, Texas', '2,100,000', '70', '7.22', '6.64', NULL, NULL, NULL, NULL, NULL, 0, 3, '2020-05-15 03:47:03', '2020-05-15 03:47:03', NULL),
(37, '1', 'Oklahoma, Oklahoma', '12,000,000', '75', '4.30', '5.91', NULL, NULL, NULL, NULL, '1', 0, 3, '2020-05-15 03:47:43', '2020-05-20 13:53:10', NULL),
(38, '7', 'McKinney, Texas', '8,042,991', '65', '1.84', '5.21', NULL, NULL, NULL, NULL, '1', 0, 3, '2020-05-15 03:48:38', '2020-05-15 03:48:38', NULL),
(39, '7', 'Irving, Texas', '5,000,000', '65', '2.86', '5.33', NULL, NULL, NULL, NULL, '1', 0, 3, '2020-05-15 03:49:28', '2020-05-15 03:49:28', NULL),
(40, '7', 'Grand Prairie, Texas', '9,511,241', '65', '1.65', '5.14', NULL, NULL, NULL, NULL, '1', 0, 3, '2020-05-15 03:50:08', '2020-05-15 03:50:08', NULL),
(41, '7', 'McKinney, Texas', '6,278,359', '65', '3.20', '5.68', NULL, NULL, NULL, NULL, '1', 0, 3, '2020-05-15 03:50:57', '2020-05-15 03:50:57', NULL),
(42, '1', 'Dallas, Texas', '2,600,000', '80', '4.71', '6.01', NULL, NULL, NULL, NULL, '1', 0, 3, '2020-05-15 03:51:32', '2020-05-15 03:51:32', NULL),
(43, '7', 'McAllen, Texas', '3,800,000', '65', '4.68', '6.73', NULL, NULL, NULL, NULL, '1', 0, 3, '2020-05-15 03:52:20', '2020-05-15 03:52:20', NULL),
(44, '7', 'Houston, Texas', '3,075,000', '65', '5.78', '7.29', NULL, NULL, NULL, NULL, '1', 0, 3, '2020-05-15 03:53:06', '2020-05-15 03:53:06', NULL),
(45, '1', 'Fort Worth, Texas', '3,840,000', '80', '7.20', '6.63', NULL, NULL, NULL, NULL, '1', 0, 3, '2020-05-15 03:54:01', '2020-05-21 13:07:02', NULL),
(46, '5', 'Paris, Texas', '3,900,000', '75', '13.01', '7.68', NULL, NULL, NULL, NULL, '1', 0, 3, '2020-05-15 03:54:46', '2020-05-21 13:18:20', NULL),
(47, '1', 'Paris, Texas', '2,390,000', '75', '5.30', '5.75', NULL, NULL, NULL, NULL, '1', 1, 3, '2020-05-15 03:55:23', '2020-05-22 02:47:31', NULL),
(48, '1', 'Fort Worth, Texas', '2,750,000', '80', '3.74', '5.36', NULL, NULL, NULL, NULL, '1', 0, 3, '2020-05-15 03:55:53', '2020-05-15 03:55:53', NULL),
(49, '1', 'Fort Worth, Texas', '1,500,000', '70', '6.81', '6.55', NULL, NULL, NULL, NULL, '1', 0, 3, '2020-05-15 03:56:36', '2020-05-21 11:54:35', NULL),
(50, '1', 'San Angelo, Texas', '2,450,000', '75', '12.91', '7.31', NULL, NULL, NULL, NULL, '1', 0, 1, '2020-05-15 03:57:13', '2020-05-20 02:20:26', NULL),
(51, '1', 'Lufkin, Texas', '4,700,000', '75', '10.07', '7.35', NULL, NULL, NULL, NULL, '1', 0, 2, '2020-05-15 03:58:41', '2020-05-20 02:06:33', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cardlog`
--

CREATE TABLE `cardlog` (
  `int` int(11) NOT NULL,
  `cardid` int(11) DEFAULT NULL,
  `action` varchar(10) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_11_26_013919_create_orders_table', 1),
(5, '2019_11_26_063552_create_pickers_table', 1),
(6, '2019_12_09_222330_create_warehouses_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `site_setting`
--

CREATE TABLE `site_setting` (
  `id` int(11) NOT NULL,
  `logo_url` varchar(200) DEFAULT NULL,
  `site_name` varchar(500) DEFAULT NULL,
  `site_domain` varchar(500) DEFAULT NULL,
  `site_email` varchar(500) DEFAULT NULL,
  `site_address1` varchar(500) DEFAULT NULL,
  `site_address2` varchar(500) DEFAULT NULL,
  `site_address3` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `site_setting`
--

INSERT INTO `site_setting` (`id`, `logo_url`, `site_name`, `site_domain`, `site_email`, `site_address1`, `site_address2`, `site_address3`) VALUES
(1, 'OC4EB5YYSAk6GDzFEyk3wj8FRJrLmm7RaEAoieRi.png', 'Terrydale Live', 'terrydale.com', 'terrydale@gmail.com', '+1 240 5168907', '28-12 41* Avenue', 'Long Island City, NY');

-- --------------------------------------------------------

--
-- Table structure for table `social_facebook_accounts`
--

CREATE TABLE `social_facebook_accounts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `provider_user_id` text NOT NULL,
  `provider` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(20) NOT NULL,
  `name` varchar(300) DEFAULT NULL,
  `email` varchar(300) DEFAULT NULL,
  `password` varchar(300) DEFAULT NULL,
  `photo` text,
  `phone_num` varchar(200) DEFAULT NULL,
  `member` int(1) DEFAULT '0',
  `location` text,
  `permission` int(1) DEFAULT '0',
  `remember_token` varchar(300) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `photo`, `phone_num`, `member`, `location`, `permission`, `remember_token`, `created_at`, `updated_at`) VALUES
(12, 'maxim', 'maxim@gmail.com', '$2y$10$dikMfFdB8f7pzX2STREZzevGkRKraT6fJU4fX7WUoPqL8eYwilwD6', NULL, '+1 240 516 8908', 1, 'united state, texas', 1, 'tyKcO87KwIa3HfHdFMXYDYl8ApysoVePODRgb9ZlfHpKSvcZAn0lXRtvvIna', '2020-04-03 01:33:10', '2020-04-24 01:16:07'),
(17, 'Brian Gramlich', 'bg@terrydalecapital.com', '$2y$10$who69D6RTlAWl0EPGySeUu9Whev77qDUmSXWbpwyCb06/254012UW', NULL, NULL, 0, NULL, 1, 'LwPjdp8iJE8d0iAwZ18H2VqhBDaIfzB3WnnzHqBTCrBo574RFsqVW6oUe2iM', '2020-04-15 01:41:38', '2020-05-21 09:55:04'),
(16, 'Gregory Gali', 'greg@ampddigital.com', '$2y$10$nvv.1kwy7uOxbVGeXBUst.kjRJ37N3rrKJ7K1e5hBAwrGPCwd0cMm', NULL, NULL, 1, NULL, 1, 'K62RyG7u3zXPGWZ5CWBvPy2ezHUWJiHv8leuQBvpCidBSXn1Vw3Qw1QjkVzA', '2020-04-15 00:26:09', '2020-04-15 00:26:16'),
(22, 'tester', 'tester@gmail.com', '$2y$10$n2AmIKcOhGoMSUs80992ZO1Q1BZ0iZQq2vfd8uDTcJr8/a0j0Bt56', NULL, NULL, 0, 'NewYrok', 0, NULL, '2020-05-21 13:21:14', '2020-05-21 13:21:14'),
(23, 'larap', 'larap@gmail.com', '$2y$10$aem9IBPCGlhZyQJHQ0ejR.Vb2Vx/P7gCu1/l4E6godgXxPgokqtam', NULL, NULL, 0, NULL, 1, 'hp66KXRhx408RKAiPyxSK6kYvPIrqeX81LqJNXixnwjlUc0gQNqq8pvjefwk', '2020-05-26 19:45:42', '2020-05-26 19:45:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assettype`
--
ALTER TABLE `assettype`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `card`
--
ALTER TABLE `card`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cardlog`
--
ALTER TABLE `cardlog`
  ADD PRIMARY KEY (`int`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assettype`
--
ALTER TABLE `assettype`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `card`
--
ALTER TABLE `card`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `cardlog`
--
ALTER TABLE `cardlog`
  MODIFY `int` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
