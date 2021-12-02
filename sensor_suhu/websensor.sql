-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Des 2021 pada 10.17
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `websensor`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mode`
--

CREATE TABLE `mode` (
  `id` int(11) NOT NULL,
  `mode` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mode`
--

INSERT INTO `mode` (`id`, `mode`) VALUES
(1, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sensor`
--

CREATE TABLE `sensor` (
  `id` int(11) NOT NULL,
  `nilai_sensor1` decimal(10,2) NOT NULL,
  `nilai_sensor2` decimal(10,1) NOT NULL,
  `tgl` date NOT NULL,
  `waktu` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sensor`
--

INSERT INTO `sensor` (`id`, `nilai_sensor1`, `nilai_sensor2`, `tgl`, `waktu`) VALUES
(445, '70.00', '88.0', '2021-01-02', '14:57:41'),
(446, '30.00', '88.0', '2021-01-04', '14:57:50'),
(447, '55.00', '89.0', '2021-01-05', '14:58:02'),
(448, '20.00', '89.0', '2021-01-06', '14:58:11'),
(449, '35.00', '71.0', '2021-08-01', '11:36:28'),
(450, '26.00', '75.0', '2021-09-01', '00:00:00'),
(451, '37.00', '51.0', '2021-10-01', '00:00:00'),
(452, '100.00', '84.0', '2021-10-30', '00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mode`
--
ALTER TABLE `mode`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sensor`
--
ALTER TABLE `sensor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mode`
--
ALTER TABLE `mode`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `sensor`
--
ALTER TABLE `sensor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=453;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
