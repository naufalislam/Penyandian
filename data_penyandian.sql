-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 27 Sep 2019 pada 09.31
-- Versi server: 10.1.32-MariaDB
-- Versi PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_penyandian`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun_pelanggan`
--

CREATE TABLE `akun_pelanggan` (
  `id_pel` varchar(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `password_recovery` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `akun_pelanggan`
--

INSERT INTO `akun_pelanggan` (`id_pel`, `username`, `password`, `password_recovery`) VALUES
('1', 'Muiz muiz', '25f9e794323b453885f5181f1b624d0b', '97b290acab82d5937fb87a28b06181a3'),
('1', 'Dani', '7c0965f91fd58030975d39397f9f4014', 'ce509dd7a3da14234563310c1aba9826');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data`
--

CREATE TABLE `data` (
  `id_pel` varchar(10) NOT NULL,
  `jumlah_hutang` varchar(25) NOT NULL,
  `jumlah_piutang` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data`
--

INSERT INTO `data` (`id_pel`, `jumlah_hutang`, `jumlah_piutang`) VALUES
('1', '5c3d97cf3a730002e02cacd1d', 'ad511cc8a14b67bd7b61e68ce'),
('1', '1cdb42c7289968b8cf0a50b1f', '4663b6d6c441bea1f278afa4c');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pel` varchar(10) NOT NULL,
  `nama_pel` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`id_pel`, `nama_pel`, `no_hp`, `alamat`, `email`) VALUES
('1', 'Naufal', 'b874372dc30c830dd8cef03bd3c0b0b1', '8af063f30938cd1cdae428b22355a184', 'email@email.con'),
('2', 'Galan', '9220dc6daf766ca57068c31ca178518d', 'beec4e44a9c4fb14432d957892eb7be2', 'email@email.con'),
('3', 'Gendut', 'def20f16251f17e82c5c1acb11c7958b', '41349e9f62a6e1992f1c5e57839ce210', 'email@email.con');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` varchar(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`) VALUES
('1', 'Naufal', 'naufal', 'a7ef174d3ed272acd2b72913a7ef9d40'),
('2', 'anyar', 'anyar', '18b25ee4977ad028ec6946d3e0421f0f'),
('3', 'Dani', 'Dani', '0b2cc82e6a177b18faefd88581b8597d'),
('4', 'Muiz', 'Muiz', '8dd1932d5de961b15ee154c91b214aa7'),
('8', 'asfasf', 'asfsafs', '85ad75a257e210e4b90aa8bbd13cf660');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
