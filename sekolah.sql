-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2020 at 11:53 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sekolah`
--
CREATE DATABASE IF NOT EXISTS `sekolah` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `sekolah`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(25) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `email`, `password`) VALUES
(10001, 'admin@gmail.com', '$2y$10$YfETYRa0XP1DBBsZ0FMhCO1Y.WBxwUurcdY59Ly9Xh/0fYTgXi2X.'),
(11001, 'admin1@gmail.com', '$2y$10$fFVpcq2wp67htP.Q1iVcDu/V5DKSiNxsdJoDpFQdyRi6hA0ELRMTS'),
(12001, 'admin2@gmail.com', '$2y$10$3Y95GdFLaje808VdOq.XbevoWzJLu2li44S.jpKL1Bw6//roGDIWy'),
(13001, 'admin3@gmail.com', '$2y$10$.Mek5GHU6buPexjn4Wktq.j/gFZodmly3ZMllH3ygnIpzRL1X5Osm');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `NUPTK` int(25) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `MataPelajaran` varchar(100) NOT NULL,
  `NoTelefon` varchar(100) NOT NULL,
  `Alamat` varchar(100) NOT NULL,
  `JenisKelamin` varchar(100) NOT NULL,
  `id_admin` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`NUPTK`, `Nama`, `MataPelajaran`, `NoTelefon`, `Alamat`, `JenisKelamin`, `id_admin`) VALUES
(20001, 'Dadan Kurniawa', 'PPKn', '081100000000', 'Bandung', 'Laki-Laki', 10001),
(20002, 'Dani', 'Agama', '081200000000', 'Bandung', 'Laki-Laki', 10001);

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id_karyawan` int(25) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `RanahKerja` varchar(100) NOT NULL,
  `NoTelefon` varchar(100) NOT NULL,
  `Alamat` varchar(100) NOT NULL,
  `JenisKelamin` varchar(100) NOT NULL,
  `id_admin1` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id_karyawan`, `Nama`, `RanahKerja`, `NoTelefon`, `Alamat`, `JenisKelamin`, `id_admin1`) VALUES
(30001, 'Baul', 'Caraka', '081300000000', 'Bandung', 'Laki-Laki', 11001),
(30002, 'Thomas', 'Fotocopy', '081400000000', 'Jakarta Selatan', 'Laki-Laki', 11001);

-- --------------------------------------------------------

--
-- Table structure for table `pengurus`
--

CREATE TABLE `pengurus` (
  `id_pengurus` int(25) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `Jabatan` varchar(100) NOT NULL,
  `NoTelefon` varchar(100) NOT NULL,
  `Alamat` varchar(100) NOT NULL,
  `JenisKelamin` varchar(100) NOT NULL,
  `id_admin2` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengurus`
--

INSERT INTO `pengurus` (`id_pengurus`, `Nama`, `Jabatan`, `NoTelefon`, `Alamat`, `JenisKelamin`, `id_admin2`) VALUES
(40001, 'Deden Suryadi', 'Kepala Sekolah', '081500000000', 'Jakarta Pusat', 'Laki-Laki', 12001),
(40002, 'Heru', 'Wakil Kepala Sekolah', '08160000000', 'Bandung', 'Perempuan', 12001);

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `NIS` int(25) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `TahunMasuk` varchar(100) NOT NULL,
  `NoTelefon` varchar(100) NOT NULL,
  `Alamat` varchar(100) NOT NULL,
  `JenisKelamin` varchar(100) NOT NULL,
  `id_admin3` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`NIS`, `Nama`, `TahunMasuk`, `NoTelefon`, `Alamat`, `JenisKelamin`, `id_admin3`) VALUES
(50001, 'Farhan', '2019', '087821277530', 'Bandung', 'Laki-Laki', 13001),
(50002, 'Raihan Fatoni', '2019', '081288911410', 'Tangerang Selatan', 'Laki-Laku', 13001);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`NUPTK`),
  ADD KEY `fk_id_admin` (`id_admin`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id_karyawan`),
  ADD KEY `fk_id_admin1` (`id_admin1`);

--
-- Indexes for table `pengurus`
--
ALTER TABLE `pengurus`
  ADD PRIMARY KEY (`id_pengurus`),
  ADD KEY `fk_id_admin2` (`id_admin2`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`NIS`),
  ADD KEY `fk_id_admin3` (`id_admin3`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13003;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `guru`
--
ALTER TABLE `guru`
  ADD CONSTRAINT `guru_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`);

--
-- Constraints for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD CONSTRAINT `karyawan_ibfk_1` FOREIGN KEY (`id_admin1`) REFERENCES `admin` (`id_admin`);

--
-- Constraints for table `pengurus`
--
ALTER TABLE `pengurus`
  ADD CONSTRAINT `pengurus_ibfk_1` FOREIGN KEY (`id_admin2`) REFERENCES `admin` (`id_admin`);

--
-- Constraints for table `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `siswa_ibfk_1` FOREIGN KEY (`id_admin3`) REFERENCES `admin` (`id_admin`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
