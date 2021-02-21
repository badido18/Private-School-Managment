-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : Dim 21 fév. 2021 à 03:05
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `EcolepPrv`
--

-- --------------------------------------------------------

--
-- Structure de la table `activities`
--

CREATE TABLE `activities` (
  `id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `title` varchar(256) NOT NULL,
  `content` varchar(2500) NOT NULL,
  `imgurl` varchar(256) DEFAULT NULL,
  `everyone` tinyint(1) DEFAULT NULL,
  `teachers` tinyint(1) DEFAULT NULL,
  `parents` tinyint(1) DEFAULT NULL,
  `students` tinyint(1) DEFAULT NULL,
  `level1` tinyint(1) DEFAULT NULL,
  `level2` tinyint(1) DEFAULT NULL,
  `level3` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `title`, `content`, `imgurl`, `everyone`, `teachers`, `parents`, `students`, `level1`, `level2`, `level3`) VALUES
(1, 'Titre', 'Contenu', NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL),
(2, 'Title2', 'Content 2', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL),
(3, 'Title2', 'Content 2', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL),
(4, 'title3', 'conentt 3', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL),
(5, 'title 4', 'hmida', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL),
(6, 'Everyonetitle', 'content', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `carrousels`
--

CREATE TABLE `carrousels` (
  `id` int(11) NOT NULL,
  `imgurl` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `carrousels`
--

INSERT INTO `carrousels` (`id`, `imgurl`) VALUES
(1, 'nourl');

-- --------------------------------------------------------

--
-- Structure de la table `classes`
--

CREATE TABLE `classes` (
  `id` int(11) NOT NULL,
  `level` varchar(50) NOT NULL,
  `year` int(11) NOT NULL,
  `major` varchar(50) DEFAULT NULL,
  `number` int(11) NOT NULL,
  `scheduleurl` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `classes`
--

INSERT INTO `classes` (`id`, `level`, `year`, `major`, `number`, `scheduleurl`) VALUES
(1, 'Primaire', 4, NULL, 1, 'NoUrl');

-- --------------------------------------------------------

--
-- Structure de la table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `content` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `contacts`
--

INSERT INTO `contacts` (`id`, `type`, `content`) VALUES
(1, 'Email', 'esi@projetweb.dz'),
(2, 'Telephone', '0233364892');

-- --------------------------------------------------------

--
-- Structure de la table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `teacherid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `foodmenu`
--

CREATE TABLE `foodmenu` (
  `id` int(11) NOT NULL,
  `meal` varchar(250) NOT NULL,
  `dayname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `foodmenu`
--

INSERT INTO `foodmenu` (`id`, `meal`, `dayname`) VALUES
(1, 'Soupe de legumes - Salade de thon - Fruit de Saison - Jus d\'orange', 'Dimanche');

-- --------------------------------------------------------

--
-- Structure de la table `marks`
--

CREATE TABLE `marks` (
  `id` int(11) NOT NULL,
  `studentid` int(11) NOT NULL,
  `courseid` int(11) NOT NULL,
  `mark` varchar(10) NOT NULL,
  `observation` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `observations`
--

CREATE TABLE `observations` (
  `id` int(11) NOT NULL,
  `studentid` int(11) NOT NULL,
  `teacherid` int(11) DEFAULT NULL,
  `courseid` int(11) DEFAULT NULL,
  `content` varchar(1500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `parents`
--

CREATE TABLE `parents` (
  `id` int(11) NOT NULL,
  `fistname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `birthdate` date NOT NULL,
  `profession` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `practice`
--

CREATE TABLE `practice` (
  `studentid` int(11) NOT NULL,
  `activityid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `presentation`
--

CREATE TABLE `presentation` (
  `id` int(11) NOT NULL,
  `paragraph` varchar(2500) NOT NULL,
  `imgurl` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `presentation`
--

INSERT INTO `presentation` (`id`, `paragraph`, `imgurl`) VALUES
(1, 'Presentation de lecole prive du projet web', 'Url de l\'image');

-- --------------------------------------------------------

--
-- Structure de la table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `birthdate` date NOT NULL,
  `classid` int(11) DEFAULT NULL,
  `parentid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `taught`
--

CREATE TABLE `taught` (
  `classid` int(11) NOT NULL,
  `courseid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `birthdate` date NOT NULL,
  `workhours` int(11) NOT NULL DEFAULT 0,
  `receptiontime` varchar(50) DEFAULT NULL,
  `scheduleurl` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `teachers`
--

INSERT INTO `teachers` (`id`, `firstname`, `lastname`, `birthdate`, `workhours`, `receptiontime`, `scheduleurl`) VALUES
(1, 'Nabil', 'Dellys', '1988-11-20', 13, 'Mardi 11H', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `passwd` varchar(64) NOT NULL,
  `type` int(10) NOT NULL,
  `address` varchar(256) DEFAULT NULL,
  `phone1` varchar(16) DEFAULT NULL,
  `phone2` varchar(16) DEFAULT NULL,
  `phone3` varchar(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `passwd`, `type`, `address`, `phone1`, `phone2`, `phone3`) VALUES
(1, 'dellys_hachemi', 'dellys@esi.dz', 'b47ea832576a75814e13351dcc97eaa985b9c6b7', 1, NULL, NULL, NULL, NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `carrousels`
--
ALTER TABLE `carrousels`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `linkteacher` (`teacherid`);

--
-- Index pour la table `foodmenu`
--
ALTER TABLE `foodmenu`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `marks`
--
ALTER TABLE `marks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `linkstudentid2` (`studentid`),
  ADD KEY `linkcourseid2` (`courseid`);

--
-- Index pour la table `observations`
--
ALTER TABLE `observations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `linkestudentid` (`studentid`),
  ADD KEY `linkteacherremark` (`teacherid`),
  ADD KEY `linkcourseremark` (`courseid`);

--
-- Index pour la table `parents`
--
ALTER TABLE `parents`
  ADD KEY `linkuserkey3` (`id`);

--
-- Index pour la table `practice`
--
ALTER TABLE `practice`
  ADD KEY `linkstudentactivityid` (`studentid`),
  ADD KEY `liinkactivitystudentid` (`activityid`);

--
-- Index pour la table `presentation`
--
ALTER TABLE `presentation`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `students`
--
ALTER TABLE `students`
  ADD KEY `linkuserkey` (`id`),
  ADD KEY `linkclasskey` (`classid`),
  ADD KEY `linkparentkey` (`parentid`);

--
-- Index pour la table `taught`
--
ALTER TABLE `taught`
  ADD KEY `linkclassidcourseid` (`classid`),
  ADD KEY `linkcourseidclassid` (`courseid`);

--
-- Index pour la table `teachers`
--
ALTER TABLE `teachers`
  ADD KEY `linkuserkey2` (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `activities`
--
ALTER TABLE `activities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `carrousels`
--
ALTER TABLE `carrousels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `classes`
--
ALTER TABLE `classes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `foodmenu`
--
ALTER TABLE `foodmenu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `marks`
--
ALTER TABLE `marks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `observations`
--
ALTER TABLE `observations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `presentation`
--
ALTER TABLE `presentation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `linkteacher` FOREIGN KEY (`teacherid`) REFERENCES `teachers` (`id`);

--
-- Contraintes pour la table `marks`
--
ALTER TABLE `marks`
  ADD CONSTRAINT `linkcourseid2` FOREIGN KEY (`courseid`) REFERENCES `courses` (`id`),
  ADD CONSTRAINT `linkstudentid2` FOREIGN KEY (`studentid`) REFERENCES `students` (`id`);

--
-- Contraintes pour la table `observations`
--
ALTER TABLE `observations`
  ADD CONSTRAINT `linkcourseremark` FOREIGN KEY (`courseid`) REFERENCES `courses` (`id`),
  ADD CONSTRAINT `linkestudentid` FOREIGN KEY (`studentid`) REFERENCES `students` (`id`),
  ADD CONSTRAINT `linkteacherremark` FOREIGN KEY (`teacherid`) REFERENCES `teachers` (`id`);

--
-- Contraintes pour la table `parents`
--
ALTER TABLE `parents`
  ADD CONSTRAINT `linkuserkey3` FOREIGN KEY (`id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `practice`
--
ALTER TABLE `practice`
  ADD CONSTRAINT `liinkactivitystudentid` FOREIGN KEY (`activityid`) REFERENCES `activities` (`id`),
  ADD CONSTRAINT `linkstudentactivityid` FOREIGN KEY (`studentid`) REFERENCES `students` (`id`);

--
-- Contraintes pour la table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `linkclasskey` FOREIGN KEY (`classid`) REFERENCES `classes` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `linkparentkey` FOREIGN KEY (`parentid`) REFERENCES `parents` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `linkuserkey` FOREIGN KEY (`id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `taught`
--
ALTER TABLE `taught`
  ADD CONSTRAINT `linkclassidcourseid` FOREIGN KEY (`classid`) REFERENCES `classes` (`id`),
  ADD CONSTRAINT `linkcourseidclassid` FOREIGN KEY (`courseid`) REFERENCES `courses` (`id`);

--
-- Contraintes pour la table `teachers`
--
ALTER TABLE `teachers`
  ADD CONSTRAINT `linkuserkey2` FOREIGN KEY (`id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
