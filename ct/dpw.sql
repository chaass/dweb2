/*
SQLyog Ultimate v9.63 
MySQL - 5.5.32 : Database - dpw
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`dpw` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `dpw`;

/*Table structure for table `citas` */

DROP TABLE IF EXISTS `citas`;

CREATE TABLE `citas` (
  `carnet` int(11) NOT NULL,
  `identificacion` int(11) DEFAULT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `dia` date DEFAULT NULL,
  `doctor` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`carnet`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `citas` */

LOCK TABLES `citas` WRITE;

insert  into `citas`(`carnet`,`identificacion`,`nombre`,`dia`,`doctor`) values (8,666,'888','2014-11-04','oooo'),(11,12,'ya','0000-00-00','ya'),(12345,2147483647,'chaaaaaas','2014-11-26','Si'),(4356788,4354,'isadk','2014-11-12','Si'),(1234567878,4354,'isadk','2014-11-12','Si');

UNLOCK TABLES;

/*Table structure for table `datos` */

DROP TABLE IF EXISTS `datos`;

CREATE TABLE `datos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(25) NOT NULL,
  `apellido` varchar(25) NOT NULL,
  `documento` int(12) NOT NULL,
  `carnet` int(14) NOT NULL,
  `correo` varchar(25) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `contrasena` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `datos` */

LOCK TABLES `datos` WRITE;

insert  into `datos`(`id`,`nombre`,`apellido`,`documento`,`carnet`,`correo`,`usuario`,`contrasena`) values (1,'isaac','david',12345678,0,'isadk@hotmial.com','isaacd','isaac'),(8,'','',0,0,'','','');

UNLOCK TABLES;

/*Table structure for table `quejas` */

DROP TABLE IF EXISTS `quejas`;

CREATE TABLE `quejas` (
  `identificacion` int(11) DEFAULT NULL,
  `nombre` varchar(40) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `ciudad` varchar(40) DEFAULT NULL,
  `motivo` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `quejas` */

LOCK TABLES `quejas` WRITE;

insert  into `quejas`(`identificacion`,`nombre`,`fecha`,`ciudad`,`motivo`) values (2333,'ggg','2014-11-04','fgfgg','ggggggg');

UNLOCK TABLES;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
