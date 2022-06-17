-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2022 at 11:15 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ukk_daniel`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id_menu` varchar(5) NOT NULL,
  `nama_menu` text NOT NULL,
  `harga` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id_menu`, `nama_menu`, `harga`) VALUES
('M002', 'susu', '9000'),
('M003', 'es cokelat', '10000');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_user` varchar(5) NOT NULL,
  `id_menu` varchar(5) NOT NULL,
  `qty` int(11) NOT NULL,
  `waktu_transaksi` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_user`, `id_menu`, `qty`, `waktu_transaksi`) VALUES
(1, 'k001', 'M001', 2, '2022-03-18 06:11:03'),
(2, 'k001', 'M001', 1, '2022-03-19 09:48:27'),
(1111, 'k001', 'M001', 4, '2022-03-19 09:49:23'),
(1111112, 'k001', 'M002', 1, '2022-03-21 16:44:10');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` varchar(5) NOT NULL,
  `username` text NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `level`) VALUES
('A002', 'daniel', '$2y$10$XvYwPvzY7H1kqnQiMH50y.ua.iNwZTIUTfiy/tNj3l5H65e2I1zdu', 2),
('J001', 'fiqih', '$2y$10$RQPJPT2ZRG.oDZpkWzmzN.qvQXOopUdLjtoIbpE2UP2apCLgf4pne', 1),
('k001', 'andi', '$2y$10$g/RCXnT5/c.O/jR97yOI9uo1KhQavS9IfjfSHNMqPjpigY77s1n8e', 3);

-- --------------------------------------------------------

--
-- Table structure for table `user_log`
--

