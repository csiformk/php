-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : mariadb
-- Généré le : lun. 16 oct. 2023 à 13:17
-- Version du serveur : 10.11.5-MariaDB-1:10.11.5+maria~ubu2204
-- Version de PHP : 8.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `blog`
--
CREATE DATABASE IF NOT EXISTS `blog` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `blog`;

-- --------------------------------------------------------

--
-- Structure de la table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `titre` varchar(500) DEFAULT NULL,
  `contenu` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `post`
--

INSERT INTO `post` (`id`, `titre`, `contenu`, `created_at`, `user_id`) VALUES
(1, 'Haricots blancs à la Navarraise (pochas)', 'Quand je me suis rendue en Navarre il y a quelques jours, je me suis régalée avec des plats à base de pochas, les haricots blancs de Navarre. En rentrant, je me suis dit qu’il fallait absolument que j’essaie de réaliser l’une des recettes dégustées là-bas. Comme il est impossible de trouver ici la variété locale, je les ai remplacés par des cocos de Paimpol.\n\n    Oui, je sais, je vis dangereusement. \n\nLà bas, ils accompagnent ce plat de guindillas, des petits piments au vinaigre. J’avoue que le contraste entre la douceur des haricots et le peps apporté par le piment est vraiment intéressant. je trouve les guindillas très facilement ici, dans le sud ouest, mais je ne sais pas ce qu’il en est chez vous.  Je vous en ai trouvés en ligne au cas où cela vous intéresse.\n\nNous nous sommes régalés avec cette recette. C’est vraiment excellent. ', '2023-10-16 09:09:22', 0),
(2, 'Soupe de courgettes', 'La soupe de courgettes est un bon petit plat, savoureux et réconfortant que j’apprécie particulièrement lors des soirées froides d’automne et d’hiver. Cela me permet de profiter des courgettes récoltées à foison pendant l’été et mettre une touche estivale dans mes repas. je vous explique d’ailleurs comment la conserver en bocaux si vous ne souhaitez pas passer par la case congélation!\n\nFabriquée principalement à base de courgettes, d’oignons, d’ail et de bouillon, cette soupe peut être personnalisée avec d’autres légumes et herbes pour la mettre à votre goût. Comme toujours, vous retrouverez la fiche recette adaptable et imprimable en fin d’article.\n\nBien que traditionnellement consommée chaude, la soupe de courgettes peut aussi être servie froide en été. Ce plat convient également aux végétariens et aux vegan, si fait avec un bouillon sans produits animaux et du fromage frais végétal. De plus, grâce à sa faible teneur en calories et à ses nombreux bienfaits nutritionnels, c’est une option idéale pour ceux qui souhaitent manger sainement.', '2023-10-16 09:09:22', 0),
(3, 'Confiture de figues', 'La confiture de figues est une préparation délicieuse et savoureuse, très appréciée pour son goût unique et sa texture. Elle est obtenue à partir de figues fraîches, blanches ou violettes, qui sont cuites avec du sucre, parfois accompagnées d’autres ingrédients tels que des épices ou des zestes d’agrumes. La confiture de figues se déguste aussi bien au petit-déjeuner qu’en accompagnement de certains plats salés.\n\nLes figues, fruits emblématiques des pays méditerranéens, sont récoltées en fin d’été et au début de l’automne. Elles sont riches en fibres, en vitamines et en minéraux, et sont donc bénéfiques pour la santé. Les confitures à base de figues permettent d’apprécier ce fruit tout au long de l’année, en conservant ses qualités nutritionnelles.', '2023-10-16 09:09:22', 0),
(4, 'Gâteau aux prunes', ' Accueil	Desserts	Gâteau aux prunes\nDesserts\nGâteau aux prunes\nRecette Gateau Prunes 12	\nDifficulté : star onstar offstar off\nNombre de personnes : 6\nPréparation : 15 min\nCuisson : 40 min\n\nUne recette toute simple de gâteau aux fruits, comme on les aime. Ici réalisé avec des prunes mais vous pourriez très bien utiliser n’importe quel autre fruit de saison. Quant aux ingrédients… vous les avez forcément dans votre placard ! Un peu de beurre, du sucre, de la farine et des oeufs. Il n’en faut pas plus pour faire un bon gâteau. Vous pouvez bien sûr y ajouter toute saveur ou garniture de votre choix si vous avez : vanille, pépites de chocolat (selon les fruits utilisés), cannelle, noix etc. ', '2023-10-16 09:12:39', 0);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nom` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `nom`, `email`) VALUES
(1, 'jon doe', 'jojo@yahoo.com'),
(2, 'jane douaw', 'jadou@gmail.com');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
