-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2018 at 04:00 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rlms`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(10) UNSIGNED NOT NULL,
  `book_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `genre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `library_section` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `borrowed` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `book_title`, `author`, `genre`, `library_section`, `borrowed`, `created_at`, `updated_at`) VALUES
(1, 'To Kill a Mockingbird', 'Harper Lee', 'Coming-of-age Fiction', 'Fictional Section', 0, NULL, '2018-10-20 14:47:32'),
(2, 'Pride and Prejudice', 'Jane Austen', 'Historical, Fiction', 'Circulation Section', 0, NULL, '2018-10-20 14:47:37'),
(3, 'The Diary of Anne Frank', 'Anne Frank', 'Autobiography', 'Periodical Section', 1, NULL, '2018-10-20 14:45:08'),
(4, 'Harry Potter and the Sorcerer\'s Stone', 'J.K. Rowling', 'Fantasy, Fictional', 'Fictional Section', 1, NULL, '2018-10-20 14:45:13'),
(5, 'The Great Gatsby', 'F. Scott Fitzgerald', 'Novel, Historical Fictional', 'Circulation Section', 1, NULL, '2018-10-20 14:46:07'),
(6, 'Charlotte\'s Web', 'E.B. White', 'Children\'s Literature', 'Children\'s Section', 0, NULL, NULL),
(7, 'The Hobbit', 'J.R.R. Tolkien', 'High Fantasy, Juvenile Fantasy', 'Fictional Section', 0, '2018-10-17 03:54:03', '2018-10-17 03:54:03'),
(8, 'Noli Me Tangere', 'Jose Rizal', 'Historical, Fiction', 'Filipiniana Section', 0, '2018-10-17 09:24:24', '2018-10-17 09:24:24'),
(9, 'El Filibusterismo', 'Jose Rizal', 'Historical, Fictional', 'Filipiniana Section', 0, '2018-10-17 15:00:12', '2018-10-17 15:00:12'),
(10, 'New Oxford Thesaurus of English', 'Maurice Waite', 'Thesaurus', 'General Reference', 0, '2018-10-17 15:01:50', '2018-10-17 15:01:50'),
(11, 'Roget\'s Thesaurus', 'Peter Mark Roget', 'Thesaurus', 'General Reference', 0, '2018-10-20 14:38:58', '2018-10-20 14:38:58'),
(12, 'Webster\'s Dictionary', 'George Merriam and Charles Merriam', 'Dictionary', 'General Reference', 0, '2018-10-20 14:40:48', '2018-10-20 14:40:48');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(7, '2014_10_12_000000_create_users_table', 1),
(8, '2014_10_12_100000_create_password_resets_table', 1),
(9, '2018_10_13_222914_create_books_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
