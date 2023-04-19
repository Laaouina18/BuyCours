-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 19 avr. 2023 à 16:55
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `buycours`
--

-- --------------------------------------------------------

--
-- Structure de la table `cours`
--

CREATE TABLE `cours` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `niveau` varchar(255) NOT NULL,
  `date_1` varchar(255) NOT NULL,
  `date_2` varchar(255) NOT NULL,
  `date_3` varchar(255) NOT NULL,
  `maitre_id` bigint(20) UNSIGNED NOT NULL,
  `matiere_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `cours`
--

INSERT INTO `cours` (`id`, `name`, `description`, `image`, `niveau`, `date_1`, `date_2`, `date_3`, `maitre_id`, `matiere_id`, `created_at`, `updated_at`, `status`) VALUES
(4, 'Kendall Wyatt', '2010', '1681483078.jpg', 'Sunt cumque soluta', '04-Oct-1993', '24-Dec-1986', '20-Aug-2001', 12, 8, '2023-04-14 14:37:58', '2023-04-14 14:37:58', NULL),
(5, 'Tatum Osborne', '1977', '1681483202.jpg', 'Velit facere archit', '15-Nov-2009', '14-Feb-1980', '30-Nov-1977', 11, 8, '2023-04-14 14:40:02', '2023-04-14 14:40:02', NULL),
(6, 'Basia Velez', '1998', '1681483228.jpg', 'Magna repudiandae cu', '01-Sep-1984', '14-Jul-1985', '16-Aug-2019', 11, 8, '2023-04-14 14:40:28', '2023-04-14 14:40:28', NULL),
(7, 'Phoebe Gallagher', '1999', '1681483260.jpg', 'Aut minim in quia om', '27-Mar-1971', '06-Apr-1987', '03-Jul-2010', 11, 8, '2023-04-14 14:41:00', '2023-04-14 14:41:00', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

CREATE TABLE `formation` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `niveau` varchar(255) NOT NULL,
  `date_1` date NOT NULL,
  `date_2` date NOT NULL,
  `maitre_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `formation`
--

INSERT INTO `formation` (`id`, `name`, `description`, `image`, `niveau`, `date_1`, `date_2`, `maitre_id`, `created_at`, `updated_at`, `status`) VALUES
(15, 'Emi Carlson', '1999', '1681483111.jpg', 'Numquam eligendi con', '1980-12-05', '1991-01-19', 12, '2023-04-14 14:38:31', '2023-04-14 14:38:31', NULL),
(16, 'Aline Stewart', '1973', '1681483135.jpg', 'Consequat Dolores i', '1970-03-23', '2017-07-29', 13, '2023-04-14 14:38:55', '2023-04-19 10:31:45', 'archived'),
(17, 'Jasper Heath', '2014', '1681483167.jpg', 'Sunt labore iusto ve', '2014-10-29', '1987-02-03', 13, '2023-04-14 14:39:27', '2023-04-19 10:31:41', 'archived');

-- --------------------------------------------------------

--
-- Structure de la table `matiere`
--

CREATE TABLE `matiere` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `matiere`
--

INSERT INTO `matiere` (`id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(8, 'math', '1681483045.jpg', '2023-04-14 14:37:25', '2023-04-14 14:37:25');

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_03_31_103059_create__matiere_table', 1),
(6, '2014_10_12_100000_create_password_resets_table', 2),
(7, '2023_04_11_221409_create_matiere_table', 3),
(8, '2023_04_11_221605_create_matiere_table', 4),
(9, '2023_04_12_221616_create_cours_table', 5),
(10, '2023_04_13_220836_create_formation_table', 6);

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
-- Structure de la table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `mobile` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`, `image`, `mobile`) VALUES
(10, 'Maile Lott', 'xejoniluwi@mailinator.com', NULL, '$2y$10$Df6hay5iHppDR9FOb0StC.2HCvNGo6FQZkAa90HHU9yw2EwVMSlS2', NULL, '2023-04-14 13:41:49', '2023-04-14 13:41:49', 'maitre', '1681479709.jpg', 40),
(11, 'Yetta Walters', 'zasovefabe@mailinator.com', NULL, '$2y$10$8hpFC9nPhCnlCg8WEdyS0eZ/ATe6VcIOZa0AGDyAiO39/mF3v3axW', NULL, '2023-04-14 13:42:17', '2023-04-14 13:42:17', 'maitre', '1681479737.jpg', 66),
(12, 'Fitzgerald Stephens', 'takehuhac@mailinator.com', NULL, '$2y$10$Z0IYGHjC5oSz87l6V1eScuCZ6Bi7LEP3Ch.pssT8be1EV3xV8.ddO', NULL, '2023-04-14 13:45:11', '2023-04-14 13:45:11', 'maitre', '1681479911.jpg', 88),
(13, 'Marcia Logan', 'tyte@mailinator.com', NULL, '$2y$10$MSaOXYaLi28S164vrrHiEu6pGGCMyux8eLUX5uvRzDWB/7zmUnYZ2', NULL, '2023-04-14 13:48:30', '2023-04-14 13:48:30', 'maitre', '1681480110.jpg', 58),
(15, 'Hasad Carr', 'zuladu@mailinator.com', NULL, '$2y$10$o/fJRsTeqNcNQcaZwH9Nh.T94xuyXrUpHojQruHGBsiIROn8U25wG', NULL, '2023-04-18 16:00:19', '2023-04-18 16:00:19', 'maitre', '1681833618.jpeg', 37),
(16, 'Margaret Gonzales', 'loqacipap@mailinator.com', NULL, '$2y$10$8ptkTgVfA4sY53PxcDs.yutj8OQr.r43IfHl9WiR1xADUY9Wd/9fO', NULL, '2023-04-18 16:01:33', '2023-04-18 16:01:33', 'student', '1681833693.jpg', 20),
(17, 'Drake Holder', 'xixa@mailinator.com', NULL, '$2y$10$f6kU0uX8.6sRtKAJPdMAaOywjTn2cO4GhvSyBI88C2z4K9Wqo0UR2', NULL, '2023-04-19 10:31:25', '2023-04-19 10:31:25', 'maitre', '1681900284.jpeg', 68);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `cours`
--
ALTER TABLE `cours`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cours_maitre_id_foreign` (`maitre_id`),
  ADD KEY `cours_matiere_id_foreign` (`matiere_id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `formation`
--
ALTER TABLE `formation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `formation_maitre_id_foreign` (`maitre_id`);

--
-- Index pour la table `matiere`
--
ALTER TABLE `matiere`
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
-- Index pour la table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `cours`
--
ALTER TABLE `cours`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `formation`
--
ALTER TABLE `formation`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `matiere`
--
ALTER TABLE `matiere`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `cours`
--
ALTER TABLE `cours`
  ADD CONSTRAINT `cours_maitre_id_foreign` FOREIGN KEY (`maitre_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cours_matiere_id_foreign` FOREIGN KEY (`matiere_id`) REFERENCES `matiere` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `formation`
--
ALTER TABLE `formation`
  ADD CONSTRAINT `formation_maitre_id_foreign` FOREIGN KEY (`maitre_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
