-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2021 at 03:46 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ttrack`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `id` int(11) NOT NULL,
  `a_name` varchar(40) NOT NULL,
  `obuser` varchar(12) NOT NULL,
  `logdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`id`, `a_name`, `obuser`, `logdate`) VALUES
(1, 'Inquiry-person', 'admin', '0000-00-00 00:00:00'),
(2, 'Inquiry-call', 'admin', '0000-00-00 00:00:00'),
(3, 'Inquiry-email', 'admin', '0000-00-00 00:00:00'),
(4, 'Check and send CRIB repor', 'admin', '0000-00-00 00:00:00'),
(5, 'Photocopying', 'admin', '0000-00-00 00:00:00'),
(6, 'Prepare Documents', 'admin', '0000-00-00 00:00:00'),
(7, 'Visit', 'admin', '0000-00-00 00:00:00'),
(8, 'Reading email', 'admin', '0000-00-00 00:00:00'),
(9, 'Printing', 'admin', '0000-00-00 00:00:00'),
(10, 'System Transaction - T24', 'admin', '0000-00-00 00:00:00'),
(11, 'Fill Documents - Manual', 'admin', '0000-00-00 00:00:00'),
(12, 'Authorization - Manual', 'admin', '0000-00-00 00:00:00'),
(13, 'System Transaction - Workflow', 'admin', '0000-00-00 00:00:00'),
(14, 'Scan documents', 'admin', '0000-00-00 00:00:00'),
(16, 'Data Entry', 'admin', '0000-00-00 00:00:00'),
(17, 'Check - Manual', 'admin', '0000-00-00 00:00:00'),
(18, 'Check - CRIB Report', 'admin', '0000-00-00 00:00:00'),
(19, 'Request Approval - Manual', 'admin', '0000-00-00 00:00:00'),
(20, 'System Transaction - E Fi', 'admin', '0000-00-00 00:00:00'),
(21, 'Inquiry - InsureMeApp', 'admin', '0000-00-00 00:00:00'),
(22, 'Hand over Documents', 'admin', '0000-00-00 00:00:00'),
(23, 'Authorization - email', 'admin', '0000-00-00 00:00:00'),
(24, 'Issue Documents', 'admin', '0000-00-00 00:00:00'),
(25, 'Transfer Recovery Funds', 'admin', '0000-00-00 00:00:00'),
(26, 'Update Renewals', 'admin', '0000-00-00 00:00:00'),
(27, 'Settle Leasing', 'admin', '0000-00-00 00:00:00'),
(28, 'Separate Pawning Items', 'admin', '0000-00-00 00:00:00'),
(29, 'Pack - Manual', 'admin', '0000-00-00 00:00:00'),
(30, 'Deposit - Pawning Items', 'admin', '0000-00-00 00:00:00'),
(31, 'Filing', 'admin', '0000-00-00 00:00:00'),
(32, 'Collect - Pawning Items', 'admin', '0000-00-00 00:00:00'),
(33, 'Release - Pawning Items', 'admin', '0000-00-00 00:00:00'),
(34, 'Inquiry - Letters', 'admin', '0000-00-00 00:00:00'),
(35, 'Caliber - Equipments', 'admin', '0000-00-00 00:00:00'),
(36, 'Stock Counting', 'admin', '0000-00-00 00:00:00'),
(37, 'System Transaction - PMS', 'admin', '0000-00-00 00:00:00'),
(38, 'System Check Plutus', 'admin', '0000-00-00 00:00:00'),
(39, 'System Tranaction Risk Ra', 'admin', '0000-00-00 00:00:00'),
(40, 'Sign or Stamp', 'admin', '0000-00-00 00:00:00'),
(41, 'Authorization T24', 'admin', '0000-00-00 00:00:00'),
(42, 'System Tranaction SMS Sol', 'admin', '0000-00-00 00:00:00'),
(43, 'Authorization SMS solutio', 'admin', '0000-00-00 00:00:00'),
(44, 'Authorization Workflow', 'admin', '0000-00-00 00:00:00'),
(45, 'Inquiry-person (Export)', 'admin', '0000-00-00 00:00:00'),
(46, 'Inquiry-person (Import)', 'admin', '0000-00-00 00:00:00'),
(47, 'Scan documents (Export)', 'admin', '0000-00-00 00:00:00'),
(48, 'Scan documents (Import)', 'admin', '0000-00-00 00:00:00'),
(49, 'Inquiry-email (Export)', 'admin', '0000-00-00 00:00:00'),
(50, 'Inquiry-email (Import)', 'admin', '0000-00-00 00:00:00'),
(51, 'Prepare Cash', 'admin', '0000-00-00 00:00:00'),
(52, 'Count Cash', 'admin', '0000-00-00 00:00:00'),
(53, 'Collect Cheques', 'admin', '0000-00-00 00:00:00'),
(54, 'Separate Cheques', 'admin', '0000-00-00 00:00:00'),
(55, 'System Transaction - CITS', 'admin', '0000-00-00 00:00:00'),
(56, 'Dispatch', 'admin', '0000-00-00 00:00:00'),
(57, 'System Trnsaction - e Fin', 'admin', '0000-00-00 00:00:00'),
(58, 'Inquiry - Person', 'admin', '0000-00-00 00:00:00'),
(59, 'Inquiry - Call', 'admin', '0000-00-00 00:00:00'),
(60, 'Inquiry - email', 'admin', '0000-00-00 00:00:00'),
(61, 'Inquiry - Letter', 'admin', '0000-00-00 00:00:00'),
(62, 'Transfer Salary - Manual', 'admin', '0000-00-00 00:00:00'),
(63, 'Cash Balancing', 'admin', '0000-00-00 00:00:00'),
(64, 'Autorization - SMS Soluti', 'admin', '0000-00-00 00:00:00'),
(65, 'Authorization - T24', 'admin', '0000-00-00 00:00:00'),
(66, 'Authorization - Workflow', 'admin', '0000-00-00 00:00:00'),
(67, 'Cash Bundling', 'admin', '2020-11-23 11:07:58'),
(68, 'System Transaction - Western Union', 'admin', '2020-11-23 11:24:35'),
(70, 'Return Mandate', '881180049V', '2020-11-23 12:24:10'),
(74, 'System transaction-workflow-standing ord', 'admin', '2020-11-23 13:04:09'),
(75, 'ATM card issuing-iCard new system', 'admin', '2020-11-23 13:16:57'),
(76, 'Credit appraisal-Plutus', 'admin', '2020-11-23 13:45:53'),
(77, 'Inquiry and cash counting', 'admin', '2020-11-23 15:32:18'),
(78, 'T24 entering and printing', 'admin', '2020-11-23 15:32:40'),
(79, 'Check - TP 5050', 'admin', '2020-11-23 16:32:24'),
(80, 'office meeting', 'admin', '2020-11-24 08:20:13'),
(81, 'Courier acknoledgement and preperation', 'admin', '2020-11-24 09:16:07'),
(82, 'Handling Post Dated Cheques', 'admin', '2020-11-24 13:36:23'),
(83, 'Cheque Purchases', 'admin', '2020-11-24 13:36:43'),
(84, 'Cheque Book Request and Issuance', 'admin', '2020-11-24 13:36:58'),
(85, 'Processing Fee Handling', 'admin', '2020-11-24 13:37:14'),
(86, 'Balance Confirmation', 'admin', '2020-11-24 13:37:27'),
(87, 'Payment Claim Voucher', 'admin', '2020-11-24 13:37:43'),
(88, 'Manual Salary Transfers', 'admin', '2020-11-24 13:37:56'),
(89, 'Letter Issuance', 'admin', '2020-11-24 13:38:12'),
(90, 'EOD Account Balancing', 'admin', '2020-11-24 13:38:24'),
(92, 'ATM Reconsilation', 'admin', '2020-11-24 13:38:52'),
(93, 'Branchless Operation', 'admin', '2020-11-24 13:39:05'),
(94, 'Card Issuance', 'admin', '2020-11-24 13:39:16'),
(95, 'Stationary and Gifts Ordering', 'admin', '2020-11-24 13:39:33'),
(96, 'Document Archiving', 'admin', '2020-11-24 13:39:45'),
(97, 'Weekly excess report update', 'admin', '2020-11-24 13:43:22'),
(98, 'Change Cash notes', 'admin', '2020-11-25 13:25:59'),
(99, 'TOD Facility Granting', 'admin', '2020-11-25 13:38:36'),
(100, 'Cash Deposit in main vault', 'admin', '2020-11-25 16:51:00');

