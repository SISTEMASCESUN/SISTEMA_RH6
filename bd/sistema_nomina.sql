-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: sistema_nomina
-- ------------------------------------------------------
-- Server version	5.7.21-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `directorio_emergencia`
--

DROP TABLE IF EXISTS `directorio_emergencia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `directorio_emergencia` (
  `id_matricula` varchar(50) DEFAULT NULL,
  `tel_emergencia` varchar(50) DEFAULT NULL,
  `nombre_emergencia` varchar(50) DEFAULT NULL,
  `parentesco_emercias` varchar(50) DEFAULT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `directorio_emergencia`
--

LOCK TABLES `directorio_emergencia` WRITE;
/*!40000 ALTER TABLE `directorio_emergencia` DISABLE KEYS */;
/*!40000 ALTER TABLE `directorio_emergencia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `directorio_laboral`
--

DROP TABLE IF EXISTS `directorio_laboral`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `directorio_laboral` (
  `id_matricula` varchar(50) DEFAULT NULL,
  `rfc` tinyint(1) DEFAULT '0',
  `curp` tinyint(1) DEFAULT '0',
  `imss` tinyint(1) DEFAULT '0',
  `contrato` tinyint(1) DEFAULT '0',
  `escolaridad` tinyint(1) DEFAULT '0',
  `nota` varchar(100) DEFAULT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `directorio_laboral`
--

LOCK TABLES `directorio_laboral` WRITE;
/*!40000 ALTER TABLE `directorio_laboral` DISABLE KEYS */;
/*!40000 ALTER TABLE `directorio_laboral` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `maestro_general`
--

DROP TABLE IF EXISTS `maestro_general`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `maestro_general` (
  `id_maestro` int(11) NOT NULL AUTO_INCREMENT,
  `id_matricula` varchar(50) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `ap` varchar(50) DEFAULT NULL,
  `am` varchar(50) DEFAULT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `pais` varchar(50) DEFAULT NULL,
  `estado` varchar(50) DEFAULT NULL,
  `ciudad` varchar(50) DEFAULT NULL,
  `tel_casa` varchar(50) DEFAULT NULL,
  `tel_cel` varchar(50) DEFAULT NULL,
  `sexo` varchar(50) DEFAULT NULL,
  `fecha_nacimiento` datetime DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_maestro`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `maestro_general`
--

LOCK TABLES `maestro_general` WRITE;
/*!40000 ALTER TABLE `maestro_general` DISABLE KEYS */;
/*!40000 ALTER TABLE `maestro_general` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `maestros_baja`
--

DROP TABLE IF EXISTS `maestros_baja`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `maestros_baja` (
  `id_matricula` varchar(50) DEFAULT NULL,
  `motivo` varchar(100) DEFAULT NULL,
  `fecha_renuncia` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `maestros_baja`
--

LOCK TABLES `maestros_baja` WRITE;
/*!40000 ALTER TABLE `maestros_baja` DISABLE KEYS */;
/*!40000 ALTER TABLE `maestros_baja` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `maestros_horarios`
--

DROP TABLE IF EXISTS `maestros_horarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `maestros_horarios` (
  `id_matricula` varchar(50) DEFAULT NULL,
  `materia` varchar(50) DEFAULT NULL,
  `modalidad` varchar(50) DEFAULT NULL,
  `dias_laborales` varchar(100) DEFAULT NULL,
  `horas` int(11) DEFAULT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `maestros_horarios`
--

LOCK TABLES `maestros_horarios` WRITE;
/*!40000 ALTER TABLE `maestros_horarios` DISABLE KEYS */;
/*!40000 ALTER TABLE `maestros_horarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `ap` varchar(50) DEFAULT NULL,
  `am` varchar(50) DEFAULT NULL,
  `user` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `tipo_usuario` int(11) DEFAULT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (17,'KINEC','VENTURA','ARROYO','TEST14','TEST14',1,'2018-11-01 20:33:09'),(19,'SI','SI','SI','SI','SI',0,'2018-11-01 20:33:09'),(27,'JOSE','JOSE','JOSE','JOSE','JOSE',1,'2018-11-07 04:03:07');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios2`
--

DROP TABLE IF EXISTS `usuarios2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `ap` varchar(50) DEFAULT NULL,
  `am` varchar(50) DEFAULT NULL,
  `user` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `tipo_usuario` int(11) DEFAULT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios2`
--

LOCK TABLES `usuarios2` WRITE;
/*!40000 ALTER TABLE `usuarios2` DISABLE KEYS */;
INSERT INTO `usuarios2` VALUES (1,'ramses','tamayo','ledesma','ramses','ramses',1,'2018-11-01 20:05:56');
/*!40000 ALTER TABLE `usuarios2` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'sistema_nomina'
--
/*!50003 DROP PROCEDURE IF EXISTS `actualiza` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `actualiza`(
nombre1 nvarchar(50),
id_user1 nvarchar(50)
)
BEGIN
update nombre set nombre=nombre1  where id_user=id_user1 ;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `actualiza_usuario` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `actualiza_usuario`(
id int,
nombre1 varchar(50),
ap1 varchar(50)
)
BEGIN
update usuarios set nombre=nombre1, ap=ap1  where id_user=id ;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `actualiza_usuario2` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `actualiza_usuario2`(
id_user1 int,
nombre1 nvarchar (50),
ap_paterno1 nvarchar(50),
ap_materno1 nvarchar (50),
user1 nvarchar (50),
password1 nvarchar(50),
tipo1 int
)
BEGIN
update usuarios set nombre=nombre1, ap=ap_paterno1, am=ap_materno1, user=user1,
 password=password1, tipo_usuario=tipo1 where id_user=id_user1;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `alta_usuario` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `alta_usuario`(
nombre varchar(50),
ap varchar(50),
am varchar(50),
user varchar(50),
password varchar(50),
tipo int
)
BEGIN
insert into usuarios (nombre,ap,am,user,password,tipo_usuario) values(nombre,ap,am,user,password,tipo);
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `alta_usuario2` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `alta_usuario2`(
nombre varchar(50),
ap varchar(50),
am varchar(50),
user varchar(50),
password varchar(50),
tipo int
)
BEGIN
insert into usuarios2 (nombre,ap,am,user,password,tipo_usuario) values(nombre,ap,am,user,password,tipo);
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

-- Dump completed on 2018-11-14  8:24:07
