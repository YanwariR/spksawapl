-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2024 at 05:47 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas_spk`
--

-- --------------------------------------------------------

--
-- Table structure for table `saw_aplikasi`
--

CREATE TABLE `saw_aplikasi` (
  `nama` varchar(100) NOT NULL,
  `pengembang` varchar(100) NOT NULL,
  `kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `saw_aplikasi`
--

INSERT INTO `saw_aplikasi` (`nama`, `pengembang`, `kategori`) VALUES
('Clash of Clans', 'Supercell', 'Tower Defense'),
('HOK', 'Infinite Games', 'MMORPG'),
('Mobile Legends', 'Moonton', 'MOBA'),
('Tiktok', 'Tiktok', 'MOBA'),
('Wuthering Waves', 'Kuro Sangat Baik', 'MMORPG');

-- --------------------------------------------------------

--
-- Table structure for table `saw_kriteria`
--

CREATE TABLE `saw_kriteria` (
  `no` int(11) NOT NULL,
  `peringkat` float NOT NULL,
  `ukuran` float NOT NULL,
  `unduhan` float NOT NULL,
  `aktif` float NOT NULL,
  `manfaat` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `saw_kriteria`
--

INSERT INTO `saw_kriteria` (`no`, `peringkat`, `ukuran`, `unduhan`, `aktif`, `manfaat`) VALUES
(22, 0.2, 0.1, 0.2, 0.3, 0.2);

-- --------------------------------------------------------

--
-- Table structure for table `saw_penilaian`
--

CREATE TABLE `saw_penilaian` (
  `nama` varchar(100) NOT NULL,
  `peringkat` float NOT NULL,
  `ukuran` float NOT NULL,
  `unduhan` float NOT NULL,
  `aktif` float NOT NULL,
  `manfaat` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `saw_penilaian`
--

INSERT INTO `saw_penilaian` (`nama`, `peringkat`, `ukuran`, `unduhan`, `aktif`, `manfaat`) VALUES
('Clash of Clans', 3.5, 2, 1, 1, 2),
('HOK', 3.7, 3, 3, 2, 1),
('Mobile Legends', 5, 3, 3, 3, 1),
('Tiktok', 3.5, 1, 2, 3, 3),
('Wuthering Waves', 5, 3, 3, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `saw_perankingan`
--

CREATE TABLE `saw_perankingan` (
  `no` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nilai_akhir` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `saw_perankingan`
--

INSERT INTO `saw_perankingan` (`no`, `nama`, `nilai_akhir`) VALUES
(1, 'Clash of Clans', 0.49),
(2, 'HOK', 0.648),
(3, 'Mobile Legends', 0.8),
(4, 'Tiktok', 0.873),
(5, 'Wuthering Waves', 0.8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `saw_aplikasi`
--
ALTER TABLE `saw_aplikasi`
  ADD PRIMARY KEY (`nama`);

--
-- Indexes for table `saw_kriteria`
--
ALTER TABLE `saw_kriteria`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `saw_penilaian`
--
ALTER TABLE `saw_penilaian`
  ADD PRIMARY KEY (`nama`);

--
-- Indexes for table `saw_perankingan`
--
ALTER TABLE `saw_perankingan`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `saw_kriteria`
--
ALTER TABLE `saw_kriteria`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `saw_perankingan`
--
ALTER TABLE `saw_perankingan`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
