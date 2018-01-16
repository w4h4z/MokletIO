-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2018 at 02:59 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_pw`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_event`
--

CREATE TABLE IF NOT EXISTS `detail_event` (
  `ID_DETAIL` int(11) NOT NULL AUTO_INCREMENT,
  `ID_EVENT` int(11) DEFAULT NULL,
  `NAMA_DETAIL` varchar(100) DEFAULT NULL,
  `NAMA_MINI_TITLE` varchar(50) DEFAULT NULL,
  `SUB_NAMA_TITLE` varchar(50) DEFAULT NULL,
  `DESC_DETAIL` text,
  `BANNER_DETAIL` text,
  `POSTER_DETAIL` text NOT NULL,
  PRIMARY KEY (`ID_DETAIL`),
  KEY `FK_MENJABARKAN2` (`ID_EVENT`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `detail_event`
--

INSERT INTO `detail_event` (`ID_DETAIL`, `ID_EVENT`, `NAMA_DETAIL`, `NAMA_MINI_TITLE`, `SUB_NAMA_TITLE`, `DESC_DETAIL`, `BANNER_DETAIL`, `POSTER_DETAIL`) VALUES
(2, 2, 'Hanan Attaki Lc', 'Penceramah', 'Alumni Fakultas Ushuluddin Al -Azhar , Kairo', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>', 'conference.jpg', 'biografi-hanan-attaki-9.jpg'),
(4, 7, 'Detail Name', 'mini title', 'sub detail name', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit</p><p>in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p><p>. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p><p>&nbsp;</p>', 'comet_4.jpg', 'comet_14.jpg'),
(5, 8, 'Muhammad Iqbal KP', 'OUR PERFORMANCE', 'Pemeran laki laki dalam pentas drama GALASESA 2K18', '<p>Muhammad Iqbal lahir di Jombang 20 Maret 2001. Menekuni dunia Akustik. Namun, kali ini ia mencoba gaya baru &quot;Actor&quot; dalam drama bergenre remaja ini akan tampil di GALSESA 2K18. Kami segenap anggota Moklet Art Club siap menghibur siswa siswi SMK Telkom Malang.&nbsp; See you on Galasesa 2K18&nbsp;</p>', 'mac1.jpg', 'iqbalkp.JPG'),
(6, 9, 'Moklet Vacashoot 2016', 'The Winner', 'Pemenang Lomba Foto Liburan', '<p>Selamat kepada Muhammad Azmi Rahman atas kemenangnya dalam ajang Moklet Vacashoot !!. Semoga kamu yang menang tahun depan yaa&nbsp;</p>', 'Memo3.jpg', 'memo2.JPG'),
(7, 10, 'The venet 2 detail', 'The mini title of event', 'The detail Name', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>', 'event1.jpg', 'Rembrandt_van_rijn-self_portrait.jpg'),
(8, 11, 'Moklet Vacashoot 2017', 'The Winner', 'Pemenang Lomba Foto Liburan', '<p>Selamat kepada Muhammad Azmi Rahman atas kemenangnya dalam ajang Moklet Vacashoot !!. Semoga kamu yang menang tahun depan yaa&nbsp;</p>', 'memo12.JPG', 'memo4.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `event_sub`
--

CREATE TABLE IF NOT EXISTS `event_sub` (
  `ID_EVENT` int(11) NOT NULL AUTO_INCREMENT,
  `ID_DETAIL` int(11) DEFAULT NULL,
  `ID_SUB` int(11) DEFAULT NULL,
  `NAMA_EVENT` varchar(100) DEFAULT NULL,
  `SUB_NAMA_EVENT` varchar(50) DEFAULT NULL,
  `TANGGAL_EVENT` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID_EVENT`),
  KEY `ID_SUB` (`ID_SUB`),
  KEY `event_sub_ibfk_1` (`ID_DETAIL`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `event_sub`
--

INSERT INTO `event_sub` (`ID_EVENT`, `ID_DETAIL`, `ID_SUB`, `NAMA_EVENT`, `SUB_NAMA_EVENT`, `TANGGAL_EVENT`) VALUES
(2, 2, 1, 'Pondok Ramadhan 2020', 'Pondok Ramadhan SMK Telkom Malang', '0000-00-00 00:00:00'),
(7, 4, 6, 'Event Title', 'Sub TItle Name', '2018-01-14 00:43:18'),
(8, 5, 15, 'Galasesa 2K18', 'Gembyar malam seni wikusama', '2018-01-15 01:42:56'),
(9, 6, 16, 'MOklet Vacashoot 2016', 'Lomba foto liburan SMK Telkom Malang', '2018-01-15 06:12:36'),
(10, 7, 16, 'Event 2`', 'The Memo Annual Event', '2018-01-16 01:08:57'),
(11, 8, 16, 'MOklet Vacashoot 2017', 'Lomba foto liburan SMK Telkom Malang', '2018-01-16 03:26:18');

-- --------------------------------------------------------

--
-- Table structure for table `feature`
--

CREATE TABLE IF NOT EXISTS `feature` (
  `ID_FEATURE` int(11) NOT NULL AUTO_INCREMENT,
  `ID_SUB` int(11) DEFAULT NULL,
  `NAMA_FEATURE` varchar(100) DEFAULT NULL,
  `DESC_FEATURE` text,
  `ICON_FEATURE` text,
  PRIMARY KEY (`ID_FEATURE`),
  KEY `ID_SUB` (`ID_SUB`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=50 ;

--
-- Dumping data for table `feature`
--

INSERT INTO `feature` (`ID_FEATURE`, `ID_SUB`, `NAMA_FEATURE`, `DESC_FEATURE`, `ICON_FEATURE`) VALUES
(1, 1, 'Feature', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam mattis, est in vehicula eleifend, leo urna fermentum tellus, non tempor nulla nisi id ligula. Ut convallis tincidunt tellus sit amet placerat. Curabitur dictum egestas erat, at tempus nibh sagittis non.', 'fa fa-glass'),
(2, 1, 'Feature', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam mattis, est in vehicula eleifend, leo urna fermentum tellus, non tempor nulla nisi id ligula. Ut convallis tincidunt tellus sit amet placerat. Curabitur dictum egestas erat, at tempus nibh sagittis non.', 'fa fa-envelope-o'),
(3, 1, 'Feature', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam mattis, est in vehicula eleifend, leo urna fermentum tellus, non tempor nulla nisi id ligula. Ut convallis tincidunt tellus sit amet placerat. Curabitur dictum egestas erat, at tempus nibh sagittis non.', 'fa fa-volume-down'),
(4, 2, 'Feature', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'fa fa-users'),
(5, 2, 'Feature', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'fa fa-users'),
(6, 2, 'Feature', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'fa fa-users'),
(7, 3, 'Features', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'fa fa-users'),
(8, 3, 'Feature', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'fa fa-users'),
(9, 3, 'Feature', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'fa fa-users'),
(10, 4, 'Feature', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'fa fa-users'),
(11, 4, 'Feature', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'fa fa-users'),
(12, 4, 'Feature', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'fa fa-users'),
(13, 5, 'Feature', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'fa fa-users'),
(14, 6, 'Feature', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'fa fa-users'),
(15, 5, 'Feature', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'fa fa-users'),
(16, 5, 'Feature', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'fa fa-users'),
(17, 6, 'Feature', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'fa fa-users'),
(18, 6, 'Feature', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'fa fa-users'),
(19, 7, 'Feature', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'fa fa-users'),
(20, 7, 'Feature', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'fa fa-users'),
(21, 7, 'Feature', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'fa fa-users'),
(22, 8, 'Feature', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'fa fa-users'),
(23, 8, 'Feature', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'fa fa-users'),
(24, 8, 'Feature', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'fa fa-users'),
(25, 9, 'Feature', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'fa fa-users'),
(26, 9, 'Feature', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'fa fa-users'),
(27, 9, 'Feature', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'fa fa-users'),
(28, 10, 'Feature', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'fa fa-users'),
(29, 10, 'Feature', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'fa fa-users'),
(30, 10, 'Feature', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'fa fa-users'),
(31, 11, 'Jadwal Forum', 'Forum rutin OSIS (Organisasi Siswa Intra Sekolah) diadakan setiap hari Rabu ', 'fa fa-users'),
(32, 11, 'Materi Forum', 'Pembahasan progja (program kerja) OSIS dan pelaksanaannya', 'fa fa-user'),
(33, 11, 'Ketua Umum OSIS', 'Nama      : Muhammad Haidar Zamzam Rijaldi\r\nKelas       : XI RPL 5', 'fa-male'),
(34, 12, 'Feature', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'fa fa-users'),
(35, 12, 'Feature', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'fa fa-users'),
(36, 12, 'Feature', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'fa fa-users'),
(37, 13, 'Feature', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'fa fa-users'),
(38, 13, 'Feature', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'fa fa-users'),
(39, 13, 'Feature', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'fa fa-users'),
(40, 14, 'Feature', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'fa fa-users'),
(41, 14, 'Feature', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'fa fa-users'),
(42, 14, 'Feature', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'fa fa-users'),
(43, 5, 'Feature', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'fa fa-users'),
(44, 15, 'Forum', 'Forum rrutin Moklet Art Club biasanya diadakan pada hari Jumat ', 'fa fa-table'),
(45, 15, 'Materi', 'Senior senior Moklet Art Club siap memberikan mater materi tentang kesenian', 'fa fa-book'),
(46, 15, 'Latihan', 'Moklet Art Club senantiassa mengadakan latihan lattihan rutin di sekolah maupun di luar sekolah', 'fa fa-play-circle-o'),
(47, 16, 'Forum', 'Forum rutin Memdia Moklet biasanya diadakan pada hari Kamis ', 'fa fa-table'),
(48, 16, 'Materi', 'Senior senior Media Moklet siap memberikan mater materi tentang Jurnalistik, Desain Grafis dan Fotografi.', 'fa fa-film'),
(49, 16, 'Perlombaan', 'Media Moklet akan terus berpartisipasi mengikuti lomba lomba ', 'fa fa-play-circle-o');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_sub`
--

CREATE TABLE IF NOT EXISTS `gallery_sub` (
  `ID_GAL` int(11) NOT NULL AUTO_INCREMENT,
  `ID_SUB` int(11) DEFAULT NULL,
  `FOTO_GAL` text,
  PRIMARY KEY (`ID_GAL`),
  KEY `ID_SUB` (`ID_SUB`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=45 ;

--
-- Dumping data for table `gallery_sub`
--

INSERT INTO `gallery_sub` (`ID_GAL`, `ID_SUB`, `FOTO_GAL`) VALUES
(24, 6, 'comet_2.jpg'),
(25, 6, 'comet_31.jpg'),
(26, 6, 'comet_44.jpg'),
(27, 6, 'comet_61.jpg'),
(28, 6, 'comet_7.jpg'),
(29, 1, 'bdi_5.jpg'),
(30, 1, 'bdi_1.jpg'),
(31, 1, 'bdi_2.jpg'),
(32, 1, 'bdi_3.jpg'),
(33, 1, 'bdi_4.jpg'),
(34, 16, 'memo.JPG'),
(35, 16, 'memo11.JPG'),
(36, 16, 'memo21.JPG'),
(37, 16, 'Memo31.jpg'),
(38, 16, 'lombamemo1.jpg'),
(40, 11, 'gal_OSIS.jpg'),
(41, 11, 'OSIS1.jpg'),
(42, 11, 'gal_OSIS1.jpg'),
(43, 11, 'gal_OSIS2.jpg'),
(44, 11, 'gal_OSIS3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `member_sub`
--

CREATE TABLE IF NOT EXISTS `member_sub` (
  `ID_MEMBER` int(11) NOT NULL AUTO_INCREMENT,
  `ID_SUB` int(11) DEFAULT NULL,
  `NAMA_MEMBER` varchar(100) DEFAULT NULL,
  `ANGKATAN_MEMBER` int(5) NOT NULL,
  `KELAS_MEMBER` varchar(10) NOT NULL,
  `NO_HP_MEMBER` varchar(15) DEFAULT NULL,
  `EMAIL_MEMBER` varchar(50) DEFAULT NULL,
  `ALASAN_MEMBER` text,
  `FOTO_MEMBER` text,
  `STATUS_MEMBER` int(11) DEFAULT NULL,
  `JABATAN_MEMBER` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID_MEMBER`),
  KEY `ID_SUB` (`ID_SUB`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `member_sub`
--

INSERT INTO `member_sub` (`ID_MEMBER`, `ID_SUB`, `NAMA_MEMBER`, `ANGKATAN_MEMBER`, `KELAS_MEMBER`, `NO_HP_MEMBER`, `EMAIL_MEMBER`, `ALASAN_MEMBER`, `FOTO_MEMBER`, `STATUS_MEMBER`, `JABATAN_MEMBER`) VALUES
(3, 1, 'aaaabbbbb', 25, 'XIRPL5', '90', 'ajdnsjnd@jd.com', 'jnjn', '83900a5b6d403ddbfd4e843ea70828f4.jpg', 1, 'Anggota'),
(4, 1, 'aa', 21, 'XRPL3', '12', 'ajdnsjnd@jd.com', 'asa', NULL, 1, 'Anggota'),
(5, 2, 'Miftakhul Eza Alfandy', 1, 'XRPL6', '3', 'wahaz@gmail.com', 'asas', 'XIIR2.JPG', 0, 'Anggota'),
(9, 1, 'dummy', 24, 'XII', 'sad', 'asd', 'asdas', 'asdasd', 0, 'asdsad'),
(10, 1, 'dummy', 24, 'XII', 'sad', 'asd', 'asdas', 'asdasd', 0, 'asdsad'),
(11, 1, 'dummy', 24, 'XII', 'sad', 'asd', 'asdas', 'asdasd', 0, 'asdsad'),
(12, 1, 'dummy', 24, 'XII', 'sad', 'asd', 'asdas', 'asdasd', 0, 'asdsad'),
(13, 1, 'dummy', 24, 'XII', 'sad', 'asd', 'asdas', 'asdasd', 0, 'asdsad'),
(14, 1, 'dummy', 24, 'XII', 'sad', 'asd', 'asdas', 'asdasd', 0, 'asdsad'),
(15, 1, 'dummy', 24, 'XII', 'sad', 'asd', 'asdas', 'asdasd', 0, 'asdsad'),
(16, 1, 'dummy', 24, 'XII', 'sad', 'asd', 'asdas', 'asdasd', 0, 'asdsad'),
(17, 1, 'dummy', 24, 'XII', 'sad', 'asd', 'asdas', 'asdasd', 0, 'asdsad'),
(18, 1, 'dummy', 24, 'XII', 'sad', 'asd', 'asdas', 'asdasd', 0, 'asdsad'),
(19, 1, 'dummy', 24, 'XII', 'sad', 'asd', 'asdas', 'asdasd', 0, 'asdsad'),
(20, 1, 'dummy', 24, 'XII', 'sad', 'asd', 'asdas', 'asdasd', 0, 'asdsad'),
(21, 1, 'dummy', 24, 'XII', 'sad', 'asd', 'asdas', 'asdasd', 0, 'asdsad'),
(22, 1, 'dummy', 24, 'XII', 'sad', 'asd', 'asdas', 'asdasd', 0, 'asdsad'),
(23, 1, 'dummy', 24, 'XII', 'sad', 'asd', 'asdas', 'asdasd', 0, 'asdsad'),
(24, 1, 'dummy', 24, 'XII', 'sad', 'asd', 'asdas', 'asdasd', 0, 'asdsad'),
(25, 1, 'dummy', 24, 'XII', 'sad', 'asd', 'asdas', 'asdasd', 0, 'asdsad'),
(26, 1, 'dummy', 24, 'XII', 'sad', 'asd', 'asdas', 'asdasd', 0, 'asdsad'),
(27, 1, 'dummy', 24, 'XII', 'sad', 'asd', 'asdas', 'asdasd', 0, 'asdsad'),
(28, 1, 'dummy', 24, 'XII', 'sad', 'asd', 'asdas', 'asdasd', 0, 'asdsad'),
(29, 1, 'dummy', 24, 'XII', 'sad', 'asd', 'asdas', 'asdasd', 0, 'asdsad'),
(30, 1, 'dummy', 24, 'XII', 'sad', 'asd', 'asdas', 'asdasd', 0, 'asdsad'),
(31, 1, 'dummy', 24, 'XII', 'sad', 'asd', 'asdas', 'asdasd', 0, 'asdsad'),
(32, 16, 'Memo Member', 25, 'XRPL1', '082267736674', 'sample@gmail.com', '', 'hh2.jpg', 1, 'Anggota'),
(33, 16, 'Memo Member 2', 25, 'XRPL1', '082267736674', 'sample@gmail.com', '', 'hh2.jpg', 1, 'Anggota'),
(34, 16, 'adasdasd', 12, 'XRPL1', NULL, NULL, NULL, NULL, NULL, 'Anggota'),
(35, 16, '', 0, 'XRPL1', NULL, NULL, NULL, NULL, NULL, 'Anggota'),
(36, 16, 'sadas', 12, 'XRPL1', NULL, NULL, NULL, NULL, NULL, 'Anggota'),
(37, 16, '', 0, 'XRPL1', NULL, NULL, NULL, NULL, NULL, 'Anggota');

-- --------------------------------------------------------

--
-- Table structure for table `sub_organ`
--

CREATE TABLE IF NOT EXISTS `sub_organ` (
  `ID_SUB` int(11) NOT NULL AUTO_INCREMENT,
  `ID_USER` int(11) DEFAULT NULL,
  `NAMA_SUB` varchar(50) DEFAULT NULL,
  `SINGKATAN_SUB` varchar(50) DEFAULT NULL,
  `DESC_SUB` text,
  `FOTO_HEADER_SUB` text,
  `LOGO_SUB` text,
  `PRIMARY_COLOR` varchar(10) NOT NULL,
  `SECONDARY_COLOR` varchar(10) NOT NULL,
  PRIMARY KEY (`ID_SUB`),
  KEY `ID_USER` (`ID_USER`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `sub_organ`
--

INSERT INTO `sub_organ` (`ID_SUB`, `ID_USER`, `NAMA_SUB`, `SINGKATAN_SUB`, `DESC_SUB`, `FOTO_HEADER_SUB`, `LOGO_SUB`, `PRIMARY_COLOR`, `SECONDARY_COLOR`) VALUES
(1, 1, 'Badan Dakwah Islam', 'BDI', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>', 'bdi.jpg', 'logo_bdi4.jpg', '#e9e9e9', '#20c700'),
(2, 2, 'Moklet Education Technology and Informatic Club', 'METIC', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>', NULL, 'metic.png', '#222222', '#001f6b'),
(3, 3, 'Palang Merah Remaja', 'PMR', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>', NULL, 'pmr.png', '#222222', '#001f6b'),
(4, 4, 'Pasukan Pengibar Bendera', 'PASKIBRA', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>', NULL, 'paski.png', '#222222', '#001f6b'),
(5, 5, 'PALWAGA', 'PALWAGA', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>', NULL, 'palwaga.png', '#222222', '#001f6b'),
(6, 6, 'Community of Moklet English Debaters', 'COMET', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>', 'comet_6.jpg', 'comet.png', '#e9e9e9', '#b50000'),
(7, 7, 'Telkom School BasketBall Club', 'TSBC', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>', NULL, 'tsbc.png', '#e9e9e9', '#b50000'),
(8, 8, 'Telkom School Cycling Club', 'TSCC', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>', NULL, 'tscc.png', '#e9e9e9', '#b50000'),
(9, 9, 'Telkom School Futsal Club', 'TSFC', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>', NULL, 'tsfc.png', '#e9e9e9', '#b50000'),
(10, 10, 'Telkom School Volley Club', 'TSVC', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>', NULL, 'tsvc.png', '#e9e9e9', '#b50000'),
(11, 11, 'Organisasi Siswa Intra Sekolah', 'OSIS', '<p>OSIS (Organisasi Siswa Intra Sekolah) adalah organisasi di&nbsp;SMK Telkom Malang yang beranggotakan seluruh siswa SMK Telkom Malang serta berpenguruskan perwakilan siswa dari tiap kelas. Disini OSIS bertanggung jawab atas program kerja dari Sub Organisasi yang ada, serta program kerja dari OSIS itu sendiri. Program kerja dari OSIS antara lain, Galasesa, OSIS Cup, Bulan Dana, Bulan Bahasa, dan acara 17 Agustus</p>', 'OSIS2.jpg', 'osis.png', '#e9e9e9', '#b50b00'),
(12, 12, 'Majelis Perwakilan Kelas', 'MPK', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>', NULL, 'mpk.JPG', '#e9e9e9', 'rgba(191,0'),
(13, 13, 'Perpustakaan SMK Telkom Malang', 'PUSTEL', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>', NULL, 'pustel.png', '#222222', '#00219e'),
(14, 14, 'Dewan Ambalan', 'DA', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>', NULL, 'da.png', '#e9e9e9', '#b50000'),
(15, 15, 'Moklet Art Club', 'MAC', '<p>Adalah sub organisasi dibawah sie 8 OSIS SMK Telkom Malang. Sub organisasi ini bergerak dibidang kesenian terutama dibidang theater, akustik dan seni tari. Moklet Art Club aktif tampil dalam kegiatan-kegiatan sekolah seperti Galasesa, Wikufest dan beberapa event event lainnya. Moklet Art Club memiliki 1 buah lagu yang merupakan kreasi anggota dengan judul &quot;Senyumku senyum kita&quot;</p>', 'mac2.jpg', 'mac.png', '#222222', '#00208f'),
(16, 16, 'Media Moklet', 'MEMO', '<p>Media moklet adalah sub organisasi yang bergerak dibawah sie 8 OSIS SMK Telkom Malang. Memo bergerak di bidang Jurnalistik, desain, Fotografi. Media Moklet aktif mengadakan event event internal sekolah seperti Moklet Vacashoot dan mengeola mading sekolah&nbsp;.</p><p>Media Moklet SMK Telkom Malang</p><p>&nbsp;Memo juga aktif mengikuti lomba lomba di luar sekolah. Kami senantiasa terbuka akan hadirnya anggota anggota baru. Dan siap memberikan materi materi mengenai jurnalistik, fotografi dan desain&nbsp;&nbsp;</p>', 'memo1.JPG', 'memo.png', '#222222', '#e0cd1f');

-- --------------------------------------------------------

--
-- Table structure for table `user_account`
--

CREATE TABLE IF NOT EXISTS `user_account` (
  `ID_USER` int(11) NOT NULL AUTO_INCREMENT,
  `ID_SUB` int(11) DEFAULT NULL,
  `USERNAME` varchar(50) DEFAULT NULL,
  `PASSWORD` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID_USER`),
  KEY `ID_SUB` (`ID_SUB`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `user_account`
--

INSERT INTO `user_account` (`ID_USER`, `ID_SUB`, `USERNAME`, `PASSWORD`) VALUES
(1, 1, 'adminbdi', '202cb962ac59075b964b07152d234b70'),
(2, 2, 'metic', '4aaab439b8375f8608fefcdd56789ba3'),
(3, 3, 'pmr', '2baba74f3ab8c4f508ce57085c17cd62'),
(4, 4, 'paskibra', '582d07dc0095906bcee822511e5fe5c5'),
(5, 5, 'palwaga', '51703acac756fb50454f35231c496ff2'),
(6, 6, 'comet', '4b525fc7a9098015d955968c92947e80'),
(7, 7, 'tsbc', 'fc9a15fd4b3bb4143cd91d25624dfb70'),
(8, 8, 'tscc', '53380f50180f631145f77a1cd029a845'),
(9, 9, 'tsfc', '11e1f72075b6b6a71b3c556d3c3f13af'),
(10, 10, 'tsvc', 'bc2a3b769c051db9dd872dc4291196e6'),
(11, 11, 'osis', '5ee4f2e5c3c3a0e841a8b216c6c28e88'),
(12, 12, 'mpk', '9ee8ed09d9c77dbc444414b1c6793747'),
(13, 13, 'pustel', '9f724ccd02054ff013181fa9dc880779'),
(14, 14, 'da', '5ca2aa845c8cd5ace6b016841f100d82'),
(15, 15, 'mac', '140c1f12feeb2c52dfbeb2da6066a73a'),
(16, 16, 'memo', 'd504a5ea65b088497578bdd812714d51');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `event_sub`
--
ALTER TABLE `event_sub`
  ADD CONSTRAINT `event_sub_ibfk_1` FOREIGN KEY (`ID_DETAIL`) REFERENCES `detail_event` (`ID_DETAIL`) ON DELETE SET NULL,
  ADD CONSTRAINT `event_sub_ibfk_2` FOREIGN KEY (`ID_SUB`) REFERENCES `sub_organ` (`ID_SUB`);

--
-- Constraints for table `feature`
--
ALTER TABLE `feature`
  ADD CONSTRAINT `feature_ibfk_1` FOREIGN KEY (`ID_SUB`) REFERENCES `sub_organ` (`ID_SUB`);

--
-- Constraints for table `gallery_sub`
--
ALTER TABLE `gallery_sub`
  ADD CONSTRAINT `gallery_sub_ibfk_1` FOREIGN KEY (`ID_SUB`) REFERENCES `sub_organ` (`ID_SUB`);

--
-- Constraints for table `member_sub`
--
ALTER TABLE `member_sub`
  ADD CONSTRAINT `member_sub_ibfk_1` FOREIGN KEY (`ID_SUB`) REFERENCES `sub_organ` (`ID_SUB`);

--
-- Constraints for table `sub_organ`
--
ALTER TABLE `sub_organ`
  ADD CONSTRAINT `sub_organ_ibfk_2` FOREIGN KEY (`ID_USER`) REFERENCES `user_account` (`ID_USER`);

--
-- Constraints for table `user_account`
--
ALTER TABLE `user_account`
  ADD CONSTRAINT `user_account_ibfk_1` FOREIGN KEY (`ID_SUB`) REFERENCES `sub_organ` (`ID_SUB`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
