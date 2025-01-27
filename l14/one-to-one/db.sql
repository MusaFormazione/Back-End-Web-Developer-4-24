-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versione server:              8.0.30 - MySQL Community Server - GPL
-- S.O. server:                  Win64
-- HeidiSQL Versione:            11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dump della struttura del database join1
CREATE DATABASE IF NOT EXISTS `join1` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `join1`;

-- Dump della struttura di tabella join1.ordini
CREATE TABLE IF NOT EXISTS `ordini` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `data` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK__utenti` (`user_id`),
  CONSTRAINT `FK__utenti` FOREIGN KEY (`user_id`) REFERENCES `utenti` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dump dei dati della tabella join1.ordini: ~0 rows (circa)
/*!40000 ALTER TABLE `ordini` DISABLE KEYS */;
INSERT INTO `ordini` (`id`, `user_id`, `data`) VALUES
	(1, 2, '2025-01-27');
INSERT INTO `ordini` (`id`, `user_id`, `data`) VALUES
	(2, 3, '2025-01-23');
INSERT INTO `ordini` (`id`, `user_id`, `data`) VALUES
	(3, 3, '2024-12-15');
/*!40000 ALTER TABLE `ordini` ENABLE KEYS */;

-- Dump della struttura di tabella join1.prodotti
CREATE TABLE IF NOT EXISTS `prodotti` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `descrizione` mediumtext COLLATE utf8mb4_general_ci NOT NULL,
  `prezzo` decimal(10,2) unsigned zerofill NOT NULL DEFAULT '00000000.00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dump dei dati della tabella join1.prodotti: ~0 rows (circa)
/*!40000 ALTER TABLE `prodotti` DISABLE KEYS */;
INSERT INTO `prodotti` (`id`, `nome`, `descrizione`, `prezzo`) VALUES
	(1, 'Smartphonr', 'è fantastico', 00000500.00);
/*!40000 ALTER TABLE `prodotti` ENABLE KEYS */;

-- Dump della struttura di tabella join1.ruoli
CREATE TABLE IF NOT EXISTS `ruoli` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dump dei dati della tabella join1.ruoli: ~0 rows (circa)
/*!40000 ALTER TABLE `ruoli` DISABLE KEYS */;
INSERT INTO `ruoli` (`id`, `nome`) VALUES
	(1, 'admin');
INSERT INTO `ruoli` (`id`, `nome`) VALUES
	(2, 'customer');
INSERT INTO `ruoli` (`id`, `nome`) VALUES
	(3, 'editor');
INSERT INTO `ruoli` (`id`, `nome`) VALUES
	(4, 'subscriber');
/*!40000 ALTER TABLE `ruoli` ENABLE KEYS */;

-- Dump della struttura di tabella join1.utenti
CREATE TABLE IF NOT EXISTS `utenti` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `cognome` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `role_id` int NOT NULL,
  UNIQUE KEY `email` (`email`),
  KEY `id` (`id`),
  KEY `FK_utenti_ruoli` (`role_id`),
  CONSTRAINT `FK_utenti_ruoli` FOREIGN KEY (`role_id`) REFERENCES `ruoli` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dump dei dati della tabella join1.utenti: ~0 rows (circa)
/*!40000 ALTER TABLE `utenti` DISABLE KEYS */;
INSERT INTO `utenti` (`id`, `nome`, `cognome`, `email`, `role_id`) VALUES
	(2, 'Giovanni', 'Bianchi', 'giovanni@bianchi.it', 2);
INSERT INTO `utenti` (`id`, `nome`, `cognome`, `email`, `role_id`) VALUES
	(3, 'Luisa', 'Verdi', 'luisa@verdi.it', 3);
INSERT INTO `utenti` (`id`, `nome`, `cognome`, `email`, `role_id`) VALUES
	(1, 'Mario', 'Rossi', 'mario@rossi.it', 1);
INSERT INTO `utenti` (`id`, `nome`, `cognome`, `email`, `role_id`) VALUES
	(4, 'Marisa', 'Rossi', 'marisa@rossi.it', 1);
INSERT INTO `utenti` (`id`, `nome`, `cognome`, `email`, `role_id`) VALUES
	(5, 'Minim inventore plac', 'Est repellendus Et ', 'peja@mailinator.com', 2);
/*!40000 ALTER TABLE `utenti` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
