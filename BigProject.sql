-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 27 avr. 2023 à 15:49
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bigproject`
--

-- --------------------------------------------------------

--
-- Structure de la table `accueil`
--

DROP TABLE IF EXISTS `accueil`;
CREATE TABLE IF NOT EXISTS `accueil` (
  `titre` varchar(100) NOT NULL,
  `presentation` varchar(250) NOT NULL,
  `nom1` varchar(50) NOT NULL,
  `bioNom1` varchar(500) NOT NULL,
  `bioFooter` varchar(250) NOT NULL,
  PRIMARY KEY (`titre`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `accueil`
--

INSERT INTO `accueil` (`titre`, `presentation`, `nom1`, `bioNom1`, `bioFooter`) VALUES
('Bienvenue sur mon portfolio', 'Je vous souhaite la bienvenue sur mon portfolio, vous pourrez y trouver mes projets réalisés cette année ainsi que mon CV. Je vous souhaite une bonne visite.', 'Matis Barbier Delaunay', 'Actuellement en première année à Guardia Cybersecurity School, originaire de Grenoble, je sort d\'un bac général avec comme option: Histoire Géographie Géopolitique Science Politique, Maths en première et Numérique Science Informatique. Passionné d\'informatique et de nouvelles technologies depuis le début du collège, je m\'épanoui pleinement au sein de Guardia.\r\nJe cherche un stage actuellement, à partir du 15 mai, si vous souhaitez connaître plus d\'informations à mon sujet, n\'hésitez pas à me con', 'Bio\r\nPortfolio créer dans le cadre d\'un projet accès sur l\'utilisation d\'HTML, CSS, de framework CSS, Javascript, PHP et MySQL.\r\nDorénavant il est mon portfolio en ligne.');

-- --------------------------------------------------------

--
-- Structure de la table `competences`
--

DROP TABLE IF EXISTS `competences`;
CREATE TABLE IF NOT EXISTS `competences` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(200) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `imageC` varchar(50) NOT NULL,
  `altC` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `nom` (`nom`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `competences`
--

INSERT INTO `competences` (`ID`, `nom`, `description`, `imageC`, `altC`) VALUES
(1, 'Linux', '-Gérer les différents gestionnaires de paquets\r\n-Gérer les différents droits Sudo', 'img/iconlinux.jpg', 'icone Linux'),
(2, 'Windows  ', ' -Gérer le système tant sur un client que sur un serveur', 'img/iconwindows.jpg', 'icone windows'),
(3, 'MacOS', '-Lier le système sur un active directory', 'img/iconmacos.jpg', 'icone MacOs'),
(4, 'Système d’exploitation', '-Gérer les différents systèmes d’exploitation disponibles sur le marché \r\n-Installer et configurer un système d’exploitation  \r\n-Diagnostiquer, trouver, et gérer une panne système', 'img/iconos.jpg', 'icone OS'),
(5, 'Travail en équipe', '-Comprendre les attentes de la pédagogie par projet\r\n-Savoir se repartir les taches et travailler en équipe', 'img/iconteam.jpg', 'icone team'),
(6, 'Algorythmique', '- Connaître les bonnes pratiques de développement.\r\n- Comprendre les principes de base de  l’algorithmique.\r\n- Rédiger des algorithmes de base.\r\n- Dérouler des algorithmes sur papier.', 'img/iconpython.jpg', 'icone python'),
(7, 'WEB (HTML/CSS)', '-Créer un site web vitrine,\r\n-Créer une feuille de style CSS,\r\n-Désigner sous forme de code,\r\n-Optimiser votre site pour le SEO (référencement naturel)\r\n', 'img/iconweb.jpg', 'icone web'),
(8, 'JavaScript', 'Manipuler du JavaScript avec jQuery. Permet de faire de l\'animation sur la page html', 'img/iconjava.jpg', 'logo javascript'),
(9, 'PHP', 'comprendre comment et pourquoi utiliser du PHP, les boucles, les\r\nconditions, les fonctions, les variables, automatiser et sécuriser vos\r\ntraitements et enregistrer vos données dans une base de données,\r\nsécuriser .', 'img/iconphp.jpg', 'logo php'),
(10, 'SQL', 'comprendre le langage SQL, faire des requêtes permettant de\r\nrécupérer des données depuis votre base de données pour les afficher sur\r\nvotre site.', 'img/iconsql.jpg', 'logo sql'),
(11, 'Présentation oral', '-Faire une présentation oral devant un jury ou un public\r\n-Travailler son aisance oral', 'img/iconpres.jpg', 'icone présentation oral'),
(12, 'Outils numériques', '-planification de taches\r\n-planification d\'un emploie du temps\r\n-planification d\'un projet', 'img/iconoutil.jpg', 'icone outils numériques'),
(13, 'Scraping', '-pouvoir récupérer des données sur un site web en python\r\n-traiter les données récupérer', 'img/iconescrap.jpg', 'icone scraping'),
(14, 'Langage C', '- Création de jeux \r\n- Comprendre les principes de base du C.\r\n- Rédiger des algorithmes de base.', 'img/iconec.png', 'icone langage C'),
(15, 'Pare feu', '- Mettre en place un pare-feu\r\n- Configurer et mettre en place des règles de pare-feu', 'img/iconparefeu.png', 'icone pare-feu'),
(16, 'Dossier technique', '- Rédaction d\'un dossier technique\r\n- Savoir retranscrire le déroulement d\'un projet et le mettre par écrit, permettant la compréhension par une personne extérieur au projet', 'img/icondoss.png', 'icone dossier technique'),
(17, 'cybersécurité', '- Analyser les cyber menaces\r\n- Savoir les retranscrire sous la forme d\'un tableau ou d\'une carte mentale\r\n- Connaître des solutions pour se protéger', 'img/iconcyber.png', 'icone cyber');

-- --------------------------------------------------------

--
-- Structure de la table `competences_project`
--

DROP TABLE IF EXISTS `competences_project`;
CREATE TABLE IF NOT EXISTS `competences_project` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `id_projets` int NOT NULL,
  `id_competences` int NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `competences_project`
--

INSERT INTO `competences_project` (`ID`, `id_projets`, `id_competences`) VALUES
(13, 1, 5),
(14, 1, 11),
(15, 2, 1),
(16, 2, 2),
(17, 2, 3),
(18, 2, 4),
(19, 2, 5),
(20, 2, 11),
(21, 3, 5),
(22, 3, 6),
(23, 3, 11),
(24, 4, 5),
(25, 4, 7),
(26, 4, 11),
(27, 5, 5),
(28, 5, 7),
(29, 5, 8),
(30, 5, 11),
(31, 6, 1),
(32, 6, 2),
(33, 6, 3),
(34, 6, 4),
(35, 6, 5),
(36, 6, 11),
(37, 7, 5),
(38, 7, 7),
(39, 7, 8),
(40, 7, 9),
(41, 7, 10),
(42, 7, 11),
(43, 8, 5),
(44, 8, 12),
(45, 9, 6),
(46, 9, 13),
(47, 9, 11),
(48, 10, 14),
(49, 10, 11),
(50, 11, 1),
(51, 11, 2),
(52, 11, 3),
(53, 11, 4),
(54, 11, 5),
(55, 11, 15),
(56, 11, 12),
(57, 11, 16),
(58, 11, 11),
(59, 12, 5),
(60, 12, 12),
(61, 12, 16),
(62, 12, 11);

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `user` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `objet` varchar(400) NOT NULL,
  `message` varchar(4000) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `message`
--

INSERT INTO `message` (`ID`, `user`, `prenom`, `nom`, `objet`, `message`) VALUES
(3, '6', 'sfbsb', 'sbsd', 'dfns', 'sfnscn'),
(4, '6', 'duls', 'h:hs', 'lopip', 'lùpùk:j;,');

-- --------------------------------------------------------

--
-- Structure de la table `projets`
--

DROP TABLE IF EXISTS `projets`;
CREATE TABLE IF NOT EXISTS `projets` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `nomProjet` varchar(2000) NOT NULL,
  `titre` varchar(2000) NOT NULL,
  `presentation` varchar(2000) NOT NULL,
  `description1` varchar(2000) NOT NULL,
  `description2` varchar(2000) NOT NULL,
  `imageCarousel1` varchar(2000) NOT NULL,
  `alt1` varchar(250) NOT NULL,
  `imageCarousel2` varchar(2000) NOT NULL,
  `alt2` varchar(550) NOT NULL,
  `imageCarousel3` varchar(2000) NOT NULL,
  `alt3` varchar(550) NOT NULL,
  `imageAccueil` varchar(2000) NOT NULL,
  `altA` varchar(550) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=77 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `projets`
--

INSERT INTO `projets` (`ID`, `nomProjet`, `titre`, `presentation`, `description1`, `description2`, `imageCarousel1`, `alt1`, `imageCarousel2`, `alt2`, `imageCarousel3`, `alt3`, `imageAccueil`, `altA`) VALUES
(1, 'Projet 1 (Communication personnelle)', 'Présentation : Améliorer sa communication face à un public', 'Durant ce projet nous avons dû en groupe présenter un sujet face à l’ensemble de notre promo et d’un jury', 'Cette semaine de projet nous a permis de développer notre aisance à l’oral face à un jury, d’avoir un posture adéquate, savoir anticiper une question et savoir y répondre', 'Nous avons dû choisir un sujet qui à été pour mon groupe et moi, convaincre les utilisateurs de réseaux sociaux de mieux protéger leurs données publiques, faire des recherches dessus, puis en fin de semaine passer en soutenance face à un jury composé de notre directeur et Sarah Peillon ainsi que les étudiants de notre promo', 'img/Pcom1.jpg', 'Shéma d\'une communication', 'img/Pcom2.jpg', 'image de Sarah Peillon', 'img/Pcom3.jpg', 'extrait de notre sujet de présentation', 'img/PcomA.jpg', 'image d\'un personnage faisant un discours'),
(2, 'Projet 2 (Réseaux 1)', 'Présentation : Les systèmes informatiques !', 'Comment appréhender les différents systèmes d’exploitation présents dans le monde actuel, et quels sont leur usages ?', 'Dans ce projet, nous avons vu ce qu’est un système informatique, comment il est composé, qu’est-ce qu’un noyau, comment ça fonctionne, qu’est-ce qu’un système serveur et qu’est- ce qu’un système client, comment les deux fonctionnent de pair pour proposer des fonctionnalités indispensables au bon fonctionnement d’un ordinateur, d’une entreprise, d’un pays.', 'Nous avons donc été assigné la tâche de créer un server linux, mettre en place ssh, ispconfig et un système de messagerie tout en le protégeant d\'éventuel attaques informatique grâce à d\'autre logiciel comme spamassasin. Il à donc fallu apprendre à maîtriser le terminal de commande et les différents systèmes d\'exploitation', 'img/P1res1.jpg', 'image d\'ipconfig', 'img/P1res2.jpg', 'image d\'une interface graphique linux', 'img/P1res3.jpg', 'image expliquant une connexion ssh', 'img/P1resA.jpg', 'image d\'une autre interface graphique linux'),
(3, 'Projet 3 (Algo)', 'Présentation : Initiation à l\'algorithmique avec Python', 'Problématique : Comprendre comment rédiger un algorithme.  Comprendre comment interagir avec votre machine.', 'Durant ce projet nous avons découvert le pseudo-code, nous avons créer ensemble différents algorithmes sur LARP et sur papier pour comprendre comment créer des structures conditionnelles, comment penser un logiciel et à terme, comment penser un jeu. Ainsi nous avons à la fin de la première semaine été capable de créer un algorithme reprenant le jeu du Pierre Feuille Ciseau.', 'Maintenant que nous avons maîtrisez le pseudo-code et l’algorithme, nous sommes allé voir ensemble comment fonctionne le Python, nous avons repris nos pseudo-code et nous l\'avons translater en Python, nous avons donc repris notre projet de Pierre feuille ciseau et développer notre premier jeu en Python. Mais pas que ! Ce développement nous à pris une petite poignée d’heures, nous avons ensuite créer le jeu du morpion et donc créer l’algorithme et le développer en python.', 'img/P1algo1.jpg', 'image interface GitHub', 'img/P1algo2.jpg', 'image script LARP', 'img/p1algo3.jpg', 'image script python', 'img/P1algoA.jpg', 'image graphique python'),
(4, 'Projet 4 (HTML)', 'Présentation : Développement en HTML/CSS/SEO d’une page web de notre jeu favori.', 'Comprendre les contraintes techniques des développeurs les développeurs / intégrateurs ; Savoir préparer nos maquettes et mockups de manière optimale ; Connaître le fonctionnement d’un affichage web ; Structurer un site pour optimiser le référencement naturel (SEO)', 'Nous allons, par groupe, développer en HTML/CSS un site web de notre jeu préféré. Voici les éléments qui devront apparaître :', 'Un menu de navigation entre les différentes pages / parties du site, Une introduction résumant le concept du jeu, Des photos / images / screenshots du jeu, Une description du jeu, Les principales règles du jeu, Un bouton qui redirige sur la page officielle du jeu, Un formulaire de contact, Une vidéo de gameplay du jeu issue de Youtube via un “embed”, Un design soigné et cohérent, Des polices de caractères spéciales grâce à “Google Font”.', 'img/P1web1.jpg', 'image du site créer pour le projet', 'img/P1web2.jpg', 'image des scripts html et css du site', 'img/P1web3.jpg', 'image du script js du site', 'img/P1webA.jpg', 'image script html'),
(5, 'Projet 5 (WEB/JS)', 'Présentation : Création de notre portfolio', 'Ce projet consistait à créer en duo notre portfolio grâce à l’HTML et le CSS vu dans un projet ultérieur, en y ajoutant du Javascript. Nous avons vu tous ça grâce à notre intervenant Antoine Di Roberto\r\n', 'Nous avons durant ce projet commencé la création d’un portfolio, nous avons utilisé Materialize pour avancer plus rapidement, mis en place de plusieurs pages HTML au lieu d’une, et utilisation de framework CSS ainsi que de l’ajout de Javascript', 'Nous avons aussi créer des esters egg au sein du portfolio, par exemple, arriver à un certains nombre de clics sur la barre de navigation, celle-ci change de couleur. Nous avons dû utiliser du Javascript afin de déclencher cet événement. Nous nous sommes aussi organiser afin de travailler efficacement, et de ne pas avoir à rien faire', 'img/P2web1.jpg', 'screen de ligne de code Javascript', 'img/P2web2.jpg', 'interface de Materialize', 'img/P2web3.jpg', 'image d\'Antoine Di Roberto, notre intervenant', 'img/P2webA.jpg', 'image d\'accueil du portfolio'),
(6, 'Projet 6 (Réseaux 2)', 'Présentation : Introduction aux systèmes informatiques 2', 'Nous avons mis en place dans le cadre de ce projet, un réseau local composé de 4 clients et de 2 serveurs comportant des services', 'Dans ce projet, nous avons monter un système Windows Server, sur lequelnous avons configurer différents services. Nous avons mis en place différentes typologies d’adressage. L’objectif à été de créer un petit écosystème de systèmes d’exploitation pouvant communiquer. Cet écosystème était composé de 2 client ubuntu, 2 client windows ainsi qu\'un serveur windows puis un serveur ubuntu', 'Dans un premier temps nous avons fait sur CisoPacketTracer la representation graphique de notre réseau .Ensuite nous avons travaillé sur VMWare afin de mettre en place nos différentes machines virtuelles représentant nos client et serveur. Nous avons créer un plan d\'adressage pour notre réseau, puis nous avons configurer nos différents service présents sur les serveur comme le DHCP, ou l\'Active Directory, et enfin voir si toutes nos machines communiquer bien entre elles.', 'img/P2res1.jpg', 'images des machines que nous avons mis en place', 'img/P2res2.jpg', 'image de la page technique de nos machines', 'img/P2res3.jpg', 'image de la représentation graphique de notre réseau ', 'img/P2resA.jpg', 'image d\'accueil pour notre projet réseau 2'),
(7, 'Projet 7 (PHP/BDD)', 'Présentation : amélioration de notre projet portfolio', ' Nous avons durant ce projet, repris notre portfolio pour l’améliorer grâce à du PHP et du MySQL', 'Nous avons repris avec le même duo et le même intervenant notre projet de portfolio afin de venir l’améliorer en utilisant du PHP et des bases de données avec MySQL. Nous avons réduit nos page projets à une seule page, et nous avons mis en place une base de données comprenant nos projets, nos utilisateurs, les compétences acquises. Nous avons utilisé UWamp et PHPMyAdmin pour administrer notre site', ' Nous avons dû mettre en place une interface admin pour gérer le site directement, et non plus par l’ajout de code, une interface d’inscription/connexion. Nous avons utilisé des requêtes SQL afin de venir ajouter, modifier ou supprimer une donnée du site.  Et la page d’accueil et de projet sont automatisé grâce au PHP, elles se mettent à jour en fonction des modification effectuée dans la base de donnée', 'img/Pphp1.jpg', 'screen de code de notre page d\'accueil du portfolio', 'img/Pphp2.jpg', 'screen de code PHP et MySQL', 'img/Pphp3.jpg', 'screen de l\'interface de PHPMyAdmin', 'img/PphpA.jpg', 'image d\'accueil de mon portofolio'),
(8, 'Projet 8 (Atelier outils numériques)', 'Présentation :  Les outils numériques en entreprise', 'sensibilisation sur les outils numériques et quels sont leur utilité et leur importance au quotidien', 'Durant ce projet nous avons pu découvrir différents outils numériques tels que Jira, Trello ou Gant Project, se familiariser avec, les utiliser pour en découvrir les différentes spécificité de chacun', 'L\'utilisations de ces outils sont primordiales en entreprises que cela sois pour la répartition des taches ou encore de la mise en place d\'un planning pour un projet', 'img/Pout1.jpg', 'image Trello', 'img/Pout2.jpg', 'image gantProject', 'img/Pout3.jpg', 'image Jira', 'img/PoutA.jpg', 'image outils numériques'),
(9, 'Projet 9 (Algo 2)', 'Présentation: Approfondissement de l\'algorithmie avec python', 'Approfondir les différentes notions vues durant le premier projet en Algorithmie et en Python', 'Durant ce projet nous avons approfondit les notions déjà acquise, en créant une application permettant  de scrapper du contenu Web et de l\'utiliser par la suite', 'Nous avons appris comment scrapper des données sur un site web, puis de traiter les informations afin d\'en tirer bon usage, dans mon cas j\'ai récupérer des informations sur tout les concessionnaires moto de l\'Isère', 'img/P2algo1.jpg', 'image script python', 'img/P2algo2.jpg', 'fichier csv ', 'img/P2algo3.jpg', 'image du site scrapper', 'img/P2algoA.jpg', 'image d\'un graphique du scrap'),
(10, 'Projet 10 (Le C)', 'Présentation: Initialisation au C', 'Découvrir le language de programmation C et de comprendre comment il fonctionne', 'Durant ce projet nous avons découverts le C en développant plusieurs petits jeux afin de comprendre la logique et la syntaxe du C et de comprendre les principes de la compilation. Nous avons abordé les notion de tableau, pointeurs et des chaines de caractères', 'Les jeux qu\'on a développé sont un sudoku, dont le but est de remplir une grille de 9x9 cases avec des chiffres, afin que chaque ligne, chaque colonne et section de 3x3 cases contienne l’ensemble des chiffres de 1 à 9. et un takuzu qui est un jeu de réflexion consistant à remplir une grille avec les chiffres 0 et 1.', 'img/Pc1.jpg', 'screen d\'un script', 'img/Pc2.jpg', 'screen du jeu de takuzu', 'img/Pc3.jpg', 'screen du jeu de sudoku', 'img/PcA.jpg', 'image de script en C'),
(11, 'Projet 11 (Réseaux 3)', 'Présentation: Création d’un réseau d’entreprise', 'Création d’un réseau d’entreprise séparé en plusieurs zones et mise en place de différents services internes et externes', 'Dans ce projet nous avons mit en place un réseau informatique pour une entreprise en utilisant\r\nune architecture qui sépare les réseaux en différentes zones distinctes. Cette approche est souvent utilisée pour améliorer la sécurité des communications au sein de l\'entreprise', 'Une fois la structure du réseau mise en place, plusieurs services ont été installés dans les différentes zones pour simuler un environnement d’entreprise complet. Les différents services sont un Active Directory, un reverse proxy, un serveur web apache et pour sécuriser le tout un pare-feu', 'img/P3res1.jpg', 'image du pare feu', 'img/P3res2.jpg', 'image de nginx', 'img/P3res3.jpg', 'screen du document technique', 'img/P3resA.jpg', 'image du schéma du réseau'),
(12, 'Projet 12 (cybersécurité)', 'Présentation: Introduction à la cybersécurité', 'Comprendre la complexité, la multidisciplinarité de la cybersécurité', 'Nous avons du faire un tableau de sécurité cyber pour comprendre la source des menaces et donner des réponses concrètes et permettre une anticipation réactive pour éviter, ou du moins, retarder d’autres attaques. Nous avons aussi analyser des attaques tels que celle de Stuxnet', 'Nous avons aborder les différents types de menaces, hardware, malwares et d\'autres menaces hors catégories cités, nous avons aussi travailler sur le cube de McCumber, les méthodes d\'infiltrations et la protection des données et la confidentialité\r\n', 'img/Pcyber1.jpg', 'image du cube de McCumber', 'img/Pcyber2.jpg', 'screen de la carte mentale des risques', 'img/Pcyber3.jpg', 'image de StuxNet', 'img/PcyberA.jpg', 'image cybersécurité');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`ID`, `email`, `password`, `admin`) VALUES
(6, 'boss@1.fr', '$2y$10$l3KDcO8Jx88GhjNnnlYPuOaFio/sJZGABF1NGM5g9/5NbOc9vQt6G', 1),
(14, 'bonjour@a.fr', '$2y$10$fdTtV3yChMiUhwrat.x8i.1tYqu.aN1HvARh9tug.S3GHR3jTiHsi', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
