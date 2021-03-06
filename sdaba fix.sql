-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2018 at 03:56 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

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
  `password_admin` varchar(900) NOT NULL,
  `karyawan_NIPA_karyawan` varchar(255) NOT NULL
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
(121, 'Kepala Sekolah'),
(122, 'Guru'),
(123, 'Tata Usaha (TU)'),
(124, 'Waka Kesiswaan'),
(125, 'Waka Kurikulum'),
(126, 'Sarpras');

-- --------------------------------------------------------

--
-- Table structure for table `denah_sekolah`
--

CREATE TABLE `denah_sekolah` (
  `judul_denah` varchar(255) NOT NULL,
  `id_denah` varchar(45) NOT NULL,
  `gambar_denah` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ekstrakurikuler`
--

CREATE TABLE `ekstrakurikuler` (
  `id_ekstrakurikuler` int(9) NOT NULL,
  `nama_ekstrakurikuler` varchar(255) NOT NULL,
  `keterangan_ekstrakurikuler` varchar(255) NOT NULL,
  `id_gambar` int(9) NOT NULL,
  `gambar_ekstra` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` int(9) NOT NULL,
  `judul_galeri` varchar(255) NOT NULL,
  `deskripsi_galeri` varchar(255) NOT NULL,
  `gambar_galeri` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `judul_galeri`, `deskripsi_galeri`, `gambar_galeri`) VALUES
(2, 'Gamba 1', 'ini adalah gambar satu', 'gallery/Galeri/Datetime-5121.png');

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
  `gambar_informasi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jabatan_karyawan`
--

