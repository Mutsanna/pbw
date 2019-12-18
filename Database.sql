-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Waktu pembuatan: 18 Des 2019 pada 09.46
-- Versi server: 5.7.23
-- Versi PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `Tugas_pbw`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_hp`
--

CREATE TABLE `data_hp` (
  `id_hp` int(5) NOT NULL,
  `merek` varchar(20) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `warna` varchar(20) NOT NULL,
  `stok` int(11) NOT NULL,
  `harga` int(15) NOT NULL,
  `foto` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `data_hp`
--

INSERT INTO `data_hp` (`id_hp`, `merek`, `nama`, `warna`, `stok`, `harga`, `foto`) VALUES
(1, 'Samsung', 'A50s', 'Hijau', 1000, 3579900, ''),
(2, 'Xiaomi', 'Redmi Note 5', 'Silver', 1000, 2599900, ''),
(3, 'Oppo', 'OPPO A2020', 'Hijau, Merah, Biru', 90, 4500000, ''),
(5, 'Apple', 'Iphone 11', 'Hijau', 10, 1100000, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'mutsanna', '63a9f0ea7bb98050796b649e85481845');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_hp`
--
ALTER TABLE `data_hp`
  ADD PRIMARY KEY (`id_hp`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_hp`
--
ALTER TABLE `data_hp`
  MODIFY `id_hp` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;