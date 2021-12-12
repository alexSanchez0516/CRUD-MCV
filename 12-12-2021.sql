-- MySQL dump 10.13  Distrib 8.0.26, for macos11 (x86_64)
--
-- Host: 127.0.0.1    Database: divisione_crud
-- ------------------------------------------------------
-- Server version	5.7.36

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
-- Table structure for table `clients`
--

DROP TABLE IF EXISTS `clients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `clients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `tlf` int(11) NOT NULL,
  `email` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clients`
--

LOCK TABLES `clients` WRITE;
/*!40000 ALTER TABLE `clients` DISABLE KEYS */;
/*!40000 ALTER TABLE `clients` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `service`
--

DROP TABLE IF EXISTS `service`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `service` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `serviceID` int(11) NOT NULL,
  `nameService` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_service` (`serviceID`),
  CONSTRAINT `fk_service` FOREIGN KEY (`serviceID`) REFERENCES `services` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `service`
--

LOCK TABLES `service` WRITE;
/*!40000 ALTER TABLE `service` DISABLE KEYS */;
INSERT INTO `service` VALUES (1,11,'Posicionamiento SEO, Posicionamiento SEM, Analítica e informes, Optimizacion web'),(5,4,'Diseño Coporativo,  Diseño de Banner,  Diseño de Sliders, Rediseño de marca, '),(8,6,'APIs de geolocalización,  APIs de pagos online,  APIs de plataformas e-commerce,  APIs de mensajería,  APIs de CRM y ERP,  APIs de Delivery\r\n\r\n\r\n\r\n'),(10,7,'Scraping de sitios web,   Automatización de tareas,   Beautiful Soup,  Desarrollo de Bots,  Extraer datos de una API'),(17,10,'Resolución de errores Wordpress, Optimización de aplicaciones web, Compresión de Imágenes, Anti Hack y Anti Spam, Actualizaciones web'),(27,47,'Desarrollo Backend,  Desarrollo Fronted,  Django/React,  PHP Master');
/*!40000 ALTER TABLE `service` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `services` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `description` text NOT NULL,
  `price` int(5) NOT NULL,
  `imageProduct` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `services`
--

LOCK TABLES `services` WRITE;
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
INSERT INTO `services` VALUES (4,'Diseño de logos',' Soluciones gráficas para todo tipo de necesidades, te ayudamos a darle forma a la imagen corporativa de tu empresa, para crear una marca sólida y original que generé a tus clientes confianza, y que pueda ser reconocida fácilmente.',50,'logos.webp'),(6,'API','Aprovecha los superpoderes de las integraciones API y desarrolla tus aplicaciones en tiempo récord. Desarrollaremos tu API de forma rápida y sencilla.',50,'api_04.png'),(7,'Scripting','  Proporcionamos scripts de scraping robustos y de alta calidad en Python (Scrapy, Selenium, Splash) o Node JS (usando Apify y Puppetter) que pueden hacer scraping en cualquier tipo de sitio web .',50,'code-icon-png-20.png'),(10,'Soporte del sitio web','Sabemos lo complicado y el tiempo que conlleva tener tu página web actualizada en todo momento y por ello, estamos encantados de ofrecerte nuestro servicio especial de mantenimiento de web y tiendas online al mejor precio.\r\n\r\nEl problema principal al que se enfrentan las pequeñas y medianas empresas que nos contactan, es que se les hace muy difícil tener contratado a alguien a tiempo completo para realizar la tarea de mantenimiento web. Por ello desde Divisione.es  te ofrecemos la solución. Nuestro servicio de mantenimiento web cubrirá exactamente lo que su empresa necesita, sin gastos extra.',50,'mantenimientoWeb.webp'),(11,'SEO','Los servicios de posicionamiento web se realizan con el fin de conseguir que tu blog, página web o tienda online pueda aparecer en los primeros resultados de las búsquedas de los usuarios, y ser visibles en las primeras posiciones de los motores de búsqueda (Google, Yahoo, Bing…).',50,'seo.webp'),(47,'Desarrollo Web','Nos enfocamos en desarrollar aplicaciones escalables e innovadoras para tu empresa. Vamos a construir una aplicación web que mejore y agilice los procesos de tu negocio. Todas nuestras aplicaciones web están adaptadas a responsive.\r\n\r\n\r\nProgressive Web Application - PWA\r\n\r\nLas PWA son una fusión entre una aplicación nativa y un sitio web. Usamos tecnologías responsive web design, CSS, HTML5 y JavaScript para desarrollarla. La experiencia de usuario en las PWA es poderosa y amigable con tu cliente.\r\n',100,'wedesign.webp');
/*!40000 ALTER TABLE `services` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(60) NOT NULL,
  `password` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'xymind','$2y$10$E3.nBXT5K3qdmIM9b85zmOiLRbgpTivgtl5ZbUdwS49IcR.G9Do7y','alexandervillegas0516@gmail.com'),(2,'admin','$2y$10$rvPeo8E5WcPvWIwOmOQcm.2gs1.9zzl.Ad0K.FMJtjsP7YZDpVUMC','alexandervillegas0516@gmail.com');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-12-12 15:07:24
