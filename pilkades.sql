-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Jul 2018 pada 06.59
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pilkades`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `caleg`
--

CREATE TABLE `caleg` (
  `id_caleg` int(11) NOT NULL,
  `nama_caleg` varchar(35) NOT NULL,
  `no_urut` int(11) NOT NULL,
  `moto` text NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `caleg`
--

INSERT INTO `caleg` (`id_caleg`, `nama_caleg`, `no_urut`, `moto`, `foto`) VALUES
(1, 'Lailur Rahman', 1, 'Bohay', '53168-responsive-layout.jpg'),
(2, 'Millatul Islamiyah', 2, 'mantap', '53168-m.jpg'),
(5, 'Mohammad Hurdi', 3, 'Pasti Menang', 'cfm.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gammu`
--

CREATE TABLE `gammu` (
  `Version` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `gammu`
--

INSERT INTO `gammu` (`Version`) VALUES
(13);

-- --------------------------------------------------------

--
-- Struktur dari tabel `inbox`
--

CREATE TABLE `inbox` (
  `UpdatedInDB` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ReceivingDateTime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `Text` text NOT NULL,
  `SenderNumber` varchar(20) NOT NULL DEFAULT '',
  `Coding` enum('Default_No_Compression','Unicode_No_Compression','8bit','Default_Compression','Unicode_Compression') NOT NULL DEFAULT 'Default_No_Compression',
  `UDH` text NOT NULL,
  `SMSCNumber` varchar(20) NOT NULL DEFAULT '',
  `Class` int(11) NOT NULL DEFAULT '-1',
  `TextDecoded` text NOT NULL,
  `ID` int(10) UNSIGNED NOT NULL,
  `RecipientID` text NOT NULL,
  `Processed` enum('false','true') NOT NULL DEFAULT 'false',
  `Status` int(11) NOT NULL DEFAULT '-1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `inbox`
--

INSERT INTO `inbox` (`UpdatedInDB`, `ReceivingDateTime`, `Text`, `SenderNumber`, `Coding`, `UDH`, `SMSCNumber`, `Class`, `TextDecoded`, `ID`, `RecipientID`, `Processed`, `Status`) VALUES
('2018-07-15 04:30:48', '2018-07-15 04:30:14', '00430045004B', '+6285259899942', 'Default_No_Compression', '', '+6281100000', -1, 'CEK', 1, '', 'true', -1),
('2018-07-15 04:32:15', '2018-07-15 04:32:12', '00500049004C0049004800200032', '+6285259899942', 'Default_No_Compression', '', '+6281100000', -1, 'PILIH 2', 2, '', 'true', -1),
('2018-07-15 04:32:59', '2018-07-15 04:32:52', '00530065006C0061006D00610074002C00200041006E006400610020006D0065006E00640061007000610074006B0061006E0020006B0075006F007400610020005400730065006C0020007300650062006500730061007200200039003500300053004D0053002E002000430065006B0020006B0075006F007400610020006400690020002A00380038003800230020006100740061007500200061006B0073006500730020004D0079002000540065006C006B006F006D00730065006C0020004100700070002E', 'TELKOMSEL', 'Default_No_Compression', '', '+6281100000', 1, 'Selamat, Anda mendapatkan kuota Tsel sebesar 950SMS. Cek kuota di *888# atau akses My Telkomsel App.', 3, '', 'true', -1),
('2018-07-15 04:34:25', '2018-07-15 04:34:15', '00500049004C0049004800200032', '+6285259899942', 'Default_No_Compression', '', '+6281100000', -1, 'PILIH 2', 4, '', 'true', -1),
('2018-07-15 04:37:30', '2018-07-15 04:36:04', '00500049004C0049004800200032', '+6285259899942', 'Default_No_Compression', '', '+6281100000', -1, 'PILIH 2', 5, '', 'true', -1),
('2018-07-15 04:37:30', '2018-07-15 04:37:24', '00500069006C0069006800200031', '+6282322926725', 'Default_No_Compression', '', '+6281100000', -1, 'Pilih 1', 6, '', 'true', -1),
('2018-07-15 04:43:27', '2018-07-15 04:42:25', '00500069006C0069006800200031', '+6282322926725', 'Default_No_Compression', '', '+6281100000', -1, 'Pilih 1', 13, '', 'true', -1),
('2018-07-15 04:43:27', '2018-07-15 04:43:15', '00500069006C0069006800200031', '+6282322926725', 'Default_No_Compression', '', '+6281100000', -1, 'Pilih 1', 14, '', 'true', -1),
('2018-07-15 04:45:29', '2018-07-15 04:45:23', '00500049004C0049004800200032', '+6285259899942', 'Default_No_Compression', '', '+6281100000', -1, 'PILIH 2', 15, '', 'true', -1),
('2018-07-15 04:48:34', '2018-07-15 04:48:28', '00500069006C0069006800200032', '+6287750358764', 'Default_No_Compression', '', '+62818445009', -1, 'Pilih 2', 16, '', 'true', -1),
('2018-07-15 04:50:41', '2018-07-15 04:50:34', '00500069006C0069006800200032', '+6287750358764', 'Default_No_Compression', '', '+62818445009', -1, 'Pilih 2', 17, '', 'true', -1),
('2018-07-15 04:55:20', '2018-07-15 04:55:07', '00500069006C0069006800200032', '+6285231834672', 'Default_No_Compression', '', '+6281100000', -1, 'Pilih 2', 18, '', 'true', -1);

--
-- Trigger `inbox`
--
DELIMITER $$
CREATE TRIGGER `inbox_timestamp` BEFORE INSERT ON `inbox` FOR EACH ROW BEGIN
    IF NEW.ReceivingDateTime = '0000-00-00 00:00:00' THEN
        SET NEW.ReceivingDateTime = CURRENT_TIMESTAMP();
    END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `outbox`
--

CREATE TABLE `outbox` (
  `UpdatedInDB` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `InsertIntoDB` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `SendingDateTime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `SendBefore` time NOT NULL DEFAULT '23:59:59',
  `SendAfter` time NOT NULL DEFAULT '00:00:00',
  `Text` text,
  `DestinationNumber` varchar(20) NOT NULL DEFAULT '',
  `Coding` enum('Default_No_Compression','Unicode_No_Compression','8bit','Default_Compression','Unicode_Compression') NOT NULL DEFAULT 'Default_No_Compression',
  `UDH` text,
  `Class` int(11) DEFAULT '-1',
  `TextDecoded` text NOT NULL,
  `ID` int(10) UNSIGNED NOT NULL,
  `MultiPart` enum('false','true') DEFAULT 'false',
  `RelativeValidity` int(11) DEFAULT '-1',
  `SenderID` varchar(255) DEFAULT NULL,
  `SendingTimeOut` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `DeliveryReport` enum('default','yes','no') DEFAULT 'default',
  `CreatorID` text NOT NULL,
  `Retries` int(3) DEFAULT '0',
  `Priority` int(11) DEFAULT '0',
  `Status` enum('SendingOK','SendingOKNoReport','SendingError','DeliveryOK','DeliveryFailed','DeliveryPending','DeliveryUnknown','Error','Reserved') NOT NULL DEFAULT 'Reserved',
  `StatusCode` int(11) NOT NULL DEFAULT '-1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Trigger `outbox`
--
DELIMITER $$
CREATE TRIGGER `outbox_timestamp` BEFORE INSERT ON `outbox` FOR EACH ROW BEGIN
    IF NEW.InsertIntoDB = '0000-00-00 00:00:00' THEN
        SET NEW.InsertIntoDB = CURRENT_TIMESTAMP();
    END IF;
    IF NEW.SendingDateTime = '0000-00-00 00:00:00' THEN
        SET NEW.SendingDateTime = CURRENT_TIMESTAMP();
    END IF;
    IF NEW.SendingTimeOut = '0000-00-00 00:00:00' THEN
        SET NEW.SendingTimeOut = CURRENT_TIMESTAMP();
    END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `outbox_multipart`
--

CREATE TABLE `outbox_multipart` (
  `Text` text,
  `Coding` enum('Default_No_Compression','Unicode_No_Compression','8bit','Default_Compression','Unicode_Compression') NOT NULL DEFAULT 'Default_No_Compression',
  `UDH` text,
  `Class` int(11) DEFAULT '-1',
  `TextDecoded` text,
  `ID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `SequencePosition` int(11) NOT NULL DEFAULT '1',
  `Status` enum('SendingOK','SendingOKNoReport','SendingError','DeliveryOK','DeliveryFailed','DeliveryPending','DeliveryUnknown','Error','Reserved') NOT NULL DEFAULT 'Reserved',
  `StatusCode` int(11) NOT NULL DEFAULT '-1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penduduk`
--

CREATE TABLE `penduduk` (
  `id_penduduk` int(11) NOT NULL,
  `nik` varchar(35) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `tmp_lhr` varchar(35) NOT NULL,
  `tgl_lhr` date NOT NULL,
  `gendre` enum('Laki-Laki','Perempuan') NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `agama` varchar(35) NOT NULL,
  `status` enum('Kawin','Belum Kawin') NOT NULL,
  `pekerjaan` varchar(35) NOT NULL,
  `hp` varchar(20) NOT NULL,
  `vote` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penduduk`
--

INSERT INTO `penduduk` (`id_penduduk`, `nik`, `nama`, `tmp_lhr`, `tgl_lhr`, `gendre`, `alamat`, `agama`, `status`, `pekerjaan`, `hp`, `vote`) VALUES
(1, '12345678', 'Hidayatus Syarifah', 'Pamekasan', '2018-05-01', 'Perempuan', 'Pamekasan', 'Islam', 'Belum Kawin', 'Programmer', '+6282322926725', 0),
(2, '12345678', 'Lailur Rahman', 'Pamekasan', '2018-05-01', 'Laki-Laki', 'Kadur', 'Islam', 'Belum Kawin', 'Karyawan', '+6282301846248', 0),
(3, '123456780', 'Millatul Islamiyah', 'Pamekasan', '2018-07-25', 'Perempuan', 'Kadur', 'Islam', 'Belum Kawin', 'Mahasiswa', '+6285259899942', 0),
(4, '1237218378123', 'Mohammad Rofik', 'Pamekasan', '2018-06-28', 'Laki-Laki', 'Pasanggar', 'Islam', 'Belum Kawin', 'Programmer', '+6287750358764', 0),
(5, '352801232', 'Zainur Rahman', 'Pamekasan', '2018-07-18', 'Laki-Laki', 'Pamekasan', 'Islam', 'Belum Kawin', 'Mahasiswa', '+6285231834672', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `phones`
--

CREATE TABLE `phones` (
  `ID` text NOT NULL,
  `UpdatedInDB` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `InsertIntoDB` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `TimeOut` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `Send` enum('yes','no') NOT NULL DEFAULT 'no',
  `Receive` enum('yes','no') NOT NULL DEFAULT 'no',
  `IMEI` varchar(35) NOT NULL,
  `IMSI` varchar(35) NOT NULL,
  `NetCode` varchar(10) DEFAULT 'ERROR',
  `NetName` varchar(35) DEFAULT 'ERROR',
  `Client` text NOT NULL,
  `Battery` int(11) NOT NULL DEFAULT '-1',
  `Signal` int(11) NOT NULL DEFAULT '-1',
  `Sent` int(11) NOT NULL DEFAULT '0',
  `Received` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `phones`
--

INSERT INTO `phones` (`ID`, `UpdatedInDB`, `InsertIntoDB`, `TimeOut`, `Send`, `Receive`, `IMEI`, `IMSI`, `NetCode`, `NetName`, `Client`, `Battery`, `Signal`, `Sent`, `Received`) VALUES
('', '2018-07-15 04:59:43', '2018-07-15 04:30:14', '2018-07-15 04:59:53', 'yes', 'yes', '863403013821980', '', 'ERROR', 'ERROR', 'Gammu 1.32.0, Windows Server 2007, GCC 4.7, MinGW 3.11', 100, 15, 19, 18);

--
-- Trigger `phones`
--
DELIMITER $$
CREATE TRIGGER `phones_timestamp` BEFORE INSERT ON `phones` FOR EACH ROW BEGIN
    IF NEW.InsertIntoDB = '0000-00-00 00:00:00' THEN
        SET NEW.InsertIntoDB = CURRENT_TIMESTAMP();
    END IF;
    IF NEW.TimeOut = '0000-00-00 00:00:00' THEN
        SET NEW.TimeOut = CURRENT_TIMESTAMP();
    END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sentitems`
--

CREATE TABLE `sentitems` (
  `UpdatedInDB` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `InsertIntoDB` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `SendingDateTime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `DeliveryDateTime` timestamp NULL DEFAULT NULL,
  `Text` text NOT NULL,
  `DestinationNumber` varchar(20) NOT NULL DEFAULT '',
  `Coding` enum('Default_No_Compression','Unicode_No_Compression','8bit','Default_Compression','Unicode_Compression') NOT NULL DEFAULT 'Default_No_Compression',
  `UDH` text NOT NULL,
  `SMSCNumber` varchar(20) NOT NULL DEFAULT '',
  `Class` int(11) NOT NULL DEFAULT '-1',
  `TextDecoded` text NOT NULL,
  `ID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `SenderID` varchar(255) NOT NULL,
  `SequencePosition` int(11) NOT NULL DEFAULT '1',
  `Status` enum('SendingOK','SendingOKNoReport','SendingError','DeliveryOK','DeliveryFailed','DeliveryPending','DeliveryUnknown','Error') NOT NULL DEFAULT 'SendingOK',
  `StatusError` int(11) NOT NULL DEFAULT '-1',
  `TPMR` int(11) NOT NULL DEFAULT '-1',
  `RelativeValidity` int(11) NOT NULL DEFAULT '-1',
  `CreatorID` text NOT NULL,
  `StatusCode` int(11) NOT NULL DEFAULT '-1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sentitems`
--

INSERT INTO `sentitems` (`UpdatedInDB`, `InsertIntoDB`, `SendingDateTime`, `DeliveryDateTime`, `Text`, `DestinationNumber`, `Coding`, `UDH`, `SMSCNumber`, `Class`, `TextDecoded`, `ID`, `SenderID`, `SequencePosition`, `Status`, `StatusError`, `TPMR`, `RelativeValidity`, `CreatorID`, `StatusCode`) VALUES
('2018-07-15 04:31:18', '2018-07-15 04:30:48', '2018-07-15 04:31:18', NULL, '004E006F006D006F007200200041006E006400610020005300750064006100680020005400650072006400610066007400610072002000440065006E00670061006E0020004900640065006E007400690074006100730020005300650062006100670061006900200042006500720069006B007500740020003A000D000A004E0061006D00610020003A0020004C00610069006C007500720020005200610068006D0061006E000D000A004E0049004B0020003A002000310032003300340035003600370038', '+6285259899942', 'Default_No_Compression', '', '+6281100000', -1, 'Nomor Anda Sudah Terdaftar Dengan Identitas Sebagai Berikut :\r\nNama : Lailur Rahman\r\nNIK : 12345678', 42, '', 1, 'SendingOKNoReport', -1, 209, 255, 'Pilkades', -1),
('2018-07-15 04:32:24', '2018-07-15 04:32:15', '2018-07-15 04:32:24', NULL, '004D006100610066002C00200041006E006400610020005300750064006100680020004D0065006D0069006C006900680020004E006F0020005500720075007400200032002C00200041006E0064006100200054006900640061006B0020004400690062006F006C00650068006B0061006E0020004D0065006D0069006C006900680020004C006500620069006800200044006100720069002000310078002E', '+6285259899942', 'Default_No_Compression', '', '+6281100000', -1, 'Maaf, Anda Sudah Memilih No Urut 2, Anda Tidak Dibolehkan Memilih Lebih Dari 1x.', 43, '', 1, 'SendingOKNoReport', -1, 210, 255, 'Pilkades', -1),
('2018-07-15 04:33:42', '2018-07-15 04:32:59', '2018-07-15 04:33:42', NULL, '004D006100610066002C0020004E006F006D006F007200200041006E00640061002000420065006C0075006D00200054006500720064006100660074006100720021', 'TELKOMSEL', 'Default_No_Compression', '', '+6281100000', -1, 'Maaf, Nomor Anda Belum Terdaftar!', 44, '', 1, 'SendingError', -1, -1, 255, 'Pilkades', -1),
('2018-07-15 04:34:47', '2018-07-15 04:34:25', '2018-07-15 04:34:47', NULL, '0041006E00640061002000540065006C0061006800200042006500720068006100730069006C0020004D0065006D0069006C006900680021000D000A004E0061006D00610020003A0020004C00610069006C007500720020005200610068006D0061006E000D000A004E0049004B0020003A002000310032003300340035003600370038000D000A004D0065006D0069006C006900680020003A0020004E006F0020005500720075007400200032', '+6285259899942', 'Default_No_Compression', '', '+6281100000', -1, 'Anda Telah Berhasil Memilih!\r\nNama : Lailur Rahman\r\nNIK : 12345678\r\nMemilih : No Urut 2', 45, '', 1, 'SendingOKNoReport', -1, 212, 255, 'Pilkades', -1),
('2018-07-15 04:37:23', '2018-07-15 04:36:53', '2018-07-15 04:37:23', NULL, '0074006500730074000D000A', '082302060485', 'Default_No_Compression', '', '+6281100000', -1, 'test\r\n', 46, '', 1, 'SendingOKNoReport', -1, 213, 255, 'Pilkades', -1),
('2018-07-15 04:38:03', '2018-07-15 04:37:30', '2018-07-15 04:38:03', NULL, '004D006100610066002C00200041006E006400610020005300750064006100680020004D0065006D0069006C006900680020004E006F0020005500720075007400200032002C00200041006E0064006100200054006900640061006B0020004400690062006F006C00650068006B0061006E0020004D0065006D0069006C006900680020004C006500620069006800200044006100720069002000310078002E', '+6285259899942', 'Default_No_Compression', '', '+6281100000', -1, 'Maaf, Anda Sudah Memilih No Urut 2, Anda Tidak Dibolehkan Memilih Lebih Dari 1x.', 47, '', 1, 'SendingOKNoReport', -1, 214, 255, 'Pilkades', -1),
('2018-07-15 04:38:08', '2018-07-15 04:37:30', '2018-07-15 04:38:08', NULL, '004D006100610066002C0020004E006F006D006F007200200041006E00640061002000420065006C0075006D00200054006500720064006100660074006100720021', '+6282322926725', 'Default_No_Compression', '', '+6281100000', -1, 'Maaf, Nomor Anda Belum Terdaftar!', 48, '', 1, 'SendingOKNoReport', -1, 215, 255, 'Pilkades', -1),
('2018-07-15 04:38:45', '2018-07-15 04:38:18', '2018-07-15 04:38:45', NULL, '004D006100610066002C0020004E006F006D006F007200200041006E00640061002000420065006C0075006D00200054006500720064006100660074006100720021', 'TELKOMSEL', 'Default_No_Compression', '', '+6281100000', -1, 'Maaf, Nomor Anda Belum Terdaftar!', 49, '', 1, 'SendingError', -1, -1, 255, 'Pilkades', -1),
('2018-07-15 04:38:53', '2018-07-15 04:38:29', '2018-07-15 04:38:53', NULL, '004D006100610066002C0020004E006F006D006F007200200041006E00640061002000420065006C0075006D00200054006500720064006100660074006100720021', '88331', 'Default_No_Compression', '', '+6281100000', -1, 'Maaf, Nomor Anda Belum Terdaftar!', 50, '', 1, 'SendingOKNoReport', -1, 217, 255, 'Pilkades', -1),
('2018-07-15 04:39:27', '2018-07-15 04:38:59', '2018-07-15 04:39:27', NULL, '004D006100610066002C0020004E006F006D006F007200200041006E00640061002000420065006C0075006D00200054006500720064006100660074006100720021', '88331', 'Default_No_Compression', '', '+6281100000', -1, 'Maaf, Nomor Anda Belum Terdaftar!', 51, '', 1, 'SendingOKNoReport', -1, 218, 255, 'Pilkades', -1),
('2018-07-15 04:40:01', '2018-07-15 04:39:29', '2018-07-15 04:40:01', NULL, '004D006100610066002C0020004E006F006D006F007200200041006E00640061002000420065006C0075006D00200054006500720064006100660074006100720021', '88331', 'Default_No_Compression', '', '+6281100000', -1, 'Maaf, Nomor Anda Belum Terdaftar!', 52, '', 1, 'SendingOKNoReport', -1, 219, 255, 'Pilkades', -1),
('2018-07-15 04:40:54', '2018-07-15 04:40:04', '2018-07-15 04:40:54', NULL, '004D006100610066002C0020004E006F006D006F007200200041006E00640061002000420065006C0075006D00200054006500720064006100660074006100720021', '88331', 'Default_No_Compression', '', '+6281100000', -1, 'Maaf, Nomor Anda Belum Terdaftar!', 53, '', 1, 'SendingOKNoReport', -1, 220, 255, 'Pilkades', -1),
('2018-07-15 04:41:34', '2018-07-15 04:40:59', '2018-07-15 04:41:34', NULL, '004D006100610066002C0020004E006F006D006F007200200041006E00640061002000420065006C0075006D00200054006500720064006100660074006100720021', '88330', 'Default_No_Compression', '', '+6281100000', -1, 'Maaf, Nomor Anda Belum Terdaftar!', 54, '', 1, 'SendingOKNoReport', -1, 221, 255, 'Pilkades', -1),
('2018-07-15 04:43:39', '2018-07-15 04:43:27', '2018-07-15 04:43:39', NULL, '004D006100610066002C00200041006E006400610020005300750064006100680020004D0065006D0069006C006900680020004E006F0020005500720075007400200031002C00200041006E0064006100200054006900640061006B0020004400690062006F006C00650068006B0061006E0020004D0065006D0069006C006900680020004C006500620069006800200044006100720069002000310078002E', '+6282322926725', 'Default_No_Compression', '', '+6281100000', -1, 'Maaf, Anda Sudah Memilih No Urut 1, Anda Tidak Dibolehkan Memilih Lebih Dari 1x.', 56, '', 1, 'SendingOKNoReport', -1, 222, 255, 'Pilkades', -1),
('2018-07-15 04:43:43', '2018-07-15 04:43:27', '2018-07-15 04:43:43', NULL, '0041006E00640061002000540065006C0061006800200042006500720068006100730069006C0020004D0065006D0069006C006900680021000D000A004E0061006D00610020003A0020004800690064006100790061007400750073002000530079006100720069006600610068000D000A004E0049004B0020003A002000310032003300340035003600370038000D000A004D0065006D0069006C006900680020003A0020004E006F0020005500720075007400200031', '+6282322926725', 'Default_No_Compression', '', '+6281100000', -1, 'Anda Telah Berhasil Memilih!\r\nNama : Hidayatus Syarifah\r\nNIK : 12345678\r\nMemilih : No Urut 1', 55, '', 1, 'SendingOKNoReport', -1, 223, 255, 'Pilkades', -1),
('2018-07-15 04:45:50', '2018-07-15 04:45:29', '2018-07-15 04:45:50', NULL, '0041006E00640061002000540065006C0061006800200042006500720068006100730069006C0020004D0065006D0069006C006900680021000D000A004E0061006D00610020003A0020004D0069006C006C006100740075006C002000490073006C0061006D0069007900610068000D000A004E0049004B0020003A0020003100320033003400350036003700380030000D000A004D0065006D0069006C006900680020003A0020004E006F0020005500720075007400200032', '+6285259899942', 'Default_No_Compression', '', '+6281100000', -1, 'Anda Telah Berhasil Memilih!\r\nNama : Millatul Islamiyah\r\nNIK : 123456780\r\nMemilih : No Urut 2', 57, '', 1, 'SendingOKNoReport', -1, 224, 255, 'Pilkades', -1),
('2018-07-15 04:49:09', '2018-07-15 04:48:34', '2018-07-15 04:49:09', NULL, '004D006100610066002C0020004E006F006D006F007200200041006E00640061002000420065006C0075006D00200054006500720064006100660074006100720021', '+6287750358764', 'Default_No_Compression', '', '+6281100000', -1, 'Maaf, Nomor Anda Belum Terdaftar!', 58, '', 1, 'SendingOKNoReport', -1, 225, 255, 'Pilkades', -1),
('2018-07-15 04:51:27', '2018-07-15 04:50:41', '2018-07-15 04:51:27', NULL, '0041006E00640061002000540065006C0061006800200042006500720068006100730069006C0020004D0065006D0069006C006900680021000D000A004E0061006D00610020003A0020004D006F00680061006D006D0061006400200052006F00660069006B000D000A004E0049004B0020003A00200031003200330037003200310038003300370038003100320033000D000A004D0065006D0069006C006900680020003A0020004E006F0020005500720075007400200032', '+6287750358764', 'Default_No_Compression', '', '+6281100000', -1, 'Anda Telah Berhasil Memilih!\r\nNama : Mohammad Rofik\r\nNIK : 1237218378123\r\nMemilih : No Urut 2', 59, '', 1, 'SendingOKNoReport', -1, 226, 255, 'Pilkades', -1),
('2018-07-15 04:55:33', '2018-07-15 04:55:20', '2018-07-15 04:55:33', NULL, '0041006E00640061002000540065006C0061006800200042006500720068006100730069006C0020004D0065006D0069006C006900680021000D000A004E0061006D00610020003A0020005A00610069006E007500720020005200610068006D0061006E000D000A004E0049004B0020003A0020003300350032003800300031003200330032000D000A004D0065006D0069006C006900680020003A0020004E006F0020005500720075007400200032', '+6285231834672', 'Default_No_Compression', '', '+6281100000', -1, 'Anda Telah Berhasil Memilih!\r\nNama : Zainur Rahman\r\nNIK : 352801232\r\nMemilih : No Urut 2', 60, '', 1, 'SendingOKNoReport', -1, 227, 255, 'Pilkades', -1);

--
-- Trigger `sentitems`
--
DELIMITER $$
CREATE TRIGGER `sentitems_timestamp` BEFORE INSERT ON `sentitems` FOR EACH ROW BEGIN
    IF NEW.InsertIntoDB = '0000-00-00 00:00:00' THEN
        SET NEW.InsertIntoDB = CURRENT_TIMESTAMP();
    END IF;
    IF NEW.SendingDateTime = '0000-00-00 00:00:00' THEN
        SET NEW.SendingDateTime = CURRENT_TIMESTAMP();
    END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(35) NOT NULL,
  `password` varchar(255) NOT NULL,
  `akses` int(11) NOT NULL,
  `nama_user` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`, `akses`, `nama_user`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1, 'Admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `vote`
--

CREATE TABLE `vote` (
  `id_vote` int(11) NOT NULL,
  `id_penduduk` int(11) NOT NULL,
  `id_caleg` int(11) NOT NULL,
  `no_urut` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `vote`
--

INSERT INTO `vote` (`id_vote`, `id_penduduk`, `id_caleg`, `no_urut`, `date`) VALUES
(1, 0, 0, 1, '2018-07-15 04:35:00'),
(2, 0, 0, 2, '2018-07-15 04:35:04'),
(3, 0, 0, 3, '2018-07-15 04:35:08');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `caleg`
--
ALTER TABLE `caleg`
  ADD PRIMARY KEY (`id_caleg`);

--
-- Indeks untuk tabel `gammu`
--
ALTER TABLE `gammu`
  ADD PRIMARY KEY (`Version`);

--
-- Indeks untuk tabel `inbox`
--
ALTER TABLE `inbox`
  ADD PRIMARY KEY (`ID`);

--
-- Indeks untuk tabel `outbox`
--
ALTER TABLE `outbox`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `outbox_date` (`SendingDateTime`,`SendingTimeOut`),
  ADD KEY `outbox_sender` (`SenderID`(250));

--
-- Indeks untuk tabel `outbox_multipart`
--
ALTER TABLE `outbox_multipart`
  ADD PRIMARY KEY (`ID`,`SequencePosition`);

--
-- Indeks untuk tabel `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`id_penduduk`);

--
-- Indeks untuk tabel `phones`
--
ALTER TABLE `phones`
  ADD PRIMARY KEY (`IMEI`);

--
-- Indeks untuk tabel `sentitems`
--
ALTER TABLE `sentitems`
  ADD PRIMARY KEY (`ID`,`SequencePosition`),
  ADD KEY `sentitems_date` (`DeliveryDateTime`),
  ADD KEY `sentitems_tpmr` (`TPMR`),
  ADD KEY `sentitems_dest` (`DestinationNumber`),
  ADD KEY `sentitems_sender` (`SenderID`(250));

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `vote`
--
ALTER TABLE `vote`
  ADD PRIMARY KEY (`id_vote`),
  ADD KEY `id_caleg` (`id_caleg`),
  ADD KEY `id_penduduk` (`id_penduduk`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `caleg`
--
ALTER TABLE `caleg`
  MODIFY `id_caleg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `inbox`
--
ALTER TABLE `inbox`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `outbox`
--
ALTER TABLE `outbox`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT untuk tabel `penduduk`
--
ALTER TABLE `penduduk`
  MODIFY `id_penduduk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `vote`
--
ALTER TABLE `vote`
  MODIFY `id_vote` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
