# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: localhost (MySQL 5.5.5-10.1.21-MariaDB)
# Database: car_rental
# Generation Time: 2017-06-25 23:20:36 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table cars
# ------------------------------------------------------------

DROP TABLE IF EXISTS `cars`;

CREATE TABLE `cars` (
  `make` varchar(255) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `serial_no` int(11) DEFAULT NULL,
  `capacity` int(11) DEFAULT NULL,
  `year` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `availability` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `cars` WRITE;
/*!40000 ALTER TABLE `cars` DISABLE KEYS */;

INSERT INTO `cars` (`make`, `model`, `type`, `color`, `serial_no`, `capacity`, `year`, `price`, `availability`)
VALUES
	('Bentley','Bentayga','SUV','Purple',123,5,2014,400,'Y'),
	('Bentley','Bentayga','SUV','Red',124,5,2011,400,'Y'),
	('Bentley','Bentayga','SUV','Gold',125,5,2013,400,'Y'),
	('Bentley','Continental Supersports','Coupe','Silver',213,4,2016,500,'Y'),
	('Bentley','Continental Supersports','Coupe','Red',214,4,2017,500,'Y'),
	('Bentley','Continental Supersports','Coupe','Green',215,4,2016,500,'Y'),
	('Bentley','Flying Spur','Sedan','Silver',313,5,2015,450,'Y'),
	('Bentley','Flying Spur','Sedan','Gold',314,5,2014,450,'Y'),
	('Bentley','Flying Spur','Sedan','Brown',315,5,2013,450,'Y'),
	('Bentley','Flying Spur','Sedan','Red',316,5,2012,450,'Y'),
	('Ferrari','California T','Coupe','Red',421,4,2012,550,'Y'),
	('Ferrari','California T','Coupe','Blue',422,4,2017,550,'Y'),
	('Ferrari','California T','Coupe','Black',423,4,2016,550,'Y'),
	('Ferrari','488 GTB','Coupe','Gold',424,2,2016,600,'Y'),
	('Ferrari','488 GTB','Coupe','Pink',425,2,2015,600,'Y'),
	('Ferrari','488 GTB','Coupe','Silver',426,2,2011,600,'Y'),
	('Ferrari','488 GTB','Coupe','Blue',427,2,2012,600,'Y'),
	('Ferrari','La Ferrari','Coupe','Black',521,2,2013,650,'Y'),
	('Ferrari','La Ferrari','Coupe','Blue',522,2,2013,650,'Y'),
	('Ferrari','La Ferrari','Coupe','Green',523,2,2017,650,'Y'),
	('Maserati','Ghibli M157','Sedan','White',131,4,2017,450,'Y'),
	('Maserati','Ghibli M157','Sedan','Red',132,4,2017,450,'Y'),
	('Maserati','Ghibli M157','Sedan','Blue',133,4,2016,450,'Y'),
	('Maserati','Ghibli M157','Sedan','Silver',134,4,2016,450,'Y'),
	('Maserati','Levante','SUV','Silver',231,5,2015,400,'Y'),
	('Maserati','Levante','SUV','Gold',232,5,2014,400,'Y'),
	('Maserati','Levante','SUV','White',233,5,2014,400,'Y'),
	('Maserati','Levante','SUV','Black',234,5,2013,400,'Y'),
	('Maserati','Quattroporte','Sedan','Blue',331,5,2013,500,'Y'),
	('Maserati','Quattroporte','Sedan','Black',332,5,2014,500,'Y'),
	('Mercedes-Benz','S-Class','Sedan','Silver',141,5,2016,500,'Y'),
	('Mercedes-Benz','S-Class','Sedan','Red',142,5,2016,500,'Y'),
	('Mercedes-Benz','S-Class','Sedan','Blue',143,5,2014,500,'Y'),
	('Mercedes-Benz','C-Class','Sedan','White',241,5,2015,300,'Y'),
	('Mercedes-Benz','C-Class','Sedan','Gold',242,5,2015,300,'Y'),
	('Mercedes-Benz','C-Class','Sedan','Red',243,5,2014,300,'Y'),
	('Mercedes-Benz','GLS','SUV','Silver',341,5,2017,600,'Y'),
	('Mercedes-Benz','GLS','SUV','Gold',342,5,2017,600,'Y'),
	('Mercedes-Benz','GLS','SUV','Red',343,5,2016,600,'Y'),
	('Mercedes-Benz','GLS','SUV','Black',344,5,2017,600,'Y'),
	('BMW','3 Series','Sedan','Black',151,5,2016,300,'Y'),
	('BMW','3 Series','Sedan','Blue',152,5,2017,300,'Y'),
	('BMW','3 Series','Sedan','Red',153,5,2017,300,'Y'),
	('BMW','5 Series','Sedan','Blue',251,5,2016,450,'Y'),
	('BMW','5 Series','Sedan','Red',252,5,2015,450,'Y'),
	('BMW','5 Series','Sedan','White',253,5,2016,450,'Y'),
	('BMW','2 Series','Coupe','Red',351,4,2017,250,'Y'),
	('BMW','2 Series','Coupe','White',352,4,2017,250,'Y'),
	('BMW','2 Series','Coupe','Black',353,4,2016,250,'Y'),
	('BMW','2 Series','Coupe','Green',354,4,2015,250,'Y');

/*!40000 ALTER TABLE `cars` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table company
# ------------------------------------------------------------

DROP TABLE IF EXISTS `company`;

CREATE TABLE `company` (
  `location` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `owners` varchar(255) DEFAULT NULL,
  `short_code` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `company` WRITE;
/*!40000 ALTER TABLE `company` DISABLE KEYS */;

INSERT INTO `company` (`location`, `name`, `owners`, `short_code`)
VALUES
	('123 South Calgary Trail','South Calgary ABA Rental','Alan Alansman','YYC_South'),
	('255 North Calgary Trail','North Calgary ABA Rental','Alan Brockman','YYC_North');

/*!40000 ALTER TABLE `company` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table customers
# ------------------------------------------------------------

DROP TABLE IF EXISTS `customers`;

CREATE TABLE `customers` (
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `cnumber` int(11) DEFAULT NULL,
  `dlicense` bigint(11) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `resident` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `customers` WRITE;
/*!40000 ALTER TABLE `customers` DISABLE KEYS */;

INSERT INTO `customers` (`fname`, `lname`, `cnumber`, `dlicense`, `age`, `resident`, `gender`, `username`, `password`)
VALUES
	('Alana','Driversby',123456,123456789,25,'AB','F','alana@nomail.com',3214),
	('Alan','Alansworth',987654,133456789,24,'BC','M','alan@nomail.com',3232),
	('Cooper','Cadsworth',587534,986754382,21,'ON','M','cooper@nomail.com',5454),
	('Derrick','Drips',578742,364527183,25,'MB','M','derrick@nomail.com',6565),
	('Chrissy','Klawk',751235,321321312,21,'PE','F','chrissy@nomail.com',7676),
	('Brianna','Xander',782100,654654654,25,'YT','F','brianna@nomail.com',4344),
	('Veronica','Lodge',985522,888999000,22,'NS','F','veronica@nomail.com',9796),
	('Betty','Cooper',336655,970960593,25,'NU','F','betty@nomail.com',6043),
	('Archie','Andrews',665522,563018920,23,'NT','M','archie@nomail.com',2389);

/*!40000 ALTER TABLE `customers` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table employees
# ------------------------------------------------------------

DROP TABLE IF EXISTS `employees`;

CREATE TABLE `employees` (
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `sin` bigint(11) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `employees` WRITE;
/*!40000 ALTER TABLE `employees` DISABLE KEYS */;

INSERT INTO `employees` (`fname`, `lname`, `sin`, `position`, `username`, `password`)
VALUES
	('Albert','Einstein',555444666,'Manager','admin','admin'),
	('Corey','Feld',444777888,'Assisstant Manager','admin','admin'),
	('Emily','Erinson',888777888,'Employee','admin','admin'),
	('Alex','Alexson',554455655,'Assisstant Manager','admin','admin'),
	('Megan','Meganson',888888888,'Employee','admin','admin'),
	('Eric','Ericson',111111111,'Employee','admin','admin'),
	('Peter','Peterpeter',222225555,'Employee','admin','admin'),
	('Wagoning','Wheel',789456123,'Owner','admin','admin'),
	('Sherlock','Holmes',123456789,'Employee','admin','admin'),
	('Watson','Watson',987654321,'Temp','admin','admin'),
	('Fenton','Notnef',454566789,'Employee','admin','admin'),
	('Xander','Cage',909090908,'Temp','admin','admin'),
	('Thomas','Edison',222333444,'Employee','admin','admin'),
	('Ingrid','Wilson',555777888,'Employee','admin','admin');

/*!40000 ALTER TABLE `employees` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table insurance
# ------------------------------------------------------------

DROP TABLE IF EXISTS `insurance`;

CREATE TABLE `insurance` (
  `coverage` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `policy` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `insurance` WRITE;
/*!40000 ALTER TABLE `insurance` DISABLE KEYS */;

INSERT INTO `insurance` (`coverage`, `price`, `policy`)
VALUES
	(1,800,'Full Coverage'),
	(2,350,'Collision'),
	(3,350,'Personal Accident'),
	(4,250,'Personal Effects Coverage'),
	(5,250,'Supplemental Liability '),
	(0,0,'No Coverage');

/*!40000 ALTER TABLE `insurance` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table merchanics
# ------------------------------------------------------------

DROP TABLE IF EXISTS `merchanics`;

CREATE TABLE `merchanics` (
  `name` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `charges` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `merchanics` WRITE;
/*!40000 ALTER TABLE `merchanics` DISABLE KEYS */;

INSERT INTO `merchanics` (`name`, `location`, `charges`)
VALUES
	('Wayne Rench','123 South Calgary Trail','$250 '),
	('Darren Rill','123 South Calgary Trail','$250 '),
	('Steven Crewdriver','255 North Calgary Trail','$250 '),
	('Hank Ammer','255 North Calgary Trail','$250 ');

/*!40000 ALTER TABLE `merchanics` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table rental_lot
# ------------------------------------------------------------

DROP TABLE IF EXISTS `rental_lot`;

CREATE TABLE `rental_lot` (
  `type` varchar(255) DEFAULT NULL,
  `capacity` int(11) DEFAULT NULL,
  `locaion` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `rental_lot` WRITE;
/*!40000 ALTER TABLE `rental_lot` DISABLE KEYS */;

INSERT INTO `rental_lot` (`type`, `capacity`, `locaion`)
VALUES
	('Indoor',50,'YYC_South'),
	('Outdoor',50,'YYC_North');

/*!40000 ALTER TABLE `rental_lot` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table reservations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `reservations`;

CREATE TABLE `reservations` (
  `reservation` int(11) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `sub_total` int(11) DEFAULT NULL,
  `pickup_date` varchar(255) DEFAULT NULL,
  `drop_date` varchar(255) DEFAULT NULL,
  `vin` int(11) DEFAULT NULL,
  `license` bigint(11) DEFAULT NULL,
  `coverage` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `reservations` WRITE;
/*!40000 ALTER TABLE `reservations` DISABLE KEYS */;

INSERT INTO `reservations` (`reservation`, `location`, `sub_total`, `pickup_date`, `drop_date`, `vin`, `license`, `coverage`)
VALUES
	(1,'YYC_South',2000,'23/05/2017','28/05/2017',123,123456789,1),
	(2,'YYC_North',1200,'21/08/2017','24/08/2017',124,133456789,2),
	(3,'YYC_South',5400,'14/11/2017','23/11/2017',427,986754382,3),
	(4,'YYC_South',2600,'01/12/2017','05/12/2017',521,364527183,4),
	(5,'YYC_North',2250,'23/09/2017','28/09/2017',134,321321312,4),
	(6,'YYC_North',1000,'20/09/2017','22/09/2017',332,654654654,5),
	(7,'YYC_North',10000,'08/07/2017','28/07/2017',141,888999000,3),
	(8,'YYC_South',1600,'01/04/2017','05/04/2017',231,970960593,2),
	(9,'YYC_North',3000,'23/07/2017','28/07/2017',344,563018920,1),
	(10,'YYC_South',300,'27/06/2017','28/06/2017',151,133456789,0);

/*!40000 ALTER TABLE `reservations` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
