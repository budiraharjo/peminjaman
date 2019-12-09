-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2019 at 12:40 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `peminjaman`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `kode_barang` varchar(30) NOT NULL,
  `nama_alsin` varchar(100) NOT NULL,
  `jumlah_tersedia` int(15) NOT NULL,
  `jumlah_dipinjam` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`kode_barang`, `nama_alsin`, `jumlah_tersedia`, `jumlah_dipinjam`) VALUES
('BRG001', 'Traktor', 15, 0),
('BRG002', 'Doser', 5, 0);

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `kode_pinjam` int(15) NOT NULL,
  `nama_peminjam` varchar(35) NOT NULL,
  `alamat_peminjam` text NOT NULL,
  `alat_yangdipinjam` text NOT NULL,
  `kode_barang` varchar(30) NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  `lama` int(30) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`kode_pinjam`, `nama_peminjam`, `alamat_peminjam`, `alat_yangdipinjam`, `kode_barang`, `tanggal_pinjam`, `lama`, `keterangan`) VALUES
(16, 'Andri', 'Kp. Kadu dampit cikeusik ', 'Traktor', 'BRG001', '2019-11-28', 30, 'f<br>'),
(17, 'Ucup', 'Cisaruan ', 'Doser', 'BRG002', '2019-11-28', 3, 'ff<br>');

-- --------------------------------------------------------

--
-- Table structure for table `pengembalian`
--

CREATE TABLE `pengembalian` (
  `kode_kembali` int(15) NOT NULL,
  `nama_peminjam` varchar(35) NOT NULL,
  `alamat_peminjam` text NOT NULL,
  `alat_yangdipinjam` text NOT NULL,
  `kode_barang` varchar(30) NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  `jml_hari` int(30) NOT NULL,
  `keterangan` text NOT NULL,
  `tanggal_pengembalian` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `kode_user` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `kelamin` varchar(15) NOT NULL,
  `gapoktan` varchar(50) NOT NULL,
  `tahun_berdiri` varchar(10) NOT NULL,
  `alamat` text NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `level` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`kode_user`, `nama`, `kelamin`, `gapoktan`, `tahun_berdiri`, `alamat`, `username`, `password`, `level`) VALUES
(1, 'admin', 'laki-laki', 'admin', '2014', 'Pandeglang', 'admin', 'admin', 'Admin'),
(2, 'Andri', 'laki-laki', 'Karya Mandiri Utama', '2018', 'Kp. Kadu dampit cikeusik', 'admina', 'admina', 'User'),
(3, 'Ucup', 'Laki-laki', 'Ucup Suadah', '216', 'Cisaruan', 'ucup', 'ucup', 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`kode_barang`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`kode_pinjam`);

--
-- Indexes for table `pengembalian`
--
ALTER TABLE `pengembalian`
  ADD PRIMARY KEY (`kode_kembali`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`kode_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `kode_pinjam` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `pengembalian`
--
ALTER TABLE `pengembalian`
  MODIFY `kode_kembali` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `kode_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
