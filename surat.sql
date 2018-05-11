-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2018 at 11:22 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `surat`
--

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `no` int(11) NOT NULL,
  `nidn` int(11) NOT NULL,
  `nama_dosen` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`no`, `nidn`, `nama_dosen`) VALUES
(1, 40123131, 'mpas'),
(2, 1231231312, 'at');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `no` int(11) NOT NULL,
  `id_jadwal` varchar(55) NOT NULL,
  `no_matkul` int(11) NOT NULL,
  `no_dosen` int(11) NOT NULL,
  `no_ruangan` int(11) NOT NULL,
  `hari` varchar(10) NOT NULL,
  `jam` int(11) NOT NULL,
  `tahun_akademik` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`no`, `id_jadwal`, `no_matkul`, `no_dosen`, `no_ruangan`, `hari`, `jam`, `tahun_akademik`) VALUES
(1, 'ini id jadwal 1', 3, 1, 1, 'selasa', 14, 2023),
(2, 'ini id jadwal 2', 3, 2, 2, 'jumat', 13, 2020);

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `no` int(3) NOT NULL,
  `id_jurusan` varchar(55) NOT NULL,
  `nama_jurusan` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`no`, `id_jurusan`, `nama_jurusan`) VALUES
(1, 'qqqqq', 'ini nama jurusan'),
(2, 'ini_i', 'ini nama jurusan 2'),
(3, 'ini_i', 'ini nama jurusan 3'),
(4, '12321', 'nama jurusan'),
(5, '12321', 'nama jurusan 5'),
(6, '12312', 'jurusan baru'),
(7, 'asad ', 'sada asda'),
(8, 'asad ', 'sada asda 8'),
(12, '8', '');

-- --------------------------------------------------------

--
-- Table structure for table `matkul`
--

CREATE TABLE `matkul` (
  `no` int(11) NOT NULL,
  `id_matkul` varchar(5) NOT NULL,
  `no_jurusan` int(11) NOT NULL,
  `nama_matkul` varchar(55) NOT NULL,
  `semester` int(11) NOT NULL,
  `sks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matkul`
--

INSERT INTO `matkul` (`no`, `id_matkul`, `no_jurusan`, `nama_matkul`, `semester`, `sks`) VALUES
(1, 'adssa', 1, 'b ind', 4, 8),
(2, 'qqqq', 2, 'b ing', 6, 16),
(3, 'www', 1, 'b sun', 8, 32);

-- --------------------------------------------------------

--
-- Table structure for table `ruangan`
--

CREATE TABLE `ruangan` (
  `no` int(11) NOT NULL,
  `id_ruangan` int(11) NOT NULL,
  `nama_ruangan` varchar(55) NOT NULL,
  `lantai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ruangan`
--

INSERT INTO `ruangan` (`no`, `id_ruangan`, `nama_ruangan`, `lantai`) VALUES
(1, 0, 'asd', 666),
(2, 2121, 'nama 2121', 2121);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `matkul`
--
ALTER TABLE `matkul`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `ruangan`
--
ALTER TABLE `ruangan`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `no` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `matkul`
--
ALTER TABLE `matkul`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ruangan`
--
ALTER TABLE `ruangan`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
