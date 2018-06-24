-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Φιλοξενητής: localhost
-- Χρόνος δημιουργίας: 24 Ιουν 2018 στις 19:48:24
-- Έκδοση διακομιστή: 5.5.58-0ubuntu0.14.04.1
-- Έκδοση PHP: 5.5.9-1ubuntu4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Βάση: `easybank`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `accounts`
--

CREATE TABLE IF NOT EXISTS `accounts` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `date_opened` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `currency` varchar(16) NOT NULL,
  `email` varchar(64) NOT NULL,
  `lastname` varchar(64) NOT NULL,
  `firstname` varchar(32) NOT NULL,
  `account_no` varchar(16) NOT NULL,
  `IBAN` varchar(32) NOT NULL,
  `limit_per_day_transfer` varchar(10) NOT NULL,
  `over_transfer` varchar(10) NOT NULL,
  `amounts_transferred` varchar(10) NOT NULL,
  `amounts_from_reserve` varchar(5) NOT NULL,
  `amounts_from_you` varchar(10) NOT NULL,
  `amounts_from_others` varchar(10) NOT NULL,
  `total_balance` varchar(10) NOT NULL,
  `account_statement` varchar(8) NOT NULL,
  `i_code` varchar(4) NOT NULL,
  `i_code_time` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `account_no` (`account_no`),
  UNIQUE KEY `IBAN` (`IBAN`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(32) NOT NULL,
  `lastname` varchar(32) NOT NULL,
  `date_of_birth` varchar(16) NOT NULL,
  `id_document_number` varchar(64) NOT NULL,
  `mobile_area_code` varchar(4) NOT NULL,
  `mobile_number` varchar(10) NOT NULL,
  `email` varchar(64) NOT NULL,
  `password` varchar(32) NOT NULL,
  `pin` varchar(4) NOT NULL,
  `account_number` varchar(16) NOT NULL,
  `IBAN` varchar(32) NOT NULL,
  `publishable_key_stripe` varchar(64) NOT NULL,
  `secret_key_stripe` varchar(64) NOT NULL,
  `nationality` varchar(32) NOT NULL,
  `country` varchar(16) NOT NULL,
  `town_city` varchar(16) NOT NULL,
  `street` varchar(16) NOT NULL,
  `street_number` varchar(8) NOT NULL,
  `post_code` varchar(16) NOT NULL,
  `tax_residence` varchar(16) NOT NULL,
  `tax_id_number` varchar(16) NOT NULL,
  `identity_front_name` varchar(64) NOT NULL,
  `identity_front_type` varchar(32) NOT NULL DEFAULT 'text/plain',
  `identity_front_size` bigint(20) NOT NULL,
  `identity_front_data` longblob NOT NULL,
  `identity_back_name` varchar(64) NOT NULL,
  `identity_back_type` varchar(32) NOT NULL DEFAULT 'text/plain',
  `identity_back_size` bigint(20) NOT NULL,
  `identity_back_data` longblob NOT NULL,
  `account_type` varchar(8) NOT NULL,
  `instant_register` varchar(16) NOT NULL,
  `ip_instant_register` varchar(16) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `account_number` (`account_number`),
  UNIQUE KEY `iban` (`IBAN`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `easybank_all_reserves`
--

CREATE TABLE IF NOT EXISTS `easybank_all_reserves` (
  `EASY_BANK_ID` varchar(14) NOT NULL,
  `TOTAL_RESERVE` varchar(8) NOT NULL,
  UNIQUE KEY `easy_bank_ID` (`EASY_BANK_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `easybank_reserve_currency`
--

CREATE TABLE IF NOT EXISTS `easybank_reserve_currency` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_transfer` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `_from_customer_lastname` varchar(64) NOT NULL,
  `_from_customer_firstname` varchar(32) NOT NULL,
  `_from_customer_IBAN` varchar(34) NOT NULL,
  `_to_customer_lastname` varchar(64) NOT NULL,
  `_to_customer_firstname` varchar(32) NOT NULL,
  `_to_customer_IBAN` varchar(34) NOT NULL,
  `transaction_number` varchar(16) NOT NULL,
  `amount_reserve` varchar(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `notifications`
--

CREATE TABLE IF NOT EXISTS `notifications` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `email` varchar(64) NOT NULL,
  `lastname` varchar(64) NOT NULL,
  `firstname` varchar(32) NOT NULL,
  `title` varchar(32) NOT NULL,
  `message` varchar(1024) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=106 ;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `card_num` bigint(20) NOT NULL,
  `card_cvc` int(5) NOT NULL,
  `card_exp_month` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `card_exp_year` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `item_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `item_number` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `item_price` float(10,2) NOT NULL,
  `item_price_currency` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'usd',
  `paid_amount` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `paid_amount_currency` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `txn_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `payment_status` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `transactions_all`
--

CREATE TABLE IF NOT EXISTS `transactions_all` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `date_transfer` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `_from_customer_lastname` varchar(64) NOT NULL,
  `_from_customer_firstname` varchar(32) NOT NULL,
  `_from_customer_accno_iban` varchar(32) NOT NULL,
  `_to_customer_lastname` varchar(64) NOT NULL,
  `_to_customer_firstname` varchar(32) NOT NULL,
  `_to_customer_accno_iban` varchar(32) NOT NULL,
  `reason` varchar(255) NOT NULL,
  `transaction_number` varchar(16) NOT NULL,
  `amount` varchar(8) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `transaction number` (`transaction_number`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `transactions_anyone_bank`
--

CREATE TABLE IF NOT EXISTS `transactions_anyone_bank` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `date_transfer` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `_from_customer_lastname` varchar(64) NOT NULL,
  `_from_customer_firstname` varchar(32) NOT NULL,
  `_from_customer_IBAN` varchar(32) NOT NULL,
  `_to_customer_lastname` varchar(64) NOT NULL,
  `_to_customer_firstname` varchar(32) NOT NULL,
  `_to_customer_IBAN` varchar(32) NOT NULL,
  `reason` varchar(255) NOT NULL,
  `transaction_number` varchar(16) NOT NULL,
  `amount_from_reserve` varchar(1) NOT NULL,
  `amount` varchar(8) NOT NULL,
  `total_amount` varchar(8) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `transaction number` (`transaction_number`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=89 ;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `transactions_easy_bank`
--

CREATE TABLE IF NOT EXISTS `transactions_easy_bank` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `date_transfer` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `_from_customer_lastname` varchar(64) NOT NULL,
  `_from_customer_firstname` varchar(32) NOT NULL,
  `_from_customer_account_no` varchar(32) NOT NULL,
  `_to_customer_lastname` varchar(64) NOT NULL,
  `_to_customer_firstname` varchar(32) NOT NULL,
  `_to_customer_account_no` varchar(32) NOT NULL,
  `reason` varchar(255) NOT NULL,
  `transaction_number` varchar(16) NOT NULL,
  `amount` varchar(8) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `transaction number` (`transaction_number`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=111 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
