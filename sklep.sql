-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 13, 2021 at 08:55 PM
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
(23, 'testtestsetsetsdtsetsetsdtstetset', 11.35, 'images/galery/69d0dbc41fa24d1239c934602940978e423cbcf8f.jpg', 1, 6),
(24, 'fpagadpfngkdfnafgjnafdgkmjnafgdkjn', 11.35, 'images/galery/6e0538db6fa3c7ab2de62087073c5ce9c5ca806ad.jpg', 1, 6),
(25, 'tsetsdtsetsetsdtstetset sdopasdfk pajdjnkfgnadfgnafgjnafdgkmjnafgdkjn', 5.76, 'images/galery/6970e1d3399cc837f681377175524e5f5283cf705.jpg', 0, 6),
(27, 'Dorodny sum.', 47.08, 'images/galery/85a35bf3946b7a34a3c1b219ec7813b51c3c1abe2.jpg', 1, 8);

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
(4, 'BLACK FRIDAY!', '2021-12-06', 'Jeśli szukasz butów na wyprawy wędkarskie w sezonie jesień/zima, mamy dla Ciebie coś specjalnego. Koniecznie sprawdź propozycję od Savage Gear: model Performance. To porządne obuwie zaprojektowane z myślą o trudnym terenie. Możesz je zabrać na ryby, ale też do lasu czy nawet w góry!', 'images/news/17b725cdb9d3c6c25194198103d1cbfa960b9f5c6.jpg', 1),
(6, 'Obniżka na spławiki', '2021-12-06', 'Doskonale wykonane, stabilne spławiki żywcowe. New Age Float to seria spławików idealnych do zadań specjalnych. Dzięki materiałom wykorzystanym do ich wykonania są niezwykle wytrzymałe na korozję i uderzenia. Ponadto ogromnym autem jest ich duża wyporność oraz pierścień, który ułatwia montowanie zestawów i zastępuje stopery oraz patyki.', 'images/news/1902cc24f917e0b4f80a301d18f5cad6d45d14fc7.jpg', 1);

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
(22, 6, 23),
(24, 11, 24),
(25, 11, 27);

-- --------------------------------------------------------

--
-- Table structure for table `produkty_aukcje`
--

CREATE TABLE `produkty_aukcje` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8_polish_ci DEFAULT NULL,
  `type` text COLLATE utf8_polish_ci DEFAULT NULL,
  `state` text COLLATE utf8_polish_ci DEFAULT NULL,
  `production_year` int(11) NOT NULL,
  `prize` double NOT NULL,
  `image` text COLLATE utf8_polish_ci DEFAULT NULL,
  `description` text COLLATE utf8_polish_ci DEFAULT NULL,
  `id_autora` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `produkty_aukcje`
--

