-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 20 Agu 2026 pada 05.30
-- Versi server: 5.7.33
-- Versi PHP: 8.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `atl_lestari_jendela`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `banner`
--

CREATE TABLE `banner` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `url` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `faq`
--

CREATE TABLE `faq` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `faq`
--

INSERT INTO `faq` (`id`, `question`, `answer`, `created_at`, `updated_at`) VALUES
(1, 'Apa itu Jendela Lestari?.', 'Jendela Lestari adalah tempat menjual bahan jendela dan pintu juga menawarkan jasa pemasangan jendela dan pintu', NULL, '2024-08-28 04:51:56'),
(2, 'Dimana jendela lestari', 'Jendela lestari beralamat di jababeka', NULL, NULL),
(3, 'Kenapa harus jendela lestari', 'Jendela lestari menggunakan profile tonish sebagai bahan dari pada uPVC yang dijual juga melakukan jasa pemasangan dengan sangat baik dari orang yang profesional', NULL, '2024-08-28 04:52:05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `feedback`
--

CREATE TABLE `feedback` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_06_03_090328_create_products_table', 1),
(6, '2022_06_03_090811_create_product_categories_table', 1),
(7, '2022_06_13_152516_create_product_sub_categories_table', 1),
(8, '2022_06_14_144746_create_profile_table', 1),
(9, '2022_06_17_091502_create_product_images_table', 1),
(10, '2022_06_17_094856_create_faq_table', 1),
(11, '2022_06_17_132558_create_posts_table', 1),
(12, '2022_06_17_132709_create_post_categories_table', 1),
(13, '2022_06_21_133939_create_post_images_table', 1),
(14, '2022_06_24_104404_create_slider_table', 1),
(15, '2022_06_24_105318_create_banner_table', 1),
(16, '2022_06_27_141939_create_feedback_table', 1),
(17, '2022_07_04_101144_create_product_files_table', 1),
(18, '2022_07_05_095902_create_projects_table', 1),
(19, '2022_07_05_100438_create_project_images_table', 1),
(20, '2022_07_05_101247_create_project_categories_table', 1),
(21, '2022_07_07_111626_create_sbu_table', 1),
(22, '2022_12_19_094427_create_product_project_table', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `posts`
--

INSERT INTO `posts` (`id`, `category_id`, `title`, `slug`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, 2, 'asds', 'asds', '<p>asd</p>\n', '2022-10-04 09:37:45', '2022-10-04 09:37:45'),
(2, 1, 'tes', 'tes', '<p>tasca</p>\n', '2022-10-18 07:12:14', '2022-10-18 07:12:14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `post_categories`
--

CREATE TABLE `post_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `post_categories`
--

INSERT INTO `post_categories` (`id`, `title`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Acara', 'acara', NULL, NULL),
(2, 'Berita', 'berita', NULL, NULL),
(3, 'Edukasi', 'edukasi', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `post_images`
--

CREATE TABLE `post_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `url` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `post_images`
--

INSERT INTO `post_images` (`id`, `post_id`, `url`, `created_at`, `updated_at`) VALUES
(1, 1, 'assets/dashboard/post/HkOemngqRSkFI0CAA7IBPcqZ63sSTZAd3QdcvQub.jpg', '2022-10-04 09:37:50', '2022-10-04 09:37:50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `sub_category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT '1',
  `home_show` tinyint(1) NOT NULL DEFAULT '0',
  `spesifikasi` longtext COLLATE utf8mb4_unicode_ci,
  `deskripsi` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`id`, `category_id`, `sub_category_id`, `title`, `slug`, `type`, `home_show`, `spesifikasi`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, 1, 3, 'Jendela Jungkit', 'jendela-jungkit', 0, 0, '<p>asdasdasdas</p>\n', NULL, '2022-11-07 07:08:04', '2026-08-18 04:35:25'),
(3, 1, 1, 'Jendela Swing', 'jendela-swing', 0, 0, NULL, NULL, '2026-08-18 03:53:26', '2026-08-18 04:35:31'),
(4, 1, 2, 'Jendela Sliding', 'jendela-sliding', 0, 0, NULL, NULL, '2026-08-18 04:05:13', '2026-08-18 04:34:40'),
(5, 1, 1, 'Jendela Bouven', 'jendela-bouven', 0, 0, NULL, NULL, '2026-08-18 04:13:00', '2026-08-18 04:34:12'),
(6, 1, 1, 'Pintu Swing', 'pintu-swing', 1, 0, NULL, NULL, '2026-08-18 04:14:08', '2026-08-18 04:35:12'),
(7, 1, 2, 'Pintu Sliding', 'pintu-sliding', 1, 0, NULL, NULL, '2026-08-18 04:14:46', '2026-08-18 04:35:37');

-- --------------------------------------------------------

--
-- Struktur dari tabel `product_categories`
--

CREATE TABLE `product_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `product_categories`
--

INSERT INTO `product_categories` (`id`, `title`, `slug`, `url`, `created_at`, `updated_at`) VALUES
(1, 'UPVC', 'upvc', 'assets/dashboard/product/category/images/gqjaO1u1VtPhjztCap2BKaDcPDkzWeikYvCU53mQ.jpg', NULL, '2026-08-18 03:31:05'),
(2, 'Aluminium', 'aluminium', 'assets/dashboard/product/category/images/rGtSI0U2skqARhTNsA6OouFFXVUxThmFsmpfzvns.jpg', NULL, '2026-08-18 03:31:35');

-- --------------------------------------------------------

--
-- Struktur dari tabel `product_files`
--

CREATE TABLE `product_files` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `url` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `url` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `url`, `created_at`, `updated_at`) VALUES
(13, 4, 'assets/dashboard/product/images/VzsdaithIDADorGU0gmu8OpLJfpLkDLdcdjubcPE.png', '2026-08-18 04:09:38', '2026-08-18 04:09:38'),
(14, 1, 'assets/dashboard/product/images/hY8aZC18NyJ68hNVA70U67OSK72S2IpVJO4Wzqye.png', '2026-08-18 04:10:25', '2026-08-18 04:10:25'),
(15, 3, 'assets/dashboard/product/images/27KKo4UYuqXZ5h2VVnQbRvVMbvl4P8P6vmkARgcE.png', '2026-08-18 04:10:48', '2026-08-18 04:10:48'),
(16, 5, 'assets/dashboard/product/images/hFztYrhhl7xUtm0A9lyfvUA4G9K7Z2m0ryyImPnw.png', '2026-08-18 04:13:07', '2026-08-18 04:13:07'),
(17, 6, 'assets/dashboard/product/images/Mqtgk1SIwI2BYNsnjhSU8zkus1Y9cjjBEXTaGdPz.png', '2026-08-18 04:14:15', '2026-08-18 04:14:15'),
(18, 7, 'assets/dashboard/product/images/v560xcUOvalib0pgWIPBtKxpC46JZLu0gszvoAZl.png', '2026-08-18 04:15:21', '2026-08-18 04:15:21'),
(19, 1, 'assets/dashboard/product/images/9XFIjcRszwtEAB7NHUeT6ZnSVVaMbkpCM7CG8UPR.png', '2026-08-18 04:45:30', '2026-08-18 04:45:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `product_project`
--

CREATE TABLE `product_project` (
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `project_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `product_project`
--

INSERT INTO `product_project` (`product_id`, `project_id`) VALUES
(6, 13),
(7, 13),
(7, 14),
(3, 15),
(7, 15),
(4, 16),
(7, 16),
(3, 17),
(6, 17),
(6, 18),
(1, 19),
(4, 19),
(5, 19),
(6, 19),
(7, 19);

-- --------------------------------------------------------

--
-- Struktur dari tabel `product_sub_categories`
--

CREATE TABLE `product_sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` text COLLATE utf8mb4_unicode_ci,
  `sub_show` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `product_sub_categories`
--

INSERT INTO `product_sub_categories` (`id`, `category_id`, `title`, `slug`, `url`, `sub_show`, `created_at`, `updated_at`) VALUES
(1, 1, 'Casement', 'casement', 'assets/dashboard/product/category/images/syYJvxNFjcEiSHmtcZj40otP1dYadBLziGlrmJer.jpg', 1, NULL, '2026-08-20 04:52:24'),
(2, 1, 'Sliding', 'sliding', 'assets/dashboard/product/category/images/lI5DHxLl3AJC3lR1xHEDbBfhCm5qCnum3PoHq6W0.jpg', 1, NULL, '2026-08-20 04:52:36'),
(3, 1, 'Top Hung', 'top-hung', 'assets/dashboard/product/category/images/krOE8dhAiys1jo4Gx6RwhW52SoZa8te2ft1AiAYI.jpg', 1, NULL, '2026-08-20 04:52:59'),
(4, 1, 'Fixed', 'fixed', NULL, 0, '2026-08-18 05:01:26', '2026-08-18 05:01:26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profile`
--

CREATE TABLE `profile` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_tlp` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `profile`
--

INSERT INTO `profile` (`id`, `name`, `no_tlp`, `email`, `address`, `description`, `created_at`, `updated_at`) VALUES
(1, 'LESTARI JENDELA', '(021)-8646-506', 'lestarijendela@gmail.com', 'Jababeka 1, Jl. Jababeka XVIIB Unit U20A Harja Mekar, Cikarang Utara, Bekasi, 13450 Indonesia.', 'Lestari Jendela merupakan merk dagang untuk produk kusen/frame, daun pintu dan jendela yang diproduksi oleh PT. Atap Teduh Lestari. Lestari Jendela memiliki 2 jenis material yang ditawarkan sebagai pilihan yaitu uPVC dan Aluminium. Dengan beragam tipe kusen/frame standard maupun custom sesuai dengan kebutuhan pelanggan.', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `highlight` tinyint(1) NOT NULL DEFAULT '0',
  `year` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `projects`
--

INSERT INTO `projects` (`id`, `product_id`, `category_id`, `title`, `slug`, `highlight`, `year`, `created_at`, `updated_at`) VALUES
(5, 1, 1, 'Akara Villa', 'akara-villa', 0, '2024', NULL, NULL),
(6, 1, 1, 'Kantor Jababeka', 'kantor-jababeka\r\n', 0, '2023', NULL, NULL),
(8, 1, 1, 'Workshop Universitas Airlangga', 'workshop-unair', 0, '2024', NULL, NULL),
(13, NULL, 1, 'Kantor Surabaya', 'kantor-surabaya', 0, '2024', '2026-08-19 04:46:24', '2026-08-19 04:46:24'),
(14, NULL, 1, 'Private House Lembang', 'private-house-lembang', 0, '2024', '2026-08-19 04:49:55', '2026-08-19 04:49:55'),
(15, NULL, 1, 'Rumah Negara Jl. Denpasar', 'rumah-negara-jl-denpasar', 0, '2024', '2026-08-19 04:53:45', '2026-08-19 04:53:45'),
(16, NULL, 1, 'Villa PADMA', 'villa-padma', 0, '2024', '2026-08-19 04:56:30', '2026-08-19 04:56:30'),
(17, NULL, 1, 'Sea Water Reverse Osmosis ( SWRO ) Lembongan', 'sea-water-reverse-osmosis-swro-lembongan', 0, '2024', '2026-08-19 05:00:47', '2026-08-19 05:00:47'),
(18, NULL, 1, 'Pameran Indo Build Tech ( IBT )', 'pameran-indo-build-tech-ibt', 0, '2022', '2026-08-19 05:03:31', '2026-08-19 05:03:31'),
(19, NULL, 1, 'Pameran Indo Build Tech ( IBT )', 'pameran-indo-build-tech-ibt', 0, '2023', '2026-08-19 05:06:21', '2026-08-19 05:06:33');

-- --------------------------------------------------------

--
-- Struktur dari tabel `project_categories`
--

CREATE TABLE `project_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `project_categories`
--

INSERT INTO `project_categories` (`id`, `title`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'uPVC', 'upvc', '2022-12-19 02:25:42', '2022-12-19 02:25:42');

-- --------------------------------------------------------

--
-- Struktur dari tabel `project_images`
--

CREATE TABLE `project_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `project_id` bigint(20) UNSIGNED NOT NULL,
  `url` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `project_images`
--

INSERT INTO `project_images` (`id`, `project_id`, `url`, `created_at`, `updated_at`) VALUES
(1, 5, 'assets/dashboard/project/7C9b9E2QBgKK7QAzKX8vJYmiEl43MPZ5Aj2XGz2y.jpg', '2026-08-18 05:09:57', '2026-08-18 05:09:57'),
(2, 5, 'assets/dashboard/project/D6yGOwORB50N2T8cpj5MZzuNElOamZUGfzmxhxGH.jpg', '2026-08-18 05:10:02', '2026-08-18 05:10:02'),
(3, 6, 'assets/dashboard/project/vSgREHz6u4kAk0glIUuQW3uEqz3LNFyTGwpHFRZn.jpg', '2026-08-18 05:11:43', '2026-08-18 05:11:43'),
(4, 8, 'assets/dashboard/project/mqHgrlaz06FoLFxMpbssZsKai8wPuNWnvfDh8zAL.jpg', '2026-08-18 05:13:11', '2026-08-18 05:13:11'),
(5, 8, 'assets/dashboard/project/Rw6H1QL316wElByPXV3YcWnCkYOGhVoqqoLSmZtj.jpg', '2026-08-18 05:13:20', '2026-08-18 05:13:20'),
(6, 8, 'assets/dashboard/project/lS1lHTog8Y8aCAWL5fgvtOtoUnb17ZVseIwnnEt8.jpg', '2026-08-18 05:13:25', '2026-08-18 05:13:25'),
(7, 8, 'assets/dashboard/project/B8H7kiqPaU6Gf5woHpOcAQDTuAeBd2SI8OD3CAqL.jpg', '2026-08-18 05:13:30', '2026-08-18 05:13:30'),
(8, 8, 'assets/dashboard/project/mBcIPAvOht45jezJL5P8Z7qflyf8yWLnD1WdPR9q.jpg', '2026-08-18 05:13:36', '2026-08-18 05:13:36'),
(12, 13, 'assets/dashboard/project/bQTwo3g8UE1WGcV5HLqQasxBXcqhPfhgS5TwaZdh.jpg', '2026-08-19 04:46:40', '2026-08-19 04:46:40'),
(13, 13, 'assets/dashboard/project/l0zlbGImpCvsxXryWlQi52KlDLEbtRsz6yKfKdsD.jpg', '2026-08-19 04:46:45', '2026-08-19 04:46:45'),
(14, 13, 'assets/dashboard/project/pgBfVI6BzeyrDwpZR0GRTYelGI3g0LHRCj9jemN7.jpg', '2026-08-19 04:46:50', '2026-08-19 04:46:50'),
(15, 13, 'assets/dashboard/project/yJkB6LPVGeRVQqRD7GemFhDTVQDzgty3UAw2jGqo.jpg', '2026-08-19 04:46:56', '2026-08-19 04:46:56'),
(17, 14, 'assets/dashboard/project/Ym77DpzoyoAAr07BVgFTCNPE55eBN3cg4jyIlIAj.jpg', '2026-08-19 04:50:11', '2026-08-19 04:50:11'),
(18, 14, 'assets/dashboard/project/BNtHh242gjVqIkCBKrfjOE83QBOvjalaA8Doq2jJ.jpg', '2026-08-19 04:50:18', '2026-08-19 04:50:18'),
(19, 14, 'assets/dashboard/project/gTELe6caW3Azx6zTEiat4qihoKtIzFh7Hix1E8MO.jpg', '2026-08-19 04:50:29', '2026-08-19 04:50:29'),
(20, 16, 'assets/dashboard/project/9aKHCyVgbE4pIpZeYghqrkq1H39SRaFU2KDE0ZDK.jpg', '2026-08-19 04:56:39', '2026-08-19 04:56:39'),
(21, 16, 'assets/dashboard/project/yL6BfVCieRD2G4VnIQ9JTjbJbk7fYQSJXj8M3mBQ.jpg', '2026-08-19 04:56:44', '2026-08-19 04:56:44'),
(22, 16, 'assets/dashboard/project/wn0WajiR6sBTdXcdUCU5AVpCzHJjii2WVVOStnOd.jpg', '2026-08-19 04:56:48', '2026-08-19 04:56:48'),
(23, 16, 'assets/dashboard/project/0H7PvoG4YZvixTLuR0qmNrPclG0gHq6glv3OP8fG.jpg', '2026-08-19 04:56:57', '2026-08-19 04:56:57'),
(24, 16, 'assets/dashboard/project/gC2wZbWX9OIGgHV4ZsmvngavXk4ec7rCnfmphYRx.jpg', '2026-08-19 04:57:05', '2026-08-19 04:57:05'),
(25, 15, 'assets/dashboard/project/eD8NS1mXhxkQQUGa01GnaPJMbZG5Ub0Rx8LiFowK.jpg', '2026-08-19 04:57:30', '2026-08-19 04:57:30'),
(26, 15, 'assets/dashboard/project/Nzg9IeWgMfiMvYlE1HzIKnAnEA2jeCyTdfXYSoGq.jpg', '2026-08-19 04:57:39', '2026-08-19 04:57:39'),
(27, 15, 'assets/dashboard/project/tc8Gbi4iHxBV0RNJzORica0L6njTFzwmizbPwYeL.jpg', '2026-08-19 04:57:46', '2026-08-19 04:57:46'),
(28, 15, 'assets/dashboard/project/67VexyuoailD40Hjft8OdywtxmJZNy4tRYWnd9Qg.jpg', '2026-08-19 04:57:51', '2026-08-19 04:57:51'),
(29, 17, 'assets/dashboard/project/N9Xjz0gPnbA8Wpy0X9umy3jo3wgXMLKUjN8LWkAx.jpg', '2026-08-19 05:00:59', '2026-08-19 05:00:59'),
(30, 17, 'assets/dashboard/project/r0EjudsRTdXDL4lUyLAFAX63sSl8ZQ0RkwJwAmgG.jpg', '2026-08-19 05:01:05', '2026-08-19 05:01:05'),
(31, 17, 'assets/dashboard/project/wIDMcXPINYr5cayWbzdYRqGZT8FOb137IZbbcY5W.jpg', '2026-08-19 05:01:10', '2026-08-19 05:01:10'),
(32, 17, 'assets/dashboard/project/lURObaZEnW2DxKrlLiL4Upw3ecECnf5GVgDQIY0c.jpg', '2026-08-19 05:01:18', '2026-08-19 05:01:18'),
(33, 17, 'assets/dashboard/project/eAyP2mp2fJYaIqoqzCdZX59xx6BgzHJgk8ten7zi.jpg', '2026-08-19 05:01:25', '2026-08-19 05:01:25'),
(34, 18, 'assets/dashboard/project/hNaVCepzEOnZOfynq6yAh9o9w4i5wO7SwyKK7Ety.jpg', '2026-08-19 05:04:10', '2026-08-19 05:04:10'),
(35, 19, 'assets/dashboard/project/lNf100U2iX6wggblPFjs1YCHBkpb4AApQvm246lI.jpg', '2026-08-19 05:06:48', '2026-08-19 05:06:48'),
(36, 19, 'assets/dashboard/project/IgYIsZwbS2YGwSfdaOJPKkw3IcamOOp3Tv7fC5xQ.jpg', '2026-08-19 05:06:53', '2026-08-19 05:06:53'),
(37, 19, 'assets/dashboard/project/XMJozZcCuoM20w03tr4qAkNA4lzsb71vcB4nrhIm.jpg', '2026-08-19 05:06:58', '2026-08-19 05:06:58'),
(38, 19, 'assets/dashboard/project/DUXGnNxRJSG3An1LjcLUJvSEVWLODQiUCY4cYcg7.jpg', '2026-08-19 05:07:03', '2026-08-19 05:07:03'),
(39, 19, 'assets/dashboard/project/ecJ51k21Ws72waJSQrrrqZyQBpygDuJ9gBNRku8O.jpg', '2026-08-19 05:07:11', '2026-08-19 05:07:11'),
(40, 19, 'assets/dashboard/project/2IHeg3gpv7UpvLxWd8HMpVQi9tCOvRvGtLmKARwi.jpg', '2026-08-19 05:07:18', '2026-08-19 05:07:18'),
(41, 19, 'assets/dashboard/project/t4wcu7BdSeLDK70pfmoI1Pt9b6Z85xpCwADC3HM8.jpg', '2026-08-19 05:07:25', '2026-08-19 05:07:25'),
(42, 19, 'assets/dashboard/project/iDsCmrCZgSjRwJ8gF4Eicjmo00C3Zh1iIhf4tVOc.jpg', '2026-08-19 05:07:32', '2026-08-19 05:07:32'),
(44, 19, 'assets/dashboard/project/fDF6ybYvqWoLsRYDTgliysrdmNKkqqRa1QpKm4gN.jpg', '2026-08-19 05:08:03', '2026-08-19 05:08:03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sbu`
--

CREATE TABLE `sbu` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_sbu` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sbu`
--

INSERT INTO `sbu` (`id`, `nama_sbu`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 'Head Office', 'Jl. Raya Kalimalang, RT.2/RW.11, Pd. Klp., Kec. Duren Sawit, \r\n                             Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13450', NULL, NULL),
(2, 'Kalimalang', 'Jl. Raya Kalimalang, RT.2/RW.11, Pd. Klp., Kec. Duren Sawit, \r\n                             Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13450', NULL, NULL),
(3, 'JDC', '10, Jakarta Design Center, Jl. Gatot Subroto No.53, RT.10/RW.6, Petamburan, \r\n                            Kecamatan Tanah Abang, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta \r\n                            10260. \r\n                            2, Jl. Palmerah Barat IV No.50 - 52 G, RT.2/RW.10, Palmerah, Kec. Palmerah, \r\n                            Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 10260', NULL, NULL),
(4, 'Fatmawati', 'Jl. RS. Fatmawati Raya No.15G, RT.1/RW.6, Gandaria Utara, Kec. Kby. Baru, \r\n                             Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12140', NULL, NULL),
(5, 'Suryawijaya', 'Jl. Tebet Utara IV B No.5, RT.4/RW.2, Tebet Tim., \r\n                            Kec. Tebet, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12810', NULL, NULL),
(6, 'Bandung', 'Jalan Jenderal Ahmad Yani No.296 Plaza IBCC Blok.B3 No.11-12, \r\n                             Kacapiring, Batununggal, Bandung City, West Java 40271', NULL, NULL),
(7, 'Semarang', 'Jl. Boulevard Bukit Kencana Jaya Ruko AD No. 20, Meteseh, \r\n                            Kec. Tembalang, Kota Semarang, Jawa Tengah 50271', NULL, NULL),
(8, 'Surabaya', 'Jl. Rungkut Asri Utara RL 2F no. 1, Kali Rungkut, \r\n                            Kec. Rungkut, Kota SBY, Jawa Timur 60293', NULL, NULL),
(9, 'Bali', 'Jl. Mahendradatta No.129, Padangsambian, \r\n                            Kec. Denpasar Bar., Kota Denpasar, Bali 80119', NULL, NULL),
(10, 'Asia', 'Jl. Asia, Sei Rengas I, Kec. Medan Kota, \r\n                            Kota Medan, Sumatera Utara 20211', NULL, NULL),
(11, 'Sarah', 'Jl. Mayjen D.I Panjaitan No.112/25, Babura, \r\n                            Kec. Medan Baru, Kota Medan, Sumatera Utara 20154', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `slider`
--

CREATE TABLE `slider` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `url` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `is_admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin', 'admin@example.com', NULL, '$2y$10$ahjJQnKypmiS5vHvy8WNiuAbVZdyyAlFxFxU9gPHUd5k6V/Nn2fYC', 0, NULL, '2022-08-29 08:01:28', '2026-08-18 03:29:35'),
(2, 'Superadmin', 'superadmin', 'superadmin@example.com', NULL, '$2y$10$hlgwq9EjfhQOQxWV8hJ5S.ShiIBx.pP5Nv356ghfPjdUdxem8ZYja', 0, NULL, '2022-08-29 08:01:29', '2026-08-20 04:51:27');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

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
-- Indeks untuk tabel `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `post_categories`
--
ALTER TABLE `post_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `post_images`
--
ALTER TABLE `post_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_images_post_id_foreign` (`post_id`);

--
-- Indeks untuk tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `product_files`
--
ALTER TABLE `product_files`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_files_product_id_foreign` (`product_id`);

--
-- Indeks untuk tabel `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_images_product_id_foreign` (`product_id`);

--
-- Indeks untuk tabel `product_project`
--
ALTER TABLE `product_project`
  ADD PRIMARY KEY (`product_id`,`project_id`),
  ADD KEY `product_project_project_id_foreign` (`project_id`);

--
-- Indeks untuk tabel `product_sub_categories`
--
ALTER TABLE `product_sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `project_categories`
--
ALTER TABLE `project_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `project_images`
--
ALTER TABLE `project_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `project_images_project_id_foreign` (`project_id`);

--
-- Indeks untuk tabel `sbu`
--
ALTER TABLE `sbu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT untuk tabel `banner`
--
ALTER TABLE `banner`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `faq`
--
ALTER TABLE `faq`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `post_categories`
--
ALTER TABLE `post_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `post_images`
--
ALTER TABLE `post_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `product_files`
--
ALTER TABLE `product_files`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `product_sub_categories`
--
ALTER TABLE `product_sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `profile`
--
ALTER TABLE `profile`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `project_categories`
--
ALTER TABLE `project_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `project_images`
--
ALTER TABLE `project_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT untuk tabel `sbu`
--
ALTER TABLE `sbu`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `slider`
--
ALTER TABLE `slider`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `post_images`
--
ALTER TABLE `post_images`
  ADD CONSTRAINT `post_images_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `product_files`
--
ALTER TABLE `product_files`
  ADD CONSTRAINT `product_files_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `product_images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `product_project`
--
ALTER TABLE `product_project`
  ADD CONSTRAINT `product_project_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `product_project_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`);

--
-- Ketidakleluasaan untuk tabel `project_images`
--
ALTER TABLE `project_images`
  ADD CONSTRAINT `project_images_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
