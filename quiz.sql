-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Bulan Mei 2023 pada 03.23
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `answer`
--

CREATE TABLE `answer` (
  `aid` int(11) NOT NULL,
  `answer` varchar(255) NOT NULL,
  `ans_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `answer`
--

INSERT INTO `answer` (`aid`, `answer`, `ans_id`) VALUES
(1, '1/4', 1),
(2, '1/2', 1),
(3, '1/8', 1),
(4, '2/5', 1),
(5, 'satu per empat', 2),
(6, 'setengah', 2),
(7, 'dua per satu', 2),
(8, 'seperempat', 2),
(9, '1/2', 3),
(10, '1/4', 3),
(11, '1/8', 3),
(12, '2/4', 3),
(13, '0,45', 4),
(14, '0,35', 4),
(15, '0,15', 4),
(16, '0,25', 4),
(17, '6', 5),
(18, '7', 5),
(19, '10', 5),
(20, '15', 5),
(21, '7/12 bagian', 6),
(22, '9/20 bagian', 6),
(23, '1/3 bagian', 6),
(24, '1/4 bagian', 6),
(25, '1', 7),
(26, '5', 7),
(27, '6', 7),
(28, '8', 7);

-- --------------------------------------------------------

--
-- Struktur dari tabel `questions`
--

CREATE TABLE `questions` (
  `qid` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `ans_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `questions`
--

INSERT INTO `questions` (`qid`, `question`, `ans_id`) VALUES
(1, 'Sebuah tali memiliki panjng 10 meter. Lalu dipotong menjadi potongan sepanjang 5 meter. Nilai pecahan yang menunjukkan potongn tali tersebut adalah ....\r\n', 1),
(2, 'Bilangan pecahan 1/2 dibaca ....', 7),
(3, 'Lambang dari bilangan seperempat adalah ....', 11),
(4, 'Jika bilangan 35% diubah menjadi pecahan desimal adalah ....', 15),
(5, 'Indah mempunyai celengan berbentuk prisma segilima. Banyak rusuk pada celengan Indah adalah ....', 20),
(6, 'Perpustakaan sekolah mendapatkan sumbangan buku-buku dari orangtua murid. Sebanyak 30% adalah buku cerita fiksi, 0.25 buku pelajaran, dan sisanya buku ensiklopedia. Berapa bagian dari semua buku yang disumbangkan merupakan buku ensiklopedia?', 22),
(7, 'Lift sudah berisi 5 orang dengan jumlah berat badan 380 kg. Di luar lift, Andi, Rosa, dan Joni akan masuk ke dalam lift yang sama. Berat Andi 95 kg, Rosa 83 kg, Joni 35 kg.\r\nSaat lift kosong, berapa paling banyak orang dengan berat badan sama dengan Andi ', 26);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `password`) VALUES
(4, 'asti@gmail.com', 'sukses'),
(8, 'astidwi@gmail.com', '1234567');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`aid`);

--
-- Indeks untuk tabel `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`qid`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `answer`
--
ALTER TABLE `answer`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `questions`
--
ALTER TABLE `questions`
  MODIFY `qid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
