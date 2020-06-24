-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 24 Jun 2020 pada 06.08
-- Versi Server: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_terucilampung`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_login`
--

CREATE TABLE `tb_login` (
  `id_user` int(11) NOT NULL,
  `username` char(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_member`
--

CREATE TABLE `tb_member` (
  `id_teruci` char(4) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `panggilan` varchar(35) NOT NULL,
  `tempat_lahir` varchar(35) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` enum('P','L') DEFAULT NULL,
  `no_hp` char(13) NOT NULL,
  `email` char(35) NOT NULL,
  `alamat_rumah` text NOT NULL,
  `kab_kota` varchar(25) NOT NULL,
  `no_pol` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_mobil`
--

CREATE TABLE `tb_mobil` (
  `no_pol` varchar(11) NOT NULL,
  `tgl_stnk` date NOT NULL,
  `type_kendaraan` enum('terlampir') DEFAULT NULL,
  `warna_kendaraan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tb_member`
--
ALTER TABLE `tb_member`
  ADD PRIMARY KEY (`id_teruci`),
  ADD KEY `no_pol` (`no_pol`);

--
-- Indexes for table `tb_mobil`
--
ALTER TABLE `tb_mobil`
  ADD PRIMARY KEY (`no_pol`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_member`
--
ALTER TABLE `tb_member`
  ADD CONSTRAINT `tb_member_ibfk_1` FOREIGN KEY (`no_pol`) REFERENCES `tb_mobil` (`no_pol`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
