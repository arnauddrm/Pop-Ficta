-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 26 nov. 2019 à 09:42
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `film`
--
CREATE DATABASE IF NOT EXISTS `film` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `film`;

-- --------------------------------------------------------

--
-- Structure de la table `acteur`
--

DROP TABLE IF EXISTS `acteur`;
CREATE TABLE IF NOT EXISTS `acteur` (
  `id_acteur` int(11) NOT NULL AUTO_INCREMENT,
  `nom_acteur` varchar(255) NOT NULL,
  `prenom_acteur` varchar(255) NOT NULL,
  `age_acteur` int(11) NOT NULL,
  `nationalite_acteur` varchar(255) NOT NULL,
  `photo_acteur` text NOT NULL,
  PRIMARY KEY (`id_acteur`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `acteur`
--

INSERT INTO `acteur` (`id_acteur`, `nom_acteur`, `prenom_acteur`, `age_acteur`, `nationalite_acteur`, `photo_acteur`) VALUES
(1, 'Downey Jr.', 'Robert', 54, 'Américain', 'Robert_Downey_Jr.jpg'),
(2, 'Paltrow', 'Gwyneth', 47, 'Américaine', 'gwyneth_paltrow.jpg'),
(3, 'Cheadle', 'Don', 54, 'Américain', 'Don_Cheadle.jpg'),
(4, 'Adams', 'Amy', 45, 'Américaine', 'Amy_Adams.jpg'),
(5, 'Renner', 'Jeremy', 48, 'Américain', 'Jeremy_Renner.jpg'),
(6, 'Hawkins', 'Sally', 43, 'Américaine', 'Sally_Hawkins.jpg'),
(7, 'Shannon', 'Michael', 45, 'Américaine', 'Michael_Shannon.jpg'),
(8, 'Jenkins', 'Richard', 72, 'Américain', 'richard_jenkins.jpg'),
(9, 'Wallis', 'Annabelle', 35, 'Anglaise', 'Annabelle_Wallis.jpg'),
(10, 'Woodard', 'Alfre', 67, 'Américaine', 'Alfre_Woodard.jpg'),
(11, 'Depp', 'Johnny', 56, 'Américain', 'Johnny_Depp.jpg'),
(12, 'De Funès', 'Louis', 68, 'Français', 'Louis_de_Funès.jpg'),
(13, 'Carmet', 'Jean', 73, 'Français', 'Jean_Carmet.jpg'),
(14, 'Gensac', 'Claude', 89, 'Française', 'claude_gensac.jpg'),
(15, 'McKellen', 'Ian', 80, 'Anglais', 'ian.jpg'),
(16, 'Freeman', 'Martin', 48, 'Anglais', 'martin_freeman.jpg'),
(17, 'Armitage', 'Richard', 48, 'Anglais', 'richard_armitage.jpg'),
(18, 'Astin', 'Sean', 48, 'Américain', 'astin_sean.jpg'),
(19, 'Wood', 'Elijah', 38, 'américain', 'Elijah_Wood.jpg'),
(20, 'Mortensen', 'Viggo', 61, 'Américain', 'Viggo_Mortensen.jpg'),
(21, 'Hardy', 'Tom', 42, 'Anglais', 'Tom_Hardy.jpg'),
(22, 'Theron', 'Charlize', 44, 'Afrique du Sud', 'charlize_theron.jpg'),
(23, 'Kravitz', 'Zoë', 30, 'Américaine', 'Zoe_Kravitz.jpg'),
(24, 'Reeves', 'Keanu', 55, 'Américain', 'Keanu_Reeves.jpg'),
(25, 'Fishburne', 'Laurence', 58, 'Américain', 'laurence_fishburne.jpg'),
(26, 'Moss', 'Carrie-Anne', 52, 'Cannadienne', 'Carrie_Anne_Moss.jpg'),
(27, 'May', 'Mathilda', 54, 'Française', 'mathilda_may.jpg'),
(28, 'Cordy', 'Annie', 91, 'Belge', 'Annie_Cordy.jpg'),
(29, 'Hiiragi', 'Rumi', 32, 'Japonaise', 'rumi_hiiragi.jpg'),
(30, 'Irino', 'Miyu', 31, 'Japonais', 'miyu_irino.jpg'),
(31, 'Natsuki', 'Mari', 67, 'Japonaise', 'mari_natsuki.jpg'),
(32, 'Anderson', 'Gillian', 51, 'Américaine', 'Gillian_Anderson.jpg'),
(33, 'Danes', 'Claire', 40, 'Américaine', 'Claire_Danes.jpg'),
(34, 'Hayashibara', 'Megumi', 52, 'Japonaise', 'Hayashibara_Megumi.jpg'),
(35, 'McConaughey', 'Matthew', 50, 'Américain', 'Matthew_McConaughey.jpg'),
(36, 'Hathaway', 'Anne', 37, 'Américaine', 'Anne_Hathaway.jpg'),
(37, 'Caine', 'Michael', 86, 'Anglais', 'Michael_Caine.jpg'),
(38, 'Hoult', 'Nicholas', 29, 'Anglais', 'nicholas_hoult.jpg'),
(39, 'Collins', 'Lily', 30, 'Anglaise', 'lily_collins.jpg'),
(40, 'Meaney', 'Colm', 66, 'Irlandais', 'Colm_Meaney.jpg'),
(41, 'Adlon', 'Pamela', 53, 'Américaine', 'Adlon_Pamela.jpg'),
(42, 'Cruz', 'Penelopa', 45, 'Espagnole', 'Penelope_Cruz.jpg'),
(43, 'Whitaker', 'Forest', 58, 'Américain', 'Forest_Whitaker.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `film`
--

DROP TABLE IF EXISTS `film`;
CREATE TABLE IF NOT EXISTS `film` (
  `id_film` int(11) NOT NULL AUTO_INCREMENT,
  `titre_film` varchar(255) NOT NULL,
  `duree_film` varchar(255) NOT NULL,
  `synopsis_film` text NOT NULL,
  `date_sortie_film` date NOT NULL,
  `pegi_film` int(11) NOT NULL,
  `studio_film` varchar(255) NOT NULL,
  `affiche_film` text NOT NULL,
  `bande_film` text NOT NULL,
  PRIMARY KEY (`id_film`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `film`
--

INSERT INTO `film` (`id_film`, `titre_film`, `duree_film`, `synopsis_film`, `date_sortie_film`, `pegi_film`, `studio_film`, `affiche_film`, `bande_film`) VALUES
(1, 'Iron Man 3 ', '2h11', 'Tony Stark, l’industriel flamboyant qui est aussi Iron Man, est confronté cette fois à un ennemi qui va attaquer sur tous les fronts. Lorsque son univers personnel est détruit, Stark se lance dans une quête acharnée pour retrouver les coupables. Plus que jamais, son courage va être mis à l’épreuve, à chaque instant. Dos au mur, il ne peut plus compter que sur ses inventions, son ingéniosité, et son instinct pour protéger ses proches. Alors qu’il se jette dans la bataille, Stark va enfin découvrir la réponse à la question qui le hante secrètement depuis si longtemps : est-ce l’homme qui fait le costume ou bien le costume qui fait l’homme ?', '2013-04-24', 8, 'The Walt Disney Company France', 'ironman3.jpg', 'https://www.youtube.com/watch?v=RpAqrMNjwzc'),
(2, 'Premier Contact', '1h56', 'Lorsque de mystérieux vaisseaux venus du fond de l’espace surgissent un peu partout sur Terre, une équipe d’experts est rassemblée sous la direction de la linguiste Louise Banks afin de tenter de comprendre leurs intentions.\r\nFace à l’énigme que constituent leur présence et leurs messages mystérieux, les réactions dans le monde sont extrêmes et l’humanité se retrouve bientôt au bord d’une guerre absolue. Louise Banks et son équipe n’ont que très peu de temps pour trouver des réponses. Pour les obtenir, la jeune femme va prendre un risque qui pourrait non seulement lui coûter la vie, mais détruire le genre humain…', '2016-12-07', 14, 'Sony Pictures Releasing France', 'premier-contact.jpg', 'https://www.youtube.com/watch?v=rcOKL69bKpQ'),
(3, 'La forme de l\'eau', '2h03', 'Modeste employée d’un laboratoire gouvernemental ultrasecret, Elisa mène une existence solitaire, d’autant plus isolée qu’elle est muette. Sa vie bascule à jamais lorsqu’elle et sa collègue Zelda découvrent une expérience encore plus secrète que les autres…', '2018-02-21', 16, 'Twentieth Century Fox France', 'la_forme_de _l_eau.jpg', 'https://www.youtube.com/watch?v=0Wwtl1G7ye4'),
(4, 'Annabelle', '1h38', 'John Form est certain d\'avoir déniché le cadeau de ses rêves pour sa femme Mia, qui attend un enfant. Il s\'agit d\'une poupée ancienne, très rare, habillée dans une robe de mariée d\'un blanc immaculé. Mais Mia, d\'abord ravie par son cadeau, va vite déchanter.Une nuit, les membres d\'une secte satanique s\'introduisent dans leur maison et agressent sauvagement le couple, paniqué. Et ils ne se contentent pas de faire couler le sang et de semer la terreur – ils donnent vie à une créature monstrueuse, pire encore que leurs sinistres méfaits, permettant aux âmes damnées de revenir sur Terre : Annabelle…', '2014-10-08', 12, 'Warner Bros France', 'annabelle.jpg', 'https://www.youtube.com/watch?v=AvhFyep3r5M'),
(5, 'pirate des caraîbes: La fontaine de jouvence', '2h16', 'Dans cette histoire pleine d’action, où vérité, trahison, jeunesse éternelle et mort forment un cocktail explosif, le capitaine Jack Sparrow retrouve une femme qu’il a connue autrefois. Leurs liens sont-ils faits d’amour ou cette femme n’est-elle qu’une aventurière sans scrupules qui cherche à l’utiliser pour découvrir la légendaire Fontaine de Jouvence ? Lorsqu’elle l’oblige à embarquer à bord du Queen Anne’s Revenge, le bateau du terrible pirate Barbe-Noire, Jack ne sait plus ce qu’il doit craindre le plus : le redoutable maître du bateau ou cette femme surgie de son passé...', '2011-05-18', 0, 'The Walt Disney Company France', 'pirate_des_caraibes_4.jpg', 'https://www.youtube.com/watch?v=Kcqf4RqBaUI'),
(6, 'La soupe aux choux', '1h38', 'Le Glaude et le Bombé, deux vieux paysans portés sur la bouteille, vivent très retirés de la vie moderne. Une nuit, un extra-terrestre atterrit en soucoupe volante dans le jardin du Glaude. En gage de bienvenue, ce dernier lui offre un peu de sa fameuse soupe aux choux...', '1981-12-02', 0, '', 'soupe_aux_choux.jpg', 'https://www.youtube.com/watch?v=N2dtpnUk4ls'),
(7, 'le seigneur des anneaux: le retour  du roi', '3h21', 'Les armées de Sauron ont attaqué Minas Tirith, la capitale de Gondor. Jamais ce royaume autrefois puissant n\'a eu autant besoin de son roi. Mais Aragorn trouvera-t-il en lui la volonté d\'accomplir sa destinée ?Tandis que Gandalf s\'efforce de soutenir les forces brisées de Gondor, Théoden exhorte les guerriers de Rohan à se joindre au combat. Mais malgré leur courage et leur loyauté, les forces des Hommes ne sont pas de taille à lutter contre les innombrables légions d\'ennemis qui s\'abattent sur le royaume...Voyageant à travers les terres ennemies, ce dernier doit se reposer sur Sam et Gollum, tandis que l\'Anneau continue de le tenter...', '2003-12-17', 10, 'Warner Bros France', 'sda_retour_du_roi.jpg', 'https://www.youtube.com/watch?v=RCuDRcK0BBM'),
(8, 'Bilbo le hobbit: une voyage inattendu', '2h49', 'Dans UN VOYAGE INATTENDU, Bilbon Sacquet cherche à reprendre le Royaume perdu des Nains d\'Erebor, conquis par le redoutable dragon Smaug. Alors qu\'il croise par hasard la route du magicien Gandalf le Gris, Bilbon rejoint une bande de 13 nains dont le chef n\'est autre que le légendaire guerrier Thorin Écu-de-Chêne. Leur périple les conduit au cœur du Pays Sauvage, où ils devront affronter des Gobelins, des Orques, des Ouargues meurtriers, des Araignées géantes, des Métamorphes et des Sorciers…Bien qu\'ils se destinent à mettre le cap sur l\'Est et les terres désertiques du Mont Solitaire, ils doivent d\'abord échapper aux tunnels des Gobelins, où Bilbon rencontre la créature qui changera à jamais le cours de sa vie : Gollum.C\'est là qu\'avec Gollum, sur les rives d\'un lac souterrain, le modeste Bilbon Sacquet non seulement se surprend à faire preuve d\'un courage et d\'une intelligence inattendus, mais parvient à mettre la main sur le \"précieux\" anneau de Gollum qui recèle des pouvoirs cachés… Ce simple anneau d\'or est lié au sort de la Terre du Milieu, sans que Bilbon s\'en doute encore…', '2012-12-12', 10, 'Warner Bros France', 'bilbo_voyage inattendu.jpg', 'https://www.youtube.com/watch?v=tiy7peMH3g8'),
(9, 'Mad Max: Fury Road', '2h00', 'Hanté par un lourd passé, Mad Max estime que le meilleur moyen de survivre est de rester seul. Cependant, il se retrouve embarqué par une bande qui parcourt la Désolation à bord d\'un véhicule militaire piloté par l\'Imperator Furiosa. Ils fuient la Citadelle où sévit le terrible Immortan Joe qui s\'est fait voler un objet irremplaçable. Enragé, ce Seigneur de guerre envoie ses hommes pour traquer les rebelles impitoyablement…', '2015-05-14', 14, 'Warner Bros France', 'mad_max_fury_road.jpg', 'https://www.youtube.com/watch?v=mtolAJbj44s'),
(10, 'Matrix: reloaded', '2h18', 'Neo apprend à mieux contrôler ses dons naturels, alors même que Sion s\'apprête à tomber sous l\'assaut de l\'Armée des Machines. D\'ici quelques heures, 250 000 Sentinelles programmées pour anéantir notre espèce envahiront la dernière enclave humaine de la Terre.\r\nMais Morpheus galvanise les citoyens de Sion en leur rappelant la Parole de l\'Oracle : il est encore temps pour l\'Elu d\'arrêter la guerre contre les Machines. Tous les espoirs se reportent dès lors sur Neo. Au long de sa périlleuse plongée au sein de la Matrix et de sa propre destinée, ce dernier sera confronté à une résistance croissante, une vérité encore plus aveuglante, un choix encore plus douloureux que tout ce qu\'il avait jamais imaginé.', '2003-05-16', 14, 'Warner Bros France', 'MatrixReloaded.jpg', 'https://www.youtube.com/watch?v=0ha2XYVC7_s'),
(11, 'pocahontas', '1h22', 'En l\'an 1607, La belle Pocahontas aura-t-elle le pouvoir d\'éviter la guerre entre les colons anglais et son peuple, les Powhatan, et de sauvegarder ainsi ses amours avec le fringant aventurier John Smith, qui accompagne les colons ?', '1995-11-22', 0, 'Disney', 'pocahontas', 'https://www.youtube.com/watch?v=yQTq1BSChqY'),
(12, 'Le voyage de chihiro', '2h05', 'Chihiro, dix ans, a tout d\'une petite fille capricieuse. Elle s\'apprête à emménager avec ses parents dans une nouvelle demeure.\r\nSur la route, la petite famille se retrouve face à un immense bâtiment rouge au centre duquel s\'ouvre un long tunnel. De l\'autre côté du passage se dresse une ville fantôme. Les parents découvrent dans un restaurant désert de nombreux mets succulents et ne tardent pas à se jeter dessus. Ils se retrouvent alors transformés en cochons.\r\nPrise de panique, Chihiro s\'enfuit et se dématérialise progressivement. L\'énigmatique Haku se charge de lui expliquer le fonctionnement de l\'univers dans lequel elle vient de pénétrer. Pour sauver ses parents, la fillette va devoir faire face à la terrible sorcière Yubaba, qui arbore les traits d\'une harpie méphistophélique.', '2002-08-29', 0, 'Buena Vista International', 'chihiro', 'https://www.youtube.com/watch?v=bWrPauTUHd4'),
(13, 'Princesse Mononoke', '2h15', 'Au XVe siècle, durant l\'ère Muromachi, la forêt japonaise, jadis protégée par des animaux géants, se dépeuple à cause de l\'homme. Un sanglier transformé en démon dévastateur en sort et attaque le village d\'Ashitaka, futur chef du clan Emishi. Touché par le sanglier qu\'il a tué, celui-ci est forcé de partir à la recherche du dieu Cerf pour lever la malédiction qui lui gangrène le bras.', '2000-01-12', 12, '', 'mononoke.jpg', 'https://www.youtube.com/watch?v=3JG6JDuZUoc'),
(14, 'les enfants loups: Ame et Yuki', '1h57', 'Hana et ses deux enfants, Ame et Yuki, vivent discrètement dans un coin tranquille de la ville. Leur vie est simple et joyeuse, mais ils cachent un secret : leur père est un homme-loup. Quand celui-ci disparaît brutalement, Hana décide de quitter la ville pour élever ses enfants à l\'abri des regards. Ils emménagent dans un village proche d\'une forêt luxuriante…', '2012-08-29', 6, 'Eurozoom', 'ame_et_yuki.jpg', 'https://www.youtube.com/watch?v=R5wbMhgVwPc'),
(15, 'interstellar', '2h49', 'Le film raconte les aventures d’un groupe d’explorateurs qui utilisent une faille récemment découverte dans l’espace-temps afin de repousser les limites humaines et partir à la conquête des distances astronomiques dans un voyage interstellaire. ', '2014-11-05', 12, 'Warner Bros France', 'interstellar.jpg', '\r\nhttps://www.youtube.com/watch?v=VaOijhK3CRU'),
(16, 'Tolkien', '1h52', 'TOLKIEN revient sur la jeunesse et les années d’apprentissage du célèbre auteur. Orphelin, il trouve l’amitié, l’amour et l’inspiration au sein d’un groupe de camarades de son école. Mais la Première Guerre Mondiale éclate et menace de détruire cette « communauté ». Ce sont toutes ces expériences qui vont inspirer Tolkien dans l’écriture de ses romans de la Terre du Milieu.', '2019-06-19', 12, 'Twentieth Century', 'tolkien.jpg', 'https://www.youtube.com/watch?v=i5AdZvSs33k');

-- --------------------------------------------------------

--
-- Structure de la table `genre`
--

DROP TABLE IF EXISTS `genre`;
CREATE TABLE IF NOT EXISTS `genre` (
  `id_genre` int(11) NOT NULL AUTO_INCREMENT,
  `type_genre` varchar(5000) NOT NULL,
  PRIMARY KEY (`id_genre`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `genre`
--

INSERT INTO `genre` (`id_genre`, `type_genre`) VALUES
(1, 'Action'),
(2, 'Science-fiction'),
(3, 'Fantastique'),
(4, 'Drame'),
(5, 'Romance'),
(6, 'Épouvante'),
(7, 'Horreur'),
(8, 'Comédie'),
(9, 'Aventure'),
(10, 'Animation'),
(11, 'Biopic');

-- --------------------------------------------------------

--
-- Structure de la table `jouer`
--

DROP TABLE IF EXISTS `jouer`;
CREATE TABLE IF NOT EXISTS `jouer` (
  `id_acteur` int(11) NOT NULL,
  `id_film` int(11) NOT NULL,
  PRIMARY KEY (`id_acteur`,`id_film`),
  KEY `jouer_film0_FK` (`id_film`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `jouer`
--

INSERT INTO `jouer` (`id_acteur`, `id_film`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 2),
(5, 2),
(43, 2),
(6, 3),
(7, 3),
(8, 3),
(9, 4),
(10, 4),
(11, 5),
(42, 5),
(12, 6),
(13, 6),
(14, 6),
(18, 7),
(19, 7),
(20, 7),
(15, 8),
(16, 8),
(17, 8),
(21, 9),
(22, 9),
(23, 9),
(24, 10),
(25, 10),
(26, 10),
(27, 11),
(28, 11),
(29, 12),
(30, 12),
(31, 12),
(32, 13),
(33, 13),
(34, 14),
(35, 15),
(36, 15),
(37, 15),
(38, 16),
(39, 16),
(40, 16);

-- --------------------------------------------------------

--
-- Structure de la table `realisateur`
--

DROP TABLE IF EXISTS `realisateur`;
CREATE TABLE IF NOT EXISTS `realisateur` (
  `id_real` int(11) NOT NULL AUTO_INCREMENT,
  `nom_real` varchar(255) NOT NULL,
  `prenom_real` varchar(255) NOT NULL,
  `age_real` int(11) NOT NULL,
  `nationalite_real` varchar(255) NOT NULL,
  `photo_real` text NOT NULL,
  PRIMARY KEY (`id_real`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `realisateur`
--

INSERT INTO `realisateur` (`id_real`, `nom_real`, `prenom_real`, `age_real`, `nationalite_real`, `photo_real`) VALUES
(1, 'Black', 'Shane', 57, 'Américain', 'shane_black.jpg'),
(2, 'Villeneuve', 'Denis', 52, 'Canadien', 'denis_villeneuve.jpg'),
(3, 'Del Toro', 'Guillermo', 55, 'Mexicain', 'guillermo_del_toro.jpg'),
(4, 'R. Leonetti', 'John', 63, 'Américain', 'john_r_leonetti.jpg'),
(5, 'Marshall', 'Rob', 59, 'Américain', 'rob_marshall.jpg'),
(6, 'Girault', 'Jean', 58, 'Français', 'jean_girault.jpg'),
(7, 'Jackson', 'Peter', 58, 'New-Zealand', 'peter_jackson.jpg'),
(8, 'Miller', 'George', 74, 'Australien', 'george_miller.jpg'),
(9, 'Wachowski', 'Lilly', 51, 'Américain', 'les_frèrex_wachowski.jpg'),
(10, 'Wachowski', 'Lana', 54, 'Américain', 'les_frèrex_wachowski.jpg'),
(11, 'Goldbarg', 'Eric', 64, 'Américain', 'eric_goldberg.jpg'),
(12, 'Miyazaki', 'Hayao', 78, 'Japonais', 'Hayao_Miyazaki.jpg'),
(13, 'Hosoda', 'Mamoru', 52, 'Japonais', 'Mamoru_Hosoda.jpg'),
(14, 'Nolan', 'Christopher', 49, 'Anglais', 'Christopher_Nolan.jpg'),
(15, 'Karukoski', 'Dome', 42, 'Grec', 'Dome_Karukoski.jpg'),
(16, 'Gabriel', 'Mike', 65, 'Américain', 'Mike_Gabriel.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `realiser`
--

DROP TABLE IF EXISTS `realiser`;
CREATE TABLE IF NOT EXISTS `realiser` (
  `id_film` int(11) NOT NULL,
  `id_real` int(11) NOT NULL,
  PRIMARY KEY (`id_film`,`id_real`),
  KEY `realiser_realisateur0_FK` (`id_real`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `realiser`
--

INSERT INTO `realiser` (`id_film`, `id_real`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 7),
(9, 8),
(10, 9),
(10, 10),
(11, 11),
(12, 12),
(13, 12),
(14, 13),
(15, 14),
(16, 15);

-- --------------------------------------------------------

--
-- Structure de la table `regarder`
--

DROP TABLE IF EXISTS `regarder`;
CREATE TABLE IF NOT EXISTS `regarder` (
  `id_utilisateur` int(11) NOT NULL,
  `id_film` int(11) NOT NULL,
  `note` int(11) NOT NULL,
  `commentaire` text NOT NULL,
  PRIMARY KEY (`id_utilisateur`,`id_film`),
  KEY `regarder_film0_FK` (`id_film`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `type`
--

DROP TABLE IF EXISTS `type`;
CREATE TABLE IF NOT EXISTS `type` (
  `id_genre` int(11) NOT NULL,
  `id_film` int(11) NOT NULL,
  PRIMARY KEY (`id_genre`,`id_film`),
  KEY `type_film0_FK` (`id_film`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `type`
--

INSERT INTO `type` (`id_genre`, `id_film`) VALUES
(1, 1),
(2, 1),
(2, 2),
(3, 3),
(4, 3),
(5, 3),
(6, 4),
(7, 4),
(2, 5),
(8, 5),
(8, 6),
(3, 7),
(9, 7),
(3, 8),
(9, 8),
(1, 9),
(2, 9),
(1, 10),
(2, 10),
(9, 11),
(10, 11),
(9, 12),
(10, 12),
(4, 13),
(10, 13),
(3, 14),
(10, 14),
(2, 15),
(4, 15),
(4, 16),
(11, 16);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id_utilisateur` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo_utilisateur` varchar(255) NOT NULL,
  `mdp_utilisateur` varchar(255) NOT NULL,
  `role_utilisateur` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_utilisateur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `jouer`
--
ALTER TABLE `jouer`
  ADD CONSTRAINT `jouer_acteur_FK` FOREIGN KEY (`id_acteur`) REFERENCES `acteur` (`id_acteur`),
  ADD CONSTRAINT `jouer_film0_FK` FOREIGN KEY (`id_film`) REFERENCES `film` (`id_film`);

--
-- Contraintes pour la table `realiser`
--
ALTER TABLE `realiser`
  ADD CONSTRAINT `realiser_film_FK` FOREIGN KEY (`id_film`) REFERENCES `film` (`id_film`),
  ADD CONSTRAINT `realiser_realisateur0_FK` FOREIGN KEY (`id_real`) REFERENCES `realisateur` (`id_real`);

--
-- Contraintes pour la table `regarder`
--
ALTER TABLE `regarder`
  ADD CONSTRAINT `regarder_film0_FK` FOREIGN KEY (`id_film`) REFERENCES `film` (`id_film`),
  ADD CONSTRAINT `regarder_utilisateur_FK` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id_utilisateur`);

--
-- Contraintes pour la table `type`
--
ALTER TABLE `type`
  ADD CONSTRAINT `type_film0_FK` FOREIGN KEY (`id_film`) REFERENCES `film` (`id_film`),
  ADD CONSTRAINT `type_genre_FK` FOREIGN KEY (`id_genre`) REFERENCES `genre` (`id_genre`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
