-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Cze 16, 2024 at 10:46 PM
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
  `id_uzytkownika` int(11) NOT NULL,
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

INSERT INTO `przesylki` (`id_przesylki`, `id_uzytkownika`, `numer_przesylki`, `waga`, `rozmiar`, `imie_odbiorcy`, `nazwisko_odbiorcy`, `ulica`, `numer_domu`, `kod_pocztowy`, `miasto`, `numer_odbiorcy`, `status`, `data_nadania`) VALUES
(24, 25, 'PL666F43DA7441E16062024', 25, 'S', 'Olaf', 'Nowakowski', 'Nowa', '14/2', 23399, 'Sosnowiec', 402300211, 'Nadana', '2024-06-16 21:58:18'),
(25, 26, 'PL666F4418D1F2A16062024', 24, 'L', 'Łukasz', 'Nowak', 'Łazienkowska', '14', 42099, 'Warszawa', 500299333, 'Nadana', '2024-06-16 21:59:20'),
(26, 27, 'PL666F4EBC655A716062024', 5, 'M', 'Michał', 'Styczeń', 'Wiosenna', '4/25', 94999, 'Toruń', 428399200, 'Nadana', '2024-06-16 22:44:44');

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
  `phone_number` int(9) NOT NULL,
  `kiedy_utworzono` datetime NOT NULL,
  `ostatnia_edycja` datetime DEFAULT NULL,
  `kto_edytowal` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `uzytkownicy`
--

INSERT INTO `uzytkownicy` (`id`, `login`, `password`, `role`, `email`, `phone_number`, `kiedy_utworzono`, `ostatnia_edycja`, `kto_edytowal`) VALUES
(25, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'admin@gmail.com', 500299200, '2024-06-16 21:57:00', '2024-06-16 21:57:39', 'admin'),
(26, 'bartek', '0bde667aa88e8832b61bf68c0d4e34a4', 'user', 'bartek@gmail.com', 402014299, '2024-06-16 21:58:54', '2024-06-16 22:00:04', 'admin'),
(27, 'jannowak', '24ee13b7167f6f3f42277f5c7b85e830', 'user', 'jannowak@gmail.com', 492940300, '2024-06-16 22:44:08', NULL, NULL);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `przesylki`
--
ALTER TABLE `przesylki`
  ADD PRIMARY KEY (`id_przesylki`),
  ADD KEY `id_uzytkownika` (`id_uzytkownika`);

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
  MODIFY `id_przesylki` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `przesylki`
--
ALTER TABLE `przesylki`
  ADD CONSTRAINT `przesylki_ibfk_1` FOREIGN KEY (`id_uzytkownika`) REFERENCES `uzytkownicy` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
