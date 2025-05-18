-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2025 at 06:31 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `teja-group`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Real Estate', '2025-05-10 09:28:15', '2025-05-10 09:28:15'),
(2, 'HR Consultancy', '2025-05-10 09:28:15', '2025-05-10 09:28:15'),
(3, 'Loans', '2025-05-10 09:28:15', '2025-05-10 09:28:15');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `is_signup` tinyint(1) NOT NULL DEFAULT 0,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `location`, `file`, `message`, `is_signup`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Aravind', 'aravind@gmail.com', '9087654321', 'Bangalore', 'contacts/7gzfjcmasiSmjETmbPNPOD6NsKGFCmXJphTQEruf.png', 'Hello Teja Gropu of Companies', 1, 2, '2025-05-12 01:11:31', '2025-05-12 01:11:31'),
(2, 'sdfsdf', 'dsfsfsf@gmail.com', '0987654321', 'Bangalore', 'contacts/nA83hWsJbE3ULMrYhcwmEErC0c47U3QpP2igSVoI.png', 'saasd sadsad', 0, 1, '2025-05-12 04:17:00', '2025-05-12 04:17:00');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_05_09_171157_create_categories_table', 1),
(5, '2025_05_09_171210_create_products_table', 1),
(6, '2025_05_10_114523_create_contacts_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(12,2) NOT NULL,
  `discount` decimal(8,2) NOT NULL,
  `image` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `description`, `price`, `discount`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 'Luxury Apartment', 'Spacious 3BHK apartment in downtown.', 9500000.00, 5.00, 'realestate1.jpg', '2025-05-10 09:28:15', '2025-05-10 09:28:15'),
