-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2023 at 01:59 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webgis`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `lokasi`
--

CREATE TABLE `lokasi` (
  `id` int(10) NOT NULL,
  `x` decimal(20,11) NOT NULL DEFAULT 0.00000000000,
  `y` decimal(20,11) NOT NULL DEFAULT 0.00000000000,
  `pemilik` varchar(50) NOT NULL,
  `ternak` varchar(50) NOT NULL,
  `icon` varchar(50) NOT NULL,
  `populasi` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `luas` varchar(50) NOT NULL,
  `pict` text DEFAULT 'default.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lokasi`
--

INSERT INTO `lokasi` (`id`, `x`, `y`, `pemilik`, `ternak`, `icon`, `populasi`, `alamat`, `luas`, `pict`) VALUES
(21, '1.29884100000', '124.82588200000', 'Jhony Wagiu', 'Ayam Kampung', 'ayamkampung', '60 ekor', 'Tes', '34', 'Foto-08082023-121410-admin-5930870.jpg'),
(22, '1.30100600000', '124.80614200000', 'Jimmy Eman', 'Ayam Petelur', 'ayampetelur', '5000 Ekor', '', '', 'default.jpg'),
(23, '1.29534100000', '124.82360400000', 'Mursidi Kumat', 'Sapi', 'Sapi', '30 ekor', '', '', 'default.jpg'),
(24, '1.29253900000', '124.78954400000', 'Ferri Gigir', 'Babi', 'Babi', '60 Ekor', '', '', 'default.jpg'),
(25, '1.29185600000', '124.77790100000', 'Max Kambey', 'Ayam Daging', 'ayamdaging', '8500 Ekor', '', '', 'default.jpg'),
(26, '1.27019600000', '124.81713200000', 'Denny Legi', 'Babi', 'Babi', '40 Ekor', '', '', 'default.jpg'),
(27, '1.27319100000', '124.85197900000', 'Yoli Mantiri dan Debi Mantiri', 'Ayam Petelur', 'ayampetelur', '5000 Ekor', '', '', 'default.jpg'),
(28, '1.27578800000', '124.84590600000', 'Panca Undap', 'Babi', 'Babi', '50 Ekor', '', '', 'default.jpg'),
(29, '1.35644700000', '124.84053200000', 'Adri Worang', 'Babi & Ayam Petelur', 'babiayamtelur', 'Ayam Petelur 2000 ekor dan Babi 40 Ekor', '', '', 'default.jpg'),
(30, '1.35377000000', '124.84151600000', 'Ir. Piet Hein Palit', 'Ayam Petelur', 'ayampetelur', '60000 Ekor', '', '', 'default.jpg'),
(31, '1.34727200000', '124.81634600000', 'Berty Palit', 'Sapi', 'Sapi', '20 Ekor', '', '', 'default.jpg'),
(32, '1.34115200000', '124.82027300000', 'Fogen Montolalu', 'Ayam Petelur', 'ayampetelur', '3000 Ekor', '', '', 'default.jpg'),
(33, '1.38922500000', '124.82290500000', 'Harley Legi', 'Babi', 'Babi', '40 Ekor', '', '', 'default.jpg'),
(34, '1.39136400000', '124.82512900000', 'Hizkia Longdong', 'Babi', 'Babi', '20 Ekor', '', '', 'default.jpg'),
(35, '1.38875800000', '124.82649500000', 'Debby Longdong', 'Babi', 'Babi', '3 Ekor', '', '', 'default.jpg'),
(36, '1.35007400000', '124.83827200000', 'Ventje Mandagi', 'Ayam Petelur', 'ayampetelur', '2500 ekor', '', '', 'default.jpg'),
(37, '1.35104100000', '124.83881000000', 'Tedi Mamuaja', 'Babi & Ayam Petelur', 'babiayamtelur', 'Ayam Petelur 18000 ekor dan Babi 100 ekor', '', '', 'default.jpg'),
(38, '1.36618000000', '124.82268000000', 'Bertje Pusung', 'Sapi', 'Sapi', '12 ekor', '', '', 'default.jpg'),
(39, '1.33981200000', '124.86951300000', 'Rivano Tumewu', 'Ayam Daging', 'ayamdaging', '4000 ekor', '', '', 'default.jpg'),
(40, '1.34346800000', '124.87887400000', 'Maxi Tiwow', 'Ayam Daging', 'ayamdaging', '4000 ekor', '', '', 'default.jpg'),
(41, '1.32105300000', '124.85480700000', 'Jan Rawung', 'Ayam Daging', 'ayamdaging', '18000 ekor', '', '', 'default.jpg'),
(42, '1.33630000000', '124.85719300000', 'Budi Wajong', 'Babi & Sapi', 'babisapi', 'Babi 20 ekor dan Sapi 10 ekor', '', '', 'default.jpg'),
(43, '1.33598300000', '124.86507900000', 'Lidya ', 'Babi', 'Babi', '30 ekor', '', '', 'default.jpg'),
(44, '1.30187000000', '124.86206700000', 'Markus Karur', 'Babi', 'Babi', '47 ekor', '', '', 'default.jpg'),
(45, '1.30046500000', '124.85415800000', 'Christian Aror', 'Sapi', 'Sapi', '8 ekor', '', '', 'default.jpg'),
(46, '1.30369100000', '124.85347100000', 'Max Rambing', 'Sapi', 'Sapi', '11 ekor', '', '', 'default.jpg'),
(47, '1.30896300000', '124.78822200000', 'Batak', 'Babi', 'Babi', '600 ekor', '', '', 'default.jpg'),
(48, '1.30926600000', '124.78656200000', 'Ferry Tangon', 'Babi', 'Babi', '100 ekor', '', '', 'default.jpg'),
(49, '1.31750200000', '124.77658700000', 'Fransiskus Sumampouw', 'Babi', 'Babi', '32 ekor', '', '', 'default.jpg'),
(50, '1.31318200000', '124.76854600000', 'Jackson Loho', 'Ayam Daging', 'ayamdaging', '7500 ekor', '', '', 'default.jpg'),
(51, '1.31880800000', '124.77046200000', 'Meydi Tamboto', 'Ayam Daging', 'ayamdaging', '8000 ekor', '', '', 'default.jpg'),
(52, '1.32256100000', '124.79291700000', 'Lensi Liando', 'Babi', 'Babi', '15000 ekor', '', '', 'default.jpg'),
(53, '1.32341700000', '124.80543400000', 'Yopie Pandey', 'Babi', 'Babi', '20 ekor', '', '', 'default.jpg'),
(54, '1.32367000000', '124.81922000000', 'Kel. Runtu-Simbar', 'Babi & Ayam Kampung', 'babiayamkampung', 'Babi 50 ekor dan Ayam Kampung 500 ekor', 'Contoh Alamat', '120 m2', 'Foto-07082023-105906-admin-5048530.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lokasi`
--
ALTER TABLE `lokasi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lokasi`
--
ALTER TABLE `lokasi`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
