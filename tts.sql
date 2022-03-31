-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2021 at 07:14 PM
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
-- Database: `tts`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `id` int(55) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL,
  `types` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`id`, `name`, `username`, `pass`, `types`) VALUES
(1, 'admin', 'adminpass', 'passadmin', 'admin'),
(2, 'data admin', 'dataadmin', 'datapass', 'datamanage'),
(3, 'Enquiry Admin', 'leadadmin', 'leadpass', 'enquiry'),
(4, 'Sales Admin', 'saleadmin', 'salepass', 'sales'),
(1, 'admin', 'adminpass', 'passadmin', 'admin'),
(2, 'data admin', 'dataadmin', 'datapass', 'datamanage'),
(3, 'Enquiry Admin', 'leadadmin', 'leadpass', 'enquiry'),
(4, 'Sales Admin', 'saleadmin', 'salepass', 'sales');

-- --------------------------------------------------------

--
-- Table structure for table `admin_packages`
--

CREATE TABLE `admin_packages` (
  `id` int(11) NOT NULL,
  `supplier_id` varchar(255) DEFAULT NULL,
  `package_id` varchar(255) DEFAULT NULL,
  `pkg_name` varchar(255) NOT NULL,
  `pkg_img` varchar(255) NOT NULL,
  `city_to` varchar(255) NOT NULL,
  `city_from` varchar(255) NOT NULL,
  `num_nights` varchar(255) NOT NULL,
  `num_days` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `ex_covered` varchar(255) NOT NULL,
  `exp_date` varchar(255) NOT NULL,
  `inclusion` varchar(255) NOT NULL,
  `descrip` varchar(255) NOT NULL,
  `t_c` varchar(255) NOT NULL,
  `pkg_price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_packages`
--

INSERT INTO `admin_packages` (`id`, `supplier_id`, `package_id`, `pkg_name`, `pkg_img`, `city_to`, `city_from`, `num_nights`, `num_days`, `location`, `ex_covered`, `exp_date`, `inclusion`, `descrip`, `t_c`, `pkg_price`) VALUES
(1, '', 'TTSS0001', 'net check', 'adnan-siddique-the-travel-square.png', '1', '1', '10', '10', '1', '1', '1', '1', '1', '1', '1000'),
(2, '', 'TTSS0002', 'net check', 'adnan-siddique-the-travel-square.png', '2', '22', '20', '20', '2', '2', '2', '2', '12', '12', '22000'),
(3, 'TTSS0004', 'TTSS0003', '1', 'DSC_0121-01.jpeg', '1', '1', '31', '31', '1', '1', '01/07/2020', '1', '1', '1', '5000'),
(4, 'TTSS0004', 'TTSS0004', '1', 'DSC_0121-01.jpeg', '1', '1', '10', '10', '1', '1', '1', '1', '1', '1', '1100'),
(5, 'TTSS00015', 'TTSS0005', '1', 'DSC_0121-01.jpeg', '1', '1', '10', '10', '1', '1', '1', '1', '1', '1', '1700'),
(6, '', 'TTSS0006', 'net check', 'DSC_0121-01.jpeg', '5', '5', '12', '01', '5', '5', '03/01/2020', '5', '5', '5\r\n', '500'),
(7, '', 'TTSS0007', 'now', 'DSC_0099-02.jpeg', 'now', 'now', '01', '01', 'now', 'now', '03/01/2020', 'now', 'now', 'nwo', '5000'),
(8, 'TTSS0004', 'TTSS0008', 'net check', 'adnan-siddique-the-travel-square.png', 'New Delhi', 'New Delhi', '14', '04', 'New Delhi', 'k', '03/16/2020', 'bjk', 'lj', 'lj', '1550'),
(9, 'TTSS00015', 'TTSS0009', 'package_id', 'adnan-siddique-the-travel-square.png', 'package_id', 'package_id', '01', '02', 'package_id', 'package_id', '03/02/2020', 'package_id', 'package_id', 'package_id', '7000'),
(10, '4', 'TTSS0010', '4', 'DSC_0104-01.jpeg', '4', '4', '02', '02', '4', '4', '03/02/2020', '4', '4', '4', '2000'),
(1, '', 'TTSS0001', 'net check', 'adnan-siddique-the-travel-square.png', '1', '1', '10', '10', '1', '1', '1', '1', '1', '1', '1000'),
(2, '', 'TTSS0002', 'net check', 'adnan-siddique-the-travel-square.png', '2', '22', '20', '20', '2', '2', '2', '2', '12', '12', '22000'),
(3, 'TTSS0004', 'TTSS0003', '1', 'DSC_0121-01.jpeg', '1', '1', '31', '31', '1', '1', '01/07/2020', '1', '1', '1', '5000'),
(4, 'TTSS0004', 'TTSS0004', '1', 'DSC_0121-01.jpeg', '1', '1', '10', '10', '1', '1', '1', '1', '1', '1', '1100'),
(5, 'TTSS00015', 'TTSS0005', '1', 'DSC_0121-01.jpeg', '1', '1', '10', '10', '1', '1', '1', '1', '1', '1', '1700'),
(6, '', 'TTSS0006', 'net check', 'DSC_0121-01.jpeg', '5', '5', '12', '01', '5', '5', '03/01/2020', '5', '5', '5\r\n', '500'),
(7, '', 'TTSS0007', 'now', 'DSC_0099-02.jpeg', 'now', 'now', '01', '01', 'now', 'now', '03/01/2020', 'now', 'now', 'nwo', '5000'),
(8, 'TTSS0004', 'TTSS0008', 'net check', 'adnan-siddique-the-travel-square.png', 'New Delhi', 'New Delhi', '14', '04', 'New Delhi', 'k', '03/16/2020', 'bjk', 'lj', 'lj', '1550'),
(9, 'TTSS00015', 'TTSS0009', 'package_id', 'adnan-siddique-the-travel-square.png', 'package_id', 'package_id', '01', '02', 'package_id', 'package_id', '03/02/2020', 'package_id', 'package_id', 'package_id', '7000'),
(10, '4', 'TTSS0010', '4', 'DSC_0104-01.jpeg', '4', '4', '02', '02', '4', '4', '03/02/2020', '4', '4', '4', '2000');

-- --------------------------------------------------------

--
-- Table structure for table `angular_test`
--

CREATE TABLE `angular_test` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `angular_test`
--

INSERT INTO `angular_test` (`id`, `name`, `email`, `contact`) VALUES
(1, 'adnan', 'adnan', '7701853375'),
(2, 'adnan', 'adnan@gmail.com', '12345'),
(1, 'adnan', 'adnan', '7701853375'),
(2, 'adnan', 'adnan@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `banquets_enquiry`
--

CREATE TABLE `banquets_enquiry` (
  `id` int(11) NOT NULL,
  `destination` varchar(255) NOT NULL,
  `departure_date` varchar(255) NOT NULL,
  `cruise_length` varchar(255) NOT NULL,
  `cruise_line` varchar(255) NOT NULL,
  `origin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cab_enquiry`
--

CREATE TABLE `cab_enquiry` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `cab_trip_way` varchar(255) DEFAULT NULL,
  `pick_up_city` varchar(255) DEFAULT NULL,
  `drop_off_city` varchar(255) DEFAULT NULL,
  `pick_up_date` varchar(255) DEFAULT NULL,
  `pick_up_time` varchar(255) DEFAULT NULL,
  `drop_off_date` varchar(255) DEFAULT NULL,
  `drop_off_time` varchar(255) DEFAULT NULL,
  `vehicles` varchar(255) DEFAULT NULL,
  `total_pax` varchar(255) DEFAULT NULL,
  `adults` varchar(255) DEFAULT NULL,
  `kids` varchar(255) DEFAULT NULL,
  `car_type` varchar(255) DEFAULT NULL,
  `car_type_capacity` varchar(255) DEFAULT NULL,
  `descrip` varchar(255) DEFAULT NULL,
  `origin` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cab_enquiry`
--

INSERT INTO `cab_enquiry` (`id`, `name`, `mobile`, `cab_trip_way`, `pick_up_city`, `drop_off_city`, `pick_up_date`, `pick_up_time`, `drop_off_date`, `drop_off_time`, `vehicles`, `total_pax`, `adults`, `kids`, `car_type`, `car_type_capacity`, `descrip`, `origin`) VALUES
(1, NULL, '7701853375', 'Self Drive', 'New Delhi', 'New Delhi', 'dfs', '1', '02/04/2020', '1', '1', '1', '1', '1', '1', '1', '1', 'partner'),
(1, NULL, '7701853375', 'Self Drive', 'New Delhi', 'New Delhi', 'dfs', '1', '02/04/2020', '1', '1', '1', '1', '1', '1', '1', '1', 'partner');

-- --------------------------------------------------------

--
-- Table structure for table `cancellation_refund`
--

CREATE TABLE `cancellation_refund` (
  `id` int(11) NOT NULL,
  `cancel_by_id` varchar(10) NOT NULL,
  `cancel_by_type` varchar(10) NOT NULL,
  `reason` text NOT NULL,
  `doc` text NOT NULL,
  `status` enum('pending','initiated','completed','rejected') NOT NULL,
  `booking_id` varchar(100) NOT NULL,
  `service_id` varchar(100) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cancellation_refund`
--

INSERT INTO `cancellation_refund` (`id`, `cancel_by_id`, `cancel_by_type`, `reason`, `doc`, `status`, `booking_id`, `service_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '1', 'partner', 'Shaun', '7f13ea33a9397ba62bfea672f80bb56b.jpg', 'pending', 'B-789', 'S-789', '2020-06-09 00:03:37', '2020-06-09 00:03:37', NULL),
(2, '2', 'seller', 'shaun', '6b9e5cf568c2984ca4173e96d61442d5.png', 'pending', 'B-789', 'S-123', '2020-06-13 13:38:34', '2020-06-13 13:38:34', NULL),
(3, '2', 'seller', 'shaun', '6b9e5cf568c2984ca4173e96d61442d51.png', 'pending', 'B-789', 'S-123', '2020-06-13 13:57:40', '2020-06-13 13:57:40', NULL),
(4, '2', 'seller', 'shaun', '6b9e5cf568c2984ca4173e96d61442d52.png', 'pending', 'B-789', 'S-123', '2020-06-13 13:58:19', '2020-06-13 13:58:19', NULL),
(5, '2', 'seller', 'shaun', 'ed11d73c9dc37df15dfe50a05995dbe810.jpg', 'pending', 'B-789', 'S-123', '2020-06-13 14:02:27', '2020-06-13 14:02:27', NULL),
(6, '1', 'partner', 'Testing MAIL CHECKK 128u1u319902-[\\E\'', 'c270eb7dd0e8b6b2e46e7b8efb3a13621.jpg', 'pending', 'TS19887', NULL, '2020-06-28 15:01:18', '2020-06-28 15:01:18', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `city` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `city`) VALUES
(2, 'Agra'),
(3, 'Ahmedabad'),
(4, 'Ajmer'),
(5, 'Allahabad'),
(6, 'Amarnath'),
(7, 'Ambala'),
(8, 'Amritsar'),
(9, 'Andaman'),
(10, 'Aurangabad'),
(11, 'Bangalore'),
(12, 'Bhopal'),
(13, 'Coimbatore'),
(14, 'Corbett'),
(15, 'Dalhousie'),
(16, 'Darjeeling'),
(17, 'Dehradun'),
(18, 'Delhi'),
(19, 'Dharamshala'),
(20, 'Dwarka'),
(21, 'Faridabad'),
(22, 'Gangtok'),
(23, 'Ghaziabad'),
(24, 'Goa'),
(25, 'Haridwar'),
(26, 'Indore'),
(27, 'Jaisalmer'),
(28, 'Jodhpur'),
(29, 'Jaipur'),
(30, 'Kanyakumari'),
(31, 'Kerala'),
(32, 'Kochi'),
(33, 'Kumbhalgarh'),
(34, 'Lakshadweep'),
(35, 'Lucknow'),
(36, 'Ludhiana'),
(37, 'Manali'),
(38, 'Mathura'),
(39, 'Mcleodganj'),
(40, 'Mohali'),
(41, 'Mumbai'),
(42, 'Munnar'),
(43, 'Mussoorie'),
(44, 'Mysore'),
(45, 'Nagpur'),
(46, 'Nainital'),
(47, 'Neemrana'),
(48, 'Noida'),
(49, 'Pathankot'),
(50, 'Patiala'),
(51, 'Patna'),
(52, 'Pondicherry'),
(53, 'Pushkar'),
(54, 'Rajkot'),
(55, 'Ranthambore'),
(56, 'Ratnagiri'),
(57, 'Sanchi'),
(58, 'Shimla'),
(59, 'Shirdi'),
(60, 'Sikkim'),
(61, 'Silchar'),
(62, 'Siliguri'),
(63, 'Solan'),
(64, 'Sonipat'),
(65, 'Srinagar'),
(66, 'Surat'),
(67, 'Thiruvananthapuram'),
(68, 'Tripura'),
(69, 'Udaipur'),
(70, 'Ujjain'),
(71, 'Vadodara'),
(72, 'Visakhapatnam'),
(73, 'Vrindavan'),
(74, 'Wayanad'),
(75, 'Abu');

-- --------------------------------------------------------

--
-- Table structure for table `client_settlement`
--

CREATE TABLE `client_settlement` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `claim_by_id` varchar(10) NOT NULL,
  `claim_by_type` varchar(100) NOT NULL,
  `amount` varchar(10) NOT NULL,
  `currency` varchar(10) NOT NULL,
  `status` enum('PENDING','PROCESSING','SETTLED') NOT NULL DEFAULT 'PENDING',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client_settlement`
--

INSERT INTO `client_settlement` (`id`, `image`, `claim_by_id`, `claim_by_type`, `amount`, `currency`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, '7ef0e3fb228040d2db5c9efb2f08adb5.jpg', '1', 'partner', '500', '1', 'PENDING', '2020-06-04 00:52:21', '2020-06-04 00:52:21', '0000-00-00 00:00:00'),
(3, 'ea3dc39ca0b2f6b5f17abddec1f0e9a4.png', '2', 'seller', '500', '1', 'PENDING', '2020-06-13 14:03:55', '2020-06-13 14:03:55', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `id` int(11) NOT NULL,
  `name` varchar(80) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(80) NOT NULL,
  `message` text NOT NULL,
  `for_` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_form`
--

INSERT INTO `contact_form` (`id`, `name`, `phone`, `email`, `message`, `for_`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Shaun Frost', '7046654102', 'shaun@gmail.com', 'shaun', 'ppc-request', '2020-05-16 16:36:41', '2020-05-16 16:36:41', NULL),
(2, 'Vibhu Gupta', '0870057193', 'myworkspacevibhu@gmail.com', 'testing', 'general-request', '2020-06-28 14:57:56', '2020-06-28 14:57:56', NULL),
(3, 'Vibhu Gupta', '0870057193', 'myworkspacevibhu@gmail.com', 'testing\r\n\r\n', 'business-request', '2020-06-28 14:58:32', '2020-06-28 14:58:32', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cruise_enquiry`
--

CREATE TABLE `cruise_enquiry` (
  `id` int(11) NOT NULL,
  `destination` varchar(255) NOT NULL,
  `when_date` varchar(255) NOT NULL,
  `when_cruise_length` varchar(255) NOT NULL,
  `who_cruise_line` varchar(255) NOT NULL,
  `origin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `currency_tracker`
--

CREATE TABLE `currency_tracker` (
  `id` int(11) NOT NULL,
  `currency_to` varchar(10) NOT NULL,
  `currency_from` varchar(10) NOT NULL,
  `points` varchar(10) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `currency_tracker`
--

INSERT INTO `currency_tracker` (`id`, `currency_to`, `currency_from`, `points`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '1', '2', '0.013', '2020-05-30 12:58:50', '2020-05-30 12:58:50', NULL),
(2, '2', '1', '75.52', '2020-05-30 12:58:50', '2020-05-30 12:58:50', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `email`, `mobile`, `password`) VALUES
(1, 'adnan', 'adnan', '7701853375', '12345'),
(2, 'Adnan Ahmad Siddique', 'adnansiddique620@gmail.com', '7701853375', '12345'),
(1, 'adnan', 'adnan', '7701853375', '12345'),
(2, 'Adnan Ahmad Siddique', 'adnansiddique620@gmail.com', '7701853375', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `direct_suppliers`
--

CREATE TABLE `direct_suppliers` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `pass` varchar(55) DEFAULT '12345',
  `dob` varchar(100) DEFAULT NULL,
  `gender` varchar(100) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `address` varchar(1000) DEFAULT NULL,
  `lm` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `tags` varchar(255) DEFAULT NULL,
  `noe` varchar(100) DEFAULT NULL,
  `coe` varchar(100) DEFAULT NULL,
  `tof` varchar(100) DEFAULT NULL,
  `st` varchar(100) DEFAULT NULL,
  `ct` varchar(100) DEFAULT NULL,
  `oa` varchar(100) DEFAULT NULL,
  `ato` varchar(100) DEFAULT NULL,
  `gst` varchar(100) DEFAULT NULL,
  `ocn` varchar(100) DEFAULT NULL,
  `omid` varchar(100) DEFAULT NULL,
  `web` varchar(100) DEFAULT NULL,
  `pcno` varchar(100) DEFAULT NULL,
  `acno` varchar(100) DEFAULT NULL,
  `uac` varchar(100) DEFAULT NULL,
  `upc` varchar(100) DEFAULT NULL,
  `bn` varchar(100) DEFAULT NULL,
  `ahn` varchar(100) DEFAULT NULL,
  `ifsc` varchar(100) DEFAULT NULL,
  `an` varchar(100) DEFAULT NULL,
  `ucl` varchar(100) DEFAULT NULL,
  `elecb` varchar(100) DEFAULT NULL,
  `inta` varchar(100) DEFAULT NULL,
  `intb` varchar(100) DEFAULT NULL,
  `exta` varchar(100) DEFAULT NULL,
  `extb` varchar(100) DEFAULT NULL,
  `stime` varchar(100) DEFAULT NULL,
  `status` varchar(111) DEFAULT NULL,
  `type` int(255) DEFAULT 1,
  `mark` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `flight_enquiry`
--

CREATE TABLE `flight_enquiry` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `trip_way` varchar(255) DEFAULT NULL,
  `fr_om` varchar(255) DEFAULT NULL,
  `t_o` varchar(255) DEFAULT NULL,
  `departure_date` varchar(255) DEFAULT NULL,
  `departure_time` varchar(255) DEFAULT NULL,
  `departure_airline_name` varchar(255) DEFAULT NULL,
  `arrival_date` varchar(255) DEFAULT NULL,
  `arrival_time` varchar(255) DEFAULT NULL,
  `arrival_airline_name` varchar(255) DEFAULT NULL,
  `total_pax` varchar(255) DEFAULT NULL,
  `adults` varchar(255) DEFAULT NULL,
  `kids` varchar(255) DEFAULT NULL,
  `infants` varchar(255) DEFAULT NULL,
  `flight_ticket_class` varchar(255) DEFAULT NULL,
  `descrip` varchar(255) DEFAULT NULL,
  `origin` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flight_enquiry`
--

INSERT INTO `flight_enquiry` (`id`, `name`, `mobile`, `trip_way`, `fr_om`, `t_o`, `departure_date`, `departure_time`, `departure_airline_name`, `arrival_date`, `arrival_time`, `arrival_airline_name`, `total_pax`, `adults`, `kids`, `infants`, `flight_ticket_class`, `descrip`, `origin`) VALUES
(1, NULL, '7701853375', 'Oneway', 'New Delhi', ' Mumbai', '02/04/2020', '1', '1', '02/04/2020', '1', '1', '1', '1', '1', '1', '1', '1', 'partner'),
(1, NULL, '7701853375', 'Oneway', 'New Delhi', ' Mumbai', '02/04/2020', '1', '1', '02/04/2020', '1', '1', '1', '1', '1', '1', '1', '1', 'partner');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL COMMENT 'id of the city table',
  `links` varchar(255) DEFAULT NULL,
  `groups` varchar(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `city_id`, `links`, `groups`, `name`) VALUES
(1, 75, 'https://chat.whatsapp.com/Gmh8Cxi3mC6GQ7Z2UlGnQS', 'TSDC01AB', 'Mount Abu'),
(2, 2, 'https://chat.whatsapp.com/FLuYCAadN4jE6Fn8sBbZKn', 'TTSDC02AA', 'Agra Central'),
(3, 3, 'https://chat.whatsapp.com/CLzDPQvaRQcAQOENY86Px8', 'TSDC03AD', 'Ahmedabad'),
(4, 4, 'https://chat.whatsapp.com/Bgvx1tTB2CS2QPcKW0uabl', 'TSDC05AR', 'Ajmer'),
(5, 5, 'https://chat.whatsapp.com/CLzDPQvaRQcAQOENY86Px8', 'TSDC06AD', 'Allahabad'),
(6, 6, 'https://chat.whatsapp.com/K7Nvag2DpXNFOH4U6S2kK1', 'TSDC10AH', 'Amarnath'),
(7, 7, 'https://chat.whatsapp.com/Hw8tNKFTIQcAqF6phhpZIj', 'TSDC11AB', 'Ambala'),
(8, 8, 'https://chat.whatsapp.com/KcA3ZZyHBmPKTSCvBManYY', 'TSDC13AS', 'Amritsar'),
(9, 9, 'https://chat.whatsapp.com/C3QK5V3RlyPDBoaEHw4gE8', 'TSDC14AN', 'Andaman'),
(10, 10, 'https://chat.whatsapp.com/BSzB27BPUod72LFyZXyR8y', 'TSDC17AG', 'Aurangabad'),
(11, 11, 'https://chat.whatsapp.com/D4Wlk8gD8E87sE4XJNrnE3', 'TSDC25BE', 'Bangalore'),
(12, 12, 'https://chat.whatsapp.com/JgcTu5fJdLUEOGIQNesknV', 'TSDC35BL', 'Bhopal'),
(13, 13, 'https://chat.whatsapp.com/GOcyPnFGtBX7feS18BNx0Q', 'TSDC49CE', 'Coimbatore'),
(14, 14, 'https://chat.whatsapp.com/BKjtbqjqagM1HNyOgeyhRR', 'TSDC52CT', 'Corbett'),
(15, 15, 'https://chat.whatsapp.com/BHNyEHeg281IwWzTjOTiK5', 'TSDC54DE', 'Dalhousie'),
(16, 16, 'https://chat.whatsapp.com/DOboKxq8BaTJuLcp9buoIM', 'TSDC59DG', 'Darjeeling'),
(17, 17, 'https://chat.whatsapp.com/HrAgpy9NsQpEOOKTyR4ecb', 'TSDC60DN', 'Dehradun'),
(18, 18, 'https://chat.whatsapp.com/GM0qooPtt1g4Zmv6WpOt0k', 'TSDC61DL1', 'Delhi East'),
(19, 19, 'https://chat.whatsapp.com/LhRiiIpQvlxGEKingpn2bd', 'TSDC65DA', 'Dharamshala'),
(20, 20, 'https://chat.whatsapp.com/B87x9X7JulvDn1sw8rMUKZ', 'TSDC71DK', 'Dwarka'),
(21, 21, 'https://chat.whatsapp.com/FQjmUVIL4wwJOCHnsJ2NGf', 'TSDC72FD', 'Faridabad'),
(22, 22, 'https://chat.whatsapp.com/Dv2kRw78HIk7XUdpTZYeIA', 'TSDC75GK', 'Gangtok'),
(23, 23, 'https://chat.whatsapp.com/DlnkWkfKooa73DwdaI44ck', 'TSDC77GZ', 'Ghaziabad'),
(24, 24, 'https://chat.whatsapp.com/EUpONwu5aUa8Bq4eLPg1dO', 'TSDC79GO1', 'Goa, North'),
(25, 25, 'https://chat.whatsapp.com/GDEluLslZimLjIxac0rGkt', 'TSDC92HR', 'Haridwar'),
(26, 26, 'https://chat.whatsapp.com/HwX854AMbId0YBkPOX9Ds7', 'TSDC98IE', 'Indore'),
(27, 27, 'https://chat.whatsapp.com/KV9sQEqTLGS4mgxzkVu96c', 'TSDC102JM', 'Jaisalmer'),
(28, 28, 'https://chat.whatsapp.com/INQGPxPc7NkFfyt5btiJ5u', 'TSDC105JU', 'Jodhpur'),
(29, 29, 'https://chat.whatsapp.com/BdAMVZK6PRxDsziV2Ewk3i', 'TSDC109JR', 'Jaipur'),
(30, 30, 'https://chat.whatsapp.com/DSeslp9QKyvGtBtm9qJQiD', 'TSDC115KI', 'Kanyakumari'),
(31, 31, 'https://chat.whatsapp.com/HcJ9gRKGRqVF0APi6z4xKy', 'TSDC127KA', 'Kerala'),
(32, 32, 'https://chat.whatsapp.com/JDP27IHbCuBBhEt5c1RG7b', 'TSDC134KI', 'Kochi'),
(33, 33, 'https://chat.whatsapp.com/GtcG0nSQmwPIs8qV0CgXrx', 'TSDC147KH', 'Kumbhalgarh'),
(34, 34, 'https://chat.whatsapp.com/HKzX2iYVNwYHY1nwlUAgfQ', 'TSDC153LP', 'Lakshadweep'),
(35, 35, 'https://chat.whatsapp.com/L9heIgs4jFQBZiZEN84BqD', 'TSDC162LW', 'Lucknow'),
(36, 36, 'https://chat.whatsapp.com/Iw1t23DXUoG4guHdmGkCYa', 'TSDC163LA', 'Ludhiana'),
(37, 37, 'https://chat.whatsapp.com/DOZHDzqAvN3E8oATKG83ZQ', 'TSDC169MI', 'Manali'),
(38, 38, 'https://chat.whatsapp.com/HVW3uE2MdFl6dhetPqokFq', 'TSDC176MR', 'Mathura'),
(39, 39, 'https://chat.whatsapp.com/IzawMA9WcJc177hSOQ3Ydc', 'TSDC179MJ', 'Mcleodganj'),
(40, 40, 'https://chat.whatsapp.com/I64mjeSWHXGKxm0R8ZFgVe', 'TSDC180MO', 'Mohali'),
(41, 41, 'https://chat.whatsapp.com/DmdHpMRWWxuI0dzl0k0jb1', 'TSDC182MB', 'Mumbai'),
(42, 42, 'https://chat.whatsapp.com/BdJKZQmxqve6YNWngXH7Th', 'TSDC183MU', 'Munnar'),
(43, 43, 'https://chat.whatsapp.com/JAuoucSOqTMHPH9m60Q781', 'TSDC184ME', 'Mussoorie'),
(44, 44, 'https://chat.whatsapp.com/EFi35lZSLSOGJYXnju1meq', 'TSDC185MY', 'Mysore'),
(45, 45, 'https://chat.whatsapp.com/Ks7BP8PVoXg97h9aqwllKi', 'TSDC187NR', 'Nagpur'),
(46, 46, 'https://chat.whatsapp.com/Iyhdk8ceCzZJE8s2QNqcFj', 'TSDC188NL', 'Nainital'),
(47, 47, 'https://chat.whatsapp.com/DxYwdK0azJh2Ql393TBa2Y', 'TSDC194NA', 'Neemrana'),
(48, 48, 'https://chat.whatsapp.com/Lu4E3CCqP1J4TrtTj3QoS3', 'TSDC197NO', 'Noida'),
(49, 49, 'https://chat.whatsapp.com/KmXArG9eBBMGrDu43vAdQP', 'TSDC208PT', 'Pathankot'),
(50, 50, 'https://chat.whatsapp.com/Cl8gSqce4dE8mxviH2AIZn', 'TSDC209PL', 'Patiala'),
(51, 51, 'https://chat.whatsapp.com/Hwr3YkJwTHk7LHB2qWTCDQ', 'TSDC210PA', 'Patna'),
(52, 52, 'https://chat.whatsapp.com/HFk3KIKyD1SBlYwmrTz3W0', 'TSDC216PY', 'Pondicherry'),
(53, 53, 'https://chat.whatsapp.com/G9ZAkqsZVXLKe8NMG52u0t', 'TSDC219PR', 'Pushkar'),
(54, 54, 'https://chat.whatsapp.com/BNzfC5AH0zS9OZrdmDYx1Y', 'TSDC223RT', 'Rajkot'),
(55, 55, 'https://chat.whatsapp.com/F5NQSm4Goiv2HR1a3ItZnS', 'TSDC228RE', 'Ranthambore'),
(56, 56, 'https://chat.whatsapp.com/GjYwnNueaGgGA13vCVcZpS', 'TSDC229RI', 'Ratnagiri'),
(57, 57, 'https://chat.whatsapp.com/JxllpSy0lyQBm7XOAwZzH7', 'TSDC234SI', 'Sanchi'),
(58, 58, 'https://chat.whatsapp.com/EdtiwwtTYmJD7gQ3Uhpq1l', 'TSDC240SA', 'Shimla'),
(59, 59, 'https://chat.whatsapp.com/LpbTSVj0T9fAvaO6uFxwcU', 'TSDC241SR', 'Shirdi'),
(60, 60, 'https://chat.whatsapp.com/E1m4wgOJAneC06O7yirvJ1', 'TSDC245SM', 'Sikkim'),
(61, 61, 'https://chat.whatsapp.com/KP1p7Qc5Lgd3oG3Yov8UA0', 'TSDC246SH', 'Silchar'),
(62, 62, 'https://chat.whatsapp.com/EFLvctdqcmiLsglLrGBjq1', 'TSDC247SI', 'Siliguri'),
(63, 63, 'https://chat.whatsapp.com/Gp4XYE6iRdz36t3xZapwdC', 'TSDC251SO', 'Solan'),
(64, 64, 'https://chat.whatsapp.com/CEtPLg55engGBfiXzz1vcr', 'TSDC253ST', 'Sonipat'),
(65, 65, 'https://chat.whatsapp.com/CU2ATjX3jdiLsgaHKN5VIr', 'TSDC254SG', 'Srinagar'),
(66, 66, 'https://chat.whatsapp.com/K3iYR0QkJ0H5llLd5h3jex', 'TSDC256SU', 'Surat'),
(67, 67, 'https://chat.whatsapp.com/LreWro3K1Qi6FKUR5VudM8', 'TSDC265TM', 'Thiruvanantpuram'),
(68, 68, 'https://chat.whatsapp.com/JMr26JGbrQkDQC0xMKuvuf', 'TSDC269TA', 'Tripura'),
(69, 69, 'https://chat.whatsapp.com/GZufEzsaMRWIBCXox1sqwO', 'TSDC271UD', 'Udaipur'),
(70, 70, 'https://chat.whatsapp.com/D8edy50ZBzi7ViWbeYim0x', 'TSDC272UJ', 'Ujjain'),
(71, 71, 'https://chat.whatsapp.com/CJhR6ZMbFQhE7DMbCuRD3y', 'TSDC275VD', 'Vadodara'),
(72, 72, 'https://chat.whatsapp.com/H3cT4ng7eIhK3NPOpdZAfu', 'TSDC278VM', 'Vishakhapatnam'),
(73, 73, 'https://chat.whatsapp.com/JLZ3QnhIaL8LTBBZcLVIup', 'TSDC280VN', 'Vrindavan'),
(74, 74, 'https://chat.whatsapp.com/EMnApd2GAPNLhiXtTS4wZl', 'TSDC281WD', 'Wayanad'),
(75, 18, 'https://chat.whatsapp.com/F3E2xBBcfkq9Zmcxe6OlWX', 'TSDC61DL2', 'Delhi North'),
(76, 18, 'https://chat.whatsapp.com/KnEeYdPUis16ftwzENJz6s', 'TSDC61DL3', 'Delhi South'),
(1, 75, 'https://chat.whatsapp.com/Gmh8Cxi3mC6GQ7Z2UlGnQS', 'TSDC01AB', 'Mount Abu'),
(2, 2, 'https://chat.whatsapp.com/FLuYCAadN4jE6Fn8sBbZKn', 'TTSDC02AA', 'Agra Central'),
(3, 3, 'https://chat.whatsapp.com/CLzDPQvaRQcAQOENY86Px8', 'TSDC03AD', 'Ahmedabad'),
(4, 4, 'https://chat.whatsapp.com/Bgvx1tTB2CS2QPcKW0uabl', 'TSDC05AR', 'Ajmer'),
(5, 5, 'https://chat.whatsapp.com/CLzDPQvaRQcAQOENY86Px8', 'TSDC06AD', 'Allahabad'),
(6, 6, 'https://chat.whatsapp.com/K7Nvag2DpXNFOH4U6S2kK1', 'TSDC10AH', 'Amarnath'),
(7, 7, 'https://chat.whatsapp.com/Hw8tNKFTIQcAqF6phhpZIj', 'TSDC11AB', 'Ambala'),
(8, 8, 'https://chat.whatsapp.com/KcA3ZZyHBmPKTSCvBManYY', 'TSDC13AS', 'Amritsar'),
(9, 9, 'https://chat.whatsapp.com/C3QK5V3RlyPDBoaEHw4gE8', 'TSDC14AN', 'Andaman'),
(10, 10, 'https://chat.whatsapp.com/BSzB27BPUod72LFyZXyR8y', 'TSDC17AG', 'Aurangabad'),
(11, 11, 'https://chat.whatsapp.com/D4Wlk8gD8E87sE4XJNrnE3', 'TSDC25BE', 'Bangalore'),
(12, 12, 'https://chat.whatsapp.com/JgcTu5fJdLUEOGIQNesknV', 'TSDC35BL', 'Bhopal'),
(13, 13, 'https://chat.whatsapp.com/GOcyPnFGtBX7feS18BNx0Q', 'TSDC49CE', 'Coimbatore'),
(14, 14, 'https://chat.whatsapp.com/BKjtbqjqagM1HNyOgeyhRR', 'TSDC52CT', 'Corbett'),
(15, 15, 'https://chat.whatsapp.com/BHNyEHeg281IwWzTjOTiK5', 'TSDC54DE', 'Dalhousie'),
(16, 16, 'https://chat.whatsapp.com/DOboKxq8BaTJuLcp9buoIM', 'TSDC59DG', 'Darjeeling'),
(17, 17, 'https://chat.whatsapp.com/HrAgpy9NsQpEOOKTyR4ecb', 'TSDC60DN', 'Dehradun'),
(18, 18, 'https://chat.whatsapp.com/GM0qooPtt1g4Zmv6WpOt0k', 'TSDC61DL1', 'Delhi East'),
(19, 19, 'https://chat.whatsapp.com/LhRiiIpQvlxGEKingpn2bd', 'TSDC65DA', 'Dharamshala'),
(20, 20, 'https://chat.whatsapp.com/B87x9X7JulvDn1sw8rMUKZ', 'TSDC71DK', 'Dwarka'),
(21, 21, 'https://chat.whatsapp.com/FQjmUVIL4wwJOCHnsJ2NGf', 'TSDC72FD', 'Faridabad'),
(22, 22, 'https://chat.whatsapp.com/Dv2kRw78HIk7XUdpTZYeIA', 'TSDC75GK', 'Gangtok'),
(23, 23, 'https://chat.whatsapp.com/DlnkWkfKooa73DwdaI44ck', 'TSDC77GZ', 'Ghaziabad'),
(24, 24, 'https://chat.whatsapp.com/EUpONwu5aUa8Bq4eLPg1dO', 'TSDC79GO1', 'Goa, North'),
(25, 25, 'https://chat.whatsapp.com/GDEluLslZimLjIxac0rGkt', 'TSDC92HR', 'Haridwar'),
(26, 26, 'https://chat.whatsapp.com/HwX854AMbId0YBkPOX9Ds7', 'TSDC98IE', 'Indore'),
(27, 27, 'https://chat.whatsapp.com/KV9sQEqTLGS4mgxzkVu96c', 'TSDC102JM', 'Jaisalmer'),
(28, 28, 'https://chat.whatsapp.com/INQGPxPc7NkFfyt5btiJ5u', 'TSDC105JU', 'Jodhpur'),
(29, 29, 'https://chat.whatsapp.com/BdAMVZK6PRxDsziV2Ewk3i', 'TSDC109JR', 'Jaipur'),
(30, 30, 'https://chat.whatsapp.com/DSeslp9QKyvGtBtm9qJQiD', 'TSDC115KI', 'Kanyakumari'),
(31, 31, 'https://chat.whatsapp.com/HcJ9gRKGRqVF0APi6z4xKy', 'TSDC127KA', 'Kerala'),
(32, 32, 'https://chat.whatsapp.com/JDP27IHbCuBBhEt5c1RG7b', 'TSDC134KI', 'Kochi'),
(33, 33, 'https://chat.whatsapp.com/GtcG0nSQmwPIs8qV0CgXrx', 'TSDC147KH', 'Kumbhalgarh'),
(34, 34, 'https://chat.whatsapp.com/HKzX2iYVNwYHY1nwlUAgfQ', 'TSDC153LP', 'Lakshadweep'),
(35, 35, 'https://chat.whatsapp.com/L9heIgs4jFQBZiZEN84BqD', 'TSDC162LW', 'Lucknow'),
(36, 36, 'https://chat.whatsapp.com/Iw1t23DXUoG4guHdmGkCYa', 'TSDC163LA', 'Ludhiana'),
(37, 37, 'https://chat.whatsapp.com/DOZHDzqAvN3E8oATKG83ZQ', 'TSDC169MI', 'Manali'),
(38, 38, 'https://chat.whatsapp.com/HVW3uE2MdFl6dhetPqokFq', 'TSDC176MR', 'Mathura'),
(39, 39, 'https://chat.whatsapp.com/IzawMA9WcJc177hSOQ3Ydc', 'TSDC179MJ', 'Mcleodganj'),
(40, 40, 'https://chat.whatsapp.com/I64mjeSWHXGKxm0R8ZFgVe', 'TSDC180MO', 'Mohali'),
(41, 41, 'https://chat.whatsapp.com/DmdHpMRWWxuI0dzl0k0jb1', 'TSDC182MB', 'Mumbai'),
(42, 42, 'https://chat.whatsapp.com/BdJKZQmxqve6YNWngXH7Th', 'TSDC183MU', 'Munnar'),
(43, 43, 'https://chat.whatsapp.com/JAuoucSOqTMHPH9m60Q781', 'TSDC184ME', 'Mussoorie'),
(44, 44, 'https://chat.whatsapp.com/EFi35lZSLSOGJYXnju1meq', 'TSDC185MY', 'Mysore'),
(45, 45, 'https://chat.whatsapp.com/Ks7BP8PVoXg97h9aqwllKi', 'TSDC187NR', 'Nagpur'),
(46, 46, 'https://chat.whatsapp.com/Iyhdk8ceCzZJE8s2QNqcFj', 'TSDC188NL', 'Nainital'),
(47, 47, 'https://chat.whatsapp.com/DxYwdK0azJh2Ql393TBa2Y', 'TSDC194NA', 'Neemrana'),
(48, 48, 'https://chat.whatsapp.com/Lu4E3CCqP1J4TrtTj3QoS3', 'TSDC197NO', 'Noida'),
(49, 49, 'https://chat.whatsapp.com/KmXArG9eBBMGrDu43vAdQP', 'TSDC208PT', 'Pathankot'),
(50, 50, 'https://chat.whatsapp.com/Cl8gSqce4dE8mxviH2AIZn', 'TSDC209PL', 'Patiala'),
(51, 51, 'https://chat.whatsapp.com/Hwr3YkJwTHk7LHB2qWTCDQ', 'TSDC210PA', 'Patna'),
(52, 52, 'https://chat.whatsapp.com/HFk3KIKyD1SBlYwmrTz3W0', 'TSDC216PY', 'Pondicherry'),
(53, 53, 'https://chat.whatsapp.com/G9ZAkqsZVXLKe8NMG52u0t', 'TSDC219PR', 'Pushkar'),
(54, 54, 'https://chat.whatsapp.com/BNzfC5AH0zS9OZrdmDYx1Y', 'TSDC223RT', 'Rajkot'),
(55, 55, 'https://chat.whatsapp.com/F5NQSm4Goiv2HR1a3ItZnS', 'TSDC228RE', 'Ranthambore'),
(56, 56, 'https://chat.whatsapp.com/GjYwnNueaGgGA13vCVcZpS', 'TSDC229RI', 'Ratnagiri'),
(57, 57, 'https://chat.whatsapp.com/JxllpSy0lyQBm7XOAwZzH7', 'TSDC234SI', 'Sanchi'),
(58, 58, 'https://chat.whatsapp.com/EdtiwwtTYmJD7gQ3Uhpq1l', 'TSDC240SA', 'Shimla'),
(59, 59, 'https://chat.whatsapp.com/LpbTSVj0T9fAvaO6uFxwcU', 'TSDC241SR', 'Shirdi'),
(60, 60, 'https://chat.whatsapp.com/E1m4wgOJAneC06O7yirvJ1', 'TSDC245SM', 'Sikkim'),
(61, 61, 'https://chat.whatsapp.com/KP1p7Qc5Lgd3oG3Yov8UA0', 'TSDC246SH', 'Silchar'),
(62, 62, 'https://chat.whatsapp.com/EFLvctdqcmiLsglLrGBjq1', 'TSDC247SI', 'Siliguri'),
(63, 63, 'https://chat.whatsapp.com/Gp4XYE6iRdz36t3xZapwdC', 'TSDC251SO', 'Solan'),
(64, 64, 'https://chat.whatsapp.com/CEtPLg55engGBfiXzz1vcr', 'TSDC253ST', 'Sonipat'),
(65, 65, 'https://chat.whatsapp.com/CU2ATjX3jdiLsgaHKN5VIr', 'TSDC254SG', 'Srinagar'),
(66, 66, 'https://chat.whatsapp.com/K3iYR0QkJ0H5llLd5h3jex', 'TSDC256SU', 'Surat'),
(67, 67, 'https://chat.whatsapp.com/LreWro3K1Qi6FKUR5VudM8', 'TSDC265TM', 'Thiruvanantpuram'),
(68, 68, 'https://chat.whatsapp.com/JMr26JGbrQkDQC0xMKuvuf', 'TSDC269TA', 'Tripura'),
(69, 69, 'https://chat.whatsapp.com/GZufEzsaMRWIBCXox1sqwO', 'TSDC271UD', 'Udaipur'),
(70, 70, 'https://chat.whatsapp.com/D8edy50ZBzi7ViWbeYim0x', 'TSDC272UJ', 'Ujjain'),
(71, 71, 'https://chat.whatsapp.com/CJhR6ZMbFQhE7DMbCuRD3y', 'TSDC275VD', 'Vadodara'),
(72, 72, 'https://chat.whatsapp.com/H3cT4ng7eIhK3NPOpdZAfu', 'TSDC278VM', 'Vishakhapatnam'),
(73, 73, 'https://chat.whatsapp.com/JLZ3QnhIaL8LTBBZcLVIup', 'TSDC280VN', 'Vrindavan'),
(74, 74, 'https://chat.whatsapp.com/EMnApd2GAPNLhiXtTS4wZl', 'TSDC281WD', 'Wayanad'),
(75, 18, 'https://chat.whatsapp.com/F3E2xBBcfkq9Zmcxe6OlWX', 'TSDC61DL2', 'Delhi North'),
(76, 18, 'https://chat.whatsapp.com/KnEeYdPUis16ftwzENJz6s', 'TSDC61DL3', 'Delhi South');

-- --------------------------------------------------------

--
-- Table structure for table `holiday_cities`
--

CREATE TABLE `holiday_cities` (
  `id` int(11) NOT NULL,
  `city` varchar(255) NOT NULL,
  `links` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `holiday_cities`
--

INSERT INTO `holiday_cities` (`id`, `city`, `links`) VALUES
(1, 'Dubai', 'http://thetravelsquare.info/holiday/dubai.html'),
(2, 'Bali', 'http://thetravelsquare.info/holiday/bali.html'),
(3, 'Goa', 'http://thetravelsquare.info/holiday/goa.html'),
(4, 'Mauritius', 'http://thetravelsquare.info/holiday/mauritius.html'),
(5, 'Malaysia', 'http://thetravelsquare.info/holiday/malaysai.html'),
(6, 'Singapore', 'http://thetravelsquare.info/holiday/singapore.html'),
(7, 'Andaman', 'http://thetravelsquare.info/holiday/andaman.html'),
(8, 'Maldives', 'http://thetravelsquare.info/holiday/maldives.html'),
(9, 'Kerala', 'http://thetravelsquare.info/holiday/kerala.html'),
(10, 'Bangkok/Pattaya', 'http://thetravelsquare.info/holiday/bangkok-pattaya.html'),
(11, 'Vietnam', 'http://thetravelsquare.info/holiday/vietnam.html'),
(12, 'Udaipur', 'http://thetravelsquare.info/holiday/udaipur.html'),
(13, 'Jaipur', 'http://thetravelsquare.info/holiday/jaipur.html'),
(14, 'Agra', 'http://thetravelsquare.info/holiday/agra.html'),
(15, 'Delhi', 'http://thetravelsquare.info/holiday/delhi.html'),
(16, 'Varanasi', 'http://thetravelsquare.info/holiday/varanasi.html'),
(17, 'Mumbai', 'http://thetravelsquare.info/holiday/mumbai.html'),
(18, 'Manali', 'http://thetravelsquare.info/holiday/manali.html'),
(19, 'Shimla', 'http://thetravelsquare.info/holiday/shimla.html'),
(20, 'Mussorie', 'http://thetravelsquare.info/holiday/mussorie.html'),
(21, 'Jodhpur', 'http://thetravelsquare.info/holiday/jodhpur.html'),
(22, 'Jaisalmer', 'http://thetravelsquare.info/holiday/jaisalmer.html'),
(23, 'Kochi', 'http://thetravelsquare.info/holiday/kochi.html'),
(24, 'Munnar', 'http://thetravelsquare.info/holiday/munnar.html'),
(25, 'Allepey', 'http://thetravelsquare.info/holiday/allepey.html'),
(26, 'Gangtok', 'http://thetravelsquare.info/holiday/gantok.html'),
(27, 'Shillong', 'http://thetravelsquare.info/holiday/shillong.html'),
(28, 'Ranthambore', 'http://thetravelsquare.info/holiday/ranthambore.html'),
(29, 'Leh', 'http://thetravelsquare.info/holiday/leh.html'),
(30, 'Kaziranga', 'http://thetravelsquare.info/holiday/kaziranga.html'),
(31, 'Corbett', 'http://thetravelsquare.info/holiday/corbett.html'),
(32, 'Khajuraha', 'http://thetravelsquare.info/holiday/khajuraho.html'),
(33, 'Dharamshala', 'http://thetravelsquare.info/holiday/dharamshala.html'),
(34, 'Kolkata', 'http://thetravelsquare.info/holiday/kolkata.html'),
(35, 'Rishikesh', 'http://thetravelsquare.info/holiday/Rishikesh.html'),
(36, 'Darjeeling', 'http://thetravelsquare.info/holiday/darjeeling.html'),
(37, 'Fatehpur Sikhri', 'http://thetravelsquare.info/holiday/fatepursikhri.html'),
(38, 'Chennai', 'http://thetravelsquare.info/holiday/chennai.html'),
(39, 'Bangalore', 'http://thetravelsquare.info/holiday/banglore.html'),
(40, 'Kovalam', 'http://thetravelsquare.info/holiday/koavlam.html'),
(41, 'Pushkar', 'http://thetravelsquare.info/holiday/pushkar.html'),
(42, 'Hampi', 'http://thetravelsquare.info/holiday/hampi.html'),
(43, 'Amritsar', 'http://thetravelsquare.info/holiday/amritsar.html'),
(44, 'Coorg', 'http://thetravelsquare.info/holiday/coorg.html'),
(1, 'Dubai', 'http://thetravelsquare.info/holiday/dubai.html'),
(2, 'Bali', 'http://thetravelsquare.info/holiday/bali.html'),
(3, 'Goa', 'http://thetravelsquare.info/holiday/goa.html'),
(4, 'Mauritius', 'http://thetravelsquare.info/holiday/mauritius.html'),
(5, 'Malaysia', 'http://thetravelsquare.info/holiday/malaysai.html'),
(6, 'Singapore', 'http://thetravelsquare.info/holiday/singapore.html'),
(7, 'Andaman', 'http://thetravelsquare.info/holiday/andaman.html'),
(8, 'Maldives', 'http://thetravelsquare.info/holiday/maldives.html'),
(9, 'Kerala', 'http://thetravelsquare.info/holiday/kerala.html'),
(10, 'Bangkok/Pattaya', 'http://thetravelsquare.info/holiday/bangkok-pattaya.html'),
(11, 'Vietnam', 'http://thetravelsquare.info/holiday/vietnam.html'),
(12, 'Udaipur', 'http://thetravelsquare.info/holiday/udaipur.html'),
(13, 'Jaipur', 'http://thetravelsquare.info/holiday/jaipur.html'),
(14, 'Agra', 'http://thetravelsquare.info/holiday/agra.html'),
(15, 'Delhi', 'http://thetravelsquare.info/holiday/delhi.html'),
(16, 'Varanasi', 'http://thetravelsquare.info/holiday/varanasi.html'),
(17, 'Mumbai', 'http://thetravelsquare.info/holiday/mumbai.html'),
(18, 'Manali', 'http://thetravelsquare.info/holiday/manali.html'),
(19, 'Shimla', 'http://thetravelsquare.info/holiday/shimla.html'),
(20, 'Mussorie', 'http://thetravelsquare.info/holiday/mussorie.html'),
(21, 'Jodhpur', 'http://thetravelsquare.info/holiday/jodhpur.html'),
(22, 'Jaisalmer', 'http://thetravelsquare.info/holiday/jaisalmer.html'),
(23, 'Kochi', 'http://thetravelsquare.info/holiday/kochi.html'),
(24, 'Munnar', 'http://thetravelsquare.info/holiday/munnar.html'),
(25, 'Allepey', 'http://thetravelsquare.info/holiday/allepey.html'),
(26, 'Gangtok', 'http://thetravelsquare.info/holiday/gantok.html'),
(27, 'Shillong', 'http://thetravelsquare.info/holiday/shillong.html'),
(28, 'Ranthambore', 'http://thetravelsquare.info/holiday/ranthambore.html'),
(29, 'Leh', 'http://thetravelsquare.info/holiday/leh.html'),
(30, 'Kaziranga', 'http://thetravelsquare.info/holiday/kaziranga.html'),
(31, 'Corbett', 'http://thetravelsquare.info/holiday/corbett.html'),
(32, 'Khajuraha', 'http://thetravelsquare.info/holiday/khajuraho.html'),
(33, 'Dharamshala', 'http://thetravelsquare.info/holiday/dharamshala.html'),
(34, 'Kolkata', 'http://thetravelsquare.info/holiday/kolkata.html'),
(35, 'Rishikesh', 'http://thetravelsquare.info/holiday/Rishikesh.html'),
(36, 'Darjeeling', 'http://thetravelsquare.info/holiday/darjeeling.html'),
(37, 'Fatehpur Sikhri', 'http://thetravelsquare.info/holiday/fatepursikhri.html'),
(38, 'Chennai', 'http://thetravelsquare.info/holiday/chennai.html'),
(39, 'Bangalore', 'http://thetravelsquare.info/holiday/banglore.html'),
(40, 'Kovalam', 'http://thetravelsquare.info/holiday/koavlam.html'),
(41, 'Pushkar', 'http://thetravelsquare.info/holiday/pushkar.html'),
(42, 'Hampi', 'http://thetravelsquare.info/holiday/hampi.html'),
(43, 'Amritsar', 'http://thetravelsquare.info/holiday/amritsar.html'),
(44, 'Coorg', 'http://thetravelsquare.info/holiday/coorg.html');

-- --------------------------------------------------------

--
-- Table structure for table `holiday_links`
--

CREATE TABLE `holiday_links` (
  `id` int(11) NOT NULL,
  `links` varchar(255) NOT NULL,
  `city_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `holiday_links`
--

INSERT INTO `holiday_links` (`id`, `links`, `city_id`) VALUES
(1, 'http://thetravelsquare.info/holiday/dubai.html', 1),
(2, 'http://thetravelsquare.info/holiday/bali.html', 2),
(3, 'http://thetravelsquare.info/holiday/goa.html', 3),
(4, 'http://thetravelsquare.info/holiday/mauritius.html', 4),
(5, 'http://thetravelsquare.info/holiday/malaysai.html', 5),
(6, 'http://thetravelsquare.info/holiday/singapore.html', 6),
(7, 'http://thetravelsquare.info/holiday/andaman.html', 7),
(8, 'http://thetravelsquare.info/holiday/maldives.html', 8),
(9, 'http://thetravelsquare.info/holiday/kerala.html', 9),
(10, 'http://thetravelsquare.info/holiday/bangkok-pattaya.html', 10),
(11, 'http://thetravelsquare.info/holiday/vietnam.html', 11),
(12, 'http://thetravelsquare.info/holiday/udaipur.html', 12),
(13, 'http://thetravelsquare.info/holiday/jaipur.html', 13),
(14, 'http://thetravelsquare.info/holiday/agra.html', 14),
(15, 'http://thetravelsquare.info/holiday/delhi.html', 15),
(16, 'http://thetravelsquare.info/holiday/varanasi.html', 16),
(17, 'http://thetravelsquare.info/holiday/mumbai.html', 17),
(18, 'http://thetravelsquare.info/holiday/manali.html', 18),
(19, 'http://thetravelsquare.info/holiday/shimla.html', 19),
(20, 'http://thetravelsquare.info/holiday/mussorie.html', 20),
(21, 'http://thetravelsquare.info/holiday/jodhpur.html', 21),
(22, 'http://thetravelsquare.info/holiday/jaisalmer.html', 22),
(23, 'http://thetravelsquare.info/holiday/kochi.html', 23),
(24, 'http://thetravelsquare.info/holiday/munnar.html', 24),
(25, 'http://thetravelsquare.info/holiday/allepey.html', 25),
(26, 'http://thetravelsquare.info/holiday/gantok.html', 26),
(27, 'http://thetravelsquare.info/holiday/shillong.html', 27),
(28, 'http://thetravelsquare.info/holiday/ranthambore.html', 28),
(29, 'http://thetravelsquare.info/holiday/leh.html', 29),
(30, 'http://thetravelsquare.info/holiday/kaziranga.html', 30),
(31, 'http://thetravelsquare.info/holiday/corbett.html', 31),
(32, 'http://thetravelsquare.info/holiday/khajuraho.html', 32),
(33, 'http://thetravelsquare.info/holiday/dharamshala.html', 33),
(34, 'http://thetravelsquare.info/holiday/kolkata.html', 34),
(35, 'http://thetravelsquare.info/holiday/Rishikesh.html', 35),
(36, 'http://thetravelsquare.info/holiday/darjeeling.html', 36),
(37, 'http://thetravelsquare.info/holiday/fatepursikhri.html', 37),
(38, 'http://thetravelsquare.info/holiday/chennai.html', 38),
(39, 'http://thetravelsquare.info/holiday/banglore.html', 39),
(40, 'http://thetravelsquare.info/holiday/koavlam.html', 40),
(41, 'http://thetravelsquare.info/holiday/pushkar.html', 41),
(42, 'http://thetravelsquare.info/holiday/hampi.html', 42),
(43, 'http://thetravelsquare.info/holiday/amritsar.html', 43),
(44, 'http://thetravelsquare.info/holiday/coorg.html', 44),
(1, 'http://thetravelsquare.info/holiday/dubai.html', 1),
(2, 'http://thetravelsquare.info/holiday/bali.html', 2),
(3, 'http://thetravelsquare.info/holiday/goa.html', 3),
(4, 'http://thetravelsquare.info/holiday/mauritius.html', 4),
(5, 'http://thetravelsquare.info/holiday/malaysai.html', 5),
(6, 'http://thetravelsquare.info/holiday/singapore.html', 6),
(7, 'http://thetravelsquare.info/holiday/andaman.html', 7),
(8, 'http://thetravelsquare.info/holiday/maldives.html', 8),
(9, 'http://thetravelsquare.info/holiday/kerala.html', 9),
(10, 'http://thetravelsquare.info/holiday/bangkok-pattaya.html', 10),
(11, 'http://thetravelsquare.info/holiday/vietnam.html', 11),
(12, 'http://thetravelsquare.info/holiday/udaipur.html', 12),
(13, 'http://thetravelsquare.info/holiday/jaipur.html', 13),
(14, 'http://thetravelsquare.info/holiday/agra.html', 14),
(15, 'http://thetravelsquare.info/holiday/delhi.html', 15),
(16, 'http://thetravelsquare.info/holiday/varanasi.html', 16),
(17, 'http://thetravelsquare.info/holiday/mumbai.html', 17),
(18, 'http://thetravelsquare.info/holiday/manali.html', 18),
(19, 'http://thetravelsquare.info/holiday/shimla.html', 19),
(20, 'http://thetravelsquare.info/holiday/mussorie.html', 20),
(21, 'http://thetravelsquare.info/holiday/jodhpur.html', 21),
(22, 'http://thetravelsquare.info/holiday/jaisalmer.html', 22),
(23, 'http://thetravelsquare.info/holiday/kochi.html', 23),
(24, 'http://thetravelsquare.info/holiday/munnar.html', 24),
(25, 'http://thetravelsquare.info/holiday/allepey.html', 25),
(26, 'http://thetravelsquare.info/holiday/gantok.html', 26),
(27, 'http://thetravelsquare.info/holiday/shillong.html', 27),
(28, 'http://thetravelsquare.info/holiday/ranthambore.html', 28),
(29, 'http://thetravelsquare.info/holiday/leh.html', 29),
(30, 'http://thetravelsquare.info/holiday/kaziranga.html', 30),
(31, 'http://thetravelsquare.info/holiday/corbett.html', 31),
(32, 'http://thetravelsquare.info/holiday/khajuraho.html', 32),
(33, 'http://thetravelsquare.info/holiday/dharamshala.html', 33),
(34, 'http://thetravelsquare.info/holiday/kolkata.html', 34),
(35, 'http://thetravelsquare.info/holiday/Rishikesh.html', 35),
(36, 'http://thetravelsquare.info/holiday/darjeeling.html', 36),
(37, 'http://thetravelsquare.info/holiday/fatepursikhri.html', 37),
(38, 'http://thetravelsquare.info/holiday/chennai.html', 38),
(39, 'http://thetravelsquare.info/holiday/banglore.html', 39),
(40, 'http://thetravelsquare.info/holiday/koavlam.html', 40),
(41, 'http://thetravelsquare.info/holiday/pushkar.html', 41),
(42, 'http://thetravelsquare.info/holiday/hampi.html', 42),
(43, 'http://thetravelsquare.info/holiday/amritsar.html', 43),
(44, 'http://thetravelsquare.info/holiday/coorg.html', 44);

-- --------------------------------------------------------

--
-- Table structure for table `hotel_enquiry`
--

CREATE TABLE `hotel_enquiry` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `mobile` varchar(15) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `hotel_name` varchar(255) DEFAULT NULL,
  `check_in` varchar(255) DEFAULT NULL,
  `check_out` varchar(255) DEFAULT NULL,
  `meal_plan` varchar(255) DEFAULT NULL,
  `rooms` varchar(255) DEFAULT NULL,
  `room_category` varchar(255) DEFAULT NULL,
  `total_pax` varchar(255) DEFAULT NULL,
  `adults` varchar(255) DEFAULT NULL,
  `child` varchar(255) DEFAULT NULL,
  `child_age` varchar(255) DEFAULT NULL,
  `descrip` varchar(255) DEFAULT 'Null',
  `origin` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel_enquiry`
--

INSERT INTO `hotel_enquiry` (`id`, `name`, `mobile`, `city`, `hotel_name`, `check_in`, `check_out`, `meal_plan`, `rooms`, `room_category`, `total_pax`, `adults`, `child`, `child_age`, `descrip`, `origin`) VALUES
(1, NULL, '7701853375', 'New Delhi', 'The Lodhi', '02/04/2020', '02/04/2020', '1', '5', '1', '1', '11', '1', '1', '', 'partner'),
(1, NULL, '7701853375', 'New Delhi', 'The Lodhi', '02/04/2020', '02/04/2020', '1', '5', '1', '1', '11', '1', '1', '', 'partner');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `dob_date` varchar(255) DEFAULT NULL,
  `dob_month` varchar(255) DEFAULT NULL,
  `dob_year` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `home_address` varchar(255) DEFAULT NULL,
  `landmark` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `degree` varchar(255) DEFAULT NULL,
  `work_experience` varchar(255) DEFAULT NULL,
  `school_name` varchar(255) DEFAULT NULL,
  `referral_person` varchar(255) DEFAULT NULL,
  `job_department` varchar(255) DEFAULT NULL,
  `cv` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `full_name`, `dob_date`, `dob_month`, `dob_year`, `gender`, `home_address`, `landmark`, `email`, `mobile`, `degree`, `work_experience`, `school_name`, `referral_person`, `job_department`, `cv`) VALUES
(1, 'ADNAN AHMAD SIDDIQUE', '17', '10', '1995', '1', 'NEW DELHI', 'Delhi', 'adnansiddique620@gmail.com', '7701853375', 'Under Graduate', '0 to 1 Year', 'UNITED COLLEGE OF ENGINEERING', 'KOI NAHI JI', 'Technical Dept.', 'The Travel Square Brochure.pdf'),
(2, 'Anjani Sharma', '21', '01', '1992', '2', '2104, 11th building, Haware City, Ghodbunder Road, Thane', 'Euro School', 'anjani.sharma21@bimtech.ac.in', '09723158752', 'Post Graduate', '0 to 1 Year', 'Birla Institute of Management Technology', 'Aic', 'Marketing Dept.', ''),
(3, 'Vanshika Chauhan', '07', '02', '1996', '2', 'Panchvati, 27-panchamrut Society,kalol', 'Gujarat', 'chauhan.sanjeev21@bimtech.ac.in', '9638162998', 'Post Graduate', '0 to 1 Year', 'BIMTECH', 'AIC', 'Marketing Dept.', ''),
(4, 'Aarushi Sethi', '06', '08', '1997', '2', 'Pocket D-15, House No. 111-112, Sector-3, Rohini', 'Ayodhya Chowk', 'aarushi.sethi21@bimtech.ac.in', '9718356431', 'Post Graduate', '0 to 1 Year', 'Birla Institute of Management Technology', 'AIC, Bimtech', 'Marketing Dept.', 'RESUME.pdf'),
(5, 'Aarushi Narang', '13', '03', '1997', '2', 'S-2/62, FIRST FLOOR,OLD MAHAVIR NAGAR, TILAK NAGAR, S-2/62, FIRST FLOOR,OLD MAHAVIR NAGAR, TILAK NAGAR', 'Royal Jewellers', 'aarushi.narang21@bimtech.ac.in', '9910981298', 'Post Graduate', '0 to 1 Year', 'BIMTECH', 'AIC', 'Marketing Dept.', 'RESUME_AARUSHI_NARANG.pdf'),
(6, 'Aarushi Sethi', '06', '08', '1997', '2', 'Pocket D-15, House No. 111-112, Sector-3, Rohini', 'Ayodhya Chowk', 'aarushi.sethi21@bimtech.ac.in', '9718356431', 'Post Graduate', '0 to 1 Year', 'Birla Institute of Management Technology', 'AIC, Bimtech', 'Marketing Dept.', 'RESUME.pdf'),
(7, 'Aakriti Sharma', '23', '02', '1995', '2', 'F-214, pandav nagar, patpar ganj, upper ground floor', 'Delhi', 'saakriti856@gmail.com', '09319304810', 'Under Graduate', '0 to 1 Year', 'Birla institute of management technology ', 'AIC', 'Marketing Dept.', ''),
(8, 'Nihal Ahmed Kuniyil', '29', '05', '1995', '1', 'Kuniyil house, Atholi,  kozhikode', 'Old post office', 'nihal.kuniyil21@bimtech.ac.in', '8593843922', 'Under Graduate', '0 to 1 Year', 'Bimtech', 'AIC', 'Marketing Dept.', '19DM124_NIHAL AHMED KUNIYIL.docx'),
(9, 'Anushka Jain', '25', '08', '1997', '1', 'Birla institute of management technology ', 'GNIOT', 'Anushka.jain21@bimtech.ac.in', '9717393738', 'Post Graduate', '0 to 1 Year', 'Somerville School ', 'AIC', 'Marketing Dept.', ''),
(10, 'Alankrita Srivastava', '20', '02', '1995', '2', 'G4-14,Nalanda Girls Hostel,Bimtech,Knowledge Park II', 'near GNIOT', 'alankrita.srivastava21@bimtech.ac.in', '7905958586', 'Post Graduate', '0 to 1 Year', 'Biral Institute of Management Technology ', 'AIC', 'Marketing Dept.', ''),
(11, 'Himani', '16', '06', '1996', '2', 'Ward no10, punjab colony , indri , karnal , haryana', 'Karnal', 'himani21@bimtech.ac.in', '8284804182', 'Post Graduate', '0 to 1 Year', 'Delhi public school', 'AIC', 'Marketing Dept.', ''),
(12, 'Anuja Chatterjee', '15', '05', '1990', '2', 'Nalanda Hostel,G2-Room no.8, Bimtech,plot no 5, knowledge park 2 greater Noida,U.P.201306', 'GNIOT', 'anuja.chatterjee21@bimtech.ac.in', '9958018864', 'Post Graduate', '0 to 1 Year', 'Birla Institute of Management Technology', 'AIC', 'Marketing Dept.', ''),
(13, 'Antara Bhattacharjee', '15', '02', '1994', '2', 'G2 07, nalanda girls hostel, BIMTECH,Greater Noida,201306', 'GNIOT', 'antara.bhattacharjee21@bimtech.ac.in', '8979318566', 'Post Graduate', '2+ Year', 'BIMTECH', 'AIC', 'Marketing Dept.', ''),
(14, 'Mariya Ali', '01', '01', '1997', '2', 'C-19 NFL township Vijaipur distt. Guna MP', 'NFL ', 'mariya.ali21@bimtech.ac.in', '8527198043', 'Post Graduate', '0 to 1 Year', 'Bimtech', 'Dr. Shalini Singh', 'Marketing Dept.', ''),
(15, 'Manikant Jaiswal', '13', '01', '1996', '1', 'Flat no. 426, Block 7, Gulmohar Apartment, Talpuri, Bhilai', 'Panthi Chowk', 'manikant.jaiswal21@bimtech.ac.in', '9617829065', 'Under Graduate', '0 to 1 Year', 'BIMTECH', 'Dr. Shalini Singh', 'Marketing Dept.', ''),
(16, 'Harshita gautam', '16', '04', '1997', '2', '181,katra abdul gani, fatehpur', 'fatehpur', 'harshita.gautam21@bimtech.ac.in', '7838620639', 'Post Graduate', '0 to 1 Year', 'Birla institute of management technology', 'AIC', 'Marketing Dept.', 'harshita resume.docx'),
(17, 'Manya Mehan', '25', '04', '1998', '2', 'Birla Institute of Management and Technology/ Nalanda ', 'Galgotia', 'manya.mehan21@bimtech.ac.in', '9999191088', 'Post Graduate', '0 to 1 Year', 'Birla Institute of Management and Technology', 'Dr. Shalini Singh', 'Marketing Dept.', ''),
(18, 'Anuradha Gupta', '03', '10', '1995', '2', 'F-27 Sector-40 Noida', 'Golf Course Metro', 'anuradha.gupta21@bimtech.ac.in', '8860224333', 'Post Graduate', '0 to 1 Year', 'Bimtech', 'AIC', 'Marketing Dept.', ''),
(19, 'Adarsh NJ', '30', '07', '1997', '1', 'RCI Vidya Vihar, Plot No.36, Knowledge Park III', 'Circle cafe', 'adarsh.nj21@bimtech.ac.in', '8073988651', 'Under Graduate', '0 to 1 Year', 'IIBS, Bangalore', 'Ishaan', 'Marketing Dept.', ''),
(20, 'Nandita Agrawal ', '23', '07', '1997', '2', 'C8,sec 8 , rohini', 'Saroj hospital', 'nandita.agrawal21@bimtech.ac.in', 'I586895213', 'Under Graduate', '0 to 1 Year', 'Bimtech ', 'Aic', 'Marketing Dept.', ''),
(21, 'Anushka Bharti', '22', '01', '1998', '2', 'Ram Jai Pal Road, Arpana colony Phase 2,Patna', 'BR Ambedkar Dental College', 'anushka.bharti21@bimtech.ac.in', '07004748779', 'Post Graduate', '0 to 1 Year', 'BIMTECH, greater noida', 'AIC BIMTECH', 'Marketing Dept.', ''),
(22, 'Malay Pant', '02', '11', '1992', '1', '41/7, Near Delhi Gate, Nahan, Himachal Pradesh', 'Lytton Memorial', 'malay.pant21@bimtech.ac.in', '8800225932', 'Post Graduate', '3+ Year', 'Birla Institute of Management Technology ', 'Dr. Shalini Singh', 'Marketing Dept.', ''),
(23, 'Debajyoti Maitra', '23', '01', '1992', '1', 'RCI Vidya Vihar, Knowledge Park 3, Greater Noida', 'The Circle Cafe', 'debajyoti.maitra21@bimtech.ac.in', '9903241581', 'Under Graduate', '0 to 1 Year', 'Bimtech, Greater Noida', 'AIC', 'Marketing Dept.', ''),
(24, 'Ishita Sharma', '14', '10', '1995', '2', '190 bhera enclave paschim vihar new delhi', 'new delhi', 'ishita.sharma21@bimtech.ac.in', '8800342711', 'Under Graduate', '0 to 1 Year', 'Birla Institute Of Management Technology', 'AIC, Bimtech', 'Marketing Dept.', ''),
(25, 'Deepa Raghuwanshi', '17', '06', '1997', '2', 'Narayan Electricals, subhash chowk, ganj Basoda, madhya Pradesh', 'In front of bank of baroda', 'deepa.raghuwanshi21@bimtech.ac.in', '7869402828', 'Post Graduate', '0 to 1 Year', 'BIMTECH', 'Dr. Shalini singh', 'Marketing Dept.', ''),
(26, 'Aditya Sagar', '25', '02', '1996', '1', 'East Patel Nagar, h no.-48, r no.-05, Patna, Bihar', 'Near panchwati ', 'aditya.sagar21@bimtech.ac.in', '7903767319', 'Under Graduate', '0 to 1 Year', 'Galgotias college of engineering and technology', 'Aic', 'Marketing Dept.', 'AdityaSagar_CV.docx'),
(27, 'Jayant Sharma', '13', '12', '1996', '1', '#1696/3-b, Behind old police line school, Ragho majra', 'PUNJAB', 'jayant.sharma360@gmail.com', '7888637088', 'Under Graduate', '0 to 1 Year', 'BIMTECH', 'AIC', 'Marketing Dept.', '19DM084_JAYANT_SHARMA-cvbaig.docx'),
(28, 'Mohd Sahil Zaidi', '25', '11', '1997', '1', '1015, Street Rajan, Farash Khana, Delhi-110006', 'Chandni Chowk', 'Mohd.zaidi21@bimtech.ac.in', '8802246407', 'Post Graduate', '0 to 1 Year', 'Birla Institute of Management Technology ', 'Dr. Shalini Singh ', 'Marketing Dept.', ''),
(29, 'Manvi Garg', '03', '03', '1996', '2', 'Birla institute of management', 'Greater Noida', 'manvigarg54@gmail.com', '9988159801', 'Post Graduate', '0 to 1 Year', 'Birla institute of management technology', 'Dr Shalini ', 'Marketing Dept.', '19DM105_MANVI_DIGITAL_MARKETING.docx'),
(30, 'Manikandan Balaji ', '30', '03', '1995', '1', '112,5Th A cross, NRI Layout, Kalkare, Bangalore 560043', 'Sundra Anchanayar Temple', 'manikandan.balaji21@bimtech.ac.in ', '9790787265', 'Under Graduate', '0 to 1 Year', 'Birla Institute of Management Technology ', 'AIC', 'Marketing Dept.', '19DM101_MANIKANDAN.pdf'),
(31, 'Aditya Ashok', '25', '06', '1994', '1', 'Bimtech', 'Bimtech', 'aditya.ashok21@bimtech.ac.in ', '9884799547', 'Under Graduate', '0 to 1 Year', 'Madras Christian College ', 'aic', 'Marketing Dept.', 'RESUME_AdityaAshok.pdf'),
(32, 'Aditya Yadav', '29', '05', '1995', '1', 'H.no-1494 Sec-15-2', 'Near salwan public school', 'aditya.yadav21@bimtech.ac.in', '8700429151', 'Post Graduate', '0 to 1 Year', 'Birla Institute of Management Technology', 'AIC', 'Marketing Dept.', ''),
(33, 'Manvi', '03', '03', '1996', '2', '122 d, Homeland enclave', 'Punjab', 'manvigarg54@gmail.com', '9988159801', 'Post Graduate', '0 to 1 Year', 'Bimtech', 'Dr Shalini ', 'Marketing Dept.', '19DM105_MANVI_DIGITAL_MARKETING.docx'),
(34, 'Ajay Kumar', '28', '02', '1993', '1', '25-D,Pocket-1, Mayur Vihar,Phase-1', 'Delhi', 'ajay.kumar21@bimtech.ac.in', '09971506683', 'Post Graduate', '0 to 1 Year', 'BIMTECH', 'AIC', 'Marketing Dept.', ''),
(35, 'Apoorva Kaushik', '05', '05', '1997', '2', '566, Saraswati Vihar, MG Road, Gurgaon', 'MG road', 'apoorva.kaushik21@bimtech.ac.in', '9953482219', 'Under Graduate', '0 to 1 Year', 'Birla Institute of Management Technology', 'AIC', 'Marketing Dept.', 'Apoorva Kaushik.pages'),
(36, 'Aakriti Sharma', '23', '02', '1995', '2', 'F-214, pandav nagar, patpar ganj, upper ground floor', 'Delhi', 'aakriti.sharma21@bimtech.ac.in', '09319304810', 'Under Graduate', '0 to 1 Year', 'Birla institute of management technology ', 'AIC', 'Marketing Dept.', '15801844255894004385088390804230.jpg'),
(37, 'Ishaan', '08', '04', '1998', '1', 'FLAT NO. 302,RATAN KRITI APPT., KAKADEO', 'UTTAR PRADESH', 'ishaanofficial0804@gmail.com', '09511434369', 'Under Graduate', '0 to 1 Year', 'Bimtech', 'AiC', 'Marketing Dept.', '1580185071200_CV.pdf'),
(38, 'Raspreet Kaur Matreja', '12', '12', '1998', '2', 'Rajendra Ward Kareli M.P.', 'Jabalpur, M.P.', 'raspreetkaur.matreja21@bimtech.ac.in', '8770080915', 'Post Graduate', '0 to 1 Year', 'BIMTECH', 'NA', 'Marketing Dept.', 'Raspreet Kaur CV.pdf'),
(39, 'KARTHIKEYAN G', '17', '11', '1996', '1', 'RCI VIDHYA VIHAR, Plot:No:36, Knowledge park 3,, Room no : D-25', 'Uttar Pradesh', 'karthikeyan12th@gmail.com', '09123520445', 'Post Graduate', '0 to 1 Year', 'Birla institute of management technology', 'Dr. Shalini sing ', 'Marketing Dept.', 'ACADEMIC-CALENDAR-2017-18.pdf'),
(40, 'Mukul Sanduja', '16', '12', '1995', '1', '49 H, Pocket 4 Mayur vihar phase 1', 'Delhi', 'mukul.sanduja21@bimtech.ac.in', '08586052130', 'Post Graduate', '0 to 1 Year', 'Birla institute of management Technology ', 'Dr. Shalini singh', 'Marketing Dept.', 'Screenshot_20200128-133009_Instagram.jpg'),
(41, 'Kiran Kumar M', '16', '05', '1991', '1', 'BIMTECH, GREATER NOIDA', 'Uttar Pradesh', 'kiran.kumar21@bimtech.ac.in', '09986842897', 'Post Graduate', '4+ Year', 'Birla institute of management and technology', 'Shalini Singh', 'Marketing Dept.', 'Kiran_Kumar_M_19DM095.docx'),
(42, 'Radhika Agarwal', '20', '08', '1996', '2', '331, Patthar Wali Gali, Deputy Ganj, Bulandshahr, 203001', 'None', 'radhika.agarwal21@bimtech.ac.in', '7060777450', 'Post Graduate', '0 to 1 Year', 'BIMTECH', 'Shaking Singh ', 'Marketing Dept.', 'Radhika Agarwal_Resume.docx'),
(43, 'Saket Mahawar', '16', '12', '1996', '1', 'Saket mahawar', 'Main road saronani chowk kurud', 'saket.mahawar21@bimtech.ac.in', '8889540715', '10+', '0 to 1 Year', 'BIMTECH', 'Shalinee singh', 'Marketing Dept.', 'T-Test_In_SPSS.doc'),
(44, 'Tanvi Mangal', '28', '08', '1997', '2', 'B-8 PUNJABI PECH DAMPIER NAGAR', 'Uttar Pradesh', 'tanvi.mangal21@bimtech.ac.in', '7500575128', 'Post Graduate', '0 to 1 Year', 'Birla Institite of Management Technology', 'Dr. Shalini Singh', 'Marketing Dept.', 'Resume.docx'),
(45, 'Shreya Arora', '03', '08', '1996', '2', '2510, naiwara chawri bazar delhi ', 'Opposite community hall', 'shreya.arora21@bimtech.ac.in', '8447420567', 'Post Graduate', '0 to 1 Year', 'Birla Institute of Management and Technology ', 'Dr. Shalini Singh', 'Marketing Dept.', 'Shreya Arora_19DM203_CV.docx'),
(46, 'Rishabh Jain', '23', '09', '1998', '1', 'H.No.163 sector 16A ,Faridabad', 'Old faridabad metro station', 'Rishabh.Jain21@bimtech.ac.in', '9911195541', 'Under Graduate', '0 to 1 Year', 'BIMTECH', 'Dr.Shalini ', 'Marketing Dept.', '220px-Birla_Institute_of_Management_Technology_logo.png'),
(47, 'Rushabh R Parate', '09', '05', '1995', '1', 'S-2,moonstone residency,nfcl road kakinada', 'Nfcl road', 'rushabhr.parate21@bimtech.ac.in', '9502073758', 'Under Graduate', '0 to 1 Year', 'St josheps college', 'Dr.Shalini', 'Marketing Dept.', 'IMG-20191228-WA0000.jpg'),
(48, 'Morvin Lall', '27', '10', '1994', '1', '54,DDA Flats,, Aurobindo Appts., Adhchini', 'iit Delhi', 'Morvin.lall21@bimtech.ac.in ', '9871076440', 'Post Graduate', '0 to 1 Year', 'BIMTECH', 'Dr. Shalini Singh', 'Marketing Dept.', '20200116_100713.jpg'),
(49, 'Prashant Chauhan', '21', '01', '1997', '1', 'E-30,Radhakunj Brij vihar, Ghaziabad', 'Dav Public School', 'royalchauhan.21@gmail.com', '8377864557', 'Post Graduate', '0 to 1 Year', 'Birla Institute Of Management Technology', 'Dr. Shalini Singh', 'Marketing Dept.', 'image.jpg'),
(50, 'Kasturi Ranga', '30', '07', '1997', '1', 'Room No:D-26,RCI Vidya Vihar,Plot No.36, Knowledge Park III', 'Uttar Pradesh', 'kasturi.ranga21@bimtech.ac.in', '09603060305', 'Under Graduate', '0 to 1 Year', 'BIMTECH', 'Shalini singh', 'Technical Dept.', 'Excel Shortcut List.pdf'),
(51, 'Nitya Tailang', '17', '04', '1995', '2', 'C 68 zinc nagar chittorgarh', 'Chittorgarh', 'nitya.tailang21@bimtech.ac.in', '7891241897', 'Post Graduate', '0 to 1 Year', 'BIMTECH', 'NA', 'Marketing Dept.', 'Doc.docx'),
(52, 'Sahil Kumar', '29', '08', '1996', '1', 'Ward no. 2, house no. 8, old market Ratia (125051)', 'Hanuman chowk', 'sahil.kumar21@bimtech.ac.in', '8059829329', 'Under Graduate', '0 to 1 Year', 'K.T.Govt. College, Ratia', 'Shalini Singh', 'Marketing Dept.', '15802036536931978094962.jpg'),
(53, 'Namit Jain', '27', '11', '1997', '1', 'H.No. 8A/C Gandhi Nagar, Jammu', 'Opp. Pace Hyundai', 'namit.jain21@bimtech.ac.in', '8803463608', 'Post Graduate', '0 to 1 Year', 'BIMTECH', 'Dr. Shalini Singh', 'Marketing Dept.', 'TRAVELSQUARE.docx'),
(54, 'Himanshu Agarwal', '08', '01', '1997', '1', 'PLOT NO. 67, FLAT NO. 107, ANANDPURI', 'Jain Temple', 'himanshu.agarwal21@GMAIL.COM', '09559957762', 'Post Graduate', '0 to 1 Year', 'BIMTECH', 'Dr. Shalini Singh', 'Marketing Dept.', 'TRAVELSQUARE.docx'),
(55, 'Dolly Goyal', '24', '07', '1998', '2', 'Agrasen street, Meerut road, Hapur', 'Near Mangal Bhawan', 'Dolly.goyal21@bimtech.ac.in', '07017585715', 'Post Graduate', '0 to 1 Year', 'Bimtech', 'Prof. Shalini Singh', 'Marketing Dept.', 'Investment Management Session plan 2019-21.docx'),
(56, 'Lincoln', '31', '05', '1993', '1', 'Room no D-26, RCI Vidya Vihar', 'ITS', 'lincoln21@bimtech.ac.in', '8050240643', 'Under Graduate', '2+ Year', 'BIMTECH', 'NA', 'Marketing Dept.', 'LINCOLN_CV.pdf'),
(57, 'Namit Jain', '27', '11', '1997', '1', 'H.No. 8A/C Gandhi Nagar, Jammu', 'Opp. Pace Hyundai', 'namit.jain21@bimtech.ac.in', '8803463608', 'Post Graduate', '0 to 1 Year', 'BIMTECH', 'Dr. Shalini Singh', 'Marketing Dept.', 'TRAVELSQUARE.docx'),
(58, 'Sahil Kumar', '29', '08', '1996', '1', 'Ward no. 2, house no. 8, old market Ratia (125051)', 'Hanuman chowk', 'sahil.kumar21@bimtech.ac.in', '8059829329', 'Under Graduate', '0 to 1 Year', 'K.T.Govt. College, Ratia', 'Shalini Singh', 'Marketing Dept.', '15802036536931978094962.jpg'),
(59, 'Simran Ghanshyam Pandit', '30', '09', '1998', '2', '4, pushpanjali apartment, krishnakunj society, Ahmedabad ', 'Pranshankar Hall', 'simrang.pandit21@bimtech.ac.in', '7016400433', 'Under Graduate', '0 to 1 Year', 'Birla Institute of Management Technology', 'Shalini Singh', 'Data Management Dept.', 'Ease-of-Doing-Business-among-States-in-India-HK.compressed.pdf'),
(60, 'Anvi Kapoor', '22', '02', '1998', '2', 'Nalanda hostel, Bimtech, Greater Noida', 'Near Galgotia', 'anvi.kapoor21@bimtech.ac.in', '9012400996', 'Post Graduate', '0 to 1 Year', 'BIMTECH', 'Shalini Singh', 'Marketing Dept.', 'IMG_20200128_145929.jpg'),
(61, 'Sonakshi Gupta', '13', '12', '1996', '2', '92, 2nd floor, Gautam Nagar, Delhi', 'Bada Gurudwara', 'sonakshi.gupta21@bimtech.ac.in', '08700103905', 'Post Graduate', '0 to 1 Year', 'Birla Institute of Management Technology', 'Ms. Shalini Singh', 'Data Management Dept.', 'omnichannel-monster-guide-magestore.pdf'),
(62, 'Priyal Vijaywargia', '24', '10', '1997', '2', 'A-216 Old Minal Residency, Bhopal, Madhya Pradesh', 'JK Road', 'priyal.vijaywargia21@bimtech.ac.in', '7224882171', 'Post Graduate', '0 to 1 Year', 'Birla Institute of Management Technology', 'Shalini Singh', 'Marketing Dept.', 'Priyal Vijaywargia -CV.pdf'),
(63, 'Rhishabh Jain', '02', '05', '1998', '1', '25/7, Panchwati', 'Rajasthan', 'rhishabh.jain21@bimtech.ac.in', '08058218084', 'Under Graduate', '0 to 1 Year', 'Birla Institute of Management Technology', 'Dr. Shalini Singh', 'Marketing Dept.', 'IMG_20200126_055056.jpg'),
(64, 'Harshit Gupta', '22', '08', '1996', '1', 'Room no. D-22 RCI vidya vihar knowledge park 2', 'ITS', 'harshit.gupta21@bimtech.ac.in', '9971886340', 'Under Graduate', '0 to 1 Year', 'BIMTECH', 'N. A. ', 'Marketing Dept.', 'RESUME.docx'),
(65, 'Anika Mittal', '24', '05', '1997', '2', 'Plot Number 5, Knowledge Park 2, NCR, Greater Noida, Uttar Pradesh', 'Galgotia university', 'anika.mittal21@bimtech.ac.in', '+919258015122', 'Post Graduate', '0 to 1 Year', 'BIMTECH', 'Shalini singh', 'Marketing Dept.', '1580203797426..jpg'),
(66, 'Radhika Garg', '15', '10', '1996', '2', '#B-28, Jindal Naturecure Institute, Jindal Nagar, Bangalore-560073', 'Jindal Nagar', 'gargradhika1996@gmail.com', '9902476427', 'Post Graduate', '0 to 1 Year', 'Bimtech', 'Shalini Singh', 'Marketing Dept.', 'Radhika Garg -CV.pdf'),
(67, 'Himanshu', '14', '01', '1998', '1', 'B-5 Dev nagar , near param hams kutia', 'Haryana', 'ansh1411998@gmail.com', '7015626904', 'Post Graduate', '0 to 1 Year', 'Birla institute of management technology , Greater noida', 'Shalini singh', 'Marketing Dept.', '15802037984583025980379182895553.jpg'),
(68, 'Shashank Tiwari', '18', '01', '1999', '1', 'Rci vidya bihar knowledge park', 'Amity college', 'shashank.tiwari21@bimtech.ac.in', '9560103343', 'Under Graduate', '0 to 1 Year', 'Birla Institute of technology management', 'Shalini singh', 'Marketing Dept.', 'SREI Infrastructure Finance_Practical reading.pdf'),
(69, 'Shreya Gupta', '25', '11', '1997', '2', 'BE-38, 2nd floor, Shalimar Bagh West, Delhi-110088', 'Opposite Shiv Mandir', 'shreya.gupta21@bimtech.ac.in', '9650673431', 'Post Graduate', '0 to 1 Year', 'Birla Institute of Management Technology', 'Ms. Shalini Singh', 'Data Management Dept.', 'CIED-Annual-report_2017-18.pdf'),
(70, 'Abhinandan Singla', '17', '10', '1997', '1', 'Plot number 5, Knowledge Park 2, NCR, Greater Noida, Uttar Pradesh', 'Knowledge Park', 'abhinandan.singla21@bimtech.ac.in', '9810409973', 'Post Graduate', '0 to 1 Year', 'Birla Institute of Management Technology', 'Dr.Shalini Singh', 'Marketing Dept.', '5C393846-BED0-4402-8334-66D2BBEEC101.jpeg'),
(71, 'Sakshi Aggarwal', '05', '06', '1997', '2', 'Bhera enclave, paschim vihar, new delhi', 'Near Radisson Hotel Blu', 'sakshiaggarwal866@gmail.com', '8800898968', 'Post Graduate', '0 to 1 Year', 'BIMTECH', 'Mrs. Shalini Singh', 'Marketing Dept.', '19DM178_Sakshi Aggarwal.pdf'),
(72, 'Kumari Shreya', '17', '02', '1997', '2', 'Ward No 4 ,Railway Station , Vill-Jangipur, Nagar Untari,District- Garhwa', 'Jharkhand', 'shreyajaiswal1720@gmail.com', '07368982033', 'Post Graduate', '0 to 1 Year', 'Birla Institute of Management Technology', 'Dr. Shalini Singh', 'Marketing Dept.', 'FAQs on Credit Rating.pdf'),
(73, 'Kashish Garg', '15', '06', '1997', '2', 'Electro Point Naya Bazaar Sunam, Punjab', 'Punjab', 'kashish.garg458@gmail.com', '8054500264', 'Post Graduate', '0 to 1 Year', 'Birla Institute of Management Technology, Greater Noida', 'Dr. Shalini Singh', 'Marketing Dept.', 'Approach for Financial Ratio Analysis, Aug 2016 (Archived).pdf'),
(74, 'Sonali Jindal', '17', '05', '1998', '2', '132,westend colony baghpat road meerut', 'Delhi public School', 'sonali.jindal21@bimtech.ac.in', '9528666661', 'Post Graduate', '0 to 1 Year', 'BIMTECH', 'AIC', 'Marketing Dept.', 'value-based-healthcare-research-paper.pdf'),
(75, 'Abhishek Suman', '04', '01', '1993', '1', 'Birla institute of Management Technology, Greater Noida', 'Pari Chowk', 'abhishek.suman21@bimtech.ac.in', '8884291974', 'Post Graduate', '2+ Year', 'Birla Institute of Management Technology', 'Shalini Singh', 'Marketing Dept.', 'IMG_20200128_150623.jpg'),
(76, 'VIVEK KUMAR SINGH', '26', '03', '1995', '1', 'RCI VIDYA VIHAR KNOWLEDGE PARK 2 GREATER NOIDA', 'BIMTECH', 'vivekkumar.singh21@bimtech.ac.in', '8375919500', 'Post Graduate', '0 to 1 Year', 'BIRLA INSTITUTE OF MANAGEMENT TECHNOLOGY', 'SHALINI SINGH', 'Marketing Dept.', '19DM234.pdf'),
(77, 'Shivam Sharma', '04', '04', '1998', '1', '123/C DDA Flats Mansarover Park Shahdara Delhi', 'Near Community Center ', 'shivam.sharma21@bimtech.ac.in', '8375094042', 'Post Graduate', '0 to 1 Year', 'BIMTECH', 'Shalini Singh', 'Marketing Dept.', 'D0DE2AA5-86FA-485A-BCFD-3AFA6047B5E5.jpeg'),
(78, 'VIDIT GUPTA', '27', '01', '1999', '1', 'RCI VIDYA VIHAR KNOWLEDGE PARK 2 GREATER NOIDA', 'BIMTECH', 'Vidit.gupta21@bimtech.ac.in', '8800998675', 'Post Graduate', '0 to 1 Year', 'BIRLA INSTITUTE OF MANAGEMENT TECHNOLOGY', 'SHALINI SINGH', 'Marketing Dept.', 'XYZ.pdf'),
(79, 'Anuvesh Sachdeva', '06', '10', '1998', '1', 'H.no-203, sector-39, chandigarh road, ludhiana, punjab', 'Dabur property dealer', 'Anuvesh.sachdeva21@bimtech.ac.in', '9878888876', 'Under Graduate', '0 to 1 Year', 'Bimtech', 'Dr Shalini Singh', 'Marketing Dept.', '19DM250_ANUVESHSACHDEVA.docx'),
(80, 'Anuvesh Sachdeva', '06', '10', '1998', '1', 'House ni-203, sector-39, chandigarh road, ludhiana, punjab', 'Dabur property dealer', 'Anuvesh.sachdeva21@bimtech.ac.in', '9878888876', 'Post Graduate', '0 to 1 Year', 'Bimtech', 'Dr Shalini Singh', 'Marketing Dept.', '19DM250_ANUVESHSACHDEVA.docx'),
(81, 'Manishika Shekhawat', '05', '08', '1997', '2', 'OPP. MS Girls Hostel Achal Infratech Gajner road Bikaner', 'Bikaner', 'Manishika.shekhawat21@bimtech.ac.in', '9650049144', 'Masters', '0 to 1 Year', 'Birla Institute of Management Technology', 'Dr. Shalini Singh ', 'Marketing Dept.', '19DM103_Manishika Shekhawat_CV-1.docx'),
(82, 'Abhishek Gupta', '13', '07', '1997', '1', 'F-2/646, Sangam Vihar, New Delhi', 'Sangam vihar', 'abhishek.gupta21@bimtech.ac.in', '8510066505', 'Post Graduate', '0 to 1 Year', 'BIRLA INSTITUTE OF MANAGEMENT TECHNOLOGY', 'Dr. Shalini Singh', 'Marketing Dept.', '19DM011_Abhishek Gupta.docx'),
(83, 'Sonal Jain', '01', '08', '1997', '2', 'House no. -718 Sector 9 Panchkula', 'Andale Public School', 'sonal.jain21@bimtech.ac.in', '7837535007', 'Post Graduate', '0 to 1 Year', 'BIMTECH ', 'Shalini Singh ', 'Marketing Dept.', 'Sonal Jain- Resume(1).pdf'),
(84, 'Jithin Mohan', '21', '08', '1995', '1', 'Tc no 27/2322-1, Aiwsarya, Holy Angels Play school lane, convent road, Vanchiyoor, Thiruvananthapuram,Kerala ', 'Holy Angels School', 'jithin.mohan21@bimtech.ac.in', '8527301995', 'Post Graduate', '0 to 1 Year', 'Bimtech', 'Dr.Shalini ', 'Marketing Dept.', '19DM086_JithinMohan.docx'),
(85, 'ARUSHI GARG', '26', '03', '1999', '2', 'Flat No. 138, Osimo Tower, Mahagun Moderne, Sector 78, Noida', 'Uttar Pradesh', 'arushi.garg21@bimtech.ac.in', '09971751850', 'Post Graduate', '0 to 1 Year', 'BIRLA INSTITUTE OF MANAGEMENT TECHNOLOGY', 'Dr.Shalini Singh', 'Marketing Dept.', '19DM050_Arushi Garg.docx'),
(86, 'Kanika Sethi', '15', '09', '1998', '2', '#12, Dashmesh colony , rajpura, punjab', 'gol park', 'kanika.sethi21@bimtech.ac.in', '8284834804', 'Post Graduate', '0 to 1 Year', 'Bimtech', 'BIMTECH', 'Marketing Dept.', 'Edited - MVP Document1.pdf'),
(87, 'Aditya Malik', '19', '12', '1995', '1', 'Dr B.R Ambedkar police Academy , Civil lines , Moradabad', 'Civil lines', 'aditya.malik21@bimtech.ac.in', '9761889244', 'Post Graduate', '2+ Year', 'BIMTECH', 'Dr. Shalini Singh', 'Marketing Dept.', '19DM017_Aditya Malik.docx'),
(88, 'Riya Katoch', '08', '04', '1997', '2', 'C-7, GH-30, Mansa Devi Complex, Sec-5, Panchkula', 'Panchkula', 'riya.katoch.rk@gmail.com', '8968222096', 'Post Graduate', '0 to 1 Year', 'BIMTECH', 'Ms. Shalini Singh', 'Marketing Dept.', 'IMG-20200129-WA0011.jpg'),
(89, 'Sejal Agarwal', '15', '09', '1997', '2', 'C-154 Vivek Vihar', 'Iti', 'sejal.agarwal21@bimtech.ac.in', '8076409964', 'Masters', '0 to 1 Year', 'BIMTECH', 'Ms. Shalini Singh', 'Marketing Dept.', '0_Resume (1).pdf'),
(90, 'Pranish Naoghare', '18', '05', '1996', '1', 'C-349, RCI Vidya Vihar, Plot no 36, Knowledge Park-3, Greater Noida', 'Birla Institute of Management Technology', 'pranish.naoghare21@bimtech.ac.in', '9822794588', 'Masters', '0 to 1 Year', 'Birla Institute of Management Technology', 'Dr Shalini Singh', 'Marketing Dept.', 'PRANISH NAOGHARE_CV.pdf'),
(91, 'Shivam Nagpal', '06', '09', '1997', '1', 'D-37, Acharya niketan, Mayur vihar phase-1, Delhi', 'Kukreja hospital', 'shivam.nagpal21@bimtech.ac.in', '9650583445', 'Post Graduate', '0 to 1 Year', 'Bimtech', 'Miss Shalini', 'Marketing Dept.', 'Resume updated.pdf'),
(92, 'Ansuman Panda', '25', '04', '1993', '1', 'Plot 239 lane-3 aerodrome area Bhubaneswar ', 'Biju pattnaik airport', 'ansuman.panda21@bimtech.ac.in', '8895074028', 'Post Graduate', '3+ Year', 'Bimtech noida', 'Shalini singh', 'Marketing Dept.', '19DM037 Ansuman Panda CV.docx'),
(93, 'ANKITA JAIN', '21', '04', '1998', '2', 'C- 439, YOJANA VIHAR', 'Delhi (07)', 'ankita19305@gmail.com', '9810944079', 'Post Graduate', '0 to 1 Year', 'Bimtech', 'Dr. Shalini Singh', 'Marketing Dept.', '19DM035_Ankita Jain (1) (1) (1) (1).pdf'),
(94, 'Jeewesh Kumar Hindwar', '10', '02', '1997', '1', 'Bimtech', 'Bimtech', 'jeewesh.hindwar21@bimtech.ac.in', '8610943287', 'Post Graduate', '0 to 1 Year', 'Bimtech', 'Shalini singh', 'Marketing Dept.', 'New Doc 2020-01-29 11.04.20_1.pdf'),
(95, 'Tanya bhardwaj', '06', '02', '1996', '2', 'BIMTECH, Takshilla hostel, F-2', 'Knowledge park', 'tanya.bhardwaj21@bimtech.ac.in', '8920394808', 'Post Graduate', '0 to 1 Year', 'BIMTECH', 'Shalini singh', 'Marketing Dept.', 'TANYA BHARDWAJ (1) cv.docx'),
(96, 'Manjeet', '29', '09', '1992', '1', 'Delhi', 'Bimtech', 'Manjeet21@bimtech.ac.in', '9910982224', 'Post Graduate', '5+ Year', 'Bimtech', 'Shalini singh', 'Marketing Dept.', 'Screenshot_2020-01-29-11-03-40-170_cn.wps.moffice_eng.jpg'),
(97, 'Ananya Rajan', '28', '03', '1999', '2', 'Bimtech Greater Noida knowledge park 2', 'Skyline college', 'ananya.rajan21@bimtech.ac.in', '9997903427', 'Under Graduate', '0 to 1 Year', 'Bimtech', 'Shalini Singh', 'Marketing Dept.', 'IMG-20200129-WA0003.jpg'),
(98, 'Runjhun  Gupta', '02', '12', '1996', '2', 'B-1/20/69 SECTOR K ALIGANJ, LUCKNOW', 'UTTAR PRADESH', 'runjhun.gupta21@bimtech.ac.in', '9616165610', 'Post Graduate', '0 to 1 Year', 'Birla Institute of Management Technology (BIMTECH)', 'Ms.Shalini', 'Marketing Dept.', 'Untitled document.pdf'),
(99, 'Abhinav Irwin John ', '01', '01', '1997', '1', 'Rci Vidya Vihar, Plot no. 36', 'Uttar Pradesh', 'abhinav.john21@bimtech.ac.in ', '9551862857', 'Post Graduate', '0 to 1 Year', 'BIMTECH ', 'Shalini Singh', 'Marketing Dept.', '19DM009_Abhinav Irwin John_CV-converted.pdf'),
(100, 'Anirudh kakkar', '16', '02', '1993', '1', 'House number 1185-A, sector 41-B', 'AKSIPS', 'anirudh.kakkar21@bimtech.ac.in', '8968179085', 'Post Graduate', '2+ Year', 'Bimtech', 'Ms Shalini Singh', 'Marketing Dept.', 'Anirudh Kakkar.docx'),
(101, 'Ayasmita Sen', '12', '05', '1997', '2', 'Adwitya, 2nd Floor, 58/29 Pallisree, Kolkata-700092', 'Jadavpur', 'ayasmita.sen21@bimtech.ac.in ', '9007840860', 'Post Graduate', '0 to 1 Year', 'Birla Institute of Management Technology ', 'Dr Shalini Singh', 'Marketing Dept.', '19DM053_AyasmitaSen.docx'),
(102, 'Rohit Bansal', '06', '06', '1998', '1', 'KRISHNA COLONY, MURADNAGAR', 'Uttar Pradesh', 'bansal1998rohit@gmail.com', '8755866504', 'Under Graduate', '0 to 1 Year', 'BIMTECH', 'Shalini Singh', 'Marketing Dept.', 'RESUME final.docx'),
(103, 'Zaisha chadha', '23', '12', '1996', '2', '6-A rani park, ambala cantt', 'KD hospital', 'zaisha2396@gmail.com', '9878989481', 'Under Graduate', '0 to 1 Year', 'BIMTECH', 'Shalini singh', 'Marketing Dept.', 'CV_ZaishaChadha.pdf'),
(104, 'Samrat Motilal', '23', '03', '1995', '1', 'G 271, Nanakpura, south motibagh, new delhi -21', 'Baba balak nath mandir', 'samrat.motilal21@bimtech.ac.in', '09999102174', 'Post Graduate', '2+ Year', 'BIMTECH', 'Shalini Singh', 'Marketing Dept.', 'SamratMotilal_Resume.docx'),
(105, 'Rajat Chauhan', '03', '01', '1995', '1', 'Near pnb bank Banthara bazar lucknow', 'Aiport', 'rajat.chauhan21@bimtech.ac.in', '7060282313', 'Post Graduate', '0 to 1 Year', 'Birla institute of management technology ', 'Shalini singh', 'Marketing Dept.', 'newcvjuly.pdf'),
(106, 'Tanveer Ahmed', '01', '12', '1994', '1', 'No:36, Pallappan Street, Triplicane, Chennai-600005', 'Ice house mosque', 'tanveer.ahmed21@bimtech.ac.in', '9899007099', 'Under Graduate', '2+ Year', 'B S ABDUR RAHMAN UNIVERSITY', 'Dr. Shalini Singh', 'Marketing Dept.', '19DM225_TANVEER AHMED RESUME.pdf'),
(107, 'Paridhi Trivedi', '26', '08', '1996', '2', 'Flat 107 krishan Vihar Sector 21-C Faridabad', 'Park Plaza', 'paridhi.trivedi21@bimtech.ac.in', '7024144535', 'Post Graduate', '0 to 1 Year', 'BIMTECH', 'Dr. Shalini Singh', 'Marketing Dept.', 'CV_Paridhi Trivedi.pdf'),
(108, 'SHUBHAM SUREKA', '15', '07', '1998', '1', 'LUXA ROAD, VARANASI', 'Pdr Mall', 'shubham.sureka21@bimtech.ac.in', '07800886887', 'Under Graduate', '0 to 1 Year', 'School of management sciences, Varanasi', 'Dr. Shalini Singh', 'Technical Dept.', '19DM242_SHUBHAM SUREKA CV.docx'),
(109, 'Lakshya Guglani ', '29', '09', '1996', '1', 'Hno.-745 sec-19,faridabad, haryana', 'Sector 19', 'lakshya.guglani21@bimtech.ac.in ', '9953538780', 'Post Graduate', '0 to 1 Year', 'Bimtech-greater noida', 'Dr.Shalini Singh ', 'Marketing Dept.', 'Coursera QU8FVY8GKXKR.pdf'),
(110, 'Romani Banerjee ', '05', '11', '1992', '2', 'H 9, Basant Vihar, Mango, Jamshedpur ', 'Dimna Lake', 'romanidilipbanerjee@gmail.com', '09156467899', 'Under Graduate', '0 to 1 Year', 'Birla Institute of Management Technology ', 'Shalini Singh', 'Marketing Dept.', '19DM167_Romani Banerjee.pdf'),
(111, 'Sahajpreet Kaur', '21', '10', '1997', '2', '146 MIG FLATS PHASE 1 Urban Estate, Dugri Ludhiana', 'Guru nanak dhaba', 'sahajpreet.kaur21@bimtech.ac.in', '8146250017', 'Under Graduate', '0 to 1 Year', 'BIMTECH', 'Shalini Singh', 'Marketing Dept.', 'SahajpreetKaur cv.pdf'),
(112, 'Shikhar Sahai', '25', '09', '1995', '1', 'Amrapali Sapphire, Noida 45', 'Amrapali Sapphire', 'shikhar.sahai21@bimtech.ac.in', '9087859325', 'Under Graduate', '0 to 1 Year', 'SRM institute of Science and Technology', 'Shalini Singh', 'Marketing Dept.', '194.pdf'),
(113, 'Surya Pratap Singh', '02', '02', '1993', '1', 'H.no 742 B,near ramprit chowk,gorakhpur', 'Ramprit chowk', 'suryapratap.singh21@bimtech.ac.in', '6392054694', 'Under Graduate', '0 to 1 Year', 'Birla Institute of Management Technology', 'Shalini Singh', 'Marketing Dept.', '1580449181207_Surya Pratap Singh.pdf'),
(114, 'Ritik Gaur', '03', '07', '1997', '1', '76 Hargobind Enclave ', 'Shanti Mukund hospital ', 'ritik.gaur21@bimtech.ac.in', '9015496921', 'Post Graduate', '0 to 1 Year', 'BIMTECH ', 'Mrs.Shalini ', 'Marketing Dept.', 'Macroeconomics Project_Group6.gdoc'),
(115, 'Olivia Mukherjee', '17', '04', '1997', '2', 'Plot no. 5, Knowledge Park II, NCR, Greater Noida, Uttar Pra', 'Uttar Pradesh', 'olivia.mukherjee21@bimtech.ac.in ', '09239493787', 'Masters', '0 to 1 Year', 'Bimtech ', 'Shalini singh', 'Marketing Dept.', '15804491734692293727456399396272.jpg'),
(116, 'Shubhali Singh', '18', '10', '1996', '2', 'BIMTECH, knowledge Park-II greater noida ', 'K. R. Mangalam ', 'Shubhali.singh21@bimtech.ac.in', '8962283381', 'Post Graduate', '0 to 1 Year', 'BIMTECH ', 'Shalini singh', 'Marketing Dept.', 'Shubhali Singh CV.docx'),
(117, 'Salony Rathee', '30', '03', '1998', '2', '739 PLA NEAR TOWM HISAR', 'Town Park', 'salony.rathee21@bimtech.ac.in', '8469561100', 'Under Graduate', '0 to 1 Year', 'BIMTECH', 'Dr.Shalini Singh', 'Marketing Dept.', '19DM179_Salony Rathee.docx'),
(118, 'SPARSH KAPOOR', '14', '11', '1995', '1', '5-Ga-5, Jawahar Nagar, Jaipur', 'St. Edmunds School', 'sparshkapoor14@gmail.com', '9828948501', 'Under Graduate', '0 to 1 Year', 'Global Institute of Technology, Jaipur', 'Dr. Shalini Singh', 'Marketing Dept.', 'Sparsh Kapoor Bimtech Resume.pdf'),
(119, 'Rupesh Singh', '18', '06', '1994', '1', 'At- station bazar, ward no.13, baripada town, mayurbhanj district, Odisha, 757001', 'Near palbani', 'rupesh.singh21@bimtech.ac.in', '7978336239', 'Post Graduate', '0 to 1 Year', 'Birla institute of management technology, Noida', 'Dr. Shalini Singh', 'Marketing Dept.', 'UPDATED CV 19DM169 CV_RUPESH SINGH-1-converted.pdf'),
(120, 'Prateek Sharma', '11', '04', '1992', '1', 'Flat no. 108, sudarshan apartment, patparganj. Delhi-92', 'Near pretty vihar metto station', 'prateek.sharma21@bimtech.ac.in', '8447122852', 'Post Graduate', '3+ Year', 'IMS Engineering College', 'Shalini Singh', 'Technical Dept.', 'RESUME-PRATEEK SHARMA-R1.pdf'),
(121, 'Rishabh Bhalla', '30', '06', '1995', '1', 'V-19/9 dlf phase 3 gurgaon haryana', 'Haryana', 'rishabh_bhalla95@yahoo.co.in', '08860408412', 'Under Graduate', '0 to 1 Year', 'G.d. goenka university', 'Shalini singh', 'Marketing Dept.', 'Rishabh Bhalla Resume 09-06-2018.pdf'),
(122, 'Chaitanya Chaudhry', '23', '09', '1995', '1', '61-b first floor,arjun nagar,safdarjung enclave', 'DELHI', 'chaitanya.chaudhry21@bimtech.ac.in', '9711573766', 'Post Graduate', '0 to 1 Year', 'Birla institute of management technology', 'Dr. Shalini Singh', 'Marketing Dept.', 'Chaitanya Chaudhry-SEC-D_19DM241 (1).pdf'),
(123, 'Sartaj singh sandhu', '21', '04', '1994', '1', 'RCI Vidya vihar', 'K.R Mangalyam ', 'Sartajsingh.sandhu21@bimtech.ac.in  ', '7009235268', 'Masters', '2+ Year', 'BIMTECH', 'Dr shalini singh', 'Marketing Dept.', '19DM185_SartajSinghSandhu.docx'),
(124, 'Sourabh Yadwad', '18', '07', '1997', '1', 'Sirur Park, Hubballi', 'Marvel Signet', 'sourabh.yadwad21@bimtech.ac.in', '8904429949', 'Under Graduate', '0 to 1 Year', 'Birla Institute of Management Technology', 'Dr. Shalini Singh', 'Marketing Dept.', 'Sourabh Yadwad 19DM221 Resume.pdf'),
(125, 'Parima Choudhry', '21', '12', '1997', '2', 'House no.- 671 Sector-4 Panchkula ', 'Panchkula', 'choudhryparima2112@gmail.com', '8427388705', 'Under Graduate', '0 to 1 Year', 'DAV College Sector-10 Chandigarh ', 'Shalini Singh', 'Marketing Dept.', '72F6632B-9D0A-488F-B36F-8F8163D93FF2.jpeg'),
(126, 'Nikita Anupama', '26', '11', '1995', '2', 'Plot no. 237, Bari co operative colony, Bokaro steel city', 'Shiv Mandir', 'nikita.anupama21@bimtech.ac.in', '7992435528', 'Masters', '2+ Year', ' Bimtech', 'Shalini Singh', 'Marketing Dept.', 'Curriculum Vitae.docx'),
(127, 'Shamli Sharma', '26', '08', '1997', '2', 'Joginder Nagar , Distt. Mandi , HP 175032', 'Joginder Nagar', 'shamli.sharma21@bimtech.ac.in', '9459105134', 'Post Graduate', '0 to 1 Year', 'Birla Institute of Management Technology', 'Dr. Shalini Singh', 'Marketing Dept.', '19DM190_ShamliSharmaCV.docx'),
(128, 'Prakhar Kishore', '07', '10', '1995', '1', 'PUSHPAYAN-189, Nehru Enclave, Gomti Nagar, Lucknow, Uttar Pradesh ', 'Near Lohia park', 'prakharkishore7@gmail.com', '9554739236', 'Masters', '0 to 1 Year', 'BIMTECH', 'Shalini Singh', 'Marketing Dept.', '19DM134_PrakharKishore.docx'),
(129, 'TUHINA PRIYA', '24', '08', '1997', '2', 'Bimtech', 'K R MANGALAM', 'tuhina.priya21@bimtech.ac.in', '7550167748', 'Post Graduate', '0 to 1 Year', 'Birla institute of managament technology, greater noida ', 'Shalini singh', 'Technical Dept.', 'Big data in marketing analytics.pdf'),
(130, 'Thokchom Sana Ahingba', '24', '09', '1993', '1', 'Panjabari, Guwahati, Assam', 'Guwahati Public School', 'thokchomsana.ahingba21@bimtech.ac.in', '7641905729', 'Post Graduate', '0 to 1 Year', 'Bimtech', 'Dr Shalini Singh', 'Marketing Dept.', '17DM109,TRI-I STATS FOR BUSSN. ANALYSIS 2017.pdf'),
(131, 'V M SAI CHARAN REDDY', '02', '09', '1997', '1', 'RCI VIDYA VIHAR, knowledge park-3, Gr. noida', 'BIMTECH', 'vmsaicharan.reddy21@bimtech.ac.in', '7013703482', '10+', '0 to 1 Year', 'Birla institute of Management technology', 'Dr. Shalini singh', 'Marketing Dept.', '19DM232-resume(retail).docx.pdf'),
(132, 'Pravin Kumar ojha', '06', '01', '1995', '1', 'RCI Vidya vihar', 'K.R Mangalyam ', 'Pravin.ojha21@bimtech.ac.in', '9026825822', 'Post Graduate', '0 to 1 Year', 'BIMTECH', 'Dr shalini singh', 'Marketing Dept.', '19DM142_Pravinkumarojha.docx'),
(133, 'Shagun Singh ', '14', '09', '1995', '2', 'C -30 sector G aliganj ,lucknow', 'LDA stadium', 'Shagun.singh21@bimtech.ac.in', '9984125325', 'Post Graduate', '0 to 1 Year', 'Birla institute of management technology', 'Dr Shalini Singh', 'Marketing Dept.', 'SafariViewService - 31-Jan-2020 at 11:14 AM.pdf'),
(134, 'Samyak jain', '28', '08', '1997', '1', 'Rci vidya vihar', 'Bimtech', 'samyak.jain21@bimtech.ac.in', '9711990992', 'Post Graduate', '0 to 1 Year', 'Bimtech', 'Dr shalini singh', 'Marketing Dept.', 'Resume.pdf'),
(135, 'Shounak Sarkar', '16', '12', '1995', '1', 'D 203, Pramukh Gardens, Silvassa, 396230', 'Yogi Hospital', 'shounak.sarkar21@bimtech.ac.in', '8527515057', 'Post Graduate', '0 to 1 Year', 'Birla Institute of Management Technology', 'Dr. Shalini Singh', 'Marketing Dept.', '1580449485796_19DM202_Shounak Sarkar.pdf'),
(136, 'Pooja Rawat ', '31', '01', '1995', '2', 'B2 614 Himsagar Apartments p4 greater noida ', 'Jalvayu vihar ', 'Pooja.rawat21@bimtech.ac.in', '8447976741', 'Masters', '2+ Year', 'BIMTECH ', 'Dr Shalini singh', 'Marketing Dept.', 'Statistics-for-Management1.pdf'),
(137, 'Premal Shrivastava', '09', '02', '1993', '1', 'H-15 Sector 11 ', 'Metro Hospital', 'premal.srivastava21@bimtech.ac.in', '08076106357', 'Post Graduate', '2+ Year', 'Bimtech', 'Shalini Sharma', 'Marketing Dept.', 'Resume_Premal Shrivastava.docx'),
(138, 'Pooja Rawat', '31', '01', '1995', '2', 'B 2 614 himsagar appt greater noida', 'Jalvayu vihar', 'pooja.rawat21@bimtech.ac.in', '8447976741', 'Masters', '2+ Year', ' Bimtech', 'Dr Shalini Singh', 'Marketing Dept.', '2-0Overview.pdf'),
(139, 'Sanath Kumar A', '15', '02', '1996', '1', 'Chandra Nivas, Keremoole, Adoor, Urdoor POST, Kasaragod', 'Kerala', 'sanath.kumar21@bimtech.ac.in', '9663498942', 'Post Graduate', '0 to 1 Year', 'Birla Institute of Management Technology', 'Dr. Shalini Singh', 'Marketing Dept.', '19DM182_SanathKumarA.docx'),
(140, 'Raja babu', '21', '03', '1989', '1', 'Rci Vidya Vihar', 'Near dominos', 'raja.babu21@bimtech.ac.in', '9123237491', 'Post Graduate', '3+ Year', 'Bimtech', 'Shalini Singh', 'Technical Dept.', 'Republic-Day-2020-WhatsApp-GIfs (1).gif'),
(141, 'Aditya Sagar', '25', '02', '1996', '1', 'East Patel Nagar, h no.-48, r no.-05, Patna, Bihar', 'Panchwati ', 'adityasagar824@gmail.com', '7903767319', 'Post Graduate', '0 to 1 Year', 'Bimtech', 'Aic', 'Marketing Dept.', 'AdityaSagar_CV.docx');

-- --------------------------------------------------------

--
-- Table structure for table `keys`
--

CREATE TABLE `keys` (
  `id` int(11) NOT NULL,
  `key` varchar(40) NOT NULL,
  `level` int(2) NOT NULL,
  `ignore_limits` tinyint(1) NOT NULL DEFAULT 0,
  `is_private_key` tinyint(1) NOT NULL DEFAULT 0,
  `ip_addresses` text DEFAULT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `leads`
--

CREATE TABLE `leads` (
  `id` int(11) NOT NULL,
  `partner_id` varchar(10) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `leaving_from` varchar(100) NOT NULL,
  `going_to` varchar(100) NOT NULL,
  `start_date` varchar(20) NOT NULL,
  `end_date` varchar(20) NOT NULL,
  `total_pax` varchar(100) NOT NULL,
  `adults` varchar(10) NOT NULL,
  `kids` varchar(10) NOT NULL,
  `infants` varchar(10) NOT NULL,
  `class_of_travel` varchar(100) NOT NULL,
  `preferred_airline` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `origin` varchar(100) NOT NULL,
  `currency` varchar(10) NOT NULL,
  `price` varchar(10) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leads`
--

INSERT INTO `leads` (`id`, `partner_id`, `mobile`, `leaving_from`, `going_to`, `start_date`, `end_date`, `total_pax`, `adults`, `kids`, `infants`, `class_of_travel`, `preferred_airline`, `description`, `origin`, `currency`, `price`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '0', '7042254089', 'test', 'test', '43956', '43957', 'test', 'test1', 'test2', 'test3', 'test', 'test', 'test', 'test', '2', '50', '2020-05-15 14:19:51', '2020-05-15 14:19:51', NULL),
(2, '0', '7042254088', 'test not', 'test', '43956', '43957', 'test', 'test1', 'test2', 'test3', 'test', 'test', 'test', 'test', '2', '50', '2020-05-15 14:19:51', '2020-05-15 14:19:51', NULL),
(3, '1', '7042254089', 'test', 'test', '43956', '43957', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', '1', '50', '2020-05-23 13:57:33', '2020-05-23 13:57:33', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `leads_given`
--

CREATE TABLE `leads_given` (
  `id` int(11) NOT NULL,
  `partner_id` varchar(10) NOT NULL,
  `lead` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leads_given`
--

INSERT INTO `leads_given` (`id`, `partner_id`, `lead`) VALUES
(3, '1', '1'),
(4, '1', '3'),
(5, '2', '1');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `stime` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `uri` varchar(255) NOT NULL,
  `method` varchar(6) NOT NULL,
  `params` text DEFAULT NULL,
  `api_key` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `time` int(11) NOT NULL,
  `rtime` float DEFAULT NULL,
  `authorized` varchar(1) NOT NULL,
  `response_code` smallint(3) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
