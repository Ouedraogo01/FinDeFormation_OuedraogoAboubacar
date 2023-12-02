-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 02 déc. 2023 à 00:46
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projetsite`
--

-- --------------------------------------------------------

--
-- Structure de la table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'OUEDRAOGO Aboubacar', 'abouodra18@gmail.com', NULL, '$2y$10$GPssshHzSp6QbMumgOk.s.sE8APmoXca4q.7pFmjrFn.0y34fgLM.', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `chambres`
--

CREATE TABLE `chambres` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `prix` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `ville_id` bigint(20) UNSIGNED NOT NULL,
  `hotele_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `chambres`
--

INSERT INTO `chambres` (`id`, `type`, `description`, `prix`, `image`, `ville_id`, `hotele_id`, `created_at`, `updated_at`) VALUES
(1, 'chambre standard', '1 lit double + piscine + salle de bain', '$150.00', '1701329292.jpg', 2, 3, '2023-11-30 07:28:12', '2023-11-30 07:28:12'),
(2, 'chambre vip', 'chambre vip pour vos voyages d\'affaires', '$200.00', '1701334872.jpg', 2, 2, '2023-11-30 09:01:13', '2023-11-30 09:01:13'),
(3, 'chambre double standard', 'chambre salon bien équipée pour vous', '$300.00', '1701335232.jpg', 3, 9, '2023-11-30 09:07:12', '2023-11-30 09:07:12'),
(4, 'chambre simple standard', 'chambre salon bien équipée pour vous', '$150.00', '1701335316.jpg', 1, 4, '2023-11-30 09:08:36', '2023-11-30 09:08:36'),
(5, 'chambre vip', 'chambre vip pour vos voyages d\'affaires', '$300.00', '1701384474.jpg', 1, 4, '2023-11-30 22:47:54', '2023-11-30 22:47:54'),
(6, 'chambre double standard', 'chambre pour vos séjours en famille', '$320.00', '1701384553.jpg', 1, 4, '2023-11-30 22:49:13', '2023-11-30 22:49:13'),
(7, 'chambre standard + salon vip', 'chambre vip pour vos voyages d\'affaires', '$150.00', '1701430507.jpg', 2, 3, '2023-12-01 11:35:08', '2023-12-01 11:35:08'),
(8, 'chambre simple standard', 'chambre salon bien équipée pour vous', '$200.00', '1701430626.jpg', 2, 3, '2023-12-01 11:37:06', '2023-12-01 11:37:06'),
(9, 'chambre double standard', 'chambre vip pour vos voyages d\'affaires', '$250.00', '1701430709.jpg', 2, 3, '2023-12-01 11:38:29', '2023-12-01 11:38:29'),
(10, 'chambre double standard', 'chambre salon bien équipée pour vous', '$200.00', '1701431467.jpg', 2, 2, '2023-12-01 11:51:07', '2023-12-01 11:51:07'),
(11, 'chambre standard', 'chambre pour vos séjours en famille', '$150.00', '1701431568.jpg', 2, 2, '2023-12-01 11:52:48', '2023-12-01 11:52:48'),
(12, 'chambre double standard', 'meilleur pour un séjour en amoureux', '$300.00', '1701431617.jpg', 2, 2, '2023-12-01 11:53:37', '2023-12-01 11:53:37'),
(13, 'chambre vip', 'chambre vip pour vos voyages d\'affaires', '$150.00', '1701431658.jpg', 2, 1, '2023-12-01 11:54:18', '2023-12-01 11:54:18'),
(14, 'chambre double standard', 'chambre salon bien équipée pour vous', '$100.00', '1701431705.jpg', 2, 1, '2023-12-01 11:55:05', '2023-12-01 11:55:05'),
(15, 'chambre standard', '1 lit double + piscine + salle de bain', '$150.00', '1701431743.jpg', 2, 1, '2023-12-01 11:55:44', '2023-12-01 11:55:44'),
(16, 'chambre simple standard', 'meilleur pour un séjour en amoureux', '$200.00', '1701431774.jpg', 2, 1, '2023-12-01 11:56:14', '2023-12-01 11:56:14'),
(17, 'chambre standard', '1 lit double + piscine + salle de bain', '$150.00', '1701431841.jpg', 1, 4, '2023-12-01 11:57:21', '2023-12-01 11:57:21'),
(18, 'chambre standard', '1 lit double + piscine + salle de bain', '$150.00', '1701431912.jpg', 1, 5, '2023-12-01 11:58:32', '2023-12-01 11:58:32'),
(19, 'chambre vip', 'chambre vip pour vos voyages d\'affaires', '$200.00', '1701431935.jpg', 1, 5, '2023-12-01 11:58:55', '2023-12-01 11:58:55'),
(20, 'chambre double standard', 'chambre salon bien équipée pour vous', '$320.00', '1701431969.jpg', 1, 5, '2023-12-01 11:59:29', '2023-12-01 11:59:29'),
(21, 'chambre simple standard', 'chambre pour vos séjours en famille', '$250.00', '1701432005.jpg', 1, 5, '2023-12-01 12:00:05', '2023-12-01 12:00:05'),
(22, 'chambre vip', 'chambre vip pour vos voyages d\'affaires', '$150.00', '1701432050.jpg', 1, 6, '2023-12-01 12:00:50', '2023-12-01 12:00:50'),
(23, 'chambre double standard', 'chambre salon bien équipée pour vous', '$300.00', '1701432102.jpg', 1, 6, '2023-12-01 12:01:42', '2023-12-01 12:01:42'),
(24, 'chambre standard', '1 lit double + piscine + salle de bain', '$200.00', '1701432151.jpg', 1, 6, '2023-12-01 12:02:31', '2023-12-01 12:02:31'),
(25, 'chambre double standard', 'meilleur pour un séjour en amoureux', '$100.00', '1701432183.jpg', 1, 6, '2023-12-01 12:03:03', '2023-12-01 12:03:03'),
(26, 'chambre vip', 'chambre vip pour vos voyages d\'affaires', '$150.00', '1701433151.jpg', 3, 9, '2023-12-01 12:19:12', '2023-12-01 12:19:12'),
(27, 'chambre simple standard', '1 lit double + piscine + salle de bain', '$200.00', '1701433187.jpg', 3, 9, '2023-12-01 12:19:47', '2023-12-01 12:19:47'),
(28, 'chambre standard', 'chambre pour vos séjours en famille', '$180.00', '1701433229.jpg', 3, 9, '2023-12-01 12:20:29', '2023-12-01 12:20:29'),
(29, 'chambre standard', 'meilleur pour un séjour en amoureux', '$150.00', '1701433269.jpg', 3, 8, '2023-12-01 12:21:09', '2023-12-01 12:21:09'),
(30, 'chambre vip', 'chambre vip pour vos voyages d\'affaires', '$300.00', '1701433306.jpg', 3, 8, '2023-12-01 12:21:46', '2023-12-01 12:21:46'),
(31, 'chambre double standard', 'chambre salon bien équipée pour vous', '$200.00', '1701433340.jpg', 3, 8, '2023-12-01 12:22:20', '2023-12-01 12:22:20'),
(32, 'chambre simple standard', '1 lit double + piscine + salle de bain', '$300.00', '1701433371.jpg', 3, 8, '2023-12-01 12:22:51', '2023-12-01 12:22:51'),
(33, 'chambre simple standard', 'meilleur pour un séjour en amoureux', '$150.00', '1701433446.jpg', 3, 7, '2023-12-01 12:24:06', '2023-12-01 12:24:06'),
(34, 'chambre vip', 'chambre vip pour vos voyages d\'affaires', '$300.00', '1701433511.jpg', 3, 7, '2023-12-01 12:25:11', '2023-12-01 12:25:11'),
(35, 'chambre double standard', 'chambre salon bien équipée pour vous', '$200.00', '1701433533.jpg', 3, 7, '2023-12-01 12:25:33', '2023-12-01 12:25:33'),
(36, 'chambre standard', 'meilleur pour un séjour en amoureux', '$150.00', '1701433560.jpg', 3, 7, '2023-12-01 12:26:00', '2023-12-01 12:26:00');

