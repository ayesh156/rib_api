-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.29 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.11.0.7065
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table rib_app.customers
CREATE TABLE IF NOT EXISTS `customers` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_number` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_number_2` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `nic` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cities_id` bigint unsigned DEFAULT NULL,
  `status_id` bigint unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_line_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_line_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `due_amount` decimal(10,2) DEFAULT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `city_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_id` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `branch_id` int DEFAULT NULL,
  `reason` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `latitude` decimal(10,7) DEFAULT NULL,
  `longitude` decimal(10,7) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=83 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table rib_app.customers: ~9 rows (approximately)
INSERT INTO `customers` (`id`, `customer_name`, `contact_number`, `contact_number_2`, `gender`, `dob`, `nic`, `cities_id`, `status_id`, `created_at`, `updated_at`, `email`, `password`, `address_line_1`, `address_line_2`, `due_amount`, `user_id`, `city_name`, `customer_id`, `branch_id`, `reason`, `latitude`, `longitude`) VALUES
	(1, 'Admin', '0765555555', NULL, NULL, NULL, '111111', NULL, 1, '2025-03-10 21:11:45', '2025-05-26 21:47:07', 'admin@gmail.com', '$2y$12$3zdQcRWN4MOF4pzKZEbQr.E29Oc9BoXCy.0/z2STA8Gn4GC5GXccG', NULL, NULL, NULL, 1, NULL, NULL, NULL, 'aaa', NULL, NULL),
	(68, 'cus1', '0765443423', NULL, NULL, NULL, '565678', 1, 2, '2025-03-10 03:18:19', '2025-05-26 21:49:02', 'abc@gmail.com', NULL, 'abcde', NULL, NULL, 1, 'abcc', '1', 4, 'BBBBBBB', NULL, NULL),
	(69, 'cus2', '0768888764', NULL, NULL, NULL, NULL, 1, 2, '2025-03-10 03:19:52', '2025-05-26 21:40:57', 'abc@gmail.com', NULL, 'abcde', NULL, NULL, 1, 'abcde', '2', 3, 'ABC', NULL, NULL),
	(72, 'abc', '0765555543', '1234567890', NULL, NULL, '463657', 1, 1, '2025-03-10 21:27:30', '2025-05-26 21:44:19', 'abc@gmail.com', NULL, 'qqqq', NULL, 0.00, 1, 'abc', '3', 4, 'bbbb', 6.5200038, 79.9931873),
	(73, 'abcde', '0765555554', NULL, NULL, NULL, '4576r7', 1, 1, '2025-03-10 21:31:25', '2025-05-01 22:08:12', 'abccc@gmail.com', NULL, 'qqqq', NULL, 0.00, 1, 'abcddd', '4', 4, NULL, NULL, NULL),
	(74, 'testtt', '0876543425', NULL, NULL, NULL, '56475', 1, 1, '2025-03-10 21:32:31', '2025-05-01 22:08:04', 'test@gmail.com', NULL, 'aaa', NULL, NULL, 1, 'aaa', '5', 4, NULL, NULL, NULL),
	(80, 'ABCDE', '0785566748', '0785566743', 'Female', '2025-04-06', '3432525', 1, 1, '2025-05-01 21:37:22', '2025-05-26 21:44:21', 'abcjgjg@gmail.com', NULL, 'afs', NULL, NULL, 1, 'fsf', '6', 4, 'aaa', NULL, NULL),
	(81, 'Default Customer', '123456', NULL, NULL, NULL, NULL, NULL, NULL, '2025-07-04 00:43:07', '2025-07-04 00:43:07', 'admin2@gmail.com', '$2y$12$3zdQcRWN4MOF4pzKZEbQr.E29Oc9BoXCy.0/z2STA8Gn4GC5GXccG', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(82, 'superadmin', '0785566748', '0785566742', 'Female', '2025-04-06', '3432525', 1, 1, '2025-07-04 01:51:26', '2025-07-04 03:07:14', 'superadmin@gmail.com', '$2y$12$wwrM33JNyRpRK0seTsUblOK2KRK6bItFlEknt5bbmOfd0cHtjWG/a', 'qqqq', 'address 1', 23.00, 1, 'fswer', '1', 4, 'bscfs', 5.9496000, 80.5469000);

-- Dumping structure for table rib_app.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table rib_app.failed_jobs: ~0 rows (approximately)

-- Dumping structure for table rib_app.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table rib_app.migrations: ~0 rows (approximately)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(5, '2025_07_04_054315_create_customers_table', 2);

-- Dumping structure for table rib_app.password_reset_tokens
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table rib_app.password_reset_tokens: ~0 rows (approximately)

-- Dumping structure for table rib_app.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table rib_app.personal_access_tokens: ~0 rows (approximately)

-- Dumping structure for table rib_app.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table rib_app.users: ~0 rows (approximately)

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
