-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le :  jeu. 09 juil. 2020 à 15:24
-- Version du serveur :  5.7.26
-- Version de PHP :  7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `ecrivain`
--

-- --------------------------------------------------------

--
-- Structure de la table `chapter`
--

CREATE TABLE `chapter` (
  `id` int(11) NOT NULL,
  `title_chapter` varchar(100) DEFAULT NULL,
  `chapter_content` text,
  `date_chapter` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `chapter`
--

INSERT INTO `chapter` (`id`, `title_chapter`, `chapter_content`, `date_chapter`) VALUES
(3, 'Chapitre 3', 'Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n\'a pas fait que survivre cinq siècles, mais s\'est aussi adapté à la bureautique informatique, sans que son contenu n\'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.\r\n\r\n', '2020-05-29'),
(4, 'Chapitre 4', 'content 4', '2020-06-12'),
(5, 'Chapitre 4', 'content 4', '2020-06-12'),
(6, 'Chapitre 4', 'content 4', '2020-06-12'),
(7, 'Chapitre 4', 'content 4', '2020-06-12'),
(10, 'test chap 7', '<p style=\"text-align: center;\">contenu 7</p>', '2020-06-19');

-- --------------------------------------------------------

--
-- Structure de la table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `id_member` int(11) NOT NULL,
  `comment` text NOT NULL,
  `date_comment` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `report_comment` tinyint(1) DEFAULT NULL,
  `id_chapter` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `comment`
--

INSERT INTO `comment` (`id`, `id_member`, `comment`, `date_comment`, `report_comment`, `id_chapter`) VALUES
(33, 14, '             \r\n        test sql', '2020-06-13 00:00:00', 0, 3),
(35, 14, 'test id comment', '2020-06-19 00:00:00', 0, 3),
(36, 14, '&lt;!--', '2020-06-26 00:00:00', 0, 3),
(37, 14, '&lt;script&gt; alert(&quot;Bonjour&quot;); &lt;/script&gt;', '2020-06-26 00:00:00', 0, 3),
(38, 14, 'test ajout signal\r\n', '2020-07-03 00:00:00', 1, 7),
(39, 21, '', '2020-07-03 00:00:00', 0, 4);

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

CREATE TABLE `membre` (
  `id` int(11) NOT NULL,
  `admin_member` tinyint(1) NOT NULL DEFAULT '0',
  `pseudo_member` varchar(255) NOT NULL,
  `pass_member` varchar(255) NOT NULL,
  `mail_member` varchar(255) NOT NULL,
  `date_inscription` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `membre`
--

INSERT INTO `membre` (`id`, `admin_member`, `pseudo_member`, `pass_member`, `mail_member`, `date_inscription`) VALUES
(10, 0, 'thomas', '$2y$10$0nFxN5InpqB9KENfJw11JO7V1uTNrhod49eY7yLPFU.U/8FK/GWoe', 'genet@gmail.com', '2020-05-19'),
(11, 0, 'thomas2', '$2y$10$XDC4gACvreYyPhIpluMGiu0sNGDBwTSGNjnXOMi1I6BXMLX2qk/JO', 'genet2@gmail.com', '2020-05-22'),
(12, 0, 'thomas3', '$2y$10$SMQu6dq/K7mDM6NG3u9h1eUW2l7yjbzeU4ARsHZ2r6g69vFFLF0Y6', 'genet3@gmail.com', '2020-05-22'),
(13, 0, 'thomas4', '$2y$10$O9O4QsVSL/AWoaD/8NSUBuYCCUvTqMo2FxrGPizfrOHK.yMG8t5vm', 'genet4@gmail.com', '2020-05-22'),
(14, 1, 'thomas5', '$2y$10$VmT.HG8j2apHURj1Jf1T2.G8OAIOgQlNGAxWpMISGviW4WizC9GqO', 'genet5@gmail.com', '2020-05-24'),
(15, 0, 'thomas6', '$2y$10$Ubpu4rrVkU0L3wwwpM6CZuG5tlDxJ70mk0LeItuJuh1j8s3qy6SmO', 'genet6@gmail.com', '2020-06-05'),
(16, 0, 'thomas7', '$2y$10$JpPa/5ZLb91grTwm2XSSyeXkha.H/ZAKFr8uYbgiUoDsaHap14jQG', 'genet7@gmail.com', '2020-06-06'),
(18, 1, 'thomas9', '$2y$10$qBpxKF3HEqPg/C8SU2ds.uDN7sanS05xTHs57rIdj5Qcmr9jJYiOC', 'genet9@gmail.com', '2020-06-12'),
(20, 0, 'thomas8', '$2y$10$uYB0RG3DyrRFp3GBrw3F6OeetbwGa4M0oszGqxNLNT8J1w7oP8NCi', 'genet8@gmail.com', '2020-07-03'),
(21, 0, 'thomas11', '$2y$10$YGM9TJUB.3V1fhG3ZjQ/.eZfuun506Ef60XOPl1u08m1b4hIFQXXK', 'genet11@gmail.com', '2020-07-03'),
(22, 0, 'thomas', '$2y$10$6BPczWiCEwQoY5jus7p.cOKBUVHzxX0iW1qYHswjr5OBTVzTrhuku', 'genet@gmail.com', '2020-07-07'),
(23, 0, 'thomas', '$2y$10$54kpk/ea9DfFVwHTfQL4Ee4H2fMkneXbc1cwnwPdetBha2560a7TG', 'genet@gmail.com', '2020-07-07');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `chapter`
--
ALTER TABLE `chapter`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Lier membre et comment` (`id_member`),
  ADD KEY `Lier comment et chapter` (`id_chapter`);

--
-- Index pour la table `membre`
--
ALTER TABLE `membre`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `chapter`
--
ALTER TABLE `chapter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT pour la table `membre`
--
ALTER TABLE `membre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `Lier comment et chapter` FOREIGN KEY (`id_chapter`) REFERENCES `chapter` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `Lier membre et comment` FOREIGN KEY (`id_member`) REFERENCES `membre` (`id`);
