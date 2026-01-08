-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 08, 2026 at 01:25 PM
-- Server version: 11.8.3-MariaDB-log
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u266813201_globalreport`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `full_name` varchar(100) DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT 1,
  `last_login` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password_hash`, `email`, `full_name`, `is_active`, `last_login`, `created_at`, `updated_at`) VALUES
(2, 'globalrideadmin', '$2y$10$KYzGeYfOai65n1bvf1mwwO8mkvmAFfe/Nic61V794XeyTAaE6P/tq', 'admin@globalridereport.com', 'Global Ride Admin', 1, '2026-01-05 11:28:59', '2025-11-22 20:25:17', '2026-01-05 11:28:59');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `message`, `created_at`) VALUES
(3, 'Zampa', 'zampaloius@gmail.com', 'Shjjs', '2025-12-12 18:06:21');

-- --------------------------------------------------------

--
-- Table structure for table `exchange_rates`
--

CREATE TABLE `exchange_rates` (
  `id` int(11) NOT NULL,
  `currency_code` varchar(10) NOT NULL,
  `rate` decimal(10,4) NOT NULL,
  `last_updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `exchange_rates`
--

INSERT INTO `exchange_rates` (`id`, `currency_code`, `rate`, `last_updated`) VALUES
(1, 'USD', 1.0000, '2025-11-21 13:15:49'),
(2, 'EUR', 0.8500, '2025-11-21 13:15:49'),
(3, 'GBP', 0.7300, '2025-11-21 13:15:49'),
(4, 'CAD', 1.2500, '2025-11-21 13:15:49'),
(5, 'AUD', 1.3500, '2025-11-21 13:15:49'),
(6, 'JPY', 110.0000, '2025-11-21 13:15:49');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `vin_hin` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `zip_code` varchar(20) NOT NULL,
  `country` varchar(100) NOT NULL,
  `package_type` enum('car','boat') NOT NULL,
  `package_name` varchar(50) NOT NULL,
  `base_amount` decimal(10,2) NOT NULL,
  `final_amount` decimal(10,2) NOT NULL,
  `currency` varchar(10) NOT NULL DEFAULT 'USD',
  `exchange_rate` decimal(10,4) DEFAULT 1.0000,
  `payment_method` enum('card','crypto') NOT NULL,
  `payment_status` enum('pending','completed','failed') DEFAULT 'pending',
  `stripe_payment_intent_id` varchar(255) DEFAULT NULL,
  `crypto_payment_id` varchar(255) DEFAULT NULL,
  `crypto_order_id` varchar(255) DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `admin_status` enum('pending','processing','completed','refunded','cancelled') DEFAULT 'pending',
  `admin_notes` text DEFAULT NULL,
  `refund_amount` decimal(10,2) DEFAULT 0.00,
  `refund_reason` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `vin_hin`, `phone`, `zip_code`, `country`, `package_type`, `package_name`, `base_amount`, `final_amount`, `currency`, `exchange_rate`, `payment_method`, `payment_status`, `stripe_payment_intent_id`, `crypto_payment_id`, `crypto_order_id`, `ip_address`, `created_at`, `updated_at`, `admin_status`, `admin_notes`, `refund_amount`, `refund_reason`) VALUES
(28, 'Hasnain', 'binilyaszai@gmail.com', '423423', '4234234245', '21312', 'Bahrain', '', 'Basic', 70.00, 63.00, 'USD', 1.0000, 'crypto', 'pending', NULL, '4380530224', 'GRR_1766049796_6943c804289d9', '39.34.135.49', '2025-12-18 09:23:16', '2025-12-18 09:23:16', 'pending', NULL, 0.00, NULL),
(29, 'Hasnain', 'report@globalridereport.com', '423423', '4242346465', '21312', 'Austria', 'car', 'Standard', 70.00, 70.00, 'USD', 1.0000, 'card', 'pending', 'pi_3SfdaYRPdrGQ4KtU1AEu0oNU', NULL, NULL, '39.34.131.213', '2025-12-18 09:28:06', '2025-12-18 09:33:19', 'pending', NULL, 0.00, NULL),
(30, 'Hasnain', 'report@globalridereport.com', '423423', '4242346465', '21312', 'Albania', 'car', 'Basic', 50.00, 50.00, 'USD', 1.0000, 'card', 'completed', 'pi_3SfddTI5ZgmVWT4113gmjeEq', NULL, NULL, '39.34.131.213', '2025-12-18 09:36:19', '2025-12-18 09:36:53', 'processing', NULL, 0.00, NULL),
(31, 'hasnain', 'support@globalridereport.com', '122444', '4234234245', '21312', 'Belarus', 'boat', 'Platinum', 200.00, 180.00, 'USD', 1.0000, 'crypto', 'pending', NULL, '4894744853', 'GRR_1766050681_6943cb79ea3a5', '39.34.131.213', '2025-12-18 09:38:01', '2025-12-18 09:38:02', 'pending', NULL, 0.00, NULL),
(32, 'Rohan', 'haakim@gmail.com', 'Abcd345', '4242423', '21312', 'Bahamas', 'boat', 'Premium', 150.00, 150.00, 'USD', 1.0000, 'card', 'pending', 'pi_3SffBpI5ZgmVWT410Hxl5NvJ', NULL, NULL, '39.34.131.213', '2025-12-18 11:15:53', '2025-12-18 11:15:54', 'pending', NULL, 0.00, NULL),
(33, 'Kashif', 'khs@gmail.com', '122444', '42353464576', '24324', 'Algeria', 'car', 'Standard', 70.00, 63.00, 'USD', 1.0000, 'crypto', 'pending', NULL, '5236895957', 'GRR_1766056622_6943e2ae0ace2', '39.34.131.213', '2025-12-18 11:17:02', '2025-12-18 11:17:02', 'pending', NULL, 0.00, NULL),
(34, 'Hasnain', 'hakh@gmail.com', '122444', '42353464576', '24324', 'Andorra', 'car', 'Basic', 50.00, 50.00, 'USD', 1.0000, 'card', 'completed', 'pi_3SffDvI5ZgmVWT4118AIRSFY', NULL, NULL, '39.34.131.213', '2025-12-18 11:18:03', '2025-12-18 13:23:23', 'completed', '', 0.00, NULL),
(35, 'Zampa', 'zampaloius@gmail.com', 'Xxxsa', '57637737', 'Xddiid', 'Australia', 'car', 'Basic', 50.00, 50.00, 'AUD', 1.3500, 'card', 'pending', 'pi_3Sg0KTRPdrGQ4KtU15PhBVPd', NULL, NULL, '209.101.24.185', '2025-12-19 08:47:25', '2025-12-19 09:51:47', 'processing', 'Ok', 0.00, NULL),
(36, 'Zampa', 'zampaloius@gmail.com', 'WVGAF15N6CW528040', '646633494', '682002', 'Bangladesh', 'car', 'Basic', 50.00, 50.00, 'USD', 1.0000, 'card', 'pending', 'pi_3SgmK3RPdrGQ4KtU0WDq4wZX', NULL, NULL, '202.47.48.122', '2025-12-21 13:04:59', '2025-12-21 13:05:00', 'pending', NULL, 0.00, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `identifier` varchar(100) NOT NULL,
  `identifier_type` enum('VIN','HIN','PLATE','REGISTRATION') DEFAULT 'VIN',
  `page_type` enum('vehicle','boat') DEFAULT 'vehicle',
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `referral_source` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`id`, `email`, `identifier`, `identifier_type`, `page_type`, `ip_address`, `user_agent`, `referral_source`, `created_at`, `updated_at`) VALUES
(1, 'support@globalridereport.com', '423423', 'REGISTRATION', 'vehicle', '39.34.131.213', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36', 'https://globalridereport.com/index.php', '2025-12-17 17:55:10', '2025-12-18 09:37:26'),
(2, 'support@globalridereport.com', '4252452547', 'HIN', 'boat', '39.34.134.162', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36', 'https://globalridereport.com/boat-home.php', '2025-12-17 18:21:34', '2025-12-18 08:59:21'),
(3, 'hasnain979198@gmail.com', '1HGCM82633A004352', 'REGISTRATION', 'vehicle', '39.34.138.158', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36', 'https://globalridereport.com/?i=1', '2025-12-17 18:23:23', '2025-12-17 18:23:23'),
(4, 'hasnain@gmail.com', '424252546346', 'HIN', 'boat', '39.34.134.162', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36', 'https://globalridereport.com/boat-home.php', '2025-12-18 09:00:03', '2025-12-18 09:00:03'),
(5, 'report@globalridereport.com', '92312941245', 'HIN', 'boat', '39.34.135.49', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36', 'https://globalridereport.com/boat-home.php', '2025-12-18 09:04:38', '2025-12-18 09:04:38'),
(6, 'binilyaszai@gmail.com', '423423', 'REGISTRATION', 'vehicle', '39.34.135.49', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36', 'https://globalridereport.com/index.php', '2025-12-18 09:05:14', '2025-12-18 09:05:14'),
(7, 'rohan@gmail.com', '122227777', 'REGISTRATION', 'vehicle', '39.34.131.213', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36', 'https://globalridereport.com/index.php', '2025-12-18 11:14:51', '2025-12-18 11:14:51'),
(8, 'haakim@gmail.com', 'Abcd345', 'HIN', 'boat', '39.34.131.213', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36', 'https://globalridereport.com/boat-home.php', '2025-12-18 11:15:23', '2025-12-18 11:15:25'),
(9, 'zampaloius@gmail.com', 'Qww', 'REGISTRATION', 'vehicle', '209.101.24.185', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36', 'https://globalridereport.com/', '2025-12-19 08:45:43', '2025-12-19 08:46:39'),
(10, 'vmghjdk@gmail.com', '2134457674543243', 'HIN', 'boat', '72.255.9.185', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36', 'https://globalridereport.com/boat-home.php', '2025-12-19 12:55:12', '2025-12-19 12:55:12'),
(11, 'admin@gmail.com', 'WVGAF15N6CW528040', 'REGISTRATION', 'vehicle', '202.47.48.122', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36', 'https://globalridereport.com/', '2025-12-20 09:13:14', '2025-12-20 09:13:14'),
(12, 'zampaloius@gmail.com', 'WVGAF15N6CW528040', 'REGISTRATION', 'vehicle', '202.47.48.122', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Mobile Safari/537.36', 'https://globalridereport.com/', '2025-12-21 13:02:51', '2025-12-21 13:03:03'),
(13, 'g@gmail.com', 'okoko,', 'REGISTRATION', 'vehicle', '202.47.48.122', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36', 'https://www.globalridereport.com/', '2026-01-06 07:02:54', '2026-01-06 07:02:54'),
(14, 'gmail.com', 'hdjkkf', 'REGISTRATION', 'vehicle', '202.47.44.43', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36', 'https://www.globalridereport.com/', '2026-01-07 09:14:33', '2026-01-07 09:14:33');

-- --------------------------------------------------------

--
-- Table structure for table `visitor_sessions`
--

CREATE TABLE `visitor_sessions` (
  `session_id` varchar(128) NOT NULL,
  `visitor_id` int(11) DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `landing_page` varchar(255) DEFAULT NULL,
  `exit_page` varchar(255) DEFAULT NULL,
  `session_start` timestamp NULL DEFAULT current_timestamp(),
  `session_end` timestamp NULL DEFAULT NULL,
  `page_views` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `visitor_sessions`
--

INSERT INTO `visitor_sessions` (`session_id`, `visitor_id`, `ip_address`, `user_agent`, `landing_page`, `exit_page`, `session_start`, `session_end`, `page_views`) VALUES
('6qo1v4280hdc3iu5mdbs9hpimd', 11, '202.47.48.122', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36', 'https://globalridereport.com/index.php', NULL, '2025-12-20 09:13:14', NULL, 1),
('8i1m25jjk084d2nt6cimu3r1l3', 10, '72.255.9.185', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36', 'https://globalridereport.com/boat-home.php', NULL, '2025-12-19 12:55:12', NULL, 1),
('ccohuoglj1tktp1cqa9b6sta44', 14, '202.47.44.43', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36', 'https://www.globalridereport.com/index.php', NULL, '2026-01-07 09:14:33', NULL, 1),
('cqp812f4dp0lqe66957v4lk6ib', 2, '39.34.134.162', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36', 'https://globalridereport.com/boat-home.php', 'https://globalridereport.com/boat-home.php', '2025-12-18 08:59:21', '2025-12-18 11:15:25', 8),
('jk527kht8l8mntrm7lahhsbn0d', 12, '202.47.48.122', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Mobile Safari/537.36', 'https://globalridereport.com/index.php', 'https://globalridereport.com/index.php', '2025-12-21 13:02:51', '2025-12-21 13:03:03', 2),
('nu7820cjrqsdqucqihlt6q33d6', 3, '39.34.138.158', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36', 'https://globalridereport.com/index.php', NULL, '2025-12-17 18:23:23', NULL, 1),
('p2lvgvuassvrp1tiajft4qob51', 1, '39.34.138.158', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36', 'https://globalridereport.com/index.php', 'https://globalridereport.com/boat-home.php', '2025-12-17 17:55:10', '2025-12-17 18:22:31', 5),
('t5h4mlr4umdq7uv9jfmdug8rjc', 9, '209.101.24.185', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36', 'https://globalridereport.com/index.php', 'https://globalridereport.com/index.php', '2025-12-19 08:45:43', '2025-12-19 08:46:39', 2),
('v95nu12tupl47u5vem74j3q99l', 13, '202.47.48.122', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36', 'https://www.globalridereport.com/index.php', NULL, '2026-01-06 07:02:54', NULL, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exchange_rates`
--
ALTER TABLE `exchange_rates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_email` (`email`),
  ADD KEY `idx_identifier` (`identifier`),
  ADD KEY `idx_created_at` (`created_at`),
  ADD KEY `idx_page_type` (`page_type`);

--
-- Indexes for table `visitor_sessions`
--
ALTER TABLE `visitor_sessions`
  ADD PRIMARY KEY (`session_id`),
  ADD KEY `idx_session_start` (`session_start`),
  ADD KEY `idx_visitor_id` (`visitor_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `exchange_rates`
--
ALTER TABLE `exchange_rates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `visitor_sessions`
--
ALTER TABLE `visitor_sessions`
  ADD CONSTRAINT `visitor_sessions_ibfk_1` FOREIGN KEY (`visitor_id`) REFERENCES `visitors` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
