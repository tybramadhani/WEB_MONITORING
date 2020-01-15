-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Jan 2020 pada 09.12
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chart_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `jam` datetime DEFAULT NULL,
  `value_1` int(11) DEFAULT NULL,
  `value_2` int(11) DEFAULT NULL,
  `value_3` int(11) DEFAULT NULL,
  `value_4` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `account`
--

INSERT INTO `account` (`id`, `jam`, `value_1`, `value_2`, `value_3`, `value_4`) VALUES
(1, '2020-01-07 01:00:00', 3000, 1000, 1500, 5000),
(2, '2020-01-07 02:00:00', 4000, 900, 1600, 4500),
(3, '2020-01-07 03:00:00', 4500, 1400, 1900, 3500),
(4, '2020-01-07 04:00:00', 4000, 1000, 1500, 2500),
(5, '2020-01-07 05:00:00', 4500, 2000, 4000, 2000),
(6, '2020-01-07 06:00:00', 3000, 2300, 2800, 3500),
(7, '2020-01-07 07:00:00', 5000, 2500, 2000, 2100),
(8, '2020-01-07 08:00:00', 3000, 1500, 2500, 1000),
(9, '2020-01-07 09:00:00', 3800, 2600, 4000, 1700);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
