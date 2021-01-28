-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 28 jan. 2021 à 22:41
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `neptune`
--

-- --------------------------------------------------------

--
-- Structure de la table `chambres`
--

DROP TABLE IF EXISTS `chambres`;
CREATE TABLE IF NOT EXISTS `chambres` (
  `id_chambre` int(11) NOT NULL AUTO_INCREMENT,
  `Nom_chambre` varchar(100) NOT NULL,
  `capacite` int(11) NOT NULL,
  `exposition` varchar(20) DEFAULT NULL,
  `douche` int(11) NOT NULL DEFAULT '0',
  `etage` int(11) NOT NULL,
  `tarif_id` int(11) DEFAULT NULL,
  `photo` varchar(250) NOT NULL,
  PRIMARY KEY (`id_chambre`),
  KEY `tarif_id` (`tarif_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `chambres`
--

INSERT INTO `chambres` (`id_chambre`, `Nom_chambre`, `capacite`, `exposition`, `douche`, `etage`, `tarif_id`, `photo`) VALUES
(1, 'Chambre double vue port', 2, 'port', 0, 1, 2, ''),
(2, 'Chambre quadruple vue rempart', 4, 'rempart', 0, 1, 5, ''),
(3, 'Chambre double vue port', 2, 'port', 0, 1, 2, ''),
(4, 'Chambre double vue rempart', 2, 'rempart', 1, 1, 1, ''),
(5, 'Chambre double vue port', 2, 'port', 0, 2, 3, ''),
(6, 'Chambre triple vue rempart', 3, 'rempart', 0, 2, 4, ''),
(7, 'Chambre double vue port', 3, 'port', 0, 2, 4, ''),
(8, 'Chambre double vue rempart', 2, 'rempart', 1, 2, 3, ''),
(9, 'Chambre double vue port', 2, 'port', 0, 3, 1, ''),
(10, 'Chambre double vue rempart', 2, 'rempart', 0, 3, 2, ''),
(11, 'Chambre double vue port', 2, 'port', 0, 3, 2, ''),
(12, 'Chambre quadruple vue port', 4, 'port', 1, 3, 5, '');

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `id_client` int(11) NOT NULL AUTO_INCREMENT,
  `civilite` varchar(20) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(70) NOT NULL,
  `adresse` varchar(200) DEFAULT NULL,
  `codePostal` varchar(10) DEFAULT NULL,
  `ville` varchar(200) DEFAULT NULL,
  `pays_id` int(11) DEFAULT NULL,
  `mail` varchar(100) NOT NULL,
  `mot_de_passe` varchar(100) NOT NULL DEFAULT 'motdepasse',
  `utilisateur` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_client`),
  KEY `pays_id` (`pays_id`)
) ENGINE=InnoDB AUTO_INCREMENT=162 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `clients`
--

