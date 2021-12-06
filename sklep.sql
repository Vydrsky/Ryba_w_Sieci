-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 06 Gru 2021, 20:16
-- Wersja serwera: 10.4.14-MariaDB
-- Wersja PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `sklep`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `galeria_zdobyczy`
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
-- Zrzut danych tabeli `galeria_zdobyczy`
--

INSERT INTO `galeria_zdobyczy` (`id`, `opis`, `waga`, `zdjecie`, `polubienia`, `id_autora`) VALUES
(1, 'sdfasd', 2, 'images/galery/67137c1653cf6ff51bcebabc4a4f0056687ed28b4.jpg', 3, 6),
(8, 'GURBA MOTUR', 69.69, 'images/galery/6f0b948c54708da4fdf8d0ddb01bfe0d56166faa9.jpg', 3, 6),
(9, 'kremówka dobra', 2137, 'images/galery/6bacae388f94064577e7eb3a739e04a88e4b5501f.png', 3, 6);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `ogloszenia`
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
-- Zrzut danych tabeli `ogloszenia`
--

INSERT INTO `ogloszenia` (`id`, `title`, `publication_date`, `description`, `image`, `id_autora`) VALUES
(4, 'BLACK FRIDAY!', '2021-12-06', 'Jeśli szukasz butów na wyprawy wędkarskie w sezonie jesień/zima, mamy dla Ciebie coś specjalnego. Koniecznie sprawdź propozycję od Savage Gear: model Performance. To porządne obuwie zaprojektowane z myślą o trudnym terenie. Możesz je zabrać na ryby, ale też do lasu czy nawet w góry!', 'images/news/1c017a62dcf60a25d77175b201f7e39e4d91687f3.jpg', 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `polubienia`
--

CREATE TABLE `polubienia` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `postid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `polubienia`
--

INSERT INTO `polubienia` (`id`, `userid`, `postid`) VALUES
(7, 6, 8),
(15, 6, 9),
(16, 7, 9),
(17, 7, 8),
(18, 8, 8),
(19, 1, 8);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `produkty_aukcje`
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
-- Zrzut danych tabeli `produkty_aukcje`
--

INSERT INTO `produkty_aukcje` (`id`, `name`, `type`, `state`, `age`, `prize`, `image`, `description`, `id_autora`) VALUES
(19, 'na wegorze', 'wędka', 'uzywana', 22, 120, 'none', NULL, 4),
(20, 'na wegorze', 'wędka', 'uzywana', 22, 120, 'none', NULL, 4),
(21, 'na wegorze', 'wędka', 'uzywana', 22, 120, 'none', NULL, 4),
(25, 'na wegorze', 'wędka', 'uzywana', 22, 120, 'none', NULL, 6),
(26, 'na wegorze', 'wędka', 'uzywana', 22, 120, 'none', NULL, 6);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `produkty_sklep`
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
-- Zrzut danych tabeli `produkty_sklep`
--

INSERT INTO `produkty_sklep` (`id`, `name`, `type`, `prize`, `image`, `description`, `id_autora`) VALUES
(6, 'Wędka na karpie', 'Do połowów na duże sztuki', 450.99, 'images/news/1544828b060204d2d95ebe7cbe24d47c8e6695baa.jpg', '', 1),
(7, 'Wędka na karasie', 'Na ciężkie okazy', 123.12, 'images/news/15b182391e11a193467400d218d91093950f87fe1.jpg', 'Wpisz opis.Wpisz opis.Wpisz opis.Wpisz opis.Wpisz Wpisz opis.opis.Wpisz opis.', 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
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
-- Zrzut danych tabeli `users`
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
-- Struktura tabeli dla tabeli `zawody`
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
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `galeria_zdobyczy`
--
ALTER TABLE `galeria_zdobyczy`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fkey_galeria_uzytkownicy` (`id_autora`);

--
-- Indeksy dla tabeli `ogloszenia`
--
ALTER TABLE `ogloszenia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fkey_ogloszenia_uzytkownicy` (`id_autora`);

--
-- Indeksy dla tabeli `polubienia`
--
ALTER TABLE `polubienia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_userid` (`userid`),
  ADD KEY `fk_postid` (`postid`);

--
-- Indeksy dla tabeli `produkty_aukcje`
--
ALTER TABLE `produkty_aukcje`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fkey_produkty_uzytkownicy` (`id_autora`);

--
-- Indeksy dla tabeli `produkty_sklep`
--
ALTER TABLE `produkty_sklep`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fkey_produktysklep_uzytkownicy` (`id_autora`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `zawody`
--
ALTER TABLE `zawody`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `galeria_zdobyczy`
--
ALTER TABLE `galeria_zdobyczy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT dla tabeli `ogloszenia`
--
ALTER TABLE `ogloszenia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT dla tabeli `polubienia`
--
ALTER TABLE `polubienia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT dla tabeli `produkty_aukcje`
--
ALTER TABLE `produkty_aukcje`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT dla tabeli `produkty_sklep`
--
ALTER TABLE `produkty_sklep`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT dla tabeli `zawody`
--
ALTER TABLE `zawody`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `galeria_zdobyczy`
--
ALTER TABLE `galeria_zdobyczy`
  ADD CONSTRAINT `fkey_galeria_uzytkownicy` FOREIGN KEY (`id_autora`) REFERENCES `users` (`id`);

--
-- Ograniczenia dla tabeli `ogloszenia`
--
ALTER TABLE `ogloszenia`
  ADD CONSTRAINT `fkey_ogloszenia_uzytkownicy` FOREIGN KEY (`id_autora`) REFERENCES `users` (`id`);

--
-- Ograniczenia dla tabeli `polubienia`
--
ALTER TABLE `polubienia`
  ADD CONSTRAINT `fk_postid` FOREIGN KEY (`postid`) REFERENCES `galeria_zdobyczy` (`id`),
  ADD CONSTRAINT `fk_userid` FOREIGN KEY (`userid`) REFERENCES `users` (`id`);

--
-- Ograniczenia dla tabeli `produkty_aukcje`
--
ALTER TABLE `produkty_aukcje`
  ADD CONSTRAINT `fkey_produkty_uzytkownicy` FOREIGN KEY (`id_autora`) REFERENCES `users` (`id`);

--
-- Ograniczenia dla tabeli `produkty_sklep`
--
ALTER TABLE `produkty_sklep`
  ADD CONSTRAINT `fkey_produktysklep_uzytkownicy` FOREIGN KEY (`id_autora`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
