-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2024 at 02:23 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `o_t_b`
--

-- --------------------------------------------------------

--
-- Table structure for table `agency`
--

CREATE TABLE `agency` (
  `agency_id` int(255) NOT NULL,
  `agency_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `agency`
--

INSERT INTO `agency` (`agency_id`, `agency_name`, `email`, `phone`, `location`) VALUES
(1, 'Horizon', 'horizon@gmail.com', '07545535345', 'gitega'),
(2, 'Volcano', 'volcano@gmail.com', '07545535345', 'Remera'),
(3, 'Ritco', 'ritco@gmail.com', '0783334959', 'nyarugenge');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `idnumber` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `agency_id` int(255) DEFAULT NULL,
  `amount` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `destination` varchar(255) NOT NULL,
  `booking_date` date NOT NULL,
  `bus_station` varchar(255) NOT NULL,
  `Date_Now` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `status` varchar(255) NOT NULL DEFAULT 'Not approved'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `fullname`, `phone`, `idnumber`, `email`, `agency_id`, `amount`, `location`, `destination`, `booking_date`, `bus_station`, `Date_Now`, `status`) VALUES
(1, 'mugisha', '0783424232', '1200275445643', 'mugisha@gmail.com', 1, '1', 'kigali', 'nyanza', '2202-02-20', 'kigali', '2024-04-30 08:58:18.267720', 'approved'),
(2, 'aliane', '07545535345', '19987535566433', 'aliane@gmail.com', 2, '12', 'huye', 'nyaruguru', '2023-03-15', 'kamonyi', '2024-04-29 20:00:18.863388', 'not approved'),
(3, 'tuyishime', '0782244777', '12006544336435', 'tuyishime@gmail.com', 2, '1', 'rusizi', 'kigali', '2023-03-15', 'kigali', '2024-04-29 20:00:34.972891', 'not approved'),
(4, 'turikumwe', '0798907632', '1200087534563', 'turikumwe@gmail.com', 1, '10', 'kigali', 'huye', '2021-12-12', 'kigali', '2024-04-29 20:00:49.191207', 'Not approved');

-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

CREATE TABLE `bus` (
  `bus_id` int(255) NOT NULL,
  `bus_plate` varchar(255) NOT NULL,
  `agency_id` int(255) DEFAULT NULL,
  `free_seats` varchar(255) NOT NULL,
  `destination` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bus`
--

INSERT INTO `bus` (`bus_id`, `bus_plate`, `agency_id`, `free_seats`, `destination`) VALUES
(1, 'b345', 1, '30', 'kigali'),
(2, 'RAB123H', 1, '15', 'nyanza');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `agent_id` int(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `agency_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`agent_id`, `firstname`, `lastname`, `email`, `phone`, `address`, `password`, `role`, `agency_name`) VALUES
(1, 'gisa', 'patrick', 'gisa@gmail.com', '0768678764', 'kigali', '1234', 'agent', '1'),
(2, 'gatete', 'james', 'gatetejames02@gmail.com', '0789766191', 'musanze', '1234', 'admin', ''),
(6, 'gatete', 'jimmy', 'kwizera@gmail.com', '0782244777', 'kigali', '1234', 'agent', '3'),
(7, 'jolly', 'dusabe', 'fred@gmail.com', '0788675432', 'kigali', '1234', 'agent', '2'),
(8, 'ishimwe', 'neckson', 'neckso@gmail.com', '078654578', 'kigali', '1234', 'agent', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agency`
--
ALTER TABLE `agency`
  ADD PRIMARY KEY (`agency_id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `bus`
--
ALTER TABLE `bus`
  ADD PRIMARY KEY (`bus_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`agent_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agency`
--
ALTER TABLE `agency`
  MODIFY `agency_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `bus`
--
ALTER TABLE `bus`
  MODIFY `bus_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `agent_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
