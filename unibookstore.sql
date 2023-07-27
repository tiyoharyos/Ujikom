-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Jul 2023 pada 04.56
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `unibookstore`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `username` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`username`, `pass`) VALUES
('Admin', '@Dmin123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `ID_Buku` char(20) DEFAULT NULL,
  `Kategori` varchar(30) DEFAULT NULL,
  `Nama_Buku` varchar(40) DEFAULT NULL,
  `Harga` int(20) DEFAULT NULL,
  `Stok` int(15) DEFAULT NULL,
  `Penerbit` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`ID_Buku`, `Kategori`, `Nama_Buku`, `Harga`, `Stok`, `Penerbit`) VALUES
('K1001', 'NK1', 'Analisis & Perancangan Sistem Informasi', 50000, 60, 'SP01'),
('K1002', 'NK1', 'Artifical Intelliegence', 45000, 60, 'SP01'),
('K2003', 'NK1', 'Autocad 3 Dimensi', 40000, 25, 'SP01'),
('B1001', 'NK2', 'Bisnis Online', 75000, 9, 'SP01'),
('K3004', 'NK1', 'Cloud Compunting Technology', 85000, 15, 'SP01'),
('B1002', 'NK2', 'Etika Bisnis dan Tanggung Jawab Sosial', 67500, 20, 'SP01'),
('N1001', 'NK3', 'Cahaya Di Penjuru Hati', 68000, 20, 'SP02'),
('N1002', 'NK3', 'Aku Ingin Cerita', 48000, 12, 'SP03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `ID_Kategori` varchar(20) DEFAULT NULL,
  `Nama_Kategori` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`ID_Kategori`, `Nama_Kategori`) VALUES
('NK1', 'Keilmuan'),
('NK2', 'Bisnis'),
('NK3', 'Novel');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penerbit`
--

CREATE TABLE `penerbit` (
  `ID_Penerbit` char(20) DEFAULT NULL,
  `Penerbit` varchar(30) DEFAULT NULL,
  `Alamat` varchar(50) DEFAULT NULL,
  `Kota` varchar(30) DEFAULT NULL,
  `telepon` char(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `penerbit`
--

INSERT INTO `penerbit` (`ID_Penerbit`, `Penerbit`, `Alamat`, `Kota`, `telepon`) VALUES
('SP01', 'Penerbit Informatika', 'Jl. Buah Batu No.121', 'Bandung', '081322201946'),
('SP02', 'Andi Offset', 'Jl. Suryala IX No. 3', 'Bandung', '087839030688'),
('SP03', 'Danendra', 'Jl Moch. Toha 44', 'Bandung', '02252-1215');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
