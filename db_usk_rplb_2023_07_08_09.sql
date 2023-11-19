-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Okt 2023 pada 17.51
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_usk_rplb_2023_07_08_09`
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
-- Struktur dari tabel `logs_jenis_berita`
--

CREATE TABLE `logs_jenis_berita` (
  `id_logs` int(11) NOT NULL,
  `log` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `logs_jenis_berita`
--

INSERT INTO `logs_jenis_berita` (`id_logs`, `log`, `created_at`, `updated_at`) VALUES
(1, 'jenis_berita lowongan telah ditambahkan pada 2023-10-21 22:47:07', NULL, NULL),
(2, 'jenis_berita dispen34 telah ditambahkan pada 2023-10-22 10:09:21', NULL, NULL),
(3, 'jenis_berita dispen34 telah diperbarui menjadi jenis_berita  Haiii pada 2023-10-22 10:09:37', NULL, NULL),
(4, 'jenis_berita Haiii telah dihapus pada 2023-10-22 10:10:01', NULL, NULL),
(5, 'jenis_berita dispen telah ditambahkan pada 2023-10-22 10:12:10', NULL, NULL),
(6, 'jenis_berita dispen telah dihapus pada 2023-10-22 14:22:25', NULL, NULL),
(7, 'jenis_berita halo telah ditambahkan pada 2023-10-22 14:22:54', NULL, NULL),
(8, 'jenis_berita halo telah dihapus pada 2023-10-22 14:23:11', NULL, NULL),
(9, 'jenis_berita dispen34 telah ditambahkan pada 2023-10-22 14:44:23', NULL, NULL),
(10, 'jenis_berita dispen34 telah dihapus pada 2023-10-22 14:44:28', NULL, NULL),
(11, 'jenis_berita Lowongan Pekerjaan PT. XZ telah ditambahkan pada 2023-10-22 15:21:05', NULL, NULL),
(12, 'jenis_berita lowongan telah diperbarui menjadi jenis_berita  Lowongan Magang PT. YY pada 2023-10-22 15:21:32', NULL, NULL),
(13, 'jenis_berita Lowongan Pekerjaan PT. XZ telah dihapus pada 2023-10-22 16:20:44', NULL, NULL),
(14, 'jenis_berita Lowogan Magang PT. XX telah ditambahkan pada 2023-10-22 16:55:47', NULL, NULL),
(15, 'jenis_berita Lowogan Magang PT. XX telah dihapus pada 2023-10-22 16:55:53', NULL, NULL);

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_10_18_071105_create_takuns_table', 1),
(6, '2023_10_18_071347_create_tjurusans_table', 1),
(7, '2023_10_18_071357_create_tangkatans_table', 1),
(8, '2023_10_18_071500_create_tjenis_berita_table', 1),
(9, '2023_10_18_071642_create_tkelas_table', 1),
(10, '2023_10_18_071702_create_talumnis_table', 1),
(11, '2023_10_18_071845_create_tkaprogs_table', 1),
(12, '2023_10_18_071857_create_twirausahas_table', 1),
(13, '2023_10_18_071908_create_tkuliahs_table', 1),
(14, '2023_10_18_071916_create_tkerjas_table', 1),
(15, '2023_10_19_023730_create_tsuperadmin_table', 1),
(16, '2023_10_19_023753_create_tberitas_table', 1),
(17, '2023_10_21_152154_create_logs_jenis_beritas_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `takun`
--

CREATE TABLE `takun` (
  `id_akun` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('superadmin','alumni','kaprog') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `takun`
--

INSERT INTO `takun` (`id_akun`, `username`, `password`, `role`, `created_at`, `updated_at`) VALUES
(1, 'superadmin', '$2y$10$gYrwunpcD0VKMv1x8i8G7ef0GC/stfx/jhAa3ZUoFWi1HjP420TYS', 'superadmin', NULL, NULL),
(2, 'alumni', '$2y$10$efIKFIqvJiJyZaXdzzId9uwBhTym4IfR6LUITQpfUeEvMRGRacReq', 'alumni', NULL, NULL),
(3, 'kaprog', '$2y$10$FRBqe8OgzwMLd2tTjm/OpOTHDGF2cwgoMECVBp7wxlvBin.amQ5dK', 'kaprog', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `talumni`
--

CREATE TABLE `talumni` (
  `id_alumni` int(11) NOT NULL,
  `id_akun` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telp` int(11) NOT NULL,
  `sosmed` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ijazah` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenkel` enum('L','P') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tangkatan`
--

CREATE TABLE `tangkatan` (
  `id_angkatan` int(11) NOT NULL,
  `no_angkatan` int(11) NOT NULL,
  `tahun_masuk` year(4) NOT NULL,
  `tahun_keluar` year(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tberita`
--

