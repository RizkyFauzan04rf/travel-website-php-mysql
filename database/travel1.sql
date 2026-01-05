-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2025 at 08:46 AM
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
-- Database: `travel1`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tour` varchar(50) NOT NULL,
  `tujuan` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `jumlah` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`nama`, `email`, `tour`, `tujuan`, `tanggal`, `jumlah`) VALUES
('tiwi', 'animeaja879@gmail.com', '', 'Paris', '2025-11-27', 2),
('Rizky fauzan', 'rizkyfauzan0409@gmail.com', '', 'Paris', '2025-11-28', 2),
('tiwi', 'animeaja879@gmail.com', 'city-tour', 'bandung', '2025-12-31', 2),
('alpa', 'animeaja879@gmail.com', 'religi', 'mekah-madinah', '2025-11-29', 2),
('dila', 'dila@gmail.com', 'religi', 'mekah-madinah', '2025-11-30', 2);

-- --------------------------------------------------------

--
-- Table structure for table `destination1`
--

CREATE TABLE `destination1` (
  `nik` int(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tujuan` varchar(50) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `destination1`
--

INSERT INTO `destination1` (`nik`, `nama`, `tujuan`, `tanggal`) VALUES
(12345, 'ihsan', 'Sumbar', '2025-12-31');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `komentar_id` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pesan` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`komentar_id`, `nama`, `email`, `pesan`, `date`) VALUES
(2, 'Budi', 'budi@gmail.com', 'Secara desain sudah bisa, tetapi sebaiknya dilakukan update secara berkala pada website agar lebih informatif ', '2023-12-18 03:05:51'),
(3, 'Delta', 'delta@yahoo.com', 'Tes saja ', '2023-12-18 03:06:29'),
(0, 'adi', 'animeaja879@gmail.com', ' bungul', '2025-11-22 02:57:58');

-- --------------------------------------------------------

--
-- Table structure for table `penerbangan`
--

CREATE TABLE `penerbangan` (
  `id` int(10) NOT NULL,
  `hari` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` varchar(20) NOT NULL,
  `pesawat` varchar(50) NOT NULL,
  `tujuan` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `penerbangan`
--

INSERT INTO `penerbangan` (`id`, `hari`, `tanggal`, `jam`, `pesawat`, `tujuan`) VALUES
(1231223, 'Senin', '2025-11-06', '09:00 wib', 'Garuda Indonesia', 'Jakarta - Medan'),
(1231224, 'Selasa', '2025-11-07', '10:30 wib', 'Lion Air', 'Surabaya - Bali'),
(1231225, 'Rabu', '2025-11-08', '12:00 wib', 'Sriwijaya Air', 'Palembang - Jakarta'),
(1231226, 'Kamis', '2025-11-09', '14:00 wib', 'Citilink', 'Yogyakarta - Surabaya'),
(1231227, 'Jumat', '2025-11-10', '16:00 wib', 'Batik Air', 'Semarang - Jakarta'),
(1231228, 'Sabtu', '2025-11-11', '18:00 wib', 'Wings Air', 'Makassar - Manado'),
(1231229, 'Minggu', '2025-11-12', '20:00 wib', 'NAM Air', 'Pontianak - Jakarta'),
(1231230, 'Senin', '2025-11-13', '08:00 wib', 'Garuda Indonesia', 'Medan - Jakarta'),
(1231231, 'Selasa', '2025-11-14', '11:00 wib', 'Lion Air', 'Bali - Surabaya'),
(1231232, 'Rabu', '2025-11-15', '13:00 wib', 'Sriwijaya Air', 'Jakarta - Palembang'),
(1231233, 'Kamis', '2025-11-16', '15:00 wib', 'Citilink', 'Surabaya - Yogyakarta'),
(1231234, 'Jumat', '2025-11-17', '17:00 wib', 'Batik Air', 'Jakarta - Semarang'),
(1231235, 'Sabtu', '2025-11-18', '19:00 wib', 'Wings Air', 'Manado - Makassar'),
(1231236, 'Minggu', '2025-11-19', '21:00 wib', 'NAM Air', 'Jakarta - Pontianak'),
(1231237, 'Senin', '2025-11-20', '07:00 wib', 'Garuda Indonesia', 'Jakarta - Bandung'),
(1231238, 'Selasa', '2025-11-21', '09:00 wib', 'Lion Air', 'Surabaya - Malang'),
(1231239, 'Rabu', '2025-11-22', '11:00 wib', 'Sriwijaya Air', 'Palembang - Lampung'),
(1231240, 'Kamis', '2025-11-23', '13:00 wib', 'Citilink', 'Yogyakarta - Solo'),
(1231241, 'Jumat', '2025-11-24', '15:00 wib', 'Batik Air', 'Semarang - Jakarta'),
(1231242, 'Sabtu', '2025-11-25', '17:00 wib', 'Wings Air', 'Makassar - Kendari'),
(1231243, 'Senin', '2025-11-06', '09:00 wib', 'Garuda Indonesia', 'Medan-Jakarta'),
(1231244, 'Jumat', '2025-12-25', '09:00 wib', 'Lion Air', 'Batam-Pontianak');

-- --------------------------------------------------------

--
-- Table structure for table `penginapan1`
--

CREATE TABLE `penginapan1` (
  `id` int(50) NOT NULL,
  `nama_penginapan` varchar(50) NOT NULL,
  `nik` int(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jumlah` int(50) NOT NULL,
  `tanggal` date NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `penginapan1`
--

INSERT INTO `penginapan1` (`id`, `nama_penginapan`, `nik`, `nama`, `jumlah`, `tanggal`, `alamat`) VALUES
(1, 'HotelHasira', 12345, 'Rizky fauzan', 3, '2025-12-31', 'sungai ular');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(254) NOT NULL,
  `email` varchar(50) NOT NULL,
  `token` char(128) DEFAULT NULL,
  `status` char(1) DEFAULT NULL,
  `foto` varchar(50) NOT NULL,
  `last_login` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `email`, `token`, `status`, `foto`, `last_login`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'roberto.kakaban@yahoo.com', 'c0e024d9200b5705bc4804722636378a', '1', '', '2025-11-26 19:26:42'),
(3, 'fauzan', 'eacaf53cb2b533a68baa765faedf7e59', 'rizkyfauzan0409@gmail.com', '8c8e3eaf444c389b93a33cc636cf2181', '1', '2025-12-12-17-15-22.jpg', '2025-12-16 09:40:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `destination1`
--
ALTER TABLE `destination1`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `penerbangan`
--
ALTER TABLE `penerbangan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penginapan1`
--
ALTER TABLE `penginapan1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `penerbangan`
--
ALTER TABLE `penerbangan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1231245;

--
-- AUTO_INCREMENT for table `penginapan1`
--
ALTER TABLE `penginapan1`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
