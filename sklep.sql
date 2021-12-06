-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 06, 2021 at 09:38 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

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
(1, 'sdfasd', 2, 'images/galery/67137c1653cf6ff51bcebabc4a4f0056687ed28b4.jpg', 4, 6),
(8, 'GURBA MOTUR', 69.69, 'images/galery/6f0b948c54708da4fdf8d0ddb01bfe0d56166faa9.jpg', 3, 6),
(9, 'kremówka dobra', 2137, 'images/galery/6bacae388f94064577e7eb3a739e04a88e4b5501f.png', 3, 6);

-- --------------------------------------------------------

--
-- Table structure for table `ogloszenia`
--

CREATE TABLE `ogloszenia` (
  `id` int(11) NOT NULL,
  `title` text COLLATE utf8_polish_ci DEFAULT NULL,
  `publication_date` date NOT NULL,
  `description` text COLLATE utf8_polish_ci DEFAULT NULL,
  `image` text COLLATE utf8_polish_ci DEFAULT NULL,
  `id_autora` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `ogloszenia`
--

INSERT INTO `ogloszenia` (`id`, `title`, `publication_date`, `description`, `image`, `id_autora`) VALUES
(4, 'BLACK FRIDAY!', '2021-12-06', 'Jeśli szukasz butów na wyprawy wędkarskie w sezonie jesień/zima, mamy dla Ciebie coś specjalnego. Koniecznie sprawdź propozycję od Savage Gear: model Performance. To porządne obuwie zaprojektowane z myślą o trudnym terenie. Możesz je zabrać na ryby, ale też do lasu czy nawet w góry!', 'images/news/1c017a62dcf60a25d77175b201f7e39e4d91687f3.jpg', 1);

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
(17, 7, 8),
(18, 8, 8),
(19, 1, 8),
(20, 1, 1);

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
  `description` text COLLATE utf8_polish_ci DEFAULT NULL,
  `id_autora` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `produkty_aukcje`
--

INSERT INTO `produkty_aukcje` (`id`, `name`, `type`, `state`, `age`, `prize`, `image`, `description`, `id_autora`) VALUES
(19, 'na wegorze', 'wędka', 'uzywana', 22, 120, 'none', NULL, 4),
(20, 'na wegorze', 'wędka', 'uzywana', 22, 120, 'none', NULL, 4),
(21, 'na wegorze', 'wędka', 'uzywana', 22, 120, 'none', NULL, 4),
(25, 'na wegorze', 'wędka', 'uzywana', 22, 120, 'none', NULL, 6),
(26, 'na wegorze', 'wędka', 'uzywana', 22, 120, 'none', NULL, 6);

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
(8, 'Wędka na karpie', 'Wędka', 150, 'images/news/1771438d50be6410db11b4e5fa35e60370fd68209.jpg', 'Idealna wędka na karpie', 1),
(9, 'Wędka na karasie', 'Wędka', 200, 'images/news/12434ba632f89340cbf3bc63128d79f13e214af31.jpg', 'Idealna wędka na karasie', 1),
(10, 'Żyłka nylonowa', 'Linka', 20, 'images/news/1a7b2837ca78a6e06c6da69ac6650cde6410133a8.jpg', 'Wytrzymała linka', 1),
(11, 'Przynęta żywa na szczupaki', 'Przynęta', 20, 'images/news/1ffdc424c0ed62b3089da8db76080a3dc274be296.png', 'Przynęta na króla wód', 1),
(12, 'Sieć nylonowa', 'Sieć', 100, 'images/news/1b3013217b801bbe70128228d921ea471167b5f83.jpg', 'Mocna sieć na ryby', 1),
(13, 'Spławik Jaxon 180g', 'Spławik', 30, 'images/news/1d17ea5e595116a47a9693f6fcf9f383b8a08e150.png', 'Spławik o masie 180g', 1),
(14, 'Kołowrotek spinningowy', 'Kołowrotek', 200, 'images/news/1fc6635f8c5a4ee821eddff98c241cb8386acb5b8.jpg', 'Staromodny kołowrotek spinningowy', 1),
(15, 'Kurtka rybacka', 'Ubranie', 200, 'images/news/1070d821c94900139332fba3f0473e413f544b724.jpg', 'Wiatroszczelna kurtka na ryby', 1),
(16, 'Spodnie rybackie', 'Ubranie', 150, 'images/news/16d1b8a472a5439f5c87cb1a23538f340cb969ca5.jpg', 'Spodnie wodoodporne', 1),
(17, 'Gumowce rybackie', 'Buty', 95, 'images/news/1f2649f1b2844df99475df803e6753d592c742fd1.jpg', 'Wytrzymałe gumowce rybackie', 1),
(18, 'Krzesło rybackie', 'Siedzenie', 75, 'images/news/10ce521326b5c274ec1bf5431f663c8fc0d362eec.jpg', 'Rozkładane wodoodporne krzesło rybackie', 1),
(19, 'Luksusowy namiot Gołębiowski', 'Namiot', 1500, 'images/news/143a57497226e91d06a61e1acb44cbae0ef9545d7.jpg', 'Luksusowy namiot o wielu pomieszczeniach i parkiecie tanecznym', 1),
(20, 'Torba designerska na ryby', 'Plecak', 950, 'images/news/11b2fbd7e5508be25514c65577a91b80ee5b00bd8.jpg', 'Designerska torba rybacka, idealna na zawody wędkarskie.', 1),
(21, 'Podbierak zwykły', 'Podbierak', 30, 'images/news/1e5f3a8cf958c93251027a0c060a4cd2bb02a5149.png', 'Zwyczajny podbierak na ryby.', 1);

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
(1, 'root', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'root@gmail.com', 'root', 'root', 'admin', 1000, '1', ''),
(3, 'Jan1', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'halibut@gmail.com', 'Jan', 'Polak', 'user', 10000, 'Sum', ''),
(4, 'test', '4a18e813942d94ffde4f1695884b6e8fdf321d4d', 'karas@gmail.com', 'sdfg', 'huasd', 'user', 13, 'Szprot', 'images/galery/bass.jpg'),
(6, 'Vydrsky', '4a18e813942d94ffde4f1695884b6e8fdf321d4d', 'szczupak@gmail.com', 'Karol', 'Wydrzyński', 'user', 12323543, 'Sum', 'images/galery/pike.jpg'),
(7, 'adik', '4a18e813942d94ffde4f1695884b6e8fdf321d4d', 'ryby123@gmail.com', 'adrian', 'kowalski', 'user', 0, '', ''),
(8, 'luk1', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '123@gmail.com', 'Luk', 'Rac', 'user', 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `zawody`
--

CREATE TABLE `zawody` (
  `id` int(11) NOT NULL,
  `title` text CHARACTER SET utf8 COLLATE utf8_polish_ci DEFAULT NULL,
  `date` date NOT NULL,
  `fishery` text CHARACTER SET utf8 COLLATE utf8_polish_ci DEFAULT NULL,
  `start_time` time NOT NULL,
  `type` text CHARACTER SET utf8 COLLATE utf8_polish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  ADD PRIMARY KEY (`id`),
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
-- Indexes for table `zawody`
--
ALTER TABLE `zawody`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `galeria_zdobyczy`
--
ALTER TABLE `galeria_zdobyczy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `ogloszenia`
--
ALTER TABLE `ogloszenia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `polubienia`
--
ALTER TABLE `polubienia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `produkty_aukcje`
--
ALTER TABLE `produkty_aukcje`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `produkty_sklep`
--
ALTER TABLE `produkty_sklep`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `zawody`
--
ALTER TABLE `zawody`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
