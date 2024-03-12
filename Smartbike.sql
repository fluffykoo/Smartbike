-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : lun. 18 déc. 2023 à 20:40
-- Version du serveur : 5.7.39
-- Version de PHP : 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `Smartbike`
--

-- --------------------------------------------------------

--
-- Structure de la table `commandes`
--

CREATE TABLE `commandes` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `date_commande` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `velo_id` int(11) DEFAULT NULL,
  `message` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `velos`
--

CREATE TABLE `velos` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `description` text,
  `prix` decimal(10,2) DEFAULT NULL,
  `photo_path` varchar(255) DEFAULT NULL,
  `date_ajout` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `velos`
--

INSERT INTO `velos` (`id`, `nom`, `description`, `prix`, `photo_path`, `date_ajout`) VALUES
(1, 'BikeOne', 'Un cadre classique avec une touche de modernité. Notre BikeOne est un vélo hollandais classique, réalisé avec des matériaux de qualité et de belles couleurs. La faible hauteur du cadre permet d\'en monter et d\'en descendre facilement, faisant de Robyn un vélo parfaitement adapté à une vie urbaine trépidante.', '399.99', 'images/BikeOne.png', '2023-01-01'),
(2, 'Bike22', 'À la fois performant et original, le Bike22  est le vélo idéal pour les routards et les casse-cou. Avec sa barre transversale unique qui traverse le cadre en partant de l\'axe arrière, le Bike22 \r\nincarne la vitesse maximale de la tête aux pieds !', '749.99', 'images/Bike22.png', '2023-01-02'),
(3, 'BikeFirst', 'Avec des fonctionnalités intelligentes et innovantes, notre BikeFirst est la force tranquille qui vous aidera à garder la cadence. Équipé d\'une technologie de pointe telle qu\'un moteur central puissant et silencieux ainsi que d\'un changement de vitesse automatique, le BikeFirst est un vélo électrique polyvalent, au design minimaliste, vous offrant la meilleure expérience possible en matière de vélo électrique.', '2799.00', 'images/BikeFirst.png', '2023-01-03'),
(4, 'Bike5', 'L\'expérience ultime du vélo électrique, emballée dans un design épuré et sans chichis. Bike5 se décline en trois coloris différents et dispose de technologies de pointe telles qu\'un moteur central puissant et silencieux, ainsi qu\'un changement de vitesse automatique. Bike5 s\'accompagne d\'une application mobile élaborée pour suivre facilement votre vélo et son parcours. Un vélo électrique qui excelle aussi bien en termes de performances que de design.', '3299.00', 'images/Bike5.jpeg', '2023-12-18');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `commandes`
--
ALTER TABLE `commandes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `velos`
--
ALTER TABLE `velos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `commandes`
--
ALTER TABLE `commandes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `velos`
--
ALTER TABLE `velos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
