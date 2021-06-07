-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Εξυπηρετητής: 127.0.0.1
-- Χρόνος δημιουργίας: 07 Ιουν 2021 στις 14:38:39
-- Έκδοση διακομιστή: 10.4.18-MariaDB
-- Έκδοση PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Βάση δεδομένων: `webhotel`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `hotels`
--

CREATE TABLE `hotels` (
  `id` int(11) NOT NULL,
  `hotel_name` varchar(50) NOT NULL,
  `county` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `rooms` varchar(50) NOT NULL,
  `pic` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Άδειασμα δεδομένων του πίνακα `hotels`
--

INSERT INTO `hotels` (`id`, `hotel_name`, `county`, `address`, `phone`, `rooms`, `pic`) VALUES
(1, 'Sunset Hotel', 'Chalkidikis', 'Agiou Dimitriou 3', '2410333555', '10', 'pics/Sunset.jpg'),
(2, 'Dawn Hotel', 'Magnisias', 'Verdansk 5', '2410333423', '50', 'pics/Dawn.jpg');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL DEFAULT '0',
  `last_name` varchar(255) NOT NULL DEFAULT '0',
  `email` varchar(255) NOT NULL DEFAULT '0',
  `password` varchar(255) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `members`
--

INSERT INTO `members` (`id`, `first_name`, `last_name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(2, 'chris', 'zervas', 'chriszervas@gmail.com', '$2y$04$t7Mp2Lxwxh3xpjkbI49pCu4269Wz8rhvDtFbbJJQ4.6V5SmUSYjeS', '2021-02-05 16:45:33', '2021-02-05 16:45:33'),
(3, 'thanos', 'papadakis', 'thanospapadakis@gmail.com', '$2y$04$MiPuZJMuwzwEKxjqkMtF3O8ysIgeGx/ldo5CZMR/fqAn8zmNUo4U2', '2021-02-05 16:46:09', '2021-02-05 16:46:09'),
(5, 'takhs', 'pipas', 'takispipas@gmail.com', '$2y$04$AINjWMW4HWKPPErbSrQxyOyyfh8QkQSH3S4sEBE8nA5Qh0.cIS0Am', '2021-02-05 16:49:27', '2021-02-05 16:49:27'),
(6, 'mpamphs', 'tentas', 'mpamphstentas@gmail.com', '$2y$04$eHVKFNfLy6vtZg0HIt/dv.idTuLhkBGmLl.oK3lLxI6fKWb22TIYi', '2021-02-05 17:23:21', '2021-02-05 17:23:21'),
(7, 'zenia', 'zeni', 'zenia@gmail.com', '$2y$04$s0MQBMKJ17EYYGEwUR.X2eT9xQVyaxx/daW7P40aW.HeBDRfopd76', '2021-06-05 21:11:22', '2021-06-05 21:11:22');

--
-- Ευρετήρια για άχρηστους πίνακες
--

--
-- Ευρετήρια για πίνακα `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT για άχρηστους πίνακες
--

--
-- AUTO_INCREMENT για πίνακα `hotels`
--
ALTER TABLE `hotels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT για πίνακα `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
