-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 10. Nov 2021 um 15:37
-- Server-Version: 10.4.21-MariaDB
-- PHP-Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `db_restaurant`
--
CREATE DATABASE IF NOT EXISTS `db_restaurant` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `db_restaurant`;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `beverages`
--

CREATE TABLE `beverages` (
  `bev_id` int(3) NOT NULL,
  `image` text DEFAULT NULL,
  `name` varchar(50) NOT NULL,
  `price` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `beverages`
--

INSERT INTO `beverages` (`bev_id`, `image`, `name`, `price`) VALUES
(1, 'https://images.pexels.com/photos/405238/pexels-photo-405238.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940', 'The first beverage', 3),
(2, 'https://images.pexels.com/photos/814264/pexels-photo-814264.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940', 'The second beverage', 2),
(3, 'https://images.pexels.com/photos/374885/pexels-photo-374885.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'The third beverage', 3);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `dishes`
--

CREATE TABLE `dishes` (
  `dish_id` int(3) NOT NULL,
  `image` text DEFAULT NULL,
  `name` varchar(80) NOT NULL,
  `price` int(3) NOT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `dishes`
--

INSERT INTO `dishes` (`dish_id`, `image`, `name`, `price`, `description`) VALUES
(1, 'https://images.pexels.com/photos/5865282/pexels-photo-5865282.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940', 'The first dish!', 5, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, totam.'),
(2, 'https://images.pexels.com/photos/5865282/pexels-photo-5865282.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940', 'This is dish 2', 8, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Text 2'),
(3, 'https://images.pexels.com/photos/4629324/pexels-photo-4629324.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500', 'The third dish!', 7, 'Text 3: Lorem ipsum dolor sit amet consectetur adipisicing elit. ');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `beverages`
--
ALTER TABLE `beverages`
  ADD PRIMARY KEY (`bev_id`);

--
-- Indizes für die Tabelle `dishes`
--
ALTER TABLE `dishes`
  ADD PRIMARY KEY (`dish_id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `beverages`
--
ALTER TABLE `beverages`
  MODIFY `bev_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT für Tabelle `dishes`
--
ALTER TABLE `dishes`
  MODIFY `dish_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
