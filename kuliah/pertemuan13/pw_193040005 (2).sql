-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Bulan Mei 2020 pada 09.39
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_193040005`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nrp` int(9) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `gambar`, `nama`, `nrp`, `email`, `jurusan`) VALUES
(1, 'reza.jpeg', 'Reza Dwiyana Witrianto', 193040005, 'rezadwiyana@gmail.com', 'Teknik Informatika'),
(2, 'ajii.jpeg', 'Yusril Ismail Azi', 193040024, 'yusrilazi@gmail.com', 'Teknik Informatika'),
(3, 'Alwi.jpeg', 'M. Alwi Ramadhan', 193040023, 'ramadhanalwi@gmail.com', 'Teknik Informatika'),
(4, 'agung.jpeg', 'Agung Gumelar', 193040005, 'agung.08@gmail.com', 'Teknik Informatika'),
(5, 'kiki.jpeg', 'M. Rizky Ramdhani', 193040013, 'rizky2001@gmail.com', 'Teknik Informatika'),
(6, 'ijoy.jpeg', 'M. Rizky Fauzan', 193040021, 'kijoy021@gmail.com', 'Teknik Informatika'),
(7, 'aji.jpeg', 'aji fattah', 193040009, 'ajifattah@gmail.com', 'Teknik Informatika'),
(8, 'daffa.jpeg', 'Daffa Akhdan', 193040022, 'daffa2001@gmail.com', 'Teknik Informatika'),
(9, 'opik.jpeg', 'Taufik Hidayat', 193040033, 'taufikhidayat@gmail.com', 'Teknik Informatika'),
(10, 'ilham.jpeg', 'Muhammad Ilham ', 193040030, 'ilhammuhammad@gmail.com', 'Teknik Informatika');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(100) NOT NULL,
  `usename` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `usename`, `password`) VALUES
(1, 'reza2408', 'reza2408');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
