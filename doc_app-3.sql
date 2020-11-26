-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2020 at 06:26 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doc_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patient_id` bigint(20) UNSIGNED NOT NULL,
  `department_id` bigint(20) UNSIGNED NOT NULL,
  `doctor_id` bigint(20) UNSIGNED NOT NULL,
  `appointment_day` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shift` tinyint(1) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `patient_id`, `department_id`, `doctor_id`, `appointment_day`, `shift`, `status`, `created_at`, `updated_at`) VALUES
(3, 5, 1, 2, 'sunday', 1, 1, '2020-11-25 06:14:53', '2020-11-25 06:14:53'),
(4, 6, 2, 1, 'friday', 0, 1, '2020-11-25 06:16:00', '2020-11-25 06:16:00'),
(5, 7, 1, 2, 'sunday', 0, 1, '2020-11-25 06:16:51', '2020-11-25 06:16:51'),
(6, 8, 2, 1, 'saturday', 1, 1, '2020-11-25 09:48:21', '2020-11-25 09:48:21'),
(7, 9, 1, 2, 'thursday', 0, 1, '2020-11-25 09:49:50', '2020-11-25 09:49:50'),
(8, 10, 3, 5, 'monday', 0, 1, '2020-11-25 09:51:09', '2020-11-25 09:51:09'),
(9, 11, 3, 5, 'monday', 1, 1, '2020-11-25 10:16:49', '2020-11-25 10:16:49'),
(10, 12, 2, 1, 'friday', 1, 1, '2020-11-25 10:46:23', '2020-11-25 10:46:23');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`, `image`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Cardiology', 'uploads/1606279407.jpg', 'dfssjjkfdvdfvsdfghfg', 1, '2020-11-24 22:43:27', '2020-11-24 22:43:27'),
(2, 'Eye', 'uploads/1606279448.jpg', 'sfdajbvhdjvbjdflkvjd', 1, '2020-11-24 22:44:08', '2020-11-24 22:44:08'),
(3, 'Kidney', 'uploads/1606279475.png', 'sadfihdsouifhvniodf', 1, '2020-11-24 22:44:35', '2020-11-24 22:44:35'),
(4, 'XYZ', 'uploads/1606279513.jpg', 'fdgjhnjhnjhnjhnjhnjhnjhnjhnjhnjhnjhnjhnjhnjhnjhndt', 1, '2020-11-24 22:45:13', '2020-11-24 22:45:13');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `department_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `department_id`, `name`, `email`, `password`, `dob`, `gender`, `address`, `phone`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 'Rafiq Ul Karim', 'rafiqulkoeim@gmail.com', '$2y$10$jQGh047mRMNf/CiQf6zQk.tg.OYje/2W6LRfoexLv2NbywiEnCY5m', '2020-11-25', 'female', 'Foteabad', '01636524141', 'uploads/1606280865.jpg', 1, '2020-11-24 23:07:45', '2020-11-24 23:07:45'),
(2, 1, 'Avishek Barua', 'avishek@gmail.com', '$2y$10$DdCNlcBBv99hFHZs9uO3qewcRWxhdIfeUEFYNTaEM0Cydm9jCgz0W', '2020-11-26', 'male', 'nala para', '01636524141', 'uploads/1606281032.jpg', 1, '2020-11-24 23:10:32', '2020-11-24 23:10:32'),
(5, 3, 'Shosa Barua', 'shosa@gmail.com', '$2y$10$3YGE/6Da.e9U5REYfhBVpu81GljGRfv/MyGA0vBAjZHZEWi/K/Sxm', '2020-11-28', 'female', 'pathorghata', '0185465700', 'uploads/1606306311.png', 1, '2020-11-25 06:11:51', '2020-11-25 06:11:51');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(4, '2020_11_21_064248_create_departments_table', 1),
(5, '2020_11_22_114238_create_patients_table', 1),
(6, '2020_11_24_072132_create_admins_table', 1),
(7, '2020_11_24_195729_create_blogs_table', 1),
(8, '2020_11_23_075314_create_doctors_table', 2),
(9, '2020_11_22_114921_create_schedules_table', 3);

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
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `name`, `email`, `dob`, `address`, `phone`, `created_at`, `updated_at`) VALUES
(5, 'Fatin Noor', 'fatin@gmail.com', '2020-11-25', 'shadarghat', '01636524141', '2020-11-25 06:14:32', '2020-11-25 06:14:32'),
(6, 'Jasim Barua', 'jasim@gmail.com', '2020-11-26', 'Majirghat', '01727433484', '2020-11-25 06:15:42', '2020-11-25 06:15:42'),
(7, 'sunny mollick', 'sunnymollick@gmail.com', '2020-11-23', 'shadarghat', '01636524142', '2020-11-25 06:16:32', '2020-11-25 06:16:32'),
(8, 'abc', 'ab@gmail.com', '2020-11-10', 'Moonstar Goli', '01636524142', '2020-11-25 06:33:00', '2020-11-25 06:33:00'),
(9, 'sumon acharjee', 'sumon@gmail.com', '2020-11-25', 'nala para', '01727433484', '2020-11-25 09:49:19', '2020-11-25 09:49:19'),
(10, 'sakib hasan', 'sakib@gmail.com', '2020-11-04', 'Majirghat', '01636524141', '2020-11-25 09:50:43', '2020-11-25 09:50:43'),
(11, 'xyz', 'xy@gmail.com', '2020-11-25', 'Foteabad', '01636524142', '2020-11-25 10:16:05', '2020-11-25 10:16:05'),
(12, 'abc', 'abc@gmail.com', '2020-11-25', 'Moonstar Goli', '01727433484', '2020-11-25 10:45:58', '2020-11-25 10:45:58');

