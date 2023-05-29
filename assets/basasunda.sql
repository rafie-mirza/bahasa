-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2023 at 08:16 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `basasunda`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `label` varchar(100) NOT NULL,
  `color` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `label`, `color`) VALUES
(1, 'Numbers', 'FD8E09'),
(2, 'Family Members', '379237'),
(3, 'Colors', '8800A0'),
(4, 'Phrases', '16AFCA'),
(5, 'Place', '1B9C85'),
(6, 'Family', 'B70404');

-- --------------------------------------------------------

--
-- Table structure for table `word`
--

CREATE TABLE `word` (
  `id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `label` varchar(100) NOT NULL,
  `sunda` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `word`
--

INSERT INTO `word` (`id`, `cat_id`, `label`, `sunda`, `image`) VALUES
(1, 1, 'One', 'Satu', 'number_One_1685280169.jpeg'),
(2, 1, 'Two', 'Dua', 'number_Two_1685280564.jpeg'),
(3, 1, 'Three', 'Tiga', 'number_Three_1685280580.jpeg'),
(4, 1, 'Four', 'Empat', 'number_Four_1685280591.jpeg'),
(5, 1, 'Five', 'Lima', 'number_Five_1685280925.jpeg'),
(6, 1, 'Six', 'Enam', 'number_Six_1685280933.jpeg'),
(7, 1, 'Seven', 'Tujuh', 'number_Seven_1685280961.jpeg'),
(8, 1, 'Eight', 'Delapan', 'number_Eight_1685280986.jpeg'),
(9, 1, 'Nine', 'Sembilan', 'number_Nine_1685281003.jpeg'),
(10, 1, 'Ten', 'Sepuluh', 'number_Ten_1685281020.jpeg'),
(11, 2, 'A', 'A', 'family_A_1685281405.jpeg'),
(12, 2, 'B', 'B', 'family_B_1685281416.jpeg'),
(13, 2, 'C', 'C', 'family_C_1685281440.jpeg'),
(14, 2, 'D', 'D', 'family_D_1685281450.jpeg'),
(15, 2, 'E', 'E', 'family_E_1685281459.jpeg'),
(16, 2, 'F', 'F', 'family_F_1685281471.jpeg'),
(17, 2, 'G', 'G', 'family_G_1685281481.jpeg'),
(18, 2, 'H', 'H', 'family_H_1685281491.jpeg'),
(19, 2, 'I', 'I', 'family_I_1685281500.jpeg'),
(20, 2, 'J', 'J', 'family_J_1685281510.jpeg'),
(21, 3, 'Scared', 'Takut', 'color_afraid_1668586537.jpg'),
(22, 3, 'Love', 'Cinta', 'color_Love_1668586559.jpg'),
(23, 3, 'Angry', 'Marah', 'color_Marah_1668586687.jpg'),
(24, 3, 'Sad', 'Sedih', 'color_Sad_1668586697.jpg'),
(50, 4, 'He/She', 'Dia', 'dia.png'),
(51, 4, 'We', 'Kita', 'kita.png'),
(52, 4, 'You', 'Kamu', 'kamu.png'),
(53, 4, 'Us', 'Kami', 'kami.png'),
(54, 4, 'They', 'Mereka', 'mereka.png'),
(55, 4, 'Me', 'Saya', 'saya.png'),
(56, 5, 'Bank', 'Bank', 'bank.png'),
(57, 5, 'Classroom', 'Ruang Kelas', 'kelas.png'),
(58, 5, 'Home', 'Rumah', 'rumah.png'),
(59, 5, 'Market', 'Pasar', 'pasar.png'),
(60, 5, 'School', 'Sekolah', 'sekolah.png'),
(61, 5, 'Park', 'Taman', 'taman.png'),
(62, 6, 'Father', 'Ayah', 'ayah.png'),
(63, 6, 'Mother', 'Ibu', 'ibu.png'),
(64, 6, 'Kid', 'Anak', 'anak.png'),
(65, 6, 'Aunt', 'Bibi', 'bibi.png'),
(66, 6, 'Grandfather', 'Kakek', 'kakek.png'),
(67, 6, 'Grandmother', 'Nenek', 'nenek.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `word`
--
ALTER TABLE `word`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `word`
--
ALTER TABLE `word`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
