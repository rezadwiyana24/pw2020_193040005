-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Bulan Mei 2020 pada 11.13
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
-- Database: `tubes_193040005`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pakaian`
--

CREATE TABLE `pakaian` (
  `id` int(11) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `merk` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `harga` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pakaian`
--

INSERT INTO `pakaian` (`id`, `photo`, `type`, `merk`, `alamat`, `harga`) VALUES
(1, 'gucci1.jfif', 'T-shirt', 'Gucci', 'Jln.anggrek No.45', 5000000),
(2, 'gucci2.jfif', 'T-shirt', 'Gucci', 'Jln.anggrek No.45', 5450000),
(3, 'hm.jfif', 'T-shirt', 'H&M', 'jln.Mawar No.71', 800000),
(4, 'hm2.jfif', 'Hoodie', 'H&M', 'jln.Mawar No.71', 850000),
(5, 'pull.jfif', 'Hoodie', 'PULL AND BEER', 'jln.Mawar No.71\r\n', 900000),
(6, 'pull2.jfif', 'T-shirt', 'PULL AND BEER', 'jln.Mawar No.71\r\n', 800000),
(7, 'green.jfif', 'Hoodie', 'GreenLight', 'jln.sukasari No.110', 650000),
(8, 'green2.jfif', 'T-shirt', 'GreenLight', 'jln.sukasari No.110', 500000),
(9, 'Queen2.jfif', 'Hoodie', 'QueenBeer', 'jln.bengawan No.21', 400000),
(10, 'queen.jfif', 'T-shirt', 'QueenBeer', 'jln.bengawan No.21', 350000);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pakaian`
--
ALTER TABLE `pakaian`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pakaian`
--
ALTER TABLE `pakaian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
