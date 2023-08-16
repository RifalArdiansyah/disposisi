-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2023 at 06:01 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_disposisii`
--

-- --------------------------------------------------------

--
-- Table structure for table `arske`
--

CREATE TABLE `arske` (
  `id` int(5) NOT NULL,
  `nosurat` varchar(25) NOT NULL,
  `ringkasan` text NOT NULL,
  `pengelolah` varchar(25) NOT NULL,
  `tglsurat` date NOT NULL,
  `kepada` varchar(25) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `surat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_agenda`
--

CREATE TABLE `tb_agenda` (
  `id` bigint(11) NOT NULL,
  `nosurat` varchar(50) NOT NULL,
  `tglsurat` date NOT NULL,
  `tglteri` date NOT NULL,
  `perihal` varchar(50) NOT NULL,
  `isi` text NOT NULL,
  `instansi` varchar(25) NOT NULL,
  `file_surat` varchar(100) NOT NULL,
  `ditujukan` varchar(25) DEFAULT NULL,
  `ditujukan1` varchar(20) DEFAULT NULL,
  `ditujukan2` varchar(20) DEFAULT NULL,
  `ditujukan3` varchar(20) DEFAULT NULL,
  `ditujukan4` varchar(20) DEFAULT NULL,
  `balas` text DEFAULT NULL,
  `catatan` text DEFAULT NULL,
  `cat_kap` text DEFAULT NULL,
  `status` int(11) NOT NULL,
  `status_kap` int(11) NOT NULL DEFAULT 0,
  `stat` int(11) DEFAULT NULL,
  `stat_balas` int(11) DEFAULT 0,
  `track1` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_agenda`
--

INSERT INTO `tb_agenda` (`id`, `nosurat`, `tglsurat`, `tglteri`, `perihal`, `isi`, `instansi`, `file_surat`, `ditujukan`, `ditujukan1`, `ditujukan2`, `ditujukan3`, `ditujukan4`, `balas`, `catatan`, `cat_kap`, `status`, `status_kap`, `stat`, `stat_balas`, `track1`) VALUES
(34, '3411201100', '2023-08-15', '2023-08-15', 'surat proposal', '123', 'sekertaris', 'Cetak_Laporan.pdf', NULL, 'Kasubag Keuangan', NULL, NULL, NULL, 'Makasih', 'siapp', NULL, 1, 1, 1, 1, 'Surat telah Terkirim <br> Ke Sekertaris KPU<br> Tanggal :15-08-2023'),
(36, '3411201101', '2023-08-15', '2023-08-15', 'surat proposal', 'sadasd', 'ga tau', 'Cetak_Laporan1.pdf', 'Kasubag Teknis dan Hubmas', NULL, NULL, NULL, NULL, NULL, 'penting', NULL, 1, 0, NULL, 0, 'Surat telah Terkirim <br> Ke Sekertaris KPU<br> Tanggal :15-08-2023'),
(37, '3411201100', '2023-08-16', '2023-08-16', 'surat proposal', 'sdasda', 'sekertaris', 'Cetak_Laporan2.pdf', NULL, 'Kasubag Keuangan', NULL, NULL, NULL, 'makasih', 'penting', NULL, 1, 1, 1, 0, 'Surat telah Terkirim <br> Ke Sekertaris KPU<br> Tanggal :16-08-2023'),
(38, '3411201111', '2023-08-16', '2023-08-16', 'surat proposal', 'sdadwa', 'pemda', 'PROPOSAL_KERJA_PRAKTIK(Rayhan_Irawan_3411201104__Liony_Puspita_Dewi_3411201117)1.pdf', NULL, 'Kasubag Keuangan', NULL, NULL, NULL, NULL, 'penting', NULL, 1, 0, NULL, 0, 'Surat telah Terkirim <br> Ke Sekertaris KPU<br> Tanggal :16-08-2023');

-- --------------------------------------------------------

--
-- Table structure for table `tb_statuski`
--

