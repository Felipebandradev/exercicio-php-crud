# Resolução do Banco de Dados

1) criação do banco de dados:
```sql
CREATE DATABASE crud_escola_felipe_barbosa CHARACTER SET utf8mb4;
```

2) Criação da Tabela alunos:
```sql
CREATE TABLE alunos(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(30) NOT NULL,
    primeira DECIMAL(4,2) NOT NULL,
    segunda DECIMAL(4,2) NOT NULL
);
```

