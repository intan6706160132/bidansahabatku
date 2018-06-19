-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 23, 2018 at 04:10 AM
-- Server version: 10.0.34-MariaDB-cll-lve
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sidelear_sibidan`
--

-- --------------------------------------------------------

--
-- Table structure for table `anak`
--

CREATE TABLE `anak` (
  `ID_ANAK` varchar(17) NOT NULL,
  `NAMA_ANAK` varchar(40) NOT NULL,
  `TGL_LAHIR` date NOT NULL,
  `TEMPAT_LAHIR_ANAK` varchar(50) NOT NULL,
  `JK` varchar(10) NOT NULL,
  `BBL` int(3) NOT NULL,
  `TBL` int(3) NOT NULL,
  `LK` int(3) NOT NULL,
  `PERSALINAN` varchar(12) NOT NULL,
  `RIWAYAT_MENYUSUI` varchar(20) NOT NULL,
  `RIWAYAT_MAKAN_MINUM` varchar(20) NOT NULL,
  `ID_ORANG_TUA` varchar(16) NOT NULL,
  `ANAK_KE` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anak`
--

INSERT INTO `anak` (`ID_ANAK`, `NAMA_ANAK`, `TGL_LAHIR`, `TEMPAT_LAHIR_ANAK`, `JK`, `BBL`, `TBL`, `LK`, `PERSALINAN`, `RIWAYAT_MENYUSUI`, `RIWAYAT_MAKAN_MINUM`, `ID_ORANG_TUA`, `ANAK_KE`) VALUES
('54321123401', 'Kamir', '2018-12-31', 'Mojokerto', 'Laki-laki', 51, 45, 55, 'Spontan', 'Asi Ekslusif', 'Baik', '1234566543211234', 1),
('54321123402', '', '0000-00-00', '', '', 0, 0, 0, '', '', '', '1234566543211234', 0),
('54321123403', '', '0000-00-00', '', '', 0, 0, 0, '', '', '', '1234566543211234', 0),
('89012345603', 'jamal', '2018-04-02', 'Bandung', 'Laki-laki', 1, 50, 30, 'Spontan', 'Asi Ekslusif', 'baik', '1234567890123456', 1),
('89012345604', 'udin', '2017-12-31', 'Bandung', 'Laki-laki', 3000, 40, 30, 'Operasi', 'Susu Formula', 'mpasiy', '1234567890123456', 0),
('89012345605', '', '0000-00-00', '', '', 0, 0, 0, '', '', '', '1234567890123456', 0),
('89065432101', 'sss', '2018-03-05', 'Bandung', 'Laki-laki', 23, 50, 30, 'Operasi', 'Asi Ekslusif', 'baik', '1234567890654321', 1),
('89098765401', 'mbaku1', '2018-05-04', 'Rumah sakit bandung1', 'Laki-laki', 551, 501, 301, 'Spontan', 'Susu Formula', 'Normal1', '1234567890987654', 0),
('9012345603', 'asd', '2018-04-01', 'Bandung', 'Laki-laki', 23, 50, 30, 'Operasi', 'Asi Ekslusif', 'baik', '1234567890123456', 1),
('9012345605', 'sa', '2018-03-01', 'Bandung', 'Perempuan', 23, 50, 30, 'Spontan', 'Asi Ekslusif', 'baik', '1234567890123456', 2);

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `ID_ARTIKEL` int(11) NOT NULL,
  `JUDUL_ARTIKEL` varchar(100) NOT NULL,
  `KATEGORI_ARTIKEL` varchar(25) NOT NULL,
  `ISI_ARTIKEL` varchar(700) NOT NULL,
  `DIBUAT` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `foto_artikel` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`ID_ARTIKEL`, `JUDUL_ARTIKEL`, `KATEGORI_ARTIKEL`, `ISI_ARTIKEL`, `DIBUAT`, `foto_artikel`) VALUES
