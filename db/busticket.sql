-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2024 at 12:47 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `busticket`
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agency`
--

INSERT INTO `agency` (`agency_id`, `agency_name`, `email`, `phone`, `location`) VALUES
(1, 'Horizon', 'horizon@gmail.com', '07545535345', 'gitega'),
(2, 'Volcano', 'volcano@gmail.com', '07545535345', 'Remera'),
(4, 'Ritco', 'ritco@gmail.com', '0783334959', 'nyarugenge');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `fullname`, `phone`, `idnumber`, `email`, `agency_id`, `amount`, `location`, `destination`, `booking_date`, `bus_station`, `Date_Now`, `status`) VALUES
(5, 'sonia', '0783424232', '352352525235', 'elie@gmail.com', 1, '12', 'kigali', 'rusizi', '2202-02-20', 'kigali', '2023-03-15 10:50:43.699463', 'approved'),
(7, 'Dinee', '07545535345', '23213123131332', 'dinee@gmail.com', 2, '12', 'kamonyi', 'nyaruguru', '2023-03-15', 'kamonyi', '2023-03-15 15:32:27.815043', 'not approved'),
(8, 'ishmwe lydia', '0782244777', '1299345963956932', 'isengweo@gmail.com', 2, '1', 'kamonyi', 'kigali22', '2023-03-15', 'kigali', '2023-03-15 15:32:49.105427', 'not approved');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bus`
--

INSERT INTO `bus` (`bus_id`, `bus_plate`, `agency_id`, `free_seats`, `destination`) VALUES
(3, 'b345', 2, '34', 'kigali'),
(5, 'RAB123H', 1, '15', 'nyanza');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`agent_id`, `firstname`, `lastname`, `email`, `phone`, `address`, `password`, `role`, `agency_name`) VALUES
(1, 'Sonia', 'Munyana', 'sonia@gmail.com', '0768678764', 'kigali', '1212', 'agent', '1'),
(2, 'Olga', 'Isengwe', 'olga@gmail.com', '076876876', 'musanze', '3434', 'admin', ''),
(6, 'gatete', 'jimmy', 'gatete@gmail.com', '0782244777', 'kigali', '123', 'agent', '4'),
(7, 'jolly', 'dusabe', 'dusabe@gmail.com', '0788675432', 'kigali', '1234', 'agent', '2');

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
  MODIFY `booking_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `bus`
--
ALTER TABLE `bus`
  MODIFY `bus_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `agent_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
