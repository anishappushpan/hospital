-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2020 at 12:00 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `consultency`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `appoinment`
--

CREATE TABLE `appoinment` (
  `id` int(5) NOT NULL,
  `name` varchar(10) NOT NULL,
  `department` varchar(10) NOT NULL,
  `nationalid` varchar(10) NOT NULL,
  `username` varchar(10) NOT NULL,
  `clinicadress` varchar(20) NOT NULL,
  `clinictime` varchar(10) NOT NULL,
  `date` varchar(10) NOT NULL,
  `time` int(11) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appoinment`
--

INSERT INTO `appoinment` (`id`, `name`, `department`, `nationalid`, `username`, `clinicadress`, `clinictime`, `date`, `time`, `status`) VALUES
(1, 'anu', 'Nuerologis', '555', 'anisha', 'adoor', '2 pm', '12-02-2019', 10, 'Approved'),
(2, 'anisha p p', 'ENT', '1958', 'patient na', 'kollupara', '12pm', '2020-01-03', 12, 'Rejected'),
(3, 'gopika', 'ENT', '741', 'joncy', 'thodupuzha', '11', '', 10, 'Rejected'),
(4, 'anisha p p', 'ENT', '1958', 'patient na', 'kollupara', '12pm', '2020-01-14', 11, 'Approved'),
(6, 'jeeva', 'dental', '741', 'patient na', 'alappuzha', '11AM', '', 10, 'Approved'),
(7, 'jeeva', 'dental', '741', 'patient na', 'alappuzha', '11AM', '', 11, 'Rejected'),
(8, 'jeeva', 'dental', '741', 'patient na', 'alappuzha', '11AM', '', 11, 'Rejected'),
(9, 'jeeva', 'dental', '741', 'patient na', 'alappuzha', '11AM', '', 10, 'Approved'),
(10, 'jeeva', 'dental', '741', 'patient na', 'alappuzha', '11AM', '', 10, 'Approved'),
(11, 'jeeva', 'dental', '741', 'patient na', 'alappuzha', '11AM', '2020-01-03', 11, 'Rejected'),
(12, 'jeeva', 'dental', '741', 'patient na', 'alappuzha', '11AM', '2020-01-03', 11, 'Approved'),
(13, 'nimisha p ', 'ent', '7455', 'patient na', 'thodupuzha', '9AM', '', 10, 'Approved'),
(14, 'amitha', 'jhgasjc', 'sbnnbs', 'patient na', 'bjckjaca', '5456', '2020-01-18', 10, 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `doctorsign`
--

CREATE TABLE `doctorsign` (
  `id` int(5) NOT NULL,
  `name` varchar(10) NOT NULL,
  `department` varchar(10) NOT NULL,
  `email` varchar(10) NOT NULL,
  `nationalid` varchar(10) NOT NULL,
  `qualification` varchar(10) NOT NULL,
  `certificateno` varchar(5) NOT NULL,
  `clinicadress` varchar(10) NOT NULL,
  `clinictime` varchar(5) NOT NULL,
  `password` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctorsign`
--

INSERT INTO `doctorsign` (`id`, `name`, `department`, `email`, `nationalid`, `qualification`, `certificateno`, `clinicadress`, `clinictime`, `password`, `status`) VALUES
(1, 'jeeva', 'dental', 'jeeva@gmai', '741', 'MBBS', '789', 'alappuzha', '11AM', '147', 'pending'),
(2, 'anisha', 'ent', 'a@gmail.co', 'india234', 'mbbs', '77', 'kunnumel', '4pm', '000', 'pending'),
(18, 'nimisha p ', 'ent', 'nisha123@g', '7455', 'MBBS', '3455', 'thodupuzha', '9AM', 'nimisha@12', 'pending'),
(19, 'amitha', 'jhgasjc', 'nbscb@hhjd', 'sbnnbs', 's', 'cb', 'bjckjaca', '5456', 'bvzxcvajhc', 'pending'),
(20, 'meenakshi', 'dental', 'a@gmail.co', '44425', 'MBBS', '754', 'kannure', '2pm', '1203233215', 'pending'),
(22, 'meenakshi', 'dental', 'a@gmail.co', '44425', 'MBBS', '754', 'kannure', '2pm', '1203233215', 'pending'),
(23, 'meenakshi', 'dental', 'a@gmail.co', '44425', 'MBBS', '754', 'kannure', '2pm', '1203233215', 'pending'),
(24, 'manoj', 'skin', 'a@gmail.co', '43455', 'MBBS', '78952', 'thuravoor', '10', 'jbhkjsjndc', 'pending'),
(25, 'manoj', 'skin', 'a@gmail.co', '43455', 'MBBS', '78952', 'thuravoor', '10', 'jbhkjsjndc', 'pending'),
(26, 'nimisha', 'skin', 'a@gmail.co', '22', 'mbbs', '84', 'kmkakacmak', '10', '784455411', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `patientsign`
--

CREATE TABLE `patientsign` (
  `id` int(5) NOT NULL,
  `name` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(10) NOT NULL,
  `nationalid` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patientsign`
--

INSERT INTO `patientsign` (`id`, `name`, `gender`, `email`, `nationalid`, `password`) VALUES
(1, 'anisha', '', 'anisha@gam', '', 'anisha123'),
(2, 'ann', 'female', 'ann@gmail.', '1258', 'ann123'),
(12, '', '', '', '', '123456789');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appoinment`
--
ALTER TABLE `appoinment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctorsign`
--
ALTER TABLE `doctorsign`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patientsign`
--
ALTER TABLE `patientsign`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appoinment`
--
ALTER TABLE `appoinment`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `doctorsign`
--
ALTER TABLE `doctorsign`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `patientsign`
--
ALTER TABLE `patientsign`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