CREATE TABLE `tberita` (
  `id_berita` int(11) NOT NULL,
  `id_jenis_berita` int(11) NOT NULL,
  `file` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul_berita` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_post` date NOT NULL,
  `kode_berita` int(11) NOT NULL,
  `ket_berita` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tberita`
--

INSERT INTO `tberita` (`id_berita`, `id_jenis_berita`, `file`, `judul_berita`, `tgl_post`, `kode_berita`, `ket_berita`, `created_at`, `updated_at`) VALUES
(1, 1, 'fb6e0129a9f0ff44bc5d0c0869787bbc.png', 'adhinda', '2023-10-05', 90, 'Adhinda Zahra', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tjenis_berita`
--

CREATE TABLE `tjenis_berita` (
  `id_jenis_berita` int(11) NOT NULL,
  `jenis_berita` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tjenis_berita`
--

INSERT INTO `tjenis_berita` (`id_jenis_berita`, `jenis_berita`, `created_at`, `updated_at`) VALUES
(1, 'Lowongan Magang PT. YY', NULL, NULL);

--
-- Trigger `tjenis_berita`
--
DELIMITER $$
CREATE TRIGGER `edit_jenis_berita` AFTER UPDATE ON `tjenis_berita` FOR EACH ROW BEGIN INSERT INTO logs_jenis_berita(log) VALUES (concat('jenis_berita ', OLD.jenis_berita, ' ', 'telah diperbarui menjadi jenis_berita ', ' ', NEW.jenis_berita, ' ', 'pada', ' ', NOW())); END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `hapus_jenis_berita` AFTER DELETE ON `tjenis_berita` FOR EACH ROW BEGIN INSERT INTO logs_jenis_berita(log) VALUES (concat('jenis_berita ', OLD.jenis_berita, ' ', 'telah dihapus pada', ' ', NOW())); END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `tambah_jenis_berita` AFTER INSERT ON `tjenis_berita` FOR EACH ROW BEGIN INSERT INTO logs_jenis_berita(log) VALUES (concat('jenis_berita ', NEW.jenis_berita, ' ', 'telah ditambahkan pada', ' ', NOW())); END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tjurusan`
--

CREATE TABLE `tjurusan` (
  `id_jurusan` int(11) NOT NULL,
  `nama_jurusan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tkaprog`
--

CREATE TABLE `tkaprog` (
  `id_kaprog` int(11) NOT NULL,
  `id_akun` int(11) NOT NULL,
  `id_jurusan` int(11) NOT NULL,
  `nama_kaprog` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tkelas`
--

CREATE TABLE `tkelas` (
  `id_kelas` int(11) NOT NULL,
  `id_jurusan` int(11) NOT NULL,
  `id_angkatan` int(11) NOT NULL,
  `nama_kelas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tkerja`
--

CREATE TABLE `tkerja` (
  `id_kerja` int(11) NOT NULL,
  `id_alumni` int(11) NOT NULL,
  `instansi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tkuliah`
--

CREATE TABLE `tkuliah` (
  `id_kuliah` int(11) NOT NULL,
  `id_alumni` int(11) NOT NULL,
  `nama_lembaga` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurusan_kuliah` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tsuperadmin`
--

CREATE TABLE `tsuperadmin` (
  `id_superadmin` int(11) NOT NULL,
  `id_akun` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `twirausaha`
--

CREATE TABLE `twirausaha` (
  `id_wirausaha` int(11) NOT NULL,
  `id_alumni` int(11) NOT NULL,
  `nama_usaha` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `bidang` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `v_jenis_berita`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `v_jenis_berita` (
`id_berita` int(11)
,`judul_berita` varchar(255)
,`jenis_berita` varchar(255)
);

-- --------------------------------------------------------

--
-- Struktur untuk view `v_jenis_berita`
--
DROP TABLE IF EXISTS `v_jenis_berita`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_jenis_berita`  AS SELECT `tberita`.`id_berita` AS `id_berita`, `tberita`.`judul_berita` AS `judul_berita`, `tjenis_berita`.`jenis_berita` AS `jenis_berita` FROM (`tberita` join `tjenis_berita` on(`tberita`.`id_berita` = `tjenis_berita`.`id_jenis_berita`))  ;

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
-- Indeks untuk tabel `logs_jenis_berita`
--
ALTER TABLE `logs_jenis_berita`
  ADD PRIMARY KEY (`id_logs`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `takun`
--
ALTER TABLE `takun`
  ADD PRIMARY KEY (`id_akun`);

--
-- Indeks untuk tabel `talumni`
--
ALTER TABLE `talumni`
  ADD PRIMARY KEY (`id_alumni`),
  ADD KEY `talumni_id_akun_foreign` (`id_akun`),
  ADD KEY `talumni_id_kelas_foreign` (`id_kelas`);

--
-- Indeks untuk tabel `tangkatan`
--
ALTER TABLE `tangkatan`
  ADD PRIMARY KEY (`id_angkatan`);

--
-- Indeks untuk tabel `tberita`
--
ALTER TABLE `tberita`
  ADD PRIMARY KEY (`id_berita`),
  ADD KEY `tberita_id_jenis_berita_foreign` (`id_jenis_berita`);

--
-- Indeks untuk tabel `tjenis_berita`
--
ALTER TABLE `tjenis_berita`
  ADD PRIMARY KEY (`id_jenis_berita`);

--
-- Indeks untuk tabel `tjurusan`
--
ALTER TABLE `tjurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indeks untuk tabel `tkaprog`
--
ALTER TABLE `tkaprog`
  ADD PRIMARY KEY (`id_kaprog`),
  ADD KEY `tkaprog_id_akun_foreign` (`id_akun`),
  ADD KEY `tkaprog_id_jurusan_foreign` (`id_jurusan`);

--
-- Indeks untuk tabel `tkelas`
--
ALTER TABLE `tkelas`
  ADD PRIMARY KEY (`id_kelas`),
  ADD KEY `tkelas_id_jurusan_foreign` (`id_jurusan`),
  ADD KEY `tkelas_id_angkatan_foreign` (`id_angkatan`);

--
-- Indeks untuk tabel `tkerja`
--
ALTER TABLE `tkerja`
  ADD PRIMARY KEY (`id_kerja`),
  ADD KEY `tkerja_id_alumni_foreign` (`id_alumni`);

--
-- Indeks untuk tabel `tkuliah`
--
ALTER TABLE `tkuliah`
  ADD PRIMARY KEY (`id_kuliah`),
  ADD KEY `tkuliah_id_alumni_foreign` (`id_alumni`);

--
-- Indeks untuk tabel `tsuperadmin`
--
ALTER TABLE `tsuperadmin`
  ADD PRIMARY KEY (`id_superadmin`),
  ADD KEY `tsuperadmin_id_akun_foreign` (`id_akun`);

--
-- Indeks untuk tabel `twirausaha`
--
ALTER TABLE `twirausaha`
  ADD PRIMARY KEY (`id_wirausaha`),
  ADD KEY `twirausaha_id_alumni_foreign` (`id_alumni`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `logs_jenis_berita`
--
ALTER TABLE `logs_jenis_berita`
  MODIFY `id_logs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `takun`
--
ALTER TABLE `takun`
  MODIFY `id_akun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `talumni`
--
ALTER TABLE `talumni`
  MODIFY `id_alumni` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tangkatan`
--
ALTER TABLE `tangkatan`
  MODIFY `id_angkatan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tberita`
--
ALTER TABLE `tberita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tjenis_berita`
--
ALTER TABLE `tjenis_berita`
  MODIFY `id_jenis_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tjurusan`
--
ALTER TABLE `tjurusan`
  MODIFY `id_jurusan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tkaprog`
--
ALTER TABLE `tkaprog`
  MODIFY `id_kaprog` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tkelas`
--
ALTER TABLE `tkelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tkerja`
--
ALTER TABLE `tkerja`
  MODIFY `id_kerja` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tkuliah`
--
ALTER TABLE `tkuliah`
  MODIFY `id_kuliah` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tsuperadmin`
--
ALTER TABLE `tsuperadmin`
  MODIFY `id_superadmin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `twirausaha`
--
ALTER TABLE `twirausaha`
  MODIFY `id_wirausaha` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `talumni`
--
ALTER TABLE `talumni`
  ADD CONSTRAINT `talumni_id_akun_foreign` FOREIGN KEY (`id_akun`) REFERENCES `takun` (`id_akun`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `talumni_id_kelas_foreign` FOREIGN KEY (`id_kelas`) REFERENCES `tkelas` (`id_kelas`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tberita`
--
ALTER TABLE `tberita`
  ADD CONSTRAINT `tberita_id_jenis_berita_foreign` FOREIGN KEY (`id_jenis_berita`) REFERENCES `tjenis_berita` (`id_jenis_berita`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tkaprog`
--
ALTER TABLE `tkaprog`
  ADD CONSTRAINT `tkaprog_id_akun_foreign` FOREIGN KEY (`id_akun`) REFERENCES `takun` (`id_akun`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tkaprog_id_jurusan_foreign` FOREIGN KEY (`id_jurusan`) REFERENCES `tjurusan` (`id_jurusan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tkelas`
--
ALTER TABLE `tkelas`
  ADD CONSTRAINT `tkelas_id_angkatan_foreign` FOREIGN KEY (`id_angkatan`) REFERENCES `tangkatan` (`id_angkatan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tkelas_id_jurusan_foreign` FOREIGN KEY (`id_jurusan`) REFERENCES `tjurusan` (`id_jurusan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tkerja`
--
ALTER TABLE `tkerja`
  ADD CONSTRAINT `tkerja_id_alumni_foreign` FOREIGN KEY (`id_alumni`) REFERENCES `talumni` (`id_alumni`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tkuliah`
--
ALTER TABLE `tkuliah`
  ADD CONSTRAINT `tkuliah_id_alumni_foreign` FOREIGN KEY (`id_alumni`) REFERENCES `talumni` (`id_alumni`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tsuperadmin`
--
ALTER TABLE `tsuperadmin`
  ADD CONSTRAINT `tsuperadmin_id_akun_foreign` FOREIGN KEY (`id_akun`) REFERENCES `takun` (`id_akun`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `twirausaha`
--
ALTER TABLE `twirausaha`
  ADD CONSTRAINT `twirausaha_id_alumni_foreign` FOREIGN KEY (`id_alumni`) REFERENCES `talumni` (`id_alumni`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
