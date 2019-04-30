-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 10 Feb 2019 pada 07.41
-- Versi server: 5.7.25
-- Versi PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ummenerg_islamic`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mjd_infaq`
--

CREATE TABLE `mjd_infaq` (
  `id_infaq` int(11) NOT NULL,
  `category` varchar(65) NOT NULL,
  `total` varchar(65) NOT NULL,
  `info` varchar(65) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mjd_jamaah`
--

CREATE TABLE `mjd_jamaah` (
  `id_jamaah` int(11) NOT NULL,
  `name` varchar(65) NOT NULL,
  `email` varchar(65) NOT NULL,
  `telephone` varchar(65) NOT NULL,
  `gender` varchar(65) NOT NULL,
  `address` varchar(65) NOT NULL,
  `city` varchar(65) NOT NULL,
  `province` varchar(65) NOT NULL,
  `country` varchar(65) NOT NULL,
  `postcode` varchar(65) NOT NULL,
  `information` varchar(65) NOT NULL,
  `lat` varchar(65) NOT NULL,
  `lon` varchar(65) NOT NULL,
  `date_insert` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mjd_mosque`
--

CREATE TABLE `mjd_mosque` (
  `id_mosque` int(11) NOT NULL,
  `name` varchar(65) NOT NULL,
  `email` varchar(65) NOT NULL,
  `phone` varchar(65) NOT NULL,
  `address` varchar(200) NOT NULL,
  `city` varchar(65) NOT NULL,
  `province` varchar(65) NOT NULL,
  `country` varchar(65) NOT NULL,
  `postcode` varchar(65) NOT NULL,
  `lat` varchar(65) NOT NULL,
  `lon` varchar(65) NOT NULL,
  `motto` varchar(600) NOT NULL,
  `slider_pic` varchar(65) NOT NULL,
  `width` varchar(65) NOT NULL,
  `volume` varchar(65) NOT NULL,
  `about_short` varchar(600) NOT NULL,
  `about_long` varchar(600) NOT NULL,
  `greeting` varchar(600) NOT NULL,
  `greeting_pic` varchar(65) NOT NULL,
  `logo` varchar(65) NOT NULL,
  `date_installed` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mjd_news`
--

CREATE TABLE `mjd_news` (
  `id_news` int(11) NOT NULL,
  `title` varchar(65) NOT NULL,
  `category` varchar(65) NOT NULL,
  `content` varchar(300) NOT NULL,
  `date_insert` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mjd_news_category`
--

CREATE TABLE `mjd_news_category` (
  `id_category` int(11) NOT NULL,
  `name` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mjd_takmir`
--

CREATE TABLE `mjd_takmir` (
  `id_takmir` int(11) NOT NULL,
  `name` varchar(65) NOT NULL,
  `position` varchar(65) NOT NULL,
  `date_insert` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mjd_task`
--

CREATE TABLE `mjd_task` (
  `id_task` int(11) NOT NULL,
  `title` varchar(65) NOT NULL,
  `people` varchar(65) NOT NULL,
  `information` varchar(300) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mjd_users`
--

CREATE TABLE `mjd_users` (
  `id_users` int(11) NOT NULL,
  `username` varchar(65) NOT NULL,
  `email` varchar(65) NOT NULL,
  `first_name` varchar(65) NOT NULL,
  `last_name` varchar(65) NOT NULL,
  `password` char(128) NOT NULL,
  `salt` char(128) NOT NULL,
  `phone` varchar(65) NOT NULL,
  `address` varchar(65) NOT NULL,
  `city` varchar(65) NOT NULL,
  `province` varchar(65) NOT NULL,
  `country` varchar(65) NOT NULL,
  `postcode` varchar(65) NOT NULL,
  `date_joined` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mjd_zakat`
--

CREATE TABLE `mjd_zakat` (
  `id_zakat` int(11) NOT NULL,
  `name` varchar(65) NOT NULL,
  `total` varchar(65) NOT NULL,
  `info` varchar(65) NOT NULL,
  `category` varchar(65) NOT NULL,
  `date_insert` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mjd_infaq`
--
ALTER TABLE `mjd_infaq`
  ADD PRIMARY KEY (`id_infaq`);

--
-- Indeks untuk tabel `mjd_jamaah`
--
ALTER TABLE `mjd_jamaah`
  ADD PRIMARY KEY (`id_jamaah`);

--
-- Indeks untuk tabel `mjd_mosque`
--
ALTER TABLE `mjd_mosque`
  ADD PRIMARY KEY (`id_mosque`);

--
-- Indeks untuk tabel `mjd_news`
--
ALTER TABLE `mjd_news`
  ADD PRIMARY KEY (`id_news`);

--
-- Indeks untuk tabel `mjd_news_category`
--
ALTER TABLE `mjd_news_category`
  ADD PRIMARY KEY (`id_category`);

--
-- Indeks untuk tabel `mjd_takmir`
--
ALTER TABLE `mjd_takmir`
  ADD PRIMARY KEY (`id_takmir`);

--
-- Indeks untuk tabel `mjd_task`
--
ALTER TABLE `mjd_task`
  ADD PRIMARY KEY (`id_task`);

--
-- Indeks untuk tabel `mjd_users`
--
ALTER TABLE `mjd_users`
  ADD PRIMARY KEY (`id_users`);

--
-- Indeks untuk tabel `mjd_zakat`
--
ALTER TABLE `mjd_zakat`
  ADD PRIMARY KEY (`id_zakat`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mjd_infaq`
--
ALTER TABLE `mjd_infaq`
  MODIFY `id_infaq` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `mjd_jamaah`
--
ALTER TABLE `mjd_jamaah`
  MODIFY `id_jamaah` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `mjd_mosque`
--
ALTER TABLE `mjd_mosque`
  MODIFY `id_mosque` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `mjd_news`
--
ALTER TABLE `mjd_news`
  MODIFY `id_news` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `mjd_news_category`
--
ALTER TABLE `mjd_news_category`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `mjd_takmir`
--
ALTER TABLE `mjd_takmir`
  MODIFY `id_takmir` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `mjd_task`
--
ALTER TABLE `mjd_task`
  MODIFY `id_task` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `mjd_users`
--
ALTER TABLE `mjd_users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `mjd_zakat`
--
ALTER TABLE `mjd_zakat`
  MODIFY `id_zakat` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