(2, 1, 'Beach Villa', 'Sea-facing 5BHK villa with private pool.', 18000000.00, 10.00, 'realestate2.jpg', '2025-05-10 09:28:15', '2025-05-10 09:28:15'),
(3, 1, 'Studio Flat', 'Compact and affordable studio flat.', 3500000.00, 8.00, 'realestate3.jpg', '2025-05-10 09:28:15', '2025-05-10 09:28:15'),
(4, 1, 'Farmhouse', 'Green farmhouse ideal for weekend getaways.', 7200000.00, 7.00, 'realestate4.jpg', '2025-05-10 09:28:15', '2025-05-10 09:28:15'),
(5, 1, 'Penthouse', 'Top-floor penthouse with skyline view.', 15500000.00, 12.00, 'realestate5.jpg', '2025-05-10 09:28:15', '2025-05-10 09:28:15'),
(6, 1, 'Suburban House', 'Family-friendly house in suburbs.', 4800000.00, 6.00, 'realestate6.jpg', '2025-05-10 09:28:15', '2025-05-10 09:28:15'),
(7, 1, 'Commercial Space', 'Office space in business district.', 12500000.00, 9.00, 'realestate7.jpg', '2025-05-10 09:28:15', '2025-05-10 09:28:15'),
(8, 1, 'Warehouse', 'Large warehouse with loading dock.', 8000000.00, 11.00, 'realestate8.jpg', '2025-05-10 09:28:15', '2025-05-10 09:28:15'),
(9, 1, 'Plot Land', 'Residential plot in developing area.', 2200000.00, 4.00, 'realestate9.jpg', '2025-05-10 09:28:15', '2025-05-10 09:28:15'),
(10, 1, 'Luxury Condo', 'Modern condo with smart amenities.', 10200000.00, 6.00, 'realestate10.jpg', '2025-05-10 09:28:15', '2025-05-10 09:28:15'),
(11, 2, 'Resume Building Service', 'Professional resume writing.', 1500.00, 5.00, 'hr1.jpg', '2025-05-10 09:28:15', '2025-05-10 09:28:15'),
(12, 2, 'Interview Coaching', '1-on-1 session with industry experts.', 2500.00, 10.00, 'hr2.jpg', '2025-05-10 09:28:15', '2025-05-10 09:28:15'),
(13, 2, 'LinkedIn Optimization', 'Boost your LinkedIn profile.', 1800.00, 8.00, 'hr3.jpg', '2025-05-10 09:28:15', '2025-05-10 09:28:15'),
(14, 2, 'Recruitment Package', 'End-to-end hiring support.', 12000.00, 15.00, 'hr4.jpg', '2025-05-10 09:28:15', '2025-05-10 09:28:15'),
(15, 2, 'Career Counseling', 'Get expert career guidance.', 2000.00, 5.00, 'hr5.jpg', '2025-05-10 09:28:15', '2025-05-10 09:28:15'),
(16, 2, 'Skill Assessment', 'Evaluate your current skill set.', 1000.00, 4.00, 'hr6.jpg', '2025-05-10 09:28:15', '2025-05-10 09:28:15'),
(17, 2, 'HR Compliance Kit', 'Templates and guidelines for HR policies.', 3200.00, 6.00, 'hr7.jpg', '2025-05-10 09:28:15', '2025-05-10 09:28:15'),
(18, 2, 'Employee Handbook Service', 'Custom employee handbooks.', 2800.00, 7.00, 'hr8.jpg', '2025-05-10 09:28:15', '2025-05-10 09:28:15'),
(19, 2, 'Psychometric Testing', 'Behavioral and personality tests.', 2200.00, 9.00, 'hr9.jpg', '2025-05-10 09:28:15', '2025-05-10 09:28:15'),
(20, 2, 'Freelancer Connect', 'HR support for freelancers.', 3000.00, 5.00, 'hr10.jpg', '2025-05-10 09:28:15', '2025-05-10 09:28:15'),
(21, 3, 'Home Loan', 'Low-interest housing loan.', 1000000.00, 2.00, 'loan1.jpg', '2025-05-10 09:28:16', '2025-05-10 09:28:16'),
(22, 3, 'Education Loan', 'Loan for higher studies.', 500000.00, 3.00, 'loan2.jpg', '2025-05-10 09:28:16', '2025-05-10 09:28:16'),
(23, 3, 'Personal Loan', 'Instant approval with low documents.', 250000.00, 4.00, 'loan3.jpg', '2025-05-10 09:28:16', '2025-05-10 09:28:16'),
(24, 3, 'Car Loan', 'Finance for new or used cars.', 600000.00, 5.00, 'loan4.jpg', '2025-05-10 09:28:16', '2025-05-10 09:28:16'),
(25, 3, 'Business Loan', 'Flexible loans for SMEs.', 1200000.00, 6.00, 'loan5.jpg', '2025-05-10 09:28:16', '2025-05-10 09:28:16'),
(26, 3, 'Gold Loan', 'Loan against gold with minimal interest.', 400000.00, 3.00, 'loan6.jpg', '2025-05-10 09:28:16', '2025-05-10 09:28:16'),
(27, 3, 'Medical Loan', 'For emergency medical needs.', 300000.00, 4.00, 'loan7.jpg', '2025-05-10 09:28:16', '2025-05-10 09:28:16'),
(28, 3, 'Travel Loan', 'Finance your dream vacations.', 350000.00, 6.00, 'loan8.jpg', '2025-05-10 09:28:16', '2025-05-10 09:28:16'),
(29, 3, 'Debt Consolidation Loan', 'Combine multiple debts into one.', 800000.00, 7.00, 'loan9.jpg', '2025-05-10 09:28:16', '2025-05-10 09:28:16'),
(30, 3, 'Student Loan', 'Student-friendly repayment plans.', 450000.00, 2.00, 'loan10.jpg', '2025-05-10 09:28:16', '2025-05-10 09:28:16');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('tfzNQpzzINsF5qpMDCL1higMWK4KeFRnFzJhYcEq', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:138.0) Gecko/20100101 Firefox/138.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUTFQc3pWZkhRRVdUWEM4Z0VERjVUWGVTVjVVOVhJSGZiSDdnTkJucSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fX0=', 1747043220);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('user','admin') NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$12$gRLA.3ppaVVWMnZKLvkW8.CG6b5p.GblNF0pNI.AyYw8OXAnxZ69y', 'admin', NULL, '2025-05-10 09:28:15', '2025-05-10 09:28:15'),
(2, 'Teja', 'teja@gmail.com', NULL, '$2y$12$QsS7uCi.Tr15nm6efvHeg.wtd6VflP0fIbK8UMubbqS2ZadnlDer.', 'admin', NULL, '2025-05-10 09:28:15', '2025-05-10 09:28:15'),
(3, 'Jerry', 'jerry@gmail.com', NULL, '$2y$12$6QCC/nQ40mJWdC2vKqjH7eSqfgbxqZfjHwhAz4rcx7B1OyWXSh3MG', 'user', NULL, '2025-05-10 09:28:15', '2025-05-10 09:28:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contacts_user_id_foreign` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `contacts`
--
ALTER TABLE `contacts`
  ADD CONSTRAINT `contacts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
