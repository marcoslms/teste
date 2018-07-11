-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           5.7.14 - MySQL Community Server (GPL)
-- OS do Servidor:               Win32
-- HeidiSQL Versão:              9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para desafio
CREATE DATABASE IF NOT EXISTS `desafio` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `desafio`;

-- Copiando estrutura para tabela desafio.ta_tarefas
CREATE TABLE IF NOT EXISTS `ta_tarefas` (
  `id_ta` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `titulo_ta` varchar(50) DEFAULT NULL,
  `desc_ta` varchar(100) DEFAULT NULL,
  `status_ta` char(1) NOT NULL DEFAULT '1',
  `id_us_ta` int(11) DEFAULT NULL,
  `dt_cadastro` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_ta`),
  KEY `id_us_ta` (`id_us_ta`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.
-- Copiando estrutura para tabela desafio.us_usuarios_sistema
CREATE TABLE IF NOT EXISTS `us_usuarios_sistema` (
  `id_us` int(11) NOT NULL AUTO_INCREMENT,
  `nome_us` varchar(50) DEFAULT NULL,
  `login_us` varchar(50) NOT NULL,
  `senha_us` varchar(50) NOT NULL,
  `status_us` char(1) NOT NULL DEFAULT '1' COMMENT '1:ativo; 0:inativo;',
  `dt_acesso_us` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_us`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela desafio.us_usuarios_sistema: 2 rows
/*!40000 ALTER TABLE `us_usuarios_sistema` DISABLE KEYS */;
INSERT INTO `us_usuarios_sistema` (`id_us`, `nome_us`, `login_us`, `senha_us`, `status_us`, `dt_acesso_us`) VALUES
	(1, 'teste1', 'teste1', 'e959088c6049f1104c84c9bde5560a13', '1', '2018-07-11 00:19:27'),
	(2, 'teste2', 'teste2', '38851536d87701d2191990e24a7f8d4e', '1', '2018-07-11 00:18:42'),
	(3, 'teste3', 'teste3', '507eb04c9c427e9f961e47a7204fac41', '1', '2018-07-11 00:17:59');
/*!40000 ALTER TABLE `us_usuarios_sistema` ENABLE KEYS */;


-- Exportação de dados foi desmarcado.
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
