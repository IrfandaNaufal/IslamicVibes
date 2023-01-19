-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2022 at 01:41 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `islamicvibes`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul_berita` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar_berita` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `isi_berita` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `judul_berita`, `slug`, `gambar_berita`, `kategori_id`, `isi_berita`, `created_at`, `updated_at`) VALUES
(1, 'Petugas Madinah Bersiap Sambut Kedatangan Gelombang Dua', 'petugas-madinah-bersiap-sambut-kedatangan-gelombang-dua', 'berita/PYBsAM2KWpUy8EcDWZ09KmTbr2GnkLMjozCOcgGH.jpg', 1, '<p>Suspendisse posuere, metus eget pharetra adipiscing, arcu velit lobortis augue, quis pharetra mauris ante a velit. Duis feugiat, odio a mattis gravida, velit est euismod urna, vitae gravida elit turpis sit amet elit. Phasellus ac hendrerit tortor. Aliquam erat volutpat. Donec laoreet viverra sapien et luctus. Cras fringilla commodo nulla sit amet congue. Donec aliquam gravida elit, in fringilla urna adipiscing in. Sed vel risus id urna luctus eleifend. Morbi ut fringilla magna. Curabitur lobortis molestie tellus ac ultricies. Maecenas tempus rutrum mauris in auctor. Ut interdum diam a justo malesuada dignissim. Morbi blandit odio sed magna rhoncus tincidunt. Etiam diam neque, ornare in molestie posuere, vulputate a nisl. Donec dictum, erat vel varius ullamcorper, lorem ipsum vulputate eros, sit amet lacinia orci arcu ac mi. Cras pellentesque, lacus vel laoreet tristique, justo magna convallis ante, at pellentesque ligula sapien sit amet elit. Nulla ut nunc libero.</p>', '2022-10-18 05:01:15', '2022-10-18 06:19:00'),
(2, 'Tujuh Kloter Jemaah Haji Pulang ke Indonesia 19 Juli 2022, Ini Jadwalnya', 'tujuh-kloter-jemaah-haji-pulang-ke-indonesia-19-juli-2022-ini-jadwalnya', 'berita/xSjCxYZh1ZMotAgNRg9zyMXGGoHyF9rJsU93ypKQ.jpg', 1, '<p>Suspendisse posuere, metus eget pharetra adipiscing, arcu velit lobortis augue, quis pharetra mauris ante a velit. Duis feugiat, odio a mattis gravida, velit est euismod urna, vitae gravida elit turpis sit amet elit. Phasellus ac hendrerit tortor. Aliquam erat volutpat. Donec laoreet viverra sapien et luctus. Cras fringilla commodo nulla sit amet congue. Donec aliquam gravida elit, in fringilla urna adipiscing in. Sed vel risus id urna luctus eleifend. Morbi ut fringilla magna. Curabitur lobortis molestie tellus ac ultricies. Maecenas tempus rutrum mauris in auctor. Ut interdum diam a justo malesuada dignissim. Morbi blandit odio sed magna rhoncus tincidunt. Etiam diam neque, ornare in molestie posuere, vulputate a nisl. Donec dictum, erat vel varius ullamcorper, lorem ipsum vulputate eros, sit amet lacinia orci arcu ac mi. Cras pellentesque, lacus vel laoreet tristique, justo magna convallis ante, at pellentesque ligula sapien sit amet elit. Nulla ut nunc libero.</p>\r\n\r\n<p>This is a free web template by TemplatesDock. This work is distributed under the Creative Commons Attribution 3.0 License, which means that you are free to adapt, copy, distribute and transmit the work. You must attribute the work in the manner specified by the author or licensor (don&acute;t remove our backlink from footer).</p>', '2022-10-18 06:43:41', '2022-10-18 06:43:41');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gambar_galeri` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama_kategori`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Jamaah Haji', 'jamaah-haji', '2022-10-18 05:00:56', '2022-10-18 05:00:56');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_07_26_021501_add_details_to_users_table', 1),
(6, '2022_07_29_174211_create_kategori_table', 1),
(7, '2022_07_29_232201_create_playlists_table', 1),
(8, '2022_07_29_234952_create_galeris_table', 1),
(9, '2022_07_30_005836_create_panduans_table', 1),
(10, '2022_07_30_014116_create_videos_table', 1),
(11, '2022_07_30_041131_create_beritas_table', 1),
(12, '2022_10_17_101831_add_sumber_gambar_to_panduan_table', 2),
(13, '2022_10_17_142157_add_sumber_video_to_video_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `panduan`
--

CREATE TABLE `panduan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul_panduan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_panduan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar_panduan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sumber_gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `panduan`
--

INSERT INTO `panduan` (`id`, `judul_panduan`, `slug`, `deskripsi_panduan`, `gambar_panduan`, `sumber_gambar`, `created_at`, `updated_at`) VALUES
(7, 'Hukum Haji', 'hukum-haji', '<p>Ibadah umrah adalah wajib bagi umat Islam yang telah memenuhi syarat. Ibadah haji diwajibkan hanya sekali seumur hidup. Hukum haji kedua dan seterusnya adalah sunat. Tapi, bagi mereka yang bernadzar haji, hukum haji itu menjadi wajib akibat nadzar.</p>', 'panduan/fmRh9HXN2AXEhaYIhLT0Nbefyb7B36x157eSRgOD.jpg', 'Buku Tuntunan Manasik Kemenag RI', '2022-10-17 03:36:33', '2022-10-17 03:44:46'),
(8, 'Pengertian Haji', 'pengertian-haji', '<p>Haji adalah berkunjung ke Baitullah (Ka&rsquo;bah) untuk melakukan amalan-amalan, antara lain: wukuf di Arafah, mabit di Muzdalifah dan Mina, thawaf&nbsp;di Ka&rsquo;bah, sa&rsquo;i, dan amalan lainnya pada masa tertentu demi memenuhi panggilan Allah SWT dan mengharapkan ridla-Nya semata.</p>', 'panduan/itWf0pnoP0RxJOfT1e3FNB5OFxiHA7l0Xm23jyxM.jpg', 'Buku Tuntunan Manasik Kemenag RI', '2022-10-17 05:40:57', '2022-10-17 05:40:57');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
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
-- Table structure for table `playlist`
--

CREATE TABLE `playlist` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_playlist` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `playlist`
--

INSERT INTO `playlist` (`id`, `nama_playlist`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Haji', 'haji', '2022-10-17 03:46:16', '2022-10-17 03:46:16');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role_as` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=user, 1=admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role_as`) VALUES
(1, 'Admin', 'admin@mail.test', NULL, '$2y$10$VC8uaSPORNgXd.FqfmxRQ.s3fa.V3DNncgwZyyrYJkOavAnnJ0Ao2', NULL, '2022-10-17 01:47:08', '2022-10-17 01:47:08', 1),
(2, 'Jamaah', 'jamaah@mail.test', NULL, '$2y$10$CdmjQyibAKBFJLQ3hZO9eeafUmr6McegXfbkp8rEgCCle10aidToa', NULL, '2022-10-17 01:49:27', '2022-10-17 01:49:27', 0);

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul_video` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar_video` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `konten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `playlist_id` int(11) NOT NULL,
  `deskripsi_video` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sumber_video` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `judul_video`, `slug`, `gambar_video`, `konten`, `playlist_id`, `deskripsi_video`, `sumber_video`, `created_at`, `updated_at`) VALUES
(9, 'Video 1', 'video-1', 'video/nBrFQdii3xR3Ki1HAzO7GkmsMCZ0jbY0CL4roK4d.jpg', 'video/5zNBZFxo2jOOlo0qFUMtAqhhEEQOHLj8M5JUDC7Y.mp4', 1, '<p>&#39;sumber_gambar&#39; =&gt; &#39;required&#39;,</p>', 'YouTube', '2022-10-17 07:34:27', '2022-10-17 07:34:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `panduan`
--
ALTER TABLE `panduan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `playlist`
--
ALTER TABLE `playlist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `panduan`
--
ALTER TABLE `panduan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `playlist`
--
ALTER TABLE `playlist`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
