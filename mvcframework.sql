-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 05 mars 2021 à 17:40
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
-- Base de données : `mvcframework`
--

-- --------------------------------------------------------

--
-- Structure de la table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `adminname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admins`
--

INSERT INTO `admins` (`id_admin`, `adminname`, `email`, `mdp`) VALUES
(1, 'arbi', 'arbi@hotmail.com', '$2y$10$j9qqmLvwM6ALhNyRoXLfGu7rM.MtALZt2/2BYiJlEstNh/3IKBsRW'),
(2, 'arbi', 'aa@hotmail.com', '$2y$10$TmL824zYAxeQCJrbs638Au5L1SJGK7XHxhy1ErmB2FWizDmKsKAFu'),
(4, 'arbouch', 'arbouch@hotmail.com', '$2y$10$o4TjQnNHzH2mpKXO9pspKeoEcQksH.H0xKy28DiqZ8XBaineXw6nG'),
(5, 'touhami', 'touhami@hotmail.com', '$2y$10$aFc4Vhc2DfHKRbupjR0/Ye9sOunQM3iuk61ziyKKLMzajgiHaXyou'),
(6, 'arbi', 'oussama.arbi@enis.tn', '$2y$10$2UdFy9iMmjseULnoYV1ucOzjMw7wfB0b/ot9ezhGG7sNa1YtJwtNy');

-- --------------------------------------------------------

--
-- Structure de la table `brands`
--

