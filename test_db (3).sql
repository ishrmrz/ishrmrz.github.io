-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2023 at 07:14 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `test_baptismal`
--

CREATE TABLE `test_baptismal` (
  `BID` int(50) NOT NULL,
  `CHILD` varchar(500) NOT NULL,
  `FATHER` varchar(500) NOT NULL,
  `MOTHER` varchar(500) NOT NULL,
  `BIRTHDATE` varchar(500) NOT NULL,
  `BAPDATE` varchar(500) NOT NULL,
  `PRIEST` varchar(500) NOT NULL,
  `GODFATHER` varchar(500) NOT NULL,
  `GODMOTHER` varchar(500) NOT NULL,
  `CONTACT` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `test_baptismal`
--

INSERT INTO `test_baptismal` (`BID`, `CHILD`, `FATHER`, `MOTHER`, `BIRTHDATE`, `BAPDATE`, `PRIEST`, `GODFATHER`, `GODMOTHER`, `CONTACT`) VALUES
(1, 'Joseph David Krasinski', 'John Krasinski', 'Emily Blunt', '2023-06-16', '2023-08-26', 'Jun Salve', 'Stephen Curry', 'Ayesha Curry', '09987654321'),
(2, 'Míra Nicole', 'Betuel Wilburn', 'Evy Annabeth', '2023-07-06', '2023-09-25', 'Javad Throvuss', 'Cornelius Hannibal', 'Yuraq Eveleen', ''),
(13, 'Alem Conrad', 'Avraham Leonard', 'Idoia Spring', '2023-10-11', '2023-11-23', 'Vinicio Harutyun', 'Percy Anzo', 'Cecilia Marjeta', ''),
(14, 'Firmino Manegold', 'Agung Baldwin', 'Cecilia Marjeta', '2023-06-19', '2023-08-17', 'Alawar Anne', 'Nenad Finn', 'Aroa Dallas', ''),
(15, 'Leopold Davey', 'Dane Rollie', 'Lyndsea Janeka', '2023-07-20', '2023-08-22', 'Nash Curran', 'Rain King', 'Darby Pamila', ''),
(16, 'Rain King', 'Lee Drake', 'Joyce Alita', '2023-08-24', '2023-09-13', 'Griffin Hartley', 'Raeburn Merlyn', 'Honour Katee', ''),
(17, 'Satchel Bronte', 'Dan Lawrence', 'Raeburn Merlyn', '2023-08-17', '2023-07-30', 'Derrick Gordon', 'Dennis Kyler', 'Honour Katee', ''),
(18, 'Len Colin', 'Luke Gayle', 'Hallie Sandie', '2023-07-13', '2023-08-12', 'Roslyn Willard', 'Daley Red', 'Earle Dakota', '09123456789'),
(19, 'Jewel Caelan', 'Josiah Alpha', 'Leslie Manny', '2023-07-24', '2023-07-31', 'Velma Desmond', 'Mitchell Berny', 'Laurel Phillipa', ''),
(20, 'Tad Stella', 'Tanner Devan', 'Kynaston Cindi', '2023-06-15', '2023-06-20', 'Dre Charlee', 'Earnest Elliott', 'Brittania Cedric', ''),
(23, 'No', 'Yes', 'No yES', '2023-10-13', '2023-12-18', 'Velma Desmond', 'Isa ', 'Isa pa', '09456789321');

-- --------------------------------------------------------

--
-- Table structure for table `test_confirmation`
--

CREATE TABLE `test_confirmation` (
  `CONFID` int(50) NOT NULL,
  `CHILD` varchar(500) NOT NULL,
  `FATHER` varchar(500) NOT NULL,
  `MOTHER` varchar(500) NOT NULL,
  `BIRTHDATE` varchar(500) NOT NULL,
  `CONFDATE` varchar(500) NOT NULL,
  `PRIEST` varchar(500) NOT NULL,
  `GODFATHER` varchar(500) NOT NULL,
  `GODMOTHER` varchar(500) NOT NULL,
  `CONTACT` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `test_confirmation`
--

INSERT INTO `test_confirmation` (`CONFID`, `CHILD`, `FATHER`, `MOTHER`, `BIRTHDATE`, `CONFDATE`, `PRIEST`, `GODFATHER`, `GODMOTHER`, `CONTACT`) VALUES
(1, 'Darren Kolby', 'Fredrick Bishop', 'Evangeline Odetta', '2023-09-14', '2023-10-26', 'Delmar Slade', 'Curran Matty', 'Hallie Kat', ''),
(2, 'Ash Yorick', 'Tory Wardell', 'Jolie Sophy', '2023-11-15', '2023-12-13', 'Norton Norris', 'Leopold Davey', 'Lyndsea Janeka', ''),
(3, 'Dennis Kyler', 'Titus Kelcey', 'Honour Katee', '2023-06-22', '2023-08-26', 'Amyas Leonard', 'Indiana Ward', 'Anemone Deeann', '09065645244'),
(7, 'Jaxxon Luther', 'Jaxxon Luther', 'Jaxxon Luther', '2023-06-29', '2023-07-12', 'Dre Charlee', 'Jaxxon Luther', 'Jaxxon Luther', '09789456132');

-- --------------------------------------------------------

--
-- Table structure for table `test_login`
--

CREATE TABLE `test_login` (
  `LID` int(50) NOT NULL,
  `FIRST` varchar(500) NOT NULL,
  `LAST` varchar(500) NOT NULL,
  `USERNAME` varchar(500) NOT NULL,
  `PASSWORD` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `test_login`
--

INSERT INTO `test_login` (`LID`, `FIRST`, `LAST`, `USERNAME`, `PASSWORD`) VALUES
(1, 'ish', 'ram', 'ishrmrz', '123'),
(2, 'Ice', 'Gaspar', 'icegaspar', '123'),
(3, 'Joshua', 'Ocray', 'joshuaocray', '123'),
(5, 'Precious', 'Cruz', 'precious', '123'),
(6, 'dummy2', 'dummy2', 'dummy2', '123'),
(7, 'Precious', 'Cruz', 'precious', '123'),
(8, 'Precious Cherryl', 'Cruz', 'precious', '123');

-- --------------------------------------------------------

--
-- Table structure for table `test_pastor`
--

CREATE TABLE `test_pastor` (
  `PID` int(50) NOT NULL,
  `PASTOR` varchar(500) NOT NULL,
  `AGE` varchar(500) NOT NULL,
  `CONTACT` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `test_pastor`
--

INSERT INTO `test_pastor` (`PID`, `PASTOR`, `AGE`, `CONTACT`) VALUES
(2, 'Gregorio Aglipay', '25', '09123987465'),
(3, 'Velma Desmond', '28', '09123456789'),
(4, 'Mo Jerry', '32', '09456987231'),
(7, 'Dre Charlee', '45', '09987456123'),
(8, 'Joshua Ocray', '23', '09321789456');

-- --------------------------------------------------------

--
-- Table structure for table `test_wedding`
--

CREATE TABLE `test_wedding` (
  `WID` int(50) NOT NULL,
  `BRIDE` varchar(500) NOT NULL,
  `GROOM` varchar(500) NOT NULL,
  `DATE` varchar(500) NOT NULL,
  `CENOMAR` varchar(500) NOT NULL,
  `BAPBRIDE` varchar(500) NOT NULL,
  `BAPGROOM` varchar(500) NOT NULL,
  `CONFBRIDE` varchar(500) NOT NULL,
  `CONFGROOM` varchar(500) NOT NULL,
  `BIRTHCERTBRIDE` varchar(500) NOT NULL,
  `BIRTHCERTGROOM` varchar(500) NOT NULL,
  `MARRIAGECERT` varchar(500) NOT NULL,
  `CONTACT` varchar(500) NOT NULL,
  `PACKAGE` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `test_wedding`
--

INSERT INTO `test_wedding` (`WID`, `BRIDE`, `GROOM`, `DATE`, `CENOMAR`, `BAPBRIDE`, `BAPGROOM`, `CONFBRIDE`, `CONFGROOM`, `BIRTHCERTBRIDE`, `BIRTHCERTGROOM`, `MARRIAGECERT`, `CONTACT`, `PACKAGE`) VALUES
(7, 'Désirée Kelechi', 'Jochen Jouni', '2023-06-22', 'SBWedding/Curriculum Vitae format.docx', 'SBWedding/Curriculum Vitae format.docx', 'SBWedding/Curriculum Vitae format.docx', 'SBWedding/Curriculum Vitae format.docx', 'SBWedding/Curriculum Vitae format.docx', 'SBWedding/Curriculum Vitae format.docx', 'SBWedding/Curriculum Vitae format.docx', 'SBWedding/Curriculum Vitae format.docx', '', ''),
(8, 'TestBride', 'TestGroom', '2023-07-21', 'SBWedding/IT3D_ENRIQUEZ_ACT1.docx', 'SBWedding/IT3D_ENRIQUEZ_ACT1.docx', 'SBWedding/IT3D_ENRIQUEZ_ACT1.docx', 'SBWedding/IT3D_ENRIQUEZ_ACT1.docx', 'SBWedding/IT3D_ENRIQUEZ_ACT1.docx', 'SBWedding/IT3D_ENRIQUEZ_ACT1.docx', 'SBWedding/IT3D_ENRIQUEZ_ACT1.docx', 'SBWedding/IT3D_ENRIQUEZ_ACT1.docx', '', 'Package 2'),
(9, 'DSADA', 'SASASA', '2023-06-02', 'SBWedding/Activity6_screenshots.docx', 'SBWedding/Activity6_screenshots.docx', 'SBWedding/Activity6_screenshots.docx', 'SBWedding/Activity6_screenshots.docx', 'SBWedding/Activity6_screenshots.docx', 'SBWedding/Activity6_screenshots.docx', 'SBWedding/Activity6_screenshots.docx', 'SBWedding/Activity6_screenshots.docx', '', ''),
(10, 'Cayla Kirk', 'Moe Dudley', '2023-08-12', 'SBWedding/M7_Activity1_RAMIREZ.docx', 'SBWedding/STS-IT2F-GroupNo.7-M1A1.docx', 'SBWedding/M7_Activity1_RAMIREZ.docx', 'SBWedding/STS-IT2F-GroupNo.7-M1A1.docx', 'SBWedding/M7_Activity1_RAMIREZ.docx', 'SBWedding/STS-IT2F-GroupNo.7-M1A1.docx', 'SBWedding/M7_Activity1_RAMIREZ.docx', 'SBWedding/STS-IT2F-GroupNo.7-M1A1.docx', '09123987456', 'Package 1'),
(11, 'Honour Katee', 'Raeburn Merlyn', '2023-08-31', 'SBWedding/Activity6_screenshots.docx', 'SBWedding/Assignment_1_RAMIREZ.docx', 'SBWedding/Quiz_1_RAMIREZ.docx', 'SBWedding/consentformnew.docx', 'SBWedding/consentformnew.docx', 'SBWedding/consentformnew.docx', 'SBWedding/consentformnew.docx', 'SBWedding/Activity6_screenshots.docx', '', 'Package 2'),
(13, 'Velma Doe', 'John Doe', '2023-11-04', 'SBWedding/STS-IT2F-GroupNo.7-M1A1.docx', 'SBWedding/M7_Activity1_RAMIREZ.docx', 'SBWedding/STS-IT2F-GroupNo.7-M1A1.docx', 'SBWedding/M7_Activity1_RAMIREZ.docx', 'SBWedding/STS-IT2F-GroupNo.7-M1A1.docx', 'SBWedding/STS-IT2F-GroupNo.7-M1A1.docx', 'SBWedding/M7_Activity1_RAMIREZ.docx', 'SBWedding/STS-IT2F-GroupNo.7-M1A1.docx', '09987654321', 'Package 3'),
(23, 'Teri Bessie', 'Milford Oral', '2023-10-26', 'SBWedding/LabAct5_RAMIREZ.docx', 'SBWedding/LabAct5_RAMIREZ.doc', 'SBWedding/Quiz 1.doc', 'SBWedding/LabAct5_RAMIREZ.doc', 'SBWedding/LabAct5_RAMIREZ.docx', 'SBWedding/Quiz 1.doc', 'SBWedding/LabAct5_RAMIREZ.doc', 'SBWedding/Laboratory Activity 5.doc', '09456789321', 'Package 2'),
(24, 'Yeri Bessie', 'Milford Malapitan', '2024-01-18', 'SBWedding/Liam - ADC.JPG', 'SBWedding/questions (1).docx', 'SBWedding/Gaspar-Group_Summary-of-Grades.docx', 'SBWedding/Business-Requirement-Document.docx', 'SBWedding/M7_Activity1_RAMIREZ.docx', 'SBWedding/Techtris-Proposal.docx', 'SBWedding/Laboratory Activity 2.doc', 'SBWedding/questions.docx', '09456789321', 'Package 1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  `name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`) VALUES
(1, 'admin', '123', 'Ish');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `test_baptismal`
--
ALTER TABLE `test_baptismal`
  ADD PRIMARY KEY (`BID`);

--
-- Indexes for table `test_confirmation`
--
ALTER TABLE `test_confirmation`
  ADD PRIMARY KEY (`CONFID`);

--
-- Indexes for table `test_login`
--
ALTER TABLE `test_login`
  ADD PRIMARY KEY (`LID`);

--
-- Indexes for table `test_pastor`
--
ALTER TABLE `test_pastor`
  ADD PRIMARY KEY (`PID`);

--
-- Indexes for table `test_wedding`
--
ALTER TABLE `test_wedding`
  ADD PRIMARY KEY (`WID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `test_baptismal`
--
ALTER TABLE `test_baptismal`
  MODIFY `BID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `test_confirmation`
--
ALTER TABLE `test_confirmation`
  MODIFY `CONFID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `test_login`
--
ALTER TABLE `test_login`
  MODIFY `LID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `test_pastor`
--
ALTER TABLE `test_pastor`
  MODIFY `PID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `test_wedding`
--
ALTER TABLE `test_wedding`
  MODIFY `WID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
