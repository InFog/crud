# Projeto CRUD

Desenvolvimento de um projeto CRUD utilizando a linguagem PHP Orientada a Objetos com acesso ao banco de dados MySQL.

## Configuração do Banco de Dados

- Cria um banco de dados chamado **school**
```sql
create database if not exists school default character set utf8 default collate utf8_general_ci;
```

- Acessa o banco de dados
```sql
use school
```

- Cria uma tabela chamada **student**
```sql
create table if not exists student(id int unsigned not null auto_increment, name varchar(60), primary key(id)) default charset = utf8;
```
