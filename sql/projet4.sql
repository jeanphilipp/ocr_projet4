-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  jeu. 09 mai 2019 à 16:10
-- Version du serveur :  10.1.37-MariaDB
-- Version de PHP :  7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projet4`
--

-- --------------------------------------------------------

--
-- Structure de la table `chapters`
--

CREATE TABLE `chapters` (
  `id_chapter` int(11) NOT NULL,
  `chapt_title` varchar(50) NOT NULL,
  `chapt_sentence` varchar(50) NOT NULL,
  `chapt_content` longtext NOT NULL,
  `chapt_datecreated` datetime NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `chapters`
--

INSERT INTO `chapters` (`id_chapter`, `chapt_title`, `chapt_sentence`, `chapt_content`, `chapt_datecreated`, `id_user`) VALUES
(1, 'Premier chapitre', 'Lorem ipsum dolor sit amet', 'Chapitre 1 : Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus faucibus lorem a enim congue fringilla. Maecenas augue leo, mattis at sagittis sit amet, ullamcorper a est. Vestibulum blandit lorem eget congue vehicula. Sed imperdiet nunc magna, id faucibus tortor dignissim eu. Suspendisse sit amet arcu ut odio pulvinar dignissim sagittis nec felis. Nunc euismod sapien id eleifend cursus. Mauris non felis justo. Suspendisse ac augue tempor, hendrerit mauris vitae, mollis nisl. In hac habitasse platea dictumst. Suspendisse vulputate eget erat nec malesuada. Duis dui erat, porta non lacus vitae, malesuada tempus metus. Aenean iaculis est lacus, sollicitudin feugiat lorem consectetur non.\r\n\r\nPhasellus ultricies augue ac sapien pellentesque bibendum. Phasellus semper tincidunt dolor vitae ullamcorper. Fusce et eros a nisi ultrices faucibus. Phasellus in tincidunt mi. Quisque vitae lorem interdum nisi auctor tempor. Donec rutrum dui augue, id rhoncus turpis imperdiet nec. Proin vitae rhoncus sapien. Curabitur in purus tempor, sagittis arcu sit amet, sagittis tellus. Pellentesque faucibus risus ut lorem ullamcorper blandit. Fusce consequat porttitor dolor, non fermentum purus dictum non.\r\n\r\nNunc nec dolor in dolor bibendum consequat. Curabitur justo eros, scelerisque eu mattis nec, dapibus interdum ex. Proin elit sapien, bibendum at ante a, feugiat efficitur libero. Sed elementum ipsum ut ipsum finibus pellentesque. Nunc nisi nisl, aliquet quis ullamcorper vitae, imperdiet in velit. Ut id euismod lorem, sit amet feugiat risus. Proin tempor cursus vestibulum. Sed fermentum tempor sem, eget vulputate magna malesuada eget. Suspendisse facilisis sapien sed nibh iaculis, a iaculis risus tristique. Aliquam fermentum quam sit amet tempor congue. Nullam a mollis ante. Curabitur convallis imperdiet tellus. Fusce aliquam ornare elit, sit amet blandit quam tristique et. Praesent convallis ut urna posuere lacinia. Quisque id vestibulum turpis, vitae egestas erat. Nullam pharetra molestie nibh ac elementum. ', '2019-05-06 00:00:00', 1),
(2, 'Deuxième chapitre', ' Phasellus pulvinar turpis est,', ' Chapitre 2 : Phasellus pulvinar turpis est, ut gravida tortor posuere nec. Donec nec massa non tortor suscipit semper. Proin commodo iaculis iaculis. Etiam sodales pulvinar erat, sed aliquet nisi sagittis eget. Sed quis urna tincidunt, congue turpis eget, fermentum lorem. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam eu dui dui. Aliquam eleifend suscipit pharetra. Donec eu placerat neque, eget lacinia arcu. Sed sollicitudin libero purus, in lacinia libero facilisis ac. Nunc hendrerit felis ac ante dictum elementum. Morbi est arcu, efficitur sit amet lobortis a, porttitor at enim.\r\n\r\nSed urna odio, rutrum a rutrum et, pretium quis mauris. Vivamus rhoncus nulla a felis faucibus laoreet. Suspendisse potenti. Vestibulum volutpat facilisis velit non sollicitudin. Ut sed magna diam. In faucibus elit ipsum, aliquam tincidunt nibh ornare vel. Nullam consequat ipsum et maximus venenatis. Ut fringilla condimentum dolor, ac pretium odio auctor rhoncus. Nulla venenatis volutpat urna at interdum. Cras ultricies porta orci, et fermentum felis commodo et. Cras imperdiet ligula a orci egestas vehicula. Vivamus maximus neque sed dolor venenatis commodo.\r\n\r\nInteger id pharetra elit. Praesent eu viverra urna. Quisque et orci eu ipsum placerat sodales ac id sapien. Quisque congue efficitur rhoncus. Curabitur non mattis lectus, at eleifend tellus. Morbi velit eros, fermentum quis dolor sit amet, consequat consectetur lorem. Sed iaculis rutrum purus, a pulvinar massa consectetur eget. Cras pretium orci vel egestas dignissim. Quisque vitae dapibus tortor. Aliquam erat volutpat. Donec viverra eu turpis eget blandit. Pellentesque scelerisque purus nisl, quis mollis eros condimentum nec. Suspendisse rhoncus suscipit augue vitae vestibulum. ', '2019-05-12 00:00:00', 1),
(3, 'Troisième chapitre', 'Curabitur ultricies viverra neque vel sodales', 'Chapitre 3 : Curabitur ultricies viverra neque vel sodales. Vestibulum placerat sem et est elementum, eu dapibus erat elementum. Duis ornare nunc vel quam mollis fringilla. Aenean pretium molestie sapien id suscipit. Nunc quis augue non erat commodo rhoncus eu et nunc. Sed sed ante ac lacus porttitor fermentum. Nulla vehicula condimentum ante sit amet dignissim. Phasellus venenatis ut felis vel bibendum. Nam quis venenatis metus, nec sagittis sapien. Aenean efficitur turpis bibendum elit venenatis egestas. Suspendisse rutrum dignissim ligula, vitae bibendum justo euismod nec. Duis at risus ante.\r\n\r\nDuis condimentum maximus justo eu lacinia. Quisque ac blandit eros. Quisque dictum tempus nisi id venenatis. Phasellus rutrum ligula a faucibus auctor. Ut risus dolor, dictum mollis maximus eu, molestie quis ante. Aenean ullamcorper urna et ligula porta aliquam. Mauris interdum efficitur tortor vel pulvinar.\r\n\r\nCras ullamcorper suscipit magna, feugiat molestie orci elementum et. Vivamus varius ullamcorper ligula, a finibus eros imperdiet at. Nulla nunc leo, sagittis in varius sit amet, euismod at neque. In pretium ligula eget metus tincidunt placerat. Duis bibendum vestibulum accumsan. Fusce suscipit orci felis, ac volutpat est feugiat nec. Morbi eget massa et metus aliquet tincidunt ut vitae nulla. Suspendisse posuere quam laoreet ex fringilla euismod. Quisque pharetra fermentum tortor non venenatis. Integer diam felis, ullamcorper non eros vitae, finibus sodales nulla. Ut commodo justo at urna pulvinar, ac tincidunt quam tristique. Nulla finibus ac lectus at pulvinar. Sed in neque quis nulla sagittis molestie ac et neque. Etiam id nisi vel nunc porta lacinia. Aliquam erat volutpat. ', '2019-05-20 00:00:00', 1);

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `id_comment` int(11) NOT NULL,
  `coms_content` varchar(255) NOT NULL,
  `coms_datecreated` datetime NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_chapter` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`id_comment`, `coms_content`, `coms_datecreated`, `id_user`, `id_chapter`) VALUES