INSERT INTO `produkty_aukcje` (`id`, `name`, `type`, `state`, `production_year`, `prize`, `image`, `description`, `id_autora`) VALUES
(27, 'Wędka na karpie', 'Wędka', 'nowy', 2016, 190, 'images/auction_products/81b80f0cbe80a97199f32a4bdd759701e9fc928b6.jpg', 'Idealna wędka na karpie.', 8),
(28, 'Spodnie rybackie', 'Ubranie', 'używany', 2020, 39.99, 'images/auction_products/8e40662cdf8082f2d16994cc2a7e066598a28b3ed.jpg', 'Używane spodnie wodoodporne w dobrym stanie.', 8),
(30, 'Wędka na karasie', 'Wędka', 'używany', 2019, 173.49, 'images/auction_products/83b1c9ac4feee4497051581f08150e3c46ed00ff3.jpg', 'Idealna wędka na karasie.', 8),
(32, 'temp', 'wędka', 'nowy', 1999, 2000, 'images/auction_products/6f6d3268fc57584c3103aa529ea0b01b5e4dbd639.png', 'opisopisopisopisopisopisopisopisopisopisopisopisopisopisopisopisopisopis', 6);

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
(8, 'Wędka na karpie', 'Wędka', 150, 'images/products/1771438d50be6410db11b4e5fa35e60370fd68209.jpg', 'Idealna wędka na karpie', 1),
(9, 'Wędka na karasie', 'Wędka', 200, 'images/products/12434ba632f89340cbf3bc63128d79f13e214af31.jpg', 'Idealna wędka na karasie', 1),
(10, 'Żyłka nylonowa', 'Linka', 20, 'images/products/1a7b2837ca78a6e06c6da69ac6650cde6410133a8.jpg', 'Wytrzymała linka', 1),
(11, 'Przynęta na szczupaki', 'Przynęta', 20, 'images/products/1ffdc424c0ed62b3089da8db76080a3dc274be296.png', 'Przynęta na króla wód', 1),
(12, 'Sieć nylonowa', 'Sieć', 100, 'images/products/1b3013217b801bbe70128228d921ea471167b5f83.jpg', 'Mocna sieć na ryby', 1),
(13, 'Spławik Jaxon 180g', 'Spławik', 30, 'images/products/1d17ea5e595116a47a9693f6fcf9f383b8a08e150.png', 'Spławik o masie 180g', 1),
(14, 'Kołowrotek spinningowy', 'Kołowrotek', 200, 'images/products/1fc6635f8c5a4ee821eddff98c241cb8386acb5b8.jpg', 'Staromodny kołowrotek spinningowy', 1),
(15, 'Kurtka rybacka', 'Ubranie', 200, 'images/products/1070d821c94900139332fba3f0473e413f544b724.jpg', 'Wiatroszczelna kurtka na ryby', 1),
(16, 'Spodnie rybackie', 'Ubranie', 150, 'images/products/16d1b8a472a5439f5c87cb1a23538f340cb969ca5.jpg', 'Spodnie wodoodporne', 1),
(17, 'Gumowce rybackie', 'Buty', 95, 'images/products/1f2649f1b2844df99475df803e6753d592c742fd1.jpg', 'Wytrzymałe gumowce rybackie', 1),
(18, 'Krzesło rybackie', 'Siedzenie', 75, 'images/products/10ce521326b5c274ec1bf5431f663c8fc0d362eec.jpg', 'Rozkładane wodoodporne krzesło rybackie', 1),
(19, 'Luksusowy namiot Gołębiowski', 'Namiot', 1500, 'images/products/143a57497226e91d06a61e1acb44cbae0ef9545d7.jpg', 'Luksusowy namiot o wielu pomieszczeniach i parkiecie tanecznym', 1),
(20, 'Torba designerska na ryby', 'Plecak', 950, 'images/products/11b2fbd7e5508be25514c65577a91b80ee5b00bd8.jpg', 'Designerska torba rybacka, idealna na zawody wędkarskie.', 1);

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
  `permission` text COLLATE utf8_polish_ci NOT NULL DEFAULT 'user',
  `points` int(11) NOT NULL DEFAULT 0,
  `rank` text COLLATE utf8_polish_ci NOT NULL DEFAULT 'Makrela',
  `profile_image` text COLLATE utf8_polish_ci NOT NULL DEFAULT 'logo.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `email`, `name`, `surname`, `permission`, `points`, `rank`, `profile_image`) VALUES
