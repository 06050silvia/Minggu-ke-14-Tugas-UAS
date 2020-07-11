-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2020 at 03:53 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_justforyou`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_album`
--

CREATE TABLE `tbl_album` (
  `album_id` int(11) NOT NULL,
  `album_nama` varchar(50) DEFAULT NULL,
  `album_tanggal` timestamp NULL DEFAULT current_timestamp(),
  `album_pengguna_id` int(11) DEFAULT NULL,
  `album_author` varchar(60) DEFAULT NULL,
  `album_count` int(11) DEFAULT 0,
  `album_cover` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_album`
--

INSERT INTO `tbl_album` (`album_id`, `album_nama`, `album_tanggal`, `album_pengguna_id`, `album_author`, `album_count`, `album_cover`) VALUES
(5, 'Conference', '2020-07-11 09:42:06', 1, 'silvia', 3, '1eb2353b32968451d6817b7736906458.jpg'),
(6, 'Sketch', '2020-07-11 09:45:29', 1, 'silvia', 4, 'a5490f003c95495deb9e455c6fe3f4ee.jpg'),
(7, 'Discussion', '2020-07-11 09:47:41', 1, 'silvia', 2, '88d70aff1d8badf42358b08f7bc5ab38.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dokumentasi`
--

CREATE TABLE `tbl_dokumentasi` (
  `dokumentasi_id` int(11) NOT NULL,
  `dokumentasi_judul` varchar(60) DEFAULT NULL,
  `dokumentasi_tanggal` timestamp NULL DEFAULT current_timestamp(),
  `dokumentasi_gambar` varchar(40) DEFAULT NULL,
  `dokumentasi_album_id` int(11) DEFAULT NULL,
  `dokumentasi_pengguna_id` int(11) DEFAULT NULL,
  `dokumentasi_author` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_dokumentasi`
--

INSERT INTO `tbl_dokumentasi` (`dokumentasi_id`, `dokumentasi_judul`, `dokumentasi_tanggal`, `dokumentasi_gambar`, `dokumentasi_album_id`, `dokumentasi_pengguna_id`, `dokumentasi_author`) VALUES
(19, 'Video Conference 1', '2020-07-11 09:44:42', 'badc4255af77f58054b52aaf34e50c75.jpg', 5, 1, 'silvia'),
(20, 'Sketch 1', '2020-07-11 09:45:49', '03506646294828715228472df9c08bb6.jpg', 6, 1, 'silvia'),
(21, 'Video Conference 2', '2020-07-11 09:46:24', '5aca82cdcacc07c8686b27ad008b5a57.jpg', 5, 1, 'silvia'),
(22, 'Sketch 2', '2020-07-11 09:46:39', '86a96300f4bdae7f76425ffe316cdce4.jpg', 6, 1, 'silvia'),
(23, 'Video Conference 3', '2020-07-11 09:46:55', '6cccefca08e6a27df0f6a6189389c392.jpg', 5, 1, 'silvia'),
(24, 'Sketch 3', '2020-07-11 09:47:19', 'ba0b90df4c9437ca87f04c5587693ee2.jpg', 6, 1, 'silvia'),
(25, 'Discussion 1', '2020-07-11 09:48:18', '9d77d70effa40dc4f2a794443e00c7d2.jpg', 7, 1, 'silvia'),
(26, 'Sketch 4', '2020-07-11 09:48:49', 'd02947548aa697b2d1f435c2a4b6e378.jpg', 6, 1, 'silvia'),
(27, 'Discussion 2', '2020-07-11 09:49:13', '25940be5c0b194ddb2664015068d3dea.jpg', 7, 1, 'silvia');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_files`
--

CREATE TABLE `tbl_files` (
  `file_id` int(11) NOT NULL,
  `file_judul` varchar(120) DEFAULT NULL,
  `file_deskripsi` text DEFAULT NULL,
  `file_tanggal` timestamp NULL DEFAULT current_timestamp(),
  `file_oleh` varchar(60) DEFAULT NULL,
  `file_download` int(11) DEFAULT 0,
  `file_data` varchar(120) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_files`
--

INSERT INTO `tbl_files` (`file_id`, `file_judul`, `file_deskripsi`, `file_tanggal`, `file_oleh`, `file_download`, `file_data`) VALUES
(13, 'Welcome to JFY', 'Manual for Just For You Customer', '2020-07-11 09:54:56', 'Admin', 0, 'e7be3700d372d00535e7a0b9e46b4670.pdf'),
(14, 'Guide to Create', 'Create Function Manual for Just For You Customer', '2020-07-11 09:55:56', 'Admin', 0, '152290a672d120ab072ae41f4820812a.pdf'),
(15, 'Guide to Consult', 'Consult Function Manual for Just For You Customer', '2020-07-11 09:56:18', 'Admin', 0, '2a3666da82a7e49667c7c170d7de4675.pdf'),
(16, 'Guide to Order', 'Order Function Manual for Just For You Customer', '2020-07-11 09:56:41', 'Admin', 0, '83c9af152bbcbfc9c32254b4cc9610f1.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_inbox`
--

CREATE TABLE `tbl_inbox` (
  `inbox_id` int(11) NOT NULL,
  `inbox_nama` varchar(40) DEFAULT NULL,
  `inbox_email` varchar(60) DEFAULT NULL,
  `inbox_kontak` varchar(20) DEFAULT NULL,
  `inbox_pesan` text DEFAULT NULL,
  `inbox_tanggal` timestamp NULL DEFAULT current_timestamp(),
  `inbox_status` int(11) DEFAULT 1 COMMENT '1=Belum dilihat, 0=Telah dilihat'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_inbox`
--

INSERT INTO `tbl_inbox` (`inbox_id`, `inbox_nama`, `inbox_email`, `inbox_kontak`, `inbox_pesan`, `inbox_tanggal`, `inbox_status`) VALUES
(11, 'try', 'try@gmail.com', '123456789000', 'try try try', '2020-07-11 10:36:50', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_konsultan`
--

CREATE TABLE `tbl_konsultan` (
  `konsultan_id` int(11) NOT NULL,
  `konsultan_nama` varchar(70) DEFAULT NULL,
  `konsultan_bidang` varchar(120) DEFAULT NULL,
  `konsultan_kontak` varchar(50) DEFAULT NULL,
  `konsultan_photo` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_konsultan`
--

INSERT INTO `tbl_konsultan` (`konsultan_id`, `konsultan_nama`, `konsultan_bidang`, `konsultan_kontak`, `konsultan_photo`) VALUES
(1, 'Fia Anggraini', 'Fashion Expert', 'fianggraini@gmail.com', 'a515079541ec35dd618e83824868e51b.jpg'),
(2, 'Andrea Peaocio', 'Interior Designer', 'andrea.cio@gmail.com', '178489bf07cc43868f62d36294dde509.jpg'),
(3, 'Mohamed', 'Graphic Designer', 'moh.med@gmail.com', '45fac0fdeafc9d7fa67246cb2d76252d.jpg'),
(4, 'Jeffrey', 'Furniture Expert', 'anderson_jeffrey@gmail.com', '0acd3d45b12a304d3f3dc545ae6866c9.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_log_aktivitas`
--

CREATE TABLE `tbl_log_aktivitas` (
  `log_id` int(11) NOT NULL,
  `log_nama` text DEFAULT NULL,
  `log_tanggal` timestamp NULL DEFAULT current_timestamp(),
  `log_ip` varchar(20) DEFAULT NULL,
  `log_pengguna_id` int(11) DEFAULT NULL,
  `log_icon` blob DEFAULT NULL,
  `log_jenis_icon` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengguna`
--

CREATE TABLE `tbl_pengguna` (
  `pengguna_id` int(11) NOT NULL,
  `pengguna_nama` varchar(50) DEFAULT NULL,
  `pengguna_jenkel` varchar(2) DEFAULT NULL,
  `pengguna_username` varchar(30) DEFAULT NULL,
  `pengguna_password` varchar(35) DEFAULT NULL,
  `pengguna_email` varchar(50) DEFAULT NULL,
  `pengguna_nohp` varchar(20) DEFAULT NULL,
  `pengguna_status` int(2) DEFAULT 1,
  `pengguna_level` varchar(3) DEFAULT NULL,
  `pengguna_register` timestamp NULL DEFAULT current_timestamp(),
  `pengguna_photo` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pengguna`
--

INSERT INTO `tbl_pengguna` (`pengguna_id`, `pengguna_nama`, `pengguna_jenkel`, `pengguna_username`, `pengguna_password`, `pengguna_email`, `pengguna_nohp`, `pengguna_status`, `pengguna_level`, `pengguna_register`, `pengguna_photo`) VALUES
(1, 'silvia', 'P', 'silvia', 'e10adc3949ba59abbe56e057f20f883e', 'justforyou@gmail.com', '123456789012', 1, '1', '2020-07-10 08:58:55', 'a4a3a7db1fda8889e888f8543b65c600.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengunjung`
--

CREATE TABLE `tbl_pengunjung` (
  `pengunjung_id` int(11) NOT NULL,
  `pengunjung_tanggal` timestamp NULL DEFAULT current_timestamp(),
  `pengunjung_ip` varchar(40) DEFAULT NULL,
  `pengunjung_perangkat` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pengunjung`
--

INSERT INTO `tbl_pengunjung` (`pengunjung_id`, `pengunjung_tanggal`, `pengunjung_ip`, `pengunjung_perangkat`) VALUES
(930, '2018-08-09 08:04:59', '::1', 'Chrome'),
(931, '2020-07-07 02:24:40', '::1', 'Chrome'),
(932, '2020-07-10 05:09:29', '::1', 'Chrome'),
(933, '2020-07-11 02:59:38', '::1', 'Chrome');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_testimoni`
--

CREATE TABLE `tbl_testimoni` (
  `testimoni_id` int(11) NOT NULL,
  `testimoni_nama` varchar(30) DEFAULT NULL,
  `testimoni_isi` varchar(120) DEFAULT NULL,
  `testimoni_email` varchar(35) DEFAULT NULL,
  `testimoni_tanggal` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_album`
--
ALTER TABLE `tbl_album`
  ADD PRIMARY KEY (`album_id`),
  ADD KEY `album_pengguna_id` (`album_pengguna_id`);

--
-- Indexes for table `tbl_dokumentasi`
--
ALTER TABLE `tbl_dokumentasi`
  ADD PRIMARY KEY (`dokumentasi_id`),
  ADD KEY `galeri_album_id` (`dokumentasi_album_id`),
  ADD KEY `galeri_pengguna_id` (`dokumentasi_pengguna_id`);

--
-- Indexes for table `tbl_files`
--
ALTER TABLE `tbl_files`
  ADD PRIMARY KEY (`file_id`);

--
-- Indexes for table `tbl_inbox`
--
ALTER TABLE `tbl_inbox`
  ADD PRIMARY KEY (`inbox_id`);

--
-- Indexes for table `tbl_konsultan`
--
ALTER TABLE `tbl_konsultan`
  ADD PRIMARY KEY (`konsultan_id`);

--
-- Indexes for table `tbl_log_aktivitas`
--
ALTER TABLE `tbl_log_aktivitas`
  ADD PRIMARY KEY (`log_id`),
  ADD KEY `log_pengguna_id` (`log_pengguna_id`);

--
-- Indexes for table `tbl_pengguna`
--
ALTER TABLE `tbl_pengguna`
  ADD PRIMARY KEY (`pengguna_id`);

--
-- Indexes for table `tbl_pengunjung`
--
ALTER TABLE `tbl_pengunjung`
  ADD PRIMARY KEY (`pengunjung_id`);

--
-- Indexes for table `tbl_testimoni`
--
ALTER TABLE `tbl_testimoni`
  ADD PRIMARY KEY (`testimoni_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_album`
--
ALTER TABLE `tbl_album`
  MODIFY `album_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_dokumentasi`
--
ALTER TABLE `tbl_dokumentasi`
  MODIFY `dokumentasi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tbl_files`
--
ALTER TABLE `tbl_files`
  MODIFY `file_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_inbox`
--
ALTER TABLE `tbl_inbox`
  MODIFY `inbox_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_konsultan`
--
ALTER TABLE `tbl_konsultan`
  MODIFY `konsultan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_log_aktivitas`
--
ALTER TABLE `tbl_log_aktivitas`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_pengguna`
--
ALTER TABLE `tbl_pengguna`
  MODIFY `pengguna_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_pengunjung`
--
ALTER TABLE `tbl_pengunjung`
  MODIFY `pengunjung_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=934;

--
-- AUTO_INCREMENT for table `tbl_testimoni`
--
ALTER TABLE `tbl_testimoni`
  MODIFY `testimoni_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
