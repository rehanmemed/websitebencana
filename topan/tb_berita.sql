-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Nov 2023 pada 02.54
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
-- Database: `db_topan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_berita`
--

CREATE TABLE `tb_berita` (
  `judul` varchar(100) NOT NULL,
  `berita_desc` longtext NOT NULL,
  `berita_img` varchar(100) NOT NULL,
  `berita_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_berita`
--

INSERT INTO `tb_berita` (`judul`, `berita_desc`, `berita_img`, `berita_id`) VALUES
('Badai Tornado Melanda Enam Negara Bagian AS, Korban Tewas Tembus 80 Orang', '<p>Badai tornado melanda enam negara bagian di Amerika Serikat, menimbulkan korban tewas yang terus bertambah. Negara bagian Kentucky mengalami kehancuran terparah dengan jumlah korban jiwa mencapai 80, sebagian besar dari mereka tewas ketika angin puyuh meratakan sebuah pabrik lilin di kota Mayfield. Tornado dahsyat ini melanda sepanjang 365 kilometer, melibatkan negara bagian Arkansas, Illinois, Mississippi, Missouri, Tennessee, dan Kentucky. Gubernur Kentucky, Andy Beshear, menyebutnya sebagai tornado paling mematikan yang pernah dialami dan mengindikasikan bahwa jumlah korban kemungkinan akan melebihi 100 jiwa. Upaya penyelamatan terus dilakukan meskipun situasinya sangat sulit. Presiden AS Joe Biden telah mendeklarasikan status darurat bagi Kentucky untuk mendukung penanganan bencana tersebut.</p>\r\n', 'img1701135571.webp', 6);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_berita`
--
ALTER TABLE `tb_berita`
  ADD PRIMARY KEY (`berita_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_berita`
--
ALTER TABLE `tb_berita`
  MODIFY `berita_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