-- --------------------------------------------------------

--
-- Table structure for table `act_family`
--

CREATE TABLE `act_family` (
  `act_id` int(11) NOT NULL,
  `fam_id` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `act_family`
--

INSERT INTO `act_family` (`act_id`, `fam_id`) VALUES
(1, '1'),
(1, '10'),
(1, '11'),
(1, '12'),
(1, '13'),
(1, '14'),
(1, '15'),
(1, '16'),
(1, '17'),
(1, '18'),
(1, '19'),
(1, '2'),
(1, '20'),
(1, '21'),
(1, '23'),
(1, '24'),
(1, '25'),
(1, '26'),
(1, '27'),
(1, '28'),
(1, '29'),
(1, '3'),
(1, '30'),
(1, '32'),
(1, '38'),
(1, '39'),
(1, '4'),
(1, '5'),
(1, '6'),
(1, '7'),
(1, '8'),
(1, '9'),
(2, '1'),
(2, '10'),
(2, '11'),
(2, '12'),
(2, '2'),
(2, '22'),
(2, '23'),
(2, '25'),
(2, '26'),
(2, '3'),
(2, '37'),
(2, '38'),
(2, '39'),
(2, '4'),
(2, '5'),
(3, '1'),
(3, '10'),
(3, '11'),
(3, '12'),
(3, '13'),
(3, '16'),
(3, '17'),
(3, '2'),
(3, '22'),
(3, '25'),
(3, '28'),
(3, '29'),
(3, '3'),
(3, '30'),
(3, '32'),
(3, '37'),
(3, '38'),
(3, '39'),
(3, '4'),
(3, '5'),
(4, '1'),
(4, '13'),
(4, '16'),
(4, '2'),
(4, '3'),
(5, '1'),
(5, '11'),
(5, '12'),
(5, '13'),
(5, '16'),
(5, '2'),
(5, '3'),
(6, '1'),
(6, '10'),
(6, '11'),
(6, '12'),
(6, '13'),
(6, '14'),
(6, '15'),
(6, '16'),
(6, '17'),
(6, '18'),
(6, '19'),
(6, '2'),
(6, '20'),
(6, '21'),
(6, '28'),
(6, '29'),
(6, '3'),
(6, '30'),
(6, '32'),
(6, '38'),
(6, '4'),
(6, '40'),
(6, '5'),
(7, '1'),
(7, '11'),
(7, '12'),
(7, '2'),
(7, '40'),
(7, '5'),
(8, '1'),
(8, '4'),
(9, '1'),
(9, '11'),
(9, '12'),
(9, '14'),
(9, '15'),
(9, '17'),
(9, '18'),
(9, '19'),
(9, '25'),
(9, '26'),
(9, '27'),
(9, '37'),
(9, '38'),
(9, '39'),
(9, '4'),
(9, '40'),
(9, '5'),
(9, '6'),
(9, '7'),
(9, '9'),
(10, '1'),
(10, '11'),
(10, '12'),
(10, '13'),
(10, '14'),
(10, '15'),
(10, '16'),
(10, '17'),
(10, '18'),
(10, '19'),
(10, '20'),
(10, '22'),
(10, '23'),
(10, '24'),
(10, '25'),
(10, '26'),
(10, '27'),
(10, '37'),
(10, '38'),
(10, '39'),
(10, '4'),
(10, '40'),
(10, '5'),
(10, '6'),
(11, '11'),
(11, '12'),
(11, '13'),
(11, '14'),
(11, '15'),
(11, '16'),
(11, '17'),
(11, '18'),
(11, '19'),
(11, '2'),
(11, '3'),
(11, '5'),
(12, '14'),
(12, '15'),
(12, '16'),
(12, '17'),
(12, '18'),
(12, '2'),
(12, '20'),
(12, '22'),
(12, '23'),
(12, '24'),
(12, '25'),
(12, '26'),
(12, '27'),
(12, '3'),
(12, '37'),
(12, '38'),
(12, '39'),
(12, '4'),
(12, '40'),
(12, '5'),
(13, '13'),
(13, '16'),
(13, '19'),
(13, '2'),
(13, '3'),
(13, '37'),
(13, '40'),
(14, '10'),
(14, '13'),
(14, '15'),
(14, '16'),
(14, '18'),
(14, '19'),
(14, '2'),
(14, '21'),
(14, '28'),
(14, '29'),
(14, '30'),
(14, '32'),
(14, '38'),
(14, '4'),
(14, '40'),
(14, '5'),
(15, '13'),
(15, '14'),
(15, '15'),
(15, '16'),
(15, '17'),
(15, '18'),
(15, '20'),
(15, '21'),
(15, '4'),
(16, '4'),
(17, '37'),
(17, '38'),
(17, '39'),
(17, '40'),
(17, '5'),
(17, '6'),
(17, '8'),
(17, '9'),
(18, '11'),
(18, '12'),
(18, '5'),
(19, '22'),
(19, '23'),
(19, '24'),
(19, '25'),
(19, '26'),
(19, '27'),
(19, '38'),
(19, '5'),
(20, '10'),
(20, '5'),
(20, '6'),
(20, '7'),
(20, '8'),
(20, '9'),
(21, '5'),
(22, '5'),
(23, '20'),
(23, '38'),
(23, '40'),
(23, '5'),
(24, '5'),
(25, '5'),
(26, '5'),
(27, '5'),
(28, '6'),
(29, '6'),
(29, '8'),
(30, '6'),
(30, '8'),
(31, '14'),
(31, '15'),
(31, '17'),
(31, '18'),
(31, '22'),
(31, '23'),
(31, '24'),
(31, '25'),
(31, '26'),
(31, '27'),
(31, '38'),
(31, '7'),
(31, '9'),
(32, '8'),
(32, '9'),
(33, '9'),
(34, '10'),
(35, '10'),
(36, '10'),
(36, '40'),
(37, '10'),
(37, '40'),
(38, '12'),
(39, '13'),
(39, '16'),
(40, '13'),
(40, '14'),
(40, '15'),
(40, '17'),
(40, '18'),
(40, '19'),
(40, '20'),
(40, '38'),
(41, '13'),
(41, '14'),
(41, '15'),
(41, '17'),
(41, '18'),
(41, '19'),
(41, '20'),
(41, '33'),
(41, '34'),
(41, '35'),
(41, '36'),
(42, '13'),
(42, '16'),
(43, '13'),
(43, '16'),
(44, '16'),
(44, '19'),
(45, '31'),
(46, '31'),
(47, '31'),
(48, '31'),
(49, '31'),
(50, '31'),
(53, '38'),
(54, '38'),
(55, '38'),
(55, '39'),
(55, '40'),
(56, '38'),
(57, '40'),
(58, '40'),
(59, '40'),
(60, '40'),
(61, '40'),
(62, '40'),
(63, '40'),
(64, '40'),
(65, '40'),
(66, '40'),
(67, '40'),
(69, '40'),
(70, '40'),
(75, '13'),
(76, '12'),
(77, '33'),
(77, '34'),
(77, '35'),
(77, '36'),
(78, '33'),
(78, '34'),
(78, '35'),
(78, '36'),
(79, '40'),
(80, '40'),
(81, '40'),
(82, '41'),
(83, '41'),
(84, '41'),
(85, '40'),
(86, '40'),
(87, '40'),
(88, '40'),
(89, '40'),
(90, '40'),
(92, '40'),
(93, '40'),
(94, '40'),
(95, '40'),
(96, '40'),
(97, '40'),
(98, '40'),
(99, '40'),
(100, '40');

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `BID` varchar(10) NOT NULL DEFAULT '',
  `BNAME` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`BID`, `BNAME`) VALUES
