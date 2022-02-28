--
-- Base de données :  `oceane`
--

-- --------------------------------------------------------

--
-- Structure de la table `bateau`
--

DROP TABLE IF EXISTS `bateau`;
CREATE TABLE IF NOT EXISTS `bateau` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) DEFAULT NULL,
  `longueur` float DEFAULT NULL,
  `largeur` float DEFAULT NULL,
  `vitesse` float DEFAULT NULL,
  `nbPassager` int(11) DEFAULT NULL,
  `nbVehicule` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=innodb DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `bateau`
--

INSERT INTO `bateau` ( `nom`, `longueur`, `largeur`, `vitesse`, `nbPassager`, `nbVehicule`) VALUES
( 'Melvan', 31, 8.06, 16.5, 234, 3),
( 'Kerdonis', 30.75, 7.9, 20, 295, 0),
( 'Bangor', 46, 12, 12, 450, 32),
( 'Vindilis', 48, 12.5, 12.5, 39, 39),
( 'Breizh Nevez I', 43.5, 12, 11.5, 300, 18),
( 'Île de Groix', 46, 12, 12, 450, 32),
( 'Saint-Tudy', 44.5, 11, 12, 440, 21);

