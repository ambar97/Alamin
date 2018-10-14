-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2018 at 05:11 PM
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
  `password_admin` varchar(900) NOT NULL,
  `karyawan_NIPA_karyawan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `agenda`
--

CREATE TABLE `agenda` (
  `id_agenda` int(9) NOT NULL,
  `tanggal_agenda` varchar(255) NOT NULL,
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
(1, 'Kepala Sekolah'),
(2, 'Tata Usaha'),
(3, 'Kesiswaan'),
(4, 'Kurikulum'),
(5, 'Sapras dan Humas');

-- --------------------------------------------------------

--
-- Table structure for table `denah_sekolah`
--

CREATE TABLE `denah_sekolah` (
  `id_denah` varchar(45) NOT NULL,
  `judul_denah` varchar(255) NOT NULL,
  `gambar_denah` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `denah_sekolah`
--

INSERT INTO `denah_sekolah` (`id_denah`, `judul_denah`, `gambar_denah`) VALUES
('1', 'asd', 'BJzNQ-XAC1K1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `ekstrakurikuler`
--

CREATE TABLE `ekstrakurikuler` (
  `id_ekstrakurikuler` int(9) NOT NULL,
  `nama_ekstrakurikuler` varchar(255) NOT NULL,
  `keterangan_ekstrakurikuler` varchar(255) NOT NULL,
  `gambar_ekstra` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ekstrakurikuler`
--

INSERT INTO `ekstrakurikuler` (`id_ekstrakurikuler`, `nama_ekstrakurikuler`, `keterangan_ekstrakurikuler`, `gambar_ekstra`) VALUES
(1, 'we', 'asdfghqwe', 'gallery/Ekstrakulikuler/nami.jpg'),
(2, 'we', 'asdfghqwe', 'gallery/Ekstrakulikuler/nami.jpg');

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
(1, 'slider 1', '', 'BMQbR88A1Mk.jpg'),
(2, 'slider 2', '', 'BJw0DGjAvfF.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `informasi`
--

CREATE TABLE `informasi` (
  `id_informasi` int(9) NOT NULL,
  `judul_informasi` varchar(255) NOT NULL,
  `isi_informasi` text NOT NULL,
  `date` date NOT NULL,
  `viewers` int(9) NOT NULL,
  `gambar_informasi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `informasi`
--

INSERT INTO `informasi` (`id_informasi`, `judul_informasi`, `isi_informasi`, `date`, `viewers`, `gambar_informasi`) VALUES
(15, 'nyoh', '                                                                                                                    qwertyuiopasdfghjkzxcvbnm,                                                                                                                ', '2018-10-13', 0, 'best_one_piece_wallpapers_0011.jpg'),
(16, 'juduluuuuu', '                                                          qwertyuiopasdfghjkzxcvbnm,                                                        ', '2018-10-13', 0, 'nami.jpg');

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
(1, 'Kepala Sekolah'),
(2, 'Guru Pendidikan Agama Islam'),
(3, 'Guru Kelas'),
(4, 'Rumah Tangga'),
(5, 'Guru Al-Qur\'an'),
(6, 'Guru Penjas'),
(7, 'Ka. Tata Usaha'),
(8, 'Guru Bahasa Inggris'),
(9, 'Staf Kebersihan'),
(10, 'Satpam'),
(11, 'Koordinator Kebersihan'),
(12, 'Guru Mulok (Al-Qur\'an)'),
(13, 'Guru Pendamping Kelas'),
(14, 'Guru Mulok (Bahasa Arab)'),
(15, 'Guru Mulok (TIK)'),
(16, 'Kebersihan'),
(17, 'Staf Administrasi'),
(18, 'Guru PJOK'),
(19, 'Petugas Perpustakaan'),
(20, 'Waker');

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
('081081081081', 'Paijo', 1, 1, 'Kaliurang', '2018-10-10', 'Jember', 'gallery/Karyawan/BJ5a3XADwCN1.jpg');

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
  `id_kontak` int(9) NOT NULL,
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
-- Table structure for table `proker`
--

CREATE TABLE `proker` (
  `id_proker` int(9) NOT NULL,
  `id_bidang` int(9) NOT NULL,
  `id_jabatan` int(9) NOT NULL,
  `isi_proker` text NOT NULL
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
  `id_sejarah` int(9) NOT NULL,
  `judul_sejarah` varchar(255) NOT NULL,
  `isi_sejarah` varchar(255) NOT NULL,
  `gambar_sejarah` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sejarah`
--

INSERT INTO `sejarah` (`id_sejarah`, `judul_sejarah`, `isi_sejarah`, `gambar_sejarah`) VALUES
(1, 'Sejarah SDABA 02 Jember', 'Menenggor gor or gorgor gorrr ', 'BKnYq2PgpEN.jpg');

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
  `id_visi_misi` int(9) NOT NULL,
  `visi` varchar(255) NOT NULL,
  `misi` varchar(255) NOT NULL,
  `tujuan` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visi_misi`
--

INSERT INTO `visi_misi` (`id_visi_misi`, `visi`, `misi`, `tujuan`) VALUES
(2, 'asdasd', 'qwe', 'zxc');

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
-- Indexes for table `proker`
--
ALTER TABLE `proker`
  ADD PRIMARY KEY (`id_proker`),
  ADD KEY `id_bidang_proker` (`id_bidang`),
  ADD KEY `id_jabatan_proker` (`id_jabatan`);

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
  MODIFY `id_admin` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id_agenda` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `bidang`
--
ALTER TABLE `bidang`
  MODIFY `id_bidang` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ekstrakurikuler`
--
ALTER TABLE `ekstrakurikuler`
  MODIFY `id_ekstrakurikuler` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id_informasi` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `jabatan_karyawan`
--
ALTER TABLE `jabatan_karyawan`
  MODIFY `id_jabatan` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

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
  MODIFY `id_lingkup_prestasi` int(9) NOT NULL AUTO_INCREMENT;

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
-- AUTO_INCREMENT for table `proker`
--
ALTER TABLE `proker`
  MODIFY `id_proker` int(9) NOT NULL AUTO_INCREMENT;

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
  MODIFY `id_sejarah` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `status_dibaca`
--
ALTER TABLE `status_dibaca`
  MODIFY `id_status_dibaca` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `visi_misi`
--
ALTER TABLE `visi_misi`
  MODIFY `id_visi_misi` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
-- Constraints for table `proker`
--
ALTER TABLE `proker`
  ADD CONSTRAINT `proker_ibfk_1` FOREIGN KEY (`id_bidang`) REFERENCES `bidang` (`id_bidang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `quotes`
--
ALTER TABLE `quotes`
  ADD CONSTRAINT `fk_quotes_karyawan1` FOREIGN KEY (`karyawan_NIPA_karyawan`) REFERENCES `karyawan` (`NIPA_karyawan`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
