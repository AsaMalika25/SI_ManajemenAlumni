-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2023 at 03:52 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

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
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id_log` int(11) NOT NULL,
  `logs` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id_log`, `logs`, `created_at`, `updated_at`) VALUES
(1, 'MalikaAbdi: Melakukan Penambahan Surat Dengan Nomor 1', NULL, NULL),
(2, 'MalikaAbdi: Melakukan Penambahan Surat Dengan Nomor 2', NULL, NULL),
(3, 'MalikaAbdia: Melakukan Penambahan Surat Dengan Nomor 3', NULL, NULL),
(4, 'MalikaAbdi: Melakukan Penambahan Surat Dengan Nomor 1', NULL, NULL),
(5, 'MalikaAbdi: Melakukan Penambahan Surat Dengan Nomor 2', NULL, NULL),
(6, 'MalikaAbdi: Melakukan Penambahan Surat Dengan Nomor 3', NULL, NULL),
(7, 'Indomarco cabang banjar: Melakukan Penambahan Surat Dengan Nomor 4', NULL, NULL),
(8, 'MalikaAbdi: Melakukan Penambahan Surat Dengan Nomor 5', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
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
(17, '2023_10_22_002249_create_trigger_alumni', 1),
(18, '2023_10_22_003216_create_logs', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `takun`
--

CREATE TABLE `takun` (
  `id_akun` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `role` enum('superadmin','alumni','kaprog') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `takun`
--

INSERT INTO `takun` (`id_akun`, `username`, `password`, `role`, `created_at`, `updated_at`) VALUES
(1, 'superadmin', '$2y$10$lCd/.cNP9Wd.Dx3zzKMbq.9WHA9ZvpLH7iwQpCxy7CeuG.D/O6jsO', 'superadmin', NULL, NULL),
(2, 'alumni', '$2y$10$k0YK.E3sFRBDjusiJ3CuiuqT1PJ93gK6aHR//3g0U88I0KM0vd45G', 'alumni', NULL, NULL),
(3, 'kaprog', '$2y$10$KNvomBXnCVvphNyhwcfa4e03JlFS6wpHdb.ZziJt7q29ydlHMoGBS', 'kaprog', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `talumni`
--

CREATE TABLE `talumni` (
  `id_alumni` int(11) NOT NULL,
  `id_akun` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `id_angkatan` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_telp` int(11) NOT NULL,
  `sosmed` text NOT NULL,
  `ijazah` text NOT NULL,
  `jenkel` enum('Laki-laki','Perempuan') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Triggers `talumni`
--
DELIMITER $$
CREATE TRIGGER `trgAlumniInsert` AFTER INSERT ON `talumni` FOR EACH ROW BEGIN
        DECLARE alumni_id INT;
        DECLARE nama_alumniid VARCHAR(200);

        SELECT nama INTO nama_alumniid FROM talumni WHERE id_alumni = NEW.id_alumni;
        SELECT id_alumni INTO alumni_id FROM talumni WHERE id_alumni = NEW.id_alumni;

        INSERT INTO logs (logs) VALUES (CONCAT(nama_alumniid, ": Melakukan Penambahan Surat Dengan Nomor ", alumni_id));
    END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tangkatan`
--

CREATE TABLE `tangkatan` (
  `id_angkatan` int(11) NOT NULL,
  `no_angkatan` int(11) NOT NULL,
  `tahun_masuk` date NOT NULL,
  `tahun_keluar` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tangkatan`
--

INSERT INTO `tangkatan` (`id_angkatan`, `no_angkatan`, `tahun_masuk`, `tahun_keluar`, `created_at`, `updated_at`) VALUES
(1, 25, '2023-10-22', '2023-10-24', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tberita`
--

CREATE TABLE `tberita` (
  `id_berita` int(11) NOT NULL,
  `id_alumni` int(11) NOT NULL,
  `id_superadmin` int(11) NOT NULL,
  `id_jenis_berita` int(11) NOT NULL,
  `gambar` text NOT NULL,
  `judul_berita` varchar(255) NOT NULL,
  `tgl_post` date NOT NULL,
  `kode_berita` int(11) NOT NULL,
  `ket_berita` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tjenis_berita`
--

CREATE TABLE `tjenis_berita` (
  `id_jenis_berita` int(11) NOT NULL,
  `jenis_berita` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tjurusan`
--

CREATE TABLE `tjurusan` (
  `id_jurusan` int(11) NOT NULL,
  `nama_jurusan` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tjurusan`
--

INSERT INTO `tjurusan` (`id_jurusan`, `nama_jurusan`, `created_at`, `updated_at`) VALUES
(1, 'Rekayasa Perangkat Lunak', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tkaprog`
--

CREATE TABLE `tkaprog` (
  `id_kaprog` int(11) NOT NULL,
  `id_akun` int(11) NOT NULL,
  `id_jurusan` int(11) NOT NULL,
  `nama_kaprog` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tkelas`
--

CREATE TABLE `tkelas` (
  `id_kelas` int(11) NOT NULL,
  `id_jurusan` int(11) NOT NULL,
  `id_angkatan` int(11) NOT NULL,
  `nama_kelas` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tkelas`
--

INSERT INTO `tkelas` (`id_kelas`, `id_jurusan`, `id_angkatan`, `nama_kelas`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '12 rpl b', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tkerja`
--

CREATE TABLE `tkerja` (
  `id_kerja` int(11) NOT NULL,
  `id_alumni` int(11) NOT NULL,
  `instasi` text NOT NULL,
  `jabatan` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tkuliah`
--

CREATE TABLE `tkuliah` (
  `id_kuliah` int(11) NOT NULL,
  `id_alumni` int(11) NOT NULL,
  `nama_lembaga` text NOT NULL,
  `jurusan_kuliah` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tsuperadmin`
--

CREATE TABLE `tsuperadmin` (
  `id_superadmin` int(11) NOT NULL,
  `id_akun` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `twirausaha`
--

CREATE TABLE `twirausaha` (
  `id_wirausaha` int(11) NOT NULL,
  `id_alumni` int(11) NOT NULL,
  `nama_usaha` text NOT NULL,
  `bidang` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_alumni_kelas`
-- (See below for the actual view)
--
CREATE TABLE `v_alumni_kelas` (
`id_alumni` int(11)
,`nama` varchar(255)
,`nama_kelas` varchar(255)
);

-- --------------------------------------------------------

--
-- Structure for view `v_alumni_kelas`
--
DROP TABLE IF EXISTS `v_alumni_kelas`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_alumni_kelas`  AS SELECT `talumni`.`id_alumni` AS `id_alumni`, `talumni`.`nama` AS `nama`, `tkelas`.`nama_kelas` AS `nama_kelas` FROM (`talumni` join `tkelas` on(`tkelas`.`id_kelas` = `tkelas`.`id_kelas`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id_log`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `takun`
--
ALTER TABLE `takun`
  ADD PRIMARY KEY (`id_akun`);

--
-- Indexes for table `talumni`
--
ALTER TABLE `talumni`
  ADD PRIMARY KEY (`id_alumni`),
  ADD KEY `talumni_id_akun_foreign` (`id_akun`),
  ADD KEY `talumni_id_kelas_foreign` (`id_kelas`),
  ADD KEY `talumni_id_angkatan_foreign` (`id_angkatan`);

--
-- Indexes for table `tangkatan`
--
ALTER TABLE `tangkatan`
  ADD PRIMARY KEY (`id_angkatan`);

--
-- Indexes for table `tberita`
--
ALTER TABLE `tberita`
  ADD PRIMARY KEY (`id_berita`),
  ADD KEY `tberita_id_alumni_foreign` (`id_alumni`),
  ADD KEY `tberita_id_superadmin_foreign` (`id_superadmin`),
  ADD KEY `tberita_id_jenis_berita_foreign` (`id_jenis_berita`);

--
-- Indexes for table `tjenis_berita`
--
ALTER TABLE `tjenis_berita`
  ADD PRIMARY KEY (`id_jenis_berita`);

--
-- Indexes for table `tjurusan`
--
ALTER TABLE `tjurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indexes for table `tkaprog`
--
ALTER TABLE `tkaprog`
  ADD PRIMARY KEY (`id_kaprog`),
  ADD KEY `tkaprog_id_akun_foreign` (`id_akun`),
  ADD KEY `tkaprog_id_jurusan_foreign` (`id_jurusan`);

--
-- Indexes for table `tkelas`
--
ALTER TABLE `tkelas`
  ADD PRIMARY KEY (`id_kelas`),
  ADD KEY `tkelas_id_jurusan_foreign` (`id_jurusan`),
  ADD KEY `tkelas_id_angkatan_foreign` (`id_angkatan`);

--
-- Indexes for table `tkerja`
--
ALTER TABLE `tkerja`
  ADD PRIMARY KEY (`id_kerja`),
  ADD KEY `tkerja_id_alumni_foreign` (`id_alumni`);

--
-- Indexes for table `tkuliah`
--
ALTER TABLE `tkuliah`
  ADD PRIMARY KEY (`id_kuliah`),
  ADD KEY `tkuliah_id_alumni_foreign` (`id_alumni`);

--
-- Indexes for table `tsuperadmin`
--
ALTER TABLE `tsuperadmin`
  ADD PRIMARY KEY (`id_superadmin`),
  ADD KEY `tsuperadmin_id_akun_foreign` (`id_akun`);

--
-- Indexes for table `twirausaha`
--
ALTER TABLE `twirausaha`
  ADD PRIMARY KEY (`id_wirausaha`),
  ADD KEY `twirausaha_id_alumni_foreign` (`id_alumni`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id_log` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `takun`
--
ALTER TABLE `takun`
  MODIFY `id_akun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `talumni`
--
ALTER TABLE `talumni`
  MODIFY `id_alumni` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tangkatan`
--
ALTER TABLE `tangkatan`
  MODIFY `id_angkatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tberita`
--
ALTER TABLE `tberita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tjenis_berita`
--
ALTER TABLE `tjenis_berita`
  MODIFY `id_jenis_berita` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tjurusan`
--
ALTER TABLE `tjurusan`
  MODIFY `id_jurusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tkaprog`
--
ALTER TABLE `tkaprog`
  MODIFY `id_kaprog` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tkelas`
--
ALTER TABLE `tkelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tkerja`
--
ALTER TABLE `tkerja`
  MODIFY `id_kerja` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tkuliah`
--
ALTER TABLE `tkuliah`
  MODIFY `id_kuliah` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tsuperadmin`
--
ALTER TABLE `tsuperadmin`
  MODIFY `id_superadmin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `twirausaha`
--
ALTER TABLE `twirausaha`
  MODIFY `id_wirausaha` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `talumni`
--
ALTER TABLE `talumni`
  ADD CONSTRAINT `talumni_id_akun_foreign` FOREIGN KEY (`id_akun`) REFERENCES `takun` (`id_akun`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `talumni_id_angkatan_foreign` FOREIGN KEY (`id_angkatan`) REFERENCES `tangkatan` (`id_angkatan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `talumni_id_kelas_foreign` FOREIGN KEY (`id_kelas`) REFERENCES `tkelas` (`id_kelas`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tberita`
--
ALTER TABLE `tberita`
  ADD CONSTRAINT `tberita_id_alumni_foreign` FOREIGN KEY (`id_alumni`) REFERENCES `talumni` (`id_alumni`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tberita_id_jenis_berita_foreign` FOREIGN KEY (`id_jenis_berita`) REFERENCES `tjenis_berita` (`id_jenis_berita`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tberita_id_superadmin_foreign` FOREIGN KEY (`id_superadmin`) REFERENCES `tsuperadmin` (`id_superadmin`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tkaprog`
--
ALTER TABLE `tkaprog`
  ADD CONSTRAINT `tkaprog_id_akun_foreign` FOREIGN KEY (`id_akun`) REFERENCES `takun` (`id_akun`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tkaprog_id_jurusan_foreign` FOREIGN KEY (`id_jurusan`) REFERENCES `tjurusan` (`id_jurusan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tkelas`
--
ALTER TABLE `tkelas`
  ADD CONSTRAINT `tkelas_id_angkatan_foreign` FOREIGN KEY (`id_angkatan`) REFERENCES `tangkatan` (`id_angkatan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tkelas_id_jurusan_foreign` FOREIGN KEY (`id_jurusan`) REFERENCES `tjurusan` (`id_jurusan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tkerja`
--
ALTER TABLE `tkerja`
  ADD CONSTRAINT `tkerja_id_alumni_foreign` FOREIGN KEY (`id_alumni`) REFERENCES `talumni` (`id_alumni`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tkuliah`
--
ALTER TABLE `tkuliah`
  ADD CONSTRAINT `tkuliah_id_alumni_foreign` FOREIGN KEY (`id_alumni`) REFERENCES `talumni` (`id_alumni`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tsuperadmin`
--
ALTER TABLE `tsuperadmin`
  ADD CONSTRAINT `tsuperadmin_id_akun_foreign` FOREIGN KEY (`id_akun`) REFERENCES `takun` (`id_akun`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `twirausaha`
--
ALTER TABLE `twirausaha`
  ADD CONSTRAINT `twirausaha_id_alumni_foreign` FOREIGN KEY (`id_alumni`) REFERENCES `talumni` (`id_alumni`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
