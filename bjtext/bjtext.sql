-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 19 août 2021 à 18:20
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bjtext`
--

-- --------------------------------------------------------

--
-- Structure de la table `abw_admin`
--

CREATE TABLE `abw_admin` (
  `admin_email` varchar(255) NOT NULL,
  `admin_nom` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `abw_admin`
--

INSERT INTO `abw_admin` (`admin_email`, `admin_nom`, `admin_password`) VALUES
('vik2.0@mail.com', 'VIKADMIN', '69eb9474dd41544738c7b87e746223dc786dfb6c');

-- --------------------------------------------------------

--
-- Structure de la table `abw_categories`
--

CREATE TABLE `abw_categories` (
  `categories_id` int(255) NOT NULL,
  `categories_libelles` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `abw_categories`
--

INSERT INTO `abw_categories` (`categories_id`, `categories_libelles`) VALUES
(1, 'DROIT'),
(2, 'FISCALITE'),
(3, 'COMPTABILITE'),
(4, 'AUTRES');

-- --------------------------------------------------------

--
-- Structure de la table `abw_news`
--

CREATE TABLE `abw_news` (
  `news_id` int(255) NOT NULL,
  `news_titre` varchar(70) NOT NULL,
  `news_description` varchar(150) NOT NULL,
  `news_contenutext` text NOT NULL,
  `news_image` varchar(255) NOT NULL,
  `news_slug` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `abw_news`
--

INSERT INTO `abw_news` (`news_id`, `news_titre`, `news_description`, `news_contenutext`, `news_image`, `news_slug`) VALUES
(11112, 'Jojo le comédien', 'Facebook a fait de lui une star', 'Jojo le comédien\r\nFacebook a fait de lui une starFacebook a fait de lui une starFacebook a fait de lui une starFacebook a fait de lui une starFacebook a fait de lui une starFacebook a fait de lui une starFacebook a fait de lui une star Jojo le comédienJojo le comédien Jojo le comédie ces cool meme', '/com/dd/nd/Jojo.jpf', '');

-- --------------------------------------------------------

--
-- Structure de la table `abw_texte`
--

CREATE TABLE `abw_texte` (
  `texte_id` int(255) NOT NULL,
  `texte_titre` varchar(255) NOT NULL,
  `texte_mot_cles` varchar(255) NOT NULL,
  `texte_description` text NOT NULL,
  `texte_fichier_pdf` varchar(255) NOT NULL,
  `texte_categories` varchar(255) NOT NULL,
  `texte_date` date NOT NULL,
  `texte_slug` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `abw_texte`
--

INSERT INTO `abw_texte` (`texte_id`, `texte_titre`, `texte_mot_cles`, `texte_description`, `texte_fichier_pdf`, `texte_categories`, `texte_date`, `texte_slug`) VALUES
(50, 'Texte concernant la securité informatique', 'Sécurité', 'Junior est passionnée par ce metier mais il lui faut suivre quelque norme nationale avant de se lancé vraiment car sans le minimum de loi tout individu peut etre aveuglé à cause des risque jusqu\'a faire du mal à son prochain direct ou indirect', '../../asset/doc/revenus-sur-internet-a-partir-de-l-afrique-2eme-partie.pdf', 'AUTRES', '2021-08-18', 'texte-concernant-la-securite-informatique'),
(56, 'popo', 'ddd', 'Mon pasMon pasMon pasMon pasMon pasMon pasMon pas', '../../asset/doc/chgroupe-.pdf', 'COMPTABILITE', '2021-08-19', 'popo'),
(54, 'lolo', 'qkqkkqfufkdkksksz', 'Les develloppeurs php doivent suivre un certain nombre de norme au risque d\'etre hacker.', '../../asset/doc/36980-installer-un-reseau-wi-fi-sur-ubuntu-et-derives.pdf', 'FISCALITE', '2021-08-18', 'lolo');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `abw_categories`
--
ALTER TABLE `abw_categories`
  ADD PRIMARY KEY (`categories_id`);

--
-- Index pour la table `abw_news`
--
ALTER TABLE `abw_news`
  ADD PRIMARY KEY (`news_id`);

--
-- Index pour la table `abw_texte`
--
ALTER TABLE `abw_texte`
  ADD PRIMARY KEY (`texte_id`),
  ADD KEY `FK_Produit` (`texte_categories`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `abw_categories`
--
ALTER TABLE `abw_categories`
  MODIFY `categories_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `abw_news`
--
ALTER TABLE `abw_news`
  MODIFY `news_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11113;

--
-- AUTO_INCREMENT pour la table `abw_texte`
--
ALTER TABLE `abw_texte`
  MODIFY `texte_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
