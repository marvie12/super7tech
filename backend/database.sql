-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.1.72-community - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for super7tech
CREATE DATABASE IF NOT EXISTS `super7tech` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `super7tech`;

-- Dumping structure for table super7tech.employee
CREATE TABLE IF NOT EXISTS `employee` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `position` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;

-- Dumping structure for table super7tech.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_username_unique` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table super7tech.users: 3 rows
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `username`, `role`, `password`, `created_at`, `updated_at`) VALUES
	(1, 'manager 1', 'manager01', 'manager', '$2y$10$0KRGnUni8dMrowc0HDGOTeSB0uKYlsr6Brl/VvLDUog3rVfk3XPn2', '2023-12-22 23:47:13', '2023-12-22 23:47:13'),
	(2, 'developer 1', 'dev01', 'web_developer', '$2y$10$0KRGnUni8dMrowc0HDGOTeSB0uKYlsr6Brl/VvLDUog3rVfk3XPn2', '2023-12-22 23:47:13', '2023-12-22 23:47:13'),
	(3, 'designer 1', 'design01', 'web_designer', '$2y$10$0KRGnUni8dMrowc0HDGOTeSB0uKYlsr6Brl/VvLDUog3rVfk3XPn2', '2023-12-22 23:47:13', '2023-12-22 23:47:13');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