CREATE TABLE `tb_statuski` (
  `id` bigint(20) NOT NULL,
  `id_surat` bigint(20) DEFAULT NULL,
  `ditujukan` varchar(35) DEFAULT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_statuski`
--

INSERT INTO `tb_statuski` (`id`, `id_surat`, `ditujukan`, `status`) VALUES
(32, 34, NULL, '0'),
(34, 36, 'Kasubag Teknis dan Hubmas', '1'),
(35, 37, NULL, '0'),
(36, 38, NULL, '0');

-- --------------------------------------------------------

--
-- Table structure for table `tb_statuskii`
--

CREATE TABLE `tb_statuskii` (
  `id` bigint(20) NOT NULL,
  `id_surat` bigint(20) DEFAULT NULL,
  `ditujukan` varchar(35) DEFAULT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_statuskii`
--

INSERT INTO `tb_statuskii` (`id`, `id_surat`, `ditujukan`, `status`) VALUES
(32, 34, NULL, '0'),
(34, 36, NULL, '0'),
(35, 37, NULL, '0'),
(36, 38, NULL, '0');

-- --------------------------------------------------------

--
-- Table structure for table `tb_statuskiii`
--

CREATE TABLE `tb_statuskiii` (
  `id` bigint(20) NOT NULL,
  `id_surat` bigint(20) DEFAULT NULL,
  `ditujukan` varchar(35) DEFAULT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_statuskiii`
--

INSERT INTO `tb_statuskiii` (`id`, `id_surat`, `ditujukan`, `status`) VALUES
(32, 34, NULL, '0'),
(34, 36, NULL, '0'),
(35, 37, NULL, '0'),
(36, 38, NULL, '0');

-- --------------------------------------------------------

--
-- Table structure for table `tb_statuskiv`
--

CREATE TABLE `tb_statuskiv` (
  `id` bigint(20) NOT NULL,
  `id_surat` bigint(20) DEFAULT NULL,
  `ditujukan` varchar(35) DEFAULT NULL,
  `status` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_statuskiv`
--

INSERT INTO `tb_statuskiv` (`id`, `id_surat`, `ditujukan`, `status`) VALUES
(32, 34, NULL, '0'),
(34, 36, NULL, '0'),
(35, 37, NULL, '0'),
(36, 38, NULL, '0');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tracking`
--

CREATE TABLE `tb_tracking` (
  `id` bigint(20) NOT NULL,
  `id_surat` bigint(20) DEFAULT NULL,
  `nosurat` varchar(50) NOT NULL,
  `track2` text DEFAULT NULL,
  `track3` text DEFAULT NULL,
  `track4` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_tracking`
--

INSERT INTO `tb_tracking` (`id`, `id_surat`, `nosurat`, `track2`, `track3`, `track4`) VALUES
(4, NULL, 'w3333aa', NULL, NULL, NULL),
(22, 37, '3411201100', 'Sekertaris KPU <br>mengirim surat ke : <br>Kasubag Keuangan<br><br><br><br><br> Tanggal : 16-08-2023', 'Kasubag Keuangan <br> Mengirim Kembali Surat <br> Ke Sekertaris KPU<br> Tanggal16-08-2023', 'Sekertaris KPU <br> Mengirim Surat Ke : <br><br><br><br><br> Tanggal : 15-08-2023'),
(24, 36, '3411201101', 'Sekertaris KPU <br>mengirim surat ke : <br><br>Kasubag Teknis dan Hubmas<br><br><br><br> Tanggal : 15-08-2023', NULL, NULL),
(25, 37, '3411201100', 'Sekertaris KPU <br>mengirim surat ke : <br>Kasubag Keuangan<br><br><br><br><br> Tanggal : 16-08-2023', 'Kasubag Keuangan <br> Mengirim Kembali Surat <br> Ke Sekertaris KPU<br> Tanggal16-08-2023', NULL),
(26, 38, '3411201111', 'Sekertaris KPU <br>mengirim surat ke : <br>Kasubag Keuangan<br><br><br><br><br> Tanggal : 16-08-2023', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(1, 'Unjani', 'Admin', 'PASPHOTO_ALFIN_GERLIANDEVA1.jpg', '$2y$10$XXffVeaDRE5tu4PRZmUcP.HYH7qt22TI5csgudk9L0x.6asO7JGAG', 1, 1, 1577927356),
(15, 'Alfin', '123', 'default.jpg', '$2y$10$9Ii8pasFHOVrihuk.2OJT.nj2BbiX6/SAvk7d1WuXgYmxZq58x90.', 3, 1, 1624710866),
(16, 'DANNY M.M PORA, S.STP', '246', 'default.jpg', '$2y$10$MqrrMULVIds21ZkFwXcGfuojG1KWgQRWgE653VrvlEXyikUSraDAO', 4, 1, 1624713076),
(17, 'REGIA RAHMANIA, S.IP', '234', 'default.jpg', '$2y$10$nNINLOYz/RWaeqSgSJIYL.tFwUbNy5k2gVpyxKa7IwkZ5ZfrEp9XW', 5, 1, 1624750061),
(18, 'ATIK MUSRIFA, S.IP, M.AP', '321', 'default.jpg', '$2y$10$j/zAdKwhri0ESeYq8huHs.XG2Lfxcr65VCcAAnooqtldBXyzDQ3Ey', 6, 1, 1624750930),
(19, 'GITASARI SISWINARTI, SH', '146', 'default.jpg', '$2y$10$24CLkd4H1xkzkiQtBgBLauULb8f75hQaXDFZ391OxaknnxBIhTF6O', 7, 1, 1624751853),
(20, 'RIMA NURMALINA, S.IP', '124', 'default.jpg', '$2y$10$B9WoHa85g4hNTeL03uVAh.Ttrrjzv8fTI5dt8hD8aC.G6W7LSfnGi', 8, 1, 1624751925),
(21, 'Rifal', '432', 'default.jpg', '$2y$10$alT7dsEIMuDKNLAQ/NcMd.CLX1dLasOn..GmlOluiL.y9qjqJ9Utu', 9, 1, 1624752518),
(22, 'Unjani', '123456789', 'default.jpg', '$2y$10$aG0S0Bwazu00WP6/jh1q0umGLWN2IevgUvkkp9hsg3g3ANz/L49ra', 1, 1, 1626991990);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(3, 2, 2),
(20, 2, 17),
(21, 2, 4),
(22, 1, 17),
(32, 3, 17),
(36, 3, 3),
(37, 1, 3),
(39, 4, 17),
(40, 4, 2),
(41, 1, 15),
(42, 1, 16),
(43, 1, 4),
(44, 1, 5),
(46, 1, 6),
(47, 1, 7),
(48, 1, 8),
(50, 5, 17),
(51, 5, 4),
(52, 3, 15),
(55, 3, 9),
(56, 1, 9),
(57, 6, 5),
(58, 6, 17),
(59, 7, 6),
(60, 7, 17),
(61, 8, 7),
(62, 8, 17),
(63, 9, 8),
(64, 9, 17),
(66, 1, 2),
(67, 6, 4);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `name`, `menu`) VALUES
(1, 'Administrator', 'Admin'),
(2, 'Sekertaris KPU', 'Sekertaris'),
(3, 'Peanggenda Surat', 'Agenda'),
(4, 'Kasubag Keuangan', 'kapala'),
(5, 'Kasubag Teknis dan Hubmas', 'Bidangi'),
(6, 'Kasubag Perencanaan , Program dan Data', 'Bidangii'),
(7, 'Kasubag Hukum dan SDM', 'Bidangiii'),
(8, 'Kasubag', 'Bidangiv'),
(9, 'Monitoring Surat', 'monitor'),
(15, 'Manajemen Arsip Keluar', 'Arsip'),
(16, 'Setting Menu', 'Menu'),
(17, 'Setting Account', 'User');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'administrator'),
(3, 'Staf Peanggenda Surat Masuk'),
(4, 'Sekertaris  KPU'),
(5, 'Kasubag Keuangan'),
(6, 'Kasubag Teknis dan Hubmas'),
(7, 'Kasubag Perencanaan , Program dan Data'),
(8, 'Kasubag Hukum dan SDM'),
(9, 'Kasubag');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
(2, 17, 'My Profile', 'user', 'fas fa-fw fa-user', 1),
(3, 17, 'Edit Profile', 'user/edit', 'fas fa-fw fa-user-edit', 1),
(4, 16, 'Menu Management', 'menu', 'fas fa-fw fa-folder', 1),
(5, 16, 'Submenu Management', 'menu/submenu', 'fas fa-fw fa-folder-open', 1),
(9, 16, 'Management Role Access', 'admin/role', 'fa fa-fw fa-user-tie', 1),
(11, 15, 'Arsip Surat Keluar', 'arsip/suratkel', 'fas fa-fw fa-folder', 1),
(12, 16, 'Management Pengguna', 'menu/tampiluser', 'fas fa-fw fa-users', 1),
(13, 3, 'Dashboard', 'agenda', 'fas fa-fw fa-home', 1),
(14, 3, 'Input Surat Masuk', 'agenda/add', 'fas fa-fw fa-plus', 1),
(15, 2, 'Dashboard', 'sekertaris', 'fas fa-fw fa-home', 1),
(16, 2, 'Surat Masuk', 'sekertaris/masuk', 'fas fa-fw fa-file', 1),
(17, 2, 'Balasan Kasubag', 'sekertaris/balas', 'fas fa-fw fa-book', 1),
(18, 4, 'Dashboard', 'kapala', 'fas fa-fw fa-home', 1),
(19, 4, 'Surat Masuk', 'kapala/masuk', 'fas fa-fw fa-folder-open', 1),
(21, 5, 'Dashboard', 'bidangi', 'fas fa-fw fa-home', 1),
(22, 5, 'Surat Masuk', 'bidangi/masuk', 'fas fa-fw fa-folder-open', 1),
(23, 6, 'Dashboard', 'bidangii', 'fas fa-fw fa-home', 1),
(24, 6, 'Surat Masuk', 'bidangii/masuk', 'fas fa-fw fa-folder', 1),
(25, 7, 'Dashboard', 'bidangiii', 'fas fa-fw fa-home', 1),
(26, 7, 'Surat Masuk', 'bidangiii/masuk', 'fas fa-fw fa-folder', 1),
(27, 8, 'Dashboard', 'bidangiv', 'fas fa-fw fa-home', 1),
(28, 8, 'Surat Masuk', 'bidangiv/masuk', 'fas fa-fw fa-folder', 1),
(29, 3, 'Master Surat Masuk', 'agenda/surma', 'fas fa-fw fa-file', 1),
(30, 9, 'Tracking Surat', 'monitor', 'fas fa-fw fa-search', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `arske`
--
ALTER TABLE `arske`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_agenda`
--
ALTER TABLE `tb_agenda`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_statuski`
--
ALTER TABLE `tb_statuski`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_surat` (`id_surat`);

--
-- Indexes for table `tb_statuskii`
--
ALTER TABLE `tb_statuskii`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_surat` (`id_surat`);

--
-- Indexes for table `tb_statuskiii`
--
ALTER TABLE `tb_statuskiii`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_surat` (`id_surat`);

--
-- Indexes for table `tb_statuskiv`
--
ALTER TABLE `tb_statuskiv`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_surat` (`id_surat`);

--
-- Indexes for table `tb_tracking`
--
ALTER TABLE `tb_tracking`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_surat` (`id_surat`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `arske`
--
ALTER TABLE `arske`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tb_agenda`
--
ALTER TABLE `tb_agenda`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `tb_statuski`
--
ALTER TABLE `tb_statuski`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `tb_statuskii`
--
ALTER TABLE `tb_statuskii`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `tb_statuskiii`
--
ALTER TABLE `tb_statuskiii`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `tb_statuskiv`
--
ALTER TABLE `tb_statuskiv`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `tb_tracking`
--
ALTER TABLE `tb_tracking`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_statuski`
--
ALTER TABLE `tb_statuski`
  ADD CONSTRAINT `tb_statuski_ibfk_1` FOREIGN KEY (`id_surat`) REFERENCES `tb_agenda` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_statuskii`
--
ALTER TABLE `tb_statuskii`
  ADD CONSTRAINT `tb_statuskii_ibfk_1` FOREIGN KEY (`id_surat`) REFERENCES `tb_agenda` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_statuskiii`
--
ALTER TABLE `tb_statuskiii`
  ADD CONSTRAINT `tb_statuskiii_ibfk_1` FOREIGN KEY (`id_surat`) REFERENCES `tb_agenda` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_statuskiv`
--
ALTER TABLE `tb_statuskiv`
  ADD CONSTRAINT `tb_statuskiv_ibfk_1` FOREIGN KEY (`id_surat`) REFERENCES `tb_agenda` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_tracking`
--
ALTER TABLE `tb_tracking`
  ADD CONSTRAINT `tb_tracking_ibfk_1` FOREIGN KEY (`id_surat`) REFERENCES `tb_agenda` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
