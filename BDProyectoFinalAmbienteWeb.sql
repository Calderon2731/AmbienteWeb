CREATE DATABASE  IF NOT EXISTS `dbproyectoweb` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `dbproyectoweb`;
-- MySQL dump 10.13  Distrib 8.0.38, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: dbproyectoweb
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.32-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `tcita`
--

DROP TABLE IF EXISTS `tcita`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tcita` (
  `IdCita` int(11) NOT NULL AUTO_INCREMENT,
  `IdUsuario` int(11) NOT NULL,
  `IdMedico` int(11) NOT NULL,
  `Fecha` date NOT NULL,
  `Hora` time NOT NULL,
  `Motivo` varchar(255) NOT NULL,
  PRIMARY KEY (`IdCita`),
  KEY `IdUsuario` (`IdUsuario`),
  KEY `IdMedico` (`IdMedico`),
  CONSTRAINT `tcita_ibfk_1` FOREIGN KEY (`IdUsuario`) REFERENCES `tusuario` (`IdUsuario`),
  CONSTRAINT `tcita_ibfk_2` FOREIGN KEY (`IdMedico`) REFERENCES `tmedico` (`IdMedico`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tcita`
--

LOCK TABLES `tcita` WRITE;
/*!40000 ALTER TABLE `tcita` DISABLE KEYS */;
INSERT INTO `tcita` VALUES (11,1,1,'2025-07-10','00:26:00','m'),(12,1,1,'2025-07-19','05:55:00','Dolor de cabeza'),(13,1,1,'2025-07-19','05:55:00','Dolor de cabeza'),(17,1,1,'2025-08-20','15:05:00','sadada'),(20,1,1,'2025-08-30','17:11:00','Dolores de espalda'),(23,1,1,'2025-08-17','07:00:00','Problemas respiratorios'),(25,1,2,'2025-08-26','17:57:00','dolores de cabeza fuertes ');
/*!40000 ALTER TABLE `tcita` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `terror`
--

DROP TABLE IF EXISTS `terror`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `terror` (
  `idError` bigint(11) NOT NULL AUTO_INCREMENT,
  `Descripcion` varchar(5000) NOT NULL,
  `FechaHora` datetime NOT NULL,
  PRIMARY KEY (`idError`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `terror`
--

LOCK TABLES `terror` WRITE;
/*!40000 ALTER TABLE `terror` DISABLE KEYS */;
INSERT INTO `terror` VALUES (1,'Unknown column \'Identificacion2\' in \'field list\'','2025-07-09 23:18:33'),(2,'Unknown column \'Identificacion2\' in \'field list\'','2025-07-09 23:18:38'),(3,'PROCEDURE dbproyectoweb.ValidarInicioSesion2 does not exist','2025-07-09 23:20:46'),(4,'PROCEDURE dbproyectoweb.ValidarInicioSesion2 does not exist','2025-07-09 23:20:48'),(5,'PROCEDURE dbproyectoweb.ValidarInicioSesion2 does not exist','2025-07-09 23:21:10'),(6,'PROCEDURE dbproyectoweb.ConsultarInfoMedicamento does not exist','2025-08-10 14:22:10'),(7,'PROCEDURE dbproyectoweb.ConsultarInfoMedicamento does not exist','2025-08-10 14:22:13'),(8,'PROCEDURE dbproyectoweb.ConsultarMedicamentos does not exist','2025-08-10 14:22:16'),(9,'PROCEDURE dbproyectoweb.consultarPacientes does not exist','2025-08-10 14:27:10'),(10,'PROCEDURE dbproyectoweb.consultarPacientes does not exist','2025-08-10 14:30:01'),(11,'PROCEDURE dbproyectoweb.consultarPacientes does not exist','2025-08-10 14:30:03'),(12,'Unknown column \'nombre\' in \'field list\'','2025-08-10 14:48:45'),(13,'Unknown column \'nombre\' in \'field list\'','2025-08-10 14:49:15'),(14,'Unknown column \'NombrePacientes\' in \'field list\'','2025-08-10 14:50:20'),(15,'Unknown column \'NombrePacientes\' in \'field list\'','2025-08-10 14:50:21'),(16,'Unknown column \'NombrePacientes\' in \'field list\'','2025-08-10 14:50:22'),(17,'Unknown column \'NombrePacientes\' in \'field list\'','2025-08-10 14:53:40'),(18,'Unknown column \'NombrePacientes\' in \'field list\'','2025-08-10 14:56:24'),(19,'PROCEDURE dbproyectoweb.consultarInfoPaciente does not exist','2025-08-10 14:58:14'),(20,'PROCEDURE dbproyectoweb.consultarInfoPaciente does not exist','2025-08-10 15:09:14'),(21,'Unknown column \'pIdPaciente\' in \'field list\'','2025-08-10 15:25:42'),(22,'PROCEDURE dbproyectoweb.consultarInfoPaciente does not exist','2025-08-10 17:35:56'),(23,'PROCEDURE dbproyectoweb.consultarInfoPaciente does not exist','2025-08-10 17:37:38'),(24,'PROCEDURE dbproyectoweb.consultarInfoPaciente does not exist','2025-08-10 17:41:39'),(25,'PROCEDURE dbproyectoweb.consultarInfoPaciente does not exist','2025-08-10 17:41:47'),(26,'PROCEDURE dbproyectoweb.consultarInfoPaciente does not exist','2025-08-10 17:50:55'),(27,'PROCEDURE dbproyectoweb.ConsultarInfoMedicamento does not exist','2025-08-17 23:26:06'),(28,'Incorrect number of arguments for PROCEDURE dbproyectoweb.RegistrarMedicamento; expected 9, got 8','2025-08-17 23:33:58'),(29,'Incorrect number of arguments for PROCEDURE dbproyectoweb.RegistrarMedicamento; expected 9, got 8','2025-08-17 23:38:52'),(30,'Incorrect number of arguments for PROCEDURE dbproyectoweb.RegistrarMedicamento; expected 9, got 8','2025-08-17 23:39:14'),(31,'PROCEDURE dbproyectoweb.ConsultarInfoMedicamento does not exist','2025-08-17 23:39:57'),(32,'PROCEDURE dbproyectoweb.CambiarEstadoMedicamento does not exist','2025-08-17 23:40:42'),(33,'PROCEDURE dbproyectoweb.ConsultarInfoMedicamento does not exist','2025-08-17 23:40:48'),(34,'PROCEDURE dbproyectoweb.CambiarEstadoMedicamento does not exist','2025-08-17 23:41:09'),(35,'Incorrect number of arguments for PROCEDURE dbproyectoweb.RegistrarMedicamento; expected 9, got 8','2025-08-17 23:48:17'),(36,'Incorrect number of arguments for PROCEDURE dbproyectoweb.RegistrarMedicamento; expected 9, got 8','2025-08-18 00:11:33'),(37,'You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near \'1000 mg\',\'Tabletas\',\'2026-06-30\',\'PharmaCorp S.A.\', \'30\', \'\')\' at line 1','2025-08-20 00:24:41'),(38,'Cannot add or update a child row: a foreign key constraint fails (`dbproyectoweb`.`tcita`, CONSTRAINT `tcita_ibfk_2` FOREIGN KEY (`IdMedico`) REFERENCES `tmedico` (`IdMedico`))','2025-08-20 01:00:35'),(39,'Cannot add or update a child row: a foreign key constraint fails (`dbproyectoweb`.`tcita`, CONSTRAINT `tcita_ibfk_2` FOREIGN KEY (`IdMedico`) REFERENCES `tmedico` (`IdMedico`))','2025-08-20 01:01:21'),(40,'Cannot add or update a child row: a foreign key constraint fails (`dbproyectoweb`.`tcita`, CONSTRAINT `tcita_ibfk_2` FOREIGN KEY (`IdMedico`) REFERENCES `tmedico` (`IdMedico`))','2025-08-20 01:01:24'),(41,'Cannot add or update a child row: a foreign key constraint fails (`dbproyectoweb`.`tcita`, CONSTRAINT `tcita_ibfk_2` FOREIGN KEY (`IdMedico`) REFERENCES `tmedico` (`IdMedico`))','2025-08-20 01:05:28'),(42,'Cannot add or update a child row: a foreign key constraint fails (`dbproyectoweb`.`tcita`, CONSTRAINT `tcita_ibfk_2` FOREIGN KEY (`IdMedico`) REFERENCES `tmedico` (`IdMedico`))','2025-08-20 01:05:35'),(43,'Cannot add or update a child row: a foreign key constraint fails (`dbproyectoweb`.`tcita`, CONSTRAINT `tcita_ibfk_2` FOREIGN KEY (`IdMedico`) REFERENCES `tmedico` (`IdMedico`))','2025-08-20 01:06:22'),(44,'Cannot add or update a child row: a foreign key constraint fails (`dbproyectoweb`.`tcita`, CONSTRAINT `tcita_ibfk_2` FOREIGN KEY (`IdMedico`) REFERENCES `tmedico` (`IdMedico`))','2025-08-20 01:06:25'),(45,'Cannot add or update a child row: a foreign key constraint fails (`dbproyectoweb`.`tcita`, CONSTRAINT `tcita_ibfk_2` FOREIGN KEY (`IdMedico`) REFERENCES `tmedico` (`IdMedico`))','2025-08-20 01:52:49');
/*!40000 ALTER TABLE `terror` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tmedicamento`
--

DROP TABLE IF EXISTS `tmedicamento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tmedicamento` (
  `IdMedicamento` bigint(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(100) NOT NULL,
  `Principio_activo` varchar(100) NOT NULL,
  `Concentracion` varchar(100) NOT NULL,
  `Forma_farmaceutica` varchar(100) NOT NULL,
  `Fecha_vencimiento` date NOT NULL,
  `Proveedor` varchar(100) NOT NULL,
  `Cantidad` int(11) NOT NULL,
  `Estado` bit(1) NOT NULL,
  `Imagen` varchar(255) NOT NULL,
  PRIMARY KEY (`IdMedicamento`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tmedicamento`
--

LOCK TABLES `tmedicamento` WRITE;
/*!40000 ALTER TABLE `tmedicamento` DISABLE KEYS */;
INSERT INTO `tmedicamento` VALUES (1,'Tabcin','Tabcin','300 mg','Cápsulas','2026-06-30','PharmaCorp S.A.',12,_binary '','/AmbienteWeb/views/ImagenMedicamentos/tabcin.png'),(2,'Acetaminofén','Acetaminofén','500 mg','tabletas','2027-02-18','MediFarm S.A',300,_binary '','/AmbienteWeb/views/ImagenMedicamentos/Acetaminofen.png'),(3,'Loratadina','Loratadina','400 mg','Tabletas','2026-06-30','PharmaCorp S.A.',30,_binary '','/AmbienteWeb/views/ImagenMedicamentos/Loratadina.png'),(4,'Mucosolvan','Mucosolvan','15 mg','liquido','2026-06-30','PharmaCorp S.A.',30,_binary '','/AmbienteWeb/views/ImagenMedicamentos/image.png');
/*!40000 ALTER TABLE `tmedicamento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tmedico`
--

DROP TABLE IF EXISTS `tmedico`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tmedico` (
  `IdMedico` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(255) NOT NULL,
  `Especialidad` varchar(100) NOT NULL,
  `Correo` varchar(100) NOT NULL,
  PRIMARY KEY (`IdMedico`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tmedico`
--

LOCK TABLES `tmedico` WRITE;
/*!40000 ALTER TABLE `tmedico` DISABLE KEYS */;
INSERT INTO `tmedico` VALUES (1,'Dr. Pérez','Cardiología',''),(2,'Dr. Gutierres','Medicina General','');
/*!40000 ALTER TABLE `tmedico` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tpaciente`
--

DROP TABLE IF EXISTS `tpaciente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tpaciente` (
  `IdPaciente` int(11) NOT NULL AUTO_INCREMENT,
  `NombrePaciente` varchar(200) NOT NULL,
  `edadPaciente` int(11) NOT NULL,
  `diagnostico` varchar(200) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  PRIMARY KEY (`IdPaciente`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tpaciente`
--

LOCK TABLES `tpaciente` WRITE;
/*!40000 ALTER TABLE `tpaciente` DISABLE KEYS */;
INSERT INTO `tpaciente` VALUES (1,'Gabriel Madrigal',20,'Dolor de cabeza','2022-03-29'),(2,'Dylan Cascante',30,'dolor de rodilla','2025-06-20'),(3,'Daniel',25,'gastritis','2025-02-23');
/*!40000 ALTER TABLE `tpaciente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `trol`
--

DROP TABLE IF EXISTS `trol`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `trol` (
  `IdRol` int(11) NOT NULL AUTO_INCREMENT,
  `NombreRol` varchar(50) NOT NULL,
  PRIMARY KEY (`IdRol`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `trol`
--

LOCK TABLES `trol` WRITE;
/*!40000 ALTER TABLE `trol` DISABLE KEYS */;
INSERT INTO `trol` VALUES (1,'Usuario Regular'),(2,'Usuario Administrador');
/*!40000 ALTER TABLE `trol` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tusuario`
--

DROP TABLE IF EXISTS `tusuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tusuario` (
  `IdUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(255) NOT NULL,
  `Correo` varchar(100) NOT NULL,
  `Identificacion` varchar(20) NOT NULL,
  `Contrasenna` varchar(10) NOT NULL,
  `IdRol` int(11) NOT NULL,
  `Estado` bit(1) NOT NULL,
  PRIMARY KEY (`IdUsuario`),
  KEY `FK_tusuario_trol` (`IdRol`),
  CONSTRAINT `FK_tusuario_trol` FOREIGN KEY (`IdRol`) REFERENCES `trol` (`IdRol`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tusuario`
--

LOCK TABLES `tusuario` WRITE;
/*!40000 ALTER TABLE `tusuario` DISABLE KEYS */;
INSERT INTO `tusuario` VALUES (1,'MELISSA BONILLA BONILLA','melissa@gmail.com','119390318','G0BIWEJI',1,_binary ''),(2,'KENDALL ESTEBAN CALDERON ACUÑA','kendall@gmail.com','119300547','9092',2,_binary ''),(6,'JOSTHYN STEVEN UMAÑA SALAS','josthyn4899@gmail.com','402430812','Salas.4899',1,_binary '');
/*!40000 ALTER TABLE `tusuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'dbproyectoweb'
--
/*!50003 DROP PROCEDURE IF EXISTS `actualizaContrasenna` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `actualizaContrasenna`(pIdUsuario bigint(11), pContrasenna varchar(10))
BEGIN
      UPDATE tusuario
      SET Contrasenna = pContrasenna
	 WHERE IdUsuario = pIdUsuario;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `ActualizarMedicamento` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `ActualizarMedicamento`(mIdMedicamento bigint(11),
	 mNombre varchar(100),
	 mPrincipio_activo varchar(100),
     mConcentracion varchar(100),
     mForma_farmaceutica varchar(100),
     mFecha_vencimiento date,
     mProveedor varchar(100),
     mCantidad int(11),
     mImagen varchar(255))
BEGIN

UPDATE 	tmedicamento
	SET		Nombre = mNombre,
			Principio_activo = mPrincipio_activo,
			Concentracion = mConcentracion,
            Forma_farmaceutica = mForma_farmaceutica,
            Fecha_vencimiento = mFecha_vencimiento,
            Proveedor = mProveedor,
			Cantidad = mCantidad,
			Imagen = CASE WHEN mImagen != '' THEN mImagen ELSE Imagen END
	WHERE 	IdMedicamento = mIdMedicamento;

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `ActualizarPaciente` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `ActualizarPaciente`(pIdPaciente int(11),
	pNombrePaciente varchar(200), 
    pedadPaciente int(11),
    pdiagnostico varchar(200),
    pfecha DATE)
BEGIN

UPDATE tpaciente
	SET
		NombrePaciente = pNombrePaciente,
		edadPaciente =  pedadPaciente,
		diagnostico = pdiagnostico,
		fecha = pfecha
WHERE IdPaciente = pIdPaciente;

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `ActualizarPerfilUsuario` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `ActualizarPerfilUsuario`(pIdUsuario bigint(11),
	 pNombre varchar(255),
	 pCorreo varchar(100),
     pIdentificacion varchar(20),
     pIdRol int(11))
BEGIN
	UPDATE tusuario
    SET Nombre = pNombre,
        Correo = pCorreo,
        Identificacion = pIdentificacion,
        IdRol = CASE WHEN pIdRol != -1 then pIdRol ELSE IdRol END
	WHERE IdUsuario = pIdUsuario;
    
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `CambiarEstadoMedicamento` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `CambiarEstadoMedicamento`(mIdMedicamento bigint(11))
BEGIN

	UPDATE tmedicamento
    SET   Estado = CASE WHEN Estado = 1 THEN 0 ELSE 1 END
	WHERE IdMedicamento = mIdMedicamento;

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `CambiarEstadoUsuario` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `CambiarEstadoUsuario`(pIdUsuario bigint(11))
BEGIN

	UPDATE tusuario
    SET   Estado = CASE WHEN Estado = 1 THEN 0 ELSE 1 END
	WHERE IdUsuario = pIdUsuario;

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `ConsultarInfoMedicamento` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `ConsultarInfoMedicamento`(mIdMedicamento bigint(11))
BEGIN
SELECT IdMedicamento,
			Nombre,
			Principio_activo,
			Concentracion,
            Forma_farmaceutica,
            Fecha_vencimiento,
            Proveedor,
			Cantidad,
			Estado,
			Imagen
            	FROM 	tmedicamento
	WHERE 	IdMedicamento = mIdMedicamento;

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `consultarInfoPaciente` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `consultarInfoPaciente`(pIdPaciente int(11))
BEGIN

SELECT IdPaciente,
		NombrePaciente,
		edadPaciente,
		diagnostico,
		fecha
FROM tpaciente
	WHERE IdPaciente = pIdPaciente;

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `consultarInfoUsuario` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `consultarInfoUsuario`(pIdUsuario bigint(11))
BEGIN

SELECT IdUsuario,
       Nombre,
       Correo,
       Identificacion,
       Contrasenna,
        Estado,
       U.IdRol,
       R.NombreRol,
       (CASE WHEN Estado =1 THEN 'activo' ELSE 'inactivo' END)'EstadoDescripcion'
       FROM tusuario U
	INNER JOIN tRol R ON U.IdRol = R.IdRol
       WHERE  IdUsuario = pIdUsuario;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `ConsultarMedicamentos` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `ConsultarMedicamentos`(mEstado int(11))
BEGIN
	SELECT 	IdMedicamento,
			Nombre,
			Principio_activo,
			Concentracion,
            Forma_farmaceutica,
            Fecha_vencimiento,
            Proveedor,
			Cantidad,
			Estado,
            (CASE WHEN Estado = 1 THEN 'Activo' ELSE 'Inactivo' END) 'EstadoDescripcion',
			Imagen
	FROM 	tmedicamento
    WHERE 	Estado = CASE WHEN mEstado = -1 THEN Estado ELSE mEstado END;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `consultarMedicos` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `consultarMedicos`()
BEGIN

SELECT IdMedico,
		Nombre
FROM tmedico;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `consultarPacientes` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `consultarPacientes`()
BEGIN
SELECT IdPaciente,
    NombrePaciente,
    edadPaciente,
	diagnostico,
		fecha
FROM tpaciente;

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `ConsultarProductos` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `ConsultarProductos`(mEstado int(11))
BEGIN
	SELECT 	IdMedicamento,
			Nombre,
			Principio_activo,
			Concentracion,
            Forma_farmaceutica,
            Fecha_vencimiento,
            Proveedor,
			Cantidad,
			Estado,
            (CASE WHEN Estado = 1 THEN 'Activo' ELSE 'Inactivo' END) 'EstadoDescripcion',
			Imagen
	FROM 	tmedicamento
    WHERE 	Estado = CASE WHEN mEstado = -1 THEN Estado ELSE mEstado END;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `ConsultarRoles` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `ConsultarRoles`()
BEGIN

SELECT  IdRol,
       NombreRol
       FROM tRol;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `ConsultarUsuarios` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `ConsultarUsuarios`()
BEGIN

SELECT IdUsuario,
       Nombre,
       Correo,
       Identificacion,
       Contrasenna,
       Estado,
       U.IdRol,
       R.NombreRol,
       (CASE WHEN Estado =1 THEN 'activo' ELSE 'inactivo' END)'EstadoDescripcion'
       FROM tusuario U
        INNER JOIN tRol R ON U.IdRol = R.IdRol;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `RegistrarCita` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `RegistrarCita`(
    IN p_idusuario INT,
    IN p_fecha DATE,
    IN p_hora TIME,
    IN p_motivo VARCHAR(255),
    IN p_idmedico INT
)
BEGIN
    INSERT INTO tcita (IdUsuario, IdMedico, Fecha, Hora, Motivo)
    VALUES (p_idusuario, p_idmedico, p_fecha, p_hora, p_motivo);
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `RegistrarError` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `RegistrarError`(pDescripcion varchar(5000))
BEGIN

INSERT INTO terror(Descripcion, fechaHora)
VALUES (pDescripcion, NOW());

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `RegistrarMedicamento` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `RegistrarMedicamento`(mNombre varchar(100),
	 mPrincipio_activo varchar(100),
     mConcentracion varchar(100),
     mForma_farmaceutica varchar(100),
     mFecha_vencimiento date,
     mProveedor varchar(100),
     mCantidad int(11),
     mImagen varchar(255))
BEGIN
INSERT INTO tmedicamento (Nombre,Principio_activo,Concentracion,Forma_farmaceutica,Fecha_vencimiento,Proveedor,Cantidad,Estado,Imagen)
	VALUES (mNombre,mPrincipio_activo,mConcentracion,mForma_farmaceutica,mFecha_vencimiento,mProveedor,mCantidad,1,mImagen);

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `RegistrarPaciente` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `RegistrarPaciente`(pNombrePaciente varchar(200),
	 pedadPaciente int(11),
     pdiagnostico varchar(200),
     pfecha DATE)
BEGIN
INSERT INTO tpaciente (NombrePaciente, edadPaciente, diagnostico, fecha)
VALUES (pNombrePaciente, pedadPaciente, pdiagnostico, pfecha);
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `RegistrarUsuario` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `RegistrarUsuario`(pNombre varchar(255),
	 pCorreo varchar(100),
     pIdentificacion varchar(20),
     pContrasenna varchar(10))
BEGIN

	INSERT INTO tusuario(Nombre,Correo,Identificacion,Contrasenna,IdRol,Estado)
	VALUES (pNombre,pCorreo,pIdentificacion,pContrasenna,1,1);
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `validarCorreo` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `validarCorreo`(pCorreo varchar(100))
BEGIN
SELECT	    Nombre,
            IdUsuario
	FROM tusuario
    WHERE Correo = pCorreo;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `validarInicioSesion` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `validarInicioSesion`(
pCorreo varchar(100),
pContrasenna varchar(10)
)
BEGIN
SELECT	IdUsuario,
			Nombre,
			Correo,
			Identificacion,
            Contrasenna,
            U.IdRol,
            NombreRol
	FROM tusuario U 
	INNER JOIN trol R ON U.IdRol = R.IdRol
    WHERE Correo = pCorreo
    AND Contrasenna = pContrasenna
    AND Estado =1;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-08-20  2:09:21