-- --------------------------------------------------------

--
-- Table structure for table `schedules`
--

CREATE TABLE `schedules` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `doctor_id` bigint(20) UNSIGNED NOT NULL,
  `department_id` bigint(20) UNSIGNED NOT NULL,
  `available_days` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `morning_shift` int(11) DEFAULT 0,
  `evening_shift` int(11) DEFAULT 0,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `schedules`
--

INSERT INTO `schedules` (`id`, `doctor_id`, `department_id`, `available_days`, `morning_shift`, `evening_shift`, `status`, `created_at`, `updated_at`) VALUES
(21, 1, 2, 'saturday', 10, 15, 1, '2020-11-25 06:08:06', '2020-11-25 06:08:06'),
(22, 1, 2, 'monday', 10, 15, 1, '2020-11-25 06:08:06', '2020-11-25 06:08:06'),
(23, 1, 2, 'wednesday', 10, 15, 1, '2020-11-25 06:08:06', '2020-11-25 06:08:06'),
(24, 1, 2, 'friday', 50, 50, 0, '2020-11-25 06:08:36', '2020-11-25 06:08:36'),
(25, 2, 1, 'sunday', 15, 25, 1, '2020-11-25 06:10:07', '2020-11-25 06:10:07'),
(26, 2, 1, 'thuesday', 15, 25, 1, '2020-11-25 06:10:07', '2020-11-25 06:10:07'),
(27, 2, 1, 'thursday', 15, 25, 1, '2020-11-25 06:10:07', '2020-11-25 06:10:07'),
(28, 5, 3, 'saturday', 35, 45, 1, '2020-11-25 06:12:42', '2020-11-25 06:12:42'),
(29, 5, 3, 'monday', 35, 45, 1, '2020-11-25 06:12:42', '2020-11-25 06:12:42'),
(30, 5, 3, 'thuesday', 35, 45, 1, '2020-11-25 06:12:43', '2020-11-25 06:12:43'),
(31, 2, 1, 'wednesday', 0, 60, 1, '2020-11-25 06:46:05', '2020-11-25 06:46:05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `appointments_patient_id_foreign` (`patient_id`),
  ADD KEY `appointments_doctor_id_foreign` (`doctor_id`),
  ADD KEY `appointments_department_id_foreign` (`department_id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `doctors_department_id_index` (`department_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedules`
--
ALTER TABLE `schedules`
  ADD PRIMARY KEY (`id`),
  ADD KEY `schedules_doctor_id_index` (`doctor_id`),
  ADD KEY `schedules_department_id_index` (`department_id`);

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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `schedules`
--
ALTER TABLE `schedules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointments`
--
ALTER TABLE `appointments`
  ADD CONSTRAINT `appointments_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `appointments_doctor_id_foreign` FOREIGN KEY (`doctor_id`) REFERENCES `doctors` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `appointments_patient_id_foreign` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `doctors`
--
ALTER TABLE `doctors`
  ADD CONSTRAINT `doctors_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `schedules`
--
ALTER TABLE `schedules`
  ADD CONSTRAINT `schedules_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `schedules_doctor_id_foreign` FOREIGN KEY (`doctor_id`) REFERENCES `doctors` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
