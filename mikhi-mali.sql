-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 08 Juillet 2019 à 11:21
-- Version du serveur :  10.1.9-MariaDB
-- Version de PHP :  5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `mikhi-mali`
--

-- --------------------------------------------------------

--
-- Structure de la table `acheteurs`
--

CREATE TABLE `acheteurs` (
  `id_ac` int(11) NOT NULL,
  `nom_ac` varchar(255) DEFAULT NULL,
  `email_ac` varchar(100) DEFAULT NULL,
  `adresse_ac` varchar(100) DEFAULT NULL,
  `tel_ac` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id_art` int(11) NOT NULL,
  `titre_art` varchar(100) DEFAULT NULL,
  `contenu_art` text,
  `date_pub_art` datetime DEFAULT NULL,
  `images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `ordures`
--

CREATE TABLE `ordures` (
  `id_or` int(11) NOT NULL,
  `nom_or` varchar(255) NOT NULL,
  `description_or` text,
  `quantite_or` int(6) DEFAULT NULL,
  `date_prop` date DEFAULT NULL,
  `images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `ordures`
--

INSERT INTO `ordures` (`id_or`, `nom_or`, `description_or`, `quantite_or`, `date_prop`, `images`) VALUES
(1, 'Ventes des pneus', 'Je souhaite vendre mes pneus d''entreprise au plus offrant.Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae magnam non id molestias itaque iure laborum neque. Pariatur possimus velit, neque in expedita inventore quasi, nihil reiciendis animi nam voluptas!\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Quae magnam non id molestias itaque iure laborum neque. Pariatur possimus velit, neque in expedita inventore quasi, nihil reiciendis animi nam voluptas!', 4, '2019-05-31', 'image10.jpg'),
(2, 'Ventes des imprimantes usées', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima aut architecto dolores similique voluptatum rem eius sint dolorem libero? Consequuntur deleniti natus pariatur asperiores, voluptas et perspiciatis expedita eius voluptatum.\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Minima aut architecto dolores similique voluptatum rem eius sint dolorem libero? Consequuntur deleniti natus pariatur asperiores, voluptas et perspiciatis expedita eius voluptatum.', 10, '2019-05-28', 'image7.jpg'),
(3, 'Ventes des bidons', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima aut architecto dolores similique voluptatum rem eius sint dolorem libero? Consequuntur deleniti natus pariatur asperiores, voluptas et perspiciatis expedita eius voluptatum.\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Minima aut architecto dolores similique voluptatum rem eius sint dolorem libero? Consequuntur deleniti natus pariatur asperiores, voluptas et perspiciatis expedita eius voluptatum.', 20, '2019-05-20', 'image4.jpg'),
(4, 'Ventes des déchets électroniques', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima aut architecto dolores similique voluptatum rem eius sint dolorem libero? Consequuntur deleniti natus pariatur asperiores, voluptas et perspiciatis expedita eius voluptatum.\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Minima aut architecto dolores similique voluptatum rem eius sint dolorem libero? Consequuntur deleniti natus pariatur asperiores, voluptas et perspiciatis expedita eius voluptatum.', 50, '2019-05-17', 'image9.jpg');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `acheteurs`
--
ALTER TABLE `acheteurs`
  ADD PRIMARY KEY (`id_ac`);

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id_art`);

--
-- Index pour la table `ordures`
--
ALTER TABLE `ordures`
  ADD PRIMARY KEY (`id_or`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `acheteurs`
--
ALTER TABLE `acheteurs`
  MODIFY `id_ac` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id_art` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `ordures`
--
ALTER TABLE `ordures`
  MODIFY `id_or` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
