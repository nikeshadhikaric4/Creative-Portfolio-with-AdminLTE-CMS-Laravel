-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2019 at 06:07 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `handicraft`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_page`
--

CREATE TABLE `about_page` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `fb_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `insta_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_page`
--

INSERT INTO `about_page` (`id`, `title`, `description`, `image`, `fb_link`, `insta_link`, `twitter_link`, `created_at`, `updated_at`) VALUES
(1, 'Aaaaaa Bbbbbb', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et', '1706501659.jpg', 'yes', 'iam', 'nik', '2019-09-04 03:19:46', '2019-09-11 04:13:07');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_category_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `blog_category_id`, `title`, `slug`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(3, 3, 'New Fashion Style 2019', 'new-fashion-style-2019', 'Fashion Style and go on with the creativity witht he follwo. Fashion Style and go on with the creativity witht he follwo.Fashion Style and go on with the creativity witht he follwo.Fashion Style and go on with the creativity witht he follwo.Fashion Style and go on with the creativity witht he follwo.Fashion Style and go on with the creativity witht he follwo.Fashion Style and go on with the creativity witht he follwo.Fashion Style and go on with the creativity witht he follwo.Fashion Style and go on with the creativity witht he follwo.Fashion Style and go on with the creativity witht he follwo.Fashion Style and go on with the creativity witht he follwo.Fashion Style and go on with the creativity witht he follwo.Fashion Style and go on with the creativity witht he follwo.Fashion Style and go on with the creativity witht he follwo.Fashion Style and go on with the creativity witht he follwo.Fashion Style and go on with the creativity witht he follwo.Fashion Style and go on with the creativity witht he follwo.Fashion Style and go on with the creativity witht he follwo.Fashion Style and go on with the creativity witht he follwo.Fashion Style and go on with the creativity witht he follwo.Fashion Style and go on with the creativity witht he follwo.', '539660969.jpg', 'active', '2019-09-05 23:11:30', '2019-09-05 23:11:30'),
(4, 3, 'The fashion Show', 'the-fashion-show', 'The fashion style with the oordination. The fashion style with the oordination. The fashion style with the oordination. The fashion style with the oordination. The fashion style with the oordination. The fashion style with the oordination. The fashion style with the oordination. The fashion style with the oordination. The fashion style with the oordination. The fashion style with the oordination. The fashion style with the oordination. The fashion style with the oordination. The fashion style with the oordination. The fashion style with the oordination. The fashion style with the oordination. The fashion style with the oordination. The fashion style with the oordination. The fashion style with the oordination. The fashion style with the oordination. The fashion style with the oordination. The fashion style with the oordination. The fashion style with the oordination. The fashion style with the oordination. The fashion style with the oordination. The fashion style with the oordination. The fashion style with the oordination. The fashion style with the oordination. The fashion style with the oordination. The fashion style with the oordination. The fashion style with the oordination. The fashion style with the oordination. \r\nThe fashion style with the oordination. The fashion style with the oordination. The fashion style with the oordination. The fashion style with the oordination. The fashion style with the oordination. The fashion style with the oordination. The fashion style with the oordination. The fashion style with the oordination. The fashion style with the oordination. The fashion style with the oordination. The fashion style with the oordination. The fashion style with the oordination. The fashion style with the oordination. The fashion style with the oordination. The fashion style with the oordination. The fashion style with the oordination. The fashion style with the oordination. The fashion style with the oordination. The fashion style with the oordination. The fashion style with the oordination. The fashion style with the oordination. The fashion style with the oordination. The fashion style with the oordination. The fashion style with the oordination. The fashion style with the oordination. The fashion style with the oordination. The fashion style with the oordination. The fashion style with the oordination. The fashion style with the oordination. The fashion style with the oordination. The fashion style with the oordination. The fashion style with the oordination. The fashion style with the oordination. The fashion style with the oordination. The fashion style with the oordination. The fashion style with the oordination. \r\nThe fashion style with the oordination. The fashion style with the oordination. The fashion style with the oordination. The fashion style with the oordination. The fashion style with the oordination. The fashion style with the oordination. The fashion style with the oordination. The fashion style with the oordination. The fashion style with the oordination. The fashion style with the oordination. The fashion style with the oordination. The fashion style with the oordination. The fashion style with the oordination. The fashion style with the oordination. The fashion style with the oordination. The fashion style with the oordination. The fashion style with the oordination.', '454245719.jpg', 'active', '2019-09-05 23:25:00', '2019-09-05 23:25:00'),
(5, 3, 'Blogs', 'blogs', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.', '828364997.jpg', 'active', '2019-09-11 03:04:33', '2019-09-11 03:04:33');

-- --------------------------------------------------------

--
-- Table structure for table `blog_category`
--

CREATE TABLE `blog_category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_category`
--

INSERT INTO `blog_category` (`id`, `title`, `slug`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Home Blogs', 'home-blogs', 'Blogs for home', NULL, 'active', '2019-09-05 01:39:55', '2019-09-05 01:39:55'),
(4, 'Blog Page', 'blog-page', 'This is the blog page category.', NULL, 'active', '2019-09-11 02:55:49', '2019-09-11 02:55:49');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `address`, `phone`, `email`, `website`, `created_at`, `updated_at`) VALUES
(1, 'adadada', '+0000000000', 'abc@abc.com', 'abcdefg.com', '2019-09-04 04:44:49', '2019-09-11 04:17:49');

-- --------------------------------------------------------

--
-- Table structure for table `fashion_video`
--

CREATE TABLE `fashion_video` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fashion_category` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_link` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fashion_video`
--

-- --------------------------------------------------------

--
-- Table structure for table `fashion_video_category`
--

CREATE TABLE `fashion_video_category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_link` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fashion_video_category`
--

INSERT INTO `fashion_video_category` (`id`, `title`, `slug`, `description`, `image`, `video_link`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Style Home', 'style-home', 'This is the Style Home category', NULL, 'newvideolink.com', 'active', '2019-09-08 02:27:38', '2019-09-08 02:27:38');

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
(3, '2019_09_01_065844_create_contact_table', 1),
(4, '2019_09_01_065916_create_blog_category_table', 1),
(5, '2019_09_01_065947_create_blog_table', 1),
(6, '2019_09_01_070113_create_fashion_video_category_table', 1),
(7, '2019_09_01_070137_create_fashion_video_table', 1),
(8, '2019_09_01_070411_create_about_page_table', 1),
(9, '2019_09_01_074022_create_slidercategory_table', 1),
(10, '2019_09_01_074129_create_slider_table', 1);

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
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slider_category` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slider`
--


-- --------------------------------------------------------

--
-- Table structure for table `slidercategory`
--

CREATE TABLE `slidercategory` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slidercategory`
--

INSERT INTO `slidercategory` (`id`, `title`, `slug`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(6, 'Home Slider', 'home-slider', 'This is the home slider', NULL, 'active', '2019-09-05 01:15:50', '2019-09-05 01:15:50'),
(7, 'Style Slider', 'style-slider', 'This is the slider of page style', NULL, 'active', '2019-09-11 02:49:38', '2019-09-11 02:49:38'),
(8, 'Photography Pictures', 'photography-pictures', 'This is the slider of photography page', NULL, 'active', '2019-09-11 02:50:46', '2019-09-11 02:50:46'),
(9, 'Blog Slider', 'blog-slider', 'Blog Slider Category', NULL, 'active', '2019-09-11 02:51:28', '2019-09-11 02:51:28'),
(10, 'About Slider', 'about-slider', 'About page slider category', NULL, 'active', '2019-09-11 02:51:57', '2019-09-11 02:51:57'),
(11, 'Contact Slider', 'contact-slider', 'Contact Page Slider Category', NULL, 'active', '2019-09-11 02:52:30', '2019-09-11 02:52:30'),
(12, 'Photography Slider', 'photography-slider', 'This is the photography slider of the photography page', NULL, 'active', '2019-09-11 02:54:35', '2019-09-11 02:54:35');

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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'nikeshadhikari', 'admin@admin.com', NULL, '$2y$10$VA.qINKVN4DrEB/iJL4zduqmOhbSPVdw/JUoy9jjiaZmUjAnym/1i', NULL, '2019-09-04 05:28:49', '2019-09-04 05:28:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_page`
--
ALTER TABLE `about_page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blog_blog_category_id_foreign` (`blog_category_id`);

--
-- Indexes for table `blog_category`
--
ALTER TABLE `blog_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fashion_video`
--
ALTER TABLE `fashion_video`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fashion_video_fashion_category_foreign` (`fashion_category`);

--
-- Indexes for table `fashion_video_category`
--
ALTER TABLE `fashion_video_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`),
  ADD KEY `slider_slider_category_foreign` (`slider_category`);

--
-- Indexes for table `slidercategory`
--
ALTER TABLE `slidercategory`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `about_page`
--
ALTER TABLE `about_page`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `blog_category`
--
ALTER TABLE `blog_category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fashion_video`
--
ALTER TABLE `fashion_video`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `fashion_video_category`
--
ALTER TABLE `fashion_video_category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `slidercategory`
--
ALTER TABLE `slidercategory`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blog`
--
ALTER TABLE `blog`
  ADD CONSTRAINT `blog_blog_category_id_foreign` FOREIGN KEY (`blog_category_id`) REFERENCES `blog_category` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `fashion_video`
--
ALTER TABLE `fashion_video`
  ADD CONSTRAINT `fashion_video_fashion_category_foreign` FOREIGN KEY (`fashion_category`) REFERENCES `fashion_video_category` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `slider`
--
ALTER TABLE `slider`
  ADD CONSTRAINT `slider_slider_category_foreign` FOREIGN KEY (`slider_category`) REFERENCES `slidercategory` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
