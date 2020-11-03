-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 03, 2020 at 10:27 AM
-- Server version: 8.0.22-0ubuntu0.20.04.2
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `handbagapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `handbags`
--

CREATE TABLE `handbags` (
  `id` int NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `price` int NOT NULL,
  `category` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `photo` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `rate` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Handbags added by the salesmen';

--
-- Dumping data for table `handbags`
--

INSERT INTO `handbags` (`id`, `name`, `price`, `category`, `photo`, `rate`) VALUES
(6, 'Bolsa coro masculina', 250, 'daily', '243650378d7c46d8df11ae8b2e22b91a.jpg', 4),
(7, 'bolsa de mão azul e marrom', 950, 'classy', '46d9ca9236850d32eaeb71b8b77011b9.jpg', 5),
(8, 'bolsa de mão e ombro', 400, 'sport', '45cb8ce0cda2d6b89ff9a650ef749f71.jpg', 4),
(9, 'bolsa de ombro branca', 100, 'classy', '62686ddd04222e32a131d683c58e5d75.jpg', 5),
(10, 'bolsa de ombro rosa pink', 450, 'social', '6ace6393b2454f0327f1ae0a620483cb.jpg', 5),
(11, 'bolsa de mão e ombro verde', 987, 'social', '3c88936dea8e237a73d86dda87307792.jpg', 5),
(12, 'bolsa de coro masculina', 450, 'daily', '4d1797e633cb88b0ff8b572fc130981a.png', 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='All the users of the system.';

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `token`) VALUES
(1, 'Renato Novaes', 'renato@email.com', '$2y$10$WjqSK3YQGsS3L4RpWFM4xeSGIgTaB4wcU7FAL3Pk1VUbmwTdUj00q', 'aa32fa6a673f4b078f9f8f310d043336'),
(2, 'Beatriz Novaes', 'beatriz@email.com', '$2y$10$r8sdvH8lfG8POdNkPW7veeaR2k/guzwzyvLG7RNNqXqRmqCpNgoY.', '88bb61a2dd5949db17a0763c4f94b4ec'),
(3, 'admin', 'admin@email.com', '$2y$10$FWPayvpKWrfTUAhCCycpmeQaJCKNX/vWvyCVthnh1RjxTGeh8jbP.', '4b1b6c2b444d539464097b0ad3495311');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `handbags`
--
ALTER TABLE `handbags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `handbags`
--
ALTER TABLE `handbags`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
