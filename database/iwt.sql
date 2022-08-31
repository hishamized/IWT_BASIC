-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2022 at 09:49 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iwt`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `enroll` bigint(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`enroll`, `first_name`, `last_name`, `email`, `password`, `branch`, `gender`, `photo`) VALUES
(19201234567, 'Mohammad', 'Hisham', 'hisham@gmail.com', '$2y$10$Wy8gDYeGPmkbOXYTIs0ntuvcUBu03hnwP4sg.J6FrTA7qy.ixhPtG', 'Computer Science Engineering', 'male', 'images/630fba497cda39.42770671.jpg'),
(19201234568, 'Robinson', 'Cruzo', 'robinsoncruzo@rediff.com', '$2y$10$Xo/IpS9YvNvDcjUYWACAgeBwdgHIxK1wp5kO7vK6l3Emv9QifMvya', 'Civil Engineering', 'male', 'images/630fba8235f181.56459912.jpg'),
(19201234569, 'Ayesha', 'Imtiaz', 'ayesh002@gmail.com', '$2y$10$l48ABWxRT/RnjLfLVzWWoOaFGOLboRPrd206aNbGgqayeVoDFtKNu', 'Electrical Engineering', 'female', 'images/630fbac56d9cb8.57195911.jpg'),
(19201234571, 'Khalid Ibn', 'Waleed', 'theconqueror@gmail.com', '$2y$10$YmbRif/e0AGgkNw2j08v6ew3fvFTcFo.3HGlTwfCDUdDN6mCaX6m6', 'Mechanical Engineering', 'male', 'images/630fbb0cabdc30.09830436.jpg'),
(19201234572, 'Naani', 'Khachi', 'mekyatathsith@gmail.com', '$2y$10$5cqSziKokzyGaSwHmhQuu.5tZipuCrps8he9nL9qMGQaV5rtkcI8S', 'Electronics and Communication Engineering', 'male', 'images/630fbb3df05f40.75246607.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `enroll` bigint(20) NOT NULL,
  `subject1` varchar(255) DEFAULT NULL,
  `subject2` varchar(255) DEFAULT NULL,
  `subject3` varchar(255) DEFAULT NULL,
  `subject4` varchar(255) DEFAULT NULL,
  `subject5` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`enroll`, `subject1`, `subject2`, `subject3`, `subject4`, `subject5`) VALUES
(19201234567, 'Operating Systems', 'Database Management System', 'Computer Architecture and Organisation', 'Internet and Web Technology', 'Digital Signal Processing'),
(19201234568, 'Operating Systems', 'Database Management System', 'Computer Architecture and Organisation', 'Internet and Web Technology', 'Digital Signal Processing'),
(19201234569, 'Operating Systems', 'Database Management System', 'Computer Architecture and Organisation', 'Internet and Web Technology', 'Digital Signal Processing'),
(19201234571, 'Operating Systems', 'Database Management System', 'Computer Architecture and Organisation', 'Internet and Web Technology', 'Digital Signal Processing'),
(19201234572, 'Operating Systems', 'Database Management System', 'Computer Architecture and Organisation', 'Internet and Web Technology', 'Digital Signal Processing');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`enroll`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`enroll`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `enroll` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19205135119;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `subjects`
--
ALTER TABLE `subjects`
  ADD CONSTRAINT `subjects_ibfk_1` FOREIGN KEY (`enroll`) REFERENCES `students` (`enroll`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
