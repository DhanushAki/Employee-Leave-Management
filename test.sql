-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2019 at 09:51 AM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `updationDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `UserName`, `Password`, `updationDate`) VALUES
(1, 'admin', 'admin', '2019-07-12 05:20:58');

-- --------------------------------------------------------

--
-- Table structure for table `contact_details`
--

CREATE TABLE `contact_details` (
  `empid` varchar(20) CHARACTER SET utf8 NOT NULL,
  `homenumber` decimal(15,0) NOT NULL,
  `emailid` varchar(20) CHARACTER SET utf8 NOT NULL,
  `mobilenumber` decimal(15,0) NOT NULL,
  `address1` varchar(15) CHARACTER SET utf8 NOT NULL,
  `address2` varchar(15) CHARACTER SET utf8 NOT NULL,
  `city` varchar(20) CHARACTER SET utf8 NOT NULL,
  `state` varchar(20) CHARACTER SET utf8 NOT NULL,
  `permanentaddress` varchar(5) CHARACTER SET utf8 NOT NULL,
  `permanentaddr1` varchar(20) CHARACTER SET utf8 NOT NULL,
  `permanentaddr2` varchar(20) CHARACTER SET utf8 NOT NULL,
  `permanentcity` varchar(20) CHARACTER SET utf8 NOT NULL,
  `permanentstate` varchar(20) CHARACTER SET utf8 NOT NULL,
  `relationship` varchar(10) CHARACTER SET utf8 NOT NULL,
  `firstname` varchar(10) CHARACTER SET utf8 NOT NULL,
  `surname` varchar(10) CHARACTER SET utf8 NOT NULL,
  `contactnumber` decimal(15,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_details`
--

INSERT INTO `contact_details` (`empid`, `homenumber`, `emailid`, `mobilenumber`, `address1`, `address2`, `city`, `state`, `permanentaddress`, `permanentaddr1`, `permanentaddr2`, `permanentcity`, `permanentstate`, `relationship`, `firstname`, `surname`, `contactnumber`) VALUES
('BMS0001', '3545665', ' 64@gmail.com', '45656767', '#676/34', '2gbg hgb', 'fgfbf', 'fbgfvb', 'yes', '', '', '', '', 'father', 'Tywin', 'Lannister', '96574357'),
('BMS0002', '0', 'asa', '0', 'as', 'asas', 'as', 'asasa', 'yes', 'as', 'asas', 'as', 'asasa', 'father', 'as', 'asas', '0'),
('BMS0003', '132344', '46576776@gghg.vbg', '7894561230', 'vidyaranya', 'fdfdfd', 'Mysore', 'dfsv', 'no', 'fgfbvf', 'dfsfcd', 'fvcv', 'gvfdvgfgv', 'mother', 'fvfcvcf', 'fvfcv', '56577');

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `empid` varchar(20) CHARACTER SET utf8 NOT NULL,
  `10th` blob NOT NULL,
  `12th` blob NOT NULL,
  `grad` blob NOT NULL,
  `postgrad` blob NOT NULL,
  `resume` blob NOT NULL,
  `experience` blob NOT NULL,
  `aadhar` blob NOT NULL,
  `pancard` blob NOT NULL,
  `certificate` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `experience_details`
--

CREATE TABLE `experience_details` (
  `empid` varchar(20) CHARACTER SET utf8mb4 NOT NULL,
  `companyname` varchar(20) CHARACTER SET utf8 NOT NULL,
  `companyaddress` varchar(30) CHARACTER SET utf8 NOT NULL,
  `dateofjoin` date NOT NULL,
  `dateofrelieving` date NOT NULL,
  `designation` varchar(20) CHARACTER SET utf8 NOT NULL,
  `jobtype` varchar(20) CHARACTER SET utf8 NOT NULL,
  `reason` varchar(30) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `experience_details`
--

INSERT INTO `experience_details` (`empid`, `companyname`, `companyaddress`, `dateofjoin`, `dateofrelieving`, `designation`, `jobtype`, `reason`) VALUES
('BMS0002', 'blue', 'mysore', '2019-01-01', '2019-07-11', 'CEO', 'Full time', 'less salary');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `project_worked` varchar(15) NOT NULL,
  `duration` varchar(10) NOT NULL,
  `feedback` varchar(100) NOT NULL,
  `position` varchar(20) NOT NULL,
  `rating` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`project_worked`, `duration`, `feedback`, `position`, `rating`) VALUES
