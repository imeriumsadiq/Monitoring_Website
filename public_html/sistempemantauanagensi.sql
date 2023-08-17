-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2023 at 10:56 AM
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
-- Database: `sistempemantauanagensi`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminagensi`
--

CREATE TABLE `adminagensi` (
  `ID` int(11) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `Emel` varchar(100) NOT NULL,
  `KataLaluan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `asetsemasaagensi`
--

CREATE TABLE `asetsemasaagensi` (
  `ID` int(11) NOT NULL,
  `No` int(11) NOT NULL,
  `NamaAset` varchar(100) NOT NULL,
  `JenisAset` varchar(100) NOT NULL,
  `NilaiAset` varchar(100) NOT NULL,
  `JumlahAset` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `asettetapagensi`
--

CREATE TABLE `asettetapagensi` (
  `ID` int(11) NOT NULL,
  `No` int(11) NOT NULL,
  `NamaAset` varchar(100) NOT NULL,
  `JenisAset` varchar(100) NOT NULL,
  `NilaiAset` varchar(100) NOT NULL,
  `JumlahAset` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `infoagensi`
--

CREATE TABLE `infoagensi` (
  `ID` int(11) NOT NULL,
  `NamaAgensi` varchar(100) DEFAULT NULL,
  `AlamatAgensi` varchar(100) DEFAULT NULL,
  `NamaHubungiAgensi` varchar(100) DEFAULT NULL,
  `NomborTelefonAgensi` varchar(100) DEFAULT NULL,
  `EmelAgensi` varchar(100) DEFAULT NULL,
  `Taklukan` varchar(100) DEFAULT NULL,
  `NamaBadanBerkanun` varchar(100) DEFAULT NULL,
  `AlamatBadanBerkanun` varchar(100) DEFAULT NULL,
  `NamaHubungiBadanBerkanun` varchar(100) DEFAULT NULL,
  `NomborTelefonBadanBerkanun` varchar(100) DEFAULT NULL,
  `EmelBadanBerkanun` varchar(100) DEFAULT NULL,
  `PenyataKewangan` longblob DEFAULT NULL,
  `PerancanganPerniagaan` longblob DEFAULT NULL,
  `CartaOrganisasi` longblob DEFAULT NULL,
  `CartaAhliPerlembagaanPengarah` longblob DEFAULT NULL,
  `TarikhPelantikan` date DEFAULT NULL,
  `PinjamanAsalKN` varchar(100) NOT NULL,
  `TarikhBakiPinjamanPokokKN` date NOT NULL,
  `BakiPinjamanPokokKN` varchar(100) NOT NULL,
  `TarikhBayaranSehinggaKN` date NOT NULL,
  `PokokBayaranSehinggaKN` varchar(100) NOT NULL,
  `FaedahBayaranSehinggaKN` varchar(100) NOT NULL,
  `JumlahBayaranSehinggaKN` varchar(100) NOT NULL,
  `TarikhBayaranBulananKN` date NOT NULL,
  `PokokBayaranBulananKN` varchar(100) NOT NULL,
  `FaedahBayaranBulananKN` varchar(100) NOT NULL,
  `JumlahBayaranBulananKN` varchar(100) NOT NULL,
  `BakiPinjamanPokokBaharuKN` varchar(100) NOT NULL,
  `TarikhTunggakanSehinggaKN` date NOT NULL,
  `BakiTunggakanSemasaKN` varchar(100) NOT NULL,
  `TarikhTunggakanSemasaKN` date NOT NULL,
  `PokokTunggakanSemasaKN` varchar(100) NOT NULL,
  `FaedahTunggakanSemasaKN` varchar(100) NOT NULL,
  `BakiTunggakanBaharuKN` varchar(100) NOT NULL,
  `PinjamanAsalP` varchar(100) NOT NULL,
  `TarikhBakiPinjamanPokokP` date NOT NULL,
  `BakiPinjamanPokokP` varchar(100) NOT NULL,
  `TarikhBayaranSehinggaP` date NOT NULL,
  `PokokBayaranSehinggaP` varchar(100) NOT NULL,
  `FaedahBayaranSehinggaP` varchar(100) NOT NULL,
  `JumlahBayaranSehinggaP` varchar(100) NOT NULL,
  `TarikhBayaranBulananP` date NOT NULL,
  `PokokBayaranBulananP` varchar(100) NOT NULL,
  `FaedahBayaranBulananP` varchar(100) NOT NULL,
  `JumlahBayaranBulananP` varchar(100) NOT NULL,
  `BakiPinjamanPokokBaharuP` varchar(100) NOT NULL,
  `TarikhTunggakanSehinggaP` date NOT NULL,
  `BakiTunggakanSemasaP` varchar(100) NOT NULL,
  `TarikhTunggakanSemasaP` date NOT NULL,
  `PokokTunggakanSemasaP` varchar(100) NOT NULL,
  `FaedahTunggakanSemasaP` varchar(100) NOT NULL,
  `JumlahTunggakanBaharuP` varchar(100) NOT NULL,
  `JumlahPendapatanSemasaDP` varchar(100) NOT NULL,
  `TarikhSumbanganDP` date NOT NULL,
  `AmaunSumbanganDP` varchar(100) NOT NULL,
  `BuktiSumbanganDP` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `liabilitipanjang`
--

CREATE TABLE `liabilitipanjang` (
  `ID` int(11) NOT NULL,
  `No` int(11) NOT NULL,
  `NamaLiabiliti` varchar(100) NOT NULL,
  `JenisLiabiliti` varchar(100) NOT NULL,
  `NilaiLiabiliti` varchar(100) NOT NULL,
  `JumlahLiabiliti` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `liabilitipendek`
--

CREATE TABLE `liabilitipendek` (
  `ID` int(11) NOT NULL,
  `No` int(11) NOT NULL,
  `NamaLiabiliti` varchar(100) NOT NULL,
  `JenisLiabiliti` varchar(100) NOT NULL,
  `NilaiLiabiliti` varchar(100) NOT NULL,
  `JumlahLiabiliti` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `useragensi`
--

CREATE TABLE `useragensi` (
  `ID` int(11) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `Agensi` varchar(100) NOT NULL,
  `Emel` varchar(100) NOT NULL,
  `KataLaluan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminagensi`
--
ALTER TABLE `adminagensi`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `asetsemasaagensi`
--
ALTER TABLE `asetsemasaagensi`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `asettetapagensi`
--
ALTER TABLE `asettetapagensi`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `infoagensi`
--
ALTER TABLE `infoagensi`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `liabilitipanjang`
--
ALTER TABLE `liabilitipanjang`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `liabilitipendek`
--
ALTER TABLE `liabilitipendek`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `useragensi`
--
ALTER TABLE `useragensi`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminagensi`
--
ALTER TABLE `adminagensi`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `asetsemasaagensi`
--
ALTER TABLE `asetsemasaagensi`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `asettetapagensi`
--
ALTER TABLE `asettetapagensi`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `infoagensi`
--
ALTER TABLE `infoagensi`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `liabilitipanjang`
--
ALTER TABLE `liabilitipanjang`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `liabilitipendek`
--
ALTER TABLE `liabilitipendek`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `useragensi`
--
ALTER TABLE `useragensi`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
