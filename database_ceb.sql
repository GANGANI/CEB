-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2017 at 03:34 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database_ceb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` varchar(10) NOT NULL,
  `NIC_no` varchar(10) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone_number` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `NIC_no`, `user_name`, `password`, `name`, `email`, `address`, `phone_number`) VALUES
('00001A', '946540676V', 'AD01', 'mineLi45', 'G H V Gunasinghe', 'smrathnayake@gmail.com', '73 ragana matara', 775426711),
('00002A', '984567378v', 'ADdinu1', 'dinu123', 'Dinushika R T', 'gfjferre@gmail.com', '72 Thalahagama Makandura', 973456765);

-- --------------------------------------------------------

--
-- Table structure for table `assigned_connection`
--

CREATE TABLE `assigned_connection` (
  `meter_reader_id` varchar(10) NOT NULL,
  `connection_id` varchar(10) NOT NULL,
  `assigned_date` varchar(10) NOT NULL,
  `has_read` varchar(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assigned_connection`
--

INSERT INTO `assigned_connection` (`meter_reader_id`, `connection_id`, `assigned_date`, `has_read`) VALUES
('00001MR', 'MAH100001', '01.11.2017', '0'),
('00001MR', 'MAR100003', '01.11.2017', '0'),
('00005MR', 'MAH100004', '08.11.2017', '0');

-- --------------------------------------------------------

--
-- Table structure for table `bill_details`
--

CREATE TABLE `bill_details` (
  `connection_id` varchar(10) NOT NULL,
  `bill_no` varchar(10) NOT NULL,
  `meter_reading` int(6) NOT NULL,
  `month` varchar(10) NOT NULL,
  `monthly_bill` varchar(10) NOT NULL,
  `reading_date` varchar(12) NOT NULL,
  `meter_reader_id` varchar(10) NOT NULL,
  `units` decimal(6,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bill_details`
--

INSERT INTO `bill_details` (`connection_id`, `bill_no`, `meter_reading`, `month`, `monthly_bill`, `reading_date`, `meter_reader_id`, `units`) VALUES
('MAH100001', '1', 10, 'Nov 2017', '110', '8, 11, 2017', '00001MR', '10'),
('MAH100004', '1', 50, 'Nov 2017', '430', '8, 11, 2017', '00005MR', '50'),
('MAR100003', '1', 20, 'Nov 2017', '110', '8, 11, 2017', '00001MR', '20');

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `branch_no` varchar(10) NOT NULL,
  `branch_name` varchar(20) NOT NULL,
  `location` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`branch_no`, `branch_name`, `location`) VALUES
('GM0001', 'Gampaha Head Office', '23, Cross Rd, Gampaha'),
('MA0002', 'Matara', 'darmapala rd,Matara'),
('MA0003', 'Akuressa', '43, Main Strret, Akkuressa, Matara');

-- --------------------------------------------------------

--
-- Table structure for table `branch_itoperator`
--

CREATE TABLE `branch_itoperator` (
  `operator_id` varchar(10) NOT NULL,
  `NIC_no` varchar(10) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `branch_no` varchar(10) DEFAULT NULL,
  `password` varchar(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone_number` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branch_itoperator`
--

INSERT INTO `branch_itoperator` (`operator_id`, `NIC_no`, `user_name`, `branch_no`, `password`, `name`, `email`, `address`, `phone_number`) VALUES
('00001OP', '874564567v', 'OP01', 'MA0002', '123', 'A K Gunapala', 'naradaK@gmail.com', 'ranagala,Makanadara,Matara', 773456721);

-- --------------------------------------------------------

--
-- Table structure for table `connection`
--

CREATE TABLE `connection` (
  `connection_id` varchar(10) NOT NULL,
  `customer_id` varchar(10) NOT NULL,
  `branch_no` varchar(10) NOT NULL,
  `type_id` varchar(10) NOT NULL,
  `connection_state` varchar(20) DEFAULT NULL,
  `due_amount` decimal(12,2) NOT NULL,
  `location_address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `connection`
--

INSERT INTO `connection` (`connection_id`, `customer_id`, `branch_no`, `type_id`, `connection_state`, `due_amount`, `location_address`) VALUES
('GMH200002', '00002C', 'GM0001', 'H2', 'connected', '0.00', '76, Flower Rd, Gampaha'),
('MAH100001', '00001C', 'MA0002', 'H1', 'connected', '110.00', '71/17,Thotupola Rd, Matara'),
('MAH100004', '00004C', 'MA0003', 'H1', 'connected', '520.00', 'Misissa.Udupila,Matara'),
('MAR100003', '00003C', 'MA0002', 'R1', 'connected', '110.00', '65, Rahula Rd, Matara');

-- --------------------------------------------------------

--
-- Table structure for table `connection_request`
--

CREATE TABLE `connection_request` (
  `request_id` int(11) NOT NULL,
  `branch_no` varchar(10) DEFAULT NULL,
  `NIC` varchar(10) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone_number` int(10) NOT NULL,
  `type_id` varchar(10) DEFAULT NULL,
  `Read_state` varchar(10) NOT NULL,
  `contact_address` varchar(200) DEFAULT NULL,
  `location_address` varchar(200) DEFAULT NULL,
  `neighbour_conn_id` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `connection_request`
--

INSERT INTO `connection_request` (`request_id`, `branch_no`, `NIC`, `name`, `email`, `phone_number`, `type_id`, `Read_state`, `contact_address`, `location_address`, `neighbour_conn_id`) VALUES
(1, 'MA0002', '22222', 'eeeeeeeeeee', 'gcariyarathne@gmail.com', 74108520, 'H1', 'NO', '88888', 'asdfghjkl;ertyuio', '741');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` varchar(10) NOT NULL,
  `NIC_no` varchar(10) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `address` varchar(100) NOT NULL,
  `phone_number` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `NIC_no`, `user_name`, `password`, `name`, `email`, `address`, `phone_number`) VALUES
('00001C', '567867867v', 'CU01', '123', 'A KL kawmini', 'kawmini@gmail.com', '34 thotupala rd mtara', 775426711),
('00002C', '984567935v', 'CU02', '456', 'Lasitha Sewwandi', 'lasi@gmail.com', '67 mawala rd rajagiriya', 973456765),
('00003C', '951236547V', 'OP01', '147', 'SOMINDA GAMAGE', 'sominda@gmail.com', 'N0:88, Flowe lane, Isedin, Matara', 719873902),
('00004C', '966540676v', 'CU04', '123', 'Pasindu Chinthiya', 'pasindu@gmail.com', 'Denipitiya,Weligama,Matara', 766921168);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` varchar(10) NOT NULL,
  `event_name` varchar(100) NOT NULL,
  `date` varchar(10) DEFAULT NULL,
  `time` varchar(10) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `image` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `event_name`, `date`, `time`, `description`, `image`) VALUES
INSERT INTO `events` (`event_id`, `event_name`, `date`, `time`, `description`, `image`) VALUES

-- --------------------------------------------------------

--
-- Table structure for table `inquiries`
--

CREATE TABLE `inquiries` (
  `inquiry_id` int(10) NOT NULL,
  `customer_id` varchar(10) DEFAULT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telephone_no` int(10) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `message` varchar(1000) NOT NULL,
  `read_state` varchar(5) NOT NULL,
  `Inquiry` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inquiries`
--

INSERT INTO `inquiries` (`inquiry_id`, `customer_id`, `name`, `email`, `telephone_no`, `address`, `message`, `read_state`, `Inquiry`) VALUES
(1, '00001C', 'Lakhi', 'lakshiathapaththu998@gmail.com', 9876543, 'jsdfghjk kjhgfdfgh kgfdfgh', 'asdfghjkl\r\nsdfghjkl', 'NO', 'failure of transformer'),
(2, '00002C', 'Gaga', 'gaga@gmail.com', 412229637, 'ihalagewatta,nawimana,matara', 'noooo', 'NO', 'Disaster '),
(3, '00001C', 'CU01', 'kawmini@gmail.com', 775426711, '34', 'lol', '', 'ppppppppp'),
(4, '00001C', 'CU01', 'kawmini@gmail.com', 775426711, '34', 'fdfdsfdgdgd', '', 'lkjhggdhjs,fsdf'),
(5, '00001C', 'CU01', 'kawmini@gmail.com', 775426711, '34', 'fghj', '', ''),
(6, '00001C', 'CU01', 'kawmini@gmail.com', 775426711, '34', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx', '', 'xxxxxxxxxxxxxxxxxx'),
(7, '00001C', 'CU01', 'kawmini@gmail.com', 775426711, '34', 'uuuuuuuuuuuuuuuuuuuu', '', 'ujiol;'),
(8, '00001C', 'CU01', 'kawmini@gmail.com', 775426711, '34', 'ffffffffffffffffffffffff', '', 'eeeeeeeeeeeeeeeeeeeees'),
(9, '00001C', 'CU01', 'kawmini@gmail.com', 775426711, '34', 'dddddddddddddd', '', 'dddddddddddddd'),
(10, '00001C', 'CU01', 'kawmini@gmail.com', 775426711, '34', 'tttttttttttttt', '', 'sdfghj'),
(11, NULL, 'B', 'gcariyarathne@gmail.com', 719361190, 'ddddd', 'amammamama', '', 'mamamaa'),
(12, NULL, 'dinushi', 'dinu@gmail.com', 9876543, 'edd', 'eeeeeeeeeeee', '', 'edd'),
(13, NULL, ',sas', 'dinu@gmail.com', 98765, 'dsds', 'dssssssssssss', '', 'fssssssssss'),
(14, NULL, 'hdksjhfksj', 'gcariyarathne@gmail.com', 368276, 'ejwkljl', 'fsdffdsf', '', 'ssfsdfsdf'),
(15, NULL, 'lakshi', 'gcariyarathne@gmail.com', 1234567, 'rhwuhfuewi', 'fdjfjdnfdnfdgfd', '', 'fjsdkjflskdf'),
(16, NULL, 'gdgfg', 'gcariyarathne@gmail.com', 987654, 'fsdfs', 'ektlejgtl', '', 'fldlfg'),
(17, NULL, 'lakshi', 'lakshi@gmail.com', 7654, 'fdhfkjsdkf', 'dhsjhfjd', '', 'sdfhshfshfs'),
(18, NULL, 'cxx', 'gcariyarathne@gmail.com', 903290, 'djsjclksdjsdk', 'snjsndjksndk', '', 'dsndsjnkjdk'),
(19, NULL, 'jd', 'gcariyarathne@gmail.com', 993439, 'dksak', 'czxcxcxz', '', 'xzcc'),
(20, NULL, 'gangani', 'lakshi@gmail.com', 719361190, 'kkkkk', 'pppppppppppppppp', '', 'rrrrrrrrrrrrr'),
(21, NULL, 'gtgtg', 'gcariyarathne@gmail.com', 719361190, 'ddddddddd', 'kkkkkkkkkkkk', '', 'ppp'),
(22, '00001C', 'CU01', 'kawmini@gmail.com', 775426711, '34', 'pppppppppp', '', 'sdfgh'),
(23, '00001C', 'CU01', 'kawmini@gmail.com', 775426711, '34', 'kxaljxkjx', '', 'ssd'),
(24, '00001C', 'CU01', 'kawmini@gmail.com', 775426711, '34', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaa', '', 'ppppppppppppppppp'),
(25, '00001C', 'CU01', 'kawmini@gmail.com', 775426711, 'pppppppppppppppppppppppppp', 'wewewwewewew', '', 'rrrrrrrrrr');

-- --------------------------------------------------------

--
-- Table structure for table `meter_reader`
--

CREATE TABLE `meter_reader` (
  `meter_reader_id` varchar(10) NOT NULL,
  `NIC_no` varchar(10) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone_number` int(10) NOT NULL,
  `branch_no` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meter_reader`
--

INSERT INTO `meter_reader` (`meter_reader_id`, `NIC_no`, `user_name`, `password`, `email`, `name`, `address`, `phone_number`, `branch_no`) VALUES
('00001MR', '78784567v', 'MR01', '123', 'lakiKaw@gmail.com', 'Lakshani Athapaththu', '71,Temple Road,Matara', 776756721, 'MA0002'),
('00005MR', '951234567V', 'MR05', '123', 'dinuja@gmail.com', 'Dinuja Rathnayake', '65, Ananda Rd, Hakmana, Matara', 711234567, 'MA0002');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `connection_id` varchar(10) NOT NULL,
  `payment_id` varchar(10) NOT NULL,
  `amount` decimal(8,2) NOT NULL,
  `paid_date` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `report_id` varchar(10) NOT NULL,
  `year` decimal(4,0) DEFAULT NULL,
  `annual_consumption` decimal(10,2) NOT NULL,
  `number_of_newConnections` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `type_id` varchar(10) NOT NULL,
  `type_name` varchar(20) DEFAULT NULL,
  `current_phase` varchar(8) DEFAULT NULL,
  `current_amount` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`type_id`, `type_name`, `current_phase`, `current_amount`) VALUES
('H1', 'House', 'single', '30A'),
('H2', 'House', '3phase', '30A'),
('H3', 'House', '3phase', '60A'),
('R1', 'Religious', 'single', '30A');

-- --------------------------------------------------------

--
-- Table structure for table `unit_range`
--

CREATE TABLE `unit_range` (
  `range_id` varchar(10) NOT NULL,
  `type_id` varchar(10) NOT NULL,
  `U_range` varchar(20) NOT NULL,
  `energy_charge` decimal(5,2) NOT NULL,
  `fixed_charge` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `unit_range`
--

INSERT INTO `unit_range` (`range_id`, `type_id`, `U_range`, `energy_charge`, `fixed_charge`) VALUES
('1', 'H1', '30', '8.00', '30.00'),
('1', 'R1', '30', '5.00', '10.00'),
('2', 'H1', '60', '12.00', '60.00'),
('2', 'R1', '60', '10.00', '20.00'),
('3', 'H1', '90', '15.00', '65.00'),
('3', 'R1', '90', '12.00', '25.00'),
('4', 'H1', 'otherwise', '20.00', '80.00'),
('4', 'R1', 'otherwise', '15.00', '30.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `assigned_connection`
--
ALTER TABLE `assigned_connection`
  ADD PRIMARY KEY (`meter_reader_id`,`connection_id`),
  ADD KEY `connection_id` (`connection_id`);

--
-- Indexes for table `bill_details`
--
ALTER TABLE `bill_details`
  ADD PRIMARY KEY (`connection_id`,`bill_no`),
  ADD KEY `meter_reader_id` (`meter_reader_id`);

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`branch_no`);

--
-- Indexes for table `branch_itoperator`
--
ALTER TABLE `branch_itoperator`
  ADD PRIMARY KEY (`operator_id`),
  ADD KEY `branch_no` (`branch_no`);

--
-- Indexes for table `connection`
--
ALTER TABLE `connection`
  ADD PRIMARY KEY (`connection_id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `type_id` (`type_id`),
  ADD KEY `branch_no` (`branch_no`);

--
-- Indexes for table `connection_request`
--
ALTER TABLE `connection_request`
  ADD PRIMARY KEY (`request_id`),
  ADD KEY `branch_no` (`branch_no`),
  ADD KEY `type_id` (`type_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `inquiries`
--
ALTER TABLE `inquiries`
  ADD PRIMARY KEY (`inquiry_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `meter_reader`
--
ALTER TABLE `meter_reader`
  ADD PRIMARY KEY (`meter_reader_id`),
  ADD KEY `branch_no` (`branch_no`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`connection_id`,`payment_id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`report_id`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `unit_range`
--
ALTER TABLE `unit_range`
  ADD PRIMARY KEY (`range_id`,`type_id`),
  ADD KEY `type_id` (`type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `connection_request`
--
ALTER TABLE `connection_request`
  MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `inquiries`
--
ALTER TABLE `inquiries`
  MODIFY `inquiry_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `assigned_connection`
--
ALTER TABLE `assigned_connection`
  ADD CONSTRAINT `assigned_connection_ibfk_1` FOREIGN KEY (`meter_reader_id`) REFERENCES `meter_reader` (`meter_reader_id`),
  ADD CONSTRAINT `assigned_connection_ibfk_2` FOREIGN KEY (`connection_id`) REFERENCES `connection` (`connection_id`);

--
-- Constraints for table `bill_details`
--
ALTER TABLE `bill_details`
  ADD CONSTRAINT `bill_details_ibfk_1` FOREIGN KEY (`meter_reader_id`) REFERENCES `meter_reader` (`meter_reader_id`),
  ADD CONSTRAINT `bill_details_ibfk_2` FOREIGN KEY (`connection_id`) REFERENCES `connection` (`connection_id`);

--
-- Constraints for table `branch_itoperator`
--
ALTER TABLE `branch_itoperator`
  ADD CONSTRAINT `branch_itoperator_ibfk_1` FOREIGN KEY (`branch_no`) REFERENCES `branch` (`branch_no`) ON DELETE SET NULL;

--
-- Constraints for table `connection`
--
ALTER TABLE `connection`
  ADD CONSTRAINT `connection_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`),
  ADD CONSTRAINT `connection_ibfk_2` FOREIGN KEY (`type_id`) REFERENCES `type` (`type_id`),
  ADD CONSTRAINT `connection_ibfk_3` FOREIGN KEY (`branch_no`) REFERENCES `branch` (`branch_no`);

--
-- Constraints for table `connection_request`
--
ALTER TABLE `connection_request`
  ADD CONSTRAINT `connection_request_ibfk_1` FOREIGN KEY (`branch_no`) REFERENCES `branch` (`branch_no`) ON DELETE SET NULL,
  ADD CONSTRAINT `connection_request_ibfk_2` FOREIGN KEY (`type_id`) REFERENCES `type` (`type_id`) ON DELETE SET NULL;

--
-- Constraints for table `inquiries`
--
ALTER TABLE `inquiries`
  ADD CONSTRAINT `inquiries_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`);

--
-- Constraints for table `meter_reader`
--
ALTER TABLE `meter_reader`
  ADD CONSTRAINT `meter_reader_ibfk_1` FOREIGN KEY (`branch_no`) REFERENCES `branch` (`branch_no`) ON DELETE SET NULL;

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_ibfk_1` FOREIGN KEY (`connection_id`) REFERENCES `connection` (`connection_id`);

--
-- Constraints for table `unit_range`
--
ALTER TABLE `unit_range`
  ADD CONSTRAINT `unit_range_ibfk_1` FOREIGN KEY (`type_id`) REFERENCES `type` (`type_id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;