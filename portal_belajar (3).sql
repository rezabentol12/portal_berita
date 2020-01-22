-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Jan 2020 pada 05.58
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portal_belajar`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bls_komentar`
--

CREATE TABLE `bls_komentar` (
  `id` int(11) NOT NULL,
  `id_komentar` int(100) NOT NULL,
  `komentar` varchar(200) NOT NULL,
  `nama_komentar` varchar(100) NOT NULL,
  `tgl_bales` date NOT NULL,
  `id_berita` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bls_komentar`
--

INSERT INTO `bls_komentar` (`id`, `id_komentar`, `komentar`, `nama_komentar`, `tgl_bales`, `id_berita`) VALUES
(13, 2, 'ini loh', 'rezagendut087@gmail.com', '0000-00-00', 4),
(14, 3, 'apaaan si nih orang\r\n', 'rezagendut087@gmail.com', '0000-00-00', 3),
(15, 1, 'apya', 'rezagendut087@gmail.com', '0000-00-00', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `kategori` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `kategori`) VALUES
(1, 'Nasional'),
(2, 'Ekonomi'),
(3, 'Olahraga'),
(4, 'Teknologi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE `komentar` (
  `id` int(11) NOT NULL,
  `komentar` varchar(100) NOT NULL,
  `id_berita` int(11) NOT NULL,
  `id_user` varchar(100) NOT NULL,
  `tgl_komen` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `komentar`
--

INSERT INTO `komentar` (`id`, `komentar`, `id_berita`, `id_user`, `tgl_komen`) VALUES
(1, 'apaan nih\r\n', 1, 'rezagendut087@gmail.com', '2020-01-20'),
(2, 'apaaaaaya', 4, 'rezagendut087@gmail.com', '2020-01-21'),
(3, 'adssss', 3, 'rezagendut087@gmail.com', '2020-01-21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `menu`
--

INSERT INTO `menu` (`id`, `type`) VALUES
(1, 'Horizontal'),
(2, 'Vertical');

-- --------------------------------------------------------

--
-- Struktur dari tabel `suberita_n`
--

CREATE TABLE `suberita_n` (
  `id` int(11) NOT NULL,
  `sub_n` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `suberita_n`
--

INSERT INTO `suberita_n` (`id`, `sub_n`) VALUES
(1, 'Politik'),
(2, 'Hukum&Kriminal'),
(3, 'Peristiwa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `suberita_o`
--

CREATE TABLE `suberita_o` (
  `id` int(11) NOT NULL,
  `sub_o` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `suberita_o`
--

INSERT INTO `suberita_o` (`id`, `sub_o`) VALUES
(1, 'Sepakbola'),
(2, 'MotorGP'),
(3, 'F1'),
(4, 'Raket');

-- --------------------------------------------------------

--
-- Struktur dari tabel `suberita_t`
--

CREATE TABLE `suberita_t` (
  `id` int(11) NOT NULL,
  `sub_t` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `suberita_t`
--

INSERT INTO `suberita_t` (`id`, `sub_t`) VALUES
(1, 'TeknologiInformasi'),
(2, 'Sains'),
(6, 'Telekomunikasi'),
(7, 'Otomotif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `subertia_e`
--

CREATE TABLE `subertia_e` (
  `id` int(11) NOT NULL,
  `sub_e` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `subertia_e`
--

INSERT INTO `subertia_e` (`id`, `sub_e`) VALUES
(1, 'Keuangan'),
(2, 'Energi'),
(3, 'Bisnis'),
(4, 'makro');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_berita`
--

CREATE TABLE `tb_berita` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `descripsi` text NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `suberita` varchar(100) NOT NULL,
  `hit` int(11) NOT NULL,
  `nama_uploder` varchar(100) NOT NULL,
  `tgl_upload` date NOT NULL,
  `token` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_berita`
--

INSERT INTO `tb_berita` (`id`, `judul`, `foto`, `descripsi`, `kategori`, `type`, `suberita`, `hit`, `nama_uploder`, `tgl_upload`, `token`) VALUES
(1, 'reza', '1_hLTrJX4KQ6dKFOUdF9h5Tg1.png', '<p>&nbsp;</p>\r\n\r\n<p>sdasdsadsdsdasdasdsdsd</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'Olahraga', 'Vertical', 'Sepakbola', 13, 'sadajdhjasdajsdasdsadddas', '2020-01-21', ''),
(2, 'reza', '2.PNG', '<p>asdasdasdadasdasd</p>\r\n', 'Teknologi', 'Horizontal', 'Telekomunikasi', 2, 'samin', '2020-01-20', ''),
(3, 'reza', '1_hLTrJX4KQ6dKFOUdF9h5Tg.png', '<p>bhbhbhhbb</p>\r\n', 'Nasional', 'Vertical', 'Politik', 6, 'dsadasd', '2020-01-20', ''),
(4, 'reza', '21.PNG', '<p>dasdasdasdasd</p>\r\n', 'Nasional', 'Vertical', 'Peristiwa', 4, 'dasdasd', '2020-01-07', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `username`, `password`, `role_id`) VALUES
(1, 'admin', 'admin', '123', '1'),
(2, 'muhammad fairu reza', 'rezabentol12', 'rezabnetol12', '2'),
(3, 'reza gendut', 'rezagendut087@gmail.com', 'rezabentol12', '2'),
(4, 'Muhamad Excel ', 'muhamadexcel05@gmail.com', 'muhamadexcel', '2'),
(5, 'excel putra', 'excelputra713@gmail.com', 'excelputra713', '2'),
(6, 'fairu reza', 'rezagendut087@gmail.com', '123', '2'),
(7, '123', '123', '123', '2'),
(8, 'fairu reza', 'reza', '123', '2'),
(9, 'muhammad fairu reza', 'reza', '123', '2'),
(10, 'fairu reza', 'asuu', '123', '2'),
(11, 'fairu reza', 'asuuu', '123', '2'),
(12, 'reza gendut', 'admin ', '1111', '2');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bls_komentar`
--
ALTER TABLE `bls_komentar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `suberita_n`
--
ALTER TABLE `suberita_n`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `suberita_o`
--
ALTER TABLE `suberita_o`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `suberita_t`
--
ALTER TABLE `suberita_t`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `subertia_e`
--
ALTER TABLE `subertia_e`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_berita`
--
ALTER TABLE `tb_berita`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bls_komentar`
--
ALTER TABLE `bls_komentar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `suberita_n`
--
ALTER TABLE `suberita_n`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `suberita_o`
--
ALTER TABLE `suberita_o`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `suberita_t`
--
ALTER TABLE `suberita_t`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `subertia_e`
--
ALTER TABLE `subertia_e`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_berita`
--
ALTER TABLE `tb_berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
