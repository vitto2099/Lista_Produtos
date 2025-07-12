# Sistema de Produtos — Laravel

Sistema desenvolvido para a disciplina de **Desenvolvimento Web I**, ministrada pelo professor **Leandro Bona**, no curso de **Engenharia de Software (3º período)** da **Universidade do Contestado (UNC)**.

Projeto desenvolvido por **Vitor Camargo Kunicki**.

---

## Objetivo do Projeto

Criar uma aplicação web funcional e moderna para gerenciamento de produtos utilizando o framework **Laravel**, com os seguintes recursos:

- CRUD completo (cadastrar, listar, editar e excluir produtos)
- Uso de Blade Templates
- Estilização com Tailwind CSS e layout responsivo
- Associação de produtos com categorias
- Banco de dados relacional (MySQL)
- Feedbacks visuais ao usuário

---

## Tecnologias Utilizadas

- Laravel 10+
- PHP 8.1+
- Tailwind CSS
- Blade Templating Engine
- Vite (build de assets)
- Font Awesome (ícones)
- Banco de dados: **MySQL**

---

## Como Rodar o Projeto Localmente

### 1. Clonar o repositório

```bash
git clone https://github.com/seu-usuario/sistema-produtos.git
cd sistema-produtos

### 2. Instalar as dependências PHP e JavaScript
composer install
npm install

### 3. Compilar os assets com Vite
npm run dev

### 4. Rodar o servidor de desenvolvimento
php artisan serve