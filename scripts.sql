-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 21, 2025 at 04:19 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medicore`
--

-- --------------------------------------------------------

--
-- Table structure for table `departements`
--

CREATE TABLE `departements` (
  `id` int NOT NULL,
  `code` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `departements`
--

INSERT INTO `departements` (`id`, `code`, `name`) VALUES
(1, 'A-9987', 'Ophthalmology'),
(2, 'A-9645', 'Internal Medicine'),
(3, 'A-9820', 'Neurology'),
(4, 'A-9987', 'Dermatology'),
(5, 'A-9958', 'Orthopedics'),
(6, 'A-9987', 'Gynecology'),
(7, 'A-9645', 'Cardiology'),
(8, 'A-9987', 'Pediatrics');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `speciality` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `departement_id` int NOT NULL,
  `photo` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `available` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `firstname`, `lastname`, `speciality`, `departement_id`, `photo`, `available`) VALUES
(1, 'Jennifer', 'Roberts', 'Pediatrics', 1, 'assets/doctors/jennifer_roberts.jpg', 1),
(2, 'Michael', 'Sullivan', 'Cardiology', 7, 'assets/doctors/michael_sullivan.jpg', 1),
(3, 'Emily', 'Harris', 'Gynecology', 8, 'assets/doctors/emily_harris.jpg', 1),
(4, 'Jonathan', 'Davis', 'Orthopedics', 5, 'assets/doctors/jonathan_davis.jpg', 1),
(5, 'Sarah', 'Mitchell', 'Dermatology', 4, 'assets/doctors/sarah_mitchell.jpg', 1),
(6, 'Andrew', 'Thompson', 'Neurology', 3, 'assets/doctors/andrew_thompson.jpg', 1),
(7, 'Jessica', 'Anderson', 'Internal Medicine', 2, 'assets/doctors/jessica_anderson.jpg', 1),
(8, 'David', 'Wilson', 'Ophthalmology', 6, 'assets/doctors/david_wilson.jpg', 1),
(9, 'Samantha', 'Carter', 'Psychiatry', 4, 'assets/doctors/samantha_carter.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` int NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `doctor_id` int NOT NULL,
  `departement_id` int NOT NULL,
  `photo` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `firstname`, `lastname`, `mobile`, `doctor_id`, `departement_id`, `photo`, `date`) VALUES
(10, 'Yoko', 'Herrera', '+1 (528) 923-5028', 8, 8, 'assets/patients/yoko_herrera.jpeg', '1983-05-12 00:27:00'),
(11, 'Dorian', 'Small', '+1 (128) 413-8739', 6, 2, 'assets/patients/dorian_small.jpeg', '1985-04-17 03:18:00'),
(12, 'Libby', 'Franks', '+1 (492) 421-8398', 3, 8, 'assets/patients/libby_franks.jpeg', '2021-11-13 04:58:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `departements`
--
ALTER TABLE `departements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `departements`
--
ALTER TABLE `departements`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