INSERT INTO `clients` (`id_client`, `civilite`, `nom`, `prenom`, `adresse`, `codePostal`, `ville`, `pays_id`, `mail`, `mot_de_passe`, `utilisateur`) VALUES
(2, 'Monsieur', 'MORIN', 'Karl', 'North avenue 44', 'TW9 3', 'KEW', 2, 'sfghj@gmail.com', 'ftyukj', 1),
(3, 'Madame', 'MORIN', 'Joélle', '34 rue Saint Denis', '67000', 'STRASBOURG', 1, 'dertyui@outlook.com', 'cfresq', 1),
(4, 'Mademoiselle', 'GAGNERON', 'Aurélie', '4 rue Laénnec', '01200', 'MONTANGES', 1, 'cvtresq@gmail.com', 'vhiuytr', 1),
(5, 'Madame', 'DULLAC', 'Martine', '4 allée André Malraux', '14100', 'LISIEUX', 1, 'ghfjk@gmail.com', 'hfriesl', 1),
(6, 'Madame', 'DUPRE', 'Stéphanie', '87 rue Ernest Renan', '35480', 'GUIPRY', 1, 'hfuiruhisj@outlook.com', 'fjisooq', 1),
(7, 'Monsieur', 'BRIGAND', 'Maurice', '2 rue Louis Blériot', '35360', 'MONTAUBAN DE BRETAGNE', 1, 'gjfkdls@outlook.com', 'rsujn', 1),
(8, 'Monsieur', 'VAN ELIT', 'Gérard', '27 rue Ambroise', '1000', 'BRUXELLES', 3, 'nvfkdls@outlook.com', 'mosqp', 1),
(9, 'Monsieur', 'DESROSIERS', 'Antoine', '2 allée Antoinette', '53200', 'AZE', 1, 'nildsmq@gmail.com', 'ijnkd', 1),
(10, 'Mademoiselle', 'DULLAC', 'Martine', '17 avenue Albert Camus', '35200', 'MARSEILLE', 1, 'nviqksm@gmail.com', 'tuieom', 1),
(11, 'Monsieur', 'LELONG', 'Magloire', '11 rue Paul Bert', '1000', 'BRUXELLES', 3, 'ciodmr@gmail.com', 'kfoms', 1),
(12, 'Monsieur', 'MALPAS', 'Julien', '16 rue Gambetta', '29000', 'BREST', 1, 'iirqpe@gmail.com', 'jfirej', 1),
(13, 'Monsieur', 'BRIGAND', 'Maurice', '46 rue Emile Zola', '30000', 'NIMES', 1, 'cjeruihtio@gmail.com', 'fjopsq', 1),
(14, 'Madame', 'DESBOIS', 'Delphine', '8 Square des Ormeaux', '36000', 'CHATEAUROUX', 1, 'firopt@gmail.com', 'gktods', 1),
(15, 'Mademoiselle', 'DUMARC', 'Sandrine', '31 rue André Desilles', '33000', 'BORDEAUX', 1, 'gjiotp@gmail.com', 'jimskf', 1),
(16, 'Monsieur', 'TAILLARD', 'Julien', 'La Chesnaie', '5570', 'WANCENNES', 3, 'jritje@outlook.com', 'fjore', 1),
(17, 'Madame', 'LEGOFF', 'Franéoise', '11 rue des Peupliers', '29000', 'BREST', 1, 'fjritje@gmail.com', 'jrioes', 1),
(18, 'Monsieur', 'BOURGE', 'Nicolas', 'Le Chéne Tord', '92340', 'BOURG LA REINE', 1, 'juitor@gmail.com', 'rithcs', 1),
(19, 'Madame', 'FRALIN', 'Emmanuelle', '4 rue Rabelais', '78650', 'BEYNES', 1, 'nrutir@gmail.com', 'rjies', 1),
(20, 'Mademoiselle', 'GARCIA', 'Mary', 'New road east 22', 'PO2 7', 'PORTSMOUTH', 2, 'jitrrj@gmail.com', 'ruithe', 1),
(21, 'Monsieur', 'FOULON', 'Yann', '7 Allée de Bréquigny', '72000', 'LE MANS', 1, 'jfruitthr@outlook.com', 'cndiufe', 1),
(22, 'Monsieur', 'FOURET', 'Samuel', '45 rue de lIse', '22000', 'SAINT BRIEUC', 1, 'jqoam@outlook.com', 'fjrieh', 1),
(23, 'Mademoiselle', 'GARRET', 'Guénola', '8 Square de Londres', '53000', 'LAVAL', 1, 'rjirj@gmail.com', 'rjfuieo', 1),
(24, 'Madame', 'JAMOTEAU', 'Fabienne', '2 rue Saint Michel', '44000', 'NANTES', 1, 'jtuiohe@gmail.com', 'fjireue', 1),
(25, 'Monsieur', 'ROUSSEAU', 'Damien', '1 Square du Douro', '02400', 'NOGENTEL', 1, 'juitrpe@gmail.com', 'fjrirthu', 1),
(26, 'Monsieur', 'AUBIER', 'Barnab', 'Les Ruelles', '35235', 'THORIGNE FOUILLARD', 1, 'utioie@gmail.com', 'ruithru', 1),
(27, 'Monsieur', 'HILARY', 'Lionel', '18 rue des Camélias', '54300', 'LUNEVILLE', 1, 'jfruith@gmail.com', 'jfuihty', 1),
(28, 'Madame', 'COIGNE', 'Katell', '11 rue de la Mare', '01100', 'APREMONT', 1, 'htuyhu@gmail.com', 'fjrhtu', 1),
(29, 'Monsieur', 'LINIZAN', 'Gérald', '19 rue Mozart', '35830', 'BETTON', 1, 'vnuire@gmail.com', 'vutuieo', 1),
(30, 'Monsieur', 'AUDUREAU', 'Manuel', '34 rue de Verdun', '34000', 'MONTPELLIER', 1, 'bfurebi@gmail.com', 'fjruih', 1),
(31, 'Monsieur', 'HERFROY', 'Sylvain', '2 rue Launay', '12200', 'SAVIGNAC', 1, 'kfirpoe@gmail.com', 'riuedo', 1),
(32, 'Monsieur', 'COUPPE', 'Maxime', '42 rue César', '06000', 'NICE', 1, 'fnirunip@gmail.com', 'cruiehos', 1),
(33, 'Monsieur', 'COULAIN', 'John', 'Porstmouth Street 23', 'SW1X', 'LONDON', 2, 'jfritge@gmail.com', 'rjfuirt', 1),
(34, 'Madame', 'LEDUC', 'Christine', 'Villa des Résédas', '75003', 'PARIS', 1, 'jfriejie@gmail.com', 'frhuight', 1),
(35, 'Monsieur', 'MOREAU', 'Ludovic', '11 rue du Hétre', '35480', 'GUIPRY', 1, 'frutih@gmail.com', 'rjeiec', 1),
(36, 'Mademoiselle', 'RACAPE', 'Sylvie', '8 Square du Douro', '02100', 'GRICOURT', 1, 'jtruihio@gmail.com', 'jtijopok', 1),
(37, 'Monsieur', 'MALOUIN', 'Herv', '33 allée du Lac Onéga', '35200', 'MARSEILLE', 1, 'jtgjtoiep@gmail.com', 'frjirejo', 1),
(38, 'Madame', 'QUERE', 'Maryvonne', '28 rue de vern', '02000', 'URCEL', 1, 'fhioropt@gmail.com', 'grjitjo', 1),
(39, 'Monsieur', 'ROULIER', 'Jean Paul', '6 avenue du Canada', '35200', 'RENNES', 1, 'fhoijtro@gmail.com', 'giojsm', 1),
(40, 'Mademoiselle', 'SEVEZAN', 'Michelle', 'Albert road north 6', 'S0145', 'SOUTHAMPTON', 2, 'fjrotpji@gmail.com', 'fjiotieo', 1),
(41, 'Monsieur', 'LESTER', 'Ted', 'Beechin wood lane 6', 'TN158', 'PLATT', 2, 'fjiotjope@gmail.com', 'ptoeiem', 1),
(42, 'Madame', 'MONTEREL', 'Sonia', 'Castle Road 3', 'SW1B', 'LONDON', 2, 'pgjtojdoij@gmail.com', 'tgjiorjt', 1),
(43, 'Monsieur', 'GICQUEL', 'Bruno', '64 rue Albert Camus', '25230', 'DASLE', 1, 'vfuidois@gmail.com', 'fjroijtojr', 1),
(44, 'Mademoiselle', 'COUPPEY', 'Corinne', 'Roding lane north 54', 'IG88', 'LONDON', 2, 'cuitirhi@gmail.com', 'fheuithi', 1),
(45, 'Madame', 'CADOREL', 'Louise', '23 route de Lorient', '03500', 'MONTORD', 1, 'fritriojoej@gmail.com', 'fortijor', 1),
(46, 'Monsieur', 'VIGNER', 'Jean Luc', '43 rue Etienne Pinault', '13000', 'MARSEILLE', 1, 'jftiorjts@gmail.com', 'ftrngtiojor', 1),
(47, 'Madame', 'COUSTOM', 'Colleen', 'Dapholdils Street 4', 'BD1', 'MARSH', 2, 'jfiojtroj@gmail.com', 'jgriogjos', 1),
(48, 'Mademoiselle', 'LEBLE', 'Séverine', '65 rue des Foss', '75012', 'PARIS', 1, 'qtrjioyjp@gmail.com', 'gjriojrto', 1),
(49, 'Monsieur', 'LEGOFF', 'Pierre', 'Gand Platze 4', '8000', 'ZURICH', 4, 'ipoirutr@gmail.com', 'jirojgp', 1),
(50, 'Monsieur', 'LESCOUARN', 'Claude', '22 allée de Varsovie', '35200', 'RENNES', 1, 'aoiotp@gmail.com', 'gfpaji', 1),
(51, 'Monsieur', 'AUDUREAU', 'Gildas', 'Les Ruelles', '04500', 'RIEZ', 1, 'aiofoir@gmail.com', 'fgjrpes', 1),
(52, 'Monsieur', 'BOURGE', 'Manuel', '34 rue de Verdun', '92500', 'RUEIL MALMAISON', 1, 'vngbois@gmail.com', 'gjfoirms', 1),
(53, 'Monsieur', 'BRIGAND', 'Nicolas', 'Le Chéne Tord', '1000', 'LAUSANNE', 4, 'jgtoiyps@gmail.com', 'gotojr', 1),
(54, 'Monsieur', 'BRIGAND', 'Maurice', '2 rue Louis Blériot', '59000', 'LILLE', 1, 'nrioejos@gmail.com', 'ioroeis', 1),
(55, 'Monsieur', 'CADOREL', 'Maurice', 'Emilian Strasse 67', '8000', 'ZURICH', 4, 'hgriuhi@gmail.com', 'fgugiotr', 1),
(56, 'Monsieur', 'COIGNE', 'Ludovic', '23 route de Lorient', '35700', 'RENNES', 1, 'vbbitrios@gmail.com', 'turhios', 1),
(57, 'Monsieur', 'COULARON', 'Killian', '11 rue de la Mare', '35250', 'ST MEDARD/ILLE', 1, 'jvrtihros@gmail.com', 'vhtrhos', 1),
(58, 'Monsieur', 'MARTIN', 'Peter', 'Upper new road 56', 'SO303', 'SOUTHAMPTON', 2, 'vjoitoej@gmail.com', 'viruhtosm', 1),
(59, 'Monsieur', 'COUPPEY', 'Maxime', '42 rue César', '01000', 'BOURG EN BRESSE', 1, 'vhiehoso@gmail.com', 'buitrnso', 1),
(60, 'Monsieur', 'COUSSOT', 'Corentin', 'New george street 1', 'PL11', 'PLYMOUTH', 2, 'cptjpps@gmail.com', 'cjirtrnos', 1),
(61, 'Monsieur', 'DAUMAS', 'Colin', '4 allée du Dauphin', '35000', 'RENNES', 1, 'qpiryitr@gmail.com', 'vbioesy', 1),
(62, 'Monsieur', 'DESBOIS', 'Stéphane', '5 allée des Tilleuls', '75005', 'PARIS', 1, 'htgrvuih@gmail.com', 'fjoreitj', 1),
(63, 'Monsieur', 'DESROSIERS', 'Didier', '8 Square des Ormeaux', '91100', 'CORBEIL ESSONNES', 1, 'vheiuhie@gmail.com', 'hrtiuhd', 1),
(64, 'Monsieur', 'DULLAC', 'Antoine', '2 allée Antoinette', '35520', 'GUICHEN', 1, 'petit@gmail.com', 'fjoerith', 1),
(65, 'Monsieur', 'DULLAC', 'Martin', '4 allée André Malraux', '35150', 'CORPS NUDS', 1, 'nounours@gmail.com', 'fhoire', 1),
(66, 'Monsieur', 'DUMARC', 'Martin', '17 avenue Albert Camus', '37220', 'TROGUES', 1, 'kebab@gmail.com', 'fjruitrhui', 1),
(67, 'Monsieur', 'DUMAS', 'Stéphane', '31 rue André Desilles', '35000', 'RENNES', 1, 'avion@gmail.com', 'fjerihs', 1),
(68, 'Monsieur', 'LOUMAS', 'Geoffroy', '5 allée des Tilleuls', '75001', 'PARIS', 1, 'poubelle@gmail.com', 'vhduihss', 1),
(69, 'Monsieur', 'DESPRE', 'Stéphane', '87 rue Ernest Renan', '14400', 'CUSSY', 1, 'girofar@gmail.com', 'vfreihis', 1),
(70, 'Monsieur', 'COULON', 'Yann', '7 Allée de Bréquigny', '92400', 'COURBEVOIE', 1, 'missile@gmail.com', 'jvoitrjs', 1),
(71, 'Monsieur', 'LOURET', 'Samuel', '45 rue de lIse', '14000', 'CAEN', 1, 'pomm@gmail.com', 'jfviutjs', 1),
(72, 'Monsieur', 'GRALIN', 'Emmanuel', '4 rue Rabelais', '35250', 'ST MEDARD/ILLE', 1, 'bruh@gmail.com', 'fjoirejs', 1),
(73, 'Monsieur', 'SAGER', 'Aurélien', '4 rue Laénnec', '37150', 'CHENONCEAUX', 1, 'hvitrhpspokoq@gmail.com', 'guithis', 1),
(74, 'Monsieur', 'GRANDOLE', 'Paul', 'North down crescent 9', 'PL22', 'PLYMOUTH', 2, 'hruihtrs@gmail.com', 'thuirhs', 1),
(75, 'Monsieur', 'BARRET', 'Gweltaz', '8 Square de Londres', '33000', 'BORDEAUX', 1, 'hguirhis@gmail.com', 'feruiht', 1),
(76, 'Monsieur', 'PIGEON', 'Bruno', '64 rue Albert Camus', '35230', 'CREVIN', 1, 'ytjisjq@gmail.com', 'ureisjif', 1),
(77, 'Monsieur', 'GEFFROY', 'Laurent', '2 rue Launay', '35850', 'GEVEZE', 1, 'bgtjoijs@gmail.com', 'gtiojtos', 1),
(78, 'Monsieur', 'JULIEN', 'Lionel', '18 rue des Camélias', '43000', 'POLIGNAC', 1, 'vjotrjtos@gmail.comv', 'tjriotjs', 1),
(79, 'Monsieur', 'FRAME', 'Charly', 'Pine view 10', 'TN158', 'PLATT', 2, 'tujfries@gmail.com', 'fruinosb', 1),
(80, 'Monsieur', 'LEGORGE', 'Sébastien', '65 rue des Foss', '35850', 'GEVEZE', 1, 'jvtriojois@gmail.com', 'tjorijs', 1),
(81, 'Monsieur', 'DURAND', 'Christian', 'Villa des Résédas', '35830', 'PARIS', 1, 'fjtruirjos@gmail.com', 'vruibbt', 1),
(82, 'Monsieur', 'FERNIER', 'Thierry', '23 rue Barthou', '8957', 'MESSINES', 3, 'jiovftoi@gmail.com', 'rjojpkps', 1),
(83, 'Monsieur', 'DEGOUIS', 'Franéois', '11 rue des Peupliers', '75001', 'PARIS', 1, 'gjotpjs@outlook.com', 'gjiotjops', 1),
(84, 'Monsieur', 'SERFE', 'Pierre', '11 lot des Peupliers', '1000', 'LAUSANNE', 4, 'jtrioyjo@outlook.com', 'jrotijos', 1),
(85, 'Monsieur', 'DULONG', 'Magloire', '11 rue Paul Bert', '27000', 'EVREUX', 1, 'fjirethiu@outlook.com', 'vbidso', 1),
(86, 'Monsieur', 'MESCOUARN', 'Claude', '22 allée de Varsovie', '27100', 'VAL DE REUIL', 1, 'jvotirhui@outlook.com', 'htuiris', 1),
(87, 'Monsieur', 'INIZAN', 'Gérald', '19 rue Mozart', '75001', 'PARIS', 1, 'vjtoijos@outlook.com', 'vtryhs', 1),
(88, 'Monsieur', 'FALOUIN', 'Herv', '33 allée du Lac Onéga', '27200', 'VERNON', 1, 'vbidutbis@outlook.com', 'vjtihrus', 1),
(89, 'Monsieur', 'MOBAL', 'Jude', 'Row lane 23', 'PL52', 'PLYMOUTH', 2, 'tirhue@outlook.com', 'tuirhe', 1),
(90, 'Monsieur', 'MONTHUREL', 'Simon', '3 Quai Chateaubriand', '67500', 'HAGUENAU', 1, 'hibou@outlook.com', 'vbutrs', 1),
(91, 'Monsieur', 'POREL', 'Ludovic', '11 rue du Hétre', '14250', 'BROUAY', 1, 'marionette@outlook.com', 'thuif', 1),
(92, 'Monsieur', 'NOUE', 'Herv', '44 rue Saint Denis', '27300', 'BERNAY', 1, 'bouh@outlook.com', 'nfuires', 1),
(93, 'Monsieur', 'CHARLES', 'Julien', '44 rue Saint Denis', '35000', 'RENNES', 1, 'guihfjp@outlook.com', 'tgyurenn', 1),
(94, 'Monsieur', 'BERDIER', 'Marc', '28 rue de vern', '35000', 'RENNES', 1, 'tpoeiue@outlook.com', 'oeurihjd', 1),
(95, 'Monsieur', 'BADELOIS', 'Sylvain', '8 Square du Douro', '35200', 'RENNES', 1, 'oeuf@outlook.com', 'jruthds', 1),
(96, 'Monsieur', 'ROULLER', 'Jean Paul', '6 avenue du Canada', '35200', 'RENNES', 1, 'guihduib@outlook.com', 'nvurbus', 1),
(97, 'Monsieur', 'MONTVOL', 'Damien', '1 Square du Douro', '35200', 'RENNES', 1, 'gtuyhruyn@outlook.com', 'fruitreo', 1),
(98, 'Monsieur', 'VERSER', 'Martin', 'Clare hill 8', 'KT109', 'LONDON', 2, 'nburuuis@outlook.com', 'rjuiths', 1),
(99, 'Monsieur', 'MAILLARD', 'Julien', 'La Chesnaie', '33150', 'CENON', 1, 'tjokepms@outlook.com', 'tuihrius', 1),
(100, 'Monsieur', 'BANELIER', 'Gérard', '27 rue Ambroise', '6978', 'GANDRIA', 4, 'buitnjkd@outlook.com', 'fjuithuhe', 1),
(101, 'Monsieur', 'BIHAN', 'Martin', 'Eastend avenue 43', 'OX2', 'TUSMORE', 2, 'qhutyr@outlook.com', 'rhugruis', 1),
(102, 'Monsieur', 'AUDUREAU', 'Barnab', 'Les Ruelles', '35235', 'THORIGNE FOUILLARD', 1, 'prtotiuuhs@outlook.com', 'grhuyhs', 1),
(103, 'Monsieur', 'BOURGE', 'Manuel', '34 rue de Verdun', '72150', 'COURDEMANCHE', 1, 'vrgnruis@outlook.com', 'jugrhuys', 1),
(104, 'Monsieur', 'BRIGAND', 'Nicolas', 'Les Mélézes', '1875', 'MORGINS', 4, 'fjilshui@outlook.com', 'hvurgyis', 1),
(105, 'Monsieur', 'BRIGAND', 'Maurice', '2 rue Louis Blériot', '35360', 'MONTAUBAN DE BRETAGNE', 1, 'vbruyguyhs@outlook.com', 'tyruhss', 1),
(106, 'Monsieur', 'CADOREL', 'Maurice', '46 rue Emile Zola', '35170', 'BRUZ', 1, 'vbugyhusk@outlook.com', 'fjtruihus', 1),
(107, 'Monsieur', 'COIGNE', 'Louis', '23 route de Lorient', '78250', 'MEULAN', 1, 'ntguyhui@outlook.com', 'jtruis', 1),
(108, 'Monsieur', 'COULARON', 'Killian', '11 rue de la Mare', '54000', 'NANCY', 1, 'ayuhruyf@outlook.com', 'hguitrk', 1),
(109, 'Monsieur', 'COUPPLE', 'John', 'Sunnyside road north 23', 'N99', 'LONDON', 2, 'abreuyy@outlook.com', 'gjrtis', 1),
(110, 'Monsieur', 'COUPPEY', 'Maxime', '42 rue César', '92300', 'LEVALLOIS PERRET', 1, 'vjirjs@outlook.com', 'uefjoks', 1),
(111, 'Monsieur', 'BOURN', 'Peter', 'Lichfield drive 5', 'LE84', 'BLABY', 2, 'QHUFH@outlook.com', 'jguirjsl', 1),
(112, 'Monsieur', 'DAUMAS', 'Pol', '4 allée du Dauphin', '29100', 'DOUARNENEZ', 1, 'fthruubs@outlook.com', 'jvgijlsr', 1),
(113, 'Monsieur', 'DESBOIS', 'Stéphane', '5 allée des Tilleuls', '1200', 'GENEVE', 4, 'ghtuihiejkoks@outlook.com', 'vurhrijld', 1),
(114, 'Monsieur', 'DESROSIERS', 'Donatien', '8 Square des Ormeaux', '44150', 'ANCENIS', 1, 'tingvfdlms@outlook.com', 'tuirjrklmss', 1),
(115, 'Monsieur', 'DULLAC', 'Antoine', '2 allée Antoinette', '66150', 'ARLES SUR TECH', 1, 'jgirjgms@outlook.com', 'jfguijgrlm', 1),
(116, 'Monsieur', 'DULLAC', 'Karim', '4 allée André Malraux', '14200', 'HEROUVILLE SAINT CLAIR', 1, 'vugbincni@outlook.com', 'jtrguirjls', 1),
(117, 'Monsieur', 'DUMARC', 'Martin', '17 avenue Albert Camus', '92200', 'NEUILLY SUR SEINE', 1, 'fvitnlhuirt@outlook.com', 'guhruis', 1),
(118, 'Monsieur', 'DUMMORE', 'Sam', 'Albert road north 7', 'SO303', 'SOUTHAMPTON', 2, 'gjuithtjril@outlook.com', 'hquifuhe', 1),
(119, 'Monsieur', 'LOUMAS', 'Erwann', '5 allée des Tilleuls', '75001', 'PARIS', 1, 'guijros@outlook.com', 'vbugrdui', 1),
(120, 'Monsieur', 'DESPRE', 'Stéphane', '87 rue Ernest Renan', '22100', 'LANVALLAY', 1, 'vbiugid@outlook.com', 'jgritjps', 1),
(121, 'Monsieur', 'COULON', 'Yann', '7 Allée de Bréquigny', '78350', 'JOUY EN JOSAS', 1, 'ktirjd@outlook.com', 'vngunrd', 1),
(122, 'Monsieur', 'LOURET', 'Samuel', '45 rue de lIse', '35150', 'CORPS NUDS', 1, 'nvuirn@outlook.com', 'vtruiid', 1),
(123, 'Monsieur', 'GRALIN', 'Emmanuel', '4 rue Rabelais', '72150', 'BRIVES', 1, 'firtuje@outlook.com', 'rtuihis', 1),
(124, 'Monsieur', 'SAGER', 'Aurélien', '4 rue Laénnec', '85100', 'LES SABLES DOLONNE', 1, 'vnirutjs@outlook.com', 'tuiiioe', 1),
(125, 'Monsieur', 'GRADOLE', 'Aston', 'Little town square 22', 'BD1', 'MARSH', 2, 'jtoirpsm@outlook.com', 'juihds', 1),
(126, 'Monsieur', 'BARRET', 'Gurvan', '8 Square de Londres', '26000', 'VALENCE', 1, 'gtuijisu@outlook.com', 'aiutfrh', 1),
(127, 'Monsieur', 'PIGEON', 'Bruno', '64 rue Albert Camus', '35510', 'CHATEAUGIRON', 1, 'aayij@outlook.com', 'ngbuiry', 1),
(128, 'Monsieur', 'GEFFROY', 'Lillian', '2 rue Launay', '11000', 'CARCASSONNE', 1, 'vhurhios@outlook.com', 'ahuihrui', 1),
(129, 'Monsieur', 'JULIEN', 'Lionel', '18 rue des Camélias', '63000', 'CLERMONT FERRAND', 1, ' byugui@outlook.com', 'bvuirs', 1),
(130, 'Monsieur', 'FOSTER', 'Michael', 'Tudor Court north 2', 'NW10', 'LONDON', 2, 'thirojlk@outlook.com', 'vhiurhjls', 1),
(131, 'Monsieur', 'LEGORGE', 'Steven', '65 rue des Foss', '35400', 'PARAME', 1, 'gtruijskl@outlook.com', 'vruijks', 1),
(132, 'Monsieur', 'DURAND', 'Christian', 'Villa des Résédas', '35830', 'BETTON', 1, 'guitjoms@outlook.com', 'guiydus', 1),
(133, 'Monsieur', 'FERNER', 'Tod', 'North avenue 4', 'PO29', 'PORTSMOUTH', 2, 'buiidfs@outlook.com', 'jigrtusv', 1),
(134, 'Monsieur', 'DEGOUIS', 'Franéois', '11 rue des Peupliers', '75001', 'PARIS', 1, 'tyuhijd@outlook.com', 'rugtyus', 1),
(135, 'Monsieur', 'SCIONS', 'Pierre', '23 lot des Peupliers', '1200', 'GENEVE', 4, 'shuyry@outlook.com', 'huihsgt', 1),
(136, 'Monsieur', 'DULONG', 'Florent', '11 rue Paul Bert', '26100', 'ROMANS SUR ISERE', 1, 'furitrel@outlook.com', 'fruyhi', 1),
(137, 'Monsieur', 'MESCOUARN', 'Claude', '22 allée de Varsovie', '27400', 'CANAPPEVILLE', 1, 'kdosimq@outlook.com', 'rtuijl', 1),
(138, 'Monsieur', 'INIZAN', 'Gérald', '19 rue Mozart', '750016', 'PARIS', 1, 'hgukisjlqre@outlook.com', 'fjuritls', 1),
(139, 'Monsieur', 'FALOUIN', 'Herv', '33 allée du Lac Onéga', '03100', 'MONTLUCON', 1, 'qjilrmotey@outlook.com', 'gtilsq', 1),
(140, 'Monsieur', 'MOBAL', 'Justin', 'All Road south 12', 'SO303', 'SOUTHAMPTON', 2, 'thkues@outlook.com', 'trhuejks', 1),
(141, 'Madame', 'MONTHUREL', 'Simone', '3 Quai Chateaubriand', '37000', 'TOURS', 1, 'jgutrlies@outlook.com', 'auhijris', 1),
(142, 'Madame', 'POREL', 'Lucie', '11 rue du Hétre', '85000', 'LA ROCHE SUR YON', 1, 'ahuituy@outlook.com', 'rheuie', 1),
(143, 'Mademoiselle', 'NOUE', 'Hermine', '44 rue Saint Denis', '10300', 'SAINTE SAVINE', 1, 'tyukjcnns@outlook.com', 'jytirls', 1),
(144, 'Mademoiselle', 'CHARLES', 'Joélle', '44 rue Saint Denis', '10200', 'DOLANCOURT', 1, 'tuyihjls@outlook.com', 'ytuiros', 1),
(145, 'Mademoiselle', 'BERDIER', 'Maryvonne', '28 rue de vern', '10100', 'CRANCEY', 1, 'mlkju@outlook.com', 'tyuhjk', 1),
(146, 'Mademoiselle', 'BADELOIS', 'Sylvie', '8 Square du Douro', '35200', 'RENNES', 1, 'regyus@outlook.com', 'giruis', 1),
(147, 'Mademoiselle', 'ROULLER', 'Jeannette', '6 avenue du Canada', '35200', 'RENNES', 1, 'psoruih@outlook.com', 'gjiruhuiam', 1),
(148, 'Mademoiselle', 'MONTVOL', 'Doris', '1 Square du Douro', '35200', 'RENNES', 1, 'ruihuil@outlook.com', 'gurisl', 1),
(149, 'Mademoiselle', 'VOUCHER', 'Martine', 'Queen Mary Road 43', 'PL11', 'PLYMOUTH', 2, 'ayuhruys@outlook.com', 'agyuf', 1),
(150, 'Mademoiselle', 'MAILLARD', 'Julie', 'La Chesnaie', '06000', 'NICE', 1, 'thyubs@outlook.com', 'hturhks', 1),
(151, 'Mademoiselle', 'BANELIER', 'Géraldine', '27 rue Ambroise', '35170', 'BRUZ', 1, 'fhrtyuhs@outlook.com', 'htryuh', 1),
(152, 'Mademoiselle', 'BIHAN', 'Juliette', '43 rue Etienne Pinault', '35000', 'RENNES', 1, 'aijfrjeo@outlook.com', 'vruiskl', 1),
(153, 'Mademoiselle', 'BADELOIS', 'Sylvie', '9 Square du Douro', '35200', 'RENNES', 1, 'bureibis@outlook.com', 'jvrijs', 1),
(154, 'Mademoiselle', 'ROULLER', 'Judith', '7 avenue du Canada', '35200', 'RENNES', 1, 'ououtoui@outlook.com', 'jrtijolsfrue', 1),
(155, 'Mademoiselle', 'MONTVOL', 'Damiana', '2 Square du Douro', '35200', 'RENNES', 1, 'truefalse@outlook.com', 'fhuihsnvbs', 1),
(156, 'Mademoiselle', 'VYRSER', 'Julia', 'Queen Street 9', 'OX2', 'TUSMORE', 2, 'bourjs@outlook.com', 'jrtijls', 1),
(157, 'Mademoiselle', 'MAILLARD', 'Julie', 'La Chesnaie', '35235', 'THORIGNE FOUILLARD', 1, 'boujoursnk@outlook.com', 'enrevoirejijio', 1),
(158, 'Mademoiselle', 'BANELIER', 'Garance', '28 rue Ambroise', '1200', 'GENEVE', 4, 'salutbug@outlook.com', 'buebye', 1),
(159, 'Monsieur', 'ADMIN', 'Admin', 'Admin', '1200', 'PARIS', 1, 'admin@gmail.com', 'admin', 0);

