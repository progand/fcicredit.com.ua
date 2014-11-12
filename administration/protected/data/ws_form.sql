-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb2+deb7u1
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Час створення: Лис 12 2014 р., 13:04
-- Версія сервера: 5.5.40
-- Версія PHP: 5.4.34-0+deb7u1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- БД: `u52_fc_credit_com_ua`
--

-- --------------------------------------------------------

--
-- Структура таблиці `ws_form`
--

CREATE TABLE IF NOT EXISTS `ws_form` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `last_edit` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `product_type` varchar(255) NOT NULL,
  `requested_ammount` varchar(255) NOT NULL,
  `currency_code` varchar(50) NOT NULL,
  `term_string` varchar(255) NOT NULL,
  `contact_phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact_time_string` varchar(255) NOT NULL,
  `visitor_ip` varchar(255) NOT NULL,
  `source_url` varchar(255) NOT NULL,
  `agent_code` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=Aria DEFAULT CHARSET=utf8 PAGE_CHECKSUM=1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
