-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2018 at 05:40 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sdaba02jember`
--

-- --------------------------------------------------------

--
-- Table structure for table `denah_sekolah`
--

CREATE TABLE `denah_sekolah` (
  `judul_denah` varchar(255) NOT NULL,
  `id_gambar` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ekstrakurikuler`
--

CREATE TABLE `ekstrakurikuler` (
  `id_ekstrakurikuler` int(9) NOT NULL,
  `nama_ekstrakurikuler` varchar(255) NOT NULL,
  `keterangan_ekstrakurikuler` varchar(255) NOT NULL,
  `id_gambar` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gambar`
--

CREATE TABLE `gambar` (
  `id_gambar` int(9) NOT NULL,
  `nama_gambar` varchar(255) NOT NULL,
  `href` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id_guru` int(9) NOT NULL,
  `nama_guru` varchar(255) NOT NULL,
  `NIPA` int(30) NOT NULL,
  `id_jabatan_guru` int(9) NOT NULL,
  `id_gambar` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jabatan_guru`
--

CREATE TABLE `jabatan_guru` (
  `id_jabatan` int(9) NOT NULL,
  `nama_jabatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kepala_sekolah`
--

CREATE TABLE `kepala_sekolah` (
  `nama_kepala_sekolah` varchar(255) NOT NULL,
  `NIPA` varchar(30) NOT NULL,
  `visi_misi_kepala_sekolah` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sarana_prasarana`
--

CREATE TABLE `sarana_prasarana` (
  `id_sarana_prasarana` int(9) NOT NULL,
  `id_gambar` int(9) NOT NULL,
  `ket_sarana_prasarana` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sejarah`
--

CREATE TABLE `sejarah` (
  `judul_sejarah` varchar(255) NOT NULL,
  `isi_sejarah` varchar(255) NOT NULL,
  `id_gambar` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tu_sekolah`
--

CREATE TABLE `tu_sekolah` (
  `id_tu` int(9) NOT NULL,
  `nama_tu` varchar(255) NOT NULL,
  `program_kerja_tu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `visi_misi`
--

CREATE TABLE `visi_misi` (
  `visi` varchar(255) NOT NULL,
  `misi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `waka_kesiswaan_sekolah`
--

CREATE TABLE `waka_kesiswaan_sekolah` (
  `id_waka_kesiswaan_sekolah` int(9) NOT NULL,
  `nama_waka_kesiswaan_sekolah` varchar(255) NOT NULL,
  `program_kerja_waka_kesiswaan_sekolah` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `waka_kurikulum_sekolah`
--

CREATE TABLE `waka_kurikulum_sekolah` (
  `id_waka_kurikulum_sekolah` int(9) NOT NULL,
  `nama_waka_kurikulum_sekolah` varchar(255) NOT NULL,
  `program_kerja_waka_kurikulum_sekolah` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `waka_sapras_humas_sekolah`
--

CREATE TABLE `waka_sapras_humas_sekolah` (
  `id_waka_sapras_humas_sekolah` int(9) NOT NULL,
  `nama_waka_sapras_humas_sekolah` varchar(255) NOT NULL,
  `program_waka_sapras_humas_sekolah` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `denah_sekolah`
--
ALTER TABLE `denah_sekolah`
  ADD KEY `id_gambar_denah` (`id_gambar`);

--
-- Indexes for table `ekstrakurikuler`
--
ALTER TABLE `ekstrakurikuler`
  ADD PRIMARY KEY (`id_ekstrakurikuler`),
  ADD KEY `id_gambar_ekstrakurikuler` (`id_gambar`);

--
-- Indexes for table `gambar`
--
ALTER TABLE `gambar`
  ADD PRIMARY KEY (`id_gambar`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id_guru`),
  ADD KEY `id_jabatan_guru` (`id_jabatan_guru`),
  ADD KEY `id_gambar_guru` (`id_gambar`);

--
-- Indexes for table `jabatan_guru`
--
ALTER TABLE `jabatan_guru`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `sarana_prasarana`
--
ALTER TABLE `sarana_prasarana`
  ADD PRIMARY KEY (`id_sarana_prasarana`),
  ADD KEY `id_gambar_sarana_prasarana` (`id_gambar`) USING BTREE;

--
-- Indexes for table `sejarah`
--
ALTER TABLE `sejarah`
  ADD KEY `id_gambar_sejarah` (`id_gambar`) USING BTREE;

--
-- Indexes for table `tu_sekolah`
--
ALTER TABLE `tu_sekolah`
  ADD PRIMARY KEY (`id_tu`);

--
-- Indexes for table `waka_kesiswaan_sekolah`
--
ALTER TABLE `waka_kesiswaan_sekolah`
  ADD PRIMARY KEY (`id_waka_kesiswaan_sekolah`);

--
-- Indexes for table `waka_kurikulum_sekolah`
--
ALTER TABLE `waka_kurikulum_sekolah`
  ADD PRIMARY KEY (`id_waka_kurikulum_sekolah`);

--
-- Indexes for table `waka_sapras_humas_sekolah`
--
ALTER TABLE `waka_sapras_humas_sekolah`
  ADD PRIMARY KEY (`id_waka_sapras_humas_sekolah`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ekstrakurikuler`
--
ALTER TABLE `ekstrakurikuler`
  MODIFY `id_ekstrakurikuler` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gambar`
--
ALTER TABLE `gambar`
  MODIFY `id_gambar` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id_guru` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jabatan_guru`
--
ALTER TABLE `jabatan_guru`
  MODIFY `id_jabatan` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sarana_prasarana`
--
ALTER TABLE `sarana_prasarana`
  MODIFY `id_sarana_prasarana` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tu_sekolah`
--
ALTER TABLE `tu_sekolah`
  MODIFY `id_tu` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `waka_kesiswaan_sekolah`
--
ALTER TABLE `waka_kesiswaan_sekolah`
  MODIFY `id_waka_kesiswaan_sekolah` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `waka_kurikulum_sekolah`
--
ALTER TABLE `waka_kurikulum_sekolah`
  MODIFY `id_waka_kurikulum_sekolah` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `waka_sapras_humas_sekolah`
--
ALTER TABLE `waka_sapras_humas_sekolah`
  MODIFY `id_waka_sapras_humas_sekolah` int(9) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
