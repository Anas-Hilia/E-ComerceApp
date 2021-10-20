-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2020 at 05:09 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mashop`
--

-- --------------------------------------------------------

--
-- Table structure for table `avis`
--

CREATE TABLE `avis` (
  `id` int(11) NOT NULL,
  `image` varchar(50) NOT NULL,
  `titre` text NOT NULL,
  `description` text NOT NULL,
  `date_avis` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `avis`
--

INSERT INTO `avis` (`id`, `image`, `titre`, `description`, `date_avis`) VALUES
(3, '3.jpeg', 'Rediction', 'Soyez la et gangner plus', '2020-01-14'),
(4, '4.jpeg', 'Just...', 'oh !!!!!!!!!!!!!!!!!!!!1', '2020-01-14'),
(5, '5.jpeg', 'On vous aime', 'Oui bien sur', '2020-01-14');

-- --------------------------------------------------------

--
-- Table structure for table `categorie`
--

CREATE TABLE `categorie` (
  `id` int(11) NOT NULL,
  `libelle` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categorie`
--

INSERT INTO `categorie` (`id`, `libelle`) VALUES
(2, 'ahmed@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `commande`
--

CREATE TABLE `commande` (
  `id` int(11) NOT NULL,
  `date_commande` date NOT NULL,
  `adress` varchar(100) NOT NULL,
  `client` int(11) NOT NULL,
  `panier` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `evaluation_client`
--

CREATE TABLE `evaluation_client` (
  `id` int(11) NOT NULL,
  `rate` int(5) DEFAULT NULL,
  `comment` text NOT NULL,
  `client` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `facture`
--

CREATE TABLE `facture` (
  `id` int(11) NOT NULL,
  `commande` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tel` varchar(50) NOT NULL,
  `titre` text NOT NULL,
  `message` text NOT NULL,
  `nom` varchar(50) NOT NULL,
  `date_message` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `email`, `tel`, `titre`, `message`, `nom`, `date_message`) VALUES
(1, 'ahmedken111@gmail.com', '+212767372542', 'Amour et mort', 'fffffffffffffffffffffffffff', 'Ahmed', '0000-00-00'),
(2, 'kkkkkk@gmail.com', '0767372542', 'oooooooo', 'hhhhhh', 'hhhhhh', '2020-01-16');

-- --------------------------------------------------------

--
-- Table structure for table `paniers`
--

CREATE TABLE `paniers` (
  `id` int(11) NOT NULL,
  `produit` int(11) NOT NULL,
  `qte` int(11) NOT NULL,
  `panier` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `post_livraison`
--

CREATE TABLE `post_livraison` (
  `id` int(11) NOT NULL,
  `date_post_livraison` date NOT NULL,
  `pre_livraison` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pre_livraison`
--

CREATE TABLE `pre_livraison` (
  `id` int(11) NOT NULL,
  `date_pre_livraison` date NOT NULL,
  `livreur` int(11) NOT NULL,
  `commande` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `produit`
--

CREATE TABLE `produit` (
  `id` int(11) NOT NULL,
  `libelle` varchar(45) NOT NULL,
  `description` text NOT NULL,
  `photo` varchar(45) NOT NULL,
  `prix` double NOT NULL,
  `super` int(11) NOT NULL,
  `categorie` int(11) NOT NULL,
  `qte_stock` int(11) NOT NULL DEFAULT 0,
  `poids` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `produit`
--

INSERT INTO `produit` (`id`, `libelle`, `description`, `photo`, `prix`, `super`, `categorie`, `qte_stock`, `poids`) VALUES
(8, 'champoig', 'hhhhhhhhh', '22.jpeg', 250, 7, 2, 458, 0),
(9, 'jjjj', 'hhhhhhhhhh', '9.jpeg', 856, 7, 2, 852, 0);

-- --------------------------------------------------------

--
-- Table structure for table `promotion`
--

CREATE TABLE `promotion` (
  `id` int(11) NOT NULL,
  `pourcentage` float NOT NULL,
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL,
  `produit` int(11) NOT NULL,
  `super` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `super`
--

CREATE TABLE `super` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `photo` varchar(45) NOT NULL,
  `ville` int(11) NOT NULL,
  `gestionaire` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `super`
--

INSERT INTO `super` (`id`, `nom`, `photo`, `ville`, `gestionaire`) VALUES
(7, 'Marjane', '1.jpeg', 4, 21);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `login` varchar(45) NOT NULL,
  `mdp` varchar(45) NOT NULL,
  `nom` varchar(45) NOT NULL,
  `prenom` varchar(45) NOT NULL,
  `type` varchar(45) NOT NULL,
  `photo` varchar(45) NOT NULL,
  `etat` varchar(45) DEFAULT NULL,
  `ville` int(11) NOT NULL,
  `tel` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `login`, `mdp`, `nom`, `prenom`, `type`, `photo`, `etat`, `ville`, `tel`) VALUES
(20, 'Hamed', 'c2c0b6537a7cc130306c23475b2cf8aa', 'Hamed', 'Ebou', 'admin', '20.png', NULL, 16, '27804921'),
(21, 'ahmed', 'ebdecc296af88361ac9deab7d8e532d8', 'Ahmed', 'Ebou', 'gestionaire', '21.jpeg', NULL, 5, '+212767372542');

-- --------------------------------------------------------

--
-- Table structure for table `ville`
--

CREATE TABLE `ville` (
  `id` int(11) NOT NULL,
  `libelle` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ville`
--

INSERT INTO `ville` (`id`, `libelle`) VALUES
(1, 'RABAT'),
(2, 'SALE BOUKNADEL'),
(3, 'SKHIRATE-TEMARA'),
(4, 'CASABLANCA ANFA'),
(5, 'AL FIDA DERB SULTAN'),
(6, 'sidi bennour'),
(7, 'AIN SEBAA HAY MOHAMMEDI'),
(8, 'AIN CHOCK HAY HASSANI'),
(9, 'SIDI BERNOUSSI ZENATA'),
(10, 'BEN MSICK MEDIOUNA'),
(11, 'MOHAMMADIA'),
(12, 'FES-EL-JADID-DAR DBIBAGH'),
(13, 'FES-MEDINA'),
(14, 'ZOUAGHA - MOULAY-YACOUB'),
(15, 'SEFROU'),
(16, 'MARRAKECH-MENARA'),
(17, 'MARRAKECH-MEDINA'),
(18, 'SIDI YOUSSEF BEN ALI'),
(19, 'CHICHAOUA'),
(20, 'AL HAOUZ'),
(21, 'MEKNES-EL-MENZEH'),
(22, 'MEKNES-AL-ISMAILIA'),
(23, 'EL-HAJEB'),
(24, 'OUJDA-ANGAD'),
(25, 'BERKANE'),
(26, 'JERADA'),
(27, 'AGADIR IDA-TANANE'),
(28, 'INZEGANE-AIT-MELLOUL'),
(29, 'CHTOUKA-AIT-BAHA'),
(30, 'LARACHE'),
(31, 'CHEFCHAOUEN'),
(32, 'TETOUAN'),
(33, 'LAAYOUNE'),
(34, 'BOUJDOUR'),
(35, 'AL HOCEIMA'),
(36, 'ASSA-ZAG'),
(37, 'AZILAL'),
(38, 'BENI MELLAL'),
(39, 'BENSLIMANE'),
(40, 'BOULEMANE'),
(41, 'EL JADIDA'),
(42, 'KELAAT  ESSRAGHNA'),
(43, 'ERRACHIDIA'),
(44, 'ESSAOUIRA'),
(45, 'ES-SEMARA'),
(46, 'FIGUIG'),
(47, 'GUELMIM'),
(48, 'IFRANE'),
(49, 'KENITRA'),
(50, 'KHEMISSET'),
(51, 'KHENIFRA'),
(52, 'KHOURIBGA'),
(53, 'NADOR'),
(54, 'OUARZAZATE'),
(55, 'OUED ED DAHAB'),
(56, 'SAFI'),
(57, 'SETTAT'),
(58, 'SIDI KACEM'),
(59, 'TANGER'),
(60, 'TAN-TAN'),
(61, 'TAOUNATE'),
(62, 'TAROUDANNT'),
(63, 'TATA'),
(64, 'TAZA'),
(65, 'TIZNIT'),
(66, 'ZAGORA'),
(67, 'TAOURIRT'),
(68, 'MOULAY RCHID SIDI OTMANE'),
(69, 'FAHS BNI MAKADA'),
(71, 'SALA ALJADIDA'),
(72, 'MECHOUAR(CASA)'),
(73, 'ETRANGER'),
(74, 'MAROC'),
(76, 'MAROC MILITAIRE'),
(77, 'SIDI SLIMANE'),
(78, 'SIDI YAHYA'),
(79, 'OUEZZANE'),
(80, 'NOUASSER'),
(81, 'EL MADIEQ'),
(82, 'Fquih Ben Salah'),
(83, 'Sidi Slimane'),
(84, 'Ouezzane'),
(85, 'Guercif'),
(86, 'Driouch'),
(87, 'Tarfaya'),
(88, 'Midelt'),
(89, 'Sidi Ifni'),
(90, 'Tinghir'),
(91, 'Hay Hassani'),
(92, 'youssoufia'),
(93, 'Berrechid');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `avis`
--
ALTER TABLE `avis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `libelle` (`libelle`);

--
-- Indexes for table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`id`),
  ADD KEY `client` (`client`);

--
-- Indexes for table `evaluation_client`
--
ALTER TABLE `evaluation_client`
  ADD PRIMARY KEY (`id`),
  ADD KEY `client` (`client`);

--
-- Indexes for table `facture`
--
ALTER TABLE `facture`
  ADD PRIMARY KEY (`id`),
  ADD KEY `commande` (`commande`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paniers`
--
ALTER TABLE `paniers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `produit` (`produit`);

--
-- Indexes for table `post_livraison`
--
ALTER TABLE `post_livraison`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pre_livraison` (`pre_livraison`);

--
-- Indexes for table `pre_livraison`
--
ALTER TABLE `pre_livraison`
  ADD PRIMARY KEY (`id`),
  ADD KEY `livreur` (`livreur`),
  ADD KEY `commande` (`commande`);

--
-- Indexes for table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `produit_ibfk_1` (`super`),
  ADD KEY `produit` (`categorie`);

--
-- Indexes for table `promotion`
--
ALTER TABLE `promotion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `produit` (`produit`),
  ADD KEY `super` (`super`);

--
-- Indexes for table `super`
--
ALTER TABLE `super`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ville` (`ville`),
  ADD KEY `gestionaire` (`gestionaire`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`),
  ADD KEY `ville` (`ville`);

--
-- Indexes for table `ville`
--
ALTER TABLE `ville`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `avis`
--
ALTER TABLE `avis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `commande`
--
ALTER TABLE `commande`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `evaluation_client`
--
ALTER TABLE `evaluation_client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `facture`
--
ALTER TABLE `facture`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `paniers`
--
ALTER TABLE `paniers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post_livraison`
--
ALTER TABLE `post_livraison`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pre_livraison`
--
ALTER TABLE `pre_livraison`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produit`
--
ALTER TABLE `produit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `promotion`
--
ALTER TABLE `promotion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `super`
--
ALTER TABLE `super`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `ville`
--
ALTER TABLE `ville`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `commande_ibfk_1` FOREIGN KEY (`client`) REFERENCES `user` (`id`);

--
-- Constraints for table `evaluation_client`
--
ALTER TABLE `evaluation_client`
  ADD CONSTRAINT `evaluation_client_ibfk_1` FOREIGN KEY (`client`) REFERENCES `user` (`id`);

--
-- Constraints for table `facture`
--
ALTER TABLE `facture`
  ADD CONSTRAINT `facture_ibfk_1` FOREIGN KEY (`commande`) REFERENCES `commande` (`id`);

--
-- Constraints for table `paniers`
--
ALTER TABLE `paniers`
  ADD CONSTRAINT `paniers_ibfk_1` FOREIGN KEY (`produit`) REFERENCES `produit` (`id`);

--
-- Constraints for table `post_livraison`
--
ALTER TABLE `post_livraison`
  ADD CONSTRAINT `post_livraison_ibfk_1` FOREIGN KEY (`pre_livraison`) REFERENCES `pre_livraison` (`id`);

--
-- Constraints for table `pre_livraison`
--
ALTER TABLE `pre_livraison`
  ADD CONSTRAINT `pre_livraison_ibfk_1` FOREIGN KEY (`livreur`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `pre_livraison_ibfk_2` FOREIGN KEY (`commande`) REFERENCES `commande` (`id`);

--
-- Constraints for table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `produit_ibfk_1` FOREIGN KEY (`super`) REFERENCES `super` (`id`),
  ADD CONSTRAINT `produit_ibfk_2` FOREIGN KEY (`categorie`) REFERENCES `categorie` (`id`);

--
-- Constraints for table `promotion`
--
ALTER TABLE `promotion`
  ADD CONSTRAINT `promotion_ibfk_1` FOREIGN KEY (`produit`) REFERENCES `produit` (`id`),
  ADD CONSTRAINT `promotion_ibfk_2` FOREIGN KEY (`super`) REFERENCES `super` (`id`);

--
-- Constraints for table `super`
--
ALTER TABLE `super`
  ADD CONSTRAINT `super_ibfk_1` FOREIGN KEY (`ville`) REFERENCES `ville` (`id`),
  ADD CONSTRAINT `super_ibfk_2` FOREIGN KEY (`gestionaire`) REFERENCES `user` (`id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`ville`) REFERENCES `ville` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
