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
-- Database: `school_sports_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `sports`
--

CREATE TABLE `sports` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sports`
--

INSERT INTO `sports` (`id`, `name`, `description`, `image`) VALUES
(1, 'Cricket', 'More than a cricket game in Kanadarava Madhya Maha Vidyalaya, it builds teamwork, discipline and strategic thinking among the students, as well as producing students who are good at cricket for a long time. It also inculcates values ​​that contribute to the holistic development of students.', 'crick.jpg'),
(2, 'Football', 'The purpose of the Kanadarava Madhya Maha Vidyalaya football game is to develop the mental and intellectual endurance of the students to win on the field as well as outside it.', 'foot.jpg'),
(3, 'Basketball', 'Kanadarava Madhya Maha Vidyalaya\'s basketball teams have achieved overall success in Sri Lanka, bringing fame to the school and some of its players have also achieved national success.', 'basket.jpg'),
(4, 'Rugby', 'Rugby is a dynamic and physically demanding sport that combines strength, speed and strategy. Also, our school has achieved great success in this game.', 'rug.jpg'),
(5, 'Volleyball', 'Volleyball at Kanadarwa Madhya Maha Vidyalaya is not only a sport but also a means of fostering physical fitness, teamwork and strategic thinking. Because of that, the school has won many victories in this game. And our school is popular in Sri Lanka because of this sport.', 'volly.jpeg'),
(6, 'Athletics', 'Kanadarwa Madhya Maha Vidyalaya is more than just a series of athletic events. Students who have achieved success in life through athletics have also studied in our school and have achieved more.', 'athel.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sports`
--
ALTER TABLE `sports`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sports`
--
ALTER TABLE `sports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
