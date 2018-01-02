-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 02 Jan 2018 pada 09.07
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chart`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barangs`
--

CREATE TABLE `barangs` (
  `id_barang` int(10) UNSIGNED NOT NULL,
  `barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `barangs`
--

INSERT INTO `barangs` (`id_barang`, `barang`) VALUES
(1, 'sepatu'),
(2, 'celana'),
(3, 'baju'),
(4, 'aksesoris');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bulans`
--

CREATE TABLE `bulans` (
  `id_bulan` int(10) UNSIGNED NOT NULL,
  `bulan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `bulans`
--

INSERT INTO `bulans` (`id_bulan`, `bulan`) VALUES
(1, 'Januari'),
(2, 'Februari'),
(3, 'Maret'),
(4, 'April'),
(5, 'Mei'),
(6, 'Juni'),
(7, 'Juli'),
(8, 'Agustus'),
(9, 'September'),
(10, 'Oktober'),
(11, 'November'),
(12, 'Desember');

-- --------------------------------------------------------

--
-- Struktur dari tabel `downloads`
--

CREATE TABLE `downloads` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `waktu` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `file_trees`
--

CREATE TABLE `file_trees` (
  `id_file` int(10) UNSIGNED NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `file_trees`
--

INSERT INTO `file_trees` (`id_file`, `file`) VALUES
(1, 'penjualan'),
(2, 'notes'),
(3, 'file upload');

-- --------------------------------------------------------

--
-- Struktur dari tabel `logins`
--

CREATE TABLE `logins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `logins`
--

INSERT INTO `logins` (`id`, `name`, `kode`) VALUES
(1, 'shun-oguri', 'bbc1c19a-dab4-4290-82b2-7095e23a342d'),
(2, 'timo', '6c49e272-ff92-4391-a26a-9c9b47593875'),
(3, 'baim-wong', 'cd15c4d0-3ebd-49f8-a43e-1ce2cfb67330'),
(4, 'baim-wong', 'c2482a73-1f4d-471a-a15a-3fef1c3f6a53'),
(5, 'baim-wong', 'b78949e7-817d-4020-88c9-9ee84a30a852'),
(6, 'baim-wong', '9e7a4f3a-3b19-413d-af7b-58133900489e');

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu_tree`
--

CREATE TABLE `menu_tree` (
  `id_tree` int(10) UNSIGNED NOT NULL,
  `parent_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `kode_form` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_file` int(11) DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `waktu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `menu_tree`
--

INSERT INTO `menu_tree` (`id_tree`, `parent_id`, `user_id`, `kode_form`, `id_file`, `type`, `title`, `file`, `tanggal`, `waktu`) VALUES
(1, 0, 2, NULL, NULL, 'folder', 'folder file', NULL, '02-01-2018', '16:04'),
(2, 0, 2, NULL, NULL, 'folder', 'folder document', NULL, '02-01-2018', '16:04'),
(3, 1, 2, 'FRM-02012018105', 3, 'children', 'foto 1', '20728002_1723067054653730_8083093924968225044_n.jpg', '02-01-2018', '16:04'),
(4, 2, 2, 'FRM-02012018106', 1, 'children', 'document penjualan 1 jan', '01-2018', '02-01-2018', '16:04');

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_11_11_060346_create_visitors_table', 1),
(4, '2017_11_18_065807_create_penjualans_table', 2),
(5, '2017_11_18_080118_create_bulans_table', 2),
(6, '2017_11_20_003356_create_barangs_table', 3),
(7, '2017_11_22_003741_create_notes_table', 4),
(10, '2017_12_05_005900_create_print_downloads_table', 6),
(13, '2017_12_07_052047_create_file__trees_table', 8),
(14, '2017_12_08_021901_create_test_uploads_table', 9),
(15, '2017_12_05_011655_create_menu_tree_table', 10),
(16, '2017_12_11_133846_create_downloads_table', 11),
(17, '2017_12_18_081710_create_logins_table', 12);

-- --------------------------------------------------------

--
-- Struktur dari tabel `notes`
--

CREATE TABLE `notes` (
  `id_notes` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `notes` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `waktu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `notes`
--

INSERT INTO `notes` (`id_notes`, `user_id`, `notes`, `tanggal`, `waktu`, `status`) VALUES
(1, 1, 'test untuk merubah notes yang kedua tes untuk mengubah type <i>text dengan <b>editor</b></i><br><button type=\"button\" class=\"close-note-link btn btn-xs btn-block _button_edit hide\" value=\"1\" id=\"button_edit\" contenteditable=\"false\"></button><br><button type=\"button\" class=\"close-note-link btn btn-xs btn-block _button_edit hide\" value=\"1\" id=\"button_edit\" contenteditable=\"false\"></button>', '22 Nov 2017', '14:20', 0),
(2, 1, 'test yang <b>bold </b>bisa dipakai tidak', '22 Nov 2017', '14:21', 0),
(3, 1, 'This jQuery plugin generates sparklines (small inline charts) directly in the browser using data supplied either inline in the HTML, or via javascript. The plugin is compatible with most modern browsers and has been tested with Firefox 2+, Safari 3+, Opera 9, Google Chrome and Internet Explorer 6, 7, 8, 9 &amp; 10 as well as iOS and Android.', '22 Nov 2017', '16:09', 0),
(4, 1, 'test benar atau tidak jika di update', '23 Nov 2017', '10:43', 0),
(5, 2, 'test notes untuk user <b>agus</b>', '23 Nov 2017', '10:57', 0),
(6, 2, '<p><span style=\"text-decoration: underline;\" data-mce-style=\"text-decoration: underline;\">test</span> ke 2</p>', '23 Nov 2017', '11:28', 1),
(7, 2, 'test', '23 Nov 2017', '14:46', 0),
(8, 2, 'oke test ulang ya', '23 Nov 2017', '14:52', 0),
(9, 2, 'test test', '23 Nov 2017', '14:54', 0),
(10, 2, 'test sadfasdf', '23 Nov 2017', '14:55', 0),
(11, 2, 'test notes untuk user <b>agus sadfasdf</b>', '23 Nov 2017', '14:57', 0),
(12, 1, 'saya sedang tes', '25 Nov 2017', '20:10', 0),
(13, 1, 'saya sedang tes', '25 Nov 2017', '20:10', 0),
(14, 1, 'test menggunakan notes', '25 Nov 2017', '20:11', 0),
(15, 1, 'test yang terakhir, akhirnya dirubah <i>test </i><b>italic </b><i>dan <b>bold</b></i><div><b><i><br></i></b></div><div><b><i>test<br></i></b><button type=\"button\" class=\"close-note-link btn btn-xs btn-block _button_edit hide\" value=\"15\" id=\"button_edit\" contenteditable=\"false\"></button><br><button type=\"button\" class=\"close-note-link btn btn-xs btn-block _button_edit hide\" value=\"15\" id=\"button_edit\" contenteditable=\"false\"></button><br><button type=\"button\" class=\"close-note-link btn btn-xs btn-block _button_edit hide\" value=\"15\" id=\"button_edit\" contenteditable=\"false\"></button><br contenteditable=\"false\"><button type=\"button\" class=\"close-note-link btn btn-xs btn-block _button_edit hide\" value=\"15\" id=\"button_edit\" contenteditable=\"false\"></button><br></div>', '28 Nov 2017', '22:45', 0),
(16, 1, 'test deh observer', '29 Nov 2017', '10:54', 0),
(17, 1, 'test lagi deh', '29 Nov 2017', '10:58', 0),
(18, 1, 'test deh', '29 Nov 2017', '11:04', 0),
(19, 1, 'test', '29 Nov 2017', '11:09', 0),
(20, 1, 'test', '29 Nov 2017', '11:18', 0),
(21, 1, 'test', '29 Nov 2017', '11:20', 0),
(22, 1, 'test observer', '29 Nov 2017', '11:24', 0),
(23, 1, 'test lagi', '29 Nov 2017', '11:25', 0),
(24, 1, 'test test', '29 Nov 2017', '11:26', 0),
(25, 1, 'lagi lagi', '29 Nov 2017', '11:32', 0),
(26, 1, 'oke oke', '29 Nov 2017', '11:33', 0),
(27, 1, 'safdsgfdsagfdg', '29 Nov 2017', '11:38', 0),
(28, 1, 'test', '29 Nov 2017', '11:39', 0),
(29, 1, 'stet', '29 Nov 2017', '11:40', 0),
(30, 1, 'asdfdsaf', '29 Nov 2017', '11:42', 0),
(31, 1, 'dh', '29 Nov 2017', '11:43', 0),
(32, 1, 'test test', '29 Nov 2017', '11:46', 0),
(33, 1, 'test test', '29 Nov 2017', '11:50', 0),
(34, 1, 'test test', '29 Nov 2017', '11:51', 0),
(35, 1, 'tes test', '29 Nov 2017', '11:53', 0),
(36, 1, 'oke oke<br contenteditable=\"false\"><button type=\"button\" class=\"close-note-link btn btn-xs btn-block _button_edit hide\" value=\"36\" id=\"button_edit\" contenteditable=\"false\"></button>', '29 Nov 2017', '11:54', 0),
(37, 1, 'test <b>edit</b><br><button type=\"button\" class=\"close-note-link btn btn-xs btn-block _button_edit hide\" value=\"37\" id=\"button_edit\" contenteditable=\"false\"></button>', '29 Nov 2017', '11:55', 0),
(38, 1, 'yuswa', '29 Nov 2017', '11:55', 0),
(39, 1, 'yuswa lai<br><button type=\"button\" class=\"close-note-link btn btn-xs btn-block _button_edit hide\" value=\"39\" id=\"button_edit\" contenteditable=\"false\"></button>', '29 Nov 2017', '11:55', 0),
(40, 1, 'asdfadsfdsa<div>test<br><button type=\"button\" class=\"close-note-link btn btn-xs btn-block _button_edit hide\" value=\"40\" id=\"button_edit\" contenteditable=\"false\"></button><br><button type=\"button\" class=\"close-note-link btn btn-xs btn-block _button_edit hide\" value=\"40\" id=\"button_edit\" contenteditable=\"false\"></button></div>', '29 Nov 2017', '11:59', 0),
(41, 1, 'test test deh&nbsp;asdfdsafads<div><br></div><div>test<br><button type=\"button\" class=\"close-note-link btn btn-xs btn-block _button_edit hide\" value=\"41\" id=\"button_edit\" contenteditable=\"false\"></button><br><button type=\"button\" class=\"close-note-link btn btn-xs btn-block _button_edit hide\" value=\"41\" id=\"button_edit\" contenteditable=\"false\"></button><br><button type=\"button\" class=\"close-note-link btn btn-xs btn-block _button_edit hide\" value=\"41\" id=\"button_edit\" contenteditable=\"false\"></button></div>', '29 Nov 2017', '13:36', 0),
(42, 1, 'test as', '29 Nov 2017', '13:44', 0),
(43, 1, 'test gaga', '29 Nov 2017', '13:55', 0),
(44, 1, 'test<div>test</div><div>test</div>', '29 Nov 2017', '14:30', 0),
(45, 1, 'asdf', '29 Nov 2017', '14:47', 0),
(46, 1, '<i>asdf</i>', '29 Nov 2017', '14:47', 0),
(47, 1, 'asdf', '29 Nov 2017', '14:47', 0),
(48, 1, '<button type=\"button\" class=\"close-note-link btn btn-xs btn-block _button_edit hide\" value=\"48\" id=\"button_edit\" contenteditable=\"false\"></button><button type=\"button\" class=\"close-note-link btn btn-xs btn-block _button_edit hide\" value=\"48\" id=\"button_edit\" contenteditable=\"false\"></button><button type=\"button\" class=\"close-note-link btn btn-xs btn-block _button_edit hide\" value=\"48\" id=\"button_edit\" contenteditable=\"false\"></button><i>asdf</i><br><div><i>gdjgh</i></div>', '29 Nov 2017', '14:47', 0),
(49, 1, 'asdf asdfas &lt;div&gt;dsaf ads &lt;/div&gt; safdsafasd &lt;br&gt;dsa fdsa fds afd', '29 Nov 2017', '14:47', 0),
(50, 1, '<p>asdf</p><div><b><i><u>tes&nbsp;</u></i></b>dengan test saja</div><div>lagi donk</div>', '29 Nov 2017', '14:47', 0),
(51, 1, 'asdfsda', '29 Nov 2017', '14:47', 0),
(52, 1, '<p><i>asdf</i></p>', '29 Nov 2017', '14:47', 0),
(53, 1, 'asdf', '29 Nov 2017', '14:47', 0),
(54, 1, '<i>asdf</i>', '29 Nov 2017', '14:47', 0),
(55, 1, 'asdf', '29 Nov 2017', '14:53', 0),
(56, 1, 'test<div>test</div><div>test</div>', '29 Nov 2017', '14:53', 0),
(57, 1, 'asdf', '29 Nov 2017', '14:53', 0),
(58, 1, '<i>asdf</i>', '29 Nov 2017', '14:53', 0),
(59, 1, 'oke aku sedang test saja<div><b>kali ini</b></div>', '30 Nov 2017', '10:10', 0),
(60, 1, 'oke lah kalo<div><br></div><div>dah</div>', '30 Nov 2017', '10:12', 0),
(61, 1, 'test<div>test</div><div><u>test</u></div>', '30 Nov 2017', '10:17', 0),
(62, 1, '<i>fdsgdgadfga</i><div><br></div><div><b>asgdgafga</b></div><br>', '30 Nov 2017', '10:22', 0),
(63, 1, 'test', '30 Nov 2017', '15:08', 0),
(64, 1, '<i>test</i>', '30 Nov 2017', '15:08', 0),
(65, 1, 'test', '30 Nov 2017', '15:08', 0),
(66, 1, '<i>testeststst</i>', '30 Nov 2017', '15:08', 0),
(67, 1, 'asdfdsaf', '30 Nov 2017', '15:10', 0),
(68, 1, '<i>asdfsadf</i>', '30 Nov 2017', '15:10', 0),
(69, 1, 'sadfvccxvcxv', '30 Nov 2017', '15:10', 0),
(70, 1, '<i>fdsafdsafds</i>', '30 Nov 2017', '15:10', 0),
(71, 1, 'cxvcxzvxc', '30 Nov 2017', '15:10', 0),
(72, 1, '<i>zxcvcxzvzcxvcxz</i>', '30 Nov 2017', '15:10', 0),
(73, 1, 'czxvcxzvzcxv', '30 Nov 2017', '15:10', 0),
(74, 1, '<i>asdfasdfasdfadsf</i>', '30 Nov 2017', '15:10', 0),
(75, 1, '<u>asdfdfasdfdsaf</u>', '30 Nov 2017', '15:27', 0),
(76, 1, '<p>tes&nbsp;<span id=\"_mce_caret\" data-mce-bogus=\"1\" data-mce-type=\"format-caret\"><strong>﻿menggunakan&nbsp;<span id=\"_mce_caret\" data-mce-bogus=\"1\" data-mce-type=\"format-caret\"><em>﻿tynimce&nbsp;<span id=\"_mce_caret\" data-mce-bogus=\"1\" data-mce-type=\"format-caret\"><span style=\"text-decoration: underline;\" data-mce-style=\"text-decoration: underline;\">﻿notes</span></span></em></span></strong></span></p>', '30 Nov 2017', '16:08', 0),
(77, 1, '<p>test</p>', '30 Nov 2017', '16:10', 0),
(78, 1, '<p>asdf</p><div>testdsddsfdsafsdaasdfsadfasdfsadfasdf</div><div><b><i><u>tes dengan test</u></i></b></div>', '30 Nov 2017', '16:11', 0),
(79, 1, '<p>dffgfdsg</p>', '30 Nov 2017', '16:34', 0),
(80, 1, '<p>wrwerewr</p>', '30 Nov 2017', '16:35', 0),
(81, 1, '<p>asdf</p>', '30 Nov 2017', '16:36', 0),
(82, 1, '<p>sebagian sedang test</p>', '02 Dec 2017', '08:23', 0),
(83, 1, '<p>sebagian sedang test</p>', '02 Dec 2017', '08:23', 0),
(84, 1, '<p>test sekali lagi</p>', '02 Dec 2017', '08:24', 0),
(85, 1, '<p>test</p>', '02 Dec 2017', '08:24', 0),
(86, 1, '<p>oke dah</p>', '02 Dec 2017', '09:12', 0),
(87, 1, '<p>testests</p>', '02 Dec 2017', '09:13', 0),
(88, 1, '<p>tes lagi</p>', '02 Dec 2017', '09:14', 0),
(89, 1, '<p>oke</p>', '02 Dec 2017', '10:18', 0),
(90, 1, '<p>test</p>', '02 Dec 2017', '10:18', 0),
(91, 1, '<p>setest</p>', '02 Dec 2017', '10:18', 0),
(92, 1, '<p>test sa</p><p>ja</p>', '02 Dec 2017', '10:40', 0),
(93, 1, '<p>oke</p>', '02 Dec 2017', '10:41', 0),
(94, 1, '<p><strong><em>test</em></strong></p><p><br></p>', '02 Dec 2017', '13:03', 0),
(95, 1, '<p><strong>test</strong></p><p><br></p>', '02 Dec 2017', '13:03', 0),
(96, 1, '<p>test menggunakan notes<em> di&nbsp;<strong>laravel</strong></em></p><p><em><strong><br data-mce-bogus=\"1\"></strong></em></p><p><span style=\"text-decoration: underline;\" data-mce-style=\"text-decoration: underline;\">dan ajax</span></p>', '02 Dec 2017', '13:05', 0),
(97, 1, '<p>test sekali lagi</p>', '02 Dec 2017', '13:06', 0),
(98, 1, '<p><strong>test&nbsp;<em>test</em></strong></p>', '07 Dec 2017', '16:04', 1),
(99, 2, '<p>test<strong> <em><span style=\"text-decoration: underline;\" data-mce-style=\"text-decoration: underline;\">teststsest</span></em></strong></p>', '30 Dec 2017', '09:57', 1),
(100, 2, '<p><em>saya</em> <span style=\"text-decoration: underline;\" data-mce-style=\"text-decoration: underline;\">test</span> <em><strong>laravel</strong></em></p>', '30 Dec 2017', '10:10', 1),
(101, 2, '<p>test test</p>', '30 Dec 2017', '10:11', 0),
(102, 2, '<p>test</p>', '30 Dec 2017', '10:33', 0),
(103, 2, '<p>ter</p>', '30 Dec 2017', '10:34', 0),
(104, 2, '<p>test <strong>test</strong></p>', '30 Dec 2017', '10:49', 0),
(105, 2, '<p>testdsf</p>', '30 Dec 2017', '10:51', 0),
(106, 2, '<p>test</p>', '30 Dec 2017', '10:52', 0),
(107, 2, '<p>test</p><p>test</p>', '30 Dec 2017', '10:55', 0),
(108, 2, '<p>yuswa</p>', '30 Dec 2017', '10:59', 0),
(109, 2, '<p>test</p>', '30 Dec 2017', '11:00', 0),
(110, 2, '<p>test</p>', '30 Dec 2017', '11:00', 0),
(111, 2, '<p>test</p>', '30 Dec 2017', '11:22', 0),
(112, 2, '<p>test</p>', '30 Dec 2017', '11:40', 0),
(113, 2, '<p><em><strong>yuswa test lagi</strong></em></p><p><br></p>', '30 Dec 2017', '11:42', 1),
(114, 2, '<p>test</p>', '30 Dec 2017', '11:49', 0),
(115, 2, '<p><em><span style=\"text-decoration: underline;\" data-mce-style=\"text-decoration: underline;\">test menggunakan</span> <strong>laravel test</strong></em></p><p><br></p>', '30 Dec 2017', '16:04', 1),
(116, 2, '<p>oke deh&nbsp;<span id=\"_mce_caret\" data-mce-bogus=\"1\" data-mce-type=\"format-caret\"><span style=\"text-decoration: underline;\" data-mce-style=\"text-decoration: underline;\">﻿bli</span></span></p>', '02 Jan 2018', '08:51', 1);

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
-- Struktur dari tabel `penjualans`
--

CREATE TABLE `penjualans` (
  `id_penjualan` int(10) UNSIGNED NOT NULL,
  `id_bulan` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `banyak_penjualan` int(11) NOT NULL,
  `tanggal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bulan` int(11) NOT NULL,
  `tahun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `penjualans`
--

INSERT INTO `penjualans` (`id_penjualan`, `id_bulan`, `id_barang`, `banyak_penjualan`, `tanggal`, `bulan`, `tahun`) VALUES
(1, 21, 4, 12, '21', 11, 2017),
(2, 21, 2, 50, '21', 11, 2017),
(3, 21, 1, 12, '21', 11, 2017),
(4, 21, 1, 12, '22', 11, 2017),
(5, 21, 2, 40, '21', 11, 2017),
(6, 21, 4, 10, '21', 11, 2017),
(7, 21, 3, 20, '21', 11, 2017),
(8, 21, 3, 40, '21', 11, 2017),
(9, 22, 3, 3, '22', 11, 2017),
(10, 22, 4, 31, '22', 11, 2017),
(11, 23, 4, 19, '23', 11, 2017),
(12, 25, 1, 23, '25', 11, 2017),
(13, 25, 2, 12, '25', 11, 2017),
(14, 25, 2, 12, '25', 11, 2017),
(15, 25, 1, 23, '25', 11, 2017),
(16, 25, 1, 12, '25', 11, 2017),
(17, 25, 1, 12, '25', 11, 2017),
(18, 25, 3, 12, '25', 11, 2017),
(19, 25, 2, 34, '25', 11, 2017),
(20, 25, 4, 40, '25', 11, 2017),
(21, 25, 1, 40, '25', 11, 2017),
(22, 25, 2, 40, '25', 11, 2017),
(23, 25, 2, 40, '25', 11, 2017),
(24, 25, 2, 40, '25', 11, 2017),
(25, 25, 3, 23, '25', 11, 2017),
(26, 25, 3, 23, '25', 12, 2017),
(27, 25, 1, 23, '25', 12, 2017),
(28, 25, 2, 23, '25', 12, 2017),
(29, 25, 2, 23, '25', 12, 2017),
(30, 25, 2, 23, '25', 12, 2017),
(31, 25, 4, 50, '25', 12, 2017),
(32, 25, 4, 50, '25', 12, 2017),
(33, 27, 3, 12, '27', 11, 2017),
(34, 27, 3, 12, '27', 11, 2017),
(35, 27, 3, 12, '27', 11, 2017),
(36, 27, 3, 12, '27', 11, 2017),
(37, 27, 2, 12, '27', 11, 2017),
(38, 27, 3, 23, '27', 11, 2017),
(39, 27, 1, 23, '27', 11, 2017),
(40, 27, 4, 12, '27', 11, 2017),
(41, 27, 1, 4, '27', 11, 2017),
(42, 27, 2, 12, '27', 11, 2017),
(43, 27, 2, 12, '27', 11, 2017),
(44, 27, 2, 12, '27', 11, 2017),
(45, 27, 2, 12, '27', 11, 2017),
(46, 27, 2, 12, '27', 11, 2017),
(47, 27, 4, 20, '27', 11, 2017),
(48, 27, 1, 20, '27', 11, 2017),
(49, 27, 1, 23, '27', 11, 2017),
(50, 27, 1, 23, '27', 11, 2017),
(51, 27, 1, 23, '27', 11, 2017),
(52, 27, 1, 23, '27', 11, 2017),
(53, 27, 1, 23, '27', 11, 2017),
(54, 27, 1, 23, '27', 11, 2017),
(55, 28, 3, 12, '28', 11, 2017),
(56, 28, 3, 23, '28', 11, 2017),
(57, 28, 4, 31, '28', 11, 2017),
(58, 28, 4, 31, '28', 11, 2017),
(59, 28, 2, 31, '28', 11, 2017),
(60, 28, 2, 31, '28', 11, 2017),
(61, 28, 2, 31, '28', 11, 2017),
(62, 28, 2, 12, '28', 11, 2017),
(63, 28, 1, 12, '28', 11, 2017),
(64, 28, 1, 12, '28', 11, 2017),
(65, 28, 1, 12, '28', 11, 2017),
(66, 28, 4, 12, '28', 11, 2017),
(67, 28, 1, 12, '28', 11, 2017),
(68, 28, 1, 12, '28', 11, 2017),
(69, 28, 1, 12, '28', 11, 2017),
(70, 28, 1, 12, '28', 11, 2017),
(71, 28, 4, 12, '28', 11, 2017),
(72, 28, 4, 12, '28', 11, 2017),
(73, 28, 2, 12, '28', 11, 2017),
(74, 28, 2, 12, '28', 11, 2017),
(75, 28, 1, 32, '28', 11, 2017),
(76, 28, 1, 32, '28', 11, 2017),
(77, 28, 3, 12, '28', 11, 2017),
(78, 29, 3, 14, '29', 11, 2017),
(79, 29, 2, 12, '29', 11, 2017),
(80, 29, 2, 12, '29', 11, 2017),
(81, 29, 3, 12, '29', 11, 2017),
(82, 29, 4, 12, '29', 11, 2017),
(83, 29, 4, 12, '29', 11, 2017),
(84, 29, 4, 12, '29', 11, 2017),
(85, 29, 4, 12, '29', 11, 2017),
(86, 7, 1, 43, '07', 12, 2017),
(87, 7, 1, 12, '07', 12, 2017),
(88, 7, 3, 1, '07', 12, 2017),
(89, 7, 4, 12, '07', 12, 2017),
(90, 7, 1, 23, '07', 12, 2017),
(91, 7, 4, 12, '07', 12, 2017),
(92, 7, 4, 34, '07', 12, 2017),
(93, 7, 3, 43, '07', 12, 2017),
(94, 2, 1, 12, '02', 1, 2018),
(95, 2, 2, 15, '02', 1, 2018),
(96, 2, 3, 20, '02', 1, 2018),
(97, 2, 4, 25, '02', 1, 2018);

-- --------------------------------------------------------

--
-- Struktur dari tabel `print_downloads`
--

CREATE TABLE `print_downloads` (
  `id_activity` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `id_tree` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_tree` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `waktu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `print_downloads`
--

INSERT INTO `print_downloads` (`id_activity`, `user_id`, `id_tree`, `type`, `file_tree`, `tanggal`, `waktu`) VALUES
(1, 2, 3, '3', '20728002_1723067054653730_8083093924968225044_n.jpg', '02-01-2018', '16:05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `test_uploads`
--

CREATE TABLE `test_uploads` (
  `id_test` int(10) UNSIGNED NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `test_uploads`
--

INSERT INTO `test_uploads` (`id_test`, `file`) VALUES
(1, 'test'),
(2, 'profile-pic.jpg'),
(3, 'profile-pic.jpg'),
(4, 'profile-pic.jpg'),
(5, 'profile-pic.jpg'),
(6, 'profile-pic.jpg'),
(7, 'avatar5.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `personId` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `personId`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'kagami', 'kagami@gmail.com', '$2y$10$x7qAmik2vN.tiSoOJ6LdkOMYqQSCeBE5hK7VSPWJ79u0JEO1iw696', '4934da25-7d32-49f9-8f04-a387811d1086', 'rRY5HsDOP7LBZR4FlyrAlIi4osOyBM9oOzozWnoLeiGQf6QuF1reKz6Wz7Rb', '2017-12-19 20:26:23', '2017-12-19 20:26:23'),
(2, 'kazeo', 'kazeo@gmail.com', '$2y$10$KWSbuvkdEWDBvmScnUxob.2ETbOwpiM1m5/gZrt3C9Bn5twP8AX8y', '0cbdfd17-3359-4578-9a2c-c27e23ca2118', 'vCNCN7P1oygrHS90QVonQpFNA2wD3ZbVgozdpTxaQ6jlT456QZnm1Z8R2LOD', '2017-12-19 20:28:45', '2017-12-19 20:28:45'),
(6, 'agus', 'agus@gmail.com', '$2y$10$GbE8c/Uk783V5oVg/Sf.geeLDd0dxDkt1kKu./Z7WSLSk3e2rRVMO', '55ddf24f-a55f-4767-9b7b-6eccebef2572', '6gsX1tMDsr0Kxi6E7gcFNMt1l2o8chJCdfyxdnHWK4vOZnZfDQKUmCMG4Z22', '2017-12-25 20:38:03', '2017-12-25 20:38:03'),
(8, 'yuswa', 'yuswa98@gmail.com', '$2y$10$dw7yzBIOVZagCwA6jB1Ft.IqXPeqY834BnWt/wGtTLjBRt3WT8IIe', 'e6b0ba55-9cf1-411e-9cf3-8d42672857a0', 'DxLpNwhJZ1F1gjW4NUKzh1Ehg20gLv3RxoHDAOuretNQsQMZcQIkIN47fFUG', '2017-12-25 20:48:41', '2017-12-25 20:48:41'),
(9, 'test', 'test@gamil.com', '$2y$10$PSgyV1JSPK.4P41BbCJNk.y5XET5C3.7VA9zsXrhcpnCZc65GQd52', 'ef8aaf9f-240e-4e96-8ec6-b7a882ad7494', 'ZrgVVnBaC2viTGrD62SBMT0uBtHIcIkrEz4fw0IlsmfL6IGPjXxnPh67XTUo', '2017-12-25 20:55:36', '2017-12-25 20:55:36'),
(10, 'oke', 'oke@gmail.com', '$2y$10$ISpUMLY11Hu0EAnoQp9BfOS5pceqeuWaaHviP1KM5djj.tK4SbUtG', '89cf833f-625c-41b2-a6e9-1504e2ebc78d', 'm48g1yJ0Khtmyp8Zz7sfTl1VEYqt48g1vmfqNCbGsWo6urJUCuqhArxm6nby', '2017-12-28 06:10:33', '2017-12-28 06:10:33'),
(11, 'timo', 'timo@gmail.com', '$2y$10$Lfr12jiws0RxwyGYgmq0t./0w5GKFG6CvtK2SpWYiu2g5HLNCiNY2', '4ba32614-ca12-4c81-b5b9-6ccca8057aa2', 'U60YhjXelX3cjuAkfeNpI72k93yyIxf478gTnZ61CMIKghtno70HX0u1UTK6', '2017-12-28 06:24:48', '2017-12-28 06:24:48');

-- --------------------------------------------------------

--
-- Struktur dari tabel `visitors`
--

CREATE TABLE `visitors` (
  `id` int(10) UNSIGNED NOT NULL,
  `users` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `visitors`
--

INSERT INTO `visitors` (`id`, `users`, `country`, `created_at`, `updated_at`) VALUES
(1, '98598555660', 'Nepal', '2017-11-07 17:00:00', '2017-11-11 17:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barangs`
--
ALTER TABLE `barangs`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `bulans`
--
ALTER TABLE `bulans`
  ADD PRIMARY KEY (`id_bulan`);

--
-- Indexes for table `downloads`
--
ALTER TABLE `downloads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `file_trees`
--
ALTER TABLE `file_trees`
  ADD PRIMARY KEY (`id_file`);

--
-- Indexes for table `logins`
--
ALTER TABLE `logins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_tree`
--
ALTER TABLE `menu_tree`
  ADD PRIMARY KEY (`id_tree`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id_notes`);

--
-- Indexes for table `penjualans`
--
ALTER TABLE `penjualans`
  ADD PRIMARY KEY (`id_penjualan`);

--
-- Indexes for table `print_downloads`
--
ALTER TABLE `print_downloads`
  ADD PRIMARY KEY (`id_activity`);

--
-- Indexes for table `test_uploads`
--
ALTER TABLE `test_uploads`
  ADD PRIMARY KEY (`id_test`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barangs`
--
ALTER TABLE `barangs`
  MODIFY `id_barang` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `bulans`
--
ALTER TABLE `bulans`
  MODIFY `id_bulan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `downloads`
--
ALTER TABLE `downloads`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `file_trees`
--
ALTER TABLE `file_trees`
  MODIFY `id_file` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `logins`
--
ALTER TABLE `logins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `menu_tree`
--
ALTER TABLE `menu_tree`
  MODIFY `id_tree` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id_notes` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;
--
-- AUTO_INCREMENT for table `penjualans`
--
ALTER TABLE `penjualans`
  MODIFY `id_penjualan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;
--
-- AUTO_INCREMENT for table `print_downloads`
--
ALTER TABLE `print_downloads`
  MODIFY `id_activity` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `test_uploads`
--
ALTER TABLE `test_uploads`
  MODIFY `id_test` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