(1, 'root', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'root@gmail.com', 'abc', 'def', 'admin', 1000, 'Karp', 'images/galery/bass.jpg'),
(3, 'Jan1', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'halibut@gmail.com', 'Jan', 'Polak', 'user', 10000, 'Sum', ''),
(4, 'test', '4a18e813942d94ffde4f1695884b6e8fdf321d4d', 'karas@gmail.com', 'sdfg', 'huasd', 'user', 13, 'Szprot', 'images/galery/bass.jpg'),
(6, 'Vydrsky', '4a18e813942d94ffde4f1695884b6e8fdf321d4d', 'szczupak@gmail.com', 'Karol', 'Wydrzyński', 'user', 12323543, 'Sum', 'images/galery/pike.jpg'),
(7, 'adik', '4a18e813942d94ffde4f1695884b6e8fdf321d4d', 'ryby123@gmail.com', 'adrian', 'kowalski', 'user', 0, 'Makrela', ''),
(8, 'luk1', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '123@gmail.com', 'Luk', 'Rac', 'user', 0, 'Makrela', 'images/galery/bass.jpg'),
(10, 'jasiu123', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'student@polsl.pl', 'Jan', 'Kowalski', 'user', 0, 'Makrela', ''),
(11, 'wamp', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'marek@polsl.pl2', 'marekq', 'setnik', 'user', 0, 'Makrela', 'logo.png');

-- --------------------------------------------------------

--
-- Table structure for table `zamowienia`
--

CREATE TABLE `zamowienia` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `offerid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `zamowienia`
--

INSERT INTO `zamowienia` (`id`, `userid`, `offerid`) VALUES
(5, 8, 8),
(7, 8, 10),
(8, 11, 8),
(9, 11, 9);

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
  `type` text CHARACTER SET utf8 COLLATE utf8_polish_ci DEFAULT NULL,
  `id_autora` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `zawody`
--

INSERT INTO `zawody` (`id`, `title`, `date`, `fishery`, `start_time`, `type`, `id_autora`) VALUES
(1, 'Wędkarski Dzień Ojca', '2022-06-23', 'Karpiowe Nr 2', '14:00:00', 'spławik', 1),
(2, 'Dzień Dziecka', '2022-06-01', 'Wodzisławski Zalew', '12:30:00', 'amatorski', 1),
(3, 'Puchar Wójta', '2024-02-13', 'Wiejski Staw G04', '09:45:00', 'seniorski', 1);

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
-- Indexes for table `zamowienia`
--
ALTER TABLE `zamowienia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_offerid` (`offerid`),
  ADD KEY `fk_userid_users` (`userid`);

--
-- Indexes for table `zawody`
--
ALTER TABLE `zawody`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fkey_zawody` (`id_autora`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `galeria_zdobyczy`
--
ALTER TABLE `galeria_zdobyczy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `ogloszenia`
--
ALTER TABLE `ogloszenia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `polubienia`
--
ALTER TABLE `polubienia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `produkty_aukcje`
--
ALTER TABLE `produkty_aukcje`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `produkty_sklep`
--
ALTER TABLE `produkty_sklep`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `zamowienia`
--
ALTER TABLE `zamowienia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `zawody`
--
ALTER TABLE `zawody`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `galeria_zdobyczy`
--
ALTER TABLE `galeria_zdobyczy`
  ADD CONSTRAINT `fkey_galeria_uzytkownicy` FOREIGN KEY (`id_autora`) REFERENCES `users` (`id`) ON DELETE NO ACTION;

--
-- Constraints for table `ogloszenia`
--
ALTER TABLE `ogloszenia`
  ADD CONSTRAINT `fkey_ogloszenia_uzytkownicy` FOREIGN KEY (`id_autora`) REFERENCES `users` (`id`);

--
-- Constraints for table `polubienia`
--
ALTER TABLE `polubienia`
  ADD CONSTRAINT `fk_postid` FOREIGN KEY (`postid`) REFERENCES `galeria_zdobyczy` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_userid` FOREIGN KEY (`userid`) REFERENCES `users` (`id`) ON DELETE CASCADE;

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

--
-- Constraints for table `zamowienia`
--
ALTER TABLE `zamowienia`
  ADD CONSTRAINT `fk_offerid` FOREIGN KEY (`offerid`) REFERENCES `produkty_sklep` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_userid_users` FOREIGN KEY (`userid`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `zawody`
--
ALTER TABLE `zawody`
  ADD CONSTRAINT `fkey_zawody` FOREIGN KEY (`id_autora`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
