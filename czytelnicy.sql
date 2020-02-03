-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 03 Lut 2020, 19:09
-- Wersja serwera: 10.4.8-MariaDB
-- Wersja PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `biblioteka`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `czytelnicy`
--

CREATE TABLE `czytelnicy` (
  `ID` int(11) NOT NULL,
  `LOGIN` varchar(30) CHARACTER SET utf8 COLLATE utf8_polish_ci DEFAULT NULL,
  `HASLO` varchar(30) CHARACTER SET utf8 COLLATE utf8_polish_ci DEFAULT NULL,
  `IMIE` varchar(30) CHARACTER SET utf8 COLLATE utf8_polish_ci DEFAULT NULL,
  `NAZWISKO` varchar(30) CHARACTER SET utf8 COLLATE utf8_polish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `czytelnicy`
--

INSERT INTO `czytelnicy` (`ID`, `LOGIN`, `HASLO`, `IMIE`, `NAZWISKO`) VALUES
(1, 'jkowalski', 'jkowalski', 'Jan', 'Kowalski');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `czytelnicy`
--
ALTER TABLE `czytelnicy`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `czytelnicy`
--
ALTER TABLE `czytelnicy`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
