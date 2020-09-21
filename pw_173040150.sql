-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2020 at 02:56 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_173040150`
--

-- --------------------------------------------------------

--
-- Table structure for table `teknologi`
--

CREATE TABLE `teknologi` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `pendiri` varchar(100) NOT NULL,
  `lahir` varchar(20) NOT NULL,
  `penghasilan` varchar(100) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teknologi`
--

INSERT INTO `teknologi` (`id`, `nama`, `pendiri`, `lahir`, `penghasilan`, `gambar`) VALUES
(1, 'Apple Inc', 'Timothy D. Cook', 'Januari 1977', 'US$ 233,715 miliar', 'apple.png'),
(2, 'Samsung Electronic', 'Oh-Hyun Kwon', '13 Januari 1969', 'US$ 177,44 miliar', 'samsung.png'),
(3, 'Hon Hai Precision Industry (Foxconn)', 'Terry Gou', '20 Februari 1974', 'US$ 141,213 miliar', 'foxconn.png'),
(4, 'Amazon.com', 'Jeffrey P. Bezos', '5 Juli 1994', 'US$ 107,006 miliar', 'amazon.png'),
(5, 'HP (Hewlett Packard)', 'Dion J. Weisler', '1 Januari 1939', 'US$ 103,355 miliar', 'hp.png'),
(6, 'Microsoft', 'Satya Nadella', '4 April 1975', 'US$  93,58 miliar', 'microsoft.png'),
(7, 'IBM', 'Virginia M. Rometty', '16 Juni 1911', 'US$ 82,461 miliar', 'ibm.png'),
(8, 'Alphabet Inc', 'Larry Page', '2 Oktober 2015', 'US$ 74,989 miliar', 'alphabet.png'),
(9, 'Sony', 'Kazuo Hirai', '7 Mei 1946', 'US$ 67,519 miliar', 'sony.png'),
(10, 'Panasonic', 'Kazuhiro Tsuga', '13 Maret 1918', 'US$ 62,921 miliar', 'panasonic.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(265) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(3, 'admin', '$2y$10$HmPViZxu/RkWLhkG/RI/UuCNDmiH2d1wGfJDebxwwSOw0SgkXUAzu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `teknologi`
--
ALTER TABLE `teknologi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `teknologi`
--
ALTER TABLE `teknologi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
