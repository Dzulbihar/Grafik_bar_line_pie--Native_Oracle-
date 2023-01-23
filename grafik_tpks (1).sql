-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Jan 2022 pada 11.49
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `grafik_tpks`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2014_10_12_000000_create_users_table', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_arus`
--

CREATE TABLE `tbl_arus` (
  `id` int(11) NOT NULL,
  `Lokasi` varchar(191) DEFAULT NULL,
  `Tahun` int(255) DEFAULT NULL,
  `Bulan` varchar(30) DEFAULT NULL,
  `shipcall` int(255) DEFAULT NULL,
  `gt` int(255) DEFAULT NULL,
  `if20` int(255) DEFAULT NULL,
  `if40` int(255) DEFAULT NULL,
  `if45` int(255) DEFAULT NULL,
  `ie20` int(255) DEFAULT NULL,
  `ie40` int(255) DEFAULT NULL,
  `ie45` int(255) DEFAULT NULL,
  `ef20` int(255) DEFAULT NULL,
  `ef40` int(255) DEFAULT NULL,
  `ef45` int(255) DEFAULT NULL,
  `ee20` int(255) DEFAULT NULL,
  `ee40` int(255) DEFAULT NULL,
  `ee45` int(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_arus`
--

INSERT INTO `tbl_arus` (`id`, `Lokasi`, `Tahun`, `Bulan`, `shipcall`, `gt`, `if20`, `if40`, `if45`, `ie20`, `ie40`, `ie45`, `ef20`, `ef40`, `ef45`, `ee20`, `ee40`, `ee45`, `created_at`, `updated_at`) VALUES
(1, 'Internasional', 2020, 'Januari', 45, 1187365, 6644, 10520, 416, 15, 1712, 29, 3723, 11473, 48, 2871, 328, 286, '2021-11-29 17:17:31', '2021-11-30 00:17:31'),
(2, 'Internasional', 2020, 'Februari', 38, 935789, 4475, 6663, 38, 42, 1767, 5, 3765, 10898, 44, 1187, 21, 237, '2021-11-29 17:17:31', '2021-11-30 00:17:31'),
(10, 'Internasional', 2020, 'Maret', 45, 1170127, 6126, 9063, 188, 15, 3270, 22, 4106, 11709, 35, 1612, 62, 60, '2021-11-29 17:17:31', '2021-11-30 00:17:31'),
(13, 'Internasional', 2020, 'April', 42, 1080167, 6101, 9489, 185, 8, 982, 10, 3306, 9244, 32, 2978, 211, 222, '2021-11-29 17:17:31', '2021-11-30 00:17:31'),
(14, 'Internasional', 2020, 'Mei', 36, 955729, 3183, 5343, 125, 33, 699, 8, 3006, 7955, 64, 1452, 657, 93, '2021-11-29 17:17:31', '2021-11-30 00:17:31'),
(15, 'Internasional', 2020, 'Juni', 43, 1125867, 5508, 7308, 190, 41, 714, 2, 3709, 8403, 40, 1304, 287, 115, '2021-11-29 17:17:31', '2021-11-30 00:17:31'),
(16, 'Internasional', 2020, 'Juli', 43, 1015188, 5284, 7227, 262, 271, 2226, 12, 3793, 10454, 50, 1106, 454, 206, '2021-11-29 17:17:31', '2021-11-30 00:17:31'),
(17, 'Internasional', 2020, 'Agustus', 44, 1160961, 5623, 8016, 363, 250, 3146, 10, 3908, 10946, 45, 1472, 374, 260, '2021-11-29 17:17:31', '2021-11-30 00:17:31'),
(18, 'Internasional', 2020, 'September', 45, 1137498, 5322, 8439, 303, 220, 2634, 18, 4037, 11815, 74, 1016, 446, 272, '2021-11-29 17:17:31', '2021-11-30 00:17:31'),
(19, 'Internasional', 2020, 'Oktober', 45, 1089377, 5093, 8381, 296, 570, 3831, 11, 4086, 11863, 45, 1067, 503, 276, '2021-11-29 17:17:31', '2021-11-30 00:17:31'),
(20, 'Internasional', 2020, 'November', 45, 1090382, 5694, 10082, 402, 444, 2233, 10, 3867, 11850, 33, 1556, 446, 197, '2021-11-29 17:17:31', '2021-11-30 00:17:31'),
(21, 'Internasional', 2020, 'Desember', 49, 1187313, 5771, 9050, 485, 333, 1716, 0, 4013, 11567, 49, 1324, 102, 351, '2021-11-29 17:17:31', '2021-11-30 00:17:31'),
(22, 'Internasional', 2021, 'Januari', 44, 1056180, 5899, 9841, 423, 146, 1633, 2, 3501, 11628, 33, 2263, 22, 564, '2021-11-29 17:17:31', '2021-11-30 00:17:31'),
(23, 'Internasional', 2021, 'Februari', 46, 1088440, 6579, 10325, 372, 65, 2262, 12, 3699, 12276, 42, 1306, 105, 300, '2021-11-29 17:17:31', '2021-11-30 00:17:31'),
(24, 'Internasional', 2021, 'Maret', 48, 1138364, 5222, 7876, 122, 320, 1479, 13, 4084, 12684, 23, 1707, 79, 327, '2021-11-29 17:17:31', '2021-11-30 00:17:31'),
(25, 'Internasional', 2021, 'April', 51, 1176746, 6004, 9769, 243, 221, 3275, 17, 4098, 13340, 40, 1320, 84, 143, '2021-11-29 17:17:31', '2021-11-30 00:17:31'),
(26, 'Internasional', 2021, 'Mei', 41, 950720, 5612, 8657, 242, 302, 1700, 18, 4196, 10941, 31, 1318, 137, 163, '2021-11-29 17:17:31', '2021-11-30 00:17:31'),
(27, 'Internasional', 2021, 'Juni', 42, 980345, 5735, 8892, 295, 19, 2544, 0, 4016, 11841, 19, 910, 304, 248, '2021-11-29 17:17:31', '2021-11-30 00:17:31'),
(28, 'Internasional', 2021, 'Juli', 43, 956833, 6011, 8624, 333, 8, 1132, 0, 3680, 11324, 21, 1566, 233, 196, '2021-11-29 17:17:31', '2021-11-30 00:17:31'),
(29, 'Internasional', 2021, 'Agustus', 41, 898138, 5111, 8352, 305, 28, 1889, 0, 3799, 12284, 35, 560, 370, 140, '2021-11-29 17:17:31', '2021-11-30 00:17:31'),
(30, 'Internasional', 2021, 'September', 42, 903760, 4498, 7426, 215, 62, 3006, 1, 4179, 12377, 22, 671, 192, 172, '2021-11-29 17:17:31', '2021-11-30 00:17:31'),
(31, 'Internasional', 2021, 'Oktober', 40, 908846, 4764, 7269, 201, 640, 4697, 0, 4443, 13288, 25, 1046, 369, 128, '2021-11-29 17:17:31', '2021-11-30 00:17:31'),
(32, 'Internasional', 2021, 'November', 24, 558450, 2587, 4811, 181, 137, 1450, 0, 2274, 6638, 11, 158, 303, 77, '2021-11-29 17:17:31', '2021-11-30 00:17:31'),
(34, 'Internasional', 2021, 'Desember', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2021-11-30 02:25:03', '2021-11-30 02:25:03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2085, 'Ahmad Dzul Bihar', 'ahmad.dzulbihar69@gmail.com', NULL, '$2y$10$cbVvsf5BnGysLC0Xn/WB9upkKCgLCgS7za/hggaWIlEEB5xRRq7iO', NULL, '2021-12-01 02:40:53', '2021-09-30 19:38:56'),
(2086, 'Ana Chabibatur Rahmaniah', 'AnaChabibaturRahmaniah@gmail.com', NULL, '$2y$10$MNkS8G7MgAV3JPyrZY.nGuGjBXOXW6IbQTtEeqK4g/0UfbW/dRHcu', NULL, '2021-09-30 19:48:27', '2021-11-30 19:48:27');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `tbl_arus`
--
ALTER TABLE `tbl_arus`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_arus`
--
ALTER TABLE `tbl_arus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2087;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
