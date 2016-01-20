-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 20 Janvier 2016 à 18:53
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `ibnkhaldoun`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

CREATE TABLE IF NOT EXISTS `administrateur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Contenu de la table `administrateur`
--

INSERT INTO `administrateur` (`id`, `nom`, `prenom`, `email`, `password`) VALUES
(1, 'test', 'test', 'test@live.fr', 'test'),
(4, 'boumesasoud', 'Bachir', 'azertyu', 'azerty123'),
(5, 'Dalila', 'Dalila', 'Del@live.fr', 'azerty'),
(6, 'mohammed', 'azerty', 'sidahmed', 'morad'),
(7, 'mohammed', 'azerty', 'sidahmed', 'morad'),
(8, 'Texas', 'Alexis', 'Alexis', 'azerty123'),
(9, 'Dali', 'Del', 'bab@test.dal', 'Del');

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image_id` int(11) NOT NULL,
  `localisation_id` int(11) NOT NULL,
  `titre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `source` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL,
  `isDelete` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_23A0E663DA5256D` (`image_id`),
  KEY `IDX_23A0E66C68BE09C` (`localisation_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=20 ;

--
-- Contenu de la table `article`
--

INSERT INTO `article` (`id`, `image_id`, `localisation_id`, `titre`, `description`, `source`, `date_debut`, `date_fin`, `isDelete`) VALUES
(12, 6, 22, 'emprisonnement', 'bien qu’il attribue son échec à la malveillance et à la jalousie des courtisans, il est dénoncé et jeté en prison. Son internement dura deux ans et prit fin à la mort d’Abu Hinan (1358)', 'Histoire pour tous Biographie', '1357-01-01', '1358-01-01', '1'),
(13, 5, 24, 'Les debuts d''Ibn Khaldoune', 'Alors que la Reconquista se poursuit en Andalus et menace l’Occident musulman, à l’autre extrémité de l’empire arabe se répand la menace mongole annonciatrice de pillages et de massacres. Les États arabes et arabo-berbères du Maghreb et de l’Espagne musulmane connaissent déchirements et assassinats, dus aux confrontations fratricides. Au Maghreb dont les royaumes à géométrie variable se définissent par leurs capitales : Fès des Mérinides, Tlemcen des Abdelwadid, Tunis des Hafcides, d’autres cités sont appelées à jouer le rôle de capitales de principautés plus ou moins dépendantes des trois grands sultanats. C’est le cas de Bejaia (Bougie) et de Constantine, qui exercent leur suzeraineté sur des territoires que ces vieilles cités se disputent sans cesse. Trahisons, rapines, attentats sont la réalité quotidienne de ces États immatures. C’est en cette période de déchirements que naquit à Tunis Wali ed Din Abd er-Rahman ben Mou-hammad ibn Khaldoun. La famille d’Ibn Khaldoun était arabe, originaire d’Al Andalus comme des centaines d’autres qui apportèrent à la Tunisie leur savoir, leur technicité et leur maîtrise dans le domaine agricole. Sa famille s’était fixée à Séville depuis plusieurs générations et ses ancêtres avaient exercé de hautes fonctions civiles. Le jeune Ibn Khaldoun reçut une éducation soignée qui le prépara à devenir un maître réputé en de nombreux domaines. Il acquit une connaissance parfaite du Coran, du Hadith et du Fik. Grâce à l’arrivée massive à Tunis de nombreux savants dans la suite du Mérinide Abd el-Hassan, momentanément maître de Tunis, le jeune Ibn Khaldoun profita pleinement de la Science qui lui était ainsi révélée et garda un souvenir reconnaissant à ses maîtres, dont il peint les mérites dans son Tarif (autobiographie). Mais aux temps heureux succèdent les jours de deuil', 'Histoire pour tous Biographie', '1332-01-01', '1332-01-01', '1'),
(14, 6, 24, 'Sa carriere', 'C’est en 1350 (753 Hégire) que commence sa carrière politique ; il passe au service du Mérinide Abu Ishaq ; mais la défaite subie par le sultan de Fès lui fait commettre sa première volte-face qui sera suivie de nombreuses autres.', 'Histoire pour tous Biographie', '1350-01-01', '1352-01-01', '0'),
(15, 2, 21, 'Ces premiers voyages', 'Il fausse compagnie aux Mérinides (1352) et entreprend un premier voyage coupé de plusieurs séjours dans les marges de l’Ifriqiya, à Ebba, puis Tébessa, ensuite Gafsa et, en dernier lieu, Biskra où il passe l’hiver chez les Beni Muzni, amis de sa famille.', 'Histoire pour tous Biographie', '1352-01-01', '1353-01-01', '0'),
(16, 6, 22, 'Installation à Fés', 'Dès son arrivée à Fès, Ibn Khaldoun est accueilli dans le secrétariat du sultan, mais son ambition s’accorde mal avec cette fonction qu’il juge indigne de son rang. Les circonstances et, particulièrement la maladie d’Abu Hinan, semblent l’avoir incité à conspirer contre ce sultan, dans l’intention de rétablir Abu Abd Allah à Bougie ; mais, bien qu’il attribue son échec à la malveillance et à la jalousie des courtisans, il est dénoncé et jeté en prison. Son internement dura deux ans et prit fin à la mort d’Abu Hinan', 'Histoire pour tous Biographie', '1353-01-01', '1358-01-01', '0'),
(17, 2, 21, 'Autorisation apres Sortie de prison', 'il obtient en 1362 l’autorisation de se rendre à Grenade où le roi naçride Abu Mohammad ben al Ahmar a retrouvé son trône et son grand vizir Ibn al Khattib qui, lorsqu’il s’était réfugié à Fès, avait été conquis par la science et l’intelligence d’Ibn Khaldoun. Celui-ci reçut un excellent accueil à Grenade et fut chargé de négocier un traité de paix avec Pierre II le Cruel, roi de Castille (1364). De nouvelles intrigues de cour et la jalousie d’Ibn el Khattib incitent Ibn Khaldoun à quitter Grenade (1365).', 'Histoire pour tous Biographie', '1362-01-01', '1365-01-01', '0'),
(18, 9, 23, 'Installation à Bougie', 'A Bougie, les circonstances se présentent favorablement pour lui depuis que Mohammad ben el Ahmar a recouvré son trône. Le souverain nomme Ibn Khaldoun chambellan (Hidjaba*), tandis que son frère cadet, Yahya Ibn Khaldoun devient vizir. Entre-temps, la réputation d’Ibn Khaldoun se répand largement à travers le Maghreb, ce qui justifie les fonctions supplémentaires de professeur de Fiq et de prédicateur qu’il exerce à Bougie. Mais il renonce bientôt à ces honneurs, car, une fois de plus, il est en butte aux attaques de la cour et de l’envie des puissants, du moins le prétend-il, et, vraisemblablement, ses propres intrigues l’incitent à abandonner la carrière politique pour se consacrer entièrement à la science et à la recherche. Il aspirait à la paix mais il devait être maintes fois sollicité ou attiré dans de nouvelles intrigues.', 'Histoire pour tous Biographie', '1365-01-01', '1372-01-01', '0'),
(19, 6, 22, 'retour à Fés', 'Après un séjour de réflexion dans le Ribât d’Abu Madyan, il retourne à Fès (1372) où il espère échapper aux sollicitations politiques et pouvoir se consacrer définitivement à l’étude. Mais, de son passé lui reste accolée l’image d’un intrigant, d’un conjurateur, bref, d’un homme dangereux', 'Histoire pour tous Biographie', '1372-01-01', '1372-01-01', '0');

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE IF NOT EXISTS `commentaire` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `article_id` int(11) NOT NULL,
  `contenu` longtext COLLATE utf8_unicode_ci NOT NULL,
  `isvalid` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `pseudo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_67F068BC7294869C` (`article_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Contenu de la table `commentaire`
--

INSERT INTO `commentaire` (`id`, `article_id`, `contenu`, `isvalid`, `pseudo`) VALUES
(1, 14, 'bombe', '1', 'nada'),
(2, 15, 'ordi', '1', 'porte'),
(3, 16, 'chap', '1', 'line');

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

CREATE TABLE IF NOT EXISTS `image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url_img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Contenu de la table `image`
--

INSERT INTO `image` (`id`, `url_img`) VALUES
(1, 'http://www.tlemcen-dz.com/endroits-visiter/plateau-lalla-setti-tlemcen-3.jpg'),
(2, 'http://bejaia-aujourdhui.com/wp-content/uploads/2012/09/Bougie1.jpg'),
(3, 'http://ggob.pagesperso-orange.fr/espagne/seville_13_vue_de_la_cathedrale.JPG'),
(4, 'http://img15.hostingpics.net/pics/988930caire235937.jpg'),
(5, 'http://www.nachoua.com/Tunisie/yy-bab-elkhadra-A.jpg'),
(6, 'http://officetourismemaroc.com/villes/Fes/Fes-Fes_Meknes-Office_tourisme_maroc-Office_tourisme_Fes.jpg'),
(7, 'testurl'),
(8, 'CHIPSTER'),
(9, 'KDKS');

-- --------------------------------------------------------

--
-- Structure de la table `localisation`
--

CREATE TABLE IF NOT EXISTS `localisation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `longitude` double NOT NULL,
  `latitude` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=25 ;

--
-- Contenu de la table `localisation`
--

INSERT INTO `localisation` (`id`, `nom`, `longitude`, `latitude`) VALUES
(21, 'Bougie', 5.0666667, 36.75),
(22, 'Fés', 4.9998, 34.03715),
(23, 'Tlemcen', -1.315, 34.87833),
(24, 'Tunis', 10.16579, 36.81897);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_facebook` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_1D1C63B33BAF2475` (`id_facebook`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `FK_23A0E663DA5256D` FOREIGN KEY (`image_id`) REFERENCES `image` (`id`),
  ADD CONSTRAINT `FK_23A0E66C68BE09C` FOREIGN KEY (`localisation_id`) REFERENCES `localisation` (`id`);

--
-- Contraintes pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD CONSTRAINT `FK_67F068BC7294869C` FOREIGN KEY (`article_id`) REFERENCES `article` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
