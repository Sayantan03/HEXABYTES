-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2020 at 06:38 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tram`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_details`
--

CREATE TABLE `admin_details` (
  `id` int(11) NOT NULL,
  `aname` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `bg` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `job` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_details`
--

INSERT INTO `admin_details` (`id`, `aname`, `dob`, `bg`, `phone`, `mail`, `pass`, `job`) VALUES
(1, 'SB', '2020-05-13', 'A+', '9477361093', 'rbanjee@gmail.com', '1234', 'Booking Manager'),
(3, 'A G', '1990-09-28', 'B+', '9876543210', 'a@gmail.com', '12345', 'Tram Pilot'),
(4, 'R M', '1990-01-27', 'A+', '9638527410', 'r@gmail.com', '123456', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `approve`
--

CREATE TABLE `approve` (
  `id` int(11) NOT NULL,
  `cname` varchar(100) NOT NULL,
  `bp` varchar(100) NOT NULL,
  `date1` date NOT NULL,
  `stime` time NOT NULL,
  `etime` time NOT NULL,
  `fare` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `approve`
--

INSERT INTO `approve` (`id`, `cname`, `bp`, `date1`, `stime`, `etime`, `fare`) VALUES
(1, 'SB', 'Kolkata Darshan', '2020-05-24', '14:00:00', '20:00:00', '20000.00'),
(2, 'RB', 'Pujo Parikhama', '2020-05-28', '14:00:00', '20:00:00', '30000.00');

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `cname` varchar(100) NOT NULL,
  `cno` varchar(50) NOT NULL,
  `ed` varchar(50) DEFAULT NULL,
  `cvv` varchar(50) NOT NULL,
  `amount` double(12,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`cname`, `cno`, `ed`, `cvv`, `amount`) VALUES
('SHUBHAM DEBNATH', '1122334455667788', '2021-03', '990', 1000000.00),
('RAHUL SHAW', '1234567812345678', '2021-02', '909', 1000000.00),
('AYAN NANDI', '1234567890123456', '2021-04', '789', 1000000.00),
('SAYANTAN BANIK', '8765432112345678', '2021-05', '099', 1000000.00),
('SIDDHARTHA BANERJEE', '8877665544332211', '2021-08', '900', 970000.00),
('SUBHAM SAMANTA', '9876543210987654', '2021-06', '101', 1000000.00);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `tourtype` varchar(100) DEFAULT NULL,
  `tramdetails` varchar(100) DEFAULT NULL,
  `rating` bigint(20) DEFAULT NULL,
  `q1` varchar(100) DEFAULT NULL,
  `q2` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`tourtype`, `tramdetails`, `rating`, `q1`, `q2`) VALUES
('Normal Booking', 'AC,5 Shyambazar-Esplanade', 5, 'Collegestreet', 'No suggestion'),
('Special Booking', 'Kolkata Darshan', 5, 'Uttar Kolkata Darshan', 'No suggestion');

-- --------------------------------------------------------

--
-- Table structure for table `feedback_app`
--

CREATE TABLE `feedback_app` (
  `id` int(11) NOT NULL,
  `rate` int(11) NOT NULL,
  `ticketpurchaseproblem` varchar(50) NOT NULL,
  `userfriendly` varchar(50) NOT NULL,
  `suggestion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback_app`
--

INSERT INTO `feedback_app` (`id`, `rate`, `ticketpurchaseproblem`, `userfriendly`, `suggestion`) VALUES
(1, 4, 'No', 'No', ''),
(2, 5, 'No', 'No', 'Very Good Service.'),
(3, 5, 'No', 'No', ''),
(4, 5, 'No', 'No', ''),
(5, 5, 'No', 'No', ''),
(6, 5, 'No', 'No', ''),
(7, 5, 'No', 'No', ''),
(8, 5, 'No', 'No', ''),
(9, 5, 'No', 'No', ''),
(10, 5, 'No', 'No', ''),
(11, 5, 'No', 'No', ''),
(12, 5, 'No', 'No', ''),
(13, 5, 'No', 'No', ''),
(14, 5, 'No', 'No', ''),
(15, 5, 'No', 'No', ''),
(16, 5, 'No', 'No', ''),
(17, 5, 'No', 'No', ''),
(18, 5, 'No', 'No', '');

-- --------------------------------------------------------

--
-- Table structure for table `live_location`
--

CREATE TABLE `live_location` (
  `tramid` varchar(50) NOT NULL,
  `latitude` varchar(50) NOT NULL,
  `longitude` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `passenger`
--

CREATE TABLE `passenger` (
  `name` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `passenger`
--

INSERT INTO `passenger` (`name`, `phone`, `email`, `password`) VALUES
('S', '9163196700', 's@gmail.com', 'G@1234'),
('Subham', '9876543210', 'ss@gmail.com', 'ss@1234');

-- --------------------------------------------------------

--
-- Table structure for table `sbooking_details`
--

CREATE TABLE `sbooking_details` (
  `id` int(11) NOT NULL,
  `purpose` varchar(100) NOT NULL,
  `fare(rs)` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `special_ticket`
--

CREATE TABLE `special_ticket` (
  `id` int(11) NOT NULL,
  `fare` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `special_ticket`
--

INSERT INTO `special_ticket` (`id`, `fare`) VALUES
(1, '20000.00'),
(2, '30000.00');

-- --------------------------------------------------------

--
-- Table structure for table `tramapprove`
--

CREATE TABLE `tramapprove` (
  `id` int(11) NOT NULL,
  `cname` varchar(100) NOT NULL,
  `bp` varchar(100) NOT NULL,
  `date1` date NOT NULL,
  `stime` time NOT NULL,
  `etime` time NOT NULL,
  `fare` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tramdetails`
--

CREATE TABLE `tramdetails` (
  `tramid` varchar(50) NOT NULL,
  `source` varchar(50) NOT NULL,
  `destination` varchar(50) NOT NULL,
  `starttime` varchar(50) DEFAULT NULL,
  `endtime` varchar(50) DEFAULT NULL,
  `category` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tramdetails`
--

INSERT INTO `tramdetails` (`tramid`, `source`, `destination`, `starttime`, `endtime`, `category`) VALUES
('12301', 'Esplanade', 'Khidirpore', '07:00hrs', '07:30hrs', 'NON AC'),
('12303', 'Esplanade', 'Khidirpore', '07:30hrs', '08:00hrs', 'AC'),
('12305', 'Esplanade', 'Khidirpore', '08:00hrs', '08:30hrs', 'NON AC'),
('12307', 'Esplanade', 'Khidirpore', '08:30hrs', '09:00hrs', 'AC'),
('12309', 'Esplanade', 'Khidirpore', '09:00hrs', '09:30hrs', 'NON AC'),
('12311', 'Esplanade', 'Khidirpore', '09:30hrs', '10:00hrs', 'AC'),
('12313', 'Esplanade', 'Khidirpore', '10:00hrs', '10:30hrs', 'NON AC'),
('12315', 'Esplanade', 'Khidirpore', '10:30hrs', '11:00hrs', 'AC'),
('12317', 'Esplanade', 'Khidirpore', '11:00hrs', '11:30hrs', 'NON AC'),
('12321', 'Esplanade', 'Khidirpore', '12:00hrs', '12:30hrs', 'NON AC'),
('12325', 'Esplanade', 'Khidirpore', '14:00hrs', '14:30hrs', 'NON AC'),
('12329', 'Esplanade', 'Khidirpore', '15:00hrs', '15:30hrs', 'NON AC'),
('12331', 'Esplanade', 'Khidirpore', '16:00hrs', '16:30hrs', 'AC'),
('12333', 'Esplanade', 'Khidirpore', '17:00hrs', '17:30hrs', 'NON AC'),
('12335', 'Esplanade', 'Khidirpore', '18:30hrs', '18:00hrs', 'AC'),
('12337', 'Esplanade', 'Khidirpore', '18:00hrs', '18:30hrs', 'NON AC'),
('12339', 'Esplanade', 'Khidirpore', '18:30hrs', '19:00hrs', 'AC'),
('12341', 'Esplanade', 'Khidirpore', '19:30hrs', '20:00hrs', 'NON AC'),
('12343', 'Esplanade', 'Khidirpore', '20:00hrs', '20:30hrs', 'AC'),
('12345', 'Esplanade', 'Khidirpore', '20:30hrs', '21:00hrs', 'NON AC'),
('12347', 'Esplanade', 'Khidirpore', '21:00hrs', '21:30hrs', 'AC'),
('12349', 'Esplanade', 'Khidirpore', '22:00hrs', '22:30hrs', 'NON AC'),
('12302', 'Khidirpore', 'Esplanade', '07:00hrs', '07:30hrs', 'AC'),
('12304', 'Khidirpore', 'Esplanade', '07:30hrs', '08:00hrs', 'NON AC'),
('12306', 'Khidirpore', 'Esplanade', '08:00hrs', '08:30hrs', 'AC'),
('12308', 'Khidirpore', 'Esplanade', '08:30hrs', '09:00hrs', 'NON AC'),
('12310', 'Khidirpore', 'Esplanade', '09:00hrs', '09:30hrs', 'AC'),
('12312', 'Khidirpore', 'Esplanade', '09:30hrs', '10:00hrs', 'NON AC'),
('12314', 'Khidirpore', 'Esplanade', '10:00hrs', '10:30hrs', 'AC'),
('12316', 'Khidirpore', 'Esplanade', '10:30hrs', '11:00hrs', 'NON AC'),
('12318', 'Khidirpore', 'Esplanade', '11:00hrs', '11:30hrs', 'AC'),
('12322', 'Khidirpore', 'Esplanade', '12:00hrs', '12:30hrs', 'AC'),
('12326', 'Khidirpore', 'Esplanade', '14:00hrs', '14:30hrs', 'AC'),
('12330', 'Khidirpore', 'Esplanade', '15:00hrs', '15:30hrs', 'AC'),
('12332', 'Khidirpore', 'Esplanade', '16:00hrs', '16:30hrs', 'NON AC'),
('12334', 'Khidirpore', 'Esplanade', '17:00hrs', '17:30hrs', 'AC'),
('12336', 'Khidirpore', 'Esplanade', '17:30hrs', '18:00hrs', 'NON AC'),
('12338', 'Khidirpore', 'Esplanade', '18:00hrs', '18:30hrs', 'AC'),
('12340', 'Khidirpore', 'Esplanade', '18:30hrs', '19:00hrs', 'NON AC'),
('12342', 'Khidirpore', 'Esplanade', '19:30hrs', '20:00hrs', 'AC'),
('12344', 'Khidirpore', 'Esplanade', '20:00hrs', '20:30hrs', 'NON AC'),
('12346', 'Khidirpore', 'Esplanade', '20:30hrs', '21:00hrs', 'AC'),
('12348', 'Khidirpore', 'Esplanade', '21:00hrs', '21:30hrs', 'NON AC'),
('12350', 'Khidirpore', 'Esplanade', '22:00hrs', '22:30hrs', 'AC'),
('12401', 'Shyambazar', 'Esplanade', '07:00hrs', '07:30hrs', 'NON AC'),
('12503', 'Shyambazar', 'Esplanade', '07:30hrs', '08:00hrs', 'AC'),
('12405', 'Shyambazar', 'Esplanade', '08:00hrs', '08:30hrs', 'NON AC'),
('12507', 'Shyambazar', 'Esplanade', '08:30hrs', '09:00hrs', 'AC'),
('12409', 'Shyambazar', 'Esplanade', '09:00hrs', '09:30hrs', 'NON AC'),
('12511', 'Shyambazar', 'Esplanade', '09:30hrs', '10:00hrs', 'AC'),
('12413', 'Shyambazar', 'Esplanade', '10:00hrs', '10:30hrs', 'NON AC'),
('12515', 'Shyambazar', 'Esplanade', '11:00hrs', '11:30hrs', 'AC'),
('12417', 'Shyambazar', 'Esplanade', '12:00hrs', '12:30hrs', 'NON AC'),
('12519', 'Shyambazar', 'Esplanade', '14:00hrs', '14:30hrs', 'AC'),
('12421', 'Shyambazar', 'Esplanade', '15:00hrs', '15:30hrs', 'NON AC'),
('12523', 'Shyambazar', 'Esplanade', '16:00hrs', '16:30hrs', 'AC'),
('12425', 'Shyambazar', 'Esplanade', '17:00hrs', '17:30hrs', 'NON AC'),
('12527', 'Shyambazar', 'Esplanade', '17:30hrs', '18:00hrs', 'AC'),
('12429', 'Shyambazar', 'Esplanade', '18:00hrs', '18:30hrs', 'NON AC'),
('12531', 'Shyambazar', 'Esplanade', '18:30hrs', '19:00hrs', 'AC'),
('12433', 'Shyambazar', 'Esplanade', '19:00hrs', '19:30hrs', 'NON AC'),
('12535', 'Shyambazar', 'Esplanade', '19:30hrs', '20:00hrs', 'AC'),
('12437', 'Shyambazar', 'Esplanade', '20:00hrs', '20:30hrs', 'NON AC'),
('12539', 'Shyambazar', 'Esplanade', '20:30hrs', '21:00hrs', 'AC'),
('12441', 'Shyambazar', 'Esplanade', '21:00hrs', '21:30hrs', 'NON AC'),
('12543', 'Shyambazar', 'Esplanade', '22:00hrs', '22:30hrs', 'AC'),
('12544', 'Esplanade', 'Shyambazar', '07:00hrs', '07:30hrs', 'AC'),
('12402', 'Esplanade', 'Shyambazar', '07:30hrs', '08:00hrs', 'NON AC'),
('12504', 'Esplanade', 'Shyambazar', '08:00hrs', '08:30hrs', 'AC'),
('12406', 'Esplanade', 'Shyambazar', '08:30hrs', '09:00hrs', 'NON AC'),
('12508', 'Esplanade', 'Shyambazar', '09:00hrs', '09:30hrs', 'AC'),
('12410', 'Esplanade', 'Shyambazar', '09:30hrs', '10:00hrs', 'NON AC'),
('12512', 'Esplanade', 'Shyambazar', '10:00hrs', '10:30hrs', 'AC'),
('12414', 'Esplanade', 'Shyambazar', '11:00hrs', '11:30hrs', 'NON AC'),
('12516', 'Esplanade', 'Shyambazar', '12:00hrs', '12:30hrs', 'AC'),
('12418', 'Esplanade', 'Shyambazar', '14:00hrs', '14:30hrs', 'NON AC'),
('12520', 'Esplanade', 'Shyambazar', '15:00hrs', '15:30hrs', 'AC'),
('12422', 'Esplanade', 'Shyambazar', '16:00hrs', '16:30hrs', 'NON AC'),
('12524', 'Esplanade', 'Shyambazar', '17:00hrs', '17:30hrs', 'AC'),
('12426', 'Esplanade', 'Shyambazar', '17:30hrs', '18:00hrs', 'NON AC'),
('12528', 'Esplanade', 'Shyambazar', '18:00hrs', '18:30hrs', 'AC'),
('12430', 'Esplanade', 'Shyambazar', '18:30hrs', '19:00hrs', 'NON AC'),
('12532', 'Esplanade', 'Shyambazar', '19:00hrs', '19:30hrs', 'AC'),
('12434', 'Esplanade', 'Shyambazar', '19:30hrs', '20:00hrs', 'NON AC'),
('12536', 'Esplanade', 'Shyambazar', '20:00hrs', '20:30hrs', 'AC'),
('12438', 'Esplanade', 'Shyambazar', '20:30hrs', '21:00hrs', 'NON AC'),
('12540', 'Esplanade', 'Shyambazar', '21:00hrs', '21:30hrs', 'AC'),
('12442', 'Esplanade', 'Shyambazar', '22:00hrs', '22:30hrs', 'NON AC');

-- --------------------------------------------------------

--
-- Table structure for table `unreserved_ticket`
--

CREATE TABLE `unreserved_ticket` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `fare` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `unreserved_ticket`
--

INSERT INTO `unreserved_ticket` (`id`, `date`, `fare`) VALUES
(1, '2020-05-05', '20'),
(26, '2020-05-14', '20'),
(27, '2020-05-21', '20'),
(32, '2020-05-15', '20'),
(33, '2020-05-20', '7'),
(36, '2020-09-05', '20'),
(37, '2020-05-13', '40'),
(38, '2020-05-14', '28'),
(40, '2020-05-22', '40'),
(41, '2020-05-22', '40'),
(42, '2020-05-22', '40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_details`
--
ALTER TABLE `admin_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`cno`);

--
-- Indexes for table `feedback_app`
--
ALTER TABLE `feedback_app`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `passenger`
--
ALTER TABLE `passenger`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `sbooking_details`
--
ALTER TABLE `sbooking_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `special_ticket`
--
ALTER TABLE `special_ticket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tramapprove`
--
ALTER TABLE `tramapprove`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `unreserved_ticket`
--
ALTER TABLE `unreserved_ticket`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_details`
--
ALTER TABLE `admin_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `feedback_app`
--
ALTER TABLE `feedback_app`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `sbooking_details`
--
ALTER TABLE `sbooking_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tramapprove`
--
ALTER TABLE `tramapprove`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `unreserved_ticket`
--
ALTER TABLE `unreserved_ticket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
