-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 02 Kwi 2022, 14:00
-- Wersja serwera: 10.4.22-MariaDB
-- Wersja PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `be15_cr12_travelagency_adrian`
--
CREATE DATABASE IF NOT EXISTS `be15_cr12_travelagency_adrian` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `be15_cr12_travelagency_adrian`;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `places`
--

CREATE TABLE `places` (
  `id` int(11) NOT NULL,
  `locationName` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `description` varchar(500) NOT NULL,
  `longitude` decimal(10,8) NOT NULL,
  `latitude` decimal(11,8) NOT NULL,
  `picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `places`
--

INSERT INTO `places` (`id`, `locationName`, `price`, `description`, `longitude`, `latitude`, `picture`) VALUES
(1, 'Spain - Barcelona', 658, 'Very good price for a 7 days trip to Spain. See the hot country in the Barcelona city with All inclusive stuff and wonderful sighting.', '2.16836500', '41.34617600', '6247851353d14.jpg'),
(2, 'Italy - Venice', 550, 'City for lovers! Only now the special price for trip to Southeuropean contry for couples.', '12.32714500', '45.43875900', '6247895acaa31.jpg'),
(3, 'Italy - Roma', 475, 'Lovely and beautiful city with long history. Go now with special extra price to visit Rome!', '12.49636600', '41.90278200', '62478c61c0422.jpg'),
(4, 'France - Paris', 720, 'Welcome to the city of love! 7 days all inclusive with nice view to the city!', '2.34901400', '48.86471600', '62479640a8c46.jpg'),
(5, 'Warsaw - Poland', 350, 'Half-Modern and half-historical city. It is nice try to know polish culture and try polish cusine.', '21.01753200', '52.23704900', '624797ae39909.jpg'),
(6, 'Split - Croatia', 520, 'Sun, food, sea - nice oportunity to relax! Do not wait and buy a ticket!', '16.44019300', '43.50813300', '62479932a5c16.jpg'),
(7, 'England - London', 385, 'Not so much rain and not so much sun. If you like sighting the city and looking for a queen, it is a good time to go to London!', '-0.11809200', '51.50986500', '62479a6d5a173.jpg'),
(8, 'Cuba - Havana', 920, 'Havana, this is Cuba! Time to visit a sunny country with a lot of special coultur and food! Do not wait!', '-82.36659200', '23.11359200', '62479b603dd3a.jpg'),
(9, 'Unated States - New York', 1025, 'New York the city of art and people from around the world. You can find there everything and lern about history about this country. ', '-73.93524200', '40.73061000', '62479c9d064b2.jpg'),
(10, 'New Zeland - Wellington', 410, 'Do you want to see nice island? Try and go for a trip to New Zeland, meet the capital Wellington!', '74.77796900', '-41.27682500', '62479d8d1aaf9.jpg');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `places`
--
ALTER TABLE `places`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
