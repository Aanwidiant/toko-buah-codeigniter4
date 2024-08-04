-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Jul 2024 pada 03.27
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko_buah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cart`
--

CREATE TABLE `cart` (
  `cr_id` varchar(5) NOT NULL,
  `user_id` varchar(7) NOT NULL,
  `prd_id` varchar(7) NOT NULL,
  `qty_item` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `cart`
--

INSERT INTO `cart` (`cr_id`, `user_id`, `prd_id`, `qty_item`) VALUES
('cr02', 'usr004', 'prd003', 1),
('cr03', 'usr004', 'prd004', 1),
('cr04', 'usr001', 'prd001', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2024-06-30-134216', 'App\\Database\\Migrations\\Users', 'default', 'App', 1719755379, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `prd_id` varchar(7) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `produk_img` varchar(255) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `harga` int(11) NOT NULL,
  `qty` varchar(100) NOT NULL,
  `stok` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`prd_id`, `nama_produk`, `produk_img`, `deskripsi`, `harga`, `qty`, `stok`, `created_at`, `updated_at`) VALUES
('prd001', 'Apel', 'apel.png', 'Nikmati segarnya Apel berkualitas premium dari Vers Fruits! Kaya akan serat dan vitamin, apel kami memberikan rasa manis yang menyegarkan setiap gigitan.', 35000, '1 kg', 10, '2024-07-01 16:08:47', '2024-07-11 01:36:06'),
('prd002', 'Pisang', 'pisang.png', 'Pisang lezat dan bergizi dari Vers Fruits! Sumber energi alami yang sempurna, pisang kami cocok untuk camilan sehat kapan saja.', 15000, '1 kg', 100, '2024-07-01 16:21:57', '2024-07-11 01:36:21'),
('prd003', 'Jeruk', 'jeruk.png', 'Rasakan kesegaran Jeruk manis dan juicy dari Vers Fruits! Kaya akan vitamin C, jeruk kami adalah pilihan ideal untuk meningkatkan daya tahan tubuh.', 25000, '1 kg', 100, '2024-07-01 16:21:57', '2024-07-11 01:36:45'),
('prd004', 'Mangga', 'mangga.png', 'Manjakan lidah Anda dengan Mangga manis dan harum dari Vers Fruits! Buah tropis ini memberikan rasa eksotis yang memanjakan.', 20000, '1 kg', 100, '2024-07-01 16:21:57', '2024-07-11 01:37:03'),
('prd005', 'Anggur', 'anggur.png', 'Anggur segar dan manis dari Vers Fruits! Kaya antioksidan, anggur kami adalah camilan sempurna untuk kesehatan kulit dan tubuh Anda.', 50000, '1 kg', 100, '2024-07-01 16:21:57', '2024-07-11 01:37:20'),
('prd006', 'Semangka', 'semangka.png', 'Segarkan hari Anda dengan Semangka juicy dan manis dari Vers Fruits! Pilihan sempurna untuk menghilangkan dahaga di hari yang panas.', 25000, '1 buah', 100, '2024-07-01 16:21:57', '2024-07-11 01:37:36'),
('prd007', 'Stroberi', 'strawberi.png', 'Manisnya Stroberi segar dari Vers Fruits! Kaya vitamin dan antioksidan, stroberi kami menambah warna dan rasa pada hari Anda.', 25000, '250 gram', 100, '2024-07-01 16:21:57', '2024-07-11 01:38:38'),
('prd008', 'Kiwi', 'kiwi.png', 'Kiwi eksotis dan penuh vitamin dari Vers Fruits! Rasa asam manis yang unik ini membuatnya sempurna untuk camilan sehat sehari-hari.', 7000, '1 buah', 100, '2024-07-01 16:21:57', '2024-07-11 01:38:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `role_level`
--

CREATE TABLE `role_level` (
  `lv_id` varchar(7) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `role_level`
--

INSERT INTO `role_level` (`lv_id`, `role`) VALUES
('lv_01', 'user'),
('lv_02', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `user_id` varchar(7) CHARACTER SET utf8mb4 NOT NULL,
  `username` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `nama_lengkap` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `lv_id` varchar(7) CHARACTER SET utf8mb4 NOT NULL,
  `password` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`user_id`, `username`, `nama_lengkap`, `email`, `lv_id`, `password`, `created_at`, `updated_at`) VALUES
('usr001', 'aanwidiant', 'Aan Widianto', 'aanwidianto01@gmail.com', 'lv_02', '$2y$10$.4Ih/oXbF7pSVq6AUdR8SeNiUKyknoU3cZA0OSyVvXWqVKkDo8VI.', '2024-06-30 14:00:30', '2024-07-11 14:50:16'),
('usr002', 'fatikhana', 'Fatikhatul Hana', 'fatikhatul.hana27@gmail.com', 'lv_01', '$2y$10$YXUW0.j.IuctRiqAeECY2eEze5amqQrvpUhRGl05MxQlB7t8G78hG', '2024-06-30 14:03:49', '2024-07-12 11:26:10'),
('usr003', 'ajengkusuma', 'Ajeng Kusuma Setya Ningrum', 'ajengkusuma22@gmail.com', 'lv_01', '$2y$10$48t/x0/d7scy9o6Lj9w2iON8WecQnDOptV93otBnkMYsHB1pHsUn6', '2024-07-08 14:11:39', '2024-07-12 11:26:03'),
('usr004', 'astrinur', 'Astri Nur Jannah', 'astri.nurjanah27@gmail.com', 'lv_01', '$2y$10$YkJy0Fc48zVvCZU8m2kJruy723mDaJxoLj111ACqWtHILylj3/HA6', '2024-07-08 14:11:59', '2024-07-09 17:13:47');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cr_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `prd_id` (`prd_id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`prd_id`);

--
-- Indeks untuk tabel `role_level`
--
ALTER TABLE `role_level`
  ADD PRIMARY KEY (`lv_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `FK_Level_ID` (`lv_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`prd_id`) REFERENCES `products` (`prd_id`);

--
-- Ketidakleluasaan untuk tabel `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `FK_Level_ID` FOREIGN KEY (`lv_id`) REFERENCES `role_level` (`lv_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
