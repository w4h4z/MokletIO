-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 07 Des 2017 pada 15.31
-- Versi Server: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pw`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_event`
--

CREATE TABLE `detail_event` (
  `ID_DETAIL` int(11) NOT NULL,
  `ID_EVENT` int(11) DEFAULT NULL,
  `NAMA_DETAIL` varchar(100) DEFAULT NULL,
  `NAMA_MINI_TITLE` varchar(50) DEFAULT NULL,
  `SUB_NAMA_TITLE` varchar(50) DEFAULT NULL,
  `DESC_DETAIL` text,
  `FOTO_DETAIL` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `event_sub`
--

CREATE TABLE `event_sub` (
  `ID_EVENT` int(11) NOT NULL,
  `ID_DETAIL` int(11) DEFAULT NULL,
  `ID_SUB` int(11) DEFAULT NULL,
  `NAMA_EVENT` varchar(100) DEFAULT NULL,
  `SUB_NAMA_EVENT` varchar(50) DEFAULT NULL,
  `FOTO_EVENT` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `feature`
--

CREATE TABLE `feature` (
  `ID_FEATURE` int(11) NOT NULL,
  `ID_SUB` int(11) DEFAULT NULL,
  `NAMA_FEATURE` varchar(100) DEFAULT NULL,
  `DESC_FEATURE` text,
  `ICON_FEATURE` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `feature`
--

INSERT INTO `feature` (`ID_FEATURE`, `ID_SUB`, `NAMA_FEATURE`, `DESC_FEATURE`, `ICON_FEATURE`) VALUES
(1, 1, 'a', 'lorem ipsum dolor sit amet terusno dewe aku ora apal', 'fa fa-users'),
(2, 1, 'b', 'lorem ipsum dolor sit amet terusno dewe aku ora apal', 'fa fa-users'),
(3, 1, 'c', 'lorem ipsum dolor sit amet terusno dewe aku ora apal', 'fa fa-users');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gallery_sub`
--

CREATE TABLE `gallery_sub` (
  `ID_GAL` int(11) NOT NULL,
  `ID_SUB` int(11) DEFAULT NULL,
  `FOTO_GAL` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gallery_sub`
--

INSERT INTO `gallery_sub` (`ID_GAL`, `ID_SUB`, `FOTO_GAL`) VALUES
(17, 1, '1_Pelindung7.png'),
(18, 1, '2_Pembina7.png'),
(19, 1, '3_ketua9.png'),
(20, 1, '4_Wakil_ketua8.png'),
(21, 1, '5_Sekretaris9.png'),
(22, 1, '6_Bendahara11.png'),
(23, 1, 'Anggota6.png'),
(24, 1, 'SIE_amil5.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `member_sub`
--

CREATE TABLE `member_sub` (
  `ID_MEMBER` int(11) NOT NULL,
  `ID_SUB` int(11) DEFAULT NULL,
  `NAMA_MEMBER` varchar(100) DEFAULT NULL,
  `ANGKATAN_MEMBER` int(5) NOT NULL,
  `KELAS_MEMBER` varchar(10) NOT NULL,
  `NO_HP_MEMBER` varchar(15) DEFAULT NULL,
  `EMAIL_MEMBER` varchar(50) DEFAULT NULL,
  `ALASAN_MEMBER` text,
  `FOTO_MEMBER` text,
  `STATUS_MEMBER` int(11) DEFAULT NULL,
  `JABATAN_MEMBER` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `member_sub`
--

INSERT INTO `member_sub` (`ID_MEMBER`, `ID_SUB`, `NAMA_MEMBER`, `ANGKATAN_MEMBER`, `KELAS_MEMBER`, `NO_HP_MEMBER`, `EMAIL_MEMBER`, `ALASAN_MEMBER`, `FOTO_MEMBER`, `STATUS_MEMBER`, `JABATAN_MEMBER`) VALUES
(1, 1, 'Muhammad Salim Aiman', 24, 'XIIRPL2', '082230914134', 'salimaiman@gmail.com', 'Ingin memiliki pengalaman aktif dalam berorganisasi di SMK Telkom Malang', '83900a5b6d403ddbfd4e843ea70828f4.jpg', 0, 'Anggota'),
(2, 1, 'Miftakhul Eza Alfandy', 24, 'XIITKJ1', '082235918560', 'ezaalfandy@gmail.com', 'Ingin menambah relasi melalui sub organisasi ', '83900a5b6d403ddbfd4e843ea70828f4.jpg', 0, 'Anggota'),
(3, 2, 'a', 25, 'XIRPL5', '90', 'ajdnsjnd@jd.com', '', '83900a5b6d403ddbfd4e843ea70828f4.jpg', 0, 'Anggota'),
(4, 1, 'ksm', 26, 'XTKJ4', '34', 'ajdnsjnd@jd.com', 'dsd', '83900a5b6d403ddbfd4e843ea70828f4.jpg', 0, 'Anggota'),
(5, 1, 'js dj', 27, 'XIRPL3', '99', 'ajdnsjnd@jd.com', 'sds', 'Adobe_Premiere_Pro_CS6_Icon.png', 0, 'Anggota');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sub_organ`
--

CREATE TABLE `sub_organ` (
  `ID_SUB` int(11) NOT NULL,
  `ID_USER` int(11) DEFAULT NULL,
  `NAMA_SUB` varchar(50) DEFAULT NULL,
  `SINGKATAN_SUB` varchar(50) DEFAULT NULL,
  `DESC_SUB` text,
  `FOTO_HEADER_SUB` text,
  `LOGO_SUB` text,
  `PRIMARY_COLOR` varchar(10) NOT NULL,
  `SECONDARY_COLOR` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sub_organ`
--

INSERT INTO `sub_organ` (`ID_SUB`, `ID_USER`, `NAMA_SUB`, `SINGKATAN_SUB`, `DESC_SUB`, `FOTO_HEADER_SUB`, `LOGO_SUB`, `PRIMARY_COLOR`, `SECONDARY_COLOR`) VALUES
(1, 1, 'Badan Dakwah Islam', 'BDI', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam mattis, est in vehicula eleifend, leo urna fermentum tellus, non tempor nulla nisi id ligula. Ut convallis tincidunt tellus sit amet placerat. Curabitur dictum egestas erat, at tempus nibh sagittis non. Morbi semper lacus vel tortor vulputate mattis. Morbi at erat sed sapien pharetra bibendum at et elit. Sed sapien nisl, malesuada non consequat vel, semper ut ipsum. Vestibulum pretium justo vel molestie rhoncus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Ut sed arcu non mauris lobortis condimentum. Pellentesque aliquam tortor nec quam tristique fermentum consectetur quis justo. Vivamus venenatis magna venenatis mi rhoncus, id hendrerit orci vestibulum. Nulla ac mauris magna. Sed non pellentesque erat. Fusce ac imperdiet tellus. Aliquam rutrum enim velit, ut vestibulum odio tincidunt nec. Nulla lorem lacus, euismod vel congue non, viverra a libero.', 'SIE_inventaris.png', 'logo_bdi4.jpg', '#e9e9e9', '#29d1b3'),
(2, 2, 'Moklet Education Technology Informatic Club', 'METIC', 'lorem ipsum dolor sit amet', NULL, NULL, '', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_account`
--

CREATE TABLE `user_account` (
  `ID_USER` int(11) NOT NULL,
  `ID_SUB` int(11) DEFAULT NULL,
  `USERNAME` varchar(50) DEFAULT NULL,
  `PASSWORD` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_account`
--

INSERT INTO `user_account` (`ID_USER`, `ID_SUB`, `USERNAME`, `PASSWORD`) VALUES
(1, 1, 'adminbdi', '202cb962ac59075b964b07152d234b70'),
(2, 2, 'a', '0cc175b9c0f1b6a831c399e269772661');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_event`
--
ALTER TABLE `detail_event`
  ADD PRIMARY KEY (`ID_DETAIL`),
  ADD KEY `FK_MENJABARKAN2` (`ID_EVENT`);

--
-- Indexes for table `event_sub`
--
ALTER TABLE `event_sub`
  ADD PRIMARY KEY (`ID_EVENT`),
  ADD KEY `ID_DETAIL` (`ID_DETAIL`),
  ADD KEY `ID_SUB` (`ID_SUB`);

--
-- Indexes for table `feature`
--
ALTER TABLE `feature`
  ADD PRIMARY KEY (`ID_FEATURE`),
  ADD KEY `ID_SUB` (`ID_SUB`);

--
-- Indexes for table `gallery_sub`
--
ALTER TABLE `gallery_sub`
  ADD PRIMARY KEY (`ID_GAL`),
  ADD KEY `ID_SUB` (`ID_SUB`);

--
-- Indexes for table `member_sub`
--
ALTER TABLE `member_sub`
  ADD PRIMARY KEY (`ID_MEMBER`),
  ADD KEY `ID_SUB` (`ID_SUB`);

--
-- Indexes for table `sub_organ`
--
ALTER TABLE `sub_organ`
  ADD PRIMARY KEY (`ID_SUB`),
  ADD KEY `ID_USER` (`ID_USER`);

--
-- Indexes for table `user_account`
--
ALTER TABLE `user_account`
  ADD PRIMARY KEY (`ID_USER`),
  ADD KEY `ID_SUB` (`ID_SUB`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_event`
--
ALTER TABLE `detail_event`
  MODIFY `ID_DETAIL` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `event_sub`
--
ALTER TABLE `event_sub`
  MODIFY `ID_EVENT` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `feature`
--
ALTER TABLE `feature`
  MODIFY `ID_FEATURE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `gallery_sub`
--
ALTER TABLE `gallery_sub`
  MODIFY `ID_GAL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `member_sub`
--
ALTER TABLE `member_sub`
  MODIFY `ID_MEMBER` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `sub_organ`
--
ALTER TABLE `sub_organ`
  MODIFY `ID_SUB` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user_account`
--
ALTER TABLE `user_account`
  MODIFY `ID_USER` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `event_sub`
--
ALTER TABLE `event_sub`
  ADD CONSTRAINT `event_sub_ibfk_1` FOREIGN KEY (`ID_DETAIL`) REFERENCES `detail_event` (`ID_DETAIL`),
  ADD CONSTRAINT `event_sub_ibfk_2` FOREIGN KEY (`ID_SUB`) REFERENCES `sub_organ` (`ID_SUB`);

--
-- Ketidakleluasaan untuk tabel `feature`
--
ALTER TABLE `feature`
  ADD CONSTRAINT `feature_ibfk_1` FOREIGN KEY (`ID_SUB`) REFERENCES `sub_organ` (`ID_SUB`);

--
-- Ketidakleluasaan untuk tabel `gallery_sub`
--
ALTER TABLE `gallery_sub`
  ADD CONSTRAINT `gallery_sub_ibfk_1` FOREIGN KEY (`ID_SUB`) REFERENCES `sub_organ` (`ID_SUB`);

--
-- Ketidakleluasaan untuk tabel `member_sub`
--
ALTER TABLE `member_sub`
  ADD CONSTRAINT `member_sub_ibfk_1` FOREIGN KEY (`ID_SUB`) REFERENCES `sub_organ` (`ID_SUB`);

--
-- Ketidakleluasaan untuk tabel `sub_organ`
--
ALTER TABLE `sub_organ`
  ADD CONSTRAINT `sub_organ_ibfk_2` FOREIGN KEY (`ID_USER`) REFERENCES `user_account` (`ID_USER`);

--
-- Ketidakleluasaan untuk tabel `user_account`
--
ALTER TABLE `user_account`
  ADD CONSTRAINT `user_account_ibfk_1` FOREIGN KEY (`ID_SUB`) REFERENCES `sub_organ` (`ID_SUB`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