('2', 'Piliyandala'),
('3', 'Nugegoda'),
('74', 'Narahenpita');

-- --------------------------------------------------------

--
-- Table structure for table `counter`
--

CREATE TABLE `counter` (
  `id` int(11) NOT NULL,
  `user_ID` varchar(20) NOT NULL,
  `date_time` date NOT NULL,
  `time` time NOT NULL,
  `count` int(11) NOT NULL,
  `ob_nic` varchar(12) NOT NULL,
  `bid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `jobID` int(11) NOT NULL,
  `job` varchar(25) NOT NULL,
  `job_des` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`jobID`, `job`, `job_des`) VALUES
(1, 'Not Selected', '0'),
(2, 'Email sending ', '1'),
(3, 'Printing', '1'),
(4, 'Scanning', '1'),
(5, 'Office meeting', '1'),
(6, 'Customer Inquiry', '1'),
(7, 'Customer calls', '1'),
(8, 'Internal mail ', '1'),
(9, 'Call back verification', '1'),
(10, 'T24', '1'),
(11, 'SMS system', '1'),
(12, 'iCard Old', '1'),
(13, 'iCard New', '1'),
(14, 'Balance confirmation (Aud', '1'),
(15, 'Balance confirmation (Vis', '1'),
(16, 'Risk rating system', '1'),
(17, 'Clearing system ', '1'),
(18, 'HCM', '1'),
(19, 'Western Union', '1'),
(20, 'Other activities', '1'),
(21, 'Not Selected', '0'),
(22, 'Printing', '2'),
(23, 'Scanning', '2'),
(24, 'Customer calls', '2'),
(25, 'Customer inquiry', '2'),
(26, 'Customer visits', '2'),
(27, 'Legal visits', '2'),
(28, 'Morning clearing', '2'),
(29, 'Email (inward/outward)', '2'),
(30, 'Daily excess monitoring', '2'),
(31, 'Performing SME assets', '2'),
(32, 'Performing SME liabilitie', '2'),
(33, 'T24', '2'),
(34, 'CRIB system', '2'),
(35, 'Workflow', '2'),
(36, 'HCM', '2'),
(37, 'OASYS', '2'),
(38, 'Other', '2'),
(39, 'Not Selected', '0'),
(40, 'Scrutinizing vouchers', '3'),
(41, 'Customer visits', '3'),
(42, 'Office meeting', '3'),
(43, 'Customer Inquiry', '3'),
(44, 'Customer calls', '3'),
(45, 'Internal mail ', '3'),
(46, 'Monthly audit cheque', '3'),
(47, 'Update key registers', '3'),
(48, 'Tally all registers', '3'),
(49, 'Checking generator', '3'),
(50, 'Hourse keeping', '3'),
(51, 'T24', '3'),
(52, 'SMS system', '3'),
(53, 'iCard Old', '3'),
(54, 'iCard New', '3'),
(55, 'HCM', '3'),
(56, 'CITS (Inward cheques)', '3'),
(57, 'OMNI', '3'),
(58, 'PMS', '3'),
(59, 'Western Union', '3'),
(60, 'Other', '3'),
(61, 'Customer care', '1'),
(64, 'Account open', '3'),
(67, 'workflow', '1'),
(68, 'CRIB system', '3'),
(69, 'workflow', '1'),
(70, 'manually fill forms', '2'),
(71, 'workflow', '3'),
(72, 'internal call', '1'),
(73, 'internal call', '2'),
(74, 'internal call', '3'),
(78, 'risk rating system', '3'),
(79, 'bank guarantee process', '2'),
(80, 'cheque outward approval', '3'),
(81, 'CITS', '1'),
(82, 'document preparation for ', '1'),
(84, 'document filing', '1'),
(85, 'day end cash balance', '1'),
(86, 'day end report generating', '1'),
(87, 'day end report generating', '2'),
(88, 'day end report generating', '3'),
(89, 'day end cash balance', '3'),
(90, 'Day end voucher balancing', '3'),
(91, 'Day end voucher balancing', '1'),
(92, 'Email(inward/outward)', '1'),
(93, 'check daily HO courier pa', '3'),
(94, 'Prepare daily courier pac', '1');

-- --------------------------------------------------------

--
-- Table structure for table `jobcat`
--

CREATE TABLE `jobcat` (
  `id` int(11) NOT NULL,
  `jobcat` varchar(30) NOT NULL,
  `obuser` varchar(12) NOT NULL,
  `add_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobcat`
--

INSERT INTO `jobcat` (`id`, `jobcat`, `obuser`, `add_date`) VALUES
(0, 'Other', '', '0000-00-00 00:00:00'),
(1, 'Front Office', '', '0000-00-00 00:00:00'),
(2, 'Credit Officer', '', '0000-00-00 00:00:00'),
(3, 'Manager', '', '0000-00-00 00:00:00'),
(4, '', 'admin', '2020-11-25 13:36:49'),
(5, '', 'admin', '2020-11-25 13:37:39');

-- --------------------------------------------------------

--
-- Table structure for table `logging`
--

CREATE TABLE `logging` (
  `logID` int(11) NOT NULL,
  `NIC` varchar(12) NOT NULL,
  `S_date` date NOT NULL,
  `S_time` time NOT NULL,
  `E_date` date NOT NULL,
  `E_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logging`
--

INSERT INTO `logging` (`logID`, `NIC`, `S_date`, `S_time`, `E_date`, `E_time`) VALUES
(313, 'hemal', '2121-08-12', '21:23:53', '0000-00-00', '00:00:00'),
(314, 'hemal', '2121-08-12', '21:26:12', '0000-00-00', '00:00:00'),
(315, 'hemal', '2121-08-12', '21:28:43', '0000-00-00', '00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `obuser`
--

CREATE TABLE `obuser` (
  `nic` varchar(14) NOT NULL,
  `name` varchar(40) NOT NULL,
  `pw` varchar(20) NOT NULL,
  `cat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `obuser`
--

INSERT INTO `obuser` (`nic`, `name`, `pw`, `cat`) VALUES
('792383904V', 'Pradeesh', '1979', 1),
('admin', 'ADMIN', 'admin123', 2);

-- --------------------------------------------------------

--
-- Table structure for table `ob_log`
--

CREATE TABLE `ob_log` (
  `nic` varchar(14) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `bid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ob_log`
--

INSERT INTO `ob_log` (`nic`, `date`, `time`, `bid`) VALUES
('admin', '2121-08-12', '21:27:29', 2);

-- --------------------------------------------------------

--
-- Table structure for table `ob_track`
--

CREATE TABLE `ob_track` (
  `id` int(11) NOT NULL,
  `docno` varchar(10) NOT NULL,
  `date` date NOT NULL,
  `start_time` time NOT NULL,
  `banker_nic` varchar(14) NOT NULL,
  `f_id` varchar(11) NOT NULL,
  `task_id` int(11) NOT NULL,
  `remark` varchar(50) NOT NULL,
  `end_time` time NOT NULL,
  `reason_id` int(11) NOT NULL,
  `ob_nic` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pro_family`
--

CREATE TABLE `pro_family` (
  `f_id` int(10) NOT NULL,
  `f_name` varchar(60) DEFAULT NULL,
  `obuser` varchar(12) NOT NULL,
  `log_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pro_family`
--

INSERT INTO `pro_family` (`f_id`, `f_name`, `obuser`, `log_date`) VALUES
(1, 'Retail Loan process -Housing Loan', 'admin', '0000-00-00 00:00:00'),
(2, 'Retail Loan process -DML', 'admin', '0000-00-00 00:00:00'),
(3, 'Retail Loan process -Credit Card', 'admin', '0000-00-00 00:00:00'),
(4, 'Retail Loan process-Cashback', 'admin', '0000-00-00 00:00:00'),
(5, 'Retail Loan process-Leasing', 'admin', '0000-00-00 00:00:00'),
(6, 'Retail Loan process-Pawning-New', 'admin', '0000-00-00 00:00:00'),
(7, 'Retail Loan process-Pawning-Part payment', 'admin', '0000-00-00 00:00:00'),
(8, 'Retail Loan process-Pawning-Renewals', 'admin', '0000-00-00 00:00:00'),
(9, 'Retail Loan process-Pawning-Settlements', 'admin', '0000-00-00 00:00:00'),
(10, 'Retail Loan process-Pawning-Other Activities', 'admin', '0000-00-00 00:00:00'),
(11, 'Business Loan ProcessSMES', 'admin', '0000-00-00 00:00:00'),
(12, 'Business Loan Process-Middle market', 'admin', '0000-00-00 00:00:00'),
(13, 'Client Onboarding-Individual- AC opening', 'admin', '0000-00-00 00:00:00'),
(14, 'Client Onboarding-Individual- AC closing', 'admin', '0000-00-00 00:00:00'),
(15, 'Client Onboarding-Individual- AC changes', 'admin', '0000-00-00 00:00:00'),
(16, 'Client Onboarding -Business-AC opening', 'admin', '0000-00-00 00:00:00'),
(17, 'Client Onboarding -Business-AC closing', 'admin', '0000-00-00 00:00:00'),
(18, 'Client Onboarding -Business-AC changes', 'admin', '0000-00-00 00:00:00'),
(19, 'Client Onboarding-FD-AC opening', 'admin', '0000-00-00 00:00:00'),
(20, 'Client Onboarding-FD-AC closing', 'admin', '0000-00-00 00:00:00'),
(21, 'Client Onboarding-FD-AC changes', 'admin', '0000-00-00 00:00:00'),
(22, 'Non cash Transactions- Internal transferss-Email', 'admin', '0000-00-00 00:00:00'),
(23, 'Non cash Transactions- Internal transferss-3rd party', 'admin', '0000-00-00 00:00:00'),
(24, 'Non cash Transactions- Internal transferss-customer walk in', 'admin', '0000-00-00 00:00:00'),
(25, 'Non cash Transactions- CEFT- Email', 'admin', '0000-00-00 00:00:00'),
(26, 'Non cash Transactions- CEFT- 3rd party', 'admin', '0000-00-00 00:00:00'),
(27, 'Non cash Transactions- CEFT-customer walk in', 'admin', '0000-00-00 00:00:00'),
(28, 'Trading-TT', 'admin', '0000-00-00 00:00:00'),
(29, 'Trading-LC', 'admin', '0000-00-00 00:00:00'),
(30, 'Trading-Bank Gaurantee', 'admin', '0000-00-00 00:00:00'),
(31, 'Trading-Export collection', 'admin', '0000-00-00 00:00:00'),
(32, 'Trading-Others', 'admin', '0000-00-00 00:00:00'),
(33, 'Cash-Payments-Client', 'admin', '0000-00-00 00:00:00'),
(34, 'Cash-Payments-3rd party', 'admin', '0000-00-00 00:00:00'),
(35, 'Cash-Deposits- Client', 'admin', '0000-00-00 00:00:00'),
(36, 'Cash-Deposits-3rd party', 'admin', '0000-00-00 00:00:00'),
(37, 'Clearing-Inwards', 'admin', '0000-00-00 00:00:00'),
(38, 'Clearing-Outwards', 'admin', '0000-00-00 00:00:00'),
(39, 'Clearing-Returns', 'admin', '0000-00-00 00:00:00'),
(40, 'Genaral Working ', 'admin', '2020-11-22 21:00:35'),
(41, 'Cheque Book Reated', 'admin', '2020-11-24 13:33:10');

-- --------------------------------------------------------

--
-- Table structure for table `que`
--

CREATE TABLE `que` (
  `id` int(11) NOT NULL,
  `user_ID` varchar(20) NOT NULL,
  `date_time` datetime NOT NULL,
  `count` int(11) NOT NULL,
  `ob_nic` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reason`
--

CREATE TABLE `reason` (
  `RID` int(11) NOT NULL,
  `REASON` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reason`
--

INSERT INTO `reason` (`RID`, `REASON`) VALUES
(1, 'Job Completed'),
(2, 'Other Priority job started'),
(3, 'Pending approvals'),
(4, 'Network slowness');

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE `task` (
  `TID` int(11) NOT NULL,
  `docno` varchar(10) NOT NULL,
  `NIC` varchar(12) NOT NULL,
  `f_id` varchar(11) NOT NULL,
  `JOBID` int(11) NOT NULL,
  `remark` varchar(50) NOT NULL,
  `JSDATE` date NOT NULL,
  `JSTIME` time NOT NULL,
  `JEDATE` date NOT NULL,
  `JETIME` time NOT NULL,
  `RID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`TID`, `docno`, `NIC`, `f_id`, `JOBID`, `remark`, `JSDATE`, `JSTIME`, `JEDATE`, `JETIME`, `RID`) VALUES
(3352, '1/', 'hemal', '1', 2, 'q', '2121-08-12', '21:24:16', '2121-08-12', '21:24:20', 1),
(3353, '13/', 'hemal', '13', 1, '', '2121-08-12', '21:24:49', '2121-08-12', '21:24:50', 1),
(3355, '10/', 'hemal', '10', 1, '', '2121-08-12', '21:26:37', '2121-08-12', '21:26:40', 1),
(3356, '12/', 'hemal', '12', 1, '', '2121-08-12', '21:28:48', '2121-08-12', '21:28:51', 1),
(3357, '10/', 'hemal', '10', 1, '', '2121-08-12', '21:29:02', '2121-08-12', '21:29:02', 1),
(3358, '/', 'hemal', '', 0, '', '2121-08-12', '21:30:00', '2121-08-12', '21:30:02', 3);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `NIC` varchar(12) NOT NULL,
  `fname` varchar(15) NOT NULL,
  `lname` varchar(15) NOT NULL,
  `pw` varchar(20) NOT NULL,
  `BID` varchar(10) NOT NULL,
  `cat` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`NIC`, `fname`, `lname`, `pw`, `BID`, `cat`, `status`) VALUES
('hemal', 'Hemal Kaviraj', 'hemal', '123', '2', 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `a_name` (`a_name`);

--
-- Indexes for table `act_family`
--
ALTER TABLE `act_family`
  ADD PRIMARY KEY (`act_id`,`fam_id`);

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`BID`);

--
-- Indexes for table `counter`
--
ALTER TABLE `counter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`jobID`);

--
-- Indexes for table `jobcat`
--
ALTER TABLE `jobcat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logging`
--
ALTER TABLE `logging`
  ADD PRIMARY KEY (`logID`);

--
-- Indexes for table `obuser`
--
ALTER TABLE `obuser`
  ADD PRIMARY KEY (`nic`);

--
-- Indexes for table `ob_log`
--
ALTER TABLE `ob_log`
  ADD PRIMARY KEY (`nic`,`date`,`time`);

--
-- Indexes for table `ob_track`
--
ALTER TABLE `ob_track`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pro_family`
--
ALTER TABLE `pro_family`
  ADD PRIMARY KEY (`f_id`),
  ADD UNIQUE KEY `f_name` (`f_name`),
  ADD UNIQUE KEY `f_name_4` (`f_name`),
  ADD UNIQUE KEY `f_name_5` (`f_name`),
  ADD KEY `f_name_2` (`f_name`),
  ADD KEY `f_name_3` (`f_name`),
  ADD KEY `f_name_6` (`f_name`);

--
-- Indexes for table `que`
--
ALTER TABLE `que`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reason`
--
ALTER TABLE `reason`
  ADD PRIMARY KEY (`RID`);

--
-- Indexes for table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`TID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`NIC`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE `activity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `counter`
--
ALTER TABLE `counter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=583;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `jobID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `jobcat`
--
ALTER TABLE `jobcat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `logging`
--
ALTER TABLE `logging`
  MODIFY `logID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=316;

--
-- AUTO_INCREMENT for table `ob_track`
--
ALTER TABLE `ob_track`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4921;

--
-- AUTO_INCREMENT for table `pro_family`
--
ALTER TABLE `pro_family`
  MODIFY `f_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `que`
--
ALTER TABLE `que`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reason`
--
ALTER TABLE `reason`
  MODIFY `RID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `task`
--
ALTER TABLE `task`
  MODIFY `TID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3359;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