('Feedback Info', '1 Months', 'Very Good					', 'Project Manager', 4),
('Database Retrie', '2 Months', 'Awesome					\r\n					', 'Team Leader', 3.5),
('Work Report', '3 Months', 'Good						\r\n			', 'Data Analyst', 4.5),
('web developemen', '1', 'asdf								', 'manager', 4);

-- --------------------------------------------------------

--
-- Table structure for table `leaveform`
--

CREATE TABLE `leaveform` (
  `ID` varchar(256) NOT NULL,
  `Name` varchar(256) NOT NULL,
  `supervisor` varchar(30) NOT NULL,
  `leaveReason` varchar(256) NOT NULL,
  `reasonDescription` varchar(256) NOT NULL,
  `leaveFrom` date NOT NULL,
  `leaveTo` date NOT NULL,
  `noOfDays` int(11) NOT NULL,
  `halfDay` varchar(15) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leaveform`
--

INSERT INTO `leaveform` (`ID`, `Name`, `supervisor`, `leaveReason`, `reasonDescription`, `leaveFrom`, `leaveTo`, `noOfDays`, `halfDay`, `status`) VALUES
('BMS0001', 'DHa', 'sahana', 'casual', 'very sick', '2019-07-15', '2019-07-16', 1, 'morning', 1),
('BMS0002', 'keertiraj', 'sahana', 'sick', 'high fever', '2019-07-12', '2019-07-13', 1, '', 2);

-- --------------------------------------------------------

--
-- Table structure for table `personal_details`
--

CREATE TABLE `personal_details` (
  `empid` varchar(10) CHARACTER SET utf8mb4 NOT NULL,
  `password` varchar(100) NOT NULL,
  `firstname` varchar(20) CHARACTER SET utf8 NOT NULL,
  `lastname` varchar(20) CHARACTER SET utf8 NOT NULL,
  `Department` varchar(100) NOT NULL,
  `dateofbirth` date NOT NULL,
  `nationality` varchar(10) CHARACTER SET utf8 NOT NULL,
  `gender` varchar(100) CHARACTER SET utf8 NOT NULL,
  `maritalstatus` varchar(10) CHARACTER SET utf8 NOT NULL,
  `education` varchar(20) CHARACTER SET utf8 NOT NULL,
  `specifysubject` varchar(30) CHARACTER SET utf8 NOT NULL,
  `certification` varchar(50) CHARACTER SET utf8 NOT NULL,
  `experience` varchar(5) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personal_details`
--

INSERT INTO `personal_details` (`empid`, `password`, `firstname`, `lastname`, `Department`, `dateofbirth`, `nationality`, `gender`, `maritalstatus`, `education`, `specifysubject`, `certification`, `experience`) VALUES
('BMS0001', 'pass', 'Anirudha', 'Beedikar', 'Information Technology', '0000-00-00', 'USA', 'Male', 'single', 'graduation', 'ISE', '', 'no'),
('BMS0002', 'pass', 'Keertiraj', 'Malik', 'Information Technology', '2019-07-01', 'India', 'male', 'single', 'graduation', 'science', 'no', 'no'),
('BMS0003', 'dha', 'Dhanush', 'B', 'Information Technology', '0000-00-00', 'INDIA', 'Male', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `profile_settings`
--

CREATE TABLE `profile_settings` (
  `empid` varchar(20) CHARACTER SET utf8 NOT NULL,
  `secretq1` varchar(20) CHARACTER SET utf8 NOT NULL,
  `secreta1` varchar(20) CHARACTER SET utf8 NOT NULL,
  `secretq2` varchar(20) CHARACTER SET utf8 NOT NULL,
  `secreta2` varchar(20) CHARACTER SET utf8 NOT NULL,
  `profilelink1` varchar(50) CHARACTER SET utf8 NOT NULL,
  `profilelink2` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile_settings`
--

INSERT INTO `profile_settings` (`empid`, `secretq1`, `secreta1`, `secretq2`, `secreta2`, `profilelink1`, `profilelink2`) VALUES
('BMS0002', 'Vehicle_Number', '12456', 'Pet_Name', 'ani', 'as', 'as');

-- --------------------------------------------------------

--
-- Table structure for table `statistics`
--

CREATE TABLE `statistics` (
  `project_name` varchar(15) NOT NULL,
  `description` varchar(200) NOT NULL,
  `start` date NOT NULL,
  `endd` date NOT NULL,
  `days` bigint(255) NOT NULL,
  `progress` double NOT NULL,
  `remaining` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `statistics`
--

INSERT INTO `statistics` (`project_name`, `description`, `start`, `endd`, `days`, `progress`, `remaining`) VALUES
('web', 'asdfggh', '2019-07-01', '2019-07-07', 2, 8, 92);

-- --------------------------------------------------------

--
-- Table structure for table `tbldepartments`
--

CREATE TABLE `tbldepartments` (
  `id` int(11) NOT NULL,
  `DepartmentName` varchar(150) DEFAULT NULL,
  `DepartmentShortName` varchar(100) NOT NULL,
  `DepartmentCode` varchar(50) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbldepartments`
--

INSERT INTO `tbldepartments` (`id`, `DepartmentName`, `DepartmentShortName`, `DepartmentCode`, `CreationDate`) VALUES
(1, 'Human Resource', 'HR', 'HR001', '2017-11-01 07:16:25'),
(2, 'Information Technology', 'IT', 'IT001', '2017-11-01 07:19:37'),
(3, 'Operations', 'OP', 'OP1', '2017-12-02 21:28:56');

-- --------------------------------------------------------

--
-- Table structure for table `worksubmission`
--

CREATE TABLE `worksubmission` (
  `sr_no` int(11) NOT NULL,
  `emp_id` varchar(20) NOT NULL,
  `currentProject` varchar(256) NOT NULL,
  `leader` varchar(256) NOT NULL,
  `workAssigned` varchar(256) NOT NULL,
  `completedCount` int(20) NOT NULL,
  `remainingCount` int(20) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `worksubmission`
--

INSERT INTO `worksubmission` (`sr_no`, `emp_id`, `currentProject`, `leader`, `workAssigned`, `completedCount`, `remainingCount`, `date`) VALUES
(1, '123', 'web', 'sahana', 'web Design', 5, 0, '2019-06-28 14:45:21'),
(2, '123', 'web', 'sahana', 'web Design', 5, 0, '2019-06-28 14:48:11'),
(3, '123', 'javascript', 'shana', 'the same above one', 2, 3, '2019-06-28 14:48:50'),
(4, '123', 'web Design', 'xyz', 'application', 5, 5, '2019-06-28 14:50:09'),
(5, '123', 'web', 'sahana', 'form', 2, 3, '2019-06-28 15:04:55'),
(6, '123', 'web', 'sahana', 'form', 2, 3, '2019-07-01 10:59:18'),
(7, '1223', 'nvhfc', 'sahana', 'form', 2, 3, '2019-07-02 14:38:12'),
(8, '1223', 'web', 'sahana', 'form', 2, 3, '2019-07-02 14:58:33'),
(9, '123', 'nvhfc', 'sahana', 'form', 2, 3, '2019-07-02 15:07:21'),
(10, '123', 'nvhfc', 'sahana', 'form', 2, 3, '2019-07-02 15:07:31'),
(11, '1223', 'nvhfc', 'sahana', 'form', 2, 3, '2019-07-02 15:11:11'),
(12, '1223', 'nvhfc', 'sahana', 'form', 2, 3, '2019-07-02 15:14:06'),
(13, '1212', 'asd', 'asd', 'ads', 12, 23, '2019-07-02 15:54:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_details`
--
ALTER TABLE `contact_details`
  ADD PRIMARY KEY (`empid`),
  ADD UNIQUE KEY `emailid` (`emailid`),
  ADD UNIQUE KEY `mobilenumber` (`mobilenumber`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`empid`);

--
-- Indexes for table `experience_details`
--
ALTER TABLE `experience_details`
  ADD PRIMARY KEY (`empid`);

--
-- Indexes for table `leaveform`
--
ALTER TABLE `leaveform`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `personal_details`
--
ALTER TABLE `personal_details`
  ADD PRIMARY KEY (`empid`);

--
-- Indexes for table `profile_settings`
--
ALTER TABLE `profile_settings`
  ADD PRIMARY KEY (`empid`);

--
-- Indexes for table `tbldepartments`
--
ALTER TABLE `tbldepartments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `worksubmission`
--
ALTER TABLE `worksubmission`
  ADD PRIMARY KEY (`sr_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbldepartments`
--
ALTER TABLE `tbldepartments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `worksubmission`
--
ALTER TABLE `worksubmission`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
