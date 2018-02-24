-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2017 at 10:30 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skripsi`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensi`
--

CREATE TABLE `absensi` (
  `id` int(11) NOT NULL,
  `siswa_nis` bigint(20) NOT NULL,
  `sakit` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `ijin` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `alpha` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `periode_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `absensi`
--

INSERT INTO `absensi` (`id`, `siswa_nis`, `sakit`, `ijin`, `alpha`, `periode_id`) VALUES
(1, 21423, 5, 0, 0, 1),
(2, 21419, 2, 0, 0, 1),
(3, 21421, 0, 1, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `bobot`
--

CREATE TABLE `bobot` (
  `id` int(11) NOT NULL,
  `jenis_nilai_id` int(11) NOT NULL,
  `periode_id` int(11) NOT NULL,
  `bobot` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bobot`
--

INSERT INTO `bobot` (`id`, `jenis_nilai_id`, `periode_id`, `bobot`) VALUES
(1, 1, 1, 50),
(2, 2, 1, 25),
(3, 3, 1, 25),
(4, 4, 1, 40),
(5, 5, 1, 20),
(6, 6, 1, 20),
(7, 7, 1, 20),
(11, 1, 3, 20),
(12, 2, 3, 17),
(13, 4, 3, 15);

-- --------------------------------------------------------

--
-- Table structure for table `deskom`
--

CREATE TABLE `deskom` (
  `id` int(11) NOT NULL,
  `mapel_id` int(11) NOT NULL,
  `periode_id` int(11) NOT NULL,
  `grade` tinyint(1) NOT NULL,
  `pengetahuan` text NOT NULL,
  `keterampilan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ekskul`
--

CREATE TABLE `ekskul` (
  `id` int(11) NOT NULL,
  `nama_ekskul` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ekskul`
--

INSERT INTO `ekskul` (`id`, `nama_ekskul`) VALUES
(1, 'Pramuka'),
(3, 'PMR');

-- --------------------------------------------------------

--
-- Table structure for table `ekskul_guru`
--

CREATE TABLE `ekskul_guru` (
  `guru_id` int(11) NOT NULL,
  `ekskul_id` int(11) NOT NULL,
  `periode_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ekskul_guru`
--

INSERT INTO `ekskul_guru` (`guru_id`, `ekskul_id`, `periode_id`) VALUES
(4, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `ekskul_siswa`
--

CREATE TABLE `ekskul_siswa` (
  `siswa_nis` bigint(20) NOT NULL,
  `ekskul_id` int(11) NOT NULL,
  `periode_id` int(11) NOT NULL,
  `predikat` char(2) DEFAULT NULL,
  `deskripsi` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ekskul_siswa`
--

INSERT INTO `ekskul_siswa` (`siswa_nis`, `ekskul_id`, `periode_id`, `predikat`, `deskripsi`) VALUES
(21419, 1, 1, 'C', 'Tidak pernah ikut kegiatan pramuka.'),
(21420, 1, 1, 'A', NULL),
(21420, 3, 1, NULL, NULL),
(21421, 1, 1, NULL, NULL),
(21421, 3, 1, NULL, NULL),
(21422, 1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id` int(11) NOT NULL,
  `nip` varchar(25) DEFAULT NULL,
  `nama_guru` varchar(255) NOT NULL,
  `mapel_id` int(11) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id`, `nip`, `nama_guru`, `mapel_id`, `user_id`) VALUES
(1, '092782 83247 82', 'Drs. Sapto Waluyo', 19, 19),
(2, '25487632983589', 'Sutadi', 6, 20),
(3, '022287 84379 9356', 'Khamami', 19, 26),
(4, '', 'SRIKANDI', 19, 22);

-- --------------------------------------------------------

--
-- Table structure for table `guru_kelas`
--

CREATE TABLE `guru_kelas` (
  `guru_id` int(11) NOT NULL,
  `kelas_id` int(11) NOT NULL,
  `periode_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru_kelas`
--

INSERT INTO `guru_kelas` (`guru_id`, `kelas_id`, `periode_id`) VALUES
(2, 1, 1),
(2, 2, 1),
(3, 1, 1),
(3, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `identitas_sekolah`
--

CREATE TABLE `identitas_sekolah` (
  `nama_sekolah` varchar(255) DEFAULT NULL,
  `npsn` varchar(255) DEFAULT NULL,
  `nss` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `kode_pos` varchar(10) DEFAULT NULL,
  `telp` varchar(25) DEFAULT NULL,
  `desa` varchar(255) DEFAULT NULL,
  `kec` varchar(255) DEFAULT NULL,
  `kab` varchar(255) DEFAULT NULL,
  `provinsi` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `identitas_sekolah`
--

INSERT INTO `identitas_sekolah` (`nama_sekolah`, `npsn`, `nss`, `alamat`, `kode_pos`, `telp`, `desa`, `kec`, `kab`, `provinsi`, `website`, `email`) VALUES
('SMP Negeri 1 Pacitan', '20510976', NULL, 'Jalan A. Yani-41', NULL, '0357 881073', 'Pacitan', 'Pacitan', 'Pacitan', 'Jawa Timur', 'www.smpn1pct.sch.id', 'smpnsatupacitan@yahoo.co.id');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_nilai`
--

CREATE TABLE `jenis_nilai` (
  `id` int(11) NOT NULL,
  `jenis_nilai` varchar(20) NOT NULL,
  `ket` varchar(50) NOT NULL,
  `aspek` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_nilai`
--

INSERT INTO `jenis_nilai` (`id`, `jenis_nilai`, `ket`, `aspek`) VALUES
(1, 'NP', 'Penilaian Harian', 'PENGETAHUAN'),
(2, 'HPTS', 'Hasil Penilaian Tengah Semester', 'PENGETAHUAN'),
(3, 'HPAS', 'Hasil Penilaian Akhir Semester', 'PENGETAHUAN'),
(4, 'NPrak', 'Nilai Praktik', 'KETERAMPILAN'),
(5, 'NProd', 'Nilai Produk', 'KETERAMPILAN'),
(6, 'NProy', 'Nilai Proyek', 'KETERAMPILAN'),
(7, 'NPort', 'Nilai Portofolio', 'KETERAMPILAN');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id` int(11) NOT NULL,
  `nama_kelas` varchar(255) NOT NULL,
  `grade` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id`, `nama_kelas`, `grade`) VALUES
(1, '8-A', 2),
(2, '8-B', 2);

-- --------------------------------------------------------

--
-- Table structure for table `kelas_siswa`
--

CREATE TABLE `kelas_siswa` (
  `siswa_nis` bigint(20) NOT NULL,
  `kelas_id` int(11) NOT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL,
  `periode_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas_siswa`
--

INSERT INTO `kelas_siswa` (`siswa_nis`, `kelas_id`, `status`, `periode_id`) VALUES
(21419, 1, 1, 1),
(21420, 1, 1, 1),
(21421, 1, 1, 1),
(21422, 1, 1, 1),
(21423, 2, 1, 1),
(21424, 2, 1, 1),
(21425, 2, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `kkm`
--

CREATE TABLE `kkm` (
  `id` int(11) NOT NULL,
  `mapel_id` int(11) NOT NULL,
  `periode_id` int(11) NOT NULL,
  `kkm` int(10) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kkm`
--

INSERT INTO `kkm` (`id`, `mapel_id`, `periode_id`, `kkm`) VALUES
(1, 6, 1, 70),
(2, 19, 1, 80);

-- --------------------------------------------------------

--
-- Table structure for table `mapel`
--

CREATE TABLE `mapel` (
  `id` int(11) NOT NULL,
  `nama_mapel` varchar(255) NOT NULL,
  `kelompok` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mapel`
--

INSERT INTO `mapel` (`id`, `nama_mapel`, `kelompok`) VALUES
(6, 'Pendidikan Pancasila dan Kewarganegaraan', 'A'),
(19, 'Bahasa Indonesia', 'A'),
(20, 'Seni Budaya dan Keterampilan', 'B');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_09_17_034638_create_role_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id` int(11) NOT NULL,
  `siswa_nis` bigint(20) NOT NULL,
  `guru_id` int(11) NOT NULL,
  `mapel_id` int(11) NOT NULL,
  `jenis_nilai_id` int(11) NOT NULL,
  `periode_id` int(11) NOT NULL,
  `nilai` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id`, `siswa_nis`, `guru_id`, `mapel_id`, `jenis_nilai_id`, `periode_id`, `nilai`) VALUES
(11, 21419, 2, 6, 1, 1, 90),
(12, 21419, 2, 6, 1, 1, 90),
(13, 21420, 2, 6, 1, 1, 76),
(14, 21422, 2, 6, 1, 1, 73),
(15, 21419, 2, 6, 2, 1, 87),
(16, 21420, 2, 6, 2, 1, 65),
(17, 21419, 2, 6, 3, 1, 60),
(18, 21419, 2, 6, 1, 1, 90),
(19, 21419, 2, 6, 1, 1, 90),
(20, 21419, 2, 6, 4, 1, 80),
(21, 21420, 2, 6, 4, 1, 60),
(22, 21421, 2, 6, 4, 1, 0),
(23, 21420, 2, 6, 4, 1, 0),
(24, 21420, 2, 6, 5, 1, 85),
(25, 21419, 2, 6, 6, 1, 75),
(26, 21419, 2, 6, 7, 1, 90),
(27, 21420, 2, 6, 1, 1, 88),
(29, 21420, 2, 6, 1, 1, 23),
(30, 21421, 2, 6, 1, 1, 70),
(31, 21421, 2, 6, 1, 1, 70),
(32, 21422, 2, 6, 1, 1, 80),
(33, 21420, 2, 6, 1, 1, 60),
(34, 21421, 2, 6, 1, 1, 20);

-- --------------------------------------------------------

--
-- Table structure for table `nilai_sikap`
--

CREATE TABLE `nilai_sikap` (
  `id` int(11) NOT NULL,
  `siswa_nis` bigint(20) NOT NULL,
  `periode_id` int(11) NOT NULL,
  `sosial` char(1) NOT NULL DEFAULT '',
  `des_sosial` varchar(255) NOT NULL DEFAULT '',
  `spiritual` char(1) NOT NULL DEFAULT '',
  `des_spiritual` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai_sikap`
--

INSERT INTO `nilai_sikap` (`id`, `siswa_nis`, `periode_id`, `sosial`, `des_sosial`, `spiritual`, `des_spiritual`) VALUES
(3, 21419, 1, 'A', 'Selalu bersyukur, selalu berdoa sebelum melakukan kegiatan,dan toleran pada pemeluk agama yang berbeda; ketaatan beribadah mulai berkembang.', 'B', 'Baik dalam sikap jujur, disiplin, tanggung jawab, toleransi, gotong royong, santun dan percaya diri.'),
(4, 21420, 1, 'A', 'Baik dalam berdoa, memberi salam, menjaga lingkungan sekolah, menghormati teman yang berbeda agama dan menunjukkan rasa syukur kepada Tuhan Yang Maha Esa.', 'D', ''),
(5, 21423, 1, 'B', 'Baik dalam berdoa, memberi salam,   menjaga lingkungan sekolah, menghormati teman yang berbeda agama dan menunjukkan rasa syukur kepada Tuhan Yang Maha Esa.', 'B', 'xdcfgvbhjuki'),
(6, 21424, 1, 'B', 'Baik dalam berdoa, memberi salam,   menjaga lingkungan sekolah, menghormati teman yang berbeda agama dan menunjukkan rasa syukur kepada Tuhan Yang Maha Esa.', '', ''),
(7, 21425, 1, 'C', '', '', ''),
(8, 21421, 1, 'A', 'Baik.', '', ''),
(9, 21422, 1, 'C', 'khgkdslg', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `periode`
--

CREATE TABLE `periode` (
  `id` int(11) NOT NULL,
  `thn_akademik` varchar(9) NOT NULL,
  `semester` int(11) NOT NULL,
  `tgl_awal` date NOT NULL,
  `tgl_akhir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `periode`
--

INSERT INTO `periode` (`id`, `thn_akademik`, `semester`, `tgl_awal`, `tgl_akhir`) VALUES
(1, '2015/2016', 1, '2015-07-12', '2015-12-06'),
(3, '2015/2016', 2, '2017-02-08', '2017-02-24');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `alias`) VALUES
(1, 'Administrator', 'admin'),
(2, 'Guru', 'guru'),
(3, 'Wali Kelas', 'walikelas'),
(4, 'Guru Ekstrakurikuler', 'guruekskul');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`role_id`, `user_id`) VALUES
(1, 1),
(2, 20),
(2, 26),
(3, 19),
(3, 26),
(4, 22);

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `nis` bigint(20) NOT NULL,
  `nama_siswa` varchar(255) NOT NULL,
  `nisn` varchar(15) DEFAULT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `agama` varchar(255) NOT NULL,
  `status_anak` varchar(255) NOT NULL,
  `anak_ke` int(11) DEFAULT NULL,
  `alamat_siswa` text NOT NULL,
  `telp` varchar(20) DEFAULT NULL,
  `asal_sekolah` varchar(255) NOT NULL,
  `nama_ayah` varchar(255) DEFAULT NULL,
  `nama_ibu` varchar(255) DEFAULT NULL,
  `alamat_ortu` text,
  `telp_ortu` varchar(20) DEFAULT NULL,
  `pekerjaan_ayah` varchar(255) DEFAULT NULL,
  `pekerjaan_ibu` varchar(255) DEFAULT NULL,
  `nama_wali` varchar(255) DEFAULT NULL,
  `alamat_wali` text,
  `telp_wali` varchar(20) DEFAULT NULL,
  `pekerjaan_wali` varchar(255) DEFAULT NULL,
  `tgl_diterima` date DEFAULT NULL,
  `pengesahan` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nis`, `nama_siswa`, `nisn`, `tempat_lahir`, `tgl_lahir`, `jenis_kelamin`, `agama`, `status_anak`, `anak_ke`, `alamat_siswa`, `telp`, `asal_sekolah`, `nama_ayah`, `nama_ibu`, `alamat_ortu`, `telp_ortu`, `pekerjaan_ayah`, `pekerjaan_ibu`, `nama_wali`, `alamat_wali`, `telp_wali`, `pekerjaan_wali`, `tgl_diterima`, `pengesahan`) VALUES
(21419, 'ASTIKA DWI ARYANI', '9940099237', 'PACITAN', '2001-07-07', 'P', 'ISLAM', 'ANAK KANDUNG', 1, 'RT. 4 RW. 2, Dsn. JATISARI, PAGUTAN, Kec. ARJOSARI, PACITAN', '', 'SDN ARJOSARI 1', 'SUPARMAN', 'SUPRIHATIN', 'RT. 4 RW. 2, Dsn. JATISARI, PAGUTAN, Kec. ARJOSARI, PACITAN', '087751704700', 'SWASTA', 'SWASTA', '', '', '', '', '2015-07-27', 'AYAH'),
(21420, 'CITRA LIA CAHYANI', '9940097795', 'PURWOREJO', '2002-01-25', 'P', 'ISLAM', 'ANAK KANDUNG', 4, 'RT. 2 RW. 2, Dsn. KEDUNG WARU, SEDAYU, Kec. ARJOSARI, PACITAN', '', 'SDN SEDAYU 1', 'ACHMAD SHOKIB (ALM)', 'MARSINIK', 'RT. 2 RW. 2, Dsn. KEDUNG WARU, SEDAYU, Kec. ARJOSARI, PACITAN', '087758654590', 'WIRASWASTA', 'IBU RUMAH TANGGA', '', '', '', '', '2015-07-27', 'IBU'),
(21421, 'ELSA BATARI HARUM CINDANI', '9988097313', 'PACITAN', '2002-03-18', 'P', 'ISLAM', 'ANAK KANDUNG', 1, 'RT. 1 RW. 6, Dsn. KRAJAN LOR, NANGGUNGAN, Kec. PACITAN, PACITAN', '', 'SDN NANGGUNGAN 1', 'PURNAMA IRAWAN', 'MURNIATI', 'RT. 1 RW. 6, Dsn. KRAJAN LOR, NANGGUNGAN, Kec. PACITAN, PACITAN', '087758567627', 'WIRASWASTA', 'PEDAGANG', '', '', '', '', '2015-07-27', 'AYAH'),
(21422, 'FARINDA NUR ANDINI', '9995658083', 'PACITAN', '2002-02-28', 'P', 'ISLAM', 'ANAK KANDUNG', 1, 'RT. 2 RW. 2, Dsn. KRAJAN I, JATIGUNUNG, Kec. TULAKAN, PACITAN', '', 'SDN TULAKAN 1', 'WIJI SURATNO', 'PUJI LESTARI', 'RT. 2 RW. 2, Dsn. KRAJAN I, JATIGUNUNG, Kec. TULAKAN, PACITAN', '085272696960', 'SWASTA', 'IBU RUMAH TANGGA', '', '', '', '', '2015-07-27', 'IBU'),
(21423, 'FINA AZIZAH RAHMAWATI', '9940111857', 'PACITAN', '2001-11-24', 'P', 'ISLAM', 'ANAK KANDUNG', 1, 'RT. 1 RW. 2, Dsn. , KEDUNGBENDO, Kec. ARJOSARI, PACITAN', '', 'SDN ARJOSARI 1', 'KATIJAN	', 'SUMARTINI', 'RT. 1 RW. 2, Dsn. , KEDUNGBENDO, Kec. ARJOSARI, PACITAN', '', 'TANI', '', '', '', '', '', '2015-07-27', 'IBU'),
(21424, 'FURRY ANGGI KURNILASARI', '9940112854', 'PACITAN', '2002-01-22', 'P', 'ISLAM', 'ANAK KANDUNG', 1, 'RT. 1 RW. 2, Dsn. KRAJAN, GONDANG, Kec. NAWANGAN, PACITAN', '', 'SDN NAWANGAN 1', 'HARJOKO', 'HARIYATI', 'RT. 1 RW. 2, Dsn. KRAJAN, GONDANG, Kec. NAWANGAN, PACITAN', '081973220600', 'WIRASWASTA', '', '', '', '', '', '2015-07-27', 'AYAH'),
(21425, 'LAILA DWI ANJANI', '9995552763', 'SUKOHARJO', '2001-06-23', 'P', 'ISLAM', 'ANAK KANDUNG', 2, 'RT. 5 RW. 4, Dsn. KRAJAN LOR, PLOSO, Kec. PACITAN, PACITAN', '', 'SDN PLOSO 2', 'EKO MUSOBIRIN', 'NURYANI', 'RT. 5 RW. 4, Dsn. KRAJAN LOR, PLOSO, Kec. PACITAN, PACITAN', '087758178044', 'SWASTA	', 'IBU RUMAH TANGGA', '', '', '', '', '2015-07-27', 'AYAH'),
(21426, 'MAKHROJA AINUR ANAJMI', '9940098379', 'PACITAN', '2002-03-18', 'P', 'ISLAM', 'ANAK KANDUNG', 1, 'RT. 3 RW.12, Dsn. LINGK. BAREHAN, SIDOHARJO, Kec. PACITAN, PACITAN', '', 'SDN PLOSO 1', 'UUN UNANG', 'SITI ROKAYAH', 'RT. 3 RW. 12, Dsn. LINGK. BAREHAN, SIDOHARJO, Kec. PACITAN, PACITAN', '087855531360', 'WIRASWSTA', 'SWASTA', '', '', '', '', '2015-07-27', '	AYAH'),
(21427, 'MAYA HAPSARI ADININGSIH', '9940112054', 'PACITAN', '2001-12-04', 'P', 'ISLAM', 'ANAK KANDUNG	', 1, 'RT. 3 RW. 1, Dsn. TANJUNG KIDUL, TANJUNG SARI, Kec. PACITAN, PACITAN', '', 'SDN BALEHARJO 1', 'SUMINO', 'SITI WINARSIH', 'RT. 3 RW. 1, Dsn. TANJUNG KIDUL, TANJUNG SARI, Kec. PACITAN, PACITAN', '087758792462', 'WIRASWASTA	', 'IBU RUMAH TANGGA', '', '', '', '', '2015-07-27', 'AYAH'),
(21428, 'MUTIARA ANGGRAINI', '9920112894', 'PACITAN', '2002-01-15', 'P', 'ISLAM', 'ANAK KANDUNG', 3, 'RT. 1 RW. 3, Dsn. POJOK, TREMAS, Kec. ARJOSARI, PACITAN', '', 'SD TREMAS', 'JUHDI', 'MUSRIFAH', 'RT. 1 RW. 3, Dsn. POJOK, TREMAS, Kec. ARJOSARI, PACITAN', '087758762533', 'TANI', 'PEDAGANG', '', '', '', '', '2015-07-27', 'AYAH'),
(21429, 'OLIVIA GEBRILIANA', '9940112088', 'PACITAN', '2001-04-27', 'P', 'KATOLIK', 'ANAK KANDUNG', 1, 'RT. 1 RW. 4, Dsn. NGELEBENGAN, MENADI, Kec. PACITAN, PACITAN', '', 'SDN PACITAN', 'YAHMAN TOTONG', 'HARTINI', 'RT. 1 RW. 4, Dsn. NGLEBENGAN, MENADI, Kec. PACITAN, PACITAN', '08180342936', 'PNS', 'IBU RUMAH TANGGA', '', '', '', '', '2015-07-27', 'AYAH'),
(21430, 'RAHMA APRILIA AHMADIPUTRI', '9940099025', 'PACITAN', '2001-04-28', 'P', 'ISLAM', 'ANAK KANDUNG', 2, 'RT. 2 RW. 3, Dsn. KWARASAN, BALEHARJO, Kec. PACITAN, PACITAN', '', 'SDN BALEHARJO 1', 'SUKIRMAN', 'DWI HARY MULYANI', 'RT. 2 RW. 3, Dsn. KWARASAN, BALEHARJO, Kec. PACITAN, PACITAN', '081359601263', 'PNS', 'SWASTA', '', '', '', '', '2015-07-27', 'AYAH'),
(21431, 'REZA CITRA SATYA', '9950076898', 'PACITAN', '2002-03-26', 'P', 'ISLAM', 'ANAK KANDUNG', 1, 'RT. 3 RW. 1, Dsn. KRAJAN, PACITAN, Kec. PACITAN, PACITAN', '', 'SDN PACITAN', 'SUPARNO', 'SRI YATI', 'RT. 3 RW. 1, Dsn. KRAJAN, PACITAN, Kec. PACITAN, PACITAN', '085750057553', 'WIRASWASTA', '', '', '', '', '', '2015-07-27', 'AYAH'),
(21432, 'RINI KUSUMAWATI', '9990072733', 'KLATEN', '2002-05-19', 'P', 'ISLAM', '	ANAK KANDUNG', 1, 'RT. 1 RW. 3, Dsn. CARUBAN, SIDOHARJO, Kec. PACITAN, PACITAN', '', 'SDN BALEHARJO 2', 'MUKIMIN', 'HARTI ATMISAN', 'RT. 1 RW. 3, Dsn. CARUBAN, SIDOHARJO, Kec. PACITAN, PACITAN', '087751952506', 'PNS', 'PNS', '', '', '', '', '2015-07-27', 'AYAH');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `remember_token`) VALUES
(1, 'vika', '$2y$10$kW7uhhmcElok/.6MegfMIOn6j.R.VlQCTvmy46A1zwmqNQSjqBm0q', 'AunwnmmtEmBoEH0zSHmIX7jRkYd9isufsRQoeIvKFSoCtNnyAtdQB2RMSZzD'),
(19, 'saptowaluyo', '$2y$10$lPpzR/MDyCw4o/hsJm0uAO3wm7EpFE/N6XuEVV10Iwgo6XhFhmg4C', 'tBKJtkSj0hkW25vKMSIgOIvRooJZjRKtp9hNNiuaFmKhKVKCSmAoku0lFN1I'),
(20, 'sutadi', '$2y$10$Jrhddobic04rDW0yycWBt.4mvikM1w99JRoUXVG5ZbgyDAMnhFqUC', '6nKKf8gwREr7skPzw8GalXGYNEfgrRV8Ld5R97euTYKbdXdnBJfidhJeoJp0'),
(22, 'srikandi', '$2y$10$UastIpbwmFY9sfC3A8uUpumwEVwS67AnSATOnCvlp0D.4y0P5CF5K', '4qHOA6Vrbfa2aYTMx94TipQxrTHkHxkkZOEwIy5RCz9yW1pr3rKgLObXfCmZ'),
(26, 'khamami', '$2y$10$QVnqDhqKksIjEu7GU.oKxOb4eFdbKiIwzl4ZJ7p3zC7SkuwjBXqD2', 'pJHqrPUSyaMNlsa8898HXqIKnrQY8Yv4onmbsIwFU09drXVVJXb5btvEsq5e');

-- --------------------------------------------------------

--
-- Table structure for table `walikelas`
--

CREATE TABLE `walikelas` (
  `guru_id` int(11) NOT NULL,
  `kelas_id` int(11) NOT NULL,
  `periode_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `walikelas`
--

INSERT INTO `walikelas` (`guru_id`, `kelas_id`, `periode_id`) VALUES
(1, 1, 1),
(3, 2, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `siswa_nis` (`siswa_nis`),
  ADD UNIQUE KEY `siswa_nis_2` (`siswa_nis`,`periode_id`);

--
-- Indexes for table `bobot`
--
ALTER TABLE `bobot`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `jenis_nilai_id_2` (`jenis_nilai_id`,`periode_id`);

--
-- Indexes for table `deskom`
--
ALTER TABLE `deskom`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mapel_id` (`mapel_id`);

--
-- Indexes for table `ekskul`
--
ALTER TABLE `ekskul`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ekskul_guru`
--
ALTER TABLE `ekskul_guru`
  ADD PRIMARY KEY (`guru_id`,`ekskul_id`,`periode_id`);

--
-- Indexes for table `ekskul_siswa`
--
ALTER TABLE `ekskul_siswa`
  ADD PRIMARY KEY (`siswa_nis`,`ekskul_id`,`periode_id`),
  ADD KEY `ekskul_id` (`ekskul_id`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`),
  ADD KEY `mapel_id` (`mapel_id`),
  ADD KEY `mapel_id_2` (`mapel_id`);

--
-- Indexes for table `guru_kelas`
--
ALTER TABLE `guru_kelas`
  ADD PRIMARY KEY (`guru_id`,`kelas_id`,`periode_id`);

--
-- Indexes for table `jenis_nilai`
--
ALTER TABLE `jenis_nilai`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `jenis_nilai` (`jenis_nilai`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nama_kelas` (`nama_kelas`);

--
-- Indexes for table `kelas_siswa`
--
ALTER TABLE `kelas_siswa`
  ADD PRIMARY KEY (`siswa_nis`,`kelas_id`,`periode_id`),
  ADD KEY `kelas_id` (`kelas_id`);

--
-- Indexes for table `kkm`
--
ALTER TABLE `kkm`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mapel_id_2` (`mapel_id`,`periode_id`);

--
-- Indexes for table `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nama_mapel` (`nama_mapel`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nilai_sikap`
--
ALTER TABLE `nilai_sikap`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `siswa_nis_2` (`siswa_nis`,`periode_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `periode`
--
ALTER TABLE `periode`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `thn_akademik_2` (`thn_akademik`,`semester`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_alias_unique` (`alias`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`role_id`,`user_id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `walikelas`
--
ALTER TABLE `walikelas`
  ADD PRIMARY KEY (`guru_id`,`kelas_id`,`periode_id`),
  ADD KEY `kelas_id` (`kelas_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absensi`
--
ALTER TABLE `absensi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `bobot`
--
ALTER TABLE `bobot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `deskom`
--
ALTER TABLE `deskom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ekskul`
--
ALTER TABLE `ekskul`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `jenis_nilai`
--
ALTER TABLE `jenis_nilai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `kkm`
--
ALTER TABLE `kkm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `mapel`
--
ALTER TABLE `mapel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `nilai_sikap`
--
ALTER TABLE `nilai_sikap`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `periode`
--
ALTER TABLE `periode`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `nis` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21433;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `absensi`
--
ALTER TABLE `absensi`
  ADD CONSTRAINT `absensi_ibfk_1` FOREIGN KEY (`siswa_nis`) REFERENCES `siswa` (`nis`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `deskom`
--
ALTER TABLE `deskom`
  ADD CONSTRAINT `deskom_ibfk_1` FOREIGN KEY (`mapel_id`) REFERENCES `mapel` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `ekskul_siswa`
--
ALTER TABLE `ekskul_siswa`
  ADD CONSTRAINT `ekskul_siswa_ibfk_1` FOREIGN KEY (`ekskul_id`) REFERENCES `ekskul` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `ekskul_siswa_ibfk_2` FOREIGN KEY (`siswa_nis`) REFERENCES `siswa` (`nis`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `guru`
--
ALTER TABLE `guru`
  ADD CONSTRAINT `guru_ibfk_1` FOREIGN KEY (`mapel_id`) REFERENCES `mapel` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `kelas_siswa`
--
ALTER TABLE `kelas_siswa`
  ADD CONSTRAINT `kelas_siswa_ibfk_1` FOREIGN KEY (`kelas_id`) REFERENCES `kelas` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `kelas_siswa_ibfk_2` FOREIGN KEY (`siswa_nis`) REFERENCES `siswa` (`nis`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `nilai_sikap`
--
ALTER TABLE `nilai_sikap`
  ADD CONSTRAINT `nilai_sikap_ibfk_1` FOREIGN KEY (`siswa_nis`) REFERENCES `siswa` (`nis`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `walikelas`
--
ALTER TABLE `walikelas`
  ADD CONSTRAINT `walikelas_ibfk_1` FOREIGN KEY (`guru_id`) REFERENCES `guru` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `walikelas_ibfk_2` FOREIGN KEY (`kelas_id`) REFERENCES `kelas` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
