-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2018 at 05:26 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resep_makanan`
--

-- --------------------------------------------------------

--
-- Table structure for table `cake`
--

CREATE TABLE `cake` (
  `cake_id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `alat_bahan` text NOT NULL,
  `langkah_langkah` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cake`
--

INSERT INTO `cake` (`cake_id`, `judul`, `gambar`, `alat_bahan`, `langkah_langkah`) VALUES
(1, 'hdjshdjs', 'rose-968655_960_720.jpg', 'hjjhjhj', 'wenjwhjrkwne');

-- --------------------------------------------------------

--
-- Table structure for table `daging`
--

CREATE TABLE `daging` (
  `daging_id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `alat_bahan` text NOT NULL,
  `langkah_langkah` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daging`
--

INSERT INTO `daging` (`daging_id`, `judul`, `deskripsi`, `alat_bahan`, `langkah_langkah`) VALUES
(2, 'daging bistik', 'ini adalah masakan khas daerah', 'aduiosahdkjsahdkjas jfgjsahdgjsadajbs', 'asdbjasdgjsakdkasjdna');

-- --------------------------------------------------------

--
-- Table structure for table `kripik`
--

CREATE TABLE `kripik` (
  `kripik_id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `alat_bahan` text NOT NULL,
  `langkah_langkah` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kripik`
--

INSERT INTO `kripik` (`kripik_id`, `judul`, `gambar`, `alat_bahan`, `langkah_langkah`) VALUES
(1, 'kjkdj', '8.png', 'asd asnd', 'sandkjsandjkasn');

-- --------------------------------------------------------

--
-- Table structure for table `makanan_daerah`
--

CREATE TABLE `makanan_daerah` (
  `daerah_id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `alat_bahan` text NOT NULL,
  `langkah_langkah` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `makanan_daerah`
--

INSERT INTO `makanan_daerah` (`daerah_id`, `judul`, `gambar`, `alat_bahan`, `langkah_langkah`) VALUES
(1, 'sdksjns,ndasm,a,', '55c71042-59fb-4c76-a7f4-4c44c5a27ba2.jpeg', 'z xnjsabcmsnz x', 'znxmsabncmsanz');

-- --------------------------------------------------------

--
-- Table structure for table `makanan_hot`
--

CREATE TABLE `makanan_hot` (
  `hot_id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `alat_bahan` text NOT NULL,
  `langkah_langkah` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `makanan_hot`
--

INSERT INTO `makanan_hot` (`hot_id`, `judul`, `gambar`, `alat_bahan`, `langkah_langkah`) VALUES
(1, 'kjwkejk', 'Contoh-Syair-Pendidikan.jpg', 'sdnjsncmsnc', 's dms dsadas');

-- --------------------------------------------------------

--
-- Table structure for table `makanan_ringan`
--

CREATE TABLE `makanan_ringan` (
  `ringan_id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `alat_bahan` text NOT NULL,
  `langkah_langkah` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `makanan_ringan`
--

INSERT INTO `makanan_ringan` (`ringan_id`, `judul`, `gambar`, `alat_bahan`, `langkah_langkah`) VALUES
(1, 'sbdjhsbcm', 'cuoc-chien-xu-nam.jpg', 'sa ncms x', 'zm xnsma x');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cake`
--
ALTER TABLE `cake`
  ADD PRIMARY KEY (`cake_id`);

--
-- Indexes for table `daging`
--
ALTER TABLE `daging`
  ADD PRIMARY KEY (`daging_id`);

--
-- Indexes for table `kripik`
--
ALTER TABLE `kripik`
  ADD PRIMARY KEY (`kripik_id`);

--
-- Indexes for table `makanan_daerah`
--
ALTER TABLE `makanan_daerah`
  ADD PRIMARY KEY (`daerah_id`);

--
-- Indexes for table `makanan_hot`
--
ALTER TABLE `makanan_hot`
  ADD PRIMARY KEY (`hot_id`);

--
-- Indexes for table `makanan_ringan`
--
ALTER TABLE `makanan_ringan`
  ADD PRIMARY KEY (`ringan_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cake`
--
ALTER TABLE `cake`
  MODIFY `cake_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `daging`
--
ALTER TABLE `daging`
  MODIFY `daging_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `kripik`
--
ALTER TABLE `kripik`
  MODIFY `kripik_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `makanan_daerah`
--
ALTER TABLE `makanan_daerah`
  MODIFY `daerah_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `makanan_hot`
--
ALTER TABLE `makanan_hot`
  MODIFY `hot_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `makanan_ringan`
--
ALTER TABLE `makanan_ringan`
  MODIFY `ringan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
