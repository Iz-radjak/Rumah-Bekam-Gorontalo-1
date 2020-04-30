-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2020 at 06:43 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_rbg`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_absen`
--

CREATE TABLE `tb_absen` (
  `id_absen` int(10) NOT NULL,
  `id_pegawai` int(10) NOT NULL,
  `time_in` time(6) NOT NULL,
  `time_out` time(6) NOT NULL,
  `tgl_absen` date NOT NULL,
  `keterangan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_brg` int(10) NOT NULL,
  `id_pegawai` int(10) NOT NULL,
  `nama_brg` varchar(50) NOT NULL,
  `hrg_pokok` int(20) NOT NULL,
  `hrg_jual` int(20) NOT NULL,
  `tgl_exp` date DEFAULT NULL,
  `stok` int(20) NOT NULL,
  `ket` varchar(50) NOT NULL,
  `kategori` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_gaji`
--

CREATE TABLE `tb_gaji` (
  `id_gaji` int(10) NOT NULL,
  `id_pegawai` int(10) NOT NULL,
  `gapok1` float DEFAULT NULL,
  `gapok2` float DEFAULT NULL,
  `gapok3` float DEFAULT NULL,
  `tunj_jab` float DEFAULT NULL,
  `herbal` float DEFAULT NULL,
  `homecare` float DEFAULT NULL,
  `tunj_khitan` float DEFAULT NULL,
  `tunj_pijat` float DEFAULT NULL,
  `jumlah_pendapatan` float DEFAULT NULL,
  `peminjaman` float DEFAULT NULL,
  `tdk_hadir` float DEFAULT NULL,
  `terlambat` float DEFAULT NULL,
  `jumlah_potongan` float DEFAULT NULL,
  `gaji_bersih` float DEFAULT NULL,
  `total_gaji_pokok` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_layanan`
--

CREATE TABLE `tb_layanan` (
  `kode_layanan` int(10) NOT NULL,
  `nama_layanan` varchar(50) NOT NULL,
  `jenis_layanan` varchar(20) NOT NULL,
  `jenis_terapi` varchar(20) NOT NULL,
  `tarif` int(15) NOT NULL,
  `metode` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_layanan`
--

INSERT INTO `tb_layanan` (`kode_layanan`, `nama_layanan`, `jenis_layanan`, `jenis_terapi`, `tarif`, `metode`) VALUES
(1, 'bekam', 'homecare di klinik', 'homecare', 15000, '4'),
(2, 'ruqyah', 'normal di klinik', 'normal', 50000, '4'),
(3, 'sunat', 'normal di klinik', 'normal', 100000, '1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pasien`
--

CREATE TABLE `tb_pasien` (
  `id_pasien` int(10) NOT NULL,
  `tgl_regis_pasien` date NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nik` int(20) NOT NULL,
  `jk` varchar(3) NOT NULL,
  `umur` int(3) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pasien`
--

INSERT INTO `tb_pasien` (`id_pasien`, `tgl_regis_pasien`, `nama`, `nik`, `jk`, `umur`, `no_hp`, `pekerjaan`, `alamat`) VALUES
(1, '2020-03-08', 'godal', 12345678, 'L', 20, '081234567890', 'mahasiswa', 'jalan john ario katili'),
(2, '2020-03-08', 'bocil', 897959, 'P', 15, '084376589078', 'siswa', 'jalan cendana\r\n'),
(3, '2020-03-08', 'bagong', 757575678, 'L', 50, '586567564766', 'pensiunan', 'gak punya alamat');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pegawai`
--

CREATE TABLE `tb_pegawai` (
  `id_pegawai` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `jabatan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pegawai`
--

INSERT INTO `tb_pegawai` (`id_pegawai`, `nama`, `nip`, `jabatan`) VALUES
(1, 'abdullah', '022013 02 2018', 'Manager'),
(2, 'syafrudin', '022013 02 2018', 'Terapis'),
(3, 'adam', '022013 02 2018', 'Terapis'),
(4, 'herp', '022013 02 2018', 'Customer Service'),
(5, 'ambar', '022013 02 2018', 'Terapis'),
(6, 'budi', '022013 02 2018', 'Customer Service');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengadaan`
--

CREATE TABLE `tb_pengadaan` (
  `id_beli` int(10) NOT NULL,
  `tgl_beli` datetime(6) NOT NULL,
  `id_brg` int(10) NOT NULL,
  `qty_beli` int(20) NOT NULL,
  `harga` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_penjualan`
--

CREATE TABLE `tb_penjualan` (
  `id_jual` int(10) NOT NULL,
  `tgl_jual` datetime(6) NOT NULL DEFAULT current_timestamp(6),
  `id_brg` int(10) NOT NULL,
  `tipe_penjualan` varchar(20) NOT NULL,
  `qty_jual` int(20) NOT NULL,
  `diskon` int(20) NOT NULL,
  `laba` int(20) NOT NULL,
  `ket` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_redik`
--

CREATE TABLE `tb_redik` (
  `id_redik` int(10) NOT NULL,
  `tgl_redik` date NOT NULL DEFAULT current_timestamp(),
  `id_pasien` int(10) NOT NULL,
  `keluhan` varchar(100) NOT NULL,
  `tekanan_darah` varchar(100) NOT NULL,
  `id_pegawai` int(10) NOT NULL,
  `kode_layanan` int(10) NOT NULL,
  `qty` int(20) NOT NULL,
  `disc` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_redik`
--

INSERT INTO `tb_redik` (`id_redik`, `tgl_redik`, `id_pasien`, `keluhan`, `tekanan_darah`, `id_pegawai`, `kode_layanan`, `qty`, `disc`) VALUES
(1, '2020-03-08', 2, 'masuk angin', '70/110', 3, 1, 2, 0),
(2, '2020-03-08', 1, 'pusing', '80/120', 2, 1, 1, 0),
(3, '2020-03-08', 3, 'belum sunat', '90/130', 4, 3, 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_absen`
--
ALTER TABLE `tb_absen`
  ADD PRIMARY KEY (`id_absen`),
  ADD KEY `id_pegawai` (`id_pegawai`);

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_brg`),
  ADD KEY `id_pegawai` (`id_pegawai`);

--
-- Indexes for table `tb_gaji`
--
ALTER TABLE `tb_gaji`
  ADD PRIMARY KEY (`id_gaji`),
  ADD KEY `id_pegawai` (`id_pegawai`);

--
-- Indexes for table `tb_layanan`
--
ALTER TABLE `tb_layanan`
  ADD PRIMARY KEY (`kode_layanan`);

--
-- Indexes for table `tb_pasien`
--
ALTER TABLE `tb_pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `tb_pengadaan`
--
ALTER TABLE `tb_pengadaan`
  ADD PRIMARY KEY (`id_beli`),
  ADD KEY `id_brg` (`id_brg`);

--
-- Indexes for table `tb_penjualan`
--
ALTER TABLE `tb_penjualan`
  ADD PRIMARY KEY (`id_jual`),
  ADD KEY `id_brg` (`id_brg`);

--
-- Indexes for table `tb_redik`
--
ALTER TABLE `tb_redik`
  ADD PRIMARY KEY (`id_redik`),
  ADD KEY `kode_layanan` (`kode_layanan`),
  ADD KEY `id_pasien` (`id_pasien`),
  ADD KEY `id_pegawai` (`id_pegawai`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_absen`
--
ALTER TABLE `tb_absen`
  MODIFY `id_absen` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  MODIFY `id_pegawai` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