-- --------------------------------------------------------

--
-- Structure de la table `pays`
--

DROP TABLE IF EXISTS `pays`;
CREATE TABLE IF NOT EXISTS `pays` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_pays` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `pays`
--

INSERT INTO `pays` (`id`, `nom_pays`) VALUES
(1, 'France'),
(2, 'Grande-Bretagne'),
(3, 'Belgique'),
(4, 'Suisse');

-- --------------------------------------------------------

--
-- Structure de la table `planning`
--

DROP TABLE IF EXISTS `planning`;
CREATE TABLE IF NOT EXISTS `planning` (
  `id` int(11) NOT NULL,
  `jour` datetime NOT NULL,
  `acompte` int(11) NOT NULL DEFAULT '0',
  `paye` int(11) NOT NULL DEFAULT '0',
  `client_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`jour`,`client_id`),
  KEY `client_id` (`client_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `planning`
--

INSERT INTO `planning` (`id`, `jour`, `acompte`, `paye`, `client_id`) VALUES
(2, '2020-10-01 00:00:00', 0, 0, 14),
(2, '2020-10-02 00:00:00', 1, 0, 22),
(2, '2020-10-04 00:00:00', 1, 0, 31),
(2, '2020-10-08 00:00:00', 1, 0, 47),
(2, '2020-10-12 00:00:00', 0, 0, 58),
(2, '2020-10-21 00:00:00', 1, 1, 104),
(2, '2020-10-24 00:00:00', 0, 0, 118),
(2, '2020-10-27 00:00:00', 1, 0, 80),
(2, '2020-10-28 00:00:00', 1, 0, 89),
(2, '2021-07-01 00:00:00', 0, 0, 120),
(2, '2021-07-02 00:00:00', 1, 1, 139),
(2, '2021-07-04 00:00:00', 1, 1, 148),
(2, '2021-07-05 00:00:00', 0, 0, 131),
(2, '2021-07-20 00:00:00', 0, 1, 107),
(2, '2021-07-21 00:00:00', 0, 1, 104),
(2, '2021-08-03 00:00:00', 0, 0, 2),
(2, '2021-08-09 00:00:00', 1, 0, 44),
(2, '2021-08-20 00:00:00', 1, 1, 107),
(2, '2021-08-25 00:00:00', 0, 0, 60),
(2, '2021-08-26 00:00:00', 0, 0, 72),
(3, '2020-10-01 00:00:00', 1, 1, 15),
(3, '2020-10-02 00:00:00', 0, 0, 23),
(3, '2020-10-03 00:00:00', 1, 0, 3),
(3, '2020-10-04 00:00:00', 1, 0, 32),
(3, '2020-10-05 00:00:00', 1, 0, 35),
(3, '2020-10-06 00:00:00', 1, 0, 40),
(3, '2020-10-07 00:00:00', 1, 0, 41),
(3, '2020-10-08 00:00:00', 1, 0, 41),
(3, '2020-10-09 00:00:00', 1, 0, 45),
(3, '2020-10-11 00:00:00', 0, 0, 54),
(3, '2020-10-12 00:00:00', 0, 0, 54),
(3, '2020-10-18 00:00:00', 1, 0, 99),
(3, '2020-10-20 00:00:00', 1, 1, 100),
(3, '2020-10-21 00:00:00', 1, 1, 105),
(3, '2020-10-24 00:00:00', 0, 0, 114),
(3, '2020-10-25 00:00:00', 1, 0, 61),
(3, '2020-10-29 00:00:00', 1, 0, 93),
(3, '2021-07-02 00:00:00', 0, 0, 140),
(3, '2021-07-03 00:00:00', 1, 1, 132),
(3, '2021-07-18 00:00:00', 1, 0, 99),
(3, '2021-07-19 00:00:00', 0, 1, 100),
(3, '2021-07-20 00:00:00', 0, 1, 100),
(3, '2021-07-21 00:00:00', 0, 1, 105),
(3, '2021-07-27 00:00:00', 0, 0, 81),
(3, '2021-07-29 00:00:00', 0, 1, 93),
(3, '2021-08-01 00:00:00', 1, 1, 121),
(3, '2021-08-04 00:00:00', 1, 1, 149),
(3, '2021-08-05 00:00:00', 1, 1, 153),
(3, '2021-08-06 00:00:00', 1, 1, 158),
(3, '2021-08-19 00:00:00', 1, 1, 100),
(3, '2021-08-23 00:00:00', 0, 0, 114),
(3, '2021-08-26 00:00:00', 1, 0, 73),
(3, '2021-08-28 00:00:00', 1, 0, 90),
(5, '2020-10-01 00:00:00', 0, 0, 16),
(5, '2020-10-02 00:00:00', 0, 0, 16),
(5, '2020-10-03 00:00:00', 0, 0, 16),
(5, '2020-10-04 00:00:00', 0, 0, 16),
(5, '2020-10-05 00:00:00', 0, 0, 37),
(5, '2020-10-06 00:00:00', 0, 0, 37),
(5, '2020-10-07 00:00:00', 1, 0, 44),
(5, '2020-10-08 00:00:00', 1, 0, 49),
(5, '2020-10-09 00:00:00', 1, 0, 47),
(5, '2020-10-10 00:00:00', 1, 0, 5),
(5, '2020-10-11 00:00:00', 0, 0, 56),
(5, '2020-10-18 00:00:00', 0, 0, 96),
(5, '2020-10-19 00:00:00', 1, 1, 104),
(5, '2020-10-20 00:00:00', 1, 1, 109),
(5, '2020-10-21 00:00:00', 1, 1, 107),
(5, '2020-10-23 00:00:00', 0, 0, 116),
(5, '2020-10-25 00:00:00', 1, 0, 63),
(5, '2020-10-26 00:00:00', 0, 0, 74),
(5, '2020-10-27 00:00:00', 0, 0, 74),
(5, '2020-10-28 00:00:00', 0, 0, 74),
(5, '2020-10-29 00:00:00', 0, 0, 95),
(5, '2021-04-03 00:00:00', 0, 0, 133),
(5, '2021-04-05 00:00:00', 0, 0, 155),
(5, '2021-04-18 00:00:00', 0, 0, 96),
(5, '2021-04-19 00:00:00', 0, 1, 104),
(5, '2021-04-20 00:00:00', 0, 1, 109),
(5, '2021-04-29 00:00:00', 0, 1, 95),
(5, '2021-07-01 00:00:00', 1, 1, 123),
(5, '2021-07-02 00:00:00', 0, 0, 133),
(5, '2021-08-04 00:00:00', 0, 0, 133),
(5, '2021-08-06 00:00:00', 0, 0, 155),
(5, '2021-08-07 00:00:00', 0, 0, 133),
(5, '2021-08-21 00:00:00', 0, 1, 107),
(6, '2020-10-01 00:00:00', 1, 0, 6),
(6, '2020-10-02 00:00:00', 1, 0, 24),
(6, '2020-10-08 00:00:00', 0, 0, 50),
(6, '2020-10-09 00:00:00', 1, 0, 48),
(6, '2020-10-20 00:00:00', 0, 0, 110),
(6, '2020-10-21 00:00:00', 1, 1, 18),
(6, '2020-10-25 00:00:00', 1, 0, 64),
(6, '2020-10-27 00:00:00', 1, 0, 82),
(6, '2021-04-01 00:00:00', 1, 1, 124),
(6, '2021-04-20 00:00:00', 0, 1, 110),
(6, '2021-04-21 00:00:00', 0, 1, 135),
(6, '2021-08-02 00:00:00', 1, 1, 141),
(7, '2020-10-01 00:00:00', 1, 1, 18),
(7, '2020-10-02 00:00:00', 1, 1, 18),
(7, '2020-10-03 00:00:00', 0, 0, 7),
(7, '2020-10-07 00:00:00', 1, 0, 45),
(7, '2020-10-08 00:00:00', 1, 0, 51),
(7, '2020-10-09 00:00:00', 1, 0, 49),
(7, '2020-10-19 00:00:00', 1, 1, 105),
(7, '2020-10-20 00:00:00', 1, 1, 111),
(7, '2020-10-21 00:00:00', 1, 1, 109),
(7, '2020-10-25 00:00:00', 0, 0, 65),
(7, '2020-10-26 00:00:00', 1, 0, 76),
(7, '2020-10-27 00:00:00', 1, 0, 76),
(7, '2021-04-02 00:00:00', 1, 1, 135),
(7, '2021-04-19 00:00:00', 0, 1, 105),
(7, '2021-04-21 00:00:00', 0, 1, 109),
(7, '2021-08-01 00:00:00', 0, 0, 125),
(7, '2021-08-03 00:00:00', 1, 1, 135),
(7, '2021-08-20 00:00:00', 0, 1, 111),
(8, '2020-10-01 00:00:00', 0, 0, 19),
(8, '2020-10-02 00:00:00', 1, 0, 25),
(8, '2020-10-03 00:00:00', 0, 0, 8),
(8, '2020-10-04 00:00:00', 1, 1, 17),
(8, '2020-10-05 00:00:00', 0, 0, 39),
(8, '2020-10-06 00:00:00', 0, 0, 39),
(8, '2020-10-07 00:00:00', 0, 0, 39),
(8, '2020-10-08 00:00:00', 0, 0, 52),
(8, '2020-10-09 00:00:00', 1, 0, 50),
(8, '2020-10-11 00:00:00', 0, 0, 57),
(8, '2020-10-18 00:00:00', 0, 0, 98),
(8, '2020-10-19 00:00:00', 0, 0, 98),
(8, '2020-10-20 00:00:00', 0, 0, 112),
(8, '2020-10-21 00:00:00', 1, 1, 110),
(8, '2020-10-23 00:00:00', 0, 0, 117),
(8, '2020-10-25 00:00:00', 0, 0, 66),
(8, '2020-10-26 00:00:00', 0, 0, 77),
(8, '2020-10-27 00:00:00', 1, 0, 83),
(8, '2020-10-28 00:00:00', 1, 0, 75),
(8, '2020-10-29 00:00:00', 0, 0, 98),
(8, '2021-04-02 00:00:00', 1, 1, 142),
(8, '2021-04-04 00:00:00', 1, 1, 134),
(8, '2021-04-05 00:00:00', 0, 0, 157),
(8, '2021-04-07 00:00:00', 0, 0, 157),
(8, '2021-04-19 00:00:00', 0, 1, 98),
(8, '2021-04-21 00:00:00', 0, 1, 110),
(8, '2021-08-01 00:00:00', 0, 0, 126),
(8, '2021-08-03 00:00:00', 0, 0, 136),
(8, '2021-08-06 00:00:00', 0, 0, 157),
(8, '2021-08-18 00:00:00', 0, 0, 98),
(8, '2021-08-29 00:00:00', 0, 1, 98),
(9, '2020-10-01 00:00:00', 1, 1, 19),
(9, '2020-10-02 00:00:00', 0, 0, 26),
(9, '2020-10-04 00:00:00', 0, 0, 33),
(9, '2020-10-05 00:00:00', 1, 0, 38),
(9, '2020-10-06 00:00:00', 1, 0, 38),
(9, '2020-10-08 00:00:00', 1, 0, 53),
(9, '2020-10-09 00:00:00', 1, 0, 51),
(9, '2020-10-18 00:00:00', 1, 0, 97),
(9, '2020-10-20 00:00:00', 1, 1, 113),
(9, '2020-10-21 00:00:00', 1, 1, 111),
(9, '2020-10-25 00:00:00', 1, 0, 67),
(9, '2020-10-26 00:00:00', 1, 0, 77),
(9, '2020-10-27 00:00:00', 0, 0, 84),
(9, '2020-10-28 00:00:00', 0, 0, 91),
(9, '2020-10-29 00:00:00', 1, 0, 97),
(9, '2021-04-01 00:00:00', 1, 1, 127),
(9, '2021-04-06 00:00:00', 1, 1, 156),
(9, '2021-08-02 00:00:00', 0, 0, 143),
(9, '2021-08-03 00:00:00', 1, 1, 136),
(9, '2021-08-04 00:00:00', 0, 0, 150),
(9, '2021-08-05 00:00:00', 1, 1, 156),
(9, '2021-08-18 00:00:00', 1, 0, 97),
(9, '2021-08-21 00:00:00', 0, 1, 111),
(9, '2021-08-29 00:00:00', 1, 0, 97),
(10, '2020-10-01 00:00:00', 0, 0, 10),
(10, '2020-10-02 00:00:00', 1, 0, 27),
(10, '2020-10-03 00:00:00', 0, 0, 10),
(10, '2020-10-08 00:00:00', 0, 0, 54),
(10, '2020-10-09 00:00:00', 1, 0, 52),
(10, '2020-10-21 00:00:00', 1, 1, 112),
(10, '2020-10-26 00:00:00', 0, 0, 68),
(10, '2020-10-27 00:00:00', 1, 0, 85),
(10, '2021-07-01 00:00:00', 0, 0, 128),
(10, '2021-07-02 00:00:00', 1, 1, 144),
(10, '2021-07-03 00:00:00', 0, 0, 128),
(10, '2021-07-21 00:00:00', 0, 1, 112),
(10, '2021-08-20 00:00:00', 0, 0, 114),
(10, '2021-08-25 00:00:00', 0, 0, 68),
(11, '2020-10-01 00:00:00', 0, 0, 20),
(11, '2020-10-02 00:00:00', 0, 0, 28),
(11, '2020-10-08 00:00:00', 1, 0, 55),
(11, '2020-10-25 00:00:00', 1, 0, 69),
(11, '2020-10-26 00:00:00', 0, 0, 78),
(11, '2020-10-27 00:00:00', 0, 0, 86),
(11, '2021-07-01 00:00:00', 1, 1, 129),
(11, '2021-07-02 00:00:00', 0, 0, 145),
(11, '2021-07-03 00:00:00', 1, 1, 11),
(11, '2021-07-04 00:00:00', 0, 0, 137),
(11, '2021-07-20 00:00:00', 1, 1, 115),
(12, '2020-10-01 00:00:00', 1, 1, 12),
(12, '2020-10-02 00:00:00', 1, 0, 29),
(12, '2020-10-09 00:00:00', 0, 0, 42),
(12, '2020-10-10 00:00:00', 0, 0, 42),
(12, '2020-10-21 00:00:00', 0, 0, 101),
(12, '2020-10-25 00:00:00', 0, 0, 70),
(12, '2020-10-27 00:00:00', 1, 0, 87),
(12, '2021-07-01 00:00:00', 1, 1, 129),
(12, '2021-07-02 00:00:00', 1, 1, 146),
(12, '2021-07-08 00:00:00', 0, 0, 42),
(12, '2021-07-20 00:00:00', 0, 1, 101),
(12, '2021-07-21 00:00:00', 0, 1, 101),
(12, '2021-07-22 00:00:00', 0, 0, 101),
(12, '2021-07-25 00:00:00', 0, 1, 101),
(12, '2021-07-27 00:00:00', 0, 0, 101);

-- --------------------------------------------------------

--
-- Structure de la table `tarifs`
--

DROP TABLE IF EXISTS `tarifs`;
CREATE TABLE IF NOT EXISTS `tarifs` (
  `tarif_id` int(11) NOT NULL AUTO_INCREMENT,
  `prix` double NOT NULL,
  `libelle` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`tarif_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `tarifs`
--

INSERT INTO `tarifs` (`tarif_id`, `prix`, `libelle`) VALUES
(1, 38, NULL),
(2, 49, NULL),
(3, 53, NULL),
(4, 58, NULL),
(5, 68, NULL);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `chambres`
--
ALTER TABLE `chambres`
  ADD CONSTRAINT `chambres_ibfk_1` FOREIGN KEY (`tarif_id`) REFERENCES `tarifs` (`tarif_id`);

--
-- Contraintes pour la table `clients`
--
ALTER TABLE `clients`
  ADD CONSTRAINT `clients_ibfk_1` FOREIGN KEY (`pays_id`) REFERENCES `pays` (`id`);

--
-- Contraintes pour la table `planning`
--
ALTER TABLE `planning`
  ADD CONSTRAINT `planning_ibfk_1` FOREIGN KEY (`id`) REFERENCES `chambres` (`id_chambre`) ON DELETE CASCADE,
  ADD CONSTRAINT `planning_ibfk_2` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id_client`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
