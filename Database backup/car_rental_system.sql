-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2020 at 09:38 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car_rental_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `driver_details`
--

CREATE TABLE `driver_details` (
  `driverID` int(6) NOT NULL,
  `firstName` varchar(20) NOT NULL,
  `lastName` varchar(30) NOT NULL,
  `gender` char(1) NOT NULL,
  `phoneNo` int(10) NOT NULL,
  `email` varchar(40) NOT NULL,
  `address` varchar(50) DEFAULT NULL,
  `licenceNo` int(5) NOT NULL,
  `password` varchar(12) NOT NULL,
  `DOB` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `driver_details`
--

INSERT INTO `driver_details` (`driverID`, `firstName`, `lastName`, `gender`, `phoneNo`, `email`, `address`, `licenceNo`, `password`, `DOB`) VALUES
(800014, 'Jason', 'Holder', 'M', 754265784, 'jas@gmail.com', '78, De levera Road, Kandy  ', 45645, 'jas123', '1995-03-08'),
(800018, 'Sanath', 'Koda', 'M', 784556951, 'udu@yahoo.com', '34, Udumulla Road, Kandy', 48563, 'Udula123', '1985-04-24'),
(800019, 'Nelum', 'Fernando', 'F', 714585962, 'nelu65@gmail.com', '45, Nelum Mawatha, NuwaraEliya\r\n          ', 78924, 'Nelum123', '1981-05-12'),
(800020, 'Freddy', 'Ananda', 'M', 784565234, 'fred@yahoo.com', '45, Freasy Road, Colombo', 45862, 'Freddy@123', '1976-10-02'),
(800021, 'Lester', 'Sujeewa', 'M', 754567890, 'lester@gmail.com', '34, Lernt, Road, Colombo          ', 45987, 'Lester@123', '1980-04-03'),
(800022, 'Dwayne', 'Silva', 'M', 774567890, 'dwayne@gmail.com', '78, Thiserra Road, Colombo', 42635, 'Dway123', '1982-07-30'),
(800023, 'Janaka', 'Bandara', 'M', 714589625, 'jana@yahoo.com', '45, Senarath Place, Dambulla\r\n          ', 42681, 'Jana@123', '1987-02-27'),
(800024, 'Udula', 'Warnapura', 'F', 715669842, 'udu3@gmail.com', '56, Bangolla, Gampaha        ', 45652, 'Udu@123', '1979-01-28'),
(800025, 'Fabian', 'Allen', 'F', 785441526, 'fab@yahoo.com', '89, Fabian Avenue, Colombo\r\n          ', 45999, 'Fab@123', '1985-02-02');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `orderNum` int(11) NOT NULL,
  `requiredDate` date NOT NULL,
  `requiredTime` time NOT NULL,
  `pickupLocation` varchar(20) NOT NULL,
  `dropLocation` varchar(20) NOT NULL,
  `paymentMethod` varchar(10) NOT NULL,
  `accountNumber` int(8) NOT NULL,
  `vehicleNo` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`orderNum`, `requiredDate`, `requiredTime`, `pickupLocation`, `dropLocation`, `paymentMethod`, `accountNumber`, `vehicleNo`) VALUES
(1, '2020-05-15', '09:00:00', 'Kandy', 'Colombo', 'Credit', 12345678, 'CAL-1234'),
(2, '2020-07-15', '11:00:00', 'Kandy', 'Panadura', 'Debit', 92345678, 'CALD1234'),
(3, '2020-07-07', '07:00:00', 'Mathale', 'Kandy', 'Debit', 92349678, 'KA-1534'),
(4, '2020-07-09', '06:00:00', 'Mathale', 'Colombo', 'Debit', 95349678, 'GA-1734'),
(5, '2020-11-02', '14:00:00', 'Kandy', 'Anuradhapura', 'Debit', 12348678, 'CAL-1238'),
(6, '2020-11-02', '14:00:00', 'Mathale', 'Anuradhapura', 'Debit', 12348878, 'CAL-1838'),
(7, '2020-11-29', '14:00:00', 'Mathale', 'Mannar', 'Credit', 12348879, 'CAD-1838');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `driver_details`
--
ALTER TABLE `driver_details`
  ADD PRIMARY KEY (`driverID`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`orderNum`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `driver_details`
--
ALTER TABLE `driver_details`
  MODIFY `driverID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=800026;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `orderNum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
