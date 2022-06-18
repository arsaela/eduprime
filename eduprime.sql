-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Okt 2021 pada 14.58
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eduprime`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `potensi_siswa`
--

CREATE TABLE `potensi_siswa` (
  `id_potensi_siswa` int(11) NOT NULL,
  `nama_potensi` varchar(255) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `potensi_siswa`
--

INSERT INTO `potensi_siswa` (`id_potensi_siswa`, `nama_potensi`, `jumlah`) VALUES
(1, 'Professional', 3000),
(2, 'Entrepreneur', 7000),
(3, 'Lanjut Study', 5500);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `potensi_siswa`
--
ALTER TABLE `potensi_siswa`
  ADD PRIMARY KEY (`id_potensi_siswa`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `potensi_siswa`
--
ALTER TABLE `potensi_siswa`
  MODIFY `id_potensi_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
