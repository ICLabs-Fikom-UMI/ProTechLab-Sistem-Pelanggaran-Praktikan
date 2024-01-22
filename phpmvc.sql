-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 23, 2024 at 12:04 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpmvc`
--

-- --------------------------------------------------------

--
-- Table structure for table `mst_asisten`
--

CREATE TABLE `mst_asisten` (
  `id_asisten` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_asisten` varchar(100) NOT NULL,
  `nim_asisten` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mst_lab`
--

CREATE TABLE `mst_lab` (
  `id_lab` int(11) NOT NULL,
  `nama_lab` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mst_praktikan`
--

CREATE TABLE `mst_praktikan` (
  `id_praktikan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_praktikan` varchar(100) NOT NULL,
  `nim_praktikan` varchar(100) NOT NULL,
  `frekuensi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mst_user`
--

CREATE TABLE `mst_user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nim` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `role` enum('admin','asisten','praktikan','') NOT NULL,
  `foto_user` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pakaian`
--

CREATE TABLE `pakaian` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nrp` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pakaian`
--

INSERT INTO `pakaian` (`id`, `nama`, `nrp`, `email`, `jurusan`) VALUES
(1, 'naufal', '130', 'naufal@emial.com', 'TI'),
(2, 'nabil', '131', 'NABIL@UMI.AC.ID', 'SI'),
(3, 'natasya', '184', '13020210205@umi.ac.id', 'KES'),
(4, 'azmi', '190', 'nofalabiyyu@umi.id', 'TI'),
(5, 'naufal', '123', 'naufal.supriadi02@gmail.com', 'KES');

-- --------------------------------------------------------

--
-- Table structure for table `trx_aturan`
--

CREATE TABLE `trx_aturan` (
  `id_aturan` int(11) NOT NULL,
  `pakaian` blob NOT NULL,
  `tata_tertib` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `trx_laporan_pelanggaran`
--

CREATE TABLE `trx_laporan_pelanggaran` (
  `id_laporan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_praktikan` int(11) NOT NULL,
  `id_asisten` int(11) NOT NULL,
  `id_lab` int(11) NOT NULL,
  `tgl_pelaporan` date NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `trx_tindak_lanjut`
--

CREATE TABLE `trx_tindak_lanjut` (
  `id_tindak_lanjut` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_asisten` int(11) NOT NULL,
  `id_lab` int(11) NOT NULL,
  `id_praktikan` int(11) NOT NULL,
  `id_laporan` int(11) NOT NULL,
  `status` enum('Peringatan','Menghadap','BlackList','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mst_asisten`
--
ALTER TABLE `mst_asisten`
  ADD PRIMARY KEY (`id_asisten`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `mst_lab`
--
ALTER TABLE `mst_lab`
  ADD PRIMARY KEY (`id_lab`);

--
-- Indexes for table `mst_praktikan`
--
ALTER TABLE `mst_praktikan`
  ADD PRIMARY KEY (`id_praktikan`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `mst_user`
--
ALTER TABLE `mst_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `pakaian`
--
ALTER TABLE `pakaian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trx_aturan`
--
ALTER TABLE `trx_aturan`
  ADD PRIMARY KEY (`id_aturan`);

--
-- Indexes for table `trx_laporan_pelanggaran`
--
ALTER TABLE `trx_laporan_pelanggaran`
  ADD PRIMARY KEY (`id_laporan`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_praktikan` (`id_praktikan`),
  ADD KEY `id_asisten` (`id_asisten`),
  ADD KEY `id_lab` (`id_lab`);

--
-- Indexes for table `trx_tindak_lanjut`
--
ALTER TABLE `trx_tindak_lanjut`
  ADD PRIMARY KEY (`id_tindak_lanjut`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_asisten` (`id_asisten`),
  ADD KEY `id_lab` (`id_lab`),
  ADD KEY `id_praktikan` (`id_praktikan`),
  ADD KEY `id_laporan` (`id_laporan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mst_asisten`
--
ALTER TABLE `mst_asisten`
  MODIFY `id_asisten` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mst_lab`
--
ALTER TABLE `mst_lab`
  MODIFY `id_lab` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mst_praktikan`
--
ALTER TABLE `mst_praktikan`
  MODIFY `id_praktikan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mst_user`
--
ALTER TABLE `mst_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pakaian`
--
ALTER TABLE `pakaian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `trx_aturan`
--
ALTER TABLE `trx_aturan`
  MODIFY `id_aturan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `trx_laporan_pelanggaran`
--
ALTER TABLE `trx_laporan_pelanggaran`
  MODIFY `id_laporan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `trx_tindak_lanjut`
--
ALTER TABLE `trx_tindak_lanjut`
  MODIFY `id_tindak_lanjut` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `mst_asisten`
--
ALTER TABLE `mst_asisten`
  ADD CONSTRAINT `mst_asisten_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `mst_user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mst_praktikan`
--
ALTER TABLE `mst_praktikan`
  ADD CONSTRAINT `mst_praktikan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `mst_user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `trx_laporan_pelanggaran`
--
ALTER TABLE `trx_laporan_pelanggaran`
  ADD CONSTRAINT `trx_laporan_pelanggaran_ibfk_1` FOREIGN KEY (`id_lab`) REFERENCES `mst_lab` (`id_lab`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `trx_laporan_pelanggaran_ibfk_2` FOREIGN KEY (`id_praktikan`) REFERENCES `mst_praktikan` (`id_praktikan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `trx_laporan_pelanggaran_ibfk_3` FOREIGN KEY (`id_asisten`) REFERENCES `mst_asisten` (`id_asisten`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `trx_laporan_pelanggaran_ibfk_4` FOREIGN KEY (`id_user`) REFERENCES `mst_user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `trx_tindak_lanjut`
--
ALTER TABLE `trx_tindak_lanjut`
  ADD CONSTRAINT `trx_tindak_lanjut_ibfk_1` FOREIGN KEY (`id_laporan`) REFERENCES `trx_laporan_pelanggaran` (`id_laporan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `trx_tindak_lanjut_ibfk_2` FOREIGN KEY (`id_lab`) REFERENCES `mst_lab` (`id_lab`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `trx_tindak_lanjut_ibfk_3` FOREIGN KEY (`id_praktikan`) REFERENCES `mst_praktikan` (`id_praktikan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `trx_tindak_lanjut_ibfk_4` FOREIGN KEY (`id_asisten`) REFERENCES `mst_asisten` (`id_asisten`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `trx_tindak_lanjut_ibfk_5` FOREIGN KEY (`id_user`) REFERENCES `mst_user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
