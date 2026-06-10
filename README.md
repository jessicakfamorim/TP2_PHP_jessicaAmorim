# Simpa Baker

## Tema do Projeto

O Simpa Baker é uma aplicação web desenvolvida em PHP e MySQL que funciona como um livro digital de receitas. O sistema permite consultar receitas, visualizar detalhes, gerir categorias e administrar conteúdos através de uma área reservada a utilizadores autenticados.

---

## Tecnologias Utilizadas

### Front-end

* HTML5
* CSS
* Bootstrap 

### Back-end

* PHP 8

### Base de Dados

* MySQL

### Ferramentas de Desenvolvimento

* Visual Studio Code
* XAMPP
* Git
* GitHub

---

## Funcionalidades Principais

### Gestão de Receitas

* Listar receitas
* Visualizar detalhes de uma receita
* Adicionar receitas
* Editar receitas
* Eliminar receitas
* Upload de imagens

### Gestão de Categorias

* Listar categorias
* Adicionar categorias
* Editar categorias
* Eliminar categorias

### Sistema de Autenticação

* Registo de utilizadores
* Login
* Logout
* Gestão de sessões
* Proteção de páginas privadas

### Base de Dados Relacional

* Utilização de tabelas relacionadas
* Chaves primárias e estrangeiras
* Consultas com JOIN

### Segurança

* Prepared Statements (PDO)
* Validação de formulários
* Sanitização de dados com htmlspecialchars()
* Proteção contra SQL Injection
* Proteção contra acessos indevidos através de sessões

---

## Estrutura da Base de Dados

O projeto utiliza três tabelas principais:

### utilizadores

* id
* nome
* email
* password

### categoria

* id
* nome

### receitas

* id
* titulo
* ingredientes
* modo_preparo
* tempo_preparo
* rendimento
* origem
* imagem
* categoria_id

---

## Funcionalidades CRUD Implementadas

### Receitas

* Create
* Read
* Update
* Delete

### Categorias

* Create
* Read
* Update
* Delete

---

## Ideias Futuras

Algumas melhorias que poderão ser implementadas futuramente:

* Pesquisa avançada de receitas
* Filtro por categoria
* Recuperação de password
* Perfil de utilizador
* Sistema de favoritos
* Comentários e avaliações de receitas
* Paginação de resultados
* Dashboard administrativa

---

## Autor

Jéssica Amorim

Projeto desenvolvido no âmbito da formação de Programação Web com PHP e MySQL.
