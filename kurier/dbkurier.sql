-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Cze 11, 2024 at 02:35 AM
-- Wersja serwera: 10.4.32-MariaDB
-- Wersja PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbkurier`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `przesylki`
--

CREATE TABLE `przesylki` (
  `id_przesylki` int(11) NOT NULL,
  `numer_przesylki` varchar(50) NOT NULL,
  `waga` int(11) NOT NULL,
  `rozmiar` varchar(11) NOT NULL,
  `imie_odbiorcy` varchar(50) NOT NULL,
  `nazwisko_odbiorcy` varchar(50) NOT NULL,
  `ulica` varchar(50) NOT NULL,
  `numer_domu` varchar(50) NOT NULL,
  `kod_pocztowy` int(11) NOT NULL,
  `miasto` varchar(50) NOT NULL,
  `numer_odbiorcy` int(9) NOT NULL,
  `status` varchar(50) NOT NULL,
  `data_nadania` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `przesylki`
--

INSERT INTO `przesylki` (`id_przesylki`, `numer_przesylki`, `waga`, `rozmiar`, `imie_odbiorcy`, `nazwisko_odbiorcy`, `ulica`, `numer_domu`, `kod_pocztowy`, `miasto`, `numer_odbiorcy`, `status`, `data_nadania`) VALUES
(1, 'PL66679891B11CB11062024', 5, 'S', 'Adam', 'Nowak', 'Nowa', '14', 40000, 'Katowice', 500299500, 'W drodze', '2024-06-11 02:21:37'),
(2, 'PL66679891B12CB11062024', 10, 'M', 'Jan', 'Kowalski', 'Stara', '5', 32300, 'Kraków', 500299501, 'Nadana', '2024-06-10 10:20:00'),
(3, 'PL66679891B13CB11062024', 3, 'S', 'Anna', 'Wiśniewska', 'Kwiatowa', '10', 55234, 'Warszawa', 500299502, 'Nadana', '2024-06-09 12:15:00'),
(4, 'PL66679891B14CB11062024', 7, 'L', 'Piotr', 'Wójcik', 'Leśna', '20', 77234, 'Katowice', 500299503, 'W drodze', '2024-06-08 09:30:00'),
(5, 'PL66679891B15CB11062024', 2, 'S', 'Karolina', 'Zielińska', 'Górna', '15', 41252, 'Poznań', 500299504, 'Nadana', '2024-06-07 14:45:00'),
(6, 'PL66679891B16CB11062024', 4, 'M', 'Marek', 'Lewandowski', 'Długa', '8', 23222, 'Wrocław', 500299505, 'Dostarczona', '2024-06-06 16:50:00');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownicy`
--

CREATE TABLE `uzytkownicy` (
  `id` int(11) NOT NULL,
  `login` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_number` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `uzytkownicy`
--

INSERT INTO `uzytkownicy` (`id`, `login`, `password`, `role`, `email`, `phone_number`) VALUES
(1, 'bartek123', 'asdasd', 'admin', 'bartek@gmail.com', 200299200),
(2, 'kuba3029', 'zasxxsaz', 'user', 'kubus123pl@gmail.com', 388299488),
(3, 'alicja2021', 'qwerty', 'user', 'alicja@gmail.com', 200299201),
(4, 'tomasz999', '123456', 'user', 'tomasz@gmail.com', 200299202),
(5, 'michal2022', 'passw0rd', 'admin', 'michal@gmail.com', 200299203),
(6, 'klaudia87', 'superpass', 'user', 'klaudia@gmail.com', 200299204),
(7, 'wojtek_k', 'letmein', 'user', 'wojtek@gmail.com', 200299205);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `przesylki`
--
ALTER TABLE `przesylki`
  ADD PRIMARY KEY (`id_przesylki`);

--
-- Indeksy dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `przesylki`
--
ALTER TABLE `przesylki`
  MODIFY `id_przesylki` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
