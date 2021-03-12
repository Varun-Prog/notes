-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2021 at 01:33 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project2`
--

-- --------------------------------------------------------

--
-- Table structure for table `uploads`
--

CREATE TABLE `uploads` (
  `FILE_ID` int(11) NOT NULL,
  `FILE_NAME` varchar(225) NOT NULL,
  `FILE_DESCRIPTION` text NOT NULL,
  `FILE_TYPE` varchar(225) NOT NULL,
  `FILE_UPLOADER` varchar(225) NOT NULL,
  `FILE_UPLOADED_ON` timestamp NOT NULL DEFAULT current_timestamp(),
  `FILE_UPLOADED_TO` varchar(225) NOT NULL,
  `FILE` varchar(225) NOT NULL,
  `STATUS` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uploads`
--

INSERT INTO `uploads` (`FILE_ID`, `FILE_NAME`, `FILE_DESCRIPTION`, `FILE_TYPE`, `FILE_UPLOADER`, `FILE_UPLOADED_ON`, `FILE_UPLOADED_TO`, `FILE`, `STATUS`) VALUES
(1, 'DBMS', 'DBMS 3 schema architecture information', 'pdf', 'user', '2021-03-09 23:26:32', 'Computer Sc Enginnering', 'DBMS three schema architecture.pdf', 'Approved'),
(2, 'DBMS', 'DBMS Navathe Book', 'pdf', 'dmbkm', '2021-03-09 23:29:52', 'Electrical Enginnering', 'Navathe.pdf', 'Not approved yet'),
(3, 'DBMS', 'Notes of dbms vs file', 'pdf', 'dmbkm', '2021-03-09 23:32:32', 'Electrical Enginnering', 'DBMS vs File.pdf', 'Not approved yet'),
(4, 'Numerical Analysis', 'Adam Bashforth', 'pdf', 'Vihaan1234', '2021-03-10 01:00:24', 'Mechanical Engineering', 'Adam Bashforth.pdf', 'Approved'),
(5, 'Numerical Analysis', 'Taylor Series', 'pdf', 'Vihaan1234', '2021-03-10 05:57:28', 'Mechanical Engineering', 'Taylor Series.pdf', 'Approved'),
(6, 'Numerical Analysis', 'Guass Seidel', 'pdf', 'Vihaan1234', '2021-03-10 05:58:20', 'Mechanical Engineering', 'Guass Seidel Method.pdf', 'Approved'),
(7, 'Numerical Analysis', 'Introduction', 'pdf', 'Vihaan1234', '2021-03-10 05:58:41', 'Mechanical Engineering', 'Numerical Analysis -Introduction.pdf', 'Approved'),
(8, 'Computer Architecture', 'Unit 1', 'pdf', 'raj123', '2021-03-11 06:50:03', 'Mechanical Engineering', 'Last two topics of Unit 1.pdf', 'Approved'),
(9, 'Computer Architecture', 'Unit 4', 'pdf', 'raj123', '2021-03-11 06:52:20', 'Mechanical Engineering', 'Unit-4 input-output organization.pdf', 'Approved'),
(10, 'Computer Architecture', 'Unit 2 Part 2', 'pdf', 'raj123', '2021-03-11 06:53:48', 'Mechanical Engineering', 'Unit 2 Part 2.pdf', 'Approved'),
(11, 'C++', 'Structure', 'docx', 'raj123', '2021-03-11 06:56:54', 'Mechanical Engineering', 'C++ Struct & C Struct.docx', 'Not approved yet'),
(12, 'C++', 'Friend function', 'pptx', 'raj123', '2021-03-11 06:58:11', 'Mechanical Engineering', 'Friend Function.pptx', 'Approved'),
(13, 'C', 'Test', 'txt', 'Vihaan1234', '2021-03-11 07:00:41', 'Mechanical Engineering', 'C Online Test Site.txt', 'Approved'),
(14, 'C++', 'Operator Overloading', 'docx', 'raj123', '2021-03-11 07:03:17', 'Mechanical Engineering', 'Operator Overloading Lect.docx', 'Approved'),
(15, 'GK', 'Haryana GK', 'pdf', 'raj123', '2021-03-11 07:23:14', 'Mechanical Engineering', 'Hry. G.k Rajni.pdf', 'Approved'),
(16, 'C Question', 'True False', 'docx', 'rajni123', '2021-03-10 19:33:14', 'Mechanical Engineering', 'True False.docx', 'Approved'),
(17, 'Syllabus', 'BCA Syllabus', 'pdf', 'rajni123', '2021-03-11 01:16:15', 'Mechanical Engineering', 'BCA Regular IIIrd and IVth Semester wef 2014-2015.pdf', 'Approved'),
(18, 'Numerical Analysis', 'Guass Elimination', 'pdf', 'dmbkm', '2021-03-12 06:40:36', 'Electrical Enginnering', 'Gauss Elimination Exercise.pdf', 'Approved'),
(19, 'Numerical Analysis', 'LU Decomposition', 'pdf', 'dmbkm', '2021-03-12 06:43:26', 'Electrical Enginnering', 'LU Decomposition Method.pdf', 'Not approved yet'),
(20, 'Numerical Analysis', 'Secant Method', 'pdf', 'dmbkm', '2021-03-12 06:44:01', 'Electrical Enginnering', 'Secant Method.pdf', 'Not approved yet');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `Name` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `Username` varchar(225) NOT NULL,
  `Password` varchar(225) NOT NULL,
  `Gender` varchar(225) NOT NULL,
  `Role` varchar(225) NOT NULL,
  `Course` varchar(225) NOT NULL,
  `Image` varchar(225) NOT NULL,
  `About` varchar(225) NOT NULL,
  `Joindate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `Name`, `email`, `Username`, `Password`, `Gender`, `Role`, `Course`, `Image`, `About`, `Joindate`) VALUES
(1, 'user1', 'user@gmail.com', 'user', 'qwerty', 'Male', 'Teacher', 'Computer Sc Enginnering', 'A.jpg', 'N/A', '2021-03-09'),
(2, 'teacher2', 'teacher2@gmail.com', 'teacher2', '12345', 'Male', 'Teacher', 'Mechanical Engineering', 'profile.jpg', 'N/A', '2021-03-09'),
(3, 'varun', 'user@gmail.com', 'jjbjsjk', 'qwert', 'Female', 'Teacher', 'Computer Sc Enginnering', 'profile.jpg', 'N/A', '2021-03-09'),
(4, 'dgn', 'user@gmail.com', 'dmbkm', '123@#', 'Female', 'Student', 'Electrical Enginnering', 'profile.jpg', 'N/A', '2021-03-09'),
(5, 'Varun Kumar', 'varunmalhotra725@gmail.com', 'VarunKumar', 'Varun123@', 'Male', 'Student', 'Computer Sc Enginnering', 'profile.jpg', 'N/A', '2021-03-09'),
(6, 'Vihaan Singhania', 'vihaan34891@gmail.com', 'Vihaan1234', '123@#', 'Male', 'Student', 'Mechanical Engineering', 'Memory Interleaving-1.jpg', 'Good Boy,Hardworking', '2021-03-10'),
(7, 'Raj Singh', 'rajsingh123@gmail.com', 'raj123', 'qwer123', 'Male', 'Teacher', 'Mechanical Engineering', 'Mukand.jpg', 'N/A', '2021-03-11'),
(8, 'Rajni', 'rajni123@gmail.com', 'rajni123', 'qwerty', 'Female', 'Student', 'Mechanical Engineering', '20200505_133129.jpg', 'N/A', '2021-03-11'),
(9, 'Admin', 'admin1234@gmail.com', 'Admin', 'admin123', 'Male', 'Admin', 'Computer Sc Engineering', 'call.jpg', 'Good admin,Hardworking', '2019-10-01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `uploads`
--
ALTER TABLE `uploads`
  ADD PRIMARY KEY (`FILE_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `uploads`
--
ALTER TABLE `uploads`
  MODIFY `FILE_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