(1, 'premier commentaire du chapitre 1', '0000-00-00 00:00:00', NULL, 1),
(2, 'second commentaire du chapitre 2', '0000-00-00 00:00:00', NULL, 1),
(3, 'premier commentaire du chapitre 2', '0000-00-00 00:00:00', NULL, 2),
(4, 'premier commentaire du chapitre 3', '0000-00-00 00:00:00', NULL, 3),
(5, 'ok cela marche test Jp', '0000-00-00 00:00:00', NULL, 1),
(6, 'c est ok', '0000-00-00 00:00:00', NULL, 1);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `pseudo` varchar(100) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `admin` varchar(3) NOT NULL DEFAULT 'non'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id_user`, `pseudo`, `mail`, `pass`, `admin`) VALUES
(1, 'jforteroche', 'jforteroche@free.fr', 'admin', 'oui'),
(2, 'Philippe', 'phil@free.fr', 'phil', 'non'),
(3, 'pierre', 'pierre@free.fr', 'pierre', 'non');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `chapters`
--
ALTER TABLE `chapters`
  ADD PRIMARY KEY (`id_chapter`),
  ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id_comment`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_chapter` (`id_chapter`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `id_user` (`id_user`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `chapters`
--
ALTER TABLE `chapters`
  MODIFY `id_chapter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `comments`
--
ALTER TABLE `comments`
  MODIFY `id_comment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `chapters`
--
ALTER TABLE `chapters`
  ADD CONSTRAINT `chapters_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`id_chapter`) REFERENCES `chapters` (`id_chapter`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;