-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2018 at 09:17 AM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(255) NOT NULL,
  `username_admin` varchar(900) NOT NULL,
  `password_admin` varchar(900) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `agenda`
--

CREATE TABLE `agenda` (
  `id_agenda` int(9) NOT NULL,
  `tanggal_ageda` varchar(255) NOT NULL,
  `nama_kegiatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bidang`
--

CREATE TABLE `bidang` (
  `id_bidang` int(9) NOT NULL,
  `nama_bidang` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bidang`
--

INSERT INTO `bidang` (`id_bidang`, `nama_bidang`) VALUES
(1, 'Tata Usaha (TU)'),
(2, 'Waka Kesiswaan '),
(3, 'Waka Kurikulum'),
(4, 'Waka Sapras & Humas'),
(5, 'Guru');

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
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` int(9) NOT NULL,
  `judul_galeri` varchar(255) NOT NULL,
  `deskripsi_galeri` varchar(255) NOT NULL,
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
-- Table structure for table `informasi`
--

CREATE TABLE `informasi` (
  `id_informasi` int(9) NOT NULL,
  `judul_informasi` varchar(255) NOT NULL,
  `isi_informasi` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `viewers` int(9) NOT NULL,
  `id_gambar` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jabatan_karyawan`
--

CREATE TABLE `jabatan_karyawan` (
  `id_jabatan` int(9) NOT NULL,
  `nama_jabatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `NIPA_karyawan` varchar(255) NOT NULL,
  `nama_karyawan` varchar(255) NOT NULL,
  `id_jabatan` int(9) NOT NULL,
  `id_gambar` int(9) NOT NULL,
  `id_bidang` int(9) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `tanggal_lahir_karyawan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kategori_juara`
--

CREATE TABLE `kategori_juara` (
  `id_juara` int(9) NOT NULL,
  `nama_juara` varchar(255) NOT NULL
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
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `alamat` varchar(255) NOT NULL,
  `telepon` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kritik_saran`
--

CREATE TABLE `kritik_saran` (
  `id_kritik_saran` int(9) NOT NULL,
  `nama_kritik_saran` varchar(255) NOT NULL,
  `email_kritik_saran` varchar(255) NOT NULL,
  `isi_kritik_saran` varchar(255) NOT NULL,
  `id_status_dibaca` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lingkup_prestasi`
--

CREATE TABLE `lingkup_prestasi` (
  `id_lingkup_prestasi` int(9) NOT NULL,
  `nama_lingkup_prestasi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lingkup_prestasi`
--

INSERT INTO `lingkup_prestasi` (`id_lingkup_prestasi`, `nama_lingkup_prestasi`) VALUES
(1, 'Sekolah'),
(2, 'Kecamatan'),
(3, 'Kabupaten'),
(4, 'Regional Jawa Timur'),
(5, 'Nasional'),
(6, 'Internasional');

-- --------------------------------------------------------

--
-- Table structure for table `poling`
--

CREATE TABLE `poling` (
  `id_poling` int(255) NOT NULL,
  `keterangan_poling` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `prestasi`
--

CREATE TABLE `prestasi` (
  `id_prestasi` int(9) NOT NULL,
  `nama_siswa_prestasi` varchar(255) NOT NULL,
  `id_juara` int(9) NOT NULL,
  `id_lingkup_prestasi` int(9) NOT NULL,
  `nama_lomba` varchar(255) NOT NULL,
  `nama_pembimbing_lomba` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `quotes`
--

CREATE TABLE `quotes` (
  `id_quotes` int(255) NOT NULL,
  `isi` text NOT NULL
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
-- Table structure for table `status_dibaca`
--

CREATE TABLE `status_dibaca` (
  `id_status_dibaca` int(9) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `visi_misi`
--

CREATE TABLE `visi_misi` (
  `visi` varchar(255) NOT NULL,
  `misi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id_agenda`);

--
-- Indexes for table `bidang`
--
ALTER TABLE `bidang`
  ADD PRIMARY KEY (`id_bidang`);

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
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`),
  ADD KEY `id_gambar_galeri` (`id_gambar`);

--
-- Indexes for table `gambar`
--
ALTER TABLE `gambar`
  ADD PRIMARY KEY (`id_gambar`);

--
-- Indexes for table `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`id_informasi`),
  ADD KEY `id_gambar_informasi` (`id_gambar`) USING BTREE;

--
-- Indexes for table `jabatan_karyawan`
--
ALTER TABLE `jabatan_karyawan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`NIPA_karyawan`),
  ADD KEY `id_jabatan_guru` (`id_jabatan`),
  ADD KEY `id_gambar_guru` (`id_gambar`),
  ADD KEY `id_bidang_karyawan` (`id_bidang`);

--
-- Indexes for table `kategori_juara`
--
ALTER TABLE `kategori_juara`
  ADD PRIMARY KEY (`id_juara`);

--
-- Indexes for table `kritik_saran`
--
ALTER TABLE `kritik_saran`
  ADD PRIMARY KEY (`id_kritik_saran`),
  ADD KEY `status_dibaca_kritik_saran` (`id_status_dibaca`);

--
-- Indexes for table `lingkup_prestasi`
--
ALTER TABLE `lingkup_prestasi`
  ADD PRIMARY KEY (`id_lingkup_prestasi`);

--
-- Indexes for table `poling`
--
ALTER TABLE `poling`
  ADD PRIMARY KEY (`id_poling`);

--
-- Indexes for table `prestasi`
--
ALTER TABLE `prestasi`
  ADD PRIMARY KEY (`id_prestasi`),
  ADD KEY `id_juara_prestasi` (`id_juara`),
  ADD KEY `id_lingkup_prestasi` (`id_lingkup_prestasi`);

--
-- Indexes for table `quotes`
--
ALTER TABLE `quotes`
  ADD PRIMARY KEY (`id_quotes`);

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
-- Indexes for table `status_dibaca`
--
ALTER TABLE `status_dibaca`
  ADD PRIMARY KEY (`id_status_dibaca`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id_agenda` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bidang`
--
ALTER TABLE `bidang`
  MODIFY `id_bidang` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ekstrakurikuler`
--
ALTER TABLE `ekstrakurikuler`
  MODIFY `id_ekstrakurikuler` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gambar`
--
ALTER TABLE `gambar`
  MODIFY `id_gambar` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id_informasi` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jabatan_karyawan`
--
ALTER TABLE `jabatan_karyawan`
  MODIFY `id_jabatan` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategori_juara`
--
ALTER TABLE `kategori_juara`
  MODIFY `id_juara` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kritik_saran`
--
ALTER TABLE `kritik_saran`
  MODIFY `id_kritik_saran` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lingkup_prestasi`
--
ALTER TABLE `lingkup_prestasi`
  MODIFY `id_lingkup_prestasi` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `poling`
--
ALTER TABLE `poling`
  MODIFY `id_poling` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prestasi`
--
ALTER TABLE `prestasi`
  MODIFY `id_prestasi` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `quotes`
--
ALTER TABLE `quotes`
  MODIFY `id_quotes` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sarana_prasarana`
--
ALTER TABLE `sarana_prasarana`
  MODIFY `id_sarana_prasarana` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `status_dibaca`
--
ALTER TABLE `status_dibaca`
  MODIFY `id_status_dibaca` int(9) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `denah_sekolah`
--
ALTER TABLE `denah_sekolah`
  ADD CONSTRAINT `denah_sekolah_ibfk_1` FOREIGN KEY (`id_gambar`) REFERENCES `gambar` (`id_gambar`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ekstrakurikuler`
--
ALTER TABLE `ekstrakurikuler`
  ADD CONSTRAINT `ekstrakurikuler_ibfk_1` FOREIGN KEY (`id_gambar`) REFERENCES `gambar` (`id_gambar`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `galeri`
--
ALTER TABLE `galeri`
  ADD CONSTRAINT `galeri_ibfk_1` FOREIGN KEY (`id_gambar`) REFERENCES `gambar` (`id_gambar`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `informasi`
--
ALTER TABLE `informasi`
  ADD CONSTRAINT `informasi_ibfk_1` FOREIGN KEY (`id_gambar`) REFERENCES `gambar` (`id_gambar`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD CONSTRAINT `karyawan_ibfk_1` FOREIGN KEY (`id_jabatan`) REFERENCES `jabatan_karyawan` (`id_jabatan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `karyawan_ibfk_2` FOREIGN KEY (`id_gambar`) REFERENCES `gambar` (`id_gambar`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `karyawan_ibfk_3` FOREIGN KEY (`id_bidang`) REFERENCES `bidang` (`id_bidang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kritik_saran`
--
ALTER TABLE `kritik_saran`
  ADD CONSTRAINT `kritik_saran_ibfk_1` FOREIGN KEY (`id_status_dibaca`) REFERENCES `status_dibaca` (`id_status_dibaca`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `prestasi`
--
ALTER TABLE `prestasi`
  ADD CONSTRAINT `prestasi_ibfk_1` FOREIGN KEY (`id_juara`) REFERENCES `kategori_juara` (`id_juara`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `prestasi_ibfk_2` FOREIGN KEY (`id_lingkup_prestasi`) REFERENCES `lingkup_prestasi` (`id_lingkup_prestasi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sarana_prasarana`
--
ALTER TABLE `sarana_prasarana`
  ADD CONSTRAINT `sarana_prasarana_ibfk_1` FOREIGN KEY (`id_gambar`) REFERENCES `gambar` (`id_gambar`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sejarah`
--
ALTER TABLE `sejarah`
  ADD CONSTRAINT `sejarah_ibfk_1` FOREIGN KEY (`id_gambar`) REFERENCES `gambar` (`id_gambar`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
