-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2024 at 01:39 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pekerjaan_pendapatan`
--

-- --------------------------------------------------------

--
-- Table structure for table `kode_pekerjaan`
--

CREATE TABLE `kode_pekerjaan` (
  `id_nama_pekerjaan` char(3) NOT NULL,
  `nama_pekerjaan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kode_pekerjaan`
--

INSERT INTO `kode_pekerjaan` (`id_nama_pekerjaan`, `nama_pekerjaan`) VALUES
('010', 'Karyawan Swasta'),
('020', 'pegawai negri'),
('030', 'Wirausaha');

-- --------------------------------------------------------

--
-- Table structure for table `nama_kota`
--

CREATE TABLE `nama_kota` (
  `id_kota` int(11) NOT NULL,
  `nama_kota` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nama_kota`
--

INSERT INTO `nama_kota` (`id_kota`, `nama_kota`) VALUES
(2, 'surabaya'),
(3, 'sidoarjo'),
(4, 'Tulungagung'),
(5, 'Malang'),
(9, 'Kediri'),
(10, 'Blitar'),
(11, 'Banyuwangi');

-- --------------------------------------------------------

--
-- Table structure for table `total_banyak`
--

CREATE TABLE `total_banyak` (
  `id` int(11) NOT NULL,
  `id_kota` varchar(200) NOT NULL,
  `id_pekerjaan` char(3) NOT NULL,
  `umr` decimal(30,0) NOT NULL,
  `total_banyak` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `total_banyak`
--

INSERT INTO `total_banyak` (`id`, `id_kota`, `id_pekerjaan`, `umr`, `total_banyak`) VALUES
(12, '1', '020', '60000000', 232),
(13, '1', '020', '60000000', 232),
(14, '2', '020', '2000000', 100),
(16, '4', '010', '3000000', 40),
(17, '11', '030', '200000', 50),
(18, '9', '020', '3500000', 40),
(19, '3', '010', '5000000', 20);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kode_pekerjaan`
--
ALTER TABLE `kode_pekerjaan`
  ADD PRIMARY KEY (`id_nama_pekerjaan`);

--
-- Indexes for table `nama_kota`
--
ALTER TABLE `nama_kota`
  ADD PRIMARY KEY (`id_kota`);

--
-- Indexes for table `total_banyak`
--
ALTER TABLE `total_banyak`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nama_kota`
--
ALTER TABLE `nama_kota`
  MODIFY `id_kota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `total_banyak`
--
ALTER TABLE `total_banyak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
