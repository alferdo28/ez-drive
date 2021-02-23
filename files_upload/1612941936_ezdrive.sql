-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2021 at 01:40 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ezdrive`
--

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id_files` int(11) NOT NULL,
  `tag_files` varchar(45) DEFAULT NULL,
  `deskripsi_files` varchar(255) DEFAULT NULL,
  `url_files` varchar(255) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `upload_file` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id_files`, `tag_files`, `deskripsi_files`, `url_files`, `id_user`, `upload_file`) VALUES
(4, '', '', '1612735460_Sistem_parkir_mobil.ino', 1, '2021-02-07 22:04:20'),
(5, '', '', '1612735723_Notes_200701_164819_c65.docx', 2, '2021-02-07 22:08:43'),
(6, '', '', '1612736967_Undangan Musykom(benar) .pdf', 1, '2021-02-07 22:29:27'),
(7, '', '', '1612737469_ppt ristek gabungan.pptx', 1, '2021-02-07 22:37:49'),
(8, '', '', '1612738493_Proposal Skripsi_Dandy Nizam Achmady_Bimbingan.docx', 2, '2021-02-07 22:54:53'),
(9, '', '', '1612753282_acu_intothepixe610conceptart.jpg', 1, '2021-02-08 03:01:22'),
(11, '', '', '1612764088_MahasiswaApp.rar', 1, '2021-02-08 06:01:28'),
(14, '', '', '1612765178_form penilaian anggota HMIF.xlsx', 1, '2021-02-08 06:19:38'),
(17, '', '', '1612765794_557089_434117010040095_235910324_n.jpg', 2, '2021-02-08 06:29:54'),
(19, '', '', '1612766045_kuis_1_3011710014.rar', 2, '2021-02-08 06:34:05'),
(21, '', '', '1612766230_bios.rar', 1, '2021-02-08 06:37:10'),
(24, '', '', '1612767010_25 Judika - Sampai Kau Jadi Milikku.mp3', 2, '2021-02-08 06:50:10'),
(25, '', '', '1612767120_freetts-1.2.2-bin.zip', 1, '2021-02-08 06:52:00'),
(26, '', '', '1612778339_48346000.xlsx', 1, '2021-02-08 09:58:59'),
(27, '', '', '1612870001_Screenshot_20210204-172849.png', 1, '2021-02-09 11:26:41'),
(28, '', '', '1612872490_1612872461600714423933959700952.jpg', 1, '2021-02-09 12:08:10');

-- --------------------------------------------------------

--
-- Table structure for table `share`
--

CREATE TABLE `share` (
  `id_share` int(11) NOT NULL,
  `id_user_awal` int(11) DEFAULT NULL,
  `id_user_tujuan` int(11) DEFAULT NULL,
  `id_files_tujuan` varchar(45) DEFAULT NULL,
  `tanggal_share` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `share`
--

INSERT INTO `share` (`id_share`, `id_user_awal`, `id_user_tujuan`, `id_files_tujuan`, `tanggal_share`) VALUES
(3, 2, 1, '8', '2021-02-08 05:43:02'),
(4, 2, 1, '8', '2021-02-08 05:43:36'),
(9, 1, 2, '14', '2021-02-08 06:19:45'),
(10, 1, 2, '11', '2021-02-08 06:19:52');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `email`, `pass`) VALUES
(1, 'Dandy Nizam Achmady', 'dandy.achmady17@student.uisi.ac.id', '22b762bb2ebf5c30aa6151819b533bcd'),
(2, 'Dzakkiyatus Sholichah', 'dzakiyyah@email.com', '22b762bb2ebf5c30aa6151819b533bcd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id_files`);

--
-- Indexes for table `share`
--
ALTER TABLE `share`
  ADD PRIMARY KEY (`id_share`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id_files` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `share`
--
ALTER TABLE `share`
  MODIFY `id_share` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
