-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 31 Lip 2019, 22:42
-- Wersja serwera: 10.3.15-MariaDB
-- Wersja PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `data_base`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `account_marian`
--

CREATE TABLE `account_marian` (
  `id` int(11) NOT NULL,
  `firstname` text COLLATE utf8_polish_ci NOT NULL,
  `lastname` text COLLATE utf8_polish_ci NOT NULL,
  `email` text COLLATE utf8_polish_ci NOT NULL,
  `telephone` text COLLATE utf8_polish_ci NOT NULL,
  `content` text CHARACTER SET utf32 COLLATE utf32_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `account_marian`
--

INSERT INTO `account_marian` (`id`, `firstname`, `lastname`, `email`, `telephone`, `content`) VALUES
(1, 'Renata', 'Świstak', 'renata.swistak@gmail.com', '360030748', 'Malowanie pokoju');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `account_piotr`
--

CREATE TABLE `account_piotr` (
  `id` int(11) NOT NULL,
  `firstname` text COLLATE utf8_polish_ci NOT NULL,
  `lastname` text COLLATE utf8_polish_ci NOT NULL,
  `email` text COLLATE utf8_polish_ci NOT NULL,
  `telephone` text COLLATE utf8_polish_ci NOT NULL,
  `content` text CHARACTER SET utf32 COLLATE utf32_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `account_piotr`
--

INSERT INTO `account_piotr` (`id`, `firstname`, `lastname`, `email`, `telephone`, `content`) VALUES
(1, 'Sandra', 'Sokół', 'sandraa@gmail.com', '433244147', 'Wymiana instalacji elektrycznej');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `account_tadeusz`
--

CREATE TABLE `account_tadeusz` (
  `id` int(11) NOT NULL,
  `firstname` text COLLATE utf8_polish_ci NOT NULL,
  `lastname` text COLLATE utf8_polish_ci NOT NULL,
  `email` text COLLATE utf8_polish_ci NOT NULL,
  `telephone` text COLLATE utf8_polish_ci NOT NULL,
  `content` text CHARACTER SET utf32 COLLATE utf32_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `account_tadeusz`
--

INSERT INTO `account_tadeusz` (`id`, `firstname`, `lastname`, `email`, `telephone`, `content`) VALUES
(1, 'Marek', 'Twarożek', 'm.twarog@gmail.com', '330095900', 'Gipsowanie'),
(2, 'Konrad', 'Wetoruk', 'wet.konrad@gmail.com', '238497311', 'Remont łazienki'),
(3, 'Dominik', 'Szabla', 'szabladom@gmail.com', '541774251', 'Aranżacja kuchni');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` text COLLATE utf8_polish_ci NOT NULL,
  `password` text COLLATE utf8_polish_ci NOT NULL,
  `firstname` text COLLATE utf8_polish_ci NOT NULL,
  `lastname` text COLLATE utf8_polish_ci NOT NULL,
  `email` text COLLATE utf8_polish_ci NOT NULL,
  `telephone` text COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `firstname`, `lastname`, `email`, `telephone`) VALUES
(24, 'Tadeusz', 'e10adc3949ba59abbe56e057f20f883e', 'Tadeusz', 'Nowak', 'tadeusz.nowak@gmail.com', '654864239'),
(25, 'Marian', '6531401f9a6807306651b87e44c05751', 'Marian', 'Kowalski', 'kowalski.m@gmail.com', '987654321'),
(26, 'Piotr', '827ccb0eea8a706c4c34a16891f84e7b', 'Piotr', 'Przybył', 'p.przybyl@gmail.com', '123456789');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `account_marian`
--
ALTER TABLE `account_marian`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `account_piotr`
--
ALTER TABLE `account_piotr`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `account_tadeusz`
--
ALTER TABLE `account_tadeusz`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `account_marian`
--
ALTER TABLE `account_marian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT dla tabeli `account_piotr`
--
ALTER TABLE `account_piotr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT dla tabeli `account_tadeusz`
--
ALTER TABLE `account_tadeusz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT dla tabeli `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
