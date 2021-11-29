-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 28 Lis 2021, 16:56
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
  `id` int(11) DEFAULT NULL,
  `opis` text COLLATE utf8_polish_ci DEFAULT NULL,
  `waga` int(11) NOT NULL,
  `zdjecie` text COLLATE utf8_polish_ci DEFAULT NULL,
  `polubienia` int(11) NOT NULL,
  `id_autora` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `ogloszenia`
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
  `id_autora` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `produkty_aukcje`
--

INSERT INTO `produkty_aukcje` (`id`, `name`, `type`, `state`, `age`, `prize`, `image`, `id_autora`) VALUES
(1, 'Spławik', 'Na węgorze', 'nowy', 2, 22, 'logo_nfz.jpg', 3);

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
  `id_autora` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `produkty_sklep`
--

INSERT INTO `produkty_sklep` (`id`, `name`, `type`, `prize`, `image`, `id_autora`) VALUES
(1, 'Wędka', 'Na węgorze', 130, 'Baza.png', 3),
(2, 'Wędka szefa', 'Na karasie', 127.42, 'jpg_318-1831.jpg', 3),
(3, 'xxx', 'x1', 123, 'jpg_318-1831.jpg', 3),
(4, 'Wędka', 'x2', 123, 'Baza.png', 3);

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
  `permission` text COLLATE utf8_polish_ci NOT NULL DEFAULT '\'user\''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `email`, `name`, `surname`, `permission`) VALUES
(2, 'luk1', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'xxx@gmail.com', 'Lukas', 'Raczka', 'user'),
(3, 'Jasiu1', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '123@gmail.com', 'Jan', 'Kowalski', 'user');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `galeria_zdobyczy`
--
ALTER TABLE `galeria_zdobyczy`
  ADD KEY `fkey_galeria_uzytkownicy` (`id_autora`);

--
-- Indeksy dla tabeli `ogloszenia`
--
ALTER TABLE `ogloszenia`
  ADD KEY `fkey_ogloszenia_uzytkownicy` (`id_autora`);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `produkty_aukcje`
--
ALTER TABLE `produkty_aukcje`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT dla tabeli `produkty_sklep`
--
ALTER TABLE `produkty_sklep`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
