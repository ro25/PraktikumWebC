-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 06 Mei 2020 pada 17.26
-- Versi Server: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `universitas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` int(8) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `fakultas` varchar(20) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `alamat` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `tanggal_lahir`, `fakultas`, `jurusan`, `alamat`) VALUES
(1708501001, 'Nadya Bebi', '1997-03-21', 'FH', 'Ekbis', 'Jakarta'),
(1708501002, 'Adi Winata', '1999-01-23', 'FH', 'Pidana', 'Nganjuk'),
(1708501003, 'Samson Sus', '1998-12-20', 'FH', 'Perdata', 'Jombang'),
(1708501004, 'Bagus Yowe', '1999-02-14', 'FH', 'Perdata', 'Jember'),
(1708501005, 'Bakti Domba', '1998-01-01', 'FH', 'Internasional', 'Garut'),
(1708561049, 'Guruh Rinaldi', '1998-11-25', 'FMIPA', 'Ilkom', 'Jakarta'),
(1708561050, 'Lobo', '1999-11-25', 'FMIPA', 'Kimia', 'Kupang'),
(1708561051, 'Bayu Swarbawa', '1999-08-17', 'FMIPA', 'Fisika', 'Tabanan'),
(1708561052, 'Dede Cornelius', '1999-10-21', 'FMIPA', 'Biologi', 'Karangasem'),
(1708561053, 'Bujang Diky', '1998-07-24', 'FMIPA', 'Matematika', 'Ubung');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
