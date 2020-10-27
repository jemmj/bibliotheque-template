-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 27 oct. 2020 à 15:13
-- Version du serveur :  10.4.14-MariaDB
-- Version de PHP : 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bd_magalijohnsonbiblio`
--

-- --------------------------------------------------------

--
-- Structure de la table `auteur`
--

CREATE TABLE `auteur` (
  `id_auteur` int(11) NOT NULL,
  `nom` varchar(200) NOT NULL,
  `prenom` varchar(200) NOT NULL,
  `nationalite` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `auteur`
--

INSERT INTO `auteur` (`id_auteur`, `nom`, `prenom`, `nationalite`) VALUES
(1, 'De Balzac', 'Honore', 'Francaise'),
(2, 'Goscinny', 'René', 'Belge'),
(3, 'Robvel', 'belges', 'Francais'),
(4, 'Musso', 'Guillaume', 'Francaise'),
(5, 'hjoih', 'erty', 'ytruè'),
(6, 'fr_yufri_', 'giu', 'yufiu'),
(7, 'azerty', 'azert', 'azert'),
(8, 'hjkl', 'sdfghjk', 'qszde');

-- --------------------------------------------------------

--
-- Structure de la table `bilbliotheque`
--

CREATE TABLE `bilbliotheque` (
  `id_bibliotheque` int(11) NOT NULL,
  `nom` varchar(200) NOT NULL,
  `adresse` varchar(200) NOT NULL,
  `telephone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `bilbliotheque`
--

