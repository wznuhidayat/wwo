-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 27 Okt 2020 pada 18.21
-- Versi Server: 5.7.31-0ubuntu0.18.04.1
-- PHP Version: 7.3.22-1+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wwo`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_user`
--

CREATE TABLE `t_user` (
  `id_user` int(9) NOT NULL,
  `email` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `password` varchar(300) NOT NULL,
  `phone` int(14) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `img` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_user`
--

INSERT INTO `t_user` (`id_user`, `email`, `name`, `password`, `phone`, `gender`, `img`) VALUES
(1602029614, 'kaqixy@mailinator.com', 'Alan Mendez', '25d55ad283aa400af464c76d713c07ad', 2147483647, 'L', 'null'),
(1602061177, 'fytolyno@mailinator.com', 'Melyssa England', '25d55ad283aa400af464c76d713c07ad', 2147483647, 'P', 'null'),
(1602070047, 'dacucaxu@mailinator.com', 'Nerea Lowe', '25d55ad283aa400af464c76d713c07ad', 2147483647, 'P', 'null'),
(1602074125, 'hypadazom@mailinator.com', 'Britanney Alford', '25d55ad283aa400af464c76d713c07ad', 2147483647, 'L', 'null');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_user`
--
ALTER TABLE `t_user`
  ADD PRIMARY KEY (`id_user`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
