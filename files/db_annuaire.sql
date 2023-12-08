-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 08, 2023 at 07:59 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `annuaire`
--

-- --------------------------------------------------------

--
-- Table structure for table `phone_book`
--

DROP TABLE IF EXISTS `phone_book`;
CREATE TABLE IF NOT EXISTS `phone_book` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `firstname` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `lastname` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `phone_number` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `address` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `city` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `postal_code` varchar(9) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `country` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `creation_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `phone_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `phone_book`
--

INSERT INTO `phone_book` (`id`, `user_id`, `firstname`, `lastname`, `phone_number`, `address`, `city`, `postal_code`, `country`, `creation_date`) VALUES
(5, 12, 'Lorem', 'Ipsum', '047103963', 'rue des chacals 25', 'Sein pas', '666', 'Co nez pas', '2023-12-08 16:57:16'),
(6, 12, 'Lorem', 'Ipsum', '047103963', 'rue des chacals 25', 'Sein pas', '666', 'France', '2023-12-08 16:57:27'),
(7, 12, 'Lorem', 'Ipsum', '047103963', 'rue des chacals 25', 'Sein pas', '666', 'France', '2023-12-08 16:57:43'),
(8, 12, 'Lorem', 'Ipsum', '047103963', 'rue des chacals 25', 'Sein pas', '666', 'France', '2023-12-08 16:57:48'),
(9, 12, 'Lorem', 'Ipsum', '047103963', 'rue des chacals 25', 'Sein pas', '666', 'France', '2023-12-08 16:57:53'),
(10, 12, 'Lorem', 'Ipsum', '047103963', 'rue des chacals 25', 'Sein pas', '666', 'France', '2023-12-08 16:57:57'),
(11, 12, 'Lorem', 'Ipsum', '047103963', 'rue des chacals 25', 'Sein pas', '666', 'France', '2023-12-08 16:58:01'),
(12, 12, 'Lorem', 'Ipsum', '047103963', 'rue des chacals 25', 'Sein pas', '666', 'France', '2023-12-08 16:58:04'),
(13, 12, 'Lorem', 'Ipsum', '047103963', 'rue des chacals 25', 'Sein pas', '666', 'France', '2023-12-08 16:58:20'),
(14, 12, 'Lorem', 'Ipsum', '047103963', 'rue des chacals 25', 'Sein pas', '666', 'France', '2023-12-08 16:58:25');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `lastname` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` varchar(50) NOT NULL,
  `secret` varchar(255) NOT NULL,
  `login_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `creation_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `username`, `password`, `secret`, `login_date`, `creation_date`) VALUES
(12, 'admin5', 'admin5', 'admin5', 'admin', 'Quel est le nom de votre premier animal de compagnie ?admin', '2023-12-07 22:51:12', '2023-12-07 22:51:12');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `phone_book`
--
ALTER TABLE `phone_book`
  ADD CONSTRAINT `phone_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
