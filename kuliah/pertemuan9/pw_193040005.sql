-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Apr 2020 pada 09.25
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
  `nama` varchar(100) NOT NULL,
  `nrp` int(9) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nrp`, `email`, `jurusan`, `gambar`) VALUES
(1, 'Reza Dwiyana', 193040005, 'reza@yahoo.com', 'Teknik Informatika', 'Reza.png'),
(2, 'Yusril azi', 193040024, 'aji@yahoo.com', 'Teknik Informatika', 'aji.png'),
(3, 'Alwi Ramadhan', 193040023, 'alwi@yahoo.co.id', 'Teknik Informatika', 'alwi.jpg'),
(4, 'agung', 193040033, 'agung@yahoo.com', 'Teknik Informatika', 'agung.png'),
(5, 'rizky', 193040025, 'rizky@yahoo.com', 'Teknik Informatika', 'rizky.png'),
(6, 'riky', 193040008, 'riky@yahoo.co.id', 'Teknik Informatika', 'riky.jpg'),
(7, 'saputra', 193040034, 'saputra@gmail.com', 'Teknik informatika', 'sapu.png'),
(8, 'viru', 193040045, 'viru@gmail.com', 'Teknik Informatika', 'viru.jpg'),
(9, 'fauzan kamal', 193040012, 'ojan@yahoo.com', 'Teknik informatika', 'ojan.jpg'),
(10, 'ariq ', 193040017, 'ariq@yahoo.com', 'Teknik Informatika', 'ariq.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
