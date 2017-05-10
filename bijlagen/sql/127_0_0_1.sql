-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2017 at 11:16 AM
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
-- Table structure for table `tbl_matches`
--

CREATE TABLE `tbl_matches` (
  `id` int(10) UNSIGNED NOT NULL,
  `team_id_a` int(10) UNSIGNED NOT NULL,
  `team_id_b` int(10) UNSIGNED NOT NULL,
  `score_team_a` int(10) UNSIGNED DEFAULT NULL,
  `score_team_b` int(10) UNSIGNED DEFAULT NULL,
  `start_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tbl_matches`
--

INSERT INTO `tbl_matches` (`id`, `team_id_a`, `team_id_b`, `score_team_a`, `score_team_b`, `start_time`) VALUES
(1, 1, 2, 2, 4, '2017-04-13 18:00:00'),
(2, 2, 1, NULL, NULL, '2017-05-04 00:00:00');

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

--
-- Dumping data for table `tbl_players`
--

INSERT INTO `tbl_players` (`id`, `student_id`, `team_id`, `first_name`, `last_name`, `created_at`, `deleted_at`) VALUES
(1, 'd123456', 1, 'Lasse', 'Schöne', '2017-04-13 09:44:13', NULL),
(2, 'd5435435', 1, 'Davy ', 'Klaassen', '2017-04-13 09:44:13', NULL),
(3, 'd545454', 1, 'Hakim ', 'Ziyech', '2017-04-13 09:45:47', NULL),
(4, 'd666555', 1, 'Kasper', 'Dolberg', '2017-04-13 09:45:47', NULL),
(5, 'd74745', 2, 'Luuk', 'de Jong', '2017-04-13 09:48:23', NULL),
(6, 'd987665', 2, 'Siem', 'de Jong', '2017-04-13 09:48:23', NULL),
(7, 'd11555', 2, 'Jeroen', 'Zoet', '2017-04-13 09:48:23', NULL),
(8, 'd544566', 2, 'Hector', 'Moreno', '2017-04-13 09:48:23', NULL),
(24, 'Tomasz', 1, 'Tomasz', 'Tomasz', '2017-05-09 16:32:20', NULL),
(25, 'Tomasz', 1, 'Tomasz', 'Tomasz', '2017-05-09 16:32:20', NULL),
(26, 'Tomasz', 1, 'Tomasz', 'Tomasz', '2017-05-09 16:32:20', NULL),
(27, 'Tomasz', 1, 'Tomasz', 'Tomasz', '2017-05-09 16:32:20', NULL),
(28, 'Tomasz', 1, 'Tomasz', 'Tomasz', '2017-05-09 16:32:20', NULL),
(29, 'dwadwa', 1, 'dawdaw', 'dawd', '2017-05-09 16:32:55', NULL),
(30, 'wadwadwa', 1, 'dawd', 'wadaw', '2017-05-09 16:32:55', NULL),
(31, 'awdaw', 1, 'dawd', 'dwadaw', '2017-05-09 16:32:55', NULL),
(32, 'dawd', 1, 'awdaw', 'daw', '2017-05-09 16:32:55', NULL),
(33, 'wadwad', 1, 'dawdwad', 'daw', '2017-05-09 16:32:55', NULL),
(34, 'Tomasztttt', 39, 'Tomasztttt', 'Tomasztttt', '2017-05-09 16:45:25', NULL),
(35, '', 39, '', '', '2017-05-09 16:45:25', NULL),
(36, '', 39, '', '', '2017-05-09 16:45:25', NULL),
(37, '', 39, '', '', '2017-05-09 16:45:25', NULL),
(38, '', 39, '', '', '2017-05-09 16:45:25', NULL);

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
(1, 1, 'Ajax', '2017-04-13 09:42:45', NULL),
(2, 1, 'PSV', '2017-04-13 09:42:45', NULL),
(23, 1, 'Tomasz', '2017-05-09 16:32:20', NULL),
(24, 1, 'Tomaszs', '2017-05-09 16:32:55', NULL),
(25, 1, 'dwadwad', '2017-05-09 16:34:35', NULL),
(27, 1, 'dawdwadwadwadawd', '2017-05-09 16:35:00', NULL),
(29, 1, 'dawdawdaw', '2017-05-09 16:36:14', NULL),
(31, 1, 'Tomaszawdwa', '2017-05-09 16:38:01', NULL),
(32, 1, 'Tomaszawdwadwa', '2017-05-09 16:39:12', NULL),
(34, 1, 'dawdawdawd', '2017-05-09 16:39:48', NULL),
(35, 1, 'dwadwadwadwadawdwa', '2017-05-09 16:40:16', NULL),
(36, 1, 'TomaszT', '2017-05-09 16:40:50', NULL),
(37, 1, 'Tomasztt', '2017-05-09 16:44:04', NULL),
(39, 1, 'Tomasztttt', '2017-05-09 16:45:25', NULL);

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
(1, 'admin@admin.com', '$2y$10$p4R9ZIIE5QtnzMTbpkbhM.ashfncHmAM9yGfTl.NpOUXgsBeTs1iS', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_matches`
--
ALTER TABLE `tbl_matches`
  ADD PRIMARY KEY (`id`),
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
-- AUTO_INCREMENT for table `tbl_matches`
--
ALTER TABLE `tbl_matches`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_players`
--
ALTER TABLE `tbl_players`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `tbl_poules`
--
ALTER TABLE `tbl_poules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_teams`
--
ALTER TABLE `tbl_teams`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
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
