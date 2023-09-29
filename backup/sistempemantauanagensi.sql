-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2023 at 04:07 AM
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
  `PenyataKewangan` varchar(300) DEFAULT NULL,
  `PerancanganPerniagaan` varchar(300) DEFAULT NULL,
  `CartaOrganisasi` varchar(300) DEFAULT NULL,
  `CartaAhliPerlembagaanPengarah` varchar(300) DEFAULT NULL,
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
  `BuktiSumbanganDP` varchar(300) DEFAULT NULL,
  `JumlahKeuntunganSemasaSP` varchar(100) DEFAULT NULL,
  `TarikhSumbanganSP` varchar(100) DEFAULT NULL,
  `AmaunSumbanganSP` varchar(100) DEFAULT NULL,
  `BuktiSumbanganSP` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `infoagensi`
--

INSERT INTO `infoagensi` (`ID`, `NamaAgensi`, `AlamatAgensi`, `NamaHubungiAgensi`, `NomborTelefonAgensi`, `EmelAgensi`, `Taklukan`, `NamaBadanBerkanun`, `AlamatBadanBerkanun`, `NamaHubungiBadanBerkanun`, `NomborTelefonBadanBerkanun`, `EmelBadanBerkanun`, `PenyataKewangan`, `PerancanganPerniagaan`, `CartaOrganisasi`, `CartaAhliPerlembagaanPengarah`, `TarikhPelantikan`, `PinjamanAsalKN`, `TarikhBakiPinjamanPokokKN`, `BakiPinjamanPokokKN`, `TarikhBayaranSehinggaKN`, `PokokBayaranSehinggaKN`, `FaedahBayaranSehinggaKN`, `JumlahBayaranSehinggaKN`, `TarikhBayaranBulananKN`, `PokokBayaranBulananKN`, `FaedahBayaranBulananKN`, `JumlahBayaranBulananKN`, `BakiPinjamanPokokBaharuKN`, `TarikhTunggakanSehinggaKN`, `BakiTunggakanSemasaKN`, `TarikhTunggakanSemasaKN`, `PokokTunggakanSemasaKN`, `FaedahTunggakanSemasaKN`, `JumlahTunggakanKN`, `BakiTunggakanBaharuKN`, `PinjamanAsalP`, `TarikhBakiPinjamanPokokP`, `BakiPinjamanPokokP`, `TarikhBayaranSehinggaP`, `PokokBayaranSehinggaP`, `FaedahBayaranSehinggaP`, `JumlahBayaranSehinggaP`, `TarikhBayaranBulananP`, `PokokBayaranBulananP`, `FaedahBayaranBulananP`, `JumlahBayaranBulananP`, `BakiPinjamanPokokBaharuP`, `TarikhTunggakanSehinggaP`, `BakiTunggakanSemasaP`, `TarikhTunggakanSemasaP`, `PokokTunggakanSemasaP`, `FaedahTunggakanSemasaP`, `JumlahTunggakanP`, `BakiTunggakanBaharuP`, `JumlahPendapatanSemasaDP`, `TarikhSumbanganDP`, `AmaunSumbanganDP`, `BuktiSumbanganDP`, `JumlahKeuntunganSemasaSP`, `TarikhSumbanganSP`, `AmaunSumbanganSP`, `BuktiSumbanganSP`) VALUES
(1, 'MENARA TAMING SARI BERHAD', 'Jalan Merdeka Bandar Hilir, \r\n75000 Melaka, Malaysia.', 'YB DATUK ABDUL RAZAK BIN ABDUL RAHMAN', '+60 6-2881100', 'info@menaratamingsari.com', 'Memorandum & Association', '', '', '', '', '', '', '', '', '', '2023-09-12', '2,000,000', '2023-09-12', '1274752.00', '2023-07-24', '252614.62', '25397.29', 'RM 278011', '2023-09-30', '0', '0', 'RM 0', 'RM 1,022,138.000', '2023-07-24', '184015.88', '2023-09-30', '0', '0', 'RM 0', 'RM 184015', '', '2023-09-12', '', '2023-09-12', '', '', 'RM NaN', '2023-09-12', '', '', 'RM NaN', 'RM NaN', '2023-09-12', '', '2023-09-13', '', '', 'RM NaN', 'RM NaN', '1200000', '2023-09-23', 'RM 24000', '', '300000', '2023-09-30', 'RM 30000', ''),
(3, 'PANORAMA MELAKA SDN BHD', 'Lot 19B & 19C Zone B,\r\nBangunan Terminal Melaka  Sentral,\r\nJalan Tun Abdul Razak, Peringgit, \r\n7530', 'Roslan Datuk Hj Ahmad', '06-288 2525', 'admin@panoramamelaka.com.my', 'Memorandum & Association', '', '', '', '', '', '', '', '', '', '2023-09-13', '4,000,000', '2023-01-01', '3542953.62', '2023-07-24', '2500', '2500', 'RM 5000', '2023-09-30', '3000', '3000', 'RM 6000', 'RM 3,537,453.000', '2023-07-24', '0', '2023-12-31', '1584590.10', '373315.07', 'RM 1957905', 'RM 1957905', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1000000', '2023-09-12', 'RM 20000', '', '300000', '2023-09-12', 'RM 30000', ''),
(4, 'UNIVERSITI MELAKA', 'University Melaka \r\nBatu 28, Kuala Sungai Baru,\r\n78200 Melaka, Malaysia.', 'TYT TUN SERI SETIA (DR.) HAJI MOHD ALI BIN MOHD RUSTAM', '+606-3878382', 'webmaster@unimel.edu.my', 'Memorandum & Association', '', '', '', '', '', 'Laporan PCRS Ogos Imran.pdf', 'Laporan PCRS Ogos Imran.pdf', 'Laporan PCRS Ogos Imran.pdf', 'Laporan PCRS Ogos Imran.pdf', '2023-09-22', '59,021,437.10', '2023-09-22', '64770583.40', '2023-07-10', '111000', '27000', 'RM 138000', '2023-09-30', '5000', '50', 'RM 5050', 'RM 64,654,583.000', '2023-09-30', '24517009.10', '2023-12-30', '3000', '30', 'RM 3030', 'RM 24520039', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '3000000', '2023-09-22', 'RM 60000', 'Laporan PCRS Ogos Imran.pdf', '600000', '2023-09-22', 'RM 60000', 'Laporan PCRS Ogos Imran.pdf'),
(5, 'Kumpulan Melaka Berhad', 'No. 24-5 & 26-5, Tingkat 5,\r\nBangunan Kota Cemerlang\r\n75450 Lebuh Ayer Keroh,\r\nHang Tuah Jaya, Melak', 'YAB DATUK SERI AB RAUF BIN YUSOH ', '+606 232 7880', 'info@kmb.com.my', 'Memorandum & Association', '', '', '', '', '', 'Laporan PCRS Ogos Imran.pdf', 'Laporan PCRS Ogos Imran.pdf', 'Laporan PCRS Ogos Imran.pdf', 'Laporan PCRS Ogos Imran.pdf', '2023-09-22', '43,066,902.40', '2023-01-01', '38593910.19', '2023-07-10', '301034.41', '218965.59', 'RM 519999', '2023-09-30', '3000', '30', 'RM 3030', 'RM 38,289,876.000', '2023-07-10', '3710372.69', '2023-09-30', '5000', '50', 'RM 5050', 'RM 3715422', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '3000000', '2023-09-22', 'RM 60000', 'Laporan PCRS Ogos Imran.pdf', '900000', '2023-09-22', 'RM 90000', 'Laporan PCRS Ogos Imran.pdf');

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
-- Dumping data for table `useragensi`
--

INSERT INTO `useragensi` (`ID`, `Nama`, `Agensi`, `Emel`, `KataLaluan`) VALUES
(1, 'Imran', 'UNIMEL', 'imransadiq75@gmail.com', 'abc'),
(2, 'Jacob', 'MCORP', 'Jcob@gmail.com', 'abc');

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
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
