-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2021 at 02:24 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sklep`
--

-- --------------------------------------------------------

--
-- Table structure for table `galeria_zdobyczy`
--

CREATE TABLE `galeria_zdobyczy` (
  `id` int(11) NOT NULL,
  `opis` text COLLATE utf8_polish_ci DEFAULT NULL,
  `waga` float NOT NULL,
  `zdjecie` text COLLATE utf8_polish_ci NOT NULL,
  `polubienia` int(11) NOT NULL,
  `id_autora` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `galeria_zdobyczy`
--

INSERT INTO `galeria_zdobyczy` (`id`, `opis`, `waga`, `zdjecie`, `polubienia`, `id_autora`) VALUES
(1, 'sdfasd', 2, 'images/galery/67137c1653cf6ff51bcebabc4a4f0056687ed28b4.jpg', 3, 6),
(8, 'GURBA MOTUR', 69.69, 'images/galery/6f0b948c54708da4fdf8d0ddb01bfe0d56166faa9.jpg', 1, 6),
(9, 'kremówka dobra', 2137, 'images/galery/6bacae388f94064577e7eb3a739e04a88e4b5501f.png', 3, 6);

-- --------------------------------------------------------

--
-- Table structure for table `ogloszenia`
--

CREATE TABLE `ogloszenia` (
  `id` int(11) DEFAULT NULL,
  `typ` text COLLATE utf8_polish_ci DEFAULT NULL,
  `data_publikacji` date NOT NULL,
  `opis` text COLLATE utf8_polish_ci DEFAULT NULL,
  `id_autora` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `polubienia`
--

CREATE TABLE `polubienia` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `postid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `polubienia`
--

INSERT INTO `polubienia` (`id`, `userid`, `postid`) VALUES
(7, 6, 8),
(15, 6, 9),
(16, 7, 9),
(17, 7, 8);

-- --------------------------------------------------------

--
-- Table structure for table `produkty_aukcje`
--

CREATE TABLE `produkty_aukcje` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8_polish_ci DEFAULT NULL,
  `type` text COLLATE utf8_polish_ci DEFAULT NULL,
  `state` text COLLATE utf8_polish_ci DEFAULT NULL,
  `age` int(11) NOT NULL,
  `prize` double NOT NULL,
  `image` text COLLATE utf8_polish_ci DEFAULT NULL,
  `id_autora` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `produkty_aukcje`
--

INSERT INTO `produkty_aukcje` (`id`, `name`, `type`, `state`, `age`, `prize`, `image`, `id_autora`) VALUES
(19, 'na wegorze', 'wędka', 'uzywana', 22, 120, 'none', 4),
(20, 'na wegorze', 'wędka', 'uzywana', 22, 120, 'none', 4),
(21, 'na wegorze', 'wędka', 'uzywana', 22, 120, 'none', 4),
(25, 'na wegorze', 'wędka', 'uzywana', 22, 120, 'none', 6),
(26, 'na wegorze', 'wędka', 'uzywana', 22, 120, 'none', 6);

-- --------------------------------------------------------

--
-- Table structure for table `produkty_sklep`
--

CREATE TABLE `produkty_sklep` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8_polish_ci DEFAULT NULL,
  `type` text COLLATE utf8_polish_ci DEFAULT NULL,
  `prize` double NOT NULL,
  `image` text COLLATE utf8_polish_ci DEFAULT NULL,
  `description` text COLLATE utf8_polish_ci NOT NULL,
  `id_autora` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `produkty_sklep`
--

