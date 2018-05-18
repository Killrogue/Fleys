-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mer. 02 mai 2018 à 08:48
-- Version du serveur :  10.1.31-MariaDB
-- Version de PHP :  7.2.3

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
  `rendement` text NOT NULL,
  `production` text NOT NULL,
  `vendanges` text NOT NULL,
  `exposition` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `caracteristique`
--

INSERT INTO `caracteristique` (`id`, `description`, `vinification`, `degustation`, `cepage`, `age_des_vignes`, `superficie`, `rendement`, `production`, `vendanges`, `exposition`) VALUES
(1, 'Ce Chablis mis en bouteille par nos soins est issu de parcelles limitrophes de nos Chablis 1er Cru, des lieux-dits. Côte neuve et « Vaux-Noyers ».', 'Fermentation alcoolique sans sucre résiduel + fermentation malolactique 100% vinifié à 100% en cuve inox.', 'Robe jaune pâle avec quelques nuances paille et aussi des reflets verts de jeunesse, éclatante et limpide, belle présentation. Le nez est typé, il développe des notes de fleurs printanières et fleurs blanches de prairie avec en plus des fragrances sur les fruits blancs (la pomme et la pêche). L’aération ajoute une touche exotique et des notes de pain de mie ainsi qu’un arrière-plan discrètement minéral. Belle bouche avec une attaque relativement pleine, ronde soyeuse, qui restitue les arômes fruités du nez tout en y ajoutant touche, sur l’ananas et de jolis arômes acidulés qui lui donnent un esprit vif. A l’évolution on a un vin qui présente une belle matière avec du gras contrebalancé par une bonne fraîcheur. L’ensemble est équilibré avec une finale vivifiante sur des touches citronnées, d’une jolie netteté.', 'Chardonnay', '30 ans', '2 ha', '50 hL/ha', '14000 bouteilles', 'Mécanique', 'Ouest (Rive droite du Serein)'),
(2, 'Ce Chablis est issu de parcelles limitrophes de nos Chablis premiers crus « Les Fourneaux »', 'Fermentation alcoolique sans sucre résiduel + fermentation malolactique 100%. 30% en fût de chêne (pièce bourguignonne 227L) de 1, 2 et 3 ans. 70% cuve inox.', 'Le nez associe les fleurs et les fruits blancs à des touches minérales et à un léger boisé épicé. A la fois ample, nerveuse et saline, la bouche développe des notes de pêche, de noisette, sans oublier ces touches de coquille d’huître typique du Chablis. La minéralité se fond dans la rondeur, la finale et longue et fraîche. Un vin « parfait pour les fruits de mer ».', 'Chardonnay', '40 ans', '2 ha', '50 hL/ha', '5500 bouteilles', 'Mécanique', 'Sud-Ouest (Rive droite du Serein)'),
(3, 'Il s’agit de vignes attenantes au Château, fermées par un clos. Elles sont cultivées dans le plus grand respect de la nature, sans herbicide, raisonnée au maximum.  Avec sa cire sur le goulot, elle nous rappelle le bon vieux temps.', 'Une partie du vin est élevée en cuve ovoïdes (80%), une autre en fût de chêne (20%), ce qui donne un vin très équilibré.', 'Robe jaune paille, très brillante avec des reflets argentés, limpide, belle présentation avec même de la densité. Le nez est typé, fin et expressif, on perçoit des parfums de fleurs blanches (aubépine, acacia), de pêche et de citron légèrement confit ; viennent ensuite des fragrances de pain de mie, une discrète touche beurrée sur un fond minéral (notes fumées et iodées). En bouche on a un Chablis à l\'attaque ample, pleine qui restitue avec netteté le plan aromatique du nez. A l\'évolution, on a une matière plus grasse qui est enveloppée par une fraîcheur ciselée dans laquelle on retrouve ces parfums minéraux. L\'ensemble a un joli volume, c\'est harmonieux, précis avec une finale sur des notes beurrées, citronnées mais aussi une touche qui rappelle la coquille d\'huître.', 'Chardonnay', 'N/A', '1 ha', 'N/A', 'N/A', 'Manuelle', 'N/A'),
(4, 'Ce Chablis 1er cru  « Mont de Milieu » est situé sur la rive droite du Serein, exposé plein Sud. Le Mont de Milieu est historique et prestigieux, pour ses vins d’une grande typicité « Chablis » ; marqué de minéralité.', 'Fermentation alcoolique, sans sucres+ fermentation malolactique. 100% vinifié et élevé à 100% en cuve inox afin de garder toute sa minéralité.', 'N/A', 'Chardonnay', '50 ans en moyenne', '2.5 ha', '50 hl/ha', '6600 bouteilles', 'Manuelle', 'Sud'),
(5, 'Ce Chablis 1er cru « les Fourneaux » est situé sur la rive droite du Serein, exposé Sud et Sud Ouest, sur deux parcelles différentes, très ensoleillées, très argileuses, donnant des vins très fruités tout en gardant sa minéralité.', 'Fermentation alcoolique, sans sucres résiduels + fermentation malolactique 100%. Vinifié et élevé en cuve inox à 100%.', 'Robe jaune paille avec des reflets verts argentés, d\'une belle luminosité et limpidité, ainsi que quelques larmes. Le nez exprime immédiatement des parfums de fruits à chair blanche et jaune (poire, pêche de vigne, coing, abricot) à des notes de petites fleurs blanches de prairie. A ces caractéristiques du cépage s\'ajoutent des parfums citronnés et une dimension minérale (pierre à fusil, iode, coquille d\'huîtres). C\'est un nez précis qui se livre directement. En bouche même constat, c\'est un vin très jeune, droit, avec une certaine tension et un esprit vif et taquin. A l\'évolution, belle ossature avec une matière charnue bien parfumée qui est toujours contrebalancée par cette pointe de nervosité relativement plaisante. L\'ensemble est fin, dynamique et encore un peu fougueux, avec une finale où on retrouve ces notes citronnées et salines. ', 'Chardonnay', '50 ans en moyenne', '0.50 ha', '58 hl/ha', '2000 bouteilles', 'Manuelle', 'Sud et Sud Ouest'),
(6, 'Le Mont de Milieu est un 1er cru de Chablis situé sur la rive droite du Serein, exposé plein Sud. Ce climat est historique et réputé pour ses vins d’une grande typicité « Chablis ». Ici il s’agit de vignes très vieilles, à rendement faibles, les vins sont concentrés sans perdre sa finesse et sa typicité.', 'Fermentation alcoolique sans sucres résiduels + fermentation malolactique 100%. 30% en fût de chêne (pièce bourguignonne) de 1, 2 et 3 ans. 70% cuve inox.', 'Le nez fin et expressif développe les arômes typés du chardonnay du nord de la Bourgogne avec des fleurs blanches et des accents minéraux ; viennent ensuite des parfums fruité. L’aération reste sur sa pureté minérale tout en y ajoutant des notes de beurre frais et une discrète touche vanillée. En bouche on retrouve la typicité et de la personnalité d\'un 1er Cru. L’attaque est ample, grasse et dotée d’une expression fruitée charnue. A l’évolution, on a une matière riche où le gras est contrebalancé par une fraîcheur ciselée et acidulée lui donnant un côté aérien.', 'Chardonnay', '80 ans (plantées en 1935 et 1936)', '0.70 ha', '30 hl/ha', '3000 bouteilles', 'Manuelle', 'Sud');

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
-- Index pour la table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT pour la table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `vin`
--
ALTER TABLE `vin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `vin`
--
ALTER TABLE `vin`
  ADD CONSTRAINT `vin_ibfk_1` FOREIGN KEY (`id_caract`) REFERENCES `caracteristique` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