INSERT INTO `bilbliotheque` (`id_bibliotheque`, `nom`, `adresse`, `telephone`) VALUES
(1, 'Magali\'', 'quai fran$ois mauriac', '0953409234'),
(2, 'MJF', 'rue des tilleuls', '0164932739'),
(3, 'bgf', 'rue de lieusaint', '091232345'),
(9, 'jpo', 'iohuypo', '123456788'),
(10, 'hdeyç_hy', 'zhyç_', 'huç'),
(12, 'sccscs', 'adda', 'addada'),
(13, 'sdfg', 'dfg', 'dfg'),
(14, 'okip)ài', 'hyiu', 'trè-'),
(15, 'rty', 'defrgt', 'rtg');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id_client` int(11) NOT NULL,
  `nom` varchar(200) NOT NULL,
  `prenom` varchar(200) NOT NULL,
  `adresse` varchar(200) NOT NULL,
  `telephone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id_client`, `nom`, `prenom`, `adresse`, `telephone`) VALUES
(1, 'dupont', 'adrien', '', '0987564322'),
(2, 'fournier', 'rose', '', '09875345562'),
(3, 'johnson', 'SONIA', '', '09875444562'),
(4, 'john', 'meg', 'urueueiueo', ''),
(5, 'jrpoejpupor', 'hjupoez', 'yreoiye', ''),
(6, 'IUP0', 'OIYUP', 'Y', ''),
(7, 'IUP0', 'OIYUP', 'Y', ''),
(8, 'dfgb', 'zert', 'fg', ''),
(9, 'zert', 'az', 'sd', ''),
(10, 'ze', 'sdf', 'df', '');

-- --------------------------------------------------------

--
-- Structure de la table `editeur`
--

CREATE TABLE `editeur` (
  `id_editeur` int(11) NOT NULL,
  `nom` varchar(200) NOT NULL,
  `adresse` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `editeur`
--

INSERT INTO `editeur` (`id_editeur`, `nom`, `adresse`) VALUES
(1, 'galimar', '2 rue des templiers');

-- --------------------------------------------------------

--
-- Structure de la table `emprunter`
--

CREATE TABLE `emprunter` (
  `dateemprunt` date NOT NULL,
  `id_client` int(11) NOT NULL,
  `id_livre` int(11) NOT NULL,
  `id_emprunter` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `emprunter`
--

INSERT INTO `emprunter` (`dateemprunt`, `id_client`, `id_livre`, `id_emprunter`) VALUES
('2020-09-08', 1, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `livre`
--

CREATE TABLE `livre` (
  `id_livre` int(11) NOT NULL,
  `id_bibliotheque` int(11) NOT NULL,
  `titre` varchar(200) NOT NULL,
  `genre` varchar(200) NOT NULL,
  `logo` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `prix` decimal(10,0) NOT NULL,
  `page` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `livre`
--

INSERT INTO `livre` (`id_livre`, `id_bibliotheque`, `titre`, `genre`, `logo`, `description`, `prix`, `page`) VALUES
(1, 1, 'le club des 5', 'aventure', '', '', '0', ''),
(2, 2, 'les misérables', 'classique', '', '', '0', ''),
(3, 3, 'tintin au tibet', 'bd', '', '', '0', ''),
(4, 1, 'cest bon cest bon', 'theatre', '', '', '0', ''),
(11, 2, 'la gloire de mon pere ', 'roman', '', '', '0', ''),
(12, 2, 'spirou', 'bd', '5f85aa079aff0-photoidcv.png', '', '0', ''),
(13, 3, 'asterix et obelix en egypte', 'bd', '', '', '0', ''),
(19, 1, 'hhh', 'hoiho', 'uploads/photo id cv.png', '', '0', ''),
(20, 2, 'johohoi', 'IUO', 'uploads/10_banques_dimages_gratuites_libres_de_droits-300x169.jpg', '', '0', ''),
(21, 1, 'johohoi', 'IUO', 'uploads/index.jpg', '', '0', ''),
(22, 1, 'MEGA', 'MEGA', 'uploads/index2.jpg', '', '0', ''),
(23, 3, 'uoiyu', 'utyu-', 'uploads/java.jpg', '', '0', ''),
(24, 3, 'uoiyu', 'utyu-', 'uploads/logo.jpg', '', '0', ''),
(25, 3, 'uoiyu', 'utyu-', 'uploads/homeimage.jpg', '', '0', ''),
(26, 3, 'uoiyu', 'utyu-', 'uploads/lead.jpg', '', '0', ''),
(27, 3, 'uoiyu', 'utyu-', 'uploads/ceo.jpg', '', '0', ''),
(28, 1, 'Magali 77', 'Johson', '../uploads/photoidcv.png', '', '0', ''),
(29, 1, 'joijftyf', 'fyè-', 'uploads/telephone.jpg', '', '0', '');

-- --------------------------------------------------------

--
-- Structure de la table `publier`
--

CREATE TABLE `publier` (
  `id_publier` int(11) NOT NULL,
  `id_editeur` int(11) NOT NULL,
  `id_auteur` int(11) NOT NULL,
  `id_livre` int(11) NOT NULL,
  `date_publication` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `publier`
--

INSERT INTO `publier` (`id_publier`, `id_editeur`, `id_auteur`, `id_livre`, `date_publication`) VALUES
(1, 1, 7, 12, '2020-10-07'),
(2, 1, 2, 19, '2020-10-01'),
(3, 1, 4, 11, '2020-10-12'),
(4, 1, 3, 27, '2020-10-07'),
(5, 1, 1, 28, '2020-10-08'),
(6, 1, 2, 29, '2020-10-08');

-- --------------------------------------------------------

--
-- Structure de la table `rendre`
--

CREATE TABLE `rendre` (
  `id_rendre` int(11) NOT NULL,
  `id_livre` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `dateretour` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `nom` varchar(200) NOT NULL,
  `prenom` varchar(200) NOT NULL,
  `role` varchar(30) NOT NULL,
  `age` int(11) NOT NULL,
  `sexe` varchar(20) NOT NULL,
  `pays` varchar(70) NOT NULL,
  `password` varchar(70) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id_users`, `nom`, `prenom`, `role`, `age`, `sexe`, `pays`, `password`, `email`) VALUES
