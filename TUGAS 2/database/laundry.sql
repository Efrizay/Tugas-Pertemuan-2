-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Mar 2022 pada 11.05
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_laundry`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_karyawan`
--

CREATE TABLE `tbl_karyawan` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `catatan` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_karyawan`
--

INSERT INTO `tbl_karyawan` (`id`, `nama`, `username`, `password`, `email`, `no_hp`, `alamat`, `catatan`, `image`, `role`) VALUES
(1, 'Efriza Yunardi', 'admin', '123456', 'admin@laundryku.com', '089501341066', 'Cirebon', 'Saya seorang admin', '', 'Admin'),
(2, 'Santi', 'admin1', '335566', 'admin1@gmail.com', '081234567890', 'Cirebon', 'Saya adalah pengatar cucian', '', 'Karyawan'),
(3, 'Hidayat', 'admin2', '346798', 'admin2@gmail.con', '083895873241', 'Indramayu', 'Saya adalah bagian pencucian', '', 'Karyawan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_paket`
--

CREATE TABLE `tbl_paket` (
  `id` varchar(10) NOT NULL,
  `paket` varchar(100) NOT NULL,
  `harga_kilo` int(11) NOT NULL,
  `deskripsi` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_paket`
--

INSERT INTO `tbl_paket` (`id`, `paket`, `harga_kilo`, `deskripsi`) VALUES
('001', 'Serba Murah', 5000, 'Selesai 3 hari = Cuci + Kering Setrika'),
('002', 'Cuci Komplit', 8000, 'Selesai 1 hari = Cuci + Kering + Setrika'),
('003', 'Setrika', 5000, 'Selesai 1 hari'),
('006', 'Cuci Ekspres', 15000, 'Selesai 6 jam = Cuci + Kering + Setrika'),
('007', 'Cuci Kilat', 25000, 'Selesai 3 jam = Komplit'),

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pelanggan`
--

CREATE TABLE `tbl_pelanggan` (
  `id` varchar(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_hp` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pelanggan`
--

INSERT INTO `tbl_pelanggan` (`id`, `nama`, `alamat`, `no_hp`) VALUES
('PLG001', 'Yanto', 'Cipto', '081155879987'),
('PLG002', 'Maliki', 'Sindang Laut', '082147958899'),
('PLG003', 'Dimas', 'Wahidin', '084758384758'),
('PLG004', 'Viky', 'Kartini', '083689000890'),
('PLG005', 'Tiara', 'Kesambi', '085897444675'),

-- --------------------------------------------------------

--
-- Indeks untuk tabel `tbl_karyawan`
--
ALTER TABLE `tbl_karyawan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_paket`
--
ALTER TABLE `tbl_paket`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_pelanggan`
--
ALTER TABLE `tbl_pelanggan`
  ADD PRIMARY KEY (`id`);


--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_karyawan`
--
ALTER TABLE `tbl_karyawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;