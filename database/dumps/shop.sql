-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Erstellungszeit: 26. Jan 2022 um 14:49
-- Server-Version: 10.4.21-MariaDB
-- PHP-Version: 8.0.13

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `shop`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `blogs`
--

DROP TABLE IF EXISTS `blogs`;
CREATE TABLE `blogs` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `body` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `blogs`
--

INSERT IGNORE INTO `blogs` (`id`, `title`, `body`) VALUES
(1, 'Mein erster Blog', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sint modo partes vitae beatae. Hunc vos beatum; Qua tu etiam inprudens utebare non numquam. Tu quidem reddes; Si longus, levis dictata sunt. Duo Reges: constructio interrete. <br />\r\n<br />\r\nTu quidem reddes; Ea possunt paria non esse. Si quae forte-possumus. Est enim effectrix multarum et magnarum voluptatum. Non laboro, inquit, de nomine. Cave putes quicquam esse verius. <br />\r\n<br />\r\nDuo enim genera quae erant, fecit tria. Quid, de quo nulla dissensio est? Egone quaeris, inquit, quid sentiam? Quae sequuntur igitur? Ne in odium veniam, si amicum destitero tueri. Quod iam a me expectare noli. <br />\r\n<br />\r\nSed fac ista esse non inportuna; Et quod est munus, quod opus sapientiae? Summae mihi videtur inscitiae. Egone quaeris, inquit, quid sentiam? <br />\r\n<br />\r\nNegat esse eam, inquit, propter se expetendam. Omnia contraria, quos etiam insanos esse vultis. Unum est sine dolore esse, alterum cum voluptate. Falli igitur possumus. Et quidem, inquit, vehementer errat; Qui est in parvis malis.');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `categories`
--

INSERT IGNORE INTO `categories` (`id`, `name`) VALUES
(1, 'Fahrräder'),
(2, 'Rahmen');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `features`
--

DROP TABLE IF EXISTS `features`;
CREATE TABLE `features` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `body` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `features`
--

INSERT IGNORE INTO `features` (`id`, `title`, `body`) VALUES
(1, 'Neues Feature', 'alles super.');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `manufacturers`
--

DROP TABLE IF EXISTS `manufacturers`;
CREATE TABLE `manufacturers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `manufacturers`
--

INSERT IGNORE INTO `manufacturers` (`id`, `name`, `description`) VALUES
(1, 'Diamant', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eos veniam<br />\r\nsunt quam, nesciunt amet voluptatem doloremque vero, dolore a modi<br />\r\nconsequuntur dolorem? Est architecto nisi dolorem expedita ducimus<br />\r\nassumenda eligendi.'),
(2, 'Mifa', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eos veniam\r\nsunt quam, nesciunt amet voluptatem doloremque vero, dolore a modi\r\nconsequuntur dolorem? Est architecto nisi dolorem expedita ducimus\r\nassumenda eligendi.');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Daten für Tabelle `migrations`
--

INSERT IGNORE INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `pages`
--

DROP TABLE IF EXISTS `pages`;
CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `body` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `pages`
--

INSERT IGNORE INTO `pages` (`id`, `title`, `body`) VALUES
(1, 'About', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sint modo partes vitae beatae. Hunc vos beatum; Qua tu etiam inprudens utebare non numquam. Tu quidem reddes; Si longus, levis dictata sunt. Duo Reges: constructio interrete. <br />\r\nTu quidem reddes; Ea possunt paria non esse. Si quae forte-possumus. Est enim effectrix multarum et magnarum voluptatum. Non laboro, inquit, de nomine. Cave putes quicquam esse verius. <br />\r\nDuo enim genera quae erant, fecit tria. Quid, de quo nulla dissensio est? Egone quaeris, inquit, quid sentiam? Quae sequuntur igitur? Ne in odium veniam, si amicum destitero tueri. Quod iam a me expectare noli. <br />\r\nSed fac ista esse non inportuna; Et quod est munus, quod opus sapientiae? Summae mihi videtur inscitiae. Egone quaeris, inquit, quid sentiam? <br />\r\nNegat esse eam, inquit, propter se expetendam. Omnia contraria, quos etiam insanos esse vultis. Unum est sine dolore esse, alterum cum voluptate. Falli igitur possumus. Et quidem, inquit, veh.');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED DEFAULT NULL,
  `manufacturer_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `products`
--

INSERT IGNORE INTO `products` (`id`, `category_id`, `manufacturer_id`, `name`, `description`, `image`) VALUES
(1, 1, 1, 'Sportfahrrad 28 blau', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eos veniam sunt quam, \r\nnesciunt amet voluptatem doloremque vero, dolore a modi\r\nconsequuntur dolorem? \r\nEst architecto nisi dolorem expedita ducimus\r\nassumenda eligendi.', NULL),
(2, 1, 2, '26 Jugendfahrad gelb', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eos veniam<br />\r\nsunt quam, nesciunt amet voluptatem doloremque vero, dolore a modi<br />\r\nconsequuntur dolorem? Est architecto nisi dolorem expedita ducimus<br />\r\nassumenda eligendi.', 'nebel_steg.jpg'),
(6, 1, 1, 'Test 1', 'vxyvvxcvy', NULL),
(7, 1, 1, 'Test 2', 'vfgdfgdfgdf', NULL);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indizes für die Tabelle `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `manufacturers`
--
ALTER TABLE `manufacturers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indizes für die Tabelle `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indizes für die Tabelle `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indizes für die Tabelle `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD KEY `fk_products` (`manufacturer_id`);

--
-- Indizes für die Tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT für Tabelle `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT für Tabelle `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `features`
--
ALTER TABLE `features`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT für Tabelle `manufacturers`
--
ALTER TABLE `manufacturers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT für Tabelle `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT für Tabelle `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT für Tabelle `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT für Tabelle `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `fk_products` FOREIGN KEY (`manufacturer_id`) REFERENCES `manufacturers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
SET FOREIGN_KEY_CHECKS=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
