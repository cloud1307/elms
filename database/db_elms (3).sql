-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2021 at 01:04 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_elms`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_account`
--

CREATE TABLE `tbl_account` (
  `intAccID` int(11) NOT NULL,
  `intEmployee_ID` int(11) NOT NULL,
  `varUsername` varchar(255) NOT NULL,
  `varPassword` varchar(255) NOT NULL,
  `enumUser_Level` enum('System Admin','Admin Officer','HR Manager','Department Head','Employee') NOT NULL,
  `varQuestion1` varchar(255) NOT NULL,
  `varAnswer1` varchar(255) NOT NULL,
  `varQuestion2` varchar(255) NOT NULL,
  `varAnswer2` varchar(255) NOT NULL,
  `varEmailaddress` varchar(255) NOT NULL,
  `enumStatus` enum('Active','Inactive') NOT NULL,
  `dateCreated` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_account`
--

INSERT INTO `tbl_account` (`intAccID`, `intEmployee_ID`, `varUsername`, `varPassword`, `enumUser_Level`, `varQuestion1`, `varAnswer1`, `varQuestion2`, `varAnswer2`, `varEmailaddress`, `enumStatus`, `dateCreated`) VALUES
(1, 20201, 'jcoper', '1234', 'HR Manager', '', '', '', '', '', 'Active', '2021-02-01'),
(2, 20202, 'jmalcala', '1234', 'Department Head', '', '', '', '', '', 'Active', '2021-02-06'),
(3, 20203, 'rbayot', '1234', 'Admin Officer', '', '', '', '', '', 'Active', '2021-02-06'),
(4, 20204, 'canda', '1234', 'Employee', '', '', '', '', '', 'Active', '2021-02-06'),
(5, 20205, 'winnie roseabena', '1234', 'Employee', '', '', '', '', '', 'Active', '2021-02-06'),
(6, 20206, 'almamalabanan', '1234', 'Employee', '', '', '', '', '', 'Active', '2021-02-06');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_attendance`
--

CREATE TABLE `tbl_attendance` (
  `intAttendanceID` int(11) NOT NULL,
  `intEmployee_ID` int(11) NOT NULL,
  `AM_In` time NOT NULL,
  `Afternoon_Out` time NOT NULL,
  `Afternoon_In` time NOT NULL,
  `PM_Out` time NOT NULL,
  `Accumulated_Late` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_department`
--

CREATE TABLE `tbl_department` (
  `intDepartment_ID` int(11) NOT NULL,
  `varDepartment` varchar(255) NOT NULL,
  `enumStatus` enum('Active','Inactive') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_department`
--

INSERT INTO `tbl_department` (`intDepartment_ID`, `varDepartment`, `enumStatus`) VALUES
(1, 'ACCOUNTING', 'Active'),
(2, 'ADMIN OFFICE', 'Active'),
(3, 'ADMIN OFFICE - HALL OF JUSTICE', 'Active'),
(4, 'AGRICULTURE OFFICE', 'Active'),
(5, 'ASSESSORS OFFICE', 'Active'),
(6, 'BPLO', 'Active'),
(7, 'CBO', 'Active'),
(8, 'CCR', 'Active'),
(9, 'CCT', 'Active'),
(10, 'CENRO', 'Active'),
(11, 'CEO', 'Active'),
(12, 'CHARACTER OFFICE', 'Active'),
(13, 'CHO', 'Active'),
(14, 'COMELEC', 'Active'),
(15, 'COOPERATIVE OFFICE', 'Active'),
(16, 'CPDO', 'Active'),
(17, 'CSU', 'Active'),
(18, 'CSWDO', 'Active'),
(19, 'CTO', 'Active'),
(20, 'DOE', 'Active'),
(21, 'EEO/ CITY MARKET', 'Active'),
(22, 'FPTMNHS', 'Active'),
(23, 'GSO', 'Active'),
(24, 'HRMO', 'Active'),
(25, 'INTEGRATED CENTRAL TERMINAL', 'Active'),
(26, 'INTERNAL', 'Active'),
(27, 'LCR', 'Active'),
(28, 'LEGAL', 'Active'),
(29, 'LIBRARY', 'Active'),
(30, 'MAHOGANY MARKET', 'Active'),
(31, 'MO', 'Active'),
(32, 'NUTRITION OFFICE', 'Active'),
(33, 'ONT', 'Active'),
(34, 'PDAO', 'Active'),
(35, 'PICNIC GROVE', 'Active'),
(36, 'PIO', 'Active'),
(37, 'SP', 'Active'),
(38, 'TCCH/TICC', 'Active'),
(39, 'THRDC', 'Active'),
(40, 'TIPID IMPOK', 'Active'),
(41, 'TOPS (ADMIN CSU)', 'Active'),
(42, 'VMO', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employee`
--

CREATE TABLE `tbl_employee` (
  `intEmployee_Num` int(11) NOT NULL,
  `intEmployee_ID` int(11) NOT NULL,
  `varFirstname` varchar(255) NOT NULL,
  `varMiddlename` varchar(255) NOT NULL,
  `varLastname` varchar(255) NOT NULL,
  `enumGender` enum('Male','Female') NOT NULL,
  `varExtension_Name` varchar(255) NOT NULL,
  `enumCivil_Status` enum('Single','Married','Widowed','Divorce','Separated','Annulled') NOT NULL,
  `Birth_Date` date NOT NULL,
  `intPosition_ID` int(11) NOT NULL,
  `varAddress` varchar(255) NOT NULL,
  `intDepartment_ID` int(11) NOT NULL,
  `enumEmployment_Status` enum('Active','Retired','Resigned','Terminated') NOT NULL,
  `Employment_Date` date NOT NULL,
  `enumWork_Schedule` enum('Normal Work Time','Flexible Work Time') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_employee`
--

INSERT INTO `tbl_employee` (`intEmployee_Num`, `intEmployee_ID`, `varFirstname`, `varMiddlename`, `varLastname`, `enumGender`, `varExtension_Name`, `enumCivil_Status`, `Birth_Date`, `intPosition_ID`, `varAddress`, `intDepartment_ID`, `enumEmployment_Status`, `Employment_Date`, `enumWork_Schedule`) VALUES
(1, 20201, 'JUEL', 'DECENA', 'COPER', 'Male', '', 'Single', '1990-02-27', 19, 'TAGAYTAY CITY', 24, 'Active', '2018-08-01', 'Normal Work Time'),
(2, 20202, 'JOEL MARI', '', 'ALCALA', 'Male', '', '', '1990-04-25', 39, 'TAGAYTAY CITY', 1, 'Active', '2021-02-09', 'Normal Work Time'),
(3, 20203, 'RUMER', 'MALABANAN', 'BAYOT', 'Male', '', '', '2021-08-25', 72, '', 2, 'Active', '1970-01-01', 'Normal Work Time'),
(4, 20204, 'CHRISTIAN', 'RAMOS', 'ANDA', 'Male', '', 'Single', '1997-08-27', 2, 'TAGAYTAY CITY', 1, 'Active', '1970-01-01', ''),
(5, 20205, 'WINNIE ROSE', 'MALABANAN', 'ABENA', '', '', '', '1970-01-01', 14, 'TAGAYTAY CITY', 12, 'Active', '2021-02-03', 'Normal Work Time'),
(6, 20206, 'ALMA', '', 'MALABANAN', 'Female', '', 'Single', '2021-02-10', 25, 'TAGAYTAY CITY', 2, 'Active', '2021-02-11', 'Normal Work Time');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_holiday`
--

CREATE TABLE `tbl_holiday` (
  `intHoliday_ID` int(11) NOT NULL,
  `varHoliday_Description` varchar(255) NOT NULL,
  `Holiday_Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_holiday`
--

INSERT INTO `tbl_holiday` (`intHoliday_ID`, `varHoliday_Description`, `Holiday_Date`) VALUES
(1, 'PEOPLE POWER ANNIVERSARY', '2021-02-25'),
(2, 'MAUNDY THURSDAY', '2021-04-01'),
(3, 'GOOD FRIDAY', '2021-04-02');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_leave_application`
--

CREATE TABLE `tbl_leave_application` (
  `intApplication_ID` int(11) NOT NULL,
  `intEmployee_ID` int(11) NOT NULL,
  `intLeave_ID` int(11) NOT NULL,
  `Filling_Date` date NOT NULL,
  `varDescription_Leave` varchar(255) NOT NULL,
  `Inclusive_Date_From` date NOT NULL,
  `Inclusive_Date_To` date NOT NULL,
  `enumLeave_Process` enum('0','1','2','3','4') NOT NULL,
  `enumLeave_Status` enum('Pending','Approve','Disapprove') NOT NULL,
  `varRemarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_leave_application`
--

INSERT INTO `tbl_leave_application` (`intApplication_ID`, `intEmployee_ID`, `intLeave_ID`, `Filling_Date`, `varDescription_Leave`, `Inclusive_Date_From`, `Inclusive_Date_To`, `enumLeave_Process`, `enumLeave_Status`, `varRemarks`) VALUES
(1, 20204, 1, '2021-02-06', 'Vacation Leave', '2021-02-01', '2021-02-01', '4', 'Approve', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_leave_balance`
--

CREATE TABLE `tbl_leave_balance` (
  `intLeave_Balance` int(11) NOT NULL,
  `intLeave_ID` int(11) NOT NULL,
  `intEmployee_ID` int(11) NOT NULL,
  `Leave_Balance` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_leave_balance`
--

INSERT INTO `tbl_leave_balance` (`intLeave_Balance`, `intLeave_ID`, `intEmployee_ID`, `Leave_Balance`) VALUES
(1, 1, 20201, 50),
(2, 2, 20201, 20),
(3, 1, 20202, 50),
(4, 2, 20202, 30),
(5, 1, 20203, 49),
(6, 2, 20203, 10),
(7, 1, 20204, 47),
(8, 2, 20204, 10),
(9, 1, 20205, 0),
(10, 2, 20205, 0),
(11, 1, 20206, 0),
(12, 2, 20206, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_leave_deduction`
--

CREATE TABLE `tbl_leave_deduction` (
  `intLeave_Deduction_ID` int(11) NOT NULL,
  `intApplication_ID` int(11) NOT NULL,
  `Compute_Date` date NOT NULL,
  `doubleDeduction` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_leave_deduction`
--

INSERT INTO `tbl_leave_deduction` (`intLeave_Deduction_ID`, `intApplication_ID`, `Compute_Date`, `doubleDeduction`) VALUES
(1, 1, '2021-02-06', 1),
(2, 1, '2021-02-06', 1),
(3, 1, '2021-02-06', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_leave_type`
--

CREATE TABLE `tbl_leave_type` (
  `intLeave_ID` int(11) NOT NULL,
  `varLeave_Type` varchar(255) NOT NULL,
  `varLeave_Description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_leave_type`
--

INSERT INTO `tbl_leave_type` (`intLeave_ID`, `varLeave_Type`, `varLeave_Description`) VALUES
(1, 'VL', 'VACATION LEAVE'),
(2, 'SL', 'SICK LEAVE'),
(3, 'SP', 'SPECIAL PRIVILEGES'),
(4, 'SOLO PARENT', 'SOLO PARENT LEAVE'),
(5, 'MATERNITY', 'MATERNITY LEAVE'),
(6, 'PATERNITY', 'PATERNITY LEAVE');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_position`
--

CREATE TABLE `tbl_position` (
  `intPosition_ID` int(11) NOT NULL,
  `varPosition` varchar(255) NOT NULL,
  `varSalary_Grade` varchar(255) NOT NULL,
  `enumStep_Increment` enum('N/A','Step 1','Step 2','Step 3') NOT NULL,
  `decimalMonthly_Salary` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_position`
--

INSERT INTO `tbl_position` (`intPosition_ID`, `varPosition`, `varSalary_Grade`, `enumStep_Increment`, `decimalMonthly_Salary`) VALUES
(1, 'ADMINISTRATIVE AIDE I (UTILITY WORKER I)', '(01-1)', 'Step 1', '11432'),
(2, 'Administrative Aide I (Utility Worker I)', '(1-1)', 'Step 2', '11527'),
(3, 'Administrative Aide I (Utility Worker I)', '(1-1)', 'Step 3', '11624'),
(4, 'Administrative Aide III (Clerk I)', '(3-1)', 'Step 1', '11432'),
(5, 'Administrative Aide III (Clerk I)', '(3-1)', 'Step 2', '12893'),
(6, 'Administrative Aide III (Clerk I)', '(3-1)', 'Step 3', '12993'),
(7, 'Administrative Aide III (Driver I)', '(3-1)', 'Step 1', '12893'),
(8, 'Administrative Aide III (Driver I)', '(3-1)', 'Step 2', '12993'),
(9, 'Administrative Aide III (Utility Worker II)', '(3-1)', 'Step 1', '12893'),
(10, 'Administrative Aide III (Utility Worker II)', '(3-1)', 'Step 2', '12993'),
(11, 'Administrative Aide IV (Clerk II)', '(4-1)', 'Step 1', '13680'),
(12, 'Administrative Aide IV (Driver II)', '(4-1)', 'Step 1', '13680'),
(13, 'Administrative Aide VI (Clerk III)', '(6-1)', 'Step 1', '15390'),
(14, 'Administrative Assistant I (bookbinder III)', '(7-1)', 'Step 1', '16320'),
(15, 'Administrative Assistant II (Administrative Assistant)', '(8-1)', 'Step 1', '17338'),
(16, 'Administrative Assistant II (Data Controller II)', '(8-1)', 'Step 1', '17338'),
(17, 'Administrative Assistant V (Data Controller III)', '(11-1)', 'Step 1', '22683'),
(18, 'Administrative Officer I', '(11-1)', 'Step 1', '22683'),
(19, 'HUMAN RESOURCE MANAGEMENT OFFICER', '(10-1)', 'Step 1', '100145'),
(20, 'Administrative Officer II (Administrative Officer I)', '(11-1)', 'Step 1', '22683'),
(21, 'Administrative Officer IV (Management and Audit Analyst II)', '(15-1)', 'Step 1', '31896'),
(22, 'Administrative Officer V (Public Relation Officer III)', '(18-1)', 'Step 1', '41497'),
(23, 'Attorney III', '(21-1)', 'Step 1', '57856'),
(24, 'Attorney V', '(25-1)', 'Step 1', '93942'),
(25, 'City Mayor II', '(30-1)', 'Step 1', '173081'),
(26, 'City Public Information Officer', '(25-1)', 'Step 1', '93942'),
(27, 'City Social Welfare & Development Officer I', '(25-1)', 'Step 1', '93942'),
(28, 'City Vice Mayor II', '(26-1)', 'Step 1', '118893'),
(29, 'Civil Defense Assistant', '(8-1)', 'Step 1', '17338'),
(30, 'Community Affairs Assistant II', '(8-1)', 'Step 1', '17496'),
(31, 'Community Affairs Officer I', '(11-1)', 'Step 1', '22683'),
(32, 'Computer Programmer', '(15-1)', 'Step 1', '31896'),
(33, 'Executive Assistant I', '(14-1)', 'Step 1', '29259'),
(34, 'Executive Assistant II (B)', '(17-1)', 'Step 1', '37987'),
(35, 'Executive Assistant II (B) ', '(17-1)', 'Step 1', '37987'),
(36, 'Executive Assistant III', '(20-1)', 'Step 1', '51538'),
(37, 'Executive Assistant IV', '(22-1)', 'Step 1', '64994'),
(38, 'Executive Assistant to the Vice Mayor', '(14-1)', 'Step 1', '29259'),
(39, 'CITY ACCOUNTANT I', '(24-1)', 'Step 1', '82405'),
(40, 'Housing and Homesite Regulation Assistant', '(8-1)', 'Step 1', '17338'),
(41, 'Housing and Homesite Regulation Officer IV', '(19-1)', 'Step 1', '45897'),
(42, 'Licensing Officer II', '(15-1)', 'Step 1', '31896'),
(43, 'Licensing Officer III', '(18-1)', 'Step 1', '41497'),
(44, 'Local Disaster Risk Reduction and Management Asst.', '(8-1)', 'Step 1', '17338'),
(45, 'Local Disaster Risk Reduction and Management Officer I', '(11-1)', 'Step 1', '22683'),
(46, 'Local Disaster Risk Reduction and Management Officer IV', '(22-1)', 'Step 1', '64994'),
(47, 'Local Disaster Risk Reduction Mgt. Officer V', '(24-1)', 'Step 1', '82405'),
(48, 'Local Legislative Staff Asst. II', '(8-1)', 'Step 1', '17338'),
(49, 'Market Inspector II', '(8-1)', 'Step 1', '17338'),
(50, 'Market Supervisor I', '(10-1)', 'Step 1', '20313'),
(51, 'Market Supervisor II', '(14-1)', 'Step 1', '29259'),
(52, 'Market Supervisor III', '(18-1)', 'Step 1', '41497'),
(53, 'Meat Inspector II', '(8-1)', 'Step 1', '17338'),
(54, 'Parking Aide I', '(2-1)', 'Step 1', '12151'),
(55, 'Parking Aide II', '(4-1)', 'Step 1', '13680'),
(56, 'Parking Aide III', '(6-1)', 'Step 1', '15390'),
(57, 'Parking Aide IV', '(7-1)', 'Step 1', '16320'),
(58, 'Private Secretary I', '(11-1)', 'Step 1', '22683'),
(59, 'Private Secretary II', '(15-1)', 'Step 1', '31896'),
(60, 'Security  Agent II', '(10-1)', 'Step 1', '20145'),
(61, 'Security Guard I', '(3-1)', 'Step 1', '12893'),
(62, 'Security Guard I', '(3-1)', 'Step 2', '12993'),
(63, 'Security Guard II', '(5-1)', 'Step 1', '14511'),
(64, 'Security Guard III', '(8-1)', 'Step 1', '17338'),
(65, 'Social Welfare Aide', '(4-1)', 'Step 1', '13680'),
(66, 'Social Welfare Aide ', '(4-1)', 'Step 1', '13891'),
(67, 'Social Welfare Assistant ', '(8-1)', 'Step 1', '17338'),
(68, 'Social Welfare Officer I', '(11-1)', 'Step 1', '22953'),
(69, 'Social Welfare Officer II', '(15-1)', 'Step 1', '32255'),
(70, 'Social Welfare Officer III', '(18-1)', 'Step 1', '41497'),
(71, 'Social Welfare Officer IV', '(22-1)', 'Step 1', '64994'),
(72, 'CITY ADMINISTRATOR', '(22-1)', 'Step 1', '120123'),
(73, 'Traffic Aide I', '(3-1)', 'Step 1', '11432'),
(74, 'Traffic Aide I', '(3-1)', 'Step 2', '12993'),
(75, 'Traffic Aide II', '(5-1)', 'Step 1', '14511'),
(76, 'Traffic Aide III', '(7-1)', 'Step 1', '16320');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_work_schedule`
--

CREATE TABLE `tbl_work_schedule` (
  `intWorkSched_ID` int(11) NOT NULL,
  `Inclusive_Time_From` time NOT NULL,
  `Inclusive_Time_To` time NOT NULL,
  `enumSchedule_Type` enum('Normal Work Time','Flexible Work Time') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_work_schedule`
--

INSERT INTO `tbl_work_schedule` (`intWorkSched_ID`, `Inclusive_Time_From`, `Inclusive_Time_To`, `enumSchedule_Type`) VALUES
(1, '08:00:00', '17:00:00', 'Flexible Work Time'),
(2, '20:00:00', '20:00:00', 'Normal Work Time');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_account`
--
ALTER TABLE `tbl_account`
  ADD PRIMARY KEY (`intAccID`);

--
-- Indexes for table `tbl_attendance`
--
ALTER TABLE `tbl_attendance`
  ADD PRIMARY KEY (`intAttendanceID`);

--
-- Indexes for table `tbl_department`
--
ALTER TABLE `tbl_department`
  ADD PRIMARY KEY (`intDepartment_ID`);

--
-- Indexes for table `tbl_employee`
--
ALTER TABLE `tbl_employee`
  ADD PRIMARY KEY (`intEmployee_Num`);

--
-- Indexes for table `tbl_holiday`
--
ALTER TABLE `tbl_holiday`
  ADD PRIMARY KEY (`intHoliday_ID`);

--
-- Indexes for table `tbl_leave_application`
--
ALTER TABLE `tbl_leave_application`
  ADD PRIMARY KEY (`intApplication_ID`);

--
-- Indexes for table `tbl_leave_balance`
--
ALTER TABLE `tbl_leave_balance`
  ADD PRIMARY KEY (`intLeave_Balance`);

--
-- Indexes for table `tbl_leave_deduction`
--
ALTER TABLE `tbl_leave_deduction`
  ADD PRIMARY KEY (`intLeave_Deduction_ID`);

--
-- Indexes for table `tbl_leave_type`
--
ALTER TABLE `tbl_leave_type`
  ADD PRIMARY KEY (`intLeave_ID`);

--
-- Indexes for table `tbl_position`
--
ALTER TABLE `tbl_position`
  ADD PRIMARY KEY (`intPosition_ID`);

--
-- Indexes for table `tbl_work_schedule`
--
ALTER TABLE `tbl_work_schedule`
  ADD PRIMARY KEY (`intWorkSched_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_account`
--
ALTER TABLE `tbl_account`
  MODIFY `intAccID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_attendance`
--
ALTER TABLE `tbl_attendance`
  MODIFY `intAttendanceID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_department`
--
ALTER TABLE `tbl_department`
  MODIFY `intDepartment_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `tbl_employee`
--
ALTER TABLE `tbl_employee`
  MODIFY `intEmployee_Num` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_holiday`
--
ALTER TABLE `tbl_holiday`
  MODIFY `intHoliday_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_leave_application`
--
ALTER TABLE `tbl_leave_application`
  MODIFY `intApplication_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_leave_balance`
--
ALTER TABLE `tbl_leave_balance`
  MODIFY `intLeave_Balance` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_leave_deduction`
--
ALTER TABLE `tbl_leave_deduction`
  MODIFY `intLeave_Deduction_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_leave_type`
--
ALTER TABLE `tbl_leave_type`
  MODIFY `intLeave_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_position`
--
ALTER TABLE `tbl_position`
  MODIFY `intPosition_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `tbl_work_schedule`
--
ALTER TABLE `tbl_work_schedule`
  MODIFY `intWorkSched_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
