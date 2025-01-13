-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: db:3306
-- Generation Time: Jan 13, 2025 at 09:35 AM
-- Server version: 8.0.34
-- PHP Version: 8.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shabushabu2.0`
--

-- --------------------------------------------------------

--
-- Table structure for table `available_slots`
--

CREATE TABLE `available_slots` (
  `id` int NOT NULL,
  `date` date NOT NULL,
  `hours` time NOT NULL,
  `available` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `available_slots`
--

INSERT INTO `available_slots` (`id`, `date`, `hours`, `available`) VALUES
(9, '2025-01-13', '10:00:00', 0),
(10, '2025-01-13', '11:00:00', 1),
(11, '2025-01-13', '14:00:00', 1),
(12, '2025-01-13', '12:00:00', 1),
(13, '2025-01-13', '17:00:00', 1),
(14, '2025-01-14', '17:00:00', 0),
(15, '2025-01-14', '14:00:00', 1),
(16, '2025-01-14', '15:00:00', 1),
(17, '2025-01-15', '15:00:00', 0),
(18, '2025-01-15', '12:00:00', 1),
(19, '2025-01-15', '13:00:00', 1),
(20, '2025-01-15', '18:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` int NOT NULL,
  `location` varchar(255) NOT NULL,
  `menu_choice` varchar(255) DEFAULT NULL,
  `amount_people` bigint NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `firstname` varchar(40) NOT NULL,
  `lastname` varchar(60) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telnumber` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `location`, `menu_choice`, `amount_people`, `date`, `time`, `firstname`, `lastname`, `email`, `telnumber`) VALUES
(2, 'rotterdam ', 'lunch', 6, '2025-01-07', '21:28:39', 'steve', 'ipsum', 'l@gmail.com', 610808790),
(3, 'Rotterdam Alexandrium', 'Lunch', 2, '2025-01-08', '18:00:00', 'ruben', 'rosalia', '1100105@hr.nl', 610808790),
(4, 'Rotterdam Alexandrium', 'Lunch', 2, '2025-01-08', '18:04:00', 'ruben', 'steve', '1100105@hr.nl', 610808790),
(5, 'Rotterdam Alexandrium', 'Lunch', 5, '2025-01-08', '15:24:00', 'ruben', 'rosalia', '1100105@hr.nl', 610808790),
(6, 'Rotterdam Alexandrium', 'Diner', 4, '2025-01-08', '16:24:00', 'ruben', 'rosalia', 'ruben.rosalia2002@gmail.com', 610808790),
(7, 'Rotterdam Alexandrium', 'Diner', 4, '2025-01-08', '14:00:00', 'ruben', 'rosalia', '1100105@hr.nl', 610808790),
(8, 'alphen', 'Diner', 2, '2025-01-08', '15:00:00', 'ruben', 'rosalia', 'ruben.rosalia2002@gmail.com', 6),
(9, 'rotterdam-alexandrium', 'Diner', 2, '2025-01-08', '18:04:00', 'bbbbb', 'bbbbb', 'ruben.rosalia2002@gmail.com', 610808790),
(10, 'Rotterdam-centrum', 'Diner', 3, '2025-01-08', '14:00:00', 'ruben', 'rosalia', '1100105@hr.nl', 610808790),
(11, 'Alphen', 'Diner', 6, '2025-01-08', '18:00:00', 'ruben', 'rosalia', '1100105@hr.nl', 610808790),
(12, 'Ede', 'Diner', 3, '2025-01-08', '16:24:00', 'ccccccc', 'steve', '1100105@hr.nl', 610808790),
(13, 'Alphen', 'Diner', 5, '2025-01-08', '16:15:00', 'ruben', 'rosalia', '1111973@hr.nl', 111),
(14, 'Alphen', 'Lunch', 2, '2025-01-08', '19:00:00', '', '', 'ruben.rosalia2002@gmail.com', 1),
(15, 'Rotterdam-alexandrium', 'Lunch', 3, '2025-01-14', '17:00:00', 'ruben', 'rosalia', 'ruben.rosalia2002@gmail.com', 610808790),
(16, 'Rotterdam-centrum', 'Diner', 4, '2025-01-15', '15:00:00', 'Ruben', 'Rosalia', '1100105@hr.nl', 610777890),
(17, 'Alphen', 'Diner', 6, '2025-01-13', '10:00:00', 'ruben', 'rosalia', 'ruben.rosalia2002@gmail.com', 618887900),
(18, 'Alphen', 'Diner', 6, '2025-01-13', '10:00:00', 'ruben', 'rosalia', 'ruben.rosalia2002@gmail.com', 618887900);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `available_slots`
--
ALTER TABLE `available_slots`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
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
-- AUTO_INCREMENT for table `available_slots`
--
ALTER TABLE `available_slots`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
