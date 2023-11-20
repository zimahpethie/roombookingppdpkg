-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2019 at 12:23 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `roombookingppdpkg`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminID` int(6) NOT NULL,
  `username` varchar(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `phonenum` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminID`, `username`, `fullname`, `position`, `phonenum`, `email`, `password`) VALUES
(1, 'mas', 'Maisarah Wahab', 'Staf PKG', '01234562311', 'maisarahw@gmail.com', '202cb962ac59075b964b07152d234b70'),
(2, 'MIZAH', 'HAMIZAH AQILAH BINTI HASSAN', 'Staf PPD', '0145831076', 'toxicanttongue@gmail.com', 'd331d031076b2de615e67fef4ba959ba');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `bookingID` int(6) NOT NULL,
  `username` varchar(100) NOT NULL,
  `room` varchar(100) NOT NULL,
  `startdate` date NOT NULL,
  `enddate` date NOT NULL,
  `starttime` varchar(6) NOT NULL,
  `endtime` varchar(6) NOT NULL,
  `title` varchar(250) NOT NULL,
  `noofparticipant` int(100) NOT NULL,
  `committee` varchar(250) NOT NULL,
  `chairperson` varchar(250) NOT NULL,
  `secretary` varchar(250) NOT NULL,
  `note` varchar(300) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`bookingID`, `username`, `room`, `startdate`, `enddate`, `starttime`, `endtime`, `title`, `noofparticipant`, `committee`, `chairperson`, `secretary`, `note`, `status`) VALUES
