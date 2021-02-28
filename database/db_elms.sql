-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2021 at 03:33 AM
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
  `enumUser_Level` enum('System Admin','Admin Officer','HR-Staff','Department Head','Employee') NOT NULL,
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
(1, 20201, 'jcoper', '1234', 'HR-Staff', 'What was your childhood nickname?', 'ss', '', '', 'juelcoper@yahoo.com', 'Active', '2021-01-04'),
(2, 20202, 'rvaguido', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(3, 20203, 'rbalcantara', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(4, 20204, 'ajcalcazar', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(5, 20205, 'zsalcazar', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(6, 20206, 'emalega', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(7, 20207, 'vaalegre', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(8, 20208, 'jralferez', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(9, 20209, 'gsaalvarez', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(10, 202010, 'mmambat', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(11, 202011, 'daambion', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(12, 202012, 'laambion', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(13, 202013, 'pgambion', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(14, 202014, 'aaambonan', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(15, 202015, 'esamora', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(16, 202016, 'jjamparo', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(17, 202017, 'apanacay', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(18, 202018, 'amanacay', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(19, 202019, 'lbanacay', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(20, 202020, 'cfanarna', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(21, 202021, 'abangcaya', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(22, 202022, 'faangcaya', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(23, 202023, 'iaangcaya', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(24, 202024, 'jvangcaya', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(25, 202025, 'jaangcaya', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(26, 202026, 'mjangcaya', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(27, 202027, 'ogangcaya', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(28, 202028, 'rpangcaya', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(29, 202029, 'przaquino', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(30, 202030, 'maarcullo', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(31, 202031, 'adsauditor', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(32, 202032, 'jmaycardo', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(33, 202033, 'tcbaas', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(34, 202034, 'pbbanico', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(35, 202035, 'lqbaurile', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(36, 202036, 'fcbatino', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(37, 202037, 'lgbaybay', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(38, 202038, 'lbbaybay', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(39, 202039, 'mprbaybay', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(40, 202040, 'mrabaybay', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(41, 202041, 'mbaybay', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(42, 202042, 'lgbayhon', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(43, 202043, 'ggbayhon', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(44, 202044, 'vbayhon', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(45, 202045, 'ecbayla', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(46, 202046, 'adbayot', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(47, 202047, 'apbayot', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(48, 202048, 'ebbayot', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(49, 202049, 'mmbayot', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(50, 202050, 'rmbayot', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(51, 202051, 'mpbernaldez', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(52, 202052, 'jgbiscocho', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(53, 202053, 'epbofill', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(54, 202054, 'egborja', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(55, 202055, 'nmborja', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(56, 202056, 'mambugarin', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(57, 202057, 'rjbbungcasan', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(58, 202058, 'caburazon', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(59, 202059, 'afcacao', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(60, 202060, 'apcalanog', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(61, 202061, 'afcaraan', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(62, 202062, 'fmcaraan', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(63, 202063, 'ftcastillo', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(64, 202064, 'egchacon', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(65, 202065, 'hrcoleto', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(66, 202066, 'fbcortez', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(67, 202067, 'mnacortez', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(68, 202068, 'nhcortez', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(69, 202069, 'mvmcosme', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(70, 202070, 'sccostante ', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(71, 202071, 'nccotoner', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(72, 202072, 'tucrizaldo', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(73, 202073, 'macruzada', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(74, 202074, 'jntde castro', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(75, 202075, 'jmde castro', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(76, 202076, 'lrde grano', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(77, 202077, 'mefde grano', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(78, 202078, 'ragde guzman', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(79, 202079, 'medde ocampo', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(80, 202080, 'mbde ocampo', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(81, 202081, 'vvde sagun', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(82, 202082, 'mdde villa', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(83, 202083, 'ogde villa', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(84, 202084, 'ede luna', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(85, 202085, 'ebdel mundo', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(86, 202086, 'hcdel mundo', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(87, 202087, 'radel mundo', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(88, 202088, 'mcpdela gracia', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(89, 202089, 'acdela pe?a', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(90, 202090, 'ncdelfino', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(91, 202091, 'mdigo', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(92, 202092, 'acdimapilis', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(93, 202093, 'aadimapilis', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(94, 202094, 'amdimapilis', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(95, 202095, 'dcdimapilis', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(96, 202096, 'eddimapilis', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(97, 202097, 'esdimapilis', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(98, 202098, 'jtdimapilis', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(99, 202099, 'jpdimapilis', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(100, 2020100, 'mtsdimapilis', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(101, 2020101, 'vtdimapilis', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(102, 2020102, 'gcdimaranan', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(103, 2020103, 'pfdimaranan', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(104, 2020104, 'rrdimaranan', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(105, 2020105, 'rgdimaranan', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(106, 2020106, 'pcedingo', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(107, 2020107, 'rdisepeda', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(108, 2020108, 'zdoctora', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(109, 2020109, 'mpdognidon', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(110, 2020110, 'djegasan', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(111, 2020111, 'mtemelo', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(112, 2020112, 'laenmacio', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(113, 2020113, 'epenriquez', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(114, 2020114, 'rperidao', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(115, 2020115, 'emescamillas', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(116, 2020116, 'rmespiritu', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(117, 2020117, 'bapestigoy', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(118, 2020118, 'muestrangco', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(119, 2020119, 'nsevangelista', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(120, 2020120, 'avferma', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(121, 2020121, 'acferma', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(122, 2020122, 'miferma', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(123, 2020123, 'mvdferma', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(124, 2020124, 'rferma', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(125, 2020125, 'aflavier', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(126, 2020126, 'mggabeja', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(127, 2020127, 'jbgalang', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(128, 2020128, 'hmgarcia', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(129, 2020129, 'djgatpandan', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(130, 2020130, 'nmgatpandan', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(131, 2020131, 'emgomez', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(132, 2020132, 'mgpgua?ezo', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(133, 2020133, 'mapgua?ezo', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(134, 2020134, 'lcgutierrez', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(135, 2020135, 'jlhadap', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(136, 2020136, 'mahapita', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(137, 2020137, 'vhernadez', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(138, 2020138, 'cahernandez', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(139, 2020139, 'dqhernandez', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(140, 2020140, 'mahernandez', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(141, 2020141, 'rmhernandez', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(142, 2020142, 'mbhernando', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(143, 2020143, 'cmigno', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(144, 2020144, 'cmjavier', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(145, 2020145, 'ebjavier', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(146, 2020146, 'erjavier', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(147, 2020147, 'hjavier', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(148, 2020148, 'mmjavier', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(149, 2020149, 'cmjorge', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(150, 2020150, 'aajumarang', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(151, 2020151, 'gllabarda', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(152, 2020152, 'jrlaguardia', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(153, 2020153, 'adlanting', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(154, 2020154, 'kvllaroza', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(155, 2020155, 'dblegaspi', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(156, 2020156, 'rrlepardo', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(157, 2020157, 'fjlimboc', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(158, 2020158, 'jaloyola', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(159, 2020159, 'acluciano', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(160, 2020160, 'amcmabuti', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(161, 2020161, 'fmacapuno', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(162, 2020162, 'evmacaspac', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(163, 2020163, 'jvpmacaspac', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(164, 2020164, 'apamadrazo', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(165, 2020165, 'lamaestrecampo', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(166, 2020166, 'gmaguinao', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(167, 2020167, 'aamalabanan', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(168, 2020168, 'nmmaligaya', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(169, 2020169, 'ydmaligayo', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(170, 2020170, 'mdmalubay', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(171, 2020171, 'gmanguinao', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(172, 2020172, 'cbmanalo', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(173, 2020173, 'cmanalo', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(174, 2020174, 'evmanalo', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(175, 2020175, 'efmanalo', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(176, 2020176, 'dmarasigan', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(177, 2020177, 'rbmarcial', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(178, 2020178, 'arpmarinduque', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(179, 2020179, 'epmarinduque', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(180, 2020180, 'gcmarinduque', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(181, 2020181, 'mmmarinduque', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(182, 2020182, 'lrmarquez', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(183, 2020183, 'bbmartinez', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(184, 2020184, 'evmartinez', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(185, 2020185, 'mfmmarundan', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(186, 2020186, 'nsmatienzo', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(187, 2020187, 'anmendoza', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(188, 2020188, 'jnmendoza', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(189, 2020189, 'lgmendoza', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(190, 2020190, 'namendoza', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(191, 2020191, 'psmendoza', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(192, 2020192, 'rbmendoza', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(193, 2020193, 'nmercado', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(194, 2020194, 'mlmmiranda', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(195, 2020195, 'rdmiranda', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(196, 2020196, 'ebmirando', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(197, 2020197, 'edmolod', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(198, 2020198, 'cjomontealegre', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(199, 2020199, 'edsmontenegro', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(200, 2020200, 'hlmontenegro', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(201, 2020201, 'hsmontenegro', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(202, 2020202, 'mpmontenegro', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(203, 2020203, 'ramontenegro', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(204, 2020204, 'ranavarro', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(205, 2020205, 'pgnovicio', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(206, 2020206, 'orocampo', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(207, 2020207, 'rbocampo', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(208, 2020208, 'gbolarte', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(209, 2020209, 'naolegario', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(210, 2020210, 'paolino', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(211, 2020211, 'mbolivar', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(212, 2020212, 'tdortiz', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(213, 2020213, 'mampaiton', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(214, 2020214, 'vpaladan', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(215, 2020215, 'glpanaligan', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(216, 2020216, 'cmpanganiban', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(217, 2020217, 'taparas', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(218, 2020218, 'mlparra', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(219, 2020219, 'vsparra', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(220, 2020220, 'vcparra', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(221, 2020221, 'ldmpascua', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(222, 2020222, 'pppaterno', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(223, 2020223, 'apayad', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(224, 2020224, 'mqpayad', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(225, 2020225, 'mqpe?afiel', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(226, 2020226, 'lbpe?aflorida', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(227, 2020227, 'gppenales', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(228, 2020228, 'gbpenales', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(229, 2020229, 'lbpe?ero', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(230, 2020230, 'rcperena', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(231, 2020231, 'aoperey', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(232, 2020232, 'gperey', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(233, 2020233, 'eaperido', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(234, 2020234, 'mvperido', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(235, 2020235, 'gdvpetil', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(236, 2020236, 'gppinales', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(237, 2020237, 'careosa', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(238, 2020238, 'almrepillo', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(239, 2020239, 'etreyes', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(240, 2020240, 'jpreyes', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(241, 2020241, 'nbreyes', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(242, 2020242, 'omrobino', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(243, 2020243, 'carocillo', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(244, 2020244, 'grodriguez', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(245, 2020245, 'irodriguez', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(246, 2020246, 'jrodriguez', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(247, 2020247, 'edromilla', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(248, 2020248, 'fmrozul', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(249, 2020249, 'lmsalonga', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(250, 2020250, 'ilsangalang', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(251, 2020251, 'mssantera', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(252, 2020252, 'gjsardinola ', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(253, 2020253, 'bmsedino', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(254, 2020254, 'lfseducon', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(255, 2020255, 'mbse?a', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(256, 2020256, 'ksolanoy', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(257, 2020257, 'mdsumagui', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(258, 2020258, 'dsumaong', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(259, 2020259, 'cjsu?iga', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(260, 2020260, 'nbsusa', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(261, 2020261, 'mecta?edo', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(262, 2020262, 'cetolentino', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(263, 2020263, 'fmtolentino', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(264, 2020264, 'dgtorres', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(265, 2020265, 'smtorres', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(266, 2020266, 'fmtuliao', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(267, 2020267, 'druntalan', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(268, 2020268, 'develuz', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(269, 2020269, 'amvergara', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(270, 2020270, 'tjvergara', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(271, 2020271, 'wrvidallo', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(272, 2020272, 'pbvillanueva', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(273, 2020273, 'mcdvillaviray', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04'),
(274, 2020274, 'mcdvillaviray1', '1234', 'Employee', 'What is your favorite movie?', '', 'What is your mother\'s maiden name?', '', '', 'Active', '2021-01-04');

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
-- Table structure for table `tbl_dayoff`
--

CREATE TABLE `tbl_dayoff` (
  `intDayoff_ID` int(11) NOT NULL,
  `varDayoff` varchar(255) NOT NULL
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

INSERT INTO `tbl_employee` (`intEmployee_ID`, `varFirstname`, `varMiddlename`, `varLastname`, `enumGender`, `varExtension_Name`, `enumCivil_Status`, `Birth_Date`, `intPosition_ID`, `varAddress`, `intDepartment_ID`, `enumEmployment_Status`, `Employment_Date`, `enumWork_Schedule`) VALUES
(20201, 'WINNIE ROSE', '', 'ABENA', 'Male', '', 'Separated', '2020-04-08', 2, 'DASD', 13, 'Retired', '2000-01-05', 'Flexible Work Time'),
(20202, 'RAFAEL', 'V', 'AGUIDO', 'Male', '', 'Single', '1970-01-01', 1, '', 1, 'Active', '1970-01-01', 'Normal Work Time'),
(20203, 'RIZALINA', 'B', 'ALCANTARA', 'Female', '', 'Single', '0000-00-00', 1, '', 25, 'Active', '2000-02-01', 'Normal Work Time'),
(20204, 'AINEE JOY', 'C', 'ALCAZAR', 'Female', '', 'Single', '0000-00-00', 1, '', 33, 'Active', '2000-02-02', 'Normal Work Time'),
(20205, 'ZENAIDA', 'S', 'ALCAZAR', 'Female', '', 'Single', '0000-00-00', 1, '', 13, 'Active', '2000-02-03', 'Normal Work Time'),
(20206, 'ESTELITA', 'M', 'ALEGA', 'Female', '', 'Single', '0000-00-00', 1, '', 19, 'Active', '2000-02-04', 'Normal Work Time'),
(20207, 'VIVENCIO', 'A', 'ALEGRE', 'Male', '', 'Single', '0000-00-00', 1, '', 4, 'Active', '2000-02-05', 'Normal Work Time'),
(20208, 'JOSEPHINE', 'RAMOS', 'ALFEREZ', 'Female', '', 'Single', '0000-00-00', 1, '', 13, 'Active', '2000-02-06', 'Normal Work Time'),
(20209, 'GRACITA', 'STA ANA', 'ALVAREZ', 'Female', '', 'Single', '0000-00-00', 1, '', 13, 'Active', '2000-02-07', 'Normal Work Time'),
(202010, 'MARILOU', 'M', 'AMBAT', 'Female', '', 'Single', '0000-00-00', 1, '', 21, 'Active', '2000-02-08', 'Normal Work Time'),
(202011, 'DORINDA', 'A', 'AMBION', 'Female', '', 'Single', '0000-00-00', 1, '', 18, 'Active', '2000-02-09', 'Normal Work Time'),
(202012, 'LAMBERTO', 'A', 'AMBION', 'Male', '', 'Single', '0000-00-00', 1, '', 42, 'Active', '2000-02-10', 'Normal Work Time'),
(202013, 'PRISCO', 'G', 'AMBION', 'Male', '', 'Single', '0000-00-00', 1, '', 11, 'Active', '2000-02-11', 'Normal Work Time'),
(202014, 'AVELINA', 'A', 'AMBONAN', 'Female', '', 'Single', '0000-00-00', 1, '', 32, 'Active', '2000-02-12', 'Normal Work Time'),
(202015, 'ELISA', 'S', 'AMORA', 'Female', '', 'Single', '0000-00-00', 1, '', 19, 'Active', '2000-02-13', 'Normal Work Time'),
(202016, 'JOY', 'J', 'AMPARO', 'Female', '', 'Single', '0000-00-00', 1, '', 33, 'Active', '2000-02-14', 'Normal Work Time'),
(202017, 'ANICETA', 'P', 'ANACAY', 'Female', '', 'Single', '0000-00-00', 1, '', 35, 'Active', '2000-02-15', 'Normal Work Time'),
(202018, 'ABNER', 'M.', 'ANACAY', 'Male', '', 'Single', '0000-00-00', 1, '', 5, 'Active', '2000-02-16', 'Normal Work Time'),
(202019, 'LEVIE', 'BAYOT', 'ANACAY', 'Male', '', 'Single', '0000-00-00', 1, '', 1, 'Active', '2000-02-17', 'Normal Work Time'),
(202020, 'CRISTINA', 'F', 'ANARNA', 'Female', '', 'Single', '0000-00-00', 1, '', 35, 'Active', '2000-02-18', 'Normal Work Time'),
(202021, 'ANA', 'BAY', 'ANGCAYA', 'Female', '', 'Single', '0000-00-00', 1, '', 23, 'Active', '2000-02-19', 'Normal Work Time'),
(202022, 'FRANCIS', 'A', 'ANGCAYA', 'Male', '', 'Single', '0000-00-00', 1, '', 30, 'Active', '2000-02-20', 'Normal Work Time'),
(202023, 'IRENEO', 'ANACAY', 'ANGCAYA', 'Male', '', 'Single', '0000-00-00', 1, '', 21, 'Active', '2000-02-21', 'Normal Work Time'),
(202024, 'JOHN', 'VILLARENTE', 'ANGCAYA', 'Male', '', 'Single', '0000-00-00', 1, '', 1, 'Active', '2000-02-22', 'Normal Work Time'),
(202025, 'JUANITO', 'A', 'ANGCAYA', 'Male', '', 'Single', '0000-00-00', 1, '', 35, 'Active', '2000-02-23', 'Normal Work Time'),
(202026, 'MARLON', 'JAVIER', 'ANGCAYA', 'Male', '', 'Single', '0000-00-00', 1, '', 21, 'Active', '2000-02-24', 'Normal Work Time'),
(202027, 'OFELIA', 'G', 'ANGCAYA', 'Female', '', 'Single', '0000-00-00', 1, '', 5, 'Active', '2000-02-25', 'Normal Work Time'),
(202028, 'RUFINA', 'P', 'ANGCAYA', 'Female', '', 'Single', '0000-00-00', 1, '', 9, 'Active', '2000-02-26', 'Normal Work Time'),
(202029, 'PACITA ROSARIO', 'Z', 'AQUINO', 'Female', '', 'Single', '0000-00-00', 1, '', 23, 'Active', '2000-02-27', 'Normal Work Time'),
(202030, 'MELISSA', 'A', 'ARCULLO', 'Female', '', 'Single', '0000-00-00', 1, '', 11, 'Active', '2000-02-28', 'Normal Work Time'),
(202031, 'AILEEN', 'DE SAGUN', 'AUDITOR', 'Female', '', 'Single', '0000-00-00', 1, '', 36, 'Active', '2000-02-29', 'Normal Work Time'),
(202032, 'JOEL', 'M.', 'AYCARDO', 'Male', '', 'Single', '0000-00-00', 1, '', 17, 'Active', '2000-03-01', 'Normal Work Time'),
(202033, 'TERESITA', 'C', 'BAAS', 'Female', '', 'Single', '0000-00-00', 1, '', 19, 'Active', '2000-03-02', 'Normal Work Time'),
(202034, 'PILAR', 'BAUTISTA', 'BANICO', 'Female', '', 'Single', '0000-00-00', 1, '', 9, 'Active', '2000-03-03', 'Normal Work Time'),
(202035, 'LOURDES', 'Q', 'BAURILE', 'Female', '', 'Single', '0000-00-00', 1, '', 35, 'Active', '2000-03-04', 'Normal Work Time'),
(202036, 'FELISA', 'C', 'BATINO', 'Female', '', 'Single', '0000-00-00', 1, '', 13, 'Active', '2000-03-05', 'Normal Work Time'),
(202037, 'LINDA', 'GONZALES', 'BAYBAY', 'Female', '', 'Single', '0000-00-00', 1, '', 9, 'Active', '2000-03-06', 'Normal Work Time'),
(202038, 'LOLITA', 'BORJA', 'BAYBAY', 'Female', '', 'Single', '0000-00-00', 1, '', 1, 'Active', '2000-03-07', 'Normal Work Time'),
(202039, 'MA. PAZ', 'R', 'BAYBAY', 'Female', '', 'Single', '0000-00-00', 1, '', 31, 'Active', '2000-03-08', 'Normal Work Time'),
(202040, 'MA. ROSA', 'A', 'BAYBAY', 'Female', '', 'Single', '0000-00-00', 1, '', 33, 'Active', '2000-03-09', 'Normal Work Time'),
(202041, 'MARCELO', '', 'BAYBAY', 'Male', '', 'Single', '0000-00-00', 1, '', 31, 'Active', '2000-03-10', 'Normal Work Time'),
(202042, 'LUISITO', 'G', 'BAYHON', 'Male', '', 'Single', '0000-00-00', 1, '', 0, 'Active', '2000-03-11', 'Normal Work Time'),
(202043, 'GEORGE', 'G', 'BAYHON', 'Male', '', 'Single', '0000-00-00', 1, '', 5, 'Active', '2000-03-12', 'Normal Work Time'),
(202044, 'VIOLETA', '', 'BAYHON', 'Female', '', 'Single', '0000-00-00', 1, '', 33, 'Active', '2000-03-13', 'Normal Work Time'),
(202045, 'EVANGELINE', 'C', 'BAYLA', 'Female', '', 'Single', '0000-00-00', 1, '', 34, 'Active', '2000-03-14', 'Normal Work Time'),
(202046, 'ANABEL', 'D', 'BAYOT', 'Female', '', 'Single', '0000-00-00', 1, '', 19, 'Active', '2000-03-15', 'Normal Work Time'),
(202047, 'ANISIA', 'P', 'BAYOT', 'Female', '', 'Single', '0000-00-00', 1, '', 19, 'Active', '2000-03-16', 'Normal Work Time'),
(202048, 'ELAINE', 'B', 'BAYOT', 'Female', '', 'Single', '0000-00-00', 1, '', 33, 'Active', '2000-03-17', 'Normal Work Time'),
(202049, 'MERCED', 'M', 'BAYOT', 'Female', '', 'Single', '0000-00-00', 1, '', 32, 'Active', '2000-03-18', 'Normal Work Time'),
(202050, 'RUMER', 'M', 'BAYOT', 'Male', '', 'Single', '0000-00-00', 1, '', 5, 'Active', '2000-03-19', 'Normal Work Time'),
(202051, 'MARLONE', 'P', 'BERNALDEZ', 'Male', '', 'Single', '0000-00-00', 1, '', 33, 'Active', '2000-03-20', 'Normal Work Time'),
(202052, 'JULIETA', 'GOMEZ', 'BISCOCHO', 'Female', '', 'Single', '0000-00-00', 1, '', 19, 'Active', '2000-03-21', 'Normal Work Time'),
(202053, 'ERNA', 'PANGANIBAN', 'BOFILL', 'Female', '', 'Single', '0000-00-00', 1, '', 27, 'Active', '2000-03-22', 'Normal Work Time'),
(202054, 'EDWIN', 'G', 'BORJA', 'Male', '', 'Single', '0000-00-00', 1, '', 38, 'Active', '2000-03-23', 'Normal Work Time'),
(202055, 'NECY', 'M', 'BORJA', 'Female', '', 'Single', '0000-00-00', 1, '', 7, 'Active', '2000-03-24', 'Normal Work Time'),
(202056, 'MA. ANA', 'M', 'BUGARIN', 'Female', '', 'Single', '0000-00-00', 1, '', 27, 'Active', '2000-03-25', 'Normal Work Time'),
(202057, 'REGINALDO JR.', 'B', 'BUNGCASAN', 'Male', '', 'Single', '0000-00-00', 1, '', 16, 'Active', '2000-03-26', 'Normal Work Time'),
(202058, 'CARIDAD', 'ANGCAYA', 'BURAZON', 'Female', '', 'Single', '0000-00-00', 1, '', 19, 'Active', '2000-03-27', 'Normal Work Time'),
(202059, 'ANDREA', 'F', 'CACAO', 'Female', '', 'Single', '0000-00-00', 1, '', 18, 'Active', '2000-03-28', 'Normal Work Time'),
(202060, 'ALMA', 'P', 'CALANOG', 'Female', '', 'Single', '0000-00-00', 1, '', 42, 'Active', '2000-03-29', 'Normal Work Time'),
(202061, 'ANNABELLE', 'F', 'CARAAN', 'Female', '', 'Single', '0000-00-00', 1, '', 5, 'Active', '2000-03-30', 'Normal Work Time'),
(202062, 'FELIX', 'M', 'CARAAN', 'Male', '', 'Single', '0000-00-00', 1, '', 30, 'Active', '2000-03-31', 'Normal Work Time'),
(202063, 'FLORDELIZA', 'TALAIN', 'CASTILLO', 'Female', '', 'Single', '0000-00-00', 1, '', 9, 'Active', '2000-04-01', 'Normal Work Time'),
(202064, 'ELISA', 'GATPANDAN', 'CHACON', 'Female', '', 'Single', '0000-00-00', 1, '', 9, 'Active', '2000-04-02', 'Normal Work Time'),
(202065, 'HANY ROY', '', 'COLETO', 'Male', '', 'Single', '0000-00-00', 1, '', 33, 'Active', '2000-04-03', 'Normal Work Time'),
(202066, 'FIDELA', 'B', 'CORTEZ', 'Female', '', 'Single', '0000-00-00', 1, '', 38, 'Active', '2000-04-04', 'Normal Work Time'),
(202067, 'MARCOS NOEL', 'A', 'CORTEZ', 'Male', '', 'Single', '0000-00-00', 1, '', 5, 'Active', '2000-04-05', 'Normal Work Time'),
(202068, 'NERIFE', 'HERMOSORA', 'CORTEZ', 'Female', '', 'Single', '0000-00-00', 1, '', 0, 'Active', '2000-04-06', 'Normal Work Time'),
(202069, 'MA VICTORIA', 'M', 'COSME', 'Female', '', 'Single', '0000-00-00', 1, '', 35, 'Active', '2000-04-07', 'Normal Work Time'),
(202070, 'SYLVIA', 'C', 'COSTANTE ', 'Female', '', 'Single', '0000-00-00', 1, '', 26, 'Active', '2000-04-08', 'Normal Work Time'),
(202071, 'NELIA', 'C', 'COTONER', 'Female', '', 'Single', '0000-00-00', 1, '', 15, 'Active', '2000-04-09', 'Normal Work Time'),
(202072, 'THELMA', 'U', 'CRIZALDO', 'Female', '', 'Single', '0000-00-00', 1, '', 13, 'Active', '2000-04-10', 'Normal Work Time'),
(202073, 'MAGDALENA', 'ANACAY', 'CRUZADA', 'Female', '', 'Single', '0000-00-00', 1, '', 15, 'Active', '2000-04-11', 'Normal Work Time'),
(202074, 'JOSEPH NHOEL', 'TIBAYAN', 'DE CASTRO', 'Male', '', 'Single', '0000-00-00', 1, '', 9, 'Active', '2000-04-12', 'Normal Work Time'),
(202075, 'JUANITA', 'M', 'DE CASTRO', 'Female', '', 'Single', '0000-00-00', 1, '', 11, 'Active', '2000-04-13', 'Normal Work Time'),
(202076, 'LIUSA', 'R', 'DE GRANO', 'Female', '', 'Single', '0000-00-00', 1, '', 19, 'Active', '2000-04-14', 'Normal Work Time'),
(202077, 'MA. ERLINDA', 'F', 'DE GRANO', 'Female', '', 'Single', '0000-00-00', 1, '', 19, 'Active', '2000-04-15', 'Normal Work Time'),
(202078, 'RONALD ANDREW', 'GABRIEL', 'DE GUZMAN', 'Male', '', 'Single', '0000-00-00', 1, '', 13, 'Active', '2000-04-16', 'Normal Work Time'),
(202079, 'MA. ELENA', 'D', 'DE OCAMPO', 'Female', '', 'Single', '0000-00-00', 1, '', 37, 'Active', '2000-04-17', 'Normal Work Time'),
(202080, 'MARISSA', 'B', 'DE OCAMPO', 'Female', '', 'Single', '0000-00-00', 1, '', 39, 'Active', '2000-04-18', 'Normal Work Time'),
(202081, 'VICTOR', 'V', 'DE SAGUN', 'Male', '', 'Single', '0000-00-00', 1, '', 38, 'Active', '2000-04-19', 'Normal Work Time'),
(202082, 'MYRNA', 'DINGALASAN', 'DE VILLA', 'Female', '', 'Single', '0000-00-00', 1, '', 23, 'Active', '2000-04-20', 'Normal Work Time'),
(202083, 'OFELIA', 'G', 'DE VILLA', 'Female', '', 'Single', '0000-00-00', 1, '', 14, 'Active', '2000-04-21', 'Normal Work Time'),
(202084, 'ERNESTO', '', 'DE LUNA', 'Male', '', 'Single', '0000-00-00', 1, '', 30, 'Active', '2000-04-22', 'Normal Work Time'),
(202085, 'ESTER', 'B', 'DEL MUNDO', 'Female', '', 'Single', '0000-00-00', 1, '', 11, 'Active', '2000-04-23', 'Normal Work Time'),
(202086, 'HERMOGENES', 'C', 'DEL MUNDO', 'Male', '', 'Single', '0000-00-00', 1, '', 11, 'Active', '2000-04-24', 'Normal Work Time'),
(202087, 'ROSALLE', 'A', 'DEL MUNDO', 'Female', '', 'Single', '0000-00-00', 1, '', 36, 'Active', '2000-04-25', 'Normal Work Time'),
(202088, 'MA. CECILIA', 'PEJI', 'DELA GRACIA', 'Female', '', 'Single', '0000-00-00', 1, '', 1, 'Active', '2000-04-26', 'Normal Work Time'),
(202089, 'ALFREDO', 'CALDERON', 'DELA PE?A', 'Male', '', 'Single', '0000-00-00', 1, '', 11, 'Active', '2000-04-27', 'Normal Work Time'),
(202090, 'NINA', 'C', 'DELFINO', 'Female', '', 'Single', '0000-00-00', 1, '', 33, 'Active', '2000-04-28', 'Normal Work Time'),
(202091, 'MANUEL', '', 'DIGO', 'Male', '', 'Single', '0000-00-00', 1, '', 35, 'Active', '2000-04-29', 'Normal Work Time'),
(202092, 'ALFREDO', 'C', 'DIMAPILIS', 'Male', '', 'Single', '0000-00-00', 1, '', 8, 'Active', '2000-04-30', 'Normal Work Time'),
(202093, 'ANTHONY', 'A', 'DIMAPILIS', 'Male', '', 'Single', '0000-00-00', 1, '', 19, 'Active', '2000-05-01', 'Normal Work Time'),
(202094, 'ARIEL', 'MENDOZA', 'DIMAPILIS', 'Male', '', 'Single', '0000-00-00', 1, '', 19, 'Active', '2000-05-02', 'Normal Work Time'),
(202095, 'DENNIS', 'C', 'DIMAPILIS', 'Male', '', 'Single', '0000-00-00', 1, '', 41, 'Active', '2000-05-03', 'Normal Work Time'),
(202096, 'ELIZABETH', 'D', 'DIMAPILIS', 'Female', '', 'Single', '0000-00-00', 1, '', 18, 'Active', '2000-05-04', 'Normal Work Time'),
(202097, 'ELVIRA', 'S', 'DIMAPILIS', 'Female', '', 'Single', '0000-00-00', 1, '', 19, 'Active', '2000-05-05', 'Normal Work Time'),
(202098, 'JONNA', 'T', 'DIMAPILIS', 'Female', '', 'Single', '0000-00-00', 1, '', 2, 'Active', '2000-05-06', 'Normal Work Time'),
(202099, 'JOSEPHINE', 'P', 'DIMAPILIS', 'Female', '', 'Single', '0000-00-00', 1, '', 19, 'Active', '2000-05-07', 'Normal Work Time'),
(2020100, 'MA. TRINIDAD', 'S', 'DIMAPILIS', 'Female', '', 'Single', '0000-00-00', 1, '', 32, 'Active', '2000-05-08', 'Normal Work Time'),
(2020101, 'VILMA', 'TAMPIS', 'DIMAPILIS', 'Female', '', 'Single', '0000-00-00', 1, '', 23, 'Active', '2000-05-09', 'Normal Work Time'),
(2020102, 'GREGORIA', 'CARAAN', 'DIMARANAN', 'Female', '', 'Single', '0000-00-00', 1, '', 1, 'Active', '2000-05-10', 'Normal Work Time'),
(2020103, 'PERPETUA', 'F', 'DIMARANAN', 'Female', '', 'Single', '0000-00-00', 1, '', 40, 'Active', '2000-05-11', 'Normal Work Time'),
(2020104, 'REYNALDO', 'R', 'DIMARANAN', 'Male', '', 'Single', '0000-00-00', 1, '', 21, 'Active', '2000-05-12', 'Normal Work Time'),
(2020105, 'RODORA', 'G', 'DIMARANAN', 'Female', '', 'Single', '0000-00-00', 1, '', 24, 'Active', '2000-05-13', 'Normal Work Time'),
(2020106, 'PURISIMA CORAZON', 'E', 'DINGO', 'Female', '', 'Single', '0000-00-00', 1, '', 19, 'Active', '2000-05-14', 'Normal Work Time'),
(2020107, 'ROMELITO', '', 'DISEPEDA', 'Male', '', 'Single', '0000-00-00', 1, '', 41, 'Active', '2000-05-15', 'Normal Work Time'),
(2020108, 'ZENAIDA', '', 'DOCTORA', 'Female', '', 'Single', '0000-00-00', 1, '', 10, 'Active', '2000-05-16', 'Normal Work Time'),
(2020109, 'MARLYN', 'P', 'DOGNIDON', 'Female', '', 'Single', '0000-00-00', 1, '', 33, 'Active', '2000-05-17', 'Normal Work Time'),
(2020110, 'DELIA', 'JAVIER', 'EGASAN', 'Female', '', 'Single', '0000-00-00', 1, '', 13, 'Active', '2000-05-18', 'Normal Work Time'),
(2020111, 'MARXIANE', 'T', 'EMELO', 'Female', '', 'Single', '0000-00-00', 1, '', 33, 'Active', '2000-05-19', 'Normal Work Time'),
(2020112, 'LEILA', 'ANGCAYA', 'ENMACIO', 'Female', '', 'Single', '0000-00-00', 1, '', 1, 'Active', '2000-05-20', 'Normal Work Time'),
(2020113, 'EDGAR', 'P', 'ENRIQUEZ', 'Male', '', 'Single', '0000-00-00', 1, '', 31, 'Active', '2000-05-21', 'Normal Work Time'),
(2020114, 'ROSALINDA', 'P', 'ERIDAO', 'Female', '', 'Single', '0000-00-00', 1, '', 18, 'Active', '2000-05-22', 'Normal Work Time'),
(2020115, 'EVELYN', 'M', 'ESCAMILLAS', 'Female', '', 'Single', '0000-00-00', 1, '', 19, 'Active', '2000-05-23', 'Normal Work Time'),
(2020116, 'RONALD', 'M', 'ESPIRITU', 'Male', '', 'Single', '0000-00-00', 1, '', 19, 'Active', '2000-05-24', 'Normal Work Time'),
(2020117, 'BEVERLY ANNE', 'P', 'ESTIGOY', 'Female', '', 'Single', '0000-00-00', 1, '', 33, 'Active', '2000-05-25', 'Normal Work Time'),
(2020118, 'MERCY', 'U', 'ESTRANGCO', 'Female', '', 'Single', '0000-00-00', 1, '', 30, 'Active', '2000-05-26', 'Normal Work Time'),
(2020119, 'NORENA', 'S', 'EVANGELISTA', 'Female', '', 'Single', '0000-00-00', 1, '', 19, 'Active', '2000-05-27', 'Normal Work Time'),
(2020120, 'AMELITA', 'VERGARA', 'FERMA', 'Female', '', 'Single', '0000-00-00', 1, '', 0, 'Active', '2000-05-28', 'Normal Work Time'),
(2020121, 'ARCELI', 'C', 'FERMA', 'Female', '', 'Single', '0000-00-00', 1, '', 26, 'Active', '2000-05-29', 'Normal Work Time'),
(2020122, 'MARIA', 'ILAO', 'FERMA', 'Female', '', 'Single', '0000-00-00', 1, '', 9, 'Active', '2000-05-30', 'Normal Work Time'),
(2020123, 'MARIA VICTORIA', 'D', 'FERMA', 'Female', '', 'Single', '0000-00-00', 1, '', 9, 'Active', '2000-05-31', 'Normal Work Time'),
(2020124, 'ROMEO', '', 'FERMA', 'Male', '', 'Single', '0000-00-00', 1, '', 10, 'Active', '2000-06-01', 'Normal Work Time'),
(2020125, 'ADORACION', '', 'FLAVIER', 'Female', '', 'Single', '0000-00-00', 1, '', 2, 'Active', '2000-06-02', 'Normal Work Time'),
(2020126, 'MHAR', 'G', 'GABEJA', 'Male', '', 'Single', '0000-00-00', 1, '', 30, 'Active', '2000-06-03', 'Normal Work Time'),
(2020127, 'JULIET', 'BAEL', 'GALANG', 'Female', '', 'Single', '0000-00-00', 1, '', 42, 'Active', '2000-06-04', 'Normal Work Time'),
(2020128, 'HAIZEL', 'MOJICA', 'GARCIA', 'Female', '', 'Single', '0000-00-00', 1, '', 9, 'Active', '2000-06-05', 'Normal Work Time'),
(2020129, 'DOLORES', 'J', 'GATPANDAN', 'Female', '', 'Single', '0000-00-00', 1, '', 18, 'Active', '2000-06-06', 'Normal Work Time'),
(2020130, 'NENITA', 'M', 'GATPANDAN', 'Female', '', 'Single', '0000-00-00', 1, '', 29, 'Active', '2000-06-07', 'Normal Work Time'),
(2020131, 'EMMA', 'M', 'GOMEZ', 'Female', '', 'Single', '0000-00-00', 1, '', 11, 'Active', '2000-06-08', 'Normal Work Time'),
(2020132, 'MA. GINA', 'P', 'GUA?EZO', 'Female', '', 'Single', '0000-00-00', 1, '', 19, 'Active', '2000-06-09', 'Normal Work Time'),
(2020133, 'MARY ANNE', 'PERE?A', 'GUA?EZO', 'Female', '', 'Single', '0000-00-00', 1, '', 19, 'Active', '2000-06-10', 'Normal Work Time'),
(2020134, 'LYDIA', 'C', 'GUTIERREZ', 'Female', '', 'Single', '0000-00-00', 1, '', 24, 'Active', '2000-06-11', 'Normal Work Time'),
(2020135, 'JONALYN', 'LUNA', 'HADAP', 'Female', '', 'Single', '0000-00-00', 1, '', 18, 'Active', '2000-06-12', 'Normal Work Time'),
(2020136, 'MELANIE', 'A', 'HAPITA', 'Female', '', 'Single', '0000-00-00', 1, '', 33, 'Active', '2000-06-13', 'Normal Work Time'),
(2020137, 'VICTOR', '', 'HERNADEZ', 'Male', '', 'Single', '0000-00-00', 1, '', 33, 'Active', '2000-06-14', 'Normal Work Time'),
(2020138, 'CORNELIO', 'A', 'HERNANDEZ', 'Male', '', 'Single', '0000-00-00', 1, '', 9, 'Active', '2000-06-15', 'Normal Work Time'),
(2020139, 'DONATO', 'Q', 'HERNANDEZ', 'Male', '', 'Single', '0000-00-00', 1, '', 33, 'Active', '2000-06-16', 'Normal Work Time'),
(2020140, 'MARIO', 'A', 'HERNANDEZ', 'Male', '', 'Single', '0000-00-00', 1, '', 30, 'Active', '2000-06-17', 'Normal Work Time'),
(2020141, 'ROBERTO', 'M', 'HERNANDEZ', 'Male', '', 'Single', '0000-00-00', 1, '', 22, 'Active', '2000-06-18', 'Normal Work Time'),
(2020142, 'MERIC', 'B', 'HERNANDO', 'Female', '', 'Single', '0000-00-00', 1, '', 8, 'Active', '2000-06-19', 'Normal Work Time'),
(2020143, 'CRISTINA', 'M', 'IGNO', 'Female', '', 'Single', '0000-00-00', 1, '', 24, 'Active', '2000-06-20', 'Normal Work Time'),
(2020144, 'CARMELITA', 'M', 'JAVIER', 'Female', '', 'Single', '0000-00-00', 1, '', 0, 'Active', '2000-06-21', 'Normal Work Time'),
(2020145, 'ELISEO', 'B', 'JAVIER', 'Male', '', 'Single', '0000-00-00', 1, '', 27, 'Active', '2000-06-22', 'Normal Work Time'),
(2020146, 'EMMA', 'R', 'JAVIER', 'Female', '', 'Single', '0000-00-00', 1, '', 33, 'Active', '2000-06-23', 'Normal Work Time'),
(2020147, 'HILARIO', '', 'JAVIER', 'Male', '', 'Single', '0000-00-00', 1, '', 35, 'Active', '2000-06-24', 'Normal Work Time'),
(2020148, 'MYLENE', 'MAILEG', 'JAVIER', 'Female', '', 'Single', '0000-00-00', 1, '', 16, 'Active', '2000-06-25', 'Normal Work Time'),
(2020149, 'CAROLINA', 'MANALO', 'JORGE', 'Female', '', 'Single', '0000-00-00', 1, '', 19, 'Active', '2000-06-26', 'Normal Work Time'),
(2020150, 'AIME', 'A', 'JUMARANG', 'Female', '', 'Single', '0000-00-00', 1, '', 33, 'Active', '2000-06-27', 'Normal Work Time'),
(2020151, 'GINA', 'LUNA', 'LABARDA', 'Female', '', 'Single', '0000-00-00', 1, '', 35, 'Active', '2000-06-28', 'Normal Work Time'),
(2020152, 'JOSELITO', 'R', 'LAGUARDIA', 'Male', '', 'Single', '0000-00-00', 1, '', 4, 'Active', '2000-06-29', 'Normal Work Time'),
(2020153, 'AILEEN', 'D', 'LANTING', 'Female', '', 'Single', '0000-00-00', 1, '', 12, 'Active', '2000-06-30', 'Normal Work Time'),
(2020154, 'KIM VINCENT', 'L', 'LAROZA', 'Male', '', 'Single', '0000-00-00', 1, '', 33, 'Active', '2000-07-01', 'Normal Work Time'),
(2020155, 'DOLORES', 'B', 'LEGASPI', 'Female', '', 'Single', '0000-00-00', 1, '', 13, 'Active', '2000-07-02', 'Normal Work Time'),
(2020156, 'ROWENA', 'ROSAS', 'LEPARDO', 'Female', '', 'Single', '0000-00-00', 1, '', 9, 'Active', '2000-07-03', 'Normal Work Time'),
(2020157, 'FLORDELIZA', 'JUMARANG', 'LIMBOC', 'Female', '', 'Single', '0000-00-00', 1, '', 9, 'Active', '2000-07-04', 'Normal Work Time'),
(2020158, 'JANE', 'ALMENDRAZ', 'LOYOLA', 'Female', '', 'Single', '0000-00-00', 1, '', 16, 'Active', '2000-07-05', 'Normal Work Time'),
(2020159, 'ADELAIDA', 'CREUS', 'LUCIANO', 'Female', '', 'Single', '0000-00-00', 1, '', 31, 'Active', '2000-07-06', 'Normal Work Time'),
(2020160, 'ANA MARIE', 'C', 'MABUTI', 'Female', '', 'Single', '0000-00-00', 1, '', 19, 'Active', '2000-07-07', 'Normal Work Time'),
(2020161, 'FELIX', '', 'MACAPUNO', 'Male', '', 'Single', '0000-00-00', 1, '', 10, 'Active', '2000-07-08', 'Normal Work Time'),
(2020162, 'ELVIRA', 'VARGAS', 'MACASPAC', 'Female', '', 'Single', '0000-00-00', 1, '', 15, 'Active', '2000-07-09', 'Normal Work Time'),
(2020163, 'JOSE VICTOR', 'P', 'MACASPAC', 'Male', '', 'Single', '0000-00-00', 1, '', 30, 'Active', '2000-07-10', 'Normal Work Time'),
(2020164, 'ALLAN PAUL', 'AURE', 'MADRAZO', 'Male', '', 'Single', '0000-00-00', 1, '', 11, 'Active', '2000-07-11', 'Normal Work Time'),
(2020165, 'LORENA', 'ATE', 'MAESTRECAMPO', 'Female', '', 'Single', '0000-00-00', 1, '', 24, 'Active', '2000-07-12', 'Normal Work Time'),
(2020166, 'GILBERT', '', 'MAGUINAO', 'Male', '', 'Single', '0000-00-00', 1, '', 23, 'Active', '2000-07-13', 'Normal Work Time'),
(2020167, 'ALMA', 'A', 'MALABANAN', 'Female', '', 'Single', '0000-00-00', 1, '', 24, 'Active', '2000-07-14', 'Normal Work Time'),
(2020168, 'NELITA', 'M', 'MALIGAYA', 'Female', '', 'Single', '0000-00-00', 1, '', 23, 'Active', '2000-07-15', 'Normal Work Time'),
(2020169, 'YOLANDA', 'D', 'MALIGAYO', 'Female', '', 'Single', '0000-00-00', 1, '', 13, 'Active', '2000-07-16', 'Normal Work Time'),
(2020170, 'MELINDA', 'D', 'MALUBAY', 'Female', '', 'Single', '0000-00-00', 1, '', 39, 'Active', '2000-07-17', 'Normal Work Time'),
(2020171, 'GILBERT', '', 'MANGUINAO', 'Male', '', 'Single', '0000-00-00', 1, '', 23, 'Active', '2000-07-18', 'Normal Work Time'),
(2020172, 'CELSA', 'BAYOT', 'MANALO', 'Female', '', 'Single', '0000-00-00', 1, '', 16, 'Active', '2000-07-19', 'Normal Work Time'),
(2020173, 'CYNTHIA', '', 'MANALO', 'Female', '', 'Single', '0000-00-00', 1, '', 33, 'Active', '2000-07-20', 'Normal Work Time'),
(2020174, 'EDITHA', 'VIDAMO', 'MANALO', 'Female', '', 'Single', '0000-00-00', 1, '', 1, 'Active', '2000-07-21', 'Normal Work Time'),
(2020175, 'ELIADA', 'F', 'MANALO', 'Female', '', 'Single', '0000-00-00', 1, '', 37, 'Active', '2000-07-22', 'Normal Work Time'),
(2020176, 'DANIEL', '', 'MARASIGAN', 'Male', '', 'Single', '0000-00-00', 1, '', 10, 'Active', '2000-07-23', 'Normal Work Time'),
(2020177, 'RUSTICO', 'B', 'MARCIAL', 'Male', '', 'Single', '0000-00-00', 1, '', 41, 'Active', '2000-07-24', 'Normal Work Time'),
(2020178, 'ANNE RENELYN', 'P', 'MARINDUQUE', 'Female', '', 'Single', '0000-00-00', 1, '', 42, 'Active', '2000-07-25', 'Normal Work Time'),
(2020179, 'ERNESTO', 'P', 'MARINDUQUE', 'Male', '', 'Single', '0000-00-00', 1, '', 11, 'Active', '2000-07-26', 'Normal Work Time'),
(2020180, 'GERRY', 'C', 'MARINDUQUE', 'Male', '', 'Single', '0000-00-00', 1, '', 13, 'Active', '2000-07-27', 'Normal Work Time'),
(2020181, 'MARISSA', 'M', 'MARINDUQUE', 'Female', '', 'Single', '0000-00-00', 1, '', 5, 'Active', '2000-07-28', 'Normal Work Time'),
(2020182, 'LOLITA', 'R', 'MARQUEZ', 'Female', '', 'Single', '0000-00-00', 1, '', 26, 'Active', '2000-07-29', 'Normal Work Time'),
(2020183, 'BELEN', 'BAYBAY', 'MARTINEZ', 'Female', '', 'Single', '0000-00-00', 1, '', 8, 'Active', '2000-07-30', 'Normal Work Time'),
(2020184, 'EMER', 'V', 'MARTINEZ', 'Male', '', 'Single', '0000-00-00', 1, '', 6, 'Active', '2000-07-31', 'Normal Work Time'),
(2020185, 'MARIA FLOR', 'M', 'MARUNDAN', 'Female', '', 'Single', '0000-00-00', 1, '', 33, 'Active', '2000-08-01', 'Normal Work Time'),
(2020186, 'NORMITA', 'SALAZAR', 'MATIENZO', 'Female', '', 'Single', '0000-00-00', 1, '', 9, 'Active', '2000-08-02', 'Normal Work Time'),
(2020187, 'ARRIES', 'N', 'MENDOZA', 'Male', '', 'Single', '0000-00-00', 1, '', 14, 'Active', '2000-08-03', 'Normal Work Time'),
(2020188, 'JUANITO', 'N', 'MENDOZA', 'Male', '', 'Single', '0000-00-00', 1, '', 35, 'Active', '2000-08-04', 'Normal Work Time'),
(2020189, 'LOURDES', 'G', 'MENDOZA', 'Female', '', 'Single', '0000-00-00', 1, '', 36, 'Active', '2000-08-05', 'Normal Work Time'),
(2020190, 'NORA', 'AMBION', 'MENDOZA', 'Female', '', 'Single', '0000-00-00', 1, '', 1, 'Active', '2000-08-06', 'Normal Work Time'),
(2020191, 'PRESCILA', 'S', 'MENDOZA', 'Female', '', 'Single', '0000-00-00', 1, '', 11, 'Active', '2000-08-07', 'Normal Work Time'),
(2020192, 'ROMEO', 'BAYHON', 'MENDOZA', 'Male', '', 'Single', '0000-00-00', 1, '', 21, 'Active', '2000-08-08', 'Normal Work Time'),
(2020193, 'NAZARIO', '', 'MERCADO', 'Male', '', 'Single', '0000-00-00', 1, '', 10, 'Active', '2000-08-09', 'Normal Work Time'),
(2020194, 'MARIA LOIDA', 'MENDOZA', 'MIRANDA', 'Female', '', 'Single', '0000-00-00', 1, '', 1, 'Active', '2000-08-10', 'Normal Work Time'),
(2020195, 'ROBERTO', 'D', 'MIRANDA', 'Male', '', 'Single', '0000-00-00', 1, '', 13, 'Active', '2000-08-11', 'Normal Work Time'),
(2020196, 'EDITH', 'BAYAS', 'MIRANDO', 'Female', '', 'Single', '0000-00-00', 1, '', 13, 'Active', '2000-08-12', 'Normal Work Time'),
(2020197, 'EMMA', 'DL', 'MOLOD', 'Female', '', 'Single', '0000-00-00', 1, '', 13, 'Active', '2000-08-13', 'Normal Work Time'),
(2020198, 'CHARLIE JR.', 'O', 'MONTEALEGRE', 'Male', '', 'Single', '0000-00-00', 1, '', 33, 'Active', '2000-08-14', 'Normal Work Time'),
(2020199, 'EDWIN', 'DE SAGUN', 'MONTENEGRO', 'Male', '', 'Single', '0000-00-00', 1, '', 11, 'Active', '2000-08-15', 'Normal Work Time'),
(2020200, 'HELEN', 'L', 'MONTENEGRO', 'Female', '', 'Single', '0000-00-00', 1, '', 41, 'Active', '2000-08-16', 'Normal Work Time'),
(2020201, 'HENRY', 'S', 'MONTENEGRO', 'Male', '', 'Single', '0000-00-00', 1, '', 37, 'Active', '2000-08-17', 'Normal Work Time'),
(2020202, 'MARISSA', 'P', 'MONTENEGRO', 'Female', '', 'Single', '0000-00-00', 1, '', 8, 'Active', '2000-08-18', 'Normal Work Time'),
(2020203, 'RODELIO', 'A', 'MONTENEGRO', 'Male', '', 'Single', '0000-00-00', 1, '', 11, 'Active', '2000-08-19', 'Normal Work Time'),
(2020204, 'RITA', 'A', 'NAVARRO', 'Female', '', 'Single', '0000-00-00', 1, '', 38, 'Active', '2000-08-20', 'Normal Work Time'),
(2020205, 'PERLITA', 'G', 'NOVICIO', 'Female', '', 'Single', '0000-00-00', 1, '', 28, 'Active', '2000-08-21', 'Normal Work Time'),
(2020206, 'ORLANDO', 'R', 'OCAMPO', 'Male', '', 'Single', '0000-00-00', 1, '', 11, 'Active', '2000-08-22', 'Normal Work Time'),
(2020207, 'RHEALYN', 'BAES', 'OCAMPO', 'Female', '', 'Single', '0000-00-00', 1, '', 1, 'Active', '2000-08-23', 'Normal Work Time'),
(2020208, 'GREATCHEL', 'B', 'OLARTE', 'Female', '', 'Single', '0000-00-00', 1, '', 1, 'Active', '2000-08-24', 'Normal Work Time'),
(2020209, 'NENITA', 'A', 'OLEGARIO', 'Female', '', 'Single', '0000-00-00', 1, '', 29, 'Active', '2000-08-25', 'Normal Work Time'),
(2020210, 'PRECIOSA', 'A', 'OLINO', 'Female', '', 'Single', '0000-00-00', 1, '', 23, 'Active', '2000-08-26', 'Normal Work Time'),
(2020211, 'MARINA', 'B', 'OLIVAR', 'Female', '', 'Single', '0000-00-00', 1, '', 15, 'Active', '2000-08-27', 'Normal Work Time'),
(2020212, 'TRINIDAD', 'DOGELIO', 'ORTIZ', 'Female', '', 'Single', '0000-00-00', 1, '', 23, 'Active', '2000-08-28', 'Normal Work Time'),
(2020213, 'MARY ANN', 'M', 'PAITON', 'Female', '', 'Single', '0000-00-00', 1, '', 12, 'Active', '2000-08-29', 'Normal Work Time'),
(2020214, 'VICENTE', '', 'PALADAN', 'Male', '', 'Single', '0000-00-00', 1, '', 10, 'Active', '2000-08-30', 'Normal Work Time'),
(2020215, 'GIL', 'LONTOC', 'PANALIGAN', 'Male', '', 'Single', '0000-00-00', 1, '', 4, 'Active', '2000-08-31', 'Normal Work Time'),
(2020216, 'CRISTETA', 'MALIMBAN', 'PANGANIBAN', 'Female', '', 'Single', '0000-00-00', 1, '', 20, 'Active', '2000-09-01', 'Normal Work Time'),
(2020217, 'TEOFILA', 'A', 'PARAS', 'Female', '', 'Single', '0000-00-00', 1, '', 11, 'Active', '2000-09-02', 'Normal Work Time'),
(2020218, 'MARCIANA', 'L', 'PARRA', 'Female', '', 'Single', '0000-00-00', 1, '', 18, 'Active', '2000-09-03', 'Normal Work Time'),
(2020219, 'VICTORIA', 'S', 'PARRA', 'Female', '', 'Single', '0000-00-00', 1, '', 21, 'Active', '2000-09-04', 'Normal Work Time'),
(2020220, 'VIOLETA', 'C', 'PARRA', 'Female', '', 'Single', '0000-00-00', 1, '', 36, 'Active', '2000-09-05', 'Normal Work Time'),
(2020221, 'LORENA', 'DEL MUNDO', 'PASCUA', 'Female', '', 'Single', '0000-00-00', 1, '', 33, 'Active', '2000-09-06', 'Normal Work Time'),
(2020222, 'PAULINO', 'P', 'PATERNO', 'Male', '', 'Single', '0000-00-00', 1, '', 21, 'Active', '2000-09-07', 'Normal Work Time'),
(2020223, 'ALEXANDER', '', 'PAYAD', 'Male', '', 'Single', '0000-00-00', 1, '', 10, 'Active', '2000-09-08', 'Normal Work Time'),
(2020224, 'MARICEL ', 'Q', 'PAYAD', 'Female', '', 'Single', '0000-00-00', 1, '', 24, 'Active', '2000-09-09', 'Normal Work Time'),
(2020225, 'MELISSA', 'Q', 'PE?AFIEL', 'Female', '', 'Single', '0000-00-00', 1, '', 8, 'Active', '2000-09-10', 'Normal Work Time'),
(2020226, 'LORYN', 'B', 'PE?AFLORIDA', 'Female', '', 'Single', '0000-00-00', 1, '', 18, 'Active', '2000-09-11', 'Normal Work Time'),
(2020227, 'GLORIA', 'P', 'PENALES', 'Female', '', 'Single', '0000-00-00', 1, '', 5, 'Active', '2000-09-12', 'Normal Work Time'),
(2020228, 'GUILLERMA', 'B', 'PENALES', 'Female', '', 'Single', '0000-00-00', 1, '', 8, 'Active', '2000-09-13', 'Normal Work Time'),
(2020229, 'LILIBETH', 'B', 'PE?ERO', 'Female', '', 'Single', '0000-00-00', 1, '', 18, 'Active', '2000-09-14', 'Normal Work Time'),
(2020230, 'RUBILINDA', 'CAPUNO', 'PERENA', 'Female', '', 'Single', '0000-00-00', 1, '', 31, 'Active', '2000-09-15', 'Normal Work Time'),
(2020231, 'AIRENE', 'O', 'PEREY', 'Female', '', 'Single', '0000-00-00', 1, '', 9, 'Active', '2000-09-16', 'Normal Work Time'),
(2020232, 'GENNILYN', '', 'PEREY', 'Female', '', 'Single', '0000-00-00', 1, '', 9, 'Active', '2000-09-17', 'Normal Work Time'),
(2020233, 'EDWIN', 'A', 'PERIDO', 'Male', '', 'Single', '0000-00-00', 1, '', 23, 'Active', '2000-09-18', 'Normal Work Time'),
(2020234, 'MARITES', 'V', 'PERIDO', 'Female', '', 'Single', '0000-00-00', 1, '', 38, 'Active', '2000-09-19', 'Normal Work Time'),
(2020235, 'GLENDA', 'DE VILLA', 'PETIL', 'Female', '', 'Single', '0000-00-00', 1, '', 9, 'Active', '2000-09-20', 'Normal Work Time'),
(2020236, 'GLORIA', 'P', 'PINALES', 'Female', '', 'Single', '0000-00-00', 1, '', 5, 'Active', '2000-09-21', 'Normal Work Time'),
(2020237, 'CECILIA', 'A', 'REOSA', 'Female', '', 'Single', '0000-00-00', 1, '', 37, 'Active', '2000-09-22', 'Normal Work Time'),
(2020238, 'AMMY LOU', 'M', 'REPILLO', 'Female', '', 'Single', '0000-00-00', 1, '', 19, 'Active', '2000-09-23', 'Normal Work Time'),
(2020239, 'ELSA', 'TUMAGAY', 'REYES', 'Female', '', 'Single', '0000-00-00', 1, '', 37, 'Active', '2000-09-24', 'Normal Work Time'),
(2020240, 'JUANITO', 'P', 'REYES', 'Male', '', 'Single', '0000-00-00', 1, '', 33, 'Active', '2000-09-25', 'Normal Work Time'),
(2020241, 'NORALYN', 'B', 'REYES', 'Female', '', 'Single', '0000-00-00', 1, '', 37, 'Active', '2000-09-26', 'Normal Work Time'),
(2020242, 'OFELIA', 'M', 'ROBINO', 'Female', '', 'Single', '0000-00-00', 1, '', 35, 'Active', '2000-09-27', 'Normal Work Time'),
(2020243, 'CECILLA', 'AUDITOR', 'ROCILLO', 'Female', '', 'Single', '0000-00-00', 1, '', 1, 'Active', '2000-09-28', 'Normal Work Time'),
(2020244, 'GREGORIO', '', 'RODRIGUEZ', 'Male', '', 'Single', '0000-00-00', 1, '', 10, 'Active', '2000-09-29', 'Normal Work Time'),
(2020245, 'IGNACIO', '', 'RODRIGUEZ', 'Male', '', 'Single', '0000-00-00', 1, '', 10, 'Active', '2000-09-30', 'Normal Work Time'),
(2020246, 'JOEL', '', 'RODRIGUEZ', 'Male', '', 'Single', '0000-00-00', 1, '', 10, 'Active', '2000-10-01', 'Normal Work Time'),
(2020247, 'EDITH', 'D', 'ROMILLA', 'Female', '', 'Single', '0000-00-00', 1, '', 36, 'Active', '2000-10-02', 'Normal Work Time'),
(2020248, 'FLORENCIA', 'M', 'ROZUL', 'Female', '', 'Single', '0000-00-00', 1, '', 18, 'Active', '2000-10-03', 'Normal Work Time'),
(2020249, 'LUCY', 'M', 'SALONGA', 'Female', '', 'Single', '0000-00-00', 1, '', 21, 'Active', '2000-10-04', 'Normal Work Time'),
(2020250, 'IVY', 'L', 'SANGALANG', 'Female', '', 'Single', '0000-00-00', 1, '', 33, 'Active', '2000-10-05', 'Normal Work Time'),
(2020251, 'MARICRIS', 'S', 'SANTERA', 'Female', '', 'Single', '0000-00-00', 1, '', 33, 'Active', '2000-10-06', 'Normal Work Time'),
(2020252, 'GINABLETH', 'J', 'SARDINOLA ', 'Female', '', 'Single', '0000-00-00', 1, '', 31, 'Active', '2000-10-07', 'Normal Work Time'),
(2020253, 'BRIGIDA', 'M', 'SEDINO', 'Female', '', 'Single', '0000-00-00', 1, '', 18, 'Active', '2000-10-08', 'Normal Work Time'),
(2020254, 'LUCIO', 'FERNANDEZ', 'SEDUCON', 'Male', '', 'Single', '0000-00-00', 1, '', 15, 'Active', '2000-10-09', 'Normal Work Time'),
(2020255, 'MARILYN', 'B', 'SE?A', 'Female', '', 'Single', '0000-00-00', 1, '', 32, 'Active', '2000-10-10', 'Normal Work Time'),
(2020256, 'KARENE', '', 'SOLANOY', 'Female', '', 'Single', '0000-00-00', 1, '', 33, 'Active', '2000-10-11', 'Normal Work Time'),
(2020257, 'MARISSA', 'DIMAPILIS', 'SUMAGUI', 'Female', '', 'Single', '0000-00-00', 1, '', 11, 'Active', '2000-10-12', 'Normal Work Time'),
(2020258, 'DANILO', '', 'SUMAONG', 'Male', '', 'Single', '0000-00-00', 1, '', 3, 'Active', '2000-10-13', 'Normal Work Time'),
(2020259, 'CARLOS', 'JAVIER', 'SU?IGA', 'Male', '', 'Single', '0000-00-00', 1, '', 16, 'Active', '2000-10-14', 'Normal Work Time'),
(2020260, 'NANETE', 'B', 'SUSA', 'Female', '', 'Single', '0000-00-00', 1, '', 33, 'Active', '2000-10-15', 'Normal Work Time'),
(2020261, 'MARIA EVELYN', 'C', 'TA?EDO', 'Female', '', 'Single', '0000-00-00', 1, '', 8, 'Active', '2000-10-16', 'Normal Work Time'),
(2020262, 'CAROLINA', 'ESMERALDA', 'TOLENTINO', 'Female', '', 'Single', '0000-00-00', 1, '', 9, 'Active', '2000-10-17', 'Normal Work Time'),
(2020263, 'FE', 'M', 'TOLENTINO', 'Female', '', 'Single', '0000-00-00', 1, '', 35, 'Active', '2000-10-18', 'Normal Work Time'),
(2020264, 'DINAH', 'GARCIA', 'TORRES', 'Female', '', 'Single', '0000-00-00', 1, '', 9, 'Active', '2000-10-19', 'Normal Work Time'),
(2020265, 'SONIA', 'M', 'TORRES', 'Female', '', 'Single', '0000-00-00', 1, '', 5, 'Active', '2000-10-20', 'Normal Work Time'),
(2020266, 'FLORDELIZA', 'M', 'TULIAO', 'Female', '', 'Single', '0000-00-00', 1, '', 1, 'Active', '2000-10-21', 'Normal Work Time'),
(2020267, 'DIVINA', 'R', 'UNTALAN', 'Female', '', 'Single', '0000-00-00', 1, '', 19, 'Active', '2000-10-22', 'Normal Work Time'),
(2020268, 'DORMILUNA', 'ELESTERIO', 'VELUZ', 'Female', '', 'Single', '0000-00-00', 1, '', 9, 'Active', '2000-10-23', 'Normal Work Time'),
(2020269, 'ANACIETA', 'M', 'VERGARA', 'Female', '', 'Single', '0000-00-00', 1, '', 18, 'Active', '2000-10-24', 'Normal Work Time'),
(2020270, 'TERESITA', 'J', 'VERGARA', 'Female', '', 'Single', '0000-00-00', 1, '', 33, 'Active', '2000-10-25', 'Normal Work Time'),
(2020271, 'WINNIE', 'R', 'VIDALLO', 'Female', '', 'Single', '0000-00-00', 1, '', 19, 'Active', '2000-10-26', 'Normal Work Time'),
(2020272, 'PABLO', 'B', 'VILLANUEVA', 'Male', '', 'Single', '0000-00-00', 1, '', 35, 'Active', '2000-10-27', 'Normal Work Time'),
(2020273, 'MA. CANDELARIA', 'D', 'VILLAVIRAY', 'Female', '', 'Single', '0000-00-00', 1, '', 35, 'Active', '2000-10-28', 'Normal Work Time'),
(2020274, 'MAR CLYDE', 'D', 'VILLAVIRAY', 'Male', '', 'Single', '0000-00-00', 1, '', 13, 'Active', '2000-10-29', 'Normal Work Time');

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
(3, 'JUELSSS', '2021-02-24'),
(4, 'DDD', '2021-02-02');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_leave_application`
--

CREATE TABLE `tbl_leave_application` (
  `intApplication_ID` int(11) NOT NULL,
  `intEmployee_ID` int(11) NOT NULL,
  `intDepartment_ID` int(11) NOT NULL,
  `intLeave_ID` int(11) NOT NULL,
  `Filling_Date` date NOT NULL,
  `varDescription_Leave` varchar(255) NOT NULL,
  `Inclusive_Date_From` date NOT NULL,
  `Inclusive_Date_To` date NOT NULL,
  `enumLeave_Status` enum('0','1','2','3','4') NOT NULL,
  `enumRemarks` enum('Pending','Approved','Disapproved') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_leave_application`
--

INSERT INTO `tbl_leave_application` (`intApplication_ID`, `intEmployee_ID`, `intDepartment_ID`, `intLeave_ID`, `Filling_Date`, `varDescription_Leave`, `Inclusive_Date_From`, `Inclusive_Date_To`, `enumLeave_Status`, `enumRemarks`) VALUES
(1, 20201, 18, 1, '2019-11-13', 'Vacation Leave', '2019-11-18', '2019-11-18', '4', 'Approved'),
(2, 20202, 41, 1, '2020-01-25', 'Vacation Leave', '2020-01-20', '2020-01-24', '0', 'Pending'),
(3, 20202, 41, 1, '2020-01-25', 'Vacation Leave', '2020-01-27', '2020-01-31', '0', 'Pending'),
(4, 20203, 25, 2, '2019-11-06', 'Sick Leave', '2019-11-04', '2019-11-05', '0', 'Pending'),
(5, 20203, 25, 2, '2019-10-30', 'Sick Leave', '2019-10-21', '2019-10-21', '0', 'Pending'),
(6, 20203, 25, 2, '2019-10-30', 'Sick Leave', '2019-10-24', '2019-10-24', '0', 'Pending'),
(7, 20203, 25, 3, '2019-12-02', 'Mourning Leave', '2019-12-13', '2019-12-13', '0', 'Pending'),
(8, 20203, 25, 3, '2019-12-02', 'Mourning Leave', '2019-12-18', '2019-12-18', '0', 'Pending'),
(9, 20203, 25, 3, '2019-12-02', 'Mourning Leave', '2019-12-23', '2019-12-23', '0', 'Pending'),
(10, 20203, 25, 1, '2019-12-02', 'Vacation Leave', '2019-12-26', '2019-12-27', '0', 'Pending'),
(11, 20204, 33, 1, '2019-09-19', 'Vacation Leave', '2019-09-29', '2019-09-29', '0', 'Pending');

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
(1, 1, 20201, 120),
(2, 2, 20201, 60),
(3, 1, 20202, 40),
(4, 2, 20202, 60);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_leave_deduction`
--

CREATE TABLE `tbl_leave_deduction` (
  `intLeace_Deduction_ID` int(11) NOT NULL,
  `intEmployee_ID` int(11) NOT NULL,
  `Deduction_Date` date NOT NULL,
  `doubleDeduction` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_leave_deduction`
--

INSERT INTO `tbl_leave_deduction` (`intLeace_Deduction_ID`, `intEmployee_ID`, `Deduction_Date`, `doubleDeduction`) VALUES
(1, 20201, '2019-11-13', 1),
(2, 20202, '2020-01-25', 5),
(3, 20202, '2020-01-25', 5),
(4, 20203, '2019-11-06', 2),
(5, 20203, '2019-10-30', 1),
(6, 20203, '2019-10-30', 1),
(7, 20203, '2019-12-02', 1),
(8, 20203, '2019-12-02', 1),
(9, 20203, '2019-12-02', 1),
(10, 20203, '2019-12-02', 2),
(11, 20204, '2019-09-19', 1);

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
-- Table structure for table `tbl_notification`
--

CREATE TABLE `tbl_notification` (
  `intNotification_ID` int(11) NOT NULL,
  `intApplication_ID` int(11) NOT NULL,
  `intNotification_Status` int(11) NOT NULL,
  `intEmployee_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(1, 'Casual', '1/0', 'N/A', '10954'),
(2, 'Job Order', '0/0', 'N/A', '10000');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_schedule`
--

CREATE TABLE `tbl_schedule` (
  `intSchedule_ID` int(11) NOT NULL,
  `intEmployee_ID` int(11) NOT NULL,
  `intWorkSched_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Indexes for table `tbl_dayoff`
--
ALTER TABLE `tbl_dayoff`
  ADD PRIMARY KEY (`intDayoff_ID`);

--
-- Indexes for table `tbl_department`
--
ALTER TABLE `tbl_department`
  ADD PRIMARY KEY (`intDepartment_ID`);

--
-- Indexes for table `tbl_employee`
--
ALTER TABLE `tbl_employee`
  ADD PRIMARY KEY (`intEmployee_ID`);

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
  ADD PRIMARY KEY (`intLeace_Deduction_ID`);

--
-- Indexes for table `tbl_leave_type`
--
ALTER TABLE `tbl_leave_type`
  ADD PRIMARY KEY (`intLeave_ID`);

--
-- Indexes for table `tbl_notification`
--
ALTER TABLE `tbl_notification`
  ADD PRIMARY KEY (`intNotification_ID`);

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
-- AUTO_INCREMENT for table `tbl_attendance`
--
ALTER TABLE `tbl_attendance`
  MODIFY `intAttendanceID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_dayoff`
--
ALTER TABLE `tbl_dayoff`
  MODIFY `intDayoff_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_department`
--
ALTER TABLE `tbl_department`
  MODIFY `intDepartment_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `tbl_employee`
--
ALTER TABLE `tbl_employee`
  MODIFY `intEmployee_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2020275;

--
-- AUTO_INCREMENT for table `tbl_holiday`
--
ALTER TABLE `tbl_holiday`
  MODIFY `intHoliday_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_leave_application`
--
ALTER TABLE `tbl_leave_application`
  MODIFY `intApplication_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_leave_balance`
--
ALTER TABLE `tbl_leave_balance`
  MODIFY `intLeave_Balance` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_leave_type`
--
ALTER TABLE `tbl_leave_type`
  MODIFY `intLeave_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_notification`
--
ALTER TABLE `tbl_notification`
  MODIFY `intNotification_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_position`
--
ALTER TABLE `tbl_position`
  MODIFY `intPosition_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_work_schedule`
--
ALTER TABLE `tbl_work_schedule`
  MODIFY `intWorkSched_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
