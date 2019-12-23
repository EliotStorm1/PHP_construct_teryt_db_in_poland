-- phpMyAdmin SQL Dump
-- version 3.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Czas wygenerowania: 12 Kwi 2011, 11:51
-- Wersja serwera: 5.0.84
-- Wersja PHP: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Baza danych: `teryt`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla  `simc`
--

CREATE TABLE IF NOT EXISTS `simc` (
  `id` int(11) NOT NULL auto_increment,
  `woj` varchar(2) NOT NULL,
  `pow` varchar(2) NOT NULL,
  `gmi` varchar(2) NOT NULL,
  `rodz_gmi` int(11) NOT NULL,
  `rm` varchar(2) NOT NULL,
  `mz` int(11) NOT NULL,
  `nazwa` varchar(50) NOT NULL,
  `sym` varchar(8) NOT NULL,
  `sympod` varchar(8) NOT NULL,
  `stan_na` date NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `woj` (`woj`),
  KEY `pow` (`pow`),
  KEY `gmi` (`gmi`),
  KEY `nazwa` (`nazwa`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktura tabeli dla  `terc`
--

CREATE TABLE IF NOT EXISTS `terc` (
  `id` int(11) NOT NULL auto_increment,
  `woj` varchar(2) NOT NULL,
  `pow` varchar(2) NOT NULL,
  `gmi` varchar(2) NOT NULL,
  `rodz` varchar(11) NOT NULL,
  `nazwa` varchar(100) NOT NULL,
  `nazdod` varchar(100) NOT NULL,
  `stan_na` date NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `woj` (`woj`),
  KEY `pow` (`pow`),
  KEY `gmi` (`gmi`),
  KEY `rodz` (`rodz`),
  KEY `nazwa` (`nazwa`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktura tabeli dla  `ulic`
--

CREATE TABLE IF NOT EXISTS `ulic` (
  `id` int(11) NOT NULL auto_increment,
  `woj` varchar(2) NOT NULL,
  `pow` varchar(2) NOT NULL,
  `gmi` varchar(2) NOT NULL,
  `rodz_gmi` smallint(6) NOT NULL,
  `sym` varchar(10) NOT NULL,
  `sym_ul` varchar(10) NOT NULL,
  `cecha` varchar(10) NOT NULL,
  `nazwa_1` varchar(100) NOT NULL,
  `nazwa_2` varchar(100) NOT NULL,
  `stan_na` date NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `woj` (`woj`),
  KEY `pow` (`pow`),
  KEY `gmi` (`gmi`),
  KEY `rodz_gmi` (`rodz_gmi`),
  KEY `sym` (`sym`),
  KEY `sym_ul` (`sym_ul`),
  KEY `nazwa_1` (`nazwa_1`),
  KEY `nazwa_2` (`nazwa_2`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktura tabeli dla  `wmrodz`
--

CREATE TABLE IF NOT EXISTS `wmrodz` (
  `id` int(11) NOT NULL auto_increment,
  `rm` varchar(2) NOT NULL,
  `nazwa_rm` varchar(50) NOT NULL,
  `stan_na` date NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;
