-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2017 at 03:27 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_fifa`
--
CREATE DATABASE IF NOT EXISTS `project_fifa` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `project_fifa`;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_finals`
--

CREATE TABLE `tbl_finals` (
  `id` int(10) NOT NULL,
  `team_id` int(10) DEFAULT NULL,
  `position` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_finals`
--

INSERT INTO `tbl_finals` (`id`, `team_id`, `position`) VALUES
(1, 1, 'A1'),
(2, 1, 'A2'),
(3, 3, 'B1'),
(4, 1, 'A3'),
(5, 2, 'A4'),
(6, 9, 'A5'),
(7, 7, 'A6'),
(8, 14, 'A7'),
(9, 16, 'A8'),
(10, 4, 'B2'),
(11, 3, 'B3'),
(12, 9, 'B4'),
(13, 3, 'C1'),
(14, 6, 'C2'),
(15, 9, 'D1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_matches`
--

CREATE TABLE `tbl_matches` (
  `ID` int(10) UNSIGNED NOT NULL,
  `team_id_a` int(10) UNSIGNED NOT NULL,
  `team_id_b` int(10) UNSIGNED NOT NULL,
  `score_team_a` int(10) UNSIGNED DEFAULT NULL,
  `score_team_b` int(10) UNSIGNED DEFAULT NULL,
  `start_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tbl_matches`
--

INSERT INTO `tbl_matches` (`ID`, `team_id_a`, `team_id_b`, `score_team_a`, `score_team_b`, `start_time`) VALUES
(51, 1, 2, 3, 2, '2017-06-30 08:00:00'),
(52, 1, 3, NULL, NULL, '2017-06-30 08:45:00'),
(53, 1, 4, NULL, NULL, '2017-06-30 09:30:00'),
(54, 2, 3, NULL, NULL, '2017-06-30 10:15:00'),
(55, 2, 4, NULL, NULL, '2017-06-30 11:00:00'),
(56, 3, 4, NULL, NULL, '2017-06-30 11:45:00'),
(57, 5, 6, NULL, NULL, '2017-06-30 12:30:00'),
(58, 5, 7, NULL, NULL, '2017-06-30 13:15:00'),
(59, 5, 8, NULL, NULL, '2017-06-30 14:00:00'),
(60, 6, 7, NULL, NULL, '2017-06-30 14:45:00'),
(61, 6, 8, NULL, NULL, '2017-06-30 15:30:00'),
(62, 7, 8, NULL, NULL, '2017-06-30 16:15:00'),
(63, 9, 10, NULL, NULL, '2017-06-30 17:00:00'),
(64, 9, 11, NULL, NULL, '2017-06-30 17:45:00'),
(65, 9, 12, NULL, NULL, '2017-06-30 18:30:00'),
(66, 10, 11, NULL, NULL, '2017-06-30 19:15:00'),
(67, 10, 12, NULL, NULL, '2017-06-30 20:00:00'),
(68, 11, 12, NULL, NULL, '2017-06-30 20:45:00'),
(69, 13, 14, NULL, NULL, '2017-06-30 21:30:00'),
(70, 13, 15, NULL, NULL, '2017-06-30 22:15:00'),
(71, 13, 16, NULL, NULL, '2017-06-30 23:00:00'),
(72, 14, 15, NULL, NULL, '2017-06-30 23:45:00'),
(73, 14, 16, NULL, NULL, '2017-07-01 00:30:00'),
(74, 15, 16, NULL, NULL, '2017-07-01 01:15:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_players`
--

CREATE TABLE `tbl_players` (
  `id` int(11) UNSIGNED NOT NULL,
  `student_id` varchar(10) NOT NULL,
  `team_id` int(11) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_poules`
--

CREATE TABLE `tbl_poules` (
  `id` int(11) NOT NULL,
  `naam` varchar(10) NOT NULL,
  `created_at` int(11) NOT NULL,
  `deleted_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_teams`
--

CREATE TABLE `tbl_teams` (
  `id` int(11) UNSIGNED NOT NULL,
  `poule_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_teams`
--

INSERT INTO `tbl_teams` (`id`, `poule_id`, `name`, `created_at`, `deleted_at`) VALUES
(1, 1, 'PSV', '2017-06-07 13:45:07', NULL),
(2, 1, 'Ajax', '2017-06-07 13:45:19', NULL),
(3, 1, 'NAC Breda', '2017-06-07 13:45:41', NULL),
(4, 1, 'AZ', '2017-06-07 13:47:15', NULL),
(5, 2, 'FC Twente', '2017-06-07 13:47:15', NULL),
(6, 2, 'FC Utrecht', '2017-06-07 13:47:15', NULL),
(7, 2, 'Feyenoord', '2017-06-07 13:47:15', NULL),
(8, 2, 'NEC', '2017-06-07 13:47:15', NULL),
(9, 3, 'Roda JC', '2017-06-07 13:48:16', NULL),
(10, 3, 'SC Heerenveen', '2017-06-07 13:48:16', NULL),
(11, 3, 'Sparta', '2017-06-07 13:48:16', NULL),
(12, 3, 'Vitesse', '2017-06-07 13:48:16', NULL),
(13, 4, 'Willem II', '2017-06-07 13:49:09', NULL),
(14, 4, 'PEC Zwolle', '2017-06-07 13:49:09', NULL),
(15, 4, 'Heracles Almelo', '2017-06-07 13:49:09', NULL),
(16, 4, 'FC Groningen', '2017-06-07 13:49:09', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `admin` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `email`, `pass`, `admin`) VALUES
(1, 'admin@admin.com', '$2y$10$p4R9ZIIE5QtnzMTbpkbhM.ashfncHmAM9yGfTl.NpOUXgsBeTs1iS', NULL),
(2, 'eb89@rocwb.nl', '$2y$10$Z0W5MFKnmhZ7h4j6X7eEcOdGB2uWKw8yMHeBuN5WlNFOZV7SwNS7S', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_finals`
--
ALTER TABLE `tbl_finals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_matches`
--
ALTER TABLE `tbl_matches`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `tbl_matches_ibfk_1` (`team_id_a`),
  ADD KEY `tbl_matches_ibfk_2` (`team_id_b`);

--
-- Indexes for table `tbl_players`
--
ALTER TABLE `tbl_players`
  ADD PRIMARY KEY (`id`),
  ADD KEY `team_id` (`team_id`);

--
-- Indexes for table `tbl_poules`
--
ALTER TABLE `tbl_poules`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `naam` (`naam`);

--
-- Indexes for table `tbl_teams`
--
ALTER TABLE `tbl_teams`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_finals`
--
ALTER TABLE `tbl_finals`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `tbl_matches`
--
ALTER TABLE `tbl_matches`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;
--
-- AUTO_INCREMENT for table `tbl_players`
--
ALTER TABLE `tbl_players`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_poules`
--
ALTER TABLE `tbl_poules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_teams`
--
ALTER TABLE `tbl_teams`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_matches`
--
ALTER TABLE `tbl_matches`
  ADD CONSTRAINT `tbl_matches_ibfk_1` FOREIGN KEY (`team_id_a`) REFERENCES `tbl_teams` (`id`),
  ADD CONSTRAINT `tbl_matches_ibfk_2` FOREIGN KEY (`team_id_b`) REFERENCES `tbl_teams` (`id`);

--
-- Constraints for table `tbl_players`
--
ALTER TABLE `tbl_players`
  ADD CONSTRAINT `tbl_players_ibfk_1` FOREIGN KEY (`team_id`) REFERENCES `tbl_teams` (`id`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
