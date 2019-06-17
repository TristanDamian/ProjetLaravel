-- MySQL dump 10.16  Distrib 10.1.40-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: commercial
-- ------------------------------------------------------
-- Server version	10.1.40-MariaDB-0ubuntu0.18.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `articles`
--

DROP TABLE IF EXISTS `articles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `articles` (
  `NO_ARTICLE` char(6) NOT NULL,
  `LIB_ARTICLE` char(30) NOT NULL,
  `QTE_DISPO` int(11) NOT NULL,
  `VILLE_ART` char(15) NOT NULL,
  `PRIX_ART` decimal(8,2) NOT NULL,
  `INTERROMPU` char(1) NOT NULL,
  PRIMARY KEY (`NO_ARTICLE`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `articles`
--

LOCK TABLES `articles` WRITE;
/*!40000 ALTER TABLE `articles` DISABLE KEYS */;
INSERT INTO `articles` VALUES ('001001','Bureau Electronique',2,'Nantes',624.97,'F'),('001002','Ensemble bureau (Secretaire)',2,'Paris',805.23,'F'),('001005','Ensemble bureau (Directeur)',1,'Nantes',1743.69,'F'),('001007','Table en bois - pied central',29,'Lyon',698.64,'F'),('001008','Meuble micro-ordinateur',22,'Paris',583.80,'F'),('001009','Chaise - dossier reglable',124,'Nantes',81.29,'T'),('001013','Chaise (Moderne) pneumatique',115,'Nantes',74.74,'F'),('001015','Porte coulissante ebene',15,'Lyon',1126.59,'T'),('001019','Table de reunion',12,'Lyon',695.44,'F'),('001021','Ensemble bureau (President)',3,'Lyon',1822.52,'F'),('001022','Table en orme',5,'Lyon',560.67,'F'),('001024','Table en aluminium',140,'Nantes',274.03,'F'),('001025','Bureau (Directeur) - 2 metres',63,'Paris',366.25,'F'),('001027','Bureau (Directeur) - 3 metres',20,'Nantes',208.62,'F'),('001029','Armoire - 2 tiroirs',200,'Lyon',121.14,'F'),('001031','Chaise (Directeur) - pivotante',79,'Paris',77.89,'F'),('001032','Armoire - 4 tiroirs',15,'Nantes',225.15,'F'),('001033','Chaise - accoudoirs standard',20,'Nantes',347.71,'T'),('001038','Lampe - bras articule',169,'Paris',43.70,'F');
/*!40000 ALTER TABLE `articles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clientel`
--

DROP TABLE IF EXISTS `clientel`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clientel` (
  `NO_CLIENT` char(6) NOT NULL,
  `SOCIETE` char(25) NOT NULL,
  `NOM_CL` char(15) NOT NULL,
  `PRENOM_CL` char(10) NOT NULL,
  `ADRESSE_CL` char(20) NOT NULL,
  `VILLE_CL` char(15) NOT NULL,
  `CODE_POST_CL` char(5) NOT NULL,
  PRIMARY KEY (`NO_CLIENT`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clientel`
--

LOCK TABLES `clientel` WRITE;
/*!40000 ALTER TABLE `clientel` DISABLE KEYS */;
INSERT INTO `clientel` VALUES ('000001','Design','Adami','Fabien','24,','Vernon','27200'),('000003','Meubles Langlais','Ladelis','Laurent','42, rue Josephine','Angers','49000'),('000009','Aux Meubles sur Mesures','Ralain','Gerard','Place Carnaval','Mornant','69440'),('000011','Mobilier Americain','Bojolait','Christine','28, rue Chopin','Nimes','13100'),('000016','Fournitures et Bureaux','Guilleaume','Jerome','20, rue Borville','Elbeuf','76500'),('000017','Le Mobilier Noir','Camelot','Jean','46, rue Maillot','Chevrieres','60710'),('000018','Systemes Interieurs','Gonzalez','Bruno','17, rue Curie','Loiret','45000'),('000019','Au Grand Design','Ancelot','Jerome','7, place Hitchcock','Bandol','83150'),('000022','Mobilier de Paris','Marbella','Max','17, place Rabelais','Amiens','80000'),('000024','Bois et Metal','Farre','Philippe','59, rue Sambat','Gisors','27140'),('000025','Le Mobilier Moderne','Vasille','Isabelle','47, rue des Pres','Chantilly','60500'),('000027','Agencement de Bureaux','Ravard','Jacques','65, boulevard Jasmin','Ermenonville','60950'),('000028','Conception et Bois','Pavent','Raymond','12, place Fontaine','Cabourg','14390'),('000031','Le Mobilier de la vallee','Rasazin','Jacky','2, route de l arbre','Blain','44130'),('000032','Design Contemporain','Jeaumont','Dominique','6, rue Emile Zola','Evron','53600'),('000033','La Maison Interieure','Scheinder','Marc','31, rue Saturnin','Fos-sur-mer','13270'),('000034','Le Bureau Japonais','Quelavoine','Charles','36, avenue Frank','Blonville','14910'),('000035','Le Mobilier de la Vallee','Hellamy','Andre','40, rue Federation','Orleans','45000'),('000036','Nouveaux Horizons','Zelinger','Jacques','4, rue Georges Sand','Nantes','44000'),('000040','Espaces de Vie','Penoist','Alain','5, rue Rolland','Jumieges','76118'),('000042','Meubles Cohen','Pujo','Bernard','52, rue Pannette','Evreux','27000'),('000043','Les meubles d Antan','Berenger','Michel','20, rue Alouette','Arles','30100'),('000045','Les Classiques','Ternard','Pierre','40, rue Ferrari','Guingamp','22200'),('000046','Interieurs de bureaux','Lerthaux','Alain','12, avenue d Alleray','Bourges','18000');
/*!40000 ALTER TABLE `clientel` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `commandes`
--

DROP TABLE IF EXISTS `commandes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `commandes` (
  `NO_COMMAND` char(6) NOT NULL,
  `NO_VENDEUR` char(6) NOT NULL,
  `NO_CLIENT` char(6) NOT NULL,
  `DATE_CDE` varchar(20) NOT NULL,
  `FACTURE` char(1) NOT NULL,
  PRIMARY KEY (`NO_COMMAND`),
  KEY `fk1_commandes` (`NO_VENDEUR`),
  KEY `fk2_commandes` (`NO_CLIENT`),
  CONSTRAINT `fk1_commandes` FOREIGN KEY (`NO_VENDEUR`) REFERENCES `vendeur` (`NO_VENDEUR`),
  CONSTRAINT `fk2_commandes` FOREIGN KEY (`NO_CLIENT`) REFERENCES `clientel` (`NO_CLIENT`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `commandes`
--

LOCK TABLES `commandes` WRITE;
/*!40000 ALTER TABLE `commandes` DISABLE KEYS */;
INSERT INTO `commandes` VALUES ('020002','000008','000025','2017-06-19','F'),('020003','000006','000043','2017-06-20','F'),('020004','000001','000034','2017-05-21','F'),('020005','000001','000016','2017-08-21','F'),('020006','000012','000036','2017-10-23','F'),('020007','000013','000019','2017-09-23','F'),('020008','000003','000011','2017-09-21','F'),('020009','000012','000018','2017-11-20','F'),('020010','000001','000031','2017-07-18','F'),('020011','000020','000040','2017-08-29','F'),('020012','000008','000027','2017-09-24','F'),('020013','000012','000036','2017-06-26','F'),('020014','000001','000001','2017-06-23','F'),('020015','000004','000019','2017-07-24','F'),('020016','000013','000011','2017-09-18','F'),('020017','000006','000032','2017-09-25','F'),('020018','000013','000036','2017-09-28','F'),('020019','000013','000016','2017-09-29','F'),('020020','000013','000031','2017-09-18','F'),('020021','000008','000046','2017-08-14','F'),('020022','000004','000027','2017-09-17','F'),('020023','000003','000040','2017-10-22','F'),('020024','000012','000045','2017-10-01','F'),('020025','000003','000019','2017-10-05','F'),('020026','000004','000017','2017-10-07','F'),('20027','000019','000028','2019-06-16','F');
/*!40000 ALTER TABLE `commandes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `compose`
--

DROP TABLE IF EXISTS `compose`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `compose` (
  `NO_COMPOSE` char(6) NOT NULL,
  `NO_COMPOSANT` char(6) NOT NULL,
  `QTE_COMPOSANT` int(11) DEFAULT NULL,
  PRIMARY KEY (`NO_COMPOSE`,`NO_COMPOSANT`),
  KEY `fk2_compose` (`NO_COMPOSANT`),
  CONSTRAINT `fk1_compose` FOREIGN KEY (`NO_COMPOSE`) REFERENCES `articles` (`NO_ARTICLE`),
  CONSTRAINT `fk2_compose` FOREIGN KEY (`NO_COMPOSANT`) REFERENCES `articles` (`NO_ARTICLE`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `compose`
--

LOCK TABLES `compose` WRITE;
/*!40000 ALTER TABLE `compose` DISABLE KEYS */;
INSERT INTO `compose` VALUES ('001001','001007',1),('001001','001013',1),('001001','001032',1),('001001','001038',1),('001002','001013',1),('001002','001025',1),('001002','001032',1),('001005','001024',1),('001005','001027',1),('001005','001031',1),('001021','001015',1),('001021','001024',1),('001021','001025',1),('001021','001031',1);
/*!40000 ALTER TABLE `compose` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `detail_cde`
--

DROP TABLE IF EXISTS `detail_cde`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `detail_cde` (
  `NO_COMMAND` char(6) NOT NULL,
  `NO_ARTICLE` char(6) NOT NULL,
  `QTE_CDEE` int(11) DEFAULT NULL,
  `LIVREE` char(1) DEFAULT NULL,
  PRIMARY KEY (`NO_COMMAND`,`NO_ARTICLE`),
  KEY `fk2_detail_cde` (`NO_ARTICLE`),
  CONSTRAINT `fk1_detail_cde` FOREIGN KEY (`NO_COMMAND`) REFERENCES `commandes` (`NO_COMMAND`) ON DELETE CASCADE,
  CONSTRAINT `fk2_detail_cde` FOREIGN KEY (`NO_ARTICLE`) REFERENCES `articles` (`NO_ARTICLE`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `detail_cde`
--

LOCK TABLES `detail_cde` WRITE;
/*!40000 ALTER TABLE `detail_cde` DISABLE KEYS */;
INSERT INTO `detail_cde` VALUES ('020003','001005',2,'F'),('020003','001021',4,'F'),('020004','001013',5,'F'),('020004','001027',5,'F'),('020004','001038',5,'F'),('020005','001019',2,'F'),('020006','001007',25,'F'),('020006','001031',25,'F'),('020007','001022',3,'F'),('020007','001033',3,'F'),('020008','001009',3,'F'),('020009','001029',31,'F'),('020010','001005',5,'F'),('020010','001021',2,'F'),('020011','001025',4,'F'),('020011','001029',7,'F'),('020011','001031',7,'F'),('020012','001015',5,'F'),('020013','001019',1,'F'),('020013','001022',2,'F'),('020014','001021',2,'F'),('020015','001025',15,'F'),('020016','001025',2,'F'),('020016','001031',4,'F'),('020017','001029',6,'F'),('020018','001038',4,'F'),('020019','001027',3,'F'),('020020','001024',7,'F'),('020020','001032',4,'F'),('020021','001013',8,'F'),('020021','001024',6,'F'),('020021','001025',8,'F'),('020022','001015',1,'F'),('020023','001024',12,'F'),('020023','001032',2,'F'),('020024','001009',3,'F'),('020024','001027',3,'F'),('020025','001019',1,'F'),('020026','001007',9,'F'),('020026','001013',9,'F'),('020026','001015',3,'F'),('020026','001024',5,'F'),('020026','001025',3,'F'),('20027','001001',1,'F'),('20027','001024',2,'F');
/*!40000 ALTER TABLE `detail_cde` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `utilisateur` (
  `NumUtil` int(11) NOT NULL,
  `NomUtil` varchar(100) COLLATE utf8_bin NOT NULL,
  `PrenomUtil` varchar(100) COLLATE utf8_bin NOT NULL,
  `MotPasse` varchar(100) COLLATE utf8_bin NOT NULL,
  `role` varchar(100) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`NumUtil`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `utilisateur`
--

LOCK TABLES `utilisateur` WRITE;
/*!40000 ALTER TABLE `utilisateur` DISABLE KEYS */;
INSERT INTO `utilisateur` VALUES (1,'Merlot','Pierre','secret','admin'),(2,'Lalande','Paul','123+aze','lecture'),(3,'Desborde','Fred','secret','admin'),(4,'Dubois','Jacques','123+aze','lecture'),(5,'Pichon','Lea','secret','admin'),(6,'Vasille','Isabelle','123+aze','lecture'),(7,'Pavent','Raymond','123+aze','lecture');
/*!40000 ALTER TABLE `utilisateur` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vendeur`
--

DROP TABLE IF EXISTS `vendeur`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vendeur` (
  `NO_VENDEUR` char(6) NOT NULL,
  `NO_VEND_CHEF_EQ` char(6) NOT NULL,
  `NOM_VEND` char(15) NOT NULL,
  `PRENOM_VEND` char(10) NOT NULL,
  `DATE_EMBAU` date NOT NULL,
  `VILLE_VEND` char(15) NOT NULL,
  `SALAIRE_VEND` decimal(8,2) NOT NULL,
  `COMMISSION` decimal(6,2) NOT NULL,
  PRIMARY KEY (`NO_VENDEUR`),
  KEY `fk1_vendeur` (`NO_VEND_CHEF_EQ`),
  CONSTRAINT `fk1_vendeur` FOREIGN KEY (`NO_VEND_CHEF_EQ`) REFERENCES `vendeur` (`NO_VENDEUR`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vendeur`
--

LOCK TABLES `vendeur` WRITE;
/*!40000 ALTER TABLE `vendeur` DISABLE KEYS */;
INSERT INTO `vendeur` VALUES ('000001','000001','Zimmerman','Alphonse','2000-12-02','Paris',3500.00,50.00),('000003','000001','Vidoni','Lise','2000-04-06','Lyon',2280.00,50.00),('000004','000001','Coudray','Bruno','2000-03-05','Paris',2500.00,50.00),('000006','000001','Thomas','Pierre','2001-05-23','Lyon',2856.00,50.00),('000008','000001','Mauleron','Arianne','2003-08-27','Paris',1300.00,50.00),('000011','000001','Gorbach','Michel','2000-05-29','Nantes',1960.00,70.00),('000012','000004','Charles','Edouard','2002-06-23','Nantes',1600.00,50.00),('000013','000004','Marin','Jean','2000-07-18','Paris',1500.00,11.00),('000015','000004','Rodinck','Auguste','2000-09-15','Lyon',1700.00,80.00),('000016','000004','Long','Gerard','2000-07-19','Lyon',1700.00,80.00),('000019','000004','Rolfes','Patrick','2001-02-25','Paris',1600.00,60.00),('000020','000001','Sandrin','Alex','2000-04-29','Nantes',1730.00,50.00);
/*!40000 ALTER TABLE `vendeur` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-06-16 16:52:40
