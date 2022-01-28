-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 14, 2021 at 05:07 AM
-- Server version: 5.7.24
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loker`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar_lowongan`
--

CREATE TABLE `daftar_lowongan` (
  `id_daftar` int(11) NOT NULL,
  `id_lowongan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `cv` varchar(500) NOT NULL,
  `ijazah` varchar(500) NOT NULL,
  `surat_lamaran` text NOT NULL,
  `status` enum('tidak diterima','diterima ke tahap berikutnya') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftar_lowongan`
--

INSERT INTO `daftar_lowongan` (`id_daftar`, `id_lowongan`, `id_user`, `cv`, `ijazah`, `surat_lamaran`, `status`) VALUES
(1, 4, 4, '05062021170859CV new.pdf', '05062021170859transkrip.pdf', 'asdsadasd', 'diterima ke tahap berikutnya'),
(2, 10, 4, '14072021040259cv nopek.pdf', '14072021040259transkrip.pdf', 'ghffhgghfghftfhgghjf', 'diterima ke tahap berikutnya');

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `id_kontak` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `subjek` varchar(30) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`id_kontak`, `nama`, `email`, `subjek`, `pesan`) VALUES
(1, 'azmi', 'ajskd@gmail.com', 'askldas', 'jaskdjkasd');

-- --------------------------------------------------------

--
-- Table structure for table `lowongan`
--

CREATE TABLE `lowongan` (
  `id_lowongan` int(11) NOT NULL,
  `id_perusahaan` int(11) NOT NULL,
  `brosur` varchar(500) NOT NULL,
  `posisi` varchar(30) NOT NULL,
  `deskripsi_pekerjaan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lowongan`
--

INSERT INTO `lowongan` (`id_lowongan`, `id_perusahaan`, `brosur`, `posisi`, `deskripsi_pekerjaan`) VALUES
(3, 2, '21032021105743thumbnail1.png', 'IT Support', 'Kami membutuhkan IT support'),
(4, 1, '14072021021809index_img_001.jpg', 'Front-end Developerrr', 'front end menggunakan vue.js'),
(9, 1, '14072021035344fastikom.png', 'web programmer', 'asdsdsadada'),
(10, 4, '14072021035841fastikom.png', 'fgdgfdfdg', 'dassaasdsa');

-- --------------------------------------------------------

--
-- Table structure for table `perusahaan`
--

CREATE TABLE `perusahaan` (
  `id_perusahaan` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `foto` varchar(500) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perusahaan`
--

INSERT INTO `perusahaan` (`id_perusahaan`, `username`, `password`, `nama`, `foto`, `alamat`, `deskripsi`) VALUES
(1, 'sinarjaya', '715d0471f55aee1800f5ea8d705d0408', 'PT. Sinar Jaya', '17032021174332LOGO HMSI 2.png', 'Jakarta Selatan', 'Kami sedang mencari lulusan D3 Manajemen Informatika dengan kriteria sebagai berikut :'),
(2, 'Telkom', '202cb962ac59075b964b07152d234b70', 'PT. Telkom Indonesia', '21032021105649670889_720.jpg', 'Jakarta Pusat', 'Telkom adalah perusahaan yang bergerak dibidang jaringan\r\n'),
(3, 'harvest', '202cb962ac59075b964b07152d234b70', '', '31032021045830Y913591019.jpg', 'Jl. A. Yani no 98, Sumberan Selatan, Wonosobo Barat', 'Hotel santai yang menawarkan pemandangan gunung ini terletak di pusat kota dan di pinggir Jalan Nasional Rute 9. Jaraknya 3 km dari terminal bus Terminal Mendolo dan 28 km dari Dataran Tinggi Dieng di Kompleks Gunung Berapi Dieng.\r\nKamar simpel dilengkapi dengan Wi-Fi, TV layar datar, serta alat pembuat teh dan kopi. Kamar di kelas yang lebih tinggi juga memiliki balkon, dan/atau pemandangan kota atau gunung.\r\nTerdapat kafe simpel.'),
(4, 'asd', '202cb962ac59075b964b07152d234b70', '', '14072021035702fastikom.png', 'asd', 'asdasdasd'),
(5, 'qwe', '202cb962ac59075b964b07152d234b70', 'qwe', '14072021040641cc..jpg', 'qwe', 'qwe');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `type_user` enum('user','admin') NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `no_hp` char(13) NOT NULL,
  `alamat` text NOT NULL,
  `foto` varchar(500) NOT NULL,
  `jurusan` varchar(30) NOT NULL,
  `tentang` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `type_user`, `username`, `password`, `nama`, `email`, `no_hp`, `alamat`, `foto`, `jurusan`, `tentang`) VALUES
(3, 'admin', 'admin', 'admin', '', '', '', '', '', '', ''),
(4, 'user', 'yusaazmi', '202cb962ac59075b964b07152d234b70', 'Muhammad Yusa Azmi', 'yusaazmi24@gmail.com', '082140603663', 'Kalibeber, RT 01/ RW 02\r\nhome', '13032021064011IMG-20210215-WA0015.jpg', 'D3 Manajemen Informatika', 'Experienced Web Developer with a demonstrated history of working in the internet industry. Skilled in SQL, PHP, Front-end Development, and Back-End Web Development. Strong engineering professional with a Associate\'s degree focused in Manajemen Informatika from Universitas Sains Al-Qur\'an (UNSIQ).');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar_lowongan`
--
ALTER TABLE `daftar_lowongan`
  ADD PRIMARY KEY (`id_daftar`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id_kontak`);

--
-- Indexes for table `lowongan`
--
ALTER TABLE `lowongan`
  ADD PRIMARY KEY (`id_lowongan`);

--
-- Indexes for table `perusahaan`
--
ALTER TABLE `perusahaan`
  ADD PRIMARY KEY (`id_perusahaan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftar_lowongan`
--
ALTER TABLE `daftar_lowongan`
  MODIFY `id_daftar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id_kontak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lowongan`
--
ALTER TABLE `lowongan`
  MODIFY `id_lowongan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `perusahaan`
--
ALTER TABLE `perusahaan`
  MODIFY `id_perusahaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