(18, 'Rahasia Puasa bagi Ibu Hamil Agar Tubuh Tetap Fit', '', '<p>Sudah siapkah Anda menyambut Ramadan tahun ini? Tentu banyak yang sudah tidak sabar untuk segera merasakan atmosfer Ramadan yang&nbsp; khas dan khidmat, bukan? Meski sedang hamil, Anda tetap diperbolehkan berpuasa, kok. Namun, ada beberapa syarat puasa bagi ibu hamil yang harus dipenuhi agar tubuh tetap bugar saat berpuasa.</p>\r\n\r\n<p>Ibu hamil membutuhkan asupan air dan nutrisi dalam jumlah yang proporsional agar tetap fit selama berpuasa. Porsinya pun perlu dijaga agar tidak timbul masalah pada organ pencernaan yang dapat berimbas pada batalnya puasa. Nah, agar kuat dalam menghadapi bulan puasa nanti, ibu perlu tahu kiat-kiat khusus agar tetap kuat beraktivitas selama berpuasa.</p>\r\n\r\n<p', '2018-05-13 15:59:43', 'ARTIKEL-18.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `bidan`
--

CREATE TABLE `bidan` (
  `ID_BIDAN` varchar(16) NOT NULL,
  `NAMA_BIDAN` varchar(40) NOT NULL,
  `TEMPAT_LHR_BIDAN` varchar(25) NOT NULL,
  `TGL_LHR_BIDAN` date NOT NULL,
  `PENDIDIKAN_TERAKHIR` varchar(8) NOT NULL,
  `NAMA_PT` varchar(100) NOT NULL,
  `ALAMAT_BIDAN` varchar(75) NOT NULL,
  `NO_TELP_BIDAN` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bidan`
--

INSERT INTO `bidan` (`ID_BIDAN`, `NAMA_BIDAN`, `TEMPAT_LHR_BIDAN`, `TGL_LHR_BIDAN`, `PENDIDIKAN_TERAKHIR`, `NAMA_PT`, `ALAMAT_BIDAN`, `NO_TELP_BIDAN`) VALUES
('123456789', 'Rina Gunawan', 'Surabaya', '1990-04-02', 'S1', 'Gajah Mada', 'Jl. Sukabirus', '0811227777'),
('123456790', 'Yeyen Meriyen', 'Bogor', '1992-04-02', 'S2', 'Gajah Mada', 'Jl. Mengger', '08112298373'),
('Widyaas', 'Widya Asri Septiani', 'Maros', '1993-09-05', 'D3', 'Poltekkes Bandung', 'Rancamanyar', '0813244477688');

-- --------------------------------------------------------

--
-- Table structure for table `imunisasi`
--

CREATE TABLE `imunisasi` (
  `ID_IMUNISASI` varchar(17) NOT NULL,
  `ID_ANAK` varchar(16) NOT NULL,
  `HB_0` date NOT NULL,
  `BCG` date NOT NULL,
  `POLIO_1` date NOT NULL,
  `POLIO_2` date NOT NULL,
  `POLIO_3` date NOT NULL,
  `POLIO_4` date NOT NULL,
  `PENTABIO_1` date NOT NULL,
  `PENTABIO_2` date NOT NULL,
  `PENTABIO_3` date NOT NULL,
  `PENTABIO_4` date NOT NULL,
  `MR` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `imunisasi`
--

INSERT INTO `imunisasi` (`ID_IMUNISASI`, `ID_ANAK`, `HB_0`, `BCG`, `POLIO_1`, `POLIO_2`, `POLIO_3`, `POLIO_4`, `PENTABIO_1`, `PENTABIO_2`, `PENTABIO_3`, `PENTABIO_4`, `MR`) VALUES
('543211234011', '54321123401', '2018-05-10', '0000-00-00', '2018-05-09', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00'),
('890123456031', '89012345603', '2018-05-17', '2018-05-01', '2018-05-10', '0000-00-00', '0000-00-00', '0000-00-00', '2018-05-10', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00'),
('890123456051', '89012345605', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00'),
('890654321011', '89065432101', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00'),
('90123456031', '9012345603', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `kontent`
--

CREATE TABLE `kontent` (
  `ID_KONTENT` varchar(16) NOT NULL,
  `DESKRIPSI` varchar(500) NOT NULL,
  `FOTO` varchar(30) NOT NULL,
  `TGL_UPLOAD` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orang_tua`
--

CREATE TABLE `orang_tua` (
  `ID_ORANG_TUA` varchar(16) NOT NULL,
  `NAMA_IBU` varchar(40) NOT NULL,
  `TGL_LAHIR_IBU` date NOT NULL,
  `PEKERJAAN_IBU` varchar(10) NOT NULL,
  `AGAMA_IBU` varchar(7) NOT NULL,
  `PENDIDIKAN_AKHIR_IBU` varchar(8) NOT NULL,
  `ALAMAT_IBU` varchar(75) NOT NULL,
  `NO_TELP_IBU` varchar(14) NOT NULL,
  `NAMA_AYAH` varchar(40) NOT NULL,
  `TGL_LAHIR_AYAH` date NOT NULL,
  `PEKERJAAN_AYAH` varchar(10) NOT NULL,
  `AGAMA_AYAH` varchar(7) NOT NULL,
  `PENDIDIKAN_AKHIR_AYAH` varchar(8) NOT NULL,
  `ALAMAT_AYAH` varchar(75) NOT NULL,
  `NO_TELP_AYAH` varchar(14) NOT NULL,
  `STATUS` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orang_tua`
--

INSERT INTO `orang_tua` (`ID_ORANG_TUA`, `NAMA_IBU`, `TGL_LAHIR_IBU`, `PEKERJAAN_IBU`, `AGAMA_IBU`, `PENDIDIKAN_AKHIR_IBU`, `ALAMAT_IBU`, `NO_TELP_IBU`, `NAMA_AYAH`, `TGL_LAHIR_AYAH`, `PEKERJAAN_AYAH`, `AGAMA_AYAH`, `PENDIDIKAN_AKHIR_AYAH`, `ALAMAT_AYAH`, `NO_TELP_AYAH`, `STATUS`) VALUES
('1234566543211234', 'sist', '1990-04-07', 'IRT', 'Islam', 'D3', 'jl. sukirman', '08112211', 'Sds', '1989-04-07', 'PNS', 'Islam', 'S1', 'jl. subarjo', '08112212', ''),
('1234567654323456', 'janah', '1997-03-07', 'IRT', 'Islam', 'D3', 'jl. anan', '08112211', 'Badrul', '1996-03-06', 'PNS', 'Islam', 'S1', 'jl, ana', '08112212', ''),
('1234567890123456', 'sarah sehan', '1996-03-01', 'IRT', 'Islam', 'SD Seder', 'jl', '08112211', 'Randi', '1980-03-01', 'PNS', 'Islam', 'S3', 'jl', '08112212', ''),
('1234567890123457', 'In', '1998-03-02', 'IRT', 'Islam', 'SD Seder', 'jl..', '08112211', 'Randi', '1980-04-02', 'PNS', 'Islam', 'SD Seder', 'jl.aa', '08112212', ''),
('1234567890654321', 'dddd', '1998-04-03', 'IRT', 'Islam', 'D3', 'jl. ayanai', '08112211', 'ddd', '1990-04-03', 'PNS', 'Islam', 'S3', 'Jl. anaa', '08112212', ''),
('1234567890987654', 'ini', '1996-03-05', 'IRT1', 'Islam', 'SD Seder', 'jl. ayani1', '08122112211', 'Suf1', '1990-05-04', 'PNS1', 'Islam', 'SD Seder', 'jl.Aya1', '081211', '');

-- --------------------------------------------------------

--
-- Table structure for table `pelayanan`
--

CREATE TABLE `pelayanan` (
  `ID_PELAYANAN` varchar(16) NOT NULL,
  `TGL_KUNJUNGAN` date NOT NULL,
  `KEADAAN_UMUM` varchar(10) NOT NULL,
  `SUHU` int(2) NOT NULL,
  `RESPIRASI` char(1) NOT NULL,
  `JANTUNG` char(1) NOT NULL,
  `BB` int(3) NOT NULL,
  `TB` int(3) NOT NULL,
  `LK` int(3) NOT NULL,
  `KPSP` varchar(20) NOT NULL,
  `TINDAKAN` varchar(20) NOT NULL,
  `KUNJUNGAN_KE` int(11) NOT NULL,
  `ID_BIDAN` varchar(16) NOT NULL,
  `NO_MEDREG` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelayanan`
--

INSERT INTO `pelayanan` (`ID_PELAYANAN`, `TGL_KUNJUNGAN`, `KEADAAN_UMUM`, `SUHU`, `RESPIRASI`, `JANTUNG`, `BB`, `TB`, `LK`, `KPSP`, `TINDAKAN`, `KUNJUNGAN_KE`, `ID_BIDAN`, `NO_MEDREG`) VALUES
('00.00.0301', '2018-05-09', '1', 1, '1', '1', 1, 1, 1, '1', '1', 1, '123456789', '00.00.03'),
('00.00.0401', '2018-05-03', '1', 1, '1', '1', 1, 1, 1, '1', '1', 1, '123456790', '00.00.04'),
('00.00.0402', '2018-05-04', '1', 1, '1', '1', 1, 1, 1, '1', '1', 2, '123456790', '00.00.04'),
('00.00.0701', '2018-05-10', 'Baik', 0, 'Y', 'Y', 22, 32, 23, '22', 'normal', 1, '123456790', '00.00.07'),
('00.00.0702', '2018-05-10', '1', 1, 'Y', 'Y', 1, 1, 1, '1', '1', 2, '123456789', '00.00.07');

-- --------------------------------------------------------

--
-- Table structure for table `pengkajian`
--

CREATE TABLE `pengkajian` (
  `NO_MEDREG` varchar(16) NOT NULL,
  `ID_BIDAN` varchar(16) NOT NULL,
  `TANGGAL_KAJIAN` date NOT NULL,
  `JAM` varchar(11) NOT NULL,
  `ID_ANAK` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengkajian`
--

INSERT INTO `pengkajian` (`NO_MEDREG`, `ID_BIDAN`, `TANGGAL_KAJIAN`, `JAM`, `ID_ANAK`) VALUES
('00.00.01', '123456789', '2018-05-02', '14:05', '9012345603'),
('00.00.02', '123456789', '2018-05-02', '14:05', '9012345605'),
('00.00.03', '123456789', '2018-05-03', '14:05', '89012345603'),
('00.00.04', '123456789', '2018-05-04', '14:05', '89065432101'),
('00.00.05', '123456789', '2018-05-05', '04:05', '89098765401'),
('00.00.06', '123456789', '2018-05-08', '09:05', '89012345604'),
('00.00.07', '123456790', '2018-05-10', '13:05', '54321123401'),
('00.00.08', '123456789', '2018-05-21', '04:05', '89012345605'),
('00.00.09', '123456789', '2018-05-21', '06:05', '54321123402'),
('00.00.10', '123456789', '2018-05-21', '06:05', '54321123403');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID_USER` char(10) NOT NULL,
  `USERNAME` varchar(50) NOT NULL,
  `PASSWORD` varchar(50) NOT NULL,
  `STATUS` varchar(10) NOT NULL,
  `ID_PENGGUNA` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID_USER`, `USERNAME`, `PASSWORD`, `STATUS`, `ID_PENGGUNA`) VALUES
('00001', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', '123456789'),
('00002', 'Nur', '202cb962ac59075b964b07152d234b70', 'bidan', '123456790'),
('00003', 'sarah', '202cb962ac59075b964b07152d234b70', 'ortu', '1234567890123456'),
('00004', 'ran', '202cb962ac59075b964b07152d234b70', 'ortu', '1234567890123457'),
('00006', '12345678909876545', '2b7dc12904da288ed68bcc287b460566', 'ortu', '1234567890987654'),
('00007', 'unsue', '202cb962ac59075b964b07152d234b70', 'bidan', '1234567765432356'),
('00008', 'ddd', 'caf1a3dfb505ffed0d024130f58c5cfa', 'ortu', '1234567890654321'),
('00009', 'sist', '202cb962ac59075b964b07152d234b70', 'ortu', '1234566543211234'),
('00010', 'jan1', 'caf1a3dfb505ffed0d024130f58c5cfa', 'ortu', '1234567654323456'),
('00011', '1233411223344112', '707e62adbd7428c2a3340d592eadc572', 'bidan', '1233411223344112'),
('00012', '', 'd41d8cd98f00b204e9800998ecf8427e', 'ortu', ''),
('00013', '', 'd41d8cd98f00b204e9800998ecf8427e', 'ortu', ''),
('00015', 'Widyaas', '76d050054180f35b79cb5942fa5f4be4', 'bidan', 'Widyaas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anak`
--
ALTER TABLE `anak`
  ADD PRIMARY KEY (`ID_ANAK`),
  ADD KEY `ID_PELAYANAN` (`ID_ORANG_TUA`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`ID_ARTIKEL`);

--
-- Indexes for table `bidan`
--
ALTER TABLE `bidan`
  ADD PRIMARY KEY (`ID_BIDAN`);

--
-- Indexes for table `imunisasi`
--
ALTER TABLE `imunisasi`
  ADD PRIMARY KEY (`ID_IMUNISASI`),
  ADD KEY `ID_ANAK` (`ID_ANAK`);

--
-- Indexes for table `kontent`
--
ALTER TABLE `kontent`
  ADD PRIMARY KEY (`ID_KONTENT`);

--
-- Indexes for table `orang_tua`
--
ALTER TABLE `orang_tua`
  ADD PRIMARY KEY (`ID_ORANG_TUA`);

--
-- Indexes for table `pelayanan`
--
ALTER TABLE `pelayanan`
  ADD PRIMARY KEY (`ID_PELAYANAN`),
  ADD KEY `ID_BIDAN` (`ID_BIDAN`),
  ADD KEY `NO_MEDREG` (`NO_MEDREG`);

--
-- Indexes for table `pengkajian`
--
ALTER TABLE `pengkajian`
  ADD PRIMARY KEY (`NO_MEDREG`),
  ADD KEY `ID_BIDAN` (`ID_BIDAN`),
  ADD KEY `ID_BAYI` (`ID_ANAK`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID_USER`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `ID_ARTIKEL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `anak`
--
ALTER TABLE `anak`
  ADD CONSTRAINT `anak_ibfk_2` FOREIGN KEY (`ID_ORANG_TUA`) REFERENCES `orang_tua` (`ID_ORANG_TUA`);

--
-- Constraints for table `imunisasi`
--
ALTER TABLE `imunisasi`
  ADD CONSTRAINT `imunisasi_ibfk_1` FOREIGN KEY (`ID_ANAK`) REFERENCES `anak` (`ID_ANAK`);

--
-- Constraints for table `pelayanan`
--
ALTER TABLE `pelayanan`
  ADD CONSTRAINT `pelayanan_ibfk_1` FOREIGN KEY (`ID_BIDAN`) REFERENCES `bidan` (`ID_BIDAN`),
  ADD CONSTRAINT `pelayanan_ibfk_2` FOREIGN KEY (`NO_MEDREG`) REFERENCES `pengkajian` (`NO_MEDREG`);

--
-- Constraints for table `pengkajian`
--
ALTER TABLE `pengkajian`
  ADD CONSTRAINT `pengkajian_ibfk_5` FOREIGN KEY (`ID_ANAK`) REFERENCES `anak` (`ID_ANAK`),
  ADD CONSTRAINT `pengkajian_ibfk_7` FOREIGN KEY (`ID_BIDAN`) REFERENCES `bidan` (`ID_BIDAN`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
