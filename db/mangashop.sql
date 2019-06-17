-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  lun. 17 juin 2019 à 18:31
-- Version du serveur :  10.1.37-MariaDB
-- Version de PHP :  7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `mangashop`
--
CREATE DATABASE IF NOT EXISTS `mangashop` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `mangashop`;

-- --------------------------------------------------------

--
-- Structure de la table `anime`
--

CREATE TABLE `anime` (
  `id_anime` int(11) NOT NULL,
  `titre` varchar(250) NOT NULL,
  `nb_saisons` int(11) NOT NULL,
  `nb_episodes` int(11) NOT NULL,
  `description` varchar(250) NOT NULL,
  `couverture` varchar(60) NOT NULL,
  `note_moy` decimal(3,2) NOT NULL DEFAULT '0.00',
  `id_genre` int(11) NOT NULL,
  `id_manga` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `anime`
--

INSERT INTO `anime` (`id_anime`, `titre`, `nb_saisons`, `nb_episodes`, `description`, `couverture`, `note_moy`, `id_genre`, `id_manga`) VALUES
(1, 'L\'Attaque des Titans', 3, 59, 'Anime suivant le célèbre manga L\'Attaque des Titans.', 'snk_a_1.jpg', '4.00', 5, 2),
(2, 'Naruto', 10, 220, 'Anime suivant l\'histoire d\'un jeune ninja orphelin appelé Naruto. ', 'naruto_a_1.jpg', '0.00', 3, 1);

-- --------------------------------------------------------

--
-- Structure de la table `genre`
--

CREATE TABLE `genre` (
  `id_genre` int(11) NOT NULL,
  `lib_genre` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `genre`
--

INSERT INTO `genre` (`id_genre`, `lib_genre`) VALUES
(1, 'Aventure'),
(2, 'Tanche-de-vie'),
(3, 'Action'),
(4, 'Science-fiction'),
(5, 'Horreur'),
(6, 'Policier'),
(7, 'Sport');

-- --------------------------------------------------------

--
-- Structure de la table `manga`
--

CREATE TABLE `manga` (
  `id_manga` int(11) NOT NULL,
  `prix` decimal(10,2) NOT NULL,
  `titre` varchar(250) COLLATE utf8_bin NOT NULL,
  `description` varchar(250) CHARACTER SET utf8 NOT NULL,
  `couverture` varchar(50) COLLATE utf8_bin NOT NULL,
  `id_genre` int(11) NOT NULL,
  `note_moy` decimal(3,2) NOT NULL DEFAULT '0.00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `manga`
--

INSERT INTO `manga` (`id_manga`, `prix`, `titre`, `description`, `couverture`, `id_genre`, `note_moy`) VALUES
(1, '7.00', 'Naruto', 'Suivez l\'histoire palpitante d\'un jeune ninja orphelin habité par le monstre qui a tué ses parents.', 'naruto_1.jpg', 3, '2.50'),
(2, '8.00', 'L\'Attaque des Titans', 'Plus de cent ans avant le début de l’histoire, des créatures géantes humanoïdes nommées Titans sont subitement apparues et ont presque anéanti l’humanité. Suivez l\'histoire de la dernière résistance face aux Titans.', 'snk_1.jpg', 5, '0.00'),
(3, '8.00', 'Monster', 'Un jeune chirurgien décide de sauver la vie d\'un enfant de 6 ans plutôt que celle du Maire, 9 ans plus tard, il découvre que cet enfant est l\'homme le plus recherché du Japon.', 'monster_1.jpg', 6, '0.00'),
(4, '7.50', 'Hellsing', 'Le manga Hellsing raconte le combat de la fondation Hellsing, en particulier de son meilleur élément, le Nosferatu Alucard (anacyclique de Dracula) contre les vampires, goules et même le Vatican...', 'hellsing_1.jpg', 5, '0.00'),
(5, '8.00', 'My Hero Academia', 'Dans un monde où 80 % de la population mondiale possède des super-pouvoirs, ici nommés \"Alters\" , n\'importe qui peut devenir un héros ou, s\'il le souhaite, un criminel. Le manga suit les aventures de Izuku Midoriya, n\'ayant aucun pouvoirs...', 'mha_1.jpg', 3, '0.00'),
(6, '7.00', 'Full Metal Achemist', 'Dans le pays d\'Amestris, pays où l\'Alchimie est élevée au rang de science universelle, deux frères, Edward et Alphonse Elric parcourent le monde à la recherche de la légendaire pierre philosophale dans le but de retrouver leurs corps perdus.', 'fma_1.jpg', 4, '0.00'),
(7, '8.00', 'Kuroko No Basket', 'Kuroko, joueur fantôme de la meilleure équipe du Japon au collège, il rejoint un lycée peu réputé dans le but d\'être à nouveau champion avec sa nouvelle équipe.', 'knb_1.jpg', 7, '0.00'),
(8, '7.50', 'Bakuman', 'Suivez l\'histoire de deux jeunes mangaka qui rêvent de créer le meilleur manga du Japon et d\'être adapté en anime.', 'bakuman_1.jpg', 2, '0.00'),
(9, '8.50', 'Parasite', 'Une nuit, des sphères de la taille de balles de tennis, contenant des créatures à l\'apparence de serpents, tombent en nombre inconnu partout dans le monde. Ils sont programmés pour prendre la place des cerveaux humains...', 'parasite_1.jpg', 5, '5.00'),
(10, '7.00', 'Akame ga Kill', 'Tatsumi, jeune aventurier cherchant un travail se retrouve embarqué dans un groupe de révolutionnaires appelé Night Raid', 'agk_1.jpg', 5, '0.00'),
(11, '7.50', 'Blue Exorcist', 'Le monde de Blue Exorcist se compose de deux dimensions qui s\'opposent comme deux faces de miroirs. Le monde dans lequel les êtres humains vivent, Assiah. L’autre est le monde des démons, la Géhenne. On suit l\'histoire de Rin, fils de Satan.', 'ane_1.jpg', 3, '0.00'),
(12, '9.00', '20th Century Boys', 'Enfant, Kenji Endô écrit un livre de prédiction. 28 ans plus tard, ses prédictions se réalisent une à une...', 'vcb_1.jpg', 1, '0.00');

-- --------------------------------------------------------

--
-- Structure de la table `notes_a`
--

CREATE TABLE `notes_a` (
  `id_note_anime` int(11) NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `valeur` decimal(2,1) NOT NULL,
  `id_anime` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `notes_a`
--

INSERT INTO `notes_a` (`id_note_anime`, `id_user`, `valeur`, `id_anime`) VALUES
(1, 1, '4.0', 1);

--
-- Déclencheurs `notes_a`
--
DELIMITER $$
CREATE TRIGGER `trigger_after_delete_noteA` AFTER DELETE ON `notes_a` FOR EACH ROW BEGIN
    DECLARE v_total INTEGER(10);
    DECLARE v_totalSum DECIMAL(10,2);

    SET v_total = (SELECT count(*) from notes_a where notes_a.id_anime = OLD.id_anime);

    SET v_totalSum = (SELECT sum(notes_a.valeur) from notes_a where notes_a.id_anime = OLD.id_anime);

   	UPDATE anime SET anime.note_moy = v_totalSum/v_total where anime.id_anime = OLD.id_anime;
    
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `trigger_after_insert_noteA` AFTER INSERT ON `notes_a` FOR EACH ROW BEGIN
    DECLARE v_total INTEGER(10);
    DECLARE v_totalSum DECIMAL(10,2);

    SET v_total = (SELECT count(*) from notes_a where notes_a.id_anime = NEW.id_anime);

    SET v_totalSum = (SELECT sum(notes_a.valeur) from notes_a where notes_a.id_anime = NEW.id_anime);

   	UPDATE anime SET anime.note_moy = v_totalSum/v_total where anime.id_anime = NEW.id_anime;
    
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `trigger_after_update_noteA` AFTER UPDATE ON `notes_a` FOR EACH ROW BEGIN
    DECLARE v_total INTEGER(10);
    DECLARE v_totalSum DECIMAL(10,2);

    SET v_total = (SELECT count(*) from notes_a where notes_a.id_anime = NEW.id_anime);

    SET v_totalSum = (SELECT sum(notes_a.valeur) from notes_a where notes_a.id_anime = NEW.id_anime);

   	UPDATE anime SET anime.note_moy = v_totalSum/v_total where anime.id_anime = NEW.id_anime;
    
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `notes_m`
--

CREATE TABLE `notes_m` (
  `id_note_manga` int(11) NOT NULL,
  `id_manga` int(11) NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `valeur` decimal(2,1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `notes_m`
--

INSERT INTO `notes_m` (`id_note_manga`, `id_manga`, `id_user`, `valeur`) VALUES
(3, 9, 1, '5.0'),
(6, 1, 1, '2.5');

--
-- Déclencheurs `notes_m`
--
DELIMITER $$
CREATE TRIGGER `trigger_after_delete_noteM` AFTER DELETE ON `notes_m` FOR EACH ROW BEGIN
    DECLARE v_total INTEGER(10);
    DECLARE v_totalSum DECIMAL(10,2);

    SET v_total = (SELECT count(*) from notes_m where notes_m.id_manga = OLD.id_manga);

    SET v_totalSum = (SELECT sum(notes_m.valeur) from notes_m where notes_m.id_manga = OLD.id_manga);

   	UPDATE manga SET manga.note_moy = v_totalSum/v_total where manga.id_manga = OLD.id_manga;
    
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `trigger_after_insert_mangaM` AFTER INSERT ON `notes_m` FOR EACH ROW BEGIN
    DECLARE v_total INTEGER(10);
    DECLARE v_totalSum DECIMAL(10,2);

    SET v_total = (SELECT count(*) from notes_m where notes_m.id_manga = NEW.id_manga);

    SET v_totalSum = (SELECT sum(notes_m.valeur) from notes_m where notes_m.id_manga = NEW.id_manga);

   	UPDATE manga SET manga.note_moy = v_totalSum/v_total where manga.id_manga = NEW.id_manga;
    
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `trigger_after_update_noteM` AFTER UPDATE ON `notes_m` FOR EACH ROW BEGIN
    DECLARE v_total INTEGER(10);
    DECLARE v_totalSum DECIMAL(10,2);

    SET v_total = (SELECT count(*) from notes_m where notes_m.id_manga = NEW.id_manga);

    SET v_totalSum = (SELECT sum(notes_m.valeur) from notes_m where notes_m.id_manga = NEW.id_manga);

   	UPDATE manga SET manga.note_moy = v_totalSum/v_total where manga.id_manga = NEW.id_manga;
    
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `notes_s`
--

CREATE TABLE `notes_s` (
  `id_note_saison` int(11) NOT NULL,
  `id_saison` int(11) NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `valeur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `notes_s`
--

INSERT INTO `notes_s` (`id_note_saison`, `id_saison`, `id_user`, `valeur`) VALUES
(1, 2, 1, 3);

--
-- Déclencheurs `notes_s`
--
DELIMITER $$
CREATE TRIGGER `trigger_after_delete_noteS` AFTER DELETE ON `notes_s` FOR EACH ROW BEGIN
    DECLARE v_total INTEGER(10);
    DECLARE v_totalSum DECIMAL(10,2);

    SET v_total = (SELECT count(*) from notes_s where notes_s.id_saison = OLD.id_saison);

    SET v_totalSum = (SELECT sum(notes_s.valeur) from notes_s where notes_s.id_saison = OLD.id_saison);

   	UPDATE sais SET sais.note_moy = v_totalSum/v_total where sais.id_saison = OLD.id_saison;
    
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `trigger_after_insert_noteS` AFTER INSERT ON `notes_s` FOR EACH ROW BEGIN
    DECLARE v_total INTEGER(10);
    DECLARE v_totalSum DECIMAL(10,2);

    SET v_total = (SELECT count(*) from notes_s where notes_s.id_saison = NEW.id_saison);

    SET v_totalSum = (SELECT sum(notes_s.valeur) from notes_s where notes_s.id_saison = NEW.id_saison);

   	UPDATE sais SET sais.note_moy = v_totalSum/v_total where sais.id_saison = NEW.id_saison;
    
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `trigger_after_update_noteS` AFTER UPDATE ON `notes_s` FOR EACH ROW BEGIN
    DECLARE v_total INTEGER(10);
    DECLARE v_totalSum DECIMAL(10,2);

    SET v_total = (SELECT count(*) from notes_s where notes_s.id_saison = NEW.id_saison);

    SET v_totalSum = (SELECT sum(notes_s.valeur) from notes_s where notes_s.id_saison = NEW.id_saison);

   	UPDATE sais SET sais.note_moy = v_totalSum/v_total where sais.id_saison = NEW.id_saison;
    
END
$$
DELIMITER ;

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
-- Structure de la table `sais`
--

CREATE TABLE `sais` (
  `id_saison` int(11) NOT NULL,
  `id_anime` int(11) NOT NULL,
  `nb_episodes` int(11) NOT NULL,
  `description` varchar(250) NOT NULL,
  `prix` decimal(10,2) NOT NULL,
  `note_moy` decimal(3,2) NOT NULL,
  `num_saison` int(11) NOT NULL,
  `couverture` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `sais`
--

INSERT INTO `sais` (`id_saison`, `id_anime`, `nb_episodes`, `description`, `prix`, `note_moy`, `num_saison`, `couverture`) VALUES
(1, 1, 24, 'Saison 1 du célèbre manga L\'Attaque des Titans.', '15.00', '0.00', 1, 'snk_a_1.jpg'),
(2, 1, 24, 'Saison 2 de L\'Attaque des Titans, suite des aventures d\'Eren.', '15.00', '3.00', 2, 'snk_a_2.jpg'),
(3, 2, 22, 'Première saison du manga qui va marquer des générations entières : Naruto', '10.00', '0.00', 1, 'naruto_a_1.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `isAdmin` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `isAdmin`) VALUES
(1, 'Lucas', 'lucas@lucas.com', NULL, '$2y$10$tOEHXv7SeonnCiXS4u.oQeyqw8wNsUWLiIMXtTDlkffZmybp61vo6', NULL, '2019-06-16 13:02:36', '2019-06-16 13:02:36', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `anime`
--
ALTER TABLE `anime`
  ADD PRIMARY KEY (`id_anime`),
  ADD KEY `fk_anime_genre` (`id_genre`),
  ADD KEY `fk_anime_manga` (`id_manga`);

--
-- Index pour la table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`id_genre`);

--
-- Index pour la table `manga`
--
ALTER TABLE `manga`
  ADD PRIMARY KEY (`id_manga`),
  ADD KEY `fk_manga_genre` (`id_genre`);

--
-- Index pour la table `notes_a`
--
ALTER TABLE `notes_a`
  ADD PRIMARY KEY (`id_note_anime`),
  ADD KEY `fk_noteA_user` (`id_user`),
  ADD KEY `fk_noteA_anime` (`id_anime`);

--
-- Index pour la table `notes_m`
--
ALTER TABLE `notes_m`
  ADD PRIMARY KEY (`id_note_manga`),
  ADD KEY `fk_noteM_user` (`id_user`),
  ADD KEY `fk_noteM_manga` (`id_manga`);

--
-- Index pour la table `notes_s`
--
ALTER TABLE `notes_s`
  ADD PRIMARY KEY (`id_note_saison`),
  ADD KEY `fk_noteSais_user` (`id_user`),
  ADD KEY `fk_noteSais_sais` (`id_saison`);

--
-- Index pour la table `sais`
--
ALTER TABLE `sais`
  ADD PRIMARY KEY (`id_saison`),
  ADD KEY `fk_sais_anime` (`id_anime`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `anime`
--
ALTER TABLE `anime`
  MODIFY `id_anime` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `genre`
--
ALTER TABLE `genre`
  MODIFY `id_genre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `manga`
--
ALTER TABLE `manga`
  MODIFY `id_manga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `notes_a`
--
ALTER TABLE `notes_a`
  MODIFY `id_note_anime` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `notes_m`
--
ALTER TABLE `notes_m`
  MODIFY `id_note_manga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `notes_s`
--
ALTER TABLE `notes_s`
  MODIFY `id_note_saison` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `sais`
--
ALTER TABLE `sais`
  MODIFY `id_saison` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `anime`
--
ALTER TABLE `anime`
  ADD CONSTRAINT `fk_anime_genre` FOREIGN KEY (`id_genre`) REFERENCES `genre` (`id_genre`),
  ADD CONSTRAINT `fk_anime_manga` FOREIGN KEY (`id_manga`) REFERENCES `manga` (`id_manga`);

--
-- Contraintes pour la table `manga`
--
ALTER TABLE `manga`
  ADD CONSTRAINT `fk_manga_genre` FOREIGN KEY (`id_genre`) REFERENCES `genre` (`id_genre`);

--
-- Contraintes pour la table `notes_a`
--
ALTER TABLE `notes_a`
  ADD CONSTRAINT `fk_noteA_anime` FOREIGN KEY (`id_anime`) REFERENCES `anime` (`id_anime`),
  ADD CONSTRAINT `fk_noteA_user` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `notes_m`
--
ALTER TABLE `notes_m`
  ADD CONSTRAINT `fk_noteM_manga` FOREIGN KEY (`id_manga`) REFERENCES `manga` (`id_manga`),
  ADD CONSTRAINT `fk_noteM_user` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `notes_s`
--
ALTER TABLE `notes_s`
  ADD CONSTRAINT `fk_noteSais_sais` FOREIGN KEY (`id_saison`) REFERENCES `sais` (`id_saison`),
  ADD CONSTRAINT `fk_noteSais_user` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `sais`
--
ALTER TABLE `sais`
  ADD CONSTRAINT `fk_sais_anime` FOREIGN KEY (`id_anime`) REFERENCES `anime` (`id_anime`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
