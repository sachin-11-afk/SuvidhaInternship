 -- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2022 at 07:30 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(6) NOT NULL,
  `email` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `firstname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `LastName` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `gender` enum('m','f','o') COLLATE utf8_unicode_ci NOT NULL,
  `ContactNo` bigint(10) NOT NULL,
  `addr` text COLLATE utf8_unicode_ci NOT NULL,
  `VolunteerRole` enum('Volunteer') COLLATE utf8_unicode_ci NOT NULL,
  `CurrentJobRole` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `CurrentCompany` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `AadharNo` bigint(30) NOT NULL,
  `WhatsAppNo` bigint(10) NOT NULL,
  `DOB` date NOT NULL,
  `photo` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ConfirmPassword` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `firstname`, `LastName`, `gender`, `ContactNo`, `addr`, `VolunteerRole`, `CurrentJobRole`, `CurrentCompany`, `AadharNo`, `WhatsAppNo`, `DOB`, `photo`, `Password`, `ConfirmPassword`) VALUES
(5, 'monusrivastava42@gmail.com', 'RAMAN', 'SHRIWASTAV', 'f', 7007601087, 'vijaimau gurauli ka purwa sangramgarh prtapgarh', 'Volunteer', 'qw', 'qw', 1234567890, 1234567890, '2022-06-30', '', 'Rakesh99@', 'Rakesh99@'),
(6, 'monusrivastava42@gmail.com', 'RAMAN', 'SHRIWASTAV', 'o', 7007601087, 'vijaimau gurauli ka purwa sangramgarh prtapgarh', 'Volunteer', 'qw', 'qw', 1234567890, 124567890, '2022-06-30', '', 'Rakesh99@', 'Rakesh99@'),
(7, 'monusrivastava42@gmail.com', 'RAMAN', 'SHRIWASTAV', 'o', 7007601087, 'vijaimau gurauli ka purwa sangramgarh prtapgarh', 'Volunteer', 'qw', 'qw', 1234567890, 124567890, '2022-06-30', 'IMG_20171110_131848.jpg', 'Rakesh99@', 'Rakesh99@'),
(8, 'monusrivastava42@gmail.com', 'RAMAN', 'SHRIWASTAV', 'o', 7007601087, 'vijaimau gurauli ka purwa sangramgarh prtapgarh', 'Volunteer', 'qw', 'qw', 1234567890, 124567890, '2022-06-30', 'IMG_20171110_131848.jpg', 'Rakesh99@', 'Rakesh99@'),
(9, 'ncjdvni@gmail.com', 'ra', 'srivastav', 'm', 1234567890, 'dfsdbfdb', 'Volunteer', 'iy', 'mbkj', 1234567890, 1234567890, '2022-06-30', 'IMG_20171111_120749.jpg', 'Rakesh99@', 'Rakesh99@');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
