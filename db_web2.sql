-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2023 at 01:49 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_web2`
--

-- --------------------------------------------------------

--
-- Table structure for table `dt_dvd`
--

CREATE TABLE `dt_dvd` (
  `id_dvd` varchar(50) NOT NULL,
  `nama_dvd` varchar(50) NOT NULL,
  `harga` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dt_dvd`
--

INSERT INTO `dt_dvd` (`id_dvd`, `nama_dvd`, `harga`) VALUES
('dvd_014', 'Iron Man 2', 250000),
('dvd_015', 'Fast 7', 150000),
('dvd_016', 'Expenable 3', 300000),
('dvd_017', 'Fast V', 200000),
('dvd_018', 'Iron Man 3', 350000);

-- --------------------------------------------------------

--
-- Table structure for table `dt_pelanggan`
--

CREATE TABLE `dt_pelanggan` (
  `id_pelanggan` varchar(50) NOT NULL,
  `nama_pelanggan` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_telp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dt_pelanggan`
--

INSERT INTO `dt_pelanggan` (`id_pelanggan`, `nama_pelanggan`, `alamat`, `no_telp`) VALUES
('0201', 'solihin', 'Jl. Tanah merdka', '08979986857'),
('0202', 'Diky', 'Jl. Arus', '08978658378'),
('0203', 'Gatot', 'Jl. Centex', '08976577463'),
('0204', 'Abi ', 'Jl. Salak', '0897986598765'),
('0205', 'Dian', 'Jl. Mawar', '08979876862'),
('0206', 'Eka', 'Jl. Suci', '08978657986');

-- --------------------------------------------------------

--
-- Table structure for table `dt_rental`
--

CREATE TABLE `dt_rental` (
  `id_pelanggan` varchar(50) NOT NULL,
  `nama_pelanggan` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_telp` varchar(50) NOT NULL,
  `id_dvd` varchar(50) NOT NULL,
  `nama_dvd` varchar(50) NOT NULL,
  `harga` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dt_rental`
--

INSERT INTO `dt_rental` (`id_pelanggan`, `nama_pelanggan`, `alamat`, `no_telp`, `id_dvd`, `nama_dvd`, `harga`) VALUES
('0201', 'solihin', 'Jl. Tanah merdka', '08979986857', 'dvd_015', 'Fast V', '200000'),
('0202', 'diky', 'Jl. Arus ', '08978658378', 'dvd_014', 'Iron Man 2', '250000'),
('0203', 'Gatot', 'Jl. Centex', '08976577463', 'dvd_020', 'Fast 9', '200000'),
('0204', 'Abi ', 'Jl. Salak', '0897986598765', 'dvd_018', 'Iron Man 3', '350000');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('[admin]', '[12345]');

-- --------------------------------------------------------

--
-- Table structure for table `mhs`
--

CREATE TABLE `mhs` (
  `npm` varchar(15) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_telp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mhs`
--

INSERT INTO `mhs` (`npm`, `nama`, `alamat`, `no_telp`) VALUES
('202043500451', 'Syahrul', 'Jl. Tanah merdka', '08979986857');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pelanggan`
--

CREATE TABLE `tbl_pelanggan` (
  `id_pelanggan` varchar(12) NOT NULL,
  `nama` varchar(35) DEFAULT NULL,
  `alamat` varchar(15) DEFAULT NULL,
  `no_telp` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pelanggan`
--

INSERT INTO `tbl_pelanggan` (`id_pelanggan`, `nama`, `alamat`, `no_telp`) VALUES
('0201', 'Syahrul', 'Jl. Arus ', 12323);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pesanan`
--

CREATE TABLE `tbl_pesanan` (
  `kode_pesanan` varchar(6) NOT NULL,
  `id_pelanggan` varchar(12) NOT NULL,
  `tanggal` varchar(20) DEFAULT NULL,
  `harga_paket` int(10) DEFAULT NULL,
  `berat_paket` int(10) DEFAULT NULL,
  `total_biaya` int(10) DEFAULT NULL,
  `status` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pesanan`
--

INSERT INTO `tbl_pesanan` (`kode_pesanan`, `id_pelanggan`, `tanggal`, `harga_paket`, `berat_paket`, `total_biaya`, `status`) VALUES
('111', '003', '14 juni 2023', 0, 3, NULL, 0),
('222', '0004', '15 juni 2023', 0, 2, NULL, 0),
('444', '001', '12 juni 2023', 0, 5, NULL, 0),
('555', '002', '13 juni 2023', 0, 4, NULL, 0),
('666', '002', '16 juni 2023', 0, 5, NULL, 0),
('999', '005', '17 juni 2023', 0, 4, NULL, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dt_dvd`
--
ALTER TABLE `dt_dvd`
  ADD PRIMARY KEY (`id_dvd`);

--
-- Indexes for table `dt_pelanggan`
--
ALTER TABLE `dt_pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `mhs`
--
ALTER TABLE `mhs`
  ADD PRIMARY KEY (`npm`);

--
-- Indexes for table `tbl_pelanggan`
--
ALTER TABLE `tbl_pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `tbl_pesanan`
--
ALTER TABLE `tbl_pesanan`
  ADD PRIMARY KEY (`kode_pesanan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