CREATE TABLE `jabatan_karyawan` (
  `id_jabatan` int(9) NOT NULL,
  `nama_jabatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jabatan_karyawan`
--

INSERT INTO `jabatan_karyawan` (`id_jabatan`, `nama_jabatan`) VALUES
(131, 'Kepala Sekokah'),
(1236, 'Guru PAI'),
(1237, 'Guru Kelas'),
(1238, 'Rumah Tangga'),
(1239, 'Guru Al_quran'),
(1240, 'Guru Penjas'),
(1241, 'Tata Usaha'),
(1242, 'Guru Bhs.Inggris'),
(1243, 'Kebersihan'),
(1244, 'Satpam'),
(1245, 'Guru Mulok (Al-Quran)'),
(1246, 'Guru Pendamping Kelas'),
(1247, 'Guru Mulok (Bahasa Arab)'),
(1248, 'Guru Mulok (TIK)'),
(1249, 'Administrasi'),
(1250, 'Guru PJOK'),
(1251, 'Petugas Perpustakaan');

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `NIPA_karyawan` varchar(255) NOT NULL,
  `nama_karyawan` varchar(255) NOT NULL,
  `id_jabatan` int(9) NOT NULL,
  `id_bidang` int(9) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `tanggal_lahir_karyawan` date NOT NULL,
  `tempat_lahir_karyawan` varchar(99) NOT NULL,
  `gambar_karyawan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`NIPA_karyawan`, `nama_karyawan`, `id_jabatan`, `id_bidang`, `alamat`, `tanggal_lahir_karyawan`, `tempat_lahir_karyawan`, `gambar_karyawan`) VALUES
('00.02.01.003', 'Muzakki H, S.Ag.,MM', 131, 121, 'Jalan Rumah', '1976-11-14', 'Bondowoso', ''),
('aaaaaa', 'asdasadasad', 1251, 125, 'aaaaaa', '2018-10-09', 'aaaaaa', ''),
('asasasasasa', 'asd', 1250, 123, 'asasasas', '2018-10-03', 'asasasasasa', ''),
('cascasc', 'cascasc', 1249, 124, 'cascasc', '2018-10-03', 'cascas', ''),
('cascascsacacs', 'accsacsacasca', 1250, 123, 'cascascascsaassacacsacas', '2018-10-03', 'cascascascascasc', ''),
('qwed', 'ZXCV', 1250, 123, 'qwerty', '2018-10-19', 'CACACA', '');

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
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `alamat` varchar(255) NOT NULL,
  `id_kontak` int(9) NOT NULL,
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
  `nama_pembimbing_lomba` varchar(255) NOT NULL,
  `gambar_prestasi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `quotes`
--

CREATE TABLE `quotes` (
  `id_quotes` int(255) NOT NULL,
  `isi` text NOT NULL,
  `karyawan_NIPA_karyawan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sarana_prasarana`
--

CREATE TABLE `sarana_prasarana` (
  `id_sarana_prasarana` int(9) NOT NULL,
  `ket_sarana_prasarana` varchar(255) NOT NULL,
  `gambar_sarana` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sejarah`
--

CREATE TABLE `sejarah` (
  `judul_sejarah` varchar(255) NOT NULL,
  `id_sejarah` int(9) NOT NULL,
  `isi_sejarah` varchar(255) NOT NULL,
  `gambar_sejarah` varchar(255) NOT NULL
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
  `id_visi_misi` int(9) NOT NULL,
  `misi` varchar(255) NOT NULL,
  `tujuan` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD KEY `fk_admin_karyawan1_idx` (`karyawan_NIPA_karyawan`);

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
  ADD PRIMARY KEY (`id_denah`);

--
-- Indexes for table `ekstrakurikuler`
--
ALTER TABLE `ekstrakurikuler`
  ADD PRIMARY KEY (`id_ekstrakurikuler`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indexes for table `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`id_informasi`);

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
  ADD KEY `id_bidang_karyawan` (`id_bidang`);

--
-- Indexes for table `kategori_juara`
--
ALTER TABLE `kategori_juara`
  ADD PRIMARY KEY (`id_juara`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id_kontak`);

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
  ADD PRIMARY KEY (`id_quotes`),
  ADD KEY `fk_quotes_karyawan1_idx` (`karyawan_NIPA_karyawan`);

--
-- Indexes for table `sarana_prasarana`
--
ALTER TABLE `sarana_prasarana`
  ADD PRIMARY KEY (`id_sarana_prasarana`);

--
-- Indexes for table `sejarah`
--
ALTER TABLE `sejarah`
  ADD PRIMARY KEY (`id_sejarah`);

--
-- Indexes for table `status_dibaca`
--
ALTER TABLE `status_dibaca`
  ADD PRIMARY KEY (`id_status_dibaca`);

--
-- Indexes for table `visi_misi`
--
ALTER TABLE `visi_misi`
  ADD PRIMARY KEY (`id_visi_misi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id_agenda` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bidang`
--
ALTER TABLE `bidang`
  MODIFY `id_bidang` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

--
-- AUTO_INCREMENT for table `ekstrakurikuler`
--
ALTER TABLE `ekstrakurikuler`
  MODIFY `id_ekstrakurikuler` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id_informasi` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jabatan_karyawan`
--
ALTER TABLE `jabatan_karyawan`
  MODIFY `id_jabatan` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1253;

--
-- AUTO_INCREMENT for table `kategori_juara`
--
ALTER TABLE `kategori_juara`
  MODIFY `id_juara` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id_kontak` int(9) NOT NULL AUTO_INCREMENT;

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
-- AUTO_INCREMENT for table `sejarah`
--
ALTER TABLE `sejarah`
  MODIFY `id_sejarah` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `status_dibaca`
--
ALTER TABLE `status_dibaca`
  MODIFY `id_status_dibaca` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `visi_misi`
--
ALTER TABLE `visi_misi`
  MODIFY `id_visi_misi` int(9) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `fk_admin_karyawan1` FOREIGN KEY (`karyawan_NIPA_karyawan`) REFERENCES `karyawan` (`NIPA_karyawan`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD CONSTRAINT `karyawan_ibfk_1` FOREIGN KEY (`id_jabatan`) REFERENCES `jabatan_karyawan` (`id_jabatan`) ON DELETE CASCADE ON UPDATE CASCADE,
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
-- Constraints for table `quotes`
--
ALTER TABLE `quotes`
  ADD CONSTRAINT `fk_quotes_karyawan1` FOREIGN KEY (`karyawan_NIPA_karyawan`) REFERENCES `karyawan` (`NIPA_karyawan`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