(1, '', 'magali', 'admin', 38, 'femme', 'france', '123456123', 'johnson.magali8@gmail.com'),
(3, '', 'mar', 'admin', 41, 'femme', 'france', '', 'mar@hotmail.fr'),
(5, '', 'mam', 'admin', 45, 'femme', 'france', '', 'mam@orange.fr');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `auteur`
--
ALTER TABLE `auteur`
  ADD PRIMARY KEY (`id_auteur`);

--
-- Index pour la table `bilbliotheque`
--
ALTER TABLE `bilbliotheque`
  ADD PRIMARY KEY (`id_bibliotheque`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id_client`);

--
-- Index pour la table `editeur`
--
ALTER TABLE `editeur`
  ADD PRIMARY KEY (`id_editeur`);

--
-- Index pour la table `emprunter`
--
ALTER TABLE `emprunter`
  ADD PRIMARY KEY (`id_emprunter`),
  ADD KEY `id_client` (`id_client`),
  ADD KEY `emprunter_ibfk_2` (`id_livre`);

--
-- Index pour la table `livre`
--
ALTER TABLE `livre`
  ADD PRIMARY KEY (`id_livre`),
  ADD KEY `id_bibliotheque` (`id_bibliotheque`);

--
-- Index pour la table `publier`
--
ALTER TABLE `publier`
  ADD PRIMARY KEY (`id_publier`),
  ADD KEY `id_livre` (`id_livre`),
  ADD KEY `id_editeur` (`id_editeur`),
  ADD KEY `id_auteur` (`id_auteur`);

--
-- Index pour la table `rendre`
--
ALTER TABLE `rendre`
  ADD PRIMARY KEY (`id_rendre`),
  ADD KEY `id_livre` (`id_livre`),
  ADD KEY `id_client` (`id_client`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `auteur`
--
ALTER TABLE `auteur`
  MODIFY `id_auteur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `bilbliotheque`
--
ALTER TABLE `bilbliotheque`
  MODIFY `id_bibliotheque` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id_client` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `editeur`
--
ALTER TABLE `editeur`
  MODIFY `id_editeur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `emprunter`
--
ALTER TABLE `emprunter`
  MODIFY `id_emprunter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `livre`
--
ALTER TABLE `livre`
  MODIFY `id_livre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT pour la table `publier`
--
ALTER TABLE `publier`
  MODIFY `id_publier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `rendre`
--
ALTER TABLE `rendre`
  MODIFY `id_rendre` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `emprunter`
--
ALTER TABLE `emprunter`
  ADD CONSTRAINT `emprunter_ibfk_1` FOREIGN KEY (`id_client`) REFERENCES `client` (`id_client`),
  ADD CONSTRAINT `emprunter_ibfk_2` FOREIGN KEY (`id_livre`) REFERENCES `livre` (`id_livre`);

--
-- Contraintes pour la table `livre`
--
ALTER TABLE `livre`
  ADD CONSTRAINT `livre_ibfk_1` FOREIGN KEY (`id_bibliotheque`) REFERENCES `bilbliotheque` (`id_bibliotheque`);

--
-- Contraintes pour la table `publier`
--
ALTER TABLE `publier`
  ADD CONSTRAINT `publier_ibfk_1` FOREIGN KEY (`id_livre`) REFERENCES `livre` (`id_livre`),
  ADD CONSTRAINT `publier_ibfk_2` FOREIGN KEY (`id_editeur`) REFERENCES `editeur` (`id_editeur`),
  ADD CONSTRAINT `publier_ibfk_3` FOREIGN KEY (`id_auteur`) REFERENCES `auteur` (`id_auteur`);

--
-- Contraintes pour la table `rendre`
--
ALTER TABLE `rendre`
  ADD CONSTRAINT `rendre_ibfk_1` FOREIGN KEY (`id_livre`) REFERENCES `livre` (`id_livre`),
  ADD CONSTRAINT `rendre_ibfk_2` FOREIGN KEY (`id_client`) REFERENCES `client` (`id_client`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
