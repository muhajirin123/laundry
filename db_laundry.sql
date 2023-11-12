-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2023 at 03:48 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_laundry`
--

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_status` int(11) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`id_status`, `status`) VALUES
(1, 'Booking'),
(2, 'Proses'),
(4, 'Selesai'),
(5, 'Diterima');

-- --------------------------------------------------------

--
-- Table structure for table `sensor`
--

CREATE TABLE `sensor` (
  `nilai_sensor` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_boking`
--

CREATE TABLE `tb_boking` (
  `id_boking` int(11) NOT NULL,
  `id_daftar` int(11) NOT NULL,
  `kode_pemesanan` int(100) NOT NULL,
  `jenis` enum('Satuan','Kiloan') NOT NULL,
  `jasa` enum('Cuci Basah','Cuci Kering','Cuci Setrika','Setrika') NOT NULL,
  `tgl_pemesanan` date NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Boking'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_boking`
--

INSERT INTO `tb_boking` (`id_boking`, `id_daftar`, `kode_pemesanan`, `jenis`, `jasa`, `tgl_pemesanan`, `status`) VALUES
(24, 17, 1, 'Kiloan', 'Cuci Setrika', '2022-12-13', 'Proses'),
(25, 19, 0, 'Satuan', 'Cuci Basah', '2022-12-18', 'Proses'),
(32, 26, 0, 'Kiloan', 'Cuci Kering', '2022-12-19', 'Proses'),
(34, 29, 0, 'Satuan', 'Cuci Basah', '2023-02-02', 'Proses');

-- --------------------------------------------------------

--
-- Table structure for table `tb_daftar`
--

CREATE TABLE `tb_daftar` (
  `id_daftar` int(11) NOT NULL,
  `nama_pelanggan` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password_pelanggan` varchar(100) NOT NULL,
  `kontak_pelanggan` int(100) NOT NULL,
  `alamat_pelanggan` varchar(100) NOT NULL,
  `level` enum('pelanggan','pegawai','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_daftar`
--

INSERT INTO `tb_daftar` (`id_daftar`, `nama_pelanggan`, `username`, `password_pelanggan`, `kontak_pelanggan`, `alamat_pelanggan`, `level`) VALUES
(17, 'Kelvin', 'Kelvin', '123', 123, 'surabaya', 'pelanggan'),
(18, 'Putra1', 'Putra', '123', 81, 'Mojokerto', 'pegawai'),
(19, 'wildan', 'wildan', '222', 121, 'sby', 'pelanggan'),
(20, 'joko', 'badri1123', '234', 81, 'sby1', 'admin'),
(21, 'Saya', 'saya', '1010', 891, 'Keputih', 'admin'),
(25, '12', '1', '1', 1, '1', 'pegawai'),
(26, 'Kresna', 'Kresna11', 'maestro', 812, 'Sby', 'pelanggan'),
(27, '1111112', '11', '11111', 67, '28', 'admin'),
(28, 'rahmat', 'rahmat123', '12345', 81, 'surabaya', 'pelanggan'),
(29, 'Hendra', 'hendra123', 'hendra', 12345, 'surabaya', 'pelanggan'),
(30, 'rachma', 'rachma123', '123', 81, 'Sidoarjo', 'pelanggan'),
(31, 'hIAHi', 'uni', 'NIK', 987, 'banska', 'pelanggan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_data`
--

CREATE TABLE `tb_data` (
  `id_data` int(11) NOT NULL,
  `kode_pemesanan` varchar(100) NOT NULL,
  `tgl_ambil` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_detail_pesanan`
--

CREATE TABLE `tb_detail_pesanan` (
  `id_boking` int(11) NOT NULL,
  `tgl_antar` date NOT NULL,
  `jasa` varchar(255) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `berat` int(100) NOT NULL,
  `biaya_ambil` int(100) NOT NULL,
  `biaya_antar` int(100) NOT NULL,
  `bayar` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_detail_pesanan`
--

INSERT INTO `tb_detail_pesanan` (`id_boking`, `tgl_antar`, `jasa`, `jenis`, `berat`, `biaya_ambil`, `biaya_antar`, `bayar`) VALUES
(0, '2022-12-18', 'Cuci Setrika', 'Kiloan', 2, 2000, 2000, 14000),
(24, '2022-12-18', 'Cuci Setrika', 'Kiloan', 1, 2000, 1000, 8000),
(24, '2022-12-18', 'Cuci Setrika', 'Kiloan', 2, 2000, 2000, 14000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_detail_transaksi`
--

CREATE TABLE `tb_detail_transaksi` (
  `id_detail_transaksi` int(11) NOT NULL,
  `kode_pemesanan` varchar(100) NOT NULL,
  `tgl_ambil` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_harga`
--

CREATE TABLE `tb_harga` (
  `jasa` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_harga`
--

INSERT INTO `tb_harga` (`jasa`, `harga`) VALUES
('Cuci Basah', 2000),
('Cuci Kering', 3000),
('Cuci Setrika', 5000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pegawai`
--

CREATE TABLE `tb_pegawai` (
  `id_pegawai` int(36) NOT NULL,
  `nama_pegawai` varchar(100) NOT NULL,
  `bagian_pegawai` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_pegawai`
--

INSERT INTO `tb_pegawai` (`id_pegawai`, `nama_pegawai`, `bagian_pegawai`) VALUES
(22, 'Kelvin', 'Pilih...'),
(23, 'ac', 'Pilih...'),
(24, 'Kelvin', 'Karyawan'),
(25, 'e', '2'),
(26, '', ''),
(27, '', ''),
(28, '', ''),
(29, '', ''),
(30, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pelanggan`
--

CREATE TABLE `tb_pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `nama_pelanggan` text NOT NULL,
  `password_pelanggan` varchar(100) NOT NULL,
  `jenis_kelamin_pelanggan` varchar(100) NOT NULL,
  `kontak_pelanggan` int(100) NOT NULL,
  `alamat_pelanggan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pesanan`
--

CREATE TABLE `tb_pesanan` (
  `id_pesanan` int(36) NOT NULL,
  `kode_pemesanan` varchar(100) NOT NULL,
  `nama_pelanggan` text NOT NULL,
  `kontak_pelanggan` int(100) NOT NULL,
  `alamat_pelanggan` varchar(200) NOT NULL,
  `tanggal_pemesanan` date NOT NULL,
  `status` enum('Boking','Proses','Selesai','Diterima') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_pesanan`
--

INSERT INTO `tb_pesanan` (`id_pesanan`, `kode_pemesanan`, `nama_pelanggan`, `kontak_pelanggan`, `alamat_pelanggan`, `tanggal_pemesanan`, `status`) VALUES
(1, '123', 'fir', 123, '13', '2022-12-09', ''),
(2, '123', 'Firman', 123, 'sby', '2022-12-18', 'Boking');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_status`);

--
-- Indexes for table `tb_boking`
--
ALTER TABLE `tb_boking`
  ADD PRIMARY KEY (`id_boking`),
  ADD KEY `id_daftar` (`id_daftar`);

--
-- Indexes for table `tb_daftar`
--
ALTER TABLE `tb_daftar`
  ADD PRIMARY KEY (`id_daftar`);

--
-- Indexes for table `tb_data`
--
ALTER TABLE `tb_data`
  ADD PRIMARY KEY (`id_data`);

--
-- Indexes for table `tb_detail_transaksi`
--
ALTER TABLE `tb_detail_transaksi`
  ADD PRIMARY KEY (`id_detail_transaksi`);

--
-- Indexes for table `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD PRIMARY KEY (`id_pesanan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_boking`
--
ALTER TABLE `tb_boking`
  MODIFY `id_boking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `tb_daftar`
--
ALTER TABLE `tb_daftar`
  MODIFY `id_daftar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tb_data`
--
ALTER TABLE `tb_data`
  MODIFY `id_data` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_detail_transaksi`
--
ALTER TABLE `tb_detail_transaksi`
  MODIFY `id_detail_transaksi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  MODIFY `id_pegawai` int(36) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  MODIFY `id_pesanan` int(36) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_boking`
--
ALTER TABLE `tb_boking`
  ADD CONSTRAINT `tb_boking_ibfk_1` FOREIGN KEY (`id_daftar`) REFERENCES `tb_daftar` (`id_daftar`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
