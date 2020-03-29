-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2018 at 03:13 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rsia`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `admin_id` int(11) NOT NULL,
  `username_admin` varchar(100) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `alamat_admin` varchar(50) NOT NULL,
  `jk_admin` varchar(1) NOT NULL,
  `password_admin` varchar(100) NOT NULL,
  `level_admin` int(10) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`admin_id`, `username_admin`, `nama_admin`, `alamat_admin`, `jk_admin`, `password_admin`, `level_admin`, `keterangan`) VALUES
(1, 'adminnana', 'Nana', 'Gedong Kuning', 'L', 'adminnana', 1, 'Admin'),
(2, 'novi', 'Novia', 'Bligo', 'P', 'novi', 1, 'Administrator adalah orang-orang yang bertugas untuk mengurusi hal-hal administrasi data pasien, laporan hasil pemeriksaan pasien');

-- --------------------------------------------------------

--
-- Table structure for table `adminlab`
--

CREATE TABLE `adminlab` (
  `username_adminlab` varchar(100) NOT NULL,
  `nama_adminlab` varchar(50) NOT NULL,
  `alamat_adminlab` varchar(50) NOT NULL,
  `jk_adminlab` varchar(1) NOT NULL,
  `password_adminlab` varchar(100) NOT NULL,
  `level_adminlab` int(10) NOT NULL,
  `id_adminlab` int(11) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlab`
--

INSERT INTO `adminlab` (`username_adminlab`, `nama_adminlab`, `alamat_adminlab`, `jk_adminlab`, `password_adminlab`, `level_adminlab`, `id_adminlab`, `keterangan`) VALUES
('adminlab', 'tata', 'ngluwar', 'P', 'adminlab', 1, 1, 'Admin Laboraturium');

-- --------------------------------------------------------

--
-- Table structure for table `diagnosa`
--

CREATE TABLE `diagnosa` (
  `id_diagnosa` int(11) NOT NULL,
  `id_pasien` int(11) NOT NULL,
  `diagnosa` text NOT NULL,
  `resep` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `diagnosa`
--

INSERT INTO `diagnosa` (`id_diagnosa`, `id_pasien`, `diagnosa`, `resep`) VALUES
(10, 18, 'nnnn', 'paracetamol, 30 mg'),
(11, 19, 'Kanker', 'Antibiotik 30mg diminum 3x1'),
(12, 22, 'Sakit', 'Amfetamin'),
(13, 20, 'Kista', 'Kista');

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `username_dokter` varchar(100) NOT NULL,
  `nama_dokter` varchar(50) NOT NULL,
  `jk_dokter` varchar(1) NOT NULL,
  `tgllhr_dokter` date NOT NULL,
  `alamat_dokter` varchar(50) NOT NULL,
  `password_dokter` varchar(100) NOT NULL,
  `level_dokter` int(10) NOT NULL,
  `id_dokter` int(11) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`username_dokter`, `nama_dokter`, `jk_dokter`, `tgllhr_dokter`, `alamat_dokter`, `password_dokter`, `level_dokter`, `id_dokter`, `keterangan`) VALUES
('drreisa', 'Dr Reisa', 'P', '1980-12-12', 'Yogyakarta', 'reisa', 2, 1, 'Dokter Umum'),
('drreno', 'Dr Reno', 'L', '1980-07-04', 'Jakarta', 'drreno', 2, 2, '');

-- --------------------------------------------------------

--
-- Table structure for table `farmasi`
--

