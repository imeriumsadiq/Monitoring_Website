-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2023 at 08:44 AM
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
  `ID` int(100) NOT NULL,
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
  `TarikhPelantikan` varchar(100) DEFAULT NULL,
  `PinjamanAsalKN` varchar(100) DEFAULT NULL,
  `TarikhBakiPinjamanPokokKN` varchar(100) DEFAULT NULL,
  `BakiPinjamanPokokKN` varchar(100) DEFAULT NULL,
  `TarikhBayaranSehinggaKN` varchar(100) DEFAULT NULL,
  `PokokBayaranSehinggaKN` varchar(100) DEFAULT NULL,
  `FaedahBayaranSehinggaKN` varchar(100) DEFAULT NULL,
  `JumlahBayaranSehinggaKN` varchar(100) DEFAULT NULL,
  `TarikhBayaranBulananKN` varchar(100) DEFAULT NULL,
  `PokokBayaranBulananKN` varchar(100) DEFAULT NULL,
  `FaedahBayaranBulananKN` varchar(100) DEFAULT NULL,
  `JumlahBayaranBulananKN` varchar(100) DEFAULT NULL,
  `BakiPinjamanPokokBaharuKN` varchar(100) DEFAULT NULL,
  `TarikhTunggakanSehinggaKN` varchar(100) DEFAULT NULL,
  `BakiTunggakanSemasaKN` varchar(100) DEFAULT NULL,
  `TarikhTunggakanSemasaKN` varchar(100) DEFAULT NULL,
  `PokokTunggakanSemasaKN` varchar(100) DEFAULT NULL,
  `FaedahTunggakanSemasaKN` varchar(100) DEFAULT NULL,
  `JumlahTunggakanKN` varchar(100) DEFAULT NULL,
  `BakiTunggakanBaharuKN` varchar(100) DEFAULT NULL,
  `PinjamanAsalP` varchar(100) DEFAULT NULL,
  `TarikhBakiPinjamanPokokP` varchar(100) DEFAULT NULL,
  `BakiPinjamanPokokP` varchar(100) DEFAULT NULL,
  `TarikhBayaranSehinggaP` varchar(100) DEFAULT NULL,
  `PokokBayaranSehinggaP` varchar(100) DEFAULT NULL,
  `FaedahBayaranSehinggaP` varchar(100) DEFAULT NULL,
  `JumlahBayaranSehinggaP` varchar(100) DEFAULT NULL,
  `TarikhBayaranBulananP` varchar(100) DEFAULT NULL,
  `PokokBayaranBulananP` varchar(100) DEFAULT NULL,
  `FaedahBayaranBulananP` varchar(100) DEFAULT NULL,
  `JumlahBayaranBulananP` varchar(100) DEFAULT NULL,
  `BakiPinjamanPokokBaharuP` varchar(100) DEFAULT NULL,
  `TarikhTunggakanSehinggaP` varchar(100) DEFAULT NULL,
  `BakiTunggakanSemasaP` varchar(100) DEFAULT NULL,
  `TarikhTunggakanSemasaP` varchar(100) DEFAULT NULL,
  `PokokTunggakanSemasaP` varchar(100) DEFAULT NULL,
  `FaedahTunggakanSemasaP` varchar(100) DEFAULT NULL,
  `JumlahTunggakanP` varchar(100) DEFAULT NULL,
  `BakiTunggakanBaharuP` varchar(100) DEFAULT NULL,
  `JumlahPendapatanSemasaDP` varchar(100) DEFAULT NULL,
  `TarikhSumbanganDP` varchar(100) DEFAULT NULL,
  `AmaunSumbanganDP` varchar(100) DEFAULT NULL,
  `BuktiSumbanganDP` longblob DEFAULT NULL,
  `JumlahKeuntunganSemasaSP` varchar(100) DEFAULT NULL,
  `TarikhSumbanganSP` varchar(100) DEFAULT NULL,
  `AmaunSumbanganSP` varchar(100) DEFAULT NULL,
  `BuktiSumbanganSP` longblob DEFAULT NULL
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
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT;

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
