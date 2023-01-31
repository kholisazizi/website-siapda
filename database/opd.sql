-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2022 at 03:14 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `opd`
--

-- --------------------------------------------------------

--
-- Table structure for table `dataperangkat`
--

CREATE TABLE `dataperangkat` (
  `iddataperangkat` int(11) NOT NULL,
  `namainstansi` text NOT NULL,
  `logo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dataperangkat`
--

INSERT INTO `dataperangkat` (`iddataperangkat`, `namainstansi`, `logo`) VALUES
(6, 'Diskominfo', 'logo-kominfo.png'),
(9, 'Sekretariat DPRD', 'logo-dprd.png'),
(10, 'Kemendikbud', 'logo-dikbud.png'),
(11, 'Dinas Kesehatan', 'logo-dinkes.png'),
(12, 'Dinas Penataan Ruang', 'logo-dpupt.png'),
(13, 'Inspektorat', 'logo-inspektorat.png');

-- --------------------------------------------------------

--
-- Table structure for table `link`
--

CREATE TABLE `link` (
  `idlink` int(11) NOT NULL,
  `iddataperangkat` int(11) NOT NULL,
  `namalink` text NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `link`
--

INSERT INTO `link` (`idlink`, `iddataperangkat`, `namalink`, `link`) VALUES
(6, 6, 'SURTI', 'https://surti.madiunkab.go.id'),
(7, 6, 'LPSE', 'https://lpse.madiunkab.go.id'),
(8, 6, 'LASTI', 'https://lasti.madiunkab.go.id');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `iduser` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `nama` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`iduser`, `username`, `password`, `nama`) VALUES
(1, 'admin', 'admin', 'Administrator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dataperangkat`
--
ALTER TABLE `dataperangkat`
  ADD PRIMARY KEY (`iddataperangkat`);

--
-- Indexes for table `link`
--
ALTER TABLE `link`
  ADD PRIMARY KEY (`idlink`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dataperangkat`
--
ALTER TABLE `dataperangkat`
  MODIFY `iddataperangkat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `link`
--
ALTER TABLE `link`
  MODIFY `idlink` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
