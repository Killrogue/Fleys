-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  sam. 19 mai 2018 à 22:33
-- Version du serveur :  10.1.31-MariaDB
-- Version de PHP :  7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `domaine_fleys`
--
CREATE DATABASE IF NOT EXISTS `domaine_fleys` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `domaine_fleys`;

-- --------------------------------------------------------

--
-- Structure de la table `caracteristique`
--

CREATE TABLE `caracteristique` (
  `id` int(11) NOT NULL,
  `description` text NOT NULL,
  `vinification` text NOT NULL,
  `degustation` text NOT NULL,
  `cepage` text NOT NULL,
  `age_des_vignes` text NOT NULL,
  `superficie` text NOT NULL,
  `production` text NOT NULL,
  `vendanges` text NOT NULL,
  `medailles` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `caracteristique`
--

INSERT INTO `caracteristique` (`id`, `description`, `vinification`, `degustation`, `cepage`, `age_des_vignes`, `superficie`, `production`, `vendanges`, `medailles`) VALUES
(1, 'Ce Chablis mis en bouteille par nos soins est issu de parcelles limitrophes de nos Chablis 1er Cru, des lieux-dits. Côte neuve et « Vaux-Noyers ».', 'Fermentation alcoolique zéro sucre 100% en cuve inox.', 'Couleur : jaune pâle, nuance paille reflets verts de jeunesse\r\n<br>\r\n<br>\r\nNez : notes de fleurs printanières et fleurs blanches, fruits blancs\r\n<br>\r\n<br>\r\nAération : touche exotique, note de pain de mien peu minéral\r\n<br>\r\n<br>\r\nBouche : attaque ronde, soyeuse, esprit vif, belle matière \r\n<br>\r\n<br>\r\nFinal : équilibré, vivifiant avec des touches citronnés, jolie netteté', 'Chardonnay', ' environ 30 ans ', '1.30ha', '20 000 bouteilles', 'Mécanique', '\r\nassets\\images\\medaille-bronze.png\r\n'),
(2, 'Ce Chablis est issu de parcelles limitrophes de nos Chablis premiers crus « Les Fourneaux »', 'Fermentation alcoolique zéro sucre 70% en cuve inox et 30% en fût de chêne(1,2 et 3ans).', 'Couleur : robe jaune pâle trés brillante reflets verts de jeunesse\r\n<br>\r\n<br>\r\nNez : notes fumées, minérales, fleurs blanches, fruit à chair blanche\r\n<br><br>\r\nAération : touche minéral, note de brioche\r\n<br><br>\r\nBouche : attaque ample, ronde, charnue\r\n<br><br>\r\nFinal : équilibré entre le gras et la fraîcheur', 'Chardonnay', 'Environ 40 ans', '2 ha', '8 000 bouteilles', 'Mécanique', 'assets/images/medaille-or.png'),
(3, 'Il s’agit de vignes attenantes au Château, fermées par un clos. Elles sont cultivées dans le plus grand respect de la nature, sans herbicide, raisonnée au maximum.  Avec sa cire sur le goulot, elle nous rappelle le bon vieux temps.', 'Fermentation alcoolique zéro sucre 80% en cuve ovoïdes et 20% en fût de chêne.', 'Couleur : jaune paille, reflets argentés\r\n<br><br>\r\nNez : typé, fin, expressif, notes de fleurs blanches, pêche, citron, fond minéral \r\n<br><br>\r\nAération : Note de pain de mie, fond minéral\r\n<br><br>\r\nBouche : attaque ample\r\n<br><br>\r\nFinal : parfums minéraux, joli volume, précis avec une finale sur des notes beurrrées, citronnées', 'Chardonnay', 'environ 50 ans', '1 ha', '1 500 bouteilles', 'Manuelle, raisonné \"bio\"', 'assets/images/medaille-argent.png'),
(4, 'Ce Chablis 1er cru  « Mont de Milieu » est situé sur la rive droite du Serein, exposé plein Sud. Le Mont de Milieu est historique et prestigieux, pour ses vins d’une grande typicité « Chablis » ; marqué de minéralité.', 'Fermentation alcoolique zéro sucre 100% cuve inox.', 'Couleur : jaune clair \r\n<br><br>\r\nNez : rafinné, trés minéral, soutenu par des fruits secs\r\n<br><br>\r\nAération : note de brioche, minéral qui rapelle la pierre de fusil et le côté iodé\r\n<br><br>\r\nBouche : attque ronde et charnue, soutenue par une belle fraîcheur\r\n<br><br>\r\nFinal : persistante sur les fruits exotiques et touche minéral\r\n', 'Chardonnay', 'Environ 50 ans', '2.5 ha', '7 000 bouteilles', 'Manuelle', ''),
(5, 'Ce Chablis 1er cru « les Fourneaux » est situé sur la rive droite du Serein, exposé Sud et Sud Ouest, sur deux parcelles différentes, très ensoleillées, très argileuses, donnant des vins très fruités tout en gardant sa minéralité.', 'Fermentation alcoolique zéro sucre 100% cuve inox.', 'Couleur : jaune claire, nuances ors blancs, reflets verts\r\n<br><br>\r\nNez : fin, expressif, notes florales, touches de fruits blancs, citron \r\n<br><br>\r\nAération : fragances minérales, notes fraîche, charnue \r\n<br><br>\r\nBouche : parfums floraux et fruités\r\n<br><br>\r\nFinal : côté beurré et minéral, finale fumée, touche iodée', 'Chardonnay', 'Environ 50 ans ', '0.50 ha', '3 900 bouteilles', 'Manuelle', 'assets/images/medaille.png'),
(6, 'Le Mont de Milieu est un 1er cru de Chablis situé sur la rive droite du Serein, exposé plein Sud. Ce climat est historique et réputé pour ses vins d’une grande typicité « Chablis ». Ici il s’agit de vignes très vieilles, à rendement faibles, les vins sont concentrés sans perdre sa finesse et sa typicité.', 'Fermentation alcoolique zéro sucre 70% cuve inox et 30% fût de chêne.', 'Couleur : jaune, note paille argentées\r\n<br><br>\r\nNez : net, fin, parfums de fruits blancs, notes florales, herbe coupée\r\n<br><br>\r\nAération : plus riches, notes d\'agrumes, beurre frais, minéral\r\n<br><br>\r\nBouche : ample, pleine, bien parfumée\r\n<br><br>\r\nFinal : minérale, note grillée et parfumées', 'Chardonnay', 'Environ 83 ans(plantées en 1935 et 1936)', '0.70 ha', '2 600 bouteilles', 'Manuelle', '');

-- --------------------------------------------------------

--
-- Structure de la table `rank`
--

CREATE TABLE `rank` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `niveau_autorisation` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `rank`
--

INSERT INTO `rank` (`id`, `nom`, `niveau_autorisation`) VALUES
(1, 'Admin', 99),
(2, 'Modérateur', 98),
(3, 'Utilisateur', 1);

-- --------------------------------------------------------

--
-- Structure de la table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `lien_image` varchar(50) NOT NULL,
  `texte_alt` varchar(50) NOT NULL,
  `caption` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `slider`
--

INSERT INTO `slider` (`id`, `lien_image`, `texte_alt`, `caption`) VALUES
(1, 'assets/images/slider1.jpg', 'Premier cru Mont de Milieu', 'Premier cru Mont de Milieu'),
(2, 'assets/images/slider2.jpg', 'Château vu de l\'arrière', 'Vignes \"Clos du château\"'),
(3, 'assets/images/slider3.jpg', 'Jardins du château', 'Jardins du château'),
(4, 'assets/images/slider4.jpg', 'Enseigne du domaine', 'Enseigne du domaine'),
(5, 'assets/images/slider5.jpg', 'Vendanges manuelles', 'Vendanges manuelles'),
(6, 'assets/images/slider6.jpg', 'Caveau du domaine', 'Caveau du domaine');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `motdepasse` varchar(64) NOT NULL,
  `id_rang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `nom`, `email`, `motdepasse`, `id_rang`) VALUES
(1, 'Anthony', 'anthony.carrer@hotmail.fr', '08d49d535999603006c85c7189552163', 1),
(2, 'aaa', 'aaa@aa.fr', '47bce5c74f589f4867dbd57e9ca9f808', 2);

-- --------------------------------------------------------

--
-- Structure de la table `vin`
--

CREATE TABLE `vin` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `nom_court` varchar(50) NOT NULL,
  `lien_img` varchar(255) NOT NULL,
  `id_caract` int(11) NOT NULL,
  `ordre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `vin`
--

INSERT INTO `vin` (`id`, `nom`, `nom_court`, `lien_img`, `id_caract`, `ordre`) VALUES
(1, 'Chablis 2016 <br> <br>', 'Chablis 2016', 'assets/images/chablis1.png', 1, 1),
(2, 'Chablis 2016 l\'incontournable', 'L\'Incontournable', 'assets/images/chablis2.png', 2, 3),
(3, 'Chablis 2016 \"Clos du château\"', '\"Clos du château\"', 'assets/images/chablis3.png', 3, 5),
(4, 'Chablis 1er cru « Mont de Milieu » 2016 <br><br>', '« Mont de Milieu »', 'assets/images/premier_cru1.png', 4, 2),
(5, 'Chablis 1er cru « Les Fourneaux » 2016 <br> <br>', '« Les Fourneaux »', 'assets/images/premier_cru2.png', 5, 4),
(6, 'Chablis 1er cru « Mont de milieu vieilles vignes » 2015', '« Vieilles Vignes »', 'assets/images/premier_cru3.png', 6, 6);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `caracteristique`
--
ALTER TABLE `caracteristique`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `rank`
--
ALTER TABLE `rank`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_rang` (`id_rang`);

--
-- Index pour la table `vin`
--
ALTER TABLE `vin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_caract` (`id_caract`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `caracteristique`
--
ALTER TABLE `caracteristique`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `rank`
--
ALTER TABLE `rank`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `vin`
--
ALTER TABLE `vin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_rang`) REFERENCES `rank` (`id`);

--
-- Contraintes pour la table `vin`
--
ALTER TABLE `vin`
  ADD CONSTRAINT `vin_ibfk_1` FOREIGN KEY (`id_caract`) REFERENCES `caracteristique` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
