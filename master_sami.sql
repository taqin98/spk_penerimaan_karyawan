-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 30, 2021 at 03:15 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `master_sami`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_bobot`
--

CREATE TABLE `tb_bobot` (
  `bobot_id` int(11) NOT NULL,
  `b_psikotest` float NOT NULL,
  `b_kesehatan` float NOT NULL,
  `b_wawancara` float NOT NULL,
  `b_standart` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_bobot`
--

INSERT INTO `tb_bobot` (`bobot_id`, `b_psikotest`, `b_kesehatan`, `b_wawancara`, `b_standart`) VALUES
(1, 0.45, 0.3, 0.25, 5.25);

-- --------------------------------------------------------

--
-- Table structure for table `tb_hasil`
--

CREATE TABLE `tb_hasil` (
  `ktp_id` varchar(200) NOT NULL,
  `psikotest` float NOT NULL,
  `kesehatan` float NOT NULL,
  `wawancara` float NOT NULL,
  `hasil` float NOT NULL,
  `ket` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_hasil`
--

INSERT INTO `tb_hasil` (`ktp_id`, `psikotest`, `kesehatan`, `wawancara`, `hasil`, `ket`, `created_at`, `updated_at`) VALUES
('1945', 9, 9, 9, 9, 'LULUS', '2021-02-25 05:35:50', '2021-02-25 04:25:31'),
('2021', 9, 9, 9, 9, 'LULUS', '2021-02-25 06:32:38', '2021-02-25 02:42:13'),
('2023', 9, 8, 8, 8.45, 'LULUS', '2021-02-25 06:20:10', '2021-02-25 05:11:55');

-- --------------------------------------------------------

--
-- Table structure for table `tb_profile`
--

CREATE TABLE `tb_profile` (
  `ktp_id` varchar(200) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `hp` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_profile`
--

INSERT INTO `tb_profile` (`ktp_id`, `nama`, `alamat`, `hp`, `created_at`, `updated_at`) VALUES
('1945', 'Nurul Muttaqin', 'Mayong', '99999', '2021-02-24 06:19:35', '2021-02-25 05:37:39'),
('2021', 'Trionooooo', 'Suwawal', '234324', '2021-02-24 06:19:35', '2021-02-25 05:34:29'),
('2022', 'Bala Kuncoro Sadewo', 'Kalinyamatan', '34534534', '2021-02-24 06:19:35', '2021-02-25 06:19:25'),
('2023', 'Joni', 'Kuwasen', '345345', '2021-02-24 06:19:35', '2021-02-25 06:20:10'),
('333', 'Aji Santoso', 'Kedung', '234324', '2021-02-24 06:19:35', '0000-00-00 00:00:00'),
('456', 'Budi Satrio', 'Pecangaan', '646456', '2021-02-24 06:19:35', '0000-00-00 00:00:00'),
('555', 'bagus', 'kedung', '555', '2021-02-25 06:33:18', '2021-02-25 06:33:18'),
('666', 'Santos', 'Brazil', '666', '2021-02-25 06:33:34', '2021-02-25 06:33:34');

-- --------------------------------------------------------

--
-- Table structure for table `tb_users`
--

CREATE TABLE `tb_users` (
  `user_id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` text NOT NULL,
  `level` int(11) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_users`
--

INSERT INTO `tb_users` (`user_id`, `email`, `password`, `level`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 1, 'Administrator', '2021-02-25 06:30:18', '2021-02-23 04:09:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_bobot`
--
ALTER TABLE `tb_bobot`
  ADD PRIMARY KEY (`bobot_id`);

--
-- Indexes for table `tb_hasil`
--
ALTER TABLE `tb_hasil`
  ADD PRIMARY KEY (`ktp_id`);

--
-- Indexes for table `tb_profile`
--
ALTER TABLE `tb_profile`
  ADD PRIMARY KEY (`ktp_id`);

--
-- Indexes for table `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_bobot`
--
ALTER TABLE `tb_bobot`
  MODIFY `bobot_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
