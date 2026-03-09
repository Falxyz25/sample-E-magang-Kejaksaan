-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2025 at 05:07 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `magang-db`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(500) NOT NULL,
  `role` varchar(50) NOT NULL,
  `photo` text DEFAULT NULL,
  `active` varchar(50) NOT NULL,
  `timecreated_akun` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id`, `nama_lengkap`, `username`, `password`, `role`, `photo`, `active`, `timecreated_akun`) VALUES
(28, 'Administrator', 'administrator', '898de72f4c3a74404ff2048cefdf80cd080dddb1c9712afaffac81efeac96efe607cc55d8c4df1c58d90f2e25f59275df22af24865b3612e710dc59aa9ce97636+rzptedlAE/yEZ7fmNpV+xB8Z+QbDr2yP5JYPm1yOQ=', 'Admin', NULL, 'aktif', '2020-12-13 11:41:29'),
(35, 'admin', 'admin12345', '97220da31e3341fceaf6c4c66aea3abfc42e51eb6b4b269bbbb5498b746ec6e08cb86647f03cfe02fd158584165c6dbb171268d150096e5dbf0fe9df104daa17GU7p+bVL6BkLm6XmxzJrlhy4EfoZYfls7FAP6nLO2P4=', 'Admin', NULL, 'aktif', '2023-02-23 00:07:28'),
(38, 'Kucuy Fajar', 'kucuy12345', '3d98c66458ea6e208119112507eb9114b20dd6dcfa893ec06fbc57ede21e285257f9fbe7fa4d250057165acc2820408762f9c0efd8d513cee7614f7378be2009HWTle3SZ7VvKkd+L/yWbIezycncpr22S3XoNKTj+Ppw=', 'Mahasiswa', 'Foto.png', 'aktif', '2025-03-11 21:40:56');

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan`
--

CREATE TABLE `pengajuan` (
  `id_pengajuan` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `nama_lengkap` text NOT NULL,
  `universitas` text NOT NULL,
  `nim` varchar(20) NOT NULL,
  `jurfak` tinytext NOT NULL,
  `semester` varchar(10) NOT NULL,
  `mulai_periode` date NOT NULL,
  `akhir_periode` date NOT NULL,
  `alamat` text NOT NULL,
  `foto_surat` text NOT NULL,
  `status` varchar(15) NOT NULL,
  `timecreated_pengajuan` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengajuan`
--

INSERT INTO `pengajuan` (`id_pengajuan`, `id`, `nama_lengkap`, `universitas`, `nim`, `jurfak`, `semester`, `mulai_periode`, `akhir_periode`, `alamat`, `foto_surat`, `status`, `timecreated_pengajuan`) VALUES
(7, 38, 'Kucuy Fajar', 'Universitas Wakanda', '34342323232', 'Teknik', '2', '2025-03-12', '2025-03-31', 'Wakanda Selatan', 'Suket-magang.png', 'disetujui', '2025-03-11 21:42:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`username`);

--
-- Indexes for table `pengajuan`
--
ALTER TABLE `pengajuan`
  ADD PRIMARY KEY (`id_pengajuan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `pengajuan`
--
ALTER TABLE `pengajuan`
  MODIFY `id_pengajuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
