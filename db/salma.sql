-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  sam. 04 mai 2019 à 17:34
-- Version du serveur :  10.1.37-MariaDB
-- Version de PHP :  5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `salma`
--

-- --------------------------------------------------------

--
-- Structure de la table `acheteur`
--

CREATE TABLE `acheteur` (
  `id_acht` int(11) NOT NULL,
  `nom_acht` text COLLATE utf8_bin,
  `prenom_acht` text COLLATE utf8_bin,
  `email_acht` text COLLATE utf8_bin,
  `mdp_acht` text COLLATE utf8_bin,
  `tel_acht` text COLLATE utf8_bin,
  `etat_acht` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `acht_frn`
--

CREATE TABLE `acht_frn` (
  `id_acht` int(11) NOT NULL,
  `id_frn` int(11) NOT NULL,
  `date_acht_frn` datetime DEFAULT NULL,
  `type` text COLLATE utf8_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `action`
--

CREATE TABLE `action` (
  `idAct` int(11) NOT NULL,
  `id_rec` int(11) NOT NULL,
  `actionAct` text COLLATE utf8_bin,
  `quiAct` text COLLATE utf8_bin,
  `quandAct` text COLLATE utf8_bin,
  `commAct` text COLLATE utf8_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nom_admin` text COLLATE utf8_bin,
  `prenom_admin` text COLLATE utf8_bin,
  `email_admin` text COLLATE utf8_bin,
  `mdp_admin` text COLLATE utf8_bin,
  `tel_admin` text COLLATE utf8_bin,
  `etat_admin` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id_admin`, `nom_admin`, `prenom_admin`, `email_admin`, `mdp_admin`, `tel_admin`, `etat_admin`) VALUES
(1, 'root', 'root', 'root@root.rt', '123', '060000000', 1);

-- --------------------------------------------------------

--
-- Structure de la table `admin_admin`
--

CREATE TABLE `admin_admin` (
  `id_admin` int(11) NOT NULL,
  `Adm_id_admin` int(11) NOT NULL,
  `date_admin_admin` datetime DEFAULT NULL,
  `type` text COLLATE utf8_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `admin_fa`
--

CREATE TABLE `admin_fa` (
  `id_admin` int(11) NOT NULL,
  `id_fa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `ad_acht`
--

CREATE TABLE `ad_acht` (
  `id_admin` int(11) NOT NULL,
  `id_acht` int(11) NOT NULL,
  `date_ad_acht` datetime DEFAULT NULL,
  `type` text COLLATE utf8_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `attream`
--

CREATE TABLE `attream` (
  `idAttrEam` int(11) NOT NULL,
  `id_eam` int(11) NOT NULL,
  `domaineEam` text COLLATE utf8_bin,
  `poidsEam` text COLLATE utf8_bin,
  `critereEam` text COLLATE utf8_bin,
  `indicateurEam` text COLLATE utf8_bin,
  `priseEam` text COLLATE utf8_bin,
  `importanceEam` text COLLATE utf8_bin,
  `ponderationEam` text COLLATE utf8_bin,
  `notationEam` text COLLATE utf8_bin,
  `noteEam` text COLLATE utf8_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `attreav`
--

CREATE TABLE `attreav` (
  `idAttrEav` int(11) NOT NULL,
  `id_eav` int(11) NOT NULL,
  `domaineEav` text COLLATE utf8_bin,
  `poidsEav` text COLLATE utf8_bin,
  `critereEav` text COLLATE utf8_bin,
  `indicateurEav` text COLLATE utf8_bin,
  `priseEav` text COLLATE utf8_bin,
  `importanceEav` text COLLATE utf8_bin,
  `ponderationEav` text COLLATE utf8_bin,
  `notationEav` text COLLATE utf8_bin,
  `noteEav` text COLLATE utf8_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `disposition`
--

CREATE TABLE `disposition` (
  `idDisp` int(11) NOT NULL,
  `id_rec` int(11) NOT NULL,
  `actionDisp` text COLLATE utf8_bin,
  `quiDisp` text COLLATE utf8_bin,
  `quandDisp` text COLLATE utf8_bin,
  `commDisp` text COLLATE utf8_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `evalamont`
--

CREATE TABLE `evalamont` (
  `id_eam` int(11) NOT NULL,
  `id_admin` int(11) DEFAULT NULL,
  `id_acht` int(11) DEFAULT NULL,
  `id_frn` int(11) NOT NULL,
  `etatEam` tinyint(1) DEFAULT NULL,
  `dateEam` datetime DEFAULT NULL,
  `scoreEam` text COLLATE utf8_bin,
  `classeEam` text COLLATE utf8_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `evalaval`
--

CREATE TABLE `evalaval` (
  `id_eav` int(11) NOT NULL,
  `id_admin` int(11) DEFAULT NULL,
  `id_acht` int(11) DEFAULT NULL,
  `id_frn` int(11) NOT NULL,
  `etatEav` tinyint(1) DEFAULT NULL,
  `dateEav` datetime DEFAULT NULL,
  `scoreEav` text COLLATE utf8_bin,
  `classeEav` text COLLATE utf8_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `familleachat`
--

CREATE TABLE `familleachat` (
  `id_fa` int(11) NOT NULL,
  `nom_fa` text COLLATE utf8_bin,
  `code_fa` text COLLATE utf8_bin,
  `type_fa` text COLLATE utf8_bin,
  `service_fa` text COLLATE utf8_bin,
  `classe_fa` text COLLATE utf8_bin,
  `levier_fa` text COLLATE utf8_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `familleachat`
--

INSERT INTO `familleachat` (`id_fa`, `nom_fa`, `code_fa`, `type_fa`, `service_fa`, `classe_fa`, `levier_fa`) VALUES
(1, 'fa', 'fa', 'fa', 'fa', 'Classe A', 'Mise en concurrence');

-- --------------------------------------------------------

--
-- Structure de la table `fournisseur`
--

CREATE TABLE `fournisseur` (
  `id_frn` int(11) NOT NULL,
  `nom_frn` text COLLATE utf8_bin,
  `prenom_frn` text COLLATE utf8_bin,
  `email_frn` text COLLATE utf8_bin,
  `mdp_frn` text COLLATE utf8_bin,
  `tel_frn` text COLLATE utf8_bin,
  `etat_frn` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `frn_seg`
--

CREATE TABLE `frn_seg` (
  `id_frn` int(11) NOT NULL,
  `id_seg` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `objets`
--

CREATE TABLE `objets` (
  `idObj` int(11) NOT NULL,
  `id_rec` int(11) NOT NULL,
  `retardObj` tinyint(1) DEFAULT NULL,
  `qteNCObj` tinyint(1) DEFAULT NULL,
  `qltNCObj` tinyint(1) DEFAULT NULL,
  `autreObj` text COLLATE utf8_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `piecejointes`
--

CREATE TABLE `piecejointes` (
  `idPj` int(11) NOT NULL,
  `id_rec` int(11) NOT NULL,
  `photoPj` text COLLATE utf8_bin,
  `emailPj` text COLLATE utf8_bin,
  `bcPj` text COLLATE utf8_bin,
  `blPj` text COLLATE utf8_bin,
  `riPj` text COLLATE utf8_bin,
  `autrePj` text COLLATE utf8_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `reclamation`
--

CREATE TABLE `reclamation` (
  `id_rec` int(11) NOT NULL,
  `id_admin` int(11) DEFAULT NULL,
  `id_acht` int(11) DEFAULT NULL,
  `id_frn` int(11) NOT NULL,
  `ncmdRec` text COLLATE utf8_bin,
  `contact_rec` text COLLATE utf8_bin,
  `date_rec` datetime DEFAULT NULL,
  `date_rep_rec` datetime DEFAULT NULL,
  `description_rec` text COLLATE utf8_bin,
  `etatRec` text COLLATE utf8_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `rfi`
--

CREATE TABLE `rfi` (
  `id_rfi` int(11) NOT NULL,
  `id_frn` int(11) NOT NULL,
  `rfiRemp` text COLLATE utf8_bin,
  `organRfi` text COLLATE utf8_bin,
  `pfRfi` text COLLATE utf8_bin,
  `bilanRfi` text COLLATE utf8_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `segement`
--

CREATE TABLE `segement` (
  `id_seg` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `id_fa` int(11) NOT NULL,
  `nom_seg` text COLLATE utf8_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `webmaster`
--

CREATE TABLE `webmaster` (
  `id_admin` int(11) NOT NULL,
  `Adm_id_admin` int(11) NOT NULL,
  `nom_wm` text COLLATE utf8_bin,
  `prenom_wm` text COLLATE utf8_bin,
  `email_wm` text COLLATE utf8_bin,
  `mdp_wm` text COLLATE utf8_bin,
  `tel_wm` text COLLATE utf8_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `acheteur`
--
ALTER TABLE `acheteur`
  ADD PRIMARY KEY (`id_acht`);

--
-- Index pour la table `acht_frn`
--
ALTER TABLE `acht_frn`
  ADD PRIMARY KEY (`id_acht`,`id_frn`);

--
-- Index pour la table `action`
--
ALTER TABLE `action`
  ADD PRIMARY KEY (`idAct`),
  ADD KEY `FK_ACTION_ASSOCIATI_RECLAMAT` (`id_rec`);

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Index pour la table `admin_admin`
--
ALTER TABLE `admin_admin`
  ADD PRIMARY KEY (`id_admin`,`Adm_id_admin`);

--
-- Index pour la table `admin_fa`
--
ALTER TABLE `admin_fa`
  ADD PRIMARY KEY (`id_admin`,`id_fa`);

--
-- Index pour la table `ad_acht`
--
ALTER TABLE `ad_acht`
  ADD PRIMARY KEY (`id_admin`,`id_acht`);

--
-- Index pour la table `attream`
--
ALTER TABLE `attream`
  ADD PRIMARY KEY (`idAttrEam`),
  ADD KEY `FK_ATTREAM_ASSOCIATI_EVALAMON` (`id_eam`);

--
-- Index pour la table `attreav`
--
ALTER TABLE `attreav`
  ADD PRIMARY KEY (`idAttrEav`),
  ADD KEY `FK_ATTREAV_ASSOCIATI_EVALAVAL` (`id_eav`);

--
-- Index pour la table `disposition`
--
ALTER TABLE `disposition`
  ADD PRIMARY KEY (`idDisp`),
  ADD KEY `FK_DISPOSIT_ASSOCIATI_RECLAMAT` (`id_rec`);

--
-- Index pour la table `evalamont`
--
ALTER TABLE `evalamont`
  ADD PRIMARY KEY (`id_eam`),
  ADD KEY `FK_EVALAMON_ASSOCIATI_ACHETEUR` (`id_acht`),
  ADD KEY `FK_EVALAMON_ASSOCIATI_FOURNISS` (`id_frn`),
  ADD KEY `FK_EVALAMON_ASSOCIATI_ADMIN` (`id_admin`);

--
-- Index pour la table `evalaval`
--
ALTER TABLE `evalaval`
  ADD PRIMARY KEY (`id_eav`),
  ADD KEY `FK_EVALAVAL_ASSOCIATI_ACHETEUR` (`id_acht`),
  ADD KEY `FK_EVALAVAL_ASSOCIATI_FOURNISS` (`id_frn`);

--
-- Index pour la table `familleachat`
--
ALTER TABLE `familleachat`
  ADD PRIMARY KEY (`id_fa`);

--
-- Index pour la table `fournisseur`
--
ALTER TABLE `fournisseur`
  ADD PRIMARY KEY (`id_frn`);

--
-- Index pour la table `frn_seg`
--
ALTER TABLE `frn_seg`
  ADD PRIMARY KEY (`id_frn`,`id_seg`);

--
-- Index pour la table `objets`
--
ALTER TABLE `objets`
  ADD PRIMARY KEY (`idObj`);

--
-- Index pour la table `piecejointes`
--
ALTER TABLE `piecejointes`
  ADD PRIMARY KEY (`idPj`);

--
-- Index pour la table `reclamation`
--
ALTER TABLE `reclamation`
  ADD PRIMARY KEY (`id_rec`);

--
-- Index pour la table `rfi`
--
ALTER TABLE `rfi`
  ADD PRIMARY KEY (`id_rfi`);

--
-- Index pour la table `segement`
--
ALTER TABLE `segement`
  ADD PRIMARY KEY (`id_seg`);

--
-- Index pour la table `webmaster`
--
ALTER TABLE `webmaster`
  ADD PRIMARY KEY (`id_admin`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `acheteur`
--
ALTER TABLE `acheteur`
  MODIFY `id_acht` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `action`
--
ALTER TABLE `action`
  MODIFY `idAct` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `attream`
--
ALTER TABLE `attream`
  MODIFY `idAttrEam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT pour la table `attreav`
--
ALTER TABLE `attreav`
  MODIFY `idAttrEav` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT pour la table `disposition`
--
ALTER TABLE `disposition`
  MODIFY `idDisp` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `evalamont`
--
ALTER TABLE `evalamont`
  MODIFY `id_eam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `evalaval`
--
ALTER TABLE `evalaval`
  MODIFY `id_eav` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `familleachat`
--
ALTER TABLE `familleachat`
  MODIFY `id_fa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `fournisseur`
--
ALTER TABLE `fournisseur`
  MODIFY `id_frn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `objets`
--
ALTER TABLE `objets`
  MODIFY `idObj` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `piecejointes`
--
ALTER TABLE `piecejointes`
  MODIFY `idPj` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `reclamation`
--
ALTER TABLE `reclamation`
  MODIFY `id_rec` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `rfi`
--
ALTER TABLE `rfi`
  MODIFY `id_rfi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `segement`
--
ALTER TABLE `segement`
  MODIFY `id_seg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `webmaster`
--
ALTER TABLE `webmaster`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `action`
--
ALTER TABLE `action`
  ADD CONSTRAINT `FK_ACTION_ASSOCIATI_RECLAMAT` FOREIGN KEY (`id_rec`) REFERENCES `reclamation` (`id_rec`);

--
-- Contraintes pour la table `attream`
--
ALTER TABLE `attream`
  ADD CONSTRAINT `FK_ATTREAM_ASSOCIATI_EVALAMON` FOREIGN KEY (`id_eam`) REFERENCES `evalamont` (`id_eam`);

--
-- Contraintes pour la table `attreav`
--
ALTER TABLE `attreav`
  ADD CONSTRAINT `FK_ATTREAV_ASSOCIATI_EVALAVAL` FOREIGN KEY (`id_eav`) REFERENCES `evalaval` (`id_eav`);

--
-- Contraintes pour la table `disposition`
--
ALTER TABLE `disposition`
  ADD CONSTRAINT `FK_DISPOSIT_ASSOCIATI_RECLAMAT` FOREIGN KEY (`id_rec`) REFERENCES `reclamation` (`id_rec`);

--
-- Contraintes pour la table `evalamont`
--
ALTER TABLE `evalamont`
  ADD CONSTRAINT `FK_EVALAMON_ASSOCIATI_ACHETEUR` FOREIGN KEY (`id_acht`) REFERENCES `acheteur` (`id_acht`),
  ADD CONSTRAINT `FK_EVALAMON_ASSOCIATI_ADMIN` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`),
  ADD CONSTRAINT `FK_EVALAMON_ASSOCIATI_FOURNISS` FOREIGN KEY (`id_frn`) REFERENCES `fournisseur` (`id_frn`);

--
-- Contraintes pour la table `evalaval`
--
ALTER TABLE `evalaval`
  ADD CONSTRAINT `FK_EVALAVAL_ASSOCIATI_ACHETEUR` FOREIGN KEY (`id_acht`) REFERENCES `acheteur` (`id_acht`),
  ADD CONSTRAINT `FK_EVALAVAL_ASSOCIATI_FOURNISS` FOREIGN KEY (`id_frn`) REFERENCES `fournisseur` (`id_frn`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
