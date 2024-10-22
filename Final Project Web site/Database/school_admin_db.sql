-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2024 at 04:14 PM
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
-- Database: `school_admin_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `phone`, `role`) VALUES
(1, 'bhanuka', 'bhanuka11@gmail.com', '$2y$10$guVMVwsW3OK1DHD5tvMJbOwaoC2zRBNXzlxomloO9MbDVq/Gj7bla', '0776038406', 'ITadmin'),
(2, 'chameera', 'chameeraka@gmail.com', '$2y$10$u9ERqCJO2Q3k24R3eBbPy.Exd0yoKSROdesKhji6RtuW4Op7cfnJO', '0781234567', 'ITTeacher'),
(3, 'chalith', 'dulshanwick@gmail.com', '$2y$10$AV5WW4t/9va2FQLgGYyHNuGfmgw4vX7Tg6lRQ9HvtMJtu5.9qeV06', '0779012990', 'principle'),
(5, 'umesh', 'Umesh@gmail.com', '$2y$10$lzz3bAz6ehXCqwvZoRZ9W.IMSoCx/XmAzBL9s5CPJYDIgpBAyZOo2', '0779012990', 'principle'),
(6, 'manisha', 'manisha@gmail.com', '$2y$10$eY6RU9PkzxqS9pC4Wx9Cs.xMrjukfgY9qjSrQvJ5oFdE.D1KRHzZC', '0714324405', 'teacher'),
(7, 'nipun', 'nipun@gmail.com', '$2y$10$CBfIxOCskmASM1Xy330Ao.ookANhsHkIuswgWTcSWut6qAwCrJP6O', '0713456789', 'ITadmin'),
(8, 'janith', 'janith@gmail.com', '$2y$10$XXkM2wqBc11YAvYkeB8ZNuLAav8kOCDUc5pXx1pOtdJWM9kF7mSMK', '0714324405', 'ITTeacher'),
(9, 'dilum', 'dilum@gmail.com', '$2y$10$Q5RLYQnnmxHCf48b8qX0lu/M9prIucA/9UoZXGIORgP71C110huhm', '0779012990', 'ITadmin');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `Id` int(50) NOT NULL,
  `Name` varchar(100) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Password` varchar(50) DEFAULT NULL,
  `Confirm Password` varchar(50) NOT NULL,
  `Number` int(50) DEFAULT NULL,
  `Role` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`Id`, `Name`, `Email`, `Password`, `Confirm Password`, `Number`, `Role`) VALUES
(1, '', '', '$2y$10$q2BJegr4s0zS8yXgfx/XqeBQHt6rYMUkJyI/1vMooPg', '', 0, ''),
(2, '', '', '$2y$10$jIBk3Y9BgogKEPOW0PIdPuvlHHO1z2Dz4pimAY0Jn3H', '', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `Id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