-- --------------------------------------------------------

--
-- Structure de la table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `message`, `created_at`, `updated_at`) VALUES
(1, 'OUEDRAOGO Aboubacar', 'abouodra@gmail.com', 'je suis là', '2023-11-23 15:18:25', '2023-11-23 15:18:25'),
(3, 'OUEDRAOGO Aboubacar', 'abouodra@gmail.com', 'ok', '2023-11-29 11:53:04', '2023-11-29 11:53:04');

-- --------------------------------------------------------

--
-- Structure de la table `hoteles`
--

CREATE TABLE `hoteles` (
  `id` int(10) UNSIGNED NOT NULL,
  `nom` varchar(255) NOT NULL,
  `localisation` varchar(255) NOT NULL,
  `small` varchar(255) NOT NULL,
  `bouton` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `ville_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `hoteles`
--

INSERT INTO `hoteles` (`id`, `nom`, `localisation`, `small`, `bouton`, `photo`, `ville_id`, `created_at`, `updated_at`) VALUES
(1, 'Bravia hôtel', 'Ouagadougou Burkina Faso', 'Bravia hôtel', '/brav', '1701309680.jpg', 2, '2023-11-30 02:01:20', '2023-11-30 02:01:20'),
(2, 'Hôtel Silmande', 'Ouagadougou Burkina Faso', 'HOTEL SILMANDE', '/silmand', '1701309816.jpg', 2, '2023-11-30 02:03:36', '2023-11-30 02:03:36'),
(3, 'Lancastar Hôtel', 'Ouagadougou Burkina Faso', 'Lancastar Hôtel', '/lancasta', '1701309876.jpg', 2, '2023-11-30 02:04:36', '2023-11-30 02:04:36'),
(4, 'IBA HOTEL', 'Bobo-dioulasso Burkina Faso', 'IBA HOTEL', '/ibah', '1701309906.jpg', 1, '2023-11-30 02:05:06', '2023-11-30 02:05:06'),
(5, 'saby Hôtel', 'Bobo-dioulasso Burkina Faso', 'SABY HÔTEL', '/sabi', '1701309962.jpg', 1, '2023-11-30 02:06:02', '2023-11-30 02:06:02'),
(6, 'Pacific Hôtel', 'Bobo-dioulasso Burkina Faso', 'PACIFIC HÔTEL', '/pacifi', '1701310011.jpg', 1, '2023-11-30 02:06:51', '2023-11-30 02:06:51'),
(7, 'Dima Hôtel', 'Koudougou Burkina Faso', 'DIMA HÔTEL', '/dim', '1701310065.jpg', 3, '2023-11-30 02:07:45', '2023-11-30 02:07:45'),
(8, 'Pousga Hôtel', 'Koudougou Burkina Faso', 'POUSGA HÔTEL', '/pous', '1701310123.jpg', 3, '2023-11-30 02:08:43', '2023-11-30 02:08:43'),
(9, 'SPLENDID HOTEL', 'Koudougou Burkina Faso', 'SPLENDID HOTEL', '/splendid', '1701310207.jpg', 3, '2023-11-30 02:10:07', '2023-11-30 02:10:07');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2023_11_07_172827_create_contacts_table', 1),
(4, '2023_11_07_204107_create_admins_table', 1),
(10, '2023_11_21_110122_create_chambres_table', 6),
(11, '2023_11_22_151112_create_hoteles_table', 6),
(12, '2023_11_30_004111_create_villes_table', 6),
(13, '2023_11_22_225052_create_reservations_table', 7),
(14, '2023_12_01_165835_add_statut_to_reservation', 8);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `reservations`
--

CREATE TABLE `reservations` (
  `id` int(10) UNSIGNED NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `dateArriver` date NOT NULL,
  `dateDepart` date NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `chambre_id` bigint(20) UNSIGNED NOT NULL,
  `hotele_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `statut` varchar(255) NOT NULL DEFAULT 'en_attente'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `reservations`
--

INSERT INTO `reservations` (`id`, `nom`, `prenom`, `dateArriver`, `dateDepart`, `user_id`, `chambre_id`, `hotele_id`, `created_at`, `updated_at`, `statut`) VALUES
(5, 'KABORE', 'Adama', '2023-12-10', '2023-12-02', 5, 21, 4, '2023-12-01 17:41:57', '2023-12-01 19:27:33', 'approuvé'),
(6, 'KONE', 'Abibat', '2023-12-10', '2023-12-15', 5, 25, 4, '2023-12-01 19:20:58', '2023-12-01 19:28:37', 'approuvé'),
(7, 'KONATE', 'Adama', '2023-12-16', '2024-01-06', 2, 21, 4, '2023-12-01 20:08:58', '2023-12-01 20:09:48', 'approuvé');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Aboubacar', 'abou@gmail.com', NULL, '$2y$10$e5PI.CmoXNSB/ccDZuJlmea5sS.RZzbn7DWYc7LEkV.0kjvFF8uAO', 'vmAWZ5RSOG3189cpnDFM1BT9rlG3VokFdCDIADxsk3HxjBBiOqdWNhctWyK3', '2023-11-21 11:08:11', '2023-11-21 11:08:11'),
(2, 'Adama', 'adama@gmail.com', NULL, '$2y$10$xZU3/p9dw8o0j3J.cK.KouEQYMW3tggfvqjE/oe6barbGYKXCQqTa', 'd3tUFOxol1KZgPcYQyP0e5oYGWV7aMjbnaFW0UNE4oPLn2Yj63r5drFfLKVP', '2023-11-21 11:09:08', '2023-11-21 11:09:08'),
(3, 'Abdoul', 'abdoul@gmail.com', NULL, '$2y$10$/xzaCGnWFiZxY.H1.Boxr.FYMhnqrpuPPblRSEfScXalcrs6iz.lW', 'uD1jYdNJ3DWhhSZUPmlS8kxGaHsRRYleNKivgHRzuV0Exr31ijVjWyPPNf1j', '2023-11-23 15:20:16', '2023-11-23 15:20:16'),
(5, 'KABORE Adama', 'aboubacarouedraogo450@gmail.com', NULL, '$2y$10$HddhfRbg5q5kps5pHGlDe.x3kpRfVF8thlMeZPR3ksYb/p9wGmfce', NULL, '2023-12-01 17:40:48', '2023-12-01 17:40:48'),
(6, 'OUEDRAOGO Aboubacar', 'abouodra18@gmail.com', NULL, '$2y$10$GPssshHzSp6QbMumgOk.s.sE8APmoXca4q.7pFmjrFn.0y34fgLM.', 'jFPmzyvdwmCmSU6HUEnbhodlEN0saEcE3CDC0CbuxohaBSivvcmZYQylIoHx', '2023-12-01 19:41:38', '2023-12-01 19:41:38');

-- --------------------------------------------------------

--
-- Structure de la table `villes`
--

CREATE TABLE `villes` (
  `id` int(10) UNSIGNED NOT NULL,
  `nom` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `bouton` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `villes`
--

INSERT INTO `villes` (`id`, `nom`, `photo`, `bouton`, `created_at`, `updated_at`) VALUES
(1, 'Bobo-Dioulasso', '1701308343.jpg', '/bobo', '2023-11-30 01:39:03', '2023-11-30 01:39:03'),
(2, 'Ouagadougou', '1701308456.jpg', '/ouaga', '2023-11-30 01:40:56', '2023-11-30 01:40:56'),
(3, 'Koudougou', '1701308521.jpg', '/koudougou', '2023-11-30 01:42:01', '2023-11-30 01:42:01');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Index pour la table `chambres`
--
ALTER TABLE `chambres`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `hoteles`
--
ALTER TABLE `hoteles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Index pour la table `villes`
--
ALTER TABLE `villes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `chambres`
--
ALTER TABLE `chambres`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT pour la table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `hoteles`
--
ALTER TABLE `hoteles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `villes`
--
ALTER TABLE `villes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
