-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Время создания: Май 30 2025 г., 18:01
-- Версия сервера: 8.0.30
-- Версия PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `fashionshop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `admins`
--

CREATE TABLE `admins` (
  `id` bigint UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', '2025-05-25 13:15:49', '2025-05-25 13:15:49');

-- --------------------------------------------------------

--
-- Структура таблицы `baskets`
--

CREATE TABLE `baskets` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` int NOT NULL,
  `category_id` int NOT NULL,
  `product_id` int NOT NULL,
  `size_id` int NOT NULL,
  `color_id` int NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pcs` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `baskets`
--

INSERT INTO `baskets` (`id`, `user_id`, `category_id`, `product_id`, `size_id`, `color_id`, `image`, `pcs`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 2, 2, 'photo_2025-05-12_23-32-28.jpg', '2', '2025-05-30 10:03:11', '2025-05-30 10:03:11');

-- --------------------------------------------------------

--
-- Структура таблицы `cards`
--

CREATE TABLE `cards` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` int NOT NULL,
  `check` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_baner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `name`, `image_baner`, `created_at`, `updated_at`) VALUES
(1, 'ayaq kiyim', 'Flux_Dev_A_sleek_modern_pair_of_unisex_sneakers_with_vibrant_m_3.jpg', '2025-05-25 13:15:49', '2025-05-25 13:15:49'),
(2, 'kóylek', 'Flux_Dev_A_flowing_floorsweeping_kylek_dress_in_a_soft_creamy__2.jpg', '2025-05-25 13:15:49', '2025-05-25 13:15:49'),
(3, 'erler shalbar', 'Flux_Dev_Rugged_or_casual_mens_denim_pants_specifically_erle_s_0.jpg', '2025-05-25 13:15:49', '2025-05-25 13:15:49'),
(4, 'ayeller shalbarı', 'Flux_Dev_A_pair_of_stylish_ayeller_shalbari_womens_jeans_are_e_0.jpg', '2025-05-25 13:15:49', '2025-05-25 13:15:49');

-- --------------------------------------------------------

--
-- Структура таблицы `clients`
--

CREATE TABLE `clients` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` int NOT NULL,
  `surname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `colors`
--

