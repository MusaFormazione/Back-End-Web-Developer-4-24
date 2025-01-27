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


-- Dump della struttura del database join2
CREATE DATABASE IF NOT EXISTS `join2` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `join2`;

-- Dump della struttura di tabella join2.ordini
CREATE TABLE IF NOT EXISTS `ordini` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `data` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK__utenti` (`user_id`),
  CONSTRAINT `FK__utenti` FOREIGN KEY (`user_id`) REFERENCES `utenti` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dump dei dati della tabella join2.ordini: ~0 rows (circa)
/*!40000 ALTER TABLE `ordini` DISABLE KEYS */;
INSERT INTO `ordini` (`id`, `user_id`, `data`) VALUES
	(1, 2, '2025-01-27');
INSERT INTO `ordini` (`id`, `user_id`, `data`) VALUES
	(2, 2, '2025-01-20');
INSERT INTO `ordini` (`id`, `user_id`, `data`) VALUES
	(3, 1, '2025-01-25');
INSERT INTO `ordini` (`id`, `user_id`, `data`) VALUES
	(4, 3, '2025-01-27');
INSERT INTO `ordini` (`id`, `user_id`, `data`) VALUES
	(5, 3, '2025-01-27');
INSERT INTO `ordini` (`id`, `user_id`, `data`) VALUES
	(6, 3, '2025-01-27');
/*!40000 ALTER TABLE `ordini` ENABLE KEYS */;

-- Dump della struttura di tabella join2.ordini_prodotti
CREATE TABLE IF NOT EXISTS `ordini_prodotti` (
  `order_id` int NOT NULL,
  `product_id` int NOT NULL,
  `quantity` int(10) unsigned zerofill NOT NULL,
  KEY `FK__ordini` (`order_id`),
  KEY `FK__prodotti` (`product_id`),
  CONSTRAINT `FK__ordini` FOREIGN KEY (`order_id`) REFERENCES `ordini` (`id`),
  CONSTRAINT `FK__prodotti` FOREIGN KEY (`product_id`) REFERENCES `prodotti` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dump dei dati della tabella join2.ordini_prodotti: ~0 rows (circa)
/*!40000 ALTER TABLE `ordini_prodotti` DISABLE KEYS */;
INSERT INTO `ordini_prodotti` (`order_id`, `product_id`, `quantity`) VALUES
	(1, 3, 0000000001);
INSERT INTO `ordini_prodotti` (`order_id`, `product_id`, `quantity`) VALUES
	(2, 1, 0000000010);
INSERT INTO `ordini_prodotti` (`order_id`, `product_id`, `quantity`) VALUES
	(3, 2, 0000000001);
INSERT INTO `ordini_prodotti` (`order_id`, `product_id`, `quantity`) VALUES
	(4, 3, 0000000001);
INSERT INTO `ordini_prodotti` (`order_id`, `product_id`, `quantity`) VALUES
	(4, 1, 0000000001);
INSERT INTO `ordini_prodotti` (`order_id`, `product_id`, `quantity`) VALUES
	(4, 2, 0000000003);
INSERT INTO `ordini_prodotti` (`order_id`, `product_id`, `quantity`) VALUES
	(5, 3, 0000000001);
INSERT INTO `ordini_prodotti` (`order_id`, `product_id`, `quantity`) VALUES
	(6, 2, 0000000005);
/*!40000 ALTER TABLE `ordini_prodotti` ENABLE KEYS */;

-- Dump della struttura di tabella join2.prodotti
CREATE TABLE IF NOT EXISTS `prodotti` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `prezzo` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dump dei dati della tabella join2.prodotti: ~0 rows (circa)
/*!40000 ALTER TABLE `prodotti` DISABLE KEYS */;
INSERT INTO `prodotti` (`id`, `nome`, `prezzo`) VALUES
	(1, 'Smartphone', 499.90);
INSERT INTO `prodotti` (`id`, `nome`, `prezzo`) VALUES
	(2, 'TV', 800.00);
INSERT INTO `prodotti` (`id`, `nome`, `prezzo`) VALUES
	(3, 'Asplirapolvere', 600.00);
/*!40000 ALTER TABLE `prodotti` ENABLE KEYS */;

-- Dump della struttura di tabella join2.utenti
CREATE TABLE IF NOT EXISTS `utenti` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dump dei dati della tabella join2.utenti: ~0 rows (circa)
/*!40000 ALTER TABLE `utenti` DISABLE KEYS */;
INSERT INTO `utenti` (`id`, `nome`, `email`) VALUES
	(1, 'Mario', 'mario@rossi.it');
INSERT INTO `utenti` (`id`, `nome`, `email`) VALUES
	(2, 'Giovanna', 'giovanna@verdi.it');
INSERT INTO `utenti` (`id`, `nome`, `email`) VALUES
	(3, 'Walter', 'walter@bianchi.it');
INSERT INTO `utenti` (`id`, `nome`, `email`) VALUES
	(4, 'Pippo', 'pippo@franco.it');
/*!40000 ALTER TABLE `utenti` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
