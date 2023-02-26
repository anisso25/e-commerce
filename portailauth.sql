-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 25 déc. 2022 à 11:35
-- Version du serveur : 10.4.25-MariaDB
-- Version de PHP : 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `portailauth`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discription_c` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_c` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marque_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `uuid`, `category_name`, `discription_c`, `status`, `image_c`, `marque_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '1671620191', 'Cosmétiques et beauté', 'Cosmétiques et beauté', '1', 'accessoires-beaute-produits-cosmetiques_23-2148598588_1671620191.webp', 1, '2022-12-21 09:56:31', '2022-12-21 09:56:31', NULL),
(2, '1671961881', 'Agroalimentaire', 'ensemble des entreprises qui participent à la transformation, à l\'élaboration et au conditionnement des produits d\'origine essentiellement agricole en vue d\'une consommation alimentaire humaine ou animale.', '1', 'alimentaire-santé-Chine_1671961881.jpg', 1, '2022-12-25 08:51:22', '2022-12-25 08:51:22', NULL),
(3, '1671962296', 'Electroménager', 'Le terme électroménager caractérise tous les appareils et outils utilisant l\'électricité et destinés à assurer des besoins domestiques, par opposition aux outils et machines industriels.', '1', 'salle-a-manger-en-chene-blanchi-style-rustique_9136_1671962296.jpg', 2, '2022-12-25 08:58:16', '2022-12-25 08:58:16', NULL),
(4, '1671962576', 'Equipements industriels', 'Un équipement de production industriel désigne l\'ensemble des machines et outils indispensables au processus de production d\'une firme.', '1', 'compressors-cutout_1671962576.jpg', 2, '2022-12-25 09:02:56', '2022-12-25 09:02:56', NULL),
(5, '1671962650', 'Pièces détachées véhicules', 'Une pièce automobile d\'occasion est une pièce mécanique qui a déjà servi et qui est réutilisée pour réparer une autre voiture', '1', 'pieces-de-rechange_1671962650.png', 7, '2022-12-25 09:04:10', '2022-12-25 09:04:10', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `currencies`
--

CREATE TABLE `currencies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `currency_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `exchange_rate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `currencies`
--

INSERT INTO `currencies` (`id`, `currency_code`, `exchange_rate`, `status`, `created_at`, `updated_at`) VALUES
(1, 'USD', '75', 1, '2022-12-20 18:46:53', '2022-12-20 18:46:53'),
(2, 'GBP', '103', 1, '2022-12-20 18:46:53', '2022-12-20 18:46:53'),
(3, 'EUR', '88', 1, '2022-12-20 18:46:53', '2022-12-20 18:46:53'),
(4, 'AUD', '55', 1, '2022-12-20 18:46:53', '2022-12-20 18:46:53'),
(5, 'CAD', '60', 1, '2022-12-20 18:46:53', '2022-12-20 18:46:53');

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

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
-- Structure de la table `marques`
--

CREATE TABLE `marques` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marke_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `marques`
--

