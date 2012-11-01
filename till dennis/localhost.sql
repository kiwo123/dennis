-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Värd: localhost
-- Skapad: 02 okt 2012 kl 13:27
-- Serverversion: 5.5.25
-- PHP-version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databas: `bloggen`
--
CREATE DATABASE `bloggen` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bloggen`;

-- --------------------------------------------------------

--
-- Tabellstruktur `bloggcontent`
--

CREATE TABLE `bloggcontent` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `namn` varchar(25) NOT NULL,
  `efternamn` varchar(25) NOT NULL,
  `kategori` varchar(12) NOT NULL,
  `content` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumpning av Data i tabell `bloggcontent`
--

INSERT INTO `bloggcontent` (`id`, `namn`, `efternamn`, `kategori`, `content`) VALUES
(1, 'kevin', 'thulin', 'skitsnack', 'blabla bla bla'),
(2, 'leroy', 'redneck', 'blandat', 'test test testtest'),
(3, 'kaj', 'testsson', 'random', 'min blogpost'),
(4, 'kalle', 'balle', 'skitsnack', 'hejsan test'),
(5, 'mac', 'apple', 'random', 'hej'),
(6, 'Leeeeeeroy', 'JEEEENKINGS', 'random', 'LEEEEEEROY JEEEEENKINGS!'),
(7, 'General', 'White', 'skitsnack', 'Snus och kaffe Ã¤r gott!');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
