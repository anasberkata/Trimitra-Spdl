-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 26, 2022 at 11:01 AM
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
  `perusahaan` varchar(255) NOT NULL,
  `land_title` varchar(255) NOT NULL,
  `land_area` int(11) NOT NULL,
  `land_address` varchar(255) NOT NULL,
  `land_type` varchar(255) NOT NULL,
  `land_owner` varchar(255) NOT NULL,
  `no_ajb` varchar(255) NOT NULL,
  `remark` varchar(255) NOT NULL,
  `data_created` date NOT NULL,
  `is_active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_legal`
--

INSERT INTO `data_legal` (`id_legal`, `perusahaan`, `land_title`, `land_area`, `land_address`, `land_type`, `land_owner`, `no_ajb`, `remark`, `data_created`, `is_active`) VALUES
(1, 'PT. QL Trimitra', '10.13.31.03.3.00001', 2338, 'Desa Kertamukti, Kecamatan Haurwangi, Cianjur', 'Poultry Farm', 'PT. QL Trimitra', '', '', '2022-06-21', 1);

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
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