CREATE TABLE `colors` (
  `id` bigint UNSIGNED NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `colors`
--

INSERT INTO `colors` (`id`, `color`, `created_at`, `updated_at`) VALUES
(1, 'qara', '2025-05-25 13:15:49', '2025-05-25 13:15:49'),
(2, 'kók', '2025-05-25 13:15:49', '2025-05-25 13:15:49'),
(3, 'sur', '2025-05-25 13:15:49', '2025-05-25 13:15:49'),
(4, 'qońır', '2025-05-30 10:00:21', '2025-05-30 10:00:21'),
(5, 'qızǵılt', '2025-05-30 10:13:02', '2025-05-30 10:13:02'),
(6, 'jasıl', '2025-05-30 10:13:23', '2025-05-30 10:13:32'),
(7, 'aq', '2025-05-30 10:14:05', '2025-05-30 10:14:05'),
(8, 'sarı', '2025-05-30 10:17:50', '2025-05-30 10:17:50');

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `histories`
--

CREATE TABLE `histories` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` int NOT NULL,
  `category_id` int NOT NULL,
  `product_id` int NOT NULL,
  `size_id` int NOT NULL,
  `color_id` int NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pcs` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `summa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_02_07_103450_create_categories_table', 1),
(6, '2024_02_07_105917_create_products_table', 1),
(7, '2024_02_27_111624_create_baskets_table', 1),
(8, '2024_03_04_165031_create_abouts_table', 1),
(9, '2024_03_20_105443_create_sizes_table', 1),
(10, '2024_03_20_113815_create_pieces_table', 1),
(11, '2024_03_28_113515_create_options_table', 1),
(12, '2024_03_28_113628_create_colors_table', 1),
(13, '2024_05_06_083108_create_clients_table', 1),
(14, '2024_05_07_102315_create_cards_table', 1),
(15, '2024_05_09_084400_create_histories_table', 1),
(16, '2025_05_06_162448_create_admins_table', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `options`
--

CREATE TABLE `options` (
  `id` bigint UNSIGNED NOT NULL,
  `product_id` int NOT NULL,
  `size_id` int NOT NULL,
  `color_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `options`
--

INSERT INTO `options` (`id`, `product_id`, `size_id`, `color_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, '2025-05-25 13:16:25', '2025-05-25 13:16:25'),
(2, 1, 2, 2, '2025-05-25 13:16:25', '2025-05-25 13:16:25'),
(3, 1, 3, 3, '2025-05-25 13:16:25', '2025-05-25 13:16:25'),
(4, 2, 1, 1, '2025-05-30 09:56:03', '2025-05-30 09:56:03'),
(5, 2, 2, 2, '2025-05-30 09:56:03', '2025-05-30 09:56:03'),
(6, 3, 2, 1, '2025-05-30 09:58:46', '2025-05-30 09:58:46'),
(7, 3, 4, 2, '2025-05-30 09:58:46', '2025-05-30 09:58:46'),
(8, 4, 3, 1, '2025-05-30 10:01:48', '2025-05-30 10:01:48'),
(9, 4, 4, 3, '2025-05-30 10:01:48', '2025-05-30 10:01:48'),
(10, 4, 5, 4, '2025-05-30 10:01:48', '2025-05-30 10:01:48'),
(11, 5, 6, 2, '2025-05-30 10:15:24', '2025-05-30 10:15:24'),
(12, 5, 7, 5, '2025-05-30 10:15:24', '2025-05-30 10:15:24'),
(13, 5, 8, 6, '2025-05-30 10:15:24', '2025-05-30 10:15:24'),
(14, 5, 9, 7, '2025-05-30 10:15:24', '2025-05-30 10:15:24'),
(15, 6, 7, 1, '2025-05-30 10:19:08', '2025-05-30 10:19:08'),
(16, 6, 8, 5, '2025-05-30 10:19:08', '2025-05-30 10:19:08'),
(17, 6, 9, 8, '2025-05-30 10:19:08', '2025-05-30 10:19:08'),
(18, 7, 7, 1, '2025-05-30 10:25:13', '2025-05-30 10:25:13'),
(19, 7, 8, 7, '2025-05-30 10:25:13', '2025-05-30 10:25:13'),
(20, 8, 7, 1, '2025-05-30 10:25:45', '2025-05-30 10:25:45'),
(21, 8, 8, 7, '2025-05-30 10:25:45', '2025-05-30 10:25:45'),
(22, 9, 7, 2, '2025-05-30 10:31:05', '2025-05-30 10:31:05'),
(23, 9, 8, 7, '2025-05-30 10:31:05', '2025-05-30 10:31:05'),
(24, 10, 7, 2, '2025-05-30 10:31:16', '2025-05-30 10:31:16'),
(25, 10, 8, 5, '2025-05-30 10:31:16', '2025-05-30 10:31:16'),
(26, 10, 9, 7, '2025-05-30 10:31:16', '2025-05-30 10:31:16'),
(27, 11, 1, 1, '2025-05-30 10:38:34', '2025-05-30 10:38:34'),
(28, 11, 2, 2, '2025-05-30 10:38:34', '2025-05-30 10:38:34'),
(29, 11, 10, 3, '2025-05-30 10:38:34', '2025-05-30 10:38:34'),
(30, 12, 7, 1, '2025-05-30 10:39:44', '2025-05-30 10:39:44'),
(31, 12, 8, 4, '2025-05-30 10:39:44', '2025-05-30 10:39:44'),
(32, 12, 9, 7, '2025-05-30 10:39:44', '2025-05-30 10:39:44'),
(33, 13, 7, 1, '2025-05-30 10:45:53', '2025-05-30 10:45:53'),
(34, 13, 9, 7, '2025-05-30 10:45:53', '2025-05-30 10:45:53'),
(35, 14, 6, 1, '2025-05-30 10:49:59', '2025-05-30 10:49:59'),
(36, 14, 7, 5, '2025-05-30 10:49:59', '2025-05-30 10:49:59'),
(37, 14, 8, 7, '2025-05-30 10:49:59', '2025-05-30 10:49:59'),
(38, 15, 7, 1, '2025-05-30 10:51:13', '2025-05-30 10:51:13'),
(39, 15, 8, 3, '2025-05-30 10:51:13', '2025-05-30 10:51:13'),
(40, 15, 9, 7, '2025-05-30 10:51:13', '2025-05-30 10:51:13'),
(41, 16, 6, 1, '2025-05-30 10:53:32', '2025-05-30 10:53:32'),
(42, 16, 7, 3, '2025-05-30 10:53:32', '2025-05-30 10:53:32'),
(43, 16, 8, 4, '2025-05-30 10:53:32', '2025-05-30 10:53:32');

-- --------------------------------------------------------

--
-- Структура таблицы `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `pieces`
--

CREATE TABLE `pieces` (
  `id` bigint UNSIGNED NOT NULL,
  `category_id` int NOT NULL,
  `product_id` int NOT NULL,
  `size_id` int NOT NULL,
  `color_id` int NOT NULL,
  `pcs` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `pieces`
--

INSERT INTO `pieces` (`id`, `category_id`, `product_id`, `size_id`, `color_id`, `pcs`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 1, 3, '2025-05-25 13:16:33', '2025-05-25 13:16:33'),
(2, 1, 1, 1, 2, 4, '2025-05-25 13:16:37', '2025-05-25 13:16:37'),
(3, 1, 1, 1, 3, 5, '2025-05-25 13:16:41', '2025-05-25 13:16:41'),
(4, 1, 1, 2, 1, 2, '2025-05-25 13:16:45', '2025-05-25 13:16:45'),
(5, 1, 1, 2, 2, 3, '2025-05-25 13:16:48', '2025-05-25 13:16:48'),
(6, 1, 1, 3, 3, 1, '2025-05-25 13:16:52', '2025-05-25 13:16:52'),
(7, 1, 2, 1, 1, 3, '2025-05-30 09:56:17', '2025-05-30 09:56:17'),
(8, 1, 2, 1, 2, 2, '2025-05-30 09:56:24', '2025-05-30 09:56:24'),
(9, 1, 2, 2, 1, 4, '2025-05-30 09:56:30', '2025-05-30 09:56:30'),
(10, 1, 2, 2, 2, 1, '2025-05-30 09:56:35', '2025-05-30 09:56:35'),
(11, 1, 3, 2, 1, 2, '2025-05-30 09:59:02', '2025-05-30 09:59:02'),
(12, 1, 3, 2, 2, 5, '2025-05-30 09:59:09', '2025-05-30 09:59:09'),
(13, 1, 3, 4, 1, 1, '2025-05-30 09:59:16', '2025-05-30 09:59:16'),
(14, 1, 3, 4, 2, 3, '2025-05-30 09:59:21', '2025-05-30 09:59:21'),
(15, 1, 4, 3, 1, 2, '2025-05-30 10:01:56', '2025-05-30 10:01:56'),
(16, 1, 4, 3, 3, 3, '2025-05-30 10:02:04', '2025-05-30 10:02:04'),
(17, 1, 4, 3, 4, 5, '2025-05-30 10:02:10', '2025-05-30 10:02:10'),
(18, 1, 4, 4, 1, 2, '2025-05-30 10:02:17', '2025-05-30 10:02:17'),
(19, 1, 4, 4, 3, 3, '2025-05-30 10:02:24', '2025-05-30 10:02:24'),
(20, 1, 4, 4, 4, 4, '2025-05-30 10:02:29', '2025-05-30 10:02:29'),
(21, 1, 4, 5, 1, 3, '2025-05-30 10:02:36', '2025-05-30 10:02:36'),
(22, 1, 4, 5, 3, 3, '2025-05-30 10:02:43', '2025-05-30 10:02:43'),
(23, 1, 4, 5, 4, 5, '2025-05-30 10:02:48', '2025-05-30 10:02:48'),
(24, 2, 6, 7, 1, 2, '2025-05-30 10:19:19', '2025-05-30 10:19:19'),
(25, 2, 6, 8, 1, 3, '2025-05-30 10:19:25', '2025-05-30 10:19:25'),
(26, 2, 6, 9, 1, 2, '2025-05-30 10:19:33', '2025-05-30 10:19:33'),
(27, 2, 6, 8, 1, 4, '2025-05-30 10:19:42', '2025-05-30 10:19:42'),
(28, 2, 6, 8, 5, 3, '2025-05-30 10:19:52', '2025-05-30 10:19:52'),
(29, 2, 6, 9, 8, 5, '2025-05-30 10:20:03', '2025-05-30 10:20:03'),
(30, 2, 6, 8, 8, 5, '2025-05-30 10:20:14', '2025-05-30 10:20:14'),
(31, 2, 5, 6, 2, 2, '2025-05-30 10:20:24', '2025-05-30 10:20:24'),
(32, 2, 5, 6, 5, 4, '2025-05-30 10:20:33', '2025-05-30 10:20:33'),
(33, 2, 5, 6, 6, 3, '2025-05-30 10:20:53', '2025-05-30 10:20:53'),
(34, 2, 5, 6, 7, 5, '2025-05-30 10:21:02', '2025-05-30 10:21:02'),
(35, 2, 5, 6, 7, 4, '2025-05-30 10:21:12', '2025-05-30 10:21:12'),
(36, 2, 5, 7, 2, 4, '2025-05-30 10:21:24', '2025-05-30 10:21:24'),
(37, 2, 5, 7, 6, 4, '2025-05-30 10:21:33', '2025-05-30 10:21:33'),
(38, 2, 5, 7, 7, 5, '2025-05-30 10:21:45', '2025-05-30 10:21:45'),
(39, 2, 8, 7, 1, 2, '2025-05-30 10:27:56', '2025-05-30 10:27:56'),
(40, 2, 8, 8, 1, 4, '2025-05-30 10:28:04', '2025-05-30 10:28:04'),
(41, 2, 8, 8, 1, 1, '2025-05-30 10:28:10', '2025-05-30 10:28:10'),
(42, 2, 8, 8, 7, 5, '2025-05-30 10:28:17', '2025-05-30 10:28:17'),
(43, 2, 10, 7, 2, 3, '2025-05-30 10:32:17', '2025-05-30 10:32:17'),
(44, 2, 10, 7, 5, 2, '2025-05-30 10:32:26', '2025-05-30 10:32:26'),
(45, 2, 10, 7, 7, 3, '2025-05-30 10:32:32', '2025-05-30 10:32:32'),
(46, 2, 10, 8, 2, 4, '2025-05-30 10:32:40', '2025-05-30 10:32:40'),
(47, 2, 10, 8, 5, 4, '2025-05-30 10:32:47', '2025-05-30 10:32:47'),
(48, 2, 10, 8, 7, 5, '2025-05-30 10:32:53', '2025-05-30 10:32:53'),
(49, 2, 10, 9, 2, 3, '2025-05-30 10:33:01', '2025-05-30 10:33:01'),
(50, 2, 10, 9, 5, 3, '2025-05-30 10:33:08', '2025-05-30 10:33:08'),
(51, 2, 10, 9, 7, 6, '2025-05-30 10:33:17', '2025-05-30 10:33:17'),
(52, 3, 12, 7, 1, 2, '2025-05-30 10:39:54', '2025-05-30 10:39:54'),
(53, 3, 12, 7, 4, 3, '2025-05-30 10:40:00', '2025-05-30 10:40:00'),
(54, 3, 12, 7, 7, 1, '2025-05-30 10:40:06', '2025-05-30 10:40:06'),
(55, 3, 12, 8, 1, 3, '2025-05-30 10:40:16', '2025-05-30 10:40:16'),
(56, 3, 12, 8, 4, 4, '2025-05-30 10:40:24', '2025-05-30 10:40:24'),
(57, 3, 12, 8, 7, 5, '2025-05-30 10:40:31', '2025-05-30 10:40:31'),
(58, 3, 12, 8, 7, 3, '2025-05-30 10:40:38', '2025-05-30 10:40:38'),
(59, 3, 12, 9, 1, 2, '2025-05-30 10:40:45', '2025-05-30 10:40:45'),
(60, 3, 12, 9, 4, 3, '2025-05-30 10:40:53', '2025-05-30 10:40:53'),
(61, 3, 12, 9, 7, 4, '2025-05-30 10:41:02', '2025-05-30 10:41:02'),
(62, 3, 11, 1, 1, 3, '2025-05-30 10:41:11', '2025-05-30 10:41:11'),
(63, 3, 11, 1, 2, 4, '2025-05-30 10:41:20', '2025-05-30 10:41:20'),
(64, 3, 11, 1, 3, 5, '2025-05-30 10:41:28', '2025-05-30 10:41:28'),
(65, 3, 11, 2, 1, 4, '2025-05-30 10:41:35', '2025-05-30 10:41:35'),
(66, 3, 11, 2, 2, 5, '2025-05-30 10:41:44', '2025-05-30 10:41:44'),
(67, 3, 11, 10, 3, 5, '2025-05-30 10:41:52', '2025-05-30 10:41:52'),
(68, 3, 11, 10, 3, 3, '2025-05-30 10:42:00', '2025-05-30 10:42:00'),
(69, 3, 13, 7, 1, 3, '2025-05-30 10:46:02', '2025-05-30 10:46:02'),
(70, 3, 13, 7, 7, 3, '2025-05-30 10:46:10', '2025-05-30 10:46:10'),
(71, 3, 13, 9, 1, 1, '2025-05-30 10:46:16', '2025-05-30 10:46:16'),
(72, 3, 13, 9, 7, 5, '2025-05-30 10:46:22', '2025-05-30 10:46:22'),
(73, 4, 16, 6, 1, 3, '2025-05-30 10:53:45', '2025-05-30 10:53:45'),
(74, 4, 16, 6, 3, 2, '2025-05-30 10:53:51', '2025-05-30 10:53:51'),
(75, 4, 16, 6, 4, 1, '2025-05-30 10:54:00', '2025-05-30 10:54:00'),
(76, 4, 16, 7, 1, 2, '2025-05-30 10:54:07', '2025-05-30 10:54:07'),
(77, 4, 16, 7, 3, 1, '2025-05-30 10:54:14', '2025-05-30 10:54:14'),
(78, 4, 16, 7, 4, 3, '2025-05-30 10:54:21', '2025-05-30 10:54:21'),
(79, 4, 16, 8, 1, 1, '2025-05-30 10:54:29', '2025-05-30 10:54:29'),
(80, 4, 16, 8, 3, 3, '2025-05-30 10:54:35', '2025-05-30 10:54:35'),
(81, 4, 16, 8, 4, 5, '2025-05-30 10:54:42', '2025-05-30 10:54:42'),
(82, 4, 15, 7, 1, 1, '2025-05-30 10:55:04', '2025-05-30 10:55:04'),
(83, 4, 15, 7, 3, 2, '2025-05-30 10:55:13', '2025-05-30 10:55:13'),
(84, 4, 15, 7, 7, 3, '2025-05-30 10:55:20', '2025-05-30 10:55:20'),
(85, 4, 15, 8, 1, 4, '2025-05-30 10:55:27', '2025-05-30 10:55:27'),
(86, 4, 15, 8, 3, 3, '2025-05-30 10:55:36', '2025-05-30 10:55:36'),
(87, 4, 15, 9, 7, 4, '2025-05-30 10:55:43', '2025-05-30 10:55:43'),
(88, 4, 15, 9, 1, 2, '2025-05-30 10:55:51', '2025-05-30 10:55:51'),
(89, 4, 15, 9, 3, 5, '2025-05-30 10:55:59', '2025-05-30 10:55:59'),
(90, 4, 15, 9, 7, 6, '2025-05-30 10:56:06', '2025-05-30 10:56:06'),
(91, 4, 14, 6, 1, 3, '2025-05-30 10:56:15', '2025-05-30 10:56:15'),
(92, 4, 14, 6, 5, 5, '2025-05-30 10:56:22', '2025-05-30 10:56:22'),
(93, 4, 14, 6, 7, 6, '2025-05-30 10:56:33', '2025-05-30 10:56:33'),
(94, 4, 14, 7, 1, 2, '2025-05-30 10:56:41', '2025-05-30 10:56:41'),
(95, 4, 14, 7, 5, 5, '2025-05-30 10:56:47', '2025-05-30 10:56:47'),
(96, 4, 14, 7, 7, 6, '2025-05-30 10:56:57', '2025-05-30 10:56:57'),
(97, 4, 14, 8, 1, 3, '2025-05-30 10:57:06', '2025-05-30 10:57:06'),
(98, 4, 14, 8, 5, 5, '2025-05-30 10:57:15', '2025-05-30 10:57:15'),
(99, 4, 14, 7, 5, 5, '2025-05-30 10:57:34', '2025-05-30 10:57:34'),
(100, 4, 14, 8, 7, 4, '2025-05-30 10:57:45', '2025-05-30 10:57:45'),
(101, 4, 14, 8, 7, 4, '2025-05-30 12:52:18', '2025-05-30 12:52:18');

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` bigint UNSIGNED NOT NULL,
  `category_id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `price`, `image`, `text_1`, `text_2`, `image_1`, `image_2`, `created_at`, `updated_at`) VALUES
(1, 1, 'Paolo Dufferin', 95000, 'photo_2025-05-12_23-32-28.jpg', 'Paolo Dufferin - zamanagóy hám qolaylılıqtı birlestirgen názik ayaq kiyim. Hár bir qádemde isenim hám usıldı seziniń.', 'Joqarı sapalı materiallar hám jetik dizayn menen tayarlanǵan, bul ayaq kiyim kúndelikli hám rásmiy kiyimlerge ájayıp qosımsha boladı.', 'photo_2025-05-12_23-32-29.jpg', 'photo_2025-05-12_23-32-30.jpg', '2025-05-25 13:16:25', '2025-05-25 13:16:25'),
(2, 1, 'Fashion', 110000, 'photo_2025-05-12_23-36-12.jpg', 'Fashion ayaq kiyimi - zamanagóy kórinis hám qolaylılıqtı bir jerde jámlegen ideal tańlaw.', 'Hár qanday kiyimge beyimlesip, usılıńızdı jáne de ózine tán etedi.', 'photo_2025-05-12_23-36-11.jpg', 'photo_2025-05-12_23-36-10.jpg', '2025-05-30 09:56:03', '2025-05-30 09:56:03'),
(3, 1, 'Guochad', 129000, 'photo_3_2025-05-14_08-49-47.jpg', 'Guochad - klassika hám zamanagóylikti ózinde jámlegen názik ayaq kiyim.', 'Hár bir detalına itibar qaratılǵan, qolaylıq hám usıldı birlestirgen ideal tańlaw.', 'photo_2_2025-05-14_08-49-47.jpg', 'photo_1_2025-05-14_08-49-47.jpg', '2025-05-30 09:58:46', '2025-05-30 09:58:46'),
(4, 1, 'Designer', 155000, 'photo_3_2025-05-14_09-32-08.jpg', 'Designer - uslub hám individuallikti qádirlewshiler ushin jaratilgan zamanagóy ayaq kiyim.', 'Hár bir qádemińizde dizayn hám qolaylılıq únlesligin seziń.', 'photo_2_2025-05-14_09-32-08.jpg', 'photo_1_2025-05-14_09-32-08.jpg', '2025-05-30 10:01:48', '2025-05-30 10:01:48'),
(5, 2, 'Rosalia Dress', 190000, 'koylek-1.1.jpg', 'Rosalia Dress - názik gúller naǵısı menen bezelgen, hár bir hayalǵa romantikalıq hám náziklik baǵıshlaytuǵın kóylek.', 'Jeńil gezlemesi hám názik dizayni jaz kúnleri ushın ideal tańlaw.', 'koylek-1.2.jpg', 'koylek-1.4.jpg', '2025-05-30 10:15:24', '2025-05-30 10:15:24'),
(6, 2, 'Blossom Rose', 220000, 'koylek-2á1.jpg', 'Blossom Rose - báhár ilhamı menen jaratılǵan, názik gúller menen bezelgen názik kóylek.', 'Hár bir qádemińizde gózzallıq hám jumsaqlıqtı sáwlelendiredi.', 'koylek-2.2.jpg', 'koylek-2.3.jpg', '2025-05-30 10:19:08', '2025-05-30 10:19:08'),
(8, 2, 'Florina', 150000, 'koylek-3.1.jpg', 'Florina - tábiyǵıy gózzallıqtan ilhamlanǵan, kúndelikli kiyim ushın názik hám qolaylı variant.', 'Ashıq gúller menen bezelgen bul kóylek sizdi hámiyshe itibarda tutadı.', 'koylek-3.2.jpg', 'koylek-3.3.jpg', '2025-05-30 10:25:45', '2025-05-30 10:25:45'),
(10, 2, 'PinkCharm', 200000, 'koylek-4.1.jpg', 'PinkCharm - jarqın qızǵısh ton hám tartımlı dizaynı menen usılıńızǵa ózine tánlik qosadı.', 'Náziklik hám qolaylılıqtı birlestirgen ideal jazǵı lipas.', 'koylek-4.2.jpg', 'koylek-4.3.jpg', '2025-05-30 10:31:16', '2025-05-30 10:31:16'),
(11, 3, 'Vellaro', 120000, 'shalbar-1.1.jpg', 'Vellaro - zamanagóy dizayn hám klassikalıq kórinisti úylestirgen bryuki, hár kúni isenim menen kiyiw ushın', 'Jeńil hám qolaylı materialdan tayarlanǵan, ıqshamlıqtı qádirleytuǵınlar ushın ideal tańlaw', 'shalbar-1.2.jpg', 'shalbar-1.3.jpg', '2025-05-30 10:38:34', '2025-05-30 10:38:34'),
(12, 3, 'Bravero', 119000, 'shalbar-2.1.jpg', 'Bravero - qatań er adamlar stili ushın jaratılǵan, hár bir kesimi isenim hám qatańlıqtı ańlatadı.', 'Isbilermen hám zamanagóy kórinis ushın puqta tigilgen klassikalıq bryuki.', 'shalbar-2.2.jpg', 'shalbar-2.3.jpg', '2025-05-30 10:39:44', '2025-05-30 10:39:44'),
(13, 3, 'Stonemore', 220000, 'pant-1.jpg', 'Stonemore — mustahkamlik va soddalikni qadrlovchi erkaklar uchun mo‘ljallangan.', 'Har qanday holatda o‘z shaklini saqlovchi, sifatli matodan tikilgan klassik shim.', 'pant-2.jpg', 'pant-3.jpg', '2025-05-30 10:45:53', '2025-05-30 10:45:53'),
(14, 4, 'Ellegra', 120000, 'sh-1.1.jpg', 'Ellegra - náziklik hám qolaylılıqtı úylestirgen zamanagóy hayal-qızlar shalbarları.', 'Kúndelikli jumıs kúni yamasa ıqsham seyiller ushın ideal tańlaw.', 'bryuki-1.3.jpg', 'bryuki-1.2.jpg', '2025-05-30 10:49:59', '2025-05-30 10:49:59'),
(15, 4, 'Marvella', 129000, 'bryuki-2.2.jpg', 'Marvella - hár bir hayaldıń isenimli kórinisin támiyinleytuǵın sánli shalbarı.', 'Qáddi qawmetke shıraylı kórsetetuǵın, tegis kese-kesim hám jumsaq gezleme menen bezelgen.', 'bryuki-2.1.jpg', 'bryuki-2.3.jpg', '2025-05-30 10:51:13', '2025-05-30 10:51:13'),
(16, 4, 'Nuvéa', 80000, 'bryuki-3.3.jpg', 'Nuvéa - zamanagóy usıl hám hayal gózzallıǵın sáwlelendiriwshi klassikalıq shalbar.', 'Keńseden baslap, seyilge shekem - hár qanday jaǵdayda da usılıńızǵa sáykes keledi.', 'bryuki-3.2.jpg', 'bryuki-3.1.jpg', '2025-05-30 10:53:32', '2025-05-30 10:53:32');

-- --------------------------------------------------------

--
-- Структура таблицы `sizes`
--

CREATE TABLE `sizes` (
  `id` bigint UNSIGNED NOT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `sizes`
--

INSERT INTO `sizes` (`id`, `size`, `created_at`, `updated_at`) VALUES
(1, '39', '2025-05-25 13:15:49', '2025-05-25 13:15:49'),
(2, '40', '2025-05-25 13:15:49', '2025-05-25 13:15:49'),
(3, '41', '2025-05-25 13:15:49', '2025-05-25 13:15:49'),
(4, '42', '2025-05-25 13:15:49', '2025-05-25 13:15:49'),
(5, '43', '2025-05-25 13:15:49', '2025-05-25 13:15:49'),
(6, 'S', '2025-05-30 10:12:05', '2025-05-30 10:12:05'),
(7, 'M', '2025-05-30 10:12:08', '2025-05-30 10:12:08'),
(8, 'L', '2025-05-30 10:12:13', '2025-05-30 10:12:13'),
(9, 'XL', '2025-05-30 10:12:16', '2025-05-30 10:12:16'),
(10, '38', '2025-05-30 10:37:32', '2025-05-30 10:37:32');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `ip_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `ip_address`, `created_at`, `updated_at`) VALUES
(1, '127.0.0.1', '2025-05-25 13:15:55', '2025-05-25 13:15:55');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `baskets`
--
ALTER TABLE `baskets`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `cards`
--
ALTER TABLE `cards`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`);

--
-- Индексы таблицы `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `clients_phone_unique` (`phone`);

--
-- Индексы таблицы `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `colors_color_unique` (`color`);

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Индексы таблицы `histories`
--
ALTER TABLE `histories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Индексы таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Индексы таблицы `pieces`
--
ALTER TABLE `pieces`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sizes_size_unique` (`size`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `baskets`
--
ALTER TABLE `baskets`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `cards`
--
ALTER TABLE `cards`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `colors`
--
ALTER TABLE `colors`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `histories`
--
ALTER TABLE `histories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `options`
--
ALTER TABLE `options`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT для таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `pieces`
--
ALTER TABLE `pieces`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `sizes`
--
ALTER TABLE `sizes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
