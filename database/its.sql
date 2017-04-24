-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 24, 2017 at 05:18 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `its`
--

-- --------------------------------------------------------

--
-- Table structure for table `bab`
--

CREATE TABLE `bab` (
  `id_bab` int(10) NOT NULL,
  `id_kategori` int(10) NOT NULL,
  `bab` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bab`
--

INSERT INTO `bab` (`id_bab`, `id_kategori`, `bab`) VALUES
(3, 1, 'Trigonometri');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(10) NOT NULL,
  `kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kategori`) VALUES
(1, 'Matematika');

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `id_level` int(10) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`id_level`, `level`) VALUES
(1, 'superuser'),
(2, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `materi`
--

CREATE TABLE `materi` (
  `id_materi` int(10) NOT NULL,
  `id_kategori` int(10) NOT NULL,
  `id_bab` int(10) NOT NULL,
  `id_tingkatan` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `materi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `materi`
--

INSERT INTO `materi` (`id_materi`, `id_kategori`, `id_bab`, `id_tingkatan`, `nama`, `materi`) VALUES
(4, 1, 3, 1, 'Aljabar', '<p style="line-height: 1;">ssadasd</p><p style="line-height: 1;">asdasdasd</p><p style="line-height: 1;">asdasdasd</p><p style="line-height: 1;"><br></p><p style="line-height: 1;">adsfasdf&nbsp;&nbsp; &nbsp; asdalsdnalsdk&nbsp; &nbsp; lnasdads</p><p style="line-height: 1;"><br></p>');

-- --------------------------------------------------------

--
-- Table structure for table `soal`
--

CREATE TABLE `soal` (
  `id_soal` int(10) NOT NULL,
  `id_materi` int(10) NOT NULL,
  `id_tingkatan` int(10) NOT NULL,
  `soal` text NOT NULL,
  `opsi_satu` text NOT NULL,
  `opsi_dua` text NOT NULL,
  `opsi_tiga` text NOT NULL,
  `opsi_benar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `soal`
--

INSERT INTO `soal` (`id_soal`, `id_materi`, `id_tingkatan`, `soal`, `opsi_satu`, `opsi_dua`, `opsi_tiga`, `opsi_benar`) VALUES
(2, 4, 1, 'Apakah aljabar itu?', 'asdasd', 'asdasdasd', 'asdasd', 'Benar'),
(3, 4, 1, 'Aljabar ditemukan oleh siapa dan tahun berapa?', 'assdasdasd', 'assdasdasd', 'asdadasd', 'asdassdasd');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id_test` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `tgl_test` varchar(50) NOT NULL,
  `skor` int(50) NOT NULL,
  `jumlah_benar` int(10) NOT NULL,
  `jumlah_salah` int(10) NOT NULL,
  `tipe` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tingkatan`
--

CREATE TABLE `tingkatan` (
  `id_tingkatan` int(10) NOT NULL,
  `tingkatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tingkatan`
--

INSERT INTO `tingkatan` (`id_tingkatan`, `tingkatan`) VALUES
(1, 'Easy'),
(2, 'Medium'),
(3, 'Expert');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tgl_lahir` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `id_level` int(10) NOT NULL,
  `id_tingkatan` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `tgl_lahir`, `jenis_kelamin`, `email`, `username`, `password`, `id_level`, `id_tingkatan`) VALUES
(1, 'Hilmi', '1996-11-15', 'Laki-laki', 'hilmihafid@gmail.com', 'mhmmdhlmhfd', '_bismillah99', 2, NULL),
(2, 'Fadhil', '1996-11-15', 'Laki-laki', 'fadhil@gmail.com', 'fadhil', 'fadhil', 1, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bab`
--
ALTER TABLE `bab`
  ADD PRIMARY KEY (`id_bab`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `materi`
--
ALTER TABLE `materi`
  ADD PRIMARY KEY (`id_materi`),
  ADD KEY `materi_tingkatan_FK` (`id_tingkatan`),
  ADD KEY `id_kategori` (`id_kategori`),
  ADD KEY `id_bab` (`id_bab`);

--
-- Indexes for table `soal`
--
ALTER TABLE `soal`
  ADD PRIMARY KEY (`id_soal`),
  ADD KEY `soal_tingkatan_FK` (`id_tingkatan`),
  ADD KEY `id_materi` (`id_materi`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id_test`),
  ADD KEY `test_user_FK` (`id_user`);

--
-- Indexes for table `tingkatan`
--
ALTER TABLE `tingkatan`
  ADD PRIMARY KEY (`id_tingkatan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `user_tingkatan_FK` (`id_tingkatan`),
  ADD KEY `user_level_FK` (`id_level`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bab`
--
ALTER TABLE `bab`
  MODIFY `id_bab` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `materi`
--
ALTER TABLE `materi`
  MODIFY `id_materi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `soal`
--
ALTER TABLE `soal`
  MODIFY `id_soal` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id_test` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `bab`
--
ALTER TABLE `bab`
  ADD CONSTRAINT `bab_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`);

--
-- Constraints for table `materi`
--
ALTER TABLE `materi`
  ADD CONSTRAINT `materi_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`),
  ADD CONSTRAINT `materi_ibfk_2` FOREIGN KEY (`id_bab`) REFERENCES `bab` (`id_bab`),
  ADD CONSTRAINT `materi_tingkatan_FK` FOREIGN KEY (`id_tingkatan`) REFERENCES `tingkatan` (`id_tingkatan`);

--
-- Constraints for table `soal`
--
ALTER TABLE `soal`
  ADD CONSTRAINT `soal_ibfk_1` FOREIGN KEY (`id_materi`) REFERENCES `materi` (`id_materi`),
  ADD CONSTRAINT `soal_tingkatan_FK` FOREIGN KEY (`id_tingkatan`) REFERENCES `tingkatan` (`id_tingkatan`);

--
-- Constraints for table `test`
--
ALTER TABLE `test`
  ADD CONSTRAINT `test_user_FK` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_level_FK` FOREIGN KEY (`id_level`) REFERENCES `level` (`id_level`),
  ADD CONSTRAINT `user_tingkatan_FK` FOREIGN KEY (`id_tingkatan`) REFERENCES `tingkatan` (`id_tingkatan`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
