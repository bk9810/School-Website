-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2024 at 04:15 PM
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
-- Database: `school_event_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `description`) VALUES
(1, 'Updates on the special workshop held in our school due to Environment Day', 'On the occasion of Environment Day, our school organizes a special workshop aimed at educating and educating students about environmental conservation and sustainability. The event will be held on 05.06.2024 and will consist of a variety of engaging activities and information sessions designed to create a deeper understanding of environmental issues among students.'),
(2, 'G.C.E Advanced Level 2024/2026 Admission for Advanced Level Section', 'This application must be filled for admission to A/l classes and for that students of our college or another college must have passed the O/level.'),
(3, 'Conducting science exhibition', 'A science exhibition is held in our school, and it is scheduled to be held on the 3rd of October at 12.00 noon.'),
(4, 'The latest updates about the school\'s sports festival held every 2 years.', 'The School Sports Festival is a major event organized every two years, bringing students, staff and the community together to celebrate athletics, teamwork and school spirit. It consists of various games and activities, the event will be held on 07.07.2024 and participation of all students is expected.'),
(5, 'A special event is held in the school on Children\'s Day.', 'On that day, a friendly rugby match will be held in which several teams of players will participate, and a small ceremony will also be held for the students.');

-- --------------------------------------------------------

--
-- Table structure for table `homee`
--

CREATE TABLE `homee` (
  `id` int(11) NOT NULL,
  `title` varchar(200) DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `homee`
--

INSERT INTO `homee` (`id`, `title`, `description`) VALUES
(1, 'The event is being held on the occasion of our school\'s 119th proud anniversary', 'This announcement means that a special event is taking place to celebrate a special milestone in the College\'s history. Especially since it is the school\'s 119th anniversary. The special day of school importance starts on 11.08.2024 in the morning at school and the important day consists of several features.'),
(2, 'Football tournament held at the district school level', 'Several schools in the district, including our school, are participating in this competition. Also, this tournament has been decided to be held in the whole month of September. This will start on September 5.');

-- --------------------------------------------------------

--
-- Table structure for table `homesss`
--

CREATE TABLE `homesss` (
  `id` int(11) NOT NULL,
  `ti` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `homies`
--

CREATE TABLE `homies` (
  `Id` int(11) NOT NULL,
  `title` varchar(200) DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `homies`
--

INSERT INTO `homies` (`Id`, `title`, `description`) VALUES
(1, 'Updates on the special workshop held in our school due to Environment Day.', 'On the occasion of Environment Day, our school organizes a special workshop aimed at educating and educating students about environmental conservation and sustainability. The event will be held on 05.06.2024 and will consist of a variety of engaging activities and information sessions designed to create a deeper understanding of environmental issues among students.'),
(2, 'The latest updates about the school\'s sports festival held every 2 years.', 'The School Sports Festival is a major event organized every two years, bringing students, staff and the community together to celebrate athletics, teamwork and school spirit. It consists of various games and activities, the event will be held on 07.07.2024 and participation of all students is expected.');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `description`) VALUES
(1, 'The event is being held on the occasion of our school\'s 119th proud anniversary', 'This announcement means that a special event is taking place to celebrate a special milestone in the College\'s history. Especially since it is the school\'s 119th anniversary. The special day of school importance starts on 11.08.2024 in the morning at school and the important day consists of several features.'),
(2, 'Football tournament held at the district school level', 'Several schools in the district, including our school, are participating in this competition. Also, this tournament has been decided to be held in the whole month of September. This will start on September 5.'),
(3, 'Organized by the A/L section of the school Maha Pozon Dansala', 'Organized by the students of A/l Sheniwala of our school, the main gate of Maha Poson Dansala School will be held on June 24, 2024.'),
(4, 'Kanadarava CC and Anuradhapura CC will be held for the  friendly cricket match', 'The 13th cricket match between our school and Anuradhapura CC is scheduled to be held on the 22nd of August at the Anuradhapura Public Stadium.'),
(5, 'A special program is scheduled for Teacher\'s Day.', 'For that day, the students have organized a comedy festival and a special program for the teachers.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homee`
--
ALTER TABLE `homee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homesss`
--
ALTER TABLE `homesss`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homies`
--
ALTER TABLE `homies`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `homee`
--
ALTER TABLE `homee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `homesss`
--
ALTER TABLE `homesss`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `homies`
--
ALTER TABLE `homies`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