DROP TABLE IF EXISTS `brands`;
CREATE TABLE IF NOT EXISTS `brands` (
  `brand_id` int(11) NOT NULL AUTO_INCREMENT,
  `brand_name` varchar(255) NOT NULL,
  PRIMARY KEY (`brand_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_name`) VALUES
(1, 'ASUS'),
(2, 'MSI'),
(3, 'ACER'),
(4, 'INFINITY EDGE'),
(5, 'RAZER'),
(6, 'CORSAIR');

-- --------------------------------------------------------

--
-- Structure de la table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qte` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ck_user_id` (`id_user`),
  KEY `ck_item_id` (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Laptops'),
(2, 'Desktop PC'),
(3, 'Clavier'),
(4, 'Souris'),
(5, 'Ecran');

-- --------------------------------------------------------

--
-- Structure de la table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id_order` int(11) NOT NULL AUTO_INCREMENT,
  `id_prod` varchar(255) NOT NULL,
  `qte` varchar(255) NOT NULL,
  `total` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `datecom` varchar(255) NOT NULL,
  PRIMARY KEY (`id_order`),
  KEY `fk_user` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `orders`
--

INSERT INTO `orders` (`id_order`, `id_prod`, `qte`, `total`, `id_user`, `datecom`) VALUES
(19, '18,21,32', '2,1,1', 5104, 30, '2021/01/21  | 23:27'),
(20, '25', '4', 23037, 30, '2021/01/21  | 23:28'),
(21, '27,33', '5,1', 2462, 30, '2021/01/22  | 10:39');

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `item_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_name` varchar(255) NOT NULL,
  `item_price` double(10,2) NOT NULL,
  `item_qte` int(11) NOT NULL,
  `item_image` varchar(255) NOT NULL,
  `item_details` varchar(555) NOT NULL,
  `id_cat` int(11) NOT NULL,
  `item_rating` int(11) DEFAULT NULL,
  `item_discount` int(11) NOT NULL,
  `item_brand` int(11) DEFAULT NULL,
  `state` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`item_id`),
  KEY `ck_idcat` (`id_cat`),
  KEY `ck_idbrand` (`item_brand`)
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`item_id`, `item_name`, `item_price`, `item_qte`, `item_image`, `item_details`, `id_cat`, `item_rating`, `item_discount`, `item_brand`, `state`) VALUES
(12, 'TUF506LU-HN002T-16G', 1300.00, 10, 'http://localhost/mvcframework/public/img/11.jpg,http://localhost/mvcframework/public/img/12.jpg,http://localhost/mvcframework/public/img/13.jpg,http://localhost/mvcframework/public/img/14.jpg', 'Ecran: 15.6\" FHD (1920x1080px) 144 Hz \r\nProcesseur: Intel Core i5-10300H  (2.5 GHz up to 4.5GHz - 8 Mo )\r\nCarte Graphique: Nvidia GeForce GTX 1660 Ti - 6Go GDDR6 \r\nMémoire Ram: 16 Go DDR4\r\nDisque Dur: 512 Go\r\nSystéme D\'exploitation: Windows 10\r\nCavier: RGB\r\nGarantie: 2 ans ', 1, 2, 20, 1, 1),
(13, '14A-10SC-032FR', 1566.00, 5, 'http://localhost/mvcframework/public/img/21.jpg,http://localhost/mvcframework/public/img/22.jpg,http://localhost/mvcframework/public/img/23.jpg,', 'Ecran:14\" Full HD (1920 x 1080) IPS \r\nProcesseur:  Intel Core i7-10710U ( 1.1 GHz jusqu’à  4.7 -12 Mo)\r\nCarte Graphique: NVIDIA GeForce GTX 1650 Max-Q avec 4G\r\nMémoire Ram: 16 Go lPDDR3\r\nDisque Dur: 512 Go SSD\r\nSystéme D\'exploitation: windows 10\r\nAutonomie : jusqu’à 10 Heure(s) /3 cellules\r\nClavier:Rétroéclairage blanc, lecteur d’empreintes digitales\r\nPoids: 1.29 kg\r\nGarantie: 2 ans', 1, 2, 15, 2, 1),
(18, 'UX481FL-BM044T', 1555.00, 11, 'http://localhost/mvcframework/public/img/31.jpg,http://localhost/mvcframework/public/img/32.jpg,http://localhost/mvcframework/public/img/33.jpg,http://localhost/mvcframework/public/img/34.jpg', 'Ecran: 14\" FHD (1920x1080) 60Hz\r\nProcesseur: Intel Core i7 10510U (1,80 GHz - 4,90 GHz ;  8Mo)\r\nCarte Graphique: NVIDIA GeForce MX250 , 2GB\r\nMémoire Ram: 16 Go DDR4\r\nDisque Dur: 1 To\r\nSystéme D\'exploitation: Free Dos \r\nAutonomie Batterie : jusqu\'à 9 heures\r\nPoids :1.5 Kg\r\nGarantie: 2 ans', 1, 5, 22, 2, 1),
(19, 'TUF506LU-HN107T', 3989.00, 6, 'http://localhost/mvcframework/public/img/41.jpg,http://localhost/mvcframework/public/img/42.jpg,http://localhost/mvcframework/public/img/43.jpg,http://localhost/mvcframework/public/img/44.jpg', 'Ecran: 15.6\" FULL HD (1920 x 1080)\r\nProcesseur: Intel Core i7-10870H (2.20 GHz, up to 5.00 GHz, 16 Mo )\r\nCarte Graphique: NVIDIA GeForce GTX1660TI  6 Go \r\nMémoire Ram: 16 Go\r\nDisque Dur: 512 Go SSD \r\nSystéme D\'exploitation: Windows 10\r\nCouleur: Noir\r\nGarantie: 2 ans', 1, 3, 23, 1, 1),
(20, 'GL75-10SFK-611', 5089.00, 7, 'http://localhost/mvcframework/public/img/51.jpg,http://localhost/mvcframework/public/img/52.jpg,http://localhost/mvcframework/public/img/53.jpg,http://localhost/mvcframework/public/img/54.jpg', 'Ecran:  17,3 FHD (1 920 x 1 080)IPS\r\nProcesseur: Intel  Core i7-10750H (2,60 GHz - 5,00 GHz-12 MB)\r\nCarte Graphique: NVIDIA  GeForce RTX 2070 avec 8 Go de GDDR6\r\nMémoire Ram: 16 Go DDR4\r\nDisque Dur: 512Go ssd\r\nSystéme D\'exploitation: windows10\r\nClavier : rétroéclairé RGB  par touche\r\nGarantie: 2 ans', 1, 2, 25, 3, 1),
(21, 'NH.Q6DEF.00E', 3099.00, 32, 'http://localhost/mvcframework/public/img/61.jpg,http://localhost/mvcframework/public/img/62.jpg,http://localhost/mvcframework/public/img/63.jpg', 'Ecran: 15.6\" Full HD IPS (1920 x 1080)\r\nProcesseur: Intel Core i5-9300H (2,4 GHz / Turbo 4,1 GHz / 8 Mo)\r\nCarte Graphique: NVIDIA® GeForce® GTX™ 1650 4 Go DDR5 - Max P\r\nMémoire Ram: 8 Go DDR4\r\nDisque Dur: 256Go SSD\r\nSystéme D\'exploitation: Windows 10 Famille\r\nCouleur: noir\r\nBatterie : Autonomie jusqu\'à 8 heuresr\r\nClavier : rétroéclairé RGB\r\nGarantie: 1 an', 1, 1, 19, 4, 1),
(22, 'G532LWS-AZ057T', 5899.00, 66, 'http://localhost/mvcframework/public/img/71.jpg,http://localhost/mvcframework/public/img/72.jpg,http://localhost/mvcframework/public/img/73.jpg', 'Ecran: 15.6\" Full HD (1920 x 1080) 240Hz\r\nProcesseur: Intel Core i7-18750H (2,3 GHz up to 5,1 GHz, 16Mo)\r\nCarte Graphique: Nvidia GeForce RTX 2070 8Go\r\nMémoire Ram: 16 Go DDR4\r\nDisque Dur: 512 Go ssd\r\nSystéme D\'exploitation: Windows 10 Home \r\nClavier Rétro-éclairé \r\nCouleur: Noir\r\nGarantie: 2 ans', 1, 3, 24, 4, 1),
(23, '710811', 6199.00, 2, 'http://localhost/mvcframework/public/img/pc11.jpg,http://localhost/mvcframework/public/img/pc12.jpg,http://localhost/mvcframework/public/img/pc13.jpg,http://localhost/mvcframework/public/img/pc14.jpg', 'Boitier : X-608 Infinity Micro\r\nProcesseur : INTEL I7 9700K\r\nCarte mère : MSI B360 GAMING PRO CARBON\r\nMémoire RAM :  TEAM DELTA 16GB (2x8GB) DDR4 RGB   \r\nCarte graphique :EVGA GTX 1080 TI 11G FTW3\r\nDisque Dur :   SSD 960 GO PNY CS900 + 1 Tera Tochiba \r\nAlimentation: COOLER MASTER V1200 PLATINUM\r\nMontage : gratuit \r\nGarantie : 1 an ', 2, 4, 31, 2, 1),
(24, 'I3 8100', 1769.00, 4, 'http://localhost/mvcframework/public/img/pc21.jpg,http://localhost/mvcframework/public/img/pc12.jpg,', 'Boitier : AZZA BLAZE 231\r\nProcesseur :I3 8100 LGA 1151 \r\nCarte mère :ASUS H310M-k\r\nMémoire RAM : TEAM GROUP ELITE DDR4 8GB 2400 Mhz\r\nCarte graphique : GTX1660 STORMX 6G GDDR5\r\nDisque Dur : 500 HDD\r\nAlimentation: LINKWORLD LPW1685-50 500W\r\nMontage : gratuit \r\nGarantie : 1 an \r\n\r\nOption\r\nAjout 1 Tera HDD : 140D', 2, 3, 33, 1, 1),
(25, 'AEGIS TI3 8RD-SLI-060EU', 6399.00, 3, 'http://localhost/mvcframework/public/img/pc31.jpg,http://localhost/mvcframework/public/img/pc32.jpg,http://localhost/mvcframework/public/img/pc33.jpg', 'Processeur: Intel Core i7-8700K( 3,70 GHz à 4,70 GHz, 12 Mo)\r\nCarte Graphique:  NAVIDIA GeForce® GTX 1070 SLI ARMOR 8Go\r\nMémoire RAM: 8Go  DDR4\r\nDisque Dur :2 To+512Go SSD\r\nSystéme D\'exploitation: Windows 10\r\nGarantie: 2 ans', 2, 4, 10, 1, 1),
(26, 'I3 9100F', 1519.00, 6, 'http://localhost/mvcframework/public/img/pc41.jpg,http://localhost/mvcframework/public/img/pc42.jpg', 'Boitier :AEROCOOL SHARD RGB\r\nProcesseur :I3 9100F \r\nCarte mère :  H310M\r\nMémoire RAM : 8GB  DDR4 2666Mhz \r\nCarte graphique : GTX 1650 SUPER WINDFORCE OC 4G\r\nDisque Dur : SSD 120 GO\r\nAlimentation: 550W 80+\r\nMontage : gratuit\r\nGarantie :1ans\r\n\r\nOption\r\nAjout Mémoire 8G 2666 mhz : 140D\r\nAjout 1 Tera HDD : 140D', 2, 5, 32, 4, 1),
(27, 'RAZ-CLAV19 - RZ03-02520500-R3F1', 689.00, 20, 'http://localhost/mvcframework/public/img/c11.jpg,http://localhost/mvcframework/public/img/c12.jpg,http://localhost/mvcframework/public/img/c13.jpg', 'Touche opto-mécanique Razer avec une force d\'activation de 45G / Durée de vie de 100mF/ Rétroéclairage Chroma avec 16,8millions de couleurs / Stockage hybride intégré jusqu\'à 5 profils / Touches entièrement programmables avec enregistrement de macros à la volée / Activation simultanée de 10t avec anti-ghosting / Câble en fibre tressée / Fonction Ultrapolling 1000Hz / Plaque mate en aluminium', 3, 5, 33, 5, 1),
(28, 'K95 RGB', 682.00, 33, 'http://localhost/mvcframework/public/img/c21.jpg,http://localhost/mvcframework/public/img/c22.jpg', 'avier Gaming Corsair K95 RGB\r\nChâssis en aluminium,Switches Cherry MX Brown RGB : actionnement rapide (2 mm) et force légère nécessaire (45g),Rétroéclairage personnalisable avec 16.8 millions de couleurs avec de nombreux modes de personnalisation (static, blink, wave, reactive typing...),Technologie anti-ghosting,Port USB,6 touches \"G\" programmables,3 profils embarqués,Frappe confortable et toucher agréable,Repose-poignet ergonomique et détachable,Touche Windows désactivable,Compatible Windows Vista/7/8/10,6 touches multimédia intégrées', 3, 4, 15, 6, 1),
(29, 'CH-9104113-FR', 380.00, 22, 'http://localhost/mvcframework/public/img/c41.jpg,http://localhost/mvcframework/public/img/c42.jpg,http://localhost/mvcframework/public/img/c43.jpg', 'Clavier Gaming Corsair STRAFE RGB\r\n104 touches personnalisables,Touches Cherry MX : Touches Cherry MX rapides, précises, et durables,Rétroéclairage multicolore RGB,Entièrement programmable : Réattribuez et créez n\'importe quelle association de touches,Port USB,Confort et contrôle : Touches texturées et profilées,Circuit de jeu : 100% anti-ghosting quelle que soit la vitesse à laquelle vous jouez,Média à accès facilité : Réglez le volume de votre média à la volée,Dimensions : 448mm x 170mm x 40mm / 1.53 kg,Compatible Windows 7/8/10', 3, 5, 32, 6, 1),
(30, 'CK350', 280.00, 11, 'http://localhost/mvcframework/public/img/c51.jpg,http://localhost/mvcframework/public/img/c52.jpg,http://localhost/mvcframework/public/img/c53.jpg,http://localhost/mvcframework/public/img/c54.jpg', 'Clavier mécanique pour gamer COOLERMASTER- Switches Outemu Red: durée de vie de 50 millions de frappes- Contrôles à la volée- Conception en aluminium brossé- Logiciel de personnalisation- Rétro-éclairage RGB LED par touche', 3, 4, 25, 5, 1),
(31, '61881191744', 280.00, 15, 'http://localhost/mvcframework/public/img/c61.jpg,http://localhost/mvcframework/public/img/c62.jpg', 'KONIX Drakkar Bifrost\r\n- Clavier semi-mécanique\r\n- RÉTROÉCLAIRAGE CLAVIER (Red)\r\n- ECLAIRAGE TOUCHES (Red)\r\n- Inversion de touches ZQSD/Flèches\r\n- Verrouillage touche Windows\r\n- Anti-ghosting ', 3, 5, 12, 6, 1),
(32, 'MM830', 249.00, 10, 'http://localhost/mvcframework/public/img/s11.jpg,http://localhost/mvcframework/public/img/s12.jpg,http://localhost/mvcframework/public/img/s13.jpg', 'Souris Gamer COOLER MASTER - Type de Souris: Optique - Technologie de Connectivité: Filaire - Interface: USB - Nombre de boutons: 8 - Type de Roulette: Bidirectionnelle - Résolution: 24000 dpi - Longueur de câble: 1.8 m - Dimensions: 43.4 x 82,2 x 130,01 mm - Poids: 162 g', 4, 5, 33, 5, 1),
(33, 'M5 RGB', 180.00, 10, 'http://localhost/mvcframework/public/img/s21.jpg,http://localhost/mvcframework/public/img/s22.jpg,http://localhost/mvcframework/public/img/s23.jpg', 'Sensibilité : 50~16000dpi(Default: 800/1200/1600/2400dpi)\r\nLED : RGB 2.0\r\nCouleur : Noir Matte\r\nLongueur Câble : 1.8 m\r\nPoids : 118g~130.5g+- 5%\r\nDimensions : (L)128 x (W)72 x (H)43 mm', 4, 2, 15, 5, 1),
(36, 'CH-9308011-EU', 200.00, 20, 'http://localhost/mvcframework/public/img/s31.jpg,http://localhost/mvcframework/public/img/s32.jpg,http://localhost/mvcframework/public/img/s33.jpg', 'Design ambidextre-poids léger (86 gr), durabilité-Capteur optique de 200 à 12 400 dpi-8 boutons programmables-Deux zones d\'éclairage LED RGB à personnaliser parmi une palette de 16.8 millions de couleurs-Longueur du câble : 1.8 m-Dimensions : 124 x 68.4 x 40 mm', 4, 4, 40, 6, 1),
(38, 'RD-M808', 80.00, 4, 'http://localhost/mvcframework/public/img/s51.jpg,http://localhost/mvcframework/public/img/s52.jpg,http://localhost/mvcframework/public/img/s53.jpgg,http://localhost/mvcframework/public/img/s54.jpg', 'Conception légère - 20 millions de clics - Forme ergonomique - Câble ultra-léger ultra-léger - Capteur optique de qualité gaming - Rétroéclairage RGB - Taille: 126,8 mm * 65,5 mm * 41 mm - Poids:  88 g - ACC 30g - DPI:100-12 400 - Capteur Pixart optique 3327 - Configuration requise Windows Vista / XP / Win7 / Win10 ', 4, 2, 24, 3, 1),
(39, 'CM310', 230.00, 4, 'http://localhost/mvcframework/public/img/s61.jpg,http://localhost/mvcframework/public/img/s62.jpg,http://localhost/mvcframework/public/img/s63.jpgg,http://localhost/mvcframework/public/img/s64.jpg,http://localhost/mvcframework/public/img/s65.jpg', 'ouris gamer COOLER MASTER - Type de Souris: Optique- Technologie de Connectivité: Filaire - Interface: USB - Nombre de boutons: 8- Type de Roulette: Bidirectionnelle-Résolution: 1000 dpi - Rétro-éclairage RGB - Longueur de câble: 1.8 m- Dimensions: 39.5 x 71.5 x 127 mm- Poids: 135 g- Couleur: Noir', 4, 3, 45, 5, 1),
(44, 'KD25F', 1599.00, 10, 'http://localhost/mvcframework/public/img/e11.jpg,http://localhost/mvcframework/public/img/e12.jpg,http://localhost/mvcframework/public/img/e13.jpg,http://localhost/mvcframework/public/img/e14.jpg', 'Ecran GIGABYTE AORUS 25  :  Résolution: FHD (1920 x 1080 pixels )TN - 240 Hz -Format image: 16:9 - Luminosité:400 cd/m² - Temps de Réponse:0.5 ms - Contraste: 1000:1  - Avec AMD FreeSync et G-SYNC – technologies Low Blue Light et Flicker Free  - HDMI  /DisplayPort - Couleur : Noir - Garantie: 1 an', 5, 5, 31, 2, 1),
(45, 'VG27VQ', 2300.00, 10, 'http://localhost/mvcframework/public/img/e31.jpg,http://localhost/mvcframework/public/img/e32.jpg,http://localhost/mvcframework/public/img/e33.jpg,http://localhost/mvcframework/public/img/e34.jpg', 'Ecran Gaming ASUS  - Taille de l\'ecran : 27\" FULL HD - Résolution: 1920 x 1080 pixels -Format: 16:9 -165 Hz - Luminosité: 400   -Type de panneau: VA - Contraste: 3000:1 - Temps de réponse: 1 ms - Angle de vue: 178  (H) 178  (V) - Connecteurs: 2 x HDMI (v1.4), DisplayPort 1.2 - Garantie: 1 an', 5, 5, 40, 1, 1),
(50, 'AOC-C27G1', 1800.00, 3, 'http://localhost/mvcframework/public/img/e21.jpg,http://localhost/mvcframework/public/img/e22.jpg,http://localhost/mvcframework/public/img/e23.jpg,http://localhost/mvcframework/public/img/e24.jpg', 'ECRAN AOC C27G1 : Taille de l\'ecran : 27\" Full HD 1920 x 1080 pixels - Temps de réponse: 1 ms - Dalle VA  incurvée - 16:9 - un taux de rafraîchissement d\'image de 144 Hz sur un écran Technologie AMD FreeSync  - un contraste : 80 000 000:1  - luminosité:\r\n250 cd/m² – Poids : 4.46 kg - Couleur: Noir - Garantie: 1 an', 5, 3, 60, 2, 1),
(51, 'XG248Q', 2200.00, 6, 'http://localhost/mvcframework/public/img/e41.jpg,http://localhost/mvcframework/public/img/e42.jpg,http://localhost/mvcframework/public/img/e43.jpg,http://localhost/mvcframework/public/img/e44.jpg', 'ECRAN : 23.8” Full HD (1920 x 1080 pixels) -  Format : 16/9 - Temps de réponse: 1 ms - un taux de rafraîchissement d\'image : 240 Hz  - Type de rétroéclairage : TN -  un contraste :  1000:1  -  luminosité: 400 - Ultra Low Blue Light + Flicker Free cd/m² - HDMI/ DisplayPort - FreeSync - Compatible G-SYNC - Pieds ergonomiques avec possibilité d’inclinaison, rotation, pivotement et ajustement de la hauteur - Garantie: 1 an ', 6, 5, 35, 5, 1);

-- --------------------------------------------------------

--
-- Structure de la table `reviews`
--

DROP TABLE IF EXISTS `reviews`;
CREATE TABLE IF NOT EXISTS `reviews` (
  `nom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `reviw` varchar(255) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_item` int(11) NOT NULL,
  `rating` varchar(255) NOT NULL,
  `idreview` int(11) NOT NULL AUTO_INCREMENT,
  `date` varchar(255) NOT NULL,
  PRIMARY KEY (`idreview`),
  KEY `ck_iduser` (`id_user`),
  KEY `ck_iditem` (`id_item`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `pseudo` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `addresse` varchar(255) DEFAULT NULL,
  `sexe` varchar(255) DEFAULT NULL,
  `telephone` varchar(255) DEFAULT NULL,
  `mdp` varchar(255) DEFAULT NULL,
  `img_user` varchar(255) NOT NULL DEFAULT 'http://ssl.gstatic.com/accounts/ui/avatar_2x.png',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `pseudo`, `email`, `addresse`, `sexe`, `telephone`, `mdp`, `img_user`) VALUES
(23, 'deng', 'fehmi', 'fehmi', 'fehmi@enis.tn', 'jerba', 'Mr', '97409244', '$2y$10$gwuoxpSmikJcmtlAoYpwZurIY2Of79mNECiTJHGumqmumD54LIU5a', 'http://ssl.gstatic.com/accounts/ui/avatar_2x.png'),
(30, 'taha', 'oussama', 'aarbi', 'arbi@enis.tn', 'aa', 'Mr', '25252525', '$2y$10$fV/4EbxZen98v9zpaScmKuyZfsSaEGEEqbUEVG.D6GHLmygLxSwKu', 'http://localhost/test/public/img/icon.jpg'),
(31, 'arbi', 'oussama', 'arbi', 'arbi@gmail.com', 'aaa', 'Mr', '25825825', '$2y$10$XQv46VlPMwplM5CyNE/d5OQjIjEnPlscoupAXGEEMNjgcg/qDKiy6', 'http://ssl.gstatic.com/accounts/ui/avatar_2x.png');

-- --------------------------------------------------------

--
-- Structure de la table `wishlist`
--

DROP TABLE IF EXISTS `wishlist`;
CREATE TABLE IF NOT EXISTS `wishlist` (
  `product_id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `idwhish` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`idwhish`),
  KEY `fk_usera` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `wishlist`
--

INSERT INTO `wishlist` (`product_id`, `id_user`, `idwhish`) VALUES
(13, 30, 39);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `ck_item_id` FOREIGN KEY (`product_id`) REFERENCES `products` (`item_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ck_user_id` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `ck_idbrand` FOREIGN KEY (`item_brand`) REFERENCES `brands` (`brand_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `ck_iditem` FOREIGN KEY (`id_item`) REFERENCES `products` (`item_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `wishlist`
--
ALTER TABLE `wishlist`
  ADD CONSTRAINT `fk_usera` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
