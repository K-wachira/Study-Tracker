-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 11, 2020 at 06:38 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Study-Tracker`
--

-- --------------------------------------------------------

--
-- Table structure for table `st_access_rights`
--

CREATE TABLE `st_access_rights` (
  `ID` int(100) NOT NULL,
  `user_level_id` int(100) NOT NULL DEFAULT 1,
  `user_level` varchar(100) NOT NULL,
  `accss_rights` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `st_access_rights`
--

INSERT INTO `st_access_rights` (`ID`, `user_level_id`, `user_level`, `accss_rights`) VALUES
(1, 2, 'Viewer\r\n', 'views'),
(2, 3, 'SupperAdmin\r\n', 'AddNewSubject, ViewsSubjects, DeletesSubjects,Editsubject'),
(3, 1, 'Admin\r\n', 'Addsubject,ViewsSubject,Editsubject');

-- --------------------------------------------------------

--
-- Table structure for table `st_class_progress`
--

CREATE TABLE `st_class_progress` (
  `ID` int(100) NOT NULL,
  `Subject_name` varchar(100) NOT NULL,
  `class` varchar(100) NOT NULL,
  `Number_of_units_completed` int(100) NOT NULL DEFAULT 0,
  `Total_Units` int(100) NOT NULL DEFAULT 10,
  `Class_teacher` varchar(256) NOT NULL,
  `number_of_students` int(100) NOT NULL,
  `subject_gpa` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `st_class_progress`
--

INSERT INTO `st_class_progress` (`ID`, `Subject_name`, `class`, `Number_of_units_completed`, `Total_Units`, `Class_teacher`, `number_of_students`, `subject_gpa`) VALUES
(11, 'Mathetics', '3', 5, 10, 'Mr David', 30, 4),
(12, 'Kiswahili', '2', 3, 15, 'Madam Sue', 78, 3),
(13, 'Biology', '2', 8, 13, 'Madam Sue', 78, 3),
(14, 'Computer', '', 10, 20, 'Mariga', 32, 4),
(15, 'Biology', '3', 8, 15, 'Madam Sue', 32, 3);

-- --------------------------------------------------------

--
-- Table structure for table `user_accounts`
--

CREATE TABLE `user_accounts` (
  `ID` int(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email_adress` varchar(100) NOT NULL,
  `user_passwords` varchar(100) NOT NULL,
  `user_level_id` int(100) NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_accounts`
--

INSERT INTO `user_accounts` (`ID`, `first_name`, `last_name`, `username`, `email_adress`, `user_passwords`, `user_level_id`) VALUES
(7, 'Kelvin', 'Wachira', 'kamau', 'K.wachira@alustudent.com', 'b2c6de510d584484d74c9aa9f8fa9f04', 2),
(8, 'a', 'b', 'c', 'e', '8277e0910d750195b448797616e091ad', 2),
(9, 'Kelvin', 'Wachira', 'wachira', 'walibeek@gmail.com', 'b2c6de510d584484d74c9aa9f8fa9f04', 2),
(10, 'fie', 'doe', 'joedoh', 'Kelvin.wachira@gmail.com', 'b2c6de510d584484d74c9aa9f8fa9f04', 2),
(11, 'vincent', 'Githage', 'vinni', 'kelvin.wachira@gmail.com', 'b2c6de510d584484d74c9aa9f8fa9f04', 2),
(12, 'Kelvin', 'Wachira', 'k.wachira@alustudent.com', 'K.wachira@alustudent.com', 'b2c6de510d584484d74c9aa9f8fa9f04', 2),
(13, 'Alice', 'Wachira', 'Alice', 'A.wachira@gmail.com', 'b2c6de510d584484d74c9aa9f8fa9f04', 3),
(14, 'kelvin', 'Githage', 'shee', 'K.wachira@alustudent.com', 'b2c6de510d584484d74c9aa9f8fa9f04', 2);

-- --------------------------------------------------------

--
-- Table structure for table `wqwqst_access_rights`
--

CREATE TABLE `wqwqst_access_rights` (
  `user_level_id` int(100) NOT NULL,
  `user_level` varchar(200) NOT NULL,
  `accss_rights` varchar(260) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wqwqst_access_rights`
--

INSERT INTO `wqwqst_access_rights` (`user_level_id`, `user_level`, `accss_rights`) VALUES
(1, 'Admin', 'newsubject,veiws,editsubject'),
(2, 'User', 'views'),
(3, 'SupperAdmin', 'newsubject,veiws,editsubject,deletesubject');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `st_access_rights`
--
ALTER TABLE `st_access_rights`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `st_class_progress`
--
ALTER TABLE `st_class_progress`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user_accounts`
--
ALTER TABLE `user_accounts`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `st_access_rights`
--
ALTER TABLE `st_access_rights`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `st_class_progress`
--
ALTER TABLE `st_class_progress`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user_accounts`
--
ALTER TABLE `user_accounts`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