INSERT INTO `produkty_sklep` (`id`, `name`, `type`, `prize`, `image`, `description`, `id_autora`) VALUES
(1, 'Wędka', 'Na węgorze', 130, 'Baza.png', 'Zwykła wędka, szału nie ma', 3),
(2, 'Wędka szefa', 'Na karasie', 127.42, 'jpg_318-1831.jpg', 'Najlepsza wędka na karasie.', 3),
(3, 'xxx', 'x1', 123, 'jpg_318-1831.jpg', 'temptemp', 3),
(4, 'Wędka', 'x2', 123, 'Baza.png', 'temp', 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` text COLLATE utf8_polish_ci DEFAULT NULL,
  `password` text COLLATE utf8_polish_ci DEFAULT NULL,
  `email` text COLLATE utf8_polish_ci DEFAULT NULL,
  `name` text COLLATE utf8_polish_ci DEFAULT NULL,
  `surname` text COLLATE utf8_polish_ci DEFAULT NULL,
  `permission` text COLLATE utf8_polish_ci NOT NULL DEFAULT '\'user\'',
  `points` int(11) NOT NULL,
  `rank` text COLLATE utf8_polish_ci NOT NULL,
  `profile_image` text COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `email`, `name`, `surname`, `permission`, `points`, `rank`, `profile_image`) VALUES
(3, 'Jan1', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'halibut@gmail.com', 'Jan', 'Polak', 'user', 10000, 'Sum', ''),
(4, 'test', '4a18e813942d94ffde4f1695884b6e8fdf321d4d', 'karas@gmail.com', 'sdfg', 'huasd', 'user', 13, 'Szprot', 'images/galery/bass.jpg'),
(6, 'Vydrsky', '4a18e813942d94ffde4f1695884b6e8fdf321d4d', 'szczupak@gmail.com', 'Karol', 'Wydrzyński', 'user', 12323543, 'Sum', 'images/galery/pike.jpg'),
(7, 'adik', '4a18e813942d94ffde4f1695884b6e8fdf321d4d', 'ryby123@gmail.com', 'adrian', 'kowalski', 'user', 0, '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `galeria_zdobyczy`
--
ALTER TABLE `galeria_zdobyczy`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fkey_galeria_uzytkownicy` (`id_autora`);

--
-- Indexes for table `ogloszenia`
--
ALTER TABLE `ogloszenia`
  ADD KEY `fkey_ogloszenia_uzytkownicy` (`id_autora`);

--
-- Indexes for table `polubienia`
--
ALTER TABLE `polubienia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_userid` (`userid`),
  ADD KEY `fk_postid` (`postid`);

--
-- Indexes for table `produkty_aukcje`
--
ALTER TABLE `produkty_aukcje`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fkey_produkty_uzytkownicy` (`id_autora`);

--
-- Indexes for table `produkty_sklep`
--
ALTER TABLE `produkty_sklep`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fkey_produktysklep_uzytkownicy` (`id_autora`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `galeria_zdobyczy`
--
ALTER TABLE `galeria_zdobyczy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `polubienia`
--
ALTER TABLE `polubienia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `produkty_aukcje`
--
ALTER TABLE `produkty_aukcje`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `produkty_sklep`
--
ALTER TABLE `produkty_sklep`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `galeria_zdobyczy`
--
ALTER TABLE `galeria_zdobyczy`
  ADD CONSTRAINT `fkey_galeria_uzytkownicy` FOREIGN KEY (`id_autora`) REFERENCES `users` (`id`);

--
-- Constraints for table `ogloszenia`
--
ALTER TABLE `ogloszenia`
  ADD CONSTRAINT `fkey_ogloszenia_uzytkownicy` FOREIGN KEY (`id_autora`) REFERENCES `users` (`id`);

--
-- Constraints for table `polubienia`
--
ALTER TABLE `polubienia`
  ADD CONSTRAINT `fk_postid` FOREIGN KEY (`postid`) REFERENCES `galeria_zdobyczy` (`id`),
  ADD CONSTRAINT `fk_userid` FOREIGN KEY (`userid`) REFERENCES `users` (`id`);

--
-- Constraints for table `produkty_aukcje`
--
ALTER TABLE `produkty_aukcje`
  ADD CONSTRAINT `fkey_produkty_uzytkownicy` FOREIGN KEY (`id_autora`) REFERENCES `users` (`id`);

--
-- Constraints for table `produkty_sklep`
--
ALTER TABLE `produkty_sklep`
  ADD CONSTRAINT `fkey_produktysklep_uzytkownicy` FOREIGN KEY (`id_autora`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
