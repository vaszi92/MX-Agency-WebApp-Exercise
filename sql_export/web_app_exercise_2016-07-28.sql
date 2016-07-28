# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.10)
# Database: web_app_exercise
# Generation Time: 2016-07-28 14:05:04 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table web_app_ex_notes
# ------------------------------------------------------------

CREATE TABLE `web_app_ex_notes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `content` text,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `web_app_ex_notes` WRITE;
/*!40000 ALTER TABLE `web_app_ex_notes` DISABLE KEYS */;

INSERT INTO `web_app_ex_notes` (`id`, `user_id`, `content`)
VALUES
	(1,1,'First!'),
	(2,1,'Here comes the second entry!!!'),
	(3,1,'Here comes the second!!!'),
	(4,1,'Here comes the second!!!'),
	(5,1,'Here comes the 2nd!'),
	(6,1,'Here comes the 2nd!'),
	(7,2,'The very first note for vaszi1.'),
	(8,2,'The second entry'),
	(9,2,'Itt a harmadik bejegyzes is!'),
	(10,6,'mmm'),
	(11,6,'mmm1'),
	(12,1,'Validated note post!'),
	(16,1,'Validates note 2'),
	(17,14,'Validated user 10 makes first valid post!'),
	(18,1,'Perhaps youâ€™ve already trained in Ruby On Rails, or you learned HTML at college, or youâ€™re a dab hand at Java. If so, now could be the perfect time to join the freelance movement and become your own boss.'),
	(19,1,'(*&Ë†%$#@!'),
	(20,1,'(*&amp;&circ;%$#@!');

/*!40000 ALTER TABLE `web_app_ex_notes` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table web_app_ex_users
# ------------------------------------------------------------

CREATE TABLE `web_app_ex_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL DEFAULT '',
  `password` varchar(60) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `web_app_ex_users` WRITE;
/*!40000 ALTER TABLE `web_app_ex_users` DISABLE KEYS */;

INSERT INTO `web_app_ex_users` (`id`, `username`, `password`)
VALUES
	(1,'vaszi92','ffb3f6ff6aa841a025a356eabcbad96d'),
	(2,'vaszi1','2b71a9245fdaecbbd9c7ffd2eadaa100'),
	(3,'user','5f4dcc3b5aa765d61d8327deb882cf99'),
	(4,'user1','24c9e15e52afc47c225b757e7bee1f9d'),
	(5,'user2','7e58d63b60197ceb55a1c487989a3720'),
	(6,'mmm','c4efd5020cb49b9d3257ffa0fbccc0ae'),
	(7,'user3','92877af70a45fd6a2ed7fe81e1236b78'),
	(8,'user4','3f02ebe3d7929b091e3d8ccfde2f3bc6'),
	(9,'user5','0a791842f52a0acfbb3a783378c066b8'),
	(10,'user6','affec3b64cf90492377a8114c86fc093'),
	(11,'user7','3e0469fb134991f8f75a2760e409c6ed'),
	(12,'user8','7668f673d5669995175ef91b5d171945'),
	(13,'user9','8808a13b854c2563da1a5f6cb2130868'),
	(14,'user10','990d67a9f94696b1abe2dccf06900322'),
	(15,'onlineuser','f50d48bb3affabc8a28d6aa7ba68455b'),
	(16,'onlineuser1','1a1dc91c907325c69271ddf0c944bc72'),
	(17,'ujfelhasznalo','e9f02daabdde2be6dbb06455aa8018f2'),
	(18,'vaszi93','0e9f99a4791457188eeca6d1becebfe7'),
	(19,'user11','03aa1a0b0375b0461c1b8f35b234e67a'),
	(20,'safepass','3079274e4b33f5d41f14c2ac185d8408'),
	(21,'malac','d3c75ed64860a036376ca5d8a6b96114'),
	(22,'vaszi933','1a1dc91c907325c69271ddf0c944bc72');

/*!40000 ALTER TABLE `web_app_ex_users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