INSERT INTO `marques` (`id`, `uuid`, `marke_name`, `icon`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '1671620176', 'beko', 'beko_1671620176.jpg', 1, '2022-12-21 09:56:16', '2022-12-21 09:56:16', NULL),
(2, '1671961661', 'Brandt', 'brandt_1671961660.jpg', 1, '2022-12-25 08:47:41', '2022-12-25 08:47:41', NULL),
(3, '1671961668', 'COBRA', 'cobra_1671961668.jpg', 1, '2022-12-25 08:47:48', '2022-12-25 08:47:48', NULL),
(4, '1671961675', 'CONDOR', 'condor_1671961675.jpg', 1, '2022-12-25 08:47:55', '2022-12-25 08:47:55', NULL),
(5, '1671961683', 'Géant', 'geant_1671961683.jpg', 1, '2022-12-25 08:48:03', '2022-12-25 08:48:03', NULL),
(6, '1671961690', 'IRIS', 'iris_1671961690.jpg', 1, '2022-12-25 08:48:10', '2022-12-25 08:48:10', NULL),
(7, '1671961716', 'iris tyers', 'iris_tyers_1671961716.png', 1, '2022-12-25 08:48:36', '2022-12-25 08:48:36', NULL),
(8, '1671961724', 'Steam', 'stream_1671961724.jpg', 1, '2022-12-25 08:48:44', '2022-12-25 08:48:44', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_09_18_140221_create_marques_table', 1),
(6, '2022_09_18_141251_create_categories_table', 1),
(7, '2022_09_18_142141_create_produits_table', 1),
(8, '2022_11_21_110047_create_currencies_table', 1),
(9, '2022_12_20_165655_add_role_column_to_users_table', 1),
(10, '2022_12_20_184353_create_roles_table', 1),
(11, '2022_12_20_184922_create_user_role_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

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
-- Structure de la table `produits`
--

CREATE TABLE `produits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prix` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_p` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discription_p` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fiche_t` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_sp` int(11) NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `marque_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`id`, `uuid`, `product_name`, `product_title`, `prix`, `image_p`, `discription_p`, `status`, `fiche_t`, `product_sp`, `category_id`, `marque_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '1671963458', 'GROUPE ÉLECTROGÈNE', 'GROUPE ÉLECTROGÈNE', '1700', '284395804_1671963458.jpg', 'n.m. Ensemble constitué d\'un moteur et d\'une dynamo, destiné à produire de l\'électricité.', '1', 'noimage.jpg', 0, 4, 2, '2022-12-25 09:17:38', '2022-12-25 09:17:38', NULL),
(2, '1671963513', 'Télévision', 'Télévision', '1200', 'tv-led-samsung-eu49mu6292-petite_1671963513.png', 'Transmission, par câble ou par ondes radioélectriques, d\'images pouvant être reproduites sur un écran au fur et à mesure de leur réception, ou enregistrées en vue d\'une reproduction ultérieure', '1', 'noimage.jpg', 0, 3, 2, '2022-12-25 09:18:33', '2022-12-25 09:18:33', NULL),
(3, '1671963562', 'Climatiseur', 'Climatiseur', '2300', 'document_service_3768_1191_5_2035955488_1671963562.jpg', 'C\'est quoi un climatiseur ? Un climatiseur est un appareil de climatisation servant à maintenir l\'air d\'une salle, d\'une pièce ou d\'une enceinte fermée dans des conditions de température et d\'humidité requise.', '1', 'noimage.jpg', 0, 3, 2, '2022-12-25 09:19:22', '2022-12-25 09:19:22', NULL),
(4, '1671963817', 'Radiateur', 'Radiateur', '320', 'index_1671963817.jpg', 'le soleil: le radiateur est allumé pour une utilisation normale. Si votre thermostat est gradué de 1 à 8, alors le cran 5 correspond en moyenne à 20°. la lune: position éco', '1', 'noimage.jpg', 0, 3, 2, '2022-12-25 09:23:37', '2022-12-25 09:23:37', NULL),
(5, '1671963871', 'rouge a levre', 'rouge a levre', '12', '876473567777777346556785768_1671963871.jpg', '(Cosmétologie) Produit de maquillage coloré ou non (→ voir brillant à lèvres) pour souligner les lèvres.', '1', 'noimage.jpg', 0, 1, 1, '2022-12-25 09:24:31', '2022-12-25 09:24:31', NULL),
(6, '1671963908', 'parfum', 'parfum', '23', 'IDOLE-EDP-LANCOME-247x296_1671963908.png', 'Odeur agréable dégagée par quelque chose : Un parfum frais de lilas. 2. Produit odorant pour parfumer le corps, composé d\'un mélange de produits aromatiques (concentré) et d\'alcool éthylique, qui sert de support et d\'amplificateur à l\'odeur.', '1', 'noimage.jpg', 0, 1, 1, '2022-12-25 09:25:08', '2022-12-25 09:25:08', NULL),
(7, '1671964414', 'amer bani amer', 'amer bani amer', '23', 'AMOR-BENAMOR-COUSCOUS-FIN-1KG_1671964414.png', 'es Beni Amer (en arabe : بني عامر , Beni Ɛamir ) sont une tribu arabe issue de la confédération tribale des Banu Hilal présente essentiellement en Algérie', '1', 'noimage.jpg', 0, 2, 1, '2022-12-25 09:33:34', '2022-12-25 09:33:34', NULL),
(8, '1671964451', 'spaghetti', 'spaghetti', '32', 'Spaghetti-Sim-500g-_1671964451.jpg', 'Le mot spaghetti vient d\'ailleurs de l\'arabe et signifie « fil » ou « ficelle ». Les Arabes furent les premiers à avoir l\'idée de pendre les nouilles sur des cordes à linge pour les faire sécher et ainsi pouvoir les conserver plus longtemps.', '1', 'noimage.jpg', 0, 2, 1, '2022-12-25 09:34:11', '2022-12-25 09:34:11', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'admin', '2022-12-20 19:47:42', NULL, NULL),
(2, 'user', '2022-12-20 19:48:14', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `status`, `remember_token`, `created_at`, `updated_at`, `role`) VALUES
(1, 'Alpha', 'alpha@alpha-computer-dz.com', '2022-12-20 18:46:53', '$2y$10$ocHsvmXXxiIFsTaKwJ21x.y5VhuqNTQjK0Qa/E63EWLnTsA23zCPO', 1, NULL, '2022-12-20 18:46:53', '2022-12-20 18:46:53', 'admin'),
(2, 'anisso25', 'rahmoni162@gmail.com', '2022-12-20 18:46:53', '$2y$10$tY42VM69IAT2OoHnTMzkvOuSprTNOlTev.gZBDCr.Vp/L3JxOl9ca', 1, NULL, '2022-12-20 18:46:53', '2022-12-20 18:46:53', 'admin'),
(3, 'admin', 'admin@gmail.com', '2022-12-20 18:46:53', '$2y$10$JqVkzYK26.eEIImbgE.g3.h2d7MO2VF5u0nB/xnPtZII8sqQ9gKZu', 1, NULL, '2022-12-20 18:46:53', '2022-12-20 18:46:53', 'admin'),
(4, 'user', 'user@gmail.com', '2022-12-20 18:46:53', '$2y$10$pvygKb0P1JBAc0ub4E3qT.EDqicQTiiKfM5LBtQp8UIgtiB6Jx6RO', 1, NULL, '2022-12-20 18:46:53', '2022-12-20 18:46:53', 'user');

-- --------------------------------------------------------

--
-- Structure de la table `user_role`
--

CREATE TABLE `user_role` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `user_role`
--

INSERT INTO `user_role` (`user_id`, `role_id`) VALUES
(1, 1),
(1, 2);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_marque_id_foreign` (`marque_id`);

--
-- Index pour la table `currencies`
--
ALTER TABLE `currencies`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `marques`
--
ALTER TABLE `marques`
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
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Index pour la table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`id`),
  ADD KEY `produits_category_id_foreign` (`category_id`),
  ADD KEY `produits_marque_id_foreign` (`marque_id`);

--
-- Index pour la table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Index pour la table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`user_id`,`role_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `currencies`
--
ALTER TABLE `currencies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `marques`
--
ALTER TABLE `marques`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `produits`
--
ALTER TABLE `produits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_marque_id_foreign` FOREIGN KEY (`marque_id`) REFERENCES `marques` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Contraintes pour la table `produits`
--
ALTER TABLE `produits`
  ADD CONSTRAINT `produits_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `produits_marque_id_foreign` FOREIGN KEY (`marque_id`) REFERENCES `marques` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