(2, 'Noranizah', 'Bilik Seminar, PKG', '2019-04-23', '2019-04-23', '1000', '1200', 'Hari PPD', 15, 'UPPK', 'KETUA UPP', 'Puan Elizabeth', '', 'Diluluskan'),
(3, 'Mizi', 'Bilik Mesyuarat, PKG', '2019-04-23', '2019-04-23', '1000', '1200', 'Bengkel Matematik', 13, 'UNIT AKADEMIK', '', '', 'Tiada', 'Diluluskan'),
(4, 'fara', 'Dewan Sri Tapou, PPD', '2019-04-25', '2019-04-25', '0900', '1100', 'Hari PPD', 45, 'UPO', 'PPD', 'KU UPO', 'Tiada', 'Tidak berjaya'),
(5, 'zaidin', 'Bilik Mesyuarat, PKG', '2019-04-29', '2019-04-29', '0800', '1200', 'Taklimat Matematik', 12, 'Unit Matematik', '-', '-', 'Tiada', 'Diluluskan'),
(8, 'HAMIZAH', 'Dewan Sri Tapou, PPD', '2019-05-04', '2019-05-04', '1030', '1230', 'Mesyuarat Berkenaan Dengan Hari Guru 2019 ', 0, 'UPO', 'PPD', 'KU UPO', 'Tiada.', 'Diluluskan'),
(9, 'zimah', 'Bilik Seminar, PKG', '2019-04-23', '2019-04-23', '0800', '0900', 'Taklimat EKSA Bil.1 2019', 10, 'UPS', 'PUAN AISAH', 'PUAN JAMALIA', 'Tiada', 'Diluluskan'),
(11, 'zimah', 'Dewan Sri Tapou, PPD', '2019-05-06', '2019-05-06', '0800', '1200', 'Bengkel SPM', 56, 'Unit Peperiksaan', 'Ketua Unit Peperiksaan', 'Encik Malek', 'Tiada', 'Diluluskan'),
(12, 'zimah', 'Dewan Sri Tapou, PPD', '2019-05-13', '2019-05-13', '0800', '1000', 'Taklimat Hari Guru 2019', 54, '', '', '', '', 'Dalam proses'),
(14, 'zimah', 'Bilik Mesyuarat, PKG', '2019-05-13', '2019-05-13', '1400', '1700', 'Bengkel SPM', 24, 'Unit Peperiksaan', 'Ketua Unit Peperiksaan', 'Encik Malek', 'Tiada', 'Dalam proses'),
(15, 'zimah', 'Bilik Seminar, PKG', '2019-05-16', '2019-05-16', '0800', '1000', 'Bengkel STPM', 24, 'Unit Akademik', 'KU Akademik', 'Puan Zaleha', 'Tiada', 'Dalam proses'),
(16, 'zimah', 'Dewan Sri Tapou, PPD', '2019-05-16', '2019-05-16', '0800', '1000', 'Taklimat Hari Guru 2019', 4, 'Unit Peperiksaan', '', 'Puan Zaleha', '', 'Dalam proses'),
(17, 'zimah', 'Bilik Mesyuarat, PKG', '2019-05-16', '2019-05-16', '1400', '1700', 'Bengkel SPM', 20, 'Unit Akademik', 'KU Akademik', 'Puan Zaleha', 'Tiada', 'Dalam proses');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userID` int(6) NOT NULL,
  `username` varchar(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `phonenum` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `username`, `fullname`, `position`, `phonenum`, `email`, `password`) VALUES
(1, 'zimah', 'Zimah Pethie', 'Staf PPD', '0196758857', 'hazimahpte@gmail.com', '202cb962ac59075b964b07152d234b70'),
(2, 'Zulaiha', 'Zulaiha', 'Staf PPD', '0196758854', 'mszue@yahoo.com', '698d51a19d8a121ce581499d7b701668'),
(3, 'Noranizah', 'Abdullah', 'Staf PPD', '0148760638', 'aanizah10@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(4, 'Mizi', 'Hamizi Bin Rassa', 'Guru Sekolah', '019786751313', 'mzzi@gmail.com', '202cb962ac59075b964b07152d234b70'),
(5, 'zaidin', 'mohammad zaidin bin karim', 'Guru Sekolah', '084877777', 'dine@gmail.com', '202cb962ac59075b964b07152d234b70'),
(6, 'nurulzarina', 'nurul zarina binti rais', 'Guru Sekolah', '0176765432', 'nzrsaa@gmail.com', '202cb962ac59075b964b07152d234b70'),
(7, 'Ahmadazra', 'Ahmadazra bin Sa\'adi', 'Staf PPD', '0198519917', 'haszra@yahoo.com', 'e17a886efc21fa45b9dc49a17c29dcf1'),
(8, 'firdaus', 'Firdaus Bin Radzi', 'Staf PKG', '0134567895', 'fir.daus14133@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(9, 'HAMIZAH', 'HAMIZAH AQILAH BINTI HASSAN', 'Staff PPD', '0145831076', 'toxicanttongue@gmail.com', 'd331d031076b2de615e67fef4ba959ba');

-- --------------------------------------------------------

--
-- Table structure for table `userfeedback`
--

CREATE TABLE `userfeedback` (
  `feedbackID` int(6) NOT NULL,
  `username` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `room` varchar(100) NOT NULL,
  `comment` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `userfeedback`
--

INSERT INTO `userfeedback` (`feedbackID`, `username`, `date`, `room`, `comment`) VALUES
(1, 'Zimah', '2019-04-23', 'sritapou', 'Sangat Baik'),
(2, 'Mizi', '2019-04-22', 'bBilik Seminar,PKG', 'Sangat selesa.'),
(3, 'fara', '2019-04-24', 'Bilik Mesyuarat,PKG', 'Baik'),
(4, 'zaidin', '2019-04-25', 'Bilik Mesyuarat,PKG', 'baik'),
(5, 'zimah', '2019-04-24', 'Dewan Sri Tapou,PPD', 'baik'),
(6, 'zimah', '2019-04-24', 'Bilik Mesyuarat,PKG', 'Baik'),
(7, 'zimah', '2019-04-29', 'Bilik Mesyuarat,PKG', 'Baik');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminID`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`bookingID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `userfeedback`
--
ALTER TABLE `userfeedback`
  ADD PRIMARY KEY (`feedbackID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `bookingID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `userfeedback`
--
ALTER TABLE `userfeedback`
  MODIFY `feedbackID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
