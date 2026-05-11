-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2025 at 03:43 PM
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
-- Database: `szakdolgozat_nagyferenc_excelsior`
--

-- --------------------------------------------------------

--
-- Table structure for table `components`
--

CREATE TABLE `components` (
  `id` int(11) NOT NULL,
  `Bedrooms` varchar(100) DEFAULT NULL,
  `Toilet` varchar(100) DEFAULT NULL,
  `Bathroom` varchar(100) DEFAULT NULL,
  `Kitchen` varchar(100) DEFAULT NULL,
  `Air_Conditioner` varchar(100) DEFAULT NULL,
  `Balcony` varchar(100) DEFAULT NULL,
  `WIFI` varchar(100) DEFAULT NULL,
  `LED TV` varchar(100) DEFAULT NULL,
  `Minibar` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `components`
--

INSERT INTO `components` (`id`, `Bedrooms`, `Toilet`, `Bathroom`, `Kitchen`, `Air_Conditioner`, `Balcony`, `WIFI`, `LED TV`, `Minibar`) VALUES
(1, 'két ágyas, egy hálószobás', 'saját WC', 'saját fürdőszoba', NULL, NULL, NULL, 'WIFI', 'LED TV', 'Minibár'),
(2, 'két ágyas, egy hálószobás', 'saját WC', 'saját fürdőszoba', NULL, 'légkondícionáló', 'erkély', 'WIFI', 'LED TV', 'minibár'),
(3, 'négy ágyas, két hálószobás', 'saját WC', 'saját fürdőszoba', NULL, NULL, NULL, 'WIFI', 'LED TV', 'minibár'),
(4, 'négy ágyas, két hálószobás', 'saját WC', 'saját fürdőszoba', NULL, 'légkondícionáló', 'erkély', 'WIFI', 'LED TV', 'minibár'),
(5, '54 m2-es, négy ágyas két szobás', 'saját WC', 'saját fürdőszoba', 'saját konyha étkezővel', 'légkondícionálás', '15 m2-es fedett terasz biztosítj a kinti pihenést', 'WIFI', 'LED TV', 'minibár');

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` int(11) NOT NULL,
  `User_ID` int(11) DEFAULT NULL,
  `Room_ID` int(11) DEFAULT NULL,
  `TimeStamp` datetime NOT NULL DEFAULT current_timestamp(),
  `ArrivalDate` date DEFAULT NULL,
  `DepartureDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `User_ID`, `Room_ID`, `TimeStamp`, `ArrivalDate`, `DepartureDate`) VALUES
(9, 1, 4, '2021-03-16 17:41:08', '2021-03-18', '2021-03-25'),
(18, 2, 3, '2021-03-17 14:04:20', '2021-03-18', '2021-03-25'),
(19, 1, 2, '2021-03-22 19:22:54', '2021-05-01', '2021-05-08'),
(20, 1, 1, '2021-03-28 20:36:48', '2021-04-26', '2021-05-05'),
(21, 1, 2, '2021-04-20 20:05:00', '2021-06-21', '2021-06-27'),
(22, 10, 5, '2021-04-20 21:14:50', '2021-05-24', '2021-05-30'),
(23, 13, 3, '2021-04-21 19:39:44', '2021-06-28', '2021-07-04'),
(24, 1, 1, '2021-04-22 18:58:29', '2021-05-10', '2021-05-14'),
(25, 1, 3, '2021-04-22 19:23:44', '2021-05-24', '2021-05-28'),
(26, 15, 1, '2021-04-23 12:49:10', '2021-05-01', '2021-05-03');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(11) NOT NULL,
  `RoomName` varchar(20) DEFAULT NULL,
  `Component_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `RoomName`, `Component_ID`) VALUES
(1, '01_standard', 1),
(2, '02_standard+', 2),
(3, '03_superior', 3),
(4, '04_superior+', 4),
(5, '05_apartment', 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `UserName` varchar(40) DEFAULT NULL,
  `emailAdd` varchar(40) DEFAULT NULL,
  `TelNumber` varchar(20) DEFAULT NULL,
  `pass` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `UserName`, `emailAdd`, `TelNumber`, `pass`) VALUES
(1, 'FrankyBIG', 'franky.big@gmail.com', '2085348554', 'start123'),
(2, 'Ludas Mátyás', 'ludasmatyi@gmail.com', '2085348665', 'start321'),
(10, 'Teszt Elek', 'tesztelek@gmail.com', '06303335566', 'start123'),
(12, 'Teszt Elek', 'dsafa222@dsafsafk.com', '06302205204', '12345'),
(13, 'Gizda Géza', 'makosguba@dsfs.hu', '06705663388', 'start123'),
(14, 'Gizda Géza', 'makosguna@dsfs.hu', '2085348554', 'start'),
(15, 'Teszt User01', 'tesztuser1@freemail.hu', '06307654321', 'user01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `components`
--
ALTER TABLE `components`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `User_ID` (`User_ID`),
  ADD KEY `Room_ID` (`Room_ID`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Component_ID` (`Component_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `components`
--
ALTER TABLE `components`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reservations`
--
ALTER TABLE `reservations`
  ADD CONSTRAINT `reservations_ibfk_1` FOREIGN KEY (`User_ID`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reservations_ibfk_2` FOREIGN KEY (`Room_ID`) REFERENCES `rooms` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rooms`
--
ALTER TABLE `rooms`
  ADD CONSTRAINT `rooms_ibfk_1` FOREIGN KEY (`Component_ID`) REFERENCES `components` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
