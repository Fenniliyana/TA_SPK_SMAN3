-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2023 at 05:38 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk`
--

-- --------------------------------------------------------

--
-- Table structure for table `bulanan`
--

CREATE TABLE `bulanan` (
  `id` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `data_dukung` text NOT NULL,
  `tgl_akhir` date NOT NULL,
  `tgl_disusun` date NOT NULL,
  `user` varchar(255) NOT NULL,
  `pic` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `bulanan`
--

INSERT INTO `bulanan` (`id`, `deskripsi`, `data_dukung`, `tgl_akhir`, `tgl_disusun`, `user`, `pic`, `status`, `created_at`, `updated_at`) VALUES
(1, 'lpj', 'satker kejaksaan', '2023-06-05', '2023-06-30', '1', 'Agung', 3, '2023-06-04 18:16:55', '2023-06-04 18:16:55'),
(2, 'lpj', 'satker kejaksaan', '2023-06-05', '2023-06-30', '1', 'Agung', 3, '2023-06-04 18:16:55', '2023-06-04 18:16:55');

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE `semester` (
  `id` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `data_dukung` text NOT NULL,
  `tgl_akhir` date NOT NULL,
  `tgl_disusun` date NOT NULL,
  `user` varchar(255) NOT NULL,
  `pic` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tahunan`
--

CREATE TABLE `tahunan` (
  `id` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `data_dukung` text NOT NULL,
  `tgl_akhir` date NOT NULL,
  `tgl_disusun` date NOT NULL,
  `user` varchar(255) NOT NULL,
  `pic` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `triwulan`
--

CREATE TABLE `triwulan` (
  `id` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `data_dukung` text NOT NULL,
  `tgl_akhir` date NOT NULL,
  `tgl_disusun` date NOT NULL,
  `user` varchar(255) NOT NULL,
  `pic` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nip` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` int(5) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `nip`, `jabatan`, `username`, `password`, `level`, `created_at`, `updated_at`) VALUES
(1, 'Agung', '19960812 202312 1 002', 'Satpam - IT', 'agung', '$2y$10$taVRilBOT1zk7UUQpEvay.QIWtclSif8fHq/hsGb1pz2vGt1a58be', 1, '2023-05-28 20:50:03', '2023-05-28 20:50:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bulanan`
--
ALTER TABLE `bulanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tahunan`
--
ALTER TABLE `tahunan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `triwulan`
--
ALTER TABLE `triwulan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bulanan`
--
ALTER TABLE `bulanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `semester`
--
ALTER TABLE `semester`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tahunan`
--
ALTER TABLE `tahunan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `triwulan`
--
ALTER TABLE `triwulan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
