-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: db:3306
-- Gegenereerd op: 20 okt 2025 om 17:57
-- Serverversie: 11.8.3-MariaDB-ubu2404
-- PHP-versie: 8.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydatabase`
--
CREATE DATABASE IF NOT EXISTS `mydatabase` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_uca1400_ai_ci;
USE `mydatabase`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `menu`
--

CREATE TABLE `menu` (
  `naam` text NOT NULL,
  `ID` int(11) NOT NULL,
  `omschrijving` text NOT NULL,
  `prijs` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Gegevens worden geëxporteerd voor tabel `menu`
--

INSERT INTO `menu` (`naam`, `ID`, `omschrijving`, `prijs`) VALUES
('N1.', 2, 'Rund burger, smelt kaas special burger saus', 6),
('N2.', 3, 'Rund burger, smelt kaas, sla, tomaat, augurk, uitjes & special burger saus', 9),
('N3.', 4, '2x Rund burgers, smelt kaas, bacon, gekarameliseerde ui, sla, tomaat, augurk, pindakaas & special burger saus', 13),
('N4.', 7, '200gr, tartaat (medium rare), rucola, pijnboompitten, gekaramelisserde ui, & champignon peper saus', 13),
('N7.', 8, '1x kipfilet, 5% smeerkaas, sla, tomaa, uitjes, augurken & saus naar keuze', 7),
('N8.', 9, '2x Kipfilet, 5% smeerkaas, saus naar keuze', 7),
('N9.', 10, '2x Kipfilet, 5% smeerkaas, sla, tomaat, uitjes, augurken & saus naar keuze', 9);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `gebruikersnaam` text NOT NULL,
  `wachtwoord` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`id`, `gebruikersnaam`, `wachtwoord`) VALUES
(1, 'Goku', '$2y$10$KXl5VjRVGNM/ajds5WU5J.wtcgPJ.yCLT/CXDadtEoDTHlOAreJym');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`ID`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `menu`
--
ALTER TABLE `menu`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