CREATE TABLE `farmasi` (
  `id_farmasi` int(11) NOT NULL,
  `username_farmasi` varchar(100) NOT NULL,
  `nama_farmasi` varchar(50) NOT NULL,
  `alamat_farmasi` varchar(50) NOT NULL,
  `jk_farmasi` varchar(1) NOT NULL,
  `password_farmasi` varchar(100) NOT NULL,
  `level_farmasi` int(10) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `farmasi`
--

INSERT INTO `farmasi` (`id_farmasi`, `username_farmasi`, `nama_farmasi`, `alamat_farmasi`, `jk_farmasi`, `password_farmasi`, `level_farmasi`, `keterangan`) VALUES
(1, 'adminfarmasi', 'Sasa', 'Turi', 'L', 'adminfarmasi', 1, 'Admin Farmasi');

-- --------------------------------------------------------

--
-- Table structure for table `farmasiobat`
--

CREATE TABLE `farmasiobat` (
  `id_farmasiobat` int(11) NOT NULL,
  `id_pasien` int(11) NOT NULL,
  `nama_obat` varchar(30) DEFAULT NULL,
  `dosis` varchar(30) DEFAULT NULL,
  `jumlah` int(30) DEFAULT NULL,
  `harga` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hematologi`
--

CREATE TABLE `hematologi` (
  `id_hematologi` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hematologi`
--

INSERT INTO `hematologi` (`id_hematologi`, `nama`) VALUES
(1, 'Eritrosit'),
(2, 'Trombosit');

-- --------------------------------------------------------

--
-- Table structure for table `imunoserologi`
--

CREATE TABLE `imunoserologi` (
  `id_imunoserologi` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `imunoserologi`
--

INSERT INTO `imunoserologi` (`id_imunoserologi`, `nama`) VALUES
(1, 'HBsAg'),
(2, 'Widal');

-- --------------------------------------------------------

--
-- Table structure for table `kasir`
--

CREATE TABLE `kasir` (
  `username_kasir` varchar(100) NOT NULL,
  `nama_kasir` varchar(50) NOT NULL,
  `alamat_kasir` varchar(50) NOT NULL,
  `jk_kasir` varchar(1) NOT NULL,
  `password_kasir` varchar(100) NOT NULL,
  `level_kasir` int(10) NOT NULL,
  `id_kasir` int(11) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kasir`
--

INSERT INTO `kasir` (`username_kasir`, `nama_kasir`, `alamat_kasir`, `jk_kasir`, `password_kasir`, `level_kasir`, `id_kasir`, `keterangan`) VALUES
('kasirana', 'Ariana', 'Yogyakarta', 'P', 'kasirana', 1, 1, 'Admin Kasir');

-- --------------------------------------------------------

--
-- Table structure for table `kimiaklinik`
--

CREATE TABLE `kimiaklinik` (
  `id_kimiaklinik` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kimiaklinik`
--

INSERT INTO `kimiaklinik` (`id_kimiaklinik`, `nama`) VALUES
(1, 'SGOT'),
(2, 'SGPT');

-- --------------------------------------------------------

--
-- Table structure for table `logistiklabor`
--

CREATE TABLE `logistiklabor` (
  `id_log` int(10) NOT NULL,
  `nama_brg` varchar(50) NOT NULL,
  `tglbeli` date NOT NULL,
  `tglkadaluarsa` date NOT NULL,
  `stok` int(11) NOT NULL,
  `id_satuan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logistiklabor`
--

INSERT INTO `logistiklabor` (`id_log`, `nama_brg`, `tglbeli`, `tglkadaluarsa`, `stok`, `id_satuan`) VALUES
(1, 'Rees Ecker', '2017-05-05', '2018-05-12', 574, 1),
(2, 'Strip Urin', '2017-08-25', '2018-08-26', 100, 2),
(3, 'Anti-D', '2015-01-31', '2019-01-31', 100, 3);

-- --------------------------------------------------------

--
-- Table structure for table `mikrobiologi`
--

CREATE TABLE `mikrobiologi` (
  `id_mikrobiologi` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mikrobiologi`
--

INSERT INTO `mikrobiologi` (`id_mikrobiologi`, `nama`) VALUES
(1, 'Kultur'),
(2, 'Pewarnaan Gram');

-- --------------------------------------------------------

--
-- Table structure for table `nilai_normal`
--

CREATE TABLE `nilai_normal` (
  `id_nilai` int(11) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `pilihan` varchar(50) NOT NULL,
  `nama_brg` varchar(50) NOT NULL,
  `tglbeli` date NOT NULL,
  `tglkadaluarsa` date NOT NULL,
  `stok` int(11) DEFAULT NULL,
  `id_satuan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai_normal`
--

INSERT INTO `nilai_normal` (`id_nilai`, `jenis`, `pilihan`, `nama_brg`, `tglbeli`, `tglkadaluarsa`, `stok`, `id_satuan`) VALUES
(1, 'Eritrosit', '    4,5 - 5,5 juta/ml', 'Reagen Eritrosit', '2018-07-10', '2018-07-19', 40, 0),
(2, 'Trombosit', '150.000 - 400.000/ml', 'Reagen Trombosit', '2018-07-10', '2018-07-20', 5, 0),
(3, 'HBsAg', 'nonreaktif', 'Strip HBsAg', '2018-07-01', '2018-07-28', 10, 0),
(4, 'SGOT', '3-45 m/l', 'SGOT', '2018-07-02', '2018-07-31', 10, 0),
(5, 'SGPT', '0-35 m/l', 'SGPT', '2018-07-02', '2018-07-26', 10, 0),
(6, 'Kultur', ' negatif', 'Strip', '2018-07-02', '2018-07-24', 10, 0),
(7, 'Warna Urin', 'kuning', 'Strip Urin Rutin', '2018-07-01', '2018-07-25', 10, 0),
(8, 'Bau Urin', ' tidak menyengat', 'Strip Urin Rutin 2', '2018-07-01', '2018-07-31', 10, 0),
(9, 'Kejernihan Urin', ' jernih', 'Strip Urin Rutin 3', '2018-07-01', '2018-07-18', 10, 0),
(10, 'Pewarnaan Gram', ' negatif', 'Cat Gram', '2018-07-01', '2018-07-19', 10, 0),
(11, 'Widal', 'nonreaktif', 'Widal', '2018-07-02', '2018-07-31', 10, 0);

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `id_stokobat` int(11) NOT NULL,
  `id_pasien` int(11) NOT NULL,
  `nama_obat` varchar(30) NOT NULL,
  `dosis` varchar(20) NOT NULL,
  `jumlah` int(200) NOT NULL,
  `harga` int(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`id_stokobat`, `id_pasien`, `nama_obat`, `dosis`, `jumlah`, `harga`) VALUES
(1, 2, 'HBsAg', '300', 20, 1000),
(3, 2, 'Paracetamol', '300', 20, 1000);

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` int(11) NOT NULL,
  `no_rm` varchar(11) NOT NULL,
  `nama_pasien` varchar(40) NOT NULL,
  `jk_pasien` varchar(10) NOT NULL,
  `tgllahir` date NOT NULL,
  `alamat_pasien` varchar(25) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `statuspasienid` varchar(11) NOT NULL,
  `id_dokter` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `no_rm`, `nama_pasien`, `jk_pasien`, `tgllahir`, `alamat_pasien`, `no_hp`, `statuspasienid`, `id_dokter`) VALUES
(18, '232', 'Reno', 'Laki-laki', '2018-07-11', 'Kalteng', '0953434', 'farmasi', 1),
(19, '34342', 'kiki', 'Laki-laki', '2018-07-18', 'Godean', '09', 'farmasi', 1),
(20, 'BKS0923', 'Elisa', 'Perempuan', '2018-07-18', 'Maguwoharjo', '093482342012', 'proses', 1),
(21, '67432', 'Riza', 'Laki-laki', '2018-07-17', 'Jakarta', '094282362423', 'proses', 1),
(22, '953434', 'Tesa', 'Perempuan', '2018-07-12', 'Borobudur', '093482342012', 'selesai', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `id_pasien` int(11) NOT NULL,
  `jenis_pemeriksaan` varchar(50) NOT NULL,
  `nilai_normal` varchar(50) DEFAULT NULL,
  `hasil` varchar(20) DEFAULT NULL,
  `harga` int(36) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `id_pasien`, `jenis_pemeriksaan`, `nilai_normal`, `hasil`, `harga`) VALUES
(1, 18, 'Widal', 'nonreaktif', 'reaktif', 30000),
(3, 19, 'Trombosit', '150.000-400.000', '150000', 30000),
(4, 19, 'SGOT', '3-45 m/l', '6 m/l', 10000),
(5, 19, 'Jasa Dokter', '', '', 33000),
(7, 22, 'Trombosit', '200000', '200000', 30000),
(8, 22, 'Jasa Dokter', '200000', '12000', 10000),
(9, 20, 'Eritrosit', '    4,5 - 5,5 juta/ml', '200', NULL),
(10, 21, 'SGOT', '3-45 m/l', '100', NULL),
(11, 20, 'HBsAg', 'nonreaktif', '1000', NULL),
(12, 22, 'Trombosit', '20000', '20000', 30000),
(13, 22, 'Widal', '100000', '', 30000),
(14, 20, 'Trombosit', '150.000 - 400.000/ml', '12300', NULL),
(15, 20, 'Widal', 'nonreaktif', 'reaktif', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pemeriksaan`
--

CREATE TABLE `pemeriksaan` (
  `id_pemeriksaan` int(11) NOT NULL,
  `id_pasien` int(11) NOT NULL,
  `options` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemeriksaan`
--

INSERT INTO `pemeriksaan` (`id_pemeriksaan`, `id_pasien`, `options`) VALUES
(1, 18, 'Widal, SGOT, HBsAg, Trombosit'),
(2, 19, 'HBsAg, Pewarnaan Garam, SGOT'),
(3, 19, 'HBsAg, Pewarnaan Garam, SGOT'),
(4, 20, 'Eritrosit, HBsAg, Widal'),
(5, 0, 'SGOT'),
(6, 0, 'SGPT'),
(7, 21, 'SGOT, Widal');

-- --------------------------------------------------------

--
-- Table structure for table `pemeriksaanlab`
--

CREATE TABLE `pemeriksaanlab` (
  `id_pemeriksaan` int(11) NOT NULL,
  `id_hematologi` int(11) NOT NULL,
  `id_imunoserologi` int(11) NOT NULL,
  `id_kimiaklinik` int(11) NOT NULL,
  `id_mikrobiologi` int(11) NOT NULL,
  `id_urindanfeses` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `satuan`
--

CREATE TABLE `satuan` (
  `id_satuan` int(11) NOT NULL,
  `satuan` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `satuan`
--

INSERT INTO `satuan` (`id_satuan`, `satuan`) VALUES
(1, 'mL'),
(2, 'strip'),
(3, 'botol');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id_status` int(10) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id_status`, `status`) VALUES
(1, 'Tersedia'),
(2, 'Menipis'),
(3, 'Habis');

-- --------------------------------------------------------

--
-- Table structure for table `statuspsien`
--

CREATE TABLE `statuspsien` (
  `statuspasienid` varchar(11) NOT NULL,
  `statuspasien` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `statuspsien`
--

INSERT INTO `statuspsien` (`statuspasienid`, `statuspasien`) VALUES
('baru', 'baru.png'),
('farmasi', 'selesai.png'),
('proses', 'proses.png'),
('selesai', 'selesai.png');

-- --------------------------------------------------------

--
-- Table structure for table `stok`
--

CREATE TABLE `stok` (
  `id` int(11) NOT NULL,
  `id_nilai` int(11) NOT NULL,
  `jml_penyetokan` int(11) NOT NULL,
  `id_satuan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stok`
--

INSERT INTO `stok` (`id`, `id_nilai`, `jml_penyetokan`, `id_satuan`) VALUES
(1, 1, 2, 1),
(3, 1, 100, 1),
(4, 1, 20, 1),
(7, 1, 30, NULL);

--
-- Triggers `stok`
--
DELIMITER $$
CREATE TRIGGER `stok_barang` AFTER INSERT ON `stok` FOR EACH ROW BEGIN
	UPDATE nilai_normal SET stok=stok+NEW.jml_penyetokan
    WHERE id_nilai = NEW.id_nilai;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `superadmin`
--

CREATE TABLE `superadmin` (
  `username` varchar(15) NOT NULL,
  `name` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `level` int(10) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `superadmin`
--

INSERT INTO `superadmin` (`username`, `name`, `password`, `level`, `keterangan`) VALUES
('supervisor', 'SUPERVISOR', 'supervisor', 5, 'Super visor seseorang yang diberikan tugas dalam sebuah perhimpunan perusahaan sebagaimana ia mempunyai kuasa dan wewenang untuk mengeluarkan perintah kepada rekan kerja bawahannya.');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `id_nilai` int(11) NOT NULL,
  `jml_penggunaan` int(11) NOT NULL,
  `id_satuan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `id_nilai`, `jml_penggunaan`, `id_satuan`) VALUES
(1, 1, 1, 1),
(3, 1, 50, 1),
(4, 2, 5, NULL);

--
-- Triggers `transaksi`
--
DELIMITER $$
CREATE TRIGGER `transaksi_barang` AFTER INSERT ON `transaksi` FOR EACH ROW BEGIN
	UPDATE nilai_normal SET stok=stok-NEW.jml_penggunaan
    WHERE id_nilai = NEW.id_nilai;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `urindanfeses`
--

CREATE TABLE `urindanfeses` (
  `id_urindanfeses` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `urindanfeses`
--

INSERT INTO `urindanfeses` (`id_urindanfeses`, `nama`) VALUES
(1, 'PP test'),
(2, 'Urin Rutin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `adminlab`
--
ALTER TABLE `adminlab`
  ADD PRIMARY KEY (`id_adminlab`);

--
-- Indexes for table `diagnosa`
--
ALTER TABLE `diagnosa`
  ADD PRIMARY KEY (`id_diagnosa`);

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id_dokter`);

--
-- Indexes for table `farmasi`
--
ALTER TABLE `farmasi`
  ADD PRIMARY KEY (`id_farmasi`);

--
-- Indexes for table `farmasiobat`
--
ALTER TABLE `farmasiobat`
  ADD PRIMARY KEY (`id_farmasiobat`);

--
-- Indexes for table `hematologi`
--
ALTER TABLE `hematologi`
  ADD PRIMARY KEY (`id_hematologi`);

--
-- Indexes for table `imunoserologi`
--
ALTER TABLE `imunoserologi`
  ADD PRIMARY KEY (`id_imunoserologi`);

--
-- Indexes for table `kasir`
--
ALTER TABLE `kasir`
  ADD PRIMARY KEY (`id_kasir`);

--
-- Indexes for table `kimiaklinik`
--
ALTER TABLE `kimiaklinik`
  ADD PRIMARY KEY (`id_kimiaklinik`);

--
-- Indexes for table `logistiklabor`
--
ALTER TABLE `logistiklabor`
  ADD PRIMARY KEY (`id_log`),
  ADD KEY `id_satuan` (`id_satuan`);

--
-- Indexes for table `mikrobiologi`
--
ALTER TABLE `mikrobiologi`
  ADD PRIMARY KEY (`id_mikrobiologi`);

--
-- Indexes for table `nilai_normal`
--
ALTER TABLE `nilai_normal`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id_stokobat`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`),
  ADD KEY `statuspasienid` (`statuspasienid`) USING BTREE;

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indexes for table `pemeriksaan`
--
ALTER TABLE `pemeriksaan`
  ADD PRIMARY KEY (`id_pemeriksaan`);

--
-- Indexes for table `pemeriksaanlab`
--
ALTER TABLE `pemeriksaanlab`
  ADD PRIMARY KEY (`id_pemeriksaan`);

--
-- Indexes for table `satuan`
--
ALTER TABLE `satuan`
  ADD PRIMARY KEY (`id_satuan`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id_status`);

--
-- Indexes for table `statuspsien`
--
ALTER TABLE `statuspsien`
  ADD PRIMARY KEY (`statuspasienid`);

--
-- Indexes for table `stok`
--
ALTER TABLE `stok`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `superadmin`
--
ALTER TABLE `superadmin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `urindanfeses`
--
ALTER TABLE `urindanfeses`
  ADD PRIMARY KEY (`id_urindanfeses`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrator`
--
ALTER TABLE `administrator`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `adminlab`
--
ALTER TABLE `adminlab`
  MODIFY `id_adminlab` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `diagnosa`
--
ALTER TABLE `diagnosa`
  MODIFY `id_diagnosa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id_dokter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `farmasi`
--
ALTER TABLE `farmasi`
  MODIFY `id_farmasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `farmasiobat`
--
ALTER TABLE `farmasiobat`
  MODIFY `id_farmasiobat` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hematologi`
--
ALTER TABLE `hematologi`
  MODIFY `id_hematologi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `imunoserologi`
--
ALTER TABLE `imunoserologi`
  MODIFY `id_imunoserologi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kasir`
--
ALTER TABLE `kasir`
  MODIFY `id_kasir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kimiaklinik`
--
ALTER TABLE `kimiaklinik`
  MODIFY `id_kimiaklinik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `logistiklabor`
--
ALTER TABLE `logistiklabor`
  MODIFY `id_log` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mikrobiologi`
--
ALTER TABLE `mikrobiologi`
  MODIFY `id_mikrobiologi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `nilai_normal`
--
ALTER TABLE `nilai_normal`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `obat`
--
ALTER TABLE `obat`
  MODIFY `id_stokobat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id_pasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `pemeriksaan`
--
ALTER TABLE `pemeriksaan`
  MODIFY `id_pemeriksaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pemeriksaanlab`
--
ALTER TABLE `pemeriksaanlab`
  MODIFY `id_pemeriksaan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `satuan`
--
ALTER TABLE `satuan`
  MODIFY `id_satuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id_status` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `stok`
--
ALTER TABLE `stok`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `urindanfeses`
--
ALTER TABLE `urindanfeses`
  MODIFY `id_urindanfeses` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `logistiklabor`
--
ALTER TABLE `logistiklabor`
  ADD CONSTRAINT `logistiklabor_ibfk_2` FOREIGN KEY (`id_satuan`) REFERENCES `satuan` (`id_satuan`);

--
-- Constraints for table `pasien`
--
ALTER TABLE `pasien`
  ADD CONSTRAINT `pasien_ibfk_1` FOREIGN KEY (`statuspasienid`) REFERENCES `statuspsien` (`statuspasienid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
