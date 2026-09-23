-- Copiando estrutura do banco de dados para db_pweb1_2026_1
CREATE DATABASE IF NOT EXISTS `db_pweb1_2026_1` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `db_pweb1_2026_1`;

-- Copiando estrutura para tabela db_pweb1_2026_1.usuario
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `cpf` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Copiando dados para a tabela db_pweb1_2026_1.usuario: ~2 rows (aproximadamente)
INSERT IGNORE INTO `usuario` (`id`, `nome`, `cpf`, `email`) VALUES
	(1, 'Ana', '12345678900', 'ana@gmail.com'),
	(2, 'Rogério', '09876543211', 'rogerio@gmail.com');