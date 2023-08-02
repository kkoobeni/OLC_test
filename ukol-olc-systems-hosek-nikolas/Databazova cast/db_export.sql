-- Adminer 4.8.1 MySQL 8.0.33 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `album`;
CREATE TABLE `album` (
  `id_album` int NOT NULL AUTO_INCREMENT,
  `id_typ_zanr` int DEFAULT NULL,
  `nazev` varchar(255) DEFAULT NULL,
  `datum_vydani` date DEFAULT NULL,
  PRIMARY KEY (`id_album`),
  KEY `id_typ_zanr` (`id_typ_zanr`),
  CONSTRAINT `album_ibfk_1` FOREIGN KEY (`id_typ_zanr`) REFERENCES `typ_zanr` (`id_typ_zanr`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `album` (`id_album`, `id_typ_zanr`, `nazev`, `datum_vydani`) VALUES
(1,	1,	'Circus',	'2023-01-15'),
(2,	2,	'Thursdays Child',	'2022-09-22'),
(3,	3,	'D-day',	'2023-05-10');

DROP TABLE IF EXISTS `album_interpret`;
CREATE TABLE `album_interpret` (
  `id_album_interpret` int NOT NULL AUTO_INCREMENT,
  `id_album` int DEFAULT NULL,
  `id_interpret` int DEFAULT NULL,
  PRIMARY KEY (`id_album_interpret`),
  KEY `id_album` (`id_album`),
  KEY `id_interpret` (`id_interpret`),
  CONSTRAINT `album_interpret_ibfk_1` FOREIGN KEY (`id_album`) REFERENCES `album` (`id_album`),
  CONSTRAINT `album_interpret_ibfk_2` FOREIGN KEY (`id_interpret`) REFERENCES `interpret` (`id_interpret`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `album_interpret` (`id_album_interpret`, `id_album`, `id_interpret`) VALUES
(1,	1,	1),
(2,	2,	2),
(3,	3,	3);

DROP TABLE IF EXISTS `album_skladba`;
CREATE TABLE `album_skladba` (
  `id_album_skladba` int NOT NULL AUTO_INCREMENT,
  `cislo_stopy` int DEFAULT NULL,
  `id_album` int DEFAULT NULL,
  `id_skladba` int DEFAULT NULL,
  PRIMARY KEY (`id_album_skladba`),
  KEY `id_album` (`id_album`),
  KEY `id_skladba` (`id_skladba`),
  CONSTRAINT `album_skladba_ibfk_1` FOREIGN KEY (`id_album`) REFERENCES `album` (`id_album`),
  CONSTRAINT `album_skladba_ibfk_2` FOREIGN KEY (`id_skladba`) REFERENCES `skladba` (`id_skladba`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `album_skladba` (`id_album_skladba`, `cislo_stopy`, `id_album`, `id_skladba`) VALUES
(1,	1,	1,	1),
(2,	2,	2,	2),
(3,	3,	3,	3);

DROP TABLE IF EXISTS `interpret`;
CREATE TABLE `interpret` (
  `id_interpret` int NOT NULL AUTO_INCREMENT,
  `nazev` varchar(255) DEFAULT NULL,
  `id_typ_narodnost` int DEFAULT NULL,
  PRIMARY KEY (`id_interpret`),
  KEY `id_typ_narodnost` (`id_typ_narodnost`),
  CONSTRAINT `interpret_ibfk_1` FOREIGN KEY (`id_typ_narodnost`) REFERENCES `typ_narodnost` (`id_typ_narodnost`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `interpret` (`id_interpret`, `nazev`, `id_typ_narodnost`) VALUES
(1,	'Jake',	1),
(2,	'Yoongi',	2),
(3,	'Felix',	3);

DROP TABLE IF EXISTS `skladba`;
CREATE TABLE `skladba` (
  `id_skladba` int NOT NULL AUTO_INCREMENT,
  `nazev` varchar(255) DEFAULT NULL,
  `delka` time DEFAULT NULL,
  PRIMARY KEY (`id_skladba`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `skladba` (`id_skladba`, `nazev`, `delka`) VALUES
(1,	'Song 1',	'04:30:00'),
(2,	'Song 2',	'03:55:00'),
(3,	'Song 3',	'05:15:00');

DROP TABLE IF EXISTS `typ_narodnost`;
CREATE TABLE `typ_narodnost` (
  `id_typ_narodnost` int NOT NULL AUTO_INCREMENT,
  `nazev` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_typ_narodnost`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `typ_narodnost` (`id_typ_narodnost`, `nazev`) VALUES
(1,	'Amerika'),
(2,	'Korea'),
(3,	'Austrálie');

DROP TABLE IF EXISTS `typ_zanr`;
CREATE TABLE `typ_zanr` (
  `id_typ_zanr` int NOT NULL AUTO_INCREMENT,
  `nazev` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_typ_zanr`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `typ_zanr` (`id_typ_zanr`, `nazev`) VALUES
(1,	'Pop'),
(2,	'K-Pop'),
(3,	'Hip-Hop');

-- 2023-08-02 21:15:41
