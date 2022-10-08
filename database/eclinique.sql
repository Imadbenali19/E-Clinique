-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 31 mai 2021 à 00:16
-- Version du serveur :  10.4.18-MariaDB
-- Version de PHP : 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `eclinique`
--

-- --------------------------------------------------------

--
-- Structure de la table `acces`
--

CREATE TABLE `acces` (
  `idA` int(11) NOT NULL,
  `description` varchar(50) DEFAULT NULL,
  `operationA` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

CREATE TABLE `administrateur` (
  `idAd` int(11) NOT NULL,
  `idR` int(11) NOT NULL,
  `login` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `administrateur`
--

INSERT INTO `administrateur` (`idAd`, `idR`, `login`, `password`) VALUES
(1, 1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `calendrier`
--

CREATE TABLE `calendrier` (
  `idCal` int(11) NOT NULL,
  `idM` int(11) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `datecal` datetime DEFAULT NULL,
  `datecalFin` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `calendrier`
--

INSERT INTO `calendrier` (`idCal`, `idM`, `description`, `datecal`, `datecalFin`) VALUES
(22, 10, 'ouiouinon', '2021-04-25 00:00:00', '2021-04-26 00:00:00'),
(28, 10, 'isjijsdifjisdjfjidsfjs', '2021-05-06 00:00:00', '2021-05-07 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `detailrendezvous`
--

CREATE TABLE `detailrendezvous` (
  `iddetrdv` int(11) NOT NULL,
  `idRdv` int(11) DEFAULT NULL,
  `temperature` float DEFAULT NULL,
  `poids` float DEFAULT NULL,
  `medecaments` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `medecin`
--

CREATE TABLE `medecin` (
  `idM` int(11) NOT NULL,
  `idAd` int(11) DEFAULT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `prenom` varchar(50) DEFAULT NULL,
  `tel` varchar(12) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `adresse` varchar(50) DEFAULT NULL,
  `fee` float DEFAULT NULL,
  `specialite` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `medecin`
--

INSERT INTO `medecin` (`idM`, `idAd`, `nom`, `prenom`, `tel`, `email`, `adresse`, `fee`, `specialite`, `password`) VALUES
(10, 1, 'x', 'y', '08833333244', 'sdnfjn@fkkdsf', 'sdfsdfsdfsdf', 12, 'heart', 'aaaa');

-- --------------------------------------------------------

--
-- Structure de la table `notification`
--

CREATE TABLE `notification` (
  `idNoti` int(11) NOT NULL,
  `Nom` varchar(30) DEFAULT NULL,
  `Description` varchar(80) DEFAULT NULL,
  `dateNoti` datetime DEFAULT NULL,
  `statut` varchar(10) DEFAULT NULL,
  `ForWho` int(5) DEFAULT NULL,
  `motif` varchar(30) DEFAULT NULL,
  `WhoDid` int(6) DEFAULT NULL,
  `idrendez` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `notification`
--

INSERT INTO `notification` (`idNoti`, `Nom`, `Description`, `dateNoti`, `statut`, `ForWho`, `motif`, `WhoDid`, `idrendez`) VALUES
(12, 'medecin', 'Le patient Benali Imad, a demande la fixation d\'un rendez-vous', '2021-05-31 00:06:15', 'read', 10, 'Fixer RDV', 1, 2),
(13, 'patient', 'Rendez vous fixé verifiez vos appointements!', '0000-00-00 00:00:00', 'read', 1, 'Information', 10, 2);

-- --------------------------------------------------------

--
-- Structure de la table `patient`
--

CREATE TABLE `patient` (
  `idP` int(11) NOT NULL,
  `idAd` int(11) DEFAULT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `prenom` varchar(50) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `bloodCategory` varchar(10) DEFAULT NULL,
  `sexe` varchar(10) NOT NULL,
  `tel` varchar(12) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `adresse` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `dateAdmission` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `patient`
--

INSERT INTO `patient` (`idP`, `idAd`, `nom`, `prenom`, `age`, `bloodCategory`, `sexe`, `tel`, `email`, `adresse`, `password`, `dateAdmission`) VALUES
(1, 1, 'Benali', 'Imad', 20, 'A+', 'Homme', '0644333344', 'benali.ib19@gmail.com', 'sdkjnkksdjqsodosqkd', 'aaa', '2021-04-28 20:16:53');

-- --------------------------------------------------------

--
-- Structure de la table `posseder`
--

CREATE TABLE `posseder` (
  `idA` int(11) NOT NULL,
  `idR` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `rendezvous`
--

CREATE TABLE `rendezvous` (
  `idRdv` int(11) NOT NULL,
  `idP` int(11) NOT NULL,
  `idM` int(11) NOT NULL,
  `description` varchar(50) DEFAULT NULL,
  `dateRdv` datetime DEFAULT NULL,
  `statut` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `rendezvous`
--

INSERT INTO `rendezvous` (`idRdv`, `idP`, `idM`, `description`, `dateRdv`, `statut`) VALUES
(1, 1, 10, 'ksdfkdsfksdkfsd', '2021-05-18 22:01:58', 'inactif'),
(2, 1, 10, 'sdsdfdsfdsdfs', '2021-05-06 00:00:00', 'actif');

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

CREATE TABLE `role` (
  `idR` int(11) NOT NULL,
  `libelle` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `role`
--

INSERT INTO `role` (`idR`, `libelle`) VALUES
(1, 'Admin'),
(2, 'Medecin'),
(3, 'Patient');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `acces`
--
ALTER TABLE `acces`
  ADD PRIMARY KEY (`idA`);

--
-- Index pour la table `administrateur`
--
ALTER TABLE `administrateur`
  ADD PRIMARY KEY (`idAd`),
  ADD KEY `FK_avoir` (`idR`);

--
-- Index pour la table `calendrier`
--
ALTER TABLE `calendrier`
  ADD PRIMARY KEY (`idCal`),
  ADD KEY `idM` (`idM`);

--
-- Index pour la table `detailrendezvous`
--
ALTER TABLE `detailrendezvous`
  ADD PRIMARY KEY (`iddetrdv`),
  ADD KEY `idRdv` (`idRdv`);

--
-- Index pour la table `medecin`
--
ALTER TABLE `medecin`
  ADD PRIMARY KEY (`idM`),
  ADD KEY `FK_gererD` (`idAd`);

--
-- Index pour la table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`idNoti`);

--
-- Index pour la table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`idP`),
  ADD KEY `FK_gererP` (`idAd`);

--
-- Index pour la table `posseder`
--
ALTER TABLE `posseder`
  ADD PRIMARY KEY (`idA`,`idR`),
  ADD KEY `FK_posseder2` (`idR`);

--
-- Index pour la table `rendezvous`
--
ALTER TABLE `rendezvous`
  ADD PRIMARY KEY (`idP`,`idM`,`idRdv`),
  ADD KEY `FK_association1` (`idM`),
  ADD KEY `idP` (`idP`);

--
-- Index pour la table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`idR`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `acces`
--
ALTER TABLE `acces`
  MODIFY `idA` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `administrateur`
--
ALTER TABLE `administrateur`
  MODIFY `idAd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `calendrier`
--
ALTER TABLE `calendrier`
  MODIFY `idCal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT pour la table `detailrendezvous`
--
ALTER TABLE `detailrendezvous`
  MODIFY `iddetrdv` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `medecin`
--
ALTER TABLE `medecin`
  MODIFY `idM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `notification`
--
ALTER TABLE `notification`
  MODIFY `idNoti` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `patient`
--
ALTER TABLE `patient`
  MODIFY `idP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `role`
--
ALTER TABLE `role`
  MODIFY `idR` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `administrateur`
--
ALTER TABLE `administrateur`
  ADD CONSTRAINT `FK_avoir` FOREIGN KEY (`idR`) REFERENCES `role` (`idR`);

--
-- Contraintes pour la table `calendrier`
--
ALTER TABLE `calendrier`
  ADD CONSTRAINT `calendrier_ibfk_1` FOREIGN KEY (`idM`) REFERENCES `medecin` (`idM`);

--
-- Contraintes pour la table `medecin`
--
ALTER TABLE `medecin`
  ADD CONSTRAINT `FK_gererD` FOREIGN KEY (`idAd`) REFERENCES `administrateur` (`idAd`);

--
-- Contraintes pour la table `patient`
--
ALTER TABLE `patient`
  ADD CONSTRAINT `FK_gererP` FOREIGN KEY (`idAd`) REFERENCES `administrateur` (`idAd`);

--
-- Contraintes pour la table `posseder`
--
ALTER TABLE `posseder`
  ADD CONSTRAINT `FK_posseder1` FOREIGN KEY (`idA`) REFERENCES `acces` (`idA`),
  ADD CONSTRAINT `FK_posseder2` FOREIGN KEY (`idR`) REFERENCES `role` (`idR`);

--
-- Contraintes pour la table `rendezvous`
--
ALTER TABLE `rendezvous`
  ADD CONSTRAINT `FK_association1` FOREIGN KEY (`idM`) REFERENCES `medecin` (`idM`),
  ADD CONSTRAINT `FK_association2` FOREIGN KEY (`idP`) REFERENCES `patient` (`idP`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
