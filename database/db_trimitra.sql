-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 27, 2022 at 07:19 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_trimitra`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_legal`
--

CREATE TABLE `data_legal` (
  `id_legal` int(11) NOT NULL,
  `kode_dokumen` varchar(100) NOT NULL,
  `no_sertifikat` varchar(100) NOT NULL,
  `no_ajb` varchar(100) NOT NULL,
  `luas_tanah` int(11) NOT NULL,
  `atas_nama` varchar(100) NOT NULL,
  `no_kuasa` varchar(100) NOT NULL,
  `titik_lokasi` int(11) NOT NULL,
  `file` varchar(255) NOT NULL,
  `status_dokumen` int(11) NOT NULL,
  `date_created` date NOT NULL,
  `is_active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_legal`
--

INSERT INTO `data_legal` (`id_legal`, `kode_dokumen`, `no_sertifikat`, `no_ajb`, `luas_tanah`, `atas_nama`, `no_kuasa`, `titik_lokasi`, `file`, `status_dokumen`, `date_created`, `is_active`) VALUES
(1, 'L001', '01', '01', 2000, 'Nanang Miftahudin', '01', 1, 'sertifikat.pdf', 1, '2022-06-27', 1);

-- --------------------------------------------------------

--
-- Table structure for table `status_dokumen`
--

CREATE TABLE `status_dokumen` (
  `id_status_dokumen` int(11) NOT NULL,
  `status` varchar(100) NOT NULL,
  `date_created` date NOT NULL,
  `is_active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status_dokumen`
--

INSERT INTO `status_dokumen` (`id_status_dokumen`, `status`, `date_created`, `is_active`) VALUES
(1, 'Dikaji Notaris', '2022-06-27', 1),
(2, 'Ada di Arsip', '2022-06-27', 1),
(3, 'Dipinjam', '2022-06-27', 1),
(4, 'Hilang', '2022-06-27', 1);

-- --------------------------------------------------------

--
-- Table structure for table `titik_lokasi`
--

CREATE TABLE `titik_lokasi` (
  `id_titik_lokasi` int(11) NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `date_created` date NOT NULL,
  `is_active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `titik_lokasi`
--

INSERT INTO `titik_lokasi` (`id_titik_lokasi`, `lokasi`, `date_created`, `is_active`) VALUES
(1, 'Farm Mariwati', '2022-06-27', 1),
(2, 'RPA Cikalong Kulon', '2022-06-27', 1),
(3, 'Farm Buniayu', '2022-06-27', 1),
(4, 'Expired Customer', '2022-06-27', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL,
  `date_created` date NOT NULL,
  `is_active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `email`, `username`, `password`, `role_id`, `date_created`, `is_active`) VALUES
(1, 'Nanang Miftahudin', 'nanang@gmail.com', 'admin', 'admin', 1, '2022-06-20', 1),
(2, 'Petugas Legal', 'petugaslegal@gmail.com', 'petugas01', 'petugas01', 2, '2022-06-21', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_legal`
--
ALTER TABLE `data_legal`
  ADD PRIMARY KEY (`id_legal`);

--
-- Indexes for table `status_dokumen`
--
ALTER TABLE `status_dokumen`
  ADD PRIMARY KEY (`id_status_dokumen`);

--
-- Indexes for table `titik_lokasi`
--
ALTER TABLE `titik_lokasi`
  ADD PRIMARY KEY (`id_titik_lokasi`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_legal`
--
ALTER TABLE `data_legal`
  MODIFY `id_legal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `status_dokumen`
--
ALTER TABLE `status_dokumen`
  MODIFY `id_status_dokumen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `titik_lokasi`
--
ALTER TABLE `titik_lokasi`
  MODIFY `id_titik_lokasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
