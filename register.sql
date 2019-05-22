-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2018 at 09:10 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tutoringcenter`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `fullname` varchar(50) NOT NULL,
  `studentid` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `pwd` varchar(20) NOT NULL,
  `TutorOrTutoredStudent` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`fullname`, `studentid`, `email`, `pwd`, `TutorOrTutoredStudent`) VALUES
('Atheer Alothman', '214410218', '214410218@psu.edu.sa', 'atheer1996', 'tutor'),
('Israa Zakaria Al-Khatib', '214410246', '214410246@psu.edu.sa', 'Israa1997', 'student'),
('Sara Faisal Al-Habashi', '214410457', 'sym1996@hotmail.com', 'alhabashi1996', 'Tutor'),
('Lina Abdullah', '214511229', '214511229@psu.edu.sa', 'lina1996:)', 'tutor'),
('Omnya Kamal', '214511289', '214511289@psu.edu.sa', 'omnya1996', 'tutor'),
('Zara Ilyas', '214511301', 'zarailyas27@gmail.com', 'zarailyas', 'Student'),
('Ruqia Osama Al-Zoubi', '215510632', '215510632@psu.edu.sa', 'RAlZoubi', 'Tutor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`studentid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