CREATE TABLE `user_log` (
  `id_log` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `log_type` int(11) NOT NULL,
  `log_desc` varchar(255) NOT NULL,
  `last_activity` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_log`
--

INSERT INTO `user_log` (`id_log`, `username`, `log_type`, `log_desc`, `last_activity`) VALUES
(1, 'admin', 0, 'user login', '2022-03-18 04:40:30'),
(2, 'admin', 2, 'menambahkan data user', '2022-03-18 04:41:28'),
(3, 'admin', 2, 'menambahkan data user', '2022-03-18 04:41:52'),
(4, 'admin', 1, 'user logout', '2022-03-18 04:42:35'),
(5, 'manajer', 0, 'user login', '2022-03-18 04:42:49'),
(6, 'manajer', 2, 'menambahkan data menu', '2022-03-18 04:43:45'),
(7, 'manajer', 1, 'user logout', '2022-03-18 04:44:11'),
(8, 'admin', 0, 'user login', '2022-03-18 05:19:15'),
(9, 'admin', 0, 'user login', '2022-03-18 05:21:49'),
(10, 'admin', 0, 'user login', '2022-03-18 05:24:14'),
(11, 'admin', 0, 'user login', '2022-03-18 05:27:17'),
(12, 'admin', 0, 'user login', '2022-03-18 05:34:29'),
(13, 'admin', 0, 'user login', '2022-03-18 05:40:23'),
(14, 'admin', 0, 'user login', '2022-03-18 05:42:55'),
(15, 'admin', 0, 'user login', '2022-03-18 05:48:37'),
(16, 'admin', 1, 'user logout', '2022-03-18 05:49:12'),
(17, 'admin', 0, 'user login', '2022-03-18 05:49:45'),
(18, 'admin', 1, 'user logout', '2022-03-18 05:55:43'),
(19, 'manajer', 0, 'user login', '2022-03-18 05:55:51'),
(20, 'manajer', 1, 'user logout', '2022-03-18 06:01:04'),
(21, 'kasir', 0, 'user login', '2022-03-18 06:01:29'),
(22, 'kasir', 1, 'user logout', '2022-03-18 06:10:29'),
(23, 'kasir', 0, 'user login', '2022-03-18 06:10:37'),
(24, 'kasir', 2, 'menambahkan data transaksi', '2022-03-18 06:11:03'),
(25, 'admin', 0, 'user login', '2022-03-19 09:00:14'),
(26, 'admin', 1, 'user logout', '2022-03-19 09:08:11'),
(27, 'manajer', 0, 'user login', '2022-03-19 09:08:40'),
(28, 'manajer', 1, 'user logout', '2022-03-19 09:09:47'),
(29, 'kasir', 0, 'user login', '2022-03-19 09:09:53'),
(30, 'kasir', 2, 'menambahkan data transaksi', '2022-03-19 09:48:27'),
(31, 'kasir', 2, 'menambahkan data transaksi', '2022-03-19 09:49:23'),
(32, 'kasir', 1, 'user logout', '2022-03-19 10:10:36'),
(33, 'admin', 0, 'user login', '2022-03-19 10:10:51'),
(34, 'admin', 3, 'mengubah data user', '2022-03-19 10:12:11'),
(35, 'admin', 3, 'mengubah data user', '2022-03-19 10:12:26'),
(36, 'admin', 3, 'mengubah data user', '2022-03-19 10:12:46'),
(37, 'admin', 1, 'user logout', '2022-03-19 10:13:26'),
(38, 'manajer', 0, 'user login', '2022-03-19 10:13:35'),
(39, 'manajer', 3, 'mengubah data user', '2022-03-19 10:14:02'),
(40, 'manajer', 1, 'user logout', '2022-03-19 10:51:28'),
(41, 'admin', 0, 'user login', '2022-03-19 10:51:38'),
(42, 'admin', 1, 'user logout', '2022-03-19 11:03:29'),
(43, 'admin', 0, 'user login', '2022-03-19 11:03:37'),
(44, 'admin', 0, 'user login', '2022-03-20 15:37:50'),
(45, 'admin', 1, 'user logout', '2022-03-20 17:24:15'),
(46, 'manajer', 0, 'user login', '2022-03-20 17:24:31'),
(47, 'manajer', 1, 'user logout', '2022-03-20 17:26:02'),
(48, 'kasir', 0, 'user login', '2022-03-20 17:26:11'),
(49, 'kasir', 1, 'user logout', '2022-03-20 18:04:14'),
(50, 'admin', 0, 'user login', '2022-03-20 18:42:11'),
(51, 'admin', 0, 'user login', '2022-03-21 05:58:44'),
(52, 'admin', 1, 'user logout', '2022-03-21 06:18:39'),
(53, 'kasir', 0, 'user login', '2022-03-21 06:18:48'),
(54, 'kasir', 1, 'user logout', '2022-03-21 06:30:03'),
(55, 'admin', 0, 'user login', '2022-03-21 06:30:12'),
(56, 'admin', 1, 'user logout', '2022-03-21 06:41:15'),
(57, 'admin', 0, 'user login', '2022-03-21 06:41:41'),
(58, 'admin', 1, 'user logout', '2022-03-21 06:44:50'),
(59, 'admin', 0, 'user login', '2022-03-21 06:46:56'),
(60, 'admin', 1, 'user logout', '2022-03-21 06:49:19'),
(61, 'manajer', 0, 'user login', '2022-03-21 06:49:25'),
(62, 'manajer', 2, 'menambahkan data menu', '2022-03-21 06:50:07'),
(63, 'manajer', 1, 'user logout', '2022-03-21 07:03:58'),
(64, 'admin', 0, 'user login', '2022-03-21 08:06:38'),
(65, 'admin', 1, 'user logout', '2022-03-21 08:10:36'),
(66, 'manajer', 0, 'user login', '2022-03-21 08:10:54'),
(67, 'manajer', 1, 'user logout', '2022-03-21 08:11:07'),
(68, 'kasir', 0, 'user login', '2022-03-21 08:11:17'),
(69, 'kasir', 1, 'user logout', '2022-03-21 08:15:30'),
(70, 'admin', 0, 'user login', '2022-03-21 08:15:40'),
(71, 'admin', 1, 'user logout', '2022-03-21 08:17:29'),
(72, 'kasir', 0, 'user login', '2022-03-21 08:17:46'),
(73, 'manajer', 0, 'user login', '2022-03-21 14:31:03'),
(74, 'manajer', 1, 'user logout', '2022-03-21 15:11:50'),
(75, 'admin', 0, 'user login', '2022-03-21 15:12:09'),
(76, 'admin', 1, 'user logout', '2022-03-21 15:59:00'),
(77, 'manajer', 0, 'user login', '2022-03-21 15:59:13'),
(78, 'manajer', 1, 'user logout', '2022-03-21 16:15:39'),
(79, 'kasir', 0, 'user login', '2022-03-21 16:15:53'),
(80, 'kasir', 2, 'menambahkan data transaksi', '2022-03-21 16:44:10'),
(81, 'kasir', 1, 'user logout', '2022-03-21 17:04:23'),
(82, 'manajer', 0, 'user login', '2022-03-21 17:21:28'),
(83, 'admin', 0, 'user login', '2022-03-22 04:25:22'),
(84, 'admin', 1, 'user logout', '2022-03-22 04:50:46'),
(85, 'manajer', 0, 'user login', '2022-03-22 04:50:55'),
(86, 'manajer', 2, 'menambahkan data menu', '2022-03-22 04:51:34'),
(87, 'manajer', 4, 'menghapus data menu', '2022-03-22 04:52:59'),
(88, 'manajer', 3, 'mengubah data menu', '2022-03-22 04:53:34'),
(89, 'admin', 0, 'user login', '2022-03-24 04:19:04'),
(90, 'admin', 2, 'menambahkan data user', '2022-03-24 04:19:54'),
(91, 'admin', 4, 'menghapus data user', '2022-03-24 04:20:10'),
(92, 'daniel', 0, 'user login', '2022-03-24 04:20:19'),
(93, 'daniel', 3, 'mengubah data user', '2022-03-24 04:21:21'),
(94, 'daniel', 3, 'mengubah data user', '2022-03-24 04:21:38'),
(95, 'daniel', 1, 'user logout', '2022-03-24 04:37:06'),
(96, 'fiqih', 0, 'user login', '2022-03-24 04:37:14'),
(97, 'daniel', 0, 'user login', '2022-03-25 16:08:50'),
(98, 'daniel', 1, 'user logout', '2022-03-25 16:11:43'),
(99, 'fiqih', 0, 'user login', '2022-03-25 16:11:53'),
(100, 'fiqih', 1, 'user logout', '2022-03-25 16:15:52'),
(101, 'andi', 0, 'user login', '2022-03-25 16:17:07'),
(102, 'daniel', 0, 'user login', '2022-03-27 08:31:36'),
(103, 'daniel', 0, 'user login', '2022-03-28 09:14:15'),
(104, 'daniel', 1, 'user logout', '2022-03-28 09:14:41'),
(105, 'andi', 0, 'user login', '2022-03-28 09:14:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `user_log`
--
ALTER TABLE `user_log`
  ADD PRIMARY KEY (`id_log`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1111113;

--
-- AUTO_INCREMENT for table `user_log`
--
ALTER TABLE `user_log`
  MODIFY `id_log` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
