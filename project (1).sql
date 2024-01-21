-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Jun 20, 2021 at 06:53 AM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `bloodreq`
--

DROP TABLE IF EXISTS `bloodreq`;
CREATE TABLE IF NOT EXISTS `bloodreq` (
  `First Name` char(30) NOT NULL,
  `Last Name` char(30) NOT NULL,
  `DOB` date NOT NULL,
  `Blood_Group` char(5) NOT NULL,
  `Unit_needed` int(5) NOT NULL,
  `Hospital_name` char(80) NOT NULL,
  `H_Address` char(80) NOT NULL,
  `City` char(30) NOT NULL,
  `State` char(30) NOT NULL,
  `Mobile No` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Aadhar No` varchar(100) NOT NULL,
  `req_id` int(255) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`req_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `bloodreq`
--

INSERT INTO `bloodreq` (`First Name`, `Last Name`, `DOB`, `Blood_Group`, `Unit_needed`, `Hospital_name`, `H_Address`, `City`, `State`, `Mobile No`, `Aadhar No`, `req_id`) VALUES
('demo', 'demo', '1998-02-01', 'B+', 300, 'seva h', 'near dadar', 'Mumbai', 'Maharashtra', '2147483647', '2147483647', 1),
('karan', 'ahuja', '2005-01-05', 'O+', 300, 'navjeevan', 'aurora boys hostel', 'Pune', 'Maharashtra', '9112111375', '121100223003', 2),
('manan', 'ahuja', '2005-01-05', 'O+', 300, 'navjeevan', 'aurora boys hostel', 'Pune', 'Maharashtra', '9112111375', '787820003115', 3),
('govind', 'kamat', '1986-12-12', 'B+', 500, 'kem hospital', 'shiavajinagar', 'Pune', 'Maharashtra', '8465321250', '362515426235', 4),
('nalvesh', 'mahajan', '2021-06-23', 'A+', 200, 'mn', 'aurora boys hostel', 'Pune', 'Maharashtra', '09112111375', '521457870202', 7);

-- --------------------------------------------------------

--
-- Table structure for table `registered`
--

DROP TABLE IF EXISTS `registered`;
CREATE TABLE IF NOT EXISTS `registered` (
  `did` int(11) NOT NULL AUTO_INCREMENT,
  `Donor's First Name` char(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Donor's Last Name` char(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Gender` char(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `DOB` date NOT NULL,
  `Blood_Group` char(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Aadhar_No` varchar(100) NOT NULL,
  `Mobile No` varchar(15) NOT NULL,
  `E-Mail Id` char(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Address` char(80) NOT NULL,
  `City` char(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `State` char(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`did`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `registered`
--

INSERT INTO `registered` (`did`, `Donor's First Name`, `Donor's Last Name`, `Gender`, `DOB`, `Blood_Group`, `Aadhar_No`, `Mobile No`, `E-Mail Id`, `Address`, `City`, `State`) VALUES
(1, 'nalvesh', 'mahajan', 'male', '2000-02-23', 'B+', '413017120826', '0112111375', 'demo@gmail.com', 'aurora boys hostel', 'Pune', 'Maharashtra');

-- --------------------------------------------------------

--
-- Table structure for table `upcamps`
--

DROP TABLE IF EXISTS `upcamps`;
CREATE TABLE IF NOT EXISTS `upcamps` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `organiser` char(80) NOT NULL,
  `contact` char(80) NOT NULL,
  `address` char(80) NOT NULL,
  `city` char(25) NOT NULL,
  `state` char(20) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `upcamps`
--

INSERT INTO `upcamps` (`uid`, `organiser`, `contact`, `address`, `city`, `state`, `date`, `time`) VALUES
(1, 'INDIRA GROUP OF EDUCATION', 'iccs@gmail.com / 0254-89898', 'dhruv, iccs campus mumbai banglore highway, tathawade', 'pune', 'maharashtra', '2021-06-11', '09:00:00'),
(3, 'ABVP PUNE', 'abvppune.org / 8877889900', 'Fergusson college shivaginagar', 'pune', 'maharashtra', '2021-07-01', '10:00:00'),
(4, 'Marathwada Mirta Mandal college of commerce', 'mmcc.org/ mmccpune.info', 'fc road deccan', 'pune', 'maharashtra', '2021-07-02', '09:00:00'),
(5, 'life foundation', 'lifefoundation.info', 'life foundation dadar east', 'mumbai', 'maharashtra', '2021-05-20', '08:00:00'),
(6, 'sanjivani hospital', 'sanjivanihospital@gmail.com / 9098897766', 'lower parel old gujrati colony', 'mumbai', 'maharashtra', '2021-05-27', '07:00:00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
