-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2019 at 05:35 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ccsapplicationdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `academicinfo_tbl`
--

CREATE TABLE `academicinfo_tbl` (
  `SN` int(255) NOT NULL,
  `AppNumber` varchar(255) NOT NULL,
  `PrimarySchool` mediumtext NOT NULL,
  `PrimaryFrom` varchar(255) NOT NULL,
  `PrimaryTo` varchar(255) NOT NULL,
  `SecondarySchool` mediumtext NOT NULL,
  `SecondaryFrom` varchar(255) NOT NULL,
  `SecondaryTo` varchar(255) NOT NULL,
  `College` mediumtext NOT NULL,
  `CollegeQualification` mediumtext NOT NULL,
  `CollegeCourse` mediumtext NOT NULL,
  `CollegeFrom` varchar(255) NOT NULL,
  `CollegeTo` varchar(255) NOT NULL,
  `OlevelNumber` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `academicinfo_tbl`
--

INSERT INTO `academicinfo_tbl` (`SN`, `AppNumber`, `PrimarySchool`, `PrimaryFrom`, `PrimaryTo`, `SecondarySchool`, `SecondaryFrom`, `SecondaryTo`, `College`, `CollegeQualification`, `CollegeCourse`, `CollegeFrom`, `CollegeTo`, `OlevelNumber`) VALUES
(1, 'YCT/CCS/18/32525', 'PRIMARY SCHOOL', '2018-08', '2018-08', 'SECONDARY SCHOOL', '2018-08', '2018-08', 'HIGHER INSTITUTION', 'Lower Credit', 'Industrial Maintenance Engineering', '2018-08', '2018-08', 1),
(2, 'YCT/CCS/18/67365', 'ZDAZCA SVFSDFAF', '2018-08', '2018-08', 'SECONDARY SCHOOL', '2018-08', '2018-08', '0', '0', '0', '0', '0', 1),
(3, 'YCT/CCS/18/20245', 'PRIMARY SCHOOL', '2018-08', '2018-08', 'SECONDARY SCHOOL', '2018-08', '2018-08', 'HIGHER INSTITUTION', 'Lower Credit', 'Biochemistry', '2018-08', '2018-08', 2),
(4, 'YCT/CCS/18/44172', '', '', '', '', '', '', '', '', '', '', '', 1),
(5, 'YCT/CCS/18/62146', 'ADADADA', '2018-08', '2018-08', 'ADADADA', '2018-08', '2018-07', 'ADADADA', 'Lower Credit', 'Biochemistry', '2018-08', '2018-08', 1);

-- --------------------------------------------------------

--
-- Table structure for table `application_tbl`
--

CREATE TABLE `application_tbl` (
  `SN` int(255) NOT NULL,
  `AppNumber` varchar(255) NOT NULL,
  `FirstName` mediumtext NOT NULL,
  `OtherName` mediumtext NOT NULL,
  `SurName` mediumtext NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `PhoneNumber` varchar(255) NOT NULL,
  `ProgrammeType` mediumtext NOT NULL,
  `ProgrammeName` mediumtext NOT NULL,
  `AcademicSession` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `application_tbl`
--

INSERT INTO `application_tbl` (`SN`, `AppNumber`, `FirstName`, `OtherName`, `SurName`, `Gender`, `Email`, `PhoneNumber`, `ProgrammeType`, `ProgrammeName`, `AcademicSession`) VALUES
(1, 'YCT/CCS/18/32525', 'ASDA', 'DASA', 'ASAS', 'Female', 'ss@yaah.com', '33333333333', 'HND', 'Civil Engineering', '2018/2019'),
(2, 'YCT/CCS/18/20245', 'ZCZCZ', 'ZXZXCZ', 'ZCZCZ', 'Female', 'zczb@kjcvdzs.com', '33333333345', 'HND', 'Civil Engineering', '2018/2019'),
(3, 'YCT/CCS/18/67365', 'MUKAILA', 'AZEEZ', 'HABIBAT', 'Male', 'segun@yahoo.com', '09088765432', 'ND', 'Industrial Maintenance Engineering', '2018/2019'),
(4, 'YCT/CCS/18/44172', 'OLUSEGUN', 'ABDULAZEEZ', 'SAROMI', 'Male', 'segun_saromi@yahoo.com', '08129269607', 'HND', 'Electrical Engineering', '2018/2019'),
(5, 'YCT/CCS/18/62146', 'OLUSEGUN', 'ABDULAEEZ', 'SAROMI', 'Male', 'segun@yahoo.com', '23234234454', 'HND', 'Building Technology', '2018/2019'),
(6, 'YCT/CCS/18/00082', 'SAROMI', 'MICHEAL', 'BRIDGET', 'Male', 'segun_saromi@yahoo.com', '08022399063', 'HND', 'Building Technology', '2018/2019'),
(7, 'YCT/CCS/18/00082', 'SAROMI', 'MICHEAL', 'BRIDGET', 'Male', 'segun_saromi@yahoo.com', '08022399063', 'HND', 'Building Technology', '2018/2019'),
(8, 'YCT/CCS/18/00082', 'SAROMI', 'MICHEAL', 'BRIDGET', 'Male', 'segun_saromi@yahoo.com', '08022399063', 'HND', 'Building Technology', '2018/2019'),
(9, 'YCT/CCS/18/20369', 'OLUWASEGUN', 'ABDUL', 'SAROMI', 'Male', 'segun_saromi@yahoo.com', '08022399063', 'ND', 'Hospitality Management', '2018/2019'),
(10, 'YCT/CCS/18/39706', 'SAROMI', 'SEGUN', 'ABDUL', 'Male', 'segun@yahoo.com', '08022399063', 'ND', 'Business Administration', '2018/2019'),
(11, 'YCT/CCS/18/16310', 'SAROMI', 'SEGUN', 'ABDUL', 'Male', 'segunh@yahoo.com', '08022399063', 'ND', 'Hospitality Management', '2018/2019'),
(12, 'YCT/CCS/18/53042', 'SAROMI', 'SEGUN', 'ABDUL', 'Male', 'segun@yahoo.com', '08801234567', 'ND', 'Mechanical Engineering', '2018/2019'),
(16, 'YCT/CCS/18/54048', 'SAROMI', 'OLUSEGUN', 'ABDUL', 'Male', 'segun@yahoo.com', '08022399063', 'ND', 'Mechanical Engineering', '2018/2019'),
(17, 'YCT/CCS/18/01720', 'YEMISI', 'WERTY', 'USMAN', 'Female', 'usma@yahoo.com', '99887766555', 'ND', 'Industrial Maintenance Engineering', '2018/2019');

-- --------------------------------------------------------

--
-- Table structure for table `olevel1info_tbl`
--

CREATE TABLE `olevel1info_tbl` (
  `SN` int(255) NOT NULL,
  `AppNumber` varchar(255) NOT NULL,
  `OlevelType` varchar(255) NOT NULL,
  `ExamYear` varchar(255) NOT NULL,
  `ExamNumber` varchar(255) NOT NULL,
  `OlevelS1` varchar(255) NOT NULL,
  `OlevelS2` varchar(255) NOT NULL,
  `OlevelS3` varchar(255) NOT NULL,
  `OlevelS4` varchar(255) NOT NULL,
  `OlevelS5` varchar(255) NOT NULL,
  `OlevelS6` varchar(255) NOT NULL,
  `OlevelS7` varchar(255) NOT NULL,
  `OlevelS8` varchar(255) NOT NULL,
  `OlevelS9` varchar(255) NOT NULL,
  `OlevelG1` varchar(255) NOT NULL,
  `OlevelG2` varchar(255) NOT NULL,
  `OlevelG3` varchar(255) NOT NULL,
  `OlevelG4` varchar(255) NOT NULL,
  `OlevelG5` varchar(255) NOT NULL,
  `OlevelG6` varchar(255) NOT NULL,
  `OlevelG7` varchar(255) NOT NULL,
  `OlevelG8` varchar(255) NOT NULL,
  `OlevelG9` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `olevel1info_tbl`
--

INSERT INTO `olevel1info_tbl` (`SN`, `AppNumber`, `OlevelType`, `ExamYear`, `ExamNumber`, `OlevelS1`, `OlevelS2`, `OlevelS3`, `OlevelS4`, `OlevelS5`, `OlevelS6`, `OlevelS7`, `OlevelS8`, `OlevelS9`, `OlevelG1`, `OlevelG2`, `OlevelG3`, `OlevelG4`, `OlevelG5`, `OlevelG6`, `OlevelG7`, `OlevelG8`, `OlevelG9`) VALUES
(18, 'YCT/CCS/18/67365', 'WAEC', '2018-08', '432452542', 'Mathematics', 'Mathematics', 'Mathematics', 'Mathematics', 'Mathematics', 'Mathematics', 'Mathematics', 'Mathematics', 'Mathematics', 'A1', 'A1', 'A1', 'A1', 'A1', 'A1', 'A1', 'A1', 'A1'),
(19, 'YCT/CCS/18/20245', 'NECO', '2018-08', '234242421', 'English', 'Mathematics', 'Mathematics', 'Mathematics', 'Mathematics', 'Mathematics', 'Lit-In-English', 'Mathematics', 'Mathematics', 'A1', 'A1', 'A1', 'A1', 'A1', 'A1', 'A1', 'A1', 'A1'),
(20, 'YCT/CCS/18/32525', 'NECO', '2018-08', '242342341241', 'Geography', 'Mathematics', 'Mathematics', 'Mathematics', 'Mathematics', 'Mathematics', 'Mathematics', 'Mathematics', 'Mathematics', 'A1', 'A1', 'A1', 'A1', 'A1', 'A1', 'A1', 'A1', 'A1'),
(21, 'YCT/CCS/18/44172', 'NECO', '2018-08', '4232423423', 'C.R.K', 'Mathematics', 'English', 'Mathematics', 'Further-Mathematics', 'C.R.K', 'Islamic-Studies', 'Physics', 'Chemistry', 'B2', 'A1', 'P7', 'C6', 'C4', 'E8', 'B3', 'P7', 'A1'),
(22, 'YCT/CCS/18/62146', 'NECO', '2018-08', '33424242', 'English', 'Mathematics', 'Mathematics', 'Mathematics', 'Mathematics', 'Mathematics', 'Mathematics', 'Mathematics', 'Mathematics', 'B2', 'A1', 'A1', 'A1', 'A1', 'A1', 'A1', 'A1', 'A1');

-- --------------------------------------------------------

--
-- Table structure for table `olevel2info_tbl`
--

CREATE TABLE `olevel2info_tbl` (
  `SN` int(255) NOT NULL,
  `AppNumber` varchar(255) NOT NULL,
  `OlevelType` varchar(255) NOT NULL,
  `ExamYear` varchar(255) NOT NULL,
  `ExamNumber` varchar(255) NOT NULL,
  `OlevelS1` varchar(255) NOT NULL,
  `OlevelS2` varchar(255) NOT NULL,
  `OlevelS3` varchar(255) NOT NULL,
  `OlevelS4` varchar(255) NOT NULL,
  `OlevelS5` varchar(255) NOT NULL,
  `OlevelS6` varchar(255) NOT NULL,
  `OlevelS7` varchar(255) NOT NULL,
  `OlevelS8` varchar(255) NOT NULL,
  `OlevelS9` varchar(255) NOT NULL,
  `OlevelG1` varchar(255) NOT NULL,
  `OlevelG2` varchar(255) NOT NULL,
  `OlevelG3` varchar(255) NOT NULL,
  `OlevelG4` varchar(255) NOT NULL,
  `OlevelG5` varchar(255) NOT NULL,
  `OlevelG6` varchar(255) NOT NULL,
  `OlevelG7` varchar(255) NOT NULL,
  `OlevelG8` varchar(255) NOT NULL,
  `OlevelG9` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `olevel2info_tbl`
--

INSERT INTO `olevel2info_tbl` (`SN`, `AppNumber`, `OlevelType`, `ExamYear`, `ExamNumber`, `OlevelS1`, `OlevelS2`, `OlevelS3`, `OlevelS4`, `OlevelS5`, `OlevelS6`, `OlevelS7`, `OlevelS8`, `OlevelS9`, `OlevelG1`, `OlevelG2`, `OlevelG3`, `OlevelG4`, `OlevelG5`, `OlevelG6`, `OlevelG7`, `OlevelG8`, `OlevelG9`) VALUES
(1, 'YCT/CCS/18/20245', 'NABTEB', '2018-09', '23423424214SF', 'English', 'Chemistry', 'Physics', 'Government', 'Agricultural-Science', 'Economics', 'Lit-In-English', 'Geography', 'Economics', 'B3', 'C6', 'P7', 'E8', 'C5', 'P7', 'E8', 'F9', 'C5');

-- --------------------------------------------------------

--
-- Table structure for table `passport_tbl`
--

CREATE TABLE `passport_tbl` (
  `SN` int(255) NOT NULL,
  `AppNumber` varchar(255) NOT NULL,
  `Passport` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `passport_tbl`
--

INSERT INTO `passport_tbl` (`SN`, `AppNumber`, `Passport`) VALUES
(5, 'YCT/CCS/18/32525', 'uploads/48351p2.jpg'),
(6, 'YCT/CCS/18/67365', 'uploads/693445p5.jpg'),
(7, 'YCT/CCS/18/20245', 'uploads/457424p3.jpg'),
(8, 'YCT/CCS/18/44172', 'uploads/737018passport.jpg'),
(9, 'YCT/CCS/18/62146', 'uploads/676497passport.jpg'),
(10, 'YCT/CCS/18/06561', 'uploads/398631p2.jpg'),
(11, 'YCT/CCS/18/01720', 'uploads/86813p2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `payment_tbl`
--

CREATE TABLE `payment_tbl` (
  `SN` int(255) NOT NULL,
  `AppNumber` varchar(16) NOT NULL,
  `Status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment_tbl`
--

INSERT INTO `payment_tbl` (`SN`, `AppNumber`, `Status`) VALUES
(2, 'YCT/CCS/18/32525', 1),
(3, 'YCT/CCS/18/20245', 1),
(4, 'YCT/CCS/18/67365', 1),
(5, 'YCT/CCS/18/44172', 1),
(6, 'YCT/CCS/18/62146', 1),
(7, 'YCT/CCS/18/00082', 1),
(8, 'YCT/CCS/18/00082', 1),
(9, 'YCT/CCS/18/00082', 1),
(10, 'YCT/CCS/18/20369', 1),
(11, 'YCT/CCS/18/39706', 1),
(12, 'YCT/CCS/18/16310', 1),
(13, 'YCT/CCS/18/53042', 1),
(14, 'YCT/CCS/18/65483', 1),
(15, 'YCT/CCS/18/09915', 1),
(16, 'YCT/CCS/18/06561', 1),
(17, 'YCT/CCS/18/54048', 1),
(18, 'YCT/CCS/18/01720', 1);

-- --------------------------------------------------------

--
-- Table structure for table `personalinfo_tbl`
--

CREATE TABLE `personalinfo_tbl` (
  `SN` int(255) NOT NULL,
  `AppNumber` varchar(255) NOT NULL,
  `FirstName` mediumtext NOT NULL,
  `OtherName` mediumtext NOT NULL,
  `SurName` mediumtext NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `DateOfBirth` date NOT NULL,
  `Email` varchar(255) NOT NULL,
  `PhoneNumber` varchar(255) NOT NULL,
  `State` varchar(255) NOT NULL,
  `Lga` varchar(255) NOT NULL,
  `Address` mediumtext NOT NULL,
  `ProgrammeType` mediumtext NOT NULL,
  `ProgrammeName` mediumtext NOT NULL,
  `AcademicSession` varchar(255) NOT NULL,
  `PgName` varchar(255) NOT NULL,
  `PgPhone` varchar(255) NOT NULL,
  `PgAddress` varchar(255) NOT NULL,
  `KinName` mediumtext NOT NULL,
  `KinPhone` varchar(255) NOT NULL,
  `KinAddress` mediumtext NOT NULL,
  `KinRelationship` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personalinfo_tbl`
--

INSERT INTO `personalinfo_tbl` (`SN`, `AppNumber`, `FirstName`, `OtherName`, `SurName`, `Gender`, `DateOfBirth`, `Email`, `PhoneNumber`, `State`, `Lga`, `Address`, `ProgrammeType`, `ProgrammeName`, `AcademicSession`, `PgName`, `PgPhone`, `PgAddress`, `KinName`, `KinPhone`, `KinAddress`, `KinRelationship`) VALUES
(2, 'YCT/CCS/18/32525', 'ASDA', 'DASA', 'ASAS', 'Female', '2018-08-15', 'ss@yaah.com', '33333333333', 'Gombe', 'Kaltungo', '5 IJAIYE ROAD OGBA', 'HND', 'Civil Engineering', '2018/2019', 'MR AND MRS AGBAJE WILLIAMS', '08012345675', '5 IJAIYE ROAD OGBA ESTATE', 'SALUA BABATUNDE', '08023432567', '5 IJAIYE ROAD OGBA ESTATE', 'Sister'),
(3, 'YCT/CCS/18/20245', 'ZCZCZ', 'ZXZXCZ', 'ZCZCZ', 'Female', '2018-08-16', 'zczb@kjcvdzs.com', '33333333345', 'Imo', 'Njaba', '5 YABA ROAD OYINGBO', 'HND', 'Civil Engineering', '2018/2019', 'MR AND MRS AGBAJE', '34244543323', '5 OYINGBA STREET', 'SEGUN SAROMI', '34553456755', '5 OYINGBA STREET', 'Nephew'),
(4, 'YCT/CCS/18/67365', 'MUKAILA', 'AZEEZ', 'HABIBAT', 'Male', '2018-08-16', 'segun@yahoo.com', '09088765432', 'FCT', 'Kuje', '5 IJAIYE ROAD', 'ND', 'Industrial Maintenance Engineering', '2018/2019', 'MR AND MRS HABIBAT', '09876545678', '5 IJAIYE ROAD', 'SULAIMAN HABIBAT', '45675434567', '5 IJAIYE ROAD', 'Brother'),
(5, 'YCT/CCS/18/44172', 'OLUSEGUN', 'ABDULAZEEZ', 'SAROMI', 'Male', '0000-00-00', 'segun_saromi@yahoo.com', '08129269607', '', '', '', 'HND', 'Electrical Engineering', '2018/2019', '', '', '', '', '', '', ''),
(6, 'YCT/CCS/18/62146', 'OLUSEGUN', 'ABDULAEEZ', 'SAROMI', 'Male', '2018-08-18', 'segun@yahoo.com', '23234234454', 'Adamawa', 'Numan', 'ADADADA', 'HND', 'Building Technology', '2018/2019', 'SASS', '12345676567', 'SDFAFDADA', 'ADADADA', '44444441234', 'ADADADS', 'Cousin'),
(7, 'YCT/CCS/18/00082', 'SAROMI', 'MICHEAL', 'BRIDGET', 'Male', '0000-00-00', 'segun_saromi@yahoo.com', '08022399063', '', '', '', 'HND', 'Building Technology', '2018/2019', '', '', '', '', '', '', ''),
(8, 'YCT/CCS/18/00082', 'SAROMI', 'MICHEAL', 'BRIDGET', 'Male', '0000-00-00', 'segun_saromi@yahoo.com', '08022399063', '', '', '', 'HND', 'Building Technology', '2018/2019', '', '', '', '', '', '', ''),
(9, 'YCT/CCS/18/00082', 'SAROMI', 'MICHEAL', 'BRIDGET', 'Male', '0000-00-00', 'segun_saromi@yahoo.com', '08022399063', '', '', '', 'HND', 'Building Technology', '2018/2019', '', '', '', '', '', '', ''),
(10, 'YCT/CCS/18/20369', 'OLUWASEGUN', 'ABDUL', 'SAROMI', 'Male', '0000-00-00', 'segun_saromi@yahoo.com', '08022399063', '', '', '', 'ND', 'Hospitality Management', '2018/2019', '', '', '', '', '', '', ''),
(11, 'YCT/CCS/18/39706', 'SAROMI', 'SEGUN', 'ABDUL', 'Male', '0000-00-00', 'segun@yahoo.com', '08022399063', '', '', '', 'ND', 'Business Administration', '2018/2019', '', '', '', '', '', '', ''),
(12, 'YCT/CCS/18/16310', 'SAROMI', 'SEGUN', 'ABDUL', 'Male', '0000-00-00', 'segunh@yahoo.com', '08022399063', '', '', '', 'ND', 'Hospitality Management', '2018/2019', '', '', '', '', '', '', ''),
(13, 'YCT/CCS/18/53042', 'SAROMI', 'SEGUN', 'ABDUL', 'Male', '0000-00-00', 'segun@yahoo.com', '08801234567', '', '', '', 'ND', 'Mechanical Engineering', '2018/2019', '', '', '', '', '', '', ''),
(14, 'YCT/CCS/18/65483', 'SAROMI', 'SEGUN', 'ABDUL', 'Male', '0000-00-00', 'segun@yahoo.com', '08022399063', '', '', '', 'ND', 'Industrial Design', '2018/2019', '', '', '', '', '', '', ''),
(15, 'YCT/CCS/18/09915', 'SAROMI', 'OLUSEGUN', 'ABDULAZEEZ', 'Male', '0000-00-00', 'segun@gmail.com', '08022399063', '', '', '', 'ND', 'Banking and Finance', '2018/2019', '', '', '', '', '', '', ''),
(16, 'YCT/CCS/18/06561', 'WILLIAMS', 'JOHN', 'SMITH', 'Male', '0000-00-00', 'segun@gamil.com', '08022399063', '', '', '', 'ND', 'Mechanical Engineering', '2018/2019', '', '', '', '', '', '', ''),
(17, 'YCT/CCS/18/54048', 'SAROMI', 'OLUSEGUN', 'ABDUL', 'Male', '0000-00-00', 'segun@yahoo.com', '08022399063', '', '', '', 'ND', 'Mechanical Engineering', '2018/2019', '', '', '', '', '', '', ''),
(18, 'YCT/CCS/18/01720', 'YEMISI', 'WERTY', 'USMAN', 'Female', '0000-00-00', 'usma@yahoo.com', '99887766555', '', '', '', 'ND', 'Industrial Maintenance Engineering', '2018/2019', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `submit_tbl`
--

CREATE TABLE `submit_tbl` (
  `SN` int(255) NOT NULL,
  `AppNumber` varchar(255) NOT NULL,
  `Payment` int(255) NOT NULL,
  `Information` int(255) NOT NULL,
  `Passport` int(255) NOT NULL,
  `Olevel` int(255) NOT NULL,
  `Verification` int(255) NOT NULL,
  `Submit` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `submit_tbl`
--

INSERT INTO `submit_tbl` (`SN`, `AppNumber`, `Payment`, `Information`, `Passport`, `Olevel`, `Verification`, `Submit`) VALUES
(1, 'YCT/CCS/18/32525', 1, 1, 1, 1, 1, 1),
(2, 'YCT/CCS/18/20245', 1, 1, 1, 1, 1, 1),
(3, 'YCT/CCS/18/67365', 1, 1, 1, 1, 1, 0),
(4, 'YCT/CCS/18/44172', 1, 0, 1, 1, 1, 0),
(5, 'YCT/CCS/18/62146', 1, 1, 1, 1, 1, 1),
(6, 'YCT/CCS/18/00082', 1, 0, 0, 0, 0, 0),
(7, 'YCT/CCS/18/00082', 1, 0, 0, 0, 0, 0),
(8, 'YCT/CCS/18/00082', 1, 0, 0, 0, 0, 0),
(9, 'YCT/CCS/18/20369', 1, 0, 0, 0, 0, 0),
(10, 'YCT/CCS/18/39706', 1, 0, 0, 0, 0, 0),
(11, 'YCT/CCS/18/16310', 1, 0, 0, 0, 0, 0),
(12, 'YCT/CCS/18/53042', 1, 0, 0, 0, 0, 0),
(13, 'YCT/CCS/18/65483', 1, 0, 0, 0, 0, 0),
(14, 'YCT/CCS/18/09915', 1, 0, 0, 0, 0, 0),
(15, 'YCT/CCS/18/06561', 1, 0, 1, 0, 0, 0),
(16, 'YCT/CCS/18/54048', 1, 0, 0, 0, 0, 0),
(17, 'YCT/CCS/18/01720', 1, 0, 1, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `userName` varchar(30) NOT NULL,
  `userEmail` varchar(60) NOT NULL,
  `userPass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `userName`, `userEmail`, `userPass`) VALUES
(4, 'YCT/CCS/18/32525', '33333333333', '5c80565db6f29da0b01aa12522c37b32f121cbe47a861ef7f006cb22922dffa1'),
(5, 'YCT/CCS/18/67365', '09088765432', '5c80565db6f29da0b01aa12522c37b32f121cbe47a861ef7f006cb22922dffa1'),
(6, 'YCT/CCS/18/20245', '33333333345', '5c80565db6f29da0b01aa12522c37b32f121cbe47a861ef7f006cb22922dffa1'),
(7, 'YCT/CCS/18/44172', '08129269607', '5c80565db6f29da0b01aa12522c37b32f121cbe47a861ef7f006cb22922dffa1'),
(8, 'YCT/CCS/18/62146', '23234234454', '5c80565db6f29da0b01aa12522c37b32f121cbe47a861ef7f006cb22922dffa1'),
(9, 'YCT/CCS/18/06561', '08022399063', '5c80565db6f29da0b01aa12522c37b32f121cbe47a861ef7f006cb22922dffa1'),
(12, 'YCT/CCS/18/01720', '99887766555', '5c80565db6f29da0b01aa12522c37b32f121cbe47a861ef7f006cb22922dffa1');

-- --------------------------------------------------------

--
-- Table structure for table `verification_tbl`
--

CREATE TABLE `verification_tbl` (
  `SN` int(255) NOT NULL,
  `AppNumber` varchar(255) NOT NULL,
  `OlevelNumber` int(255) NOT NULL,
  `Status` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `verification_tbl`
--

INSERT INTO `verification_tbl` (`SN`, `AppNumber`, `OlevelNumber`, `Status`) VALUES
(4, 'YCT/CCS/18/32525', 1, 1),
(5, 'YCT/CCS/18/67365', 1, 1),
(12, 'YCT/CCS/18/20245', 2, 1),
(13, 'YCT/CCS/18/44172', 1, 1),
(14, 'YCT/CCS/18/44172', 1, 1),
(15, 'YCT/CCS/18/62146', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academicinfo_tbl`
--
ALTER TABLE `academicinfo_tbl`
  ADD PRIMARY KEY (`SN`);

--
-- Indexes for table `application_tbl`
--
ALTER TABLE `application_tbl`
  ADD PRIMARY KEY (`SN`);

--
-- Indexes for table `olevel1info_tbl`
--
ALTER TABLE `olevel1info_tbl`
  ADD PRIMARY KEY (`SN`);

--
-- Indexes for table `olevel2info_tbl`
--
ALTER TABLE `olevel2info_tbl`
  ADD PRIMARY KEY (`SN`);

--
-- Indexes for table `passport_tbl`
--
ALTER TABLE `passport_tbl`
  ADD PRIMARY KEY (`SN`);

--
-- Indexes for table `payment_tbl`
--
ALTER TABLE `payment_tbl`
  ADD PRIMARY KEY (`SN`);

--
-- Indexes for table `personalinfo_tbl`
--
ALTER TABLE `personalinfo_tbl`
  ADD PRIMARY KEY (`SN`);

--
-- Indexes for table `submit_tbl`
--
ALTER TABLE `submit_tbl`
  ADD PRIMARY KEY (`SN`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`),
  ADD UNIQUE KEY `userEmail` (`userEmail`);

--
-- Indexes for table `verification_tbl`
--
ALTER TABLE `verification_tbl`
  ADD PRIMARY KEY (`SN`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `academicinfo_tbl`
--
ALTER TABLE `academicinfo_tbl`
  MODIFY `SN` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `application_tbl`
--
ALTER TABLE `application_tbl`
  MODIFY `SN` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `olevel1info_tbl`
--
ALTER TABLE `olevel1info_tbl`
  MODIFY `SN` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `olevel2info_tbl`
--
ALTER TABLE `olevel2info_tbl`
  MODIFY `SN` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `passport_tbl`
--
ALTER TABLE `passport_tbl`
  MODIFY `SN` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `payment_tbl`
--
ALTER TABLE `payment_tbl`
  MODIFY `SN` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `personalinfo_tbl`
--
ALTER TABLE `personalinfo_tbl`
  MODIFY `SN` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `submit_tbl`
--
ALTER TABLE `submit_tbl`
  MODIFY `SN` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `verification_tbl`
--
ALTER TABLE `verification_tbl`
  MODIFY `SN` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
