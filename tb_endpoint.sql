-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2018 at 02:04 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apic`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_endpoint`
--

CREATE TABLE `tb_endpoint` (
  `id` int(11) NOT NULL,
  `endpoint` varchar(255) NOT NULL,
  `request` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_endpoint`
--

INSERT INTO `tb_endpoint` (`id`, `endpoint`, `request`) VALUES
(1, 'https://satutok212.000webhostapp.com/', 'loket'),
(2, 'Http://ukmupnjatin.000webhostapp.com/index.php/api', 'ukm'),
(3, 'http://perpusfik.000webhostapp.com/api.php', 'perpus all'),
(4, 'http://perpusfik.000webhostapp.com/api.php?all=true ', 'data buku perpus'),
(5, 'https://vote-ilc.000webhostapp.com/data_pilihfix.json', 'data pilih vote'),
(6, 'https://vote-ilc.000webhostapp.com/identitas_pemilih_fix.json', 'identitas pemilih vote'),
(7, 'https://crypto-api.000webhostapp.com/api.php', 'bitcoin'),
(8, 'https://upnews-api.000webhostapp.com/index.php/berita', 'all berita upn'),
(9, 'https://upnews-api.000webhostapp.com/index.php/berita?konten=', 'berita upn by konten'),
(10, 'http://piatf.000webhostapp.com/index.php/api/berita/kategoricuy', 'kategori berita pia'),
(11, 'http://piatf.000webhostapp.com/index.php/api/id?id_berita=3', 'berita pia by id'),
(12, 'http://piatf.000webhostapp.com/index.php/api/id', 'all berita pia');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_endpoint`
--
ALTER TABLE `tb_endpoint`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_endpoint`
--
ALTER TABLE `tb_endpoint`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
