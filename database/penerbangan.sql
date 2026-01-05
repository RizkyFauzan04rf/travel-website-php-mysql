-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2025 at 05:09 PM
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
-- Database: `akademik1`
--

-- --------------------------------------------------------

--
-- Table structure for table `penerbangan`
--

CREATE TABLE `penerbangan` (
  `kd` int(10) NOT NULL,
  `hari` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` varchar(20) NOT NULL,
  `pesawat` varchar(50) NOT NULL,
  `tujuan` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `penerbangan`
--

INSERT INTO `penerbangan` (`kd`, `hari`, `tanggal`, `jam`, `pesawat`, `tujuan`) VALUES
(1001, 'Senin', '2025-11-06', '09:00 wib', 'Garuda Indonesia', 'Jakarta - Medan'),
(1002, 'Selasa', '2025-11-07', '10:30 wib', 'Lion Air', 'Surabaya - Bali'),
(1003, 'Rabu', '2025-11-08', '12:00 wib', 'Sriwijaya Air', 'Palembang - Jakarta'),
(1004, 'Kamis', '2025-11-09', '14:00 wib', 'Citilink', 'Yogyakarta - Surabaya'),
(1005, 'Jumat', '2025-11-10', '16:00 wib', 'Batik Air', 'Semarang - Jakarta'),
(1006, 'Sabtu', '2025-11-11', '18:00 wib', 'Wings Air', 'Makassar - Manado'),
(1007, 'Minggu', '2025-11-12', '20:00 wib', 'NAM Air', 'Pontianak - Jakarta'),
(1008, 'Senin', '2025-11-13', '08:00 wib', 'Garuda Indonesia', 'Medan - Jakarta'),
(1009, 'Selasa', '2025-11-14', '11:00 wib', 'Lion Air', 'Bali - Surabaya'),
(1010, 'Rabu', '2025-11-15', '13:00 wib', 'Sriwijaya Air', 'Jakarta - Palembang'),
(1011, 'Kamis', '2025-11-16', '15:00 wib', 'Citilink', 'Surabaya - Yogyakarta'),
(1012, 'Jumat', '2025-11-17', '17:00 wib', 'Batik Air', 'Jakarta - Semarang'),
(1013, 'Sabtu', '2025-11-18', '19:00 wib', 'Wings Air', 'Manado - Makassar'),
(1014, 'Minggu', '2025-11-19', '21:00 wib', 'NAM Air', 'Jakarta - Pontianak'),
(1015, 'Senin', '2025-11-20', '07:00 wib', 'Garuda Indonesia', 'Jakarta - Bandung'),
(1016, 'Selasa', '2025-11-21', '09:00 wib', 'Lion Air', 'Surabaya - Malang'),
(1017, 'Rabu', '2025-11-22', '11:00 wib', 'Sriwijaya Air', 'Palembang - Lampung'),
(1018, 'Kamis', '2025-11-23', '13:00 wib', 'Citilink', 'Yogyakarta - Solo'),
(1019, 'Jumat', '2025-11-24', '15:00 wib', 'Batik Air', 'Semarang - Jakarta'),
(1020, 'Sabtu', '2025-11-25', '17:00 wib', 'Wings Air', 'Makassar - Kendari'),
(1231243, 'Senin', '2025-11-06', '09:00 wib', 'buing0009r', 'medan-jakarta');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `penerbangan`
--
ALTER TABLE `penerbangan`
  ADD PRIMARY KEY (`kd`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `penerbangan`
--
ALTER TABLE `penerbangan`
  MODIFY `kd` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1231244;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
